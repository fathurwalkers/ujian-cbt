<?php
date_default_timezone_set('Asia/Makassar'); //Menyesuaikan waktu dengan tempat kita tinggal

function hariIndo($hariInggris)
{
  switch ($hariInggris) {
    case 'Sunday':
      return 'Minggu';
    case 'Monday':
      return 'Senin';
    case 'Tuesday':
      return 'Selasa';
    case 'Wednesday':
      return 'Rabu';
    case 'Thursday':
      return 'Kamis';
    case 'Friday':
      return 'Jumat';
    case 'Saturday':
      return 'Sabtu';
    default:
      return 'hari tidak valid';
  }
}

function bulanIndo($bulanInggris)
{
  switch ($bulanInggris) {
    case 'January':
      return 'Januari';
    case 'February':
      return 'Februari';
    case 'March':
      return 'Maret';
    case 'April':
      return 'April';
    case 'May':
      return 'Mei';
    case 'June':
      return 'Juni';
    case 'July':
      return 'Juli';
    case 'August':
      return 'Agustus';
    case 'September':
      return 'September';
    case 'October':
      return 'Oktober';
    case 'November':
      return 'November';
    case 'December':
      return 'Desember';
    default:
      return 'hari tidak valid';
  }
}

$hariBahasaInggris = date('l');
$hariBahasaIndonesia = hariIndo($hariBahasaInggris);

$bulanBahasaInggris = date('F');
$bulanBahasaIndonesia = bulanIndo($bulanBahasaInggris);

$tanggal = date("d");
$Tahun = date("Y");

?>
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

  <!-- Google Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  {{-- <link rel="stylesheet" href="{{ asset('assets/ujian/mystyle.css') }}"> --}}
  @yield('after-style')
</head>

<body class="hold-transition skin-blue layout-top-nav">
  <div class="wrapper">

    <header class="main-header">
      <nav class="navbar navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <a href="../assets/index2.html" class="navbar-brand"><b>C</b>omputer <b>B</b>ased
              <b>T</b>est</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
          </div>
          <div class="collapse navbar-collapse pull-right" id="navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="#"><b> Tanggal : <?= $hariBahasaIndonesia; ?>, <?= $tanggal; ?>
                    <?= $bulanBahasaIndonesia; ?> <?= $Tahun ?></a> </b></li>
              {{-- <li><a href="#"><b> Jam : <span id="timestamp"></span></a> </b></li> --}}
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- End Top Bar -->



    @yield('main-content')
  </div>

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
  <script src="{{ asset('assets/ujian/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}">
  </script>
  <!-- FastClick -->
  <script src="{{ asset('assets/ujian/assets/bower_components/fastclick/lib/fastclick.jss') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('assets/ujian/assets/dist/js/adminlte.min.js') }}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('assets/ujian/assets/dist/js/demo.js') }}"></script>
  @yield('after-script')
</body>

</html>