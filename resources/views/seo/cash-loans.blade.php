<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<h2 class="title center text-center" style="color:#3172ba; font-weight: 700; font-size: 50px;">Forget the traditional payday loan</h2><br>
				<h2 class="small-title center text-center">We’ve got the better option</h2><br>
				<p class="text">Everyone’s had occasion to take out a loan. So, we all know that often some assistance and guidance can be important to getting things back on the rails financially. <b>{{ $privname }}</b> has just what the doctor ordered: loans, customized to your needs, ready to go, when you need them.</p><br>
				<h2 class="small-title center text-center">Same Day Cash Loans</h2><br>
				<p>Whether it's a car repair, doctors' bills, <a href="/social-security-disability-insurance-ssdi-payday-loans-online">SSDI Payday Loans</a>, or tuition fees, everyone needs a little help from time to time. A quick cash loan from <b>{{ $privname }}</b> gives you easy access to the funds you need.</p>
				<p>We want to make online loans as hassle-free as possible. Check out our Education Center to get all the details you need, from budgeting tips to financial term definitions.
			  </p>
				<p>To learn more about how we differenciate ourselves from other lenders, go see ourcomparison chart</a>.</p>

			</div>
		</div>
</section>

@php
 $random = rand(1,3);
@endphp

@if ($random == 1)
    @include('round.whatsthebest')
@elseif ($random == 2)
    @include('round.onlineborrowingmadeeasy')
@else
    @include('round.fivereasons')
@endif

@include('round.eligible')


@include('round.nocreditcheck')

@include('round.new-agent')
