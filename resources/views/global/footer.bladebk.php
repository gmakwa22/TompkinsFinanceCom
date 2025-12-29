</body>
<footer class="{{ Request::segment(1) }}">
    <style>
    #quebec-dialog-modal .modal-content .modal-body .container-fluid.license{padding-top: 25px!important;}

#saskatchewan-dialog-modal .modal-content .modal-body .container-fluid.license{padding-top: 25px!important;}

#newfoundland-and-labrador-dialog-modal .modal-content .modal-body .container-fluid.license{padding-top: 25px!important;}
</style>
<section id="footer">
<div class="container alpha omega">
<div class="col-xs-12 col-sm-12 col-md-3 footer-right">
<div class="col-xs-12 footer-logo">
<a href="#"><img src="{{asset('images/FL2.jpg')}}" alt="logo PayDay loans"></a>
</div>
<div class="col-xs-12 footer-social-media">
<!-- <ul class="list-inline" itemscope itemtype="http://schema.org/Organization">
<link itemprop="url" href="#">
<li><a itemprop="sameAs" href="https://www.facebook.com/megacashbucks/" title="Facebook PayDay.ca" class="facebook" target="_blank" rel="noopener" onClick="ga('send', 'event', 'social', 'suivre', 'facebook');"><i class="fa fa-facebook"></i></a></li>
<li><a itemprop="sameAs" href="#" title="Instagram" class="instagram" target="_blank" rel="noopener" onClick="ga('send', 'event', 'social', 'suivre', 'instagram');"><i class="fa fa-instagram"></i></a></li>
<li><a itemprop="sameAs" href="https://twitter.com/megacashbucks" title="Twitter PayDay.ca" class="twitter" target="_blank" rel="noopener" onClick="ga('send', 'event', 'social', 'suivre', 'twitter');"><i class="fa fa-twitter"></i></a></li>
<li><a itemprop="sameAs" href="#" title="Google-plus PayDay.ca" class="google" target="_blank" rel="noopener" onClick="ga('send', 'event', 'social', 'suivre', 'google-plus');"><i class="fa fa-google"></i></a></li>
</ul> -->
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-9">
	<div class="col-sm-6 col-md-4 footer-left">
		<h3>PAYDAY</h3>
		<ul>
		<li id="why"><a href="{{ url('/why_use_us' )}}" onClick="ga('send', 'event', 'footer', 'click', 'why use us');">What we offer</a></li>
		<!-- <li id="how"><a href="{{ url('/agent-list' )}}" onClick="ga('send', 'event', 'footer', 'click', 'how it works');">How it’s done</a></li> -->
		<li><a href="/">Apply right now!</a></br></li>
		</ul>
	</div>
	<div class="col-sm-6 col-md-4 footer-left">
		<h3>Help</h3>
		<ul>
		<li id="supp"><a href="{{ url('/faq' )}}" onClick="ga('send', 'event', 'footer', 'click', 'faq');">FAQ</a></li>
{{--		<li id="cont"><a href="{{ url('/reviews' )}}" onClick="ga('send', 'event', 'footer', 'click', 'contact us');">Reviews</a></li> --}}
		<li id="cont"><a href="{{ url('/contact' )}}" onClick="ga('send', 'event', 'footer', 'click', 'contact us');">Contact Us</a></li>
<!-- <li><a href="{{url('/forgotpassword')}}" onClick="ga('send', 'event', 'footer', 'click', 'forgot password');">Forgot Password</a></li> -->
		</ul>
	</div>
{{--	<div class="col-sm-6 col-md-4 footer-left">
		<h3>Resources</h3>
		<ul>
		<!-- <li id="best"><a href="{{url('/best-lender-loans-canada')}}">PayDay vs other lenders</a></li> -->
		<li id="budg"><a href="{{ url('/loan-calculator' )}}" onClick="ga('send', 'event', 'footer', 'click', 'Loan Calculator');">Loan Calculator</a></li>
		<li id="key"><a href="{{ url('/key-terms' )}}" onClick="ga('send', 'event', 'footer', 'click', 'key terms');">Key Terms</a></li>
		<!-- <li id="aff"><a href="https://blog.icash.ca/" target="_blank" rel="noopener" onClick="ga('send', 'event', 'footer', 'click', 'blog icash');">Blog</a></li> -->
		</br></ul>
	</div> --}}
	<div class="col-sm-6 col-md-4 footer-left">
		<h3>Legal</h3>
		<ul>
		<li id="priv"><a href="{{ url('/privacy-policy' )}}" onClick="ga('send', 'event', 'footer', 'click', 'privacy policy');">Privacy policy</a></li>
		<!-- <li id="cred"><a href="{{ url('/responsible_lending' )}}" onClick="ga('send', 'event', 'footer', 'click', 'responsible lending');">Our pledge of responsible lending</a></li> -->
		<li id="term"><a href="{{ url('/terms-conditions' )}}" onClick="ga('send', 'event', 'footer', 'click', 'terms conditions');">Terms and conditions of service</a></li>
		</ul>
	</div>
{{--	<div class="col-sm-6 col-md-4 footer-left">
		<h3>Provinces</h3>
		<ul>

		<li id="brit"><a href="{{url('/payday-loans-british-columbia')}}">British Columbia</a></li>


		</ul>
	</div> --}}
{{--	<div class="col-sm-6 col-md-4 footer-left">
		<h3>More</h3>
		<ul>
		<!-- <li id="fast"><a href="/fast-loans-canada" onClick="ga('send', 'event', 'footer', 'click', 'fast loan canada');">Fast Loan</a></li> -->
		<!-- <li id="app"><a href="/payday-loan-app-canada" onClick="ga('send', 'event', 'footer', 'click', 'Cash loans');">Taxcash Loan App</a></li> -->
		<li id="payd"><a href="{{url('/payday-loan-canada')}}" onClick="ga('send', 'event', 'footer', 'click', 'payday loan');">Payday Loan</a></li>
		<li id="edu"><a href="{{url('/education-center')}}" onClick="ga('send', 'event', 'footer', 'click', 'education center');">Be informed</a></li>
		<li id="sitm"><a href="{{ url('/sitemap' )}}" onClick="ga('send', 'event', 'footer', 'click', 'site map');">Site map</a></li>
		</ul>
	</div> --}}
</div>
<div class="col-xs-12 col-md-12 footer-right text-center">
<div class="col-xs-12 omega footer-mobile-app">
<!-- <b>Get our app for even better service!</b><br>
<a href="#" target="_blank" rel="noopener" class="footer_app_item" title="Download on Google Play store"><img src="{{url('/images/google_play.png')}}" class="google_play"></a>
<a href="#" target="_blank" rel="noopener" class="footer_app_item" title="Download on Apple store"><img src="{{url('/images/app_store.png')}}" class="app_store"></a> -->
<!-- <a href="#" target="_blank" rel="noopener" class="icone android" title="Download on Google Play store"></a>
<a href="#" target="_blank" rel="noopener" class="icone apple" title="Download on Apple store"></a> -->
</div>
</div>
</div>
</section>
<div class="footer_golden">
	<div id="bande-logo">
		<div id="copyright">
			<article class="container">
				<span>
				 Copyright © {{ now()->year }} <a href="{{ $privurl }}">{{ $privname }}</a> | All rights reserved
				</span>
			</article>
		</div>
	</div>
	<img src="{{url('/images/bottom-site.png')}}" class="bottom-site">
</div>

<div style="color:000;font-size:11px; width:70%; margin:auto;"></br>
<center>

</br></br>
  Maximum charges permitted in British Columbia for payday loan: 15% of the principal. We charge: 15% of the principal. For a $300 loan for 14 days: Total cost for borrowing = $45 Annual Percentage rate = 391.07% {{ $phonesmall or '' }}
</br></br>
  License # {{ $consumernum }} <br><br>
</center>
</div>

{{--
<div style="color:000;font-size:11px; width:70%; margin:auto;"></br>
<strong><span itemprop="name">{{ $privname }}</span></strong>, proudly <strong><span class="uppercase">canadian</span></strong> owned and operated, offers personalized payday loans and fast cash advances to thousands of Canadians in <strong><span>British Columbia</span></strong> (<a href="/payday-loans-vancouver" onclick="ga('send', 'event', 'footer', 'click', 'Vancouver');">Vancouver</a>,  <a href="/payday-loans-surrey" onclick="ga('send', 'event', 'footer', 'click', 'Surrey');">Surrey</a> ,  <a href="/payday-loans-burnaby" onclick="ga('send', 'event', 'footer', 'click', 'Burnaby');">Burnaby</a>  and others), in <strong><span>Alberta</span></strong> ( <a href="/payday-loans-calgary" onclick="ga('send', 'event', 'footer', 'click', 'calgary');">Calgary</a> ,  <a href="/payday-loans-edmonton" onclick="ga('send', 'event', 'footer', 'click', 'edmonton');">Edmonton</a> ,  <a href="/payday-loans-lethbridge" onclick="ga('send', 'event', 'footer', 'click', 'Lethbridge');">Lethbridge</a> ,  <a href="/payday-loans-red-deer" onclick="ga('send', 'event', 'footer', 'click', 'Red Deer');">Red Deer</a> ,  <a href="/payday-loans-wood-buffalo" onclick="ga('send', 'event', 'footer', 'click', 'Wood Buffalo');">Wood Buffalo</a> ,  <a href="/payday-loans-medicine-hat" onclick="ga('send', 'event', 'footer', 'click', 'Medicine Hat');">Medicine Hat</a> ,  <a href="/payday-loans-airdrie" onclick="ga('send', 'event', 'footer', 'click', 'Airdrie');">Airdrie</a> , and others), in <strong><span>Saskatchewan</span></strong> ( Saskatoon ,  Regina  and others), in <strong><span>Ontario</span></strong> ( <a href="/payday-loans-toronto" onclick="ga('send', 'event', 'footer', 'click', 'toronto');">Payday Loans Toronto</a> ,  <a href="/payday-loans-ottawa" onclick="ga('send', 'event', 'footer', 'click', 'ottawa');">Ottawa</a> ,  <a href="/payday-loans-mississauga" title="Mississauga, Ontario" onclick="ga('send', 'event', 'footer', 'click', 'Mississauga');">Mississauga</a> ,  <a href="/payday-loans-brampton" title="Brampton, Ontario" onclick="ga('send', 'event', 'footer', 'click', 'Brampton');">Brampton</a> ,  <a href="/payday-loans-hamilton" title="Hamilton, Ontario" onclick="ga('send', 'event', 'footer', 'click', 'Hamilton');">Hamilton</a> ,  <a href="/payday-loans-markham" title="Markham, Ontario" onclick="ga('send', 'event', 'footer', 'click', 'Markham');">Markham</a> ,  <a href="/payday-loans-niagara-falls" title="Niagara Falls, Ontario" onclick="ga('send', 'event', 'footer', 'click', 'Niagara Falls');">Niagara Falls</a>  and others), in <strong><span>Nova Scotia</span></strong> ( <a href="/payday-loans-halifax" onclick="ga('send', 'event', 'footer', 'click', 'halifax');">Halifax</a> ,  <a href="/payday-loans-cape-breton" onclick="ga('send', 'event', 'footer', 'click', 'cape breton');">Cape Breton</a> ,  <a href="/payday-loans-dartmouth" onclick="ga('send', 'event', 'footer', 'click', 'Dartmouth');">Dartmouth</a> ,  <a href="/payday-loans-truro" onclick="ga('send', 'event', 'footer', 'click', 'truro');">Truro</a> ,  <a href="/payday-loans-sydney" onclick="ga('send', 'event', 'footer', 'click', 'sydney');">Sydney</a>  and others), in <strong><span>New Brunswick</span></strong> ( <a href="/payday-loans-moncton" onclick="ga('send', 'event', 'footer', 'click', 'moncton');">Moncton</a> ,  <a href="/payday-loans-saint-john" onclick="ga('send', 'event', 'footer', 'click', 'Saint John');">Saint John</a> ,  <a href="/payday-loans-fredericton" onclick="ga('send', 'event', 'footer', 'click', 'Fredericton');">Fredericton</a>  and others) as well as in <strong><span>Manitoba</span></strong> ( <a href="/payday-loans-winnipeg" onclick="ga('send', 'event', 'footer', 'click', 'winnipeg');">Winnipeg</a> ,  <a class="city" href="/payday-loans-dauphin" title="Dauphin, Manitoba">Dauphin</a> ,  <a class="city" href="/payday-loans-morden" title="Morden, Manitoba">Morden</a> ,  <a class="city" href="/payday-loans-portage-la-prairie" title="Portage La Prairie, Manitoba">Portage La Prairie</a> ,  <a class="city" href="/payday-loans-selkirk" title="Selkirk, Manitoba">Selkirk</a> ,  <a class="city" href="/payday-loans-the-pas" title="The Pas, Manitoba">The Pas</a> ,  <a class="city" href="/payday-loans-winkler" title="Winkler, Manitoba">Winkler</a> ,  Brandon ,  Steinbach ,  Thompson  and others).
<strong>Easy online payday loans in Canada, Same day fast cash Ontario ON, Online loans British Colombia BC, Cash money Alberta AB, Payday loan Saskatchewan SK.</strong>
<br>
<span class="term"><b>What is a payday loan ?</b><br>
A payday loan allows a person to get cash for a short time period against his or her next pay cheque. A customer with an active chequing account, direct deposit and a job can receive funds in his or her account in less than one hour.<br>
<b>Renewals</b><br>
{{ $privname }} does not automatically renew loans.<br>
<b>APR Disclosure</b><br>
<span itemprop="annualPercentageRate" itemscope="" itemtype="http://schema.org/QuantitativeValue">
License #XXXXXX - <span itemprop="name">Alberta</span><br>
</span>
<span itemprop="annualPercentageRate" itemscope="" itemtype="http://schema.org/QuantitativeValue">
License #XXXXXX - <span itemprop="name">Ontario</span><br>
</span>
<span itemprop="annualPercentageRate" itemscope="" itemtype="http://schema.org/QuantitativeValue">
License #{{ $consumernum }} - <span itemprop="name">British Columbia</span><br>
</span>
<span itemprop="annualPercentageRate" itemscope="" itemtype="http://schema.org/QuantitativeValue">
License #XXXXXX - <span itemprop="name">Manitoba</span><br>
</span>
<span itemprop="annualPercentageRate" itemscope="" itemtype="http://schema.org/QuantitativeValue">
License #XXXXXX - <span itemprop="name">New Brunswick</span><br>
</span>
<span itemprop="annualPercentageRate" itemscope="" itemtype="http://schema.org/QuantitativeValue">
License #XXXXXX - <span itemprop="name">Nova Scotia</span><br>
</span>
<b>Implications of non payment</b><br>
{{ $privname }} encourages responsible lending. Failure to repay your loan will result in a negative report to the credit bureaus, which would significantly reduce your credit score. If you do not repay your entire loan on or before the loan due date, the loan will be considered unpaid and will be subject to a fee of up to $48 depending on your province. In addition, interest will accrue on any unpaid balance at a rate of 59% per annum. Delinquency will to be taken up in court and you will have to bear all the court, legal &amp; administration fees.
</span>
</br></br>
</div>
--}}

</footer>


<div tabindex="-1" class="modal fade" id="dialog-modal-not_available" role="dialog">
<div class="vertical-alignment-helper">
<div class="modal-dialog vertical-align-center">

<div class="modal-content">
<div class="modal-header">
<button type="button" class="btn close active" data-dismiss="modal">×</button>
<h4 class="modal-title"></h4>
</div>
<div class="modal-body">
<div class="container-fluid"></div><br>
</div>
</div>
</div>
</div>
</div>
<div itemscope itemtype="http://schema.org/FinancialProduct">
<meta itemprop="name" content="PayDay">
<meta itemprop="logo" content="#" alt="PayDay logo">
<meta itemprop="description" content="PayDay is a financial institution providing low cost quick online payday loans and fast cash advances in multiple repayments. Easy to apply and instant approval! Money by e-transfer all over Canada.">
<div itemscope itemtype="http://schema.org/LoanOrCredit">
<div itemprop="amount" itemscope itemtype="http://schema.org/MonetaryAmount">
<meta itemprop="currency" content="CAD">
<meta itemprop="minValue" content="100">
<meta itemprop="maxValue" content="1500">
</div>
<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
<meta itemprop="offeredBy" href="#" content="PayDay | Smart Alternative to Online Payday Loans in Canada">
</div>
</div>
</div>


<div tabindex="-1" class="modal fade modal-prov" id="ontario-dialog-modal" role="dialog" style="display: none;">
	<div class="vertical-alignment-helper">
		<div class="modal-dialog vertical-align-center">

			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="btn close active" data-dismiss="modal" style="position: absolute;right: 20px;">×</button>
					<div class="container-fluid license scrollbar">
						<div class="col-xs-12">
							<div class="title">
							<h5>Province of Ontario License will be here soon!</h5>
							<!-- <h5>PayDay is a direct lender, licensed for lending in Ontario</h5>
							<p>PayDay makes responsible short term loans, fully compliant in all Canadian provinces. <b>Our business is transparent and guided by provincial consumer protection laws. </b></p>
							<div class="secured"></div>
							<div class="secured2"></div> -->
							</div>
							<hr>
							<img class="license-img" src="{{url('/images/receptionist.jpg')}}" alt="Alberta Licence">
							<br><br>
						</div>
						<!-- <div class="col-xs-12 text-left">
							<br>
							<b>Based upon your payment frequency, repayments of 1 to 3 instalments are available, up to 62 days, without any additional cost or fees.</b>
							<hr>
						</div>
						<div class="col-xs-12 text-left">
							<p><b>Maximum Allowable Cost per $100 Borrowed: <span>$15.00</span><br>
							Our Cost per $100 Borrowed: <span>$15.00</span></b><br><br></p>
							<p>So, for example, if you borrowed $300 for 14 days<br></p>
							<div class="col-xs-12 pull-left alpha omega">
							<div class="table">
							<ul>
							<li>Amount Advanced = $300.00</li>
							<li>Total Cost of Borrowing = $45.00</li>
							<li>Total You Repay: $345.00</li>
							</ul>
							</div>
							<p class="text-ref">This poster is required under the <i>Payday Loans Act, 2008</i></p>
							<br>
							</div>
							<p class="text-ref">If you’d like more information on the Payday loan industry, educational materials approved by the Registrar, Payday Loans Act, 2008, are available <a tabindex="-1" target="_blank" href="#">Here. </a></p>
						</div> -->
						<div class="col-xs-12 m-bottom pull-left">
							<br>
							<input type="submit" class="close_modal_button submit btn btn-green pull-right" data-dismiss="modal" data-keyboard="true" tabindex="-1" value="Continue">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div tabindex="-1" class="modal fade modal-prov" id="british-columbia-dialog-modal" role="dialog" style="display: none;">
	<div class="vertical-alignment-helper">
		<div class="modal-dialog vertical-align-center">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="btn close active" data-dismiss="modal"  style="position: absolute;right: 20px;">×</button>
					<div class="container-fluid license scrollbar">
						<div class="col-xs-12">
							<div class="title">
							<h5>British Columbia License</h5>
							</div>
                            <hr>
<iframe id="iframe" src="/licence/BusinessLicense-19-11-08.pdf" width="100%" height="450" download></iframe>

							<br><br>
						</div>
						<!-- <div class="col-xs-12 text-left">
							<b>Based upon your payment frequency, repayments of 1 to 3 instalments are available, up to 62 days, without any additional cost or fees.</b><br><br>
						</div>
						<div class="col-xs-12 text-left bordered">
							<p><b>In British Columbia, 15% of the principal is the maximum charge permitted for a payday loan.<br><br>
							PayDay charges 15% of the principal.</b><br><br></p>
							<p>So, for example, if you borrowed $300 for 14 days:<br></p>
							<div class="col-xs-12 pull-left alpha omega">
							<div class="table">
							<ul>
							<li>Total cost of borrowing = $45</li>
							<li>Annual Percentage Rate = 391.07%</li>
							</ul>
							</div>
							<p class="text-ref">The requirements of the Business Practices and Consumer Protection Act specify the provision of this information.License Number:</p>
							</div>
						</div> -->
						<div class="col-xs-12 pull-left">
							<div class="col-xs-12 m-bottom">
								<br>
								<input type="submit" class="close_modal_button submit btn btn-green pull-right" data-dismiss="modal" data-keyboard="true" tabindex="-1" value="Continue">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div tabindex="-1" class="modal fade modal-prov" id="alberta-dialog-modal" role="dialog" style="display: none;">
	<div class="vertical-alignment-helper">
		<div class="modal-dialog vertical-align-center">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="btn close active" data-dismiss="modal" style="position: absolute;right: 20px;">×</button>
					<div class="container-fluid license scrollbar">
						<div class="col-xs-12">
							<div class="title">
								<!-- <h5>PayDay is a direct lender, licensed for lending in Alberta</h5> -->
								<h5>Province of Alberta License will be here soon!</h5>
								<!-- <p>PayDay makes responsible short term loans, fully compliant in all Canadian provinces. Our business is transparent and guided by provincial consumer protection laws. </p>
								<div class="secured"></div> -->
							</div>
							<hr>
						</div>
						<div class="col-xs-12 text-left">
							<!-- <b>Based upon your payment frequency, repayments of 2 to 7 instalments are available, in a range of 42 to 62 days, without any additional cost or fees.</b>
							<br><br> -->
						</div>
						<div class="col-xs-12 col-sm-6 omega">
							<!-- <br><br><br><br>
							<p>In Alberta, $15 per $100 lent is the maximum charge permitted for a payday loan.</p>
							<p>We charge $15 per $100 lent.</p>
							<p>Payday loans are a form of high-cost credit.</p>
							<p>Information provided complies with the Fair Trading Act.</p>
							<p>Payday Loan Business Licence Number: </p> -->
						</div>
						<div class="col-xs-12 col-sm-12">
							<a href="#" target="_blank"><img class="license-img" src="{{url('/images/receptionist.jpg')}}" alt="Alberta Licence"></a>
						</div>
						<div class="col-xs-12 pull-left">
							<br>
							<div class="col-xs-12 m-bottom">
							<br>
							<input type="submit" class="close_modal_button submit btn btn-green pull-right" data-dismiss="modal" data-keyboard="true" tabindex="-1" value="Continue">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div tabindex="-1" class="modal fade modal-prov" id="provinces-dialog-modal" role="dialog" style="display: none;">
	<div class="vertical-alignment-helper">
		<div class="modal-dialog vertical-align-center">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="btn close active" data-dismiss="modal" style="position: absolute;right: 20px;">×</button>
					<form action="#" id="pageIndex" method="post" novalidate="novalidate">
						<div class="container-fluid license alpha omega">
							<div class="col-xs-12 alpha omega text-center question">
								<div class="col-sm-3"></div>
								<h4 class="modal-title">What’s your province?</h4>
								<div class="ui compact menu col-sm-6">
                  <select id="selectProvinceIndex" name="selectProvinceIndex" class="form-control ui dropdown item" title="Provinces">
									<option data-loan-selected-province="false" data-loan-percent="0" value="">Province</option>
									<option id="alberta" data-loan-selected-province="false" data-loan-percent="15" value="alberta">Alberta</option>
									<option id="british-columbia" data-loan-selected-province="false" data-loan-percent="15" value="british-columbia">British Columbia</option>
									<option id="ontario" data-loan-selected-province="false" data-loan-percent="18" value="ontario">Ontario</option>
									 <option id="new-brunswick" data-loan-selected-province="false" data-loan-percent="15" value="new-brunswick">New Brunswick</option>
									<option id="saskatchewan" data-loan-selected-province="false" data-loan-percent="23" value="saskatchewan">Saskatchewan</option>
									</select>
								</div>
								<div class="col-sm-5">
								<input type="submit" class="close_modal_button submit btn btn-green col-xs-12 valid" data-dismiss="modal" data-keyboard="true" tabindex="-1" value="Continue">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div tabindex="-1" class="modal fade modal-prov" id="new-brunswick-dialog-modal" role="dialog" style="display: none;">
	<div class="vertical-alignment-helper">
		<div class="modal-dialog vertical-align-center">

			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="btn close active" data-dismiss="modal" style="position: absolute;right: 20px;">×</button>
					<div class="container-fluid license scrollbar">
						<div class="col-xs-12">
							<div class="title">
								<!-- <h5>PayDay is a direct lender, licensed for lending in New Brunswick</h5> -->
								<h5>Province of New Brunswick License will be here soon!</h5>
								<!-- p>PayDay makes responsible short term loans, fully compliant in all Canadian provinces. Our business is transparent and guided by provincial consumer protection laws. </p>
								<div class="secured"></div> -->
							</div>
							<hr>
							<img class="license-img" src="{{url('/images/receptionist.jpg')}}" alt="Alberta Licence">
						</div>
						<!-- <p><a href="#" title="English" id="en">EN</a> / <a href="#" title="Français" id="fr">FR</a></p><span class="clearfix"></span>
						<div class="col-xs-12 text-center border-orange" id="en-flyer">
							<p class="title">For every $100 borrowed the maximum cost</p>
							<span class="big">$15.00</span>
							<p class="text">Example: $300 loan for 14 days: <br>
							Principal Amount = $300 <br>
							Total Cost of Credit = $45.00 <br>
							Annual Percentage Rate (APR) = 391.07% <br>
							Total to Repay = $345.00</p>
							<p class="small-text">Contact the Financial and Consumer Services Commission (FCNB) for further inquiries about payday loans, including cancellation rights and collection practices.<br>Toll-free at 1-866-933-2222 <br><br>
							The requirements of the Cost of Credit Disclosure and Payday Loans Act are fulfilled by this information.</p>
						</div>
						<div class="col-xs-12 text-center border-orange" id="fr-flyer" style="display: none;">
							<p class="title">Coût maximum permis par tranche de 100$</p>
							<span class="big">15$</span>
							<p class="text">Exemple: prêt de 300$ pour 14 jours <br>
							Capital de 300$ <br>
							Coût total du credit = 45$ <br>
							Coût annuel en pourcentage (TAP) = 391.07% <br>
							Remboursement total = 345$</p>
							<p class="small-text">Pour toute question ou préoccupation au sujet des prêts sur salaire, des droits de résiliation, ou des pratiques de recouvrement, n'hésitez pas à communiquer avec la Commission des services financiers et des services aux consommateurs <br>(FCNB)<br> au numéro sans frais 1-866-933-2222 <br><br>
							Cette affiche est conforme aux exigences de la <i>Loi sur la communication du coût du crédit et sur les prêts sur salaire.</i></p>
						</div>
						<span class="clearfix"></span>
						<br>
						<p>For educational tolls please <a href="#" class="educ-material">click here</a>.</p>
						<p class="chose-lang" style="display: none;"><a href="#" title="English" id="en-lang">EN</a> / <a href="#" title="Français" id="fr-lang">FR</a></p><span class="clearfix"></span>
						<div class="col-xs-12 alpha omega educ-block" id="en-educ" style="display: none;">
							<p class="title">Over a two week loan period, what will $300 cost?</p>
							<table>
								<thead>
								<tr>
								<th>If you take out a $300 loan*:</th>
								<th>Payday Loan <br><span class="small">(assuming cost of borrowingis $15 per $100**)</span></th>
								<th>Credit Card <br><span class="small">(assuming a daily interest rate at 23% APR for cash advance)</span></th>
								</tr>
								</thead>
								<tbody>
								<tr>
								<td>Once</td>
								<td>$45</td>
								<td>$2.65</td>
								</tr>
								<tr>
								<td>Twice</td>
								<td>$90</td>
								<td>$5.29</td>
								</tr>
								<tr>
								<td>Four times</td>
								<td>$180</td>
								<td>$10.59</td>
								</tr>
								<tr>
								<td>Six times</td>
								<td>$270</td>
								<td>$15.88</td>
								</tr>
								</tbody>
							</table>
							<br>
							<p class="text-small">
							*Please note that although the above example illustrates the cost of multiple loans, PayDay only makes one loan at a time. Paying off one payday loan with another is not permitted.
							<br><br>
							**The maximum total cost of credit allowed in the province of New Brunswick is $15 per $100 lent.
							</p>
						</div>
						<div class="col-xs-12 alpha omega educ-block" id="fr-educ" style="display: none;">
							<p class="title">Combien vous coûtera un emprunt de 300$ pour deux semaines?</p>
							<table>
								<thead>
								<tr>
								<th>Si vous empruntez 300$*:</th>
								<th>Prêt sur salaire <br><span class="small">(En supposant un coût d'emprunt de 15$ par tranche de 100$**)</span></th>
								<th>Carte de crédit <br><span class="small">(En supposantun taux d'intérêt quatidien calculé salon un TAP de 23% pour une avances de fonds)</span></th>
								</tr>
								</thead>
								<tbody>
								<tr>
								<td>Une fois</td>
								<td>45$</td>
								<td>2.65$</td>
								</tr>
								<tr>
								<td>Deux fois</td>
								<td>90$</td>
								<td>5.29$</td>
								</tr>
								<tr>
								<td>Quatres fois</td>
								<td>180$</td>
								<td>10.59$</td>
								</tr>
								<tr>
								<td>Six fois</td>
								<td>270$</td>
								<td>15.88$</td>
								</tr>
								</tbody>
							</table>
							<br>
							<p class="text-small">
							*Cet exemple montre ce que coûterait l'emprunt de plusieurs prêts. Vous ne pouvez pas détenir plus d'un prêt sur salaire à la fois. Vous ne pouvez pas rembourser un prêt sur salaire avec un autre prêt sur salaire.
							<br><br>
							**Au Nouveau-Brunswick, le coût total maximal du crédit autorisé est de 15$ par tranche de 100$ en vertu d'un prêt sur salaire.
							</p>
							</div> -->
							<div class="col-xs-12 pull-left">
								<br>
								<div class="col-xs-12 m-bottom">
								<br>
								<input type="submit" class="close_modal_button submit btn btn-green pull-right" data-dismiss="modal" data-keyboard="true" tabindex="-1" value="Continue">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>

<div tabindex="-1" class="modal fade modal-prov" id="quebec-dialog-modal" role="dialog" style="display: none;">
	<div class="vertical-alignment-helper">
		<div class="modal-dialog vertical-align-center">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="btn close active" data-dismiss="modal" style="position: absolute;right: 20px;">×</button>
					<div class="container-fluid license scrollbar">
						<div class="col-xs-12">
							<div class="title">
								<h5 class="text-center font-red">Quebec</h3>
								<p class="text-center">We have operations in the province of Quebec.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div tabindex="-1" class="modal fade modal-prov" id="saskatchewan-dialog-modal" role="dialog" style="display: none;">
	<div class="vertical-alignment-helper">
		<div class="modal-dialog vertical-align-center">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="btn close active" data-dismiss="modal" style="position: absolute;right: 20px;">×</button>
					<div class="container-fluid license scrollbar">
						<div class="col-xs-12">
							<div class="title">
								<h3 class="text-center font-red">Saskatchewan</h3>
								<p class="text-center">We have operations in the province of Saskatchewan.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div tabindex="-1" class="modal fade modal-prov" id="newfoundland-and-labrador-dialog-modal" role="dialog" style="display: none;">
	<div class="vertical-alignment-helper">
		<div class="modal-dialog vertical-align-center">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="btn close active" data-dismiss="modal" style="position: absolute;right: 20px;">×</button>
					<div class="container-fluid license scrollbar">
						<div class="col-xs-12">
							<div class="title">
								<h3 class="text-center font-red">Newfoundland and Labrador</h3>
								<p class="text-center">We have operations in the province of Newfoundland and Labrador.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
    <script type="text/javascript" src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vendor/all.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/vendor/additional-methods.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/vendor/public_vendor.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/common.min.js')}}"></script>
 	<script type="text/javascript" src="{{ asset('js/global.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/strings_en.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/index.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('js/backend_js/datepicker.js')}}"></script>

	<script type="text/javascript">
		//testing code
		//document.getElementById("test").innerHTML =  "OUTPUT<br>";
		//document.getElementById("test").innerHTML += JSON.stringify($('.loan-slider').length);
		$(document).ready(function() {
	        if ($('.loan-slider').length) {
				document.getElementById("test").innerHTML += "This works";
				$(".loan-slider").slider({

					max: 1500,
	                step: 10,
	                value: 800,
	                slide: function(event, ui) {
	                    $(this).find('.ui-slider-handle').html('<div class="valeur">'+ui.value+'</div>');
	                },
	                change :function(event, ui) {
	                    $(this).find('.ui-slider-handle').html('<div class="valeur">'+ui.value+'</div>');
	                }
	            });
	            var val = 100;
	            var timer = setInterval(function() {
	                if (val <= 800) {
	                    $(".loan-slider").slider("value", val);
	                    val += 10;
	                }
	                else {
	                    clearInterval(timer);
	                }
	            }, 22);
	        }
		});

	</script>
	<script>
				//document.getElementById("loan-slider").value = 800;


    </script>
    <script>
        jQuery('.btn-step2').click(function(e){
            e.preventDefault();
            var term_val = (jQuery('#terms').val())?jQuery('#terms').val()*7:'7';
            //https://taxcash-uat.turnkey-lender.com/Lending#/stepRegister?amount=1000&term=6&product=64282c09-1560-40c3-a867-a6ffbafee10d
            window.location.href = "https://taxcashloanorigination.b2clogin.com/taxcashloanorigination.onmicrosoft.com/oauth2/v2.0/authorize?p=B2C_1_signup&client_id=54187f9c-a15c-455f-9de8-a87ac8eb31d3&nonce=defaultNonce&redirect_uri=https%3A%2F%2Fmoolahcashloans.com%2F&scope=openid&response_type=id_token&prompt=login&amount="+jQuery('#loan-slider').val()+"&term="+term_val+"&product=64282c09-1560-40c3-a867-a6ffbafee10d";
        })
    </script>

    <script type="text/javascript">
    	jQuery("#paycheck").datepicker({
		    minDate: 0,
		    showOn: "button",
		      buttonImage: "http://www.megacashbucks.com/public/images/calendar-icon.png",
		      buttonImageOnly: true,
		      buttonText: "Select date"
		});
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143026661-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-143026661-1');
    </script>

    @yield('scripts')

    <div id="loadjs"></div>


</body>
</html>
