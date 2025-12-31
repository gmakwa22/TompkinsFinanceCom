<style>
/* ===============================
   LUXURY GOLD HERO SECTION
================================ */

/* ===== VARIABLES FOR EASY ADJUSTMENTS ===== */
:root {
  --luxury-glass-height: 850px;   /* height of the glass card */
  --luxury-glass-offset: 120px;    /* move glass up/down */
  --phone-card-offset: -120px;     /* move entire phone (and all icons) vertically */
}

.luxury-hero {
  position: relative;
  overflow: visible;
  min-height: 100vh; /* video height */
  padding-top: 6vh;
  padding-bottom: 2vh;
}

.luxury-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(
    rgba(0,0,0,0.28),
    rgba(0,0,0,0.55)
  );
  z-index: 1;
}

/* CONTENT LAYER */
.luxury-hero .container {
  position: relative;
  z-index: 2;
}

/* LEFT CONTENT */
.headermarg {
  margin-top: 18vh;
}

.luxury-title-box {
  padding: 2rem 1rem;
}

/* TITLE */
.luxury-title {
  color: #f5d27a;
  letter-spacing: 1.5px;
  line-height: 1.1;
  text-shadow: 0 6px 18px rgba(0,0,0,0.4);
}

/* SUBTITLE */
.luxury-subtitle {
  margin-top: 1rem;
  font-size: 1.3rem;
}

.luxury-mark {
  background: linear-gradient(135deg, #d4af37, #f7e7a1);
  color: #111;
  padding: 0.45rem 1.2rem;
  border-radius: 30px;
  font-weight: 600;
  display: inline-block;
}

/* GOLD DIVIDER */
.luxury-divider {
  position: relative;
  width: 320px;
  max-width: 100%;
  height: 3px;
  margin: 2rem auto;
  background: rgba(212,175,55,0.25);
  overflow: hidden;
  border-radius: 3px;
}

.luxury-divider::after {
  content: "";
  position: absolute;
  top: 0;
  left: -25%;
  width: 25%;
  height: 100%;
  background: linear-gradient(
    90deg,
    transparent,
    #f7e7a1,
    #d4af37,
    transparent
  );
  animation: goldSweep 3.2s ease-in-out infinite;
}

@keyframes goldSweep {
  0%   { left: -25%; }
  100% { left: 100%; }
}

/* TAGLINE */
.luxury-tagline {
  color: #e6e6e6;
  font-size: 1rem;
  letter-spacing: 1px;
  text-transform: uppercase;
}

/* PHONE COLUMN */
.luxury-phone-wrapper {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  position: relative;
}

/* GLASS EFFECT — adjustable height & vertical position */
.luxury-glass {
  background: rgba(210,255,255,0.1);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
  border-radius: 18px;
  border: 1px solid rgba(212,175,55,0.45);
  box-shadow: 0 18px 55px rgba(0,0,0,0.45);

  position: relative;
  margin-top: var(--luxury-glass-offset);
  height: var(--luxury-glass-height);
}

/* PHONE CARD — move entire card instead of individual image */
.luxury-phone-card {
  padding: 1.5rem;
  overflow: visible; 
  position: relative;
  top: var(--phone-card-offset);
}

/* MOBILE */
@media (max-width: 991px) {
  .luxury-hero {
    min-height: 100vh;
    padding-bottom: 2vh;
  }

  .headermarg {
    margin-top: 10vh;
  }

  .luxury-title {
    font-size: 2.6rem;
    text-align: center;
  }

  .luxury-tagline {
    text-align: center;
  }

  .luxury-glass {
    margin-top: calc(var(--luxury-glass-offset)/1.5);
    height: calc(var(--luxury-glass-height)/1.2);
  }

  .luxury-phone-card {
    top: calc(var(--phone-card-offset)/1.5);
  }
}
</style>

<section 
  class="slider-parallax bg-overlay-black-10 parallax luxury-hero"
  data-jarallax='{"speed": 0.6}'
  data-jarallax-video="mp4:/video2.mp4"
  style="background-image: url(/houston.jpg);"
>
  <div class="luxury-overlay"></div>

  <div class="container spcontainer">
    <div class="row">

      <!-- LEFT CONTENT -->
      <div class="col-lg-7 headermarg text-center text-lg-left">
        <div class="page-title-name luxury-title-box">
          <h1 class="display-2 headertext font-weight-bold luxury-title">
            {{ $headpg ?? "AUSTIN'S MOST RELIABLE PAYDAY LOAN" }}
          </h1>

          <p class="luxury-subtitle">
            <span class="luxury-mark">
              {{ $headsub ?? "WE SOLVE CASH PROBLEMS—INSTANTLY!" }}
            </span>
          </p>

          <div class="luxury-divider"></div>

          <p class="luxury-tagline">
            Fast approvals • Secure process • Trusted locally
          </p>
        </div>
      </div>

      <!-- RIGHT PHONE -->
      <div class="phonecalculator col-xs-12 col-sm-5 f-right luxury-phone-wrapper">
        @if(isset($headphonehide))
          <div class="nophone luxury-glass"></div>
        @else
          <div class="luxury-glass luxury-phone-card">
            @include('round.phone-main')
          </div>
        @endif
      </div>

    </div>
  </div>
</section>

<div class="clearfix"></div>
