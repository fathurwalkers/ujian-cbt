@extends('layouts.admin-layouts')

@section('title', 'Dashboard - Admin')

@section('after-style')

@endsection

@section('main-content')
<!-- Konten -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Master Assesor
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tambah Data</h3>
                        <a href="{{ route('master-assesor') }}" class="pull-right btn btn-warning btn-sm">
                            <i class="fa fa-arrow-left"></i> Batal
                        </a>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-7 col-sm-offset-2">

                                <form class="form-horizontal"
                                    action="{{ url('/dashboard/update-assesor') }}/{{ $assesor->id }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama_assesor" class="col-sm-3 control-label">Nama Assesor</label>

                                        <div class="col-sm-9">
                                            <input value="{{ $assesor->assesor_nama }}" name="assesor_nama" type="text"
                                                class="form-control" id="nama_assesor">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="NIRA" class="col-sm-3 control-label">Nama NIRA</label>

                                        <div class="col-sm-9">
                                            <input value="{{ $assesor->assesor_nira }}" name="assesor_nira" type="text"
                                                class="form-control" id="NIRA" placeholder="0"
                                                onkeypress="return event.charCode >= 48 && event.charCode <=57">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="urutan_assesor" class="col-sm-3 control-label">Urutan
                                            Assesor</label>

                                        <div class="col-sm-9">
                                            <select value="{{ $assesor->assesor_urutan }}" name="assesor_urutan"
                                                class="form-control select2" style="width: 100%;">
                                                <?php for ($i = 1; $i <= 10; $i++) { ?>
                                                <option><?= $i ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="assesor_jeniskelamin" class="col-sm-3 control-label">Jenis
                                            Kelamin</label>

                                        <div class="col-sm-9">
                                            <select value="{{ $assesor->assesor_jeniskelamin }}"
                                                name="assesor_jeniskelamin" class="form-control select2"
                                                style="width: 100%;">
                                                <option>Laki-Laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" name="simpan"
                                                class="btn btn-primary btn-sm pull-right"><i class="fa fa-save"></i>
                                                Simpan</button>
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