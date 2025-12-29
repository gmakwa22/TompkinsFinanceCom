@extends('layouts.app')

@section('content')
</div>
<style>
	.count{
	    padding: 40px 47px;
	    border: 11px solid #fff;
	    border-radius: 50%;
	    /* margin-top: 5px; */
	    font-size: 60px;
	    font-weight: bolder;
	}
	#cashback .alpha{
		text-align: center;
    	margin-top: 70px;
	}
	.why_use_us .main_applicationStep .rebate_bg {
		background: #BCA39D;
		height: auto;
	    padding: 40px 20px !important;
	    /*margin-left: 100px;*/
		/*margin-right: 100px;*/
	}
	.why_use_us .main_applicationStep .rebate_bg.eleft {
		margin-right:0 ;
		margin-left:0;

	}
	.why_use_us .main_applicationStep .rebate_bg.eright {
		margin-right:0 ;
		margin-left:0;

	}
	.top_content{
		margin-bottom: 40px;
	}
	/*@media only screen and (max-width: 812px){
		.count {
		    padding: 20px 27px;
		    font-size: 40px;
		}
		.why_use_us .main_applicationStep .rebate_bg  {
		    margin-left: 100px;
		    margin-right: 100px;
		    padding-top: 20px !important;
		    padding-bottom: 20px !important;
		    position: relative;
		}
	}
*/
	/*@media only screen and (max-width: 767px){*/
		.why_use_us .main_applicationStep .rebate_bg,.why_use_us .main_applicationStep .rebate_bg.eleft ,.why_use_us .main_applicationStep .rebate_bg.eright  {
		    /*margin-left: 20px;
		    margin-right: 20px;*/
		    padding-top: 20px !important;
		    padding-bottom: 20px !important;
		    position: relative;
		}
		#bg-content2 .rebate_bg #cashback {
		    color: #fff;
		    padding-top: 40px;
		}
		#bg-content2 .rebate_bg.eleft #cashback .alpha {
		    text-align: left;
		    left: -54px;
		    /* margin-top: 70px; */
		    position: absolute;
		    top: -90px;
		    margin: 20px;
		}
		#bg-content2 .rebate_bg.eright #cashback .alpha {
		    text-align: right;
		    right: -54px;
		    /* margin-top: 70px; */
		    position: absolute;
		    top: -92px;
		    margin: 20px;
		}
		#bg-content2 .rebate_bg #cashback .title_h{
			width: 100%;
			text-align: center;
			/*float: right;*/
		}
		.eleft .count {
		    padding: 8px 11px 2px 35px;
		    font-size: 70px;
		}
		.eright .count {
		    padding: 8px 35px 2px 11px;
		    font-size: 70px;
		}
		#bg-content2 #cashback p{
			display: inline-block;
		}
		.why_use_us .main_applicationStep .rebate_bg.eleft .title_h,.why_use_us .main_applicationStep .rebate_bg.eleft .text{
			text-align: left !important;
		}
		.why_use_us .main_applicationStep .rebate_bg.eright .text,.why_use_us .main_applicationStep .rebate_bg.eright .title_h{
			text-align: left !important;
		}
		.why_use_us .main_applicationStep .rebate_bg.eleft .content_right{
			float: right;
		}
		@media only screen and (min-width: 1025px){
			.header_box {
			    float: right;
			    width: 53%;
			}
		}
	@media only screen and (max-width: 1024px){
		.header_box {
		    width: 55%;
		    float: right;
		    text-align: right;
		}
	}
	@media only screen and (max-width: 768px){
		.why_use_us .main_applicationStep .rebate_bg,.why_use_us .main_applicationStep .rebate_bg.eleft ,.why_use_us .main_applicationStep .rebate_bg.eright  {
		    margin-left: 0px;
		    margin-right: 0px;
		}
		.eleft .count,.eright .count {
			padding: 13px 14px 4px 31px;
		    font-size: 55px;
		}

	}
	@media only screen and (max-width: 767px){
		.main_applicationStep .rebate_bg h2.title_h {
			font-size: 30px !important;
		}
		.header_box {
		    width: 100%;
		    float: inherit;
		    text-align: center;
		}
		#bg-content2 .rebate_bg.eright #cashback .alpha {
		    text-align: left;
		    left: -54px;
		}
		#bg-content2 .rebate_bg #cashback {
			color: #fff;
			padding-top: 50px;
		}
		#bg-content2 .rebate_bg.eright #cashback .alpha{
			top:-92px;
		}
		.education-center .main_applicationStep .rebate_bg.eright .content_right{
			float:right;
		}
		.eleft .count, .eright .count{
			padding: 10px 15px 0px 32px;
		}

	}
	@media only screen and (max-width: 414px){
		.education-center .main_applicationStep .rebate_bg,.education-center .main_applicationStep .rebate_bg.eleft ,.education-center .main_applicationStep .rebate_bg.eright  {
		    margin-left: 10px;
		    margin-right: 10px;
		}
		#bg-content2 .rebate_bg #cashback .alpha {
			top: -93px;

		}
		#bg-content2 .rebate_bg #cashback{
			padding-top: 50px;
		}
		.eleft .count,.eright .count {
			padding: 13px 14px 4px 31px;
		    font-size: 45px;
		}

		#bg-content2 .rebate_bg.eleft #cashback .alpha {
		    left: -46px;
		}
		#bg-content2 .rebate_bg.eright #cashback .alpha{
			left: -46px;
		}
	}


</style>
<header class="page-intro bg-02">
<div class="container">
<article class="block-txt rellax" data-rellax-speed="7">
<div class="v-center parallaxEffect">
	<div class="header_box loaner">
		<h1 class="title">The short term <br>hassle-free loan</h1>
		<h2 class="subtitle-lato">The funds you need when you need them</h2>
    </div>
</div>
</article>
</div>
</header>
<section id="bg-content2" class="no-padding" >
	<div class="main_applicationStep animation-container-04 container" id="application-step" style="margin: 0 auto !important;">
		<div class="header-timeline">
			<div id="page-title" class="container txt-center">

			</div>
		</div>



	@include('global.bottom-express-middle')







	</div>
	<section id="our-customers" class="bg-linear container-full-width">
		<article class="container">
			<div class="col-xs-12 col-md-6 card-box alpha omega  animation-02" data-os-animation-delay="0s" data-os-animation="fadeIn" style="animation-delay: 0s;">
		        <div class="img" style="height: 100%">
		            <img src="{{url('/images/Page_2-12.png')}}" alt="Easy Fast and Secure Loans">
		        </div>
		    </div>
		    <div class="col-xs-12 col-md-6 divin animation-02" data-os-animation-delay="0s" data-os-animation="fadeIn" style="animation-delay: 0s;">
		        <h2 class="title">Working with {{ $privname }}</h2>
		        <p class="text">We work with our customers to create a lending experience that is fast, easy, transparent and secure. Getting our customers the money they need when they need it. <br><br>If there’s something we can do better, we’d love to know.</p>
		    </div>
		</article>
	</section>
</section>

<section id="bg-content" class="creaves" style="background: #f0eceb !important;"																												>
<div class="container" id="mission-about">
<div class="col-md-6 col-xs-12">
<div class="col-xs-12 col-md-10 animation-02" data-os-animation-delay=".25s" data-os-animation="fadeInLeft" style="animation-delay: 0.25s;">
<img src="{{url('/images/Page_2-09.png')}}" alt="Helping Customers Meet Their Financial Needs" class="img">
<div class="mission_ad">
    <h2 class="small-title">Mission Statement</h2>
	<p class="text">{{ $privname }} is committed to helping its clients in their time of financial need. Our fast, easy, transparent and secure lending practices allow you to get your life back on track, when unexpected expenses arise. When you need some help getting over a current financial challenge, we’re there to help.</p>
</div>
</div>
</div>
<div class="col-md-6 col-xs-12">
<div class="col-xs-12 col-md-10 animation-03" data-os-animation-delay=".25s" data-os-animation="fadeInRight" style="animation-delay: 0.25s;">
<img src="{{url('/images/Page_2-08.png')}}" alt="Short Term Lender" class="img">
<div class="mission_ad">
	<h2 class="small-title">Who We Are</h2>
	<p class="text">{{ $privname }} is a provider of short-term loans to help Americans get on with their lives, when financial uncertainty arises. Licenced for working with lenders across the country, we provide safe and quick access to the funds that really make a difference in people’s lives.</p>
</div>
</div>
</div>
</div>
</section>
<div id="cac-commitment" class="full_width">
<div class="container animation-container-03">
<div class="col-xs-12 col-md-10 commitment-text ">
<h2 class="title">Committed to Your Success</h2>
<p class="text">We know the stress of unexpected expenses in life and we are committed to do all we can to help you move forward. We spare you all the headaches of finding and organizing documentation. We offer you an instantaneous assessment and decision on your application. When approved, we have your borrowed funds in your bank account in 5 minutes. We offer repayment options of 1, 2 or 3 installments, all at the same interest rate. We provide you the confidence that your financial needs will be met, your loan will be manageable, and your debt will be short-term. There’s no sneaky jargon or hidden costs. We are lenders that work with you in good conscience to ensure your financial present and future provide you the best possible quality of life. Our loans are fast, easy, transparent and secure.</p>
<!-- <a href="{{url('/agent-list')}}" class="btn btn-new">Know more</a> -->
</div>
</div>
</div>
<style>
    body .parallax-mirror:nth-child(2) {
        opacity: 1;
    }
</style>
@endsection
