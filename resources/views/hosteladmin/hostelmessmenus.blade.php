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
        <small>Mess Menus</small>
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
          <a  style="margin-left: 48px; width: 166px;" onclick="ShowModal(this)" class="btn btn-primary">Add Mess Menu</a>
        </div>
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Mess Menus</h3>

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
<li class="active"><a data-toggle="tab" href="#breakfast">Breakfast</a></li>
<li><a data-toggle="tab" href="#lunch">Lunch</a></li>
<li><a data-toggle="tab" href="#dinner">Dinner</a></li>
</ul>
<div class="tab-content">
  <div id="breakfast" class="tab-pane fade in active">
            <table class="table  table-bordered">
              <thead>
                <tr>
                  <th>Serial #</th>
                  <th>Name</th>
                  <th>Mon</th>
                  <th>Tue</th>
                  <th>Wed</th>
                  <th>Thur</th>
                  <th>Fri</th>
                  <th>Sat</th>
                  <th>Sun</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              <tr>
                <td>1</td>
                <td>Rice</td>
                <td>Good Food</td>
                <td>Dinner</td>
                <td>Rice</td>
                  <td>Mutton</td>
                    <td>Tea</td>
                      <td>Beans</td>
                      <td> Mash Dal</td>
                <td style="text-align: center">
                  <a type="submit"style="width: 100px;" class="btn btn-primary btn-xs ">Edit</a>&nbsp; &nbsp;
                  <a type="submit" style="width: 100px;" class="btn btn-primary btn-xs "> Delete</a>&nbsp; &nbsp;
                </td>
              </tr>
            </tbody>
            </table>
          </div>
          <div id="lunch" class="tab-pane fade ">
                    <table class="table  table-bordered">
                      <thead>
                        <tr>
                          <th>Serial #</th>
                          <th>Name</th>
                          <th>Mon</th>
                          <th>Tue</th>
                          <th>Wed</th>
                          <th>Thur</th>
                          <th>Fri</th>
                          <th>Sat</th>
                          <th>Sun</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>1</td>
                        <td>Meat</td>
                        <td>Good Food</td>
                        <td>Dinner</td>
                        <td>Rice</td>
                          <td>Mutton</td>
                            <td>Tea</td>
                              <td>Beans</td>
                              <td> Mash Dal</td>
                        <td style="text-align: center">
                          <a type="submit"style="width: 100px;" class="btn btn-primary btn-xs ">Edit</a>&nbsp; &nbsp;
                          <a type="submit" style="width: 100px;" class="btn btn-primary btn-xs "> Delete</a>&nbsp; &nbsp;
                        </td>
                      </tr>
                    </tbody>
                    </table>
                  </div>
                  <div id="dinner" class="tab-pane fade ">
                            <table class="table  table-bordered">
                              <thead>
                                <tr>
                                  <th>Serial #</th>
                                  <th>Name</th>
                                  <th>Mon</th>
                                  <th>Tue</th>
                                  <th>Wed</th>
                                  <th>Thur</th>
                                  <th>Fri</th>
                                  <th>Sat</th>
                                  <th>Sun</th>
                                  <th>Actions</th>
                                </tr>
                              </thead>
                              <tbody>
                              <tr>
                                <td>1</td>
                                <td>Meat</td>
                                <td>Good Good</td>
                                <td>Dinner</td>
                                <td>Rice</td>
                                  <td>Mutton</td>
                                    <td>Tea</td>
                                      <td>Beans</td>
                                      <td> Mash Dal</td>
                                <td style="text-align: center">
                                  <a type="submit"style="width: 100px;" class="btn btn-primary btn-xs ">Edit</a>&nbsp; &nbsp;
                                  <a type="submit" style="width: 100px;" class="btn btn-primary btn-xs "> Delete</a>&nbsp; &nbsp;
                                </td>
                              </tr>
                            </tbody>
                            </table>
                          </div>
                </div>
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
<div class="modal" id ="modaladdmenu" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" onclick="closeModel()" id="closeadd"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title" style="text-align: center;">Add Mess Menu</h3>
      </div>
<div class="modal-body">
  <div class="row">
    <div class="col-md-8" style="margin-left: 96px; padding: 5px;">
      <form>
      <div class="form-group">
      <label for="menucategory">Menu Category</label>
      <select class="form-control" id="menucategory">
        <option>Breakfast</option>
        <option>Lunch</option>
          <option>Dinner</option>
      </select>
      </div>
      <div class="form-group">
        <label for="SelectfoodforMon">Select Food Item For Monday</label>
        <select style="width: 164px;     margin-left: 34px;" id="MonItem">
          <option>Item1</option>
          <option>Item2</option>
        </select>
      </div>
      <div class="form-group">
        <label for="SelectfoodforMon">Select Food Item For Tuesday</label>
        <select style="width: 164px; margin-left: 31px;" id="TueItem">
          <option>Item1</option>
          <option>Item2</option>
        </select>
      </div>
      <div class="form-group">
        <label for="SelectfoodforMon">Select Food Item For Wednesday</label>
        <select style="margin-left: 12px;  width: 164px;" id="WedItem">
          <option>Item1</option>
          <option>Item2</option>
        </select>
      </div>
      <div class="form-group">
        <label for="SelectfoodforMon">Select Food Item For Thursday</label>
        <select style="width: 164px; margin-left: 25px;" id="ThurItem">
          <option>Item1</option>
          <option>Item2</option>
        </select>
      </div>
      <div class="form-group">
        <label for="SelectfoodforMon">Select Food Item For Friday</label>
        <select style="width: 164px; margin-left: 44px;" id="FriItem">
          <option>Item1</option>
          <option>Item2</option>
        </select>
      </div>
      <div class="form-group">
        <label for="SelectfoodforMon">Select Food Item For Saturday</label>
        <select style="width: 164px;     margin-left: 26px;" id="MonItem">
          <option>Item1</option>
          <option>Item2</option>
        </select>
      </div>
      <div class="form-group">
        <label for="SelectfoodforMon">Select Food Item For Sunday</label>
        <select style="width: 164px; margin-left: 34px;" id="MonItem">
          <option>Item1</option>
          <option>Item2</option>
        </select>
      </div>
        <a href="#" style="margin-left: 363px; width:120px;" class="btn btn-primary">Save</a>
    </form>



    </div>
    </div>
  </div>
</div>


@endsection

@section('scripts')
<script type="text/javascript">
function closeModel()
{
            $('#modaladdmenu').hide();
            $(document.body).removeClass("modal-open");
  $(".modal-backdrop").remove();
        }
</script>
<script>
function ShowModal(myid)
{
 var id = $(myid).attr('id');

 $("#modaladdmenu").show();

}
</script>
<script src="{{asset('asset/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('asset/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('asset/js/adminlte.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQ384eNh2btXKG7M__gzqPAOKoq6skHOY&callback=myMap"></script>
@endsection
