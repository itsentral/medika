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
        $this->load->model(array('Layanan/Layanan_model',
		                              'Aktifitas/aktifitas_model',
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
         $data = $this->Layanan_model->get_data('rs_kategorilab','deleted',$deleted);
        $this->template->set('results', $data);
        $this->template->title('Layanan');
        $this->template->render('index');
    }

    public function addKategori()  {
        $this->template->render('add_kategori');
    }

    public function saveNewkategori()
    {
    $this->auth->restrict($this->addPermission);
		$post = $this->input->post();
		$code = $this->Layanan_model->generate_id();
		$this->db->trans_begin();
		$data = [
			'id_kategori'		=> $code,
			'nama_kategori'		=> $post['nm_kategori'],
			'created_on'		=> date('Y-m-d H:i:s'),
			'created_by'		=> $this->auth->user_id(),
			'deleted'			=> '0'
		];

		$insert = $this->db->insert("rs_kategorilab",$data);

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
     
		}

  		echo json_encode($status);

    }

  	public function editKategori($id){
        $this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
        $this->template->page_icon('fa fa-edit');
        $inven = $this->db->get_where('rs_kategorilab',array('id_kategori' => $id))->result();
        $data = [
          'inven' => $inven
        ];
        $this->template->set('results', $data);
        $this->template->title('Layanan');
        $this->template->render('edit_kategori');

    }

    public function viewKategori(){
        $this->auth->restrict($this->viewPermission);
        $id 	= $this->input->post('id');
        $cust 	= $this->Layanan_model->getById($id);
        $this->template->set('result', $cust);
        $this->template->render('view_layanan');
    }

    public function saveEditKategori(){
      // $this->auth->restrict($this->editPermission);
      $post = $this->input->post();
      $this->db->trans_begin();

      $data = [
        'nama_kategori'		    => $post['nm_layanan'],
        'modified_on'	=> date('Y-m-d H:i:s'),
        'modified_by'	=> $this->auth->user_id()
      ];

      $this->db->where('id_kategori',$post['id_layanan'])->update("rs_kategorilab",$data);

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
       
      }
      echo json_encode($status);
    }

	

	public function deleteKategori(){
		$this->auth->restrict($this->deletePermission);
		$id = $this->input->post('id');
		$data = [
			'deleted' 		=> '1',
			'deleted_by' 	=> $this->auth->user_id()
		];

		$this->db->trans_begin();
		$this->db->where('id_type',$id)->update("rs_kategorilab",$data);

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
      
		}

  		echo json_encode($status);
	}
	

}
