<?php
$ENABLE_ADD     = has_permission('Pendaftaran.Add');
$ENABLE_MANAGE  = has_permission('Pendaftaran.Manage');
$ENABLE_VIEW    = has_permission('Pendaftaran.View');
$ENABLE_DELETE  = has_permission('Pendaftaran.Delete');
?>

<div id='alert_edit' class="alert alert-success alert-dismissable" style="padding: 15px; display: none;"></div>

<div class="py-3">
	<h2 class="fw-extrabold text-center"><?= $template['title']; ?></h2>
</div>
<div class="d-flex justify-content-between align-items-center">
	<div class="">
		<?php if ($ENABLE_ADD) : ?>
			<a class="btn btn-primary rounded-pill" href="<?= base_url('pendaftaran/addPendaftaranlab') ?>" title="Add"> <i class="fa fa-plus">&nbsp;</i>Pasien Baru</a>
		<?php endif; ?>
	</div>
	<div class="">
		<div class="form-group row">
			<div class="input-group">
				<span class="input-group-text"><i class="fa fa-search"></i></span>
				<input type="text" id="search" name="search" class="form-control input-sm col-md-6" tabindex="-1" placeholder="Cari">
			</div>
		</div>
	</div>
</div>

<div class="card">
	<div class="card-body p-0">
		<table id="example1" class="table my-0 table-sm table-bordered table-striped">
			<thead>
				<tr>
					<th width="5">#</th>
					<th>No RM</th>
					<th>Nama Pasien</th>
					<th>Tgl Lahir</th>
					<th>Alamat Pasien</th>
					<?php if ($ENABLE_MANAGE) : ?>
						<th class="text-center" width="150">Action</th>
					<?php endif; ?>
				</tr>
			</thead>
			<tbody>
				<?php if (empty($results)) {
				} else {
					$numb = 0;
					foreach ($results as $record) {
						$numb++; ?>
						<tr>
							<td><?= $numb; ?></td>
							<td><?= $record->medrec ?></td>
							<td><?= $record->nama_pasien . $record->status_pasien ?></td>
							<td><?= tgl_indo($record->tgl_lahir) ?></td>
							<td><?= $record->alamat ?></td>
							<td align="center" style="padding-left:20px">
								<?php if ($ENABLE_VIEW) : ?>
									<a class="btn btn-primary btn-xs view" href="javascript:void(0)" title="View" data-id_pasien="<?= $record->medrec ?>"><i class="fa fa-eye"></i>
									</a>
								<?php endif; ?>

								<?php if ($ENABLE_MANAGE) : ?>
									<a class="btn btn-success btn-xs edit" href="javascript:void(0)" title="Daftar Rawat Jalan" data-id_pasien="<?= $record->medrec ?>"><i class="fa fa-list"></i>
									</a>
								<?php endif; ?>
								<?php if ($ENABLE_MANAGE) : ?>
									<a class="btn btn-warning btn-xs update" href="javascript:void(0)" title="Update Data Pasien" data-id_pasien="<?= $record->medrec ?>"><i class="fa fa-edit"></i>
									</a>
								<?php endif; ?>
							</td>

						</tr>
				<?php }
				}  ?>
			</tbody>
		</table>
	</div>
</div>

<!-- awal untuk modal dialog -->
<!-- Modal -->
<div class="modal modal-primary" id="dialog-rekap" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel"><span class="fa fa-file-pdf-o"></span>&nbsp;Rekap Data Customer</h4>
			</div>
			<div class="modal-body" id="MyModalBody">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">
					<span class="glyphicon glyphicon-remove"></span> Close</button>
			</div>
		</div>
	</div>
</div>

<div class="modal modal-default fade" id="dialog-popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel"><span class="fa fa-users"></span>&nbsp;Data Pasien</h4>
			</div>
			<div class="modal-body" id="ModalView">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">
					<span class="glyphicon glyphicon-remove"></span> Close</button>
			</div>
		</div>
	</div>
</div>


<!-- page script -->
<script type="text/javascript">
	$(document).ready(function() {
		let table = new DataTable('#example1');

		// #myInput is a <input type="text"> element
		$('#search').on('keyup', function() {
			table.search(this.value).draw();
		});

		$(document).on('keyup', '#search', function() {
			let search = $(this).val();
			table.search(this.value).draw();
		})

		$(document).on('click', '.edit', function(e) {
			var id = $(this).data('id_pasien');
			window.location.href = siteurl + "pendaftaran/Daftar_PasienLab/" + id;
		});

		$(document).on('click', '.update', function(e) {
			var id = $(this).data('id_pasien');
			window.location.href = siteurl + "pendaftaran/Update_PasienLama/" + id;
		});
	});

	// function get_pasien() {
	// 	var search = $("#search").val();
	// 	window.location.href = siteurl + "pendaftaran/search_pasien/" + search;

	// }

	$(function() {

		// $("#form-area").hide();
	});


	$(document).on('click', '.view', function(e) {
		var id = $(this).data('id_pasien');
		$("#head_title").html("<i class='fa fa-list-alt'></i><b> Data Pasien</b>");
		$.ajax({
			type: 'POST',
			url: siteurl + 'pendaftaran/View_Pasien/',
			data: "id=" + id,
			success: function(data) {
				$("#dialog-popup").modal();
				$("#ModalView").html(data);
			}
		})

	});
</script>