<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Alberta</p>
				<h2 class="small-title">The Payday Loan You Need</h2>
				<p class="text text-justify">Things happen in life and sometimes you need extra money for unexpected expenses. What do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options?</p>
				<p class="text text-justify">We offer you a payday loan that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account. </p>
				<p class="text text-justify">So, if you need the car or computer repaired, emergency dental work or last-minute tuition fees, our payday loans can do the trick. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise.</p>
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
           <iframe src="https://www.youtube.com/embed/h1FzAqw4P1k" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30">
				  <h3>Helpful information about Alberta, USA:</h3>
				<ul class="list-group">
										<li class="list-group-item"><a href="https://www.alberta.ca/index.aspx" target="_blank" rel="noopener">Province of Alberta, USA</a></li>
										<li class="list-group-item"><a href="https://ca.indeed.com/Province-of-Alberta-jobs" target="_blank" rel="noopener">Jobs in Alberta, USA</a></li>
										<li class="list-group-item"><a href="https://www.canada.ca/en/canadian-heritage/services/provincial-territorial-symbols-canada/alberta.html" target="_blank" rel="noopener">Provincial and territorial symbols, Alberta, USA</a></li>
										<li class="list-group-item"><a href="https://www.alberta.ca/transportation.aspx" target="_blank" rel="noopener">Public Transit in Alberta, USA</a></li>
										<li class="list-group-item"><a href="https://www.tripadvisor.in/Attractions-g154909-Activities-Alberta.html" target="_blank" rel="noopener">Top family activity in Alberta, USA</a></li>
										<li class="list-group-item"><a href="http://banffnationalpark.com/" target="_blank" rel="noopener">Banff National Park in Alberta, USA</a></li>
										<li class="list-group-item"><a href="https://www.travelalberta.com/ca/plan-your-trip/vacation-guides/" target="_blank" rel="noopener">Vacation guides Alberta, USA</a></li>
										<li class="list-group-item"><a href="https://www.google.ca/search?biw=1680&amp;bih=898&amp;tbm=nws&amp;ei=vaTEW9CCKOymjwSfoZDgAg&amp;q=alberta&amp;oq=alberta&amp;gs_l=psy-ab.3..0l10.1871.1871.0.2966.1.1.0.0.0.0.73.73.1.1.0....0...1c.1.64.psy-ab..0.1.72....0.RSm-1CaG144" target="_blank" rel="noopener">News in Alberta, USA</a></li>
										<li class="list-group-item"><a href="https://weather.gc.ca/forecast/canada/index_e.html?id=AB" target="_blank" rel="noopener">Weather in Alberta, USA</a></li>
									</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')
