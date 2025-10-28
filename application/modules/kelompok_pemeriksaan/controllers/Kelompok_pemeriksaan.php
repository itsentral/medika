<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelompok_pemeriksaan extends Admin_Controller
{
    //Permission
    protected $viewPermission   = 'Kelompok_Pemeriksaan.View';
    protected $addPermission    = 'Kelompok_Pemeriksaan.Add';
    protected $managePermission = 'Kelompok_Pemeriksaan.Manage';
    protected $deletePermission = 'Kelompok_Pemeriksaan.Delete';

    protected $id_user;
    protected $datetime;

    public function __construct()
    {
        parent::__construct();
        // $this->load->library(array( 'upload', 'Image_lib'));
        $this->load->model(array(
            'Kelompok_pemeriksaan/Kelompok_pemeriksaan_model'
        ));
        $this->template->title('Kelompok Pemeriksaan');
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

        $this->template->title('Kelompok Pemeriksaan');
        $this->template->render('index');
    }

    public function add_kelompok_pemeriksaan()
    {

        $data = [
            'list_kategori' => $this->Kelompok_pemeriksaan_model->get_all_kategori(),
            'id' => ''
        ];

        $this->template->render('add_kelompok_pemeriksaan', $data);
    }

    public function save_kelompok_pemeriksaan()
    {
        $post = $this->input->post();

        $data_kategori = $this->Kelompok_pemeriksaan_model->get_kategori($post['kategori']);

        $nm_kategori = (!empty($data_kategori)) ? $data_kategori->nama_kategori : '';

        $this->db->trans_begin();

        if ($post['id'] !== '') {
            $arr_update = [
                'id_kategori' => $post['kategori'],
                'nm_kategori' => $nm_kategori,
                'nm_kelompok' => $post['nm_kelompok_pemeriksaan'],
                'updated_by' => $this->auth->user_id(),
                'updated_date' => date('Y-m-d H:i:s')
            ];

            $valid = 1;
            $msg = '';

            $update_kelompok = $this->db->update('tr_kelompok_pemeriksaan', $arr_update, ['id' => $post['id']]);
            if (!$update_kelompok) {
                $this->db->trans_rollback();

                $valid = 0;
                $msg = $this->db->error()['message'];
            }

            if ($this->db->trans_status() === false || $valid == '0') {
                if ($valid !== '0') {
                    $this->db->trans_rollback();

                    $valid = 0;
                    $msg = 'Please try again later !';
                }
            } else {
                $this->db->trans_commit();

                $valid = 1;
                $msg = 'Data has been updated !';
            }
        } else {
            $arr_insert = [
                'id_kategori' => $post['kategori'],
                'nm_kategori' => $nm_kategori,
                'nm_kelompok' => $post['nm_kelompok_pemeriksaan'],
                'created_by' => $this->auth->user_id(),
                'created_date' => date('Y-m-d H:i:s')
            ];

            $valid = 1;
            $msg = '';

            $insert_new = $this->db->insert('tr_kelompok_pemeriksaan', $arr_insert);
            if (!$insert_new) {
                $this->db->trans_rollback();

                $valid = 0;
                $msg = $this->db->error()['message'];
            }

            if ($this->db->trans_status() === false || $valid == '0') {
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
        }



        $response = [
            'status' => $valid,
            'msg' => $msg
        ];

        echo json_encode($response);
    }

    public function delete_kelompok_pemeriksaan()
    {
        $id = $this->input->post('id');

        $this->db->trans_begin();

        $valid = 1;
        $msg = '';

        $delete_kelompok = $this->db->update('tr_kelompok_pemeriksaan', ['deleted_by' => $this->auth->user_id(), 'deleted_date' => date('Y-m-d H:i:s')], ['id' => $id]);
        if (!$delete_kelompok) {
            $this->db->trans_rollback();

            $valid = 0;
            $msg = $this->db->error()['message'];
        }

        if ($this->db->trans_status() === false || $valid == '0') {
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

    public function edit()
    {
        $id = $this->input->post('id');

        $data_header = $this->Kelompok_pemeriksaan_model->get_kelompok_pemeriksaan($id);

        $data = [
            'list_kategori' => $this->Kelompok_pemeriksaan_model->get_all_kategori(),
            'id' => $id,
            'header' => $data_header
        ];

        $this->template->render('add_kelompok_pemeriksaan', $data);
    }

    public function get_data_kelompok_pemeriksaan()
    {
        $this->Kelompok_pemeriksaan_model->get_data_kelompok_pemeriksaan();
    }
}
