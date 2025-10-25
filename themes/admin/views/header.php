<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= isset($idt->nm_perusahaan) ? $idt->nm_perusahaan : 'not-set'; ?><?= isset($template['title']) ? ' | '.$template['title'] : ''; ?></title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/'); ?>images/importa.png" />
  <style>
    // thead{
      // background-color: #175477;
      // color: white;
    // }
  </style>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Sweet Alert -->
  <link rel="stylesheet" href="<?= base_url('assets/dist/sweetalert.css'); ?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/bootstrap/css/bootstrap.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/ionicons/css/ionicons.min.css'); ?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/select2/select2.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/AdminLTE.min.css'); ?>">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/iCheck/all.css'); ?>">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/skins/_all-skins.min.css'); ?>">
   
  
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/styles.css'); ?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/datepicker/datepicker3.css'); ?>">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/timepicker/bootstrap-timepicker.min.css'); ?>">
  <!-- bootstrap datetimepicker -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/datetimepicker/bootstrap-datetimepicker.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/custom_ddr.css'); ?>">

  <!-- jQuery 2.2.3 -->
  <script src="<?= base_url('assets/plugins/jQuery/jquery-2.2.3.min.js'); ?>"></script>
  <!-- bootstrap datepicker -->
  <script src="<?= base_url('assets/plugins/daterangepicker/moment.min.js'); ?>"></script>
  <script src="<?= base_url('assets/plugins/datepicker/bootstrap-datepicker.js'); ?>"></script>
  <!-- bootstrap time picker -->
  <script src="<?= base_url('assets/plugins/timepicker/bootstrap-timepicker.min.js'); ?>"></script>
  <!-- bootstrap datetimepicker -->
  <script src="<?= base_url('assets/plugins/datetimepicker/bootstrap-datetimepicker.js'); ?>"></script>
  <script src="<?= base_url('assets/plugins/datetimepicker/moment-with-locales.js'); ?>"></script>

  <!-- Sweet Alert -->
  <script src="<?=base_url('assets/dist/sweetalert.min.js'); ?>"></script>
  <!-- Form Jquery -->
  <script src="<?=base_url('assets/plugins/jqueryform/jquery.form.js'); ?>"></script>
  <script src="<?=base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
  <script src="<?= base_url('assets/js/scripts.js'); ?>" type="text/javascript"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script type="text/javascript">
    var baseurl = "<?= base_url(); ?>";
    var siteurl = "<?php echo site_url(); ?>";
    var base_url			= siteurl;
  	var active_controller	= '<?php echo $this->uri->segment(1); ?>'+'/';
    var active_function	= '<?php echo $this->uri->segment(2); ?>'+'/';
  </script>
</head>
<body class="hold-transition skin-blue sidebar-mini fixed" >
<div class="ajax_loader">
  <img src="<?php echo base_url('assets/images/ajax_loader.gif'); ?>" >
</div>
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation" style="margin-left: 0 !important;">
      <!-- Sidebar toggle button-->	  
	    				
      <a href="<?= site_url('dashboard'); ?>" class="sidebar-toggle">  <i class="fa fa-home" aria-hidden="true"></i>   
      </a> 
	   
	  
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications Menu -->


          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
               <!-- <img src="<?= (isset($userData->photo) && file_exists('assets/images/users/'.$userData->photo)) ? base_url('assets/images/users/'.$userData->photo) : base_url('assets/images/male-def.png'); ?>" class="user-image" alt="User Image">-->
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
			  Welcome!
              <span class="hidden-xs">
              <?php echo isset($userData->nm_lengkap) ? ucwords($userData->nm_lengkap) : $userData->username; ?></span>			  
			  <span class="hidden-xs">(
              <?php //echo isset($userData->kdcab) ? ucwords($userData->kdcab) : $userData->kdcab; ?>
			  <?= isset($cabang->namacabang) ? $cabang->namacabang : 'not-set'; ?>)
			  </span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?= (isset($userData->photo) && file_exists('assets/images/users/'.$userData->photo)) ? base_url('assets/images/users/'.$userData->photo) : base_url('assets/images/male-def.png'); ?>" class="img-circle" alt="User Image">

                <p>
                  <?= isset($userData->nm_lengkap) ? ucwords($userData->nm_lengkap) : $userData->username; ?> - <?= isset($userData->groups) ? $userData->groups : '-'; ?>
                  <small>Member since <?= isset($userData->created_on) ? date('M Y', strtotime($userData->created_on)) : '-'; ?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat bg-green">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?= site_url('users/logout'); ?>" class="btn btn-default btn-flat bg-red">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0 !important;">
    <!-- Main content -->
    <section class="content">
	 <font size="1">
