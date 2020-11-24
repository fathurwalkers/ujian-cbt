<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Waktu Mulai : 10:30 WITA</a></li>
          </ul>
        </div>

        <div class="collapse navbar-collapse pull-right" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Waktu Selesai : Berisikan hitungan waktu mundur</a></li>
          </ul>
        </div>
        
      </div>
    </nav>
  </header>
  
  <div class="content-wrapper">
    <div class="container">
      
      <section class="content-header">
        <h1 class="text-center">
          Proses Ujian
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-body">
                <table class="table table-bordered">
                  <tr>
                    <th rowspan="2" style="width: 6rem; padding-top: 2.5rem;">No</th>
                    <th rowspan="2" style=" width: 13rem; padding-top: 2.5rem;">Nomor Ujian</th>
                    <th rowspan="2" style="padding-top: 2.5rem;">Nama Peserta</th>
                    <th class="text-center" colspan="2">Jawaban Peserta</th>
                    <th class="text-center" style="width: 100px; padding-top: 2.5rem;" rowspan="2">Total Score</th>
                  </tr>
                  <tr>
                    <th class="text-center">Benar</th>
                    <th class="text-center">Salah</th>
                  </tr>
                  <tr>
                    <td>1.</td>
                    <td>CBT-001</td>
                    <td>SURYA PALO</td>
                    <td class="text-center"><span class="badge bg-yellow">70</span></td>
                    <td class="text-center"><span class="badge bg-yellow">70</span></td>
                    <td class="text-center"><span class="badge bg-yellow">70</span></td>
                  </tr>
                </table>
              </div>
            </div>
        </div>        
      </section>
    </div>
  </div>

</div>

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
</body>
</html>
