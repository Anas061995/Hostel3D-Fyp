@extends('layouts.app')
@section('styles')
  <link rel="stylesheet" href="{{asset('asset/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('asset/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('asset/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('asset/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{asset('asset/css/skins/skin-blue.min.css')}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
@endsection
@section('content')
@include('includes.nav')
@include('includes.hosteladminsidebar')
<div class="content-wrapper">

    <section class="content-header">
      <h1>
        Hostel Admin/
        <small>Reservations Details</small>
      </h1>
      <br>
      <br>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>

<h1> NAME: HAMNA ASLAM </h1>
<h1> Dummy data to  be shown</h1>



    </section>

    <!-- Main content -->
    <section class="content container-fluid">



    </section>

  </div>

    @include('includes.footer')

</div>
@endsection

@section('scripts')
<script src="{{asset('asset/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('asset/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('asset/js/adminlte.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQ384eNh2btXKG7M__gzqPAOKoq6skHOY&callback=myMap"></script>
@endsection
