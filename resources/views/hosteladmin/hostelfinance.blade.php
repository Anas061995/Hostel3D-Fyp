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
        <small>Finance</small>
      </h1>
      <br>
      <br>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
  <div class="row" style="padding-left: 86px;  margin-top: -4px;" >
    <div class=" col-md-3">
      <!-- small box -->
      <div class="small-box" style="background-color: #80858c !important; color:white;">
        <div class="inner">
          <h3>53<sup style="font-size: 20px">%</sup></h3>

          <p>Dues</p>
        </div>
        <div class="icon">
        <img src="{{asset('asset/img/due.png')}}"> </img>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-md-3 col-md-offset-1">
      <!-- small box -->
      <div class="small-box bg-blue">
        <div class="inner">
          <h3>53<sup style="font-size: 20px">%</sup></h3>
          <p>Income</p>
        </div>
        <div class="icon">
      <img src="{{asset('asset/img/income.png')}}"> </img>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-md-3 col-md-offset-1">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>53<sup style="font-size: 20px">%</sup></h3>
          <p>Expenses</p>
        </div>
        <div class="icon">
        <img src="{{asset('asset/img/expense.png')}}"> </img>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
  <br>
  <div class= "row" style="padding-left: 86px;">
    <div class="col-md-3">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>53<sup style="font-size: 20px">%</sup></h3>
          <p>Resident Dues</p>
        </div>
        <div class="icon">
    <img src="{{asset('asset/img/coins.png')}}"> </img>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-md-3 col-md-offset-1">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>53<sup style="font-size: 20px">%</sup></h3>
          <p> Revenue</p>
        </div>
        <div class="icon">
            <img src="{{asset('asset/img/revenue.png')}}"> </img>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-md-3 col-md-offset-1">
      <!-- small box -->
      <div class="small-box" style="background-color: #a09b5b !important; color:white;">
        <div class="inner">
          <h3>53<sup style="font-size: 20px">%</sup></h3>
          <p>Mess Payments</p>
        </div>
        <div class="icon">
            <img src="{{asset('asset/img/mess.png')}}"> </img>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
  <div class= "row" style="padding: 65px; text-align: center; background-color: #dcd8d1">
      <div class="col-md-3" style="">
      <a  href="">  <img src="{{asset('asset/img/a.png')}}"> </img> </a>
      <a  href=""><h4 style="  text-align: center;  font-size: x-large;"> Hostel Rent </h4> </a>
      </div>
      <div class="col-md-3">
      <a  href="">  <img src="{{asset('asset/img/b.png')}}"> </img> </a>
        <a  href="">  <h4 style="  text-align: center;  font-size: x-large;"> Utility Bills </h4> </a>
      </div>
      <div class="col-md-3">
      <a  href="">  <img src="{{asset('asset/img/aa.png')}}"> </img> </a>
      <a  href="">  <h4 style="  text-align: center; font-size: x-large;"> Inventory Bills </h4> </a>
      </div>
      <div class="col-md-3">
      <a  href="">  <img src="{{asset('asset/img/service.png')}}"> </img> </a>
      <a  href="">  <h4 style=" text-align: center;   font-size: x-large;"> Service Charges </h4> </a>
      </div>
    </div>

    </section>

  </div>
    @include('includes.footer')
@endsection
@section('scripts')
<script src="{{asset('asset/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('asset/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/js/adminlte.min.js')}}"></script>
@endsection
