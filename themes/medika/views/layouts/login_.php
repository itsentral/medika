<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.themekita.com/demo-kaiadmin-pro-bootstrap-dashboard/livepreview/examples/demo7/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jul 2025 02:20:27 GMT -->

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                "families": ["Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins.min.css">
    <link rel="stylesheet" href="assets/css/kaiadmin.horizontal.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css">
</head>

<body>
    <div class="wrapper">

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

                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/kaiadmin/logo_dark.svg" height="20" alt="navbar-brand">
                        </a>

                        <button class="btn btn-toggle toggle-page-navigation" data-bs-toggle="collapse" data-bs-target="#menuHeader" aria-expanded="false" aria-controls="menuHeader">
                            <i class="gg-menu bg-primary text-primary"></i>
                        </button>

                        <button class="topbar-toggler more" data-bs-toggle="collapse" data-bs-target="#menuIconHeader" aria-expanded="false" aria-controls="#menuIconHeader">
                            <i class="gg-more-vertical-alt bg-primary text-primary"></i>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="menuHeader">
                        <div class="navbar-line">
                            <ul class="navbar-nav nav page-navigation page-navigation-primary ms-3 bg-white">
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
                            </ul>
                            <div class="body-overlay"></div>
                        </div>
                    </div>

                    <div class="collapse navbar-collapse" id="menuIconHeader">
                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                            <li class="nav-item topbar-icon dropdown hidden-caret">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-search"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-search animated fadeIn">
                                    <form class="navbar-left navbar-form nav-search">
                                        <div class="input-group">
                                            <input type="text" placeholder="Search ..." class="form-control">
                                        </div>
                                    </form>
                                </ul>
                            </li>
                            <li class="nav-item topbar-icon dropdown hidden-caret">
                                <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-envelope"></i>
                                </a>
                                <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
                                    <li>
                                        <div class="dropdown-title d-flex justify-content-between align-items-center">
                                            Messages
                                            <a href="#" class="small">Mark all as read</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-notif-scroll scrollbar-outer">
                                            <div class="notif-center">
                                                <a href="#">
                                                    <div class="notif-img">
                                                        <img src="assets/img/jm_denis.jpg" alt="Img Profile">
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="subject">Jimmy Denis</span>
                                                        <span class="block">
                                                            How are you ?
                                                        </span>
                                                        <span class="time">5 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="notif-img">
                                                        <img src="assets/img/chadengle.jpg" alt="Img Profile">
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="subject">Chad</span>
                                                        <span class="block">
                                                            Ok, Thanks !
                                                        </span>
                                                        <span class="time">12 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="notif-img">
                                                        <img src="assets/img/mlane.jpg" alt="Img Profile">
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="subject">Jhon Doe</span>
                                                        <span class="block">
                                                            Ready for the meeting today...
                                                        </span>
                                                        <span class="time">12 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="notif-img">
                                                        <img src="assets/img/talha.jpg" alt="Img Profile">
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="subject">Talha</span>
                                                        <span class="block">
                                                            Hi, Apa Kabar ?
                                                        </span>
                                                        <span class="time">17 minutes ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </li>
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
                                                        <img src="assets/img/profile2.jpg" alt="Img Profile">
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
                                        <img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                                    </div>
                                    <span class="profile-username">
                                        <span class="op-7">Hi,</span> <span class="fw-bold">Hizrian</span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <div class="user-box">
                                                <div class="avatar-lg"><img src="assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
                                                <div class="u-text">
                                                    <h4>Hizrian</h4>
                                                    <p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">My Profile</a>
                                            <a class="dropdown-item" href="#">My Balance</a>
                                            <a class="dropdown-item" href="#">Inbox</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Account Setting</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Logout</a>
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
                <div class="page-inner ms-lg-0">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                        <div>
                            <h3 class="fw-bold mb-3">Dashboard</h3>
                            <h6 class="op-7 mb-2">Premium Bootstrap 5 Admin Dashboard</h6>
                        </div>
                        <div class="ms-md-auto py-2 py-md-0">
                            <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                            <a href="#" class="btn btn-primary btn-round">Add Customer</a>
                        </div>
                    </div>
                    <div class="row row-card-no-pd">
                        <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6><b>Todays Income</b></h6>
                                            <p class="text-muted">All Customs Value</p>
                                        </div>
                                        <h4 class="text-info fw-bold">$170</h4>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-info w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <p class="text-muted mb-0">Change</p>
                                        <p class="text-muted mb-0">75%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6><b>Total Revenue</b></h6>
                                            <p class="text-muted">All Customs Value</p>
                                        </div>
                                        <h4 class="text-success fw-bold">$120</h4>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <p class="text-muted mb-0">Change</p>
                                        <p class="text-muted mb-0">25%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6><b>New Orders</b></h6>
                                            <p class="text-muted">Fresh Order Amount</p>
                                        </div>
                                        <h4 class="text-danger fw-bold">15</h4>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-danger w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <p class="text-muted mb-0">Change</p>
                                        <p class="text-muted mb-0">50%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6><b>New Users</b></h6>
                                            <p class="text-muted">Joined New User</p>
                                        </div>
                                        <h4 class="text-secondary fw-bold">12</h4>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-secondary w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <p class="text-muted mb-0">Change</p>
                                        <p class="text-muted mb-0">25%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row card-tools-still-right">
                                        <div class="card-title">Total Sales per Month</div>
                                        <div class="card-tools">
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-clean me-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas id="sales-bar-chart" height="175"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row card-tools-still-right">
                                        <div class="card-title">Users Statistics</div>
                                        <div class="card-tools">
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-clean me-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas id="users-line-chart" height="175"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-card-no-pd">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row card-tools-still-right">
                                        <h4 class="card-title">Users Geolocation</h4>
                                        <div class="card-tools">
                                            <button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-angle-down"></span></button>
                                            <button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"><span class="fa fa-sync-alt"></span></button>
                                            <button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-times"></span></button>
                                        </div>
                                    </div>
                                    <p class="card-category">
                                        Map of the distribution of users around the world</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="table-responsive table-hover table-sales">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="flag">
                                                                    <img src="assets/img/flags/id.png" alt="indonesia">
                                                                </div>
                                                            </td>
                                                            <td>Indonesia</td>
                                                            <td class="text-end">
                                                                2.320
                                                            </td>
                                                            <td class="text-end">
                                                                42.18%
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flag">
                                                                    <img src="assets/img/flags/us.png" alt="united states">
                                                                </div>
                                                            </td>
                                                            <td>USA</td>
                                                            <td class="text-end">
                                                                240
                                                            </td>
                                                            <td class="text-end">
                                                                4.36%
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flag">
                                                                    <img src="assets/img/flags/au.png" alt="australia">
                                                                </div>
                                                            </td>
                                                            <td>Australia</td>
                                                            <td class="text-end">
                                                                119
                                                            </td>
                                                            <td class="text-end">
                                                                2.16%
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flag">
                                                                    <img src="assets/img/flags/ru.png" alt="russia">
                                                                </div>
                                                            </td>
                                                            <td>Russia</td>
                                                            <td class="text-end">
                                                                1.081
                                                            </td>
                                                            <td class="text-end">
                                                                19.65%
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flag">
                                                                    <img src="assets/img/flags/cn.png" alt="china">
                                                                </div>
                                                            </td>
                                                            <td>China</td>
                                                            <td class="text-end">
                                                                1.100
                                                            </td>
                                                            <td class="text-end">
                                                                20%
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flag">
                                                                    <img src="assets/img/flags/br.png" alt="brazil">
                                                                </div>
                                                            </td>
                                                            <td>Brasil</td>
                                                            <td class="text-end">
                                                                640
                                                            </td>
                                                            <td class="text-end">
                                                                11.63%
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mapcontainer">
                                                <div id="world-map" class="w-100" style="height: 300px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-round">
                                <div class="card-body">
                                    <div class="card-head-row card-tools-still-right">
                                        <div class="card-title">New Customers</div>
                                        <div class="card-tools">
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-clean me-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-list py-4">
                                        <div class="item-list">
                                            <div class="avatar">
                                                <img src="assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                            <div class="info-user ms-3">
                                                <div class="username">Jimmy Denis</div>
                                                <div class="status">Graphic Designer</div>
                                            </div>
                                            <button class="btn btn-icon btn-link op-8 me-1">
                                                <i class="far fa-envelope"></i>
                                            </button>
                                            <button class="btn btn-icon btn-link btn-danger op-8">
                                                <i class="fas fa-ban"></i>
                                            </button>
                                        </div>
                                        <div class="item-list">
                                            <div class="avatar">
                                                <span class="avatar-title rounded-circle border border-white">CF</span>
                                            </div>
                                            <div class="info-user ms-3">
                                                <div class="username">Chandra Felix</div>
                                                <div class="status">Sales Promotion</div>
                                            </div>
                                            <button class="btn btn-icon btn-link op-8 me-1">
                                                <i class="far fa-envelope"></i>
                                            </button>
                                            <button class="btn btn-icon btn-link btn-danger op-8">
                                                <i class="fas fa-ban"></i>
                                            </button>
                                        </div>
                                        <div class="item-list">
                                            <div class="avatar">
                                                <img src="assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                            <div class="info-user ms-3">
                                                <div class="username">Talha</div>
                                                <div class="status">Front End Designer</div>
                                            </div>
                                            <button class="btn btn-icon btn-link op-8 me-1">
                                                <i class="far fa-envelope"></i>
                                            </button>
                                            <button class="btn btn-icon btn-link btn-danger op-8">
                                                <i class="fas fa-ban"></i>
                                            </button>
                                        </div>
                                        <div class="item-list">
                                            <div class="avatar">
                                                <img src="assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                            <div class="info-user ms-3">
                                                <div class="username">Chad</div>
                                                <div class="status">CEO Zeleaf</div>
                                            </div>
                                            <button class="btn btn-icon btn-link op-8 me-1">
                                                <i class="far fa-envelope"></i>
                                            </button>
                                            <button class="btn btn-icon btn-link btn-danger op-8">
                                                <i class="fas fa-ban"></i>
                                            </button>
                                        </div>
                                        <div class="item-list">
                                            <div class="avatar">
                                                <span class="avatar-title rounded-circle border border-white bg-primary">H</span>
                                            </div>
                                            <div class="info-user ms-3">
                                                <div class="username">Hizrian</div>
                                                <div class="status">Web Designer</div>
                                            </div>
                                            <button class="btn btn-icon btn-link op-8 me-1">
                                                <i class="far fa-envelope"></i>
                                            </button>
                                            <button class="btn btn-icon btn-link btn-danger op-8">
                                                <i class="fas fa-ban"></i>
                                            </button>
                                        </div>
                                        <div class="item-list">
                                            <div class="avatar">
                                                <span class="avatar-title rounded-circle border border-white bg-secondary">F</span>
                                            </div>
                                            <div class="info-user ms-3">
                                                <div class="username">Farrah</div>
                                                <div class="status">Marketing</div>
                                            </div>
                                            <button class="btn btn-icon btn-link op-8 me-1">
                                                <i class="far fa-envelope"></i>
                                            </button>
                                            <button class="btn btn-icon btn-link btn-danger op-8">
                                                <i class="fas fa-ban"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card card-round">
                                <div class="card-header">
                                    <div class="card-head-row card-tools-still-right">
                                        <div class="card-title">Transaction History</div>
                                        <div class="card-tools">
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-clean me-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <!-- Projects table -->
                                        <table class="table align-items-center mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Payment Number</th>
                                                    <th scope="col" class="text-end">Date &amp; Time</th>
                                                    <th scope="col" class="text-end">Amount</th>
                                                    <th scope="col" class="text-end">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">
                                                        <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        Payment from #10231
                                                    </th>
                                                    <td class="text-end">
                                                        Mar 19, 2020, 2.45pm
                                                    </td>
                                                    <td class="text-end">
                                                        $250.00
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-success">Completed</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        Payment from #10231
                                                    </th>
                                                    <td class="text-end">
                                                        Mar 19, 2020, 2.45pm
                                                    </td>
                                                    <td class="text-end">
                                                        $250.00
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-success">Completed</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        Payment from #10231
                                                    </th>
                                                    <td class="text-end">
                                                        Mar 19, 2020, 2.45pm
                                                    </td>
                                                    <td class="text-end">
                                                        $250.00
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-success">Completed</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        Payment from #10231
                                                    </th>
                                                    <td class="text-end">
                                                        Mar 19, 2020, 2.45pm
                                                    </td>
                                                    <td class="text-end">
                                                        $250.00
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-success">Completed</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        Payment from #10231
                                                    </th>
                                                    <td class="text-end">
                                                        Mar 19, 2020, 2.45pm
                                                    </td>
                                                    <td class="text-end">
                                                        $250.00
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-success">Completed</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        Payment from #10231
                                                    </th>
                                                    <td class="text-end">
                                                        Mar 19, 2020, 2.45pm
                                                    </td>
                                                    <td class="text-end">
                                                        $250.00
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-success">Completed</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        Payment from #10231
                                                    </th>
                                                    <td class="text-end">
                                                        Mar 19, 2020, 2.45pm
                                                    </td>
                                                    <td class="text-end">
                                                        $250.00
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-success">Completed</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer">
                <div class="container">
                    <nav class="pull-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="http://www.themekita.com/">
                                    ThemeKita
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Help
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright ms-auto">
                        2024, made with <i class="fa fa-heart heart text-danger"></i> by <a href="http://www.themekita.com/">ThemeKita</a>
                    </div>
                </div>
            </footer>
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
                    <ul class="nav nav-primary">
                        <li class="nav-item active">
                            <a data-bs-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="dashboard">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="../demo1/index-2.html">
                                            <span class="sub-item">Dashboard 1</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../demo2/index.html">
                                            <span class="sub-item">Dashboard 2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../demo3/index.html">
                                            <span class="sub-item">Dashboard 3</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../demo4/index.html">
                                            <span class="sub-item">Dashboard 4</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../demo5/index.html">
                                            <span class="sub-item">Dashboard 5</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../demo6/index.html">
                                            <span class="sub-item">Dashboard 6</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html">
                                            <span class="sub-item">Dashboard 7</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../demo8/index.html">
                                            <span class="sub-item">Dashboard 8</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../demo9/index.html">
                                            <span class="sub-item">Dashboard 9</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Snippets</h4>
                        </li>
                        <li class="nav-item">
                            <a href="widgets.html">
                                <i class="fas fa-desktop"></i>
                                <p>Widgets</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="invoice.html">
                                <i class="fas fa-file-invoice-dollar"></i>
                                <p>Invoice</p>
                                <span class="badge badge-success">4</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="calendar.html">
                                <i class="far fa-calendar-alt"></i>
                                <p>Calendar</p>
                                <span class="badge badge-info">1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#email-nav">
                                <i class="far fa-envelope"></i>
                                <p>Email</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="email-nav">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="email-inbox.html">
                                            <span class="sub-item">Inbox</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="email-compose.html">
                                            <span class="sub-item">Email Compose</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="email-detail.html">
                                            <span class="sub-item">Email Detail</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#messages-app-nav">
                                <i class="far fa-paper-plane"></i>
                                <p>Messages App</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="messages-app-nav">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="messages.html">
                                            <span class="sub-item">Messages</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="conversations.html">
                                            <span class="sub-item">Conversations</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <!-- Custom template | don't include it in your project! -->
        <div class="custom-template">
            <div class="title">Settings</div>
            <div class="custom-content">
                <div class="switcher">
                    <div class="switch-block">
                        <h4>Navbar Header</h4>
                        <div class="btnSwitch">
                            <button type="button" class="selected changeTopBarColor" data-color="white"></button>
                            <button type="button" class="changeTopBarColor" data-color="dark"></button>
                            <button type="button" class="changeTopBarColor" data-color="dark2"></button>
                        </div>
                    </div>
                    <div class="switch-block">
                        <h4>Sidebar</h4>
                        <div class="btnSwitch">
                            <button type="button" class="selected changeSideBarColor" data-color="white"></button>
                            <button type="button" class="changeSideBarColor" data-color="dark"></button>
                            <button type="button" class="changeSideBarColor" data-color="dark2"></button>
                        </div>
                    </div>
                    <div class="switch-block">
                        <h4>Background</h4>
                        <div class="btnSwitch">
                            <button type="button" class="changeBackgroundColor" data-color="bg2"></button>
                            <button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
                            <button type="button" class="changeBackgroundColor" data-color="bg3"></button>
                            <button type="button" class="changeBackgroundColor" data-color="dark"></button>
                            <button type="button" class="changeBackgroundColor" data-color="dark2"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-toggle">
                <i class="icon-settings"></i>
            </div>
        </div>
        <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Moment JS -->
    <script src="assets/js/plugin/moment/moment.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Dropzone -->
    <script src="assets/js/plugin/dropzone/dropzone.min.js"></script>

    <!-- Fullcalendar -->
    <script src="assets/js/plugin/fullcalendar/fullcalendar.min.js"></script>

    <!-- DateTimePicker -->
    <script src="assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

    <!-- Bootstrap Tagsinput -->
    <script src="assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

    <!-- jQuery Validation -->
    <script src="assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>

    <!-- Summernote -->
    <script src="assets/js/plugin/summernote/summernote-lite.min.js"></script>

    <!-- Select2 -->
    <script src="assets/js/plugin/select2/select2.full.min.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Owl Carousel -->
    <script src="assets/js/plugin/owl-carousel/owl.carousel.min.js"></script>

    <!-- Magnific Popup -->
    <script src="assets/js/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.horizontal.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="assets/js/setting-demo.js"></script>
    <script src="assets/js/demo.js"></script>
    <script>
        // Sales Bar chart
        new Chart(document.getElementById("sales-bar-chart"), {
            type: 'bar',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Total Sales",
                    backgroundColor: ["#2D8EFF", "#2D8EFF", "#2D8EFF", "#2D8EFF", "#2D8EFF", "#2D8EFF", "#2D8EFF", "#EDF1F4", "#EDF1F4", "#EDF1F4", "#EDF1F4", "#EDF1F4"],
                    data: [10, 22, 40, 33, 48, 60, 75, 40, 85, 57, 45, 62]
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: false
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            min: 0,
                            max: 100,
                            stepSize: 10
                        }
                    }]
                },
            }
        });

        // Users Line chart
        new Chart(document.getElementById("users-line-chart"), {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    data: [40000, 42000, 42300, 39020, 27650, 20000, 36000, 70000, 60000, 50000, 50000, 40000],
                    label: "Target",
                    backgroundColor: "#FF9E2D",
                    borderColor: "#FF9E2D",
                    fill: false
                }, {
                    data: [0, 30000, 28000, 40000, 65000, 60000, 50000, 55500, 70000, 75000, 45000, 80000],
                    label: "Total Users",
                    backgroundColor: "#2D8EFF",
                    borderColor: "#2D8EFF",
                    fill: false
                }]
            },
            options: {
                title: {
                    display: false,
                },
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: false
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            min: 0,
                            max: 100000,
                            stepSize: 10000,
                            callback: function(value, index, array) {
                                return (value < 1000000) ? value / 1000 + 'K' : value / 1000000 + 'M';
                            }
                        }
                    }]
                },
                borderJoinStyle: "round",
            }
        });
    </script>
</body>

<!-- Mirrored from www.themekita.com/demo-kaiadmin-pro-bootstrap-dashboard/livepreview/examples/demo7/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jul 2025 02:20:44 GMT -->

</html>