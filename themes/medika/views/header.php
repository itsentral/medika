<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= isset($idt->nm_perusahaan) ? $idt->nm_perusahaan : 'not-set'; ?><?= isset($template['title']) ? ' | ' . $template['title'] : ''; ?></title>
  <!-- <link rel="shortcut icon" href="<?php echo base_url('assets/'); ?>images/importa.png" /> -->

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" href="<?= base_url(); ?>themes/medika/assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

  <!-- Fonts and icons -->
  <script src="<?= base_url(); ?>themes/medika/assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {
        "families": ["Public Sans:300,400,500,600,700"]
      },
      custom: {
        "families": ["Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
        urls: ['<?= base_url(); ?>themes/medika/assets/css/fonts.min.css']
      },
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="<?= base_url(); ?>themes/medika/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>themes/medika/assets/css/plugins.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>themes/medika/assets/css/kaiadmin.horizontal.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>themes/medika/assets/js/plugin/datatables/datatables.min.css">

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="<?= base_url(); ?>themes/medika/assets/css/style.css">
  <script type="text/javascript">
    var baseurl = "<?= base_url(); ?>";
    var siteurl = "<?php echo site_url(); ?>";
    var base_url = siteurl;
    var active_controller = '<?php echo $this->uri->segment(1); ?>' + '/';
    var active_function = '<?php echo $this->uri->segment(2); ?>' + '/';
  </script>
  <script src="<?= base_url(); ?>themes/medika/assets/js/core/jquery-3.7.1.min.js"></script>

</head>