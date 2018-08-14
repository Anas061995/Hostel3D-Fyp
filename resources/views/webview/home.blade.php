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
    <div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="travel-home-new" data-source="gallery" style="margin:0px auto;background:rgba(211,211,211,0);padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.1 auto mode -->
        <div id="rev_slider_3_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-8" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="assets/100x50_d0c75-ba_1.jpg" data-delay="9000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('asset/img/sliderimage1.jpeg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption   tp-resizeme" id="slide-8-layer-1" data-x="['left','left','center','center']" data-hoffset="['806','608','0','0']" data-y="['top','top','top','top']" data-voffset="['146','150','150','165']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":810,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+7610","speed":560,"frame":"999","to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 40px; line-height: 22px; font-weight: 400; color:white;font-family:Raleway;text-transform:uppercase;"> </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-9" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="assets/100x50_a8dd4-ba_2.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('asset/img/sliderimage2.jpeg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                </li>
                <!-- SLIDE  -->
                <li data-index="rs-10" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="assets/100x50_a23f0-ba_3.jpg" data-rotate="0" data-saveperformance="off" data-mediafilter="lofi" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('asset/img/sliderimage3.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <div class="container">
      <div class="row">
          <div class="col-lg-5">
              <div id="search-filter-in" class="full-width  sm-position-relative bottom-80px sm-bottom-auto" style="margin-top: -450px;     height: 400px;">
                  <div class="search-filter row no-gutters box-shadow sm-tb-40px">
                      <div class="filter-tabs  col-lg-5 " style="background-color:white; height: 400px;">
                          <img class="hidden-xs" src="{{asset('asset/img/minihostel.jpg')}}" alt="">
                          <ul class="nav nav-tabs flex-column" role="tablist">
                              <li class="nav-item">
                                  <a class="nav-link active" data-toggle="tab" href="#byname" role="tab"><i><img src="{{asset('asset/img/sign.png')}}"></i> By Name</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" data-toggle="tab" href="#bymap" role="tab"><i><img src="{{asset('asset/img/location.png')}}"> </img></i>  By Location</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" data-toggle="tab" href="#bylist" role="tab"><i> <img src="{{asset('asset/img/list.png')}}"> </i>  By List</a>
                              </li>
                          </ul>
                          <div class="clearfix"></div>
                      </div>
                      <div class="filter-output booking-form-box col-lg-7">
                          <!-- Tab panes -->
                          <div class="tab-content  padding-30px background-white" style="height:400px; background-color: #1c1c1c">
                              <div class="tab-pane active" id="byname" role="tabpanel">
                                  <div class="form-group margin-bottom-5px" style="margin-top: 40px;">
                                      <label style="    color: #c1b2b2;">Hostel Name</label>
                                      <div class="destination"><input type="text" class="input-text full-width" placeholder="Enter Name"></div>
                                  </div>
                                  <br>
                                  <a href="#" style=" background-color: #0d4b4e" class="btn-sm btn-lg btn-block  text-white text-center text-uppercase font-weight-600"><i class="fa fa-search"></i> Hostel Search</a>
                              </div>
                              <div class="tab-pane" id="bymap" role="tabpanel">

                                  <div class="row" style="margin-top: 30px;">
                                    <div class= "col-md-10" style="margin-left: 15px; ">
                                      <img src="{{asset('asset/img/samplemap.jpg')}}" > </img>
                                    </div>
                                      </div>
                                        <br>
                                  <a href="#" style=" background-color: #0d4b4e" class="btn-sm btn-lg btn-block  text-white text-center text-uppercase font-weight-600"><i class="fa fa-search"></i> Access My Location</a>
                                  <!-- ====== //  Flights ====== -->
                              </div>
                              <div class="tab-pane" id="bylist" role="tabpanel">
                                <div class="row" style="margin-top: 30px;">
                                  <div class= "col-md-10" style="margin-left: 15px; ">
                                    <img src="{{asset('asset/img/samplemap.jpg')}}" > </img>
                                  </div>
                                    </div>
                                      <br>

                                  <a href="#"style=" background-color: #0d4b4e" class="btn-sm btn-lg btn-block text-white text-center text-uppercase font-weight-600"><i class="fa fa-search"></i> View Hostel List </a>
                                  <!-- ====== //  Cars ====== -->
                              </div>
                          </div>
                          <!-- Tab panes -->
                          <div class="clearfix"></div>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>

          </div>
      </div>
  </div>
  <!-- ======= end Search Filter  ======= -->



  <!-- ======= New Hotels  ======= -->
  <section id="hot-hotels" class="hot-hotels padding-tb-100px background-light-grey">
      <div class="container">
          <div class="section-title section-title-center">
              <h1 class="title"><span>Top Searched</span> Hostels</h1>
              <span class="section-title-des"></span>
          </div>

          <div class="row">
              <div class="col-sm-6 col-lg-3 sm-mb-30px">
                  <div class="hotel-grid background-white border border-grey-1 with-hover">
                      <div class="hotel-img position-relative">
                          <div class="hover-option background-main-color opacity-6">
                              <div class="h3 text-center text-white padding-top-n-25 "><i class="fa fa-building-o opacity-10"></i></div>
                          </div>
                          <img src="{{asset('asset/img/tophostel1.jpg')}}" alt=""> </img>
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
                          <h3 class="text-uppercase text-medium"><a href="#" class="text-dark">Comsats Hostel</a></h3>
                          <small class="text-uppercase text-extra-small">
                              <a href="#" class="text-grey-4"><i class="fa fa-map-marker margin-right-5px"></i>
                              <span class="text-third-color margin-right-5px">Pakistan </span> Islamabad</a>
                          </small>
                          <i class="d-block padding-tb-8px text-grey-2 ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. the industry's standard dummy text ever since the 1500s</i>
                          <div class="margin-bottom-8px text-uppercase text-extra-small">
                          </div>
                          <a href="#" style=" background-color: #0d4b4e" class="btn-sm btn-lg btn-block  text-white text-center font-weight-bold text-uppercase ">View Details </a>
                      </div>
                  </div>
              </div>


              <!-- hotel item ( 2 ) -->
              <div class="col-sm-6 col-lg-3 sm-mb-30px">
                  <div class="hotel-grid background-white border border-grey-1 with-hover">
                      <div class="hotel-img position-relative">
                          <div class="hover-option background-main-color opacity-6">
                              <div class="h3 text-center text-white padding-top-n-25 "><i class="fa fa-building-o opacity-10"></i></div>
                          </div>
                          <img src="{{asset('asset/img/tophostel2.jpg')}}" alt="">
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
                          <h3 class="text-uppercase text-medium"><a href="#" class="text-dark">Girls Hostel</a></h3>
                          <small class="text-uppercase text-extra-small">
                              <a href="#" class="text-grey-4"><i class="fa fa-map-marker margin-right-5px"></i>
                              <span class="text-third-color margin-right-5px">Pakistan</span> Islamabad</a>
                          </small>
                          <i class="d-block padding-tb-8px text-grey-2 ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. the industry's standard dummy text ever since the 1500s</i>
                          <div class="margin-bottom-8px text-uppercase text-extra-small">

                          </div>
                          <a href="#" style=" background-color: #0d4b4e;" class="btn-sm btn-lg btn-block text-white text-center font-weight-bold text-uppercase">View Details </a>
                      </div>
                  </div>
              </div>


              <!-- hotel item ( 3 ) -->
              <div class="col-sm-6 col-lg-3 sm-mb-30px">
                  <div class="hotel-grid background-white border border-grey-1 with-hover">
                      <div class="hotel-img position-relative">
                          <div class="hover-option background-main-color opacity-6">
                              <div class="h3 text-center text-white padding-top-n-25 "><i class="fa fa-building-o opacity-10"></i></div>
                          </div>
                          <img src="{{asset('asset/img/tophostel3.jpg')}}" alt="">
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
                          <h3 class="text-uppercase text-medium"><a href="#" class="text-dark">Big Branch Hostel</a></h3>
                          <small class="text-uppercase text-extra-small">
                              <a href="#" class="text-grey-4"><i class="fa fa-map-marker margin-right-5px"></i>
                              <span class="text-third-color margin-right-5px">United Kingdom</span> London</a>
                          </small>
                          <i class="d-block padding-tb-8px text-grey-2 ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. the industry's standard dummy text ever since the 1500s</i>
                          <div class="margin-bottom-8px text-uppercase text-extra-small">
                          </div>
                          <a href="#" style=" background-color: #0d4b4e;" class="btn-sm btn-lg btn-block  text-white text-center font-weight-bold text-uppercase">View Details </a>
                      </div>
                  </div>
              </div>


              <!-- hotel item ( 4 ) -->
              <div class="col-sm-6 col-lg-3 sm-mb-30px">
                  <div class="hotel-grid background-white border border-grey-1 with-hover">
                      <div class="hotel-img position-relative">
                          <div class="hover-option background-main-color opacity-6">
                              <div class="h3 text-center text-white padding-top-n-25 "><i class="fa fa-building-o opacity-10"></i></div>
                          </div>
                          <img src="{{asset('asset/img/hotel-grid-4.jpg')}}" alt=""> </img>
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
                          <h3 class="text-uppercase text-medium"><a href="#" class="text-dark">Syed Hostel</a></h3>
                          <small class="text-uppercase text-extra-small">
                              <a href="#" class="text-grey-4"><i class="fa fa-map-marker margin-right-5px"></i>
                                  <span class="text-third-color margin-right-5px">Pakistan</span> Islamabad
                                </a>
                          </small>
                          <i class="d-block padding-tb-8px text-grey-2 ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. the industry's standard dummy text ever since the 1500s</i>
                          <div class="margin-bottom-8px text-uppercase text-extra-small">
                          </div>
                          <a href="#"style=" background-color: #0d4b4e;" class="btn-sm btn-lg btn-block  text-white text-center font-weight-bold text-uppercase">View Details </a>
                      </div>
                  </div>
              </div>


          </div>

      </div>
  </section>
  <!-- ======= end New Hotels  ======= -->



  <!-- ======= top cities  ======= -->
  <section id="top-cities" class="map-ba top-cities padding-top-100px padding-bottom-70px background-grey-1">
      <div class="container">
          <div class="row justify-content-end">
              <div class="col-lg-8">
                  <div class="section-title section-title-left">
                      <h1 class="title"><span>Top </span> Cities</h1>
                      <span class="section-title-des">We provide Services in different cities</span>
                  </div>

                  <div class="row">
                      <div class="col-md-6 margin-bottom-30px">
                          <div class="background-white  border border-grey">
                              <div class="city-img float-left margin-right-20px"><a href="#"><img src="demo-img/citie-1.jpg" alt=""></a></div>
                              <div class="city-body">
                                  <div class="padding-14px">
                                      <div class="flag float-right margin-top-8px"><img src="demo-img/flag-1.png" alt=""></div>
                                      <a class="d-block text-dark text-uppercase text-small font-weight-700" href="#">Islamabad </a>
                                      <a href="#" class="text-extra-small text-grey-4 margin-right-10px">Hostels: <span class="text-third-color">201</span></a>

                                  </div>
                              </div>
                              <div class="clearfix"></div>
                          </div>
                      </div>
                      <div class="col-md-6 margin-bottom-30px">
                          <div class="background-white  border border-grey">
                              <div class="city-img float-left margin-right-20px"><a href="#"><img src="demo-img/citie-2.jpg" alt=""></a></div>
                              <div class="city-body">
                                  <div class="padding-14px">
                                      <div class="flag float-right margin-top-8px"><img src="demo-img/flag-2.png" alt=""></div>
                                      <a class="d-block text-dark text-uppercase text-small font-weight-700" href="#">Lahore</a>
                                      <a href="#" class="text-extra-small text-grey-4 margin-right-10px">Hostels: <span class="text-third-color">201</span></a>

                                  </div>
                              </div>
                              <div class="clearfix"></div>
                          </div>
                      </div>
                      <div class="col-md-6 margin-bottom-30px">
                          <div class="background-white  border border-grey">
                              <div class="city-img float-left margin-right-20px"><a href="#"><img src="demo-img/citie-3.jpg" alt=""></a></div>
                              <div class="city-body">
                                  <div class="padding-14px">
                                      <div class="flag float-right margin-top-8px"><img src="demo-img/flag-3.png" alt=""></div>
                                      <a class="d-block text-dark text-uppercase text-small font-weight-700" href="#">Karachi </a>
                                      <a href="#" class="text-extra-small text-grey-4 margin-right-10px">Hostels: <span class="text-third-color">201</span></a>

                                  </div>
                              </div>
                              <div class="clearfix"></div>
                          </div>
                      </div>
                      <div class="col-md-6 margin-bottom-30px">
                          <div class="background-white border border-grey">
                              <div class="city-img float-left margin-right-20px"><a href="#"><img src="demo-img/citie-4.jpg" alt=""></a></div>
                              <div class="city-body">
                                  <div class="padding-14px">
                                      <div class="flag float-right margin-top-8px"><img src="demo-img/flag-4.png" alt=""></div>
                                      <a class="d-block text-dark text-uppercase text-small font-weight-700" href="#">Multan </a>
                                      <a href="#" class="text-extra-small text-grey-4 margin-right-10px">Hostels: <span class="text-third-color">201</span></a>

                                  </div>
                              </div>
                              <div class="clearfix"></div>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
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
    <script type="text/javascript" src="{{asset('asset/js/sticky-sidebar.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/custom.js')}}"></script>
    <script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('asset/js/jquery-ui.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/popper.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('asset/js/bootstrap.min.js')}}"></script>
   <script type="text/javascript">
      var tpj = jQuery;

      var revapi3;
      tpj(document).ready(function() {
          if (tpj("#rev_slider_3_1").revolution == undefined) {
              revslider_showDoubleJqueryError("#rev_slider_3_1");
          } else {
              revapi3 = tpj("#rev_slider_3_1").show().revolution({
                  sliderType: "standard",
                  jsFileLocation: "//localhost/revslider-standalone/revslider/public/assets/js/",
                  sliderLayout: "auto",
                  dottedOverlay: "none",
                  delay: 9000,
                  navigation: {
                      keyboardNavigation: "off",
                      keyboard_direction: "horizontal",
                      mouseScrollNavigation: "off",
                      mouseScrollReverse: "default",
                      onHoverStop: "off",
                      bullets: {
                          enable: true,
                          hide_onmobile: false,
                          style: "hephaistos",
                          hide_onleave: false,
                          direction: "horizontal",
                          h_align: "center",
                          v_align: "bottom",
                          h_offset: 0,
                          v_offset: 20,
                          space: 5,
                          tmp: ''
                      }
                  },
                  responsiveLevels: [1240, 1024, 778, 480],
                  visibilityLevels: [1240, 1024, 778, 480],
                  gridwidth: [1170, 1024, 778, 480],
                  gridheight: [555, 555, 500, 500],
                  lazyType: "none",
                  shadow: 0,
                  spinner: "spinner4",
                  stopLoop: "off",
                  stopAfterLoops: -1,
                  stopAtSlide: -1,
                  shuffle: "off",
                  autoHeight: "off",
                  disableProgressBar: "on",
                  hideThumbsOnMobile: "off",
                  hideSliderAtLimit: 0,
                  hideCaptionAtLimit: 0,
                  hideAllCaptionAtLilmit: 0,
                  debugMode: false,
                  fallbacks: {
                      simplifyAll: "off",
                      nextSlideOnWindowFocus: "off",
                      disableFocusListener: false,
                  }
              });
          }
      }); /*ready*/
  </script>
@endsection
