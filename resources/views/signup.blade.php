@extends('layouts.appSign')

@section('content')

<div id="contentPlaceHolder" class="login">
<div class="container">
<section id="member">
<div class="col-xs-12 alpha omega">
<article class="general-form animated fadeIn" data-os-animation-delay="1.25s" data-os-animation="fadeIn" style="animation-delay: 0.25s;">
<div class="col-xs-12 formular alpha omega">
<div class="col-xs-12 alpha omega" id="signup_form">
<form id="signupForm" method="POST" action="{{url('/signup')}}">
{{ csrf_field() }}
<div class="col-xs-12">
<div class="col-xs-12 sm-bottom">
<p class="info">Get your PayDay account</p>
<h5>This email address is where we’ll send your e-Transfer.<br><b>Your e-Transfer will be sent to this email address.</b> </h5>
</div>
</div>
<div class="col-xs-12" style="display:none;" id="error">
<div class="col-xs-12">
<div class="alert alert-danger" role="alert">
<label class="error-lab"><i class="fa fa-exclamation-circle"></i> <span id="error_text"></span></label>
</div>
</div>
</div>
<div class="col-xs-12 big-margin mid-bottom form-group">
<div class="col-xs-12 sm-bottom">
<div class="col-xs-12 alpha omega">
<input type="email" id="email" name="email" class="form-control full-width" placeholder="name@example.com" required="required"> <label>Email address</label>
</div>
</div>
</div>
<div class="col-xs-12 forgot">
<div class="col-xs-12 col-sm-7 omega text-secure">
<img src="{{url('/images/lock-icon.png')}}" alt="Security"> 256-bit SSL encoded bank-level security
</div>
<div class="col-xs-12 col-sm-5">
<input type="submit" value="Create" class="btn-green">
</div>
</div>
<div class="col-xs-12 signup">
<div class="col-xs-12 btn-login">
Already have an account? <a href="{{url('/signin')}}" alt="log in">Sign In</a>
</div>
</div>
</form>

<div class="col-xs-12 alpha omega" id="checkemail" style="display: none">
<div class="col-xs-12 text-center">
<p class="info">Your email is on its way. Watch out for it!</p>
<h3>When you receive your email, complete the registration process with the instructions provided. </h3>
<h5>The email will have a link to confirm you received it. Please click it. </h5>
<div id="mailbox" class="animatedImg img-mail" data-link="Mailbox_v2"></div>
<br>
<br>
<br>
<p>If you don’t see our email in your inbox, it may have gone to your spam or junk folder. Please check there. If you don’t see it anywhere, click <a href="/signupResendEmail" id="resendMail">Resend Email</a>!<br>
at "<span class="email-show"></span>"</p>
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