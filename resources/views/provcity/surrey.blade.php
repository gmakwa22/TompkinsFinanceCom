<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Surrey</p>
				<h2 class="small-title">The Best PayDay Loan in Surrey</h2>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$privname}}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$privname}} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in or near Surrey: Vancouver, Burnaby, West Vancouver, White Rock, North Vancouver, Langley, Port Moody. Anywhere in the Surrey area, we’ve got you covered with our ethical lending practices</p>
				<p class="text text-justify">Licensed to operate in Surrey, and all of British Columbia, not only do we offer the top of the line in online security, but we promise to never sell your personal information to any third party. </p>
@include('provcity.bc-cities')
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
           <iframe src="https://www.youtube.com/embed/n0EOuaD9R9U" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Best things about living in Surrey, BC:</h3>
          <ul class="list-group">
						<li class="list-group-item"><a href="https://www.surrey.ca/" target="_blank" rel="noopener">- City of Surrey, BC</a></li>
						<li class="list-group-item"><a href="https://surreylibraries.ca/" target="_blank" rel="noopener">- Libraries in Surrey, BC</a></li>
						<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attraction_Review-g183462-d6857206-Reviews-Blackie_Spit_Park-Surrey_British_Columbia.html" target="_blank" rel="noopener">- Top family activity in Surrey, BC</a></li>
						<li class="list-group-item"><a href="https://www.tripadvisor.ca/Restaurant_Review-g183462-d762750-Reviews-A_W_Restaurant-Surrey_British_Columbia.html" target="_blank" rel="noopener">- Best fast food restaurant in Surrey, BC</a></li>
						<li class="list-group-item"><a href="https://www.surrey.ca/services-payments/parking-streets-transportation/walking-cycling-transit/transit-in-surrey" target="_blank" rel="noopener">- Public Transit in Surrey, BC</a></li>
						<li class="list-group-item"><a href="https://www.ctvnews.ca/hot-topics/Tags/Surrey" target="_blank" rel="noopener">- News in Surrey, BC</a></li>
						<li class="list-group-item"><a href="https://weather.com/en-CA/weather/today/l/49.19,-122.85?par=google?par=google" target="_blank" rel="noopener">- Weather in Surrey, BC</a></li>
						</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')
