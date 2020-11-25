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
  <title>App Ujian</title>
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
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body class="hold-transition skin-blue layout-top-nav">
  <div class="wrapper">

    <header class="main-header">
      <nav class="navbar navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <a href="../assets/index2.html" class="navbar-brand"><b>C</b>omputer <b>B</b>ased <b>T</b>est</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
          </div>
          <div class="collapse navbar-collapse pull-right" id="navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="#"><b> Tanggal : <?= $hariBahasaIndonesia; ?>, <?= $tanggal; ?> <?= $bulanBahasaIndonesia; ?> <?= $Tahun ?></a> </b></li>
              <li><a href="#"><b> Jam : <span id="timestamp"></span></a> </b></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <div class="content-wrapper">
      <div class="container">

        <section class="content-header">
          <h1 class="text-center">
            SELAMAT DATANG <br>
            <small>Silahkan Masukan Nomor Ujian Anda Pada Box Dibawah Ini Untuk Melanjutkan</small>
          </h1>
        </section>

        <section class="content" style="margin-top: 2rem;">

          <div class="row">
            <div class="col-xs-6 col-sm-offset-3">
              <div class="box">
                <div class="box-body">
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">

                      <form class="form-horizontal">

                        <div class="form-group">
                          <label for="nama_assesor" class="h4 col-sm-12 text-center" style="margin-bottom: 2rem;">Nomor Ujian</label>
                          <div class="col-sm-12">
                            <input type="text" class="form-control" id="nomor_ujian" name="nomor_ujian" placeholder="Masukan nomor ujian">
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-sm-12">
                            <center>
                              <button type="submit" name="lanjut" class="btn btn-primary btn-sm btn-block">Selanjutnya &nbsp;<i class="fa fa-arrow-right"></i></button>
                            </center>
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
    </div>

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

  <!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script> -->

  <script>
    $(function() {
      setInterval(timestamp, 1000);
    });

    function timestamp() {
      $.ajax({
        // url: 'ajax_timestamp.php',
        url: '/ajax-timestamp',
        success: function(timestamp) {
          $('#timestamp').html(timestamp);
        }
      });
    }
  </script>
</body>

</html>