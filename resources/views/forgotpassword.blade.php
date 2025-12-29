@extends('layouts.appSign')

@section('content')

<div id="contentPlaceHolder" class="login">
<div class="container">
<section class="forgot_password">
<div class="col-sm-12 alpha omega">
<article class="general-form animated fadeIn" data-os-animation-delay="1.25s" data-os-animation="fadeIn" style="animation-delay: 0.25s;">
<div class="col-xs-12 formular alpha omega">
<div class="col-xs-12 member-login-section alpha omega" id="forgot_password">
<form id="forgotForm" method="POST" action="{{url('/forgotpassword')}}" novalidate="novalidate">
{{ csrf_field() }}
<div class="col-xs-12">
<div class="col-xs-12 sm-bottom">
<p class="info">Forgot Password</p>
<h5 style="font-size: 14px;">We can help you reset your password. Just give us the email you used to create your PayDay account.</h5>
</div>
</div>
<div class="col-xs-12 sm-bottom" style="display:none;" id="error">
<div class="col-xs-12">
<div class="alert alert-danger" role="alert">
<label class="error-lab"><i class="fa fa-exclamation-circle"></i> <span id="error_text"></span></label>
</div>
</div>
</div>
<div class="col-xs-12 form-group big-margin">
<div class="col-xs-12 m-bottom">
<div class="col-xs-12 alpha omega">
<input type="email" id="email" name="email" class="form-control full-width" placeholder="Your email address" required="required" aria-required="true"> <label>Email address</label>
</div>
</div>
</div>
<div class="col-xs-12 m-bottom">
<div class="col-xs-6 text-left">
<a href="{{url('/')}}" class="cancel-link"><button type="button" class="cancel effect">Return</button></a>
</div>
<div class="col-xs-6 text-right">
<input type="submit" value="Submit" class="btn-green effect">
</div>
<div class="col-xs-12 cancel-link2">
<a href="{{url('/signin')}}" class="cancel-link">Log In</a>
</div>
</div>
</form>
<div class="col-xs-12" id="checkemail" style="display: none">
<div class="col-xs-12 text-center alpha omega">
<p class="info">Check your inbox for the password reset information.</p>
<br>
<h3 id="success"><span id="success_text"></span></h3>
<h5>Change your password by clicking on the <b>“Reset password”</b> link in the email we’ve sent you.</h5>
<div id="mailbox" class="animatedImg img-mail" data-link="Mailbox_v2"><svg xmlns="http://www.w3.org/2000/svg" width="320" height="320" viewBox="0 0 320 320" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%;"><defs><clipPath id="animationMask_QZDZsrV9WQ"><rect width="320" height="320" x="0" y="0"></rect></clipPath><clipPath id="cp_SxaTnYWB"><path d="M0,0 L1200,0 L1200,1200 L0,1200z"></path></clipPath><mask id="ly_L0zjTc1VKZ" mask-type="alpha"><g transform="matrix(0.9999654879712133,0.008186749507191742,-0.008186749507191742,0.9999654879712133,600.4384579592443,598.7233796831161)" opacity="1" style="user-select: none;"><g opacity="1" transform="matrix(1,0,0,1,0,0)"><path fill="rgb(219,230,241)" fill-opacity="1" d="M0 0 M-123,66.25 C-123,66.25 -28.524,359.036 -28.524,359.036 C-28.524,359.036 202,114.625 202,114.625 C202,114.625 207.5,74.5 190.25,65 C174.739,56.458 -123,66.25 -123,66.25z"></path></g></g></mask></defs><g clip-path="url(#animationMask_QZDZsrV9WQ)"><g transform="matrix(1.1100100000000002,0,0,1.1100100000000002,-687.3657771400001,-394.63004497000003)" opacity="1" style="user-select: none;"><g opacity="1" transform="matrix(1,0,0,1,730.602,555.844)"><path fill="rgb(207,216,224)" fill-opacity="1" d="M0 0 M100.831,8.628 C100.831,8.628 27.003,49.193 27.003,49.193 C24.762999999999998,50.419 3.3920000000000012,59.133 -10.517,49.715 C-19.356,43.592000000000006 -15.19,36.611000000000004 -10.966,34.39 C-10.966,34.39 62.862,-6.176 62.862,-6.176 C65.101,-7.402 68.488,-7.535 70.427,-6.473 C70.427,-6.473 101.374,4.486 101.374,4.486 C103.31299999999999,5.548 103.07000000000001,7.401 100.831,8.628z"></path></g></g><g clip-path="url(#cp_SxaTnYWB)" transform="matrix(1.25,0,0,1.25,-856,-715.75)" opacity="1"><g transform="matrix(1.2999564343190115,0.010642785002134265,-0.010642785002134265,1.2999564343190115,-235.92058279077037,-240.25190492065303)" opacity="1" style="user-select: none;"><g opacity="1" transform="matrix(1,0,0,1,815.506,741.364)"><path fill="rgb(161,179,191)" fill-opacity="1" d="M0 0 M1.92,34.518 C1.92,34.518 -1.92,32.301 -1.92,32.301 C-1.92,32.301 -1.92,-34.518 -1.92,-34.518 C-1.92,-34.518 1.92,-32.301 1.92,-32.301 C1.92,-32.301 1.92,34.518 1.92,34.518z"></path><path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(74,102,127)" stroke-opacity="1" stroke-width="1.4" d="M0 0 M1.92,34.518 C1.92,34.518 -1.92,32.301 -1.92,32.301 C-1.92,32.301 -1.92,-34.518 -1.92,-34.518 C-1.92,-34.518 1.92,-32.301 1.92,-32.301 C1.92,-32.301 1.92,34.518 1.92,34.518z"></path></g><g opacity="1" transform="matrix(1,0,0,1,819.345,741.364)"><path fill="rgb(207,216,224)" fill-opacity="1" d="M0 0 M-1.919,34.518 C-1.919,34.518 1.919,32.301 1.919,32.301 C1.919,32.301 1.919,-34.518 1.919,-34.518 C1.919,-34.518 -1.919,-32.301 -1.919,-32.301 C-1.919,-32.301 -1.919,34.518 -1.919,34.518z"></path><path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(74,102,127)" stroke-opacity="1" stroke-width="1.4" d="M0 0 M-1.919,34.518 C-1.919,34.518 1.919,32.301 1.919,32.301 C1.919,32.301 1.919,-34.518 1.919,-34.518 C1.919,-34.518 -1.919,-32.301 -1.919,-32.301 C-1.919,-32.301 -1.919,34.518 -1.919,34.518z"></path></g><g opacity="1" transform="matrix(1,0,0,1,817.218,695.451)"><path fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M-13.345,-15.873 C-13.345,-15.873 -28.62,-6.845 -28.62,-6.845 C-28.62,-6.845 -19.034,19.481 -19.034,19.481 C-19.034,19.481 -12.169,31.958 -12.169,31.958 C-12.169,31.958 28.62,7.849 28.62,7.849 C28.62,7.849 28.62,-11.448 28.62,-11.448 C28.62,-18.767 24.171,-27.269000000000002 18.682,-30.437 C16.250999999999998,-31.841 14.024999999999999,-31.958 12.299,-31.022 C12.299,-31.022 12.297,-31.027 12.297,-31.027 C12.297,-31.027 -4.769,-20.941 -4.769,-20.941"></path></g><g opacity="1" transform="matrix(1,0,0,1,817.218,695.451)"><path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(74,102,127)" stroke-opacity="1" stroke-width="1.4" d="M0 0 M-13.345,-15.873 C-13.345,-15.873 -28.62,-6.845 -28.62,-6.845 C-28.62,-6.845 -19.034,19.481 -19.034,19.481 C-19.034,19.481 -12.169,31.958 -12.169,31.958 C-12.169,31.958 28.62,7.849 28.62,7.849 C28.62,7.849 28.62,-11.448 28.62,-11.448 C28.62,-18.767 24.171,-27.269000000000002 18.682,-30.437 C16.250999999999998,-31.841 14.024999999999999,-31.958 12.299,-31.022 C12.299,-31.022 12.297,-31.027 12.297,-31.027 C12.297,-31.027 -4.769,-20.941 -4.769,-20.941"></path></g><g opacity="1" transform="matrix(1,0,0,1,808.569,676.801)"><path fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M0.068,-0.04 C0.068,-0.04 -0.068,0.039 -0.068,0.039"></path></g><g opacity="1" transform="matrix(1,0,0,1,808.569,676.801)"><path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(74,102,127)" stroke-opacity="1" stroke-width="1.4" d="M0 0 M0.068,-0.04 C0.068,-0.04 -0.068,0.039 -0.068,0.039"></path></g><g opacity="1" transform="matrix(1,0,0,1,795.111,706.682)"><path fill="rgb(161,179,191)" fill-opacity="1" d="M0 0 M9.938,20.727 C9.938,20.727 -9.939,9.252 -9.939,9.252 C-9.939,9.252 -9.939,-10.045 -9.939,-10.045 C-9.939,-17.364 -5.489,-20.727 0,-17.558 C5.489,-14.389 9.938,-5.889 9.938,1.43 C9.938,1.43 9.938,20.727 9.938,20.727z"></path></g><g opacity="1" transform="matrix(1,0,0,1,795.111,706.682)"><path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(74,102,127)" stroke-opacity="1" stroke-width="1.4" d="M0 0 M9.938,20.727 C9.938,20.727 -9.939,9.252 -9.939,9.252 C-9.939,9.252 -9.939,-10.045 -9.939,-10.045 C-9.939,-17.364 -5.489,-20.727 0,-17.558 C5.489,-14.389 9.938,-5.889 9.938,1.43 C9.938,1.43 9.938,20.727 9.938,20.727z"></path></g></g><g transform="matrix(0.9999654879712133,0.008186749507191742,-0.008186749507191742,0.9999654879712133,820.7802029194556,680.0301889178239)" opacity="1" style="user-select: none;"><g opacity="1" transform="matrix(1,0,0,1,0,0)"><path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(74,102,127)" stroke-opacity="1" stroke-width="3" d="M0 0 M-44,18.25 C-44,18.25 -77.39,31.810000000000002 -58.25,42.25 C-41.75,51.25 -18.5,33.75 -18.5,33.75 C-18.5,33.75 -44,18.25 -44,18.25z"></path><path fill="rgb(207,216,224)" fill-opacity="1" d="M0 0 M-44,18.25 C-44,18.25 -77.39,31.810000000000002 -58.25,42.25 C-41.75,51.25 -18.5,33.75 -18.5,33.75 C-18.5,33.75 -44,18.25 -44,18.25z"></path></g></g><g transform="matrix(1.2856167917198926,-0.1928457021762484,0.1928457021762484,1.2856167917198926,-365.58975757612654,-60.12159285855262)" opacity="1" style="user-select: none;"><g opacity="1" transform="matrix(1,0,0,1,832.39,677.307)"><path fill="rgb(227,137,157)" fill-opacity="1" d="M0 0 M2.931,-18.683 C2.931,-18.683 -6.054,-13.496 -6.054,-13.496 C-6.054,-9.51 -3.239,-7.904999999999999 0.234,-9.911 C0.234,-9.911 2.931,-11.467 2.931,-11.467 C2.931,-11.467 2.931,20.487 2.931,20.487 C2.931,20.487 6.054,18.683 6.054,18.683 C6.054,18.683 6.054,-13.271 6.054,-13.271 C6.054,-13.271 6.054,-20.487 6.054,-20.487 C6.054,-20.487 2.931,-18.683 2.931,-18.683z"></path></g><g opacity="1" transform="matrix(1,0,0,1,832.39,677.307)"><path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(74,102,127)" stroke-opacity="1" stroke-width="1.4" d="M0 0 M2.931,-18.683 C2.931,-18.683 -6.054,-13.496 -6.054,-13.496 C-6.054,-9.51 -3.239,-7.904999999999999 0.234,-9.911 C0.234,-9.911 2.931,-11.467 2.931,-11.467 C2.931,-11.467 2.931,20.487 2.931,20.487 C2.931,20.487 6.054,18.683 6.054,18.683 C6.054,18.683 6.054,-13.271 6.054,-13.271 C6.054,-13.271 6.054,-20.487 6.054,-20.487 C6.054,-20.487 2.931,-18.683 2.931,-18.683z"></path></g></g><g mask="url(#ly_L0zjTc1VKZ)"><g transform="matrix(1.2999564343190115,0.010642785002134265,-0.010642785002134265,1.2999564343190115,-205.21009000163647,-249.90506180700262)" opacity="1" style="user-select: none; display: block;"><g opacity="1" transform="matrix(1,0,0,1,794.175,708.27)"><path fill="rgb(255,255,255)" fill-opacity="1" d="M0 0 M-11.778,17.905 C-11.778,17.905 11.78,4.304 11.78,4.304 C12.94,3.6340000000000003 13.88,1.837 13.88,0.289 C13.88,0.289 13.88,-16.317 13.88,-16.317 C13.88,-17.864 12.94,-18.575000000000003 11.78,-17.905 C11.78,-17.905 -11.778,-4.304 -11.778,-4.304 C-12.939,-3.6340000000000003 -13.88,-1.8359999999999999 -13.88,-0.289 C-13.88,-0.289 -13.88,16.317 -13.88,16.317 C-13.88,17.864 -12.939,18.575000000000003 -11.778,17.905z" style="display: block;"></path></g><g opacity="1" transform="matrix(1,0,0,1,794.175,708.27)"><path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(74,102,127)" stroke-opacity="1" stroke-width="1.4" d="M0 0 M-11.778,17.905 C-11.778,17.905 11.78,4.304 11.78,4.304 C12.94,3.6340000000000003 13.88,1.837 13.88,0.289 C13.88,0.289 13.88,-16.317 13.88,-16.317 C13.88,-17.864 12.94,-18.575000000000003 11.78,-17.905 C11.78,-17.905 -11.778,-4.304 -11.778,-4.304 C-12.939,-3.6340000000000003 -13.88,-1.8359999999999999 -13.88,-0.289 C-13.88,-0.289 -13.88,16.317 -13.88,16.317 C-13.88,17.864 -12.939,18.575000000000003 -11.778,17.905z" style="display: block;"></path></g><g opacity="1" transform="matrix(1,0,0,1,794.62,701.643)"><path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(74,102,127)" stroke-opacity="1" stroke-width="1.4" d="M0 0 M-10.96,4.886 C-10.96,4.886 -0.444,8.596 -0.444,8.596 C-0.444,8.596 10.96,-8.596 10.96,-8.596" style="display: block;"></path></g><g opacity="1" transform="matrix(1,0,0,1,802.708,708.043)"><path fill="rgb(224,234,241)" fill-opacity="1" d="M0 0 M3.107,1.772 C3.107,1.772 -3.107,-1.771 -3.107,-1.771" style="display: block;"></path></g><g opacity="1" transform="matrix(1,0,0,1,802.708,708.043)"><path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(74,102,127)" stroke-opacity="1" stroke-width="1.4" d="M0 0 M3.107,1.772 C3.107,1.772 -3.107,-1.771 -3.107,-1.771" style="display: block;"></path></g><g opacity="1" transform="matrix(1,0,0,1,785.858,717.317)"><path fill="rgb(224,234,241)" fill-opacity="1" d="M0 0 M-3.125,5.391 C-3.125,5.391 3.125,-5.391 3.125,-5.391" style="display: block;"></path></g><g opacity="1" transform="matrix(1,0,0,1,785.858,717.317)"><path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(74,102,127)" stroke-opacity="1" stroke-width="1.4" d="M0 0 M-3.125,5.391 C-3.125,5.391 3.125,-5.391 3.125,-5.391" style="display: block;"></path></g><g opacity="1" transform="matrix(1,0,0,1,768.6,709.916)"><path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(74,102,127)" stroke-opacity="1" stroke-width="1.4" d="M0 0 M-5.843,3.372 C-3.559,2.054 6.31,-3.643 6.31,-3.643" style="display: block;"></path></g><g opacity="1" transform="matrix(1,0,0,1,771.261,712.95)"><path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(74,102,127)" stroke-opacity="1" stroke-width="1.4" d="M0 0 M-3.545,2.048 C-2.656,1.534 3.649,-2.107 3.649,-2.107" style="display: block;"></path></g><g opacity="1" transform="matrix(1,0,0,1,773.631,716.152)"><path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(74,102,127)" stroke-opacity="1" stroke-width="1.4" d="M0 0 M-1.243,0.718 C-0.931,0.538 1.279,-0.739 1.279,-0.739" style="display: block;"></path></g></g></g></g></g></svg></div>
<br>
<br>
<p>Was there a problem getting our email? <a href="{{url('/forgotpassword')}}">Try again!</a></p>
<br>
<div class="text-center">
<a href="{{url('/login')}}" class="btn-green">Sign In</a>
</div>
</div>
</div>
</div>
</div>
</article>
</div>
</section>
</div>
</div>

@endsection