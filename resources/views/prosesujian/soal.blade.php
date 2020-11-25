@extends('layouts.home-layouts')

@section('title', 'CBT TEST')

@section('after-style')

@endsection


@section('main-content')
<!-- Konten -->
<div class="content-wrapper">
    <div class="container">

        <section class="content-header">
            <div class="row">
                <div class="col-xs-6">
                    <div style="font-size: 24px;"> UJIAN <small style="font-size: 16px;">Lembar Ujian</small></div>
                </div>
                <div class="col-xs-6">
                    <span class="badge bg-red pull-right" style="margin-top: 10px;">Sisa Waktu <span class="sisawaktu"
                            data-time="2020-11-25 00:51:43"></span></span>
                </div>
            </div>
        </section>

        <section class="content">

            <div class="row">
                <div class="col-xs-6">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title"><span class="badge bg-blue" style="font-size: 18px;">Soal
                                    &nbsp;/&nbsp;No.<span id="soalke">1</span> </span></h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body">
                            <input type="hidden" name="id_soal_1" value="5"><input type="hidden" name="rg_1" id="rg_1"
                                value="N">
                            <div class="step" id="widget_1">
                                <div class="text-center">
                                    <div class="w-25"></div>
                                </div>
                                <p>(2000 x 3) : 4 x 0 = ...</p>
                            </div>
                            <div class="funkyradio">
                                <div class="funkyradio-success" onclick="return simpan_sementara();">
                                    <input type="radio" id="opsi_a_5" name="opsi_1" value="A">
                                    <label for="opsi_a_5" style="padding: 0px 0 0px 50px; ">
                                        <div class="huruf_opsi">a</div>
                                        <p>
                                            <p>NULL</p>
                                        </p>
                                        <div class="w-25"></div>
                                    </label>
                                </div>
                                <div class="funkyradio-success" onclick="return simpan_sementara();">
                                    <input type="radio" id="opsi_b_5" name="opsi_1" value="B">
                                    <label for="opsi_b_5" style="padding: 0px 0 0px 50px; ">
                                        <div class="huruf_opsi">b</div>
                                        <p>
                                            <p>NaN</p>
                                        </p>
                                        <div class="w-25"></div>
                                    </label>
                                </div>
                                <div class="funkyradio-success" onclick="return simpan_sementara();">
                                    <input type="radio" id="opsi_c_5" name="opsi_1" value="C">
                                    <label for="opsi_c_5" style="padding: 0px 0 0px 50px; ">
                                        <div class="huruf_opsi">c</div>
                                        <p>
                                            <p>0</p>
                                        </p>
                                        <div class="w-25"></div>
                                    </label>
                                </div>
                                <div class="funkyradio-success" onclick="return simpan_sementara();">
                                    <input type="radio" id="opsi_d_5" name="opsi_1" value="D">
                                    <label for="opsi_d_5" style="padding: 0px 0 0px 50px; ">
                                        <div class="huruf_opsi">d</div>
                                        <p>
                                            <p>1</p>
                                        </p>
                                        <div class="w-25"></div>
                                    </label>
                                </div>
                                <div class="funkyradio-success" onclick="return simpan_sementara();">
                                    <input type="radio" id="opsi_e_5" name="opsi_1" value="E">
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
                            <h3 class="box-title"><span class="badge bg-blue" style="font-size: 18px;">Soal
                                    &nbsp;/&nbsp;No.<span id="soalke">2</span> </span></h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body">
                            <input type="hidden" name="id_soal_1" value="5"><input type="hidden" name="rg_1" id="rg_1"
                                value="N">
                            <div class="step" id="widget_1">
                                <div class="text-center">
                                    <div class="w-25"></div>
                                </div>
                                <p>(2000 x 3) : 4 x 0 = ...</p>
                            </div>
                            <div class="funkyradio">
                                <div class="funkyradio-success" onclick="return simpan_sementara();">
                                    <input type="radio" id="opsi_a_5" name="opsi_1" value="A">
                                    <label for="opsi_a_5" style="padding: 0px 0 0px 50px; ">
                                        <div class="huruf_opsi">a</div>
                                        <p>
                                            <p>NULL</p>
                                        </p>
                                        <div class="w-25"></div>
                                    </label>
                                </div>
                                <div class="funkyradio-success" onclick="return simpan_sementara();">
                                    <input type="radio" id="opsi_b_5" name="opsi_1" value="B">
                                    <label for="opsi_b_5" style="padding: 0px 0 0px 50px; ">
                                        <div class="huruf_opsi">b</div>
                                        <p>
                                            <p>NaN</p>
                                        </p>
                                        <div class="w-25"></div>
                                    </label>
                                </div>
                                <div class="funkyradio-success" onclick="return simpan_sementara();">
                                    <input type="radio" id="opsi_c_5" name="opsi_1" value="C">
                                    <label for="opsi_c_5" style="padding: 0px 0 0px 50px; ">
                                        <div class="huruf_opsi">c</div>
                                        <p>
                                            <p>0</p>
                                        </p>
                                        <div class="w-25"></div>
                                    </label>
                                </div>
                                <div class="funkyradio-success" onclick="return simpan_sementara();">
                                    <input type="radio" id="opsi_d_5" name="opsi_1" value="D">
                                    <label for="opsi_d_5" style="padding: 0px 0 0px 50px; ">
                                        <div class="huruf_opsi">d</div>
                                        <p>
                                            <p>1</p>
                                        </p>
                                        <div class="w-25"></div>
                                    </label>
                                </div>
                                <div class="funkyradio-success" onclick="return simpan_sementara();">
                                    <input type="radio" id="opsi_e_5" name="opsi_1" value="E">
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
<!-- End Konten -->
@endsection


@section('after-script')
{{-- <script>
    $(function() {
      setInterval(timestamp, 1000);
    });

    function timestamp() {
      $.ajax({
        // url: 'ajax_timestamp.php',
        url: '',
        success: function(timestamp) {
          $('#timestamp').html(timestamp);
        }
      });
    }
</script> --}}
@endsection