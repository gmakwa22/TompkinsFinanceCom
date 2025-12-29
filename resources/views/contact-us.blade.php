@extends('layouts.app')

@section('content')

<link href="{{ asset('css/contact-us.css') }}" rel="stylesheet">

<div class="jumbotron">
	<!-- <img src="{{ asset('images/contact_banner.jpg') }}" style="width: 100%;"> -->
	<div class="banner-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center">Contact us</h2> 
					<p class="text-center">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within matter of hours to help you.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Section: Contact v.2-->
<section class="sectionContactUS">
	<div class="container">
	    <!--Section heading-->
	    <div class="row">
		    <div class="col-md-12">
		    	<h1 class="head">Contact Form</h1>

		    	@if(Session::has('flash_message_error'))
		            <div class="alert alert-danger alert-block">
		            <button type="button" class="close" data-dismiss="alert">×</button>
		            <strong>{!! session('flash_message_error') !!}</strong>
		            </div>
		        @endif

		        @if(Session::has('flash_message_success'))
		            <div class="alert alert-success alert-block">
		            <button type="button" class="close" data-dismiss="alert">×</button>
		            <strong>{!! session('flash_message_success') !!}</strong>
		            </div>
		        @endif
		    </div>
	        <!--Grid column-->
	        <div class="col-md-9 mb-md-0 mb-5">

	            <form id="contact-form" name="contact-form" method="POST">
	            	{{ csrf_field() }}
	                <!--Grid row-->
	                <div class="row">

	                    <!--Grid column-->
	                    <div class="col-md-6">
	                        <div class="md-form mb-0">
	                            <input type="text" id="name" name="uname" class="form-control">
	                            <label for="name" class="">Your name</label>
	                            @if ($errors->has('uname'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('uname') }}</strong>
		                            </span>
		                        @endif
	                        </div>
	                    </div>
	                    <!--Grid column-->

	                    <!--Grid column-->
	                    <div class="col-md-6">
	                        <div class="md-form mb-0">
	                            <input type="email" id="email" name="email" class="form-control">
	                            <label for="email" class="">Your email</label>
	                            @if ($errors->has('email'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('email') }}</strong>
		                            </span>
		                        @endif
	                        </div>
	                    </div>
	                    <!--Grid column-->

	                </div>
	                <!--Grid row-->

	                <!--Grid row-->
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="md-form mb-0">
	                            <input type="text" id="subject" name="subject" class="form-control">
	                            <label for="subject" class="">Subject</label>
	                            @if ($errors->has('subject'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('subject') }}</strong>
		                            </span>
		                        @endif
	                        </div>
	                    </div>
	                </div>
	                <!--Grid row-->

	                <!--Grid row-->
	                <div class="row">

	                    <!--Grid column-->
	                    <div class="col-md-12">

	                        <div class="md-form">
	                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
	                            <label for="message">Your message</label>
	                            @if ($errors->has('message'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('message') }}</strong>
		                            </span>
		                        @endif
	                        </div>

	                    </div>
	                </div>
	                
	                <div class="row col-md-12">
		                <div class="text-center text-md-left responsive_center">
			                <input type="submit" value="Send" class="btn btn-primary waves-effect waves-light">
			            </div>
			        </div>
	            </form>

	            
	            <div class="status"></div>
	        </div>
	        <!--Grid column-->

	        <!--Grid column-->
	        <div class="col-md-3 text-center padding-top">
	            <ul class="list-unstyled mb-0">
	                <li><i class="fa fa-map-marker fa-2x"></i>
	                    <p>San Francisco, CA 94126, USA</p>
	                </li>

	                <li><i class="fa fa-phone mt-4 fa-2x"></i>
	                    <p>+ 01 234 567 89</p>
	                </li>

	                <li><i class="fa fa-envelope mt-4 fa-2x"></i>
	                    <p>contact@mdbootstrap.com</p>
	                </li>
	            </ul>
	        </div>
	        <!--Grid column-->

	    </div>
	</div>
</section>
<section>
	<img src="{{ asset('images/map.JPG') }}" style="width: 100%;">
</section>
<!--Section: Contact v.2-->

@endsection