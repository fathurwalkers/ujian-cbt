@extends('layouts.admin-layouts')

@section('title', 'Dashboard - Admin')

@section('after-style')

@endsection

@section('main-content')
<!-- Konten -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Bank Soal
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Detail Soal</h3>
                        <a href="edit_data.php" class="pull-right btn btn-warning btn-sm">
                            <span class="glyphicon glyphicon-edit"></span> Edit
                        </a>
                        <a href="{{ route('bank-soal') }}" class="pull-right btn btn-default btn-sm"
                            style="margin-right: 10px;">
                            <i class="fa fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2 justify-content-center">

                                <h3 class="text-center">Soal</h3>

                                <p>Detail Soal</p>

                                <img src="{{ asset('storage/'.$banksoal->soal_file) }}" alt=""
                                    class="d-flex align-content-center" width="400px">
                                <p>{!! $banksoal->soal_teks !!}</p>

                                <hr class="my-4">

                                <h3 class="text-center">Jawaban</h3>

                                <h4>Pilihan A </h4>
                                <img src="{{ asset($banksoal->soal_file1) }}" alt="" class="d-flex align-content-center"
                                    width="250px">
                                <p>{!! $banksoal->soal_opsi1 !!}</p>


                                <h4>Pilihan B </h4>
                                <img src="{{ asset($banksoal->soal_file2) }}" alt="" class="d-flex align-content-center"
                                    width="250px">
                                <p>{!! $banksoal->soal_opsi2 !!} </p>


                                <h4>Pilihan C <i class='fa fa-check-circle text-success'></i></h4>
                                <img src="{{ asset($banksoal->soal_file3) }}" alt="" class="d-flex align-content-center"
                                    width="250px">
                                <p>{!! $banksoal->soal_opsi3 !!} (jika jawaban benar maka muncul centang hijau)</p>


                                <h4>Pilihan D </h4>
                                <img src="{{ asset($banksoal->soal_file4) }}" alt="" class="d-flex align-content-center"
                                    width="250px">
                                <p>{!! $banksoal->soal_opsi4 !!} </p>


                                <h4>Pilihan E </h4>
                                <img src="{{ asset($banksoal->soal_file5) }}" alt="" class="d-flex align-content-center"
                                    width="250px">
                                <p>{!! $banksoal->soal_opsi5 !!} </p>


                                <hr class="my-4">
                                <strong>Dibuat pada :</strong> {{ date('d-M-Y', strtotime($banksoal->created_at)) }}<br>
                                <strong>Terkahir diupdate :</strong>
                                {{ date('d-M-Y', strtotime($banksoal->updated_at)) }}

                            </div>

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