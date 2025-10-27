<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Consumable extends Admin_Controller
{
  //Permission
  protected $viewPermission   = 'Master_Indirect.View';
  protected $addPermission    = 'Master_Indirect.Add';
  protected $managePermission = 'Master_Indirect.Manage';
  protected $deletePermission = 'Master_Indirect.Delete';

  protected $id_user;
  protected $datetime;

  public function __construct()
  {
    parent::__construct();

    // $this->load->library(array( 'upload', 'Image_lib'));
    $this->load->model(array(
      'Consumable/consumable_model'
    ));
    $this->template->title('Manage Consumable');
    $this->template->page_icon('fa fa-building-o');

    date_default_timezone_set('Asia/Bangkok');

    $this->id_user  = $this->auth->user_id();
    $this->datetime = date('Y-m-d H:i:s');
  }

  public function index()
  {
    $this->auth->restrict($this->viewPermission);
    $session = $this->session->userdata('app_session');
    $this->template->page_icon('fa fa-users');

    $data = [
      'category' =>  $this->db->get_where('accessories_category', array('deleted_date' => NULL))->result_array(),
    ];

    $this->template->title('Master Barang Stok');
    $this->template->render('index', $data);
  }

  public function data_side_accessories()
  {
    $this->consumable_model->get_json_accessories();
  }

  public function add()
  {
    if ($this->input->post()) {
      $data = $this->input->post();
      // print_r($data); exit;

      $session       = $this->session->userdata('app_session');
      $id           = $data['id'];
      $id_category  = $data['id_category'];
      $id_stock     = $data['id_stock'];
      $stock_name   = $data['stock_name'];
      $trade_name   = trim(strtoupper($data['trade_name']));
      $brand        = trim(strtolower($data['brand']));
      $spec         = trim(strtolower($data['spec']));
      $id_unit_gudang = $data['id_unit_gudang'];
      $konversi         = str_replace(',', '', $data['konversi']);
      $id_unit          = $data['id_unit'];
      $status           = (!empty($id)) ? $data['status'] : 1;
      $min_order = $data['min_order'];

      // $max_stok         = str_replace(',', '', $data['max_stok']);
      // $min_stok         = str_replace(',', '', $data['min_stok']);

      $created_by   = 'updated_by';
      $created_date = 'updated_date';
      $tanda        = 'Insert ';

      $ArrHeader    = array(
        'id_stock'      => $id_stock,
        'id_category'    => $id_category,
        'stock_name'    => $stock_name,
        'trade_name'    => $trade_name,
        'brand'         => $brand,
        'spec'          => $spec,
        'id_unit_gudang' => $id_unit_gudang,
        'konversi'      => $konversi,
        'id_unit'        => $id_unit,
        'status'        => $status,
        'min_order' => $min_order,
        $created_by      => $this->id_user,
        $created_date    => $this->datetime
      );

      // print_r($ArrHeader);
      // exit;

      $this->db->trans_start();
      if (empty($id)) {
        $this->db->insert('accessories', $ArrHeader);
      }
      if (!empty($id)) {
        $this->db->where('id', $id);
        $this->db->update('accessories', $ArrHeader);
      }
      $this->db->trans_complete();

      if ($this->db->trans_status() === FALSE) {
        $this->db->trans_rollback();
        $Arr_Data  = array(
          'pesan'    => 'Save gagal disimpan ...',
          'status'  => 0
        );
      } else {
        $this->db->trans_commit();
        $Arr_Data  = array(
          'pesan'    => 'Save berhasil disimpan. Thanks ...',
          'status'  => 1
        );
      }

      echo json_encode($Arr_Data);
    } else {
      $session  = $this->session->userdata('app_session');
      $id   = $this->uri->segment(3);
      $tanda   = $this->uri->segment(4);
      $header       = $this->db->get_where('accessories', array('id' => $id))->result();

      $satuan         = $this->db->get_where('ms_satuan', array('deleted_date' => NULL, 'category' => 'unit'))->result();
      $satuan_packing = $this->db->get_where('ms_satuan', array('deleted_date' => NULL, 'category' => 'packing'))->result();
      $category       = $this->db->get_where('accessories_category', array('deleted_date' => NULL))->result();

      $data = [
        'header' => $header,
        'tanda' => $tanda,
        'satuan' => $satuan,
        'satuan_packing' => $satuan_packing,
        'category' => $category
      ];

      $this->template->set('results', $data);
      $this->template->title('Add Barang Stok');
      $this->template->page_icon('fa fa-edit');
      $this->template->render('add', $data);
    }
  }

  public function hapus()
  {
    $data = $this->input->post();
    $session     = $this->session->userdata('app_session');
    $id  = $data['id'];

    $ArrHeader    = array(
      'deleted_by'    => $session['id_user'],
      'deleted_date'  => date('Y-m-d H:i:s')
    );

    $this->db->trans_start();
    $this->db->where('id', $id);
    $this->db->update('accessories', $ArrHeader);
    $this->db->trans_complete();

    if ($this->db->trans_status() === FALSE) {
      $this->db->trans_rollback();
      $Arr_Data  = array(
        'pesan'    => 'Save gagal diproses ...',
        'status'  => 0
      );
    } else {
      $this->db->trans_commit();
      $Arr_Data  = array(
        'pesan'    => 'Save berhasil diproses. Thanks ...',
        'status'  => 1
      );
    }

    echo json_encode($Arr_Data);
  }

  public function download_excel()
  {
    $get_accessories = $this->consumable_model->getAccessorieswithUnit();

    $data = [
      'accessories' => $get_accessories
    ];

    $this->load->view('download_excel', $data);
  }
}
