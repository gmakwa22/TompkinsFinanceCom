@extends('layouts.design')

@section('content')

<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">

				<h2 class="small-title">Kansas City's Best PayDay Loans</h2>
				<p class="text text-justify">
In Kansas City, Missouri, residents often face unexpected financial challenges such as urgent vehicle repairs, emergency medical expenses, or sudden home maintenance costs. Quick access to financial solutions is essential for effectively navigating these unforeseen circumstances.
<br><br>
Traditional financing methods like borrowing from family or obtaining a bank loan can present significant obstacles. These options typically involve extensive waiting periods, mandatory credit checks, and the potential for personal complications, making them less practical when immediate action is necessary.
<br><br>
For the people of Kansas City, our payday loans offer a practical and speedy alternative. Specifically tailored to meet urgent financial requirements, our services ensure that you can handle your emergencies quickly and with minimal inconvenience. We are committed to providing you with reliable and straightforward financial support, helping you address your financial hurdles promptly.
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
           <iframe width="560" height="315" src="https://www.youtube.com/embed/zcVWdUV1Cy8?si=exlacp_-WTaK24rt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30">
			<h3>Helpful information about Kansas City, MO</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g44535-Activities-Kansas_City_Missouri.html" target="_blank"  >- Best Attractions in Kansas City, USA</a></li>
		<li class="list-group-item"><a href="https://www.tripadvisor.ca/Restaurants-g44535-c37-Kansas_City_Missouri.html" target="_blank"  >- Best Steakhouse in Kansas City, USA</a></li>
		<li class="list-group-item"><a href="https://m.yelp.ca/search?find_desc=Shopping&find_loc=Kansas+City%2C+MO" target="_blank"  >- Best Places to Go Shopping in Kansas City, USA</a></li>
		<li class="list-group-item"><a href="https://www.yelp.com/search?cflt=publictransport&find_loc=Kansas+City%2C+KS" target="_blank"  >- Public Transportation Options in Kansas City, USA</a></li>
		<li class="list-group-item"><a href="https://www.google.com/aclk?sa=l&ai=DChcSEwiVg6vtkoSGAxXDzsIEHdWnAXgYABA-GgJwdg&ase=2&gclid=CjwKCAjwi_exBhA8EiwA_kU1MjmwQK2LfNg89pZexUUtRDCQFU05UUqhZNF1kWA8igfE6ct7OtO6khoChEEQAvD_BwE&sig=AOD64_0bq48j4DEEP7Y2UORiyfMstoVGvw&q&nis=4&adurl&ved=2ahUKEwiM46HtkoSGAxXVOTQIHTZnAT8Q0Qx6BAgFEAE" target="_blank"  >- Best Places to Stay in Kansas City, USA</a></li>
		<li class="list-group-item"><a href="https://m.yelp.ca/search?find_desc=Fun+Things+To+Do+With+Kids&find_loc=Kansas+City%2C+MO" target="_blank"  >- Best Things to do with the Kids in Kansas City, USA</a></li>
		<li class="list-group-item"><a href="https://www.google.com/aclk?sa=l&ai=DChcSEwiXrKuGk4SGAxWuEa0GHYrtDdQYABAAGgJwdg&ase=2&gclid=CjwKCAjwi_exBhA8EiwA_kU1MhpdAw_BGjA78d3FqLtdHLtpKXBKa_qxI_YOqHuCRZFtyNnEeYRQeBoCCyYQAvD_BwE&sig=AOD64_0QAEmmirg8wXtmu-8t7cNreoBcLw&q&nis=4&adurl&ved=2ahUKEwjH3KSGk4SGAxVaDzQIHfeSDDEQ0Qx6BAgGEAE" target="_blank"  >- Local News for Kansas City, USA</a></li>
		<li class="list-group-item"><a href="https://weather.com/weather/tenday/l/Kansas+City+MO?canonicalCityId=f52da748cbb18c8ccc9b45411e165875ff5f154473a2f681dfd384aede4f1f86" target="_blank"  >- Weather in Kansas City, USA</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')

@endsection
