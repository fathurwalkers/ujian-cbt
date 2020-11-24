@extends('layouts.admin-layouts')

@section('title', 'Dashboard - Admin')

@section('after-style')
    
@endsection

@section('main-content')
  <!-- Konten -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Master Peserta
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Tambah Data</h3>
            <a href="{{ route('master-peserta') }}" class="pull-right btn btn-warning btn-sm">
                  <i class="fa fa-arrow-left"></i> Batal
                </a>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-sm-7 col-sm-offset-2">

                <form class="form-horizontal" action="{{ route('post-tambah-peserta') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="nama_peserta" class="col-sm-3 control-label">Nama Peserta</label>

                      <div class="col-sm-9">
                        <input name="peserta_nama" type="text" class="form-control" id="nama_peserta">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="nik" class="col-sm-3 control-label">NIK</label>

                      <div class="col-sm-9">
                        <input name="peserta_nik" type="text" class="form-control" id="nik" placeholder="0" onkeypress="return event.charCode >= 48 && event.charCode <=57">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="nip" class="col-sm-3 control-label">NIP</label>

                      <div class="col-sm-9">
                        <input name="peserta_nip" type="text" class="form-control" id="nip" placeholder="0" onkeypress="return event.charCode >= 48 && event.charCode <=57">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="pangkat" class="col-sm-3 control-label">Pangkat</label>

                      <div class="col-sm-9">
                        <input name="peserta_pangkat" type="text" class="form-control" id="pangkat">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="jabatan" class="col-sm-3 control-label">Jabatan</label>

                      <div class="col-sm-9">
                        <textarea name="peserta_jabatan" class="form-control" rows="3" id="jabatan" placeholder="Enter ..."></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                        <label for="golongan" class="col-sm-3 control-label">Golongan</label>
  
                        <div class="col-sm-9">
                          <input name="peserta_golongan" type="text" class="form-control" id="golongan">
                        </div>
                      </div>

                    <div class="form-group">
                      <label for="telepon" class="col-sm-3 control-label">Telepon</label>

                      <div class="col-sm-9">
                        <input name="peserta_telepon" type="text" class="form-control" id="telepon" placeholder="0" onkeypress="return event.charCode >= 48 && event.charCode <=57">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="peserta_jeniskelamin" class="col-sm-3 control-label">Jenis Kelamin</label>

                      <div class="col-sm-9">
                        <select name="peserta_jeniskelamin" class="form-control select2" style="width: 100%;">
                          <option selected="selected" disabled>--Pilih--</option>
                          <option>Laki-Laki</option>
                          <option>Perempuan</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-12">
                        <button type="submit" name="simpan" class="btn btn-primary btn-sm pull-right"><i class="fa fa-save"></i> Simpan</button>
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
  <!-- End Konten -->
@endsection

@section('after-script')

@endsection