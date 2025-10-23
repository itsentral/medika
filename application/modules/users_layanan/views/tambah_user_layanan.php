<?php
    $ENABLE_ADD     = has_permission('Users.Add');
    $ENABLE_MANAGE  = has_permission('Users.Manage');
    $ENABLE_VIEW    = has_permission('Users.View');
    $ENABLE_DELETE  = has_permission('Users.Delete');
?>
<style type="text/css">
thead input {
	width: 100%;
}
</style>
<div id='alert_edit' class="alert alert-success alert-dismissable" style="padding: 15px; display: none;"></div>
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables/dataTables.bootstrap.css')?>">

<form id="data_billing">

 <div class="box box-success" id="bill"> 
				<table id="example1" class="table table-bordered table-striped">
				<tr>
				    <th width="50px">
					<input type="text" class="form-control input-sm" id="id_div"  name="id_div" placeholder="id div" value='<?= $id_div ?>' readonly>
					<input type="hidden" class="form-control input-sm" id="id_user"  name="id_user" placeholder="id user" value='<?= $id_user ?>' readonly>
					
					</th>
					<th width="150px">
					<input type="text" class="form-control input-sm" id="nm_div"  name="nm_div" placeholder="Nama Divisi" value='<?= strtoupper($nm_div) ?>' readonly>
					</th>
					<th>
					<select id="itemlayanan" name="itemlayanan" class="form-control input-sm select2" style="width: 100%;" >
                             <option value="">Pilih Layanan</option>
							 <?php foreach ($layanan as $key => $st) :
							 ?>
                            <option value="<?= $st->id_grouplayanan; ?>">
                            <?= strtoupper($st->id_grouplayanan.'|'.$st->nama); ?>
                            </option>
                            <?php endforeach; ?>
                    </select>
					</th>
					<th width="150px">
					<button type="submit" class="btn btn-success btn-sm" name="save" id="save"><i class="fa fa-save"></i>&nbsp;Simpan</button>
					</th>
				</tr>
				</table>
			</div>
</form>

	
			
<script type="text/javascript">
$(document).ready(function(){
	
$('.select2').select2();

})
   
$(document).on('submit', '#data_billing', function(e){
	
		e.preventDefault()
		var data = $('#data_billing').serialize();
		var id_div = $('#id_div').val();
		var id_user = $('#id_user').val();
		// alert(data);
// exit();
		swal({
		  title: "Anda Yakin?",
		  text: "Data akan di simpan.",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonClass: "btn-info",
		  confirmButtonText: "Ya, Simpan!",
		  cancelButtonText: "Batal",
		  closeOnConfirm: false
		},
		function(){
		  $.ajax({
			  type:'POST',
			  url:siteurl+'users_layanan/save_userslayanan',
			  dataType : "json",
			  data:data,
			  success:function(result){
				  if(result.status == '1'){
					 swal({
						  title: "Sukses",
						  text : "Data berhasil disimpan.",
						  type : "success"
						},
						function (){
							 window.location.href=siteurl+'users_layanan/edit_userlayanan/'+id_user;
							 // DataDetail2();
						})
				  } 
				  else if(result.status == '0'){
					 swal({
						  title: "Gagal",
						  text : "Data Gagal disimpan layanan sudah ada",
						  type : "warning"
						})
				  }
				  else {
					swal({
					  title : "Error",
					  text  : "Data error. Gagal insert data",
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
		});
		
		
	
		
	})
	

</script>