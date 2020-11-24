@extends('layouts.admin-layouts')

@section('title', 'Dashboard - Admin')

@section('after-style')

@endsection

@section('main-content')
<!-- Konten -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Laporan Hasil Ujian
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Pilih Data</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-7 col-sm-offset-2">

                                <form class="form-horizontal">

                                    <div class="form-group">
                                        <label for="Nama Ujian" class="col-sm-3 control-label">Nama Ujian</label>

                                        <div class="col-sm-9">
                                            <select class="form-control select2" style="width: 100%;" name="ujian">
                                                <option selected="selected">Alabama</option>
                                                <option>Alaska</option>
                                                <option>California</option>
                                                <option>Delaware</option>
                                                <option>Tennessee</option>
                                                <option>Texas</option>
                                                <option>Washington</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="datepicker" class="col-sm-3 control-label">Tanggal Ujian</label>

                                        <div class="col-sm-9">
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="date" class="form-control pull-right" id="datepicker"
                                                    name="tanggal_ujian">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" name="cetak"
                                                class="btn btn-primary btn-sm pull-right"><i class="fa fa-print"></i>
                                                Cetak</button>
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