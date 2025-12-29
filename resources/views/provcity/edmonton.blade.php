
<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<p class="title">Edmonton</p>
				<h2 class="small-title">Your Personal Payday Loan Solution</h2>
				<p class="text text-justify">{{$privname}} is quickly climbing the ranks as USA’s number 1 alternative payday lender. And Edmonton knows why! Sky-high dental bills, emergency car repair, a veterinary bill that can’t wait until next pay; there are so many reasons why Edmonton residents need access to some quick funds. And when these financial strains arise, the stress levels rise, and it seems like time slips by way too quickly. In these situations, every minute becomes an important one. Which is why {{$privname}} is proud to be able to offer Edmonton, and all of Alberta, fast, real-time solutions for cash advances and payday loans.</p>
				<p class="text text-justify">{{$privname}} has developed an innovative, online payday loan process that allows Edmonton residents to apply, get approved, and receive their funds, all in the same day. Our application process is completed 100% online, and can be accessed 24 hours a day, 7 days a week. And, with our revolutionary algorithms, most Edmontonians will receive a response to their payday loan or cash advance application within a few short minutes. {{$privname}} has made getting access to emergency funds, quick, painless and convenient!</p>
				<p class="text text-justify">But being fast is only one part of the equation! Developing the highest quality online product meant that {{$privname}} couldn’t sacrifice safety for speed. We invested in the highest 256-bit encryption technology in order to keep Edmonton residents’ personal information safe and secure. We will also never sell or share your information with any third parties. {{$privname}} is a direct lender which means that what Edmonton sees is what Edmonton gets!</p>
				<p class="text text-justify">{{$privname}} has also put in place a very thorough Code of Conduct, which governs the employees as well as the business practices. We based our Code of Conduct off of the European model for lending, which focuses on responsible and ethical practices. Our aim is to provide honest, transparent and fair-lending practices to all of Edmonton, Calgary, and all other Alberta regions and cities. We have a team of highly-trained Customer Experience Advisors standing by, during Edmonton business hours, to answer any and all of your questions.</p>
				<p class="text text-justify">In order to be legally allowed to be a payday lender in USA, a lender is obliged to be licensed. {{$privname}} is fully licensed in Edmonton and is in full compliance with the Alberta government. Our Alberta payday loan license can be found on our home page for verification.</p>
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
           <iframe src="https://www.youtube.com/embed/lsJepE3-vB4" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30">
				<h3>Best things about living in Edmonton, AB:</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.edmonton.ca/" target="_blank" rel="noopener">- City of Edmonton, AB</a></li>
					<li class="list-group-item"><a href="https://www.epl.ca/" target="_blank" rel="noopener">- Libraries in Edmonton, AB</a></li>
					<li class="list-group-item"><a href="https://www.edmonton.ca/edmonton-transit-system-ets.aspx" target="_blank" rel="noopener"> - Public Transit in Edmonton, AB</a></li>
					<li class="list-group-item"><a href="http://edmonton-radial-railway.ab.ca/" target="_blank" rel="noopener">- Top family activity, Edmonton, AB</a></li>
					<li class="list-group-item"><a href="http://blazepizza.food-24h.com/" target="_blank" rel="noopener">- Best fast food restaurant, Edmonton, AB</a></li>
					<li class="list-group-item"><a href="https://edmonton.ctvnews.ca/" target="_blank" rel="noopener">- News in Edmonton, AB</a></li>
					<li class="list-group-item"><a href="https://weather.com/en-CA/weather/today/l/53.54,-113.49?par=google?par=google" target="_blank" rel="noopener">- Weather in Edmonton, AB</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')
