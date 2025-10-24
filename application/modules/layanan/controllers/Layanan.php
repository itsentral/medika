<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Layanan extends Admin_Controller
{
    //Permission
    protected $viewPermission 	= 'Pendaftaran.View';
    protected $addPermission  	= 'Pendaftaran.Add';
    protected $managePermission = 'Pendaftaran.Manage';
    protected $deletePermission = 'Pendaftaran.Delete';

    public function __construct()
    {
        parent::__construct();

        // $this->load->library(array( 'upload', 'Image_lib'));
<<<<<<< HEAD:application/modules/layanan/controllers/Layanan.php
        $this->load->model(array('Layanan/Layanan_model',
		                              'Aktifitas/aktifitas_model',
=======
        $this->load->model(array('Inventory_1/Inventory_1_model',
                                 'Aktifitas/aktifitas_model',
>>>>>>> 4babc84 (update):application/modules/inventory_1/controllers/Inventory_1.php
                                ));
        $this->template->title('Manage Data Supplier');
        $this->template->page_icon('fa fa-building-o');

        date_default_timezone_set('Asia/Bangkok');
    }

    public function index(){
        $this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
    		$this->template->page_icon('fa fa-users');
    		$deleted = '0';
<<<<<<< HEAD:application/modules/layanan/controllers/Layanan.php
         $data = $this->Layanan_model->get_data('rs_kategorilab','deleted',$deleted);
        $this->template->set('results', $data);
        $this->template->title('Layanan');
=======
        $data = $this->Inventory_1_model->get_data('rs_kategorilab','deleted',$deleted);
        $this->template->set('results', $data);
        $this->template->title('Kategori Pemeriksaan');
>>>>>>> 4babc84 (update):application/modules/inventory_1/controllers/Inventory_1.php
        $this->template->render('index');
    }

  	public function editInventory($id){
        $this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
        $this->template->page_icon('fa fa-edit');
<<<<<<< HEAD:application/modules/layanan/controllers/Layanan.php
        $inven = $this->db->get_where('ms_Pendaftaran',array('id_type' => $id))->result();
=======
        $inven = $this->db->get_where('rs_kategorilab',array('id_type' => $id))->result();
>>>>>>> 4babc84 (update):application/modules/inventory_1/controllers/Inventory_1.php
        $data = [
          'inven' => $inven
        ];
        $this->template->set('results', $data);
        $this->template->title('Inventory');
        $this->template->render('edit_inventory');

    }

    public function viewInventory(){
        $this->auth->restrict($this->viewPermission);
        $id 	= $this->input->post('id');
        $cust 	= $this->Layanan_model->getById($id);
        $this->template->set('result', $cust);
        $this->template->render('view_inventory');
    }

    public function saveEditInventory(){
      // $this->auth->restrict($this->editPermission);
      $post = $this->input->post();
      $this->db->trans_begin();

      $data = [
        'nama'		    => $post['nm_inventory'],
        'aktif'				=> $post['status'],
        'modified_on'	=> date('Y-m-d H:i:s'),
        'modified_by'	=> $this->auth->user_id()
      ];

<<<<<<< HEAD:application/modules/layanan/controllers/Layanan.php
      $this->db->where('id_type',$post['id_inventory'])->update("ms_Pendaftaran",$data);
=======
      $this->db->where('id_type',$post['id_inventory'])->update("rs_kategorilab",$data);
>>>>>>> 4babc84 (update):application/modules/inventory_1/controllers/Inventory_1.php

      if($this->db->trans_status() === FALSE){
        $this->db->trans_rollback();
        $status	= array(
          'pesan'		=>'Gagal Save Item. Thanks ...',
          'status'	=> 0
        );
      } else {
        $this->db->trans_commit();
        $status	= array(
          'pesan'		=>'Success Save Item. Thanks ...',
          'status'	=> 1
        );
        history("Update inventory type : ".$post['id_inventory']." / ".$post['nm_inventory']);
      }
      echo json_encode($status);
    }

	public function addInventory()  {
        $this->template->render('add_inventory');
    }

	public function deleteInventory(){
		$this->auth->restrict($this->deletePermission);
		$id = $this->input->post('id');
		$data = [
			'deleted' 		=> '1',
			'deleted_by' 	=> $this->auth->user_id()
		];

		$this->db->trans_begin();
		$this->db->where('id_type',$id)->update("ms_Pendaftaran",$data);

		if($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
			$status	= array(
			  'pesan'		=>'Gagal Save Item. Thanks ...',
			  'status'	=> 0
			);
		} else {
			$this->db->trans_commit();
			$status	= array(
			  'pesan'		=>'Success Save Item. Thanks ...',
			  'status'	=> 1
			);
      history("Delete inventory type : ".$id);
		}

  		echo json_encode($status);
	}
	public function saveNewinventory()
    {
        $this->auth->restrict($this->addPermission);
		$post = $this->input->post();
		$code = $this->Layanan_model->generate_id();
		$this->db->trans_begin();
		$data = [
			'id_type'		=> $code,
			'nama'		=> $post['nm_inventory'],
			'aktif'				=> 'aktif',
			'created_on'		=> date('Y-m-d H:i:s'),
			'created_by'		=> $this->auth->user_id(),
			'deleted'			=> '0'
		];

		$insert = $this->db->insert("ms_Pendaftaran",$data);

		if($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
			$status	= array(
			  'pesan'		=>'Gagal Save Item. Thanks ...',
			  'status'	=> 0
			);
		} else {
			$this->db->trans_commit();
			$status	= array(
			  'pesan'		=>'Success Save Item. Thanks ...',
			  'status'	=> 1
			);
      history("Insert inventory type : ".$code." / ".$post['nm_inventory']);
		}

  		echo json_encode($status);

    }

}
