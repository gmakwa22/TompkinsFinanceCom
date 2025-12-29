@extends('layouts.app')

@section('content')

</div>
<style>
#cac-commitment .commitment-text{
	/*box-shadow: inset 0 0 0 1000px rgba(93, 88, 88, 0.3);*/
}
#cac-commitment .commitment-text p.text{
	color:#fff !important;
}
#cac-commitment .commitment-text h2.title{
	width:50%;
	color: #ac702a !important;
}
@media only screen and (max-width: 900px){
	#cac-commitment .commitment-text h2.title {
		width: 100%;
	}
}
</style>
<header class="page-intro bg-07">
	<div class="container">
		<article class="block-txt rellax" data-rellax-speed="7">
			<div class="v-center parallaxEffect">
				<h1 class="title">Money, when you need it most</h1>
				<h2 class="subtitle-lato" id="color_white">Put your mind at ease when unexpected expenses arise</h2>
			</div>
		</article>
	</div>
</header>

<section id="bg-content2" class="doted_bgimage">
	<div class="container">
		<div class="col-xs-12">
			<h2 class="title_how">Fast And Flexible</h2>
			<p style="color:black; font-size:20px;">
			<b>Everyone’s financial challenges are a little unique to them. Including yours! <br>We help you get the amount of cash you need and the repayment plan that works for you.</b>
		</p>
		</div>
{{--		<div id="same-interest-rate" class="txt-center">
			<div class="col-xs-12 same-interest-rate-img alpha omega">
				<div class="cash-interest" id="fast_flexible">
					<div class="bloc n1 col-md-6 col-xs-12">
						<span class="title title_l">Fast</span>
						<span class="text">All in one payment</span>
					</div>
					<div class="bloc n1 col-md-6 col-xs-12">
						<span class="title title_r">Flexible</span>
						<span class="text">1, 2, or 3 Payments</span>
					</div>
					<div class="bloc n2 col-xs-12" id="flex_low">
						<span class="text_flex">You Pay</span>
						<span class="title_flex">The same interest fee</span>
					</div>
				</div>
			</div> --}}
			<div class="col-xs-12 same-interest-rate-text">
				<p class="text">You can pay back your loan on your next {{ $privname }} in a single installment. <br><span class="other_provinces">Our flexible repayment plan, though, allows you to pay 2 or 3 installments, of equal value. You have more time to repay, with no extra fees or interest charges. </p>
				<p class="text"><b>Is that possible?</b><br>Yes, it’s true: 1, 2, or 3 payment installments all for the same interest charge!</p>
			</div>
		</div>
	</div>
</section>




<section id="Work_mission">
	<div class="container">



		@include('global.bottom-express-boxes')


	</div>
</section>



<!-- <section id="cac-commitment" class="same-day-img change_bigbonus">
	<div class="container animation-container-03">
		<div class="col-xs-12 col-md-10 commitment-text " >
			<h2 class="title">Big Bonus!</h2>
			<p class="text">$750! That’s how much you’ll be eligible to receive when you take out your first ever loan with us. Plus, regular patronage has its privileges. Every loan you take and repay with us increases your trust score, increasing as well the ceiling on what you can borrow – eventually all the way up to $5,000. That’s a big bonus.</p>
		</div>
	</div>
</section> -->


<section id="beaver-tab" class="dark-blue">
<div class="container">

@include('global.new-agent')

</div>
</section>

@endsection
