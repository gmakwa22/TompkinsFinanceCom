<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Moncton</p>
				<h2 class="small-title">Your Personal Payday Loan Solution</h2>
				<p class="text text-justify">After trailblazing out west, {{ $privname }} is proud to announce that we have now landed in our first Maritime province: New Brunswick. We are now able to offer the same great payday loan and cash advance solutions to our Moncton friends and we can’t wait to start building relationships with Eastern USA.</p>
				<p class="text text-justify">There are numerous reasons that {{ $privname }} has been the #1 choice for Americans when it comes to payday loan and cash advance solutions. We understand that when a financial crisis arises, you don’t have time for lengthy application processes and long wait times. When your car needs emergency repairs and the mechanic bill comes in, you need access to some funds the same day. Or a sudden toothache requires immediate dental attention, you need to be able to go to the dentist the very same day. Or even if the financial emergency is something as simple as falling a little short on the rent bill this month, you need to know where to turn and who can help. Americans from across the country have been turning to {{ $privname }}, and now we are ready to provide the same great service to our Moncton clients. </p>
				<p class="text text-justify">Our innovative and revolutionary online application process can be completed completely online, 24 hours a day and 7 days a week. Whether you are having fun at Magic Mountain, shopping through downtown Moncton, or spending a lazy day strolling through Magnetic Hill, our mobile-friendly platform allows you to finalize your application in a matter of minutes.</p>
				<p class="text text-justify">{{ $privname }} is also leading the way in ethical and honest practices in the lending industry. We pride ourselves on our Code of Conduct that is based on the European model of business. All of our business standards, lending dealings and employee interactions are governed by this Code of Conduct that guides us in remaining ethical, honest, and transparent. It is more important for us to build a strong bond of trust between ourselves and our client, rather than simply make a quick dollar. That is {{ $privname }} promise to Moncton.</p>
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
           <iframe src="https://www.youtube.com/embed/7G1kcUcB-tA" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Best things about living in Moncton, NB:</h3>
			<ul class="list-group">
					<li class="list-group-item"><a href="https://www.moncton.ca/" target="_blank" rel="noopener">- City of Moncton, NB</a></li>
					<li class="list-group-item"><a href="https://monctonpubliclibrary.ca/" target="_blank" rel="noopener">- Libraries in Moncton, NB</a></li>
					<li class="list-group-item"><a href="http://www.codiactranspo.ca/Contact_Us.htm" target="_blank" rel="noopener">- Public Transit, Moncton, NB</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attraction_Review-g154958-d5772889-Reviews-Irishtown_Nature_Park-Moncton_New_Brunswick.html" target="_blank" rel="noopener">- Top activity in Moncton, NB</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Restaurant_Review-g154958-d6818386-Reviews-Bangkok_Food_Truck-Moncton_New_Brunswick.html" target="_blank" rel="noopener">- Best fast food restaurant in Moncton, NB</a></li>
					<li class="list-group-item"><a href="https://www.expedia.ca/Magnetic-Hill-Moncton.d6131988.Vacation-Attraction" target="_blank" rel="noopener">- Exploring Moncton, NB</a></li>
					<li class="list-group-item"><a href="https://www.google.ca/search?q=moncton,+new+brunswick&amp;source=lnms&amp;tbm=nws&amp;sa=X&amp;ved=0ahUKEwiQh5OGnO3dAhXQqFkKHTC3CIgQ_AUIECgD&amp;biw=1866&amp;bih=981" target="_blank" rel="noopener">- News in Moncton, NB</a></li>
					<li class="list-group-item"><a href="https://weather.com/en-CA/weather/today/l/46.09,-64.78?par=google?par=google" target="_blank" rel="noopener">- Weather in Moncton, NB</a>	</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')
