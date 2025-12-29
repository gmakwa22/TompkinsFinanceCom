@extends('layouts.app')

@section('content')
</div>
<header class="page-intro bg-11">
<div class="container">
<article class="block-txt rellax" data-rellax-speed="7">
<div class="v-center parallaxEffect">
<h2 class="title">Payday Loans Calculator</h2>
</div>
</article>
</div>
</header>
<section id="bg-content2" class="gray">
<div class="container">
<div id="page-title" class="col-xs-12 txt-center">
<h1 class="title">Our Loan Calculator Helps You Be Smart</h1>
</div>
<div id="budget-payday" class="txt-center">
<div class="col-xs-12 text-comparison">
<p class="text">In less than two minutes our calculator will help you figure out what’s the right amount for your loan. Thinking through expenses and assets may seem daunting, but we’ve made it simple and straightforward. </p>
</div>
<form action="#" id="calculation" method="post" class="sm-bottom">
<h3 class="title">Calculate now!</h3>
<div class="formular col-xs-12 col-sm-8">
<div class="col-xs-12 form-group">
<label class="col-xs-12 col-sm-8 alpha">What’s the date of your next paycheck?</label>
<div class="input-group col-sm-4 alpha omega image-fix">
<input class="form-control" type="text" placeholder="yyyy/mm/dd" id="paycheck" />
<!-- <div class="input-group-append">
<div class="input-group-text"><i class="fa fa-calendar"></i></div>
</div> -->
</div>
</div>
<span class="col-xs-12 error-required error" style="display: none;"></span>
<div class="col-xs-12 form-group">
<label class="col-xs-12 col-sm-8 alpha">What is your current bank balance? </label>
<div class="col-xs-12 col-sm-4 alpha omega">
<input class="form-control" type="text" placeholder="$0.00" id="account" placeholder="$0.00" required />
</div>
</div>
<div class="clearfix"></div>
<hr>

<div class="col-xs-12 form-group2" id="estimate">
<p><b class="cost">Estimate realistically what you spend for the following:</p>
<div class="col-xs-12 alpha omega form-group">
<label class="col-xs-12 col-sm-8 alpha">Groceries and restaurant?</label>
<div class="col-xs-12 col-sm-4 alpha omega">
<input class="form-control" type="text" placeholder="$0.00" id="groceries" />
</div>
</div>
<div class="col-xs-12 alpha omega form-group">
<label class="col-xs-12 col-sm-8 alpha">Utilities (electricity, phone, cable, internet)?</label>
<div class="col-xs-12 col-sm-4 alpha omega">
<input class="form-control" type="text" placeholder="$0.00" id="utilities" />
</div>
</div>
<div class="col-xs-12 alpha omega form-group">
<label class="col-xs-12 col-sm-8 alpha">Transportation costs such as bus passes, fuel, car or computer maintenance and repair?</label>
<div class="col-xs-12 col-sm-4 alpha omega">
<input class="form-control" type="text" placeholder="$0.00" id="transport" />
</div>
</div>
<div class="col-xs-12 alpha omega form-group">
<label class="col-xs-12 col-sm-8 alpha">Credit repayment (loan, credit cards)?</label>
<div class="col-xs-12 col-sm-4 alpha omega">
<input class="form-control" type="text" placeholder="$0.00" id="credit-loan" />
</div>
</div>
<div class="col-xs-12 alpha omega form-group">
<label class="col-xs-12 col-sm-8 alpha">Housing costs (rent or mortgage)?</label>
<div class="col-xs-12 col-sm-4 alpha omega">
<input class="form-control" type="text" placeholder="$0.00" id="mortage-rent" />
</div>
</div>
<div class="col-xs-12 alpha omega form-group">
<label class="col-xs-12 col-sm-8 alpha">Clothing?</label>
<div class="col-xs-12 col-sm-4 alpha omega">
<input class="form-control" type="text" placeholder="$0.00" id="clothing" />
</div>
</div>
<div class="col-xs-12 alpha omega form-group">
<label class="col-xs-12 col-sm-8 alpha">Medical?</label>
<div class="col-xs-12 col-sm-4 alpha omega">
<input class="form-control" type="text" placeholder="$0.00" id="medical" />
</div>
</div>
<div class="col-xs-12 alpha omega form-group">
<label class="col-xs-12 col-sm-8 alpha">Insurance costs: e.g. for your home or vehicle?</label>
<div class="col-xs-12 col-sm-4 alpha omega">
<input class="form-control" type="text" placeholder="$0.00" id="insurance" />
</div>
</div>
<div class="col-xs-12 alpha omega form-group">
<label class="col-xs-12 col-sm-8 alpha">Personal expenses such as subscriptions, memberships, toiletries, cosmetics?</label>
<div class="col-xs-12 col-sm-4 alpha omega">
<input class="form-control" type="text" placeholder="$0.00" id="personal" />
</div>
</div>
<div class="col-xs-12 alpha omega form-group">
<label class="col-xs-12 col-sm-8 alpha">Educational expenses such as tuition, supplies, books?</label>
<div class="col-xs-12 col-sm-4 alpha omega">
<input class="form-control" type="text" placeholder="$0.00" id="education" />
</div>
</div>
<div class="col-xs-12 alpha omega form-group">
<label class="col-xs-12 col-sm-8 alpha">Gifts and extras (birthday, special occasion)?</label>
<div class="col-xs-12 col-sm-4 alpha omega">
<input class="form-control" type="text" placeholder="$0.00" id="gift-extra" />
</div>
</div>
<div class="col-xs-12 alpha omega form-group">
<label class="col-xs-12 col-sm-8 alpha">Anything we’ve missed: entertainment, games, nights out?</label>
<div class="col-xs-12 col-sm-4 alpha omega">
<input class="form-control" type="text" placeholder="$0.00" id="extra-spend" />
</div>
</div>
<div class="col-xs-12 alpha omega form-group">
<label class="col-xs-12 col-sm-8 alpha">Child fee (alimony, child support, babysitters)?</label>
<div class="col-xs-12 col-sm-4 alpha omega">
<input class="form-control" type="text" placeholder="$0.00" id="child-fee" />
</div>
</div>
<div class="col-xs-12 alpha omega form-group">
<label class="col-xs-12 col-sm-8 alpha">Now add in 10% to cover the unexpected</label>
<!-- <label class="col-xs-12 col-sm-8 alpha">Pet costs such as food or kitty litter?</label> -->
<div class="col-xs-12 col-sm-4 alpha omega">
<input class="form-control" type="text" placeholder="$0.00" id="pet" />
</div>
</div>
</div>
<div class="col-xs-12 sm-bottom">
<!-- <span class="col-sm-8">Now add in 10% to cover the unexpected</span> -->
<span class="col-sm-8"></span>
<a id="calcul" class="btn btn-green col-xs-12 col-sm-4">Calculate</a>
</div>
<div class="clearfix"></div>
<hr>
<div class="col-xs-12" id="cost" style="display: none;">
<label class="col-xs-12 col-sm-8 alpha line">Total of costs:</label>
<div id="total" class="col-xs-12 col-sm-4"></div>
</div>
<div class="clearfix sm-bottom"></div>
<div classs="col-xs-12 sm-bottom" id="eligible" style="display: none;">
<p class="text col-xs-12">Ethical lending is core to {{ $privname }}’s mission. Our Code of Conduct aims to help you make responsible borrowing decisions. We want you to be financially successful, so please be sure to <a href="/responsible-payday-lending-in-canada" title="reponsible lending">borrow responsibly</a> <br><br>The maximum loan that we recommend you request is:
</p>
<div class="col-xs-12 col-sm-8">
<label id="summ" class="line"></label> at {{ $privname }}
</div>
<div class="col-xs-12 col-sm-4">
<a href="{{url('/signup')}}" class="btn btn-green col-xs-12" id="apply">Apply Now!</a>
</div>
</div>
<div classs="col-xs-12 sm-bottom" id="noneed" style="display: none;">
<p class="text col-xs-12">Your current funds are sufficient for your expenses. <br><br>
Our Code of Conduct commits us to aiding you in your goal to <a href="{{url('/responsible-lending')}}" title="reponsible lending">borrow responsibly</a>. We are happy to be able to assist you in achieving your financial success.
</p>
</div>
</div>
</form>
</div>
</div>
</section>
<section id="beaver-tab" class="dark-blue">
<div class="container">
<p class="text-center text citation">There’s a reason  <b><a href="{{url('/why_use_us')}}">{{ $privname }}’s </a></b> customers choose us</p>
<br><br><br><br>
</div>
</section>

<style type="text/css">
	.image-fix img{
	    width: 40px;
	    height: 38px;
	    cursor: pointer;
	}
</style>
@endsection
