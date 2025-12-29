@extends('layouts.app')

@section('content')
</div>
<header class="page-intro sitemap bg-08">
	<div class="container">
		<article class="block-txt rellax" data-rellax-speed="7">
			<div class="v-center parallaxEffect">
				<h1 class="title">Site map</h1>
			<h2 class="subtitle">{{ $privname }}</h2></div>
		</article>
	</div>
</header>
<section id="bg-content2" class="bg-img">
	<div class="container sitemap-content">
		<div class="site-map-section col-md-6 col-xs-12">
			<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-2 col-md-2 txt-right">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 col-md-7 alpha">
				<img src="{{url('/images/FL2.jpg')}}" alt="PayDay logo" width="130px" class="log">
				<ul class="list-sitemap">
					<li><a href="{{ url('/short-term-loans')}}">Home</a></li>
					<li><a href="{{ url('/why_use_us')}}">What we offer</a></li>
					<!-- <li><a href="{{ url('/agent-list')}}">How it's Done</a></li> -->
		<!-- {{--	<li><a href="{{ url('/reviews')}}">Pay Day Reviews</a></li> --}} -->
					<li><a href="{{ url('/signin')}}">My Account</a></li>
					<li> <a href="{{$corpregister}}">Get a loan now</a>
					</li>
				</ul>
			</div>
			</div>
		</div>
		<div class="site-map-section col-md-6 col-xs-12">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-2 col-md-2 txt-right">
				<img src="./images/security.png" alt="cashadvance legal" height="38px">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-7 col-md-7 alpha">
					<h2 class="small-title">Legal</h2>
					<ul class="list-sitemap">
						<li><a href="{{ url('/responsible-lending')}}">Responsible Lending</a></li>
						<li><a href="{{ url('/terms-conditions')}}">Terms of use and conditions</a></li>
						<li><a href="{{ url('/bad-credit-loans-counsellors')}}">Credit counsellors</a></li>
						<li><a href="{{ url('/privacy-policy')}}">Privacy policy</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="site-map-section col-md-6 col-xs-12">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-2 col-md-2 txt-right">
					<img src="{{url('/images/location.png')}}" alt="cashadvance states" height="32px">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-7 col-md-7 alpha">
					<h2 class="small-title">States / Cities</h2>
					<ul class="list-sitemap states">
						<li><a href="{{url('/payday-loans-alberta')}}">Alberta</a></li>
						<ul>
							<li><a href="{{url('/payday-loans-calgary')}}"  title="Calgary, Alberta">Calgary</a></li>
							<li><a href="{{url('/payday-loans-edmonton')}}" title="Edmonton, Alberta">Edmonton</a></li>
							<li><a href="{{url('/payday-loans-medicine-hat')}}" title="Medicine Hat, Alberta">Medicine Hat</a></li>
							<li><a href="{{url('/payday-loans-wood-buffalo')}}" title="Wood Buffalo, Alberta">Wood Buffalo</a></li>
							<li><a href="{{url('/payday-loans-red-deer')}}" title="Red Deer, Alberta">Red Deer</a></li>
							<li><a href="{{url('/payday-loans-lethbridge')}}" title="Lethbridge, Alberta">Lethbridge</a></li>
							<li><a href="{{url('/payday-loans-airdrie')}}" title="Airdrie, Alberta">Airdrie</a></li>
							<li><a href="{{url('/payday-loans-fort-mcmurry')}}" title="Fort McMurray, Alberta">Fort McMurray</a></li>
							<li><a href="{{url('/payday-loans-st-albert')}}" title="St. Albert, Alberta">St. Albert</a></li>
						</ul>
						<li><a href="{{url('/payday-loans-british-columbia')}}">British Columbia</a></li>
						<ul>
							<li><a href="{{url('/payday-loans-vancouver')}}" title="Vancouver, British Columbia">Vancouver</a></li>
							<li><a href="{{url('/payday-loans-surrey')}}" title="Surrey, British Columbia">Surrey</a></li>
							<li><a href="{{url('/payday-loans-burnaby')}}" title="Burnaby, British Columbia">Burnaby</a></li>
						</ul>
						<li><a href="{{url('/payday-loans-manitoba')}}">Manitoba</a></li>
						<ul>
							<li><a href="{{url('/payday-loans-winnipeg')}}" title="Winnipeg, Manitoba">Winnipeg</a></li>
							<li><a href="{{url('/payday-loans-dauphin')}}" title="Dauphin, Manitoba">Dauphin</a></li>
							<li><a href="{{url('/payday-loans-morden')}}" title="Morden, Manitoba">Morden</a></li>
							<li><a href="{{url('/payday-loans-portage-la-prairie')}}" title="Portage La Prairie, Manitoba">Portage La Prairie</a></li>
							<li><a href="{{url('/payday-loans-selkirk')}}" title="Selkirk, Manitoba">Selkirk</a></li>
							<li><a href="{{url('/payday-loans-the-pas')}}" title="The Pas, Manitoba">The Pas</a></li>
							<li><a href="{{url('/payday-loans-winkler')}}" title="Winkler, Manitoba">Winkler</a></li>
							<li><a href="{{url('/payday-loans-brandon')}}" title="Brandon, Manitoba">Brandon</a></li>
							<li><a href="{{url('/payday-loans-steinbach')}}" title="Steinbach, Manitoba">Steinbach</a></li>
							<li><a href="{{url('/payday-loans-thompson')}}" title="Thompson, Manitoba">Thompson</a></li>
						</ul>
						<li><a href="{{url('/payday-loans-nova-scotia')}}">Nova Scotia</a></li>
						<ul>
							<li><a href="{{url('/payday-loans-halifax')}}" title="Halifax, Nova Scotia">Halifax</a></li>
							<li><a href="{{url('/payday-loans-cape-breton')}}" title="Cape Breton, Nova Scotia">Cape Breton</a></li>
							<li><a href="{{url('/payday-loans-dartmouth')}}" title="Dartmouth, Nova Scotia">Dartmouth</a></li>
							<li><a href="{{url('/payday-loans-truro')}}" title="Truro, Nova Scotia">Truro</a></li>
							<li><a href="{{url('/payday-loans-sydney')}}" title="Sydney, Nova Scotia">Sydney</a></li>
						</ul>
						<li><a href="{{url('/payday-loans-ontario')}}">Ontario</a></li>
						<ul>
							<li><a href="{{url('/payday-loans-toronto')}}" title="Toronto, Ontario">Toronto</a></li>
							<li><a href="{{url('/payday-loans-ottawa')}}" title="Ottawa, Ontario">Ottawa</a></li>
							<li><a href="{{url('/payday-loans-mississauga')}}" title="Mississauga, Ontario">Mississauga</a></li>
							<li><a href="{{url('/payday-loans-brampton')}}" title="Brampton, Ontario">Brampton</a></li>
							<li><a href="{{url('/payday-loans-hamilton')}}" title="Hamilton, Ontario">Hamilton</a></li>
							<li><a href="{{url('/payday-loans-windsor')}}" title="Windsor, Ontario">Windsor</a></li>
							<li><a href="{{url('/payday-loans-london-ontario')}}" title="London, Ontario">London</a></li>
							<li><a href="{{url('/payday-loans-niagara-falls')}}" title="Niagara Falls, Ontario">Niagara Falls</a></li>
							<li><a href="{{url('/payday-loans-markham')}}" title="Markham, Ontario">Markham</a></li>
						</ul>
						<li><a href="{{url('/payday-loans-saskatchewan')}}">Saskatchewan</a></li>
						<ul>
							<li><a href="{{url('/payday-loans-saskatoon')}}" title="Saskatoon, Saskatchewan">Saskatoon</a></li>
							<li><a href="{{url('/payday-loans-regina')}}" title="Regina, Saskatchewan">Regina</a></li>
						</ul>
					</ul>
				</div>
			</div>
		</div>
		<div class="site-map-section col-md-6 col-xs-12">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-2 col-md-2 txt-right">
					<img src="./images/question.png" alt="cashadvance help" height="35px">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-7 col-md-7 alpha">
					<h2 class="small-title">Help</h2>
					<ul class="list-sitemap">
						<li><a href="{{ url('/faq')}}">FAQ</a></li>
						<!-- <li><a href="{{ url('/contact')}}">Contact Us</a></li> -->
						<!-- <li><a href="{{ url('/forgotpassword')}}">Forgot Password</a></li> -->
					</ul>
				</div>
			</div>
		</div>
		<div class="site-map-section col-md-6 col-xs-12">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-2 col-md-2 txt-right">
					<img src="./images/icon-2.png" alt="cashadvance more infos" height="32px">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-7 col-md-7 alpha">
					<h2 class="small-title">Resources</h2>
					<ul class="list-sitemap">
						<!-- <li><a href="{{ url('/best-lender-loans-usa')}}">{{ $privname }} vs other lenders</a></li> -->
			<!-- {{--			<li><a href="{{ url('/loan-calculator')}}">Loan Budgeting</a></li> -->
		 	<li><a href="#" target="_blank" rel="noopener">Blog</a></li> --}}
						<li><a href="{{ url('/key-terms')}}">Key Terms</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="site-map-section col-md-6 col-xs-12">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-2 col-md-2 txt-right">
					<img src="{{url('/images/bookmark.png')}}" alt="cashadvance more infos" height="32px">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-7 col-md-7 alpha">
					<h2 class="small-title">Categories</h2>
					<ul class="list-sitemap">
						<li><a href="{{ url('/borrow-money')}}">Borrow Money</a></li>
						<li><a href="{{ url('/bad-credit-loans')}}" >Bad Credit Loans</a></li>
						<li><a href="{{ url('/installment-loans-usa')}}" >Installment Loans</a></li>
						<li><a href="{{ url('/cash-loans')}}">Cash Loans</a></li>
						<li><a href="{{ url('/payday-advance')}}" >Payday Advance</a></li>
						<li><a href="{{ url('/payday-loans-near-me')}}">Payday Loans Near Me</a></li>

						<li><a href="{{ url('/short-term-loans-usa')}}" >Short Term Loans USA</a></li>
						<li><a href="{{ url('/same-day-payday-loans')}}" >Same Day Payday Loans</a></li>
						<li><a href="{{ url('/same-day-loans')}}" >Same Day Loans</a></li>
						<li><a href="{{ url('/express-loans')}}" >Express Loans</a></li>
						<li><a href="{{ url('/instant-payday-loans-usa')}}" >Instant Payday Loans USA</a></li>
						<li><a href="{{ url('/emergency-loans')}}" >Emergency Loans</a></li>
						<li><a href="{{ url('/weekend-payday-loans')}}" >Weekend Payday Loans</a></li>
						<li><a href="{{ url('/odsp-payday-loans-online')}}" >Social Security Disability Payday Loans Online</a></li>
						<li><a href="{{ url('/holiday-vacation-loans')}}" >Holidays Loans</a></li>
						<li><a href="{{ url('/child-tax-loans')}}" >Child Tax Cash Advance Loans</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="site-map-section col-md-6 col-xs-12">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-2 col-md-2 txt-right">
					<img src="./images/crown.png" alt="cashadvance more infos" height="28px">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-7 col-md-7 alpha">
					<h2 class="small-title">More</h2>
					<ul class="list-sitemap">
						<li><a href="{{ url('/fast-loans-usa')}}">Fast Loan</a></li>
						<li><a href="{{ url('/payday-loan-usa')}}">Payday Loan</a></li>
						<li><a href="{{ url('/education-center')}}">Education Center</a></li>
						<li><a href="#" target="_blank" rel="noopener">Corporate Website</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
