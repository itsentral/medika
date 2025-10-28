<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemeriksaan extends Admin_Controller
{
    //Permission
    protected $viewPermission   = 'Pemeriksaan.View';
    protected $addPermission    = 'Pemeriksaan.Add';
    protected $managePermission = 'Pemeriksaan.Manage';
    protected $deletePermission = 'Pemeriksaan.Delete';

    protected $id_user;
    protected $datetime;

    public function __construct()
    {
        parent::__construct();
        // $this->load->library(array( 'upload', 'Image_lib'));
        $this->load->model(array(
            'Pemeriksaan/Pemeriksaan_model'
        ));
        $this->template->title('Pemeriksaan');
        $this->template->page_icon('fa fa-building-o');

        date_default_timezone_set('Asia/Bangkok');

        $this->id_user  = $this->auth->user_id();
        $this->datetime = date('Y-m-d H:i:s');

        $this->template->set_theme('medika');
    }

    public function index()
    {
        $this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
        $this->template->page_icon('fa fa-table');

        $this->template->title('Pemeriksaan');
        $this->template->render('index');
    }

    public function add_pemeriksaan()
    {
        $data_kategori = $this->Pemeriksaan_model->get_all_kategori();

        $data = [
            'id' => '',
            'list_kategori' => $data_kategori
        ];

        $this->template->render('add_pemeriksaan', $data);
    }

    public function change_kategori()
    {
        $id_kategori = $this->input->post('id_kategori');

        $hasil = '<option value="">- Choose Kelompok Pemeriksaan -</option>';

        $get_kelompok_based_kategori = $this->Pemeriksaan_model->get_kelompok_based_kategori($id_kategori);

        foreach ($get_kelompok_based_kategori as $item) {
            $hasil .= '<option value="' . $item->id . '">' . $item->nm_kelompok . '</option>';
        }

        echo $hasil;
    }

    public function save_pemeriksaan()
    {
        $post = $this->input->post();

        $get_kategori = $this->Pemeriksaan_model->get_kategori($post['kategori']);
        $get_kelompok_pemeriksaan = $this->Pemeriksaan_model->get_kelompok_pemeriksaan($post['kelompok_pemeriksaan']);

        $nm_kategori = (!empty($get_kategori)) ? $get_kategori->nama_kategori : '';
        $nm_kelompok = (!empty($get_kelompok_pemeriksaan)) ? $get_kelompok_pemeriksaan->nm_kelompok : '';

        $this->db->trans_begin();

        $valid = 1;
        $msg = '';

        if ($post['id'] !== '') {
        } else {
            $arr_insert = [
                'id_kategori' => $post['kategori'],
                'nm_kategori' => $nm_kategori,
                'id_kelompok_pemeriksaan' => $post['kelompok_pemeriksaan'],
                'nm_kelompok_pemeriksaan' => $nm_kelompok,
                'nm_pemeriksaan' => $post['pemeriksaan'],
                'created_by' => $this->auth->user_id(),
                'created_date' => date('Y-m-d H:i:s')
            ];

            $insert_new = $this->db->insert('tr_pemeriksaan', $arr_insert);
            if (!$insert_new) {
                $this->db->trans_rollback();

                $valid = 0;
                $msg = $this->db->error()['message'];
            }
        }

        if ($this->db->trans_status() === false) {
            if ($valid !== '0') {
                $this->db->trans_rollback();

                $valid = 0;
                $msg = 'Please try again later !';
            }
        } else {
            $this->db->trans_commit();

            $valid = 1;
            $msg = 'Data has been saved !';
        }

        $response = [
            'status' => $valid,
            'msg' => $msg
        ];

        echo json_encode($response);
    }

    public function delete_pemeriksaan()
    {
        $id = $this->input->post('id');

        $this->db->trans_begin();

        $valid = 1;
        $msg = '';

        $delete_pemeriksaan = $this->db->update('tr_pemeriksaan', ['deleted_by' => $this->auth->user_id(), 'deleted_date' => date('Y-m-d H:i:s')], ['id' => $id]);
        if (!$delete_pemeriksaan) {
            $this->db->trans_rollback();

            $valid = 0;
            $msg = $this->db->error()['message'];
        }

        if ($this->db->trans_status() === false) {
            if ($valid !== '0') {
                $this->db->trans_rollback();

                $valid = 0;
                $msg = 'Please try again later !';
            }
        } else {
            $this->db->trans_commit();

            $valid = 1;
            $msg = 'Data has been deleted !';
        }

        $response = [
            'status' => $valid,
            'msg' => $msg
        ];

        echo json_encode($response);
    }

    public function get_data_pemeriksaan()
    {
        $this->Pemeriksaan_model->get_data_pemeriksaan();
    }
}
