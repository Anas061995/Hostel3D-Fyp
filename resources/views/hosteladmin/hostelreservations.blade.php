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
      <small>Reservations</small>
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
              <h3 class="box-title">Hostel Reservation Record</h3>
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
                  <th>Reservation id</th>
                  <th>Reserved By</th>
                  <th>Room No.</th>
                  <th>Resetvation Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Ali</td>
                  <td>3</td>
                  <td><center><span class="label label-success">Reserved</span></center></td>
                  <td style="text-align: center">
                    <a type="submit"style="width: 120px;" class="btn btn-primary btn-xs btn-primary " onclick="ShowModal(this)"> Respond To Request</a>&nbsp; &nbsp;
                    <a type="submit" style="width: 100px;" href="{{route('hosteladmin.requestedreservationdetails')}}" class="btn btn-primary btn-xs ">View Details </a>
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
<div class="modal" id ="modalForm" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" onclick="closeModel()" id="closeadd"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title" style="text-align: center;">Respond To Request</h3>
      </div>
      <div class="modal-body">
        <form role="form" action="" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="hidden" value="" id="" name="id"/>
          <div class="row">
            <div class="col-md-6">
              <input type="submit" class="btn btn-success form-control" value="ACCEPT" >
            </div>
          </form>
          <form role="form" action="" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" value="" id="" name="id"/>
            <div class="col-md-6">
              <input type="submit" class="btn btn-danger form-control" value="REJECT" >
            </div>
          </form>
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

<script type="text/javascript">
function closeModel()
{
  $('#modalForm').hide();
  $(document.body).removeClass("modal-open");
  $(".modal-backdrop").remove();
}
</script>
<script>
@if(\Session::has('message'))
var msg =  "{{ \Session::get('message') }}" ;
swal("Congrats", msg, "success");
// alertify.success(msg);
@endif
@if(\Session::has('error'))
var msg =  "{{ \Session::get('error') }}" ;
swal("Attention!", msg, "error");
// alertify.success(msg);
@endif
</script>
<script>
function ShowModal()
{
  //var id = $(myid).attr('id');
  //$("#rejectbutton").val(id);
  //$("#accetbutton").val(id);
  $("#modalForm").show();

}
</script>
@endsection
