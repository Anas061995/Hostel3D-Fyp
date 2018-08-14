@extends('layouts.app')
@section('styles')
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800|Poppins:300i,400,300,700,400i,500|Ubuntu:300i,400,300,700,400i,500|Raleway:400,500,600,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('asset/plugins/css/settings.css')}}">
<link href="{{asset('asset/css/owl.carousel.css')}}" rel="stylesheet">
<link href="{{asset('asset/css/owl.theme.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('asset/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/bootstrapowl.min.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/travlez-jquery-ui.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/style1.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/responsive.css')}}">
<style type="text/css">
      #rev_slider_3_1_wrapper .tp-loader.spinner4 {
          background-color: #ffffff !important;
      }

      .hephaistos .tp-bullet {
          width: 12px;
          height: 12px;
          position: absolute;
          background: rgba(153, 153, 153, 0);
          border: 3px solid rgba(29, 184, 193, 0.9);
          border-radius: 50%;
          cursor: pointer;
          box-sizing: content-box;
          box-shadow: 0px 0px 2px 1px rgba(130, 130, 130, 0.3)
      }

      .hephaistos .tp-bullet:hover,
      .hephaistos .tp-bullet.selected {
          background: rgba(255, 255, 255, 0);
          border-color: rgba(220, 36, 38, 1)
      }
  </style>
    @endsection
    @section('content')
    @include('includes.webnav')
    <section class=" padding-tb-130px full-screen" style="background-image: url({{url('asset/img/login2.jpg')}})">
        <div class="container">
            <div class="row justify-content-md-center">

                <div class="col-md-4">

                    <div class="text-center margin-bottom-30px">
                        <a href="#"><img src="" alt="BookIt 3d Hostel"></a>
                    </div>

                    <div class="padding-30px text-white background-dark border-1 border-grey-4 box-shadow">
                        <form>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-form-label"><strong>Email</strong></label>
                                <input type="email" class="form-control rounded-0 background-grey-4 border-0" id="inputEmail3" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-form-label"><strong>Password</strong></label>
                                <input type="password" class="form-control rounded-0 background-grey-4 border-0" id="inputPassword3" placeholder="Password">
                            </div>
                            <div class="form-group ">
                                <div class="form-check">
                                    <label class="form-check-label">
                                      <input class="form-check-input" type="checkbox"> Remember me
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <a href="#" class="btn  btn-block rounded-0" style="background-color:#0d4b4e;">Sign in</a>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
            <!-- // row -->
        </div>
        <!-- // container -->
    </section>
    @endsection
    @section('scripts')
    <script type="text/javascript" src="{{asset('asset/js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/loading.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/plugins/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/plugins/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/plugins/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/plugins/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/plugins/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/plugins/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/plugins/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/plugins/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/plugins/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/plugins/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/plugins/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/jquery-ui.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/bootstrap.min.js')}}"></script>
    @endsection
