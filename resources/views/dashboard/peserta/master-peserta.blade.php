@extends('layouts.admin-layouts')

@section('title', 'Dashboard - Admin')

@section('after-style')

@endsection

@section('main-content')
<!-- Konten -->
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Peserta
      <small>Data Peserta</small>
    </h1>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Master Data Peserta</h3>
            <a class="pull-right btn btn-primary btn-sm btn-social" href="{{ route('tambah-peserta') }}">
              <i class="fa fa-plus"></i> Tambahkan Data
            </a>
          </div>
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th style="width: 10px;">No</th>
                  <th>Nama Peserta</th>
                  <th>NIP</th>
                  <th>NIK</th>
                  <th>Golongan</th>
                  <th>No. Telepon</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($semua_peserta as $row)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>
                    <a href="{{ url('/dashboard/detail-peserta') }}/{{ $row->id }}">
                      {{ $row->peserta_nama }}
                    </a>
                  </td>
                  <td>{{ $row->peserta_nip }}</td>
                  <td>{{ $row->peserta_nik }}</td>
                  <td>{{ $row->peserta_golongan }}</td>
                  <td>{{ $row->peserta_telepon }}</td>
                  <td>
                    <center>
                      <a class="btn btn-warning btn-xs" title="Edit Data"
                        href="{{ url('/dashboard/edit-peserta') }}/{{ $row->id }}"><span
                          class="glyphicon glyphicon-edit"></span></a>

                      <form action="{{ url('/dashboard/delete-peserta') }}/{{ $row->id }}" method="POST"
                        class="d-inline-flex">
                        @csrf
                        <button type="submit" class="btn btn-danger d-inline-block">
                          <span class="glyphicon glyphicon-remove"></span>
                        </button>
                      </form>
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