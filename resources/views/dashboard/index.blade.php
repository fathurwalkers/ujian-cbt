@extends('layouts.admin-layouts')

@section('title', 'Dashboard - Admin')

@section('after-style')
    
@endsection

@section('main-content')
<div class="content-wrapper">

  <section class="content-header">

    <h1>
      Dashboard
      <small>Admin Panel</small>
    </h1>

  </section>

  <section class="content">
    
    <div class="callout callout-info">
      <h4>Tip!</h4>
      <p>Add the fixed class to the body tag to get this layout. The fixed layout is your best option if your sidebar
        is bigger than your content because it prevents extra unwanted scrolling.</p>
    </div>

  </section>

</div>
@endsection

@section('after-script')
    
@endsection