@extends('layouts.admin-layouts')

@section('title', 'Dashboard - Admin')

@section('after-style')
    
@endsection

@section('main-content')
  <!-- Konten -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Nomor Ujian
        <small>Data Nomor Ujian</small>
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <h3 class="box-title">Master Data Nomor Ujian</h3>
                <a class="pull-right btn btn-primary btn-sm btn-social" href="master_nomor_ujian/tambah_data.php">
                  <i class="fa fa-plus"></i> Tambahkan Data
                </a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nomor Ujian Peserta</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>CBT-001</td>
                  <td>
                    <a class="btn btn-warning btn-xs" title="Edit Data" href="master_nomor_ujian/edit_data.php"><span class="glyphicon glyphicon-edit"></span></a>
                    <a class="btn btn-danger btn-xs" title="Delete Data" href="#"><span class="glyphicon glyphicon-remove"></span></a>
                  </td>
                </tr>
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