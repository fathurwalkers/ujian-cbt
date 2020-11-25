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
  <!-- Select2 -->
  <link rel="stylesheet" href="../assets/bower_components/select2/dist/css/select2.min.css">
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
            <li><a href="#"><b> Tanggal : </a> </b></li>
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
          BIODATA <br>
          <small>Silahkan Pilih Nomor Induk Pegawai Anda Pada Box Dibawah Ini Untuk Mengisi Biodata</small>
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

                      <div class="form-group" style="margin-top: 1.6rem;">

                        <div class="col-sm-12">
                          <select class="form-control select2" style="width: 100%;" name="nip">
                            <option selected="selected" disabled>--Pilih Nomor Induk Pegawai--</option>
                            <option value="1">48923894932482</option>
                            <option value="2">32478234823748</option>
                            <option value="3">82347823748723</option>
                            <option value="4">21736219389218</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Peserta" value="SURYA PALO" disabled>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="pangkat" name="pangkat" placeholder="Pangkat Peserta" value="Pembina" disabled>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="golongan" name="golongan" placeholder="Golongan Peserta" value="IV/A" disabled>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-12">
                          <textarea type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan Peserta" disabled>Sekretaris Satuan Polisi Pamong Praja Kabupaten Buton Selatan</textarea>
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
<!-- Select2 -->
<script src="../assets/bower_components/select2/dist/js/select2.full.min.js"></script>
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
