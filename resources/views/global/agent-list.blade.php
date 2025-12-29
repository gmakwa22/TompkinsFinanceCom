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
			<h3 class="subtitle-lato">
			Everyone’s financial challenges are a little unique to them. Including yours! <br>We help you get the amount of cash you need and the repayment plan that works for you.
			</h3>
		</div>
		<div id="same-interest-rate" class="txt-center">
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
			</div>
			<div class="col-xs-12 same-interest-rate-text">
				<p class="text">You can pay back your loan on your next payday in a single installment. <br><span class="other_provinces">Our flexible repayment plan, though, allows you to pay 2 or 3 installments, of equal value. You have more time to repay, with no extra fees or interest charges. </p>
				<p class="text"><b>Is that possible?</b><br>Yes, it’s true: 1, 2, or 3 payment installments all for the same interest charge!</p>
			</div>
		</div>
	</div>
</section>

<section id="bg-content2" >
	<div class="main_applicationStep animation-container-04 container" id="application-step" style="margin: 0 auto !important;">
		<section class="custome rebate_bg">
			<div id="cashback" class="row">
				<div class="col-xs-12  animation-stack-04" data-os-animation-delay="0.25s" data-os-animation="fadeInLeft" style="animation-delay: 0.25s;">
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 alpha omega img_left">
						<img src="{{url('/images/fast_easy.png')}}" alt="Get Fund" class="step_img">
					</div>
					<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 content_right">
						<h2 class="title_h">Fast And Easy</h2>
						<p class="text">Forget those line-ups down at the brick-and-mortar joint. You can apply for this loan from the comfort of your couch. Our advanced assessment tools instantly determine your eligibility. Once approved, just sign your electronic agreement and watch for your money.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="custome rebate_bg">
			<div id="cashback" class="row">
				<div class="col-xs-12 animation-stack-04" data-os-animation-delay="1s" data-os-animation="fadeInRight" style="animation-delay: 1s;">
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 alpha omega img_left">
						<img src="{{url('/images/cashback.png')}}" alt="Get Fund" class="step_img">
					</div>
					<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 content_right">
						<h2 class="title_h">Instant Payment</h2>
						<p class="text">Once approved, you won't have to watch long for your money. In just 5 minutes our transfer will have the funds in your bank account.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="custome rebate_bg">
			<div id="cashback" class="row">
				<div class="col-xs-12 animation-stack-04" data-os-animation-delay="1.75s" data-os-animation="fadeInLeft" style="animation-delay:1.75s;">
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 alpha omega img_left" >
						<img src="{{url('/images/painless.png')}}" alt="Get Fund" class="step_img">
					</div>
					<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 content_right">
						<h2 class="title_h">Painless Repayment</h2>
						<p class="text">There’s no headaches over repayment with PayDay. We make it easy. With either the cash advance or more flexible payment plan you can repay in 7 to 62 days – depending on your pay cycle. Cash advance is one repayment, while the flexible plan allows 2 or 3 installments. The interest for each, though, is exactly the same. PayDay automatically debits your bank account for your payment. No fuss. What could be easier and more painless than that?</p>
					</div>
				</div>
			</div>
		</section>
	</div>
</section>


<section id="Work_mission">
	<div class="container">
		<section id="how-it-works-section-2">
			<div class="container big row">
				<div class="col-xs-12 col-sm-6">
					<div class="how-it-works-blocknew">
						<div class="col-xs-2 col-sm-2">
							<img src="{{url('/images/hand.png')}}" alt="howitwork fast convenient">
						</div>
						<div class="col-xs-10 col-sm-10">
							<h2 class="small-title">
								Fast &amp; <br>Convenient
							</h2>
							<p class="text">
							Getting the fast cash loan, you need from PayDay is a better way to borrow because there's no paperwork, no faxing endless copies, only a fast and efficient online application. The entire lending process is automated and provides you with an answer at the end. Once approved, your money is instantly sent to your bank account.
							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="how-it-works-blocknew">
						<div class="col-xs-2 col-sm-2">
							<img src="{{url('/images/bulb.png')}}" alt="howitwork flexible">
						</div>
						<div class="col-xs-10 col-sm-10">
							<h2 class="small-title">
							Smart and<br> Informed
							</h2>
							<p class="text">We know that you want to be in control of your lending experience. Our agreements are clear. There’s no hidden feels. Our easy to use tools help you assess the full costs of any borrowing decision that you make. We help you be a smart and informed borrower.
							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="how-it-works-blocknew">
						<div class="col-xs-2 col-sm-2">
							<img src="{{url('/images/thumbnew.png')}}" alt="howitwork bad credit">
						</div>
						<div class="col-xs-10 col-sm-10">
							<h2 class="small-title">
							Peace of<br> Mind
							</h2>
							<p class="text">Applying for a loan online requires sharing personal information. Protecting your security and privacy is absolutely essential to us. That’s why we use the industry’s state-of-the-art encryption technology and security protocols. All our online transactions are fully protected. All to provide you the peace of mind that you require and deserve.

							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="how-it-works-blocknew">
						<div class="col-xs-2 col-sm-2">
							<img src="{{url('/images/doc_cut.png')}}" alt="howitwork secure" class="four">
						</div>
						<div class="col-xs-10 col-sm-10">
							<h2 class="small-title">
								Bad credit<br> not a deal breaker
							</h2>
							<p class="text">
								Worried about your credit score? Don’t jump to conclusions. We have cutting edge evaluation tools that are focused not on some past score, but on whether you can repay the loan you want to take out today. That’s what matters to us. We won’t let past experience be a deal breaker, when it’s your future that’s at stake.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</section>

<section id="cac-commitment" class="same-day-img change_bigbonus">
	<div class="container animation-container-03">
		<div class="col-xs-12 col-md-10 commitment-text " >
			<h2 class="title">Big Bonus!</h2>
			<p class="text">$750! That’s how much you’ll be eligible to receive when you take out your first ever loan with us. Plus, regular patronage has its privileges. Every loan you take and repay with us increases your trust score, increasing as well the ceiling on what you can borrow – eventually all the way up to $5,000. That’s a big bonus.</p>
		</div>
	</div>
</section>

<style>

</style>


<section id="beaver-tab" class="dark-blue">
	<div class="container">
		<div class="how-wrk-last-table-cntnt">
			<div class="how-wrk-last-table-lft">
				<ul>
					<li id="elloan" class="active1"><a href="#how-wrk" data-toggle="tab" aria-expanded="false">Assessing Eligibility</a></li>
					<li id="aprfee" ><a href="#apr" data-toggle="tab" aria-expanded="false">No Surprise Fees</a></li>
					<li id="gcash" ><a href="#getcash" data-toggle="tab" aria-expanded="false">Your Money, When You Need It</a></li>
					<li id="manloan" ><a href="#mloan" data-toggle="tab" aria-expanded="false">Loan Management</a></li>
					<li id="reloan" ><a href="#repay" data-toggle="tab" aria-expanded="false">Loan Repayment</a></li>
					<li id="rep" ><a href="#reborrow" data-toggle="tab" aria-expanded="false">Repeat borrowing</a></li>
					<li id="late" ><a href="#lfee" data-toggle="tab" aria-expanded="false">Late fees</a></li>
				</ul>
			</div>
			<div class="how-wrk-last-table-rght active" id="how-wrk">
				<h3>Assessing Eligibility</h3>
				<p>Here’s what we’ll need for you to be eligible to borrow:</p>
				<ul>
					<li class="check-list">19 years old, minimum</li>
					<li class="check-list">American citizen,Resident of one of the following provinces: Alberta, British Columbia, Manitoba, New Brunswick, Nova Scotia, Ontario or Saskatchewan.</li>
					<li class="check-list">At least 3 months working for the same employer.</li>
					<li class="check-list">$800 minimum net monthly income.</li>
					<li class="check-list">American bank account – must have been open for a minimum of 3 months.</li>
					<li class="check-list"> Valid and current mobile phone, email address and home address.</li>
					<li class="check-list">No past record of filing for bankruptcy nor intention of doing so in the future.</li>
				</ul>
			</div>
			<div class="how-wrk-last-table-rght" id="apr">
				<h3>No Surprise Fees</h3>
				<p class="newtext">Our interest fees are transparent and straightforward. They’re a calculated percentage of the amount borrowed. The percentage is regulated by each province’s payday loan legislation. They range from $15 to $23.
				</p>
				<table width="55%" border="1" class="protable">
					<tr>
						<td width="40%">Province</td>
						<td class="text-center">Interest Fees & Transparency</td>
						<td class="text-center" width="25%">Late fee</td>
					</tr>
					<tr>
						<td>Alberta</td>
						<td align="center">$15 per $100</td>
						<td align="center">$25</td>
					</tr>
					<tr>
						<td>British-Columbia</td>
						<td align="center">$15 per $100</td>
						<td align="center">$20</td>
					</tr>
					<tr>
						<td>Manitoba</td>
						<td align="center">$17 per $100</td>
						<td align="center">$20</td>
					</tr>
					<tr>
						<td>New Brunswick</td>
						<td align="center">$15 per $100</td>
						<td align="center">$20</td>
					</tr>
					<tr>
						<td>Nova-Scotia</td>
						<td align="center">$22 per $100</td>
						<td align="center">$40</td>
					</tr>
					<tr>
						<td>Ontario</td>
						<td align="center">$15 per $100</td>
						<td align="center">$48</td>
					</tr>
					<tr>
						<td>Saskatchewan</td>
						<td align="center">$23 per $100</td>
						<td align="center">$50</td>
					</tr>
				</table>
				<p class="other_provinces">When you take a cash advance loan or Flexpay loan with PayDay, you are always in complete control of how much money you will owe and there are no surprises nor hidden fees. Before signing your loan agreement, we will give you a breakdown of all the costs involved in your loan so you will be able to make an informed decision.</p>
			</div>
			<div class="how-wrk-last-table-rght" id="getcash">
				<h3>Your Money, When You Need It</h3>
				<p class="newtext">We're dedicated to the most hassle-free loan experience possible. Any day of the year, any time of the day, our transfer system is ready to send you your funds. Soon as your loan agreement is signed, your money is just 5 minutes away from being in your bank account. Your money, when you need it: that's our promise.
				</p>
			</div>
			<div class="how-wrk-last-table-rght" id="mloan">
				<h3>Loan Management</h3>
				<h4>Want to make early repayments?</h4>
				<p>Absolutely. In fact, if you can manage it, it’s a great idea. Here are some of the benefits:</p>
				<ul>
					<li>No extra fees! Plus…</li>
					<li>Your trust rating in our system increases</li>
				</ul>
				<h4>Thinking of increasing your debt with an outstanding loan?</h4>
				<p>We only allow one loan at a time. This is the responsible choice for both us and you. That’s why we’re so dedicated to helping you make the smart and informed decision about your loan amount and repayment plan.
				</p>
			</div>
			<div class="how-wrk-last-table-rght" id="repay">
				<h3> Loan Repayment</h3>
				<h4>How is my repayment handled?</h4>
				<p>We make repayment as quick, easy and painless as receiving your loan was. On the contractually stipulated due date, your bank account is automatically debited the outstanding fee. Please be sure to avoid any additional fees by ensuring there’s sufficient funds in your account that day to cover the repayment.</p>
				<h4>Repayment Plans</h4>
				<p>For your convenience, two repayment plans are available: </p>
				<ul>
					<li>Cash advance: make a repayment between <span class="text1">7-62</span> days after you are approved </li>
					<li class="other_provinces"> Flexpay: make 2 or 3 repayments between <span class="text1">7-62</span> days after you are approved</li>
				</ul>
			</div>
			<div class="how-wrk-last-table-rght" id="reborrow">
				<h3>Repeat Borrowing</h3>
				<h4 class="other_provinces">Trust Rating System</h4>
				<p class="newtext other_provinces">With your first loan, you are eligible to borrow as much as $750. Repayment that is consistent with the loan’s terms and conditions, including being on time, increases your rating in our trust system. Repeated good dealings will eventually give you access to loans up to $5,000.</p>
				<p class="other_provinces">Once you’ve borrowed and repaid one loan with us, subsequent ones are even easier. This is because you’ve gained trust and we have all your relevant info in our system. Payday loans though are short-term loans and not intended for frequent use.
				</p>
				<p>Your financial well-being is important to us. Not only is this why we’re happy to help out with these short-term loans, but it also requires us to be sure we’re taking a responsible lending decision each time we make a loan. So, if your circumstances change, we can’t guarantee the exact same terms for repeat borrowing.
				</p>
			</div>
			<div class="how-wrk-last-table-rght" id="lfee">
				<h3>Late Fees</h3>
				<p class="newtext1">Each province has its own fees for NSF. These are listed below. We strongly encourage you to avoid such fees by ensuring there are sufficient funds in your bank account to cover the pre-authorized debits on the stipulated due dates.
				</p>
				<table width="200" border="1" class="protable">
					<tr>
						<td>Province</td>
						<td>NSF </td>
					</tr>
					<tr>
						<td>Alberta</td>
						<td>$25</td>
					</tr>
					<tr>
						<td>British-Columbia</td>
						<td>$20</td>
					</tr>
					<tr>
						<td>Manitoba</td>
						<td>$20</td>
					</tr>
					<tr>
						<td>New Brunswick</td>
						<td>$20</td>
					</tr>
					<tr>
						<td>Nova-Scotia</td>
						<td>$40</td>
					</tr>
					<tr>
						<td>Ontario</td>
						<td>$48</td>
					</tr>
					<tr>
						<td>Saskatchewan</td>
						<td>$50</td>
					</tr>
				</table>
				<h4>Collections</h4>
				<p>Our transparent lending practices allow you to be fully informed of all charges and due dates. We want you to be fully aware of your responsibilities. The amount you owe will always be based upon repayment of the loan and any relevant interest charges. No additional fees will be added. </p>
				<p>Interest charges, though, do include surplus fees when a client fails to meet the conditions of their repayment agreement. Failure to meet the conditions of the repayment agreement not only increases fees owned to PayDay, but may also result in a charge from your bank. As of any failure to meet repayment requirements, collection charges apply and will be added to your outstanding balance. Such charges will be continually added until the entire balance has been repaid.
				</p>
				<p>In the event of such failure to meet the repayment agreement, our collection team professionals take over management of the file. They will make every effort to work with you on a revised repayment arrangement. However, failure to resolve the situation will require resort to an external collection agency.
				</p>
				<p>There can be serious consequences for the having your file taken over by an external collection agency. Further fees may result. Your credit rating could be negatively impacted for years to come. Fraud protection agencies may be employed to track your location and ensure full recovery of all outstanding debt and fees. To avoid such outcomes, we strongly urge our clients to ensure they meet their repayment commitments.</p>
				<p>PayDay is in the business of helping people out of difficult situations. We understand how things can go unexpectedly bad. It’s of the greatest importance that if something sudden interferes with your ability to meet the terms and conditions of your repayment agreement that you contact us at the very soonest possible moment. This will allow us to work with you to find the least costly solution. Taking out a loan brings you into a legal obligation. So, please, seriously consider whether it is the right choice for you. If you’re unsure of your ability to meet your repayment obligations, an alternate remedy to your financial difficulties will be a better option. </p>
			</div>
		</div>
	</div>
</section>

@endsection
