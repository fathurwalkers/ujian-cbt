@extends('layouts.admin-layouts')

@section('title', 'Dashboard - Admin')

@section('after-style')

@endsection

@section('main-content')
<!-- Konten -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Master Nomor Ujian
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Nomor Ujian</h3>
                        <a href="../master_nomor_ujian.php" class="pull-right btn btn-warning btn-sm">
                            <i class="fa fa-arrow-left"></i> Batal
                        </a>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-7 col-sm-offset-2">

                                <form class="form-horizontal"
                                    action="{{ url('/dashboard/update-nomor-ujian') }}/{{ $nomorujian->id }}"
                                    method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nomor_ujian" class="col-sm-3 control-label">Nomor Ujian</label>

                                        <div class="col-sm-9">
                                            <input value="{{ $nomorujian->nomorujian }}" name="nomorujian" type="text"
                                                class="form-control" id="nomor_ujian">
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