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
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400italic' rel='stylesheet' type='text/css'>
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
@endsection
@section('content')
@include('includes.webnav')
<div class="row-md-4">
</div>
  <section id="listing">
    <div class="container">
      <div class="row">
        <div class="sidebar col-md-3">
          <div class="fleets-filters toggle-container">
            <h5 class="toggle-title">Filters</h5>
            <aside class="toggle-content">
              <div class="search">
                <form action="#" class="default-form">
                  <input type="text" placeholder="Search">
                  <i class="fa fa-search"></i>
                </form>
              </div>
              <div class="buttons">
                <button class="btn btn-transparent-gray pull-left">
                  Filter
                </button>
                <button class="btn btn-transparent-gray pull-right">
                  Reset
                </button>
              </div>
            </aside>
          </div>

        </div>
        <div class="listing-content col-md-9">
          <div class="listing-pagination">
            <h5 class="title pull-left">Available Room</h5>
            <span class="adults select-box pull-right">
              <select name="perpage" data-placeholder="9 Per Page">
                <option>Per Page</option>
                <option value="1">10 Per Page</option>
                <option value="2">11 Per Page</option>
                <option value="3">12 Per Page</option>
                <option value="4">13 Per Page</option>
              </select>
            </span>
            <ul class="pagination custom-list list-inline pull-right">
              <li class="prev"><a href="#">Prev</a></li>
              <li class="number"><a href="#">1</a></li>
              <li class="number"><a href="#">2</a></li>
              <li class="number"><a href="#">3</a></li>
              <li class="next"><a href="#">Next</a></li>
            </ul>
          </div>
        <div class="listing-room-list">
            <div class="thumbnail">
              <div>
                <img src="{{asset('asset/img/listing-1.jpg')}}" alt="" class="img-responsive">
              </div>
            </div>
            <div class="listing-room-content">
              <div class="row">
                <div class="col-md-12">
                  <header>
                    <div class="pull-left">
                      <h5 class="title">
                        <a href="#">Room No 1</a>
                      </h5>
                      <ul class="tags custom-list list-inline pull-left">
                        <li><a href="#">1 Bed</a></li>
                        <li><a href="#">2 People</a></li>
                      </ul>
                    </div>
                    <div class="pull-right">
                      <span class="price">
                        from Rs.5000/month
                      </span>
                    </div>
                  </header>
                  <div class="listing-facitilities">
                    <div class="row">
                      <div class="col-md-3 col-sm-3">
                        <ul class="facilities-list custom-list">
                          <li><i class="fa fa-leaf"></i><span>AC</span></li>
                        </ul>
                      </div>
                      <div class="col-md-3 col-sm-3">
                        <ul class="facilities-list custom-list">
                          <li><i class="fa fa-female"></i><span>Room service</span></li>
                          <li><i class="fa fa-desktop"></i><span>TV</span></li>
                        </ul>
                      </div>
                      <div class="col-md-3 col-sm-3">
                        <ul class="facilities-list custom-list">
                          <li><i class="fa fa-wifi"></i><span>WIFI access</span></li>
                          <li><i class="fa fa-clock-o"></i><span>24/7 Service</span></li>
                        </ul>
                      </div>
                      <div class="col-md-3 col-sm-3">
                       <a href="{{route('webview.room-details')}}"> <button class="btn btn-transparent-gray">
                          View Details
                        </button></a>
                        <a data-toggle="modal" data-target="#reserveModal"><button class="btn btn-gray-dark">
                         Reserve now
                        </button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="listing-room-list">
            <div class="thumbnail">
              <div>
                <img src="{{asset('asset/img/listing-1.jpg')}}" alt="" class="img-responsive">
              </div>
            </div>
            <div class="listing-room-content">
              <div class="row">
                <div class="col-md-12">
                  <header>
                    <div class="pull-left">
                      <h5 class="title">
                        <a href="#">Room No 2</a>
                      </h5>
                      <ul class="tags custom-list list-inline pull-left">
                        <li><a href="#">1 Bed</a></li>
                        <li><a href="#">2 People</a></li>
                      </ul>
                    </div>
                    <div class="pull-right">
                      <span class="price">
                        from Rs.5000/month
                      </span>
                    </div>
                  </header>
                  <div class="listing-facitilities">
                    <div class="row">
                      <div class="col-md-3 col-sm-3">
                        <ul class="facilities-list custom-list">
                          <li><i class="fa fa-leaf"></i><span>AC</span></li>
                        </ul>
                      </div>
                      <div class="col-md-3 col-sm-3">
                        <ul class="facilities-list custom-list">
                          <li><i class="fa fa-female"></i><span>Room service</span></li>
                          <li><i class="fa fa-desktop"></i><span>TV</span></li>
                        </ul>
                      </div>
                      <div class="col-md-3 col-sm-3">
                        <ul class="facilities-list custom-list">
                          <li><i class="fa fa-wifi"></i><span>WIFI access</span></li>
                          <li><i class="fa fa-clock-o"></i><span>24/7 Service</span></li>
                        </ul>
                      </div>
                      <div class="col-md-3 col-sm-3">
                         <a href="{{route('webview.room-details')}}"> <button class="btn btn-transparent-gray">
                          View Details
                        </button></a>
                        <a data-toggle="modal" data-target="#reserveModal"><button class="btn btn-gray-dark">
                         Reserve now
                        </button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="listing-room-list">
            <div class="thumbnail">
              <div>
                <img src="{{asset('asset/img/listing-1.jpg')}}" alt="" class="img-responsive">
              </div>
            </div>
            <div class="listing-room-content">
              <div class="row">
                <div class="col-md-12">
                  <header>
                    <div class="pull-left">
                      <h5 class="title">
                        <a href="#">Room No 4</a>
                      </h5>
                      <ul class="tags custom-list list-inline pull-left">
                        <li><a href="#">1 Bed</a></li>
                        <li><a href="#">2 People</a></li>
                      </ul>
                    </div>
                    <div class="pull-right">
                      <span class="price">
                        from Rs.5000/month
                      </span>
                    </div>
                  </header>
                  <div class="listing-facitilities">
                    <div class="row">
                      <div class="col-md-3 col-sm-3">
                        <ul class="facilities-list custom-list">
                          <li><i class="fa fa-leaf"></i><span>AC</span></li>
                        </ul>
                      </div>
                      <div class="col-md-3 col-sm-3">
                        <ul class="facilities-list custom-list">
                          <li><i class="fa fa-female"></i><span>Room service</span></li>
                          <li><i class="fa fa-desktop"></i><span>TV</span></li>
                        </ul>
                      </div>
                      <div class="col-md-3 col-sm-3">
                        <ul class="facilities-list custom-list">
                          <li><i class="fa fa-wifi"></i><span>WIFI access</span></li>
                          <li><i class="fa fa-clock-o"></i><span>24/7 Service</span></li>
                        </ul>
                      </div>
                      <div class="col-md-3 col-sm-3">
                         <a href="{{route('webview.room-details')}}"> <button class="btn btn-transparent-gray">
                          View Details
                        </button></a>
                        <a data-toggle="modal" data-target="#reserveModal"><button class="btn btn-gray-dark">
                         Reserve now
                        </button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="listing-room-list">
            <div class="thumbnail">
              <div>
                <img src="{{asset('asset/img/listing-1.jpg')}}" alt="" class="img-responsive">
              </div>
            </div>
            <div class="listing-room-content">
              <div class="row">
                <div class="col-md-12">
                  <header>
                    <div class="pull-left">
                      <h5 class="title">
                        <a href="#">Room No 5</a>
                      </h5>
                      <ul class="tags custom-list list-inline pull-left">
                        <li><a href="#">1 Bed</a></li>
                        <li><a href="#">2 People</a></li>
                      </ul>
                    </div>
                    <div class="pull-right">
                      <span class="price">
                        from Rs.5000/month
                      </span>
                    </div>
                  </header>
                  <div class="listing-facitilities">
                    <div class="row">
                      <div class="col-md-3 col-sm-3">
                        <ul class="facilities-list custom-list">
                          <li><i class="fa fa-leaf"></i><span>AC</span></li>
                        </ul>
                      </div>
                      <div class="col-md-3 col-sm-3">
                        <ul class="facilities-list custom-list">
                          <li><i class="fa fa-female"></i><span>Room service</span></li>
                          <li><i class="fa fa-desktop"></i><span>TV</span></li>
                        </ul>
                      </div>
                      <div class="col-md-3 col-sm-3">
                        <ul class="facilities-list custom-list">
                          <li><i class="fa fa-wifi"></i><span>WIFI access</span></li>
                          <li><i class="fa fa-clock-o"></i><span>24/7 Service</span></li>
                        </ul>
                      </div>
                      <div class="col-md-3 col-sm-3">
                         <a href="{{route('webview.room-details')}}"> <button class="btn btn-transparent-gray">
                          View Details
                        </button></a>
                       <a data-toggle="modal" data-target="#reserveModal"><button class="btn btn-gray-dark">
                         Reserve now
                        </button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="listing-room-list">
            <div class="thumbnail">
              <div>
                <img src="{{asset('asset/img/listing-1.jpg')}}" alt="" class="img-responsive">
              </div>
            </div>
            <div class="listing-room-content">
              <div class="row">
                <div class="col-md-12">
                  <header>
                    <div class="pull-left">
                      <h5 class="title">
                        <a href="#">Room No 7</a>
                      </h5>
                      <ul class="tags custom-list list-inline pull-left">
                        <li><a href="#">1 Bed</a></li>
                        <li><a href="#">2 People</a></li>
                      </ul>
                    </div>
                    <div class="pull-right">
                      <span class="price">
                        from Rs.4500/day
                      </span>
                    </div>
                  </header>
                  <div class="listing-facitilities">
                    <div class="row">
                      <div class="col-md-3 col-sm-3">
                        <ul class="facilities-list custom-list">
                          <li><i class="fa fa-leaf"></i><span>AC</span></li>
                          <li><i class="fa fa-heart-o"></i><span>Hotbath</span></li>
                          <li><i class="fa fa-car"></i><span>Parking</span></li>
                        </ul>
                      </div>
                      <div class="col-md-3 col-sm-3">
                        <ul class="facilities-list custom-list">
                          <li><i class="fa fa-female"></i><span>Room service</span></li>
                          <li><i class="fa fa-key"></i><span>Free safe</span></li>
                          <li><i class="fa fa-desktop"></i><span>TV & Audio</span></li>
                        </ul>
                      </div>
                      <div class="col-md-3 col-sm-3">
                        <ul class="facilities-list custom-list">
                          <li><i class="fa fa-wifi"></i><span>WIFI access</span></li>
                          <li><i class="fa fa-clock-o"></i><span>24/7 Service</span></li>
                        </ul>
                      </div>
                      <div class="col-md-3 col-sm-3">
                         <a href="{{route('webview.room-details')}}"> <button class="btn btn-transparent-gray">
                          View Details
                        </button></a>
                        <a data-toggle="modal" data-target="#reserveModal"><button class="btn btn-gray-dark">
                         Reserve now
                        </button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="listing-pagination footer">
            <ul class="pagination custom-list list-inline text-center no-margin">
              <li class="prev"><a href="#">Prev</a></li>
              <li class="number"><a href="#">1</a></li>
              <li class="number"><a href="#">2</a></li>
              <li class="number"><a href="#">3</a></li>
              <li class="next"><a href="#">Next</a></li>
            </ul>
          </div>
          <div class="special-offers listing">
            <h5 class="title-section">Special Offers</h5>
            <div class="offers-content">
              <ul class="custom-list">
                <li>
                  <div class="thumbnail"><img src="{{asset('asset/img/listing-1.jpg')}}" alt="" class="img-responsive"></div>
                  <h5 class="title"><a href="#">Room No</a></h5>
                  <span class="price">from Rs.5000</span>
                </li>
                <li>
                  <div class="thumbnail"><img src="{{asset('asset/img/listing-1.jpg')}}" alt="" class="img-responsive"></div>
                  <h5 class="title"><a href="">Room No 1</a></h5>
                  <span class="price">from Rs.4500/month</span>
                </li>
                <li>
                  <div class="thumbnail"><img src="{{asset('asset/img/listing-1.jpg')}}" alt="" class="img-responsive"></div>
                  <h5 class="title"><a href="">Room No 2</a></h5>
                  <span class="price">from Rs.4000/month</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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
@endsection
