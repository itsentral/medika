<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * @author Yunaz
 * @copyright Copyright (c) 2018, Yunaz
 *
 * This is controller for Customer
 */

class Jadwal_dokter extends Admin_Controller {

    //Permission
    protected $viewPermission   = "Jadwal_dokter.View";
    protected $addPermission    = "Jadwal_dokter.Add";
    protected $managePermission = "Jadwal_dokter.Manage";
    protected $deletePermission = "Jadwal_dokter.Delete";

    public function __construct()
    {
        parent::__construct();

        $this->load->library(array('Mpdf','upload','Image_lib'));
        $this->load->model(array('Jadwal_dokter/Jadwal_dokter_model',
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
        //$data = $this->Pendaftaran_model->rekap_data($session['kdcab'])->result();
        $data = $this->Pendaftaran_model->find_all_by();
        $this->template->set('results', $data);
        $this->template->title('Pendaftaran Pasien Rawat Jalan');
        $this->template->render('list');
		
    }
	
	public function addPendaftaranRj(){
		$this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
		$this->template->page_icon('fa fa-pencil');
		$prov = $this->Pendaftaran_model->get_data('provinsi');
		$kota = $this->Pendaftaran_model->get_data('kota');
		$datprov    = $this->Pendaftaran_model->pilih_provinsi()->result();
		$datdept    = $this->Pendaftaran_model->pilih_departemen()->result();
		$datcust    = $this->Pendaftaran_model->pilih_customer()->result();
		
		$this->template->set('datprov',$datprov);
		$this->template->set('datdept',$datdept);
		$this->template->set('datcust',$datcust);
        
        $this->template->title('Pendaftaran Pasien Rawat Jalan ');
        $this->template->render('form_add_pendaftaran');
		
	}
	
	function get_kota(){
        $provinsi = $_GET['provinsi'];
        $datkota = $this->Pendaftaran_model->pilih_kota($provinsi)->result();
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
        $datkec = $this->Pendaftaran_model->pilih_kec($kota)->result();
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
        $datkel = $this->Pendaftaran_model->pilih_kel($kec)->result();
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
        $datdokter = $this->Pendaftaran_model->pilih_deptdokter($dept,$hari,$jam)->result();
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
        $datcust = $this->Pendaftaran_model->pilih_jaminan($cust)->result();
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
        $datcust = $this->Pendaftaran_model->pilih_jadwal($dept)->result();
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
        $datcust = $this->Pendaftaran_model->pilih_jam($dept,$hari)->result();
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
		
        $cek = $this->Pendaftaran_model->cek_dokter($rm,$dept,$hari,$jam,$dokter);
		
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
	public function savePendaftaranRj(){
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
		
		$code = $this->Pendaftaran_model->generate_no_rm();
		$no_tr = $this->Pendaftaran_model->generate_no_tr();
		$no_reg = $this->Pendaftaran_model->generate_no_reg();
		$antrian = $this->Pendaftaran_model->cek_antrian($dokter,$jam,$tgl_daftar);
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
	
	
	public function search_pasien()
      {  
	    $this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
	    $data = $this->Pendaftaran_model->GetPasien($this->uri->segment(3));
        $this->template->set('results', $data);
		$this->template->set('search', $this->uri->segment(3));
        $this->template->title('Pendaftaran Pasien Rawat Jalan');
        $this->template->render('list');
      }
	  
	
	
	// FORM DAFTAR PASIEN LAMA
	//------------------------------------------------------------
	public function Daftar_PasienLama($medrec){
		
		$this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
		$data = $this->Pendaftaran_model->GetPasienLama($medrec);
		$this->template->page_icon('fa fa-edit');
		$prov		= $this->Pendaftaran_model->get_data('provinsi');
		$kota 		= $this->Pendaftaran_model->get_data('kota');
		$datprov    = $this->Pendaftaran_model->pilih_provinsi()->result();
		$datdept    = $this->Pendaftaran_model->pilih_departemen()->result();
		$datcust    = $this->Pendaftaran_model->pilih_customer()->result();
		
		$this->template->set('datprov',$datprov);
		$this->template->set('datdept',$datdept);
		$this->template->set('datcust',$datcust);
		
        $this->template->set('results', $data);
		$this->template->title('Pendaftaran Pasien Rawat Jalan');
		$this->template->render('form_add_pendaftaran_lama');
		
	}
	
	##savePendaftaranRj_Lama##
	
	// PROSES SAVE PENDAFTARAN RJ
	// -------------------------------------------------------------
	public function savePendaftaranRj_Lama(){
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
		
		$code = $this->Pendaftaran_model->generate_no_rm();
		$no_tr = $this->Pendaftaran_model->generate_no_tr();
		$no_reg = $this->Pendaftaran_model->generate_no_reg();
		$antrian = $this->Pendaftaran_model->cek_antrian($dokter,$jam,$tgl_daftar);
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
	    $data = $this->Pendaftaran_model->GetTransaksiRj();
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
        $this->template->title('Pendaftaran Pasien Rawat Inap');
        $this->template->render('list_ri');
		
    }
	
	
	public function search_pasien_ri()
      {  
	    $this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
	    $data = $this->Pendaftaran_model->GetPasien($this->uri->segment(3));
        $this->template->set('results', $data);
		$this->template->set('search', $this->uri->segment(3));
        $this->template->title('Pendaftaran Pasien Rawat Inap');
        $this->template->render('list_ri');
      }
	
	// FORM DAFTAR PASIEN RAWAT INAP
	//------------------------------------------------------------
	public function Daftar_PasienRi($medrec){
		
		$this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
		$data = $this->Pendaftaran_model->GetPasienLama($medrec);
		$this->template->page_icon('fa fa-edit');
		$kelas		= $this->Pendaftaran_model->get_data('rs_kelas');
		$dokter		= $this->Pendaftaran_model->get_data('rs_dokter');
		$kota 		= $this->Pendaftaran_model->get_data('kota');
		$datprov    = $this->Pendaftaran_model->pilih_provinsi()->result();
		$datdept    = $this->Pendaftaran_model->pilih_departemen()->result();
		$datcust    = $this->Pendaftaran_model->pilih_customer()->result();
		
		$this->template->set('datkelas',$kelas);
		$this->template->set('datdokter',$dokter);
		$this->template->set('datcust',$datcust);
		
        $this->template->set('results', $data);
		$this->template->title('Pendaftaran Pasien Rawat Inap');
		$this->template->render('form_add_pendaftaran_Ri');
		
	}
	
	function get_kelas(){
        $kelas = $_GET['kelas'];
		
        $datkelas = $this->Pendaftaran_model->pilih_ruang($kelas)->result();
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
		
        $datkelas = $this->Pendaftaran_model->pilih_combobox('rs_bed','id_ruang', $ruang)->result();
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
		
        $datnobed = $this->Pendaftaran_model->pilih_combobox('rs_bed_nomor','id_bed', $bed)->result();
        // print_r($datcust);
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
	
	
	public function savePendaftaranRi(){
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
		
		$code = $this->Pendaftaran_model->generate_no_rm();
		$no_tr = $this->Pendaftaran_model->generate_no_tr();
		$no_reg = $this->Pendaftaran_model->generate_no_reg();
		$antrian = $this->Pendaftaran_model->cek_antrian($dokter,$jam,$tgl_daftar);
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
			'id_dokter'	        => $post['dokter1'],
			'id_dokter2'	    => $post['dokter2'],
			'jenis_rawat'	    => 'RI',
			'asal_pasien'	    => $post['asal_pasien'],
			'kode_kelas'        => $post['kelas'],
			'id_ruang'          => $post['ruang'],
			'id_bed'            => $post['bed'],
			'nobed'             => $post['nobed'],
			'nobed'             => $post['nobed'],
			'tgl_entry'			=> date('Y-m-d H:i:s'),
			'user'		        => $this->auth->user_id()
			
		];
		
		$insert = $this->db->insert("rs_hdtransaksiri",$dataHd);
		
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
	
	public function list_pasienri()
      {  
	    $this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
	    $data = $this->Pendaftaran_model->GetTransaksiRi();
        $this->template->set('results', $data);
	    $this->template->title('Daftar Pasien Rawat Inap');
        $this->template->render('list_pasien_ri');
      } 
	  
}

?>
