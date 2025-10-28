<?php
    $ENABLE_ADD = has_permission('Jadwal_maintenance.Add');
    $ENABLE_MANAGE = has_permission('Jadwal_maintenance.Manage');
    $ENABLE_VIEW = has_permission('Jadwal_maintenance.View');
    $ENABLE_DELETE = has_permission('Jadwal_maintenance.Delete');
?>
<style type="text/css">
thead input {
	width: 100%;
}
</style>
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables/dataTables.bootstrap.css'); ?>">
   
<div class="card shadow-sm mb-4">
  <div class="card-body">
    <div class="mb-3" style="width:50%;">
      <label for="status" class="form-label fw-semibold">Pilih Status Rekalibrasi</label>
      <select id="status" class="form-select">
        <option value="">Pilih</option>
        <option>Consumable</option>
        <option>Valid</option>
        <option>Warning</option>
        <option>Expired</option>
        <option value="recal">On progress recal</option>
      </select>
    </div>

    <div class="table-responsive pb-5">
      <div style="overflow: auto; max-height: 70rem;">
        <table id="table-quotation" class="table table-bordered align-middle">
          <thead class="table-primary sticky-top" style="background-color:#E9ECF9;color:#0A1A60;">
            <tr class="text-center" style="font-size: 13px; height: 50px;">
              <th>No Identitas</th>
              <th>Nama Kalibrator</th>
              <th>January</th>
              <th>February</th>
              <th>March</th>
              <th>April</th>
              <th>May</th>
              <th>June</th>
              <th>July</th>
              <th>August</th>
              <th>September</th>
              <th>October</th>
              <th>November</th>
              <th>December</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody style="font-size: 12px;"></tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Modal: Tambah Jadwal -->
<div class="modal fade" id="FormModal" tabindex="-1" aria-labelledby="FormModalLabel" aria-hidden="true" data-bs-backdrop="static">
  <form id="form-add" enctype="multipart/form-data">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-semibold" id="FormModalLabel">Tambah Jadwal</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-modal-close"></button>
        </div>
        <div class="modal-body">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Nama Kalibrator</label>
              <select id="calibrator_id" name="calibrator_id" class="form-select" onchange="getTool()">
                <option value="">Pilih Kalibrator</option>
                <?php foreach($tool as $row): ?>
                  <option value="<?= $row->id ?>"><?= $row->name ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Ruang Lingkup</label>
              <input type="text" id="ruang_lingkup" class="form-control">
            </div>
            <div class="col-md-6">
              <label class="form-label">No. Identitas</label>
              <input type="text" id="no_identitas" class="form-control">
            </div>
            <div class="col-md-6">
              <label class="form-label">Interval Kalibrasi</label>
              <input type="text" id="interval_kalibrasi" class="form-control">
            </div>
            <div class="col-md-6">
              <label class="form-label">Tanggal Kalibrasi Terakhir</label>
              <input type="date" id="tanggal_kalibrasi_terakhir" name="tgl_kalibrasi" class="form-control">
            </div>
          </div>
          <div class="mt-4 text-end">
            <button type="button" id="simpan" class="btn btn-primary" onclick="postAdd()">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<!-- Modal: Detail -->
<div class="modal fade" id="Formdetail" tabindex="-1" aria-labelledby="FormdetailLabel" aria-hidden="true" data-bs-backdrop="static">
  <form id="form-detail" enctype="multipart/form-data">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-semibold" id="FormdetailLabel">Detail</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-modal-close"></button>
        </div>
        <div class="modal-body">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Ruang Lingkup</label>
              <input type="text" id="dimensi_name" class="form-control" readonly>
            </div>
            <div class="col-md-6">
              <label class="form-label">No. Identitas</label>
              <input type="text" id="code" class="form-control" readonly>
            </div>
            <div class="col-md-6">
              <label class="form-label">Nama Kalibrator</label>
              <input type="text" id="name" class="form-control" readonly>
            </div>
            <div class="col-md-6">
              <label class="form-label">Interval Kalibrasi</label>
              <input type="text" id="interval_rekalibrasi" class="form-control" readonly>
            </div>
            <div class="col-md-6">
              <label class="form-label">Tanggal Kalibrasi Terakhir</label>
              <input type="text" id="actual_date" class="form-control" readonly>
            </div>
          </div>

          <h6 class="mt-4 fw-semibold">Data Vendor</h6>
          <div class="table-responsive">
            <table class="table table-bordered align-middle">
              <thead style="background-color:#E9ECF9;color:#0A1A60;">
                <tr class="text-center" style="font-size: 13px; height: 50px;">
                  <th>Nama Vendor</th>
                  <th>Alamat Vendor</th>
                  <th>Harga Kalibrasi</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody style="font-size: 12px;">
                <tr>
                  <td><input type="text" id="vendor_name" class="form-control" readonly></td>
                  <td><textarea id="address" class="form-control" rows="2" readonly></textarea></td>
                  <td><input type="text" value="0" class="form-control" readonly></td>
                  <td><input type="text" class="form-control" readonly></td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </form>
</div>



<style>
/* Start Css Box */
	.box-cs01{
		border-radius: 18px;
		box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
	}
/* End Css Box */

/* Start Css Table */
	table.dataTable tbody td {
		vertical-align: middle;
	}
	table.dataTable thead th {
		text-align: center;
		vertical-align: middle;
	}
	.dataTables_filter {
		padding-top: 10px;
	}
	.Btntable {
		font-size: 13.3px !important;
		padding: 6px !important;
		margin: 4px !important;
		margin-bottom: 10px !important;
		border-radius: 4px !important;
		width: 85px;
		border: none !important;
		box-shadow: 0 1px 2px rgba(0,0,0,0.07), 
                0 2px 4px rgba(0,0,0,0.07), 
                0 4px 8px rgba(0,0,0,0.07), 
                0 8px 16px rgba(0,0,0,0.07),
                0 16px 32px rgba(0,0,0,0.07), 
                0 32px 64px rgba(0,0,0,0.07);
	}
	.Btntable1 {
		background-color: #2F92E4 !important;
		color: white !important;
		width: 105px;
	}
	.Btntable2 {
		background-color: #FFAC05 !important;
		color: white !important;
		width: 95px;
	}

	.highlight {
		color: #3c8dbc;
		/* cursor: pointer; */
	}
/* End Css Table */

/* Start Css Button */
	.Btn-cs {
		font-size: 14px;
		padding: 7px;
		margin: 4px;
		margin-bottom: 0px !important;
		border-radius: 8px;
		width: 85px;
		border: none;
		box-shadow: 0 1px 2px rgba(0,0,0,0.07), 
                0 2px 4px rgba(0,0,0,0.07), 
                0 4px 8px rgba(0,0,0,0.07), 
                0 8px 16px rgba(0,0,0,0.07),
                0 16px 32px rgba(0,0,0,0.07), 
                0 32px 64px rgba(0,0,0,0.07);
	}
	.Btn-cs:hover {
		color: white;
		transition: all 150ms linear;
		opacity: .88;
	}
	.Btn-cs1 {
		width: auto;
		background-color: #2F92E4;
		color: white;
	}
	.Btn-cs2 {
		background-color: #d9534f;
		color: white;
	}

	.btn-copy {
		font-size: 12px;
		padding: 5.5px;
		border-radius: 8px;
		width: 75px;
		border: none;
		background-color: #D4D8DF;
		color: black;
		box-shadow: 0 1px 2px rgba(0,0,0,0.07), 
                0 2px 4px rgba(0,0,0,0.07), 
                0 4px 8px rgba(0,0,0,0.07), 
                0 8px 16px rgba(0,0,0,0.07),
                0 16px 32px rgba(0,0,0,0.07), 
                0 32px 64px rgba(0,0,0,0.07);
	}
	.btn-copy:hover {
		color: blue;
		transition: all 150ms linear;
		opacity: .88;
	}
/* End Css Button */

/* Start Css Modal */
	.modal-cs{
		-webkit-border-radius: 20px !important;
		-moz-border-radius: 20px !important;
		border-radius: 20px !important; 
	}
/* End Css Modal */
	.inputfileUpload{
		display: none;
	}
</style>


<script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables/dataTables.bootstrap.min.js');?>"></script>

<script>
var table;
var save_method;
// $("#status").chosen({
//   "disable_search": true
// });

$(document).ready(function() {
	let data = {'status':$('#status').val()}
	table = $('#table-quotation').DataTable({   
		processing		: true,
		serverSide		: true,
		paging			: true, 
		responsive: false,
		order			: [],
		//autoWidth		: false,
		lengthMenu		: [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
		iDisplayLength	: 5,
		oLanguage: {
			oPaginate: {
				sNext: '<i class="fa fa-chevron-circle-right fa-lg"></i>',
				sPrevious: '<i class="fa fa-chevron-circle-left fa-lg"></i>'
			}
		},
		//pagingType: "simple", //"simple, simple_numbers, full"

		ajax			: {
							"url"	: "<?php echo site_url('jadwal_maintenance/list_kalibrator')?>",
							"type"	: "POST",
							"data": function ( d ) {
								return  $.extend(d, data);
							}
						},
		dom				: 'Bfrtip', 
		buttons			: [
							{
								extend: 'pageLength',
								text:      '<i class="fa fa-list-ol"></i> <b>Show</b>',
								className: "Btntable Btn2"
							},

							{
								text:      '<i class="fa fa-refresh fa-lg"></i> &nbsp;<b>Reload</b>',
								className: "Btntable reload-table",
							}
							,

                            {
                                text:      ' &nbsp;<b>History</b>',
                                className: "Btntable history" ,
                            }

						],

		columnDefs	: [ 
							{
								"targets": [ 0,1,2,3,4,5,6,7,8,9,10,11,12,13,14 ],
								"className": 'text-center',
							}, 
							{
								"targets": [0,4 ],
								"orderable": false,
							}, 
						],
		
		fnDrawCallback: function(nRow, aData, iDisplayIndex) {
			$('#table-cs tbody tr').hover(function() {
				$(this).addClass('highlight');
			}, function() {
				$(this).removeClass('highlight');
			});
			// $('#table-cs tbody tr').each(function(){
			// 	$(this).find('td:eq(4)').attr('nowrap', 'nowrap');
			// 	$(this).find('td:eq(9)').attr('nowrap', 'nowrap');
			// 	$(this).find('td:eq(10)').attr('nowrap', 'nowrap');
			// });
		}

	});
	
	$("input").change(function() {
		$(this).parent().parent().removeClass('has-error');
		$(this).next().empty();
	});
	// $("select").change(function() {
	// 	$(this).parent().parent().removeClass('has-error');
	// 	$(this).next().empty();
	// });


	$('.reload-table').click(function(){
		table.columns.adjust().draw();
		table.ajax.reload(null, false);
	});

	$('.history').click(function(){
		location.href = "schedule_rekalibrasi_kalibrator/list_history";

	});


	$("#status").change(function() {
		data.status = $('#status').val();
		
		
			console.log(data)
			table.columns.adjust().draw();
			table.ajax.reload();
		
		
	});

});


$(document).on('click', '.add', () => {
	$('#FormModal').modal('show');
});




function postAdd(){
	swal({
        title: "Are you sure?",
        text: "You will not be able to process again this data!",
        type: "warning",
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true,
        confirmButtonClass: "btn-success",
        confirmButtonText: "Yes, Process it!",
            }, function() {
                setTimeout(function() {
                    $('.moneyFormat').each(function() {
    
        });
				let formData 	= new FormData($('#form-add')[0]);
				let url = `<?php echo site_url('Schedule_rekalibrasi_kalibrator/postSchedule')?>`;
                // return console.log(url);
                $.ajax({
                    url: url,
                    method:"POST",
                    data: formData,
                    cache		: false,
                    dataType	: 'json',
                    processData	: false, 
                    contentType	: false,		
                    success: function(result){
                        let data = result;
                        // return console.log(data);
						$('#FormModal').modal('hide');

                        swal({
                            title	: "Save Success!",
                            text	: data.message,
                            type	: "success"
                        });
						$('.reload-table').click();
                    }
                });    
            }, 50);
        });
	
}

function detail_sch(id){
	
	let url = `<?php echo site_url('Schedule_rekalibrasi_kalibrator/get_schre')?>`;
	$.post(url,{id}, function(response) {
			let data = JSON.parse(response);
			$.each(data, function(key, value) {
				$("#" + key).val(value);
			});
			console.log(data);
			$('#Formdetail').modal('show');

	});	 

	console.log(id);

}

function getTool(){
	let url = `<?php echo site_url('Schedule_rekalibrasi_kalibrator/get_tools')?>`;
	let id = $('#calibrator_id').val();
	$.post(url,{id}, function(response) {
			let data = JSON.parse(response);
			$('#ruang_lingkup').val(data.dimensi_name)
			$('#no_identitas').val(data.code)
			$('#interval_kalibrasi').val(data.interval_rekalibrasi + ' tahun')

			
			console.log(data);

	});	 

	console.log(id);
}



$(document).on('click', '.btn-bayar', () => {
	post_custfee()
});

$(document).on('click', '#chk_all', () => {
	if ($('#chk_all').is(':checked')) {
		$('.chck-fee').prop('checked', true);
	} else {
		$('.chck-fee').prop('checked', false);
	}
});

</script>
