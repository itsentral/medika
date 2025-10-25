<?php
if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Consumable_category extends Admin_Controller
{
  //Permission
  protected $viewPermission   = 'Consumable_Category.View';
  protected $addPermission    = 'Consumable_Category.Add';
  protected $managePermission = 'Consumable_Category.Manage';
  protected $deletePermission = 'Consumable_Category.Delete';

  protected $id_user;
  protected $datetime;

  public function __construct()
  {
    parent::__construct();

    $this->load->model(array(
      'Consumable_category/consumable_category_model'
    ));
    $this->template->title('Manage Category Stok');
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

    $where = [
      'deleted_date' => NULL
    ];
    $listData = $this->consumable_category_model->get_data($where);

    $data = [
      'result' =>  $listData
    ];

    $this->template->set($data);
    $this->template->title('Category Stok');
    $this->template->render('index');
  }

  public function add($id = null)
  {
    if (empty($id)) {
      $this->auth->restrict($this->addPermission);
    } else {
      $this->auth->restrict($this->managePermission);
    }
    if ($this->input->post()) {
      $post = $this->input->post();

      $id   = $post['id'];
      $nm_category = $post['nm_category'];
      $description = $post['description'];

      $last_by    = (!empty($id)) ? 'updated_by' : 'created_by';
      $last_date  = (!empty($id)) ? 'updated_date' : 'created_date';
      $label      = (!empty($id)) ? 'Edit' : 'Add';

      $dataProcess = [
        'nm_category' => $nm_category,
        'description'  => $description,
        $last_by    => $this->id_user,
        $last_date  => $this->datetime
      ];

      $this->db->trans_start();
      if (empty($id)) {
        $this->db->insert('accessories_category', $dataProcess);
      } else {
        $this->db->where('id', $id);
        $this->db->update('accessories_category', $dataProcess);
      }
      $this->db->trans_complete();

      if ($this->db->trans_status() === FALSE) {
        $this->db->trans_rollback();
        $status  = array(
          'pesan'    => 'Failed process data!',
          'status'  => 0
        );
      } else {
        $this->db->trans_commit();
        $status  = array(
          'pesan'    => 'Success process data!',
          'status'  => 1
        );
      }
      echo json_encode($status);
    } else {
      $listData = $this->db->get_where('accessories_category', array('id' => $id))->result();

      $data = [
        'listData' => $listData
      ];
      $this->template->set($data);
      $this->template->render('add');
    }
  }

  public function delete()
  {
    $this->auth->restrict($this->deletePermission);

    $id = $this->input->post('id');
    $data = [
      'deleted_by'     => $this->id_user,
      'deleted_date'   => $this->datetime
    ];

    $this->db->trans_begin();
    $this->db->where('id', $id)->update("accessories_category", $data);

    if ($this->db->trans_status() === FALSE) {
      $this->db->trans_rollback();
      $status  = array(
        'pesan'    => 'Failed process data!',
        'status'  => 0
      );
    } else {
      $this->db->trans_commit();
      $status  = array(
        'pesan'    => 'Success process data!',
        'status'  => 1
      );
    }
    echo json_encode($status);
  }
}
