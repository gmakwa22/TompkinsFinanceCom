<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
	<h2 class="title center text-center" style="color:#3172ba; font-weight: 700; font-size: 50px;">HOLLIDAY AND VACATION LOANS</h2><br>
	<h2 class="small-title center text-center">Low Rates for Weekend Payday Loans as High as $5,000</h2><br>
	<p class="text text-justify">A Holiday Loan may be just the thing to make the difference this year. You can have your funds and be back out there shopping for the kids’ presents in less than an hour. That’s how fast our online, automated holiday loan process works. And, rest assured, being a licensed direct lender, using state of the art encryption technology, your private information is safe as can be. </p>
	<p class="text text-justify">After you've been approved, just electronically sign your loan agreement, and your funds will be in your bank account in 5 minutes, thanks to our rapid transfer system.</p>
	<p class="text text-justify">If you’re concerned about repayment, with all the expenses around the holidays, rest assured that we’ve got you covered there, too. We provide a range of options, including the ability to spread out your repayment over 2 or 3 installments, with no increase of interest rates. That should make for happy holidays.</p>
<br>


				<div class="col-lg-12">
				          <div class="title mb-30">
				         </div>
				            <div class="accordion animated">
				              <div class="acd-group acd-active">
				                  <a href="#" class="acd-heading">A Christmas to Remember</a>
				                  <div class="acd-des" style="">
													Meeting the monthly payments are a real challenge for a single parent. So much so that frankly the thought of Christmas isn’t always a welcome one. It’s hard to see that look of disappointment, when the children saw that we didn’t have much for Christmas. But I found out about a great option, that allowed me to have more control over my financial planning. I could get a short-term loan from {{$privname}}. They let me stretch my repayment over 3 installments. And they approved me in no time. It was just minutes. And the money was in my bank account 5 minutes later. I still have to be really careful in the months leading up to and following Christmas, but thanks to {{$privname}} and their great holiday loan opportunity, I can now provide my children the kind of Christmas they deserve. What a god-send. Thanks, {{$privname}}. </p>

				              </div>

				        </div>


			</div>
		</div>
</section>

@include('round.weekend')

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
