<footer class="footer page-section-pt" style="background: #0a0a0a; position: relative; overflow: hidden; border-top: 1px solid rgba(212, 175, 55, 0.2);">
    <!-- Gold Accent Border -->
    <div style="position: absolute; top: 0; left: 0; right: 0; height: 3px; background: linear-gradient(90deg, #d4af37, #f7ef8a, #d4af37);"></div>

    <div class="container">
        <div class="row g-4">
            <!-- Company Info Column - Wider -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="footer-useful-link">


<!-- Logo Section -->
<div class="d-flex align-items-center mb-4">
    <!-- Your logo - Removed the unnecessary container div -->
    <img src="{{ asset('loansusa.png') }}" alt="Payday Loans USA" 
         style="width: 300px; height: auto; max-height: 500px; object-fit: contain; margin-right: 15px;">
</div>
                    
                    <p class="mb-4" style="color: #d0d0d0; line-height: 1.7; font-size: 0.95rem; font-weight: 300;">
                        Your trusted Austin neighbors, here to help when you need it most. Fast, secure, and transparent lending solutions designed to get you back on track.
                    </p>

                    <!-- Contact Info -->
                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <div style="width: 32px; height: 32px; background: rgba(212, 175, 55, 0.1); border-radius: 6px; display: flex; align-items: center; justify-content: center; margin-right: 12px; border: 1px solid rgba(212, 175, 55, 0.3);">
                                <i class="fa fa-envelope" style="color: #d4af37; font-size: 0.9rem;"></i>
                            </div>
                            <span style="color: #f0f0f0; font-weight: 300;">{{ $suportemail }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Links Column -->
            <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                <div class="footer-useful-link">
                    <h6 class="mb-4 mt-2 text-uppercase fw-bold" style="font-size: 1.1rem; letter-spacing: 1.5px; position: relative; padding-bottom: 12px;">
                        <span style="background: linear-gradient(45deg, #d4af37, #f7ef8a, #d4af37); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-weight: 700;">Quick Links</span>
                        <span style="position: absolute; bottom: 0; left: 0; width: 80px; height: 3px; background: linear-gradient(90deg, #d4af37, #f7ef8a, #d4af37); border-radius: 2px;"></span>
                    </h6>
                    <ul style="list-style: none; padding: 0;">
                        <li class="mb-3">
                            <a href="{{ url('/why-choose-us') }}" class="footer-link" style="color: #e0e0e0; text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center; font-weight: 400; font-size: 0.95rem; position: relative; padding-left: 0;">
                                <span style="color: #d4af37; font-size: 0.7rem; margin-right: 10px; opacity: 0; transition: all 0.3s ease;">></span>
                                <span>What we offer</span>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="{{ url('/how-its-done') }}" class="footer-link" style="color: #e0e0e0; text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center; font-weight: 400; font-size: 0.95rem; position: relative; padding-left: 0;">
                                <span style="color: #d4af37; font-size: 0.7rem; margin-right: 10px; opacity: 0; transition: all 0.3s ease;">></span>
                                <span>How it's done</span>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="{{ Session::get('purl') ?? $corpregister }}" class="footer-link" style="color: #e0e0e0; text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center; font-weight: 400; font-size: 0.95rem; position: relative; padding-left: 0;">
                                <span style="color: #d4af37; font-size: 0.7rem; margin-right: 10px; opacity: 0; transition: all 0.3s ease;">></span>
                                <span>Apply now</span>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="{{ url('/sitemap') }}" class="footer-link" style="color: #e0e0e0; text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center; font-weight: 400; font-size: 0.95rem; position: relative; padding-left: 0;">
                                <span style="color: #d4af37; font-size: 0.7rem; margin-right: 10px; opacity: 0; transition: all 0.3s ease;">></span>
                                <span>Site Map</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Services Column -->
            <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                <div class="footer-useful-link">
                    <h6 class="mb-4 mt-2 text-uppercase fw-bold" style="font-size: 1.1rem; letter-spacing: 1.5px; position: relative; padding-bottom: 12px;">
                        <span style="background: linear-gradient(45deg, #d4af37, #f7ef8a, #d4af37); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-weight: 700;">Services</span>
                        <span style="position: absolute; bottom: 0; left: 0; width: 80px; height: 3px; background: linear-gradient(90deg, #d4af37, #f7ef8a, #d4af37); border-radius: 2px;"></span>
                    </h6>
                    <ul style="list-style: none; padding: 0;">
                        <li class="mb-3">
                            <a href="{{url('/installment-loans-usa')}}" class="footer-link" style="color: #e0e0e0; text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center; font-weight: 400; font-size: 0.95rem; position: relative; padding-left: 0;">
                                <span style="color: #d4af37; font-size: 0.7rem; margin-right: 10px; opacity: 0; transition: all 0.3s ease;">></span>
                                <span>Installment Loans</span>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="{{url('/payday-advance')}}" class="footer-link" style="color: #e0e0e0; text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center; font-weight: 400; font-size: 0.95rem; position: relative; padding-left: 0;">
                                <span style="color: #d4af37; font-size: 0.7rem; margin-right: 10px; opacity: 0; transition: all 0.3s ease;">></span>
                                <span>Payday Advance</span>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="{{url('/payday-loans-near-me')}}" class="footer-link" style="color: #e0e0e0; text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center; font-weight: 400; font-size: 0.95rem; position: relative; padding-left: 0;">
                                <span style="color: #d4af37; font-size: 0.7rem; margin-right: 10px; opacity: 0; transition: all 0.3s ease;">></span>
                                <span>Payday Loans Near Me</span>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="{{url('/short-term-loans-usa')}}" class="footer-link" style="color: #e0e0e0; text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center; font-weight: 400; font-size: 0.95rem; position: relative; padding-left: 0;">
                                <span style="color: #d4af37; font-size: 0.7rem; margin-right: 10px; opacity: 0; transition: all 0.3s ease;">></span>
                                <span>Short Term Loans USA</span>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="{{url('/same-day-payday-loans')}}" class="footer-link" style="color: #e0e0e0; text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center; font-weight: 400; font-size: 0.95rem; position: relative; padding-left: 0;">
                                <span style="color: #d4af37; font-size: 0.7rem; margin-right: 10px; opacity: 0; transition: all 0.3s ease;">></span>
                                <span>Same Day Payday Loans</span>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="{{url('/emergency-loans')}}" class="footer-link" style="color: #e0e0e0; text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center; font-weight: 400; font-size: 0.95rem; position: relative; padding-left: 0;">
                                <span style="color: #d4af37; font-size: 0.7rem; margin-right: 10px; opacity: 0; transition: all 0.3s ease;">></span>
                                <span>Emergency Loans</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Texas Cities Column -->
            <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                <div class="footer-useful-link">
                    <h6 class="mb-4 mt-2 text-uppercase fw-bold" style="font-size: 1.1rem; letter-spacing: 1.5px; position: relative; padding-bottom: 12px;">
                        <span style="background: linear-gradient(45deg, #d4af37, #f7ef8a, #d4af37); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-weight: 700;">Texas Cities</span>
                        <span style="position: absolute; bottom: 0; left: 0; width: 80px; height: 3px; background: linear-gradient(90deg, #d4af37, #f7ef8a, #d4af37); border-radius: 2px;"></span>
                    </h6>
                    <ul style="list-style: none; padding: 0;">
                        <li class="mb-3">
                            <a href="{{ url('/payday-loans-austin') }}" class="footer-link" style="color: #e0e0e0; text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center; font-weight: 400; font-size: 0.95rem; position: relative; padding-left: 0;">
                                <span style="color: #d4af37; font-size: 0.7rem; margin-right: 10px; opacity: 0; transition: all 0.3s ease;">></span>
                                <span>Austin</span>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="{{ url('/payday-loans-houston') }}" class="footer-link" style="color: #e0e0e0; text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center; font-weight: 400; font-size: 0.95rem; position: relative; padding-left: 0;">
                                <span style="color: #d4af37; font-size: 0.7rem; margin-right: 10px; opacity: 0; transition: all 0.3s ease;">></span>
                                <span>Houston</span>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="{{ url('/payday-loans-dallas') }}" class="footer-link" style="color: #e0e0e0; text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center; font-weight: 400; font-size: 0.95rem; position: relative; padding-left: 0;">
                                <span style="color: #d4af37; font-size: 0.7rem; margin-right: 10px; opacity: 0; transition: all 0.3s ease;">></span>
                                <span>Dallas</span>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="{{ url('/payday-loans-san-antonio') }}" class="footer-link" style="color: #e0e0e0; text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center; font-weight: 400; font-size: 0.95rem; position: relative; padding-left: 0;">
                                <span style="color: #d4af37; font-size: 0.7rem; margin-right: 10px; opacity: 0; transition: all 0.3s ease;">></span>
                                <span>San Antonio</span>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="{{ url('/payday-loans-fort-worth') }}" class="footer-link" style="color: #e0e0e0; text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center; font-weight: 400; font-size: 0.95rem; position: relative; padding-left: 0;">
                                <span style="color: #d4af37; font-size: 0.7rem; margin-right: 10px; opacity: 0; transition: all 0.3s ease;">></span>
                                <span>Fort Worth</span>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="{{ url('/payday-loans-el-paso') }}" class="footer-link" style="color: #e0e0e0; text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center; font-weight: 400; font-size: 0.95rem; position: relative; padding-left: 0;">
                                <span style="color: #d4af37; font-size: 0.7rem; margin-right: 10px; opacity: 0; transition: all 0.3s ease;">></span>
                                <span>El Paso</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Legal & Support Column -->
            <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                <div class="footer-useful-link">
                    <h6 class="mb-4 mt-2 text-uppercase fw-bold" style="font-size: 1.1rem; letter-spacing: 1.5px; position: relative; padding-bottom: 12px;">
                        <span style="background: linear-gradient(45deg, #d4af37, #f7ef8a, #d4af37); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-weight: 700;">Legal & Support</span>
                        <span style="position: absolute; bottom: 0; left: 0; width: 80px; height: 3px; background: linear-gradient(90deg, #d4af37, #f7ef8a, #d4af37); border-radius: 2px;"></span>
                    </h6>
                    <ul style="list-style: none; padding: 0;">
                        <li class="mb-3">
                            <a href="{{ url('/privacy-policy') }}" class="footer-link" style="color: #e0e0e0; text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center; font-weight: 400; font-size: 0.95rem; position: relative; padding-left: 0;">
                                <span style="color: #d4af37; font-size: 0.7rem; margin-right: 10px; opacity: 0; transition: all 0.3s ease;">></span>
                                <span>Privacy Policy</span>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="{{ url('/responsible-lending') }}" class="footer-link" style="color: #e0e0e0; text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center; font-weight: 400; font-size: 0.95rem; position: relative; padding-left: 0;">
                                <span style="color: #d4af37; font-size: 0.7rem; margin-right: 10px; opacity: 0; transition: all 0.3s ease;">></span>
                                <span>Responsible Lending</span>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="{{ url('/terms-conditions') }}" class="footer-link" style="color: #e0e0e0; text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center; font-weight: 400; font-size: 0.95rem; position: relative; padding-left: 0;">
                                <span style="color: #d4af37; font-size: 0.7rem; margin-right: 10px; opacity: 0; transition: all 0.3s ease;">></span>
                                <span>Terms & Conditions</span>
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="{{ url('/faq') }}" class="footer-link" style="color: #e0e0e0; text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center; font-weight: 400; font-size: 0.95rem; position: relative; padding-left: 0;">
                                <span style="color: #d4af37; font-size: 0.7rem; margin-right: 10px; opacity: 0; transition: all 0.3s ease;">></span>
                                <span>FAQ</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Trust Indicators Section -->
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <div class="text-center py-4" style="background: rgba(212, 175, 55, 0.05); border-radius: 12px; border: 1px solid rgba(212, 175, 55, 0.15); backdrop-filter: blur(10px);">
                    <div class="row align-items-center justify-content-center g-4">
                        <div class="col-lg-3 col-md-3 col-sm-6 mb-3 mb-md-0">
                            <div class="d-flex align-items-center justify-content-center">
                                <div style="width: 48px; height: 48px; background: linear-gradient(135deg, rgba(212, 175, 55, 0.2), rgba(212, 175, 55, 0.1)); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-right: 15px; border: 1px solid rgba(212, 175, 55, 0.3);">
                                    <i class="fa fa-shield fa-lg" style="color: #d4af37;"></i>
                                </div>
                                <div class="text-start">
                                    <div class="text-white fw-bold mb-1" style="font-size: 0.95rem;">SSL Secured</div>
                                    <div class="text-white-50" style="font-size: 0.8rem; font-weight: 300;">256-bit Encryption</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 mb-3 mb-md-0">
                            <div class="d-flex align-items-center justify-content-center">
                                <div style="width: 48px; height: 48px; background: linear-gradient(135deg, rgba(212, 175, 55, 0.2), rgba(212, 175, 55, 0.1)); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-right: 15px; border: 1px solid rgba(212, 175, 55, 0.3);">
                                    <i class="fa fa-check-circle fa-lg" style="color: #d4af37;"></i>
                                </div>
                                <div class="text-start">
                                    <div class="text-white fw-bold mb-1" style="font-size: 0.95rem;">Licensed</div>
                                    <div class="text-white-50" style="font-size: 0.8rem; font-weight: 300;">Texas Regulated</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 mb-3 mb-md-0">
                            <div class="d-flex align-items-center justify-content-center">
                                <div style="width: 48px; height: 48px; background: linear-gradient(135deg, rgba(212, 175, 55, 0.2), rgba(212, 175, 55, 0.1)); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-right: 15px; border: 1px solid rgba(212, 175, 55, 0.3);">
                                    <i class="fa fa-clock-o fa-lg" style="color: #d4af37;"></i>
                                </div>
                                <div class="text-start">
                                    <div class="text-white fw-bold mb-1" style="font-size: 0.95rem;">24/7 Support</div>
                                    <div class="text-white-50" style="font-size: 0.8rem; font-weight: 300;">Always Available</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 mb-3 mb-md-0">
                            <div class="d-flex align-items-center justify-content-center">
                                <div style="width: 48px; height: 48px; background: linear-gradient(135deg, rgba(212, 175, 55, 0.2), rgba(212, 175, 55, 0.1)); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-right: 15px; border: 1px solid rgba(212, 175, 55, 0.3);">
                                    <i class="fa fa-star fa-lg" style="color: #d4af37;"></i>
                                </div>
                                <div class="text-start">
                                    <div class="text-white fw-bold mb-1" style="font-size: 0.95rem;">Trusted</div>
                                    <div class="text-white-50" style="font-size: 0.8rem; font-weight: 300;">Community Focused</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-widget pt-4" style="border-top: 1px solid rgba(255, 255, 255, 0.1);">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-3 mb-md-0">
                    <p class="mb-0" style="color: #d0d0d0; font-size: 0.85rem; font-weight: 300;">
                        ©Copyright <span id="copyright">
                            <script>
                                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                            </script>
                        </span> <a href="" style="color: #d4af37; text-decoration: none; font-weight: 400;">{{ $privname }}</a> All Rights Reserved | Licensed in Texas
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-left text-md-right">
                    <div class="social-icons">
                        <span style="color: #d0d0d0; font-size: 0.85rem; font-weight: 300;">
                            "Keep Austin Weird!" - Serving the Live Music Capital since day 
                            <span class="hover-popup" style="position: relative; cursor: pointer; color: #d0d0d0; transition: all 0.3s ease; font-weight: 400;"
                                  onmouseover="showPopup(this)"
                                  onmouseout="hidePopup(this)">one.
                                <div class="popup-content" style="position: absolute; bottom: 100%; left: 50%; transform: translateX(-50%); background: #1a1a1a; color: #d4af37; padding: 8px 12px; border-radius: 6px; font-size: 0.8rem; white-space: nowrap; box-shadow: 0 4px 20px rgba(0,0,0,0.5); z-index: 1000; display: none; margin-bottom: 8px; border: 1px solid rgba(212, 175, 55, 0.3); backdrop-filter: blur(10px);">
                                    Austin 1
                                    <div style="position: absolute; top: 100%; left: 50%; transform: translateX(-50%); width: 0; height: 0; border-left: 5px solid transparent; border-right: 5px solid transparent; border-top: 5px solid rgba(212, 175, 55, 0.3);"></div>
                                </div>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    .footer-link:hover {
        color: #d4af37 !important;
        padding-left: 10px !important;
    }
    
    .footer-link:hover span:first-child {
        opacity: 1 !important;
    }
    
    .hover-popup:hover {
        text-shadow: 0 0 8px rgba(212, 175, 55, 0.3);
    }
    
    /* Make all columns equal height on desktop */
    @media (min-width: 992px) {
        .footer-useful-link {
            height: 100%;
        }
    }
</style>

<script>
function showPopup(element) {
    const popup = element.querySelector('.popup-content');
    if (popup) {
        popup.style.display = 'block';
    }
}

function hidePopup(element) {
    const popup = element.querySelector('.popup-content');
    if (popup) {
        popup.style.display = 'none';
    }
}
</script>