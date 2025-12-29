@extends('layouts.app')

@section('pagespecificstyles')

<script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);

$('.popup').show();
$('.close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});

$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
</script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
    $('#button').click(function(){
        if(!$('#iframe').length) {
                $('#iframeHolder').html('<iframe id="iframe" src="licence/BusinessLicense-19-11-01.pdf" width="100%" height="450"></iframe>');
        }
    });
});
</script>

<div class='popup'>
<div class='cnt223'>
<div id="iframeHolder"></div>
<span id="button"><img width="132" height="184" src="licence/placeholder-licence.jpg" align="right" class="et_bloom_hide_mobile et_bloom_image_no_animation et_bloom_image" alt="" srcset="licence/placeholder-licence.jpg 451w, licence/placeholder-licence.jpg" sizes="(max-width: 251px) 100vw, 251px" /></span>
<br />
<h3><strong>Cost of Borrowing</br>British Columbia Resident Agreement</h3></strong></p>

<p>Maximum charges permitted in British Columbia for a payday loan:</br>
15% of the principal </br>
We charge: 15% of the principal</p>
<div class="div-grey">
For a $300.00 loan for 14 days:</br>
Total cost of borrowing = $45.00</br>
Annual Percentage Rate = 391.07% per year.</div>
</br>
This information meets the requirements of the <a href="http://www.bclaws.ca/civix/document/id/complete/statreg/04002_00" target="_blank">Business Practices and Consumer Protection Act</a></br>
License Number: 79036
<br/>
<br/>
<a href='' class='close'>Close Window</a>
</p>
</div>
</div>

@stop

@section('content')

<div class="container-fluid head-index">
	<div class="rellax  index" data-rellax-speed="3"></div>
	<div class="container no-padding">
		<div id="slogan" class="col-xs-12 col-sm-7 col-md-5 rellax alpha omega" data-rellax-speed="7">
		<h2>The hassle-free loan, when you need it</h2>
		<h3><b>Canada’s most accessible loans<b> </h3>
		</div>

		@include('global.banner-state')
	</div>
</div>
</div>
<input type="hidden" id="show_license" value="0" />
<div id="bg-content">
	@include('global.partners')

	@include('global.mobile-section')
	{{-- @include('global.review-section') --}}
	@include('global.how-it-work')
	@include('global.rebate-section')

	@include('global.make-us-special-section')

	<section id="cash-loan-fast" class="bg-linear red">
		<article class="container alpha omega">
		<div class="col-xs-12 col-md-5 card-box  alpha omega" >
		<!-- <img src="{{url('/images/woman-dog.jpg')}}" alt="Same day cash loan" /> -->
		<video autoplay muted loop playsinline id="myVideo" >
		  <source src="{{url('/css/video.mp4')}}" type="video/mp4">
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

{{--	@include('global.customers-number') --}}
	@include('global.friendly')
	@include('global.comparison-site')



</div>
@endsection
