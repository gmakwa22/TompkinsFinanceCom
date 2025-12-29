@extends('layouts.design')

@section('content')

<section class="marketing-service page-section-ptb">
		<div class="container">
			<div class="col-xs-12">
				<h2 class="small-title">San Bernardino’s Best PayDay Loans</h2>
				<p class="text text-justify">


Life in San Bernardino, beats with a unique rhythm of history, resilience, and community spirit. Amidst the fast pace of California living, we understand the unexpected financial demands that can arise - like sudden car repairs for navigating historic Route 66, urgent dental work before enjoying the San Bernardino County Fair, or managing tuition fees for students at California State University, San Bernardino.
<br><br>
When financial surprises catch you off guard, traditional solutions like borrowing from relatives or navigating complex credit options can add to the stress. That's where our payday loans come in as a reliable lifeline, offering quick cash advances and flexible repayment plans tailored to match the Golden State's rapid pace. You'll find a practical and swift option to bridge those financial gaps without missing a beat.
<br><br>
At {{$privname}}, we prioritize the security of your personal information, safeguarding it with cutting-edge encryption technology - as secure as the vaults at Fort Knox. Our streamlined online application process eliminates paperwork and long waits, allowing you to complete it from the comfort of your San Bernardino home in just one day. Approval is fast, and funds can reach your account in mere minutes after signing the digital agreement.
<br><br>
As your trusted direct lender in California, {{$privname}} upholds industry best practices and ethical standards, ensuring a clear and transparent lending experience. From the picturesque San Bernardino Mountains to the vibrant cultural events at the California Theatre of Performing Arts, we're dedicated to simplifying and enhancing your financial well-being.
<br><br>
Join us in experiencing exceptional short-term loan services tailored to the unique rhythm of San Bernardino, as we continue to innovate and serve our community with integrity and commitment. With {{$privname}}, you can trust that you're in good hands.
				</p>
@include('states.california.california-cities')
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
           <iframe src="https://www.youtube.com/embed/_sm6dBiMMEA?si=9c7lElV5hgkjvYhr" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-lg-6 sm-mt-30">
			<h3>Helpful information about San Bernardino, CA</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="https://www.tripadvisor.ca/Attractions-g33009-Activities-San_Bernardino_California.html" target="_blank"  >- Best Attractions in San Bernardino, USA</a></li>
		<li class="list-group-item"><a href="https://m.yelp.ca/search?cflt=steak&find_loc=San+Bernardino%2C+CA" target="_blank"  >- Best Steakhouse in San Bernardino, USA</a></li>
		<li class="list-group-item"><a href="https://m.yelp.ca/search?cflt=shopping&find_loc=San+Bernardino%2C+CA" target="_blank"  >- Best Places to Go Shopping in San Bernardino, USA</a></li>
		<li class="list-group-item"><a href="https://www.yelp.com/search?cflt=publictransport&find_loc=SAN+BERNARDINO%2C+CA" target="_blank"  >- Public Transportation Options in San Bernardino, USA</a></li>
		<li class="list-group-item"><a href="https://www.google.com/aclk?sa=l&ai=DChcSEwiclI_v6YOGAxUxDq0GHaQKD8YYABABGgJwdg&ase=2&gclid=CjwKCAjwi_exBhA8EiwA_kU1MmgjACXElqWiIq-E332AWMXfBnuW7QoEIto46T9E9vA9VMedYEw7ShoCD-MQAvD_BwE&sig=AOD64_0qwejp1x2dBWR2T6b6dz7TbMThGA&q&nis=4&adurl&ved=2ahUKEwiNl4fv6YOGAxWaJzQIHUCQADwQ0Qx6BAgEEAE" target="_blank"  >- Best Places to Stay in San Bernardino, USA</a></li>
		<li class="list-group-item"><a href="https://m.yelp.ca/search?find_desc=Kids+Activities&find_loc=SAN+BERNARDINO%2C+CA" target="_blank"  >- Best Things to do with the Kids in San Bernardino, USA</a></li>
		<li class="list-group-item"><a href="https://www.newsbreak.com/san-bernardino-ca" target="_blank"  >- Local News for San Bernardino, USA</a></li>
		<li class="list-group-item"><a href="https://weather.com/weather/tenday/l/San+Bernardino+CA?canonicalCityId=51cda5e83f19814c535fedccf8c7cae5f2093e20b7a54d84e5179e2bf0658fb8" target="_blank"  >- Weather in San Bernardino, USA</a></li>
					</ul>
      </div>
     </div>
  </div>
</section>

@include('round.nocreditcheck')

@endsection