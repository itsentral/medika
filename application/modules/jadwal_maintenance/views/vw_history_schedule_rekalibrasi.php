
   
<div class="box box-primary box-cs01">
	
	<div class="box-body">
		
		<div class="table-responsive col-sm-12" style="padding-bottom:65px;">
            <!-- <form action="#" id="selectFile" method="POST"> -->
            <table id="table-quotation" class="table table-bordered table-striped" width="100%">
                <thead class="thead-cs" style="background-color:#E9ECF9;color:#0A1A60;">
                    <tr style="font-size: 13px;height: 50px;">
                        <th class="text-center" width="">Kode Kalibrator</th>
                        <th class="text-center" width="">Nama Kalibrator</th>
                        <th class="text-center" width="">Vendor Kalibrasi</th>
                        <th class="text-center" width="">Tanggal Kalibrasi</th>
                        <th class="text-center" width="">Action</th>

                    </tr>
                </thead>
                <tbody id="" style="font-size: 12px;">
                </tbody>
            </table>
            <!-- </form> -->
		</div>
		<br/>
		<br/>
	</div>
</div>

<div class="modal fade" id="FormModal" tabindex="-1" role="dialog" aria-labelledby="MyModal" data-backdrop="static">
	<form action="#" method="POST" id="form-add" enctype="multipart/form-data">
		<div class="modal-dialog" role="document" style="min-width:70% !important;">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="">Detail</h5>
					<button class="close" data-dismiss="modal" aria-label="close" id="btn-modal-close">
						<span aria-hidden="true"><i class="fa fa-close"></i></span>
					</button>
				</div>
				<div class="modal-body" id="MyModalDetail">
					<div class='row'>
					
						<div class="col-sm-6">
							<div class="form-group">
								<label class="control-label">Ruang Lingkup</label>
                                <input type="text" readonly  value="" id="NamaKalibrator" class="form-control input-sm" fdprocessedid="z25r8f">
							
							</div>
						</div>	
						<div class="col-sm-6">
							<div class="form-group">
								<label class="control-label">Vendor</label>
								<input type="text" readonly  value="" id="VendorKalibrasi" class="form-control input-sm" fdprocessedid="z25r8f">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="control-label">No. Identitas </label>
								<input type="text" readonly  value="" id="KodeKalibrator" class="form-control input-sm" fdprocessedid="z25r8f">
							</div>
						</div>	
						<div class="col-sm-6">
							<div class="form-group">
								<label class="control-label">No. Order</label>
								<input type="text" readonly  value="" id="NoOrder" class="form-control input-sm" fdprocessedid="z25r8f">
							</div>
						</div>	
						<div class="col-sm-6">
							<div class="form-group">
								<label class="control-label">Tanggal Kalibrasi</label>
								<input type="text" readonly  value="" id="TanggalKalibrasi" class="form-control input-sm" fdprocessedid="z25r8f">
							</div>
						</div>	
                        <div class="col-sm-6">
							<div class="form-group">
								<label class="control-label">Sertifikat</label><br>
                                <a id="sertifikat" href="#" class="btn btn-primary">File Sertifikat</a>
							</div>
						</div>	
					</div>
                    <div class='row'>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Nilai Ketidakpastian</label>
                                <input type="text" readonly  value="" id="NilaiKetidakpastian" class="form-control input-sm" fdprocessedid="z25r8f">
                            
                            </div>
                        </div>	
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">keterangan</label>
                                <textarea type="text" readonly  value="" id="KetNilaiKetidakpastian" class="form-control input-sm" fdprocessedid="z25r8f">
                                
                                </textarea>
                            </div>
                        </div>

                        

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Grade</label>
                                <input type="text" readonly  value="" id="Grade" class="form-control input-sm" fdprocessedid="z25r8f">
                            
                            </div>
                        </div>	
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Ket Grade</label>
                                <textarea type="text" readonly  value="" id="KetGrade" class="form-control input-sm" fdprocessedid="z25r8f">
                                
                                </textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Rusak</label>
                                <input type="text" readonly  value="" id="Rusak" class="form-control input-sm" fdprocessedid="z25r8f">
                            
                            </div>
                        </div>	
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">ke Rusak</label>
                                <textarea type="text" readonly  value="" id="KetRusak" class="form-control input-sm" fdprocessedid="z25r8f">
                                
                                </textarea>
                            </div>
                        </div>
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


<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="<?php echo base_url("assets/fileUpload/fileUpload.css")?>">
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<!-- <script src="<?php echo base_url("assets/fileUpload/fileUpload.js")?>"></script> -->
<script>
var table;
var save_method;
$("#status").chosen({
  "disable_search": true
});
let data = {'agent_id':$('#agent_id').val()}

$(document).ready(function() {
	table = $('#table-quotation').DataTable({   
		processing		: true,
		serverSide		: true,
		paging			: true, 
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
							"url"	: "<?php echo site_url('Schedule_rekalibrasi_kalibrator/list_history_kalibrator/')?>",
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
							},

                           

						],

		columnDefs	: [ 
							{
								"targets": [ 0,1,2,3,4],
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

});


$(document).on('click', '.history', () => {
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

                    }
                });    
            }, 50);
        });
	
}

function detail(id){
	let url = `<?php echo site_url('Schedule_rekalibrasi_kalibrator/get_schre')?>`;
	$.post(url,{id}, function(response) {
			let data = JSON.parse(response);
			let link =`<?= site_url('') ?>selia/downloadbyName?getFile=${data.file_kalibrasi}&setName=Sertifikat_${data.name}_${data.actual_date}`
			$('#NamaKalibrator').val(data.name)
			$('#VendorKalibrasi').val(data.vendor_name)
            $('#KodeKalibrator').val(data.code)
            $('#TanggalKalibrasi').val(data.actual_date)
            $('#NilaiKetidakpastian').val(data.nilai_ketidakpastian)
            $('#KetNilaiKetidakpastian').val(data.ket_nilai_ketidakpastian)

            $('#Grade').val(data.grade)
            $('#KetGrade').val(data.ket_grade)

            $('#Rusak').val(data.rusak)
            $('#KetRusak').val(data.ket_rusak)

            

			$('#interval_kalibrasi').val(data.interval_rekalibrasi + ' tahun')
            $('#FormModal').modal('show');
			if(data.file_kalibrasi){
				$("#sertifikat").show()
				$("#sertifikat").attr("href",link)
			}else{
				$("#sertifikat").hide()
			}

			
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
