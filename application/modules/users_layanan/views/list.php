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
		
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table id="example1" class="table table-bordered table-striped">
		<thead>
		<tr>
			<th width="50">#</th>
			<th><?= lang('divisi') ?></th>
		
			<?php if($ENABLE_MANAGE) : ?>
			<th width="80"></th>
			<?php endif; ?>			
		</tr>
		</thead>
        
		<tbody>
		<?php foreach ($results as $record) : 
			$id_div = $record->id_div;
			
			$divisi        = $this->db->query("SELECT
			rs_divisi.id_div,
			rs_divisi.nama_div
			FROM
			rs_divisi 
			WHERE 
			id_div = '" . $id_div . "'")->row();
			
			
			
		?>
		<tr>                        
			<td><?= $numb; ?></td>
			<td><?= strtoupper((!empty($divisi->nama_div))?$divisi->nama_div:'-'); ?></td>
			<?php if($ENABLE_MANAGE) : ?>
			<td style="padding-right:20px">
			<?php if($record->id_user != 1) : ?>
			<a class="text-black" href="<?= site_url('users_layanan/edit_userlayanan/' . $record->id_user); ?>" data-toggle="tooltip" data-placement="left" title="Edit Hak Akses"><i class="fa fa-shield"></i></a>
			<?php endif; ?>
			</td>
			<?php endif; ?>
			</tr>
			<?php $numb++; endforeach; ?>        
		</tbody>
		
		<tfoot>
		<tr>
			<th width="50">#</th>
			<th><?= lang('divisi') ?></th>
			
			<?php if($ENABLE_MANAGE) : ?>
			<th width="80"></th>
			<?php endif; ?>		        
		</tr>
		</tfoot>
		</table>
	</div>
	<!-- /.box-body -->
</div>

<!-- DataTables -->
<script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/datatables/dataTables.bootstrap.min.js')?>"></script>

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();    
  });
</script>


