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
      <div class="box-body">
                <div class="row" style="margin-left:280px;">
                  <div class="col-md-8">
                    <div class="form-group">
                      <label>SELECT REPORT TYPE</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Staff</option>
                        <option>Mess</option>
                        <option>Finance</option>
                      </select>
                    </div>
                    <div>
                      <button type="button" class="btn btn-success" onclick="barchart">Generate Report</button>
                    </div>
                    <br></br>
                    <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Bar Chart</h3>

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
      <!-- Main content -->
  <section class="content">
=======
=======
>>>>>>> parent of 116bf12... Revert "Merge branch 'master' of https://github.com/Anas061995/Hostel3D-Fyp"
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:300px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
<<<<<<< HEAD
>>>>>>> parent of 116bf12... Revert "Merge branch 'master' of https://github.com/Anas061995/Hostel3D-Fyp"
=======
>>>>>>> parent of 116bf12... Revert "Merge branch 'master' of https://github.com/Anas061995/Hostel3D-Fyp"

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
<script src="{{asset('asset/js/components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('asset/js/components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('asset/js/adminlte.min.js')}}"></script>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

<script src="{{asset('asset/js/chart.js/Chart.js"></script>

=======
>>>>>>> 116bf120c3fefbc956f2c9afd2737cbafd4ef0c9
=======

<script src="../asset/js/chart.js/Chart.js"></script>

>>>>>>> parent of 116bf12... Revert "Merge branch 'master' of https://github.com/Anas061995/Hostel3D-Fyp"
=======

<script src="../asset/js/chart.js/Chart.js"></script>

>>>>>>> parent of 116bf12... Revert "Merge branch 'master' of https://github.com/Anas061995/Hostel3D-Fyp"
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQ384eNh2btXKG7M__gzqPAOKoq6skHOY&callback=myMap"></script>

<script type="text/javascript">
function barchart() {
    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    barChartData.datasets[1].fillColor   = '#00a65a'
    barChartData.datasets[1].strokeColor = '#00a65a'
    barChartData.datasets[1].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
  })
</script>
@endsection
