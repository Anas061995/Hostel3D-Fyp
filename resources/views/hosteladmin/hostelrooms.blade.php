@extends('layouts.app')
@section('styles')
  <link rel="stylesheet" href="{{asset('asset/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('asset/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('asset/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- DataTables  -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
      <small>Rooms</small>
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

    <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <div class="col-xs-6">
          <h3 class="box-title">Hostel Rooms Record</h3>
</div>
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
          <table class="table  table-bordered">
            <thead>
              <tr>
                <th>Room No.</th>
                <th>Resident</th>
                <th>Capacity</th>
                <th>Available Seats</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>John Doe &
              Ali</td>
              <td>2</td>
              <td>1</td>
              <td><span class="label label-success ">Available</span></td>
              <td style="text-align: center">
                <a type="submit"style="width: 100px;" class="btn btn-primary btn-xs " onclick="ShowModal(this)"> Add Record</a>&nbsp; &nbsp;
                <a type="submit" style="width: 100px;" class="btn btn-primary btn-xs "> 360' View</a>&nbsp; &nbsp;
                <a type="submit" style="width: 100px;" href="{{route('hosteladmin.selectedroomdetails')}}" class="btn btn-primary btn-xs ">View Details </a>
              </td>
            </tr>
          </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>

      </div>
    </div>

  </section>

</div>
  @include('includes.footer')
</div>
@endsection
@section('modal')
<div class="modal" id ="modalroom" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" onclick="closeModel()" id="closeadd"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title" style="text-align: center;">Add Room Record</h3>
      </div>
<div class="modal-body">


          <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#inventory">Inventory</a></li>
  <li><a data-toggle="tab" href="#service">Services</a></li>
</ul>
<div class="tab-content">
  <div id="inventory" class="tab-pane fade in active">
    <br>
    <div class="row">
      <div class="col-lg-4">
        <div class="box box-default collapsed-box box-solid">
          <div class="box-header with-border">
            <h5 class="box-title">ADD </h5>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="box-body">
            <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Quantity</label>
    <input type="password" class="form-control" id="exampleInputPassword1" >
  </div>
  <div class="form-group">
    <label for="exampleSelect1">Status</label>
    <select class="form-control" id="exampleSelect1">
      <option>GOOD Condition</option>
      <option>BAD Condition</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Save</button>
</form>
          </div>
        </div>
      </div>
       <div class="col-lg-4">
        <div class="box box-default collapsed-box box-solid">
          <div class="box-header with-border">
            <h5 class="box-title">UPDATE </h5>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="box-body">
            <form>
  <div class="form-group">
    <label for="exampleInputEmail1"> Search by Name</label>
    <select class="form-control" id="exampleSelect1">
      <option>Bed</option>
      <option>Chair</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Quantity</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleSelect1">Status</label>
    <select class="form-control" id="exampleSelect1">
      <option>GOOD Condition</option>
      <option>BAD Condition</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Save</button>
</form>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
       <div class="box box-default collapsed-box box-solid">
         <div class="box-header with-border">
           <h5 class="box-title">REMOVE </h5>

           <div class="box-tools pull-right">
             <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
             </button>
           </div>
         </div>
         <div class="box-body">
           <form>
 <div class="form-group">
   <label for="exampleInputEmail1">Name</label>
   <select class="form-control" id="exampleSelect1">
     <option>Bed</option>
     <option>Chair</option>
   </select>
 </div>
 
 <button type="submit" class="btn btn-primary">Remove</button>
</form>
         </div>
       </div>
     </div>
    </div>

  </div>
  <div id="service" class="tab-pane fade">
    <h5>AVAILABLE SERVICES</h5>
  <div class="row">
    <div class="col-md-10">
          <form>
            <label for="internetService">AIR CONDITIONER (AC)</label> &nbsp;&nbsp;&nbsp;
  <label class="checkbox-inline">
    <input type="checkbox" value="">Yes
  </label>
  <label class="checkbox-inline">
    <input type="checkbox" value="">No
  </label>
</form>
      <div>
  </div>
  </div>
</div>
            </div>
          </div>
         </div>
  </div>
</div>
</div>

@endsection

@section('scripts')
<script src="{{asset('asset/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('asset/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('asset/js/adminlte.min.js')}}"></script>

<!-- DataTables -->
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#roomdata').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script type="text/javascript">
function closeModel()
{
            $('#modalroom').hide();
            $(document.body).removeClass("modal-open");
  $(".modal-backdrop").remove();
        }
</script>
<script>
function ShowModal(myid)
{

 $("#modalroom").show();

}
</script>
@endsection
