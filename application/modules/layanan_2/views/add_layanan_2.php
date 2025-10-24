 <div class="box box-primary">
    <div class="box-body">
		<form id="data-form" method="post">
					  <div class="col-sm-12">
						   <div class="input_fields_wrap2">
										
										<div class="row">
										<div class="form-group row">
										<div class="col-md-4">
									    <label for="customer">Kategori Layanan</label>
									    </div>
									    <div class="col-md-6">
									    <select id="layanan_1" name="hd1[1][layanan_1]" class="form-control select" required>
											<option value="">-- layanan --</option>
											<?php foreach ($results['layanan_1'] as $layanan_1){ 
											?>
											<option value="<?= $layanan_1->id_kategori?>"><?= ucfirst(strtolower($layanan_1->nama_kategori))?></option>
											<?php } ?>
										  </select>
									    </div>
										</div>
										<div class="form-group row">
										<div class="col-md-4">
									    <label for="customer">Nama Layanan</label>
									    </div>
									    <div class="col-md-6">
											<input type="text" class="form-control" id="" required name="hd1[1][nm_layanan]" placeholder="Nama Layanan">
									    </div>
										</div>
										
										<div class="col-xs-2">
										&nbsp;
										</div>
										</div>
									<div class="col-sm-12">
									<b></b>
									<div class='box-tool pull-right'>
									<?php
										echo form_button(array('type'=>'button','class'=>'btn btn-md btn-success','value'=>'back','content'=>'Add','id'=>'add-payment'));
									?>
									</div>
									<table class='table table-bordered table-striped'>
										<thead>
											<tr class='bg-blue'>
												<td align='center'><b>Name Compotition</b></td>	
												<td align='center'><b>Action</b></td>
											</tr>
											
										</thead>
										<tbody id='list_payment'>
											
										</tbody>
									</table>
									</div>
						  </div>
						</div>
						<div class="col-sm-3">
						</div>
					  </div>
				  </div> 
				  
				  
				 	<hr>
					<center>
					<!--<button type="submit" class="btn btn-primary btn-sm add_field_button2" name="save"><i class="fa fa-plus"></i>Add Main Produk</button>
					--><button type="submit" class="btn btn-success btn-sm" name="save" id="simpan-com"><i class="fa fa-save"></i>Simpan</button>
					</center>
					
				  </form>
				  
				  
				  
	</div>
</div>	
	
				  
				  
				  
<script type="text/javascript">
	//$('#input-kendaraan').hide();
	var base_url			= '<?php echo base_url(); ?>';
	var active_controller	= '<?php echo($this->uri->segment(1)); ?>';
	
	$(document).ready(function(){
		 $('#add-payment').click(function(){
			var jumlah	=$('#list_payment').find('tr').length;
			if(jumlah==0 || jumlah==null){
				var ada		= 0;
				var loop	= 1;
			}else{
				var nilai		= $('#list_payment tr:last').attr('id');
				var jum1		= nilai.split('_');
				var loop		= parseInt(jum1[1])+1; 
			}
			Template	='<tr id="tr_'+loop+'">';
			Template	+='<td align="left">';
					Template	+='<input type="text" class="form-control input-sm" name="data1['+loop+'][name_compotition]" id="data1_'+loop+'_name_compotition" label="FALSE" div="FALSE">';
			Template	+='</td>';
			Template	+='<td align="center"><button type="button" class="btn btn-sm btn-danger" title="Hapus Data" data-role="qtip" onClick="return DelItem('+loop+');"><i class="fa fa-trash-o"></i></button></td>';
			Template	+='</tr>';
			$('#list_payment').append(Template);
			$('input[data-role="tglbayar"]').datepicker({
				format: 'dd-mm-yyyy',
				autoclose: true			
			});
			});
			
			
			
	$('#simpan-com').click(function(e){
			e.preventDefault();
			var deskripsi	= $('#deskripsi').val();
			var image	= $('#image').val();
			var idtype	= $('#layanan_1').val();
			
			var data, xhr;
			swal({
				  title: "Are you sure?",
				  text: "You will not be able to process again this data!",
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
						var formData 	=new FormData($('#data-form')[0]);
						var baseurl=siteurl+'layanan_2/saveNewlayanan';
						$.ajax({
							url			: baseurl,
							type		: "POST",
							data		: formData,
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
									window.location.href = base_url + active_controller;
								}else{
									
									if(data.status == 2){
										swal({
										  title	: "Save Failed!",
										  text	: data.pesan,
										  type	: "warning",
										  timer	: 7000,
										  showCancelButton	: false,
										  showConfirmButton	: false,
										  allowOutsideClick	: false
										});
									}else{
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
		
});

function DelItem(id){
		$('#list_payment #tr_'+id).remove();
		
	}
</script>