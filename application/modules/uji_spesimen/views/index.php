<?php
$ENABLE_ADD     = has_permission('Uji_spesimen.Add');
$ENABLE_MANAGE  = has_permission('Uji_spesimen.Manage');
$ENABLE_VIEW    = has_permission('Uji_spesimen.View');
$ENABLE_DELETE  = has_permission('Uji_spesimen.Delete');
?>

<div class="card bg-transparent shadow-none">
	<div class="card-body">
		<h5 class="card-title text-center fw-extrabold fs-2"><?= $template['title']; ?></h5>
		<div class="d-flex justify-content-center gap-3 flex-wrap mb-5 mt-5">
			<a href="#" data-id="" id="all" class="btn btn-lg text-white bg-warning-gradient fw-extrabold p-4 fs-4 flex-grow-1 active btn-uji">ALL
			</a>
			<?php if ($alat) foreach ($alat as $key => $v) : ?>
				<button type="button" data-id="<?= $v->id; ?>" id="<?= $v->id; ?>" class="position-relative btn btn-lg text-white bg-primary-gradient fw-extrabold p-4 fs-4 flex-grow-1 btn-uji"><?= $v->nama; ?>
					<!-- <span class="badge badge-danger position-absolute mt-3 ms-2">4</span> -->
				</button>
			<?php endforeach; ?>
		</div>

		<div class="card">
			<div class="card-header">
				<div class="d-flex justify-content-between align-items-center flex-column flex-md-row">
					<h3 class="title-list text-primary text-primary-emphasis fw-extrabold">~</h3>
					<div class="">
						<div class="input-group mb-3">
							<span class="input-group-text" id="input1"><i class="fa fa-search" aria-hidden="true"></i></span>
							<input type="text" id="search" class="form-control" placeholder="Cari" aria-label="Search" />
						</div>
					</div>
				</div>
			</div>
			<div class="card-body p-0">
				<div class="table-wrapper">
					<table class="table table-striped display" id="table-uji">
						<thead>
							<tr>
								<th>#</th>
								<th>Nama Lengkap</th>
								<th>Tgl. Lahir</th>
								<th class="text-center">Revisi</th>
								<th class="text-center">Status</th>
								<th class="text-center">Opsi</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Understood</button>
			</div>
		</div>
	</div>
</div>

<!-- page script -->
<script type="text/javascript">
	$(document).on('click', '.detail', function() {
		var so_number = $(this).data('so_number');
		// alert(id);
		$("#head_title").html("<b>Detail>");
		$.ajax({
			type: 'POST',
			url: base_url + active_controller + 'detail',
			data: {
				'so_number': so_number,
			},
			success: function(data) {
				$("#dialog-popup").modal();
				$("#ModalView").html(data);

			}
		})
	});

	// DELETE DATA
	$(document).on('click', '.booking', function(e) {
		e.preventDefault()
		var so_number = $(this).data('so_number');
		// alert(id);
		swal({
				title: "Anda Yakin?",
				text: "Process Booking Material & PR !",
				type: "warning",
				showCancelButton: true,
				confirmButtonClass: "btn-info",
				confirmButtonText: "Ya!",
				cancelButtonText: "Batal",
				closeOnConfirm: false
			},
			function() {
				$.ajax({
					type: 'POST',
					url: base_url + active_controller + 'process_booking',
					dataType: "json",
					data: {
						'so_number': so_number
					},
					success: function(result) {
						if (result.status == '1') {
							swal({
									title: "Sukses",
									text: result.pesan,
									type: "success"
								},
								function() {
									window.location.reload(true);
								})
						} else {
							swal({
								title: "Error",
								text: result.pesan,
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
	});

	$(document).on('click', '.Approve', function(e) {
		e.preventDefault()
		var id = $(this).data('no_po');
		// alert(id);
		swal({
				title: "Anda Yakin?",
				text: "PO. Akan Di Approve.",
				type: "warning",
				showCancelButton: true,
				confirmButtonClass: "btn-info",
				confirmButtonText: "Ya, Approve!",
				cancelButtonText: "Batal",
				closeOnConfirm: false
			},
			function() {
				$.ajax({
					type: 'POST',
					url: siteurl + 'purchase_order/Approved',
					dataType: "json",
					data: {
						'id': id
					},
					success: function(result) {
						if (result.status == '1') {
							swal({
									title: "Sukses",
									text: "P.R Approved.",
									type: "success"
								},
								function() {
									window.location.reload(true);
								})
						} else {
							swal({
								title: "Error",
								text: "Data error. Gagal Approve data",
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

	$(document).on('click', '.view', function() {
		var id = $(this).data('no_pr');
		// alert(id);
		$("#head_title").html("<i class='fa fa-list-alt'></i><b>Detail Inventory</b>");
		$.ajax({
			type: 'POST',
			url: siteurl + 'purchase_request/View/' + id,
			data: {
				'id': id
			},
			success: function(data) {
				$("#dialog-popup").modal();
				$("#ModalView").html(data);

			}
		})
	});

	$(document).ready(function() {
		var table = new DataTable('#table-uji', {
			"serverSide": true,
			"stateSave": false,
			// layout:{
			// 	topStart:'search',
			// },
			"ajax": {
				url: siteurl + active_controller + 'getData',
				type: "post",
				data: function(d) {
					d.id_alat = $('.btn.active').data('id')
				},
			}
		});

		$('#search').on('keyup', function() {
			table.search(this.value).draw();
		});

		$(document).on('click', '.btn-lg', function() {
			$('.btn-lg').removeClass('active')
			$('.btn-lg').removeClass('bg-warning-gradient')
			$('.btn-lg').addClass('bg-primary-gradient')

			$(this).addClass('active')
			if ($(this).hasClass('bg-primary-gradient')) {
				$(this).removeClass('bg-primary-gradient')
				$(this).addClass('bg-warning-gradient')
			}
			table.draw()
			$('.title-list').text($(this).text())
		})

	});
</script>