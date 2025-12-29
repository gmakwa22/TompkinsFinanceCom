</body>
<footer class="{{ Request::segment(1) }}">
	<style>
		#quebec-dialog-modal .modal-content .modal-body .container-fluid.license {
			padding-top: 25px !important;
		}

		#saskatchewan-dialog-modal .modal-content .modal-body .container-fluid.license {
			padding-top: 25px !important;
		}

		#newfoundland-and-labrador-dialog-modal .modal-content .modal-body .container-fluid.license {
			padding-top: 25px !important;
		}

		#bande-logo #copyright span {
			font-size: 16px;
			/*padding-left: 20px;*/
		}

		.footsize {
			color: 000;
			font-size: 16px;
			width: 95%;
			margin: auto;
		}

		.footer-left {
			line-height: 2.428571;
		}

		footer section#footer .footer-left a:link,
		footer section#footer .footer-left a:visited {
			color: #989898;
			font-size: 18px;
			letter-spacing: .5px;
			line-height: 1.5;
			font-weight: 400;
		}

		@media screen and (min-width: 750px) {
			.footsize {
				color: 000;
				font-size: 12px;
				width: 70%;
				margin: auto;
			}

			#bande-logo #copyright span {
				font-size: 12px;
				/*padding-left: 20px;*/
			}

			.footer-left {
				font-size: 18px !important;
				line-height: 1.428571;
			}

			footer section#footer .footer-left a:link,
			footer section#footer .footer-left a:visited {
				color: #989898;
				font-size: 14px;
				letter-spacing: .5px;
				line-height: 1.5;
				font-weight: 400;
			}

		}
	</style>
	<footer class="footer page-section-pt" style="background: linear-gradient(135deg, #1a252f 0%, #2c3e50 50%, #34495e 100%); position: relative; overflow: hidden;">
        <!-- Decorative Top Border -->
        <div style="position: absolute; top: 0; left: 0; right: 0; height: 4px; background: linear-gradient(90deg, #3498db, #e74c3c, #f39c12, #2ecc71, #9b59b6);"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 sm-mb-30">
                    <div class="footer-useful-link footer-hedding">
                        <h6 class="text-white mb-30 mt-10 text-uppercase fw-bold" style="font-size: 1.4rem; letter-spacing: 1px; color: #3498db;">
                            <i class="fa fa-shield me-2"></i>{{ $privname }}
                        </h6>
                        <p class="text-white-50 mb-4" style="line-height: 1.7; font-size: 1rem;">
                            Your trusted Houston neighbors, here to help when you need it most. Fast, secure, and transparent lending solutions designed to get you back on track.
                        </p>

                        <!-- Contact Info -->
                        <div class="mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fa fa-phone me-2" style="color: #3498db; width: 16px;"></i>
                                <span class="text-white-50">{{ $privphone }}</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fa fa-envelope me-2" style="color: #3498db; width: 16px;"></i>
                                <span class="text-white-50">{{ $suportemail }}</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fa fa-map-marker me-2" style="color: #3498db; width: 16px;"></i>
                                <span class="text-white-50">Houston, Texas</span>
                            </div>
                        </div>

                    </div>
				</div>
                <div class="col-lg-2 col-sm-6 sm-mb-30">
                    <div class="footer-useful-link footer-hedding">
                        <h6 class="text-white mb-30 mt-10 text-uppercase fw-bold" style="font-size: 1.1rem; color: #ecf0f1; border-bottom: 2px solid #3498db; padding-bottom: 8px; display: inline-block;">
                            <i class="fa fa-link me-2"></i>Quick Links
                        </h6>
                        <ul class="addresss-info" style="list-style: none; padding: 0;">
                            <li class="mb-2">
                                <a href="{{ url('/why-choose-us') }}" class="footer-link" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;" onmouseover="this.style.color='#3498db'; this.style.paddingLeft='8px'" onmouseout="this.style.color='rgba(255,255,255,0.7)'; this.style.paddingLeft='0'">
                                    <i class="fa fa-arrow-right me-2" style="font-size: 0.8rem;"></i>What we offer
							</a>
						</li>
                            <li class="mb-2">
                                <a href="{{ url('/how-its-done') }}" class="footer-link" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;" onmouseover="this.style.color='#3498db'; this.style.paddingLeft='8px'" onmouseout="this.style.color='rgba(255,255,255,0.7)'; this.style.paddingLeft='0'">
                                    <i class="fa fa-arrow-right me-2" style="font-size: 0.8rem;"></i>How it's done
							</a>
						</li>
                            <li class="mb-2">
                                <a href="{{ Session::get('purl') ?? $corpregister }}" class="footer-link" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;" onmouseover="this.style.color='#3498db'; this.style.paddingLeft='8px'" onmouseout="this.style.color='rgba(255,255,255,0.7)'; this.style.paddingLeft='0'">
                                    <i class="fa fa-arrow-right me-2" style="font-size: 0.8rem;"></i>Apply now
							</a>
						</li>
                            <li class="mb-2">
                                <a href="{{ url('/sitemap') }}" class="footer-link" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;" onmouseover="this.style.color='#3498db'; this.style.paddingLeft='8px'" onmouseout="this.style.color='rgba(255,255,255,0.7)'; this.style.paddingLeft='0'">
                                    <i class="fa fa-arrow-right me-2" style="font-size: 0.8rem;"></i>Site Map
							</a>
						</li>
					</ul>
				</div>
			</div>
                <div class="col-lg-2 col-sm-6 sm-mb-30">
                    <div class="footer-useful-link footer-hedding">
                        <h6 class="text-white mb-30 mt-10 text-uppercase fw-bold" style="font-size: 1.1rem; color: #ecf0f1; border-bottom: 2px solid #3498db; padding-bottom: 8px; display: inline-block;">
                            <i class="fa fa-cogs me-2"></i>Services
                        </h6>
                        <ul class="addresss-info" style="list-style: none; padding: 0;">
                            <li class="mb-2">
                                <a href="{{url('/installment-loans-usa')}}" class="footer-link" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;" onmouseover="this.style.color='#3498db'; this.style.paddingLeft='8px'" onmouseout="this.style.color='rgba(255,255,255,0.7)'; this.style.paddingLeft='0'">
                                    <i class="fa fa-arrow-right me-2" style="font-size: 0.8rem;"></i>Installment Loans
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{url('/payday-advance')}}" class="footer-link" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;" onmouseover="this.style.color='#3498db'; this.style.paddingLeft='8px'" onmouseout="this.style.color='rgba(255,255,255,0.7)'; this.style.paddingLeft='0'">
                                    <i class="fa fa-arrow-right me-2" style="font-size: 0.8rem;"></i>Payday Advance
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{url('/payday-loans-near-me')}}" class="footer-link" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;" onmouseover="this.style.color='#3498db'; this.style.paddingLeft='8px'" onmouseout="this.style.color='rgba(255,255,255,0.7)'; this.style.paddingLeft='0'">
                                    <i class="fa fa-arrow-right me-2" style="font-size: 0.8rem;"></i>Payday Loans Near Me
                                </a>
                            </li>
					</ul>
				</div>
				</div>
                <div class="col-lg-2 col-sm-6 sm-mb-30">
                    <div class="footer-useful-link footer-hedding">
                        <h6 class="text-white mb-30 mt-10 text-uppercase fw-bold" style="font-size: 1.1rem; color: #ecf0f1; border-bottom: 2px solid #3498db; padding-bottom: 8px; display: inline-block;">
                            <i class="fa fa-graduation-cap me-2"></i>Resources
                        </h6>
                        <ul class="addresss-info" style="list-style: none; padding: 0;">
                            <li class="mb-2">
                                <a href="{{ url('/education-center') }}" class="footer-link" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;" onmouseover="this.style.color='#3498db'; this.style.paddingLeft='8px'" onmouseout="this.style.color='rgba(255,255,255,0.7)'; this.style.paddingLeft='0'">
                                    <i class="fa fa-arrow-right me-2" style="font-size: 0.8rem;"></i>Education Center
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ url('/faq') }}" class="footer-link" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;" onmouseover="this.style.color='#3498db'; this.style.paddingLeft='8px'" onmouseout="this.style.color='rgba(255,255,255,0.7)'; this.style.paddingLeft='0'">
                                    <i class="fa fa-arrow-right me-2" style="font-size: 0.8rem;"></i>FAQ
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ url('/key-terms') }}" class="footer-link" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;" onmouseover="this.style.color='#3498db'; this.style.paddingLeft='8px'" onmouseout="this.style.color='rgba(255,255,255,0.7)'; this.style.paddingLeft='0'">
                                    <i class="fa fa-arrow-right me-2" style="font-size: 0.8rem;"></i>Key Terms
                                </a>
                            </li>
				</ul>
			</div>
			</div>
                <div class="col-lg-2 col-sm-6 sm-mb-30">
                    <div class="footer-useful-link footer-hedding">
                        <h6 class="text-white mb-30 mt-10 text-uppercase fw-bold" style="font-size: 1.1rem; color: #ecf0f1; border-bottom: 2px solid #3498db; padding-bottom: 8px; display: inline-block;">
                            <i class="fa fa-shield me-2"></i>Legal
                        </h6>
                        <ul class="addresss-info" style="list-style: none; padding: 0;">
                            <li class="mb-2">
                                <a href="{{ url('/privacy-policy') }}" class="footer-link" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;" onmouseover="this.style.color='#3498db'; this.style.paddingLeft='8px'" onmouseout="this.style.color='rgba(255,255,255,0.7)'; this.style.paddingLeft='0'">
                                    <i class="fa fa-arrow-right me-2" style="font-size: 0.8rem;"></i>Privacy Policy
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ url('/responsible-lending') }}" class="footer-link" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;" onmouseover="this.style.color='#3498db'; this.style.paddingLeft='8px'" onmouseout="this.style.color='rgba(255,255,255,0.7)'; this.style.paddingLeft='0'">
                                    <i class="fa fa-arrow-right me-2" style="font-size: 0.8rem;"></i>Responsible Lending
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ url('/terms-conditions') }}" class="footer-link" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;" onmouseover="this.style.color='#3498db'; this.style.paddingLeft='8px'" onmouseout="this.style.color='rgba(255,255,255,0.7)'; this.style.paddingLeft='0'">
                                    <i class="fa fa-arrow-right me-2" style="font-size: 0.8rem;"></i>Terms & Conditions
                                </a>
                            </li>
				</ul>
			</div>
		</div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom" style="background: rgba(0,0,0,0.3); padding: 20px 0; margin-top: 40px;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="text-white-50 mb-0" style="font-size: 0.9rem;">
                            Copyright © {{ now()->year }} <a href="{{ $privurl }}" style="color: #3498db; text-decoration: none;">{{ $privname }}</a> | All rights reserved
                        </p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <div class="social-links">
                            <a href="https://www.facebook.com/{{ $nametogether }}/" target="_blank" rel="noopener" style="color: rgba(255,255,255,0.7); font-size: 1.2rem; margin-left: 15px; text-decoration: none; transition: all 0.3s ease;" onmouseover="this.style.color='#3498db'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" target="_blank" rel="noopener" style="color: rgba(255,255,255,0.7); font-size: 1.2rem; margin-left: 15px; text-decoration: none; transition: all 0.3s ease;" onmouseover="this.style.color='#3498db'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a href="https://twitter.com/{{ $nametogether }}/" target="_blank" rel="noopener" style="color: rgba(255,255,255,0.7); font-size: 1.2rem; margin-left: 15px; text-decoration: none; transition: all 0.3s ease;" onmouseover="this.style.color='#3498db'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" target="_blank" rel="noopener" style="color: rgba(255,255,255,0.7); font-size: 1.2rem; margin-left: 15px; text-decoration: none; transition: all 0.3s ease;" onmouseover="this.style.color='#3498db'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">
                                <i class="fa fa-google"></i>
                            </a>
			</div>
		</div>
		</div>
			</div>
		</div>
    </footer>

	<div class="footsize"></br>
		<center>

			</br></br>
			Maximum charges permitted in British Columbia for payday loan: 15% of the principal. We charge: 15% of the principal. For a $300 loan for 14 days: Total cost for borrowing = $45 Annual Percentage rate = 391.07% {{ $phonesmall or '' }}
			</br></br>
			License # {{ $consumernum }} <br><br>
		</center>
	</div>


	<div class="footsize"></br>
		<strong><span itemprop="name">{{ $privname }}</span></strong>, proudly <strong><span class="uppercase">american</span></strong> owned and operated, offers personalized payday loans and fast cash advances to thousands of Americans in <strong><span>Texas</span></strong> (<a href="/payday-loans-houston" onclick="ga('send', 'event', 'footer', 'click', 'Houston');">Houston</a>, <a href="/payday-loans-dallas" onclick="ga('send', 'event', 'footer', 'click', 'Dallas');">Dallas</a> , <a href="/payday-loans-san-antonio" onclick="ga('send', 'event', 'footer', 'click', 'San Antonio');">San Antonio</a> and others), in <strong><span>Nevada</span></strong> ( <a href="/payday-loans-las-vegas" onclick="ga('send', 'event', 'footer', 'click', 'Las Vegas');">Las Vegas</a> , <a href="/payday-loans-reno" onclick="ga('send', 'event', 'footer', 'click', 'Reno');">Reno</a> , <a href="/payday-loans-henderson" onclick="ga('send', 'event', 'footer', 'click', 'Henderson');">Henderson</a> , <a href="/payday-loans-sparks" onclick="ga('send', 'event', 'footer', 'click', 'Sparks');">Sparks</a> , <a href="/payday-loans-carson-city" onclick="ga('send', 'event', 'footer', 'click', 'Carson City');">Carson City</a> , <a href="/payday-loans-north-las-vegas" onclick="ga('send', 'event', 'footer', 'click', 'North Las Vegas');">North Las Vegas</a> , <a href="/payday-loans-boulder-city" onclick="ga('send', 'event', 'footer', 'click', 'Boulder City');">Boulder City</a> , and others), in <strong><span>Missouri</span></strong> ( <a href="/payday-loans-kansas-city" onclick="ga('send', 'event', 'footer', 'click', 'Kansas City');">Kansas City</a> , <a href="/payday-loans-st-louis" onclick="ga('send', 'event', 'footer', 'click', 'St. Louis');">St. Louis</a> , <a href="/payday-loans-springfield" onclick="ga('send', 'event', 'footer', 'click', 'Springfield');">Springfield</a> , <a href="/payday-loans-st-peters" onclick="ga('send', 'event', 'footer', 'click', 'St. Peters');">St. Peters</a> , <a href="/payday-loans-columbia" onclick="ga('send', 'event', 'footer', 'click', 'Columbia');">Columbia</a> , <a href="/payday-loans-independence" onclick="ga('send', 'event', 'footer', 'click', 'Independence');">Independence</a> , <a href="/payday-loans-lees-summit" onclick="ga('send', 'event', 'footer', 'click', 'Lees Summit');">Lees Summit</a> and others), in <strong><span>California</span></strong> ( <a href="/payday-loans-los-angeles" onclick="ga('send', 'event', 'footer', 'click', 'Los Angeles');">Los Angeles</a> , <a href="/payday-loans-san-francisco" onclick="ga('send', 'event', 'footer', 'click', 'San Francisco');">San Francisco</a> , <a href="/payday-loans-san-diego" onclick="ga('send', 'event', 'footer', 'click', 'San Diego');">San Diego</a> , <a href="/payday-loans-sacramento" onclick="ga('send', 'event', 'footer', 'click', 'Sacramento');">Sacramento</a> , <a href="/payday-loans-oakland" onclick="ga('send', 'event', 'footer', 'click', 'Oakland');">Oakland</a> and others), in <strong><span>Florida</span></strong> ( <a href="/payday-loans-miami" onclick="ga('send', 'event', 'footer', 'click', 'Miami');">Miami</a> , <a href="/payday-loans-orlando" onclick="ga('send', 'event', 'footer', 'click', 'Orlando');">Orlando</a> , <a href="/payday-loans-tampa" onclick="ga('send', 'event', 'footer', 'click', 'Tampa');">Tampa</a> , <a href="/payday-loans-jacksonville" onclick="ga('send', 'event', 'footer', 'click', 'Jacksonville');">Jacksonville</a> and others) as well as in <strong><span>New York</span></strong> ( <a href="/payday-loans-new-york" onclick="ga('send', 'event', 'footer', 'click', 'New York');">New York</a> , <a href="/payday-loans-buffalo" onclick="ga('send', 'event', 'footer', 'click', 'Buffalo');">Buffalo</a> , <a href="/payday-loans-rochester" onclick="ga('send', 'event', 'footer', 'click', 'Rochester');">Rochester</a> , <a href="/payday-loans-albany" onclick="ga('send', 'event', 'footer', 'click', 'Albany');">Albany</a> , <a href="/payday-loans-syracuse" onclick="ga('send', 'event', 'footer', 'click', 'Syracuse');">Syracuse</a> , <a href="/payday-loans-yonkers" onclick="ga('send', 'event', 'footer', 'click', 'Yonkers');">Yonkers</a> , <a href="/payday-loans-new-rochelle" onclick="ga('send', 'event', 'footer', 'click', 'New Rochelle');">New Rochelle</a> and others).
		<strong>Easy online payday loans in USA, Same day fast cash Texas TX, Online loans Nevada NV, Get cash money in Missouri MO, Payday loan California CA.</strong>
		<br>{{--
<span class="term"><b>What is a payday loan ?</b><br>
A payday loan allows a person to get cash for a short time period against his or her next pay cheque. A customer with an active chequing account, direct deposit and a job can receive funds in his or her account in less than one hour.<br>
<b>Renewals</b><br>
{{ $privname }} does not automatically renew loans.<br>
		<b>APR Disclosure</b><br>
		<span itemprop="annualPercentageRate" itemscope="" itemtype="http://schema.org/QuantitativeValue">
			License #XXXXXX - <span itemprop="name">Texas</span><br>
		</span>
		<span itemprop="annualPercentageRate" itemscope="" itemtype="http://schema.org/QuantitativeValue">
			License #XXXXXX - <span itemprop="name">Nevada</span><br>
		</span>
		<span itemprop="annualPercentageRate" itemscope="" itemtype="http://schema.org/QuantitativeValue">
			License #{{ $consumernum }} - <span itemprop="name">Missouri</span><br>
		</span>
		<span itemprop="annualPercentageRate" itemscope="" itemtype="http://schema.org/QuantitativeValue">
			License #XXXXXX - <span itemprop="name">California</span><br>
		</span>
		<span itemprop="annualPercentageRate" itemscope="" itemtype="http://schema.org/QuantitativeValue">
			License #XXXXXX - <span itemprop="name">Florida</span><br>
		</span>
		<span itemprop="annualPercentageRate" itemscope="" itemtype="http://schema.org/QuantitativeValue">
			License #XXXXXX - <span itemprop="name">New York</span><br>
		</span>
		<b>Implications of non payment</b><br>
		{{ $privname }} encourages responsible lending. Failure to repay your loan will result in a negative report to the credit bureaus, which would significantly reduce your credit score. If you do not repay your entire loan on or before the loan due date, the loan will be considered unpaid and will be subject to a fee of up to $48 depending on your state. In addition, interest will accrue on any unpaid balance at a rate of 59% per annum. Delinquency will to be taken up in court and you will have to bear all the court, legal &amp; administration fees.
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
	<meta itemprop="description" content="PayDay is a financial institution providing low cost quick online payday loans and fast cash advances in multiple repayments. Easy to apply and instant approval! Money by e-transfer all over USA.">
	<div itemscope itemtype="http://schema.org/LoanOrCredit">
		<div itemprop="amount" itemscope itemtype="http://schema.org/MonetaryAmount">
			<meta itemprop="currency" content="CAD">
			<meta itemprop="minValue" content="100">
			<meta itemprop="maxValue" content="5000">
		</div>
		<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
			<meta itemprop="offeredBy" href="#" content="PayDay | Smart Alternative to Online Payday Loans in USA">
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
								<h5>State of Texas License will be here soon!</h5>
								<!-- <h5>PayDay is a direct lender, licensed for lending in Ontario</h5>
							<p>PayDay makes responsible short term loans, fully compliant in all US states. <b>Our business is transparent and guided by state consumer protection laws. </b></p>
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
					<button type="button" class="close_modal_button submit btn btn-green pull-right" data-dismiss="modal" style="position: absolute;right: 20px;">×</button>
					<div class="container-fluid license scrollbar">
						<div class="col-xs-12">
							<div class="title">
								<h5>British Columbia License</h5>
							</div>
							<hr>
							<iframe id="iframe" src="/licence/{{ $licloc }}" width="100%" height="450" download></iframe>

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
								<h5>State of Nevada License will be here soon!</h5>
								<!-- <p>PayDay makes responsible short term loans, fully compliant in all American provinces. Our business is transparent and guided by provincial consumer protection laws. </p>
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
								<h4 class="modal-title">What's your state?</h4>
								<div class="ui compact menu col-sm-6">
									<select id="selectProvinceIndex" name="selectProvinceIndex" class="form-control ui dropdown item" title="States">
										<option data-loan-selected-province="false" data-loan-percent="0" value="">State</option>
										<option id="texas" data-loan-selected-province="false" data-loan-percent="15" value="texas">Texas</option>
										<option id="nevada" data-loan-selected-province="false" data-loan-percent="15" value="nevada">Nevada</option>
										<option id="missouri" data-loan-selected-province="false" data-loan-percent="18" value="missouri">Missouri</option>
										<option id="california" data-loan-selected-province="false" data-loan-percent="15" value="california">California</option>
										<option id="florida" data-loan-selected-province="false" data-loan-percent="23" value="florida">Florida</option>
										<option id="new-york" data-loan-selected-province="false" data-loan-percent="15" value="new-york">New York</option>
										<option id="illinois" data-loan-selected-province="false" data-loan-percent="15" value="illinois">Illinois</option>
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
								<h5>State of California License will be here soon!</h5>
								<!-- p>PayDay makes responsible short term loans, fully compliant in all American provinces. Our business is transparent and guided by provincial consumer protection laws. </p>
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
							**The maximum total cost of credit allowed in the state of California is $15 per $100 lent.
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
									<p class="text-center">We have operations in the state of Texas.</p>
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
								<p class="text-center">We have operations in the state of Nevada.</p>
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
								<p class="text-center">We have operations in the state of Missouri.</p>
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

				max: 5000,
				step: 10,
				value: 800,
				slide: function(event, ui) {
					$(this).find('.ui-slider-handle').html('<div class="valeur">' + ui.value + '</div>');
				},
				change: function(event, ui) {
					$(this).find('.ui-slider-handle').html('<div class="valeur">' + ui.value + '</div>');
				}
			});
			var val = 100;
			var timer = setInterval(function() {
				if (val <= 800) {
					$(".loan-slider").slider("value", val);
					val += 10;
				} else {
					clearInterval(timer);
				}
			}, 22);
		}
	});
</script>
<script>
	//document.getElementById("loan-slider").value = 800;
</script>




<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id={{ $gooid }}"></script>
<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());

	gtag('config', '{{ $gooid }}');
</script>

@yield('scripts')

<div id="loadjs"></div>


</body>

</html>
