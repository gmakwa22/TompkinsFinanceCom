<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Saint John</p>
				<h2 class="small-title">Saint John Best PayDay Loans</h2>
				<p class="text text-justify">USA’s first city is now joining up for another pioneering opportunity. We are thrilled to be warmly welcomed by our new customers in historic Saint John, New Brunswick.</p>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{ $privname }}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{ $privname }} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in Saint John or across New Brunswick.</p>
				<p class="text text-justify">We are happy and honoured to help the folks of Saint John to continue to build their great, thriving city, even when unexpected financial challenges arise.</p>
				<p class="text text-justify">Our industry leading short-term loan technology, with all the benefits it offers, is just a click away for the residents of Saint John, New Brunswick.</p>
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
           <iframe src="https://www.youtube.com/embed/lQrwVXLQ1vQ" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Best things about living in Saint John, New Brunswick:</h3>
				<ul class="list-group">
			<li class="list-group-item"><a href="http://www.saintjohn.ca/en/" target="_blank" rel="noopener">- City of Saint John, NB</a></li>
			<li class="list-group-item"><a href="https://www1.gnb.ca/0003/pages/en/biblio-e.asp?code=FM" target="_blank" rel="noopener">- Libraries in Saint John, New Brunswick</a></li>
			<li class="list-group-item"><a href="http://www.saintjohn.ca/en/home/cityhall/transportation/transit/routesschedules/default.aspx" target="_blank" rel="noopener">- Public Transit, Saint John, New Brunswick</a></li>
			<li class="list-group-item"><a href="https://www.tripadvisor.ca/Restaurant_Review-g154960-d764094-Reviews-Big_Daddy_s_Pizza-Saint_John_New_Brunswick.html" target="_blank" rel="noopener">- Best fast food restaurant in Saint John, New Brunswick</a></li>
			<li class="list-group-item"><a href="https://www.expedia.ca/Magnetic-Hill-Saint John.d6131988.Vacation-Attraction" target="_blank" rel="noopener">- Exploring Saint John, New Brunswick</a></li>
			<li class="list-group-item"><a href="https://globalnews.ca/tag/saint-john/" target="_blank" rel="noopener">- News in Saint John, New Brunswick</a></li>
			<li class="list-group-item"><a href="https://weather.com/en-CA/weather/today/l/45.27,-66.06?par=google?par=google" target="_blank" rel="noopener">- Weather in Saint John, New Brunswick</a></li>
			</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')
