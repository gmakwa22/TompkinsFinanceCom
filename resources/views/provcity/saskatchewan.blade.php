<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Saskatchewan</p>
				<h2 class="small-title">Personal Loan USA&nbsp;Solution</h2>
				<p class="text text-justify">Things happen in life and sometimes you need extra money for unexpected expenses. What do you do? Borrow from family? That can be complicated. Apply for a line of credit? But that can take too long. You need a solution now. A post-dated check? That can be tricky. How about a cleaner, faster, easier solution than any of those options? All across Saskatchewan we offer loan solutions that meet your sudden financial difficulties. Whether you’re in Regina, Prince Albert, or anywhere else in the province. </p>
				<p class="text text-justify">The days of standing in line at some storefront location, with all your documents piled in your lap, waiting for your number to be called, are over at {{$privname}}. Ours is a completely streamlined, easy to use, secure, online process. Wherever you live in the province, the solution to your sudden, expected financial challenges are right here at hand. The whole thing can be done on the comfort of your couch, all in one day.  </p>
				<p class="text text-justify">If that wasn’t great enough, we offer even more bonuses. What if you have a bad credit rating? Don’t let that worry you. We know past experience is not indicative of your ability to repay a loan today. We have the solutions that can solve your unexpected expense, even if your credit score isn’t what you’d like it to be, today. We make your short-term loan process as convenient and painless as imaginable. </p>

@include('provcity.sk-cities')
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
           <iframe src="https://www.youtube.com/embed/7sEOHkJm6cY" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30">
<h3>Best things about living in, Saskatchewan:</h3>
			<ul class="list-group">
				<li class="list-group-item"><a href="https://www.saskatchewan.ca/" target="_blank" rel="noopener">- Province of Saskatchewan</a></li>
				<li class="list-group-item"><a href="https://www.saskatchewan.ca/residents/transportation/public-transportation" target="_blank" rel="noopener">- Public Transit, Niagara Falls, Ontario</a></li>
				<li class="list-group-item"><a href="https://www.tasteatlas.com/most-popular-food-in-saskatchewan" target="_blank" rel="noopener">- Best food in Saskatchewan</a></li>
				<li class="list-group-item"><a href="https://www.cbc.ca/news/canada/saskatchewan" target="_blank" rel="noopener">- News in Niagara Falls, Ontario</a></li>
				<li class="list-group-item"><a href="https://weather.gc.ca/forecast/canada/index_e.html?id=SK" target="_blank" rel="noopener">- Weather in Niagara Falls, Ontario</a></li>
				</ul>

      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')
