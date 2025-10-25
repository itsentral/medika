<div id='alert_edit' class="alert alert-success alert-dismissable" style="padding: 15px; display: none;"></div>

<div class="card">
	<div class="card-header d-flex justify-content-between align-items-center">
		<div class="card-title">
			<h4 class="fw-bold">
				<a href="<?= base_url('paket_mcu') ?>" title="Kembali"> <i class="fa fa-arrow-left">&nbsp;</i></a>
				Input Data Paket MCU
			</h4>
		</div>

	</div>
	<form id="data_form">
		<div class="card-body">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group row">
						<div class="col-md-4">
							<label for="">Nama Paket MCU</label>
						</div>
						<div class="col">
							<input type="text" class="form-control" id="" required name="nm_customer" placeholder="Nama Custommer" value="">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-4">
							<label for="">Kategori</label>
						</div>
						<div class="col">
							<select id="kategori" name="kategori" class="form-select" required>
								<option value=""></option>

							</select>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-4">
							<label for="">Kelompok Pemeriksaan</label>
						</div>
						<div class="col">
							<select id="kelompok_pemeriksaan" name="kelompok_pemeriksaan" class="form-select" required>
								<option value=""></option>
								<?php if ($kategori) foreach ($kategori as $kt): ?>
									<option value="<?= $kt->id ?>"><?= ucfirst($kt->name) ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-4">
							<label for="">Status</label>
						</div>
						<div class="col-md-5">
							<label>
								<input type="radio" class="radio-control" id="" name="status" value="aktif" required> Aktif
							</label>
							&nbsp; &nbsp; &nbsp;
							<label>
								<input type="radio" class="radio-control" id="" name="status" value="nonaktif" checked required> Non Aktif
							</label>
						</div>
					</div>
				</div>

				<div class="col-md-6 border rounded p-2">
					<h6>Daftar Pemeriksaan</h6>
					<div class="list-pemeriksaan"></div>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary" name="save" id="save"><i class="fa fa-save"></i> Simpan</button>
			<button type="reset" class="btn btn-warning"><i class="fa fa-sync"></i> Reset</button>
		</div>
	</form>

</div>

<!-- page script -->
<script type="text/javascript">
	$(document).ready(function() {
		$('.select2').select2({
			theme: 'bootstrap',
		});

		$('#kategori').select2({
			placeholder: 'Pilih Kategori',
			allowClear: true,
			theme: 'bootstrap',
			ajax: {
				url: siteurl + 'paket_mcu/getKategori', // endpoint ambil daftar provinsi
				dataType: 'json',
				delay: 250,
				data: function(params) {
					return {
						term: params.term
					};
				},
				processResults: function(data) {
					return data;
				}
			}
		});

		$('#kelompok_pemeriksaan').select2({
			placeholder: 'Pilih Kelompok Pemeriksaan',
			theme: 'bootstrap',
			allowClear: true,
			ajax: {
				url: siteurl + 'paket_mcu/getKelompok', // endpoint default
				dataType: 'json',
				delay: 250,
				data: function(params) {
					return {
						q: params.term,
						kategori_id: $('#kategori').val() // kirim id provinsi
					};
				},
				processResults: function(data) {
					return {
						results: data.map(function(item) {
							return {
								id: item.id,
								text: item.nama
							};
						})
					};
				}
			}
		});

		// Saat provinsi berubah, reset kota
		$('#kategori').on('change', function() {
			$('#kota').val(null).trigger('change'); // reset pilihan kota
			$('#kota').prop('disabled', !$(this).val()); // disable kalau kosong
		});

	});


	// ADD CUSTOMER 

	$(document).on('submit', '#data_form', function(e) {
		e.preventDefault()
		var data = $('#data_form').serialize();
		// alert(data);
		// exit();
		swal({
				title: "Anda Yakin?",
				text: "Data Customer akan di simpan.",
				type: "warning",
				showCancelButton: true,
				confirmButtonClass: "btn-info",
				confirmButtonText: "Ya, Simpan!",
				cancelButtonText: "Batal",
				closeOnConfirm: false
			},
			function() {
				$.ajax({
					type: 'POST',
					url: siteurl + 'customer/saveCustomer',
					dataType: "json",
					data: data,
					success: function(result) {
						if (result.status == '1') {
							swal({
									title: "Sukses",
									text: "Data Customer berhasil disimpan.",
									type: "success"
								},
								function() {
									window.location.reload(true);
								})
						} else {
							swal({
								title: "Error",
								text: "Data error. Gagal insert data",
								type: "error"
							})

						}
					},
					error: function() {
						swal({
							title: "Error",
							text: "Data error. Gagal request Ajax",
							type: "error"
						})
					}
				})
			});

	})




	function PreviewPdf(id) {
		param = id;
		tujuan = 'customer/print_request/' + param;

		$(".modal-body").html('<iframe src="' + tujuan + '" frameborder="no" width="570" height="400"></iframe>');
	}

	function PreviewRekap() {
		tujuan = 'customer/rekap_pdf';
		$(".modal-body").html('<iframe src="' + tujuan + '" frameborder="no" width="100%" height="400"></iframe>');
	}
</script>