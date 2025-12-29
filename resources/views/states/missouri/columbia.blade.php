@extends('layouts.design')

@section('content')

<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">

				<h2 class="small-title">Columbia’s Best PayDay Loans</h2>
				<p class="text text-justify">


Life in Columbia, has its own rhythm, where things move at a pace that's uniquely Midwestern. But just like anywhere else, unexpected financial needs can arise, from car repairs and unexpected medical bills to last-minute school expenses. When these moments hit, you need a solution that's quick, reliable, and tailored to the heartbeat of our city.
<br><br>
Introducing our payday loans, designed to be your lifeline when the unexpected happens. With fast cash advances and flexible repayment options, we offer a straightforward and accessible way to navigate financial challenges in our community. Our goal is to provide a seamless experience that fits into your Columbia lifestyle seamlessly.
<br><br>
At {{$privname}}, we prioritize your security. Our state-of-the-art encryption technology ensures that your personal information is as protected as the secrets of Mark Twain Cave. And forget about traditional loan offices – our entire process is online, so you can apply from the comfort of your Columbia home or favorite local coffee shop. Approval is speedy, and once you've signed digitally, funds can be in your account in as little as 5 minutes.
<br><br>
{{$privname}} is your trusted direct lender for short-term loans in Columbia. We adhere to the highest standards of ethical lending practices, ensuring that your experience is transparent and fair every step of the way. Whether you're strolling through Stephens Lake Park or enjoying a day at the Columbia Art League, we're here to support your financial well-being with a touch of Midwestern hospitality.
<br><br>
We're grateful for the support and trust of our Columbia community. As we continue to grow, you can count on {{$privname}} for reliable and innovative financial solutions that make life a little easier in our beloved city.
				</p>
@include('states.missouri.missouri-cities')
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
           <iframe src="https://www.youtube.com/embed/qvvS1FCzW8I?si=V8ramn1QPbU1Cnmr" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30">
			<h3>Helpful information about Columbia, MO</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g54184-Activities-Columbia_South_Carolina.html" target="_blank"  >- Best Attractions in Columbia, USA</a></li>
		<li class="list-group-item"><a href="https://m.yelp.ca/search?cflt=steak&find_loc=Columbia%2C+SC" target="_blank"  >- Best Steakhouse in Columbia, USA</a></li>
		<li class="list-group-item"><a href="https://ca.hotels.com/go/usa/best-places-shopping-columbia" target="_blank"  >- Best Places to Go Shopping in Columbia, USA</a></li>
		<li class="list-group-item"><a href="https://transportation.columbia.edu/services" target="_blank"  >- Public Transportation Options in Columbia, USA</a></li>
		<li class="list-group-item"><a href="https://www.google.com/aclk?sa=l&ai=DChcSEwjHkeT8vfmFAxXQOa0GHTPICa8YABA-GgJwdg&ase=2&gclid=Cj0KCQjw_-GxBhC1ARIsADGgDjtx-pL4sgjKh5nBTbzFqHnZFER80d0QG9DDlqISlWI1ZcFW2ZEDMFkaAjR5EALw_wcB&sig=AOD64_1wRAoMIR-NVK425BFod7ETzHhOww&q&nis=4&adurl&ved=2ahUKEwi2udz8vfmFAxU4EDQIHb1rAiUQ0Qx6BAgKEAE" target="_blank"  >- Best Places to Stay in Columbia, USA</a></li>
		<li class="list-group-item"><a href="https://discoversouthcarolina.com/articles/7-cant-miss-things-to-do-with-kids-in-columbia" target="_blank"  >- Best Things to do with the Kids in Columbia, USA</a></li>
		<li class="list-group-item"><a href="https://www.wltx.com/" target="_blank"  >- Local News for Columbia, USA</a></li>
		<li class="list-group-item"><a href="https://weather.com/weather/tenday/l/Columbia+SC?canonicalCityId=207e6d26031d0e63a3dbc2b0938cd5b6c6bfd817a63b5680b47f86a4db93edea" target="_blank"  >- Weather in Columbia, USA</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')

@endsection