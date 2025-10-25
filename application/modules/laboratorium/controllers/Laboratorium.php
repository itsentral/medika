<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * @author Yunaz
 * @copyright Copyright (c) 2018, Yunaz
 *
 * This is controller for Customer
 */

class Laboratorium extends Admin_Controller {

    //Permission
    protected $viewPermission   = "Laboratorium.View";
    protected $addPermission    = "Laboratorium.Add";
    protected $managePermission = "Laboratorium.Manage";
    protected $deletePermission = "Laboratorium.Delete";

    public function __construct()
    {
        parent::__construct();

        $this->load->library(array('Mpdf','upload','Image_lib'));
        $this->load->model(array('Laboratorium/Laboratorium_model',
                                 'Aktifitas/aktifitas_model'
                                ));
								
        $this->template->title('Manage Data Customer');
        $this->template->page_icon('fa fa-table');

        date_default_timezone_set("Asia/Bangkok");
    }

    public function index()
    {
        $this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
		$this->template->page_icon('fa fa-users');
        // $data = $this->Laboratorium_model->rekap_data($session['kdcab'])->result();
        $data = $this->Laboratorium_model->find_all_by();
        $this->template->set('results', $data);
        $this->template->title('Laboratorium');
        $this->template->render('index');
		
    }
	
	
	public function addLaboratoriumRj(){
		$this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
		$this->template->page_icon('fa fa-pencil');
		$prov = $this->Laboratorium_model->get_data('provinsi');
		$kota = $this->Laboratorium_model->get_data('kota');
		$datprov    = $this->Laboratorium_model->pilih_provinsi()->result();
		$datdept    = $this->Laboratorium_model->pilih_departemen()->result();
		$datcust    = $this->Laboratorium_model->pilih_customer()->result();
		
		$this->template->set('datprov',$datprov);
		$this->template->set('datdept',$datdept);
		$this->template->set('datcust',$datcust);
        
        $this->template->title('Laboratorium Pasien Rawat Jalan ');
        $this->template->render('form_add_pendaftaran');
		
	}
	
	function get_kota(){
        $provinsi = $_GET['provinsi'];
        $datkota = $this->Laboratorium_model->pilih_kota($provinsi)->result();
        // print_r($datkota);
        // exit();
        echo "<select id='kota' name='kota' class='form-control input-sm select2'>";
        echo "<option value=''></option>";
                foreach ($datkota as $key => $st) :
				      echo "<option value='$st->id_kab' set_select('model', $st->id_kab, isset($data->id_kab) && $data->id_kab == $st->id_kab)>$st->nama
                    </option>";
                endforeach;
        echo "</select>";
    }
	
	
	function get_kecamatan(){
        $kota = $_GET['kota'];
        $datkec = $this->Laboratorium_model->pilih_kec($kota)->result();
         // print_r($datkec);
         // exit();
        echo "<select id='kecamatan' name='kecamatan' class='form-control input-sm select2'>";
        echo "<option value=''></option>";
                foreach ($datkec as $key => $st) :
				      echo "<option value='$st->id_kec' set_select('model', $st->id_kec, isset($data->id_kec) && $data->id_kec == $st->id_kec)>$st->nama
                    </option>";
                endforeach;
        echo "</select>";
    }
	
	
	function get_kelurahan(){
        $kec = $_GET['kec'];
        $datkel = $this->Laboratorium_model->pilih_kel($kec)->result();
        // print_r($datkota);
        // exit();
        echo "<select id='kelurahan' name='kelurahan' class='form-control input-sm'>";
        echo "<option value=''></option>";
                foreach ($datkel as $key => $st) :
				      echo "<option value='$st->id_kel' set_select('model', $st->id_kel, isset($data->id_kel) && $data->id_kel == $st->id_kel)>$st->nama
                    </option>";
                endforeach;
        echo "</select>";
    }
	
	function get_dokter(){
        $dept = $_GET['dept'];
		$hari = $_GET['hari'];
		$jam = $_GET['jam'];
        $datdokter = $this->Laboratorium_model->pilih_deptdokter($dept,$hari,$jam)->result();
         // print_r($dept, $hari);
         // exit();
        echo "<select id='dokter' name='dokter' class='form-control input-sm select2'>";
        echo "<option value=''>--Pilih Dokter--</option>";
                foreach ($datdokter as $key => $st) :
				      echo "<option value='$st->id_dokter' set_select('model', $st->id_dokter, isset($data->id_dokter) && $data->id_dokter == $st->id_dokter)>$st->nama_dokter
                    </option>";
                endforeach;
        echo "</select>";
    }
	
	function get_jaminan(){
        $cust = $_GET['cust'];
        $datcust = $this->Laboratorium_model->pilih_jaminan($cust)->result();
        // print_r($datcust);
        // exit();
        echo "<select id='nama_jaminan' name='nama_jaminan' class='form-control input-sm select2'>";
        // echo "<option value=''></option>";
                foreach ($datcust as $key => $st) :
				      echo "<option value='$st->id_customer' set_select('model', $st->id_customer, isset($data->id_customer) && $data->id_customer == $st->id_customer)>$st->nama_customer
                    </option>";
                endforeach;
        echo "</select>";
    }
	
	
	function get_jadwal(){
        $dept = $_GET['dept'];
        $datcust = $this->Laboratorium_model->pilih_jadwal($dept)->result();
        // print_r($datcust);
        // exit();
        echo "<select id='jadwal' name='jadwal' class='form-control input-sm select2'>";
        echo "<option value=''>-- Pilih Jadwal --</option>";
                foreach ($datcust as $key => $st) :
				$awal	= substr($st->jam_awal, 0,5);
				$akhir	= substr($st->jam_akhir, 0,5);
				      echo "<option value='$st->hari' set_select('model', $st->hari, isset($data->hari) && $data->hari == $st->hari)>$st->hari
                    </option>";
                endforeach;
        echo "</select>";
    }
	
	function get_jam(){
        $dept = $_GET['dept'];
		$hari = $_GET['hari'];
        $datcust = $this->Laboratorium_model->pilih_jam($dept,$hari)->result();
        // print_r($datcust);
        // exit();
        echo "<select id='jadwal' name='jadwal' class='form-control input-sm select2'>";
        echo "<option value=''>-- Pilih Jadwal --</option>";
                foreach ($datcust as $key => $st) :
				$awal	= substr($st->jam_awal, 0,5);
				$akhir	= substr($st->jam_akhir, 0,5);
				      echo "<option value='$st->jam_awal' set_select('model', $st->jam_awal, isset($data->jam_awal) && $data->jam_awal == $st->jam_awal)>Jam $awal-$akhir
                    </option>";
                endforeach;
        echo "</select>";
    }
	
	
	##CEK PENDAFTARAN KE DOKTER YANG SAMA JAM SAMA AKAN DITOLAK##
	
	public function cek_dokter(){
		
		$rm   = $_GET['rm'];    
		$dept = $_GET['dept'];
		$hari = $_GET['hari'];
		$jam  = $_GET['jam'];
		$dokter = $_GET['dokter'];
		
        $cek = $this->Laboratorium_model->cek_dokter($rm,$dept,$hari,$jam,$dokter);
		
		if($cek->num_rows() > 0) {
			
			$status	= array(
			 'status'	=> 1
			);
		} else {
			$this->db->trans_commit();
			$status	= array(
			  'status'	=> 0
			);			
		}
		
  		echo json_encode($status);
	
	}
	
	
	// PROSES SAVE PENDAFTARAN RJ
	// -------------------------------------------------------------
	public function saveLaboratoriumRj(){
		$this->auth->restrict($this->addPermission);
		$post = $this->input->post();
		$birthdate = $this->input->post('tgl_lahir');
		$tgl_lhr = date("Y-m-d", strtotime($birthdate));
		$tgl_daftar = date("Y-m-d");
		$dokter = $this->input->post('dokter');
		$jam    = $this->input->post('jam');
		
		
		$Date_lhr = new DateTime($tgl_lhr);
		$today    = new DateTime('today');
		// tahun
		$y = $today->diff($Date_lhr)->y;

		// bulan
		$m = $today->diff($Date_lhr)->m;

		// hari
		$d = $today->diff($Date_lhr)->d;
		
		// print_r($post);
		// exit();
		
		$code = $this->Laboratorium_model->generate_no_rm();
		$no_tr = $this->Laboratorium_model->generate_no_tr();
		$no_reg = $this->Laboratorium_model->generate_no_reg();
		$antrian = $this->Laboratorium_model->cek_antrian($dokter,$jam,$tgl_daftar);
		$this->db->trans_begin();
		$data = [
			'medrec'		    => $code,
			'nama_pasien'		=> $post['nama'],
			'status_pasien'		=> $post['titel'],
			'jenis_kelamin'		=> $post['jenis_kelamin'],
			'provinsi'			=> $post['provinsi'],
			'kabupaten'			=> $post['kota'],
			'kecamatan'			=> $post['kecamatan'],
			'kelurahan'			=> $post['kelurahan'],
			'alamat'			=> $post['alamat'],
			'agama'				=> $post['agama'],
			'tgl_lahir'		    => $tgl_lhr,
			'penanggung_jawab'	=> $post['pj'],
			'telp_pasien'		=> $post['telp_pasien'],
			'telp_pj'			=> $post['telp_pj'],
			'rujukan'			=> $post['rujukan'],
			'user'		        => $this->auth->user_id(),
			'tgl_entry'			=> date('Y-m-d H:i:s')
			
		];
		
		$insert = $this->db->insert("rs_pasien",$data);
		
		## INSERT HD TRANSAKSI RJ ##
		
		$dataHd = [
		    'id_transaksi'		=> $no_tr,			
			'noreg'		        => $no_reg,
			'baru_lama' 		=> 'B',
			'tgl_registrasi'	=> $tgl_daftar,
			'jam_registrasi'	=> date('H:i:s'),
			'medrec' 			=> $code,
			'umur_th'	        => $y,
			'umur_bln'          => $m,
			'rujukan'	        => $post['rujukan'],
			'kode_jaminan'		=> $post['penjamin'],
			'no_surat'			=> $post['no_sep'],
			'nik'		        => $post['nik'],
			'nama_karyawan'		=> $post['karyawan'],
			'bagian'		    => $post['bagian'],
			'id_customer'		=> $post['nama_jaminan'],
			'asal_faskes'		=> $post['faskes'],
			'wilayah'		    => $post['wilayah'],
			'yang_berobat'		=> $post['berobat'],
			'plafon'		    => $post['plafon'],
     		'id_departemen'	    => $post['departemen'],
			'id_dokter'	        => $post['dokter'],
			'jenis_rawat'	    => 'RJ',
			'no_urut'	        => $antrian,
			'kode_kelas'        => 'rawat_jalan',
			'via'        		=> $post['daftar'],
			'jam_awal'          => $post['jam'],
			'tgl_entry'			=> date('Y-m-d H:i:s'),
			'user'		        => $this->auth->user_id()
			
		];
		
		// print_r($dataHd);
		// exit;
		
		$insert = $this->db->insert("rs_hdtransaksirj",$dataHd);
		
	
		
		
		
		if($this->db->trans_status() === FALSE){
		    $error = $this->db->error(); // tampilkan pesan error SQL
			log_message('error', 'DB Error: ' . print_r($error, true));
	
			$this->db->trans_rollback();
			$status	= array(
			  'pesan'		=>'Gagal Save Item. Thanks ...',
			  'status'	=> 0
			);
			  $nm_hak_akses   = $this->addPermission;
			  $kode_universal = 'NewData';
			  $jumlah         = 1;
			  $sql            = $this->db->last_query();
              $keterangan     = "GAGAL, tambah data pasien ".$no_reg.", atas Nama : ".$code;	
              $status1         = 0;	
			  
		} else {
			$this->db->trans_commit();
			$status	= array(
			  'pesan'		=>'Success Save Item. Thanks ...',
			  'status'	=> 1
			);	
			  $nm_hak_akses   = $this->addPermission;
			  $kode_universal = 'NewData';
			  $jumlah         = 1;
			  $sql            = $this->db->last_query();
			  $keterangan     = "SUKSES, tambah data Pasien ".$no_reg.", atas Nama : ".$code;
              $status1         = 1;			  
		}
        //Save Log
        simpan_aktifitas($nm_hak_akses, $kode_universal, $keterangan, $jumlah, $sql, $status1);
		
  		echo json_encode($status);
	
	}
	
	
	public function search_pasien()
      {  
	    $this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
	    $data = $this->Laboratorium_model->GetPasien($this->uri->segment(3));
        $this->template->set('results', $data);
		$this->template->set('search', $this->uri->segment(3));
        $this->template->title('Laboratorium Laboratorium');
        $this->template->render('list');
      }
	  
	
	
	// FORM DAFTAR PASIEN LAMA
	//------------------------------------------------------------
	public function Daftar_PasienLama($medrec){
		
		$this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
		$data = $this->Laboratorium_model->GetPasienLama($medrec);
		$this->template->page_icon('fa fa-edit');
		$prov		= $this->Laboratorium_model->get_data('provinsi');
		$kota 		= $this->Laboratorium_model->get_data('kota');
		$datprov    = $this->Laboratorium_model->pilih_provinsi()->result();
		$datdept    = $this->Laboratorium_model->pilih_departemen()->result();
		$datcust    = $this->Laboratorium_model->pilih_customer()->result();
		
		$this->template->set('datprov',$datprov);
		$this->template->set('datdept',$datdept);
		$this->template->set('datcust',$datcust);
		
        $this->template->set('results', $data);
		$this->template->title('Laboratorium Pasien Rawat Jalan');
		$this->template->render('form_add_pendaftaran_lama');
		
	}
	
	##saveLaboratoriumRj_Lama##
	
	// PROSES SAVE PENDAFTARAN RJ
	// -------------------------------------------------------------
	public function saveLaboratoriumRj_Lama(){
		$this->auth->restrict($this->addPermission);
		$post = $this->input->post();
		$birthdate = $this->input->post('tgl_lahir');
		$tgl_lhr = date("Y-m-d", strtotime($birthdate));
		$tgl_daftar = date("Y-m-d");
		$dokter = $this->input->post('dokter');
		$jam    = $this->input->post('jam');
		
		
		$Date_lhr = new DateTime($tgl_lhr);
		$today    = new DateTime('today');
		// tahun
		$y = $today->diff($Date_lhr)->y;

		// bulan
		$m = $today->diff($Date_lhr)->m;

		// hari
		$d = $today->diff($Date_lhr)->d;
		
		// print_r($post);
		// exit();
		
		$code = $this->Laboratorium_model->generate_no_rm();
		$no_tr = $this->Laboratorium_model->generate_no_tr();
		$no_reg = $this->Laboratorium_model->generate_no_reg();
		$antrian = $this->Laboratorium_model->cek_antrian($dokter,$jam,$tgl_daftar);
		$this->db->trans_begin();
				
		## INSERT HD TRANSAKSI RJ ##
		
		$dataHd = [
		    'id_transaksi'		=> $no_tr,			
			'noreg'		        => $no_reg,
			'baru_lama' 		=> 'L',
			'tgl_registrasi'	=> $tgl_daftar,
			'jam_registrasi'	=> date('H:i:s'),
			'medrec' 			=> $post['no_rm'],
			'umur_th'	        => $y,
			'umur_bln'          => $m,
			'rujukan'	        => $post['rujukan'],
			'kode_jaminan'		=> $post['penjamin'],
			'no_surat'			=> $post['no_sep'],
			'nik'		        => $post['nik'],
			'nama_karyawan'		=> $post['karyawan'],
			'bagian'		    => $post['bagian'],
			'id_customer'		=> $post['nama_jaminan'],
			'asal_faskes'		=> $post['faskes'],
			'wilayah'		    => $post['wilayah'],
			'yang_berobat'		=> $post['berobat'],
			'plafon'		    => $post['plafon'],
     		'id_departemen'	    => $post['departemen'],
			'id_dokter'	        => $post['dokter'],
			'jenis_rawat'	    => 'RJ',
			'no_urut'	        => $antrian,
			'kode_kelas'        => 'rawat_jalan',
			'via'        		=> $post['daftar'],
			'jam_awal'          => $post['jam'],
			'tgl_entry'			=> date('Y-m-d H:i:s'),
			'user'		        => $this->auth->user_id()
			
		];
		
		
		
		$insert = $this->db->insert("rs_hdtransaksirj",$dataHd);
		
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
	
	  
	public function list_pasienrj()
      {  
	    $this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
	    $data = $this->Laboratorium_model->GetTransaksiRj();
        $this->template->set('results', $data);
	    $this->template->title('Daftar Pasien Rawat Jalan');
        $this->template->render('list_rj');
      } 
	  
	  
	  
	##PENDAFTARAN RAWAT INAP##
	
	public function rawat_inap()
    {
        $this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
		$this->template->page_icon('fa fa-users');
        $this->template->set('results', $data);
        $this->template->title('Laboratorium Pasien Rawat Inap');
        $this->template->render('list_ri');
		
    }
	
	
	public function search_pasien_ri()
      {  
	    $this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
	    $data = $this->Laboratorium_model->GetPasien($this->uri->segment(3));
        $this->template->set('results', $data);
		$this->template->set('search', $this->uri->segment(3));
        $this->template->title('Laboratorium Pasien Rawat Inap');
        $this->template->render('list_ri');
      }
	
	// FORM DAFTAR PASIEN RAWAT INAP
	//------------------------------------------------------------
	public function Daftar_PasienRi($medrec){
		
		$this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
		$data = $this->Laboratorium_model->GetPasienLama($medrec);
		$this->template->page_icon('fa fa-edit');
		$kelas		= $this->Laboratorium_model->get_data('rs_kelas');
		$dokter		= $this->Laboratorium_model->get_data('rs_dokter');
		$kota 		= $this->Laboratorium_model->get_data('kota');
		$datprov    = $this->Laboratorium_model->pilih_provinsi()->result();
		$datdept    = $this->Laboratorium_model->pilih_departemen()->result();
		$datcust    = $this->Laboratorium_model->pilih_customer()->result();
		
		$this->template->set('datkelas',$kelas);
		$this->template->set('datdokter',$dokter);
		$this->template->set('datcust',$datcust);
		
        $this->template->set('results', $data);
		$this->template->title('Laboratorium Pasien Rawat Inap');
		$this->template->render('form_add_pendaftaran_Ri');
		
	}
	
	function get_kelas(){
        $kelas = $_GET['kelas'];
		
        $datkelas = $this->Laboratorium_model->pilih_ruang($kelas)->result();
        // print_r($datcust);
        // exit();
        echo "<select id='ruang' name='ruang' class='form-control input-sm select2'>";
        echo "<option value=''>-- Pilih Ruang --</option>";
                foreach ($datkelas as $key => $st) :			
			    echo "<option value='$st->id_ruang' set_select('ruang', $st->id_ruang, isset($data->nama_ruang) && $data->nama_ruang == $st->id_ruang) >
                            $st->nama_ruang
                            </option>";
                endforeach;
        echo "</select>";
    }
	
	function get_bed(){
        $ruang = $_GET['ruang'];
		
        $datkelas = $this->Laboratorium_model->pilih_combobox('rs_bed','id_ruang', $ruang)->result();
        // print_r($datcust);
        // exit();
        echo "<select id='bed' name='bed' class='form-control input-sm select2'>";
        echo "<option value=''>-- Pilih Bed --</option>";
                foreach ($datkelas as $key => $st) :			
			    echo "<option value='$st->id_bed' set_select('bed', $st->id_bed, isset($data->nama_bed) && $data->nama_bed == $st->id_bed) >
                            $st->nama_bed
                            </option>";
                endforeach;
        echo "</select>";
    }
	
	function get_nobed(){
        $bed = $_GET['bed'];
		$where       = array(			
						'id_bed'=>$bed,
						'status_bed'=>'0'					
					   );
					   
        $datnobed = $this->Laboratorium_model->pilih_combobox_array('rs_bed_nomor', $where)->result();
        // print_r($datnobed);
        // exit();
        echo "<select id='nobed' name='nobed' class='form-control input-sm select2'>";
        echo "<option value=''>-- Pilih Nomor Bed --</option>";
                foreach ($datnobed as $key => $st) :			
			    echo "<option value='$st->id_nomorbed' set_select('nobed', $st->id_nomorbed, isset($data->nomor_bed) && $data->nomor_bed == $st->id_nomorbed) >
                            $st->nomor_bed
                            </option>";
                endforeach;
        echo "</select>";
    }
	
	
	public function saveLaboratoriumRi(){
		$this->auth->restrict($this->addPermission);
		$post = $this->input->post();
		$birthdate = $this->input->post('tgl_lahir');
		$tgl_lhr = date("Y-m-d", strtotime($birthdate));
		$tgl_daftar = date("Y-m-d");
		$dokter = $this->input->post('dokter');
		$jam    = $this->input->post('jam');
		
		
		$Date_lhr = new DateTime($tgl_lhr);
		$today    = new DateTime('today');
		// tahun
		$y = $today->diff($Date_lhr)->y;

		// bulan
		$m = $today->diff($Date_lhr)->m;

		// hari
		$d = $today->diff($Date_lhr)->d;
		
		// print_r($post);
		// exit();
		
		$code = $this->Laboratorium_model->generate_no_rm();
		$no_tr = $this->Laboratorium_model->generate_no_tr_ri();
		$no_reg = $this->Laboratorium_model->generate_no_reg_ri();
		$antrian = $this->Laboratorium_model->cek_antrian($dokter,$jam,$tgl_daftar);
		$this->db->trans_begin();
				
		## INSERT HD TRANSAKSI RI ##
		
		$dataHd = [
		    'id_transaksi'		=> $no_tr,			
			'noreg'		        => $no_reg,
			'baru_lama' 		=> 'L',
			'tgl_registrasi'	=> $tgl_daftar,
			'jam_registrasi'	=> date('H:i:s'),
			'medrec' 			=> $post['no_rm'],
			'umur_th'	        => $y,
			'umur_bln'          => $m,
			'rujukan'	        => $post['rujukan'],
			'kode_jaminan'		=> $post['penjamin'],
			'no_surat'			=> $post['no_sep'],
			'nik'		        => $post['nik'],
			'nama_karyawan'		=> $post['karyawan'],
			'bagian'		    => $post['bagian'],
			'id_customer'		=> $post['nama_jaminan'],
			'asal_faskes'		=> $post['faskes'],
			'wilayah'		    => $post['wilayah'],
			'yang_berobat'		=> $post['berobat'],
			'plafon'		    => $post['plafon'],
     		'id_departemen'	    => $post['departemen'],
			'id_dokter'	        => $post['dokter1'],
			'id_dokter2'	    => $post['dokter2'],
			'jenis_rawat'	    => 'RI',
			'asal_pasien'	    => $post['asal_pasien'],
			'kode_kelas'        => $post['kelas'],
			'id_ruang'          => $post['ruang'],
			'id_bed'            => $post['bed'],
			'nobed'             => $post['nobed'],
			'tgl_entry'			=> date('Y-m-d H:i:s'),
			'user'		        => $this->auth->user_id()
			
		];
		
		$insert = $this->db->insert("rs_hdtransaksiri",$dataHd);
		
		
		
	    $data_update = array(
							'status_bed'=>'1',
							);
							
		$where      = array(			
						'kode_kelas'=>$this->input->post('kelas'),
						'id_ruang'=>$this->input->post('ruang'),
						'id_nomorbed'=>$this->input->post('nobed')
					   );

		$this->Laboratorium_model->getUpdate('rs_bed_nomor',$data_update,$where);
		
		if($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
			$status	= array(
			  'pesan'		=>'Gagal Save Item. Thanks ...',
			  'status'	=> 0
			);
			$keterangan = 'Gagal, Simpan Data';
			$status = 1;
			$nm_hak_akses = $this->addPermission;
			$kode_universal = 'Newdata';
			$jumlah = 1;
			$sql = $this->db->last_query();
			
		} else {
			$this->db->trans_commit();
			$status	= array(
			  'pesan'		=>'Success Save Item. Thanks ...',
			  'status'	=> 1
			);			
			$keterangan = 'SUKSES, Simpan Data Laboratorium RI';
			$status1 = 1;
			$nm_hak_akses = $this->addPermission;
			$kode_universal = 'Newdata';
			$jumlah = 1;
			$sql = $this->db->last_query();
		}
		
		    //Save Log
        simpan_aktifitas($nm_hak_akses, $kode_universal, $keterangan, $jumlah, $sql, $status1);
		
  		echo json_encode($status);
	
	}
	
	public function list_pasienri()
      {  
	    $this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
	    $data = $this->Laboratorium_model->GetTransaksiRi();
        $this->template->set('results', $data);
	    $this->template->title('Daftar Pasien Rawat Inap');
        $this->template->render('list_pasien_ri');
      } 
	
	
	
	public function TrLaboratoriumRj($tr){
		
		// print_r($tr);
		// exit;
		
		$this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
		$data = $this->Laboratorium_model->GetPasienRJ($tr);
		$getlayanan = $this->Laboratorium_model->pilih_grouplayanan('layanan',$session['id_div'])->result();
	    $getdokter  = $this->Laboratorium_model->pilih_dokter()->result();
		$this->template->page_icon('fa fa-edit');
		
		$this->template->set('layanan', $getlayanan);
		$this->template->set('dokter', $getdokter);
		$this->template->set('results', $data);
		$this->template->title('Pasien Rawat Jalan');
        $this->template->render('form_tr_pendaftaran');
		
	}  
	
	public function TrLaboratoriumLab($tr){
		
		// print_r($tr);
		// exit;
		
		$this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
		$data = $this->Laboratorium_model->GetPasienLab($tr);
		$getlayanan = $this->Laboratorium_model->pilih_grouplayanan('layanan',$session['id_div'])->result();
	    $getdokter  = $this->Laboratorium_model->pilih_dokter()->result();
		$this->template->page_icon('fa fa-edit');
		
		$this->template->set('layanan', $getlayanan);
		$this->template->set('dokter', $getdokter);
		$this->template->set('results', $data);
		$this->template->title('Pasien Laboratorium');
        $this->template->render('form_tr_pendaftaran_lab');
		
	}  
	
	public function Billing_Rj(){	
		
		$noreg = $_POST['id'];
		$tr = $_POST['tr'];
		$kelas = $_POST['kelas'];
		$jaminan = $_POST['jaminan'];
		
		// print_r($tr);
		// exit;
		$this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
		$data = $this->Laboratorium_model->GetPasienRJ($tr);
		$getlayanan = $this->Laboratorium_model->pilih_grouplayanan('layanan',$session['id_div'])->result();
	    $getdokter  = $this->Laboratorium_model->pilih_dokter()->result();
		$this->template->page_icon('fa fa-edit');
		
		$this->template->set('layanan', $getlayanan);
		$this->template->set('dokter', $getdokter);
		$this->template->set('noreg', $noreg);
		$this->template->set('notr', $tr);
		$this->template->set('kelas', $kelas);
		$this->template->set('jaminan', $jaminan);
		$this->template->title('Pasien Rawat Jalan');
        $this->template->render('billing_lab');
		
	}  
	
	// PROSES SAVE BILLING RJ
	// -------------------------------------------------------------
	public function saveBilling(){
		$this->auth->restrict($this->addPermission);
		$post = $this->input->post();
		$session = $this->session->userdata('app_session');
        $divisi       = $session['id_div']; 
		$kodekelas    = $post['kelas'];
		$jaminan      = $post['jaminan'];
	    $grouplayanan = $post['itemlayanan'];
        $jml          = 1;
		
		$data = $this->Laboratorium_model->GetTarif($grouplayanan); 
		foreach ($data as $d) {    

            $layanan=$d->id_layanan;
			$kategori=$d->id_kategori;
			$kodecoa=$d->kode_coa;
		
			if ($kodekelas=='rawat_jalan')
			{ 
			$harga =$d->rawat_jalan;
			}
			elseif ($kodekelas=='kelas1')
			{ 
			$harga =$d->kelas1;
			}
			elseif ($kodekelas=='kelas2')
			{ 
			$harga =$d->kelas2;
			}
			elseif ($kodekelas=='kelas3')
			{ 
			$harga =$d->kelas3;
			}
			elseif ($kodekelas=='vip')
			{ 
			$harga =$d->vip;
			}

        $mark = $this->Laboratorium_model->GetMarkup($jaminan,$kodecoa);
                     
		if ($mark <= 0) {
		  $markupharga ='0';
		 }
         else
         {
		    foreach ($mark as $m) {    
			$markup=$m->markup_harga;
			}  
			$markupharga =$markup;
		 }
			  
		if ($mark != 0) { 


		$tariflayanan=$harga+($harga*($markupharga/100));

		$totalhargaup=ceil($tariflayanan);

								   if(substr($totalhargaup,-3) =='000')
									{
										$total_harga=$totalhargaup;
										
									} 

									elseif(substr($totalhargaup,-3)>499)
									{
										$total_harga=round($totalhargaup,-3);
										
									} 

													
									else
									
									{
										$total_harga=round($totalhargaup,-3)+1000;
									} 
									
		$ttlharga =$total_harga*$jml;

		}else{
				 
		$tariflayanan=$harga+($harga*($markupharga/100));
		$totalhargaup=ceil($tariflayanan);
		$total_harga=round($totalhargaup,-3);
		$ttlharga =$harga*$jml;

		}

		
        $this->db->trans_begin();		
		## INSERT DT TRANSAKSI RJ ##
		
		$dataDT = [
		    'id_transaksi'		=> $post['no_tr'],	
			'noreg'		        => $post['noreg'],
			'id_grouplayanan' 	=> $post['itemlayanan'],
			'id_layanan'	    => $layanan,
			'tgl_transaksi'	    => date('Y-m-d'),
			'id_kategori' 		=> $kategori,
			'kode_coa'	        => $kodecoa,
			'id_dokter'         => $post['dokterlayanan'],
			'kode_kelas'	    => $kodekelas,
			'harga'		        => $total_harga,
			'qty'			    => $jml,
			'jml_harga'		    => $ttlharga,
			'share_dr'		    => 0,
			'tgl_entry'			=> date('Y-m-d H:i:s'), 
			'user'		        => $this->auth->user_id(),
            'id_div'		    => $divisi,
			'kdcab'		        => $session['kdcab']
			
		];
				
		$this->db->insert("rs_dttransaksirj",$dataDT);
		
		}
		
		if($this->db->trans_status() === FALSE){
		
	
			$this->db->trans_rollback();
			$status	= array(
			  'pesan'		=>'Gagal Save Item. Thanks ...',
			  'status'	=> 0
			);
			  $nm_hak_akses   = $this->addPermission;
			  $kode_universal = 'NewData';
			  $jumlah         = 1;
			  $sql            = $this->db->last_query();
			  $keterangan     = "GAGAL , tambah data transaksi".$layanan. $post['no_tr'].", atas Nama : ".$post['noreg'];
              $status1         = 0;			  
		} else {
			$this->db->trans_commit();
			$status	= array(
			  'pesan'		=>'Success Save Item. Thanks ...',
			  'status'	=> 1
			);			
			  $nm_hak_akses   = $this->addPermission;
			  $kode_universal = 'NewData';
			  $jumlah         = 1;
			  $sql            = $this->db->last_query();
			  $keterangan     = "Sukses, tambah data transaksi".$layanan.$post['no_tr'].", atas Nama : ".$post['noreg'];
              $status1         = 1;			  
		}
        //Save Log
        simpan_aktifitas($nm_hak_akses, $kode_universal, $keterangan, $jumlah, $sql, $status1);
		
  		echo json_encode($status);
	
	}
	
	
	
	
	
	public function load_billing()
    {
        $noreg	= $_POST['cari'];
        $session = $this->session->userdata('app_session');
        $divisi  = $session['id_div']; 
        
        $numb = 1;
        $data = $this->Laboratorium_model->GetTransaksiDt($noreg,$divisi);   
		
		// print_r ($data);
		// exit;
        if($data != 0){
		
		echo "<table id='example1' class='table table-bordered table-striped'>
		<tr>
			<td align='center'><b>Tgl </td>
			<td align='left'><b>Nama Layanan</td>
			<td align='left'><b>Dokter</td>
			<td align='center'><b>Qty</td>
			<td align='right'><b>Total</td>
			<td align='center'><b>Aksi</td>
		</tr>";	
	    
		foreach ($data as $d) {       
		$n=1;
		
    	echo "<tr>
				<td align='center'>$d->tgl_entry</td>
				<td align='left'>$d->nama_layanan</td>
				<td align='left'>$d->nama_dokter</td>
				<td align='center'>$d->qty</td>
				<td align='right'>$d->jml_harga</td>";
				
			if($d->tgl_transaksi == date('Y-m-d'))
            {	
     	      echo "<td align='center'><a href='javascript:deleteRow(\"{$d->id_detailtransaksi}\")' class='btn btn-warning'>
				Hapus
				</a>	
				</td>";
		    }
			
		  echo "</tr>";
		}
		
		echo "</table>";
		$n++;
        }
        else
        {
        echo"Belum Ada Transaksi";
        }
		
	}
     
	 
	// PROSES DELETE BILLING RJ
	// -------------------------------------------------------------
	public function hapusDetail(){
		$this->auth->restrict($this->addPermission);
		$id = $this->input->post('id');
		
		// print_r($id);
		// exit;
		
        $this->db->trans_begin();		
		## DELETE DT TRANSAKSI RJ ##
		
		$dataDT = [
		    'id_detailtransaksi'=> $post['id'],	
				
		];
		
		$this->Laboratorium_model->DeleteDetail($id);
		
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
	
	
	// FORM UPDATE PASIEN LAMA
	//------------------------------------------------------------
	public function Update_PasienLama($medrec){
		
		$this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
		$data = $this->Laboratorium_model->GetPasienLama($medrec);
		$this->template->page_icon('fa fa-edit');
		$prov		= $this->Laboratorium_model->get_data('provinsi');
		$kota 		= $this->Laboratorium_model->get_data('kota');
		$datprov    = $this->Laboratorium_model->pilih_provinsi()->result();
		$datdept    = $this->Laboratorium_model->pilih_departemen()->result();
		$datcust    = $this->Laboratorium_model->pilih_customer()->result();
		$datkota    = $this->Laboratorium_model->pilih_kota('')->result();
		$datkec     = $this->Laboratorium_model->pilih_kec('')->result();
		$datkel     = $this->Laboratorium_model->pilih_kel('')->result(); 
		
		
		
		$this->template->set('datprov',$datprov);
		$this->template->set('datkota',$datkota);
		$this->template->set('datkec',$datkec);
		$this->template->set('datkel',$datkel);		 
		$this->template->set('datdept',$datdept);
		$this->template->set('datcust',$datcust);
		
        $this->template->set('results', $data);
		$this->template->title('Laboratorium Pasien Rawat Jalan');
		$this->template->render('form_update_pasien');
		
	}
	
	 public function View_Pasien(){
		$medrec = $this->input->post('id');
		$this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
		$data = $this->Laboratorium_model->GetPasienLama($medrec);
		$this->template->page_icon('fa fa-edit');
		$prov		= $this->Laboratorium_model->get_data('provinsi');
		$kota 		= $this->Laboratorium_model->get_data('kota');
		$datprov    = $this->Laboratorium_model->pilih_provinsi()->result();
		$datdept    = $this->Laboratorium_model->pilih_departemen()->result();
		$datcust    = $this->Laboratorium_model->pilih_customer()->result();
		$datkota    = $this->Laboratorium_model->pilih_kota('')->result();
		$datkec     = $this->Laboratorium_model->pilih_kec('')->result();
		$datkel     = $this->Laboratorium_model->pilih_kel('')->result(); 
		
		
		
		$this->template->set('datprov',$datprov);
		$this->template->set('datkota',$datkota);
		$this->template->set('datkec',$datkec);
		$this->template->set('datkel',$datkel);		 
		$this->template->set('datdept',$datdept);
		$this->template->set('datcust',$datcust);
		
        $this->template->set('results', $data);
		$this->template->title('Laboratorium Pasien Rawat Jalan');
		$this->template->render('form_edit_pasien');
		
	}
	
	public function Update_Tr_Rj(){
		
		$noreg = $this->input->post('noreg');
		$medrec = $this->input->post('medrec');
		$this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
		$data = $this->Laboratorium_model->GetPasienLama($medrec);
		$data2 = $this->Laboratorium_model->GetPasienRJ($noreg);
		$this->template->page_icon('fa fa-edit');
		$prov		= $this->Laboratorium_model->get_data('provinsi');
		$kota 		= $this->Laboratorium_model->get_data('kota');
		$datprov    = $this->Laboratorium_model->pilih_provinsi()->result();
		$datdept    = $this->Laboratorium_model->pilih_departemen()->result();
		$datcust    = $this->Laboratorium_model->pilih_customer()->result();
		$datkota    = $this->Laboratorium_model->pilih_kota('')->result();
		$datkec     = $this->Laboratorium_model->pilih_kec('')->result();
		$datkel     = $this->Laboratorium_model->pilih_kel('')->result();
        
        $datdok  = $this->Laboratorium_model->pilih_dokter()->result();
		
        $datjad = $this->Laboratorium_model->get_jadwal()->result();
        
        $datjam = $this->Laboratorium_model->get_jadwal()->result();
		
		$datjaminan = $this->Laboratorium_model->get_jaminan()->result();
      
		
		print_r($data2);
		exit;
		
		$this->template->set('dokter', $getdokter);				
		$this->template->set('datprov',$datprov);
		$this->template->set('datkota',$datkota);
		$this->template->set('datkec',$datkec);
		$this->template->set('datkel',$datkel);		 
		$this->template->set('datdept',$datdept);
		$this->template->set('datdok',$datdok);
		$this->template->set('datjad',$datjad);
		$this->template->set('datjam',$datjam);
		$this->template->set('datjaminan',$datjaminan);
		$this->template->set('datcust',$datcust);		
        $this->template->set('results', $data);
		$this->template->set('result', $data2);
		$this->template->title('Laboratorium Pasien Rawat Jalan');
		$this->template->render('form_update_rj');
		
	}
	
	
	// PROSES SAVE BILLING RI
	// -------------------------------------------------------------
	public function saveBillingRi(){
		
		
		
		$this->auth->restrict($this->addPermission);
		$post = $this->input->post();
		$session = $this->session->userdata('app_session');
        $divisi  = $session['id_div']; 
		$kodekelas    = $post['kelas'];
		// print_r($kodekelas);
		// exit;
		$jaminan      = $post['jaminan'];
	    $grouplayanan = $post['itemlayanan'];
        $jml          = 1;
		
		$data = $this->Laboratorium_model->GetTarif($grouplayanan); 
		foreach ($data as $d) {    

            $layanan=$d->id_layanan;
			$kategori=$d->id_kategori;
			$kodecoa=$d->kode_coa;
		
			if ($kodekelas=='rawat_jalan')
			{ 
			$harga =$d->rawat_jalan;
			}
			elseif ($kodekelas=='kelas1')
			{ 
			$harga =$d->kelas1;
			}
			elseif ($kodekelas=='kelas2')
			{ 
			$harga =$d->kelas2;
			}
			elseif ($kodekelas=='kelas3')
			{ 
			$harga =$d->kelas3;
			}
			elseif ($kodekelas=='vip')
			{ 
			$harga =$d->vip;
			}

        $mark = $this->Laboratorium_model->GetMarkup($jaminan,$kodecoa);
                     
		if ($mark <= 0) {
		  $markupharga ='0';
		 }
         else
         {
		    foreach ($mark as $m) {    
			$markup=$m->markup_harga;
			}  
			$markupharga =$markup;
		 }
			  
		if ($mark != 0) { 


		$tariflayanan=$harga+($harga*($markupharga/100));

		$totalhargaup=ceil($tariflayanan);

								   if(substr($totalhargaup,-3) =='000')
									{
										$total_harga=$totalhargaup;
										
									} 

									elseif(substr($totalhargaup,-3)>499)
									{
										$total_harga=round($totalhargaup,-3);
										
									} 

													
									else
									
									{
										$total_harga=round($totalhargaup,-3)+1000;
									} 
									
		$ttlharga =$total_harga*$jml;

		}else{
				 
		$tariflayanan=$harga+($harga*($markupharga/100));
		$totalhargaup=ceil($tariflayanan);
		$total_harga=round($totalhargaup,-3);
		$ttlharga =$harga*$jml;

		}

		
        $this->db->trans_begin();		
		## INSERT DT TRANSAKSI RI ##
		
		$dataDT = [
		    'id_transaksi'		=> $post['no_tr'],	
			'noreg'		        => $post['noreg'],
			'id_grouplayanan' 	=> $post['itemlayanan'],
			'id_layanan'	    => $layanan,
			'tgl_transaksi'	    => date('Y-m-d'),
			'id_kategori' 		=> $kategori,
			'kode_coa'	        => $kodecoa,
			'id_dokter'         => $post['dokterlayanan'],
			'kode_kelas'	    => $kodekelas,
			'harga'		        => $total_harga,
			'qty'			    => $jml,
			'jml_harga'		    => $ttlharga,
			'share_dr'		    => '-',
			'tgl_entry'			=> date('Y-m-d H:i:s'),
			'user'		        => $this->auth->user_id(),
            'id_div'		    => $divisi
			
		];
		
		$insert = $this->db->insert("rs_dttransaksiri",$dataDT);
		
		}
		
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
	
	public function TrLaboratoriumRi($tr){
		
		// print_r($tr);
		// exit;
		
		$this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
		$data = $this->Laboratorium_model->GetPasienRI($tr);
		$getlayanan = $this->Laboratorium_model->pilih_grouplayanan('layanan',$session['id_div'])->result();
	    $getdokter  = $this->Laboratorium_model->pilih_dokter()->result();
		$this->template->page_icon('fa fa-edit');
		
		$this->template->set('layanan', $getlayanan);
		$this->template->set('dokter', $getdokter);
		$this->template->set('results', $data);
		$this->template->title('Pasien Rawat Jalan');
        $this->template->render('form_tr_ranap');
		
	}

    public function Billing_Ri(){	
		
		$noreg = $_POST['id'];
		$tr = $_POST['tr'];
		$kelas = $_POST['kelas'];
		$jaminan = $_POST['jaminan'];
		
		// print_r($tr);
		// exit;
		$this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
		$data = $this->Laboratorium_model->GetPasienRi($tr);
		$getlayanan = $this->Laboratorium_model->pilih_grouplayanan('layanan',$session['id_div'])->result();
	    $getdokter  = $this->Laboratorium_model->pilih_dokter()->result();
		$this->template->page_icon('fa fa-edit');
		
		$this->template->set('layanan', $getlayanan);
		$this->template->set('dokter', $getdokter);
		$this->template->set('noreg', $noreg);
		$this->template->set('notr', $tr);
		$this->template->set('kelas', $kelas);
		$this->template->set('jaminan', $jaminan);
		$this->template->title('Pasien Rawat Inap');
        $this->template->render('billing_ri');
		
	}  	
	
	public function load_billingRi()
    {
        $noreg	= $_POST['cari'];
        $session = $this->session->userdata('app_session');
        $divisi  = $session['id_div']; 
        
        $numb = 1;
        $data = $this->Laboratorium_model->GetTransaksiDtRi($noreg,$divisi);   
		
		// print_r ($data);
		// exit;
        if($data != 0){
		
		echo "<table id='example1' class='table table-bordered table-striped'>
		<tr>
			<td align='center'><b>Tgl </td>
			<td align='left'><b>Nama Layanan</td>
			<td align='left'><b>Dokter</td>
			<td align='center'><b>Qty</td>
			<td align='right'><b>Total</td>
			<td align='center'><b>Aksi</td>
		</tr>";	
	    
		foreach ($data as $d) {       
		$n=1;
		
    	echo "<tr>
				<td align='center'>$d->tgl_entry</td>
				<td align='left'>$d->nama_layanan</td>
				<td align='left'>$d->nama_dokter</td>
				<td align='center'>$d->qty</td>
				<td align='right'>$d->jml_harga</td>";
				
			if($d->tgl_transaksi == date('Y-m-d'))
            {	
     	      echo "<td align='center'><a href='javascript:deleteRow(\"{$d->id_detailtransaksi}\")' class='btn btn-warning'>
				Hapus
				</a>	
				</td>";
		    }
			
		  echo "</tr>";
		}
		
		echo "</table>";
		$n++;
        }
        else
        {
        echo"Belum Ada Transaksi";
        }
		
	}
     
	 
	// PROSES DELETE BILLING RJ
	// -------------------------------------------------------------
	public function hapusDetailRi(){
		$this->auth->restrict($this->addPermission);
		$id = $this->input->post('id');
		
		// print_r($id);
		// exit;
		
        $this->db->trans_begin();		
		## DELETE DT TRANSAKSI RJ ##
		
		$dataDT = [
		    'id_detailtransaksi'=> $post['id'],	
				
		];
		
		$this->Laboratorium_model->DeleteDetailRi($id);
		
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
	
	public function addLaboratoriumlab(){
		$this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session'); 
		$this->template->page_icon('fa fa-pencil');
		$prov = $this->Laboratorium_model->get_data('provinsi');
		$kota = $this->Laboratorium_model->get_data('kota');
		$datprov    = $this->Laboratorium_model->pilih_provinsi()->result();
		$datdept    = $this->Laboratorium_model->pilih_departemenlab()->result();
		$datcust    = $this->Laboratorium_model->pilih_customer()->result();
		
		$this->template->set('datprov',$datprov);
		$this->template->set('datdept',$datdept);
		$this->template->set('datcust',$datcust);
        
        $this->template->title('Laboratorium Laboratorium ');
        $this->template->render('form_add_pendaftaran_lab');
		
	}
	
	public function list_pasienlab()
      {  
	    $this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
	    $data = $this->Laboratorium_model->GetTransaksiLab();
        $this->template->set('results', $data);
	    $this->template->title('Daftar Pasien laboratorium');
        $this->template->render('list_lab');
      }


public function Update_Tr_Lab(){
		
		$noreg = $this->input->post('noreg');
		$medrec = $this->input->post('medrec');
		$this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
		$data = $this->Laboratorium_model->GetPasienLama($medrec);
		$data2 = $this->Laboratorium_model->GetPasienLab($noreg);
		$this->template->page_icon('fa fa-edit');
		$prov		= $this->Laboratorium_model->get_data('provinsi');
		$kota 		= $this->Laboratorium_model->get_data('kota');
		$datprov    = $this->Laboratorium_model->get_data('provinsi');
		$datdept    = 0;
		$datcust    = 0;
		$datkota    = 0;
		$datkec     = 0;
		$datkel     = 0;
        
        $datdok  = $this->Laboratorium_model->pilih_dokter()->result();
		
        $datjad = $this->Laboratorium_model->get_jadwal()->result();
        
        $datjam = $this->Laboratorium_model->get_jadwal()->result();
		
		$datjaminan = $this->Laboratorium_model->get_jaminan()->result();
      
		
	
		
		$this->template->set('dokter', $getdokter);				
		$this->template->set('datprov',$datprov);
		$this->template->set('datkota',$datkota);
		$this->template->set('datkec',$datkec);
		$this->template->set('datkel',$datkel);		 
		$this->template->set('datdept',$datdept);
		$this->template->set('datdok',$datdok);
		$this->template->set('datjad',$datjad);
		$this->template->set('datjam',$datjam);
		$this->template->set('datjaminan',$datjaminan);
		$this->template->set('datcust',$datcust);		
        $this->template->set('results', $data);
		$this->template->set('result', $data2);
		$this->template->title('Laboratorium Pasien Rawat Jalan');
		$this->template->render('form_update_rj');
		
	}	  
	  
	  
	
	public function lab()
    {
        $this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
		$this->template->page_icon('fa fa-users');
        //$data = $this->Laboratorium_model->rekap_data($session['kdcab'])->result();
       // $data = $this->Laboratorium_model->find_all_by();
        //$this->template->set('results', $data);
        $this->template->title('Laboratorium');
        $this->template->render('list_lab2'); 
		
    }
	public function server_side_inv()
	{
		$this->Laboratorium_model->get_data_json_inv();
	}
	

}
?>
