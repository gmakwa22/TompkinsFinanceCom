@extends('layouts.app')

@section('content')

<div class="container-fluid head-index">
	<div class="rellax  index" data-rellax-speed="3"></div>
	<div class="container no-padding">
		<div id="slogan" class="col-xs-12 col-sm-7 col-md-5 rellax alpha omega" data-rellax-speed="7">
		<h2>The hassle-free loan, when you need it</h2>
		<h3>USA's most accessible loans </h3>
		</div>

		@include('global.banner-state')
	</div>
</div>
</div>
<input type="hidden" id="show_license" value="0" />
<div id="bg-content">
	@include('global.partners')

	@include('global.mobile-section')
	@include('global.review-section')
	@include('global.how-it-work')
	@include('global.rebate-section')

	@include('global.make-us-special-section')

	<section id="cash-loan-fast" class="bg-linear red">
		<article class="container alpha omega">
		<div class="col-xs-12 col-md-5 card-box  alpha omega" >
		<!-- <img src="{{url('/images/woman-dog.jpg')}}" alt="Same day cash loan" /> -->
		<video autoplay muted loop playsinline id="myVideo" style="position: absolute;right: 0;">
		  <source src="{{url('/css/images/8537434-sd.mov')}}" type="video/mp4">
		</video>
		</div>
		<div class="col-xs-12 col-md-7 text-ext " >
		<h2>Cash loans when you need them</h2>
		<p class="text">Life happens and it’s full of unexpected expenses. Whether it’s fixing your computer or fixing your kid’s teeth, sometimes you need quick cash with as little fuss as possible. We can help.</p>
		<p class="text">Our goal is making online loans as easy, fast and simple as we can. Have a look at our Be Informed page to help make your best decision. <br>We also provide a loan calculator to help you determine just how much money you’ll actually need.</p>
		<p class="text">These are just some of the ways in which we stand out from the crowd. We have a chart you can review to see the difference.</p>
		</div>
		</article>
	</section>

	@include('global.customers-number')
	@include('global.friendly')
	@include('global.comparison-site')



</div>
@endsection




