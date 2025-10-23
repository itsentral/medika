<?php 
    $ENABLE_ADD     = has_permission('Users.Add');
    $ENABLE_MANAGE  = has_permission('Users.Manage');
    $ENABLE_DELETE  = has_permission('Users.Delete');
	//echo "ENABLE_ADD=".$ENABLE_ADD."<BR>";
	//echo "ENABLE_MANAGE=".$ENABLE_MANAGE."<BR>";
	//echo $this->uri->uri_string()."ENABLE_DELETE=".$ENABLE_DELETE."<BR>";
?>
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables/dataTables.bootstrap.css')?>">
<div class="box">
	<div class="box-header">
		<?php if ($ENABLE_ADD) : ?>
		   		
			<button type="button" class="btn btn-success" id="add">
			<span class="glyphicon glyphicon-add"></span> Tambah List Layanan</button>
			</div>
			<div class="box box-success" id="data">
			</div>     		<?php endif; ?>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table id="example1" class="table table-bordered table-striped">
		<thead>
		<tr>
			<th width="50">#</th>
			<th><?= lang('divisi') ?></th>
			<th><?= lang('layanan') ?></th>
			<?php if($ENABLE_MANAGE) : ?>
			<th width="80"></th>
			<?php endif; ?>			
		</tr>
		</thead>
        
		<tbody>
		<?php 
		    foreach ($results as $user) : 
			$id_div = $user->id_div;
  			$id_user= $user->id_user;
			
			// print_r($id_div);
			// exit;
            			
			$divisi        = $this->db->query("SELECT
			rs_divisi.id_div,
			rs_divisi.nama_div
			FROM
			rs_divisi 
			WHERE 
			id_div = '" . $id_div . "'")->row(); ?>
			
			<input type="hidden" class="form-control input-sm" id="id_user"  name="id_user" value='<?= $user->id_user ?>' readonly>
		    <input type="hidden" class="form-control input-sm" id="id_div"  name="id_div"   value='<?= $user->id_div ?>' readonly>
			<input type="hidden" class="form-control input-sm" id="nm_div"  name="nm_div"   value='<?= (!empty($divisi->nama_div))?$divisi->nama_div:'-' ?>' readonly>
			
		<?php
		
			$layanan  = $this->db->query("SELECT
			a.id_grouplayanan, b.nama_grouplayanan
			FROM
			rs_grouplayanan_user a
			INNER JOIN rs_grouplayanan b ON a.id_grouplayanan = b.id_grouplayanan			
			WHERE 
			a.id_div = '" . $id_div . "'")->result();
			 // print_r($id_div);
			 // exit;
			
			foreach ($layanan as $record) : 
			
		?>
		 
			
		<tr>                        
			<td><?= $numb; ?>
			
			</td>
			<td><?= strtoupper((!empty($divisi->nama_div))?$divisi->nama_div:'-'); ?></td>
			<td><?= $record->nama_grouplayanan ?></td>
			<td>
			<?php if($user->id_user != 1) : ?>
			<a class="delete text-aqua" href="javascript:void(0)" title="Hapus Layanan" data-layanan="<?= $record->id_grouplayanan ?>" data-div="<?= $id_div ?> " data-user="<?=$user->id_user ?>"><span class="fa fa-trash"></span></a>
			<?php endif; ?>
			</td>
			</tr>
			<?php $numb++; endforeach; endforeach; ?>        
		</tbody>
		
		<tfoot>
		<tr>
			<th width="50">#</th>
			<th><?= lang('divisi') ?></th>
			<th><?= lang('layanan') ?></th>
			<?php if($ENABLE_MANAGE) : ?>
			<th width="80"></th>
			<?php endif; ?>		        
		</tr>
		</tfoot>
		</table>
	</div>
	<!-- /.box-body -->
	 <div class="modal modal-default fade dialog-popup" id="dialog-popup" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="fa fa-users"></span>&nbsp;Transaksi Rawat Jalan</h4>
      </div>
      <div class="modal-body" id="ModalView">
		...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger"  id="close" data-dismiss="modal">
        <span class="glyphicon glyphicon-remove"></span>  Close</button>
        </div>
    </div>
  </div>
</div>
</div>

<!-- DataTables -->
<script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/datatables/dataTables.bootstrap.min.js')?>"></script>

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();    
  });
  
  $("#add").click(function(){
		
	    $("#data").hide();
		
		 var	user	= $("#id_user").val();
         var	div		= $("#id_div").val();
		 var	namadiv	= $("#nm_div").val();
         
		// alert(id);
		$("#head_title").html("<i class='fa fa-list-alt'></i><b> Tambah List Layanan</b>");
		$.ajax({
			type:'POST',
			url:siteurl+'users_layanan/Tambah_Layanan/',
			data	: "id_user="+user+"&id_div="+div+"&nm_div="+namadiv,
			success:function(data){
				$("#dialog-popup").modal();
				$("#ModalView").html(data);
			}
		})
		
		
		$('.select2').select2();
		
	});
	
	$(document).on('click', '.delete', function(e) {
      var layanan = $(this).data('layanan');
	  var div = $(this).data('div');
	  var	user	= $(this).data('user'); 
	  
      swal({
		  title: "Anda Yakin?",
		  text: "Data akan di hapus.",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonClass: "btn-info",
		  confirmButtonText: "Ya, Hapus!",
		  cancelButtonText: "Batal",
		  closeOnConfirm: false
		},
	  function(){
      $.ajax({
        type: "post",
        url: siteurl + active_controller + 'delete_userslayanan',
         data: "layanan="+layanan+"&div="+div,
		 dataType : "json",
		
        success:function(result){
			
				  if(result.status =='1'){
					 swal({
						  title: "Sukses",
						  text : "Data berhasil dihapus.",
						  type : "success"
						},
						function (){
							 window.location.href=siteurl+'users_layanan/edit_userlayanan/'+user;
							 // DataDetail2();
						})
				  } 
				  else {
					swal({
					  title : "Error",
					  text  : "Data error. Gagal delete data",
					  type  : "error"
					})
					
				  }
			  },
			  error : function(){
				swal({
					  title : "Error",
					  text  : "Data error. Gagal request Ajax",
					  type  : "error"
					})
			  }
        })
	  })

    });
</script>


