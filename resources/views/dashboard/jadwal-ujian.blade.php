@extends('layouts.admin-layouts')

@section('title', 'Dashboard - Admin')

@section('after-style')

@endsection

@section('main-content')
<!-- Konten -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Jadwal Ujian
            <small>Data Jadwal Ujian</small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Jadwal Ujian</h3>
                        <a class="pull-right btn btn-primary btn-sm btn-social"
                            href="{{ route('tambah-jadwal-ujian') }}">
                            <i class="fa fa-plus"></i> Ujian Baru
                        </a>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px;">No</th>
                                    <th>Nama Ujian</th>
                                    <th>Jumlah Soal</th>
                                    <th>Tgl Ujian</th>
                                    <th>Waktu Ujian</th>
                                    <th>Jenis Soal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jadwalujian as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->ujian_nama }}</td>
                                    <td>{{ $row->ujian_jumlahsoal }}</td>
                                    <td>{{ $row->ujian_tanggal }}</td>
                                    <td>{{ $row->ujian_estimasiwaktu }}</td>
                                    <td>{{ $row->ujian_jenissoal }}</td>
                                    <td>
                                        <center>
                                            <a class="btn btn-warning btn-xs" title="Edit Data"
                                                href="jadwal_ujian/edit_data.php"><span
                                                    class="glyphicon glyphicon-edit"></span></a>
                                            <a class="btn btn-danger btn-xs" title="Delete Data" href="#"><span
                                                    class="glyphicon glyphicon-remove"></span></a>
                                        </center>
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