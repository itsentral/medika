<?php

$qData	= "SELECT * FROM asset WHERE id='".$this->uri->segment(3)."'";
$dataD	= $this->db->query($qData)->result_array();
$list_dept = $this->db->get_where('ms_department', ['deleted_by' => null])->result_array();
$list_catg = $this->Asset_model->getList('asset_category');

$QUERY	 	= "SELECT * FROM ms_costcenter WHERE id_dept='".$dataD[0]['lokasi_asset']."' AND deleted = '0' ORDER BY nama_costcenter ASC";
$costcenter	= $this->db->query($QUERY)->result_array();

?>

<div class="card">
	<div class="card-header">
		<h5 class="card-title mb-0"></h5>
	</div>
	<div class="card-body">
		<form id="form_proses_bro">
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
						foreach ($list_dept as $val => $valx) {
							$selected = ($valx['id'] == $dataD[0]['outlet'] )?'selected':'';
							echo "<option value='" . $valx['id'] . "' " . $selected . ">" . strtoupper($valx['nama']) . "</option>";
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
			<div class="d-flex justify-content-end">
				<?php
					echo form_button(array('type'=>'button','class'=>'btn btn-primary','value'=>'save','content'=>'Save','id'=>'simpan-bro','style'=>'width:100px;')).' ';
				?>
			</div>
		</form>
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
			  type: "warning",
			  showCancelButton: true,
			  confirmButtonClass: "btn-danger",
			  confirmButtonText: "Yes, Process it!",
			  cancelButtonText: "No, cancel process!",
			  closeOnConfirm: false,
			  closeOnCancel: false
			},
			function(isConfirm) {
			  if (isConfirm) {
					// loading_spinner();
					var formData  	= new FormData($('#form_proses_bro')[0]);
					var baseurl		= siteurl +'asset/edit';
					$.ajax({
						url			: baseurl,
						type		: "POST",
						data		: formData,
						cache		: false,
						dataType	: 'json',
						processData	: false, 
						contentType	: false,				
						success		: function(data){								
							if(data.status == 1){											
								swal({
									  title	: "Save Success!",
									  text	: data.pesan,
									  type	: "success",
									  timer	: 7000
									});
								window.location.href = siteurl + 'asset';
							}
							else{ 
								if(data.status == 2){
									swal({
									  title	: "Save Failed!",
									  text	: data.pesan,
									  type	: "warning",
									  timer	: 7000
									});
								}
								else if(data.status == 3){
									swal({
									  title	: "Save Failed!",
									  text	: data.pesan,
									  type	: "warning",
									  timer	: 7000
									});
								}
								else{
									swal({
									  title	: "Save Failed!",
									  text	: data.pesan,
									  type	: "warning",
									  timer	: 7000,
									  showCancelButton	: false,
									  showConfirmButton	: false,
									  allowOutsideClick	: false
									});
								}
								$('#simpan-bro').prop('disabled',false);
							}
						},
						error: function() {
							swal({
							  title				: "Error Message !",
							  text				: 'An Error Occured During Process. Please try again..',						
							  type				: "warning",								  
							  timer				: 7000,
							  showCancelButton	: false,
							  showConfirmButton	: false,
							  allowOutsideClick	: false
							});
							$('#simpan-bro').prop('disabled',false);
						}
					});
			  } else {
				swal("Cancelled", "Data can be process again :)", "error");
				$('#simpan-bro').prop('disabled',false);
				return false;
			  }
		});
	});

</script>