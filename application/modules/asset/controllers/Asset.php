<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Asset extends Admin_Controller
{

	protected $viewPermission = 'Asset.View';
	protected $addPermission = 'Asset.Add';
	protected $managePermission = 'Asset.Manage';
	protected $deletePermission = 'Asset.Delete';

	public function __construct()
	{
		parent::__construct();

		// $this->load->library(array('Mpdf'));
		$this->load->model(array(
			'Asset/Asset_model'
		));

		date_default_timezone_set('Asia/Bangkok');
		$this->template->page_icon('fa fa-table');
	}

	public function index()
	{
		$this->auth->restrict($this->viewPermission);
		$cabang		= $this->db->query("SELECT * FROM cabang WHERE sts_aktif = 'aktif'")->result_array();
		$dataArr = array(
			'cabang' => $cabang,
			'kategori' => $this->Asset_model->getList('asset_category')
		);
		$this->template->set_theme('medika');
		$this->template->set_layout('index');
		$this->template->title('List Assets');
		$this->template->render('index', $dataArr);
	}

	public function type()
	{
		$this->template->set_theme('medika');
		$this->template->set_layout('index');
		$this->template->title('List Category Assets');
		// $this->auth->restrict($this->viewPermission);
		// history("View index catgegory asset");
		$this->template->render('category');
	}

	public function data_side()
	{
		$this->Asset_model->getDataJSON();
	}

	public function data_side_category()
	{
		$this->Asset_model->get_json_category();
	}

	public function modal_edit()
	{
		$this->load->view('modal_edit');
	}

	public function modal_jurnal()
	{
		$this->load->view('modal_jurnal');
	}

	public function modal_view()
	{
		$this->load->view('modal_view');
	}

	public function modal()
	{
		$dataArr = array(
			'list_consumable' => $this->db
			->select('accessories.*, accessories_category.nm_category,ms_satuan.category, ms_satuan.nama AS unit_name')
			->from('accessories')
			->join('accessories_category', 'accessories.id_category = accessories_category.id', 'left')
			->join('ms_satuan', 'accessories.id_unit = ms_satuan.id', 'left')
			->get()
			->result_array(),

			'list_tabung' => $this->db
			->select('accessories.*, accessories_category.nm_category,ms_satuan.category, ms_satuan.nama AS unit_name')
			->from('accessories')
			->join('accessories_category', 'accessories.id_category = accessories_category.id', 'left')
			->join('ms_satuan', 'accessories.id_unit = ms_satuan.id', 'left')
			->where('accessories_category.nm_category','Tabung')
			->get()
			->result_array(),

			'outlet' => $this->db->get_where('cabang', ['deleted_by' => 0])->result_array(),
			'list_param' => $this->db->get_where('rs_parameter', ['deleted_by' => NULL])->result_array(),
			'list_catg' => $this->Asset_model->getList('asset_category'),
			'list_costcenter' => $this->db->get_where('warehouse', ['desc' => 'costcenter'])->result_array()
		);

		$this->template->render('modal', $dataArr);
	}

	public function InsertJurnal()
	{
		$ArrJurnal_D = $this->Asset_model->getList('asset_jurnal');
		$ArrJurnal_K = $this->Asset_model->getList('asset_jurnal');

		$ArrDebit = array();
		$ArrKredit = array();
		$ArrJavh = array();
		$Loop = 0;
		foreach ($ArrJurnal_D as $val => $valx) {
			$Loop++;

			if ($valx['category'] == 1) {
				$coaD 	= "6831-02-01";
				$ketD	= "BIAYA PENYUSUTAN KENDARAAN";
				$coaK 	= "1309-05-01";
				$ketK	= "AKUMULASI PENYUSUTAN KENDARAAN";
			}
			if ($valx['category'] == 2) {
				$coaD 	= "6831-06-01";
				$ketD	= "BIAYA PENYUSUTAN HARTA LAINNYA";
				$coaK 	= "1309-08-01";
				$ketK	= "AKUMULASI PENYUSUTAN HARTA LAINNYA";
			}
			if ($valx['category'] == 3) {
				$coaD 	= "6831-01-01";
				$ketD	= "BIAYA PENYUSUTAN BANGUNAN";
				$coaK 	= "1309-07-01";
				$ketK	= "AKUMULASI PENYUSUTAN BANGUNAN";
			}

			$ArrDebit[$Loop]['tipe'] 			= "JV";
			$ArrDebit[$Loop]['nomor'] 			= $this->Jurnal_model->get_Nomor_Jurnal_Memorial($valx['kdcab'], date('Y-m-d'));
			$ArrDebit[$Loop]['tanggal'] 		= date('Y-m-d');
			$ArrDebit[$Loop]['no_perkiraan'] 	= $coaD;
			$ArrDebit[$Loop]['keterangan'] 		= $ketD;
			$ArrDebit[$Loop]['no_reff'] 		= "";
			$ArrDebit[$Loop]['debet'] 			= $valx['sisa_nilai'];
			$ArrDebit[$Loop]['kredit'] 			= 0;

			$ArrKredit[$Loop]['tipe'] 			= "JV";
			$ArrKredit[$Loop]['nomor'] 			= $this->Jurnal_model->get_Nomor_Jurnal_Memorial($valx['kdcab'], date('Y-m-d'));
			$ArrKredit[$Loop]['tanggal'] 		= date('Y-m-d');
			$ArrKredit[$Loop]['no_perkiraan'] 	= $coaK;
			$ArrKredit[$Loop]['keterangan'] 	= $ketK;
			$ArrKredit[$Loop]['no_reff'] 		= "";
			$ArrKredit[$Loop]['debet'] 			= 0;
			$ArrKredit[$Loop]['kredit'] 		= $valx['sisa_nilai'];

			$ArrJavh[$Loop]['nomor'] 			= $this->Jurnal_model->get_Nomor_Jurnal_Memorial($valx['kdcab'], date('Y-m-d'));
			$ArrJavh[$Loop]['tgl'] 			= date('Y-m-d');
			$ArrJavh[$Loop]['jml'] 				= $valx['sisa_nilai'];
			$ArrJavh[$Loop]['kdcab'] 			= $valx['kdcab'];
			$ArrJavh[$Loop]['jenis'] 			= "V";
			$ArrJavh[$Loop]['keterangan'] 		= "PENYUSUTAN ASSET";
			$ArrJavh[$Loop]['bulan'] 			= ltrim(date('m'), 0);
			$ArrJavh[$Loop]['tahun'] 			= date('Y');
			$ArrJavh[$Loop]['user_id'] 			= "System";
			$ArrJavh[$Loop]['tgl_jvkoreksi'] 	= date('Y-m-d');

			$this->Jurnal_model->update_Nomor_Jurnal($valx['kdcab'], 'JM');
		}

		// echo "<pre>";
		// print_r($ArrDebit);
		// print_r($ArrKredit);
		// print_r($ArrJavh);
		// exit;

		$this->db->trans_start();
		$this->db->insert_batch('jurnal', $ArrDebit);
		$this->db->insert_batch('jurnal', $ArrKredit);
		$this->db->insert_batch('javh', $ArrJavh);
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			$this->db->query("INSERT INTO asset_jurnal_log (tanggal, ket) VALUES ('" . date('Y-m-d H:i:s') . "', 'FAILED')");
		} else {
			$this->db->trans_commit();
			$this->db->query("INSERT INTO asset_jurnal_log (tanggal, ket) VALUES ('" . date('Y-m-d H:i:s') . "', 'SUCCESS')");
		}
	}

	public function saved_jurnal()
	{
		$session 		= $this->session->userdata('app_session');
		$ArrDel = $this->db->query("SELECT nomor FROM jurnal WHERE jenis_trans = 'asset jurnal' AND SUBSTRING_INDEX(tanggal, '-', 2) = '" . date('Y-m') . "' GROUP BY nomor ")->result_array();

		$dtListArray = array();
		foreach ($ArrDel as $val => $valx) {
			$dtListArray[$val] = $valx['nomor'];
		}

		$dtImplode	= "('" . implode("','", $dtListArray) . "')";

		$date_now	= date('Y-m-d');
		$bln		= ltrim(date('m'), 0);
		$thn		= date('Y');
		$bulanx		= date('m');

		if (!empty($this->input->post('tgl_jurnal'))) {
			$date_now	= $this->input->post('tgl_jurnal') . "-01";
			$DtExpl		= explode('-', $date_now);
			$bln		= ltrim($DtExpl[1], 0);
			$thn		= $DtExpl[0];
			$bulanx		= $DtExpl[1];
		}
		// print_r($dtImplode);
		// exit;

		$ArrJurnal_D = $this->Asset_model->getList('asset_jurnal');
		$ArrDebit = array();
		$ArrKredit = array();
		$ArrJavh = array();
		$Loop = 0;
		foreach ($ArrJurnal_D as $val => $valx) {
			$Loop++;

			if ($valx['category'] == 1) {
				$coaD 	= "6831-02-01";
				$ketD	= "BIAYA PENYUSUTAN KENDARAAN";
				$coaK 	= "1309-05-01";
				$ketK	= "AKUMULASI PENYUSUTAN KENDARAAN";
			}
			if ($valx['category'] == 2) {
				$coaD 	= "6831-06-01";
				$ketD	= "BIAYA PENYUSUTAN HARTA LAINNYA";
				$coaK 	= "1309-08-01";
				$ketK	= "AKUMULASI PENYUSUTAN HARTA LAINNYA";
			}
			if ($valx['category'] == 3) {
				$coaD 	= "6831-01-01";
				$ketD	= "BIAYA PENYUSUTAN BANGUNAN";
				$coaK 	= "1309-07-01";
				$ketK	= "AKUMULASI PENYUSUTAN BANGUNAN";
			}

			$ArrDebit[$Loop]['tipe'] 			= "JV";
			$ArrDebit[$Loop]['nomor'] 			= $this->Jurnal_model->get_Nomor_Jurnal_Memorial($valx['kdcab'], date('Y-m-d'));
			$ArrDebit[$Loop]['tanggal'] 		= $date_now;
			$ArrDebit[$Loop]['no_perkiraan'] 	= $coaD;
			$ArrDebit[$Loop]['keterangan'] 		= $ketD;
			$ArrDebit[$Loop]['no_reff'] 		= $this->Jurnal_model->get_Nomor_Jurnal_Memorial($valx['kdcab'], date('Y-m-d'));
			$ArrDebit[$Loop]['debet'] 			= $valx['sisa_nilai'];
			$ArrDebit[$Loop]['kredit'] 			= 0;
			$ArrDebit[$Loop]['jenis_trans'] 	= 'asset jurnal';

			$ArrKredit[$Loop]['tipe'] 			= "JV";
			$ArrKredit[$Loop]['nomor'] 			= $this->Jurnal_model->get_Nomor_Jurnal_Memorial($valx['kdcab'], date('Y-m-d'));
			$ArrKredit[$Loop]['tanggal'] 		= $date_now;
			$ArrKredit[$Loop]['no_perkiraan'] 	= $coaK;
			$ArrKredit[$Loop]['keterangan'] 	= $ketK;
			$ArrKredit[$Loop]['no_reff'] 		= $this->Jurnal_model->get_Nomor_Jurnal_Memorial($valx['kdcab'], date('Y-m-d'));
			$ArrKredit[$Loop]['debet'] 			= 0;
			$ArrKredit[$Loop]['kredit'] 		= $valx['sisa_nilai'];
			$ArrKredit[$Loop]['jenis_trans'] 	= 'asset jurnal';

			$ArrJavh[$Loop]['nomor'] 			= $this->Jurnal_model->get_Nomor_Jurnal_Memorial($valx['kdcab'], date('Y-m-d'));
			$ArrJavh[$Loop]['tgl'] 				= $date_now;
			$ArrJavh[$Loop]['jml'] 				= $valx['sisa_nilai'];
			$ArrJavh[$Loop]['kdcab'] 			= $valx['kdcab'];
			$ArrJavh[$Loop]['jenis'] 			= "V";
			$ArrJavh[$Loop]['keterangan'] 		= "PENYUSUTAN ASSET";
			$ArrJavh[$Loop]['bulan'] 			= $bln;
			$ArrJavh[$Loop]['tahun'] 			= $thn;
			$ArrJavh[$Loop]['user_id'] 			= "System";
			$ArrJavh[$Loop]['tgl_jvkoreksi'] 	= $date_now;

			$this->Jurnal_model->update_Nomor_Jurnal($valx['kdcab'], 'JM');
		}

		// echo "<pre>";
		// print_r($ArrDebit);
		// print_r($ArrKredit);
		// print_r($ArrJavh);
		// exit;

		$this->db->trans_start();
		$this->db->query("DELETE FROM jurnal WHERE nomor IN " . $dtImplode . " ");
		$this->db->query("DELETE FROM javh WHERE nomor IN " . $dtImplode . " ");
		$this->db->insert_batch('jurnal', $ArrDebit);
		$this->db->insert_batch('jurnal', $ArrKredit);
		$this->db->insert_batch('javh', $ArrJavh);
		$this->db->query("UPDATE asset_generate SET flag='Y' WHERE bulan='" . $bulanx . "' AND tahun='" . $thn . "' ");
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			$this->db->query("INSERT INTO asset_jurnal_log (tanggal, ket, jurnal_by, bulan, tahun, kdcab) VALUES ('" . date('Y-m-d H:i:s') . "', 'FAILED', '" . $this->session->userdata['app_session']['username'] . "', '" . $bulanx . "', '" . $thn . "', '" . $session['kdcab'] . "')");
			$Arr_Data	= array(
				'pesan'		=> 'Asset gagal disimpan ...',
				'status'	=> 0
			);
		} else {
			$this->db->trans_commit();
			$this->db->query("INSERT INTO asset_jurnal_log (tanggal, ket, jurnal_by, bulan, tahun, kdcab) VALUES ('" . date('Y-m-d H:i:s') . "', 'SUCCESS', '" . $this->session->userdata['app_session']['username'] . "', '" . $bulanx . "', '" . $thn . "', '" . $session['kdcab'] . "')");
			$Arr_Data	= array(
				'pesan'		=> 'Asset berhasil disimpan. Terimakasih ...',
				'status'	=> 1
			);
		}

		echo json_encode($Arr_Data);
	}

	public function saved()
	{

		$Arr_Kembali	= array();
		$data			= $this->input->post();
		// return var_dump($data);
		$session 		= $this->session->userdata('app_session');
		$nmCategory		= $this->Asset_model->getWhere('asset_category', 'id', $data['category']);

		$category		= $data['category'];
		$KdCategory		= sprintf('%02s', $category);
		$Ym				= date('Ym');
		$tgl_oleh		= date('Y-m-d');

		if (!empty($data['tanggal'])) {
			$tgl_oleh		= date('Y-m-d', strtotime($data['tanggal']));
			$Year			= substr($tgl_oleh, 0, 4);
			$Month			= substr($tgl_oleh, 5, 2);
			$Ym				= $Year . $Month;
		}

		$qQuery			= "SELECT max(kd_asset) as maxP FROM asset WHERE category='" . $category . "' AND kd_asset LIKE 'AST-" . $session['kdcab'] . $Ym . "-" . $KdCategory . "-%' ";
		$restQuery		= $this->db->query($qQuery)->result_array();

		// AST-1011908-02-0001
		$category		= $data['category'];

		$KdCategory		= sprintf('%02s', $category);
		$angkaUrut2		= $restQuery[0]['maxP'];
		$urutan2		= (int)substr($angkaUrut2, 17, 3);
		$urutan2++;
		$urut2			= sprintf('%03s', $urutan2);

		$kode_assets	= "AST-" . $session['kdcab'] . $Ym . "-" . $KdCategory . "-" . $urut2;

		$detailDataDash	= array();
		// echo $kode_assets; exit;

		$lopp 	= 0;
		$lopp2 	= 0;
		for ($no = 1; $no <= $data['qty']; $no++) {
			$Nomor	= sprintf('%02s', $no);
			$lopp++;
			$detailData[$lopp]['kd_asset'] 		= $kode_assets . $Nomor;
			$detailData[$lopp]['nm_asset'] 		= $data['nm_asset'];
			$detailData[$lopp]['tgl_perolehan'] = $tgl_oleh;
			$detailData[$lopp]['category'] 		= $data['category'];
			$detailData[$lopp]['nm_category'] 	= strtoupper($nmCategory[0]['nm_category']);
			$detailData[$lopp]['nilai_asset'] 	= str_replace(',', '', $data['nilai_asset']);
			$detailData[$lopp]['qty'] 			= $data['qty'];
			$detailData[$lopp]['asset_ke'] 		= $no;
			$detailData[$lopp]['depresiasi'] 	= $data['depresiasi'];
			$detailData[$lopp]['utilitas_perhari'] 	= str_replace(',', '',$data['utilitas_perhari']);
			$detailData[$lopp]['utilitas_tahunan'] 	= str_replace(',', '',$data['utilitas_tahunan']);
			$detailData[$lopp]['target_utilitas'] 	= str_replace(',', '',$data['target_utilitas']);
			$detailData[$lopp]['total_biaya_perawatan'] 	= str_replace(',', '',$data['total_biaya_perawatan']);
			$detailData[$lopp]['total_biaya_kalibrasi'] 	= str_replace(',', '',$data['total_biaya_kalibrasi']);
			$detailData[$lopp]['total_biaya_consumable'] 	= str_replace(',', '',$data['total_biaya_consumable']);
			$detailData[$lopp]['cost_per_test'] 	= str_replace(',', '',$data['cost_per_test']);
			$detailData[$lopp]['disposal_value'] 	= str_replace(',', '',$data['disposal_value']);
			$detailData[$lopp]['total_biaya_apd'] 		= str_replace(',', '', $data['total_biaya_apd']);
			$detailData[$lopp]['value'] 		= str_replace(',', '', $data['value']);
			$detailData[$lopp]['kdcab'] 		= $session['kdcab'];
			$detailData[$lopp]['outlet'] 	= $data['outlet'];
			$detailData[$lopp]['lokasi_asset'] 	= $data['lokasi_asset'];
			$detailData[$lopp]['merk'] 	= $data['merk'];
			$detailData[$lopp]['created_by'] 	= $this->session->userdata['app_session']['username'];
			$detailData[$lopp]['created_date'] 	= date('Y-m-d h:i:s');

			$jmlx   	= $data['depresiasi'] * 12;
			$date_now 	= date('Y-m-d');

			if (!empty($data['tanggal'])) {
				$date_now 	= date('Y-m-d', strtotime($data['tanggal']));
			}

			for ($x = 1; $x <= $jmlx; $x++) {
				$lopp2 += $x;

				//bulan depat mulai menyusut
				// $Tanggal 	= date('Y-m', mktime(0,0,0,substr($date_now,5,2)+ $x,1,substr($date_now,0,4)));
				//bulan sekarang langsung disusutkan
				$Tanggal 	= date('Y-m', mktime(0, 0, 0, substr($date_now, 5, 2) + $x, 0, substr($date_now, 0, 4)));

				$detailDataDash[$lopp2]['kd_asset'] 	= $kode_assets . $Nomor;
				$detailDataDash[$lopp2]['nm_asset'] 	= $data['nm_asset'];
				$detailDataDash[$lopp2]['category'] 	= $data['category'];
				$detailDataDash[$lopp2]['nm_category'] 	= strtoupper($nmCategory[0]['nm_category']);
				$detailDataDash[$lopp2]['bulan'] 		= substr($Tanggal, 5, 2);
				$detailDataDash[$lopp2]['tahun'] 		= substr($Tanggal, 0, 4);
				$detailDataDash[$lopp2]['nilai_susut'] 	= str_replace(',', '', $data['value']);
				$detailDataDash[$lopp2]['kdcab'] 		= $session['kdcab'];
			}
			// return var_dump($data['perawatan']["tahun"][1]);

			// $asset_maintenance = array();
			// foreach ($data['perawatan']["tahun"] as $key => $value) {
			// 	$asset_maintenance[] = array(
			// 		'kd_asset'  => $kode_assets . $Nomor,
			// 		'tahun'       => $data['perawatan']['tahun'][$key],
			// 		'tanggal'     => $data['perawatan']['tanggal'][$key],
			// 		//  0  => $data['perawatan']['keterangan'][$key],
			// 		'biaya'       => $data['perawatan']['biaya'][$key]
			// 	);
			// }
			$kd_asset = $kode_assets . $Nomor;
			$asset_maintenance = array();
			foreach ($data['perawatan'] as $item) {
				$asset_maintenance[] = array(
					'kd_asset' => $kd_asset,
					'year' => $item['year'],
					'date' => $item['date'],
					'maintenance_type' => $item['maintenance_type'],
					'cost' => str_replace(',', '',$item['cost'])
				);
			}

			$asset_calibration = array();
			foreach ($data['kalibrasi'] as $item) {
				$asset_calibration[] = array(
					'kd_asset' => $kd_asset,
					'year' => $item['year'],
					'date' => $item['date'],
					'calibration_type' => $item['calibration_type'],
					'cost' => str_replace(',', '',$item['cost'])
				);
			}
			
			$asset_accessories = array();
			foreach ($data['consumable'] as $item) {
				$asset_accessories[] = array(
					'kd_asset' => $kd_asset,
					'accessories_id' => $item['accessories_id'],
					'utility' => $item['utility'],
					// 'package' => $item['package'],
					'qty' => $item['qty'],
					'type' => 'consumable',
					'cost' => str_replace(',', '',$item['cost'])
				);
			}

			$asset_accessories_apd = array();
			foreach ($data['apd'] as $item) {
				$asset_accessories_apd[] = array(
					'kd_asset' => $kd_asset,
					'accessories_id' => $item['accessories_id'],
					'utility' => $item['utility'],
					// 'package' => $item['package'],
					'qty' => $item['qty'],
					'type' =>'apd',
					'cost' => str_replace(',', '',$item['cost'])
				);
			}

			$asset_parameter = array();
			foreach ($data['parameter'] as $item) {
				$asset_parameter[] = array(
					'kd_asset' => $kd_asset,
					'parameter_id' => $item['parameter_id'],
					'abbreviation' => $item['abbreviation'],
					'tube' => $item['tube']
				);
			}
		
		}

		

		$this->db->trans_start();
		$this->db->insert_batch('asset', $detailData);
		$this->db->insert_batch('asset_generate', $detailDataDash);
		$this->db->insert_batch('asset_maintenance', $asset_maintenance);
		$this->db->insert_batch('asset_calibration', $asset_calibration);
		$this->db->insert_batch('asset_accessories', $asset_accessories);
		$this->db->insert_batch('asset_accessories', $asset_accessories_apd);
		$this->db->insert_batch('asset_parameter', $asset_parameter);

		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			$Arr_Data	= array(
				'pesan'		=> 'Asset gagal disimpan ...',
				'status'	=> 0
			);
		} else {
			$this->db->trans_commit();
			$Arr_Data	= array(
				'pesan'		=> 'Asset berhasil disimpan. Thanks ...',
				'status'	=> 1
			);
		}

		echo json_encode($Arr_Data);
	}

	public function list_center()
	{
		$id = $this->uri->segment(3);
		$query	 	= "SELECT * FROM ms_costcenter WHERE id_dept='" . $id . "' AND deleted = '0' ORDER BY nama_costcenter ASC";
		$Q_result	= $this->db->query($query)->result();
		$option 	= "<option value='0'>Select an Option</option>";
		foreach ($Q_result as $row) {
			$option .= "<option value='" . $row->id_costcenter . "'>" . strtoupper($row->nama_costcenter) . "</option>";
		}
		echo json_encode(array(
			'option' => $option
		));
	}


	public function edit()
	{
		$Arr_Kembali	= array();
		$data			= $this->input->post();
		$session 		= $this->session->userdata('app_session');
		// $helpx			= $data['helpa'];
		$helpx			='Y';
		if ($helpx == 'Y') {
			$nmCategory		= $this->Asset_model->getWhere('asset_category', 'id', $data['category']);

			$category		= $data['category'];
			$kd_asset		= $data['kd_asset'];
			// echo $kd_asset."<br>";

			$KdCategory		= sprintf('%02s', $category);
			$Ym				= date('ym');

			$qQuery			= "SELECT max(kd_asset) as maxP FROM asset WHERE category='" . $category . "' AND kd_asset LIKE 'AST-" . $session['kdcab'] . $Ym . "-" . $KdCategory . "-%' ";
			$restQuery		= $this->db->query($qQuery)->result_array();

			$category		= $data['category'];

			$KdCategory		= sprintf('%02s', $category);
			$angkaUrut2		= $restQuery[0]['maxP'];
			$urutan2		= (int)substr($angkaUrut2, 15, 3);
			$urutan2++;
			$urut2			= sprintf('%03s', $urutan2);

			$kode_assets	= "AST-" . $session['kdcab'] . $Ym . "-" . $KdCategory . "-" . $urut2;

			// echo $kode_assets;

			$lopp = 0;
			for ($no = 1; $no <= $data['qty']; $no++) {
				$Nomor	= sprintf('%02s', $no);
				$lopp++;
				// $detailData[$lopp]['kd_asset'] 		= $kd_asset;
				$detailData[$lopp]['nm_asset'] 		= $data['nm_asset'];
				$detailData[$lopp]['category'] 		= $data['category'];
				$detailData[$lopp]['nm_category'] 	= strtoupper($nmCategory[0]['nm_category']);
				$detailData[$lopp]['nilai_asset'] 	= str_replace(',', '', $data['nilai_asset']);
				$detailData[$lopp]['qty'] 			= $data['qty'];
				$detailData[$lopp]['asset_ke'] 		= $no;
				$detailData[$lopp]['depresiasi'] 	= $data['depresiasi'];
				$detailData[$lopp]['utilitas_perhari'] 	= str_replace(',', '',$data['utilitas_perhari']);
				$detailData[$lopp]['utilitas_tahunan'] 	= str_replace(',', '',$data['utilitas_tahunan']);
				$detailData[$lopp]['target_utilitas'] 	= str_replace(',', '',$data['target_utilitas']);
				$detailData[$lopp]['total_biaya_perawatan'] 	= str_replace(',', '',$data['total_biaya_perawatan']);
				$detailData[$lopp]['total_biaya_kalibrasi'] 	= str_replace(',', '',$data['total_biaya_kalibrasi']);
				$detailData[$lopp]['total_biaya_consumable'] 	= str_replace(',', '',$data['total_biaya_consumable']);
				$detailData[$lopp]['cost_per_test'] 	= str_replace(',', '',$data['cost_per_test']);
				$detailData[$lopp]['disposal_value'] 	= str_replace(',', '',$data['disposal_value']);
				$detailData[$lopp]['total_biaya_apd'] 		= str_replace(',', '', $data['total_biaya_apd']);
				$detailData[$lopp]['value'] 		= str_replace(',', '', $data['value']);
				$detailData[$lopp]['kdcab'] 		= $session['kdcab'];
				$detailData[$lopp]['outlet'] 	= $data['outlet'];
				$detailData[$lopp]['lokasi_asset'] 	= $data['lokasi_asset'];
				$detailData[$lopp]['merk'] 	= $data['merk'];
				$detailData[$lopp]['created_by'] 	= $this->session->userdata['app_session']['username'];
				$detailData[$lopp]['created_date'] 	= date('Y-m-d h:i:s');
			}
			// print_r($detailData);
			$asset_maintenance = array();
			foreach ($data['perawatan'] as $item) {
				$asset_maintenance[] = array(
					'kd_asset' => $kd_asset,
					'year' => $item['year'],
					'date' => $item['date'],
					'maintenance_type' => $item['maintenance_type'],
					'cost' => str_replace(',', '',$item['cost'])
				);
			}

			$asset_calibration = array();
			foreach ($data['kalibrasi'] as $item) {
				$asset_calibration[] = array(
					'kd_asset' => $kd_asset,
					'year' => $item['year'],
					'date' => $item['date'],
					'calibration_type' => $item['calibration_type'],
					'cost' => str_replace(',', '',$item['cost'])
				);
			}
			
			$asset_accessories = array();
			foreach ($data['consumable'] as $item) {
				$asset_accessories[] = array(
					'kd_asset' => $kd_asset,
					'accessories_id' => $item['accessories_id'],
					'utility' => $item['utility'],
					// 'package' => $item['package'],
					'qty' => $item['qty'],
					'type' => 'consumable',
					'cost' => str_replace(',', '',$item['cost'])
				);
			}

			$asset_accessories_apd = array();
			foreach ($data['apd'] as $item) {
				$asset_accessories_apd[] = array(
					'kd_asset' => $kd_asset,
					'accessories_id' => $item['accessories_id'],
					'utility' => $item['utility'],
					// 'package' => $item['package'],
					'qty' => $item['qty'],
					'type' =>'apd',
					'cost' => str_replace(',', '',$item['cost'])
				);
			}

			$asset_parameter = array();
			foreach ($data['parameter'] as $item) {
				$asset_parameter[] = array(
					'kd_asset' => $kd_asset,
					'parameter_id' => $item['parameter_id'],
					'abbreviation' => $item['abbreviation'],
					'tube' => $item['tube']
				);
			}

			$Data_Del	= array(
				'deleted' 		=> "Y",
				'deleted_by' 	=> $this->session->userdata['app_session']['username'],
				'deleted_date' 	=> date('Y-m-d h:i:s')
			);
		} elseif ($helpx == 'N') {
			$idx			= $data['id'];
			$lokasi_asset	= $data['lokasi_asset'];

			$Data_Update	= array(
				'lokasi_asset' 	=> $lokasi_asset,
				'modified_by' 	=> $this->session->userdata['app_session']['username'],
				'modified_date' => date('Y-m-d h:i:s')
			);

			// print_r($Data_Update);
		}

		// exit;

		$this->db->trans_start();

		if ($helpx == 'Y') {
		// $this->db->where('kd_asset LIKE ', $kd_asset . '%');
		// $this->db->update('asset', $Data_Del);

		$this->db->where('kd_asset', $kd_asset); 
		$this->db->delete('asset_maintenance');

		$this->db->where('kd_asset', $kd_asset ); 
		$this->db->delete('asset_calibration');

		$this->db->where('kd_asset', $kd_asset); 
		$this->db->delete('asset_accessories');

		$this->db->where('kd_asset ', $kd_asset ); 
		$this->db->delete('asset_parameter');
		
		// return var_dump($kd_asset);

		$this->db->insert_batch('asset_maintenance', $asset_maintenance);
		$this->db->insert_batch('asset_calibration', $asset_calibration);
		$this->db->insert_batch('asset_accessories', $asset_accessories);
		$this->db->insert_batch('asset_accessories', $asset_accessories_apd);
		$this->db->insert_batch('asset_parameter', $asset_parameter);
		$this->db->where('id', $data['id'])->update('asset', $detailData[1]);
		// $this->db->insert_batch('asset', $detailData);
		} elseif ($helpx == 'N') {
			$this->db->where('id', $idx)->update('asset', $Data_Update[1]);
		}
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			$Arr_Data	= array(
				'pesan'		=> 'Asset gagal disimpan ...',
				'status'	=> 0
			);
		} else {
			$this->db->trans_commit();
			$Arr_Data	= array(
				'pesan'		=> 'Asset berhasil disimpan. Thanks ...',
				'status'	=> 1
			);
			// history("Update asset");
		}

		echo json_encode($Arr_Data);
	}

	public function add_category()
	{
		if ($this->input->post()) {
			$Arr_Kembali	= array();
			$data			= $this->input->post();
			$dateTime		= date('Y-m-d H:i:s');

			//header
			$id 		    = $data['id'];
			$nm_category	= strtoupper($data['nm_category']);
			$status			= $data['status'];

			if (empty($id)) {
				$ArrHeader = array(
					'nm_category'   => $nm_category,
					'status' 		=> $status,
					'created_by' 	=> $this->session->userdata['app_session']['username'],
					'created_date' 	=> $dateTime
				);
				$TandaI = "Insert";
			}

			if (!empty($id)) {
				$ArrHeader = array(
					'nm_category'   => $nm_category,
					'status' 		=> $status,
					'updated_by' 	=> $this->session->userdata['app_session']['username'],
					'updated_date' 	=> $dateTime
				);
				$TandaI = "Update";
			}

			// print_r($ArrHeader);
			// exit;

			$this->db->trans_start();
			if (empty($id)) {
				$this->db->insert('asset_category', $ArrHeader);
			}
			if (!empty($id)) {
				$this->db->where('id', $id);
				$this->db->update('asset_category', $ArrHeader);
			}
			$this->db->trans_complete();


			if ($this->db->trans_status() === FALSE) {
				$this->db->trans_rollback();
				$Arr_Kembali	= array(
					'pesan'		=> $TandaI . ' data failed. Please try again later ...',
					'status'	=> 2
				);
			} else {
				$this->db->trans_commit();
				$Arr_Kembali	= array(
					'pesan'		=> $TandaI . ' data success. Thanks ...',
					'status'	=> 1
				);
				// history($TandaI . ' Category Asset ' . $id . ' / ' . $nm_category);
			}

			echo json_encode($Arr_Kembali);
		} else {
			$controller			= ucfirst(strtolower($this->uri->segment(1)));
			// $Arr_Akses			= getAcccesmenu($controller);
			// if($Arr_Akses['create'] !='1'){
			// 	$this->session->set_flashdata("alert_data", "<div class=\"alert alert-warning\" id=\"flash-message\">You Don't Have Right To Access This Page, Please Contact Your Administrator....</div>");
			// 	redirect(site_url('users'));
			//       }

			$id = $this->uri->segment(3);
			$query = "SELECT * FROM asset_category WHERE id ='" . $id . "' LIMIT 1 ";
			$result = $this->db->query($query)->result();

			$data = array(
				'title'		=> 'Add Category Asset',
				'action'	=> 'add',
				'data'      => $result
			);
			$this->template->render('add_category', $data);
		}
	}

	public function hapus_category()
	{
		$id = $this->uri->segment(3);

		$ArrPlant		= array(
			'deleted' 		=> 'Y',
			'deleted_by' 	=> $this->session->userdata['app_session']['username'],
			'deleted_date' 	=> date('Y-m-d H:i:s')
		);


		$this->db->trans_start();
		$this->db->where('id', $id);
		$this->db->update('asset_category', $ArrPlant);
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			$Arr_Data	= array(
				'pesan'		=> 'Delete data failed. Please try again later ...',
				'status'	=> 0
			);
		} else {
			$this->db->trans_commit();
			$Arr_Data	= array(
				'pesan'		=> 'Delete data success. Thanks ...',
				'status'	=> 1
			);
			// history('Delete Category Asset Data : ' . $id);
		}
		echo json_encode($Arr_Data);
	}
}