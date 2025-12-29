<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Cape Breton</p>
				<h2 class="small-title">Cape Breton’s Best PayDay Loans</h2>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{ $privname }}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you're looking for a <a href="/">short-term loan</a>, with a trusted, direct lender, {{ $privname }} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, across Nova Scotia.</p>
				<p class="text text-justify">We appreciate the encouraging response to our innovative loan business model from our clients in Nova Scotia. Look forward to more great short-term loan opportunities as we work to make your financial life easier and happier.
				</p>
@include('provcity.ns-cities')
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
           <iframe src="https://www.youtube.com/embed/Mb7_lQ0ErTA" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30">
				  <h3>Helpful information about Cape Breton, NS</h3>
          <ul class="list-group">
						<li class="list-group-item"><a href="https://www.cbisland.com/" target="_blank"  >- Cape Breton, NS</a></li>
						<li class="list-group-item"><a href="https://cbrl.ca/" target="_blank"  >- Libraries in Cape Breton, NS</a></li>
						<li class="list-group-item"><a href="https://www.cbrm.ns.ca/transit" target="_blank"  >- Public Transit in Cape Breton, NS</a></li>
						<li class="list-group-item"><a href="https://www.foodbloggersofcanada.com/where-to-eat-this-weekend-cape-breton-island-edition/" target="_blank"  >- Best restaurants in Cape Breton, NS</a></li>
						<li class="list-group-item"><a href="https://www.fodors.com/world/north-america/canada/nova-scotia/cape-breton-island/hotels" target="_blank"  >- The best Hotels in Cape Breton, NS</a></li>
						<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g154972-Activities-Cape_Breton_Island_Nova_Scotia.html" target="_blank"  >- Best Things to do in Cape Breton, NS</a></li>
						<li class="list-group-item"><a href="https://www.capebretonpost.com/news/local/" target="_blank"  >- News in Cape Breton, NS</a></li>
						<li class="list-group-item"><a href="https://weather.com/weather/today/l/46.25,-60.85?par=google" target="_blank"  >- Weather in Cape Breton, NS</a></li>
		 			 </ul>
      </div>
     </div>
  </div>
</section>
