@extends('layouts.app')

@section('content')
</div>
<style>
	.col-xs-12.col-sm-4.img.alpha.omega {
		background: url(images/portraits/stories/people.jpg);
		background-size: 200px;
		background-repeat: no-repeat;
		background-position: center;
	}

	.reviews header.page-intro.stories{
		background: url('images/portraits/stories/people.jpg') #fff repeat 0 0;
		background-size: 10%;
    	background-position-y: 100px;
	}
	header.page-intro.stories #slogan h1.title {
		color: #de2b2b !important;
	}
	.fadeInRight .img.alpha.omega {
		transform: scaleX(-1);
	}

	@media only screen and (min-width: 5000px){
		.christmas footer.reviews:before {
		    top: -295px;
		}
	}
	@media only screen and (max-width: 4100px){
		.christmas footer.reviews:before {
		    top: -185px;
		}
	}
	@media only screen and (max-width: 2200px){
		.christmas footer.reviews:before {
		    top: -80px;
		}
	}
	@media only screen and (max-width: 1366px){
		header.page-intro.categories #slogan h1.title {
		    font-size:60px;
		}
	}
	@media only screen and (max-width: 568px){
		header.page-intro.categories #slogan{
			margin-top:0px;
		}
		.fadeInRight .img.alpha.omega {
			transform: scaleX(1);
		}
		header.page-intro.categories #slogan h1.title {
		    font-size:50px;
		}
		.col-xs-12.col-sm-4.img.alpha.omega {
			background: url(images/portraits/stories/people.jpg);
			background-size: contain;
			background-repeat: no-repeat;
			background-position: center;

		}
		header.page-intro.stories~#bg-content #reviews .review-box .img.alpha.omega{
			height:300px;
		}

	}
	@media only screen and (max-width: 414px){
		header.page-intro.categories #slogan h1.title {
		    font-size:31px;
		}

	}
	@media only screen and (max-width: 320px){
		header.page-intro.categories #slogan h1.title {
		    font-size:25px;
		}
	}header.page-intro.categories #slogan h1.title{
		background: rgba(2555, 255, 255, 0.8) !important;
	}
</style>
<header class="page-intro bg-03 categories stories">
<div class="container">
<article class="block-txt col-xs-12 col-sm-7 col-md-5 rellax alpha omega" data-rellax-speed="7" id="slogan">
<h1 class="title">#PayDayLoanSTORIES</h1>
</article>

@include('global.banner-state') </div>
</header>


<section id="bg-content" class="stories">
@include('global.partners')
<div id="provinces-solution">
<div class="container txt-center">
<div class="col-xs-12">
<p class="title">PayDayLoan REVIEWS</p>
<p class="text">When we launched our #PayDayLoanSTORIES contest, we had no idea of the overwhelming response that it would generate so many PayDayLoan Reviews and personal stories from fellow Americans in such a short amount of time! We have been so completely touched and inspired reading some of the reviews and the many amazing stories that were sent in.<br>
We know that everyone gets into financial trouble now and then and it was important for us to let all of our clients know that they are not alone. We are proud of our clients that broke their silence and shared their story about how PayDayLoan was there to help. We know that reading these stories will help every American out there realize that we all have #PayDayLoanSTORIES.</p>
<p class="text">Sharing these stories on social media was wonderful but we also wanted to give these stories a more permanent home. Here, on our website, we have gathered a few stories that we thought would be able to help give our clients hope. It was hard to pick just a few from so many touching, thoughtful, humorous, and inspiring stories but we did our best! </p>
<p class="text">We hope that sharing these stories will remind you that you’ve always got a helping hand with PayDayLoan. And that brighter days are always ahead.</p>
</div>
</div>
</div>


<div id="reviews">
<div class="container">
<div class="row txt-center province-rates-title animation-container-04">
<h2 class="small-title">Testimonials</h2>
<div class="review-box animation-stack-04 animated fadeInLeft" data-os-animation-delay="0.25s" data-os-animation="fadeInLeft" style="animation-delay: 0.25s;">
<div class="col-xs-12 col-sm-8 story">
<h3>#PayDayLoanSTORIES</h3>
<span class="highlight"></span>
<h4>Real People. Real Heart.</h4>
<span class="line"></span>
<p>#PayDayLoanSTORIES!! Ok so Ive been through alot this past year and it has taken a toll on not only me but my entire family. I sadly suffered from a major addiction problem which obviously created a different side of me that i never want to see again. It took me a long time and for me to reach rock bottom before i was smart enough to seek the help that i needed. After i finished treatment successfully although i was clean and sober i was now in financial trouble and if it was not for PayDayLoan helping me i dread to think where i would have ended up. Probably knocking on old acquaintances doors and ended right back where i started or even worse. So from the bottom of my heart i thankyou deeply you definaltly helped in starting my life over again the right way and im proud to say i have continued my sobriety and am 16months 3weeks and 5days.
</p>
<span class="province"><b>Nyla Orvar</b> - Wainfleet, Ontario</span>
</div>
<div class="col-xs-12 col-sm-4 img alpha omega right width">
<!-- <img src="{{ url('/images/portraits/stories/people.jpg') }}" alt="jane"> -->
</div>
</div>
<div class="review-box animation-stack-04 animated fadeInRight" data-os-animation-delay="0.50s" data-os-animation="fadeInRight" style="animation-delay: 0.5s;">
<div class="col-xs-12 col-sm-4 img alpha omega">
<!-- <img src="{{ url('/images/portraits/stories/people.jpg') }}" alt="JANE DOE"> -->
</div>
<div class="col-xs-12 col-sm-8 story">
<h3>#PayDayLoanSTORIES</h3>
<span class="highlight"></span>
<h4>Family Emergency.</h4>
<span class="line"></span>
<p>During a family emergency, I was strapped for cash, tried every Avenue available, every time I applied got turned down, not knowing what to do a friend recommend PayDayLoan. To my surprise and thankfulness PayDayLoan was there for me and still is my number one recommendation, again thank you PayDayLoan.
</p>
<span class="province"><b>Judith Sanders</b> - Migisi Sahgaigan, Ontario</span>
</div>
</div>
<div class="review-box animation-stack-04 animated fadeInLeft" data-os-animation-delay="0.75s" data-os-animation="fadeInLeft" style="animation-delay: 0.75s;">
<div class="col-xs-12 col-sm-8 story">
<h3>#PayDayLoanSTORIES</h3>
<span class="highlight"></span>
<h4>Health Recovery.</h4>
<span class="line"></span>
<p>I am a 63yr old single disabled gentleman who has had to rely on PayDayLoan a few times as the low income I get isn't always stretchable enough to include food. I used to weight 180lbs then went to 140 for quite a few years but now I am at a scary 105 and thanks to PayDay, so far, I'm keeping at that for now with hopes of it going up.
</p>
<span class="province"><b>Jaxson Seymour</b> - Calgary, Alberta</span>
</div>
<div class="col-xs-12 col-sm-4 img alpha omega right width">
<!-- <img src="{{ url('/images/portraits/stories/people.jpg') }}" alt="JOHN DOE"> -->
</div>
</div>
<div class="review-box animation-stack-04 animated fadeInRight" data-os-animation-delay="1s" data-os-animation="fadeInRight" style="animation-delay: 1s;">
<div class="col-xs-12 col-sm-4 img alpha omega width">

<!-- <img src="{{ url('/images/portraits/stories/people.jpg') }}" alt="JANE DOE"> -->

</div>
<div class="col-xs-12 col-sm-8 story">
<h3>#PayDayLoanSTORIES</h3>
<span class="highlight"></span>
<h4>Unexpected Life Event.</h4>
<span class="line"></span>
<p>PayDayLoan helped me to get to the province I lived in so that I could pay my respects to my amazing mother who passed away. I would not have forgiven myself if I couldn’t be there to say our last goodbye</p>
<span class="province"><b>Stacie Sharon</b> - Edmonton, Alberta</span>
</div>
</div>
<div class="review-box animation-stack-04 animated fadeInLeft" data-os-animation-delay="1.25s" data-os-animation="fadeInLeft" style="animation-delay: 1.25s;">
<div class="col-xs-12 col-sm-8 story">
<h3>#PayDayLoanSTORIES</h3>
<span class="highlight"></span>
<h4>Judgment Free.</h4>
<span class="line"></span>
<p>I was in between paydays and I was approved! I was able to get fuel and food which are the two things that don't last. Thankfully PayDayLoan gave an option to pay back in THREE payments whereas other places don't. The staff was helpful and happy and didn't make me feel like I was begging or borrowing from them personally.</p>
<span class="province"><b>Hailey Stevens</b> - Prince George, British Columbia</span>
</div>
<div class="col-xs-12 col-sm-4 img alpha omega right width">
<!-- <img src="{{ url('/images/portraits/stories/people.jpg') }}" alt="JANE DOE"> -->
</div>
</div>
<div class="review-box animation-stack-04 animated fadeInRight" data-os-animation-delay="1.50s" data-os-animation="fadeInRight" style="animation-delay: 1.5s;">
<div class="col-xs-12 col-sm-4 img alpha omega">
<!-- <img src="{{ url('/images/portraits/stories/people.jpg') }}" alt="JANE DOE"> -->
</div>
<div class="col-xs-12 col-sm-8 story">
<h3>#PayDayLoanSTORIES</h3>
<span class="highlight"></span>
<h4>When Banks Say No. We Say Yes.</h4>
<span class="line"></span>
<p>#PayDayLoan helped us out immensely! We had our son last fall, he was a very welcomed surprise and I had just finished my professional standards, paid for my licensing and money was super tight. Plus I had worked for free a for a year for year or so before this, so we had debt that banks didn’t really want to look at. I returned to work, my husband took parental leave. The government was over a month getting us his first cheque and it was a huge struggle paying for everything with my first pay cheque back to work. #PayDayLoan really saved us!</p>
<span class="province"><b>Alyssia Arterbury</b> - Calgary, Alberta</span>
</div>
</div>
<div class="review-box animation-stack-04 animated fadeInLeft" data-os-animation-delay="1.75s" data-os-animation="fadeInLeft" style="animation-delay: 1.75s;">
<div class="col-xs-12 col-sm-8 story">
<h3>#PayDayLoanSTORIES</h3>
<span class="highlight"></span>
<h4>Happy Family Moment.</h4>
<span class="line"></span>
<p>#PayDayLoanSTORIES It was my son’s birthday and I was short on cash. I tried PayDayLoan. They had my loan that day and I was able to celebrate my little guy birthday. Thank you PayDayLoan. You guys rock #PayDayLoan.</p>
<span class="province"><b>Ariel Nadine</b> - Ottawa, Ontario</span>
</div>
<div class="col-xs-12 col-sm-4 img alpha omega right">
<!-- <img src="{{ url('/images/portraits/stories/people.jpg') }}" alt="JANE DOE"> -->
</div>
</div>
<div class="review-box animation-stack-04 animated fadeInRight" data-os-animation-delay="2s" data-os-animation="fadeInRight" style="animation-delay: 2s;">
<div class="col-xs-12 col-sm-4 img alpha omega">
<!-- <img src="{{ url('/images/portraits/stories/people.jpg') }}" alt="JOHN DOE"> -->
</div>
<div class="col-xs-12 col-sm-8 story">
<h3>#PayDayLoanSTORIES</h3>
<span class="highlight"></span>
<h4>Unexpected Job Crisis.</h4>
<span class="line"></span>
<p>My boss laid me off my pay cheque bounced my girlfriend's birthday was a week after and I was scrounging for money PayDayLoan gave me a loan to help me through.</p>
<span class="province"><b>Jared Edmonds</b> - Calgary, Alberta</span>
</div>
</div>
<div class="review-box animation-stack-04 animated fadeInLeft" data-os-animation-delay="2.25s" data-os-animation="fadeInLeft" style="animation-delay: 2.25s;">
<div class="col-xs-12 col-sm-8 story">
<h3>#PayDayLoanSTORIES</h3>
<span class="highlight"></span>
<h4>Everyday Needs.</h4>
<span class="line"></span>
<p>We were in a bit of a bind and having 3 kids my main concern is always food. I had to choose between gas to get to work or groceries. Talk about stressed out! I exhausted all options and then found #PayDayLoanstores. By the following day I was able to buy enough groceries and gas to last till PayDayLoan. Have to admit #PayDayLoanstores saved us. Thank you.</p>
<span class="province"><b>Anton Quin</b> - Niagara Falls, Ontario</span>
</div>
<div class="col-xs-12 col-sm-4 img alpha omega right width">
<!-- <img src="{{ url('/images/portraits/stories/people.jpg') }}" alt="JOHN DOE"> -->
</div>
</div>
<div class="col-xs-12 share">
<p>
We there to help you?<br>Let us know by sending us your story at <a href="mailto:Stories@cashbucksloan.com">Stories@CashBucksLoan.com</a>.
</p>
</div>
</div>
</div>
</div>


</section>
@endsection
