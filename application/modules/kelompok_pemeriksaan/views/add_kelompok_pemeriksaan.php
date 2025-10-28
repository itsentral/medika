<?php
$id_kategori = (isset($header) && !empty($header)) ? $header->id_kategori : '';
$nm_kelompok = (isset($header) && !empty($header)) ? $header->nm_kelompok : '';
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" rel="stylesheet" />
<input type="hidden" name="id" value="<?= $id ?>">
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Kategori <span class="text-danger">*</span></label>
            <select name="kategori" class="form-control form-control-sm select2" required>
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
            <input type="text" name="nm_kelompok_pemeriksaan" id="" class="form-control form-control-sm" value="<?= $nm_kelompok ?>" required>
            </div>
        </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $('.select2').chosen({
            width: '100%'
        });
    });
</script>