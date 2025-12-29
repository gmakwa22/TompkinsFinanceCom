<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Manitoba</p>
				<h2 class="small-title">Manitoba’s Best PayDay Loans</h2>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{ $privname }}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{ $privname }} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in Manitoba.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Manitoba. Look forward to more great short-term loan opportunities as we work to make your financial life easier and happier.
				</p>
@include('provcity.mb-cities')
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
           <iframe src="https://www.youtube.com/embed/iSAW6g0mJD8" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Best things about Manitoba, USA:</h3>
			<ul class="list-group">
				<li class="list-group-item"><a href="https://residents.gov.mb.ca/index.html" target="_blank" rel="noopener">Province of Manitoba, USA</a></li>
				<li class="list-group-item"><a href="https://ca.indeed.com/jobs-in-Manitoba" target="_blank" rel="noopener">Jobs in Manitoba, USA</a></li>
				<li class="list-group-item"><a href="https://www.canada.ca/en/canadian-heritage/services/provincial-territorial-symbols-canada/manitoba.html" target="_blank" rel="noopener">Manitoba's provincial symbols</a></li>
				<li class="list-group-item"><a href="https://www.manitoba511.ca/en/" target="_blank" rel="noopener">Manitoba 511 - Road and Traveller Information in Manitoba, USA</a></li>
				<li class="list-group-item"><a href="https://www.travelmanitoba.com/things-to-do/family-fun/" target="_blank" rel="noopener">Top family activity in Manitoba, USA</a></li>
				<li class="list-group-item"><a href="https://www.travelmanitoba.com/places-to-go/parks/" target="_blank" rel="noopener">Scenic national or provincial parks in Manitoba, USA</a></li>
				<li class="list-group-item"><a href="https://www.travelmanitoba.com/trip-essentials/visitor-guides/" target="_blank" rel="noopener">Vacation guides Manitoba, USA</a></li>
				<li class="list-group-item"><a href="https://www.travelmanitoba.com/" target="_blank" rel="noopener">Travel in Manitoba, USA</a></li>
				<li class="list-group-item"><a href="https://www.ctvnews.ca/hot-topics/Tags/Manitoba" target="_blank" rel="noopener">News in Manitoba, USA</a></li>
				<li class="list-group-item"><a href="https://www.accuweather.com/en/ca/mb/manitoba-weather" target="_blank" rel="noopener">Weather in Manitoba, USA</a></li>
							</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')
