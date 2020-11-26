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

                <form action="{{ route('cek-jawaban-soal') }}" method="POST">
                    @csrf
                    <input name="peserta_id" type="hidden" value="{{ $peserta->id }}">
                    {{-- <input name="nomorujian_id" type="hidden" value="{{ $nomorujian->id }}"> --}}
                    <input name="pesertaujian_id" type="hidden" value="{{ $pesertaujian->id }}">

                    @php
                    $x = 1;
                    @endphp
                    @foreach ($banksoal as $soal)
                    {{-- <form action="" method="POST"> --}}
                    {{-- <input name="banksoal_id[{{ $loop->iteration }}]" type="hidden" value="{{ $soal->id }}"> --}}


                    <div class="col-xs-6">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><span class="badge bg-blue" style="font-size: 18px;">Soal
                                        &nbsp;/&nbsp;No.<span id="soalke">{{ $loop->iteration }}</span> </span></h3>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="box-body">
                                <input type="hidden" name="soal_id{{ $x++ }}" value="{{ $soal->id }}"><input
                                    type="hidden" name="rg_1" id="rg_1" value="N">
                                <div class="step" id="widget_1">
                                    <div class="text-center">
                                        <div class="w-25"></div>
                                    </div>
                                    <p>{!! $soal->soal_teks !!}</p>
                                </div>
                                <table border="0">
                                    <tr>
                                        <td style="width:2rem;">A.</td>
                                        <td style="width:2rem;"><input type="radio" name="soal_opsi[]{{ $x++ }}"
                                                value="{{ $soal->soal_opsi1 }}">
                                        </td>
                                        <td>{!! $soal->soal_opsi1 !!}</td>
                                    </tr>
                                    <tr>
                                        <td>B.</td>
                                        <td><input type="radio" name="soal_opsi[]{{ $x++ }}"
                                                value="{{ $soal->soal_opsi2 }}"></td>
                                        <td>{!! $soal->soal_opsi2 !!}</td>
                                    </tr>
                                    <tr>
                                        <td>C.</td>
                                        <td><input type="radio" name="soal_opsi[]{{ $x++ }}"
                                                value="{{ $soal->soal_opsi3 }}"></td>
                                        <td>{!! $soal->soal_opsi3 !!}</td>
                                    </tr>
                                    <tr>
                                        <td>D.</td>
                                        <td><input type="radio" name="soal_opsi[]{{ $x++ }}"
                                                value="{{ $soal->soal_opsi4 }}"></td>
                                        <td>{!! $soal->soal_opsi4 !!}</td>
                                    </tr>
                                    <tr>
                                        <td>E.</td>
                                        <td><input type="radio" name="soal_opsi[]{{ $x++ }}"
                                                value="{{ $soal->soal_opsi5 }}"></td>
                                        <td>{!! $soal->soal_opsi5 !!}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>



                    @endforeach
                    <button type="submit" class="btn btn-success my-2 py-4 bg-dark mx-auto">
                        Selesaikan Ujian
                    </button>
                </form>


                {{-- <div class="col-xs-6">
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
                            <table border="0">
                                <tr>
                                    <td style="width:2rem;">A.</td>
                                    <td style="width:2rem;"><input type="radio" name="pilihan2" value="A"></td>
                                    <td>Isi Jawaban</td>
                                </tr>
                                <tr>
                                    <td>B.</td>
                                    <td><input type="radio" name="pilihan2" value="B"></td>
                                    <td>Isi Jawaban</td>
                                </tr>
                                <tr>
                                    <td>C.</td>
                                    <td><input type="radio" name="pilihan2" value="C"></td>
                                    <td>Isi Jawaban</td>
                                </tr>
                                <tr>
                                    <td>D.</td>
                                    <td><input type="radio" name="pilihan2" value="D"></td>
                                    <td>Isi Jawaban</td>
                                </tr>
                                <tr>
                                    <td>E.</td>
                                    <td><input type="radio" name="pilihan2" value="E"></td>
                                    <td>Isi Jawaban</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div> --}}

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