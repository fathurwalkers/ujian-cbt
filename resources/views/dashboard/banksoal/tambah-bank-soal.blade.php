@extends('layouts.admin-layouts')

@section('title', 'Dashboard - Admin')

@section('after-style')
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<script>
  tinymce.init({
      selector: '.textarea'
    });
</script>
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
            <h3 class="box-title">Tambah Data</h3>
            <a href="{{ route('bank-soal') }}" class="pull-right btn btn-warning btn-sm">
              <i class="fa fa-arrow-left"></i> Batal
            </a>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">

                <form class="form" action="{{ route('post-tambah-bank-soal') }}" method="POST"
                  enctype="multipart/form-data">
                  @csrf
                  <!-- Soal -->
                  <div class="form-group">
                    <label for="gambar_soal">Soal</label>
                    <input name="soal_file" type="file" class="form-control" id="gambar_soal">
                  </div>

                  <div class="form-group">
                    <textarea name="soal_teks" class="textarea" placeholder="Place some text here"
                      style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                      id="mytextarea"></textarea>
                  </div>

                  <!-- Jawaban A -->
                  <div class="form-group">
                    <label for="gambar_jawaban_a">Jawaban A</label>
                    <input name="soal_file1" type="file" class="form-control" id="gambar_jawaban_a">
                  </div>

                  <div class="form-group">
                    <textarea name="soal_opsi1" class="textarea" placeholder="Place some text here"
                      style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                      id="mytextarea"></textarea>
                  </div>

                  <!-- Jawaban B -->
                  <div class="form-group">
                    <label for="soal_file2">Jawaban B</label>
                    <input type="file" class="form-control" id="gambar_jawaban_b" name="soal_file2">
                  </div>

                  <div class="form-group">
                    <textarea class="textarea" name="soal_opsi2" placeholder="Place some text here"
                      style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                      id="mytextarea"></textarea>
                  </div>

                  <!-- Jawaban C -->
                  <div class="form-group">
                    <label for="gambar_jawaban_c">Jawaban C</label>
                    <input type="file" class="form-control" id="gambar_jawaban_c" name="soal_file3">
                  </div>

                  <div class="form-group">
                    <textarea class="textarea" name="soal_opsi3" placeholder="Place some text here"
                      style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                      id="mytextarea"></textarea>
                  </div>

                  <!-- Jawaban D -->
                  <div class="form-group">
                    <label for="gambar_jawaban_d">Jawaban D</label>
                    <input type="file" class="form-control" id="gambar_jawaban_d" name="soal_file4">
                  </div>

                  <div class="form-group">
                    <textarea class="textarea" name="soal_opsi4" placeholder="Place some text here"
                      style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                      id="mytextarea"></textarea>
                  </div>

                  <!-- Jawaban E -->
                  <div class="form-group">
                    <label for="gambar_jawaban_e">Jawaban E</label>
                    <input type="file" class="form-control" id="gambar_jawaban_e" name="soal_file5">
                  </div>

                  <div class="form-group">
                    <textarea class="textarea" name="soal_opsi5" placeholder="Place some text here"
                      style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                      id="mytextarea"></textarea>
                  </div>

                  <!-- Kunci Jawaban -->
                  <div class="form-group">
                    <label for="kunci_jawaban" class="control-label">Kunci Jawaban</label>
                    <select name="soal_jawaban" class="form-control select2" style="width: 100%;">
                      <option selected="selected" disabled>--Pilih--</option>
                      <option>A</option>
                      <option>B</option>
                      <option>C</option>
                      <option>D</option>
                      <option>E</option>
                    </select>
                  </div>

                  <!-- Bobot Soal -->
                  <div class="form-group">
                    <label for="bobot_soal" class="control-label">Bobot Soal</label>
                    <input type="text" class="form-control" id="bobot_soal" name="soal_bobot" placeholder="0"
                      onkeypress="return event.charCode >= 48 && event.charCode <=57">
                  </div>

                  <div class="box-body">
                    <div class="col-sm-12">
                      <button type="submit" name="simpan" class="btn btn-primary btn-sm pull-right"><i
                          class="fa fa-save"></i> Simpan</button>
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
<!-- CK Editor -->
<script src="../assets/bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  // $(function () {
  //   // Replace the <textarea id="editor1"> with a CKEditor
  //   // instance, using default configuration.
  //   CKEDITOR.replace('editor1')
  //   //bootstrap WYSIHTML5 - text editor
  //   $('.textarea').wysihtml5()

  //   //Initialize Select2 Elements
  //   $('.select2').select2()
  // })
</script>

@endsection