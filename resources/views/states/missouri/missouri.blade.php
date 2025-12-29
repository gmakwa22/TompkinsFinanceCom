@extends('layouts.design')

@section('content')

<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">

				<h2 class="small-title">Missouri’s Best PayDay Loans</h2>
				<p class="text text-justify">Life in Missouri is full of surprises, including the occasional financial curveball. When your car breaks down, your laptop crashes, dental emergencies arise, or you're faced with sudden tuition payments, where can you turn? Asking family members for help can lead to complex situations. Seeking a line of credit might take more time than you have. And post-dated checks? They're a gamble.
<br><br>
For Missourians needing a quick and straightforward financial lifeline, our payday loans offer a clean-cut solution. Explore our immediate cash advances or consider our adaptable payment schedules. Both are cost-effective, user-friendly, and designed to act fast when you're faced with unforeseen bills.
<br><br>
{{$privname}} brings you peace of mind with industry-leading encryption technology, keeping your personal application data ultra-secure. Say goodbye to the old days of waiting in line at loan offices. Our process is entirely online, secure, and efficient. You can apply from the ease of your Missouri home and complete the process in just one day. After approval and signing the digital contract, the funds are a mere five minutes from landing in your bank account.
<br><br>
As Missouri's reliable direct lender for short-term loans, {{$privname}} adheres to a Code of Conduct based on industry best practices. This ensures a clear and ethical lending process for every resident, from Kansas City to St. Louis, and everywhere in between.
<br><br>
We're gratified by the positive feedback from our Missouri clients and are eager to continue offering stellar short-term loan services. As we aim to enhance your financial life, anticipate even more innovative loan options from {{$privname}}, designed with the Show-Me State in mind.
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
           <iframe src="https://www.youtube.com/embed/KVlQ47KTgBQ?si=tL8yJvYxnUHVYCNp" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30">
			<h3>Helpful information about Missouri, USA</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.tripadvisor.com/Attractions-g28946-Activities-Missouri.html" target="_blank"  >- Best Attractions in Missouri, USA</a></li>
		<li class="list-group-item"><a href="https://www.enjoytravel.com/en/travel-news/food-and-drink/best-steakhouses-missouri" target="_blank"  >- Best Steakhouse in Missouri, USA</a></li>
		<li class="list-group-item"><a href="https://www.tripadvisor.com/Attractions-g28946-Activities-c26-Missouri.html" target="_blank"  >- Best Places to Go Shopping in Missouri, USA</a></li>
		<li class="list-group-item"><a href="https://www.apta.com/research-technical-resources/public-transportation-links/missouri/" target="_blank"  >- Public Transportation Options in Missouri, USA</a></li>
		<li class="list-group-item"><a href="https://www.tripadvisor.ca/Hotels-g28946-Missouri-Hotels.html" target="_blank"  >- Best Places to Stay in Missouri, USA</a></li>
		<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g28946-Activities-zft11306-Missouri.html" target="_blank"  >- Best Things to do with the Kids in Missouri, USA</a></li>
		<li class="list-group-item"><a href="https://fox4kc.com/news/missouri-news/" target="_blank"  >- Local News for Missouri, USA</a></li>
		<li class="list-group-item"><a href="https://weather.com/weather/tenday/l/64072:4:US" target="_blank"  >- Weather in Missouri, USA</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')

@endsection