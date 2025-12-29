<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Red Deer</p>
				<h2 class="small-title">Red Deer’s Best PayDay Loans</h2>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$privname}}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$privname}} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in Red Deer or across Alberta.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Red Deer. We are a licensed direct lender operating in compliance with the province’s legal regime regulating the industry. Look forward to more great short-term loan opportunities as we work to make your financial life easier and happier.</p>
@include('provcity.alberta-cities')
			</div>
		</div>
</section>

@php
 $random = rand(1,3);
@endphp

@if ($random == 1)
    @include('round.whatsthebest')
@elseif ($random == 2)
    @include('round.bestboxes')
@else
    @include('round.fivereasons')
@endif

<section class="marketing-service gray-bg page-section-ptb">
  <div class="container">
     <div class="row">
      <div class="col-lg-6">
        <br><br>
         <div class="js-video [youtube, widescreen]">
           <iframe src="https://www.youtube.com/embed/W-MZ50yDIoQ" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Helpful information about Red Deer, AB</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="http://www.reddeer.ca/contact-us/" target="_blank" rel="noopener">- City of Red Deer, AB</a></li>
					<li class="list-group-item"><a href="https://www.rdpl.org/" target="_blank" rel="noopener">- Libraries in Red Deer, AB</a></li>
					<li class="list-group-item"><a href="http://www.reddeer.ca/city-services/transit/about-red-deer-transit/" target="_blank" rel="noopener">- Public Transit in Red Deer, AB</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.in/Attractions-g154921-Activities-zft11306-Red_Deer_Alberta.html" target="_blank" rel="noopener">- Top family activity in Red Deer, AB</a></li>
					<li class="list-group-item"><a href="https://www.burgerboy.ca/contact-us" target="_blank" rel="noopener">- Best fast food restaurant Red Deer, AB</a></li>
					<li class="list-group-item"><a href="https://globalnews.ca/tag/red-deer/" target="_blank" rel="noopener">- News in Red Deer, AB</a></li>
					<li class="list-group-item"><a href="https://weather.com/en-CA/weather/today/l/52.27,-113.81?par=google?par=google" target="_blank" rel="noopener">- Weather in Red Deer, AB</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')
