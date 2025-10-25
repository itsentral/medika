<?php
$ENABLE_ADD     = has_permission('Outgoing_Stok_ATK.Add');
$ENABLE_MANAGE  = has_permission('Outgoing_Stok_ATK.Manage');
$ENABLE_VIEW    = has_permission('Outgoing_Stok_ATK.View');
$ENABLE_DELETE  = has_permission('Outgoing_Stok_ATK.Delete');
?>
<style type="text/css">
	thead input {
		width: 100%;
	}
</style>
<div id='alert_edit' class="alert alert-success alert-dismissable" style="padding: 15px; display: none;"></div>
<link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.dataTables.min.css">

<form action="#" method="POST" id="form_proses" enctype="multipart/form-data">
	<div class="box">
		<div class="box-header">
			<?php if ($ENABLE_ADD) { ?>
				<a class="btn btn-primary btn-sm" style='float:right;' href="<?= base_url('outgoing_stok_atk/request') ?>" title="Request">Add Outgoing</a>
			<?php } ?>
			<!-- <br> -->
			<div class="form-group row" hidden>
				<div class="col-md-9"></div>
				<div class="col-md-3">
					<select name='sales_order' id='sales_order' class='form-control input-sm chosen-select'>
						<option value='0'>All Sales Order</option>
					</select>
				</div>
			</div>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<!-- <ul class="nav nav-tabs" role="tablist">
			<li class="nav-item active">
				<a class="nav-link active" id="nonmixing-tab" data-toggle="tab" href="#nonmixing" role="tab" aria-controls="nonmixing" aria-selected="true">Non-Mixing</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="request-tab" data-toggle="tab" href="#request" role="tab" aria-controls="request" aria-selected="false">Request Material</a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="nonmixing" role="tabpanel" aria-labelledby="nonmixing-tab"><br>
				<table id="example1" class="table table-bordered table-striped" width='100%'>
					<thead>
						<tr>
							<th class='text-center'>#</th>
							<th class='text-center'>No Trans</th>
							<th class='text-center'>No SO</th>
							<th class='text-center'>No SPK</th>
							<th class='text-center'>Gudang Dari</th>
							<th class='text-center'>Costcenter</th>
							<th class='text-center'>Qty</th>
							<th class='text-center'>By</th>
							<th class='text-center'>Dated</th>
							<th class='text-center no-sort'>Status</th>
							<th class='text-center no-sort'>Option</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>
			<div class="tab-pane" id="request" role="tabpanel" aria-labelledby="request-tab"><br> -->
			<table id="example2" class="table table-bordered table-striped" width='100%'>
				<thead class="bg-blue">
					<tr>
						<th class='text-center'>#</th>
						<th class='text-center'>No Trans</th>
						<th class='text-center'>Tanggal</th>
						<th class='text-left'>Department</th>
						<th class='text-center'>Qty Unit</th>
						<th class='text-left'>PIC</th>
						<th class='text-center'>By</th>
						<th class='text-center'>Dated</th>
						<th class='text-center'>Option</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
			<!-- </div> -->
			<!-- </div> -->
		</div>
		<!-- /.box-body -->
	</div>


	<!-- modal -->
	<div class="modal fade" id="ModalView2" style='overflow-y: auto;'>
		<div class="modal-dialog" style='width:90%; '>
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="head_title2"></h4>
				</div>
				<div class="modal-body" id="view2">
				</div>
				<div class="modal-footer">
					<!--<button type="button" class="btn btn-primary">Save</button>-->
					<button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- modal -->
</form>

<!-- DataTables -->
<script src="https://cdn.datatables.net/2.3.4/js/dataTables.min.js"></script>
<script src="<?= base_url('assets/js/autoNumeric.js') ?>"></script>

<!-- page script -->
<script type="text/javascript">
	$(document).ready(function() {
		// var sales_order = $("#sales_order").val();
		// DataTables(sales_order);
		Datatables22();

		// $(document).on('change', '#sales_order', function() {
		// 	var sales_order = $("#sales_order").val();
		// 	DataTables(sales_order);
		// });
	});

	$(document).on('keyup', '.changeQty', function(e) {
		e.preventDefault();

		let id = $(this).data('id')
		let qty_sisa = getNum($('#sisa_' + id).text().split(",").join(""))
		let qty = getNum($(this).val().split(",").join(""))

		if (qty > qty_sisa) {
			$(this).val(qty_sisa)
		}

	});

	$(document).on('click', '.request', function(e) {
		e.preventDefault();

		let id = $(this).data('id')

		swal({
				title: "Are you sure?",
				text: "Request to Subgudang!",
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
					var baseurl = base_url + active_controller + '/request_to_subgudang';
					$.ajax({
						url: baseurl,
						type: "POST",
						data: {
							id: id
						},
						cache: false,
						dataType: 'json',
						success: function(data) {
							window.open(base_url + active_controller + '/print_spk/' + data.kode_det, '_blank');
							window.location.href = base_url + active_controller
						},
						error: function() {
							swal({
								title: "Error Message !",
								text: 'An Error Occured During Process. Please try again..',
								type: "warning",
								timer: 3000
							});
						}
					});
				} else {
					swal("Cancelled", "Data can be process again :)", "error");
					return false;
				}
			});
	});

	$(document).on('click', '.detail', function(e) {
		e.preventDefault();

		var kode_trans = $(this).data('kode_trans');
		var tanda = $(this).data('tanda');
		var title = (tanda == 'detail') ? 'DETAIL REQUEST' : 'EDIT REQUEST';

		$("#head_title2").html("<b>" + title + "</b>");
		$.ajax({
			type: 'POST',
			url: base_url + active_controller + '/modal_request_edit/' + kode_trans + '/' + tanda,
			success: function(data) {
				$("#ModalView2").modal();
				$("#view2").html(data);
			},
			error: function() {
				swal({
					title: "Error Message !",
					text: 'Connection Timed Out ...',
					type: "warning",
					timer: 5000
				});
			}
		});
	});

	$(document).on('click', '#edit_material', function() {

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
					var formData = new FormData($('#form_proses')[0]);
					$.ajax({
						url: base_url + active_controller + '/modal_request_edit',
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
									type: "success",
									timer: 7000
								});

								window.location.href = base_url + active_controller
							} else {
								swal({
									title: "Save Failed!",
									text: data.pesan,
									type: "warning",
									timer: 7000
								});
							}
						},
						error: function() {
							swal({
								title: "Error Message !",
								text: 'An Error Occured During Process. Please try again..',
								type: "warning",
								timer: 7000
							});
						}
					});
				} else {
					swal("Cancelled", "Data can be process again :)", "error");
					return false;
				}
			});
	});

	$(document).on('click', '.kurang_stock', function() {
		var kode_trans = $(this).data('kode_trans');

		$.ajax({
			type: 'POST',
			url: siteurl + active_controller + 'kurang_stock',
			data: {
				'kode_trans': kode_trans
			},
			cache: false,
			success: function(result) {
				if (result == 1) {
					swal({
						title: 'Success !',
						text: 'Kurang Stock Berhasil !',
						type: 'success'
					});
				} else {
					swal({
						title: 'Error !',
						text: 'Kurang stock error !',
						type: 'error'
					});
				}
			},
			error: function(result) {
				swal({
					title: 'Error !',
					text: 'Please try again later !',
					type: 'error'
				});
			}
		});
	});

	function DataTables(sales_order = null) {
		var dataTable = $('#example1').DataTable({
			"processing": true,
			"serverSide": true,
			"stateSave": true,
			"autoWidth": false,
			"destroy": true,
			"searching": true,
			"responsive": true,
			"aaSorting": [
				[1, "desc"]
			],
			"columnDefs": [{
				"targets": 'no-sort',
				"orderable": false,
			}],
			"sPaginationType": "simple_numbers",
			"iDisplayLength": 10,
			"aLengthMenu": [
				[10, 20, 50, 100, 150],
				[10, 20, 50, 100, 150]
			],
			"ajax": {
				url: siteurl + active_controller + 'data_side_spk_material',
				type: "post",
				data: function(d) {
					d.sales_order = sales_order
				},
				cache: false,
				error: function() {
					$(".my-grid-error").html("");
					$("#my-grid").append('<tbody class="my-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
					$("#my-grid_processing").css("display", "none");
				}
			}
		});
	}

	function Datatables22() {
		var datatable = $('#example2').DataTable({
			serverSide: true,
			processing: false,
			paging: true,
			stateSave: true,
			destroy: true,
			ajax: {
				type: 'post',
				url: siteurl + active_controller + 'get_data_outgoing_atk',
				cache: false,
				dataType: 'json',
				data: function(d) {

				},
				error: function(xhr, error, thrown) {
					console.error('AJAX Error Details:');
					console.error('Status:', error);
					console.error('Thrown:', thrown);
					console.error('Full Response:', xhr.responseText);
					console.error('Response Headers:', xhr.getAllResponseHeaders());
				}
			},
			columns: [{
					data: 'no'
				},
				{
					data: 'no_trans'
				},
				{
					data: 'tanggal'
				},
				{
					data: 'department'
				},
				{
					data: 'qty_unit'
				},
				{
					data: 'pic'
				},
				{
					data: 'by'
				},
				{
					data: 'dated'
				},
				{
					data: 'action'
				}
			]
		});
	}

	// function DataTables2() {
	// 	var dataTable = $('#example2').DataTable({
	// 		"processing": true,
	// 		"serverSide": true,
	// 		"stateSave": true,
	// 		"autoWidth": false,
	// 		"destroy": true,
	// 		"searching": true,
	// 		"responsive": true,
	// 		"aaSorting": [
	// 			[1, "desc"]
	// 		],
	// 		"columnDefs": [{
	// 			"targets": 'no-sort',
	// 			"orderable": false,
	// 		}],
	// 		"sPaginationType": "simple_numbers",
	// 		"iDisplayLength": 10,
	// 		"aLengthMenu": [
	// 			[10, 20, 50, 100, 150],
	// 			[10, 20, 50, 100, 150]
	// 		],
	// 		"ajax": {
	// 			url: siteurl + active_controller + 'data_side_request_material',
	// 			type: "post",
	// 			// data: function(d){
	// 			// 	d.sales_order = sales_order
	// 			// },
	// 			cache: false,
	// 			error: function() {
	// 				$(".my-grid-error").html("");
	// 				$("#my-grid").append('<tbody class="my-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
	// 				$("#my-grid_processing").css("display", "none");
	// 			}
	// 		}
	// 	});
	// }
</script>