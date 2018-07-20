@extends('layouts.app')
@section('styles')
<link rel="icon" type="image/png" href="{{asset('asset/loginstyle/images/icons/favicon.ico')}}"/>
 	<link rel="stylesheet" type="text/css" href="{{asset('asset/loginstyle/vendor/bootstrap/css/bootstrap.min.css')}}">
   	<link rel="stylesheet" type="text/css" href="{{asset('asset/loginstyle/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
  	<link rel="stylesheet" type="text/css" href="{{asset('asset/loginstyle/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
 	<link rel="stylesheet" type="text/css" href="{{asset('asset/loginstyle/vendor/animate/animate.css')}}">
 	<link rel="stylesheet" type="text/css" href="{{asset('asset/loginstyle/vendor/css-hamburgers/hamburgers.min.css')}}">
 	<link rel="stylesheet" type="text/css" href="{{asset('asset/loginstyle/vendor/animsition/css/animsition.min.css')}}">
 	<link rel="stylesheet" type="text/css" href="{{asset('asset/loginstyle/vendor/select2/select2.min.css')}}">
 	<link rel="stylesheet" type="text/css" href="{{asset('asset/loginstyle/vendor/daterangepicker/daterangepicker.css')}}">
 	<link rel="stylesheet" type="text/css" href="{{asset('asset/loginstyle/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('asset/loginstyle/css/main.css')}}">
@endsection
@section('content')
<div class="limiter">
		<div class="container-login100" style="background-image: url('asset/loginstyle/images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" id="loginform" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
					<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="email" name="email" placeholder="User name" id="loginusername"value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password" id="loginpassword"required>
                        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
                    <div class="form-group">
                            <div class="">
                                <div class="checkbox" style="padding-left:100px;">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Login
						</button>
                        <div>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                                </div>
					</div>

				</form>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
    <script src="{{asset('asset/loginstyle/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
 	<script src="{{asset('asset/loginstyle/vendor/animsition/js/animsition.min.js')}}"></script>
  	<script src="{{asset('asset/loginstyle/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('asset/loginstyle/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
 	<script src="{{asset('asset/loginstyle/vendor/select2/select2.min.js')}}"></script>
 	<script src="{{asset('asset/loginstyle/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('asset/loginstyle/vendor/daterangepicker/daterangepicker.js')}}"></script>
  	<script src="{{asset('asset/loginstyle/vendor/countdowntime/countdowntime.js')}}"></script>
 	<script src="{{asset('asset/loginstyle/js/main.js')}}"></script>
@endsection
