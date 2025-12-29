<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Fredericton</p>
				<h2 class="small-title">Fredericton’s Best PayDay Loans</h2>
				<p class="text text-justify">As the capital city of New Brunswick, we know that the folks of Fredericton are familiar with leading the way into great new opportunities for the province. So, we’re overjoyed with the warm reception that {{$privname}} has received from its new customers in this great city.</p>

				<p class="text text-justify">As Fredericton has emerged as a leading centre for new technology, we know the residents of the city will appreciate our cutting-edge approach to the short-term loan business. Our advance algorithm makes the whole process as personalized, transparent, safe and easy as you could imagine. </p>

				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>

				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$privname}}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>

				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{$privname}} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in Fredericton or across New Brunswick.</p>

				<p class="text text-justify">You can access our loan service either online or through our great new app. Apply for your loan while sitting at Tim Horton’s. Or strolling across Carleton Park. It’s that easy.</p>
@include('provcity.nb-cities')
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
           <iframe src="https://www.youtube.com/embed/oNMFubDJHa0" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Best things about living in Fredericton, New Brunswick:</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="http://www.fredericton.ca/en/contact-us" target="_blank"  >- City of Fredericton, NB</a></li>
					<li class="list-group-item"><a href="https://www1.gnb.ca/0003/pages/en/biblio-e.asp?code=YF" target="_blank"  >- Libraries in Fredericton, New Brunswick</a></li>
					<li class="list-group-item"><a href="http://www.fredericton.ca/en/transit" target="_blank"  >- Public Transit, Fredericton, New Brunswick</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Restaurant_Review-g154957-d709720-Reviews-Cabin_Restaurant-Fredericton_New_Brunswick.html" target="_blank"  >- Best fast food restaurant in Fredericton, New Brunswick</a></li>
					<li class="list-group-item"><a href="https://www.expedia.ca/Magnetic-Hill-Fredericton.d6131988.Vacation-Attraction" target="_blank"  >- Exploring Fredericton, New Brunswick</a></li>
					<li class="list-group-item"><a href="https://globalnews.ca/tag/fredericton/" target="_blank" rel="noopener">- News in Fredericton, New Brunswick</a></li>
					<li class="list-group-item"><a href="https://weather.com/en-CA/weather/today/l/45.96,-66.64?par=google?par=google" target="_blank"  >- Weather in Fredericton, New Brunswick</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')
