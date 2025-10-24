<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" integrity="sha512-yVvxUQV0QESBt1SyZbNJMAwyKvFTLMyXSyBHDO4BG5t7k/Lw34tyqlSDlKIrIENIzCl+RVUNjmCPG+V/GMesRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="box box-primary">
	<div class="box-body">
		<form id="data-form" method="post">
			<div class="col-sm-12">
				<div class="input_fields_wrap2">

					<div class="row">
						<div class="form-group row">
							<div class="col-md-4">
								<label for="customer">Type Inventory</label>
							</div>
							<div class="col-md-6">
								<select id="inventory_1" name="hd1[1][inventory_1]" class="form-control select" onchange="get_inv2()" required>
									<option value="">-- Pilih Type --</option>
									<?php foreach ($results['inventory_1'] as $inventory_1) {
									?>
										<option value="<?= $inventory_1->id_type ?>"><?= ucfirst(strtolower($inventory_1->nama)) ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-4">
								<label for="customer">Fereous / Non Fereous</label>
							</div>
							<div class="col-md-6">
								<select id="inventory_2" name="hd1[1][inventory_2]" class="form-control select" onchange="get_inv3()" required>
									<option value="">-- Pilih --</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-4">
								<label for="customer">Type Alloy</label>
							</div>
							<div class="col-md-6">
								<select id="inventory_3" name="hd1[1][inventory_3]" class="form-control select" required>
									<option value="">-- Pilih --</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-4">
								<label for="customer">Spesifikasi</label>
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control" id="nm_inventory" required name="hd1[1][nm_inventory]" placeholder="Spesifikasi">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-4">
								<label for="customer">Maker</label>
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control maker" id="hd1[1][maker]" name="hd1[1][maker]" placeholder="Maker">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-4">
								<label for="customer">Density</label>
							</div>
							<div class="col-md-6">
								<?php
								$class_hitung = '';
								if ($results['id_bentuk'][0]->id_bentuk == 'B2000002') {
									$class_hitung = 'hitung_all';
								}
								?>
								<input type="text" class="form-control <?= $class_hitung ?>" id="hd1[1][density]" name="hd1[1][density]" placeholder="Density">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-4">
								<label for="customer">Hardness</label>
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control hardness" id="hd1[1][hardness]" name="hd1[1][hardness]" placeholder="Hardness">
								<input type="hidden" class="form-control" id="thickness" name="thickness" placeholder="Thickness">
								<input type="hidden" class="form-control" id="alloy" name="alloy" placeholder="Alloy">
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-4">
								<label for="customer">Nama Material</label>
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control nama" id="hd1[1][nama]" name="hd1[1][nama]" placeholder="Nama Material" readonly>
							</div>
						</div>


						<div class="col-sm-12">
							<div class="col-md-4">
								<label for="customer">Komposisi Material</label>
							</div>
							<b></b>
							<table class='table table-bordered table-striped'>
								<tbody id='list_compotition'>

								</tbody>
							</table>
						</div>
						<div class="form-group row">
							<div class="col-md-4">
								<label for="customer">Bentuk Material</label>
							</div>
							<?php foreach ($results['id_bentuk'] as $id_bentuk) {
							} ?>
							<div class="col-md-6" hidden>
								<input type="text" class="form-control" value="<?= $id_bentuk->id_bentuk ?>" id="hd1[1][id_bentuk]" name="hd1[1][id_bentuk]" placeholder="Id Bentuk">
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control" value="<?= $id_bentuk->nm_bentuk ?>" id="hd1[1][nm_bentuk]" readonly name="hd1[1][nm_bentuk]" placeholder="Id Bentuk">
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-4">
								<label for="customer">Surface</label>
							</div>
							<div class="col-md-6">
								<select id="id_surface" name="hd1[1][id_surface]" class="form-control select idsurface" onchange="get_surface()" required>
									<option value="">-- Pilih --</option>
									<?php foreach ($results['id_surface'] as $id_surface) {
									?>
										<option value="<?= $id_surface->id_surface ?>"><?= ucfirst(strtolower($id_surface->nm_surface)) ?></option>
									<?php } ?>
								</select>

								<input type="text" class="form-control surface" id="surface" name="surface" placeholder="surface" readonly>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="col-md-4">
								<label for="customer">Dimensi Material</label>
							</div>
							<b></b>
							<table class='table table-bordered table-striped'>
								<tbody id='list_dimensi'>
									<?php $numensi = 0;
									foreach ($results['dimensi'] as $ensi) {
										$numensi++;
										$class_hitung = '';
										if ($results['id_bentuk'][0]->id_bentuk == 'B2000002') {
											$class_hitung = 'hitung_all';
										}

										if ($ensi->nm_dimensi !== '' && $ensi->nm_dimensi !== null) {
									?>
											<tr>
												<td align='left' hidden>
													<input type='text' name='dimens[<?= $numensi ?>][id_dimensi]' readonly class='form-control' value='<?= $ensi->id_dimensi ?>'>
												</td>
												<td align='left'>
													<?= $ensi->nm_dimensi ?>
												</td>
												<td align='left'>
													<input type='text' id="dimensi<?= $numensi ?>" name='dimens[<?= $numensi ?>][nilai_dimensi]' class='form-control <?= strtolower($ensi->nm_dimensi) . ' ' . $class_hitung ?>'>
												</td>
											</tr>
									<?php
										}
									}
									if ($class_hitung !== '') {
										echo '<tr>';
										echo '<td>';
										echo 'WEIGHT (Kg)';
										echo '</td>';
										echo '<td>';
										echo '<input type="text" class="form-control weight_kg" name="weight_kg" value="" readonly>';
										echo '</td>';
										echo '</tr>';
									}
									?>
								</tbody>
							</table>
						</div>

						<div class="form-group row" hidden>
							<div class="col-md-4">
								<label for="customer">Mountly Forecast</label>
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control" id="hd1[1][mountly_forecast]" name="hd1[1][mountly_forecast]" placeholder="Mountly Forecast">
							</div>
						</div>
						<div class="form-group row" hidden>
							<div class="col-md-4">
								<label for="customer">Safey Stock</label>
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control" id="hd1[1][safety_stock]" name="hd1[1][safety_stock]" placeholder="Safety Stock">
							</div>
						</div>
						<div class="form-group row" hidden>
							<div class="col-md-4">
								<label for="customer">Order Point</label>
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control" id="hd1[1][order_point]" name="hd1[1][order_point]" placeholder="Order Point">
							</div>
						</div>
						<div class="form-group row" hidden>
							<div class="col-md-4">
								<label for="customer">Maximum Stock</label>
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control" id="hd1[1][maksimum]" name="hd1[1][maksimum]" placeholder="Maximum Stock">
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
							echo form_button(array('type' => 'button', 'class' => 'btn btn-md btn-success', 'value' => 'back', 'content' => 'Add', 'id' => 'add-payment'));
							?>
						</div>
						<table class='table table-bordered table-striped'>
							<thead>
								<tr class='table-bordered table-striped bg-blue'>
									<td align='center'><b>Nama Supplier</b></td>
									<td align='center'><b>Lead Time</b></td>
									<td align='center'><b>Minimum Order</b></td>
									<td align='center'><b>Action</b></td>
								</tr>

							</thead>
							<tbody id='list_payment'>

							</tbody>
						</table>
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



<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js" integrity="sha512-rMGGF4wg1R73ehtnxXBt5mbUfN9JUJwbk21KMlnLZDJh7BkPmeovBuddZCENJddHYYMkCh9hPFnPmS9sspki8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
	//$('#input-kendaraan').hide();

	// $(document).on('keyup', '#inventory_2', '#inventory_3', '#nm_inventory', '.maker', '.hardness', function() {
	// 	cariNama();
	// });

	$(document).on('keyup', '#inventory_2, #inventory_3, #nm_inventory, .maker, .hardness, #id_surface, .width, .length', function() {
		cariNama();
	});

	$(document).ready(function() {
		$('.chosen_select').chosen({
			width: '100%'
		});
	});

	$(document).on('keyup', '#dimensi1', function() {
		cariThickness();
	});

	$(document).on('change', '#inventory_3', function() {
		cariAlloy();
	});

	var base_url = '<?php echo base_url(); ?>';
	var active_controller = '<?php echo ($this->uri->segment(1)); ?>';

	$(document).ready(function() {
		var data_pay = <?php echo json_encode($results['supplier']); ?>;

		///INPUT PERKIRAAN KIRIM


		var max_fields2 = 10; //maximum input boxes allowed
		var wrapper2 = $(".input_fields_wrap2"); //Fields wrapper
		var add_button2 = $(".add_field_button2"); //Add button ID

		//console.log(persen);

		var x2 = 1; //initlal text box count
		$(add_button2).click(function(e) { //on add input button click
			e.preventDefault();
			if (x2 < max_fields2) { //max input box allowed
				x2++; //text box increment

				$(wrapper2).append('<div class="row">' +
					'<div class="col-xs-1">' + x2 + '</div>' +
					'<div class="col-xs-3">' +
					'<div class="input-group">' +
					'<input type="text" name="hd' + x2 + '[produk]"  class="form-control input-sm" value="">' +
					'</div>' +
					'<div class="input-group">' +
					'<input type="text" name="hd' + x2 + '[costcenter]"  class="form-control input-sm" value="">' +
					'</div>' +
					'<div class="input-group">' +
					'<input type="text" name="hd' + x2 + '[mesin]"  class="form-control input-sm" value="">' +
					'</div>' +
					'<div class="input-group">' +
					'<input type="text" name="hd' + x2 + '[mold_tools]"  class="form-control input-sm" value="">' +
					'</div>' +
					'</div>' +
					'<a href="#" class="remove_field2">Remove</a>' +
					'</div>'); //add input box
				$('#datepickerxxr' + x2).datepicker({
					format: 'dd-mm-yyyy',
					autoclose: true
				});
			}
		});

		$(wrapper2).on("click", ".remove_field2", function(e) { //user click on remove text
			e.preventDefault();
			$(this).parent('div').remove();
			x2--;
		})



		$('#add-payment').click(function() {
			var jumlah = $('#list_payment').find('tr').length;
			if (jumlah == 0 || jumlah == null) {
				var ada = 0;
				var loop = 1;
			} else {
				var nilai = $('#list_payment tr:last').attr('id');
				var jum1 = nilai.split('_');
				var loop = parseInt(jum1[1]) + 1;
			}
			Template = '<tr id="tr_' + loop + '">';
			Template += '<td align="left">';
			Template += '<select id="id_supplier" name="data1[' + loop + '][id_supplier]" id="data1_' + loop + '_id_supplier" class="form-control select chosen_select" required>';
			Template += '<option value="">-- Pilih Type --</option>';
			Template += '<?php foreach ($results["id_supplier"] as $id_supplier) { ?>';
			Template += '<option value="<?= $id_supplier->id_suplier ?>"><?= strtoupper($id_supplier->name_suplier) ?></option>';
			Template += '<?php } ?>';
			Template += '</select>';
			Template += '</td>';
			Template += '<td align="left">';
			Template += '<input type="text" class="form-control input-sm" name="data1[' + loop + '][lead]" id="data1_' + loop + '_lead" label="FALSE" div="FALSE">';
			Template += '</td>';
			Template += '<td align="left">';
			Template += '<input type="text" class="form-control input-sm" name="data1[' + loop + '][minimum]" id="data1_' + loop + '_minimum" label="FALSE" div="FALSE">';
			Template += '</td>';
			Template += '<td align="center"><button type="button" class="btn btn-sm btn-danger" title="Hapus Data" data-role="qtip" onClick="return DelItem(' + loop + ');"><i class="fa fa-trash-o"></i></button></td>';
			Template += '</tr>';
			$('#list_payment').append(Template);
			$('input[data-role="tglbayar"]').datepicker({
				format: 'dd-mm-yyyy',
				autoclose: true
			});

			$('.chosen_select').chosen({
				width: '100%'
			});
		});



		$('#simpan-com').click(function(e) {
			e.preventDefault();
			var deskripsi = $('#deskripsi').val();
			var image = $('#image').val();
			var idtype = $('#inventory_4').val();

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
						var formData = new FormData($('#data-form')[0]);
						var baseurl = siteurl + 'inventory_4/saveNewInventory';
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
										type: "success",
										timer: 7000,
										showCancelButton: false,
										showConfirmButton: false,
										allowOutsideClick: false
									});
									window.location.href = base_url + active_controller + '/detail/' + data.code;
								} else {

									if (data.status == 2) {
										swal({
											title: "Save Failed!",
											text: data.pesan,
											type: "warning",
											timer: 7000,
											showCancelButton: false,
											showConfirmButton: false,
											allowOutsideClick: false
										});
									} else {
										swal({
											title: "Save Failed!",
											text: data.pesan,
											type: "warning",
											timer: 7000,
											showCancelButton: false,
											showConfirmButton: false,
											allowOutsideClick: false
										});
									}

								}
							},
							error: function() {

								swal({
									title: "Error Message !",
									text: 'An Error Occured During Process. Please try again..',
									type: "warning",
									timer: 7000,
									showCancelButton: false,
									showConfirmButton: false,
									allowOutsideClick: false
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
	$('#inventory_2').change(function() {
		var inventory_2 = $("#inventory_2").val();
		$.ajax({
			type: "GET",
			url: siteurl + 'inventory_4/get_compotition',
			data: "inventory_2=" + inventory_2,
			success: function(html) {
				$("#list_compotition").html(html);
			}
		});
	});

	$(document).on('change', '.hitung_all', function() {
		var total_dimensi = 1;
		$('.hitung_all').each(function() {
			var nilai = $(this).val();
			if (nilai !== '') {
				nilai = nilai.split(',').join('');
				nilai = parseFloat(nilai);
			} else {
				nilai = 1;
			}

			total_dimensi = (total_dimensi * nilai);
		});

		total_dimensi = ((total_dimensi) / 1000000);
		if (total_dimensi == 1) {
			total_dimensi = 0;
		}

		$('.weight_kg').val(total_dimensi.toLocaleString('en-US', {
			'minimumFractionDigits': 2,
			'maximumFractionDigits': 2
		}));
	});

	function get_inv2() {
		var inventory_1 = $("#inventory_1").val();
		$.ajax({
			type: "GET",
			url: siteurl + 'inventory_4/get_inven2',
			data: "inventory_1=" + inventory_1,
			success: function(html) {
				$("#inventory_2").html(html);
			}
		});
	}

	function cariAlloy() {
		var inventory_1 = $("#inventory_3").val();
		$.ajax({
			type: "GET",
			url: siteurl + 'inventory_4/get_namainven2',
			data: "inventory_1=" + inventory_1,
			success: function(html) {
				$("#alloy").val(html);
			}
		});
	}

	function get_bentuk() {
		var id_bentuk = $("#id_bentuk").val();
		$.ajax({
			type: "GET",
			url: siteurl + 'inventory_4/get_dimensi',
			data: "id_bentuk=" + id_bentuk,
			success: function(html) {
				$("#list_dimensi").html(html);
			}
		});
	}





	function get_olddata() {
		var nm_inventory = $("#nm_inventory").val();
		$.ajax({
			type: "GET",
			url: siteurl + 'inventory_4/get_olddata',
			data: "id_bentuk=" + id_bentuk,
			success: function(html) {
				$("#list_dimensi").html(html);
			}
		});
	}

	function get_inv3() {
		var inventory_2 = $("#inventory_2").val();
		$.ajax({
			type: "GET",
			url: siteurl + 'inventory_4/get_inven3',
			data: "inventory_2=" + inventory_2,
			success: function(html) {
				$("#inventory_3").html(html);
			}
		});
	}


	function get_surface() {
		var idsurface = $(".idsurface").val();
		$.ajax({
			type: "GET",
			url: siteurl + 'inventory_4/get_surface',
			data: "idsurface=" + idsurface,
			success: function(data) {
				$(".surface").val(data);

				cariNama();
			}
		});



	}

	function cariThickness() {
		var dimensi = $("#dimensi1").val();
		$("#thickness").val(dimensi);

		cariNama();
	}

	function cariNama() {
		var id_bentuk = "<?= $results['id_bentuk'][0]->id_bentuk ?>";
		var alloy = $("#alloy").val();

		var spek = $("#nm_inventory").val();
		if(spek == undefined) {
			spek = '';
		}
		if (spek != '') {
			var stripspek = '-';
		} else {
			var stripspek = '';
		};
		var hardness = $(".hardness").val();
		if(hardness == undefined) {
			hardness = '';
		}
		if (hardness != '') {
			var striphardness = '-';
		} else {
			var striphardness = '';
		};
		var thickness = $("#thickness").val();
		if(thickness == undefined) {
			thickness = '';
		}
		if (thickness != '') {
			var stripthickness = '-';
		} else {
			var stripthickness = '';
		};
		var maker = $(".maker").val();
		if(maker == undefined) {
			maker = '';
		}
		if (maker != '') {
			var stripmaker = '-';
		} else {
			var stripmaker = '';
		};
		var surface = $(".surface").val();
		if(surface == undefined) {
			surface = '';
		}
		if (surface != '') {
			var stripsurface = '-';
		} else {
			var stripsurface = '';
		};
		var width = $('.width').val();
		if(width == undefined) {
			width = '';
		}
		if (width != '') {
			var stripwidth = '-';
		} else {
			var stripwidth = '';
		};
		var length = $('.length').val();
		if(length == undefined) {
			length = '';
		}
		if (length != '') {
			var striplength = '-';
		} else {
			var striplength = '';
		};

		

		// alert(alloy);

		if(id_bentuk == 'B2000002') {
			var nama = spek + stripspek + hardness + striphardness + surface + stripsurface + thickness + stripthickness + width + stripwidth + length + striplength + alloy;
		} else {
			var nama = alloy + stripspek + spek + striphardness + hardness + stripthickness + thickness + stripsurface + surface;
		}
		$(".nama").val(nama);

	}

	function DelItem(id) {
		$('#list_payment #tr_' + id).remove();

	}
</script>