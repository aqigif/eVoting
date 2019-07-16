<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title><?php echo isset($title) ? $title : 'e-Voting | SMK Negeri 1 Kawali' ; ?></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/daylight/admin/plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/daylight/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/daylight/admin/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/daylight/admin/plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/daylight/admin/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/daylight/admin/plugins/morris/morris.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/daylight/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/daylight/admin/plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/daylight/admin/plugins/daterangepicker/daterangepicker-bs3.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/style/bootstrap.min.css">
  <link href="<?php echo base_url();?>assets/daylight/SourceSansPro.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/daylight/font-awesome.min.css">

    <!-- jQuery -->
  <script src="<?php echo base_url();?>assets/daylight/admin/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url();?>assets/daylight/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <script src="<?php echo base_url();?>assets/daylight/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="<?php echo base_url();?>assets/daylight/admin/plugins/morris/morris.min.js"></script>
  <script src="<?php echo base_url();?>assets/daylight/admin/plugins/sparkline/jquery.sparkline.min.js"></script>
  <script src="<?php echo base_url();?>assets/daylight/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="<?php echo base_url();?>assets/daylight/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="<?php echo base_url();?>assets/daylight/admin/plugins/knob/jquery.knob.js"></script>
  <script src="<?php echo base_url();?>assets/daylight/moment.min.js"></script>
  <script src="<?php echo base_url();?>assets/daylight/admin/plugins/daterangepicker/daterangepicker.js"></script>
  <script src="<?php echo base_url();?>assets/daylight/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url();?>assets/daylight/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <script src="<?php echo base_url();?>assets/daylight/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <script src="<?php echo base_url();?>assets/daylight/admin/plugins/fastclick/fastclick.js"></script>
  <script src="<?php echo base_url();?>assets/daylight/admin/dist/js/adminlte.js"></script>
  <script src="<?php echo base_url();?>assets/daylight/admin/dist/js/adminlte.min.js"></script>
  <script src="<?php echo base_url();?>assets/daylight/admin/dist/js/pages/dashboard.js"></script>
  <script src="<?php echo base_url();?>assets/daylight/admin/dist/js/demo.js"></script>
  <!-- iCheck -->
  <script src="<?php echo base_url();?>assets/daylight/admin/plugins/iCheck/icheck.min.js"></script>
  <script>
  $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass   : 'iradio_square-blue',
        increaseArea : '20%' // optional
      })
    })
  </script>

  <script src="<?php echo base_url();?>assets/daylight/admin/plugins/flot/jquery.flot.min.js"></script>
  <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
  <script src="<?php echo base_url();?>assets/daylight/admin/plugins/flot/jquery.flot.resize.min.js"></script>
  <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
  <script src="<?php echo base_url();?>assets/daylight/admin/plugins/flot/jquery.flot.pie.min.js"></script>
  <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="<?php echo base_url();?>assets/daylight/admin/plugins/flot/jquery.flot.categories.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
