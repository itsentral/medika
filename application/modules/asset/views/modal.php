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
					foreach ($list_dept as $val => $valx) {
						$sexd = "";
						echo "<option value='" . $valx['id'] . "' " . $sexd . ">" . strtoupper($valx['nama']) . "</option>";
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
				<input type="text" id="target_utilitas" name="target_utilitas" class="form-control moneyFormat" autocomplete="off" placeholder="Lokasi">
			</div>
		</div>
		<br>
		<p style='display:inline-block;background:#e6f7ff;color:#034f84;padding:8px 12px;border-radius:6px;font-weight:700;margin:0; font-size:16px;'>Perawatan</p>
		<br><br>
		<h5><b>Jadwal Perawatan</b></h5>
		<button onclick="addPerawatan('')" type="button" class="btn btn-primary mb-2">
			<i class="fa fa-plus"></i> Perawatan
		</button>
		<div id="form-kirim-sample" style="margin-top:20px;max-height:300px; overflow-x:auto; overflow-y:auto;">
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
					</tr>
				</tfoot>
			</table>
		</div>
		<br>
		<h5><b>Jadwal Rekalibrasi</b></h5>
		<button onclick="addKalibrasi('')" type="button" class="btn btn-primary mb-2">
			<i class="fa fa-plus"></i> Kalibrasi
		</button>
		<div id="form-kirim-sample" style="margin-top:20px;max-height:300px; overflow-x:auto; overflow-y:auto;">
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
					<input type="text" id="cost_per_test" name="cost_per_test" class="form-control" autocomplete="off" placeholder="Value %" style="max-width:80px;">
				</div>
			</div>
		</div>
		<p style='display:inline-block;background:#e6f7ff;color:#034f84;padding:8px 12px;border-radius:6px;font-weight:700;margin:0; font-size:16px;'>Consumable</p>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
	$(function() {
		$('.chosen-select').select2({
			minimumResultsForSearch: 0 // always show search box
		});
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
			Swal.fire({
				title: "Error Message!",
				text: 'Nama asset masih kosong ...',
				icon: "warning"
			});
			$('#simpan-bro').prop('disabled', false);
			return false;
		}
		if (category == '' || category == null || category == 0) {
			Swal.fire({
				title: "Error Message!",
				text: 'Kategori asset belum dipilih ...',
				icon: "warning"
			});
			$('#simpan-bro').prop('disabled', false);
			return false;
		}
		if (lokasi_asset == '' || lokasi_asset == null || lokasi_asset == 0) {
			Swal.fire({
				title: "Error Message!",
				text: 'Lokasi asset belum diisi ...',
				icon: "warning"
			});
			$('#simpan-bro').prop('disabled', false);
			return false;
		}
		if (outlet == '' || outlet == null || outlet == 0) {
			Swal.fire({
				title: "Error Message!",
				text: 'Outlet asset belum dipilih ...',
				icon: "warning"
			});
			$('#simpan-bro').prop('disabled', false);
			return false;
		}
		if (depresiasi == '' || depresiasi == null || depresiasi == 0) {
			Swal.fire({
				title: "Error Message!",
				text: 'Jangka waktu asset belum dipilih ...',
				icon: "warning"
			});
			$('#simpan-bro').prop('disabled', false);
			return false;
		}
		if (nilai_asset == '' || nilai_asset == null || nilai_asset == 0) {
			Swal.fire({
				title: "Error Message!",
				text: 'Nilai asset belum dipilih ...',
				icon: "warning"
			});
			$('#simpan-bro').prop('disabled', false);
			return false;
		}
		if (qty == '' || qty == null || qty == 0) {
			Swal.fire({
				title: "Error Message!",
				text: 'Qty asset belum dipilih ...',
				icon: "warning"
			});
			$('#simpan-bro').prop('disabled', false);
			return false;
		}
		if (tanggal == '' || tanggal == null || tanggal == 0) {
			Swal.fire({
				title: "Error Message!",
				text: 'Tanggal asset belum dipilih ...',
				icon: "warning"
			});
			$('#simpan-bro').prop('disabled', false);
			return false;
		}
		Swal.fire({
			title: "Error Message!",
			text: 'STOP',
			icon: "warning"
		});

		// return false;

		Swal.fire({
			title: "Are you sure?",
			text: "You will not be able to process again this data!",
			icon: "warning",
			showCancelButton: true,
			confirmButtonText: "Yes, Process it!",
			cancelButtonText: "No, cancel process!",
			allowOutsideClick: false
		}).then(function(result) {
			if (result && result.isConfirmed) {
				setTimeout(function() {
					$('.moneyFormat').each(function() {
						// Get the current value
						var value = $(this).val();
						// Remove commas
						value = value.replace(/,/g, '');
						// Update the input field
						$(this).val(value);
					});	
				}, 100);
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
							Swal.fire({
								title: "Save Success!",
								text: data.pesan,
								icon: "success",
								timer: 7000
							});
							window.location.href = siteurl + 'asset';
						} else {
							if (data.status == 2) {
								Swal.fire({
									title: "Save Failed!",
									text: data.pesan,
									icon: "warning",
									timer: 7000
								});
							} else if (data.status == 3) {
								Swal.fire({
									title: "Save Failed!",
									text: data.pesan,
									icon: "warning",
									timer: 7000
								});
							} else {
								Swal.fire({
									title: "Save Failed!",
									text: data.pesan,
									icon: "warning",
									timer: 7000,
									showCancelButton: false,
									showConfirmButton: false,
									allowOutsideClick: false
								});
							}
							$('#simpan-bro').prop('disabled', false);
						}
					},
					error: function() {
						Swal.fire({
							title: "Error Message !",
							text: 'An Error Occured During Process. Please try again..',
							icon: "warning",
							timer: 7000,
							showCancelButton: false,
							showConfirmButton: false,
							allowOutsideClick: false
						});
						$('#simpan-bro').prop('disabled', false);
					}
				});
			} else {
				Swal.fire({
					title: "Cancelled",
					text: "Data can be process again :)",
					icon: "error"
				});
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
							for ($year = $currentYear; $year >= 2016; $year--) {
								echo "<option value='{$year}'>{$year}</option>";
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
        counter_perawatan++;
	}
	$(document).on('keyup change', '.biaya_perawatan', function() {
		let total = 0;
		$('.biaya_perawatan').each(function() {
			let val = $(this).val().replace(/,/g, '');
			let num = parseFloat(val) || 0;
			total += num;
		});
		$('.total_biaya_perawatan').val(total.toLocaleString('en-US'));
	});




	function deletePerawatan(key=''){
		// console.log(key);
       $(`#perawatan${key}`).remove();
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
							for ($year = $currentYear; $year >= 2016; $year--) {
								echo "<option value='{$year}'>{$year}</option>";
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
        counter_kalibrasi++;
	}

	
	$(document).on('keyup change', '.biaya_kalibrasi', function() {
		let total = 0;
		$('.biaya_kalibrasi').each(function() {
			let val = $(this).val().replace(/,/g, '');
			let num = parseFloat(val) || 0;
			total += num;
		});
		$('.total_biaya_kalibrasi').val(total.toLocaleString('en-US'));
	});

	function deleteKalibrasi(key=''){
		// console.log(key);
       $(`#perawatan${key}`).remove();
	}

</script>