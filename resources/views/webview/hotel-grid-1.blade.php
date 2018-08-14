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
                <!-- Sidebar -->
                <div class="col-lg-3 sticky-sidebar">
                    <!-- Hostels Search -->
                    <div class="widget">
                        <h4 class="widget-title clearfix"><span>Hostels Search</span></h4>
                        <div class="search-filter">
                            <div class="form-group margin-bottom-5px">
                                <label>Search by:</label><br>
                                <div class="destination"><input type="text" class="input-text full-width" placeholder="Enter Name/Area"></div>
                            </div><br>
                            <a href="#" class="btn-sm btn-lg btn-block background-main-color text-white text-center text-uppercase font-weight-600"><i class="fa fa-search"></i> Hostel  Search</a>
                        </div>
                    </div>
                    <!-- //  Hostels Search -->

                </div>
                <!-- //  Sidebar -->

                <!-- Content -->
                <div class="col-lg-9">
                    <div class="row">
                        <!-- hotel post -->
                        <div class="col-sm-6 col-lg-4 margin-bottom-30px">
                            <div class="hotel-grid background-white border border-grey-1 with-hover">
                                <div class="hotel-img position-relative">
                                    <div class="hover-option background-main-color opacity-6">
                                        <h3 class="text-center text-white padding-top-n-25 "><i class="fa fa-building-o opacity-10"></i></h3>
                                    </div>
                                    <img src="{{asset('asset/img/hotelgrid.jpg')}}" alt="">
                                </div>
                                <div class="rating">
                                    <ul>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="padding-20px">
                                    <h3 class="text-uppercase text-medium"><a href="#" class="text-dark font-weight-700">Girls Hostel</a></h3>
                                    <small class="text-uppercase text-extra-small">
                                    <a href="#" class="text-grey-4"><i class="fa fa-map-marker margin-right-5px"></i>
                                    <span class="text-third-color margin-right-5px">Chakshehzad, Isb</span> Pakistan</a>
                                </small>
                                     <span class="d-block padding-tb-8px text-grey-2 ">A very goos hostel with security and mess facilities for girls and at a great location.</span>

                                    <a href="{{route('webview.hostel-details')}}" class="btn-sm btn-lg btn-block background-main-color text-white text-center font-weight-bold text-uppercase ">View Details </a>
                                </div>
                            </div>
                        </div>
                        <!-- //  hotel post -->


                        <!-- hotel post -->
                        <div class="col-sm-6 col-lg-4 margin-bottom-30px">
                            <div class="hotel-grid background-white border border-grey-1 with-hover">
                                <div class="hotel-img position-relative">
                                    <div class="hover-option background-main-color opacity-6">
                                        <h3 class="text-center text-white padding-top-n-25 "><i class="fa fa-building-o opacity-10"></i></h3>
                                    </div>
                                    <img src="{{asset('asset/img/hotelgrid.jpg')}}" alt="">
                                </div>
                                <div class="rating">
                                    <ul>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="padding-20px">
                                   <h3 class="text-uppercase text-medium"><a href="#" class="text-dark font-weight-700">CIIT Hostel</a></h3>
                                    <small class="text-uppercase text-extra-small">
                                    <a href="#" class="text-grey-4"><i class="fa fa-map-marker margin-right-5px"></i>
                                    <span class="text-third-color margin-right-5px">Chakshehzad, Isb</span> Pakistan</a>
                                </small>
                                     <span class="d-block padding-tb-8px text-grey-2 ">A very goos hostel with security and mess facilities for girls and at a great location.</span>
                                    <a href="{{route('webview.hostel-details')}}" class="btn-sm btn-lg btn-block background-main-color text-white text-center font-weight-bold text-uppercase ">View Details </a>
                                </div>
                            </div>
                        </div>
                        <!-- //  hotel post -->


                        <!-- hotel post -->
                        <div class="col-sm-6 col-lg-4 margin-bottom-30px">
                            <div class="hotel-grid background-white border border-grey-1 with-hover">
                                <div class="hotel-img position-relative">
                                    <div class="hover-option background-main-color opacity-6">
                                        <h3 class="text-center text-white padding-top-n-25 "><i class="fa fa-building-o opacity-10"></i></h3>
                                    </div>
                                    <img src="{{asset('asset/img/hotelgrid.jpg')}}" alt="">
                                </div>
                                <div class="rating">
                                    <ul>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="padding-20px">
                                    <h3 class="text-uppercase text-medium"><a href="#" class="text-dark font-weight-700">Boys Hostel</a></h3>
                                    <small class="text-uppercase text-extra-small">
                                    <a href="#" class="text-grey-4"><i class="fa fa-map-marker margin-right-5px"></i>
                                    <span class="text-third-color margin-right-5px">Chakshehzad, Isb</span> Pakistan</a>
                                </small>
                                     <span class="d-block padding-tb-8px text-grey-2 ">A very goos hostel with security and mess facilities for girls and at a great location.</span>
                                    <a href="{{route('webview.hostel-details')}}" class="btn-sm btn-lg btn-block background-main-color text-white text-center font-weight-bold text-uppercase ">View Details </a>
                                </div>
                            </div>
                        </div>
                        <!-- //  hotel post -->


                        <!-- hotel post -->
                        <div class="col-sm-6 col-lg-4 margin-bottom-30px">
                            <div class="hotel-grid background-white border border-grey-1 with-hover">
                                <div class="hotel-img position-relative">
                                    <div class="hover-option background-main-color opacity-6">
                                        <h3 class="text-center text-white padding-top-n-25 "><i class="fa fa-building-o opacity-10"></i></h3>
                                    </div>
                                    <img src="{{asset('asset/img/hotelgrid.jpg')}}" alt="">
                                </div>
                                <div class="rating">
                                    <ul>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="padding-20px">
                                    <h3 class="text-uppercase text-medium"><a href="#" class="text-dark font-weight-700">Comsats Hostel</a></h3>
                                    <small class="text-uppercase text-extra-small">
                                    <a href="#" class="text-grey-4"><i class="fa fa-map-marker margin-right-5px"></i>
                                    <span class="text-third-color margin-right-5px">Chakshehzad, Isb</span> Pakistan</a>
                                </small>
                                     <span class="d-block padding-tb-8px text-grey-2 ">A very goos hostel with security and mess facilities for girls and at a great location.</span>

                                    <a href="{{route('webview.hostel-details')}}" class="btn-sm btn-lg btn-block background-main-color text-white text-center font-weight-bold text-uppercase ">View Details </a>
                                </div>
                            </div>
                        </div>
                        <!-- //  hotel post -->


                        <!-- hotel post -->
                        <div class="col-sm-6 col-lg-4 margin-bottom-30px">
                            <div class="hotel-grid background-white border border-grey-1 with-hover">
                                <div class="hotel-img position-relative">
                                    <div class="hover-option background-main-color opacity-6">
                                        <h3 class="text-center text-white padding-top-n-25 "><i class="fa fa-building-o opacity-10"></i></h3>
                                    </div>
                                    <img src="{{asset('asset/img/hotelgrid.jpg')}}" alt="">
                                </div>
                                <div class="rating">
                                    <ul>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="padding-20px">
                                 <h3 class="text-uppercase text-medium"><a href="#" class="text-dark font-weight-700">Royal Hostel</a></h3>
                                    <small class="text-uppercase text-extra-small">
                                    <a href="#" class="text-grey-4"><i class="fa fa-map-marker margin-right-5px"></i>
                                    <span class="text-third-color margin-right-5px">Chakshehzad, Isb</span> Pakistan</a>
                                </small>
                                    <span class="d-block padding-tb-8px text-grey-2 ">A very goos hostel with security and mess facilities for girls and at a great location.</span>
                                        <a href="{{route('webview.hostel-details')}}" class="btn-sm btn-lg btn-block background-main-color text-white text-center font-weight-bold text-uppercase ">View Details </a>
                                    </div>
                                </div>
                            </div>
                        <!-- //  hotel post -->


                        <!-- hotel post -->
                        <div class="col-sm-6 col-lg-4 margin-bottom-30px">
                            <div class="hotel-grid background-white border border-grey-1 with-hover">
                                <div class="hotel-img position-relative">
                                    <div class="hover-option background-main-color opacity-6">
                                        <h3 class="text-center text-white padding-top-n-25 "><i class="fa fa-building-o opacity-10"></i></h3>
                                    </div>
                                    <img src="{{asset('asset/img/hotelgrid.jpg')}}" alt="">
                                </div>
                                <div class="rating">
                                    <ul>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="padding-20px">
                                   <h3 class="text-uppercase text-medium"><a href="#" class="text-dark font-weight-700">City Hostel</a></h3>
                                    <small class="text-uppercase text-extra-small">
                                    <a href="#" class="text-grey-4"><i class="fa fa-map-marker margin-right-5px"></i>
                                    <span class="text-third-color margin-right-5px">Chakshehzad, Isb</span> Pakistan</a>
                                </small>
                                    <span class="d-block padding-tb-8px text-grey-2 ">A very goos hostel with security and mess facilities for girls and at a great location.</span>

                                    <a href="{{route('webview.hostel-details')}}" class="btn-sm btn-lg btn-block background-main-color text-white text-center font-weight-bold text-uppercase ">View Details </a>
                                </div>
                            </div>
                        </div>
                        <!-- //  hotel post -->

                        <div class="clearfix"></div>

                    </div>
                    <ul class="pagination pagination-md ">
                        <li class="page-item disabled"><a class="page-link rounded-0" href="#" tabindex="-1">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link rounded-0" href="#">Next</a></li>
                    </ul>
                </div>

                <!-- // Content -->
            </div>
            <!-- //  row -->
        </div>
        <!-- //  container -->
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
@endsection
