<div class="box box-primary">
	<div class="box-body">
		<form id="data-form" method="post" autocomplete="off"><br>
			<input type="hidden" name='so_number' id='so_number' value='<?= $header[0]['so_number']; ?>'>
			<div class="form-group row">
				<div class="col-md-12">
					<table class='table' width='70%'>
						<tr>
							<td width='20%'>No Request / SO</td>
							<td width='1%'>:</td>
							<td width='29%'><?= $header[0]['so_number']; ?></td>
							<td width='20%'></td>
							<td width='1%'></td>
							<td width='29%'></td>
						</tr>
						<tr>
							<td>No. PR</td>
							<td>:</td>
							<td><?= $header[0]['no_pr']; ?></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<?php
						$tgl_dibutuhkan = (!empty($header[0]['tgl_dibutuhkan'])) ? date('d F Y', strtotime($header[0]['tgl_dibutuhkan'])) : '';
						?>
						<tr>
							<td>Tgl Dibutuhkan</td>
							<td>:</td>
							<td><?= $tgl_dibutuhkan; ?></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>Tingkat PR</td>
							<td>:</td>
							<td><?= ($header[0]['tingkat_pr'] == 2) ? 'Urgent' : 'Normal' ?></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</div>
				<div class="col-md-6">
					<label for="">Nilai Budget</label>
					<input type="text" name="" id="" class="form-control form-control-sm text-right" value="<?= number_format($header[0]['nilai_budget']) ?>" readonly>
				</div>
				<div class="col-md-6">
					<label for="">Nilai Pengajuan</label>
					<input type="text" name="" id="" class="form-control form-control-sm text-right" value="<?= number_format($header[0]['nilai_pengajuan']) ?>" readonly>
				</div>
				<br><br>
				<div class="col-md-12">
					<br><br>
					<table class='table table-striped table-bordered table-hover table-condensed' width='100%'>
						<thead class='thead'>
							<tr class='bg-blue'>
								<th class='text-center th'>#</th>
								<th class='text-center th'>Material Name</th>
								<th class='text-center th'>Min Stock</th>
								<th class='text-center th'>Max Stock</th>
								<th class='text-center th'>Min Order</th>
								<th class='text-center th'>Qty PR (Pack)</th>
								<th class="text-center th">Unit Pack</th>
								<th class='text-center th'>Qty</th>
								<th class="text-center th">Unit Measurement</th>
								<th class="text-center th">Price Ref</th>
								<th class="text-center th">Total Price</th>
								<th class='text-center th'>#</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($detail as $key => $value) {
								$key++;
								$nm_material 	= (!empty($GET_LEVEL4[$value['id_material']]['nama'])) ? $GET_LEVEL4[$value['id_material']]['nama'] : '';
								$stock_free 	= $value['stock_free'];
								$use_stock 		= $value['use_stock'];
								$sisa_free 		= $stock_free - $use_stock;
								$propose 		= $value['propose_purchase'];

								$this->db->select('a.*, b.code as satuan, c.code as satuan_pack');
								$this->db->from('accessories a');
								$this->db->join('ms_satuan b', 'b.id = a.id_unit', 'left');
								$this->db->join('ms_satuan c', 'c.id = a.id_unit_gudang', 'left');
								$this->db->where('a.id', $value['id_material']);
								$get_stock = $this->db->get()->row();

								$konversi = ($get_stock->konversi > 0) ? $get_stock->konversi : 1;


								echo "<tr>";
								echo "<td class='text-center'>" . $key . "</td>";
								echo "	<td class='text-left'>" . $value['stock_name'] . "
										<input type='hidden' name='detail[" . $key . "][id]' value='" . $value['id'] . "'>
										</td>";
								echo "<td class='text-right min_stok'>" . number_format($value['min_stok'], 2) . "</td>";
								echo "<td class='text-right max_stok'>" . number_format($value['max_stok'], 2) . "</td>";
								echo "<td class='text-right min_order'>" . number_format($get_stock->min_order, 2) . "</td>";
								echo "<td class='text-right'>" . number_format($propose, 2) . "</td>";
								echo "<td class='text-center'>" . strtoupper($get_stock->satuan_pack) . "</td>";
								echo "<td class='text-center'>" . number_format($propose * $konversi, 2) . "</td>";
								echo "<td class='text-center'>" . strtoupper($get_stock->satuan) . "</td>";
								echo '<td class="text-right">' . number_format($value['price_ref'], 2) . '</td>';
								echo '<td class="text-right">' . number_format(($value['price_ref'] * ($propose * $konversi)), 2) . '</td>';
								if ($value['status_app'] == 'N') {
									echo "<td class='text-center'><span class='badge bg-blue text-bold'>Waiting Process</span></td>";
								}
								if ($value['status_app'] == 'Y') {
									echo "<td class='text-center'><span class='badge bg-green text-bold'>Approved</span></td>";
								}
								if ($value['status_app'] == 'D') {
									echo "<td class='text-center'><span class='badge bg-red text-bold'>Rejected</span></td>";
								}
								echo "</tr>";
							}
							?>
						</tbody>
					</table>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-md-12">
					<!-- <button type="button" class="btn btn-primary" name="save" id="save">Process</button> -->
					<button type="button" class="btn btn-danger" style='margin-left:5px;' name="back" id="back">Back</button>
				</div>
			</div>
		</form>
	</div>
</div>

<div class="modal modal-default fade" id="dialog-popup" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" style='width:70%;'>
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel"><span class="fa fa-users"></span>&nbsp;Detail Data</h4>
			</div>
			<div class="modal-body" id="ModalView">
				...
			</div>
		</div>
	</div>


	<script src="<?= base_url('assets/js/jquery.maskMoney.js') ?>"></script>
	<script src="<?= base_url('assets/js/autoNumeric.js') ?>"></script>

	<script type="text/javascript">
		var base_url = '<?php echo base_url(); ?>';
		var active_controller = '<?php echo ($this->uri->segment(1)); ?>';

		$(document).ready(function() {
			$('.datepicker').datepicker({
				dateFormat: 'dd-M-yy'
			});
			$('.autoNumeric5').autoNumeric('init', {
				mDec: '5',
				aPad: false
			})
			$('.chosen-select').select2()

			//back
			$(document).on('click', '#back', function() {
				window.location.href = base_url + active_controller
			});
		});
	</script>