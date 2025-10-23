<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * @author Yunaz
 * @copyright Copyright (c) 2018, Yunaz
 *
 * This is controller for Customer
 */

class Dokter extends Admin_Controller {

    //Permission
    protected $viewPermission   = "Dokter.View";
    protected $addPermission    = "Dokter.Add";
    protected $managePermission = "Dokter.Manage";
    protected $deletePermission = "Dokter.Delete";

    public function __construct()
    {
        parent::__construct();

        $this->load->library(array('Mpdf','upload','Image_lib'));
        $this->load->model(array('Dokter/Dokter_model',
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
        $where       = array(			
						'id_dokter'=>$session['id_dokter'],
					);
					   
        $data = $this->Dokter_model->get_data_where('rs_hdtransaksirj', $where);
        $this->template->set('results', $data);
        $this->template->title('Dokter');
        $this->template->render('index');
		
    }
	
	public function addPendaftaranRj(){
		$this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
		$this->template->page_icon('fa fa-pencil');
		$prov = $this->Dokter_model->get_data('provinsi');
		$kota = $this->Dokter_model->get_data('kota');
		$datprov    = $this->Dokter_model->pilih_provinsi()->result();
		$datdept    = $this->Dokter_model->pilih_departemen()->result();
		$datcust    = $this->Dokter_model->pilih_customer()->result();
		
		$this->template->set('datprov',$datprov);
		$this->template->set('datdept',$datdept);
		$this->template->set('datcust',$datcust);
        
        $this->template->title('Pendaftaran Pasien Rawat Jalan ');
        $this->template->render('form_add_pendaftaran');
		
	}
	
	function get_kota(){
        $provinsi = $_GET['provinsi'];
        $datkota = $this->Dokter_model->pilih_kota($provinsi)->result();
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
        $datkec = $this->Dokter_model->pilih_kec($kota)->result();
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
        $datkel = $this->Dokter_model->pilih_kel($kec)->result();
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
        $datdokter = $this->Dokter_model->pilih_deptdokter($dept,$hari,$jam)->result();
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
        $datcust = $this->Dokter_model->pilih_jaminan($cust)->result();
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
        $datcust = $this->Dokter_model->pilih_jadwal($dept)->result();
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
        $datcust = $this->Dokter_model->pilih_jam($dept,$hari)->result();
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
		
        $cek = $this->Dokter_model->cek_dokter($rm,$dept,$hari,$jam,$dokter);
		
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
		
		$code = $this->Dokter_model->generate_no_rm();
		$no_tr = $this->Dokter_model->generate_no_tr();
		$no_reg = $this->Dokter_model->generate_no_reg();
		$antrian = $this->Dokter_model->cek_antrian($dokter,$jam,$tgl_daftar);
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
	    $data = $this->Dokter_model->GetPasien($this->uri->segment(3));
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
		$data = $this->Dokter_model->GetPasienLama($medrec);
		$this->template->page_icon('fa fa-edit');
		$prov		= $this->Dokter_model->get_data('provinsi');
		$kota 		= $this->Dokter_model->get_data('kota');
		$datprov    = $this->Dokter_model->pilih_provinsi()->result();
		$datdept    = $this->Dokter_model->pilih_departemen()->result();
		$datcust    = $this->Dokter_model->pilih_customer()->result();
		
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
		
		$code = $this->Dokter_model->generate_no_rm();
		$no_tr = $this->Dokter_model->generate_no_tr();
		$no_reg = $this->Dokter_model->generate_no_reg();
		$antrian = $this->Dokter_model->cek_antrian($dokter,$jam,$tgl_daftar);
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
		$dokter  = $session['id_dokter'];
	    $data = $this->Dokter_model->GetTransaksiRj_Where($dokter);
		//'tgl_registrasi'=>date('Y-m-d')
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
	    $data = $this->Dokter_model->GetPasien($this->uri->segment(3));
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
		$data = $this->Dokter_model->GetPasienLama($medrec);
		$this->template->page_icon('fa fa-edit');
		$kelas		= $this->Dokter_model->get_data('rs_kelas');
		$dokter		= $this->Dokter_model->get_data('rs_dokter');
		$kota 		= $this->Dokter_model->get_data('kota');
		$datprov    = $this->Dokter_model->pilih_provinsi()->result();
		$datdept    = $this->Dokter_model->pilih_departemen()->result();
		$datcust    = $this->Dokter_model->pilih_customer()->result();
		
		$this->template->set('datkelas',$kelas);
		$this->template->set('datdokter',$dokter);
		$this->template->set('datcust',$datcust);
		
        $this->template->set('results', $data);
		$this->template->title('Pendaftaran Pasien Rawat Inap');
		$this->template->render('form_add_pendaftaran_Ri');
		
	}
	
	function get_kelas(){
        $kelas = $_GET['kelas'];
		
        $datkelas = $this->Dokter_model->pilih_ruang($kelas)->result();
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
		
        $datkelas = $this->Dokter_model->pilih_combobox('rs_bed','id_ruang', $ruang)->result();
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
					   
        $datnobed = $this->Dokter_model->pilih_combobox_array('rs_bed_nomor', $where)->result();
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
		
		$code = $this->Dokter_model->generate_no_rm();
		$no_tr = $this->Dokter_model->generate_no_tr_ri();
		$no_reg = $this->Dokter_model->generate_no_reg_ri();
		$antrian = $this->Dokter_model->cek_antrian($dokter,$jam,$tgl_daftar);
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

		$this->Dokter_model->getUpdate('rs_bed_nomor',$data_update,$where);
		
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
			$keterangan = 'SUKSES, Simpan Data Pendaftaran RI';
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
	    $data = $this->Dokter_model->GetTransaksiRi();
        $this->template->set('results', $data);
	    $this->template->title('Daftar Pasien Rawat Inap');
        $this->template->render('list_pasien_ri');
      } 
	  
	public function TrPendaftaranRj($tr){
		
		// print_r($tr);
		// exit;
		
		$this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
		$data = $this->Dokter_model->GetPasienRJ($tr);
		$getlayanan = $this->Dokter_model->pilih_grouplayanan('layanan',$session['id_div'])->result();
	    $getdokter  = $this->Dokter_model->pilih_dokter()->result();
		$this->template->page_icon('fa fa-edit');
		
		$this->template->set('layanan', $getlayanan);
		$this->template->set('dokter', $getdokter);
		$this->template->set('results', $data);
		$this->template->title('Pasien Rawat Jalan');
        $this->template->render('form_tr_pendaftaran');
		
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
		$data = $this->Dokter_model->GetPasienRJ($tr);
		$getlayanan = $this->Dokter_model->pilih_grouplayanan('layanan',$session['id_div'])->result();
	    $getdokter  = $this->Dokter_model->pilih_dokter()->result();
		$this->template->page_icon('fa fa-edit');
		
		$this->template->set('layanan', $getlayanan);
		$this->template->set('dokter', $getdokter);
		$this->template->set('noreg', $noreg);
		$this->template->set('notr', $tr);
		$this->template->set('kelas', $kelas);
		$this->template->set('jaminan', $jaminan);
		$this->template->title('Pasien Rawat Jalan');
        $this->template->render('billing_rj');
		
	}  
	
	// PROSES SAVE BILLING RJ
	// -------------------------------------------------------------
	public function saveBilling(){
		$this->auth->restrict($this->addPermission);
		$post = $this->input->post();
		$session = $this->session->userdata('app_session');
        $divisi  = $session['id_div']; 
		$kodekelas    = $post['kelas'];
		$jaminan      = $post['jaminan'];
	    $grouplayanan = $post['itemlayanan'];
        $jml          = 1;
		
		$data = $this->Dokter_model->GetTarif($grouplayanan); 
		foreach ($data as $d) {    

            $layanan=$d->id_layanan;
			$kategori=$d->id_kategori;
			$kodecoa=$d->kode_coa;
		
			if ($kodekelas='rawat_jalan')
			{ 
			$harga =$d->rawat_jalan;
			}
			elseif ($kodekelas='kelas1')
			{ 
			$harga =$d->kelas1;
			}
			elseif ($kodekelas='kelas2')
			{ 
			$harga =$d->kelas2;
			}
			elseif ($kodekelas='kelas3')
			{ 
			$harga =$d->kelas3;
			}
			elseif ($kodekelas='vip')
			{ 
			$harga =$d->vip;
			}

        $mark = $this->Dokter_model->GetMarkup($jaminan,$kodecoa);
                     
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
			'share_dr'		    => '-',
			'tgl_entry'			=> date('Y-m-d H:i:s'),
			'user'		        => $this->auth->user_id(),
            'id_div'		    => $divisi
			
		];
		
		$insert = $this->db->insert("rs_dttransaksirj",$dataDT);
		
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
	
	
	
	
	
	public function load_billing()
    {
        $noreg	= $_POST['cari'];
        $session = $this->session->userdata('app_session');
        $divisi  = $session['id_div']; 
        
        $numb = 1;
        $data = $this->Dokter_model->GetTransaksiDt($noreg,$divisi);   
		
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
		
		$this->Dokter_model->DeleteDetail($id);
		
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
		$data = $this->Dokter_model->GetPasienLama($medrec);
		$this->template->page_icon('fa fa-edit');
		$prov		= $this->Dokter_model->get_data('provinsi');
		$kota 		= $this->Dokter_model->get_data('kota');
		$datprov    = $this->Dokter_model->pilih_provinsi()->result();
		$datdept    = $this->Dokter_model->pilih_departemen()->result();
		$datcust    = $this->Dokter_model->pilih_customer()->result();
		$datkota    = $this->Dokter_model->pilih_kota('')->result();
		$datkec     = $this->Dokter_model->pilih_kec('')->result();
		$datkel     = $this->Dokter_model->pilih_kel('')->result(); 
		
		
		
		$this->template->set('datprov',$datprov);
		$this->template->set('datkota',$datkota);
		$this->template->set('datkec',$datkec);
		$this->template->set('datkel',$datkel);		 
		$this->template->set('datdept',$datdept);
		$this->template->set('datcust',$datcust);
		
        $this->template->set('results', $data);
		$this->template->title('Pendaftaran Pasien Rawat Jalan');
		$this->template->render('form_update_pasien');
		
	}
	
	 public function View_Pasien(){
		$medrec = $this->input->post('id');
		$this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
		$data = $this->Dokter_model->GetPasienLama($medrec);
		$this->template->page_icon('fa fa-edit');
		$prov		= $this->Dokter_model->get_data('provinsi');
		$kota 		= $this->Dokter_model->get_data('kota');
		$datprov    = $this->Dokter_model->pilih_provinsi()->result();
		$datdept    = $this->Dokter_model->pilih_departemen()->result();
		$datcust    = $this->Dokter_model->pilih_customer()->result();
		$datkota    = $this->Dokter_model->pilih_kota('')->result();
		$datkec     = $this->Dokter_model->pilih_kec('')->result();
		$datkel     = $this->Dokter_model->pilih_kel('')->result(); 
		
		
		
		$this->template->set('datprov',$datprov);
		$this->template->set('datkota',$datkota);
		$this->template->set('datkec',$datkec);
		$this->template->set('datkel',$datkel);		 
		$this->template->set('datdept',$datdept);
		$this->template->set('datcust',$datcust);
		
        $this->template->set('results', $data);
		$this->template->title('Pendaftaran Pasien Rawat Jalan');
		$this->template->render('form_edit_pasien');
		
	}
	
	public function Update_Tr_Rj(){
		
		$noreg = $this->input->post('noreg');
		$medrec = $this->input->post('medrec');
		$this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
		$data = $this->Dokter_model->GetPasienLama($medrec);
		$data2 = $this->Dokter_model->GetPasienRJ($noreg);
		$this->template->page_icon('fa fa-edit');
		$prov		= $this->Dokter_model->get_data('provinsi');
		$kota 		= $this->Dokter_model->get_data('kota');
		$datprov    = $this->Dokter_model->pilih_provinsi()->result();
		$datdept    = $this->Dokter_model->pilih_departemen()->result();
		$datcust    = $this->Dokter_model->pilih_customer()->result();
		$datkota    = $this->Dokter_model->pilih_kota('')->result();
		$datkec     = $this->Dokter_model->pilih_kec('')->result();
		$datkel     = $this->Dokter_model->pilih_kel('')->result(); 
		
		
		
		$this->template->set('datprov',$datprov);
		$this->template->set('datkota',$datkota);
		$this->template->set('datkec',$datkec);
		$this->template->set('datkel',$datkel);		 
		$this->template->set('datdept',$datdept);
		$this->template->set('datcust',$datcust);		
        $this->template->set('results', $data);
		$this->template->set('hasil', $data2);
		$this->template->title('Pendaftaran Pasien Rawat Jalan');
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
		
		$data = $this->Dokter_model->GetTarif($grouplayanan); 
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

        $mark = $this->Dokter_model->GetMarkup($jaminan,$kodecoa);
                     
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
	
	public function TrPendaftaranRi($tr){
		
		// print_r($tr);
		// exit;
		
		$this->auth->restrict($this->viewPermission);
        $session = $this->session->userdata('app_session');
		$data = $this->Dokter_model->GetPasienRI($tr);
		$getlayanan = $this->Dokter_model->pilih_grouplayanan('layanan',$session['id_div'])->result();
	    $getdokter  = $this->Dokter_model->pilih_dokter()->result();
		$this->template->page_icon('fa fa-edit');
		
		$this->template->set('layanan', $getlayanan);
		$this->template->set('dokter', $getdokter);
		$this->template->set('results', $data);
		$this->template->title('Pasien Rawat Inap');
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
		$data = $this->Dokter_model->GetPasienRi($tr);
		$getlayanan = $this->Dokter_model->pilih_grouplayanan('layanan',$session['id_div'])->result();
	    $getdokter  = $this->Dokter_model->pilih_dokter()->result();
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
        $data = $this->Dokter_model->GetTransaksiDtRi($noreg,$divisi);   
		
		// print_r ($data);
		// exit;
        if($data != 0){
		
		echo "<table id='example1' class='table table-bordered table-striped'>
		<tr>
			<td align='center'><b>Tgl </td>
			<td align='left'><b>Nama Layanan</td>
			<td align='left'><b>Kategori</td>
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
				<td align='left'>$d->nama_kategori</td>
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
		
		$this->Dokter_model->DeleteDetailRi($id);
		
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
?>
