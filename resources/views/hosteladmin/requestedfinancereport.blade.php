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
      <div class= "row content container-fluid">
        <!-- Card -->
        <div class="card col-md-3 " style=" padding:25px; margin-left:50px;">
          <!-- Card image -->
          <img class="card-img-top"style="height: 300px; width:100%;" src="{{asset('asset/img/report.gif')}}" alt="Card image cap" >
          <!-- Card content -->
          <div class="card-body">
            <!-- Title -->
            <h4 class="card-title bold"><a>FINANCE REPORT</a></h4>
            <!-- Text -->
            <!-- Button -->
            <center><a class="btn btn-primary btn-lg">Generate Report</a></center>
            <!-- <center><h5>OR</h5></center>
            <center><a class="btn btn-primary btn-lg">Generate Full Report</a></center> -->
          </div>
        </div>
        <!-- Card -->

        <!-- Card -->
        <div class="col-md-7 col-md-offset-1">
          <!-- Card image -->
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
      <div class="chart" id="sales-chart" style="height: 380px; position: relative;"></div>
    </div>
    <!-- /.box-body -->
  </div>
        </div>
        <!-- Card -->

        <!-- Card -->
               <div class=" col-md-10 col-md-offset-1" width:100%;  style=" padding:25px; margin-top:20px; align:center;">
                 <!-- Card image -->
                           <div style=" font-size: 18px; float:left; width:100%; height: 250px; background:#ecf0f5;">
                               <div class="box">
                                 <div class="box-header"><center><h3 class="box-title">Finance Report</h3></center>
                                 </div>
                                 <!-- /.box-header -->
                                 <div class="box-body">
                                   <table id="example1" class="table table-bordered table-striped table-responsive">
                                     <thead>
                                       <tr>
                                         <th>Date</th>
                                         <th>Expenses</th>
                                         <th>Dues</th>
                                         <th>Income</th>
                                         <th>Revenue</th>
                                         <th>Mess Payments</th>
                                         <th>Resident Dues</th>
                                       </tr>
                                     </thead>
                                     <tbody>
                                       <tr>
                                         <td>1</td>
                                         <td>2</td>
                                         <td>4</td>
                                         <th>-</th>
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
                               <!-- /.box -->
                             <!-- /.col -->
                           </div>
                                     <!-- /.box-body -->
               </div>
               <!-- Card -->

      </div>
    </section>
  </div>
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
<!-- FastClick -->
<script src="{{asset('asset/bower_components/fastclick/lib/fastclick.js"></script>
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
