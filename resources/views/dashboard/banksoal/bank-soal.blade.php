@extends('layouts.admin-layouts')

@section('title', 'Dashboard - Admin')

@section('after-style')

@endsection

@section('main-content')

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Soal
      <small>Bank Soal</small>
    </h1>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Bank Soal</h3>
            <a class="pull-right btn btn-primary btn-sm btn-social" href="{{ route('tambah-bank-soal') }}">
              <i class="fa fa-plus"></i> Buat Soal
            </a>
          </div>
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th style="width: 10px;">No</th>
                  <th>Soal</th>
                  <th>Tanggal Dibuat</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($banksoal as $soal)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $soal->soal_teks }}</td>
                  <td>{{ date('d-M-Y', strtotime($soal->created_at)) }}</td>
                  <td>
                    <a class="btn btn-default btn-xs" title="Lihat Data"
                      href="{{ url('/dashboard/detail-bank-soal') }}/{{ $soal->id }}"><i class="fa fa-eye"></i>
                      Detail</a>
                    <a class="btn btn-warning btn-xs" title="Edit Data" href="bank_soal/edit_data.php"><span
                        class="glyphicon glyphicon-edit"></span></a>
                    <a class="btn btn-danger btn-xs" title="Delete Data" href="#"><span
                        class="glyphicon glyphicon-remove"></span></a>
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

@endsection

@section('after-script')

@endsection