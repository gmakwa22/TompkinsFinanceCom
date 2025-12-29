@extends('layouts.design')

@section('content')

<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<h2 class="small-title">Lubbock’s Best PayDay Loans</h2>
				<p class="text text-justify">In Lubbock, Texas, a city steeped in musical heritage and home to the spirited Texas Tech Red Raiders, residents face unique financial needs tied to the local culture and collegiate activities. From unexpected costs for Tech game days to the upkeep of instruments for the next West Texas gig, having rapid financial solutions is vital for keeping in step with Lubbock’s vibrant heartbeat.
<br><br>
Traditional means of securing funds, such as borrowing from kin or the often sluggish bank loan process, can be ill-fitting for the prompt rhythm of Lubbock’s lifestyle, where financial needs are as immediate as a surprise concert or a sudden hailstorm repair.
<br><br>
For the people of Lubbock, our payday loans offer a speedy and suitable solution. Specially crafted to align with the unique rhythm and demands of Lubbock’s community life, our services ensure that you can swiftly navigate financial surprises with minimal disruption. We are committed to providing steadfast and straightforward financial assistance, allowing you to thrive amidst the dynamic activities and cherished events that make Lubbock the Hub City.
				</p>
@include('states.texas.texas-cities')
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
           <iframe src="https://www.youtube.com/embed/INPX4qD5UTc?si=akvY7POKyQANwVOw" allowfullscreen=""></iframe>

        </div>
      </div>
      <div class="col-lg-6 sm-mt-30">
			<h3>Helpful information about Lubbock, TX</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://visitlubbock.org/explore/attractions/" target="_blank"  >- Best Attractions in Lubbock, USA</a></li>
		<li class="list-group-item"><a href="https://www.tripadvisor.ca/Restaurants-g56208-c37-Lubbock_Texas.html" target="_blank"  >- Best Steakhouse in Lubbock, USA</a></li>
		<li class="list-group-item"><a href="https://visitlubbock.org/explore/shopping/" target="_blank"  >- Best Places to Go Shopping in Lubbock, USA</a></li>
		<li class="list-group-item"><a href="https://ci.lubbock.tx.us/departments/311-citizens-request/faqs/citibus" target="_blank"  >- Public Transportation Options in Lubbock, USA</a></li>
		<li class="list-group-item"><a href="https://www.tripadvisor.ca/Hotels-g56208-Lubbock_Texas-Hotels.html" target="_blank"  >- Best Places to Stay in Lubbock, USA</a></li>
		<li class="list-group-item"><a href="https://visitlubbock.org/visit/family-fun/" target="_blank"  >- Best Things to do with the Kids in Lubbock, USA</a></li>
		<li class="list-group-item"><a href="https://www.everythinglubbock.com/" target="_blank"  >- Local News for Lubbock, USA</a></li>
		<li class="list-group-item"><a href="https://weather.com/weather/hourbyhour/l/Lubbock+TX?canonicalCityId=4d10703ed8e0283ba362fb765203cb02b5ace9882599a5cce9132d0e0c3f22d8" target="_blank"  >- Weather in Lubbock, USA</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')

@endsection