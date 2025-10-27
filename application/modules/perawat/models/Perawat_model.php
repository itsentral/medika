<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * @author Yunas Handra
 * @copyright Copyright (c) 2018, Yunas Handra
 *
 * This is model class for table "Customer"
 */

class Perawat_model extends BF_Model
{

    /**
     * @var string  User Table Name
     */
    protected $table_name = 'rs_pasien';
    protected $key        = 'id';

    /**
     * @var string Field name to use for the created time column in the DB table
     * if $set_created is enabled.
     */
    protected $created_field = 'tgl_entry';

    /**
     * @var string Field name to use for the modified time column in the DB
     * table if $set_modified is enabled.
     */
    protected $modified_field = 'tgl_edit';

    /**
     * @var bool Set the created time automatically on a new record (if true)
     */
    protected $set_created = true;

    /**
     * @var bool Set the modified time automatically on editing a record (if true)
     */
    protected $set_modified = true;
    /**
     * @var string The type of date/time field used for $created_field and $modified_field.
     * Valid values are 'int', 'datetime', 'date'.
     */
    /**
     * @var bool Enable/Disable soft deletes.
     * If false, the delete() method will perform a delete of that row.
     * If true, the value in $deleted_field will be set to 1.
     */
    protected $soft_deletes = false;

    protected $date_format = 'datetime';

    /**
     * @var bool If true, will log user id in $created_by_field, $modified_by_field,
     * and $deleted_by_field.
     */
    protected $log_user = true;

    /**
     * Function construct used to load some library, do some actions, etc.
     */
    public function __construct()
    {
        parent::__construct();
    }
	
    function generate_id($kode='') {
      $query = $this->db->query("SELECT MAX(id_customer) as max_id FROM customer");
      $row = $query->row_array();
      $thn = date('y');
      $max_id = $row['max_id'];
      $max_id1 =(int) substr($max_id,3,5);
      $counter = $max_id1 +1;
      $idcust = "C".$thn.str_pad($counter, 5, "0", STR_PAD_LEFT);
      return $idcust;
	}

    function get_data($table)
    {
       return $this->db->get($table)->result();
    }
	
	 function get_data_where($table,$where)
    {
       return $this->db->get_where($table,$where)->result();
    }

    function getById($id)
    {
       return $this->db->get_where('customer',array('id_customer' => $id))->row_array();
    }

   	function pilih_provinsi()
    {
        $query="SELECT
                provinsi.id_prov,
                provinsi.nama
                FROM
                provinsi";
        return $this->db->query($query);
    }

    function get_prov($id){
        $query = $this->db->query("SELECT provinsi FROM customer WHERE id_customer='$id'");
        $row = $query->row_array();
        $provinsi     = $row['provinsi'];
        return $provinsi;
    }

   function pilih_kota($provinsi){
	    if ($provinsi!=''){
        $query="SELECT
                kabupaten.id_kab,
                kabupaten.nama
                FROM kabupaten where id_prov='$provinsi'";
		}
		else{
		$query="SELECT
                kabupaten.id_kab,
                kabupaten.nama
                FROM kabupaten";
		}	
		
        return $this->db->query($query);
    }
	function pilih_kec($kota){
		if($kota!=''){
        $query="SELECT
                kecamatan.id_kec,
                kecamatan.nama
                FROM kecamatan where id_kab='$kota'";
		}
		else{
			 $query="SELECT
                kecamatan.id_kec,
                kecamatan.nama
                FROM kecamatan";
		}
        return $this->db->query($query);
    }
	function pilih_kel($kec){
		if($kec !=''){
        $query="SELECT
                kelurahan.id_kel,
                kelurahan.nama
                FROM kelurahan where id_kec='$kec'";
	    }
		else{
		$query="SELECT
                kelurahan.id_kel,
                kelurahan.nama
                FROM kelurahan";	
		}
        return $this->db->query($query);
    }
	
	function pilih_departemen()
    {
        $query="SELECT
                rs_departemen.id_departemen,
                rs_departemen.nama_departemen
                FROM
                rs_departemen";
        return $this->db->query($query);
    }
	
	function pilih_jadwal($dept)
    {
		$Day  = date('l');
        $query="SELECT
                rs_departemendokter.id_dokter as dokter_id,
				rs_dokter_schedule.id,
				rs_dokter_schedule.id_dokter,
                rs_dokter_schedule.nama_dokter,
				rs_dokter_schedule.days,
				rs_dokter_schedule.hari,
				rs_dokter_schedule.jam_awal,
				rs_dokter_schedule.jam_akhir
				FROM
                rs_departemendokter
				inner join rs_dokter_schedule on rs_departemendokter.id_dokter = rs_dokter_schedule.id_dokter
				where rs_departemendokter.id_departemen ='$dept' AND days ='$Day' GROUP BY days";
				
        return $this->db->query($query);
    }
	
	function pilih_jam($dept,$hari)
    {
		$Day  = date('l');
        $query="SELECT
                rs_departemendokter.id_dokter as dokter_id,
				rs_dokter_schedule.id,
				rs_dokter_schedule.id_dokter,
                rs_dokter_schedule.nama_dokter,
				rs_dokter_schedule.days,
				rs_dokter_schedule.hari,
				rs_dokter_schedule.jam_awal,
				rs_dokter_schedule.jam_akhir
				FROM
                rs_departemendokter
				inner join rs_dokter_schedule on rs_departemendokter.id_dokter = rs_dokter_schedule.id_dokter
				where rs_departemendokter.id_departemen ='$dept' AND hari ='$hari'";
				
        return $this->db->query($query);
    }
	
	
	
	function pilih_deptdokter($dept,$hari,$jam)
    {
        $query="SELECT
                rs_departemendokter.id_dokter,
                rs_dokter_schedule.nama_dokter
				
                FROM
                rs_departemendokter
				inner join rs_dokter_schedule on rs_departemendokter.id_dokter = rs_dokter_schedule.id_dokter
				where rs_departemendokter.id_departemen ='$dept' 
				AND  rs_dokter_schedule.hari='$hari'
				AND  rs_dokter_schedule.jam_awal='$jam'";
        return $this->db->query($query);
    }
	
	function pilih_customer()
    {
        $query="SELECT
                rs_jaminan.kode_jaminan,
                rs_jaminan.nama_combobox
                FROM
                rs_jaminan";
        return $this->db->query($query);
    }
	
	function pilih_jaminan($cust)
    {
        $query="SELECT
                rs_customer.id_customer,
                rs_customer.nama_customer
                FROM
                rs_customer
				where rs_customer.kode_jaminan ='$cust'";
        return $this->db->query($query);
    }
	
	function generate_no_rm(){


		$tgl = date('Y-m-d');
        $arr_tgl = array(1=>'A',2=>'B',3=>'C',4=>'D',5=>'E',6=>'F',
        7=>'G',8=>'H',9=>'I',10=>'J',11=>'K',12=>'L'
        );
        $bln_now = date('m',strtotime($tgl));
        $kode_bln = '';
        foreach($arr_tgl as $k=>$v){
          if($k == $bln_now){
            $kode_bln = $v;
          }
        }
		
		$th  = date('y');
        $cek = date('y').$kode_bln;
        $query = "SELECT MAX(medrec) as max_id FROM rs_pasien WHERE LEFT(medrec,2)='$th'";
        $q = $this->db->query($query);
        $query_cek = $q->num_rows();
        if ($query_cek == 0) {
          $kode = 1;
          $next_kode = str_pad($kode, 6, "0", STR_PAD_LEFT);
          $fin = date('y').$kode_bln.$next_kode;
        }else {
          $query = "SELECT MAX(medrec) as max_id FROM rs_pasien WHERE LEFT(medrec,2)='$th'";
          $q = $this->db->query($query);
          $r = $q->row();
          $kode = (int)substr($r->max_id,3)+1;
          $next_kode = str_pad($kode, 6, "0", STR_PAD_LEFT);
          $fin = date('y').$kode_bln.$next_kode;
        }


      return $fin;
    }
	
	function cek_antrian($dokter,$jam,$tgl_daftar)
	{
		$query = "SELECT id_dokter FROM rs_hdtransaksirj WHERE tgl_registrasi='$tgl_daftar' AND id_dokter='$dokter' AND jam_awal='$jam'";
        $q = $this->db->query($query);
        $query_cek = $q->num_rows();
        if ($query_cek == 0) {
          $kode = 1;
          $antrian = $kode;
        }else {
          $kode = (int)$query_cek+1;
          $antrian = $kode;
        }


      return $antrian;
    }
	
	function generate_no_tr(){


		$today=date("ymd");
		$year=date("y");
		$month=date("m");
		$day=date("d");

        $cek = date('y').$kode_bln;
        $query = "SELECT MAX(RIGHT(id_transaksi,4)) as max_id from rs_hdtransaksirj WHERE id_transaksi LIKE '%$today%'";
        $q = $this->db->query($query);
		$r = $q->row();
        $query_cek = $q->num_rows();
		$kode2 = $r->max_id;
		$kd_noreg = "";
		 
        if ($query_cek == 0) {
          $kd_noreg = 1;
          $reg = sprintf("%02d%02d%02d%04s", $year,$month,$day,$kode_noreg);
		  
        }else {
         		 	  
        // jk sudah ada maka
			$kd_new = $kode2+1; // kode sebelumnya ditambah 1.
			$reg = sprintf("%02d%02d%02d%04s", $year,$month,$day,$kd_new);
			
        }
		
		$tr ="TR$reg";
		
         
          // print_r($tr);
		  // exit();

      return $tr;
    }
		
	
	function generate_no_reg(){


		$today=date("ymd");
		$year=date("y");
		$month=date("m");
		$day=date("d");

        $cek = date('y').$kode_bln;
        $query = "SELECT MAX(RIGHT(noreg,4)) as max_id from rs_hdtransaksirj WHERE noreg LIKE '%$today%'";
        $q = $this->db->query($query);
		$r = $q->row();
        $query_cek = $q->num_rows();
		$kode2 = $r->max_id;
		$kd_noreg = "";
		 
        if ($query_cek == 0) {
          $kd_noreg = 1;
          $reg = sprintf("%02d%02d%02d%04s", $year,$month,$day,$kode_noreg);
		  
        }else {
         		 	  
        // jk sudah ada maka
			$kd_new = $kode2+1; // kode sebelumnya ditambah 1.
			$reg = sprintf("%02d%02d%02d%04s", $year,$month,$day,$kd_new);
			
        }
		
		$noreg ="RJ$reg";
		
		
      return $noreg;
    }
	
	
	function generate_no_tr_ri(){


		$today=date("ymd");
		$year=date("y");
		$month=date("m");
		$day=date("d");

        $cek = date('y').$kode_bln;
        $query = "SELECT MAX(RIGHT(id_transaksi,4)) as max_id from rs_hdtransaksiri WHERE id_transaksi LIKE '%$today%'";
        $q = $this->db->query($query);
		$r = $q->row();
        $query_cek = $q->num_rows();
		$kode2 = $r->max_id;
		$kd_noreg = "";
		 
        if ($query_cek == 0) {
          $kd_noreg = 1;
          $reg = sprintf("%02d%02d%02d%04s", $year,$month,$day,$kode_noreg);
		  
        }else {
         		 	  
        // jk sudah ada maka
			$kd_new = $kode2+1; // kode sebelumnya ditambah 1.
			$reg = sprintf("%02d%02d%02d%04s", $year,$month,$day,$kd_new);
			
        }
		
		$tr ="TR$reg";
		
         
          // print_r($tr);
		  // exit();

      return $tr;
    }
		
	
	function generate_no_reg_ri(){


		$today=date("ymd");
		$year=date("y");
		$month=date("m");
		$day=date("d");

        $cek = date('y').$kode_bln;
        $query = "SELECT MAX(RIGHT(noreg,4)) as max_id from rs_hdtransaksiri WHERE noreg LIKE '%$today%'";
        $q = $this->db->query($query);
		$r = $q->row();
        $query_cek = $q->num_rows();
		$kode2 = $r->max_id;
		$kd_noreg = "";
		 
        if ($query_cek == 0) {
          $kd_noreg = 1;
          $reg = sprintf("%02d%02d%02d%04s", $year,$month,$day,$kode_noreg);
		  
        }else {
         		 	  
        // jk sudah ada maka
			$kd_new = $kode2+1; // kode sebelumnya ditambah 1.
			$reg = sprintf("%02d%02d%02d%04s", $year,$month,$day,$kd_new);
			
        }
		
		$noreg ="RJ$reg";
		
		
      return $noreg;
    }
	
	
	public function GetPasien($search)
	{	
	     $lahir = date("Y-m-d", strtotime($search));
		 
	     $this->db->like('medrec',$search);	
		 $this->db->or_like('nama_pasien',$search);	
		 $this->db->or_like('tgl_lahir',$lahir);
		 $this->db->or_like('alamat',$search);
		 
         $query =$this->db->get('rs_pasien');
	
		
	if($query->num_rows() != 0)
    {
        return $query->result();
    }
    else
    {
        return false;
    }
	}
	
	public function GetPasienLama($search)
	{	
	    $this->db->select('a.*, b.nama as nama_prov, c.nama as nama_kab, d.nama as nama_kec, e.nama as nama_kel');
		$this->db->from('rs_pasien a');
		$this->db->join('provinsi  b', 'b.id_prov = a.provinsi');
		$this->db->join('kabupaten c', 'c.id_kab  = a.kabupaten');
		$this->db->join('kecamatan d', 'd.id_kec  = a.kecamatan');
		$this->db->join('kelurahan e', 'e.id_kel  = a.kelurahan');
		$this->db->where('medrec',$search);
		$query = $this->db->get();
	
		
	if($query->num_rows() != 0)
    {
        return $query->result();
    }
    else
    {
        return false;
    }
	}
	
	
	
	public function cek_dokter($rm,$dept,$hari,$jam,$dokter)
	{	
	    $tgl = date('Y-m-d');
	    $this->db->select('a.*');
		$this->db->from('rs_hdtransaksirj a');
		$this->db->where('a.medrec',$rm);
		$this->db->where('a.id_departemen',$dept);
		$this->db->where('a.id_dokter',$dokter);
		$this->db->where('a.jam_awal',$jam);
		$this->db->where('a.tgl_registrasi',$tgl);
		$query = $this->db->get();
	
		
	
       return $query;
   
	}
	
	
	public function GetTransaksiRj()
	{	
	    $tgl = date('Y-m-d');
		
	    $this->db->select( "a.tgl_registrasi, a.noreg, a.medrec, a.umur_th, a.umur_bln, a.id_departemen, 
			   a.id_dokter, a.no_urut, a.id_customer, a.tgl_entry,a.via,
			   b.nama_pasien, b.status_pasien, 
	           c.nama_departemen, d.nama_dokter, e.nama_customer
	           FROM rs_hdtransaksirj as a 
			   inner join rs_pasien as b ON a.medrec=b.medrec 
			   inner join rs_departemen as c ON c.id_departemen=a.id_departemen  
			   inner join rs_dokter as d ON d.id_dokter=a.id_dokter 
			   inner join rs_customer as e ON e.id_customer=a.id_customer
			   WHERE a.status_selesai!='1'
			   ORDER BY a.tgl_entry DESC, d.nama_dokter, a.no_urut");
		$query = $this->db->get();
	
		if($query->num_rows() != 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	
	
	public function GetPasienRJ($noreg)
	{	
	    $tgl = date('Y-m-d');
		
	    $this->db->select( "a.*,
			   b.nama_pasien, b.status_pasien, b.tgl_lahir, b.jenis_kelamin,
	           c.nama_departemen, d.nama_dokter, e.nama_customer, f.nama_kelas
	           FROM rs_hdtransaksirj as a 
			   inner join rs_pasien as b ON a.medrec=b.medrec 
			   inner join rs_departemen as c ON c.id_departemen=a.id_departemen  
			   inner join rs_dokter as d ON d.id_dokter=a.id_dokter 
			   inner join rs_customer as e ON e.id_customer=a.id_customer
			   inner join rs_kelas as f ON f.kode_kelas=a.kode_kelas
			   WHERE a.status_selesai!='1' AND a.noreg='$noreg'
			   ORDER BY a.tgl_entry DESC, d.nama_dokter, a.no_urut");
		$query = $this->db->get();
	
		if($query->num_rows() != 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	
	
	public function GetTransaksiRi()
	{	
	    $tgl = date('Y-m-d');
		
	    $this->db->select( "a.tgl_registrasi, a.noreg, a.medrec, a.umur_th, a.umur_bln, 
			   a.id_dokter, a.no_urut, a.id_customer, a.tgl_entry,a.asal_pasien,
			   a.kode_kelas,a.id_ruang,a.id_bed,a.status_pulang,
			   b.nama_pasien, b.status_pasien, 
	           d.nama_dokter, e.nama_customer,
			   f.nama_kelas, g.nama_ruang, h.nama_bed, i.nomor_bed
	           FROM rs_hdtransaksiri as a 
			   inner join rs_pasien as b ON a.medrec=b.medrec 
			   inner join rs_dokter as d ON d.id_dokter=a.id_dokter 
			   inner join rs_customer as e ON e.id_customer=a.id_customer
			   inner join rs_kelas as f ON f.kode_kelas=a.kode_kelas  
			   inner join rs_ruang as g ON g.id_ruang=a.id_ruang
			   inner join rs_bed as h ON h.id_bed=a.id_bed 
			   inner join rs_bed_nomor as i ON i.id_nomorbed=a.nobed 
			   
			   WHERE a.status_pulang!='2'
			   ORDER BY a.kode_kelas ASC");
		$query = $this->db->get();
	
		if($query->num_rows() != 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	
	
	function pilih_ruang($kelas)
    {
        $query="SELECT
                rs_ruang.id_ruang,
                rs_ruang.nama_ruang
                FROM
                rs_ruang
				where rs_ruang.kode_kelas ='$kelas'";
        return $this->db->query($query);
    }
	
	function pilih_combobox($table,$field,$where)
    {
        $query="SELECT * 
                FROM
                $table
				where $field ='$where'";
        return $this->db->query($query);
    }
	
	function pilih_combobox_array ($table,$where)
    {
        $this->db->where($where);
		$query=$this->db->get($table);
        return $query;
    }	
	
	
	public function getUpdate($table,$data,$where){
		$this->db->where($where);		
		$result	= $this->db->update($table,$data);
		return $result;
	}
   
	 
   function pilih_grouplayanan($layanan,$divisi){

     if($divisi==0){
		   if ($layanan =='obat') {
			 $table = 'rs_groupobat';
			 $query="SELECT * FROM $table";
		   }
		   else if ($layanan =='layanan') {
			 $table = 'rs_grouplayanan_user';
			 $query="SELECT a.*, b.nama_grouplayanan as nama
			 FROM $table a
			 INNER JOIN rs_grouplayanan b ON b.id_grouplayanan = a.id_grouplayanan";
		  }
     }
     else
     {
            if ($layanan =='obat') {
			 $table = 'rs_groupobat';
			 $query="SELECT * FROM $table";
		   }
		   else if ($layanan =='layanan') {
			 $table = 'rs_grouplayanan_user';
			 $query="SELECT a.*, b.nama_grouplayanan as nama
			 FROM $table a
			 INNER JOIN rs_grouplayanan b ON b.id_grouplayanan = a.id_grouplayanan		 
			 WHERE id_div=$divisi";
		  }
     }

        
        return $this->db->query($query);
    }
	
	function pilih_dokter(){
	
		 $table = 'rs_dokter';
		 $query="SELECT * FROM $table";
	         
        return $this->db->query($query);
    }
	
	public function GetTarif($grouplayanan)
	{	
	    		
	    $this->db->select("a.id_grouplayanan, a.id_layanan,a.id_kategori,a.kode_coa,a.rawat_jalan,a.kelas1,a.kelas2,a.kelas3,
		a.vip,a.icu,a.picu,a.nicu,a.hcu,a.utama,a.vk,a.bayi_sakit,a.bayi_sehat
		FROM rs_tariflayanan AS a WHERE a.id_grouplayanan= '$grouplayanan'");

		$query = $this->db->get();
	
		if($query->num_rows() != 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

    public function GetMarkup($jaminan,$kodecoa)
	{	
	    		
	    $this->db->select("a.*
		FROM rs_markup AS a 
        WHERE a.kode_jaminan= '$jaminan' AND a.kode_coa ='$kodecoa'");

		$query = $this->db->get();
	
		if($query->num_rows() != 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	
	public function GetTransaksiDt($noreg,$divisi)
	{	
	    $tgl = date('Y-m-d');
		if ($divisi==0){
	    $this->db->select( "a.*,
				b.nama_grouplayanan,
				c.nama_layanan, 
				d.nama_dokter
				FROM rs_dttransaksirj as a
				INNER JOIN rs_grouplayanan as b ON a.id_grouplayanan = b.id_grouplayanan
				INNER JOIN rs_layanan as c ON a.id_layanan=c.id_layanan
				LEFT JOIN rs_dokter as d ON a.id_dokter=d.id_dokter
				WHERE a.noreg = '$noreg' ORDER BY a.tgl_entry DESC");
        }
        else
        {
        $this->db->select( "a.*,
				b.nama_grouplayanan,
				c.nama_layanan, 
				d.nama_dokter
				FROM rs_dttransaksirj as a
				INNER JOIN rs_grouplayanan as b ON a.id_grouplayanan = b.id_grouplayanan
				INNER JOIN rs_layanan as c ON a.id_layanan=c.id_layanan
				LEFT JOIN rs_dokter as d ON a.id_dokter=d.id_dokter
				WHERE a.noreg = '$noreg' AND id_div='$divisi' ORDER BY a.tgl_entry DESC");
        }
		$query = $this->db->get();
	
		if($query->num_rows() != 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	
	function DeleteDetail($id)
    {
        $query="DELETE  
		        FROM
                rs_dttransaksirj
                WHERE id_detailtransaksi ='$id'";
        return $this->db->query($query);
    }
	
	public function GetPasienRI($noreg)
	{	
	    $tgl = date('Y-m-d');
		
	    $this->db->select( "a.*,
			   b.nama_pasien, b.status_pasien, b.tgl_lahir, b.jenis_kelamin,
	           d.nama_dokter, e.nama_customer, f.nama_kelas, g.nama_ruang, h.nama_bed, i.nomor_bed
	           FROM rs_hdtransaksiri as a 
			   inner join rs_pasien as b ON a.medrec=b.medrec 
			   inner join rs_dokter as d ON d.id_dokter=a.id_dokter 
			   inner join rs_customer as e ON e.id_customer=a.id_customer
			   inner join rs_kelas as f ON f.kode_kelas=a.kode_kelas
			   inner join rs_ruang as g ON g.id_ruang=a.id_ruang
			   inner join rs_bed as h ON h.id_bed=a.id_bed
			   inner join rs_bed_nomor as i ON i.id_nomorbed=a.nobed
			   WHERE a.status_selesai!='1' AND a.noreg='$noreg'
			   ORDER BY a.tgl_entry DESC, d.nama_dokter, a.no_urut");
		$query = $this->db->get();
	
		if($query->num_rows() != 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	
	public function GetTransaksiDtRi($noreg,$divisi)
	{	
	    $tgl = date('Y-m-d');
		if ($divisi==0){
	    $this->db->select( "a.*,
				b.nama_grouplayanan,
				c.nama_layanan, 
				d.nama_dokter,
				e.nama_kategori
				FROM rs_dttransaksiri as a
				INNER JOIN rs_grouplayanan as b ON a.id_grouplayanan = b.id_grouplayanan
				INNER JOIN rs_layanan as c ON a.id_layanan=c.id_layanan
				LEFT JOIN rs_dokter as d ON a.id_dokter=d.id_dokter
				INNER JOIN rs_kategori as e ON a.id_kategori=e.id_kategori
				WHERE a.noreg = '$noreg' ORDER BY a.tgl_entry DESC");
        }
        else
        {
        $this->db->select( "a.*,
				b.nama_grouplayanan,
				c.nama_layanan, 
				d.nama_dokter
				FROM rs_dttransaksiri as a
				INNER JOIN rs_grouplayanan as b ON a.id_grouplayanan = b.id_grouplayanan
				INNER JOIN rs_layanan as c ON a.id_layanan=c.id_layanan
				LEFT JOIN rs_dokter as d ON a.id_dokter=d.id_dokter
				WHERE a.noreg = '$noreg' AND id_div='$divisi' ORDER BY a.tgl_entry DESC");
        }
		$query = $this->db->get();
	
		if($query->num_rows() != 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	
	function DeleteDetailRi($id)
    {
        $query="DELETE  
		        FROM
                rs_dttransaksiri
                WHERE id_detailtransaksi ='$id'";
        return $this->db->query($query);
    }
	
}
