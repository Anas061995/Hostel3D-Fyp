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
        Rooms/
        <small>Room Details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
   </section>
   <br>

    <section class="content container-fluid">
      <div class= "row  shadow-lg p-3 mb-5 bg-white rounded">
      <div class="col-md-6 ">
        <h4 style="font-weight: bold;"> ROOM INFORMATION <H4>
      </div>
</div>
<div class ="row" style=" margin-left: 112px;" >
  <div class="col-md-3">
    <h5> Room No. </h5>
</div>
<div class="col-md-3 col-md-offset-1">
  <h5> Floor No. </h5>
</div>
<div class="col-md-3 col-md-offset-1">
  <h5> Total Seats:</h5>
</div>
</div>
<div class ="row" style=" margin-left: 112px;" >
  <div class="col-md-3">
    <h5> Available Seats: </h5>
</div>
<div class="col-md-3 col-md-offset-1">
  <h5> No. of Residents: </h5>
</div>
<div class="col-md-3 col-md-offset-1">
  <h5> </h5>
</div>
</div>
<div class= "row">
<div class="col-md-6 ">
  <h4 style="font-weight: bold;"> RESIDENT INFORMATION <H4>
</div>
</div>
<div class ="row" style=" margin-left: 112px;" >
  <div class="col-md-3">
    <h5> Name: </h5>
</div>
</div>
<div class= "row">
<div class="col-md-6 ">
  <h4 style="font-weight: bold;"> SERVICES <H4>
</div>
</div>
<div class ="row" style=" margin-left: 112px;" >
  <div class="col-md-3">
    <h5> Name: </h5>
</div>
<div class="col-md-3 col-md-offset-1">
  <h5>Charges: </h5>
</div>
</div>

<div class= "row">
<div class="col-md-6 ">
  <h4 style="font-weight: bold;"> INVENTORY INFORMATION <H4>
</div>
</div>
<div class ="row" style=" margin-left: 112px;" >
  <div class="col-md-3">
    <h5> Name: </h5>
</div>
<div class="col-md-3 col-md-offset-1">
  <h5>Quantity: </h5>
</div>
<div class="col-md-3 col-md-offset-1">
  <h5>Status: </h5>
</div>
</div>
    </section>
  </div>
    @include('includes.footer')
</div>
@endsection
@section('scripts')
<script src="{{asset('asset/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('asset/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/js/adminlte.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQ384eNh2btXKG7M__gzqPAOKoq6skHOY&callback=myMap"></script>
@endsection
