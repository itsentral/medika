<?php
$ENABLE_ADD     = has_permission('Supplier.Add');
$ENABLE_MANAGE  = has_permission('Supplier.Manage');
$ENABLE_DELETE  = has_permission('Supplier.Delete');
?>

<div class="py-3">
    <h2 class="fw-extrabold text-center"><?= $template['title']; ?></h2>
</div>

<div class="d-flex justify-content-between align-items-center">
    <div class="">
        <a class="btn btn-primary rounded-pill" href="<?= base_url('paket_mcu/create') ?>" title="Add"> <i class="fa fa-plus">&nbsp;</i>Tambah Paket MCU</a>
        <?php if ($ENABLE_ADD) : ?>
        <?php endif; ?>
    </div>
    <div class="">
        <div class="form-group row">
            <div class="input-group">
                <span class="input-group-text"><i class="fa fa-search"></i></span>
                <input type="text" id="search" name="search" class="form-control input-sm col-md-6" tabindex="-1" placeholder="Cari">
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body p-0 overflow-hidden rounded">
        <table id="dt-paket-mcu" class="table my-0 display table-bordered table-striped">
            <thead class="bg-primary">
                <tr>
                    <th width="20">#</th>
                    <th>Nama Paket</th>
                    <th>Description</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th width="25">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $record) : $numb++; ?>
                    <tr>
                        <td><?= $numb; ?></td>
                        <td><?= $record->name ?></td>
                        <td><?= $record->description ?></td>
                        <td><?= $record->price ?></td>
                        <td>
                            <?php if ($record->status == 1) : ?>
                                <label class="label label-success"><?= lang('supplier_active') ?></label>
                            <?php else : ?>
                                <label class="label label-danger"><?= lang('supplier_inactive') ?></label>
                            <?php endif; ?>
                        </td>
                        <td><a class="text-black" href="<?= site_url('paket_mcu/edit/' . $record->id); ?>" data-toggle="tooltip" data-placement="left" title="Edit Data"><i class="fa fa-pencil"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready(function() {
        let table = new DataTable('#dt-paket-mcu');
    });
</script>