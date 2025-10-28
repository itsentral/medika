
<style>
/* Start Css Button */
	.Btn-cs {
		font-size: 14px;
		padding: 7px;
		margin: 4px;
		margin-bottom: 0px !important;
		border-radius: 8px;
		width: auto;
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
		background-color: #2F92E4;
		color: white;
	}
	.Btn-cs2 {
		background-color: #d9534f;
		color: white;
	}
/* End Css Button */
	.title-cs{
		padding-top:20px;
		font-weight: bold;
	}
	.box-cs01{
		border-radius: 18px;
		box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
	}
	.modal-cs{
		-webkit-border-radius: 20px !important;
		-moz-border-radius: 20px !important;
		border-radius: 20px !important; 
	}

	table.dataTable tbody td {
		vertical-align: middle;
	}
	table.dataTable thead th {
		text-align: center;
		vertical-align: middle;
	}

	.dataTables_filter {
		float: right !important;
	}

	.highlight {
		color: #3c8dbc;
		/* cursor: pointer; */
	}

	td.wide {
		white-space: nowrap;;
	}
	

	.sub-heading{
		border-radius :5px;
		background-color :#03506F;
		color : white;
		margin : 20px 10px 15px 10px !important;
		width :98% !important;
	}
	.blue_grey{
		background-color : #37474f !important;
		color : #fff !important;
	}
	
	.brown{
		background-color : #5d4037 !important;
		color : #fff !important;
	}
	
	.amber{
		background-color : #ff6f00 !important;
		color : #fff !important;
	}
</style>
<form action="#" method="POST" id="form-proses" enctype="multipart/form-data">
	<div class="box box-primary box-cs01">
		<div class="box-body">
			<?php
			if(1 == 0){
				echo"<div class=''>
						<div class='col-sm-12'>
							<h4 class='text-red'><b>NO RECORD WAS FOUND.....</b></h4>
						</div>
					</div>";
			}else{
				
			?>
				<div class="col-sm-12">
					<h4 class="title-cs"><i class="fa fa-plus fa-md"></i> Quotation Rekalibrasi Kalibrator</h4>
					<hr/>
				</div>			
				<div class='row'>					
					<div class="col-sm-6">
						<div class="form-group">
							<label class="control-label">Nomor</label>
                            <p>Automatic</p>

						</div>
					</div>	
					<div class="col-sm-6">
						<div class="form-group">
							<label class="control-label">Tanggal</label><br>
                            <?php echo  date("j F Y");?>
						</div>
					</div>
				</div>
				<div class='row'>					
					<div class="col-sm-6">
						<div class="form-group">
							<label class="control-label">Customer *</label>
                            <!-- <input class="" name="customer_code" id ="customer_code"> -->
                            <input class="hide"  name="var[schre_id]" value ="<?=$schre_id?>" >

                            <input readonly class="form-control input required"  name="data[Quotation][customer_name]" id ="customer_name">
                            <input class="hide"  name="data[Quotation][customer_id]" id ="customer_id" >

           
						</div>
					</div>	
					<div class="col-sm-6">
						<div class="form-group">
							<label class="control-label">Alamat</label>
                            <textarea class="form-control input" name="data[Quotation][address]" id ="address" readonly>
                            </textarea>
						</div>
					</div>	
				</div>
                <div class='row'>					
					<div class="col-sm-6">
						<div class="form-group">
							<label class="control-label">PIC * </label>
                            <input class="form-control input required"  name="data[Quotation][pic_name]" id ="pic_name" readonly>

						</div>
					</div>	
					<div class="col-sm-6">
						<div class="form-group">
							<label class="control-label">Marketing *</label>
                            <input class="hide" value="Riska Eka W" name="data[Quotation][member_name]" id ="member_name">
                            <select class="form-control input required"  name="data[Quotation][member_id]" id="member_id">
                                <option value="MEM-006">Riska Eka W </option>
                            </select>
                            <div class="error-container text-danger" id="err-member_name" class="text-danger"></div>

						</div>
					</div>	
				</div>
                <div class='row'>					
					<div class="col-sm-6">
						<div class="form-group">
							<label class="control-label">Exclude PPN</label>
                            <input class="hide"  name="var[Quotation][prosen_ppn]" value="<?= $prosen_ppn ?>" id ="prosen_ppn">
                            <select class="form-control input" onchange="ppn_exc()"  name="data[Quotation][exc_ppn]" id="exc_ppn">
                                <option value="N">Tidak</option>

                            </select>
						</div>
					</div>	
					<div class="col-sm-6">
						<div class="form-group">
							<label class="control-label">Keterangan</label>
                            <input class="form-control input" name="data[Quotation][descr]" id ="descr">
						</div>
					</div>	
				</div>
                <div class='row'>					
					<div class="col-sm-6">
						<div class="form-group">
							<label class="control-label">Insitu ? </label>
                            <select class="form-control input"  name="var[Quotation][flag_insitu]" id="flag_insitu">
                                <option value="N">Tidak</option>
                            </select>
						</div>
					</div>	
					<div class="col-sm-6">
						<div class="form-group">
							<label class="control-label">Akomodasi ?</label>
                            <select class="form-control input"  name="var[Quotation][flag_akomodasi]" id="flag_akomodasi">
                                <option value="N">Tidak</option>
                            </select>
						</div>
					</div>	
				</div>
                <div class='row'>					
					<div class="col-sm-6">
						<div class="form-group">
							<label class="control-label">Total DPP</label>
                            <input class="form-control input moneyFormat"  value="0" name="data[Quotation][total_dpp]" id ="total_dpp" readonly>
						</div>
					</div>	
					<div class="col-sm-6">
						<div class="form-group">
							<label class="control-label">PPN</label>
                            <input class="form-control input moneyFormat" value="0" name="data[Quotation][ppn]" id ="ppn" readonly>
						</div>
					</div>	
				</div>
                <div class='row'>
                <div class="col-sm-6">
						<div class="form-group">
							<label class="control-label">Narasi Penawaran *</label>
                            <select class="form-control input required"  name="data[Quotation][code_narration]" id="code_narration">
                                 <option  value="TEXT-QUOT-0003">TOP 30 HARI</option>
                            </select>
                            <div class="error-container text-danger" id="err-code_narration" class="text-danger"></div>
						</div>
					</div>						
					<div class="col-sm-6">
						<div class="form-group">
							<label class="control-label">Grand Total</label>
                            <input  class="form-control input moneyFormat moneyFormat" value="0" name="data[Quotation][grand_tot]" id ="grand_tot" readonly>
						</div>
					</div>	
					
				</div>
				
				<div class="col-sm-12">
					<h4 class="title-cs"><i class="fa fa-wrench fa-md"></i> Data Alat</h4>
					<hr/>
				</div>			

				<div class="">

					<div class="table-responsive col-sm-12" style="padding-bottom:20px;padding-top:10px;">
						<table id="" class="table table-bordered table-striped" style="" width="100%">
							<thead style="background-color:#E9ECF9;color:#0A1A60;">
								<tr>
                                    <td style="width:15%" class="text-center"><b>Alat Cust</b></td>
                                    <td style="width:15%" class="text-center"><b>Vendor</b></td>

                                    <td style="width:7%" class="text-center"><b>Qty</b></td>
                                    <td style="width:10%" class="text-center"><b>Keterangan</b></td>
                                    <td style="width:7%" class="text-center"><b>Insitu</b></td>
								</tr>
							</thead>
							<tbody id="selected_alat">
                                <tr class="" id="row_alat-0">
                                    <td class=" text-center">
                                        <input class="hide" id="QuotationDetailToolId0" value="<?=$tool->code?>" name="data[QuotationDetail][0][tool_id]">
                                        <input class="hide" id="QuotationDetailToolName0" value="<?=$tool->name?>" name="data[QuotationDetail][0][tool_name]">
                                        <input class="hide" id="QuotationDetailSupplierId0" value="<?=$tool->vendor?>" name="data[QuotationDetail][0][supplier_id]">
                                        <input class="hide" id="QuotationDetailSupplierId0" value="<?=$tool->supplier?>" name="data[QuotationDetail][0][supplier_name]">
                                        <input class="hide" id="QuotationDetailRange0" value="0-0" name="data[QuotationDetail][0][range]">
                                        <input class="hide" id="QuotationDetailPieceId0" value="-" name="data[QuotationDetail][0][piece_id]">
                                        <input class="hide" id="QuotationDetailHpp0" value="0" name="data[QuotationDetail][0][hpp]">
                                        
                                        <input type="text" class="form-control input" value="<?=$tool->name?>" name="data[QuotationDetail][0][cust_tool]" id="QuotationDetailcust_tool0" fdprocessedid="amhmxk">
                                        <input type="text" class="form-control input moneyFormat hide" value="0" readonly="" name="data[QuotationDetail][0][master_price]" id="QuotationDetail_price0" fdprocessedid="mv33tq">
                                        <input class="hide" id="QuotationDetail_total_harga0" value="0"  name="data[QuotationDetail][0][total_harga]">
                                        <input type="text" class="form-control input moneyFormat hide" oninput="" value="0" name="data[QuotationDetail][0][price]" id="QuotationDetail_dpp0" fdprocessedid="q2tfpn">
                                        <input type="text" class="form-control input moneyFormat hide QuotationDetail_discount" value="0" oninput="" name="data[QuotationDetail][0][discount]" id="QuotationDetail_discount0" fdprocessedid="oa9406">
                                        <input type="text" class="form-control input moneyFormat hide" readonly="" value="0" name="var[QuotationDetail][0][net_pcs]" id="QuotationDetail_net_pcs0" fdprocessedid="qq8u4t">
                                        <input type="text" class="form-control input moneyFormat hide" readonly="" value="0" name="var[QuotationDetail][0][total]" id="QuotationDetail_total0" fdprocessedid="ckfl">

                                    </td>
                                    <td class=" text-center">
                                        <input type="text" class="form-control input moneyFormat" readonly oninput="" value="<?=$tool->supplier?>" name="" id="QuotationDetail_qty0" fdprocessedid="2ja2uk">
                                    </td>
                                    <td class=" text-center">
                                        <input type="text" class="form-control input moneyFormat" readonly oninput="" value="1" name="data[QuotationDetail][0][qty]" id="QuotationDetail_qty0" fdprocessedid="2ja2uk">
                                    </td>
                    
                                    <td class=" text-center">
                                        <textarea type="text" class="form-control input" name="data[QuotationDetail][0][descr]" id="descr0">                

                                        </textarea>

                                    </td>
                                    <td class=" text-center">
                                        <select name="data[QuotationDetail][0][flag_insitu]" id="flag_insitu0" class="form-control input" fdprocessedid="j9kfku">
                                            <option value="N">No</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        
						</table>
					</div>
				</div>
                <div style="padding-left:20px;padding-bottom:20px">
                    <button type="button" onclick="postQuotation('add')" class="btn btn-success">Simpan</button>
                    <button type="button" class="btn btn-danger">batal</button>
                </div>			
			<?php
			}
			?>
						
		</div>		
	
		
	</div>
</form>

    
</div>




<script>
	var base_url			= '<?php echo site_url(); ?>';
	var active_controller	= '<?php echo($this->uri->segment(1)); ?>';
    let prosen_ppn = $('#prosen_ppn').val();
    $(document).ready(function() {

        table = $('#table-list-alat').DataTable({   
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
                                "url"	: "<?php echo site_url('quotation_open/list_alat') ?>",
                                "type"	: "POST",
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
                                    "targets": [ 0,1,2,3,4 ],
                                    "className": 'text-center',
                                }, 
                                {
                                    "targets": [0,7],
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

        table_institu = $('#table-list-institu').DataTable({   
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
                                "url"	: "<?php echo site_url('quotation_open/list_institu') ?>",
                                "type"	: "POST",
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
                                    "targets": [ 0,1,2,3,4 ],
                                    "className": 'text-center',
                                }, 
                                {
                                    "targets": [0,4],
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
        



        $('.reload-table').click(function(){
            table.columns.adjust().draw();
            table.ajax.reload(null, false);
        });

    });


    $(document).on("change", "#member_id", function (e) {
        let name = $(this).find('option:selected').text();
        $("#member_name").val(name)
    });
    getCustomer(`CUST-V3-230711134744`)
	function getCustomer(id){
        console.log(id);
        $.ajax({
            url: `<?php echo site_url('quotation_open/getCustomer/') ?>${id}`,
            method:"GET",
            success: function(result){
                let data = JSON.parse(result);
                $('#customer_id').val(data.id);
                $('#customer_name').val(data.name);
                $('#pic_name').val(data.contact);
                $('#address').val(data.address+' '+data.city_name+', '+data.province_name);

            }
        });    
        
    };

    let counter_alat = 0;

    function appendTool(id,nama,price) {
        
        const newInputHtml = `
        <tr class="" class="odd" id="row_alat-${counter_alat}">
           
            <td class=" text-center">
                <input class="hide" id="QuotationDetailToolId${counter_alat}" value="${$('#SelectToolId'+id).val()}" name="data[QuotationDetail][${counter_alat}][tool_id]" />
                <input class="hide" id="QuotationDetailToolName${counter_alat}" value="${$('#Select_tool_name'+id).val()}"  name="data[QuotationDetail][${counter_alat}][tool_name]" />
                <input class="hide" id="QuotationDetailSupplierId${counter_alat}" value="${$('#Select_supplier_id'+id).val()}"  name="data[QuotationDetail][${counter_alat}][supplier_id]" />
                <input class="hide" id="QuotationDetailSupplierId${counter_alat}" value="${$('#Select_supplier_name'+id).val()}"  name="data[QuotationDetail][${counter_alat}][supplier_name]" />
                <input class="hide" id="QuotationDetailRange${counter_alat}" value="${$('#Select_range'+id).val()}"  name="data[QuotationDetail][${counter_alat}][range]" />
                <input class="hide" id="QuotationDetailPieceId${counter_alat}" value="${$('#Select_piece_id'+id).val()}"  name="data[QuotationDetail][${counter_alat}][piece_id]" />
                <input class="hide" id="QuotationDetailHpp${counter_alat}" value="${$('#Select_hpp'+id).val()}"  name="data[QuotationDetail][${counter_alat}][hpp]" />
                
                <input type="text" class="form-control input" value="${nama}"  name="data[QuotationDetail][${counter_alat}][cust_tool]"  id="QuotationDetailcust_tool${counter_alat}">
            </td>
             <td class=" text-center">
                <input type="text" class="form-control input moneyFormat" value="${moneyFormat(price)}" readonly  name="data[QuotationDetail][${counter_alat}][master_price]"  id="QuotationDetail_price${counter_alat}">
            </td>
            <td class=" text-center">
                <input class="hide" id="QuotationDetail_total_harga${counter_alat}" name="data[QuotationDetail][${counter_alat}][total_harga]" />
                <input type="text" class="form-control input moneyFormat" oninput="calculation_alat(${counter_alat})" value="${moneyFormat(price)}" name="data[QuotationDetail][${counter_alat}][price]"  id="QuotationDetail_dpp${counter_alat}">
            </td>
            <td class=" text-center">
                <input type="text" class="form-control input moneyFormat QuotationDetail_discount" type="number" oninput="calculation_alat(${counter_alat})"  name="data[QuotationDetail][${counter_alat}][discount]" id="QuotationDetail_discount${counter_alat}">
            </td>
            <td class=" text-center">
                <input type="text" class="form-control input moneyFormat" readonly name="var[QuotationDetail][${counter_alat}][net_pcs]"  id="QuotationDetail_net_pcs${counter_alat}">
            </td>
             <td class=" text-center">
                <input type="text" class="form-control input moneyFormat" oninput="calculation_alat(${counter_alat})" value="0"  name="data[QuotationDetail][${counter_alat}][qty]" id="QuotationDetail_qty${counter_alat}">
            </td>
            <td class=" text-center">
                <input type="text" class="form-control input moneyFormat" readonly   name="" id="QuotationDetail_total_price_list${counter_alat}">
            </td>
            <td class=" text-center">
                <input type="text" class="form-control input moneyFormat" readonly   name="var[QuotationDetail][${counter_alat}][total]" id="QuotationDetail_total${counter_alat}">
            </td>
                <td class=" text-center">
                <textarea type="text" class="form-control input"    name="data[QuotationDetail][${counter_alat}][descr]" id="descr${counter_alat}">
                </textarea>

            </td>
             <td class=" text-center">
                <select  name="data[QuotationDetail][${counter_alat}][flag_insitu]" id="flag_insitu${counter_alat}" class="form-control input">
                    <option value="N">No</option>
                    <option value="Y">Yes</option>
                </select>
            </td>
             <td class=" text-center">
                <button type="button"  onclick="deleteAlat(${counter_alat})" class="btn btn-sm btn-danger" style="border-radius:25%;margin-top:2px;"><i class="fa fa-trash"></i></button>  
             </td>
        </tr>
        `;
        $('#selected_alat').append(newInputHtml);
        counter_alat++;
    }

    let counter_institue = 0;

    function appendInstitu(id,area,fee) {
        const newInputHtml = `
        <tr class="" class="odd" id="row_institu-${counter_institue}">
            <td id="nama_area" class=" text-center">
                <input id="QuotationDelivery_id${counter_institue}" value="${id}" class="hide" name="data[QuotationDelivery][${counter_institue}][delivery_id]"  />
                <input id="" type="text" class="form-control input moneyFormat" name="data[QuotationDelivery][${counter_institue}][delivery_name]" readonly value="${area}"  name="" id="">
            </td>
             <td class=" text-center">
                <input id="QuotationDelivery_fee${counter_institue}" type="text" class="form-control input moneyFormat" name="data[QuotationDelivery][${counter_institue}][fee]" readonly value="${moneyFormat(fee)}" >
            </td>
            <td class=" text-center">
                <input id="QuotationDelivery_day${counter_institue}" type="text" class="form-control input moneyFormat" name="data[QuotationDelivery][${counter_institue}][day]"  onkeyup="calculation_institu(${counter_institue})" >
            </td>
            <td class=" text-center">
                <input id="QuotationDelivery_diskon${counter_institue}" type="text" class="form-control input moneyFormat " name="data[QuotationDelivery][${counter_institue}][diskon]" onkeyup="calculation_institu(${counter_institue})" >
            </td>
            <td class=" text-center">
                <input id="QuotationDelivery_total${counter_institue}" type="text"  class="form-control input moneyFormat"  name="data[QuotationDelivery][${counter_institue}][total]" readonly >
            </td>
             <td  class=" text-center">
                <button type="button"  onclick="deleteInstitu(${counter_institue})" class="btn btn-sm btn-danger" style="border-radius:25%;margin-top:2px;"><i class="fa fa-trash"></i></button>  
            </td>
        </tr>    
        `
        $('#selected_institu').append(newInputHtml);

        counter_institue++
    }

    let counter_akomodasi=0;
    function appendAkomodasi(id,area,fee) {
        const newInputHtml = `
        <tr class="" class="odd" id="row_akomodasi-${counter_akomodasi}">
            <td  class=" text-center">
                <input class="hide" type="text" id="accommodation_name${counter_akomodasi}" name="data[QuotationAccommodation][${counter_akomodasi}][accommodation_name]" />

                <select onchange="select_akomodasi(${counter_akomodasi})" name="data[QuotationAccommodation][${counter_akomodasi}][accommodation_id]"  id="QuotationAccommodation_accommodation_id${counter_akomodasi}"  class="form-control input akomodasi_id">
                    <option>Pilih</option>
                    <?php foreach($akomodasi as $row): ?>
                        <option value="<?= $row->id ?>"> <?= $row->name ?></option>
                    <?php endforeach ?>
                </select>
            </td>
            <td class=" text-center">
                <input id="QuotationAccommodation_fee${counter_akomodasi}" type="text" class="form-control input moneyFormat" name="data[QuotationAccommodation][${counter_akomodasi}][nilai]""  onkeyup="calculation_akomodasi(${counter_akomodasi})" >
            </td>
            <td class=" text-center">
                <input id="QuotationAccommodation_diskon${counter_akomodasi}" type="text" class="form-control input moneyFormat" name="data[QuotationAccommodation][${counter_akomodasi}][diskon]" onkeyup="calculation_akomodasi(${counter_akomodasi})" >
            </td>
            <td class=" text-center">
                <input id="QuotationAccommodation_total${counter_akomodasi}" type="text"  class="form-control input moneyFormat" name="data[QuotationAccommodation][${counter_akomodasi}][total]" readonly >
            </td>
             <td  class=" text-center">
                <button type="button"  onclick="deleteAcomodation(${counter_akomodasi})" class="btn btn-sm btn-danger" style="border-radius:25%;margin-top:2px;"><i class="fa fa-trash"></i></button>  
            </td>
        </tr>    
        `
        $('#selected_akomodasi').append(newInputHtml);

        counter_akomodasi++
    }
    

    let list_total_alat = [];
    let list_price_alat = [];
    let list_qty_alat = [];
    let total_alat=0;


    let list_total_institu=[];
    let total_institu=0;
    
    let list_total_akomodasi=[];
    let total_akomodasi=0;

    let ppn;
    let grand_tot;
    let total_dpp=0;
    let max_success_fee = 15;




    function ppn_exc(){
        let exc_ppn = $('#exc_ppn').val();
        let total_alat = list_total_alat.reduce((a, b) => a + b, 0);
        if(exc_ppn == 'Y'){
            $('#ppn').val(0);
            $('#grand_tot').val(moneyFormat(total_alat+total_institu+total_akomodasi));
        }else{
            let prosen_ppn = $('#prosen_ppn').val();
            let ppn = Math.floor(parseFloat(total_alat+total_institu+total_akomodasi) * parseFloat(prosen_ppn) / 100);
            let grand_tot = Number(total_alat+total_institu+total_akomodasi) + ppn;
            $('#ppn').val(moneyFormat(ppn));
            $('#grand_tot').val(moneyFormat(grand_tot));
        }
    }

    function calculation_alat(id){
        // console.log('test');
        let exc_ppn = $('#exc_ppn').val();
console.log(exc_ppn);
        let price = 0;
        let dpp = 0;
        let discount = 0;
        let qty = 0;
        if(id != null){
            price = $('#QuotationDetail_price'+id).val().replace(/[^\d.]/g, '');
            dpp = $('#QuotationDetail_dpp'+id).val().replace(/[^\d.]/g, '');
            discount = $('#QuotationDetail_discount'+id).val().replace(/[^\d.]/g, '');
            qty = $('#QuotationDetail_qty'+id).val().replace(/[^\d.]/g, '');
        }
        let net_pcs = dpp - (dpp * (discount/100));
        let total_price_list = price * qty;
        let total = qty * net_pcs;
        let max_mark_up = Number(price)+(price * (30/100))
        
        list_total_alat[id]= total;
        list_price_alat[id] = Number(total_price_list);
        list_qty_alat[id] = Number(qty);

         total_alat = list_total_alat.reduce((a, b) => a + b, 0)
        let sum_price = list_price_alat.reduce((a, b) => a + b, 0)
        let sum_qty = list_qty_alat.reduce((a, b) => a + b, 0)
        let net_discount=0;
        let net_discount_prsnt=0;
        net_discount = sum_price - total_alat;
        net_discount_prsnt =Math.round( (sum_price-total_alat)/sum_price*100);
        
    
         max_success_fee =  Math.round(15 - net_discount_prsnt);
       
         total_dpp = Number(total_institu) + total_alat + total_akomodasi;
          ppn = Math.floor(parseFloat(total_dpp) * parseFloat(prosen_ppn) / 100);
         if(exc_ppn == 'Y'){
                ppn = 0;
         }
         grand_tot = Number(total_dpp) + ppn;


            if(net_discount_prsnt > 15){											
                swal({
                    title	: "Perhatian !",
                    text	: "Net diskon Tidak boleh lebih dari 15%",
                    type	: "warning"
                });
                $('#QuotationDetail_qty'+id).val(0)
                $('#QuotationDetail_discount'+id).val(0)

                console.log(net_discount_prsnt);
                // calculation_alat(id)
                return ;
            }
    
            // let value = moneyFormat($(this).val())
            if(dpp > max_mark_up){											
                swal({
                    title	: "Perhatian !",
                    text	: "Anda Tidak Boleh Menaikan Harga lebih dari 30%",
                    type	: "warning"
                });
                $('#QuotationDetail_dpp'+id).val($('#QuotationDetail_price'+id).val())
                calculation_alat(id)
                console.log($('#QuotationDetail_price'+id).val());
                return ;
            }
       
       
        
        $('#QuotationDetail_total_harga'+id).val(dpp * qty);
        $('#QuotationDetail_net_pcs'+id).val(moneyFormat(net_pcs));
        $('#QuotationDetail_total_price_list'+id).val(moneyFormat(total_price_list));
        $('#QuotationDetail_total'+id).val(moneyFormat(total));

        $('#ppn').val(moneyFormat(ppn));
        $('#grand_tot').val(moneyFormat(grand_tot));
        $('#total_dpp').val(moneyFormat(total_dpp));


        $('#tot_price').html(moneyFormat(sum_price));
        $('#tot_qty').html(moneyFormat(sum_qty));
        $('#tot_penawaran').html(moneyFormat(total_alat));
        $('#net_discount').html(parseFloat(net_discount).toLocaleString('en-US'));
        $('#net_discount_prsnt').html(parseFloat(net_discount_prsnt).toLocaleString('en-US')+' %');
        $('#lbl-max-fee').html(`Max Success Fee: ${max_success_fee}%`);

    }


    function calculation_institu(id){
        let exc_ppn = $('#exc_ppn').val();

        
        let price=0;
        let qty=0;
        let discount=0; 
        let total=0;
        if(id != null){
            price = $('#QuotationDelivery_fee'+id).val().replace(/[^\d.]/g, '');
            qty = $('#QuotationDelivery_day'+id).val().replace(/[^\d.]/g, '');
            discount = $('#QuotationDelivery_diskon'+id).val().replace(/[^\d.]/g, '');
            total =  price * qty - discount;
        }

        list_total_institu[id]=total;
        total_institu = list_total_institu.reduce((a, b) => a + b, 0);
        
        total_dpp =  Number(total_institu) + total_alat + total_akomodasi;
        ppn = Math.floor(parseFloat(total_dpp) * parseFloat(prosen_ppn) / 100);
        if(exc_ppn == 'Y'){
                ppn = 0;
         }
        grand_tot = Number(total_dpp) + ppn;

        $('#QuotationDelivery_total'+id).val(moneyFormat(total));
        $('#total_insitu').val(moneyFormat(total_institu));

        $('#ppn').val(moneyFormat(ppn));
        $('#grand_tot').val(moneyFormat(grand_tot));
        $('#total_dpp').val(moneyFormat(total_dpp));
    }

    function calculation_akomodasi(id){
        let exc_ppn = $('#exc_ppn').val();

      
        let price=0;
        let discount=0; 
        let total=0;
        if(id != null){
            price = $('#QuotationAccommodation_fee'+id).val().replace(/[^\d.]/g, '');
            discount = $('#QuotationAccommodation_diskon'+id).val().replace(/[^\d.]/g, '');
            total =  price - discount;
        }

        list_total_akomodasi[id]=total;
        total_akomodasi = list_total_akomodasi.reduce((a, b) => a + b, 0);
        
        total_dpp =  Number(total_institu) + total_alat + total_akomodasi ;
        ppn = Math.floor(parseFloat(total_dpp) * parseFloat(prosen_ppn) / 100);
        if(exc_ppn == 'Y'){
                ppn = 0;
         }
        grand_tot = Number(total_dpp) + ppn;

        $('#QuotationAccommodation_total'+id).val(moneyFormat(total));
        $('#total_akomodasi').val(moneyFormat(total_akomodasi));

        $('#ppn').val(moneyFormat(ppn));
        $('#grand_tot').val(moneyFormat(grand_tot));
        $('#total_dpp').val(moneyFormat(total_dpp));
    }


    function cust_fee(){
        $('#success_fee_rp').val()
        let success_fee = $('#success_fee').val();
        let success_fee_rp = total_alat * success_fee/100 ;
        if(!success_fee || success_fee < 0){
            $('#input-agent').hide();
            return;
        }
        console.log(success_fee +'|||'+ max_success_fee)

        if(success_fee > max_success_fee){											
			swal({
				title	: "Perhatian !",
				text	: `Success Tidah Boleh Lebih Dari ${max_success_fee}%`,
				type	: "warning"
			});
            $('#input-agent').hide();
            $('#success_fee').val(0)
            $('#success_fee_rp').val(0)

			return ;
		}
        
        $('#success_fee_rp').val(moneyFormat(success_fee_rp))
        $('#input-agent').show();
    }
    
    function moneyFormat(value){
        if(!value){
            return 0;
        }
        // Remove all non-digit characters (except for the decimal point)
        inputVal = value.toString().replace(/[^0-9.]/g, '');

        // Ensure only one decimal point
        const parts = inputVal.split('.');
        if (parts.length > 2) {
            inputVal = parts[0] + '.' + parts.slice(1).join('');
        }

        // Format the number
        inputVal = parseFloat(inputVal).toLocaleString('en-US', {
            minimumFractionDigits: 0,
            maximumFractionDigits: 2
        });

        return inputVal;
    }

    function deleteAlat(row){
        $('#row_alat-'+row).remove();
        delete list_total_alat[row];
        delete list_price_alat[row];
        delete list_qty_alat[row];
        $.each(list_total_alat, function(key, value) {
            if(value){
                calculation_alat(key)
            }
        });
        if (list_total_alat.reduce((a, b) => a + b, 0) == 0){
            calculation_alat(null)
            total_alat= 0;
        }
       
    }

    function deleteInstitu(row){
        $('#row_institu-'+row).remove();
        delete list_total_institu[row];
        $.each(list_total_institu, function(key, value) {
            if(value){
                calculation_institu(key)
            }
        });

        if (list_total_institu.reduce((a, b) => a + b, 0) == 0){
            calculation_institu(null)
            total_institu = 0;
        }
    }

    function deleteAcomodation(row){
        $('#row_akomodasi-'+row).remove();
        delete list_total_akomodasi[row];
        $.each(list_total_akomodasi, function(key, value) {
            if(value){
                calculation_akomodasi(key)
            }
        });

        if (list_total_akomodasi.reduce((a, b) => a + b, 0) == 0){
            calculation_akomodasi(null)
            total_akomodasi = 0;
        }
    }

    
    $(document).ready(function() {
        $(document).on('keyup', '.moneyFormat', function() {
            let value = moneyFormat($(this).val())
            $(this).val(value);
        });

        $(document).on('change', '#flag_insitu', function() {
            console.log($(this).val())
            if($(this).val() == 'Y'){
                $('#institu').show();
            }else{
                $('#institu').hide();
            }
        });
        $(document).on('change', '#flag_akomodasi', function() {
            console.log($(this).val())
            if($(this).val() == 'Y'){
                $('#akomodasi').show();
            }else{
                $('#akomodasi').hide();
            }
        });

      
    });

    function select_akomodasi(id){
        let text = $('#QuotationAccommodation_accommodation_id'+id+" option:selected").text();
        // console.log(text)
        $('#accommodation_name'+id).val(text);
    }


    function postQuotation(type){
       
       
        if($('#pic_name').val() =='' || $('#pic_name').val()==null){
            swal({
                title	: "Error Message!",
                text	: 'Empty Customer Name. Please Choose Customer First.....',
                type	: "warning"
            });
            return false;
        }

        if(max_success_fee > 15){											
			swal({
				title	: "Perhatian !",
				text	: `Max Success Tidah Boleh Lebih Dari 15%`,
				type	: "warning"
			});
			return ;
		}

        if($('#member_name').val() =='' || $('#member_name').val()==null){
            swal({
                title	: "Error Message!",
                text	: 'Empty Marketing Name. Please Choose Marketing First.....',
                type	: "warning"
            });
            return false;
        }

        if($('#member_name').val() =='' || $('#member_name').val()==null){
            swal({
                title	: "Error Message!",
                text	: 'Empty Marketing Name. Please Choose Marketing First.....',
                type	: "warning"
            });
            return false;
        }

        if($('#code_narration').val() =='' || $('#code_narration').val()==null){
            swal({
                title	: "Error Message!",
                text	: 'Empty Quotation Narrative. Please Choose Quotation Narrative First.....',
                type	: "warning"
            });
            return false;
        }

        var record	= $('#selected_alat').find('tr').length;
        if(record==0 || record==null){
            swal({
                title	: "Error Message!",
                text	: 'No Tool Data Was Selected. Please Choose At Least One Tool.....',
                type	: "warning"
            });
            // $('#btn-back, #btn-submit').prop('disabled',false);
            return false;
        }

        var ints		=0;
        var f_insitu	=0;
        $('#selected_alat').find('tr').each(function(){
            var nil			= $(this).attr('id');
            var jum			= nil.split('-');
            var kode		= parseInt($('#QuotationDetail_qty'+jum[1]).val());
            console.log(kode)
            var sts_insitu	= $('#flag_insitu'+jum[1]).val();
            if(kode==0){					
                ints++;
            }
            
            if(sts_insitu=='Y'){
                f_insitu++;
            }
        });

        if(ints > 0){
            swal({
                title	: "Error Message!",
                text	: 'Qty Tool Cant Be Null. Please Input Qty At Least 1.....',
                type	: "warning"
            });
            return false;
        }

           
       

        var data_insitu	= $('#selected_institu').find('tr').length;
        if(parseInt(data_insitu) > 0){
            var intD	=0;
            var intQ	=0;
            $('#selected_institu').find('tr').each(function(){
                var kode_ins	= $(this).attr('id');
                var jum_ins		= kode_ins.split('-');
                var delivery_id	= $('#QuotationDelivery_id'+jum_ins[1]).val();
                var hari		= $('#QuotationDelivery_day'+jum_ins[1]).val();
                if(delivery_id==null || delivery_id==''){
                    intD++;
                }
                if(hari==0 || hari==null || hari==''){
                    intQ++;
                }
            });
            
            if(intD > 0){
                swal({
                    title	: "Error Message!",
                    text	: 'Empty Area Insitu. Please Choose Area Insitu First.......',
                    type	: "warning"
                });
                return false;
            }
            if(intQ > 0){
                swal({
                    title	: "Error Message!",
                    text	: 'Empty Insitu Day. Please Input Insitu Day.......',
                    type	: "warning"
                });
                return false;
            }
            
        }

        if((f_insitu > 0 && parseInt(data_insitu) < 1) || (f_insitu == 0 && parseInt(data_insitu) > 0)){
            swal({
                title	: "Error Message!",
                text	: 'Empty Insitu Area Or Insitu Tool. Please Set Insitu Tool Or Add Insitu Data.......',
                type	: "warning"
            });
            $('#btn-back, #btn-submit').prop('disabled',false);
            return false;
        }

        var data_akomodasi	= $('#selected_akomodasi').find('tr').length;
        if(parseInt(data_akomodasi) > 0){
            var intA	=0;
            var intF	=0;
            $('#selected_akomodasi').find('tr').each(function(){
                var kode_akom		= $(this).attr('id');
                var jum_akom		= kode_akom.split('-');
                var akomodasi_id	= $('#QuotationAccommodation_accommodation_id'+jum_akom[1]).val();
                var fee				= $('#QuotationAccommodation_fee'+jum_akom[1]).val().replace(/\,/g,'');
                if(akomodasi_id==null || akomodasi_id==''){
                    intA++;
                }
                if(fee==0 || fee==null || fee==''){
                    intF++;
                }
            });
            
            if(intA > 0){
                swal({
                    title	: "Error Message!",
                    text	: 'Empty Accommodation Type. Please Choose Accommodation Type First.......',
                    type	: "warning"
                });
                return false;
            }
            if(intF > 0){
                swal({
                    title	: "Error Message!",
                    text	: 'Empty Accommodation Value. Please Input Accommodation Value.........',
                    type	: "warning"
                });
                return false;
            }
        }

        
       
        
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
            // Get the current value
            let value = $(this).val();
            // Remove commas
            value = value.replace(/,/g, '');
            // Update the input field
            $(this).val(value);
        });
        let formData 	= new FormData($('#form-proses')[0]);
        let url = `<?php echo site_url('Schedule_rekalibrasi_kalibrator/postQuotation') ?>/${type}`;
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
                        if(data.status == 'error'){
                            $.each(data.message, function(key, value) {
                                $('#err-' + key).html(value);
                            });
                            return;
                        }
                        swal({
                            title	: "Save Success!",
                            text	: data.message,
                            type	: "success"
                        });
                        window.location.replace("<?php echo site_url('schedule_rekalibrasi_kalibrator') ?>");

                    }
                });    
            }, 50);
        });
    }
</script>
