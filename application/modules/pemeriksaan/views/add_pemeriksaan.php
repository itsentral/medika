<?php
$id_kategori = (isset($data_pemeriksaan) && !empty($data_pemeriksaan)) ? $data_pemeriksaan->id_kategori : '';
$nm_kelompok = (isset($data_pemeriksaan) && !empty($data_pemeriksaan)) ? $data_pemeriksaan->nm_kelompok_pemeriksaan : '';
$nm_pemeriksaan = (isset($data_pemeriksaan) && !empty($data_pemeriksaan)) ? $data_pemeriksaan->nm_pemeriksaan : '';
?>
<link href="<?= base_url('assets/css/chosen.min.css') ?>" rel="stylesheet" />
<input type="hidden" name="id" value="<?= $id ?>">
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Kategori <span class="text-danger">*</span></label>
            <select name="kategori" class="form-control form-control-sm select2 change_kategori" required>
                <option value="">- Choose Kategori -</option>
                <?php
                foreach ($list_kategori as $item) {
                    $selected = '';
                    if ($id_kategori == $item->id_kategori) {
                        $selected = 'selected';
                    }

                    echo '<option value="' . $item->id_kategori . '" ' . $selected . '>' . $item->nama_kategori . '</option>';
                }
                ?>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Nama Kelompok Pemeriksaan <span class="text-danger">*</span></label>
            <select name="kelompok_pemeriksaan" class="form-control form-control-sm select2" required>
                <option value="">- Choose Kelompok Pemeriksaan -</option>
                <?php
                if (isset($list_kelompok_pemeriksaan)) {
                    foreach ($list_kelompok_pemeriksaan as $item) {
                        $selected = '';
                        if ($item->id == $data_pemeriksaan->id_kelompok_pemeriksaan) {
                            $selected = 'selected';
                        }
                        echo '<option value="' . $item->id . '" ' . $selected . '>' . $item->nm_kelompok . '</option>';
                    }
                }
                ?>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Pemeriksaan <span class="text-danger">*</span></label>
            <input type="text" name="pemeriksaan" id="" class="form-control form-control-sm" value="<?= $nm_pemeriksaan ?>" required>
        </div>
    </div>
</div>
<script src="<?= base_url('assets/js/chosen.jquery.min.js') ?>"></script>

<script>
    $(document).ready(function() {
        $('.select2').chosen({
            width: '100%'
        });
    });

    $(document).on('change', '.change_kategori', function() {
        var id_kategori = $(this).val();

        $.ajax({
            type: 'post',
            url: siteurl + active_controller + 'change_kategori',
            data: {
                'id_kategori': id_kategori
            },
            cache: false,
            success: function(result) {
                $('select[name="kelompok_pemeriksaan"]').html(result);
                $('select[name="kelompok_pemeriksaan"]').trigger('chosen:updated');
            },
            error: function(result) {
                swal({
                    icon: 'error',
                    title: 'Error !',
                    text: 'Please try again later !',
                    buttons: false,
                    closeOnOutsideClick: false,
                    timer: 3000
                });
            }
        });
    });
</script>