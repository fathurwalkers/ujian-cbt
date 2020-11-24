@extends('layouts.admin-layouts')

@section('title', 'Dashboard - Admin')

@section('after-style')
    
@endsection

@section('main-content')
  <!-- Konten -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Assesor
        <small>Data Assesor</small>
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Master Data Assesor</h3>
              <a href="master_assesor/tambah_data.php" class="pull-right btn btn-primary btn-sm btn-social">
                <i class="fa fa-plus"></i> Tambahkan Data
              </a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 10px;">No</th>
                  <th>Nama Assesor</th>
                  <th>NIRA</th>
                  <th>Urutan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>SURYA PALO</td>
                  <td>239 213129332123</td>
                  <td>1</td>
                  <td>
                    <center>
                      <a class="btn btn-warning btn-xs" title="Edit Data" href="master_assesor/edit_data.php"><span class="glyphicon glyphicon-edit"></span></a>
                      <a class="btn btn-danger btn-xs" title="Delete Data" href="#"><span class="glyphicon glyphicon-remove"></span></a>
                    </center>
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