@extends('layouts.admin-layouts')

@section('title', 'Detail Peserta - Admin')

@section('after-style')

@endsection

@section('main-content')
<div class="content-wrapper" style="min-height: 735px;">
  <section class="content-header">
    <h1>
      Detail Informasi Peserta
    </h1>
  </section>

  <section class="content">
    <div class="callout callout-light">
      <h4>Nama : {{ $peserta_detail->peserta_nama }}</h4>

      <p>NIP : {{ $peserta_detail->peserta_nip }}</p>
      <p>Pangkat : {{ $peserta_detail->peserta_pangkat }}</p>
      <p>Golongan : {{ $peserta_detail->peserta_golongan }}</p>
      <p>Jabatan : {{ $peserta_detail->peserta_jabatan }}</p>
    </div>

  </section>
</div>
@endsection

@section('after-script')

@endsection