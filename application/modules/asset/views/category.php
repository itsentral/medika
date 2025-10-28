<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables/dataTables.bootstrap5.min.css'); ?>">
<form action="#" method="POST" id="form_ct" enctype="multipart/form-data" autocomplete="off">
<div class="card border-primary mb-3">
	<div class="card-header d-flex justify-content-end">
		<button type="button" class="btn btn-primary btn-md" id="add"><i class="fa fa-plus"></i> Add</button>
	</div>
	<div class="card-body">
		<table class="table table-bordered table-striped" id="example1" width="100%">
			<thead>
				<tr class="table-primary">
					<th class="text-center">#</th>
					<th class="text-center">Category Asset</th>
					<th class="text-center">Status</th>
					<th class="text-center">Last By</th>
					<th class="text-center">Last Date</th>
					<th class="text-center">Option</th>
				</tr>
			</thead>
			<tbody></tbody>
		</table>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalView" tabindex="-1" aria-labelledby="head_title" aria-hidden="true">
	<div class="modal-dialog modal-lg" style="max-width: 60%;">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="head_title"></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" id="view">
			</div>
		</div>
	</div>
</div>
<!-- End Modal -->
</form>
<script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables/dataTables.bootstrap.min.js');?>"></script>
<script src="<?= base_url('assets/js/jquery.maskMoney.js')?>"></script>
<script src="<?= base_url('assets/js/autoNumeric.js')?>"></script>

<script>
	$(document).ready(function(){
		DataTables();
	});

	$(document).on('click', '#add', function(e){
		e.preventDefault();
		$("#head_title").html("<b>ADD DEPARTMENT</b>");
		$("#view").load(base_url +'index.php/'+ active_controller+'/add_category', function() {
			var modal = new bootstrap.Modal(document.getElementById('ModalView'));
			modal.show();
		});
	});

	$(document).on('click', '.edit', function(e){
		e.preventDefault();
		var id = $(this).data('code');
		$("#head_title").html("<b>EDIT DEPARTMENT</b>");
		$("#view").load(base_url +'index.php/'+ active_controller+'/add_category/'+id, function() {
			var modal = new bootstrap.Modal(document.getElementById('ModalView'));
			modal.show();
		});
	});

	$(document).on('click', '#save', function(){
		var nm_category	= $("#nm_category").val();

		if(nm_category==''){
			swal({title:"Error Message!", text:'Empty Category Name, please input first ...', type:"warning"});
			$('#save').prop('disabled',false);
			return false;
		}

		swal({
			title: "Are you sure?",
			text: "Delete this data ?",
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
				var formData = new FormData($('#form_ct')[0]);
				var baseurl = base_url + active_controller + '/add_category';

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
						buttons: false,
						closeOnClickOutside: false
					});
					setTimeout(() => {
						window.location.href = base_url + 'asset/type';
					}, 2000);
					} else if (data.status == 0) {
					swal({
						title: "Save Failed!",
						text: data.pesan,
						icon: "warning",
						timer: 7000,
						buttons: false,
						closeOnClickOutside: false
					});
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
				}
				});

			} else {
				swal("Cancelled", "Data can be processed again :)", "error");
				return false;
			}
			});


	});

    $(document).on('click', '.delete', function(){
		var code	= $(this).data('code');
		// alert(bF);
		// return false;
		swal({
		  title: "Are you sure?",
		  text: "Delete this data ?",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonClass: "btn-danger",
		  confirmButtonText: "Yes, Process it!",
		  cancelButtonText: "No, cancel process!",
		  closeOnConfirm: true,
		  closeOnCancel: false
		},
		function(isConfirm) {
			if (isConfirm) {
				// loading_spinner();
				$.ajax({
					url			: base_url+'index.php/'+active_controller+'/hapus_category/'+code,
					type		: "POST",
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
								  timer	: 7000,
								  showCancelButton	: false,
								  showConfirmButton	: false,
								  allowOutsideClick	: false
								});
							window.location.href = base_url  +'asset/type';
						}
						else if(data.status == 0){
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
					}
				});
			} else {
			swal("Cancelled", "Data can be process again :)", "error");
			return false;
			}
		});
	});

	function DataTables() {
		var dataTable = $('#example1').DataTable({
			processing: true,
			serverSide: true,
			stateSave: true,
			autoWidth: false,
			destroy: true,
			responsive: true,
			language: {
				search: "", // leave empty to control label manually
				searchPlaceholder: "Live Search...", // shows placeholder in the input
				lengthMenu: "_MENU_ &nbsp;&nbsp;<b>Records Per Page</b>&nbsp;&nbsp;",
				info: "Showing _START_ to _END_ of _TOTAL_ entries",
				infoFiltered: "(filtered from _MAX_ total entries)",
				zeroRecords: "No matching records found",
				emptyTable: "No data available in table",
				loadingRecords: "Please wait - loading...",
				paginate: {
					previous: "&laquo; Prev",
					next: "Next &raquo;"
				}
			},
			order: [[1, "asc"]],
			columnDefs: [
				{ targets: 'no-sort', orderable: false }
			],
			pagingType: "simple_numbers",
			pageLength: 10,
			lengthMenu: [[10, 20, 50, 100, 150], [10, 20, 50, 100, 150]],
			ajax: {
				url: base_url + 'index.php/' + active_controller + '/data_side_category',
				type: "POST",
				data: function (d) {
					// Example filter
					// d.kode_partner = $('#kode_partner').val();
				},
				cache: false,
				error: function () {
					$("#example1").html(
						'<tbody class="text-center"><tr><td colspan="100%">No data found in the server</td></tr></tbody>'
					);
				}
			},
			initComplete: function () {
				// Add bold label before the input
				$('#example1_filter label').prepend('<b>Live Search : </b> ');
			}
		});
	}






</script>