@extends('layouts.home-layouts')

@section('title', 'CBT TEST')

@section('after-style')

@endsection


@section('main-content')
<!-- Konten -->
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

                                    <form class="form-horizontal" action="{{ route('post-index-proses-ujian') }}"
                                        method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="nama_assesor" class="h4 col-sm-12 text-center"
                                                style="margin-bottom: 2rem;">Nomor Ujian</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="nomor_ujian"
                                                    name="nomorujian" placeholder="Masukan nomor ujian">
                                            </div>
                                        </div>

                                        <div class="form-group" style="margin-top: 1.6rem;">

                                            <div class="col-sm-12">
                                                <select name="peserta_nip" class="form-control select2"
                                                    style="width: 100%;">
                                                    <option selected="selected" disabled>--Pilih Nomor Induk Pegawai--
                                                    </option>
                                                    @foreach ($peserta as $row)
                                                    <option value="{{ $row->peserta_nip }}">{{ $row->peserta_nip }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <center>
                                                    <button type="submit" name="lanjut"
                                                        class="btn btn-primary btn-sm btn-block">Selanjutnya &nbsp;<i
                                                            class="fa fa-arrow-right"></i></button>
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