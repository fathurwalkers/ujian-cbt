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
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tambah Data</h3>
                        <a href="{{ route('jadwal-ujian') }}" class="pull-right btn btn-warning btn-sm">
                            <i class="fa fa-arrow-left"></i> Batal
                        </a>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-7 col-sm-offset-2">

                                <form class="form-horizontal" action="{{ route('post-tambah-jadwalujian') }}"
                                    method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama_ujian" class="col-sm-3 control-label">Nama Ujian</label>

                                        <div class="col-sm-9">
                                            <input name="nama_ujian" type="text" class="form-control" id="nama_ujian">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="jumlah_soal" class="col-sm-3 control-label">Jumlah Soal</label>

                                        <div class="col-sm-9">
                                            <input name="jumlah_soal" type="text" class="form-control" id="jumlah_soal"
                                                placeholder="0"
                                                onkeypress="return event.charCode >= 48 && event.charCode <=57">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="datepicker" class="col-sm-3 control-label">Tanggal Ujian</label>

                                        <div class="col-sm-9">
                                            <div class="input-group date">
                                                <input name="tanggal_ujian" type="date" class="form-control pull-right"
                                                    id="datepicker">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="estimasi_waktu" class="col-sm-3 control-label">Estimasi Waktu
                                            Ujian</label>

                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input name="estimasi_waktu" type="text" class="form-control"
                                                    id="estimasi_waktu" placeholder="0"
                                                    onkeypress="return event.charCode >= 48 && event.charCode <=57">

                                                <div class="input-group-addon">
                                                    Menit
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="waktu_mulai_ujian" class="col-sm-3 control-label">Waktu Mulai
                                            Ujian</label>

                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input name="waktu_mulai_ujian" type="text"
                                                    class="form-control timepicker" id="waktu_mulai_ujian">

                                                <div class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="waktu_selesai_ujian" class="col-sm-3 control-label">Waktu Selesai
                                            Ujian</label>

                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input name="waktu_selesai_ujian" type="text"
                                                    class="form-control timepicker" id="waktu_selesai_ujian">

                                                <div class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="jenis_soal" class="col-sm-3 control-label">Jenis Soal</label>

                                        <div class="col-sm-9">
                                            <select name="jenis_soal" class="form-control select2" style="width: 100%;">
                                                <option selected="selected" disabled>--Pilih--</option>
                                                <option>Acak</option>
                                                <option>Urut</option>
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

    </s