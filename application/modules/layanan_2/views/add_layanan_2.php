 <div class="box box-primary">
    <div class="box-body">
		<form id="data-form" method="post">
					  <div class="col-sm-12">
						   <div class="input_fields_wrap2">
										
										<div class="row">
										<div class="form-group row">
										<div class="col-md-4">
									    <label for="customer">Kategori Uji</label>
									    </div>
									    <div class="col-md-6">
									    <select id="layanan_1" name="layanan_1" class="form-control select" required>
											<option value="">-- Pilih Kategori --</option>
											<?php foreach ($results['layanan_1'] as $layanan_1){  
											?>
											<option value="<?= $layanan_1->id_kategori?>"><?= ucfirst(strtolower($layanan_1->nama_kategori))?></option>
											<?php } ?>
										  </select>
									    </div>
										</div>
										<div class="form-group row">
										<div class="col-md-4">
									    <label for="customer">Nama Parameter</label>
									    </div>
									    <div class="col-md-6">
											<input type="text" class="form-control" id="" required name="nm_layanan" placeholder="Nama Layanan">
									    </div>
										</div>
										<div class="form-group row">
										<div class="col-md-4">
									    <label for="customer">Nama Tabung</label>
									    </div>
									    <div class="col-md-6">
											<select id="tabung" name="tabung" class="form-control select" required>
											<option value="">-- Pilih Tabung --</option>
											<?php foreach ($results['tabung'] as $tabung){  
											?>
											<option value="<?= $tabung->id?>"><?= ucfirst(strtolower($tabung->stock_name))?></option>
											<?php } ?>
										  </select>
									    </div>
										</div>
										<div class="form-group row">
										<div class="col-md-4">
									    <label for="customer">Nama Mesin</label>
									    </div>
									    <div class="col-md-6">
											<select id="mesin" name="mesin" class="form-control select" required>
											<option value="">-- Pilih Mesin --</option>
											<?php foreach ($results['mesin'] as $mesin){  
											?>
											<option value="<?= $mesin->id?>"><?= ucfirst(strtolower($mesin->nm_asset))?></option>
											<?php } ?>
										  </select>   </div>
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
												<td align='center'><b>Jenis Kelamin</b></td>
												<td align='center'><b>Umur dari</b></td>
												<td align='center'><b>Umur sampai</b></td>	
												<td align='center'><b>Nilai Bawah Normal</b></td>
												<td align='center'><b>Nilai Atas Normal</b></td>
												<td align='center'><b>Nilai Bawah Kritis</b></td>
												<td align='center'><b>Nilai Atas Kritis</b></td>
												<td align='center'><b>Satuan</b></td>		
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
					Template	+='<select name="data1['+loop+'][jk]" id="data1_'+loop+'_jk" class="form-control select"><option value="L">Laki-Laki</option><option value="P">Perempuan</option>';
			Template	+='</td>';
			Template	+='<td align="left">';
					Template	+='<input type="text" class="form-control input-sm" name="data1['+loop+'][umurbawah]" id="data1_'+loop+'_umurbawah" label="FALSE" div="FALSE">';
			Template	+='</td>';
				Template	+='<td align="left">';
					Template	+='<input type="text" class="form-control input-sm" name="data1['+loop+'][umuratas]" id="data1_'+loop+'_umuratas" label="FALSE" div="FALSE">';
			Template	+='</td>';
				Template	+='<td align="left">';
					Template	+='<input type="text" class="form-control input-sm" name="data1['+loop+'][normalbawah]" id="data1_'+loop+'_normalbawah" label="FALSE" div="FALSE">';
			Template	+='</td>';
				Template	+='<td align="left">';
					Template	+='<input type="text" class="form-control input-sm" name="data1['+loop+'][normalatas]" id="data1_'+loop+'_normalatas" label="FALSE" div="FALSE">';
			Template	+='</td>';
				Template	+='<td align="left">';
					Template	+='<input type="text" class="form-control input-sm" name="data1['+loop+'][kritisbawah]" id="data1_'+loop+'_kritisbawah" label="FALSE" div="FALSE">';
			Template	+='</td>';
				Template	+='<td align="left">';
					Template	+='<input type="text" class="form-control input-sm" name="data1['+loop+'][kritisatas]" id="data1_'+loop+'_kritisatas" label="FALSE" div="FALSE">';
			Template	+='</td>';
			Template	+='</td>';
				Template	+='<td align="left">';
					Template	+='<input type="text" class="form-control input-sm" name="data1['+loop+'][satuan]" id="data1_'+loop+'_satuan label="FALSE" div="FALSE">';
			Template	+='</td>';
			Template	+='<td align="center"><button type="button" class="btn btn-sm btn-danger" title="Hapus Data" data-role="qtip" onClick="return DelItem('+loop+');"><i class="fa fa-trash"></i></button></td>';
			Template	+='</tr>';
			$('#list_payment').append(Template);
			
			});
			
		
});

function DelItem(id){
		$('#list_payment #tr_'+id).remove();
		
	}
</script>