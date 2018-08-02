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
        <small>Reviews</small>
      </h1>
      <br>
      <br>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

      <section class="content container-fluid">
        <div class="row" style="margin-top: -23px;">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Reviews</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive ">
              <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#hostelreview"> View Hostel Reviews</a></li>
      <li><a data-toggle="tab" href="#messreview"> View Mess Reviews</a></li>
</ul>
</div>
<div class="tab-content">
  <div id="hostelreview" class="tab-pane fade in active">
    <div class="col-md-4">
      <h4> Hostel Name: <h4>
      </div>
            <table class="table  table-bordered">
              <thead>
                <tr>
                  <th>Serial #</th>
                  <th>Reviewed By</th>
                  <th>Feedback</th>
                  <th>Rating</th>
                </tr>
              </thead>
              <tbody>
              <tr>
                <td>1</td>
                <td>Rice</td>
                <td>Good Food</td>
                <td>Dinner</td>
              </tr>
            </tbody>
            </table>
          </div>
          <div id="messreview" class="tab-pane fade ">
            <div class="col-md-4">
              <h4> Menu Code: <h4>
              </div>
                    <table class="table  table-bordered">
                      <thead>
                        <tr>
                          <th>Serial #</th>
                          <th>Reviewed By</th>
                          <th>Feedback</th>
                          <th>Rating</th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>1</td>
                        <td>Meat</td>
                        <td>Good Food</td>
                        <td>Dinner</td>
                      </tr>
                    </tbody>
                    </table>
                  </div>
        </div>
  </div>
  <!-- /.box-body -->
  </div>
  </div>
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
