<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Uji_spesimen extends Admin_Controller
{
  //Permission
  protected $viewPermission   = 'Uji_spesimen.View';
  protected $addPermission    = 'Uji_spesimen.Add';
  protected $managePermission = 'Uji_spesimen.Manage';
  protected $deletePermission = 'Uji_spesimen.Delete';

  public function __construct()
  {
    parent::__construct();
    $this->template->set_theme('medika');
    $this->template->set_layout('index');
    $this->load->model(array('Uji_spesimen/Uji_spesimen_model'));
    date_default_timezone_set('Asia/Bangkok');
  }

  public function index()
  {

    $this->auth->restrict($this->viewPermission);
    $alat = $this->db->get_where('asset_category', ['status' => 'Y'])->result();
    $this->template->set(['alat' => $alat]);
    $this->template->title('Uji Spesimen');
    $this->template->render('index');
  }

  public function getData()
  {
    $this->Uji_spesimen_model->getDataUji();
  }

}
