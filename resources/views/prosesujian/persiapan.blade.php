@extends('layouts.home-layouts')

@section('title', 'CBT TEST')

@section('after-style')

@endsection


@section('main-content')
<!-- Konten -->
<div class="content-wrapper">
    <div class="container">

        <section class="content-header">
            <h1>
                UJIAN <small>Preparation</small>
            </h1>
        </section>

        <section class="content">

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Konfirmasi Data</h3>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th style="width: 13rem;">Nomor Ujian</th>
                                            <td>{{ $nomorujian->nomorujian }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 13rem;">Nama</th>
                                            <td>{{ $peserta->peserta_nama }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 13rem;">NIP</th>
                                            <td>{{ $peserta->peserta_nip }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 13rem;">Pangkat</th>
                                            <td>{{ $peserta->peserta_pangkat }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 13rem;">Golongan</th>
                                            <td>{{ $peserta->peserta_golongan }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 13rem;">Jabatan</th>
                                            <td>{{ $peserta->peserta_jabatan }}</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-sm-6">

                                    <div class="callout callout-info">
                                        <p>Silahkan menekan tombol "MULAI" berwarna hijau ini untuk memulai ujian.</p>
                                    </div>

                                    <form class="form-horizontal" action="{{ route('soal-index') }}" method="POST">
                                        @csrf
                                        <input name="peserta_id" type="hidden" value="{{ $peserta->id }}">
                                        <input name="nomorujian_id" type="hidden" value="{{ $nomorujian->id }}">
                                        <input name="pesertaujian_id" type="hidden" value="{{ $peserta_ujian->id }}">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button type="submit" name="lanjut"
                                                    class="btn btn-lg btn-success">Mulai</button>
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