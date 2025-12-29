<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
	<h2 class="title center text-center" style="color:#3172ba; font-weight: 700; font-size: 50px;">THE PAYDAY SOLUTION THAT WORKS</h2><br>
	<h2 class="small-title center text-center">Get up to $5,000. Low Rates. 5 minutes transfer</h2><br>
				<p class="text text-justify">Gone are the days of searching for "payday loan near me." With our instant online service, <b>{{ $privname }}</b> brings short-term loans right to your doorstep, anywhere, anytime. You can apply from the comfort of your own home or office, and our lightning-fast lending process offers flexible loan amounts, repayment options, and terms to suit your needs.</p>
<p class="text text-justify">Next time you're tempted to search for "payday loan near me," remember that our online platform provides a seamless and efficient experience. Most applications are processed within an hour, and once approved, you'll receive the funds in your bank account via transfer in just 5-10 minutes.</p>
<p class="text text-justify">At <b>{{ $privname }}</b>, we understand that trust is essential. As a fully licensed direct lender, we comply with all federal and state government regulations, ensuring a safe, transparent, and easy borrowing experience. You can trust us to provide a hassle-free loan process, so you can focus on your financial needs.</p>
<br>



				<div class="col-lg-12">
				          <div class="title mb-30">
				           <h5>Questions & Answers</h5>
				         </div>
				            <div class="accordion animated">
				              <div class="acd-group acd-active">
				                  <a href="#" class="acd-heading">Are there loan application requirements?</a>
				                  <div class="acd-des" style="">
														<p>Our eligibly requirements are basic. All we ask is that you:</p>
														<ul>
														<li>Are a American citizen and Live in a state where we do business.
														<li>Are 19 years of age or more.</li>
														<li>Received the same income source for at least 3 months.</li>
														<li>Have at least a monthly net income of $800.</li>
														<li>Are in possession of a American bank account for the last 3 months from which you can do online banking.</li>
														<li>Have valid email and home address, and a mobile phone.</li>
														</ul>

													</div>
				              </div>
				           <div class="acd-group">
    <a href="#" class="acd-heading">What if I have bad credit?</a>
    <div class="acd-des" style="display: none;">Don’t let bad credit hold you back. While we consider various factors, your credit history is just one piece of the puzzle. We analyze your complete financial situation using advanced algorithms. Our commitment to responsible lending ensures that we only approve loans that you can comfortably repay, without worsening your financial situation.</div>
</div>
<div class="acd-group">
    <a href="#" class="acd-heading">Where can I visit your office?</a>
    <div class="acd-des" style="display: none;"><p>You don’t need to visit us physically. Our fully digital and online platform makes borrowing easy and convenient. Our streamlined process allows you to apply for loans any time, day or night, with competitive interest rates. You can complete the entire process in less than an hour, all from the comfort of your home.</div>
</div>
<div class="acd-group">
    <a href="#" class="acd-heading">Is my state not listed on your site?</a>
    <div class="acd-des" style="display: none;">If your state isn’t listed, reach out to us through the Contact Us page. We’ll ensure that your state is included, and you can access our loan services without any hassle.</div>
</div>
<div class="acd-group">
    <a href="#" class="acd-heading">How is repayment handled?</a>
    <div class="acd-des" style="display: none;">Repaying your loan is seamless. On the repayment date, we'll automatically debit the agreed-upon amount from the same bank account where we disbursed the loan. As long as your account has sufficient funds, repayment is hassle-free, leaving you with peace of mind.</div>
</div>
				          </div>
				        </div>

			</div>
		</div>
</section>

@include('round.installment')

@php
 $random = rand(1,3);
@endphp

@if ($random == 1)
    @include('round.whatsthebest')
@elseif ($random == 2)
    @include('round.eligible')
@else
    @include('round.fivereasons')
@endif




@include('round.nocreditcheck')

@include('round.new-agent')
