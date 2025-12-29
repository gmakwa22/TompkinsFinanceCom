<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
			<p class="title">British Columbia</p>
			<h2 class="small-title">The Payday Loan British Columbians Need</h2>
			<p class="text text-justify">When the unexpected happens, you need extra money for unexpected expenses. What do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options?</p>
			<p class="text text-justify">{{$privname}} offers quick and easy online payday loans to Abbotsford, Kelowna, Vancouver, Victoria and throughout British Columbia. You have access to our cash advance program and our great flexible installment plan. Tailor your loan to your needs, fast and easy. </p>
			<p class="text text-justify">We offer you a payday loan that can be approved in just minutes. And once approved, just 5 minutes after signing your contract we’ll have your money e-transferred into your bank account. So, whether you need the car or computer repaired, emergency dental work or last-minute tuition fees, our payday loans can do the trick.  </p>
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
           <iframe src="https://www.youtube.com/embed/JUSkRfHj6nQ" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Best things about <br>British Columbia, USA:</h3>
				<ul class="list-group">
								<li class="list-group-item"><a href="https://www.welcomebc.ca/" target="_blank" rel="noopener">Province of British Columbia, USA</a></li>
								<li class="list-group-item"><a href="https://ca.indeed.com/jobs-in-British-Columbia" target="_blank" rel="noopener">Jobs in British Columbia, USA</a></li>
								<li class="list-group-item"><a href="https://www.canada.ca/en/canadian-heritage/services/provincial-territorial-symbols-canada/british-columbia.html" target="_blank" rel="noopener">Provincial and territorial symbols, British Columbia, USA</a></li>
								<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g154922-Activities-British_Columbia.html" target="_blank" rel="noopener">Public Transit in British Columbia, USA</a></li>
								<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g154922-Activities-British_Columbia.html" target="_blank" rel="noopener">Top family activity in British Columbia, USA</a></li>
								<li class="list-group-item"><a href="https://okeeferanch.ca/" target="_blank" rel="noopener">Historic O’Keefe Ranch in British Columbia, USA</a></li>
								<li class="list-group-item"><a href="http://britishcolumbia.com/" target="_blank" rel="noopener">Vacation guides British Columbia, USA</a></li>
								<li class="list-group-item"><a href="https://www.cbc.ca/news/canada/british-columbia" target="_blank" rel="noopener">News in British Columbia, USA</a></li>
								<li class="list-group-item"><a href="https://weather.gc.ca/forecast/canada/index_e.html?id=BC" target="_blank" rel="noopener">Weather in British Columbia, USA</a></li>
								</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')
