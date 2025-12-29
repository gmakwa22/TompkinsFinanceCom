<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Halifax</p>
				<h2 class="small-title">Halifax’s Best PayDay Loans</h2>
				<p class="text text-justify">We know that things happen in life and sometimes you need extra money for unexpected expenses. If you need the car or computer repaired, emergency dental work or last-minute tuition fees, what do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? Our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
				<p class="text text-justify">Plus, we use the industry’s state-of-the-art encryption technology to ensure that your personal application information is rock solid safe. Also, the application is as simple as can be. The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{ $privname }}. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
				<p class="text text-justify">So, if you’re looking for a short-term loan, with a trusted, direct lender, {{ $privname }} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, across Nova Scotia.</p>
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
           <iframe src="https://www.youtube.com/embed/lqAl__AcsfU" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30">
				  <h3>Helpful information about Halifax, NS</h3>
          <ul class="list-group">
						<li class="list-group-item"><a href="https://www.halifax.ca/" target="_blank"  >- Halifax Regional Municipality</a></li>
						<li class="list-group-item"><a href="https://www.halifaxpubliclibraries.ca/" target="_blank"  >- Libraries in Halifax</a></li>
						<li class="list-group-item"><a href="https://www.huffingtonpost.ca/2017/01/30/best-restaurants-halifax_n_14253866.html" target="_blank"  >- Best restaurants in Halifax</a></li>
						<li class="list-group-item"><a href="https://www.tripadvisor.ca/Hotels-g154976-zfn5231-Halifax_Halifax_Regional_Municipality_Nova_Scotia-Hotels.html" target="_blank"  >- The best Hotels in Halifax</a></li>
						<li class="list-group-item"><a href="https://www.globeguide.ca/top-10-things-halifax-nova-scotia/" target="_blank"  >- Best Things to do in Halifax</a></li>
						<li class="list-group-item"><a href="https://www.halifaxtoday.ca/" target="_blank"  >- News in Halifax</a></li>
						<li class="list-group-item"><a href="https://weather.com/weather/today/l/44.65,-63.58?par=google" target="_blank"  >- Weather in Halifax</a></li>
		 			 </ul>
      </div>
     </div>
  </div>
</section>
