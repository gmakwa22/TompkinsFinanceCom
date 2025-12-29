<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Vancouver</p>
				<h2 class="small-title">The Best PayDay Loan in Vancouver</h2>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$privname}}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$privname}} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in or near Vancouver: Burnaby, Surrey, West Vancouver, White Rock, North Vancouver, Langley, Port Moody. Anywhere in the Vancouver area, we’ve got you covered with our ethical lending practices.</p>
				<p class="text text-justify">Licensed to operate in Vancouver, and all of British Columbia, not only do we offer the top of the line in online security, but we promise to never sell your personal information to any third party. </p>
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
           <iframe src="https://www.youtube.com/embed/e27b8xj5sNM" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Best things about living in Vancouver, BC:</h3>
          <ul class="list-group">
						<li class="list-group-item"><a href="http://vancouver.ca/" target="_blank" rel="noopener">- City of Vancouver</a></li>
		 			 <li class="list-group-item"><a href="https://www.translink.ca/" target="_blank" rel="noopener">- Vancouver TransLink</a></li>
		 			 <li class="list-group-item">- Vancouver public transit</li>
		 			 <li class="list-group-item"><a href="https://vancouver.ca/doing-business.aspx" target="_blank" rel="noopener">- Doing business with City of Vancouver</a></li>
		 			 <li class="list-group-item">- 25 Things to Do in Vancouver</li>
		 			 <li class="list-group-item"><a href="https://globalnews.ca/tag/vancouver/" target="_blank" rel="noopener">- News in Vancouver, BC</a></li>
		 			 <li class="list-group-item"><a href="https://weather.com/en-CA/weather/today/l/49.28,-123.12?par=google?par=google" target="_blank" rel="noopener">- Vancouver Weather</a></li>
		 			 </ul>
      </div>
     </div>
  </div>
</section>
