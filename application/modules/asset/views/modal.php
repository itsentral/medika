<div class="card border-primary mb-3">
	<div class="card-header  text-white">
		<h5 class="card-title mb-0"></h5>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label fw-bold">Nama Asset <span class="text-danger">*</span></label>
			<div class="col-sm-4">
				<?php
				echo form_input(array('id' => 'nm_asset', 'name' => 'nm_asset', 'class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => 'Nama Asset'));
				?>
			</div>
			<label class="col-sm-2 col-form-label fw-bold">Kategori <span class="text-danger">*</span></label>
			<div class="col-sm-4">
				<select name="category" id="category" class="form-select select2">
					<option value="0">Pilih Kategori</option>
					<?php
					foreach ($list_catg as $val => $valx) {
						$sexd = "";
						echo "<option value='" . $valx['id'] . "' " . $sexd . ">" . strtoupper($valx['nm_category']) . "</option>";
					}
					?>
				</select>
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label fw-bold">Outlet <span class="text-danger">*</span></label>
			<div class="col-sm-4">
				<select name="outlet" id="outlet" class="form-select select2">
					<option value="0">Pilih Outlet</option>
					<?php
					foreach ($outlet as $val => $valx) {
						$sexd = "";
						echo "<option value='" . $valx['id'] . "' " . $sexd . ">" . strtoupper($valx['namacabang']) . "</option>";
					}
					?>
				</select>
			</div>
			<label class="col-sm-2 col-form-label fw-bold">Merk <span class="text-danger">*</span></label>
			<div class="col-sm-4">
				<input type="text" id="merk" name="merk" class="form-control" autocomplete="off" placeholder="Merk">
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label fw-bold">Nilai Asset <span class="text-danger">*</span></label>
			<div class="col-sm-4">
				<?php
				echo form_input(array('id' => 'nilai_asset', 'name' => 'nilai_asset', 'class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => 'Nilai Asset', 'data-decimal' => '.', 'data-thousand' => '', 'data-precision' => '0', 'data-allow-zero' => false));
				?>
			</div>
			<label class="col-sm-2 col-form-label fw-bold">Jangka Waktu <span class="text-danger">*</span></label>
			<div class="col-sm-4">
				<select name="depresiasi" id="depresiasi" class="form-select select2">
					<option value="0">Pilih Jangka Waktu</option>
					<?php
					for ($a = 1; $a <= 16; $a++) {
						$sexd = "";
						echo "<option value='" . $a . "' " . $sexd . ">" . $a . " Tahun</option>";
					}
					?>
				</select>
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label fw-bold">Lokasi <span class="text-danger">*</span></label>
			<div class="col-sm-4">
				<input type="text" id="qty" name="qty" class="d-none" value="1">
				<input type="text" id="lokasi_asset" name="lokasi_asset" class="form-control" autocomplete="off" placeholder="Lokasi">
			</div>
			<label class="col-sm-2 col-form-label fw-bold">Dipresiasi Perbulan</label>
			<div class="col-sm-4">
				<?php
				echo form_input(array('id' => 'value', 'name' => 'value', 'class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => 'Dipresiasi Perbulan', 'readonly' => 'readonly', 'data-decimal' => '.', 'data-thousand' => '', 'data-precision' => '0', 'data-allow-zero' => false));
				?>
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label fw-bold">Tanggal Perolehan <span class="text-danger">*</span></label>
			<div class="col-sm-4">
				<input type="date" id="tanggal" name="tanggal" class="form-control" autocomplete="off" placeholder="Tanggal">
			</div>
		</div>
		<br>
		<p style='display:inline-block;background:#e6f7ff;color:#034f84;padding:8px 12px;border-radius:6px;font-weight:700;margin:0; font-size:16px;'>Utilisasi</p>
		<br><br>
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label fw-bold">Utilitas perhari <span class="text-danger">*</span></label>
			<div class="col-sm-4">
				<input type="text" id="utilitas_perhari" name="utilitas_perhari" class="form-control moneyFormat" autocomplete="off" placeholder="Utilitas perhari">
			</div>
			<label class="col-sm-2 col-form-label fw-bold">Utiltas Tahunan</label>
			<div class="col-sm-4">
				<input type="text" id="utilitas_tahunan" name="utilitas_tahunan" class="form-control moneyFormat" autocomplete="off" placeholder="Utiltas Tahunan">
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label fw-bold">Target utilisasi</label>
			<div class="col-sm-4">
				<input type="text" id="target_utilitas" name="target_utilitas" class="form-control moneyFormat" autocomplete="off" placeholder="Lokasi" readonly>
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
							<input name="total_biaya_perawatan" value="" id="total_biaya_perawatan" class="form-control total_biaya_perawatan moneyFormat" type="text" readonly>
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
							<input name="total_biaya_kalibrasi" value="" id="total_biaya_kalibrasi" class="form-control total_biaya_kalibrasi moneyFormat" type="text" readonly>
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
					<input type="text" id="disposal_value" name="disposal_value" class="form-control moneyFormat" autocomplete="off" placeholder="" readonly>
				</div>
			</div>
		</div>
		<br>
		<p style='display:inline-block;background:#e6f7ff;color:#034f84;padding:8px 12px;border-radius:6px;font-weight:700;margin:0; font-size:16px;'>Cost Per Test</p>
		<br><br>
		<div class="row mb-3">
			<div class="col-sm-4">
				<div class="input-group">
					<input type="text" id="cost_per_test" name="cost_per_test" class="form-control" autocomplete="off" placeholder="Value" style="max-width:80px;" readonly>
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
							<input name="total_biaya_consumable" value="" id="total_biaya_consumable" class="form-control  moneyFormat" type="text" readonly>
						</td>
						<td id="" style="position:sticky; bottom:0; background:#fff; z-index:3; font-weight:bold;">
						</td>
					</tr>
					<tr>
						<td colspan="5" style="position:sticky; bottom:0; background:#fff; z-index:3; font-weight:bold; text-align:right;">Cost Consumable Per Sampel</td>
						<td id="cost_consumable_per_sampel" style="position:sticky; bottom:0; background:#fff; z-index:3; font-weight:bold;">

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
							<input name="total_biaya_apd" value="" id="total_biaya_apd" class="form-control  moneyFormat" type="text" readonly>
						</td>
						<td id="" style="position:sticky; bottom:0; background:#fff; z-index:3; font-weight:bold;">
						</td>
					</tr>
					<tr>
						<td colspan="5" style="position:sticky; bottom:0; background:#fff; z-index:3; font-weight:bold; text-align:right;">Cost APD Per Sampel</td>
						<td id="cost_apd_per_sampel" style="position:sticky; bottom:0; background:#fff; z-index:3; font-weight:bold;">

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
		<?php
		echo form_button(array('type' => 'button', 'class' => 'btn btn-primary', 'value' => 'save', 'content' => 'Save', 'id' => 'simpan-bro', 'style' => 'width:100px; float:right;')) . ' ';
		?>
	</div>
</div>

<style media="screen">
	.select2-container {
		box-sizing: border-box;
		display: inline-block;
		margin: 0;
		position: relative;
		vertical-align: middle;
		width: 100% !important;
	}
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

	
	});

	$(document).on('keyup', '#nilai_asset', function() {
		var nilai_asset = $('#nilai_asset').val();
		var qty_asset = $('#qty').val();
		var depresiasi = parseFloat($('#depresiasi').val());
		var nilai = parseFloat(nilai_asset.split(',').join(''));

		var per_bulan = (nilai / (depresiasi * 12));
		if (isNaN(per_bulan)) {
			var per_bulan = 0;
		}
		$('#value').val(per_bulan.toFixed(0));
	});

	$(document).on('change', '#depresiasi', function() {
		var nilai_asset = $('#nilai_asset').val();
		var qty_asset = $('#qty').val();
		var depresiasi = parseFloat($('#depresiasi').val());
		var nilai = parseFloat(nilai_asset.split(',').join(''));

		var per_bulan = (nilai / (depresiasi * 12));
		if (isNaN(per_bulan)) {
			var per_bulan = 0;
		}
		$('#value').val(per_bulan.toFixed(0));
	});

	

	$('#simpan-bro').click(function(e) {
		e.preventDefault();
		$(this).prop('disabled', true);
		var nm_asset = $('#nm_asset').val();
		var category = $('#category').val();
		var outlet = $('#outlet').val();
		var lokasi_asset = $('#lokasi_asset').val();
		var merk = $('#merk').val();
		var depresiasi = $('#depresiasi').val();
		var nilai_asset = $('#nilai_asset').val();
		var qty = $('#qty').val();
		var tanggal = $('#tanggal').val();

		if (nm_asset == '' || nm_asset == null) {
			swal({
				title: "Error Message!",
				text: "Nama asset masih kosong ...",
				type: "warning"
			});
			$('#simpan-bro').prop('disabled', false);
			return false;
		}

		if (category == '' || category == null || category == 0) {
			swal({
				title: "Error Message!",
				text: "Kategori asset belum dipilih ...",
				type: "warning"
			});
			$('#simpan-bro').prop('disabled', false);
			return false;
		}

		if (lokasi_asset == '' || lokasi_asset == null || lokasi_asset == 0) {
			swal({
				title: "Error Message!",
				text: "Lokasi asset belum diisi ...",
				type: "warning"
			});
			$('#simpan-bro').prop('disabled', false);
			return false;
		}

		if (outlet == '' || outlet == null || outlet == 0) {
			swal({
				title: "Error Message!",
				text: "Outlet asset belum dipilih ...",
				type: "warning"
			});
			$('#simpan-bro').prop('disabled', false);
			return false;
		}

		if (depresiasi == '' || depresiasi == null || depresiasi == 0) {
			swal({
				title: "Error Message!",
				text: "Jangka waktu asset belum dipilih ...",
				type: "warning"
			});
			$('#simpan-bro').prop('disabled', false);
			return false;
		}

		if (nilai_asset == '' || nilai_asset == null || nilai_asset == 0) {
			swal({
				title: "Error Message!",
				text: "Nilai asset belum dipilih ...",
				type: "warning"
			});
			$('#simpan-bro').prop('disabled', false);
			return false;
		}

		if (qty == '' || qty == null || qty == 0) {
			swal({
				title: "Error Message!",
				text: "Qty asset belum dipilih ...",
				type: "warning"
			});
			$('#simpan-bro').prop('disabled', false);
			return false;
		}

		if (tanggal == '' || tanggal == null || tanggal == 0) {
			swal({
				title: "Error Message!",
				text: "Tanggal asset belum dipilih ...",
				type: "warning"
			});
			$('#simpan-bro').prop('disabled', false);
			return false;
		}

		swal({
			title: "Error Message!",
			text: "STOP",
			type: "warning"
		});


		// return false;

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
				var baseurl = siteurl + 'asset/saved';

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
						buttons: false
					});
					$('#simpan-bro').prop('disabled', false);
					}
				},
				error: function() {
					swal({
					title: "Error Message!",
					text: 'An Error Occurred During Process. Please try again..',
					icon: "error",
					timer: 7000,
					buttons: false
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

	 let counter_perawatan=0;
	
	function addPerawatan(){
        // console.log('add sampling');
		const newInputHtml = `
        	 <tr id="perawatan${counter_perawatan}">
				<td>
					<select name="perawatan[${counter_perawatan}][year]" class="form-control input">
						<?php
							$currentYear = date('Y');
							$selectedYear = $currentYear;
							for ($year = $currentYear + 6; $year >= 2016; $year--) {
								$selected = ($year == $selectedYear) ? "selected" : "";
								echo "<option value='{$year}' {$selected}>{$year}</option>";
							}
						?>
					</select>
				<td>
					<input name="perawatan[${counter_perawatan}][date]" type="date" value="" class="form-control input">
				</td>
				<td>
              		<input name="perawatan[${counter_perawatan}][maintenance_type]" value="" class="form-control input" type="text">
				</td>
                <td><input name="perawatan[${counter_perawatan}][cost]" value="" class="form-control input biaya_perawatan moneyFormat" type="text"></td>
                <td>
                    <button onclick="deletePerawatan(${counter_perawatan})" class="btn btn-danger"  type="button"><i class="fa fa-trash"></i></button>
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


    let counter_kalibrasi=0;
	function addKalibrasi(){
        // console.log('add sampling');
		const newInputHtml = `
			<tr id="perawatan${counter_kalibrasi}">
				<td>
					<select name="kalibrasi[${counter_kalibrasi}][year]" class="form-control input">
						<?php
							$currentYear = date('Y');
							$selectedYear = $currentYear;
							for ($year = $currentYear + 6; $year >= 2016; $year--) {
								$selected = ($year == $selectedYear) ? "selected" : "";
								echo "<option value='{$year}' {$selected}>{$year}</option>";
							}
						?>
					</select>
				<td>
					<input name="kalibrasi[${counter_kalibrasi}][date]" type="date" value="" class="form-control input">
				</td>
				<td>
					<input name="kalibrasi[${counter_kalibrasi}][calibration_type]" value="" class="form-control input" type="text">
				</td>
			   <td><input name="kalibrasi[${counter_kalibrasi}][cost]" value="" class="form-control input biaya_kalibrasi moneyFormat" type="text"></td>
			   <td>
				  <button onclick="deleteKalibrasi(${counter_kalibrasi})" class="btn btn-danger"  type="button"><i class="fa fa-trash"></i></button>
			   </td>
			</tr>
		`;
		$('#kalibrasi_list').append(newInputHtml);
		// Re-initialize Select2 for any new select elements inside the added row
		$('#kalibrasi_list tr:last select').each(function() {
			$(this).select2({
				width: '100%',
				dropdownParent: $(this).closest('.modal').length ? $(this).closest('.modal') : $(this).parent()
			});
		});
		counter_kalibrasi++;
		
	}

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

	//addConsumable
	let counter_consumable=0;
	function addConsumable(){

		const newInputHtml = `
			<tr id="consumable${counter_consumable}">
				<td>
					<select onchange="getConsumable(${counter_consumable})" name="consumable[${counter_consumable}][accessories_id]" id="consumable_accessories_id${counter_consumable}" class="form-select select2">
						<option value="0">Pilih Consumable</option>
						<?php
						foreach ($list_consumable as $val => $valx) {
							$selected = "";
							echo "<option value='" . $valx['id'] . "' " . $selected . ">" . strtoupper($valx['stock_name']) . "</option>";
						}
						?>
					</select>
				<td>
					<input name="consumable[${counter_consumable}][type]" type="text" value="consumable" class="form-control input d-none">
					<input name="consumable[${counter_consumable}][utility]" type="text" value="" class="form-control input">
				</td>
				<td id="consumable_package${counter_consumable}">
				</td>
				<td><input name="consumable[${counter_consumable}][qty]" value="" class="form-control input" type="text"></td>
				<td id="consumable_unit${counter_consumable}"></td>
				<td><input name="consumable[${counter_consumable}][cost]" value="" class="form-control input biaya_consumable moneyFormat" type="text"></td>
				<td>
					<button onclick="deleteConsumable(${counter_consumable})" class="btn btn-danger"  type="button"><i class="fa fa-trash"></i></button>
				</td>
			</tr>
		`;
		$('#consumable_list').append(newInputHtml);
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
	let counter_apd=0;
	function addApd(){

		const newInputHtml = `
			<tr id="apd${counter_apd}">
				<td>
					<select onchange="getApd(${counter_apd})" name="apd[${counter_apd}][accessories_id]" id="apd_accessories_id${counter_apd}" class="form-select select2">
						<option value="0">Pilih Apd</option>
						<?php
						foreach ($list_consumable as $val => $valx) {
							$selected = "";
							echo "<option value='" . $valx['id'] . "' " . $selected . ">" . strtoupper($valx['stock_name']) . "</option>";
						}
						?>
					</select>
				<td>
					<input name="apd[${counter_apd}][type]" type="text" value="apd" class="form-control input d-none">
					<input name="apd[${counter_apd}][utility]" type="text" value="" class="form-control input">
				</td>
				<td id="apd_package${counter_apd}">
				</td>
				<td><input name="apd[${counter_apd}][qty]" value="" class="form-control input" type="text"></td>
				<td id="apd_unit${counter_apd}"></td>
				<td><input name="apd[${counter_apd}][cost]" value="" class="form-control input biaya_apd moneyFormat" type="text"></td>
				<td>
					<button onclick="deleteApd(${counter_apd})" class="btn btn-danger"  type="button"><i class="fa fa-trash"></i></button>
				</td>
			</tr>
		`;
		$('#apd_list').append(newInputHtml);
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
	let counter_parameter=0;
	function addParameter(){
        // console.log('add sampling');
		const newInputHtml = `
			<tr id="parameter${counter_parameter}">
				<td>
					<select name="parameter[${counter_parameter}][parameter_id]" class="form-select select2">
						<option value="0">Pilih Parameter</option>
						<?php
						foreach ($list_param as $val => $valx) {
							$selected = "";
							echo "<option value='" . $valx['id_parameter'] . "' " . $selected . ">" . strtoupper($valx['nama_parameter']) . "</option>";
						}
						?>
					</select>
				<td>
					<input name="parameter[${counter_parameter}][abbreviation]" type="text" value="" class="form-control input">
				</td>
				<td>
					<input name="parameter[${counter_parameter}][tube]" value="" class="form-control input" type="text">
				</td>
				<td>
					<button onclick="deleteParameter(${counter_parameter})" class="btn btn-danger"  type="button"><i class="fa fa-trash"></i></button>
				</td>
			</tr>
		`;
		$('#parameter_list').append(newInputHtml);
		// initialize select2 on the newly added select
		// $(`#consumable${counter_consumable} .select2`).select2({
		// 	minimumResultsForSearch: 0,
		// 	width: '100%'
		// });
		counter_parameter++;
	}


	function deleteParameter(key=''){
		// console.log(key);
       $(`#parameter${key}`).remove();
	}
	

</script>