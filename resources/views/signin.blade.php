@extends('layouts.appSign')

@section('content')



<div id="contentPlaceHolder" class="login">
<div class="container">
<section id="member">
<div class="col-sm-12 size alpha omega">
<article class="general-form animated fadeIn" data-os-animation-delay="1.25s" data-os-animation="fadeIn" style="animation-delay: 0.25s;">
<div class="col-xs-12 formular alpha omega">
<div class="col-xs-12 alpha omega" id="login_form">
<form id="loginForm" method="POST" action="{{url('/signin')}}" novalidate="novalidate">
{{ csrf_field() }}
<input type="hidden" id="screen_dimensions" name="screen_dimensions" required="required" value="1366X768" aria-required="true"> <div class="col-xs-12">
<div class="col-xs-12 col-sm-4">
<p class="info">Sign In</p>
</div>
<div class="col-xs-12 col-sm-8 text-secure"><img src="{{url('/images/lock-icon.png')}}" alt="Security"> 256-bit SSL encoded bank-level security</div>
</div>
<div class="col-xs-12" id="error" style="display:none;">
<div class="col-xs-12">
<div class="alert alert-danger" role="alert">
<label class="error-lab"> <span id="error_text"></span></label>
</div>
</div>
</div>
<div class="col-xs-12 form-group big-margin n1">
<div class="col-xs-12 sm-bottom">
<div class="col-xs-12 alpha omega">
<input type="email" id="email" name="email" class="form-control full-width" placeholder="Your email address" required="required" aria-required="true" autocomplete="new-email"> <label>Email address</label>
</div>
</div>
</div>
<div class="col-xs-12 form-group big-margin">
<div class="col-xs-12 sm-bottom">
<div class="col-xs-12 alpha omega">
<div class="show-pass" title="Show password"><!-- <img src="/images/eye-icon.png" alt="Show password"> --></div>
<input type="password" id="password" name="password" class="form-control full-width" required="required" aria-required="true" autocomplete="new-password" aria-autocomplete="list"> <label>Password</label>
</div>
</div>
</div>
<div class="col-xs-12 forgot">
<div class="col-xs-12 col-sm-7 text">
<span>Forgot your password? <a href="{{url('/forgotpassword')}}">Help me sign in</a></span>
</div>
<div class="col-xs-12 col-sm-5">
<input type="submit" value="Sign In" id="login" class="btn-green">
</div>
</div>
<div class="col-xs-12 signup">
<div class="col-xs-12 btn-signup">
If you do not yet have an account:  <a href="{{url('/signup')}}" alt="sign up">Create an account</a>
</div>
</div>
</form>
</div>
</div>
</article>
</div>
</section>
</div>
</div>

@endsection