@extends('layouts.admin-layouts')

@section('title', 'Dashboard - Admin')

@section('after-style')

@endsection

@section('main-content')
<!-- Konten -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Nomor Ujian - Peserta
            <small>Data Nomor Ujian - Peserta</small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Relasi Data Nomor Ujian - Peserta</h3>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px;">No</th>
                                    <th>Nomor Ujian Peserta</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Waktu Masuk</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($peserta_ujian as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td>
                                        {{ $row->nomorujian->nomorujian }}
                                    </td>

                                    <td>{{ $row->peserta->peserta_nip }}</td>
                                    <td>{{ $row->peserta->peserta_nama }}</td>
                                    <td>{{ date('d-M-Y', strtotime($row->waktu_masuk)) }} |
                                        {{ date('h:i A', strtotime($row->waktu_masuk)) }}</td>
                                    <td>
                                        <a class="btn btn-danger btn-xs" title="Block Data"
                                            href="{{ route('delete-peserta-ujian', $row->id) }}"><span
                                                class="glyphicon glyphicon-ban-circle"></span>&nbsp; Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
<!-- End Konten -->
@endsection

@section('after-script')

@endsection