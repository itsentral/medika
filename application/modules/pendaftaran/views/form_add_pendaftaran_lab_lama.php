<?php
    $ENABLE_ADD     = has_permission('Pendaftaran.Add');
    $ENABLE_MANAGE  = has_permission('Pendaftaran.Manage');
    $ENABLE_VIEW    = has_permission('Pendaftaran.View');
    $ENABLE_DELETE  = has_permission('Pendaftaran.Delete');
?>
<style type="text/css">
thead input {
    width: 100%;
}
</style>
<div id='alert_edit' class="alert alert-success alert-dismissable" style="padding: 15px; display: none;"></div>
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables/dataTables.bootstrap.css')?>">

<?php if(empty($results)){
		}
		else
		{
		foreach($results AS $record){ 
		} 
		}  
?>

<div class="card card-blue">
    <!-- /.card-header -->
    <div class="card-body">
        <font size="2">
            <div id="data_custommer">
                <form id="data_form">
                    <div class="card card-blue">

                        <legend>
                            <h5><b>
                                    <font color="blue">Form Data Pasien</font>
                                </b></h5>
                        </legend>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="">No Rekam Medis</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-sm" id="no_rm" name="no_rm"
                                            placeholder="No Rekam Medis" value="<?= $record->medrec ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="">Nama Pasien</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-sm" id="nama" name="nama" 
                                            placeholder="Nama Pasien" value="<?= $record->nama_pasien ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="">Titel</label>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control input-sm" id="titel" name="titel"
                                            value="<?= $record->status_pasien?>" readonly>
                                            <option value=".Tn">Tn</option>
                                            <option value=".Ny">Ny</option>
                                            <option value=".Nn">Nn</option>
                                            <option value=".An">An</option>
                                            <option value=".By">By</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="">Jenis Kelamin</label>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control input-sm" id="jenis_kelamin" name="jenis_kelamin"
                                            value="<?= $record->jenis_kelamin ?>" readonly>
                                            <option value="L">Laki-Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="">Tanggal Lahir</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-sm" id="tgl_lahir" name="tgl_lahir"
                                            placeholder="Tanggal Lahir" value="<?= $record->tgl_lahir ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="">Agama</label>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control input-sm" id="agama" name="agama"
                                            value="<?= $record->agama ?>" readonly>
                                            <option value='Islam'>Islam</option>
                                            <option value='Kristen'>Kristen</option>
                                            <option value='Katolik'>Katolik</option>
                                            <option value='Hindu'>Hindu</option>
                                            <option value='Budha'>Budha</option>
                                            <option value='Khong Hu Cu'>Khong Hu Cu</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="">Provinsi</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="provinsi" name="provinsi" class="form-control input-sm "
                                            value="<?= $record->nama_prov ?>"  readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="">Kabupaten/Kota</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="kota" name="kota" class="form-control input-sm "
                                            value="<?= $record->nama_kab ?>"  readonly>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="">Kecamatan</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="kecamatan" name="kecamatan"
                                            class="form-control input-sm " value="<?= $record->nama_kec ?>" 
                                            readonly>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="">Kelurahan</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="kelurahan" name="kelurahan"
                                            class="form-control input-sm " value="<?= $record->nama_kel ?>" 
                                            readonly>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="">Alamat Lengkap</label>
                                    </div>
                                    <div class="col-md-6">
                                        <textarea type="text" class="form-control input-sm" id="alamat" name="alamat"
                                            placeholder="Alamat" readonly><?= $record->alamat ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="">No Telp Pasien</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-sm" id="telp_pasien"
                                            name="telp_pasien" placeholder="No Telp Pasien"
                                            value="<?= $record->telp_pasien ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="">Penanggung Jawab</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-sm" id="pj" name="pj"
                                            placeholder="Penanggung Jawab" value="<?= $record->penanggung_jawab ?>"
                                            readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="">No Telp PJ</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-sm" id="telp_pj" name="telp_pj"
                                            placeholder="No Telp Penanggung Jawab" value="<?= $record->telp_pj ?>"
                                            readonly>
                                    </div>
                                </div>

                                <div class="form-group row" hidden>
                                    <div class="col-md-4">
                                        <label for="">Cara Daftar</label>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control input-sm select2" id="daftar" name="daftar">
                                            <option value='1'>Datang</option>
                                            <option value='2'>Via Telp</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="">Rujukan</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-sm" id="rujukan" name="rujukan"
                                            placeholder="Rujukan" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="">Departemen</label>
                                    </div>
                                    <div class="col-md-6">
                                        <select id="departemen" name="departemen" class="form-control input-sm select2"
                                            readonly ">
                                            <?php foreach ($datdept as $key => $st) : ?>
                                            <option value="<?= $st->id_departemen; ?>"
                                                <?= set_select('departemen', $st->id_departemen, isset($data->nama_departemen) && $data->nama_departemen == $st->id_departemen) ?>>
                                                <?= strtoupper($st->nama_departemen); ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="">Dokter</label>
                                    </div>
                                    <div class="col-md-6">
                                        <select id="dokter" name="dokter" class="form-control input-sm select2" readonly
                                            >
                                            <option value="luar">UMUM</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="card card-blue">

                            <legend>
                                <h5><b>
                                        <font color="blue">Form Jaminan/Asuransi</font>
                                    </b></h5>
                            </legend>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="">Penjamin</label>
                                        </div>
                                        <div class="col-md-6">
                                            <select id="penjamin" name="penjamin" class="form-control input-sm select2"
                                                 onchange="get_customer()">
                                                <option value=""></option>
                                                <?php foreach ($datcust as $key => $st) : ?>
                                                <option value="<?= $st->kode_jaminan; ?>"
                                                    <?= set_select('penjamin', $st->kode_jaminan, isset($data->nama_combobox) && $data->nama_combobox == $st->kode_jaminan) ?>>
                                                    <?= strtoupper($st->nama_combobox); ?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="">Nama Jaminan</label>
                                        </div>
                                        <div class="col-md-6">
                                            <select id="nama_jaminan" name="nama_jaminan"
                                                class="form-control input-sm select2" >
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="">No Surat/SEP/SJP</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control input-sm" id="no_sep" name="no_sep"
                                                placeholder="No Surat/SEP/SJP" value="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="">Asal PPK/Faskes</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control input-sm" id="faskes" name="faskes"
                                                 placeholder="Asal PPK/Faskes" value="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="">NIK</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control input-sm" id="nik" name="nik"
                                                 placeholder="NIK" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="">Wilayah/Cabang</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control input-sm" id="wilayah" name="wilayah"
                                                 placeholder="Wilayah" value="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="">Nama Karyawan</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control input-sm" id="karyawan"
                                                name="karyawan"  placeholder="Karyawan" value="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="">Bagian</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control input-sm" id="bagian" name="bagian"
                                                 placeholder="Bagian" value="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="">Yang Berobat</label>
                                        </div>
                                        <div class="col-md-6">
                                            <select class="form-control input-sm select2" id="berobat" name="berobat">
                                                <option value='D'>Diri Sendiri</option>
                                                <option value='S'>Suami</option>
                                                <option value='I'>Istri</option>
                                                <option value='A'>Anak</option>
                                                <option value='O'>Orang Tua</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="">Plafon</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control input-sm" id="plafon" name="plafon"
                                                placeholder="Plafon" value="">
                                        </div>
                                    </div>

                                </div>
                            </div>



                            <div class="card card-blue">
                                <legend>
                                    <h5><b>
                                            <font color="blue">Form Pemeriksaan</font>
                                        </b></h5>
                                </legend>
                                <div class="col-md-2" id="fortombol">
                                    <button type='button' class='btn btn-sm btn-success' title='Ambil' id='tbh_ata'
                                        onClick="addPO('1');"><i class='fa fa-plus'></i>Tambah Pemeriksaan</button>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">

                                        <div class="form-group row" id="Form_Po">

                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <center>
<<<<<<< HEAD
                                <button type="button" class="btn btn-success btn-sm" name="simpan-com" id="simpan-com"><i
=======
                                <button type="submit" class="btn btn-success btn-sm" name="save" id="save"><i
>>>>>>> 6576d6e (update layanan)
                                        class="fa fa-save"></i>Simpan</button>
                                <button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-close"></i>
                                    Cancel</button>
                                <a class="btn btn-warning btn-sm" href="<?= base_url('pendaftaran') ?>" title="Back"> <i
                                        class="fa fa-reply">&nbsp;</i>Back</a>
                            </center>
                </form>

        </font>
    </div>
    <!-- /.card-body -->
</div>



<!-- DataTables -->
<script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/datatables/dataTables.bootstrap.min.js')?>"></script>

<!-- sebelum script utama -->
<script type="text/javascript">
<<<<<<< HEAD
    var siteurl = "<?= site_url(); ?>";
    var base_url = "<?= base_url(); ?>";
    var active_controller = "pendaftaran";
</script>

<script type="text/javascript">
$('#simpan-com').click(function(e) {
    e.preventDefault();
=======
$(function() {
    $('.select2').select2();
});

//TAMBAH PEMERIKSAAN

function addPO(id) {
    var id_suplier = $("#id_suplier").val();
    $.ajax({
        type: "GET",
        url: siteurl + 'pendaftaran/FormPo',
        data: "id_suplier=" + id_suplier + "&id=" + id,
        success: function(html) {
            $("#Form_Po").append(html);
            $(".bilangan-desimal").maskMoney();
            $(".chosen-select").select2({
                width: '100%'
            });
        }
    });
    $.ajax({
        type: "GET",
        url: siteurl + 'pendaftaran/GantiTombol',
        data: "&id=" + id,
        success: function(html) {
            $("#fortombol").html(html);
        }
    });
}

function HapusItem(id) {

    $('#Form_Po #po_' + id).remove();

}
// ADD CUSTOMER 
$(document).on('submit', '#data_form', function(e) {
    e.preventDefault();
    var data = $('#data_form').serialize();

>>>>>>> 6576d6e (update layanan)
    swal({
        title: "Are you sure?",
        text: "You will not be able to process again this data!",
        icon: "warning",
        buttons: {
            cancel: {
                text: "No, cancel process!",
                value: null,
                visible: true,
                className: "btn-danger",
                closeModal: true,
            },
            confirm: {
                text: "Yes, Process it!",
                value: true,
                visible: true,
                className: "btn-success",
                closeModal: true
            }
        },
        dangerMode: true,
    }).then((isConfirm) => {
        if (isConfirm) {
<<<<<<< HEAD
            var formData = new FormData($('#data_form')[0]);
            for (var pair of formData.entries()) {
                console.log(pair[0] + ': ' + pair[1]);
            }

            $.ajax({
                url: siteurl + "pendaftaran/savePendaftaranLab_Lama",
                type: "POST",
                data: formData,
                dataType: 'json',
                cache: false,
                processData: false,
                contentType: false,
                success: function(data) {
                    if (data.status == 1) {
                        swal({
                            title: "Save Success!",
                            text: data.pesan,
                            icon: "success",
                            button: false,
                            timer: 3000
                        });
                        setTimeout(function() {
                            window.location.href = base_url + active_controller;
                        }, 3000);
                    } else {
                        swal("Save Failed!", data.pesan, "warning");
                    }
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                    swal("Error!", "An error occurred during process. Please try again.", "error");
=======
            $.ajax({
                type: 'POST',
                url: siteurl + 'pendaftaran/savePendaftaranRj_Lama',
                dataType: "json",
                data: data,
                success: function(result) {
                    if (result.status == '1') {
                        swal({
                            title: "Sukses",
                            text: "Data berhasil disimpan.",
                            icon: "success"
                        }).then(() => {
                            window.location.href = siteurl + 'pendaftaran/list_pasienlab';
                        });
                    } else {
                        swal({
                            title: "Error",
                            text: "Data error. Gagal insert data",
                            icon: "error"
                        });
                    }
                },
                error: function() {
                    swal({
                        title: "Error",
                        text: "Data error. Gagal request Ajax",
                        icon: "error"
                    });
>>>>>>> 6576d6e (update layanan)
                }
            });
        } else {
            swal("Cancelled", "Data can be processed again :)", "error");
        }
    });
});


<<<<<<< HEAD
$(function() {
    $('.select2').select2();
});

//TAMBAH PEMERIKSAAN

function addPO(id) {
    var id_suplier = $("#id_suplier").val();
    $.ajax({
        type: "GET",
        url: siteurl + 'pendaftaran/FormPo',
        data: "id_suplier=" + id_suplier + "&id=" + id,
        success: function(html) {
            $("#Form_Po").append(html);           
        }
    });
    $.ajax({
        type: "GET",
        url: siteurl + 'pendaftaran/GantiTombol',
        data: "&id=" + id,
        success: function(html) {
            $("#fortombol").html(html);
        }
    });
}

function HapusItem(id) {

    $('#Form_Po #po_' + id).remove();

}
// ADD CUSTOMER 



=======
>>>>>>> 6576d6e (update layanan)
/*$("#tgl_lahir").datepicker({
    format: "dd-mm-yyyy",
    showInputs: true,
    autoclose: true,
    todayHighlight: true,
    //startDate: "dateToday"
});*/


function get_dokter() {
    var dept = $("#departemen").val();
    var hari = $("#jadwal").val();
    var jam = $("#jam").val();
    $.ajax({
        type: "GET",
        url: siteurl + "pendaftaran/get_dokter",
        data: "dept=" + dept + "&hari=" + hari + "&jam=" + jam,
        success: function(html) {
            $("#dokter").html(html);
        }
    });
}

function get_customer() {
    var cust = $("#penjamin").val();
    $.ajax({
        type: "GET",
        url: siteurl + "pendaftaran/get_jaminan",
        data: "cust=" + cust,
        success: function(html) {
            $("#nama_jaminan").html(html);
        }
    });
}

function get_jadwal() {
    var dept = $("#departemen").val();
    $.ajax({
        type: "GET",
        url: siteurl + "pendaftaran/get_jadwal",
        data: "dept=" + dept,
        success: function(html) {
            $("#jadwal").html(html);
        }
    });
}

function get_jam() {
    var dept = $("#departemen").val();
    var hari = $("#jadwal").val();
    $.ajax({
        type: "GET",
        url: siteurl + "pendaftaran/get_jam",
        data: "dept=" + dept + "&hari=" + hari,
        success: function(html) {
            $("#jam").html(html);
        }
    });
}

function cek_dokter() {
    var rm = $("#no_rm").val();
    var dept = $("#departemen").val();
    var hari = $("#jadwal").val();
    var jam = $("#jam").val();
    var dokter = $("#dokter").val();

    $.ajax({
        type: "GET",
        dataType: "json",
        url: siteurl + "pendaftaran/cek_dokter",
        data: "dept=" + dept + "&hari=" + hari + "&jam=" + jam + "&rm=" + rm + "&dokter=" + dokter,
        success: function(result) {

            if (result.status == '1') {
                swal({

                        title: "Pasien Sudah Terdaftar",
                        text: "Silahkan Pilih Jadwal Yang Lain.",
                        type: "warning",
                    },
                    function() {
                        window.location.reload(true);
                    })

            } else {


            }
        }
    });

}


function PreviewPdf(id) {
    param = id;
    tujuan = 'customer/print_request/' + param;

    $(".modal-body").html('<iframe src="' + tujuan + '" frameborder="no" width="570" height="400"></iframe>');
}

function PreviewRekap() {
    tujuan = 'customer/rekap_pdf';
    $(".modal-body").html('<iframe src="' + tujuan + '" frameborder="no" width="100%" height="400"></iframe>');
}

function getKategori(id) {
		var nomor = Number(id);
		var nopo = $("#dt_nopo_" + nomor).val();
		var no = $("#pancingan_" + nomor).val();
		// console.log(nomor)
		$.ajax({
			type: "GET",
			url: siteurl + 'pendaftaran/get_layanan',
			data: "kategori=" + nopo + "&id=" + nomor + "&no=" + no,
			success: function(html) {
				$("#dt_layanan_" + nomor).html(html);
				
			}
		});
	}
    
    function getParameter(id) {
		var nomor = Number(id);
		var kategori = $("#dt_nopo_" + nomor).val();
        var layanan = $("#dt_layanan_" + nomor).val();
		var no = $("#pancingan_" + nomor).val();
		// console.log(nomor)
		$.ajax({
			type: "GET",
			url: siteurl + 'pendaftaran/get_parameter',
			data: "kategori=" + kategori + "&kategori2=" + layanan + "&id=" + nomor + "&no=" + no,
			success: function(html) {
				$("#data_request_" + nomor).html(html);
				
			}
		});
	}
</script>