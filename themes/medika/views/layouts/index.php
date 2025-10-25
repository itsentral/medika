<?php echo $this->template->load_view('header'); ?>

<body class="" style="background: url('<?= base_url('assets/bg.jpg') ?>') rgba(0, 67, 114, 0.35);background-blend-mode: darken;background-size: cover;background-repeat: no-repeat;background-attachment: fixed;background-position: top;">
    <div class="wrapper">
        <div class="ajax_loader">
            <!-- <img src="<?php echo base_url('assets/images/ajax_loader.gif'); ?>"> -->
        </div>
        <div class="main-header">
            <nav class="navbar navbar-header navbar-expand-lg navbar-light">
                <div class="container">
                    <div class="nav-toggle d-none d-lg-flex">
                        <button class="btn btn-toggle btn-show-sidebar">
                            <i class="gg-menu-right bg-primary text-primary"></i>
                        </button>
                    </div>

                    <div class="nav-controls">
                        <div class="nav-toggle d-flex d-lg-none">
                            <button class="btn btn-toggle btn-show-sidebar">
                                <i class="gg-menu-left bg-primary text-primary"></i>
                            </button>
                        </div>

                        <a class="navbar-brand" href="<?= base_url(); ?>">
                            <img src="<?= base_url(); ?>themes/medika/assets/img/kaiadmin/logo_light.svg" height="20" alt="navbar-brand">
                        </a>

                        <!-- <button class="btn btn-toggle toggle-page-navigation" data-bs-toggle="collapse" data-bs-target="#menuHeader" aria-expanded="false" aria-controls="menuHeader">
                            <i class="gg-menu bg-primary text-primary"></i>
                        </button> -->

                        <button class="topbar-toggler more" data-bs-toggle="collapse" data-bs-target="#menuIconHeader" aria-expanded="false" aria-controls="#menuIconHeader">
                            <i class="gg-more-vertical-alt bg-primary text-primary"></i>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="menuHeader">
                        <div class="navbar-line">
                            <!-- <ul class="navbar-nav nav page-navigation page-navigation-primary ms-3 bg-white">
                                <h3 class="title-menu bg-primary d-flex d-lg-none">
                                    Menu
                                    <a href="#" class="close-menu toggle-page-navigation" data-bs-toggle="collapse" data-bs-target="#menuHeader" aria-expanded="false" aria-controls="menuHeader"> <i class="fas fa-times"></i></a>
                                </h3>
                                <li class="nav-item dropdown submenu active">
                                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="link-icon icon-screen-desktop"></i>
                                        <span class="menu-title">Dashboard</span>
                                    </a>
                                    <div class="dropdown-menu navbar-dropdown animated fadeIn">
                                        <ul>
                                            <li>
                                                <a href="../demo1/index-2.html">Dashboard 1</a>
                                            </li>
                                            <li>
                                                <a href="../demo2/index.html">Dashboard 2</a>
                                            </li>
                                            <li>
                                                <a href="../demo3/index.html">Dashboard 3</a>
                                            </li>
                                            <li>
                                                <a href="../demo4/index.html">Dashboard 4</a>
                                            </li>
                                            <li>
                                                <a href="../demo5/index.html">Dashboard 5</a>
                                            </li>
                                            <li>
                                                <a href="../demo6/index.html">Dashboard 6</a>
                                            </li>
                                            <li>
                                                <a href="index.html">Dashboard 7</a>
                                            </li>
                                            <li>
                                                <a href="../demo8/index.html">Dashboard 8</a>
                                            </li>
                                            <li>
                                                <a href="../demo9/index.html">Dashboard 9</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item dropdown submenu">
                                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="link-icon icon-grid"></i>
                                        <span class="menu-title">Apps</span>
                                    </a>
                                    <div class="dropdown-menu navbar-dropdown animated fadeIn">
                                        <ul>
                                            <li>
                                                <a href="widgets.html">Widgets</a>
                                            </li>
                                            <li>
                                                <a href="invoice.html">Invoice</a>
                                            </li>
                                            <li>
                                                <a href="calendar.html">Calendar</a>
                                            </li>
                                            <li>
                                                <a href="email-inbox.html">Email Inbox</a>
                                            </li>
                                            <li>
                                                <a href="email-detail.html">Email Detail</a>
                                            </li>
                                            <li>
                                                <a href="email-compose.html">Email Compose</a>
                                            </li>
                                            <li>
                                                <a href="messages.html">Messages</a>
                                            </li>
                                            <li>
                                                <a href="conversations.html">Conversations</a>
                                            </li>
                                            <li>
                                                <a href="404.html">404</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item dropdown submenu mega-menu">
                                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="link-icon icon-film"></i>
                                        <span class="menu-title">Project</span>
                                    </a>
                                    <div class="dropdown-menu navbar-dropdown animated fadeIn">
                                        <div class="col-group-wrapper row">
                                            <div class="col-group col-md-4">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p class="category-heading">Basic Elements</p>
                                                        <div class="submenu-item">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <ul>
                                                                        <li><a href="#">Accordion</a></li>
                                                                        <li><a href="#">Buttons</a></li>
                                                                        <li><a href="#">Badges</a></li>
                                                                        <li><a href="#">Breadcrumbs</a></li>
                                                                        <li><a href="#">Dropdown</a></li>
                                                                        <li><a href="#">Modals</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <ul>
                                                                        <li><a href="#">Progress bar</a></li>
                                                                        <li><a href="#">Pagination</a></li>
                                                                        <li><a href="#">Tabs</a></li>
                                                                        <li><a href="#">Typography</a></li>
                                                                        <li><a href="#">Tooltip</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-group col-md-4">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p class="category-heading">Advanced Elements</p>
                                                        <div class="submenu-item">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <ul>
                                                                        <li><a href="#">Datatables</a></li>
                                                                        <li><a href="#">Carousel</a></li>
                                                                        <li><a href="#">Clipboard</a></li>
                                                                        <li><a href="#">Chart.js</a></li>
                                                                        <li><a href="#">Loader</a></li>
                                                                        <li><a href="#">Slider</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <ul>
                                                                        <li><a href="#">Popup</a></li>
                                                                        <li><a href="#">Notification</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-group col-md-4">
                                                <p class="category-heading">Icons</p>
                                                <ul class="submenu-item">
                                                    <li><a href="#">Font Awesome</a></li>
                                                    <li><a class="3">Simple Line Icons</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul> -->
                            <div class="body-overlay"></div>
                        </div>
                    </div>

                    <div class="collapse navbar-collapse" id="menuIconHeader">
                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                            <li class="nav-item topbar-icon dropdown hidden-caret">
                                <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bell"></i>
                                    <span class="notification">4</span>
                                </a>
                                <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                                    <li>
                                        <div class="dropdown-title">You have 4 new notification</div>
                                    </li>
                                    <li>
                                        <div class="notif-scroll scrollbar-outer">
                                            <div class="notif-center">
                                                <a href="#">
                                                    <div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
                                                    <div class="notif-content">
                                                        <span class="block">
                                                            New user registered
                                                        </span>
                                                        <span class="time">5 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
                                                    <div class="notif-content">
                                                        <span class="block">
                                                            Rahmad commented on Admin
                                                        </span>
                                                        <span class="time">12 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="notif-img">
                                                        <img src="<?= base_url(); ?>themes/medika/assets/img/profile2.jpg" alt="Img Profile">
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="block">
                                                            Reza send messages to you
                                                        </span>
                                                        <span class="time">12 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
                                                    <div class="notif-content">
                                                        <span class="block">
                                                            Farrah liked Admin
                                                        </span>
                                                        <span class="time">17 minutes ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item topbar-user dropdown hidden-caret">
                                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                                    <div class="avatar-sm">
                                        <img src="<?= base_url(); ?>themes/medika/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                                    </div>
                                    <span class="profile-username">
                                        <span class="op-7">Hi,</span> <span class="fw-bold"><?= $this->session->app_session['nm_lengkap']; ?></span>

                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <div class="user-box">
                                                <div class="avatar-lg"><img src="<?= base_url(); ?>themes/medika/assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
                                                <div class="u-text">
                                                    <h4><?= $this->session->app_session['nm_lengkap']; ?></h4>
                                                    <p class="text-muted"><?= $this->session->app_session['email']; ?></p>
                                                    <!-- <a href="#" class="btn btn-xs btn-secondary btn-sm">View Profile</a> -->
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">My Profile</a>
                                            <a class="dropdown-item" href="#">Inbox</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Account Setting</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="<?= base_url('logout'); ?>"><i class="fas fa-sign-out" aria-hidden="true"></i> Logout</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="main-panel">
            <div class="container">
                <?php echo Template::message(); ?>
                <?php echo $template['body']; ?>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="pull-right">
                        <button class="btn btn-label-primary btn-close-sidebar me-3 mb-4 mt--1">
                            <i class="gg-close"></i>
                        </button>
                    </div>
                    <!-- <ul class="nav nav-primary">
                        <li class="nav-item active">
                            <a href="<?= base_url(); ?>">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Main Menu</h4>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('paket_mcu'); ?>">
                                <i class="fas fa-desktop"></i>
                                <p>Paket MCU</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#email-nav">
                                <i class="far fa-envelope"></i>
                                <p>Master Data</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="email-nav">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Kategori</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Subkategori</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Parameter</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#messages-app-nav">
                                <i class="fa fa-cog"></i>
                                <p>Pengaturan</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="messages-app-nav">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Pengguna</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Menu</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul> -->
                    <?= $this->menu_generator->build_menus(); ?>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->
    </div>

    <!--   Core JS Files   -->
    <script src="<?= base_url(); ?>themes/medika/assets/js/core/popper.min.js"></script>
    <script src="<?= base_url(); ?>themes/medika/assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="<?= base_url(); ?>themes/medika/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Moment JS -->
    <script src="<?= base_url(); ?>themes/medika/assets/js/plugin/moment/moment.min.js"></script>

    <!-- Chart JS -->
    <script src="<?= base_url(); ?>themes/medika/assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="<?= base_url(); ?>themes/medika/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="<?= base_url(); ?>themes/medika/assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="<?= base_url(); ?>themes/medika/assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="<?= base_url(); ?>themes/medika/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="<?= base_url(); ?>themes/medika/assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="<?= base_url(); ?>themes/medika/assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Dropzone -->
    <script src="<?= base_url(); ?>themes/medika/assets/js/plugin/dropzone/dropzone.min.js"></script>

    <!-- Fullcalendar -->
    <script src="<?= base_url(); ?>themes/medika/assets/js/plugin/fullcalendar/fullcalendar.min.js"></script>

    <!-- DateTimePicker -->
    <script src="<?= base_url(); ?>themes/medika/assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

    <!-- Bootstrap Tagsinput -->
    <script src="<?= base_url(); ?>themes/medika/assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

    <!-- jQuery Validation -->
    <script src="<?= base_url(); ?>themes/medika/assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>

    <!-- Summernote -->
    <script src="<?= base_url(); ?>themes/medika/assets/js/plugin/summernote/summernote-lite.min.js"></script>

    <!-- Select2 -->
    <script src="<?= base_url(); ?>themes/medika/assets/js/plugin/select2/select2.full.min.js"></script>

    <!-- Sweet Alert -->
    <script src="<?= base_url(); ?>themes/medika/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Owl Carousel -->
    <script src="<?= base_url(); ?>themes/medika/assets/js/plugin/owl-carousel/owl.carousel.min.js"></script>

    <!-- Magnific Popup -->
    <script src="<?= base_url(); ?>themes/medika/assets/js/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="<?= base_url(); ?>themes/medika/assets/js/kaiadmin.horizontal.min.js"></script>

    <script>
        $.extend(true, $.fn.dataTable.defaults, {
            "stateSave": true,
            "processing": true,
            "autoWidth": true,
            "responsive": true,
            "pageLength": 100,
            "lengthChange": false,
            "layout": {
                "topStart": null,
                "topEnd": null, // No elements at top-end
                "bottomStart": {
                    // rowClass: 'd-flex justify-content-start', // untuk wrapper row
                    "features": ['info'],
                    "className": 'ms-2' // tambahkan class di sini
                },
                "bottomEnd": {
                    "rowClass": 'd-flex justify-content-between align-items-center', // untuk wrapper row
                    "features": ['paging'],
                    "className": 'me-2 mb-2' // tambahkan class di sini
                }
            },
            "language": {
                "search": "Cari:",
                "lengthMenu": " _MENU_",
                "info": "Tampil <b>_START_</b> - <b>_END_</b> dari <b>_TOTAL_</b> data",
                "infoEmpty": "Tampil 0 - 0 dari 0 entri",
                "infoFiltered": "(disaring dari _MAX_ total entri)",
                "paginate": {
                    "next": "<i class='fa fa-chevron-right py-1'></i>",
                    "previous": "<i class='fa fa-chevron-left py-1'></i>",
                    "first": "<i class='fa fa-angle-double-left py-1'></i>",
                    "last": "<i class='fa fa-angle-double-right py-1'></i>"
                },
                "zeroRecords": "<div class='py-3 d-flex justify-content-center flex-column align-items-center gap-3'><i class='op-5 far fa-frown-open fa-3x'></i> <i class='op-5'>Tidak ada data yang ditemukan</i></div>",
                "emptyTable": "<div class='py-3 d-flex justify-content-center flex-column align-items-center gap-3'><div><img width='200' src='<?= base_url('themes/medika/assets/img/sad-nurse.png'); ?>'></div><div><i class='op-5'>Tidak ada data yang tersedia</i></div></div>",
                "loadingRecords": '<div class="d-flex gap-2 align-items-center justify-content-center py-3"><i class="op-5">Memuat data... </i><div class="spinner-border spinner-border-sm text-primary" role="status"><span class="sr-only"></span></div></div>',
                "processing": "Sedang memproses...",
                "error": "Terjadi kesalahan saat memuat data",
            },
            "lengthMenu": [10, 25, 50, 100, 200, 300, 500],
            "order": [
                [0, "asc"]
            ], // Sort by the first column (Name)
            "columnDefs": [{
                "targets": -1, // Last column (Actions)
                "orderable": false // Disable sorting for the Actions column
            }, {
                "targets": 'text-center',
                "className": "text-center"
            }],
        });
    </script>
</body>

</html>