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
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
@endsection
@section('content')
@include('includes.nav')
@include('includes.hosteladminsidebar')
<div class="content-wrapper">

<section class="content-header">
  <h1>
  HostelAdmin/
    <small>Residents</small>

  </h1>
  <br>
  <br>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
  </ol>

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<table id="example" class="display" style="width:100%">
            <thead>
                @foreach ($residentcomplaints as $var)
=======
<table id="example" class="display" style="width:100%">
            <thead>
>>>>>>> parent of 116bf12... Revert "Merge branch 'master' of https://github.com/Anas061995/Hostel3D-Fyp"
=======
<table id="example" class="display" style="width:100%">
            <thead>
>>>>>>> parent of 116bf12... Revert "Merge branch 'master' of https://github.com/Anas061995/Hostel3D-Fyp"
=======
<table id="example" class="display" style="width:100%">
            <thead>
>>>>>>> parent of 116bf12... Revert "Merge branch 'master' of https://github.com/Anas061995/Hostel3D-Fyp"
                <tr>
                    <th>Complaint id</th>
                    <th>Complaint By</th>
                    <th>Complaint Status</th>
                    <th>Complaint Type</th>
                    <th></th>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                    <th></th>
>>>>>>> parent of 116bf12... Revert "Merge branch 'master' of https://github.com/Anas061995/Hostel3D-Fyp"
=======
                    <th></th>
>>>>>>> parent of 116bf12... Revert "Merge branch 'master' of https://github.com/Anas061995/Hostel3D-Fyp"
=======
                    <th></th>
>>>>>>> parent of 116bf12... Revert "Merge branch 'master' of https://github.com/Anas061995/Hostel3D-Fyp"
                </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                  <div class="col-md-6">
                    <button id ="{{$var->user->id}}" class="btn btn-block btn-primary" onclick="ShowModal(this)" > Change Status</button></div>
                </td>
                  <td></td>
                  <td><a type="submit" class="btn btn-primary btn-xs "
                  onclick="event.preventDefault(); document.getElementById('form_{{ $var->id }}').submit();"
                  href="{{route('requestedresidentcomplaints' , $var->id )}}"> View Details</a>
                  <form id="form_{{ $var->id }}" action="{{ route('requestedresidentcomplaints') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                      <input type="hidden" name="complaintdetails" value="{{$var->id}}" >
                  </form></td>
              </tr>
=======
>>>>>>> 116bf120c3fefbc956f2c9afd2737cbafd4ef0c9
=======
=======
>>>>>>> parent of 116bf12... Revert "Merge branch 'master' of https://github.com/Anas061995/Hostel3D-Fyp"
=======
>>>>>>> parent of 116bf12... Revert "Merge branch 'master' of https://github.com/Anas061995/Hostel3D-Fyp"
                  <select class="form-control" style="width: 90%;">
                    <option selected="selected">None</option>
                    <option>Pending</option>
                    <option>Completed</option>
                  </select>
                </td>
                  <td></td>
                  <td><a class="deleteform" href="#" >Respond</a></td>
                  <td><a class="" href="" > Details</a></td>
              </tr>
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> parent of 116bf12... Revert "Merge branch 'master' of https://github.com/Anas061995/Hostel3D-Fyp"
=======
>>>>>>> parent of 116bf12... Revert "Merge branch 'master' of https://github.com/Anas061995/Hostel3D-Fyp"
=======
>>>>>>> parent of 116bf12... Revert "Merge branch 'master' of https://github.com/Anas061995/Hostel3D-Fyp"


            </tbody>

          </table>
<<<<<<< HEAD
<<<<<<< HEAD


<<<<<<< HEAD
<<<<<<< HEAD
  </section>
          </div>
            @endforeach
@endsection
@section('modal')
<div class="modal" id ="modalForm" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" onclick="closeModel()" id="closeadd"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title" style="text-align: center;">Change Status</h3>
      </div>
<div class="modal-body">

    <form role="form" method="POST" action="{{route('completed')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="hidden" value="" id="completed" name="id"/>
          <div class="row">
<div class="col-md-6">
<input type="submit" class="btn btn-success form-control" value="COMPLETED" >
     </div>
     </form>

     <form role="form" method="POST" action="{{route('pending')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="hidden" value="" id="pending" name="id"/>
     <div class="col-md-6">
<input type="submit" class="btn btn-danger form-control" value="PENDING" >

     </div>
     </form>

    </div>
    </div>
  </div>
</div>
</div>

=======


    </section>

  </div>

    @include('includes.footer')

</div>
>>>>>>> 116bf120c3fefbc956f2c9afd2737cbafd4ef0c9
=======
  </section>
          </div>
>>>>>>> parent of 116bf12... Revert "Merge branch 'master' of https://github.com/Anas061995/Hostel3D-Fyp"
=======


  </section>
          </div>
>>>>>>> parent of 116bf12... Revert "Merge branch 'master' of https://github.com/Anas061995/Hostel3D-Fyp"
=======


  </section>
          </div>
>>>>>>> parent of 116bf12... Revert "Merge branch 'master' of https://github.com/Anas061995/Hostel3D-Fyp"
@endsection

@section('scripts')
<script src="{{asset('asset/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('asset/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('asset/js/adminlte.min.js')}}"></script>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> parent of 116bf12... Revert "Merge branch 'master' of https://github.com/Anas061995/Hostel3D-Fyp"
=======
>>>>>>> parent of 116bf12... Revert "Merge branch 'master' of https://github.com/Anas061995/Hostel3D-Fyp"
=======
>>>>>>> parent of 116bf12... Revert "Merge branch 'master' of https://github.com/Anas061995/Hostel3D-Fyp"
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );
</script>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

<script>
function ShowModal(myid)
{
 var id = $(myid).attr('id');
 $("#pending").val(id);
 $("#completed").val(id);
 $("#modalForm").show();

}
</script>
=======
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQ384eNh2btXKG7M__gzqPAOKoq6skHOY&callback=myMap"></script>
>>>>>>> 116bf120c3fefbc956f2c9afd2737cbafd4ef0c9
=======
>>>>>>> parent of 116bf12... Revert "Merge branch 'master' of https://github.com/Anas061995/Hostel3D-Fyp"
=======
>>>>>>> parent of 116bf12... Revert "Merge branch 'master' of https://github.com/Anas061995/Hostel3D-Fyp"
=======
>>>>>>> parent of 116bf12... Revert "Merge branch 'master' of https://github.com/Anas061995/Hostel3D-Fyp"
@endsection
