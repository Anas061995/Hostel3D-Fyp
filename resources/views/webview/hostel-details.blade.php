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
<link rel="stylesheet" href="{{asset('asset/css/responsive.css')}}">

@endsection
@section('content')
@include('includes.webnav')



<!-- page output -->
<div class="padding-tb-40px background-light-grey">
  <div class="container">

    <div class="row">
      <div class="col-lg-8 sticky-content">

        <!-- <div class="background-white border border-grey-1">
        <ul class="slider-1 margin-0px padding-0px list-unstyled">
        <li class="active"><img src="demo-img/details1.jpeg" alt=""></li>
        <li><img src="demo-img/details1.jpeg" alt=""></li>
        <li><img src="demo-img/details1.jpeg" alt=""></li>
        <li><img src="demo-img/details1.jpeg" alt=""></li>
      </ul>
      <center><a href="roomlist.html"><button class="btn background-main-color text-white">Rooms List</button></a></center>
    </div> -->
    <!-- // slider -->

    <div class="container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="{{asset('asset/img/details1.jpeg')}}" alt="Los Angeles" style="width:100%;">
          </div>

          <div class="item">
            <img src="{{asset('asset/img/details1.jpeg')}}" alt="Chicago" style="width:100%;">
          </div>

          <div class="item">
            <img src="{{asset('asset/img/details1.jpeg')}}" alt="New york" style="width:100%;">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div><br></br>
      <center><a href="{{route('webview.roomlist')}}"><button class="btn btn-lg background-main-color text-white font-weight-bold" style="line-height: 2.5rem; width: 200px;">ROOMS LIST</button></a></center>
    </div>
    <div class="background-white border border-grey-1 padding-30px margin-tb-30px">
      <h3 class="text-uppercase text-medium font-weight-700 border-bottom-1 border-second-color  padding-bottom-8px">Description</h3>
      <div class="padding-top-10px">
        <p>Hotel The Globe is located close to the Red Light District and overlooks two of the most famous historic canals in “de Wallen”, the oldest part of the Amsterdam city. It is only 3 minute walk from Centraal Station, and less than 10 minutes walk from all of the major tourist attraction points, such as Dam Square, Flower Market, Shopping Streets, Rembrandt Square, Red Light District, and various Coffee Shops in the Centrum area. However, the Globe enjoys its quiet and easy neighborhood while it is situated some distance away from the major tourist traffic.
          The hotel has 20 clean and pleasant private rooms, and each has its own en-suite bathroom and shower room. It has triple, quadruple, and up to 8 beds group en-suite available. Besides, we have the largest collection of shared dorms here in Amsterdam. We have dorms from 4 persons up to 10 persons!! Linens are available on all beds, but free towels (with limited numbers) are distributed upon request at reception. We also have free wireless connection available in the lobby area.
          For group booking with more than 20 persons,we will have to charge total amount of the first night's accommodation. </p>
        </div>
      </div>
      <!-- // Description -->
      <div class="background-white border border-grey-1 padding-30px margin-tb-30px">
        <h3 class="text-uppercase text-medium font-weight-700 border-bottom-1 border-second-color padding-bottom-8px">
          Map Location</h3>
          <div class="padding-top-10px">
            <div class="map-distributors-in" style="height:300px">
              <div id="map-distributors">

                <script type="text/javascript">
                $(function() {
                  $("#map-distributors").goMap({
                    zoom: 6,
                    maptype: 'ROADMAP',
                    markers: [

                      {
                        address: '39.605247,-104.615413',
                        icon: 'images/icon_marker_1.png'
                      },

                    ],
                    hideByClick: true
                  });
                  $("#default").click(function() {
                    $("#dump").html($.dump($.goMap.getMarkers()));
                  });
                  $("#clearall").click(function() {
                    $.goMap.clearMarkers();
                  });
                  $("#json").click(function() {
                    $("#dump").html($.goMap.getMarkers("json"));
                  });
                  $("#data").click(function() {
                    $("#dump").html($.goMap.getMarkers("data"));
                  });

                  $('.gm-style-iw').parent().css('width', 'auto');


                });

                </script>

              </div>
            </div>
            <!-- // map distributors -->
          </div>
        </div>
        <!-- // Map Location -->

        <div class="background-white border border-grey-1 padding-30px margin-tb-30px">
          <h3 class="text-uppercase text-medium font-weight-700 border-bottom-1 border-second-color padding-bottom-8px">
            Reviews</h3>
            <div class="padding-top-20px">
              <ul class="commentlist padding-0px margin-0px list-unstyled text-grey-3">
                <li class="border-bottom-1 border-grey-1 margin-bottom-20px">
                  <img src="{{asset('asset/img/testimonials-1.jpg')}}" class="float-left margin-right-20px margin-bottom-20px" alt="">
                  <div class="margin-left-85px">
                    <a class="d-block text-dark text-uppercase text-medium font-weight-700" href="#">Rabie Elkheir </a>
                    <span class="text-extra-small">Date :  <a href="#" class="text-main-color">July 15, 2016</a></span>
                    <p class="margin-top-15px">Very good. Ambiance is 10/10 really had goos experience</p>
                  </div>
                </li>
                <li class="border-bottom-1 border-grey-1 margin-bottom-20px margin-left-55px">
                  <img src="{{asset('asset/img/testimonial-2.png')}}" class="float-left margin-right-20px margin-bottom-20px" alt="">
                  <div class="margin-left-85px">
                    <a class="d-block text-dark text-uppercase text-medium font-weight-700" href="#">Rabie Elkheir </a>
                    <span class="text-extra-small">Date :  <a href="#" class="text-main-color">July 15, 2016</a></span>
                    <p class="margin-top-15px">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                  </div>
                </li>
                <li class="margin-bottom-20px">
                  <img src="{{asset('asset/img/testimonial-3.png')}}" class="float-left margin-right-20px margin-bottom-20px" alt="">
                  <div class="margin-left-85px">
                    <a class="d-block text-dark text-uppercase text-medium font-weight-700" href="#">Rabie Elkheir </a>
                    <span class="text-extra-small">Date :  <a href="#" class="text-main-color">July 15, 2016</a></span>
                    <p class="margin-top-15px">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- // Reviews -->

          <div class="background-white border border-grey-1 padding-30px margin-tb-30px">
            <h3 class="text-uppercase text-medium font-weight-700 border-bottom-1 border-second-color padding-bottom-8px">
              Add Review</h3>
              <div class="padding-top-10px">
                <form>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputName">Full Name</label>
                      <input type="text" class="form-control" id="inputName4" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Email</label>
                      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Comment :</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Comment"></textarea>
                  </div><br>
                  <center><a href="#" class="btn-lg btn-block background-main-color text-white text-center font-weight-bold text-uppercase rounded-0 padding-10px" style="width:200px;">Send</a></center>
                </form>
              </div>
            </div>
            <!-- // Add Review -->

          </div>
          <!-- // col-lg-9 -->
          <div class="col-lg-4 sticky-sidebar">

            <!-- detailed -->
            <div class="background-white border border-grey-1 padding-30px margin-bottom-30px">
              <h5 class="font-weight-700">Girls Hostel</h5>
              <small class="text-uppercase text-extra-small">
                <a href="#" class="text-grey-4"><i class="fa fa-map-marker margin-right-5px"></i>
                  <span class="text-third-color margin-right-5px">Chakshehzad, Islamabad</span> Pakistan</a>
                </small>
                <br></br>
                <div>
                  <a href="{{route('webview.3dmodel')}}" class="btn-lg btn-block background-main-color text-white text-center font-weight-bold text-uppercase" style="line-height: 2.5rem;">3D Model </a>
                </div>
                <i class="d-block padding-tb-8px text-grey-2 ">A very goos hostel with security and mess facilities for girls and at a great location.</i>
              </div>
              <!-- // detailed -->

              <!-- Amenities  -->
              <div class="background-white border border-grey-1 padding-30px margin-bottom-30px">
                <ul class="row padding-0px margin-0px list-unstyled no-gutters">
                  <li class="col-lg-6 margin-bottom-20px">
                    <i class="fa fa-television text-second-color text-extra-large margin-right-10px"></i> <span>Plasma TV</span>
                  </li>
                  <li class="col-lg-6 margin-bottom-20px">
                    <i class="fa fa-wifi text-second-color text-extra-large margin-right-10px"></i> <span>Free Wifi</span>
                  </li>
                  <li class="col-lg-6 margin-bottom-20px">
                    <i class="fa fa-television text-second-color text-extra-large margin-right-10px"></i> <span>Breakfast</span>
                  </li>
                  <li class="col-lg-6">
                    <i class="fa fa-automobile text-second-color text-extra-large margin-right-10px"></i> <span>Parking</span>
                  </li>
                </ul>
              </div>
              <!-- Amenities  -->

              <!-- Need help ? -->
              <div class="background-second-color border border-grey-1 padding-30px margin-bottom-30px">
                <h3 class="text-uppercase text-medium font-weight-700 padding-bottom-8px">NEED HELP?</h3>
                <div class="text-uppercase text-extra-large text-white font-weight-700 padding-bottom-8px">+331-5700266</div>
                <div class="text-uppercase text-medium">Sunday to Friday 9.00am - 7.30pm</div>
              </div>
              <!-- // Need help  -->


            </div>
            <!-- // col-lg-3 -->
          </div>
          <!-- // row -->

        </div>
        <!-- // container -->
      </div>
      <!-- //  page output -->


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
