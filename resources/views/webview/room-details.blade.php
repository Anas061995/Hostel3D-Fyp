@extends('layouts.app')
@section('styles')
<title>Travelz HTML5 Multipurpose Travel Template</title>
<meta name="author" content="Nile-Theme">
<meta name="robots" content="index follow">
<meta name="googlebot" content="index follow">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="keywords" content="Travel, HTML5, CSS3, Hotel , Multipurpose, Template, Create a Travel website fast">
<meta name="description" content="HTML5 Multipurpose Template, Create a website fast">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800|Poppins:300i,400,300,700,400i,500|Ubuntu:300i,400,300,700,400i,500|Raleway:400,500,600,700" rel="stylesheet">
<!-- CSS Files -->
<!-- Owl Carousel Assets -->
<link href="{{asset('asset/css/owl.carousel.css')}}" rel="stylesheet">
<link href="{{asset('asset/css/owl.theme.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('asset/font/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/travlez-jquery-ui.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/style1.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/responsive.css')}}">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400italic' rel='stylesheet' type='text/css'>
@endsection
@section('content')
@include('includes.webnav')
<!-- Start Header-Section -->
 <section class="header-section room">
   <div id="gradient">
       <img src="{{asset('asset/img/bk.jpeg')}}" width="100%"></img>
   </div>
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <h3 class="title-section pull-left">
          <span style="font-family:monospace;">Room 1</span>
         </h3>
         <ul class="breadcrumbs custom-list list-inline pull-right">
           <li><a href="01-home.html">Home</a></li>
           <li><a href="#">Room 1</a></li>
         </ul>
       </div>
     </div>
   </div>
 </section>
 <!-- End Header-Section -->

   <section id="room">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="room-wrapper negative-margin">
           <div class="sidebar col-md-3">
             <div id="map"></div>
             <div class="sidebar-widget book-now">
               <center><a href="#"><a class="btn btn-primary" data-toggle="modal" data-target="#reserveModal" style="width: 277px; font-weight:bold;">Book now</a></center>
               <div class="widget-content">
                 <ul class="contact-list custom-list">
                   <li><i class="fa fa-phone"></i><span>0333-1234567</span></li>
                   <li><i class="fa fa-envelope-o"></i><span>bookit3d@gmail.com</span></li>
                 </ul>
               </div>
             </div>
           </div>
           <div class="room-content col-md-9">
             <div class="room-general">
               <img src="{{asset('asset/img/room.jpeg')}}" alt="" class="img-responsive">
               <header>
                 <div class="pull-left">
                   <ul class="tags custom-list list-inline pull-left">
                     <li><a href="#">1 Bed</a></li>
                     <li><a href="#">2 People</a></li>
                     <li><a href="#">1st floor</a></li>

                   </ul>
                 </div>
                 <div class="pull-right">
                   <span class="price">
                     from Rs.50000/month
                   </span>
                 </div>
               </header>
             </div>

             <div class="room-tabs row-md-3">
               <ul class="nav nav-tabs">
                 <li class="active"><a data-toggle="tab" href="#amenities">Amenities</a></li>
                 <li><a data-toggle="tab" href="#img">Images</a></li>
             </ul>
               <div class="tab-content">
                 <div id="amenities" class="tab-pane fade in active">
                   <div class="listing-facitilities">
                     <div class="row">
                       <div class="col-md-4 col-sm-4">
                         <ul class="facilities-list custom-list">
                           <li><i class="fa fa-leaf"></i><span>AC</span></li>
                           <li><i class="fa fa-car"></i><span>Parking</span></li>
                         </ul>
                       </div>
                       <div class="col-md-4 col-sm-4">
                         <ul class="facilities-list custom-list">
                           <li><i class="fa fa-desktop"></i><span>TV & Audio</span></li>
                           <li><i class="fa fa-clock-o"></i><span>24/7 Service</span></li>
                         </ul>
                       </div>
                       <div class="col-md-4 col-sm-4">
                         <ul class="facilities-list custom-list">
                           <li><i class="fa fa-wifi"></i><span>WIFI access</span></li>
                         </ul>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div id="img" class="tab-pane fade">
                   <div class="img-gallery">
                     <div class="row-md-5">
                       <div class="img-single col-md-3">
                         <img src="{{asset('asset/img/listing-1.jpg')}}" alt="" class="img-responsive">
                       </div>
                       <div class="img-single col-md-3">
                         <img src="{{asset('asset/img/listing-1.jpg')}}" alt="" class="img-responsive">
                       </div>
                       <div class="img-single col-md-3">
                         <img src="{{asset('asset/img/listing-1.jpg')}}" alt="" class="img-responsive">
                       </div>
                       <div class="img-single col-md-3">
                         <img src="{{asset('asset/img/listing-1.jpg')}}" alt="" class="img-responsive">
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>

<div class="room-about">
               <br></br>
             </div>


           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End Room -->
</div>
<!-- End Main-Wrapper -->
<div id="instgram-feed">
       <ul class="instagram-feed">
           <li><a href="#"><img src="{{asset('asset/img/img1.jpeg')}}" alt=""></a></li>
           <li><a href="#"><img src="{{asset('asset/img/img2.jpeg')}}" alt=""></a></li>
           <li><a href="#"><img src="{{asset('asset/img/img3.jpeg')}}" alt=""></a></li>
           <li><a href="#"><img src="{{asset('asset/img/img4.jpeg')}}" alt=""></a></li>
           <li><a href="#"><img src="{{asset('asset/img/img5.jpeg')}}" alt=""></a></li>
           <li><a href="#"><img src="{{asset('asset/img/img6.jpeg')}}" alt=""></a></li>
           <li><a href="#"><img src="{{asset('asset/img/img7.jpeg')}}" alt=""></a></li>
           <li><a href="#"><img src="{{asset('asset/img/img8.jpeg')}}" alt=""></a></li>
           <li><a href="#"><img src="{{asset('asset/img/img9.jpeg')}}" alt=""></a></li>
           <li><a href="#"><img src="{{asset('asset/img/img10.jpeg')}}" alt=""></a></li>
       </ul>
       <div class="clearfix"></div>
   </div>
   <!-- // Instgram Feed -->

   <div class="modal fade" id="reserveModal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="reserveModal" style="margin-top: 31px;">Send Reservation Request?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                </div>
                <div class="modal-body">Enter the num of seats to reserve:&nbsp;
                 <select style="width:100px;">
   <option value="1">1</option>
   <option value="2">2</option>
   <option value="3">3</option>
   <option value="4" selected>4</option>
 </select></div>
                <div class="modal-footer" >
                    <a class="btn btn-success" href="#">Confirm</a>
                    <button class="btn btn btn-secondary btn-danger" type="button" data-dismiss="modal">Cancel</button>

                </div>
            </div>
        </div>
    </div>

   @endsection
   @section('scripts')
   <script type="text/javascript" src="{{asset('asset/js/jquery-3.2.1.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('asset/js/sticky-sidebar.js')}}"></script>
   <script type="text/javascript" src="{{asset('asset/js/custom.js')}}"></script>
   <script type="text/javascript" src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('asset/js/jquery-ui.js')}}"></script>
   <script type="text/javascript" src="{{asset('asset/js/popper.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('asset/js/bootstrap.min.js')}}"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
   <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
   <script type="text/javascript" src="{{asset('asset/js/jquery.gomap-1.3.3.min.js"></script>
