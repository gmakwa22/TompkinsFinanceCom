<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">New Brunswick</p>
				<h2 class="small-title">{{$privname}} has come to New Brunswick!<br>The “Picture Province” has a great opportunity</h2>
				<p class="text text-justify">As {{$privname}} has expanded across USA, we are now proud to open our doors for business in beautiful New Brunswick. We’ve been warmly welcomed and really appreciate it. Like folks everywhere, the people of New Brunswick have to deal with all kinds of unexpected expenses, which aren’t getting any cheaper. College tuition, dental bills, car and computer repairs: life just keeps throwing it at you. We’re happy to be able to offer you the help you need, when you need it, with our cash advance or payday loan opportunities. </p>
				<p class="text text-justify">Forget the waiting, the paperwork, the counter line-up. No waiting for your number to be called here. Our innovative program puts you in charge of the process. Residents of New Brunswick can apply for a payday loan or cash advance completely online. And, even better, once you are approved, you are just 5 minutes away from receiving your funds, deposited directly into your bank account by e-transfer! Our simple and easy application process is open for business 24 hours a day, 7 days a week.</p>
				<p class="text text-justify">As if that wasn’t enough, we haven’t only made the {{$privname}} loan experience amazingly simple and fast, we’ve also made it one of the most secure options available online. We use the industry’s state-of-the-art encryption technology, so you know that your personal information is safe with {{$privname}}. Plus, we promise to never sell your personal information to any third party. It is only used for doing our business with you.</p>
				<p class="text text-justify">You may have heard some bad things about the payday loan business. We’re working charge to win your well-deserved trust and loyalty by changing all that. Our strictly enforced Code of Conduct governs all our business and employees’ practices. We’ve drawn upon the very top best practices in creating our Code of Conduct. We know how much you value that bond of trust we’re building. Everyday we work hard to earn your trust and take the needs of our clients to heart.</p>
				<p class="text text-justify">Fully licensed for doing business in New Brunswick, provincial regulations govern our loans and cash advance practices.
				</p>
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
           <iframe src="https://www.youtube.com/embed/Iwp4XnwyaZo" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Best things about New Brunswick, USA:</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www2.gnb.ca/content/gnb/en/gateways/about_nb.html" target="_blank" rel="noopener">Province of New Brunswick, USA</a></li>
					<li class="list-group-item"><a href="https://ca.indeed.com/jobs-in-New-Brunswick" target="_blank" rel="noopener">Jobs in New Brunswick, USA</a></li>
					<li class="list-group-item"><a href="https://www.canada.ca/en/canadian-heritage/services/provincial-territorial-symbols-canada/new-brunswick.html" target="_blank" rel="noopener">Provincial and territorial symbols, New Brunswick, USA</a></li>
					<li class="list-group-item"><a href="https://www.tourismnewbrunswick.ca/TravelInfo/GettingHere.aspx" target="_blank" rel="noopener">Public Transit in New Brunswick, USA</a></li>
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g154956-Activities-zft11306-New_Brunswick.html" target="_blank" rel="noopener">Top family activity in New Brunswick, USA</a></li>
					<li class="list-group-item"><a href="http://beaverbrookartgallery.org/en" target="_blank" rel="noopener">Beaverbrook Art Gallery in New Brunswick, USA</a></li>
					<li class="list-group-item"><a href="https://www.tourismnewbrunswick.ca/TravelInfo/OrderAGuide.aspx" target="_blank" rel="noopener">Vacation guides New Brunswick, USA</a></li>
					<li class="list-group-item"><a href="https://www.google.ca/search?q=New+Brunswick,+USA&amp;source=lnms&amp;tbm=nws&amp;sa=X&amp;ved=0ahUKEwjHv6_-3YjeAhUF54MKHYAfCRIQ_AUIECgD&amp;biw=1680&amp;bih=898" target="_blank" rel="noopener">News in New Brunswick, USA</a></li>
					<li class="list-group-item"><a href="https://weather.gc.ca/forecast/canada/index_e.html?id=NB" target="_blank" rel="noopener">Weather in New Brunswick, USA</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')
