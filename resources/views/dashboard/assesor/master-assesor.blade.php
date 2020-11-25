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
            <a href="{{ route('tambah-assesor') }}" class="pull-right btn btn-primary btn-sm btn-social">
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
                @foreach ($assesor as $row)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $row->assesor_nama }}</td>
                  <td>{{ $row->assesor_nira }}</td>
                  <td>{{ $row->assesor_urutan }}</td>
                  <td>
                    <center>
                      <a class="btn btn-warning btn-xs" title="Edit Data"
                        href="{{ url('/dashboard/edit-assesor') }}/{{ $row->id }}"><span
                          class="glyphicon glyphicon-edit"></span></a>

                      <a class="btn btn-danger btn-xs" title="Delete Data"
                        href="{{ url('/dashboard/delete-assesor') }}/{{ $row->id }}"><span
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