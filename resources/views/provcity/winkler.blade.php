<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Winkler</p>
				<h2 class="small-title">Winkler’s Best PayDay Loans</h2>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$privname}}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$privname}} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in Winkler or across Manitoba.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Winkler. Look forward to more great short-term loan opportunities as we work to make your financial life easier and happier.
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
           <iframe src="https://www.youtube.com/embed/4su5Fsf-CLU" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30">
<h3>Helpful information about Winkler, Manitoba</h3>
			<ul class="list-group">
				<li class="list-group-item"><a href="http://cityofwinkler.ca/" target="_blank" rel="noopener">- City of Winkler, Manitoba</a></li>
				<li class="list-group-item"><a href="https://scrl.mb.libraries.coop/about-us/contact-us/" target="_blank" rel="noopener">- Libraries in Winkler, Manitoba</a></li>
				<li class="list-group-item"><a href="http://www.winkler.ca/main.aspx?CategoryCode=71C5B41B-2BE9-45BB-BE76-B808B9C1C779&amp;pageCode=06B4E3F6-75F8-48AE-8E13-E8B8BEADA5F1&amp;subPageCode=2DEF5531-3530-4C28-884A-2039641AAC79" target="_blank" rel="noopener">- Public Transit in Winkler, Manitoba</a></li>
				<li class="list-group-item"><a href="http://meimeichinesebuffet.food74.com/" target="_blank" rel="noopener">- Best fast food restaurant in Winkler, Manitoba</a></li>
				<li class="list-group-item"><a href="https://globalnews.ca/tag/winkler-manitoba/" target="_blank" rel="noopener">- News in Winkler, Manitoba</a></li>
				<li class="list-group-item"><a href="https://weather.com/en-CA/weather/today/l/49.18,-97.94?par=google?par=google" target="_blank" rel="noopener">- Weather in Winkler, Manitoba</a></li>
				</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')
