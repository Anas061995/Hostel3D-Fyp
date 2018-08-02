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
        Mess/
        <small>Food List</small>
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
      <div class="row" style="margin-top: -23px;">
        <div class="col-lg-4" style="margin-bottom: 11px;" >
          <a  style="margin-left: 48px; width: 166px;" onclick="ShowModal(this)" class="btn btn-primary">Add Food Item</a>
        </div>
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Foodlist</h3>

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
                  <th>Serial #</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Category</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              <tr>
                <td>1</td>
                <td>Rice</td>
                <td>Good Food</td>
                <td>Dinner</td>
                <td style="text-align: center">
                  <a type="submit"style="width: 100px;" class="btn btn-primary btn-xs " onclick="ShowModal(this)">Edit</a>&nbsp; &nbsp;
                  <a type="submit" style="width: 100px;" class="btn btn-primary btn-xs "> Delete</a>&nbsp; &nbsp;
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
<div class="modal" id ="modalFood" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" onclick="closeModel()" id="closeadd"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title" style="text-align: center;">Add Food Item</h3>
      </div>
<div class="modal-body">
  <div class="row">
    <div class="col-md-6" style="margin-left: 137px; padding: 21px;">

        <div class="card-body">
          <!-- Title -->
          <form>
  <div class="form-group">
    <label for="itemname">Item Name</label>
<input type="text" class="form-control" id="itemname" >
  </div>
  <div class="form-group">
  <label for="itemcategory">Item Category</label>
  <select class="form-control" id="itemcategory">
    <option>Breakfast</option>
    <option>Lunch</option>
      <option>Dinner</option>
  </select>
  </div>
  <div class="form-group">
  <label for="description"> Item Description</label>
<textarea class="form-control" placeholder="Describe item..."></textarea>
  </div>
  </form>
          <a href="#" style="margin-left: 48px;" class="btn btn-primary">Save</a>
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
function closeModel()
{
            $('#modalFood').hide();
            $(document.body).removeClass("modal-open");
  $(".modal-backdrop").remove();
        }
</script>
<script>
function ShowModal(myid)
{
 var id = $(myid).attr('id');
 $("#acceptbutton").val(id);
 $("#rejectbutton").val(id);
 $("#modalFood").show();

}
</script>
<script src="{{asset('asset/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('asset/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('asset/js/adminlte.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQ384eNh2btXKG7M__gzqPAOKoq6skHOY&callback=myMap"></script>
@endsection
