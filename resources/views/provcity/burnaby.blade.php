<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
			<p class="title">British Columbia</p>
			<h2 class="small-title">The Best PayDay Loan in Burnaby</h2>
			<p class="text text-justify">Burnaby is an especially dynamic location that offers an extraordinary range for those seeking different lifestyles. Between the rural life, the quaintness of the suburbs and the exciting of the big city, you’ll find it all here. A popular place to live or visit, its British Columbia’s third largest city.</p>
			<p class="text text-justify">Burnaby’s residents are smart and savvy, which is why they’re recognizing the value of fast, easy, transparent and responsible short-term loans when life throws the unexpected at them. And we’re been happy to help them out with that. Check out our cash advance or more flexible payment plan. Either is an affordable solution, that’s quick and easy, when the unexpected expenses arise. Ours is a completely streamlined, easy to use, secure, online process. The whole thing can be done from the comfort of your couch, all in one day. Once approved, and you sign the electronic contract, your funds are just 5 minutes away from being in your bank account. </p>
			<p class="text text-justify">With such an extraordinary range of leisure options, we understand that the folks of Burnaby don’t want to be wasting their time in a dreary loan application process. There’s no waiting in line. No waiting for your number to be called. No dragging piles of documents around. </p>
			<p class="text text-justify">You can apply from the comfort of your armchair, using our great phone app or by going to our website. And you can borrow up to $5,000.</p>
			<p class="text text-justify">From the excitement of the Height District to Brentwood Town Center, the quick cash you need is ready at hand. It’s quick and easy.</p>
			<p class="text text-justify">Not only is it fast, it’s also the responsible choice. If you’re looking for a short-term loan, with a trusted, direct lender, {{$privname}} is the company for you. Our Code of Conduct is drawn from industry best practices, ensuring a transparent and responsible lending process wherever you are, in or near Burnaby: Vancouver, Surrey, West Vancouver, White Rock, North Vancouver, Langley, Port Moody. Anywhere in the Burnaby area, we’ve got you covered with our ethical lending practices
			</p>
			<p class="text text-justify">Whether you live in Edmonds, Lougheed, Deer Lake, or anywhere else in the Burnaby area, we are licensed to operate in Burnaby, and all across British Columbia. Not only do we offer the top of the line in online security, but we promise to never sell your personal information to any third party. </p>
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
           <iframe src="https://www.youtube.com/embed/PjonL-JPlqU" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30">
				  <h3>Best things about living in Burnaby, BC:</h3>
				<ul class="list-group">
							<li class="list-group-item"><a href="https://www.burnaby.ca/" target="_blank" rel="noopener">- City of Burnaby, British Columbia</a></li>
							<li class="list-group-item"><a href="https://www.bpl.bc.ca/" target="_blank" rel="noopener">- Libraries in Burnaby, British Columbia </a></li>
							<li class="list-group-item">- Public Transit in Burnaby, British Columbia</li>
							<li class="list-group-item"><a href="https://www.yelp.ca/search?cflt=hotdogs&amp;find_loc=Burnaby%2C+BC" target="_blank" rel="noopener">- Best fast food restaurant in Burnaby, British Columbia</a></li>
							<li class="list-group-item"><a href="https://globalnews.ca/tag/burnaby/" target="_blank" rel="noopener">- News in Burnaby, British Columbia</a></li>
							<li class="list-group-item"><a href="https://weather.com/en-CA/weather/today/l/49.25,-122.98?par=google?par=google" target="_blank" rel="noopener">- Weather in Burnaby, British Columbia</a></li>
				</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')
