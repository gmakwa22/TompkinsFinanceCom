
@extends('layouts.appnew')

@section('content')
<div class="container-fluid head-index">
	<div class="rellax  index" data-rellax-speed="3"></div>
	<div class="container no-padding">
		<div id="slogan" class="col-xs-12 col-sm-7 col-md-5 rellax alpha omega" data-rellax-speed="7">
		<h2>Fast, <br>
		safe <br>
		& Easy <br>
		loans</h2>
		<h3>The best way to borrow money in USA. Period.</h3>
		</div>

		<div id="phone" class="col-xs-12 col-sm-5 alpha omega f-right">
		<div id="phone-slider">
		<h3>How much would you like to borrow?</h3>
		<span class="fa fa-angle-left"></span>
		<span class="fa fa-angle-right"></span>
		<div id="arc-slider" class="rslider rs-ie rs-control rs-animation" style="height: 400px; width: 400px;">
			<div class="rs-container full custom-quarter" style="height: 400px; width: 400px;"><div class="rs-inner-container"><div class="rs-block rs-outer rs-border rs-split"><div class="rs-path rs-transition rs-range-color" style="transform: rotate(225deg);"></div><div class="rs-path rs-transition rs-range-color" style="opacity: 0; transform: rotate(94.9333deg);"></div><div class="rs-path rs-transition rs-path-color" style="transform: rotate(274.933deg); opacity: 1;"></div><div class="rs-path rs-transition rs-path-color" style="opacity: 1; z-index: 1; transform: rotate(45deg);"></div><span class="rs-block" style="padding: 6px;"><div class="rs-inner rs-bg-color rs-border"></div></span></div></div><div class="rs-bar rs-transition rs-first" style="z-index: 8; transform: rotate(274.933deg);"><div class="rs-handle rs-move" index="2" tabindex="0" role="slider" aria-label="arc-slider_handle" style="height: 38px; width: 38px; margin: -19px 0px 0px -16px;" aria-valuenow="899" aria-valuemin="150" aria-valuemax="1500"></div></div><span class="rs-bar rs-transition rs-start" style="transform: rotate(225deg);"><span class="rs-seperator rs-border" style="width: 6px; margin-top: 0px;"></span></span><span class="rs-bar rs-transition rs-end" style="transform: rotate(315deg);"><span class="rs-seperator rs-border" style="width: 6px; margin-top: 0px;"></span></span><div class="rs-overlay1 rs-transition rs-bg-color" style="transform: rotate(405deg);"></div><div class="rs-overlay2 rs-transition rs-bg-color" style="transform: rotate(315deg);"></div><span class="rs-tooltip rs-tooltip-text" style="margin-top: -26.5px; margin-left: -33px;">$751</span></div><input type="hidden" name="arc-slider" value="899">
		</div>
		<!-- <div class="newdd">

		</div> -->
		<input id="loan-slider" name="loan-slider" type="hidden" value="750" title="Loan slider">
		<h3 class="sub2">How many repayments?</h3>
		<div id="terms-box">
			<select name="terms" id="terms">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			</select><div id="terms-slider" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div id="custom-handle" class="ui-slider-handle ui-corner-all ui-state-default" tabindex="0" style="left: 0%;">1</div><div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="width: 0%;"></div></div>
			<div class="dotes"><span class=""></span></div>
		</div>
		<div class="choice-alberta" style="display: none;">
		<div class="info">
		<div class="box col-xs-4 col-sm-4 alpha omega">
		<b>6 to 7 repayments</b><br>
		<span>Paid weekly</span>
		</div>
		<div class="box col-xs-4 col-sm-4 alpha omega">
		<b>3 to 4 repayments</b><br>
		<span>Paid bi-weekly or twice a month</span>
		</div>
		<div class="box col-xs-4 col-sm-4 alpha omega">
		<b>2 to 3 repayments</b><br>
		<span>Paid monthly</span>
		</div>
		</div>
		<div class="box col-xs-12 spec">
		<span><i>The system will automatically provide the number of repayments based on your pay frequency (range between 42 to 62 days).</i></span>
		</div>
		</div>

		<div class="choice-manitoba" style="display: none;">
		<div class='col-xs-12 details'>
		Only the 1-repayment option is available in Manitoba. Please note that in <b>Manitoba</b> only the 1-repayment option is available. If you take a loan with us, you will have to repay it on your next pay date.
		</div>
		</div>
		<div class="clearfix"></div>
		<h3 class="sub3">Where do you live?</h3>
		<div class="ui compact menu" id="states">
		<div class="form-control ui simple dropdown item selection" tabindex="0" id="select-selectState"><select id="selectState" name="selectState" title="States">
		<option data-loan-selected-state="false" data-loan-percent="0" value="">Please select a state</option>
		<option id="texas" data-loan-selected-state="false" data-loan-percent="15" value="texas">Texas</option>
		<option id="california" data-loan-selected-state="false" data-loan-percent="17" value="california">California</option>
		<option id="missouri" data-loan-selected-state="false" data-loan-percent="15" value="missouri">Missouri</option>
		<option id="nevada" data-loan-selected-state="false" data-loan-percent="15" value="nevada">Nevada</option>

		<option id="florida" data-loan-selected-state="false" data-loan-percent="23" value="florida">Florida</option>

		<option id="new-york" data-loan-selected-state="false" data-loan-percent="15" value="new-york">New York</option>
		<option id="illinois" data-loan-selected-state="false" data-loan-percent="15" value="illinois">Illinois</option>
		</select><i class="dropdown icon"></i><div class="default text">Please select a state</div><div class="menu" tabindex="-1"><div class="item" data-value="texas">Texas</div><div class="item" data-value="california">California</div><div class="item" data-value="missouri">Missouri</div><div class="item" data-value="nevada">Nevada</div><div class="item" data-value="florida">Florida</div><div class="item" data-value="new-york">New York</div><div class="item" data-value="illinois">Illinois</div></div></div>
		</div>
		<div><a href="#" id="licence_state">Lender licences</a></div>
		<a href="{{ url('/getALoan') }}" class="submit btn btn-green" onclick="ga('send', 'event', 'accueil', 'get a loan', 'loan-picker - accueil');">Get my loan</a>
		</div>
		</div>
	</div>
</div>
</div>
<input type="hidden" id="show_license" value="0" />
<div id="bg-content">
	<section id="partners">
		<div class="container">
		<div class="logos">
		<div class="comodo"></div>
		<div class="bbb"></div>
		<div class="inter"></div>
		<div class="equi"></div>
		<div class="comp"></div>
		</div>
		</div>
	</section>
	<section id="wave" class="custome trust">
		<div class="container">
		<div class="col-xs-12 col-sm-4 col-md-5 col-lg-4 image  rellax" >
		<img src="./images/phone.png" alt="Smart Phone" class="img-phone" />
		</div>
		<div class="col-xs-12 col-sm-8 col-md-7 col-lg-7 app animation-container-01">
		<div class="text ">
		<br>
		<br>
		<h2 class="title first">Get up to <b>$5,000</b>!</h2><h2 class="title">Apply online today!</h2>
		<p>Complete your application and access your account anywhere.</p>
		</div>
		</div>
		</div>
		<div class="trust-img">
		<div class="trustpilot-widget" data-locale="en-US" data-template-id="53aa8912dec7e10d38f59f36" data-businessunit-id="5a54edd59046f00001ad04bf" data-style-height="130px" data-style-width="100%" data-theme="light" data-stars="5" data-schema-type="Organization">
		<iframe frameborder="0" scrolling="no" title="Customer reviews powered by Trustpilot" src="https://widget.trustpilot.com/trustboxes/53aa8912dec7e10d38f59f36/index.html?templateId=53aa8912dec7e10d38f59f36&amp;businessunitId=5a54edd59046f00001ad04bf#locale=en-US&amp;styleHeight=130px&amp;styleWidth=100%25&amp;theme=light&amp;stars=5&amp;schemaType=Organization" style="position: relative; height: 130px; width: 100%; border-style: none; display: block; overflow: hidden;"></iframe>
		</div>
		</div>
	</section>

	<section id="how-it-work">
	    <div class="container alpha omega">
			<div class="col-xs-12">
			    <h2 class="title">The greatest alternative to traditional payday loans</h2>
			</div>
		    <div class="col-xs-12 animation-container-02 alpha omega">
		        <div class="col-xs-12 col-md-12 col-lg-4 alpha box">
		            <div class="card " >
			        <div class="num">
			            <span class="txt">Apply Online</span>
			            <div class="img n1" id="mangolfier" data-link="Mongolfier_v2"><img src="./images/date.png" alt="Apply Online"></div>
			        </div>
				    <div class="text">
				        <p>Getting a loan with us is easy and fast, select your loan amount, repayment plan and provide some personal details.</p>
				    </div>
		            </div>
		        </div>
		    <div class="col-xs-12 col-md-12 col-lg-4 alpha box">
				<div class="card">
					<div class="num">
						<span class="txt">Instant Decision</span>
						<div class="img n2" id="decision" data-link="Phone_v2"><img src="./images/mobile-approved.png" alt="Instant Decision"></div>
					</div>
					<div class="text">
					    <p>Our fully automated online application will provide you with an instant decision. Once approved, all you have to do is electronically sign your contract!</p>
					</div>
				</div>
		    </div>
		    <div class="col-xs-12 col-md-12 col-lg-4 alpha box">
		        <div class="card">
					<div class="num">
					<span class="txt">Get funds</span>
					<div class="img n3" id="fund" data-link="Vault_v2"><img src="./images/cashback.png" alt="Get Fund"></div>
					</div>
					<div class="text">
					<p>Once your contract is signed, your funds will be sent by e-transfer in the next 5 minutes! Fast, convenient and hassle-free. <b>Funds are sent 24/7</b></p>
					</div>
		        </div>
		    </div>
		    </div>
			<div class="clearfix"></div>
		</div>
		<div class="sentence">Loan terms vary from - 62days. Maximum APR is 109,50%. For a $300 loan, the maximum total cost of borrowing is of $354. No minimum repayment period.</div>
	</section>
	<section id="bg-linear" class="custome">
		<div id="cashback" class="container">
		<div class="smoke"></div>
		<div class="rocket"></div>
		<div class="col-xs-12  cash-block">
		<div class="col-xs-12 col-md-5 col-lg-4 alpha omega " >
		<h2 class="big">20%</h2>
		<h2 class="medium">CASHBACK</h2>
		</div>
		<div class="col-xs-12 col-md-7 col-lg-8 " >
		<h2 class="title">Borrow and Save!<br>Get up to 20% in Cashback!</h2>
		<p>iCASH offers a unique Cashback program to reward its customers. You can get back up to 20% of the cost of borrowing paid once your loan is repaid and receive your Cashback direct into your bank account the same day. Real saving and real Money!</p>
		</div>
		</div>
		</div>
	</section>
	<section id="why-cash-advance">
		<div class="container">
		<div class="col-xs-12 why-ca-title">
		<h2 class="title">Why iCASH</h2>
		<h3 class="subtitle">Get an easy, safe and fast loan</h3>
		</div>
		<div class="animation-container-04">
		<div class="col-xs-12 col-md-4 why-ca-article " >
		<div class="img-icon n1"></div>
		<h3>No <br>Wait</h3>
		<div class="clearfix"></div>
		<p>Complete the secure online loan application in minutes. No documents are required. Be instantly approved and receive an e-transfer within 5 minutes after electronically signing your contract. Even on weekend and Holidays!</p>
		</div>
		<div class="col-xs-12 col-md-4 why-ca-article " >
		<div class="img-icon n2"></div>
		<h3>No <br>Paperwork</h3>
		<div class="clearfix"></div>
		<p>Apply from the comfort of your home - no more faxing documents or waiting in line. The instant online payday loan process is flexible and convenient.</p>
		</div>
		<div class="col-xs-12 col-md-4 why-ca-article" >
		<div class="img-icon n3 big"></div>
		<h3>Get <br>Approved</h3>
		<div class="clearfix"></div>
		<p>Simply fill an easy online application and you can be instantly approved for your cash. Get the repayment schedule that suits your needs with 1, 2 or 3 installments.</p>
		</div>
		</div>
		<div class="animation-container-05">
		<div class="col-xs-12 col-md-4 why-ca-article " >
		<div class="img-icon n4 min"></div>
		<h3>Grace <br>Period</h3>
		<div class="clearfix"></div>
		<p>We will add a 5 days grace period before starting to repay your loan on your next payday. This means you will have an extra 5 days to pay us back with no extra fee.</p>
		</div>
		<div class="col-xs-12 col-md-4 why-ca-article " >
		<div class="img-icon n5 big"></div>
		<h3>100% <br>Compliant</h3>
		<div class="clearfix"></div>
		<p>As licensed lenders, we are fully compliant with state laws and regulations, and our transparent lending process means no hidden fees and no surprises.</p>
		</div>
		<div class="col-xs-12 col-md-4 why-ca-article  flex" >
		<div class="img-icon n6"></div>
		<h3>Flexpay <br>Repayment</h3>
		<div class="clearfix"></div>
		<p>We give you the option to repay your loan in one, two or three equal payments while paying the same interest fee!</p>
		</div>
		</div>
		<div class="col-xs-12 all-about">
		<a href="/why-online-loans-usa" class="btn btn-green">Learn why you should&nbsp;choose&nbsp;iCASH</a>
		</div>
		</div>
	</section>
	<section id="cash-loan-fast" class="bg-linear red">
		<article class="container alpha omega">
		<div class="col-xs-12 col-md-5 card-box  alpha omega" >
		<img src="./images/woman-dog.jpg" alt="Same day cash loan" />
		</div>
		<div class="col-xs-12 col-md-7 text-ext " >
		<h2>Same Day Cash Loans</h2>
		<p class="text">Whether it's a car repair, doctors' bills, Social Security Disability Payday Loans, or tuition fees, everyone needs a little help from time to time. A quick cash loan from iCASH gives you easy access to the funds you need.</p>
		<p class="text">We want to make online loans as hassle-free as possible. Check out our Education Center to get all the details you need, from budgeting tips to financial term definitions.<br>If you are having a hard time figuring out how much money you need, try using our simple <a href="/payday-loans-calculator" onclick="ga('send', 'event', 'same day cash loan', 'click', 'Loan Budgeting');">budget loan calculator</a> !</p><br>
		<p class="text">To learn more about how we differenciate ourselves from other lenders, go see our comparison chart.</p>
		</div>
		</article>
	</section>

	<section id="customers-number">
		<div class="container alpha omega">
		<div class="col-xs-12 col-md-3 alpha omega num " >
		<b id="countup">+ 200 000</b><br>
		<span>members since 2014</span>
		</div>
		<div class="col-xs-12 col-md-3 alpha omega num " >
		<b>93%</b><br>
		<span>of approved applications</span>
		</div>
		<div class="col-xs-12 col-md-3 alpha omega num " >
		<b>4.9</b><font class="gray">out of</font><b>5</b><br>
		<span>customers would recommend us to their friends</span>
		</div>
		<div class="col-xs-12 col-md-3 alpha omega num " >
		<div class="stars">
		<img src="./images/star-1.png" alt="Stars" class="star "  aria-hidden="true">
		<img src="./images/star-1.png" alt="Stars" class="star "  aria-hidden="true">
		<img src="./images/star-1.png" alt="Stars" class="star "  aria-hidden="true">
		<img src="./images/star-1.png" alt="Stars" class="star "  aria-hidden="true">
		<img src="./images/star-1.png" alt="Stars" class="star "  aria-hidden="true">
		</div><br><br>
		<span>Customer Rating</span>
		</div>
		</div>
	</section>

	<section id="friendly">
		<div class="container col-xs-12 col-sm-10 col-md-12 omega">
		<h2 class="title">See what our customers say about us</h2>
		<ul class="customers">
		<li class=" " >
		<img src="./images/portraits/port-280.png" alt="">
		<div class="bloc">
		<p>"Wow. You guys are awesome.<br>Thank you very much, the lady who helped was amazing and very patient"</p>
		<div class="name">Miriam H. Mississauga, Ontario _</div>
		<span class="stars">
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		</span>
		</div>
		</li>
		<li class="" >
		<img src="./images/portraits/port-11.png" alt="">
		<div class="bloc">
		<p>"Almost instant cash, so much help, with reasonable fees and courteous service! Great when you’re in a bind, apply online, and get a loan, when you have no other option! Thank you for your super fast, convenient friendly service!"</p>
		<div class="name">Ema M. Edmonton, Alberta _</div>
		 <span class="stars">
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		</span>
		</div>
		</li>
		<li class=""  >
		<img src="./images/portraits/port-250.png" alt="">
		<div class="bloc">
		<p>"Service was amazing, I got my money in an hour. Thank you!"</p>
		<div class="name">Jordan L. Vancouver, British Columbia _</div>
		<span class="stars">
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star-half" aria-hidden="true"></i>
		<i class="fa fa-star-half fa-flip-horizontal" aria-hidden="true"></i>
		</span>
		</div>
		</li>
		<li class=""  >
		<img src="./images/portraits/port-270.png" alt="">
		<div class="bloc">
		<p>"iCASH is a truly amazing operation and I must note your services are much better then anyone else I have dealt with in the past."</p>
		<div class="name">Evelyne C. Toronto, Ontario _</div>
		<span class="stars">
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		</span>
		</div>
		</li>
		<li class=""  >
		<img src="./images/portraits/port-15.png" alt="">
		<div class="bloc">
		<p>"I was very happy with the super fast approval time! Thank you for making this so easy :) This was easily the best application process ever. Thanks iCASH!"</p>
		<div class="name">Alex B. Calgary, Alberta _</div>
		<span class="stars">
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star-half" aria-hidden="true"></i>
		<i class="fa fa-star-half fa-flip-horizontal" aria-hidden="true"></i>
		</span>
		</div>
		</li>
		</ul>
		</div>
		<div class="clearfix"></div>
	</section>
	<section id="comparison-site" class="bg-linear dark">
		<div class="container animation-container-09">
		<table>
		<tr>
		<th></th>
		<th id="icash"><img src="{{asset('images/FL2.jpg')}}" alt="iCASH logo"></th>
		<th id="traditional">Traditional Payday Lenders</th>
		<th id="lenders">Lenders with brokerage fee</th>
		</tr>
		<tr>
		<th>Licensed</th>
		<td headers="icash" data-headers="icash"><i class="fa fa-check"></i></td>
		<td headers="traditional"><i class="fa fa-check"></i></td>
		<td headers="lenders">&nbsp;&nbsp;</td>
		</tr>
		<tr>
		<th>Flexible repayment plans</th>
		<td headers="icash"><i class="fa fa-check"></i></td>
		<td headers="traditional">&nbsp;&nbsp;</td>
		<td headers="lenders">&nbsp;&nbsp;<i class="fa fa-check"></i></td>
		</tr>
		<tr>
		<th>Offers cashback program for more savings</th>
		<td headers="icash"><i class="fa fa-check"></i></td>
		<td headers="traditional">&nbsp;&nbsp;</td>
		<td headers="lenders">&nbsp;&nbsp;</td>
		</tr>
		<tr>
		<th>Paperless</th>
		<td headers="icash"><i class="fa fa-check"></i></td>
		<td headers="traditional">&nbsp;&nbsp;</td>
		<td headers="lenders">&nbsp;&nbsp;</td>
		</tr>
		<tr>
		<th>Free membership benefits</th>
		<td headers="icash"><i class="fa fa-check"></i></td>
		<td headers="traditional">&nbsp;&nbsp;</td>
		<td headers="lenders">&nbsp;&nbsp;</td>
		</tr>
		<tr>
		<th>No hidden charges</th>
		<td headers="icash"><i class="fa fa-check"></i></td>
		<td headers="traditional"><i class="fa fa-check"></i></td>
		<td headers="lenders">&nbsp;&nbsp;</td>
		</tr>
		<tr>
		<th>E-transfer in the next 5 minutes</th>
		<td headers="icash"><i class="fa fa-check"></i></td>
		<td headers="traditional">&nbsp;&nbsp;</td>
		<td headers="lenders">&nbsp;&nbsp;</td>
		</tr>
		<tr class="box-btn">
		<td></td>
		<td><a href="/getaloan" class="btn btn-green">Get a loan now</a></td>
		<td></td>
		<td></td>
		</tr>
		</table>
		</div>
	</section>
</div>

@endsection




