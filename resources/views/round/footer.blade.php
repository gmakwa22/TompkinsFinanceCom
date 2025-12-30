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
                            Your trusted Austin neighbors, here to help when you need it most. Fast, secure, and transparent lending solutions designed to get you back on track.
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
                            <li class="mb-2">
                                <a href="{{url('/short-term-loans-usa')}}" class="footer-link" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;" onmouseover="this.style.color='#3498db'; this.style.paddingLeft='8px'" onmouseout="this.style.color='rgba(255,255,255,0.7)'; this.style.paddingLeft='0'">
                                    <i class="fa fa-arrow-right me-2" style="font-size: 0.8rem;"></i>Short Term Loans USA
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{url('/same-day-payday-loans')}}" class="footer-link" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;" onmouseover="this.style.color='#3498db'; this.style.paddingLeft='8px'" onmouseout="this.style.color='rgba(255,255,255,0.7)'; this.style.paddingLeft='0'">
                                    <i class="fa fa-arrow-right me-2" style="font-size: 0.8rem;"></i>Same Day Payday Loans
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{url('/emergency-loans')}}" class="footer-link" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;" onmouseover="this.style.color='#3498db'; this.style.paddingLeft='8px'" onmouseout="this.style.color='rgba(255,255,255,0.7)'; this.style.paddingLeft='0'">
                                    <i class="fa fa-arrow-right me-2" style="font-size: 0.8rem;"></i>Emergency Loans
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 sm-mb-30">
                    <div class="footer-useful-link footer-hedding">
                        <h6 class="text-white mb-30 mt-10 text-uppercase fw-bold" style="font-size: 1.1rem; color: #ecf0f1; border-bottom: 2px solid #3498db; padding-bottom: 8px; display: inline-block;">
                            <i class="fa fa-map-marker me-2"></i>Texas Cities
                        </h6>
                        <ul class="addresss-info" style="list-style: none; padding: 0;">
                            <li class="mb-2">
                                <a href="{{ url('/payday-loans-houston') }}" class="footer-link" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;" onmouseover="this.style.color='#3498db'; this.style.paddingLeft='8px'" onmouseout="this.style.color='rgba(255,255,255,0.7)'; this.style.paddingLeft='0'">
                                    <i class="fa fa-arrow-right me-2" style="font-size: 0.8rem;"></i>Houston
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ url('/payday-loans-dallas') }}" class="footer-link" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;" onmouseover="this.style.color='#3498db'; this.style.paddingLeft='8px'" onmouseout="this.style.color='rgba(255,255,255,0.7)'; this.style.paddingLeft='0'">
                                    <i class="fa fa-arrow-right me-2" style="font-size: 0.8rem;"></i>Dallas
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ url('/payday-loans-san-antonio') }}" class="footer-link" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;" onmouseover="this.style.color='#3498db'; this.style.paddingLeft='8px'" onmouseout="this.style.color='rgba(255,255,255,0.7)'; this.style.paddingLeft='0'">
                                    <i class="fa fa-arrow-right me-2" style="font-size: 0.8rem;"></i>San Antonio
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ url('/payday-loans-austin') }}" class="footer-link" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;" onmouseover="this.style.color='#3498db'; this.style.paddingLeft='8px'" onmouseout="this.style.color='rgba(255,255,255,0.7)'; this.style.paddingLeft='0'">
                                    <i class="fa fa-arrow-right me-2" style="font-size: 0.8rem;"></i>Austin
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ url('/payday-loans-fort-worth') }}" class="footer-link" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;" onmouseover="this.style.color='#3498db'; this.style.paddingLeft='8px'" onmouseout="this.style.color='rgba(255,255,255,0.7)'; this.style.paddingLeft='0'">
                                    <i class="fa fa-arrow-right me-2" style="font-size: 0.8rem;"></i>Fort Worth
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ url('/payday-loans-el-paso') }}" class="footer-link" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;" onmouseover="this.style.color='#3498db'; this.style.paddingLeft='8px'" onmouseout="this.style.color='rgba(255,255,255,0.7)'; this.style.paddingLeft='0'">
                                    <i class="fa fa-arrow-right me-2" style="font-size: 0.8rem;"></i>El Paso
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 sm-mb-30">
                    <div class="footer-logo">
                        <h6 class="text-white mb-30 mt-10 text-uppercase fw-bold" style="font-size: 1.1rem; color: #ecf0f1; border-bottom: 2px solid #3498db; padding-bottom: 8px; display: inline-block;">
                            <i class="fa fa-shield me-2"></i>Legal & Support
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
                            <li class="mb-2">
                                <a href="{{ url('/faq') }}" class="footer-link" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease; display: flex; align-items: center;" onmouseover="this.style.color='#3498db'; this.style.paddingLeft='8px'" onmouseout="this.style.color='rgba(255,255,255,0.7)'; this.style.paddingLeft='0'">
                                    <i class="fa fa-arrow-right me-2" style="font-size: 0.8rem;"></i>FAQ
                                </a>
                            </li>
                        </ul>
                    </div>
                    </div>
                </div>

            <!-- Trust Indicators Section -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="text-center py-4" style="background: rgba(52, 152, 219, 0.1); border-radius: 15px; border: 1px solid rgba(52, 152, 219, 0.3);">
                        <div class="row align-items-center">
                            <div class="col-md-3 mb-3 mb-md-0">
                                <div class="d-flex align-items-center justify-content-center">
                                    {{-- GOLD GRADIENT: Change color back to #3498db to revert to original blue --}}
                                    <i class="fa fa-shield fa-2x me-3" style="color: #FFD700; text-shadow: 0 2px 4px rgba(255, 215, 0, 0.3);"></i>
                                    <div class="text-start">
                                        <div class="text-white fw-bold" style="font-size: 1rem;">SSL Secured</div>
                                        <div class="text-white-50" style="font-size: 0.8rem;">256-bit Encryption</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3 mb-md-0">
                                <div class="d-flex align-items-center justify-content-center">
                                    {{-- GOLD GRADIENT: Change color back to #3498db to revert to original blue --}}
                                    <i class="fa fa-check-circle fa-2x me-3" style="color: #FFD700; text-shadow: 0 2px 4px rgba(255, 215, 0, 0.3);"></i>
                                    <div class="text-start">
                                        <div class="text-white fw-bold" style="font-size: 1rem;">Licensed</div>
                                        <div class="text-white-50" style="font-size: 0.8rem;">Texas Regulated</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3 mb-md-0">
                                <div class="d-flex align-items-center justify-content-center">
                                    {{-- GOLD GRADIENT: Change color back to #3498db to revert to original blue --}}
                                    <i class="fa fa-clock-o fa-2x me-3" style="color: #FFD700; text-shadow: 0 2px 4px rgba(255, 215, 0, 0.3);"></i>
                                    <div class="text-start">
                                        <div class="text-white fw-bold" style="font-size: 1rem;">24/7 Support</div>
                                        <div class="text-white-50" style="font-size: 0.8rem;">Always Available</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3 mb-md-0">
                                <div class="d-flex align-items-center justify-content-center">
                                    {{-- GOLD GRADIENT: Change color back to #3498db to revert to original blue --}}
                                    <i class="fa fa-star fa-2x me-3" style="color: #FFD700; text-shadow: 0 2px 4px rgba(255, 215, 0, 0.3);"></i>
                                    <div class="text-start">
                                        <div class="text-white fw-bold" style="font-size: 1rem;">Trusted</div>
                                        <div class="text-white-50" style="font-size: 0.8rem;">Community Focused</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-widget">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <p class="text-white-50 mb-0" style="font-size: 0.9rem;">
                        ©Copyright <span id="copyright">
                                <script>
                                    document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                                </script>
                        </span> <a href="{{ $privurl }}" class="text-white" style="text-decoration: none;">{{ $privname }}</a> All Rights Reserved | Licensed in Texas
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 text-left text-md-right">
                        <div class="social-icons color-hover">
                        <span class="text-white-50" style="font-size: 0.9rem;"> "Keep Austin Weird!" - Serving the Live Music Capital since day
                            <span class="hover-popup" style="position: relative; cursor: pointer; color: inherit; transition: color 0.2s ease;"
                                  onmouseover="showPopup(this)"
                                  onmouseout="hidePopup(this)">one
                                <div class="popup-content" style="position: absolute; bottom: 100%; left: 50%; transform: translateX(-50%); background: #2c3e50; color: white; padding: 6px 10px; border-radius: 4px; font-size: 0.75rem; white-space: nowrap; box-shadow: 0 2px 8px rgba(0,0,0,0.4); z-index: 1000; display: none; margin-bottom: 3px; opacity: 0.9;">
                                    Austin 1
                                    <div style="position: absolute; top: 100%; left: 50%; transform: translateX(-50%); width: 0; height: 0; border-left: 4px solid transparent; border-right: 4px solid transparent; border-top: 4px solid #2c3e50;"></div>
                        </div>
                            </span>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

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
