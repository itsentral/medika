<?php
    $ENABLE_ADD     = has_permission('Pendaftaran.Add');
    $ENABLE_MANAGE  = has_permission('Pendaftaran.Manage');
    $ENABLE_VIEW    = has_permission('Pendaftaran.View');
    $ENABLE_DELETE  = has_permission('Pendaftaran.Delete');
?>
<style type="text/css">
thead input {
	width: 100%;
}
</style>
<div id='alert_edit' class="alert alert-success alert-dismissable" style="padding: 15px; display: none;"></div>
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables/dataTables.bootstrap.css')?>">

	<div class="box">
		<div class="box-header">
			<div class="col-md-5">
				<div class="form-group row">
					<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-search"></i></span>
					<input type="text" id="search" name="search" class="form-control input-sm col-md-6" tabindex="-1" placeholder="Tgl Lahir Format DD-MM-YYYY"  value="<?=$search?>" onchange="get_pasien()" >
					</div>
				</div>
			</div>	
			<div class="col-md-1">
			<?php if ($ENABLE_ADD) : ?>
			<a class="btn btn-primary btn-sm" href="<?= base_url('pendaftaran/addPendaftaranlab') ?>" title="Add"> <i class="fa fa-plus">&nbsp;</i>Pasien Baru</a>
		    <?php endif; ?>
			</div>
        </div>
		

		
	</div>
	<!-- /.box-header -->
	<div class="box">
	<div class="box-body">
		<table id="example1" class="table table-bordered table-striped">
		<thead>
		<tr>
			<th width="5">#</th>
			<th width="13%">No RM</th>
			<th>Nama Pasien</th>
			<th>Tgl Lahir</th>
			<th>Alamat Pasien</th>
			<?php if($ENABLE_MANAGE) : ?>
			<th align="center" width="20%">Action</th>
			<?php endif; ?>
		</tr>
		</thead>

		<tbody>		
		</tbody>
		</table>
	</div>
    </div>
	<!-- /.box-body -->
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
        <span class="glyphicon glyphicon-remove"></span>  Close</button>
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
        <span class="glyphicon glyphicon-remove"></span>  Close</button>
        </div>
    </div>
  </div>
</div>

<!-- DataTables -->
<script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/datatables/dataTables.bootstrap.min.js')?>"></script>

<!-- page script -->
<script type="text/javascript">
	$(document).ready(function() {
	 $("#search").focus();	 
	    var no_so = '';
		var customer = '';
		DataTables(no_so, customer);
	});

    $(document).on('click', '.edit', function(e){
		var id = $(this).data('id_pasien');
		 window.location.href = siteurl+"pendaftaran/Daftar_PasienLab/"+id;
	});
	
	$(document).on('click', '.update', function(e){
		var id = $(this).data('id_pasien');
		 window.location.href = siteurl+"pendaftaran/Update_PasienLama/"+id;
	});

    $(document).ready(function() {
	 $("#search").focus();
	});
	
	function get_pasien(){
        var search=$("#search").val();
        window.location.href = siteurl+"pendaftaran/search_pasien/"+search;
       		
    }

  	$(function() {
    	 var table = $('#example1').DataTable( {
	        orderCellsTop: true,
	        fixedHeader: true,
			scrollX:true
	    } );
    	$("#form-area").hide();
  	});
	
	
	$(document).on('click', '.view', function(e){
		var id = $(this).data('id_pasien');		
		$("#head_title").html("<i class='fa fa-list-alt'></i><b> Data Pasien</b>");
		$.ajax({
			type:'POST',
			url:siteurl+'pendaftaran/View_Pasien/',
			data	: "id="+id,
			success:function(data){
				$("#dialog-popup").modal();
				$("#ModalView").html(data);
			}
		})
				
	});
	
	
	function DataTables(no_so=null, customer=null){
		var dataTable = $('#example1').DataTable({
			"serverSide": true,
			"stateSave" : true,
			"bAutoWidth": true,
			"destroy": true,
			"processing": true,
			"responsive": true,
			"fixedHeader": {
				"header": true,
				"footer": true
			},
			"oLanguage": {
				"sSearch": "<b>Search : </b>",
				"sLengthMenu": "_MENU_ &nbsp;&nbsp;<b>Records Per Page</b>&nbsp;&nbsp;",
				"sInfo": "Showing _START_ to _END_ of _TOTAL_ entries",
				"sInfoFiltered": "(filtered from _MAX_ total entries)",
				"sZeroRecords": "No matching records found",
				"sEmptyTable": "No data available in table",
				"sLoadingRecords": "Please wait - loading...",
				"oPaginate": {
					"sPrevious": "Prev",
					"sNext": "Next"
				}
			},
			"aaSorting": [[ 1, "desc" ]],
			"columnDefs": [ {
				"targets": 'no-sort',
				"orderable": false,
			}],
			"sPaginationType": "simple_numbers",
			"iDisplayLength": 10,
			"aLengthMenu": [[1, 10, 20, 50, 100, 150], [1, 10, 20, 50, 100, 150]],
			"ajax":{
				url : base_url + active_controller+'/server_side_inv',
				type: "post",
				data: function(d){
					d.no_so = no_so,
					d.customer = customer
				},
				cache: false,
				error: function(){
					$(".my-grid-error").html("");
					$("#my-grid").append('<tbody class="my-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
					$("#my-grid_processing").css("display","none");
				}
			}
		});
	}
	
</script>
