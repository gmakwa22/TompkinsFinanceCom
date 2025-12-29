<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<h2 class="title center text-center" style="color:#3172ba; font-weight: 700; font-size: 50px;">How we do it</h2><br>
				<h2 class="small-title center text-center">That alternative to the old payday loan that you’ve been waiting for</h2><br>
				<p class="text">We offer your payday loan as a fully automated, online experience. The benefits are huge. Here are a few of the reasons this is your exciting new future in the world of short-term loans.</p><br>
				<h2 class="small-title center text-center">Same Day Cash Loans</h2><br>
				<p>Whether it's a car repair, doctors' bills, SSDI Payday Loans, or tuition fees, everyone needs a little help from time to time. A quick cash loan from <b>{{ $privname }}</b> gives you easy access to the funds you need.</p>
				<p>We want to make online loans as hassle-free as possible. Check out our Education Center to get all the details you need, from budgeting tips to financial term definitions.
			  </p>
				<p>To learn more about how we differenciate ourselves from other lenders, go see our comparison chart.</p>

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
