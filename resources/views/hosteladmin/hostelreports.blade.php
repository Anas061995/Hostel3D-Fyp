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
        <small>Reports</small>
      </h1>
      <br>
      <br>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>

<<<<<<< HEAD
      <!-- Main content -->
  <section class="content">

    <div style="margin-left:145px;">
      @foreach ($reportdetails as $var)
      <div class="col-md-5">
        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="../../asset/img/photo3.jpg" alt="Mess picture">
            <br>
            </br>
            <h3 class="profile-username text-center">Mess Report</h3>
            <p class="text-muted text-center">Mess Menus</p>

            <center><a type="submit" class="btn btn-primary btn-xs "
            onclick="event.preventDefault(); document.getElementById('form_{{ $var->id }}').submit();"
            href="{{route('generatemessreport' , $var->id )}}"> Generate Mess Report</a></center>
            <form id="form_{{ $var->id }}" action="{{ route('generatemessreport') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
                <input type="hidden" name="complaintdetails" value="{{$var->id}}" >
            </form>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
        <!-- /.box -->

        <div class="col-md-5">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">

              <img class="profile-user-img img-responsive img-circle" src="../../asset/img/photo3.jpg" alt="Finance picture">
              <br>
              </br>
              <h3 class="profile-username text-center">Finance Report</h3>
              <p class="text-muted text-center">Financial </p>
              <center><a type="submit" class="btn btn-primary btn-xs">Generate Finance Report</a></center>
            </div>
            <!-- /.box-body -->
          </div>
=======
>>>>>>> 116bf120c3fefbc956f2c9afd2737cbafd4ef0c9

    </section>

    <!-- Main content -->
    <section class="content container-fluid">

    </section>

  </div>
@include('includes.footer')
</div>
@endforeach
@endsection


@section('scripts')
<script src="{{asset('asset/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('asset/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('asset/js/adminlte.min.js')}}"></script>
<<<<<<< HEAD

<script src="{{asset('asset/js/chart.js/Chart.js"></script>

=======
>>>>>>> 116bf120c3fefbc956f2c9afd2737cbafd4ef0c9
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQ384eNh2btXKG7M__gzqPAOKoq6skHOY&callback=myMap"></script>
@endsection
