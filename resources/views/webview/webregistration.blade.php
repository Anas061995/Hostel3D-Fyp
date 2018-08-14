@extends('layouts.app')
@section('styles')
<link href="{{asset('asset/css/owl.carousel.css')}}" rel="stylesheet">
<link href="{{asset('asset/css/owl.theme.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('asset/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/bootstrapowl.min.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/travlez-jquery-ui.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/style1.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/responsive.css')}}">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800|Poppins:300i,400,300,700,400i,500|Ubuntu:300i,400,300,700,400i,500|Raleway:400,500,600,700" rel="stylesheet">
    @endsection
    @section('content')
    @include('includes.webnav')
    <section class="background-light-grey text-center text-lg-left" style=" padding:50px; padding-right:10px !important;    background-color: #1c1c1c;">
            <div class="container">
                <div class="row ">
                  <div class="col-md-4 ">
                    <div class=" margin-top-20px" style="margin-bottom: 41px;">
                      <div class="row">
                        <div class="col=md-12">
                      <h4 style="color: #e8d4d0; width:100%; padding-left: 40px;font-weight: bold;margin-bottom: 22px;"> Want to Register As? </h4>
                    </div>
                  </div>
                      <div class="row">
                        <div class="col-md-6">
                        <button class="btn btn-success margin-right-10px" id="residentbutton" onclick="resident()" style="width:100%;"  aria-hidden="true">RESIDENT</button>
                        </div>
                        <div class="col-md-6">
                          <button class="btn btn-primary margin-right-10px" id="ownerbutton" onclick="hostelowner()" style="width:100%;" aria-hidden="true">HOSTEL OWNER</button>
                        </div>
                      </div>
                      </div>

                    <div class="margin-bottom-20px margin-top-20px">
                        <i class=" margin-right-10px" aria-hidden="true"> <img src="{{asset('asset/img/house.png')}}" style="margin-top: -11px;  "></img></i> <strong class="" style="text-align:center; color:#0d4b4e; font-size:large;">As A RESIDENT </strong>
                        <span class="d-block" style="color:#c5b8b8;">You can Create your account on BookIt 3d Hostel as a resident if you are looking for online hostel reservation.</span>
                    </div>
                    <div class="margin-bottom-20px margin-top-20px">
                        <i class=" margin-right-10px" aria-hidden="true"><img src="{{asset('asset/img/owner.png')}}" style="margin-top: -11px;"></img></i> <strong class="" style="text-align:center; color:#0d4b4e; font-size:large;">As A HOSTEL OWNER </strong>
                        <span class="d-block " style="color:#c5b8b8;"> To provide better services and online 3d reservation system ,register your hostel to bookIt 3d hotel</span>
                    </div>
                      <div class="margin-bottom-20px margin-top-20px">
                          <i class="fa fa-key margin-right-10px" style="color: white;" aria-hidden="true"></i> <strong  style="text-align:center; color:#0d4b4e; font-size:large;">Already have an account! </strong>
                          <span class="d-block text-grey-2"> <a href="page-login-2.html" style="color:#c5b8b8;">LOGIN HERE</a></span>
                      </div>
                      <div class="margin-bottom-15px padding-bottom-15px border-bottom-1 border-grey-2">
                          <i class="fa fa-lock margin-right-10px"style="color: white;"  aria-hidden="true"></i> <strong  style="text-align:center; color:#0d4b4e; font-size:large;">Recover my password</strong>
                          <span class="d-block"><a href="#" class="text-grey-2" style="color:#c5b8b8;">Have you found an error</a></span>
                      </div>
                      <p class="text-grey-2">Mauris fermentum porta sem, non hendrerit enim bibendum consectetur. Fusce diam est, porttitor vehicula gravida faucibus, varius ante sit amet. </p>
                  </div>
                    <div class=" col-md-7  " id="residentform" style="    margin-left: 91px">

                      <div class="row padding-30px background-white border-1 border-grey-1">
                        <div class="col-md-12">
                        <h5 style="text-align:center; background-color:#0d4b4e; color:white;"> Register As Resident</h5>
                      </div>
                        <div class="col-md-12">
                          <h6> Personal Information </h6>
                          <div class="row">
                          <div class="col-md-6">
                          <form>

                            <div class="form-group">
                                <label for="email" class="col-form-label"><strong> Email</strong></label>
                                <input type="email" class="form-control rounded-0" id="email1" placeholder="e.g example@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="cnic" class="col-form-label"><strong>Cnic</strong></label>
                                <input type="text" class="form-control rounded-0" id="cnic" maxlength="15"  placeholder="Cnic">
                            </div>
                            <div class="form-group">
                                <label for="Firstname" class="col-form-label"><strong>Firstname</strong></label>
                                <input type="text" class="form-control rounded-0"  placeholder="e.g aniqa">
                            </div>

                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputPassword3" class="col-form-label"><strong>Password</strong></label>
                                <input type="password" class="form-control rounded-0" id="inputPassword3" placeholder="e.g xxxxx123">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-form-label"><strong>Re-type Password</strong></label>
                                <input type="password" class="form-control rounded-0" id="inputPassword3" placeholder="e.g xxxxx123">
                            </div>
                              <div class="form-group">
                                  <label for="inputPassword3" class="col-form-label"><strong>Lastname</strong></label>
                                  <input type="lastname" class="form-control rounded-0"  placeholder="e.g khan">
                              </div>
                            </div>
                          </div>
                              <div class="row">
                                <div class="col-md-12">
                              <div class="form-group">
                                  <label for="Gender" class="col-form-label"><strong>Gender</strong></label>
                                  <br>
                                  <label class="radio-inline"><input type="radio" name="optradio">Male</label> &nbsp; &nbsp; &nbsp;
                                  <label class="radio-inline"> <input type="radio" name="optradio">Female</label>
                              </div>
                            </div>
                          </div>
                          <h6> Contact Information </h6>
                          <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                                  <label for="inputPassword3" class="col-form-label"><strong>Contact no</strong></label>
                              <input type="text" class="form-control rounded-0"  data-inputmask="'mask': '0399-99999999'" required=""  type = "number" maxlength = "12" >
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                    <label for="inputPassword3" class="col-form-label"><strong> Other Contact</strong></label>
                                <input type="text" class="form-control rounded-0"  data-inputmask="'mask': '0399-99999999'" required=""  type = "number" maxlength = "12" >
                                </div>
                              </div>
                          </div>

                            <h6> Address Details </h6>
                            <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                  <label for="houseno" class="col-form-label"><strong>House no.</strong></label>
                                  <input type="text" class="form-control rounded-0"  placeholder="e.g SA-193">
                              </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="streetno" class="col-form-label"><strong>Street no.</strong></label>
                                <input type="text" class="form-control rounded-0"  placeholder="e.g Street no.9">
                            </div>
                          </div>
                              <div class="col-md-4">
                              <div class="form-group">
                                  <label for="Block" class="col-form-label"><strong>Block </strong></label>
                                  <input type="text" class="form-control rounded-0"  placeholder="e.g Block A">
                              </div>

                            </div>
                            </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="city" class="col-form-label"><strong>City </strong></label>
                                <input type="text" class="form-control rounded-0"  placeholder="e.g Rawalpindi">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="country" class="col-form-label"><strong>Country </strong></label>
                                <input type="text" class="form-control rounded-0"  placeholder="e.g Pakistan">
                            </div>
                          </div>
                        </div>
                              <div class="form-group">
                                  <a href="#" class="btn  btn-block rounded-0" style="background-color:#0d4b4e; color:white;">Register</a>
                              </div>
                          </form>
                        </div>
                        </div>
                    </div>
                    <div class=" col-md-7  " id="hostelform" style=" display:none;   margin-left: 91px">

                      <div class="row padding-30px background-white border-1 border-grey-1">
                        <div class="col-md-12">
                        <h5 style="text-align:center; background-color:#0d4b4e; color:white;"> Register As Owner</h5>
                      </div>
                        <div class="col-md-12">
                          <h6> Personal Information </h6>
                          <div class="row">
                          <div class="col-md-6">
                          <form>

                            <div class="form-group">
                                <label for="email" class="col-form-label"><strong> Email</strong></label>
                                <input type="email" class="form-control rounded-0" id="email1" placeholder="e.g example@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="cnic" class="col-form-label"><strong>Cnic</strong></label>
                                <input type="text" class="form-control rounded-0" id="cnic" maxlength="15"  placeholder="Cnic">
                            </div>
                            <div class="form-group">
                                <label for="Firstname" class="col-form-label"><strong>Firstname</strong></label>
                                <input type="text" class="form-control rounded-0"  placeholder="e.g amna">
                            </div>

                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputPassword3" class="col-form-label"><strong>Password</strong></label>
                                <input type="password" class="form-control rounded-0" id="inputPassword3" placeholder="e.g xxxx111">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-form-label"><strong>Re-type Password</strong></label>
                                <input type="password" class="form-control rounded-0" id="inputPassword3" placeholder="e.g xxxx111">
                            </div>
                              <div class="form-group">
                                  <label for="inputPassword3" class="col-form-label"><strong>Lastname</strong></label>
                                  <input type="lastname" class="form-control rounded-0"  placeholder="e.g khan">
                              </div>
                            </div>
                          </div>
                              <div class="row">
                                <div class="col-md-12">
                              <div class="form-group">
                                  <label for="Gender" class="col-form-label"><strong>Gender</strong></label>
                                  <br>
                                  <label class="radio-inline"><input type="radio" name="optradio">Male</label> &nbsp; &nbsp; &nbsp;
                                  <label class="radio-inline"> <input type="radio" name="optradio">Female</label>
                              </div>
                            </div>
                          </div>
                          <h6> Contact Information </h6>
                          <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                                  <label for="inputPassword3" class="col-form-label"><strong>Contact no</strong></label>
                              <input type="text" class="form-control rounded-0"  data-inputmask="'mask': '0399-99999999'" required=""  type = "number" maxlength = "12" >
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                    <label for="inputPassword3" class="col-form-label"><strong>Other Contact</strong></label>
                                <input type="text" class="form-control rounded-0"  data-inputmask="'mask': '0399-99999999'" required=""  type = "number" maxlength = "12" >
                                </div>
                              </div>
                          </div>

                            <h6> Address Details </h6>
                            <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                  <label for="Firstname" class="col-form-label"><strong>House no.</strong></label>
                                  <input type="text" class="form-control rounded-0"  placeholder="e.g SA-193">
                              </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="streetno" class="col-form-label"><strong>Street no.</strong></label>
                                <input type="text" class="form-control rounded-0"  placeholder="e.g Street no.7">
                            </div>
                          </div>
                              <div class="col-md-4">
                              <div class="form-group">
                                  <label for="block" class="col-form-label"><strong>Block </strong></label>
                                  <input type="text" class="form-control rounded-0"  placeholder="e.g Block A">
                              </div>

                            </div>
                            </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="city" class="col-form-label"><strong>City </strong></label>
                                <input type="text" class="form-control rounded-0"  placeholder="e.g Rawalpindi">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="country" class="col-form-label"><strong>Country </strong></label>
                                <input type="text" class="form-control rounded-0"  placeholder="e.g Pakistan">
                            </div>
                          </div>
                        </div>
                        <h6 style="font-weight:bold;"> Hostel Information </h6>
                        <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="name" class="col-form-label"><strong>Name</strong></label>
                              <input type="text" class="form-control rounded-0"  placeholder="e.g Comsat Hostel">
                          </div>
                        </div>
                        <div class="col-md-3">
                        <div class="form-group">
                            <label for="floors" class="col-form-label"><strong>No.of Floors</strong></label>
                            <input type="number"min="0" class="form-control rounded-0"  placeholder="e.g 2">
                        </div>
                      </div>
                          <div class="col-md-3">
                          <div class="form-group">
                              <label for="rooms" class="col-form-label"><strong>No. of Rooms </strong></label>
                              <input type="number"min="0" class="form-control rounded-0"  placeholder="e.g 10">
                          </div>

                        </div>
                        </div>
                        <div class ="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                <label for="description" class="col-form-label"><strong>Description </strong></label>
                                <textarea class="form-control rounded-0" placeholder="Describe hostel..."></textarea>
                                  </div>
                          </div>
                        </div>
                        <h6> Hostel Address  </h6>
                        <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="Firstname" class="col-form-label"><strong>House no.</strong></label>
                              <input type="text" class="form-control rounded-0"  placeholder="e.g SA-193">
                          </div>
                        </div>
                        <div class="col-md-4">
                        <div class="form-group">
                            <label for="streetno" class="col-form-label"><strong>Street no.</strong></label>
                            <input type="text" class="form-control rounded-0"  placeholder="e.g Street no.7">
                        </div>
                      </div>
                          <div class="col-md-4">
                          <div class="form-group">
                              <label for="block" class="col-form-label"><strong>Block </strong></label>
                              <input type="text" class="form-control rounded-0"  placeholder="e.g Block A">
                          </div>

                        </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="city" class="col-form-label"><strong>City </strong></label>
                                <input type="text" class="form-control rounded-0"  placeholder="e.g Rawalpindi">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="country" class="col-form-label"><strong>Country </strong></label>
                                <input type="text" class="form-control rounded-0"  placeholder="e.g Pakistan">
                            </div>
                          </div>
                        </div>

                              <div class="form-group">
                                  <a href="#" class="btn  btn-block rounded-0" style="background-color:#0d4b4e; color:white;">Register</a>
                              </div>
                          </form>
                        </div>
                        </div>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
    <script>
    $(":input").inputmask();

   </script>
      <script>
  function resident()
  {
    $("#residentbutton").addClass("btn-success").removeClass("btn-primary");
    $("#residentform").show();
        $("#hostelform").hide();
        $("#ownerbutton").addClass("btn-primary").removeClass("btn-success");
  }
  function hostelowner()
  {
    $("#ownerbutton").addClass("btn-success").removeClass("btn-primary");
    $("#residentbutton").addClass("btn-primary").removeClass("btn-success");
    $("#residentform").hide();
        $("#hostelform").show();
  }

    </script>
    <script>

$('#cnic').keydown(function(){

  //allow  backspace, tab, ctrl+A, escape, carriage return
  if (event.keyCode == 8 || event.keyCode == 9
                    || event.keyCode == 27 || event.keyCode == 13
                    || (event.keyCode == 65 && event.ctrlKey === true) )
                        return;
  if((event.keyCode < 48 || event.keyCode > 57))
   event.preventDefault();

  var length = $(this).val().length;

  if(length == 5 || length == 13)
   $(this).val($(this).val()+'-');

 });
</script>

    @endsection
