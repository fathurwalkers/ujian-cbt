<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue-light fixed sidebar-mini">

<div class="wrapper">

  <!-- Top Bar -->
  <header class="main-header">
    <a href="../assets/index2.html" class="logo">
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
              <img src="../assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
          <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="../index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-desktop"></i> <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../master_assesor.php"><i class="fa fa-circle-o"></i> Master Assesor</a></li>
            <li><a href="../master_peserta.php"><i class="fa fa-circle-o"></i> Master Peserta</a></li>
            <li class="active"><a href="../master_nomor_ujian.php"><i class="fa fa-circle-o"></i> Master Nomor Ujian</a></li>
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
            <li><a href="../relasi_nomor_peserta.php"><i class="fa fa-circle-o"></i> Nomor Ujian - Peserta</a></li>
            <li><a href="../relasi_nomor_antrian.php"><i class="fa fa-circle-o"></i> Nomor Ujian - Antrian</a></li>
          </ul>
        </li>
        <li><a href="bank_soal.php"><i class="fa fa-file-text-o"></i> <span>Bank Soal</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil-square-o"></i> <span>Ujian</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../ujian_jadwal_ujian.php"><i class="fa fa-circle-o"></i> Jadwal Ujian</a></li>
            <li><a href="../ujian_proses_ujian.php" target="_blank"><i class="fa fa-circle-o"></i> Proses Ujian</a></li>
            <li><a href="../ujian_hasil_ujian.php"><i class="fa fa-circle-o"></i> Hasil Ujian</a></li>
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
            <li><a href="../laporan_ujian.php"><i class="fa fa-circle-o"></i> Laporan Ujian</a></li>
            <li><a href="../laporan_history.php"><i class="fa fa-circle-o"></i> Laporan History Ujian</a></li>
          </ul>
        </li>
        <li><a href="../logout.php"><i class="fa fa-power-off"></i> <span>Logout</span></a></li>
      </ul>
    </section>
  </aside>

  <!-- Konten -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Master Nomor Ujian
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Data</h3>
                <a href="../master_nomor_ujian.php" class="pull-right btn btn-warning btn-sm">
                  <i class="fa fa-arrow-left"></i> Batal
                </a>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-sm-7 col-sm-offset-2">

                  <form class="form-horizontal">

                    <div class="form-group">
                      <label for="nomor_ujian" class="col-sm-3 control-label">Nomor Ujian</label>

                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="nomor_ujian" name="nomor_ujian">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-12">
                        <button type="submit" name="simpan" class="btn btn-primary btn-sm pull-right"><i class="fa fa-save"></i> Update</button>
                      </div>
                    </div>

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
  </div>
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
<script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })
</script>
</body>
</html>
