<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin @yield('title')</title>
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
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/') }}" class="nav-link">Home</a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          authpictur
          <span class="d-none d-md-inline"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
          authpictur

            <p>
              hhhh
              <small>Admin Of Result Management System</small>
            </p>
          </li>

          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="{{ url('profile') }}" class="btn btn-default btn-flat">Profile</a>
            <a href="{{ route('logout') }}" class="btn btn-default btn-flat float-right" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">Sign out</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{ asset('dashboard_assets') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">RMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        authpictur
        </div>
        <div class="info">
          <a href="#" class="d-block">hjjjj</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="{{ url('home') }}" class="nav-link @yield('dashboard')">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('department') }}" class="nav-link @yield('department')">
              <i class="nav-icon fab fa-codepen"></i>
              <p>
                Department
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('session') }}" class="nav-link @yield('session')">
              <i class="nav-icon fas fa-hourglass-start"></i>
              <p>
                Session
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('semester') }}" class="nav-link @yield('semester')">
              <i class="nav-icon fab fa-servicestack"></i>
              <p>
                Semester
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('subject') }}" class="nav-link @yield('subject')">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Subject
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link @yield('student')">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Student
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('student/add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Student</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('student') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student List</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link @yield('result')">
              <i class="nav-icon fab fa-resolving"></i>
              <p>
                Result
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('result/add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Result</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('result') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Result List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('result/find') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Result Search</p>
                </a>
              </li>
            </ul>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->


    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    @yield('content')


  </div>


  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <p>Copyright &copy; {{ Carbon\Carbon::now()->format('Y') }} All rights reserved.</p>

  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

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
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<!--toastr custome code here-->
<script type="text/javascript">
  @if (session('message'))
      var alert = "{{ session('type') }}";
      var message = "{{ session('message') }}";
      switch (alert) {
        case "error":
          toastr.error(message)
          break;
        case "warning":
          toastr.warning(message)
          break;
        case "info":
          toastr.info(message)
          break;
        default:
          toastr.success(message)
          break;
      }
  @endif
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $("body").on('click','#edit',function(){
      var id = $(this).data('id');
      //table data get
     var currentRow=$(this).closest("tr");
     var name = currentRow.find("td:eq(1)").html();
     // Show Model in Edit Model
     $('#edit-modal').modal('show');
     //Set balue in input field
       $("#editsession").val(name);
       $("#editid").val(id);
    });

  });

</script>
</body>
</html>
