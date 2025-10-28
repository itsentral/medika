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
       
            <div id="data_custommer">
               <form id="data_form" method="post" enctype="multipart/form-data">
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
                                        <label for="no_rm">No Rekam Medis</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-sm" id="no_rm" name="no_rm"
                                            placeholder="No Rekam Medis" value="<?= $record->medrec ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="nama">Nama Pasien</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-sm" id="nama" name="nama" 
                                            placeholder="Nama Pasien" value="<?= $record->nama_pasien ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="titel">Titel</label>
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
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
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
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-sm" id="tgl_lahir" name="tgl_lahir"
                                            placeholder="Tanggal Lahir" value="<?= $record->tgl_lahir ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="agama">Agama</label>
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
                                        <label for="provinsi">Provinsi</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="provinsi" name="provinsi" class="form-control input-sm "
                                            value="<?= $record->nama_prov ?>"  readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="kota">Kabupaten/Kota</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="kota" name="kota" class="form-control input-sm "
                                            value="<?= $record->nama_kab ?>"  readonly>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="kecamatan">Kecamatan</label>
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
                                        <label for="kelurahan">Kelurahan</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="kelurahan" name="kelurahan"
                                            class="form-control input-sm " value="<?= $record->nama_kel ?>" 
                                            readonly>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="alamat">Alamat Lengkap</label>
                                    </div>
                                    <div class="col-md-6">
                                        <textarea type="text" class="form-control input-sm" id="alamat" name="alamat"
                                            placeholder="Alamat" readonly><?= $record->alamat ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="telp_pasien">No Telp Pasien</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-sm" id="telp_pasien"
                                            name="telp_pasien" placeholder="No Telp Pasien"
                                            value="<?= $record->telp_pasien ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="pj">Penanggung Jawab</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-sm" id="pj" name="pj"
                                            placeholder="Penanggung Jawab" value="<?= $record->penanggung_jawab ?>"
                                            readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="telp_pj">No Telp PJ</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-sm" id="telp_pj" name="telp_pj"
                                            placeholder="No Telp Penanggung Jawab" value="<?= $record->telp_pj ?>"
                                            readonly>
                                    </div>
                                </div>

                                <div class="form-group row" hidden>
                                    <div class="col-md-4">
                                        <label for="daftar">Cara Daftar</label>
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
                                        <label for="rujukan">Rujukan</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-sm" id="rujukan" name="rujukan"
                                            placeholder="Rujukan" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="departemen">Departemen</label>
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
                                        <label for="dokter">Dokter</label>
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
                                            <label for="penjamin">Penjamin</label>
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
                                            <label for="nama_jaminan">Nama Jaminan</label>
                                        </div>
                                        <div class="col-md-6">
                                            <select id="nama_jaminan" name="nama_jaminan"
                                                class="form-control input-sm select2" >
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="no_sep">No Surat/SEP/SJP</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control input-sm" id="no_sep" name="no_sep"
                                                placeholder="No Surat/SEP/SJP" value="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="faskes">Asal PPK/Faskes</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control input-sm" id="faskes" name="faskes"
                                                 placeholder="Asal PPK/Faskes" value="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="nik">NIK</label>
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
                                            <label for="wilayah">Wilayah/Cabang</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control input-sm" id="wilayah" name="wilayah"
                                                 placeholder="Wilayah" value="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="karyawan">Nama Karyawan</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control input-sm" id="karyawan"
                                                name="karyawan"  placeholder="Karyawan" value="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="bagian">Bagian</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control input-sm" id="bagian" name="bagian"
                                                 placeholder="Bagian" value="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="berobat">Yang Berobat</label>
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
                                            <label for="plafon">Plafon</label>
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
                           
                                <button type="button" class="btn btn-success btn-sm" name="simpan-com" id="simpan-com"><i
                                        class="fa fa-save"></i>Simpan</button>
                                <button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-close"></i>
                                    Cancel</button>
                                <a class="btn btn-warning btn-sm" href="<?= base_url('pendaftaran') ?>" title="Back"> <i
                                        class="fa fa-reply">&nbsp;</i>Back</a>
                            
                </form>
            </div>
       
    </div>
    <!-- /.card-body -->
</div>



<!-- DataTables -->
<script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/datatables/dataTables.bootstrap.min.js')?>"></script>

<!-- sebelum script utama -->
<script type="text/javascript">
    var siteurl = "<?= site_url(); ?>";
    var base_url = "<?= base_url(); ?>";
    var active_controller = "pendaftaran";
</script>

<script type="text/javascript">
$('#simpan-com').click(function (e) {
    e.preventDefault();

    swal({
        title: "Apakah Anda yakin?",
        text: "Data akan disimpan ke sistem.",
        icon: "warning",
        buttons: ["Batal", "Ya, Simpan!"],
        dangerMode: true,
    }).then((isConfirm) => {
        if (!isConfirm) return;

        // Pastikan form ada
        var form = $('#data_form')[0];
        if (!form) {
            swal("Error!", "Form tidak ditemukan di halaman.", "error");
            return;
        }

        // Ambil isi form
        var formData = new FormData(form);

        // Debug: lihat isi FormData di console
        console.log("=== ISI FORM DATA ===");
        for (var [key, value] of formData.entries()) {
            console.log(key + ": " + value);
        }

        // Kirim via AJAX
        $.ajax({
            url: siteurl + 'pendaftaran/savePendaftaranLab_Lama',
            type: 'POST',
            data: formData,
            dataType: 'json',
            processData: false,
            contentType: false,
            cache: false,
            success: function (data) {
                if (data.status == 1) {
                    swal({
                        title: "Berhasil!",
                        text: data.pesan,
                        icon: "success",
                        timer: 2500,
                        button: false
                    });
                    setTimeout(function () {
                        window.location.href = base_url + active_controller;
                    }, 2500);
                } else {
                    swal("Gagal!", data.pesan, "warning");
                }
            },
            error: function (xhr, status, error) {
                console.error("Error:", xhr.responseText);
                swal("Error!", "Terjadi kesalahan koneksi atau server.", "error");
            }
        });
    });
});


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