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
