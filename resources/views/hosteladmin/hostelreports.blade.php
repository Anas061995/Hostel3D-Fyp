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
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
      <div class= "row content container-fluid">
        <!-- Card -->
    <div class="card col-md-3 " style=" padding:25px; margin-left:200px;">
      <!-- Card image -->
      <img class="card-img-top"style="height: 175px; width:100%;" src="{{asset('asset/img/foodlist.jpg')}}" alt="Card image cap" >
      <!-- Card content -->
      <div class="card-body">
        <!-- Title -->
        <h4 class="card-title"><a>Food Report</a></h4>
        <!-- Text -->
        <p  style= "font-size: small !important;" class="card-text">Report of food items on the basis of users reviews </p>
        <!-- Button -->
        <center><a href="{{route('hosteladmin.requestedfoodreport')}}" class="btn btn-primary">VIEW</a></center>
      </div>
    </div>
    <!-- Card -->

    <!-- Card -->
<div class="card col-md-3 col-md-offset-2"  style=" padding:25px;">
  <!-- Card image -->
  <img class="card-img-top"style=" height: 175px; width:100%;" src="{{asset('asset/img/finance.jpg')}}" alt="Card image cap" >
  <!-- Card content -->
  <div class="card-body">
    <!-- Title -->
    <h4 class="card-title"><a>Finance Report</a></h4>
    <!-- Text -->
    <p style ="font-size: small;" class="card-text">List of all the payments, dues and expenses of hostel</p>
    <!-- Button -->
    <center><a href="{{route('hosteladmin.requestedfinancereport')}}" class="btn btn-primary">VIEW</a></center>
  </div>
</div>
<!-- Card -->
</div>
    </section>
  </div>
@include('includes.footer')
@endsection

@section('modal')
<div class="modal" id ="modalmesspublish" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" onclick="closeModel()" id="closeadd"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title" style="text-align: center;">Publish Mess Menu</h3>
      </div>
<div class="modal-body">
<div class="row">
  <div class="col-md-6 card" style="margin-left: 137px; padding: 21px;">

      <div class="card-body">
        <!-- Title -->
        <form>
<div class="form-group">
  <label for="Selectmenubreakfast">Select Menu For Breakfast</label>
  <select class="form-control" id="menubreakfast">
    <option>Menu1</option>
    <option>Menu2</option>
    <option>Menu3</option>
  </select>
</div>
<div class="form-group">
<label for="Selectmmenulunch">Select Menu For Lunch</label>
<select class="form-control" id="menulunch">
  <option>Menu1</option>
  <option>Menu2</option>
</select>
</div>
<div class="form-group">
<label for="selectdinnermenu">Select Menu For Dinner</label>
<select class="form-control" id="menudinner">
  <option>Menu5</option>
  <option>Menu6</option>
</select>
</div>
</form>
        <a href="#" style="margin-left: 48px;" class="btn btn-primary">Publish Menu</a>
      </div>
    </div>
</div>
  </div>
</div>
            </div>
          </div>
@endsection
@section('scripts')
<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="{{asset('asset/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('asset/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('asset/js/adminlte.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQ384eNh2btXKG7M__gzqPAOKoq6skHOY&callback=myMap"></script>
<script type="text/javascript">
function closeModel()
{
            $('#modalmesspublish').hide();
            $(document.body).removeClass("modal-open");
  $(".modal-backdrop").remove();
        }
</script>
<script>
function ShowModal(myid)
{
 $("#modalmesspublish").show();
}
</script>
@endsection
