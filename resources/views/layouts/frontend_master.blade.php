<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('dashboard_assets') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('dashboard_assets') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('dashboard_assets') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('dashboard_assets') }}/plugins/jqvmap/jqvmap.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{ asset('dashboard_assets') }}/plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dashboard_assets') }}/dist/css/adminlte.min.css">
  <!-- dataTables style -->
  <link rel="stylesheet" href="{{ asset('dashboard_assets') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('dashboard_assets') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('dashboard_assets') }}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('dashboard_assets') }}/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

@yield('content')




<!-- jQuery -->
<script src="{{ asset('dashboard_assets') }}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('dashboard_assets') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('dashboard_assets') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('dashboard_assets') }}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ asset('dashboard_assets') }}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ asset('dashboard_assets') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset('dashboard_assets') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('dashboard_assets') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('dashboard_assets') }}/plugins/moment/moment.min.js"></script>
<script src="{{ asset('dashboard_assets') }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('dashboard_assets') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ asset('dashboard_assets') }}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('dashboard_assets') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dashboard_assets') }}/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dashboard_assets') }}/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dashboard_assets') }}/dist/js/demo.js"></script>

<!-- DataTables -->
<script src="{{ asset('dashboard_assets') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('dashboard_assets') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('dashboard_assets') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('dashboard_assets') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- Toastr -->
<script src="{{ asset('dashboard_assets') }}/plugins/toastr/toastr.min.js"></script>
<script src="{{ asset('dashboard_assets') }}/js/ajax.js"></script>

</body>
</html>
