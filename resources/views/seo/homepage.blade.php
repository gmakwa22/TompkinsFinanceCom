<style>
/* ===============================
   BLENDED LUXURY FINANCIAL THEME
================================ */

:root {
  --gold: #FFD700;
  --gold-soft: rgba(255, 215, 0, 0.2);
  --dark: #000000ff;
  --dark-soft: #111827;
  --text-light: #e5e7eb;
}

/* ===============================
   HERO
================================ */

.blend-hero {
  position: relative;
  padding: 7rem 0 6rem;
  background: linear-gradient(135deg, #000000ff 0%, #111827 100%);
  overflow: hidden;
  color: white;
}

/* subtle vignette */
.blend-hero::after {
  content:"";
  position:absolute;
  inset:0;
  background: radial-gradient(circle at top, rgba(255,215,0,.12), transparent 65%);
}

.blend-hero .container {
  position: relative;
  z-index: 2;
}

.hero-title {
  font-weight: 800;
  letter-spacing: -.5px;
  text-shadow: 0 6px 20px rgba(0,0,0,.45);
}

.hero-subtitle {
  display: inline-block;
  margin-top: 1.25rem;
  padding: .6rem 1.4rem;
  border-radius: 999px;
  background: rgba(255,215,0,.18);
  border: 1px solid rgba(255,215,0,.4);
  color: #FFD700;
  font-weight: 600;
  backdrop-filter: blur(10px);
}

.hero-description {
  color: #cbd5f5;
  max-width: 760px;
  margin: 2rem auto 3rem;
}

/* ===============================
   STATS (COUNTERS)
================================ */

.hero-stats {
  border-top: 1px solid rgba(255,255,255,.08);
  padding-top: 2.5rem;
}

.stat-item h3 {
  font-weight: 800;
  color: white;
}

.stat-item p {
  font-size: .85rem;
  color: #9ca3af;
}

/* ===============================
   FLOATING ICONS
================================ */

.hero-shapes {
  position: absolute;
  inset: 0;
  pointer-events: none;
  z-index: 1;
}

.shape {
  position: absolute;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background: var(--gold-soft);
  color: var(--gold);
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bold;
  font-size: 24px;
  animation: bounce 6s ease-in-out infinite;
}

.shape:nth-child(1) { left: 5%; bottom: -15%; animation-delay: 0s; }
.shape:nth-child(2) { left: 15%; bottom: -20%; animation-delay: 1s; }
.shape:nth-child(3) { left: 25%; bottom: -10%; animation-delay: 2s; }
.shape:nth-child(4) { left: 35%; bottom: -18%; animation-delay: 3s; }
.shape:nth-child(5) { left: 45%; bottom: -25%; animation-delay: 4s; }
.shape:nth-child(6) { left: 55%; bottom: -15%; animation-delay: 0.5s; }
.shape:nth-child(7) { left: 65%; bottom: -22%; animation-delay: 1.5s; }
.shape:nth-child(8) { left: 75%; bottom: -12%; animation-delay: 2.5s; }
.shape:nth-child(9) { left: 85%; bottom: -20%; animation-delay: 3.5s; }
.shape:nth-child(10){ left: 95%; bottom: -18%; animation-delay: 4.5s; }

@keyframes bounce {
  0%, 100% { transform: translateY(0) scale(1); opacity: 0; }
  25% { transform: translateY(-50vh) scale(1.1); opacity: .6; }
  50% { transform: translateY(-100vh) scale(1); opacity: 0.8; }
  75% { transform: translateY(-150vh) scale(1.05); opacity: 0.4; }
}

/* ===============================
   SECTIONS
================================ */

.section {
  padding: 2rem 0;
}

.section-header {
  max-width: 720px;
  margin: 0 auto 4rem;
  text-align: center;
}

.section-header h2 {
  font-weight: 800;
}

.section-header p {
  color: #6b7280;
}

/* ===============================
   FEATURE CARDS
================================ */

.feature-card {
  background: white;
  border-radius: 14px;
  padding: 2.25rem;
  height: 100%;
  box-shadow: 0 20px 40px rgba(0,0,0,.06);
  border: 1px solid rgba(0,0,0,.04);
}

.feature-icon {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  background: var(--gold-soft);
  color: var(--gold);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
  margin-bottom: 1.25rem;
}

.feature-card h5 {
  font-weight: 700;
}

.feature-card p {
  color: #6b7280;
  font-size: .95rem;
}

/* ===============================
   RESPONSIVE
================================ */

@media(max-width:768px){
  .blend-hero {
    padding: 5rem 0 4rem;
  }
  .hero-title {
    font-size: 2.4rem;
  }
}
</style>

<style>
/* ===============================
   LUXURY FEATURE SECTION (Matching Hero)
================================ */

.page-section-ptb.luxury-features {
  background: linear-gradient(135deg, #000000ff 0%, #111827 100%);
  color: #f8f8f8;
  position: relative;
  overflow: hidden;
  backdrop-filter: blur(8px);
}

/* Section header */
.luxury-features .section-header {
  text-align: center;
  margin-bottom: 4rem;
}

.luxury-features .section-header h2 {
  font-size: 2.8rem;
  font-weight: 800;
  color: #f5b922ff; /* gold from hero */
  text-shadow: 0 6px 18px rgba(0,0,0,0.4);
  margin-bottom: 1rem;
}

.luxury-features .section-header p {
  font-size: 1.1rem;
  color: #d1d5db;
  max-width: 700px;
  margin: 0 auto;
}

/* Feature Card */
.feature-item {
  background: rgba(55,65,81,0.85); /* slightly lighter dark card */
  border-radius: 18px;
  padding: 2rem 1.5rem;
  margin-bottom: 2.5rem;
  text-align: center;
  box-shadow: 0 12px 35px rgba(0,0,0,0.25);
  border: 1px solid rgba(212,175,55,0.2);
  transition: transform 0.35s ease, box-shadow 0.35s ease;
}

.feature-item:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 50px rgba(212,175,55,0.2);
}

/* Icon */
.feature-icon {
  background: rgba(31,41,55,0.9);
  color: #fcc740ff;
  width: 70px;
  height: 70px;
  line-height: 70px;
  border-radius: 50%;
  display: inline-block;
  font-size: 26px;
  text-align: center;
  margin-bottom: 1.25rem;
  box-shadow: 0 4px 15px rgba(212,175,55,0.15);
  transition: transform 0.35s ease, box-shadow 0.35s ease;
  animation: floatIcon 3s ease-in-out infinite alternate;
}

.feature-item:hover .feature-icon {
  transform: scale(1.15);
  box-shadow: 0 8px 25px rgba(212,175,55,0.25);
}

/* Floating effect */
@keyframes floatIcon {
  0% { transform: translateY(0); }
  50% { transform: translateY(-6px); }
  100% { transform: translateY(0); }
}

/* Headings & Text */
.feature-item h5 {
  color: #f5bc2eff;
  font-weight: 700;
  margin: 0.5rem 0;
  font-size: 1.25rem;
}

.feature-item p {
  color: #e5e7eb;
  font-size: 0.95rem;
  line-height: 1.6;
}

/* Responsive */
@media(max-width: 991px){
  .feature-item { margin-bottom: 2rem; }
}

@media(max-width: 576px){
  .section-header h2 { font-size: 2rem; }
  .feature-icon {
    width: 60px;
    height: 60px;
    line-height: 60px;
    font-size: 22px;
  }
}

/* Hover text color adjustment */
.feature-item:hover h5 {
  color: #c2a550ff; /* brighter gold on hover */
}

.feature-item:hover p {
  color: #282f3bff; /* brighter text on hover */
}
</style>

<!-- ===============================
     HERO
================================ -->

<section class="blend-hero text-center">
  <div class="container">

    <h1 class="display-4 hero-title">
      {{ $headpg ?? "INSTANT CASH WHEN YOU NEED IT MOST" }}
    </h1>

    <div class="hero-subtitle">
      {{ $headsub ?? "Fast, secure, and reliable financial solutions" }}
    </div>

    <p class="lead hero-description">
      Get the financial help you need quickly and securely. Our advanced assessment tools instantly determine your eligibility for up to $5,000.
    </p>

    <!-- COUNTERS -->
    <div class="row hero-stats justify-content-center">
      <div class="col-4 col-md-3 stat-item">
        <h3 class="counter" data-count="98">0</h3>
        <p>% Approval Rate</p>
      </div>
      <div class="col-4 col-md-3 stat-item">
        <h3 class="counter" data-count="5">0</h3>
        <p>Minute Approval</p>
      </div>
      <div class="col-4 col-md-3 stat-item">
        <h3 class="counter" data-count="5000">0</h3>
        <p>Max Amount</p>
      </div>
    </div>

  </div>

  <!-- FLOATING ICONS -->
  <div class="hero-shapes">
    <div class="shape">$</div>
    <div class="shape">$</div>
    <div class="shape">$</div>
    <div class="shape">$</div>
    <div class="shape">$</div>
    <div class="shape">$</div>
    <div class="shape">$</div>
    <div class="shape">$</div>
    <div class="shape">$</div>
    <div class="shape">$</div>
  </div>
</section>

<!-- ===============================
     FEATURES
================================ -->

<section class="section" style="background:#f8fafc;">
  <div class="container">

    <div class="section-header">
      <h2>What's the Best Loan for You?</h2>
      <p>
        Forget those line-ups down at the brick-and-mortar joint. You can apply for this loan from the comfort of your couch. Our advanced assessment tools instantly determine your eligibility.
      </p>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="feature-card">
          <div class="feature-icon"><i class="fa fa-shield"></i></div>
          <h5>Safe & Secure</h5>
          <p>Completely confidential and secure, guaranteed! We use the same high security standards like the banks.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="feature-card">
          <div class="feature-icon"><i class="fa fa-comments"></i></div>
          <h5>Expert Support</h5>
          <p>Our support staff is always ready and available to answer any questions that you may have to ensure you get the loan you need.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="feature-card">
          <div class="feature-icon"><i class="fa fa-check-circle"></i></div>
          <h5>No Hidden Fees</h5>
          <p>Our lending process has no hidden fees. What you see is what you get. That's our promise as fully compliant licensed lenders.</p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- What's the Best Loan for You? Section -->

<section class="page-section-ptb luxury-features">
  <div class="container">

    <div class="section-header">
      <h2>What's the Best Loan for You?</h2>
      <p>Forget those line-ups down at the brick-and-mortar joint. Apply from the comfort of your couch. Our advanced assessment tools instantly determine your eligibility.</p>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="feature-item">
          <div class="feature-icon"><i class="fa fa-shield"></i></div>
          <h5>Safe & Secure</h5>
          <p>Completely confidential and secure, guaranteed! We use the same high security standards like the banks.</p><br>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="feature-item">
          <div class="feature-icon"><i class="fa fa-comments"></i></div>
          <h5>Expert Support</h5>
          <p>Our support staff is always ready and available to answer any questions that you may have to ensure you get the loan you need.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="feature-item">
          <div class="feature-icon"><i class="fa fa-check-circle"></i></div>
          <h5>No Hidden Fees</h5>
          <p>Our lending process has no hidden fees. What you see is what you get. That's our promise as fully compliant licensed lenders.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="feature-item">
          <div class="feature-icon"><i class="fa fa-refresh"></i></div>
          <h5>Flexibility</h5>
          <p>Your interest fee is unchanged, whether it's better for you to pay in 1, 2 or 3 equal repayments.</p><br>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="feature-item">
          <div class="feature-icon"><i class="fa fa-eye"></i></div>
          <h5>Transparent</h5>
          <p>Our lending process has no hidden fees. What you see is what you get. That's our promise as fully compliant licensed lenders.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="feature-item">
          <div class="feature-icon"><i class="fa fa-bolt"></i></div>
          <h5>Fast</h5>
          <p>You'll know instantly when you're approved for your loan and what repayment schedule of 1, 2 or 3 installments best suits your needs.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Us Section -->
<section class="page-section-ptb" style="background: white;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center mb-5">
        <h2 class="display-5 fw-bold" 
    style="
      color: #fac338ff; /* luxury gold fill */
      text-shadow: 2px 2px 6px rgba(0,0,0,0.25); /* soft shadow for depth */
      -webkit-text-stroke: 1px rgba(0, 0, 0, 0.8); /* dark gold border/outline */
      letter-spacing: 1px;
    ">
  Why Choose {{$privname}}?
</h2>
<p class="lead" 
   style="
     color: #4b4b4b; 
     text-shadow: 0 1px 2px rgba(245,210,122,0.2);
     max-width: 700px; 
     margin: 0.5rem auto 0;
   ">
  Here are the key reasons why we're the top choice for responsible lending
</p>

      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 mb-4">
        <div class="modern-card p-4" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); height: 100%;">
          <div class="d-flex align-items-start">
            <div class="me-3">
              {{-- GOLD GRADIENT: Remove inline style to revert to original purple/blue --}}
              <div class="feature-icon" style="width: 50px; height: 50px; background: linear-gradient(135deg, #FFD700 0%, #FFA500 50%, #FFD700 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px; box-shadow: 0 4px 15px rgba(255, 215, 0, 0.3);">
                <i class="fa fa-credit-card"></i>
              </div>
            </div>
            <div>
              <h4 class="fw-bold mb-3" style="color: #2c3e50;">No Credit Check Required</h4>
              <p class="text-muted">A less-than-perfect credit history shouldn't stand in your way. We focus on your current capacity to fulfill repayments rather than past difficulties.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="modern-card p-4" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); height: 100%;">
          <div class="d-flex align-items-start">
            <div class="me-3">
              {{-- GOLD GRADIENT: Remove inline style to revert to original purple/blue --}}
              <div class="feature-icon" style="width: 50px; height: 50px; background: linear-gradient(135deg, #FFD700 0%, #FFA500 50%, #FFD700 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px; box-shadow: 0 4px 15px rgba(255, 215, 0, 0.3);">
                <i class="fa fa-clock-o"></i>
              </div>
            </div>
            <div>
              <h4 class="fw-bold mb-3" style="color: #2c3e50;">High Approval Rates</h4>
              <p class="text-muted">Our streamlined process allows you to secure a loan effortlessly from home. In most instances, loans are disbursed within minutes using our cutting-edge approval system.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>