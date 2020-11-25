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
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
  <!-- Style Me -->
  <link rel="stylesheet" href="../assets/dist/css/mystyle.css">

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
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#"><b> Peserta : SURYA PALO</b></a></li>
            <li><a href="#"><b> NIP : 82347823748723</b></a></li>
          </ul>
        </div>
        <div class="collapse navbar-collapse pull-right" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#"><b> Nomor Ujian : CBT-001</b></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  
  <div class="content-wrapper">
    <div class="container">
      
      <section class="content-header">
        <div class="row">
          <div class="col-xs-6">
            <div style="font-size: 24px;"> UJIAN <small style="font-size: 16px;">Lembar Ujian</small></div>
          </div>
          <div class="col-xs-6">
            <span class="badge bg-red pull-right" style="margin-top: 10px;">Sisa Waktu <span class="sisawaktu" data-time="2020-11-25 00:51:43"></span></span>
          </div>
        </div>
      </section>

      <section class="content">

        <div class="row">
          <div class="col-xs-6">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title"><span class="badge bg-blue" style="font-size: 18px;">Soal &nbsp;/&nbsp;No.<span id="soalke">1</span> </span></h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
              </div>
              <div class="box-body">
                <input type="hidden" name="id_soal_1" value="5"><input type="hidden" name="rg_1" id="rg_1" value="N">
                <div class="step" id="widget_1">
                  <div class="text-center">
                    <div class="w-25"></div>
                  </div>
                  <p>(2000 x 3) : 4 x 0 = ...</p>
                </div>
                <div class="funkyradio">
                  <div class="funkyradio-success" onclick="return simpan_sementara();">
                    <input type="radio" id="opsi_a_5" name="opsi_1" value="A" > 
                    <label for="opsi_a_5" style="padding: 0px 0 0px 50px; ">
                      <div class="huruf_opsi">a</div> 
                      <p>
                        <p>NULL</p>
                      </p>
                      <div class="w-25"></div>
                    </label>
                  </div>
                  <div class="funkyradio-success" onclick="return simpan_sementara();">
                    <input type="radio" id="opsi_b_5" name="opsi_1" value="B" > 
                    <label for="opsi_b_5" style="padding: 0px 0 0px 50px; ">
                      <div class="huruf_opsi">b</div> 
                      <p>
                        <p>NaN</p>
                      </p>
                      <div class="w-25"></div>
                    </label>
                  </div>
                  <div class="funkyradio-success" onclick="return simpan_sementara();">
                    <input type="radio" id="opsi_c_5" name="opsi_1" value="C" > 
                    <label for="opsi_c_5" style="padding: 0px 0 0px 50px; ">
                      <div class="huruf_opsi">c</div>
                      <p>
                        <p>0</p>
                      </p>
                      <div class="w-25"></div>
                    </label>
                  </div>
                  <div class="funkyradio-success" onclick="return simpan_sementara();">
                    <input type="radio" id="opsi_d_5" name="opsi_1" value="D" > 
                    <label for="opsi_d_5" style="padding: 0px 0 0px 50px; ">
                      <div class="huruf_opsi">d</div> 
                      <p>
                        <p>1</p>
                      </p>
                      <div class="w-25"></div>
                    </label>
                  </div>
                  <div class="funkyradio-success" onclick="return simpan_sementara();">
                    <input type="radio" id="opsi_e_5" name="opsi_1" value="E" > 
                    <label for="opsi_e_5" style="padding: 0px 0 0px 50px; ">
                      <div class="huruf_opsi">e</div> 
                      <p>
                        <p>-1</p>
                      </p>
                      <div class="w-25"></div>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title"><span class="badge bg-blue" style="font-size: 18px;">Soal &nbsp;/&nbsp;No.<span id="soalke">2</span> </span></h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
              </div>
              <div class="box-body">
                <input type="hidden" name="id_soal_1" value="5"><input type="hidden" name="rg_1" id="rg_1" value="N">
                <div class="step" id="widget_1">
                  <div class="text-center">
                    <div class="w-25"></div>
                  </div>
                  <p>(2000 x 3) : 4 x 0 = ...</p>
                </div>
                <div class="funkyradio">
                  <div class="funkyradio-success" onclick="return simpan_sementara();">
                    <input type="radio" id="opsi_a_5" name="opsi_1" value="A" > 
                    <label for="opsi_a_5" style="padding: 0px 0 0px 50px; ">
                      <div class="huruf_opsi">a</div> 
                      <p>
                        <p>NULL</p>
                      </p>
                      <div class="w-25"></div>
                    </label>
                  </div>
                  <div class="funkyradio-success" onclick="return simpan_sementara();">
                    <input type="radio" id="opsi_b_5" name="opsi_1" value="B" > 
                    <label for="opsi_b_5" style="padding: 0px 0 0px 50px; ">
                      <div class="huruf_opsi">b</div> 
                      <p>
                        <p>NaN</p>
                      </p>
                      <div class="w-25"></div>
                    </label>
                  </div>
                  <div class="funkyradio-success" onclick="return simpan_sementara();">
                    <input type="radio" id="opsi_c_5" name="opsi_1" value="C" > 
                    <label for="opsi_c_5" style="padding: 0px 0 0px 50px; ">
                      <div class="huruf_opsi">c</div>
                      <p>
                        <p>0</p>
                      </p>
                      <div class="w-25"></div>
                    </label>
                  </div>
                  <div class="funkyradio-success" onclick="return simpan_sementara();">
                    <input type="radio" id="opsi_d_5" name="opsi_1" value="D" > 
                    <label for="opsi_d_5" style="padding: 0px 0 0px 50px; ">
                      <div class="huruf_opsi">d</div> 
                      <p>
                        <p>1</p>
                      </p>
                      <div class="w-25"></div>
                    </label>
                  </div>
                  <div class="funkyradio-success" onclick="return simpan_sementara();">
                    <input type="radio" id="opsi_e_5" name="opsi_1" value="E" > 
                    <label for="opsi_e_5" style="padding: 0px 0 0px 50px; ">
                      <div class="huruf_opsi">e</div> 
                      <p>
                        <p>-1</p>
                      </p>
                      <div class="w-25"></div>
                    </label>
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
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>

</body>
</html>
