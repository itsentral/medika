<?php

$qData	= "SELECT * FROM asset WHERE id='".$this->uri->segment(3)."'";
$dataD	= $this->db->query($qData)->result_array();
$list_dept = $this->db->get_where('ms_department', ['deleted_by' => null])->result_array();
$list_catg = $this->Asset_model->getList('asset_category');

$QUERY	 	= "SELECT * FROM ms_costcenter WHERE id_dept='".$dataD[0]['lokasi_asset']."' AND deleted = '0' ORDER BY nama_costcenter ASC";
$costcenter	= $this->db->query($QUERY)->result_array();


$list_tabung = $this->db
->select('accessories.*, accessories_category.nm_category,ms_satuan.category, ms_satuan.nama AS unit_name')
->from('accessories')
->join('accessories_category', 'accessories.id_category = accessories_category.id', 'left')
->join('ms_satuan', 'accessories.id_unit = ms_satuan.id', 'left')
->where('accessories_category.nm_category','Tabung')
->get()
->result_array();

$list_consumable = $this->db
->select('accessories.*, accessories_category.nm_category,ms_satuan.category, ms_satuan.nama AS unit_name')
->from('accessories')
->join('accessories_category', 'accessories.id_category = accessories_category.id', 'left')
->join('ms_satuan', 'accessories.id_unit = ms_satuan.id', 'left')
->get()
->result_array();

$outlet = $this->db->get_where('cabang', ['deleted_by' => 0])->result_array();
$list_param = $this->db->get_where('rs_parameter', ['deleted_by' => NULL])->result_array();
$list_catg = $this->Asset_model->getList('asset_category');
$list_costcenter = $this->db->get_where('warehouse', ['desc' => 'costcenter'])->result_array();

$list_perewatan = $this->db->get_where('asset_maintenance', ['kd_asset' => $dataD[0]['kd_asset']])->result_array();
$list_kalibrasi = $this->db->get_where('asset_calibration', ['kd_asset' => $dataD[0]['kd_asset']])->result_array();

$list_consumable_selected = $this->db->get_where('asset_accessories', ['kd_asset' => $dataD[0]['kd_asset'],'type' => 'consumable'])->result_array();
$list_apd = $this->db->get_where('asset_accessories', ['kd_asset' => $dataD[0]['kd_asset'],'type' => 'apd'])->result_array();

$asset_parameter = $this->db->get_where('asset_parameter', ['kd_asset' => $dataD[0]['kd_asset']])->result_array();
// return var_dump($list_consumable);

?>

<div class="card">
	<div class="card-header">
		<h5 class="card-title mb-0"></h5>
	</div>
	<div class="card-body">
			<div class="row mb-3">
				<div class="col-sm-6">
					<!-- <label><input id='chk' name='chk' type="checkbox" value="Y"> &nbsp;&nbsp;<span class="text-success">Ubah semua dengan kode yang sama</span></label> -->
				</div>
			</div>
			<div class="row mb-3 align-items-center">
				<label class="col-sm-2 col-form-label fw-bold">Nama Asset <span class="text-danger">*</span></label>
				<div class="col-sm-4">
					<?php
						echo form_input(array('id'=>'nm_asset','name'=>'nm_asset','class'=>'form-control','autocomplete'=>'off','placeholder'=>'Nama Asset','readonly'=>'readonly'), $dataD[0]['nm_asset']);
						echo form_input(array('type'=>'hidden','id'=>'id','name'=>'id'), $dataD[0]['id']);
						echo form_input(array('type'=>'hidden','id'=>'kd_asset','name'=>'kd_asset'), $dataD[0]['kd_asset']);
						echo form_input(array('type'=>'hidden','id'=>'helpa','name'=>'helpa','value'=>'N'));
					?>
				</div>
				<label class="col-sm-2 col-form-label fw-bold">Kategori <span class="text-danger">*</span></label>
				<div class="col-sm-4">
					<select name="category" id="category" class="form-select" readonly>
						<?php
							foreach($list_catg AS $val => $valx){
								$selx = ($dataD[0]['category'] == $valx['id'])?'selected':'';
								echo "<option value='".$valx['id']."' ".$selx.">".strtoupper($valx['nm_category'])."</option>";
							}
						?>
					</select>
				</div>
			</div>
			<div class="row mb-3 align-items-center">
				<label class="col-sm-2 col-form-label fw-bold">Outlet <span class="text-danger">*</span></label>
				<div class="col-sm-4">
					<select name="outlet" id="outlet" class="form-select chosen-select">
						<option value="0">Pilih Outlet</option>
						<?php
						foreach ($outlet as $val => $valx) {
							$selected = ($valx['id'] == $dataD[0]['outlet'] )?'selected':'';
							echo "<option value='" . $valx['id'] . "' " . $selected . ">" . strtoupper($valx['namacabang']) . "</option>";
						}
						?>
					</select>
				</div>
				<label class="col-sm-2 col-form-label fw-bold">Merk <span class="text-danger">*</span></label>
				<div class="col-sm-4">
					<input type="text" id="merk" name="merk" value="<?=$dataD[0]['merk']?>" class="form-control" autocomplete="off" placeholder="Merk">
				</div>
			</div>
			<div class="row mb-3 align-items-center">
				<label class="col-sm-2 col-form-label fw-bold">Nilai Asset <span class="text-danger">*</span></label>
				<div class="col-sm-4">
					<?php
						echo form_input(array('id'=>'nilai_asset','name'=>'nilai_asset','class'=>'form-control','autocomplete'=>'off','placeholder'=>'Nilai Asset','data-decimal'=>'.','data-thousand'=>'','data-precision'=>'0','data-allow-zero'=>false,'readonly'=>'readonly'), $dataD[0]['nilai_asset']);
					?>
				</div>
				<label class="col-sm-2 col-form-label fw-bold">Jangka Waktu <span class="text-danger">*</span></label>
				<div class="col-sm-4">
					<select name="depresiasi" id="depresiasi" class="form-select" readonly>
						<?php
							for($a=1; $a <= 8; $a++ ){
								$selx = ($dataD[0]['depresiasi'] == $a)?'selected':'';
								echo "<option value='".$a."' ".$selx.">".$a." Tahun</option>";
							}
						?>
					</select>
				</div>
			</div>
			<div class="row mb-3 align-items-center">
				<label class="col-sm-2 col-form-label fw-bold">Lokasi <span class="text-danger">*</span></label>
				<div class="col-sm-4">
					<input type="text" id="qty" name="qty" class="d-none" value="1">
					<input type="text" id="lokasi_asset" name="lokasi_asset" value="<?=$dataD[0]['lokasi_asset']?>" class="form-control" autocomplete="off" placeholder="Lokasi">
				</div>
				<label class="col-sm-2 col-form-label fw-bold">Dipresiasi Perbulan</label>
				<div class="col-sm-4">
					<?php
						echo form_input(array('id'=>'value','name'=>'value','class'=>'form-control','autocomplete'=>'off','placeholder'=>'Dipresiasi Perbulan', 'readonly'=>'readonly','data-decimal'=>'.','data-thousand'=>'','data-precision'=>'0','data-allow-zero'=>false), $dataD[0]['value']);
					?>
				</div>
			</div>
			<div class="row mb-3">
			<label class="col-sm-2 col-form-label fw-bold">Tanggal Perolehan <span class="text-danger">*</span></label>
			<div class="col-sm-4">
				<input type="date" id="tanggal" name="tanggal" value="<?=$dataD[0]['tgl_perolehan']?>" class="form-control" autocomplete="off" placeholder="Tanggal">
			</div>
		</div>
		<br>
		<p style='display:inline-block;background:#e6f7ff;color:#034f84;padding:8px 12px;border-radius:6px;font-weight:700;margin:0; font-size:16px;'>Utilisasi</p>
		<br><br>
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label fw-bold">Utilitas perhari <span class="text-danger">*</span></label>
			<div class="col-sm-4">
				<input type="text" id="utilitas_perhari"  value="<?=number_format($dataD[0]['utilitas_perhari'])?>" name="utilitas_perhari" class="form-control moneyFormat" autocomplete="off" placeholder="Utilitas perhari">
			</div>
			<label class="col-sm-2 col-form-label fw-bold">Utiltas Tahunan</label>
			<div class="col-sm-4">
				<input type="text" id="utilitas_tahunan" name="utilitas_tahunan" value="<?=number_format($dataD[0]['utilitas_tahunan'])?>" class="form-control moneyFormat" autocomplete="off" placeholder="Utiltas Tahunan">
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label fw-bold">Target utilisasi</label>
			<div class="col-sm-4">
				<input type="text" id="target_utilitas" name="target_utilitas" value="<?=number_format($dataD[0]['target_utilitas'])?>" class="form-control moneyFormat" autocomplete="off" placeholder="Lokasi" readonly>
			</div>
		</div>
		<br>
		<p style='display:inline-block;background:#e6f7ff;color:#034f84;padding:8px 12px;border-radius:6px;font-weight:700;margin:0; font-size:16px;'>Perawatan</p>
		<br><br>
		<h5><b>Jadwal Perawatan</b></h5>
		<button onclick="addPerawatan('')" type="button" class="btn btn-primary mb-2">
			<i class="fa fa-plus"></i> Perawatan
		</button>
		<div id="" style="margin-top:20px;max-height:350px; overflow-x:auto; overflow-y:auto;">
			<table class="table table-bordered table-striped" style="min-width:100%; border-collapse:collapse;">
				<thead>
					<tr>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Tahun</th>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Tanggal</th>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Jenis Perawatan</th>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Biaya</th>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Action</th>
					</tr>
				</thead>
				<tbody id="perawatan_list">
				</tbody>
				<tfoot>
					<tr>
						<td colspan="3" style="position:sticky; bottom:0; background:#fff; z-index:3; font-weight:bold; text-align:right;">Total Biaya</td>
						<td id="total_biaya" style="position:sticky; bottom:0; background:#fff; z-index:3; font-weight:bold;">
							<input name="total_biaya_perawatan"  id="total_biaya_perawatan" class="form-control total_biaya_perawatan moneyFormat" value="<?=number_format($dataD[0]['total_biaya_perawatan'])?>" type="text" readonly>
						</td>
						<td id="" style="position:sticky; bottom:0; background:#fff; z-index:3; font-weight:bold;">
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
		<br>
		<h5><b>Jadwal Rekalibrasi</b></h5>
		<button onclick="addKalibrasi('')" type="button" class="btn btn-primary mb-2">
			<i class="fa fa-plus"></i> Kalibrasi
		</button>
		<div id="" style="margin-top:20px;max-height:350px; overflow-x:auto; overflow-y:auto;">
			<table class="table table-bordered table-striped" style="min-width:100%; border-collapse:collapse;">
				<thead>
					<tr>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Tahun</th>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Tanggal</th>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Jenis Kalibrasi</th>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Biaya</th>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Action</th>
					</tr>
				</thead>
				<tbody id="kalibrasi_list">
				</tbody>
				<tfoot>
					<tr>
						<td colspan="3" style="position:sticky; bottom:0; background:#fff; z-index:3; font-weight:bold; text-align:right;">Total Biaya</td>
						<td style="position:sticky; bottom:0; background:#fff; z-index:3; font-weight:bold;">
							<input name="total_biaya_kalibrasi" value="<?=number_format($dataD[0]['total_biaya_kalibrasi'])?>" id="total_biaya_kalibrasi" class="form-control total_biaya_kalibrasi moneyFormat" type="text" readonly>
						</td>
						<td id="" style="position:sticky; bottom:0; background:#fff; z-index:3; font-weight:bold;">
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
		<div class="row mb-3">
			<div class="col-sm-4">
				<label class="form-label"><h5><b>Disposal Value</b></h5></label>
				<div class="input-group">
					<input type="text" id="disposal_value_percent" class="form-control" autocomplete="off" placeholder="Value %" style="max-width:80px;">
					<span class="input-group-text" style="min-width:40px;">%</span>
					<input type="text" id="disposal_value" value="<?=number_format($dataD[0]['disposal_value'])?>" name="disposal_value" class="form-control moneyFormat" autocomplete="off" placeholder="" readonly>
				</div>
			</div>
		</div>
		<br>
		<p style='display:inline-block;background:#e6f7ff;color:#034f84;padding:8px 12px;border-radius:6px;font-weight:700;margin:0; font-size:16px;'>Cost Per Test</p>
		<br><br>
		<div class="row mb-3">
			<div class="col-sm-4">
				<div class="input-group">
					<input type="text" id="cost_per_test"  value="<?=number_format($dataD[0]['cost_per_test'])?>" name="cost_per_test" class="form-control" autocomplete="off" placeholder="Value" style="max-width:80px;" readonly>
				</div>
			</div>
		</div>
			<br>
		<p style='display:inline-block;background:#e6f7ff;color:#034f84;padding:8px 12px;border-radius:6px;font-weight:700;margin:0; font-size:16px;'>Consumable</p>
		<br><br>
		<label class="form-label"><h5><b>Consumable</b></h5></label>
		<br><br>
		<button onclick="addConsumable('')" type="button" class="btn btn-primary mb-2">
			<i class="fa fa-plus"></i> Consumable
		</button>
		<div id="" style="margin-top:20px;max-height:350px; overflow-x:auto; overflow-y:auto;">
			<table class="table table-bordered table-striped" style="min-width:100%; border-collapse:collapse;">
				<thead>
					<tr>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Nama Consumable</th>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Fungsi</th>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Unit / kemasan</th>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Perkiraan pemakaian per 1.000 sampel</th>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Satuan</th>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Biaya</th>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Action</th>
					</tr>
				</thead>
				<tbody id="consumable_list">
				</tbody>
				<tfoot>
					<tr>
						<td colspan="5" style="position:sticky; bottom:0; background:#fff; z-index:3; font-weight:bold; text-align:right;">Total Biaya</td>
						<td style="position:sticky; bottom:0; background:#fff; z-index:3; font-weight:bold;">
							<input name="total_biaya_consumable"  value="<?=number_format($dataD[0]['total_biaya_consumable'])?>" id="total_biaya_consumable" class="form-control  moneyFormat" type="text" readonly>
						</td>
						<td id="" style="position:sticky; bottom:0; background:#fff; z-index:3; font-weight:bold;">
							
						</td>
					</tr>
					<tr>
						<td colspan="5" style="position:sticky; bottom:0; background:#fff; z-index:3; font-weight:bold; text-align:right;">Cost Consumable Per Sampel</td>
						<td id="cost_consumable_per_sampel" style="position:sticky; bottom:0; background:#fff; z-index:3; font-weight:bold;">
							<?=number_format($dataD[0]['total_biaya_consumable']/1000)?>
						</td>
						<td id="" style="position:sticky; bottom:0; background:#fff; z-index:3; font-weight:bold;">
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
		<br>
		<label class="form-label"><h5><b>Apd</b></h5></label>
		<br><br>
		<button onclick="addApd('')" type="button" class="btn btn-primary mb-2">
			<i class="fa fa-plus"></i> Apd
		</button>
		<div id="" style="margin-top:20px;max-height:350px; overflow-x:auto; overflow-y:auto;">
			<table class="table table-bordered table-striped" style="min-width:100%; border-collapse:collapse;">
				<thead>
					<tr>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Nama Consumable</th>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Fungsi</th>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Unit / kemasan</th>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Perkiraan pemakaian per hari</th>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Satuan</th>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Biaya</th>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Action</th>
					</tr>
				</thead>
				<tbody id="apd_list">
				</tbody>
				<tfoot>
					<tr>
						<td colspan="5" style="position:sticky; bottom:0; background:#fff; z-index:3; font-weight:bold; text-align:right;">Total Biaya</td>
						<td style="position:sticky; bottom:0; background:#fff; z-index:3; font-weight:bold;">
							<input name="total_biaya_apd" value="<?=number_format($dataD[0]['total_biaya_apd'])?>"  id="total_biaya_apd" class="form-control  moneyFormat" type="text" readonly>
						</td>
						<td id="" style="position:sticky; bottom:0; background:#fff; z-index:3; font-weight:bold;">
						</td>
					</tr>
					<tr>
						<td colspan="5" style="position:sticky; bottom:0; background:#fff; z-index:3; font-weight:bold; text-align:right;">Cost APD Per Sampel</td>
						<td id="cost_apd_per_sampel" style="position:sticky; bottom:0; background:#fff; z-index:3; font-weight:bold;">
							<?=number_format($dataD[0]['total_biaya_apd']/$dataD[0]['utilitas_perhari'])?>
						</td>
						<td id="" style="position:sticky; bottom:0; background:#fff; z-index:3; font-weight:bold;">
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
		<br>
		<p style='display:inline-block;background:#e6f7ff;color:#034f84;padding:8px 12px;border-radius:6px;font-weight:700;margin:0; font-size:16px;'>Parameter</p>
		<br><br>
		<button onclick="addParameter('')" type="button" class="btn btn-primary mb-2">
			<i class="fa fa-plus"></i> Parameter
		</button>
		<div id="" style="margin-top:20px;max-height:350px; overflow-x:auto; overflow-y:auto;">
			<table class="table table-bordered table-striped" style="min-width:100%; border-collapse:collapse;">
				<thead>
					<tr>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Nama Parameter</th>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Singkatan</th>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Tabung</th>
						<th style="position:sticky; top:0; background:#fff; z-index:3;">Action</th>
					</tr>
				</thead>
				<tbody id="parameter_list">
				</tbody>

			</table>
		</div>
		<br><br><br><br>
			<div class="d-flex justify-content-end">
				<?php
					echo form_button(array('type'=>'button','class'=>'btn btn-primary','value'=>'save','content'=>'Save','id'=>'simpan-bro','style'=>'width:100px;')).' ';
				?>
			</div>
	</div>
</div>
<style>

</style>
<script>
	$(function() {
		// Initialize Select2 for all select elements using the latest Select2 syntax
		if ($.fn.select2) {
			$('select').each(function() {
				$(this).select2({
					width: '100%',
					dropdownParent: $(this).closest('.modal').length ? $(this).closest('.modal') : $(this).parent()
				});
			});
		}
		$('#nilai_asset').maskMoney();
        $('#qty').maskMoney();
		// $('#value').autoNumeric('init');
    });
	
	$(document).on('click', '#chk', function(){
		if ($(this).is(':checked')) {
			$("#nm_asset").attr("readonly", false);
			$("#nilai_asset").attr("readonly", false); 
			$("#qty").attr("readonly", false); 
			$("#category").attr("disabled", false); 
			$("#depresiasi").attr("disabled", false);
			$('#helpa').val('Y');
        }else{
			$("#nm_asset").attr("readonly", true);
			$("#nilai_asset").attr("readonly", true); 
			$("#qty").attr("readonly", true);
			$("#category").attr("disabled", true); 
			$("#depresiasi").attr("disabled", true); 
			$('#helpa').val('N');			
		}
	});
	
	$(document).on('keyup', '#nilai_asset', function(){
		var nilai_asset = $('#nilai_asset').val();
		var qty_asset 	= $('#qty').val();
		var depresiasi	= parseFloat($('#depresiasi').val());
		var nilai		= parseFloat(nilai_asset.split(',').join(''));
		var qty			= parseFloat(qty_asset.split(',').join(''));
		
		var per_bulan	= (nilai / (depresiasi * 12)) * qty;
		if(isNaN(per_bulan)){
			var per_bulan = 0;
		}
		$('#value').val(per_bulan.toFixed(0));
	});
	
	$(document).on('change', '#depresiasi', function(){
		var nilai_asset = $('#nilai_asset').val();
		var qty_asset 	= $('#qty').val();
		var depresiasi	= parseFloat($('#depresiasi').val());
		var nilai		= parseFloat(nilai_asset.split(',').join(''));
		var qty			= parseFloat(qty_asset.split(',').join(''));
		
		var per_bulan	= (nilai / (depresiasi * 12)) * qty;
		if(isNaN(per_bulan)){
			var per_bulan = 0;
		}
		$('#value').val(per_bulan.toFixed(0));
	});
	
	// $(document).on('keyup', '#qty', function(){
	// 	var nilai_asset = $('#nilai_asset').val();
	// 	var qty_asset 	= $('#qty').val();
	// 	var depresiasi	= parseFloat($('#depresiasi').val());
	// 	var nilai		= parseFloat(nilai_asset.split(',').join(''));
	// 	var qty			= parseFloat(qty_asset.split(',').join(''));
		
	// 	var per_bulan	= (nilai / (depresiasi * 12)) * qty;
	// 	if(isNaN(per_bulan)){
	// 		var per_bulan = 0;
	// 	}
	// 	$('#value').val(per_bulan.toFixed(0));
	// });
	
	$('#simpan-bro').click(function(e){
		e.preventDefault();
		$(this).prop('disabled',true);
		var nm_asset		= $('#nm_asset').val();
		var nilai_asset		= $('#nilai_asset').val();
		var qty				= $('#qty').val();
		
		if(nm_asset == '' || nm_asset == null){
			// $("#error").html("Nama asset masih kosong !!!");
			// $('#myModal').modal("show");
			swal({
				title	: "Error Message!",
				text	: 'Nama asset masih kosong ...',
				type	: "warning"
			});

			$('#simpan-bro').prop('disabled',false);
			return false;
		}
		if(nilai_asset == '' || nilai_asset == null || nilai_asset == 0){
			swal({
				title	: "Error Message!",
				text	: 'Nilai asset belum dipilih ...',
				type	: "warning"
			});

			$('#simpan-bro').prop('disabled',false);
			return false;
		}
		if(qty == '' || qty == null || qty == 0){
			swal({
				title	: "Error Message!",
				text	: 'Qty asset belum dipilih ...',
				type	: "warning"
			});

			$('#simpan-bro').prop('disabled',false);
			return false;
		}
		
		swal({
			title: "Are you sure?",
			text: "You will not be able to process again this data!",
			icon: "warning",
			buttons: {
				cancel: {
				text: "No, cancel process!",
				visible: true,
				className: "btn btn-secondary",
				closeModal: true,
				},
				confirm: {
				text: "Yes, Process it!",
				className: "btn btn-danger",
				},
			},
			dangerMode: true,
			})
			.then((isConfirm) => {
			if (isConfirm) {
				// loading_spinner();
				var formData = new FormData($('#form_proses_bro')[0]);
				var baseurl = siteurl + 'asset/edit';

				$.ajax({
				url: baseurl,
				type: "POST",
				data: formData,
				cache: false,
				dataType: 'json',
				processData: false,
				contentType: false,
				success: function(data) {
					if (data.status == 1) {
					swal({
						title: "Save Success!",
						text: data.pesan,
						icon: "success",
						timer: 7000,
						buttons: false
					});
					setTimeout(() => {
						window.location.href = siteurl + 'asset';
					}, 2000);
					} else {
					swal({
						title: "Save Failed!",
						text: data.pesan,
						icon: "warning",
						timer: 7000,
						buttons: false,
						closeOnClickOutside: false
					});
					$('#simpan-bro').prop('disabled', false);
					}
				},
				error: function() {
					swal({
					title: "Error Message!",
					text: 'An Error Occurred During Process. Please try again..',
					icon: "warning",
					timer: 7000,
					buttons: false,
					closeOnClickOutside: false
					});
					$('#simpan-bro').prop('disabled', false);
				}
				});
			} else {
				swal("Cancelled", "Data can be processed again :)", "error");
				$('#simpan-bro').prop('disabled', false);
				return false;
			}
			});

	});


	//target_utilitas
	$(document).on('keyup change', '#utilitas_perhari, #utilitas_tahunan, #depresiasi', function() {
		var perhari = parseFloat($('#utilitas_perhari').val().replace(/,/g, '')) || 0;
		var tahunan = parseFloat($('#utilitas_tahunan').val().replace(/,/g, '')) || 0;
		var depresiasi = parseFloat($('#depresiasi').val().replace(/,/g, '')) || 0;
		var result = perhari * tahunan * depresiasi;
		$('#target_utilitas').val(result.toLocaleString('en-US'));
	});

	//disposal_value
	$(document).on('keyup change', '#disposal_value_percent, #nilai_asset', function() {
		var disposal_value_percent = parseFloat($('#disposal_value_percent').val().replace(/,/g, '')) || 0;
		var nilai_asset = parseFloat($('#nilai_asset').val().replace(/,/g, '')) || 0;
		var result = disposal_value_percent * (nilai_asset/100);
		$('#disposal_value').val(result.toLocaleString('en-US'));
	});

	//cost_per_test
	$(document).on('keyup change', '#disposal_value_percent, #nilai_asset,#utilitas_perhari, #utilitas_tahunan, #depresiasi,.biaya_perawatan,.biaya_kalibrasi', function() {
			$('.moneyFormat').each(function() {
				var nilai_asset = parseFloat($('#nilai_asset').val().replace(/,/g, '')) || 0;
				let total_biaya_perawatan = 0;
				$('.biaya_perawatan').each(function() {
					let val = $(this).val().replace(/,/g, '');
					let num = parseFloat(val) || 0;
					total_biaya_perawatan += num;
				});
				let total_biaya_kalibrasi = 0;
				$('.biaya_kalibrasi').each(function() {
					let val1 = $(this).val().replace(/,/g, '');
					let num1 = parseFloat(val1) || 0;
					total_biaya_kalibrasi += num1;
				});
				console.log(total_biaya_kalibrasi);
				var disposal_value = parseFloat($('#disposal_value').val().replace(/,/g, '')) || 0;
				var depresiasi = parseFloat($('#depresiasi').val().replace(/,/g, '')) || 0;
				var target_utilitas = parseFloat($('#target_utilitas').val().replace(/,/g, '')) || 0;
				var result = (nilai_asset+total_biaya_perawatan+total_biaya_kalibrasi-disposal_value)/(depresiasi *target_utilitas);
				$('#cost_per_test').val(result.toLocaleString('en-US'));
			});	
		
	});

	if (typeof counter_perawatan === 'undefined') {
		var counter_perawatan = 0;
	}

	 <?php foreach($list_perewatan AS $val => $valx):?>
			// $selx = ($dataD[0]['category'] == $valx['id'])?'selected':'';
			addPerawatan('<?=$valx['year']?>','<?=$valx['date']?>','<?=$valx['maintenance_type']?>','<?=number_format($valx['cost'])?>');		
	<?php endforeach ?>
	
	
	function addPerawatan(year = '', date = '', maintenance_type = '', cost = '') {
		const currentYear = new Date().getFullYear();
		let options = "";

		// Generate year options in JS instead of PHP
		for (let y = currentYear + 6; y >= 2016; y--) {
			const selected = (y == year) ? "selected" : "";
			options += `<option value="${y}" ${selected}>${y}</option>`;
		}

		const newInputHtml = `
			<tr id="perawatan${counter_perawatan}">
				<td>
					<select name="perawatan[${counter_perawatan}][year]" class="form-control input">
						${options}
					</select>
				</td>
				<td>
					<input name="perawatan[${counter_perawatan}][date]" type="date" value="${date}" class="form-control input">
				</td>
				<td>
					<input name="perawatan[${counter_perawatan}][maintenance_type]" value="${maintenance_type}" class="form-control input" type="text">
				</td>
				<td>
					<input name="perawatan[${counter_perawatan}][cost]" value="${cost}" class="form-control input biaya_perawatan moneyFormat" type="text">
				</td>
				<td>
					<button onclick="deletePerawatan(${counter_perawatan})" class="btn btn-danger" type="button">
						<i class="fa fa-trash"></i>
					</button>
				</td>
			</tr>
		`;

		$('#perawatan_list').append(newInputHtml);

		$('#perawatan_list tr:last select').each(function() {
			$(this).select2({
				width: '100%',
				dropdownParent: $(this).closest('.modal').length ? $(this).closest('.modal') : $(this).parent()
			});
		});

		counter_perawatan++;
	}


	$(document).on('keyup change', '.biaya_perawatan', function() {
		updateTotalBiayaPerawatan();
	});

	

	function updateTotalBiayaPerawatan() {
		let total = 0;
		$('.biaya_perawatan').each(function() {
			let val = $(this).val().replace(/,/g, '');
			let num = parseFloat(val) || 0;
			total += num;
		});
		$('.total_biaya_perawatan').val(total.toLocaleString('en-US'));
	}

		function deletePerawatan(key=''){
			$(`#perawatan${key}`).remove();
			updateTotalBiayaPerawatan();
		}
	 if (typeof counter_kalibrasi === 'undefined') {
		var counter_kalibrasi = 0;
	}


		
		function addKalibrasi(year = '', date = '', calibration_type = '', cost = '') {
			const currentYear = new Date().getFullYear();
			let options = "";

			// Generate year options dynamically
			for (let y = currentYear + 6; y >= 2016; y--) {
				const selected = (y == year) ? "selected" : "";
				options += `<option value="${y}" ${selected}>${y}</option>`;
			}

			const newInputHtml = `
				<tr id="kalibrasi${counter_kalibrasi}">
					<td>
						<select name="kalibrasi[${counter_kalibrasi}][year]" class="form-control input">
							${options}
						</select>
					</td>
					<td>
						<input name="kalibrasi[${counter_kalibrasi}][date]" type="date" value="${date}" class="form-control input">
					</td>
					<td>
						<input name="kalibrasi[${counter_kalibrasi}][calibration_type]" value="${calibration_type}" class="form-control input" type="text">
					</td>
					<td>
						<input name="kalibrasi[${counter_kalibrasi}][cost]" value="${cost}" class="form-control input biaya_kalibrasi moneyFormat" type="text">
					</td>
					<td>
						<button onclick="deleteKalibrasi(${counter_kalibrasi})" class="btn btn-danger" type="button">
							<i class="fa fa-trash"></i>
						</button>
					</td>
				</tr>
			`;

			$('#kalibrasi_list').append(newInputHtml);

			// Re-initialize Select2 for the newly added select
			$('#kalibrasi_list tr:last select').each(function() {
				$(this).select2({
					width: '100%',
					dropdownParent: $(this).closest('.modal').length ? $(this).closest('.modal') : $(this).parent()
				});
			});

			counter_kalibrasi++;
		}

	<?php foreach($list_kalibrasi AS $val => $valx):?>
				addKalibrasi('<?=$valx['year']?>','<?=$valx['date']?>','<?=$valx['calibration_type']?>','<?=number_format($valx['cost'])?>');		
		<?php endforeach ?>
	$(document).on('keyup change', '.biaya_kalibrasi', function() {
		updateTotalBiayaKalibrasi();
	});

	function updateTotalBiayaKalibrasi() {
		let total = 0;
		$('.biaya_kalibrasi').each(function() {
			let val = $(this).val().replace(/,/g, '');
			let num = parseFloat(val) || 0;
			total += num;
		});
		$('.total_biaya_kalibrasi').val(total.toLocaleString('en-US'));
	}

	function deleteKalibrasi(key=''){
		$(`#kalibrasi${key}`).remove();
		updateTotalBiayaKalibrasi();
	}

	
 if (typeof counter_consumable === 'undefined') {
		var counter_consumable = 0;
	}

function addConsumable(accessories_id = 0, type = '', utility = '', qty = '', cost = '') {
	let options = `<option value="0">Pilih Consumable</option>`;
	const ls_consumable = <?php echo json_encode($list_consumable); ?>;

	// Build option list from JS array
	ls_consumable.forEach(item => {
		const selected = (item.id == accessories_id) ? "selected" : "";
		options += `<option value="${item.id}" ${selected}>${item.stock_name.toUpperCase()}</option>`;
	});

	const newInputHtml = `
		<tr id="consumable${counter_consumable}">
			<td>
				<select onchange="getConsumable(${counter_consumable})" 
						name="consumable[${counter_consumable}][accessories_id]" 
						id="consumable_accessories_id${counter_consumable}" 
						class="form-select select2">
					${options}
				</select>
			</td>
			<td>
				<input name="consumable[${counter_consumable}][type]" 
					   type="text" value="${type}" 
					   class="form-control input d-none">
				<input name="consumable[${counter_consumable}][utility]" 
					   type="text" value="${utility}" 
					   class="form-control input">
			</td>
			<td id="consumable_package${counter_consumable}"></td>
			<td>
				<input name="consumable[${counter_consumable}][qty]" 
					   value="${qty}" class="form-control input" type="text">
			</td>
			<td id="consumable_unit${counter_consumable}"></td>
			<td>
				<input name="consumable[${counter_consumable}][cost]" 
					   value="${cost}" 
					   class="form-control input biaya_consumable moneyFormat" 
					   type="text">
			</td>
			<td>
				<button onclick="deleteConsumable(${counter_consumable})" 
						class="btn btn-danger" type="button">
					<i class="fa fa-trash"></i>
				</button>
			</td>
		</tr>
	`;

	$('#consumable_list').append(newInputHtml);

	// Re-initialize Select2 for new select element
	$('#consumable_list tr:last select').each(function() {
		$(this).select2({
			width: '100%',
			dropdownParent: $(this).closest('.modal').length ? $(this).closest('.modal') : $(this).parent()
		});
	});

	counter_consumable++;
}

	
	function getConsumable(id){
		const list_consumable = <?= json_encode($list_consumable) ?>;
		let selectedId = $(`#consumable_accessories_id${id}`).val();
		const result = list_consumable.find(item => item.id === selectedId);
		console.log(result.unit_name);

		$('#consumable_package'+id).html(`${result.category}(${result.unit_name})`)
		$('#consumable_unit'+id).html(`${result.unit_name}`)
		
		
	}
	<?php foreach($list_apd AS $val => $valx):?>
			addConsumable('<?=$valx['accessories_id']?>','<?=$valx['type']?>','<?=$valx['utility']?>','<?=number_format($valx['qty'])?>','<?=number_format($valx['cost'])?>');		
			getConsumable(<?=$val?> )
	<?php endforeach ?>

	$(document).on('keyup change', '.biaya_consumable', function() {
		updateTotalBiayaConsumable();
	});

	function updateTotalBiayaConsumable() {
		let total = 0;
		$('.biaya_consumable').each(function() {
			let val = $(this).val().replace(/,/g, '');
			let num = parseFloat(val) || 0;
			total += num;
		});
		$('#total_biaya_consumable').val(total.toLocaleString('en-US'));
		$('#cost_consumable_per_sampel').text((total/1000).toLocaleString('en-US'));

		
	}

	

	function deleteConsumable(key=''){
		$(`#consumable${key}`).remove();
		updateTotalBiayaConsumable();
	}


	//addApd
	if (typeof counter_apd === 'undefined') {
		var counter_apd = 0;
	}
	function addApd(accessories_id = '', type = '', utility = '', qty = '', cost = '') {
		const ls_consumable = <?php echo json_encode($list_consumable); ?>;
		let options = `<option value="">Pilih Apd</option>`;
		// Generate options dynamically from list_consumable array
		console.log(ls_consumable);
		ls_consumable.forEach(item => {
			const selected = (item.id == accessories_id) ? "selected" : "";
			options += `<option value="${item.id}" ${selected}>${item.stock_name}</option>`;
		});
		
		const newInputHtml = `
			<tr id="apd${counter_apd}">
				<td>
					<select onchange="getApd(${counter_apd})" name="apd[${counter_apd}][accessories_id]" id="apd_accessories_id${counter_apd}" class="form-select select2">
						${options}
					</select>
				</td>
				<td>
					<input name="apd[${counter_apd}][type]" type="text" value="${type}" class="form-control input d-none">
					<input name="apd[${counter_apd}][utility]" type="text" value="${utility}" class="form-control input">
				</td>
				<td id="apd_package${counter_apd}"></td>
				<td><input name="apd[${counter_apd}][qty]" value="${qty}" class="form-control input" type="text"></td>
				<td id="apd_unit${counter_apd}"></td>
				<td><input name="apd[${counter_apd}][cost]" value="${cost}" class="form-control input biaya_apd moneyFormat" type="text"></td>
				<td>
					<button onclick="deleteApd(${counter_apd})" class="btn btn-danger" type="button">
						<i class="fa fa-trash"></i>
					</button>
				</td>
			</tr>
		`;

		$('#apd_list').append(newInputHtml);

		// Re-initialize Select2 for new row
		$('#apd_list tr:last select').each(function() {
			$(this).select2({
				width: '100%',
				dropdownParent: $(this).closest('.modal').length ? $(this).closest('.modal') : $(this).parent()
			});
		});

		counter_apd++;
	}

	
	function getApd(id){
		const list_apd = <?= json_encode($list_consumable) ?>;
		let selectedId = $(`#apd_accessories_id${id}`).val();
		const result = list_apd.find(item => item.id === selectedId);
		console.log(result.unit_name);

		$('#apd_package'+id).html(`${result.category}(${result.unit_name})`)
		$('#apd_unit'+id).html(`${result.unit_name}`)
		
		
	}

	<?php foreach($list_apd AS $val => $valx):?>
			addApd('<?=$valx['accessories_id']?>','<?=$valx['type']?>','<?=$valx['utility']?>','<?=number_format($valx['qty'])?>','<?=number_format($valx['cost'])?>');		
			getApd(<?=$val?> )
	<?php endforeach ?>

	$(document).on('keyup change', '.biaya_apd', function() {
		updateTotalBiayaApd();
	});

	function updateTotalBiayaApd() {
		let total = 0;
		$('.biaya_apd').each(function() {
			let val = $(this).val().replace(/,/g, '');
			let num = parseFloat(val) || 0;
			total += num;
		});
		let target_utilitas = $('#target_utilitas').val().replace(/,/g, '');
		$('#total_biaya_apd').val(total.toLocaleString('en-US'));
		$('#cost_apd_per_sampel').text((total/target_utilitas).toLocaleString('en-US'));

	}

	function deleteApd(key=''){
		$(`#apd${key}`).remove();
		updateTotalBiayaApd();
	}


	//addParameter
	if (typeof counter_parameter === 'undefined') {
		var counter_parameter = 0;
	}
	function addParameter(parameter_id = '', abbreviation = '', tube = '') {
		const list_param = <?= json_encode($list_param); ?>;
		const list_tabung = <?= json_encode($list_tabung); ?>;
		let options = `<option value="0">Pilih Parameter</option>`;
		// Generate options dynamically from list_param array
		list_param.forEach(item => {
			const selected = (item.id_parameter == parameter_id) ? "selected" : "";
			options += `<option value="${item.id_parameter}" ${selected}>${item.nama_parameter}</option>`;
		});
		let options2 = `<option value="0">Pilih Tabung</option>`;
		list_tabung.forEach(item => {
			const selected = (item.id == tube) ? "selected" : "";
			options2 += `<option value="${item.id}" ${selected}>${item.stock_name}</option>`;
		});

		const newInputHtml = `
			<tr id="parameter${counter_parameter}">
				<td>
					<select name="parameter[${counter_parameter}][parameter_id]" 
							class="form-select select2">
						${options}
					</select>
				</td>
				<td>
					<input name="parameter[${counter_parameter}][abbreviation]" 
						type="text" 
						value="${abbreviation}" 
						class="form-control input">
				</td>
				<td>
					<select name="parameter[${counter_parameter}][tube]" 
							class="form-select select2">
						${options2}
					</select>
				</td>
				<td>
					<button onclick="deleteParameter(${counter_parameter})" 
							class="btn btn-danger" 
							type="button">
						<i class="fa fa-trash"></i>
					</button>
				</td>
			</tr>
		`;

		$('#parameter_list').append(newInputHtml);

		// Initialize Select2 for the newly added select element
		$('#parameter_list tr:last select').each(function() {
			$(this).select2({
				width: '100%',
				dropdownParent: $(this).closest('.modal').length ? $(this).closest('.modal') : $(this).parent()
			});
		});

		counter_parameter++;
	}

	<?php foreach($asset_parameter AS $val => $valx):?>
			addParameter('<?=$valx['parameter_id']?>','<?=$valx['abbreviation']?>','<?=$valx['tube']?>');		
	<?php endforeach ?>


	function deleteParameter(key=''){
		// console.log(key);
       $(`#parameter${key}`).remove();
	}

</script>