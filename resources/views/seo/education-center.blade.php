<!-- Modern Hero Section -->
<section class="page-section-ptb theme-bg pgs-background custom-bg-image" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); position: relative; overflow: hidden; z-index: 10;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 mx-auto text-center">
        <div class="hero-content text-white">
          <h1 class="display-4 fw-bold mb-4 hero-title">
            Education Center
          </h1>
          {{-- GOLD DESIGN: Remove inline style below to revert to original white background --}}
          <h2 class="h3 mb-4 hero-subtitle" style="padding: .5em 1em; background: linear-gradient(135deg, rgba(255, 215, 0, 0.3) 0%, rgba(255, 184, 28, 0.4) 100%); color: #FFD700; border: 2px solid rgba(255, 215, 0, 0.5); border-radius: 8px; display: inline-block; backdrop-filter: blur(10px); text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); box-shadow: 0 4px 15px rgba(255, 215, 0, 0.2);">
            Be Informed - Make the best choice for your financial situation
          </h2>
          <p class="lead mb-4 hero-description">
            Knowledge is power when it comes to financial decisions. Learn everything you need to know about responsible borrowing and making informed choices.
          </p>
          <div class="hero-stats row justify-content-center">
            <div class="col-4 col-md-3">
              <div class="stat-item text-center">
                <h3 class="counter text-white fw-bold" data-count="6">0</h3>
                <p class="mb-0 stat-label">Key Factors</p>
              </div>
            </div>
            <div class="col-4 col-md-3">
              <div class="stat-item text-center">
                <h3 class="counter text-white fw-bold" data-count="5">0</h3>
                <p class="mb-0 stat-label">Reasons to Choose Us</p>
              </div>
            </div>
            <div class="col-4 col-md-3">
              <div class="stat-item text-center">
                <h3 class="counter text-white fw-bold" data-count="100">0</h3>
                <p class="mb-0 stat-label">% Transparent</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Animated Background Elements -->
  <div class="hero-shapes">
    <div class="shape shape-1">
      <span class="cash-symbol">$</span>
    </div>
    <div class="shape shape-2">
      <span class="cash-symbol">$</span>
    </div>
    <div class="shape shape-3">
      <span class="cash-symbol">$</span>
    </div>
    <div class="shape shape-4">
      <span class="cash-symbol">$</span>
    </div>
    <div class="shape shape-5">
      <span class="cash-symbol">$</span>
    </div>
  </div>
</section>

@include('round.bestboxes')

@include('round.fivereasons')

@include('round.loan-fees')

@include('round.new-agent')
