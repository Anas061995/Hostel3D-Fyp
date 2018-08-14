
@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{asset('asset/css/style.min.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/mdb.min.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/mdb.css')}}">

<link rel="stylesheet" href="{{asset('asset/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">

<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('asset/bower_components/font-awesome/css/font-awesome.min.css')}}">
<!-- Ionicons -->
<link rel="stylesheet" href="{{asset('asset/bower_components/Ionicons/css/ionicons.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('asset/css/AdminLTE.min.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/skins/skin-blue.min.css')}}">
<link rel="stylesheet" href="{{asset('asset/bower_components/morris.js/morris.css')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
@endsection
@section('content')
@include('includes.nav')
@include('includes.hosteladminsidebar')
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Hostel Admin/
      <small>Mess</small>
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
    <div class= "row content container-fluid">
        <div class="col-md-3 card" style="margin-left: 227px; padding: 21px;">
          <img class="card-img-top"style="height: 200px; width:100%;" src="{{asset('asset/img/foodlist1.jpg')}}" alt="Card image cap" >

          <div class="card-body">
            <!-- Title -->
            <form>
              <div class="form-group">
                <h3 style="font-family:fantasy;"><center>MESS REPORT</center></h3>
                <label for="Selectcategory">Select Category</label>
                <select class="form-control" id="category">
                  <option>Breakfast</option>
                  <option>Lunch</option>
                  <option>Dinner</option>
                </select>
              </div>
              <div class="form-group">
                <label for="Selectmenus">Select Menu</label>
                <select class="form-control" id="menus">
                  <option>Menu1</option>
                  <option>Menu2</option>
                </select>
              </div>
            </form>
            <center><button href="#" class="btn btn-primary btn-xs">Generate Report</button></center>
          </div>
        </div>
      <!-- Card -->
      <div class="col-md-3 card col-md-offset-1" style="margin-left: 137px; padding: 21px;">
        <div class="card-body" style="height:430px";>
          <img class="card-img-top"style="height: 200px; width:100%;" src="{{asset('asset/img/foodlist1.jpg')}}" alt="Card image cap" >
          <form>
            <div class="form-group">
              <h3 style="font-family:fantasy;"><center>FULL MESS REPORT</center></h3><br> </br>
              <label for="Selectcategory">Select Category</label>
              <select class="form-control" id="category">
                <option>Breakfast</option>
                <option>Lunch</option>
                <option>Dinner</option>
              </select>
            </div>
          </form>
          <br>
          <a href="#" class="btn btn-primary btn-xs">Generate Report</a>
          <a href="#" style="margin-left: 20px;" class="btn btn-primary btn-xs">Generate Full Report</a>
        </div>
      </div>
      <!--table div-->
      <div class=" col-md-12" width:100%;  style=" margin-top:90px;">
        <div style=" font-size: 18px; float:left; width:100%; height: 250px; background:#ecf0f5;">
          <div class="box">
            <div class="box-header">
              <center><h3 class="box-title" style="font-family:fantasy;">Mess Report</h3></center>
              <button class="button btn btn-primary btn-lg" style="float:right;">Download PDF</button>

            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example" class="table table-bordered table-striped table-responsive">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Feedback</th>
                    <th>Category</th>
                    <th>Menu</th>
                    <th>Rating</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="tb1">Ali</td>
                    <td>Yummiest Mess</td>
                    <td>Menu1</td>
                    <th>-</th>
                    <th>-</th>
                    <th>-</th>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>

          </div>
        </div>
        <!-- /.col -->
      </div>
      <div class="row container-fluid">
        <div class=" col-md-5" width:100%; float:left; style="margin-top:90px; margin-left:65px;">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Donut Chart</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <div class="col-md-5 col-md-offset-1 container-fluid" float:left; width:100%; float:left; style=" margin-top:90px;">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Line Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="line-chart" style="height: 300px;"></div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
</section>
</div>
<style>
.tb1{
  font-size: 30px !important;
}
</style>
@include('includes.footer')
@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="{{asset('asset/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('asset/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('asset/js/adminlte.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQ384eNh2btXKG7M__gzqPAOKoq6skHOY&callback=myMap"></script>
<script src="{{asset('asset/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<!-- Morris.js charts -->
<script src="{{asset('asset/bower_components/raphael/raphael.min.js"></script>
<script src="{{asset('asset/bower_components/morris.js/morris.min.js"></script>
<script type="text/javascript">
function closeModel()
{
  $('#modalreport').hide();
  $(document.body).removeClass("modal-open");
  $(".modal-backdrop").remove();
}
function ShowModal(myid)
{
  $("#modalreport").show();
}
</script>
<script>
$(function () {
  "use strict";
  // LINE CHART
    var line = new Morris.Line({
      element: 'line-chart',
      resize: true,
      data: [
        {y: '2011 Q1', item1: 2666},
        {y: '2011 Q2', item1: 2778},
        {y: '2011 Q3', item1: 4912},
        {y: '2011 Q4', item1: 3767},
        {y: '2012 Q1', item1: 6810},
        {y: '2012 Q2', item1: 5670},
        {y: '2012 Q3', item1: 4820},
        {y: '2012 Q4', item1: 15073},
        {y: '2013 Q1', item1: 10687},
        {y: '2013 Q2', item1: 8432}
      ],
      xkey: 'y',
      ykeys: ['item1'],
      labels: ['Item 1'],
      lineColors: ['#3c8dbc'],
      hideHover: 'auto'
    });
  //DONUT CHART
  var donut = new Morris.Donut({
    element: 'sales-chart',
    resize: true,
    colors: ["#3c8dbc", "#f56954", "#00a65a"],
    data: [
      {label: "Download Sales", value: 12},
      {label: "In-Store Sales", value: 30},
      {label: "Mail-Order Sales", value: 20}
    ],
    hideHover: 'auto'
  });
});
</script>
@endsection
