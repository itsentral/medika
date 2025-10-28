<?php
$ENABLE_ADD     = has_permission('Kelompok_Pemeriksaan.Add');
$ENABLE_MANAGE  = has_permission('Kelompok_Pemeriksaan.Manage');
$ENABLE_VIEW    = has_permission('Kelompok_Pemeriksaan.View');
$ENABLE_DELETE  = has_permission('Kelompok_Pemeriksaan.Delete');
?>
<style type="text/css">
    thead input {
        width: 100%;
    }
</style>
<div id='alert_edit' class="alert alert-success alert-dismissable" style="padding: 15px; display: none;"></div>
<link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.dataTables.min.css">

<div class="box">
    <div class="box-header">
        <span class="pull-left">
            <?php if ($ENABLE_ADD) : ?>
                <!-- <a class="btn btn-success btn-sm" href="<?= base_url('consumable/add') ?>" title="Add"> <i class="fa fa-plus">&nbsp;</i>Add</a> -->
                <button type="button" class="btn btn-sm btn-success" onclick="add();"><i class="fa fa-plus"></i> Add</button>
            <?php endif; ?>
        </span>

    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead class="bg-blue">
                <tr>
                    <th>#</th>
                    <th>Kategori</th>
                    <th>Kelompok Pemeriksaan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>


<div class="modal modal-default fade" id="dialog-popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style='width:70%; '>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel"><span class="fa fa-users"></span>&nbsp;Detail Data</h4>
            </div>
            <form id="frm-data" method="post">
                <div class="modal-body" id="ModalView">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" onclick="close_modal();"><i class="fa fa-arrow-left"></i> Back</button>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Save</button>
                </div>
            </form>
        </div>
    </div>

    <!-- DataTables -->
    <script src="https://cdn.datatables.net/2.3.4/js/dataTables.min.js"></script>

    <!-- page script -->
    <script type="text/javascript">
        $(document).ready(function() {
            DataTables();
        });

        $(document).on('submit', '#frm-data', function(e) {
            e.preventDefault();

            swal({
                icon: 'warning',
                title: 'Are you sure ?',
                text: 'This data will be saved !',
                dangerMode: true,
                buttons: true,
                closeOnOutsideClick: false
            }).then((next) => {
                if (next) {
                    var frmdata = $('#frm-data').serialize();

                    $.ajax({
                        type: 'post',
                        url: siteurl + active_controller + 'save_kelompok_pemeriksaan',
                        data: frmdata,
                        cache: false,
                        dataType: 'json',
                        success: function(result) {
                            if (result.status == '1') {
                                swal({
                                    icon: 'success',
                                    title: 'Success !',
                                    text: result.msg,
                                    buttons: false,
                                    closeOnOutsideClick: false,
                                    timer: 3000
                                }).then((lanjut) => {
                                    swal.close();
                                    $('#dialog-popup').modal('hide');

                                    DataTables();
                                });
                            } else {
                                swal({
                                    icon: 'warning',
                                    title: 'Failed !',
                                    text: result.msg,
                                    buttons: false,
                                    closeOnOutsideClick: false,
                                    timer: 3000
                                });
                            }
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
                }
            });
        });

        $(document).on('click', '.del', function() {
            var id = $(this).data('id');

            swal({
                icon: 'warning',
                title: 'Are you sure ?',
                text: 'This data will be deleted !',
                buttons: true,
                dangerMode: true,
                closeOnOutsideClick: false
            }).then((next) => {
                if (next) {
                    $.ajax({
                        type: 'post',
                        url: siteurl + active_controller + 'delete_kelompok_pemeriksaan',
                        data: {
                            'id': id
                        },
                        cache: false,
                        dataType: 'json',
                        success: function(result) {
                            if (result.status == '1') {
                                swal({
                                    icon: 'success',
                                    title: 'Success !',
                                    text: result.msg,
                                    buttons: false,
                                    closeOnOutsideClick: false,
                                    timer: 3000
                                }).then((lanjut) => {
                                    swal.close();
                                    DataTables();
                                });
                            } else {
                                swal({
                                    icon: 'warning',
                                    title: 'Failed !',
                                    text: result.msg,
                                    buttons: false,
                                    closeOnOutsideClick: false,
                                    timer: 3000
                                });
                            }
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
                }
            });
        });

        $(document).on('click', '.edit', function() {
            var id = $(this).data('id');

            $.ajax({
                type: 'post',
                url: siteurl + active_controller + 'edit',
                data: {
                    'id': id
                },
                cache: false,
                success: function(result) {
                    $('#ModalView').html(result);
                    $('#dialog-popup').modal('show');
                },
                error: function(result) {
                    swal({
                        icon: 'error',
                        title: 'Error !',
                        text: 'Please try again !'
                    });
                }
            });
        });

        function close_modal() {
            $('#dialog-popup').modal('hide');
        }

        function add() {
            $.ajax({
                type: 'post',
                url: siteurl + active_controller + 'add_kelompok_pemeriksaan',
                cache: false,
                success: function(result) {
                    $('#ModalView').html(result);
                    $('#dialog-popup').modal('show');
                },
                error: function(result) {
                    swal({
                        icon: 'error',
                        title: 'Error !',
                        text: 'Please try again !'
                    });
                }
            })
        }

        function DataTables() {
            var DataTables = $('#example1').dataTable({
                serverSide: true,
                processing: true,
                paging: true,
                destroy: true,
                stateSave: true,
                ajax: {
                    type: 'post',
                    url: siteurl + active_controller + 'get_data_kelompok_pemeriksaan',
                    cache: false,
                    dataType: 'json',
                    error: function(xhr, error, thrown) {
                        console.log('DataTables error: ', error, thrown);
                    }
                },
                columns: [{
                        data: 'no'
                    },
                    {
                        data: 'kategori'
                    },
                    {
                        data: 'kelompok_pemeriksaan'
                    },
                    {
                        data: 'action'
                    }
                ]
            });
        }
    </script>