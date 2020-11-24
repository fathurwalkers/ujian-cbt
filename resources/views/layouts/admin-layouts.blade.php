<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet"
    href="{{ asset('assets/ujian/assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet"
    href="{{ asset('assets/ujian/assets/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('assets/ujian/assets/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/ujian/assets/dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/ujian/assets/dist/css/skins/_all-skins.min.css') }}">

  {{-- Datables 
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/datatables/datatables.css') }}"/> --}}

  <!-- Google Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  @yield('after-style')
</head>

<body class="hold-transition skin-blue-light fixed sidebar-mini">

  <div class="wrapper">

    <!-- Top Bar -->
    <header class="main-header">
      <a href="assets/index2.html" class="logo">
        <span class="logo-mini"><b>CBT</b></span>
        <span class="logo-lg"><b>C</b>omputer <b>B</b>ased <b>T</b>est </span>
      </a>
      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ asset('assets/ujian/assets/dist/img/user2-160x160.jpg') }}" class="user-image"
                  alt="User Image">
                <span class="hidden-xs">Alexander Pierce</span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="{{ asset('assets/ujian/assets/dist/img/user2-160x160.jpg') }}" class="img-circle"
                    alt="User Image">
                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- End Top Bar -->

    <!-- Sidebar -->
    <aside class="main-sidebar">
      <section class="sidebar">
        <!-- User Status -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{ asset('assets/ujian/assets/dist/img/user2-160x160.jpg') }}" class="img-circle"
              alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Alexander Pierce</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li class="active"><a href="{{ route('dashboard-index') }}"><i class="fa fa-dashboard"></i>
              <span>Dashboard</span></a></li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-desktop"></i> <span>Master Data</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('master-assesor') }}"><i class="fa fa-circle-o"></i> Master Assesor</a></li>
              <li><a href="{{ route('master-peserta') }}"><i class="fa fa-circle-o"></i> Master Peserta</a></li>
              <li><a href="{{ route('master-nomor-ujian') }}"><i class="fa fa-circle-o"></i> Master Nomor Ujian</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-link"></i> <span>Relasi</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="relasi_nomor_peserta.php"><i class="fa fa-circle-o"></i> Nomor Ujian - Peserta</a></li>
              <li><a href="relasi_nomor_antrian.php"><i class="fa fa-circle-o"></i> Nomor Ujian - Antrian</a></li>
            </ul>
          </li>
          <li><a href="{{ route('bank-soal') }}"><i class="fa fa-file-text-o"></i> <span>Bank Soal</span></a></li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-pencil-square-o"></i> <span>Ujian</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('jadwal-ujian') }}"><i class="fa fa-circle-o"></i> Jadwal Ujian</a></li>
              <li><a href="ujian_proses_ujian.php"><i class="fa fa-circle-o"></i> Proses Ujian</a></li>
              <li><a href="ujian_hasil_ujian.php"><i class="fa fa-circle-o"></i> Hasil Ujian</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-print"></i> <span>Laporan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="laporan_ujian.php"><i class="fa fa-circle-o"></i> Laporan Ujian</a></li>
              <li><a href="laporan_history.php"><i class="fa fa-circle-o"></i> Laporan History Ujian</a></li>
            </ul>
          </li>
          <br>
          <li class="text-center">
            <form action="{{ route('logout-dashboard') }}" method="POST">
              @csrf
              <button type="submit" class="btn btn-danger">
                <i class="fa fa-power-off"></i>
                <span>Logout</span>
              </button>
            </form>
          </li>
        </ul>
      </section>
    </aside>

    <!-- Konten -->
    @yield('main-content')
    <!-- End Konten -->


    <!-- Footer -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.18
      </div>
      <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
      reserved.
    </footer>
    <!-- End Footer -->

    <div class="control-sidebar-bg"></div>
  </div>

  <!-- jQuery 3 -->
  <script src="{{ asset('assets/ujian/assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="{{ asset('assets/ujian/assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <!-- SlimScroll -->
  <script src="{{ asset('assets/ujian/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
  <!-- FastClick -->
  <script src="{{ asset('assets/ujian/assets/bower_components/fastclick/lib/fastclick.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('assets/ujian/assets/dist/js/adminlte.min.js') }}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('assets/ujian/assets/dist/js/demo.js') }}"></script>
  {{-- Datatables JS 
<script type="text/javascript" src="{{ asset('assets/datatables/datatables.js') }}"></script> --}}

  <script>
    $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
  </script>

  @yield('after-script')
</body>

</html>