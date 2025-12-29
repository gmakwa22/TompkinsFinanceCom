<style>
.different-section {
    background: linear-gradient(135deg, #2c3e50 0%, #34495e 50%, #2c3e50 100%);
    position: relative;
    overflow: hidden;
}

.different-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="50" cy="10" r="0.5" fill="rgba(255,255,255,0.05)"/><circle cx="10" cy="60" r="0.5" fill="rgba(255,255,255,0.05)"/><circle cx="90" cy="40" r="0.5" fill="rgba(255,255,255,0.05)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
    opacity: 0.3;
    z-index: 1;
}

.different-content {
    position: relative;
    z-index: 2;
}

.different-header {
    text-align: center;
    margin-bottom: 60px;
}

.different-header h2 {
    font-size: 3rem;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 20px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.different-header p {
    font-size: 1.2rem;
    color: #ecf0f1;
    max-width: 800px;
    margin: 0 auto;
    line-height: 1.6;
}

.feature-card {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 15px;
    padding: 30px;
    margin-bottom: 30px;
    transition: all 0.3s ease;
    height: 100%;
}

.feature-card:hover {
    transform: translateY(-5px);
    background: rgba(255, 255, 255, 0.15);
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

.feature-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #3498db, #2980b9);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
}

.feature-icon i {
    font-size: 24px;
    color: #ffffff;
}

.feature-card h5 {
    color: #ffffff;
    font-size: 1.3rem;
    font-weight: 600;
    margin-bottom: 15px;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
}

.feature-card p {
    color: #ecf0f1;
    line-height: 1.6;
    margin: 0;
}

@media (max-width: 768px) {
    .different-header h2 {
        font-size: 2.5rem;
    }

    .feature-card {
        padding: 25px;
    }
}
</style>

<section class="different-section page-section-ptb">
    <div class="container different-content">
        <div class="different-header">
            <h2>We Do Things Differently</h2>
            <p>{{$privname}} is a provider of short-term loans to help Americans get on with their lives when financial uncertainty arises. We provide safe and quick access to the funds that really make a difference in people's lives.</p>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fa fa-credit-card"></i>
                    </div>
                    <h5>Bad Credit Isn't a Deal Breaker</h5>
                    <p>If you're worried about having bad credit, don't let that stop you. It's not the only criteria. We're much more interested in your ability to make your repayments.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 mb-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fa fa-file-text-o"></i>
                    </div>
                    <h5>Don't Worry About Documents</h5>
                    <p>It's an easy, real-time, streamlined process. We've already got the necessary evaluation tools. We don't need all those pieces of paper.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 mb-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fa fa-clock-o"></i>
                    </div>
                    <h5>Your Pre-Approval is Minutes Away</h5>
                    <p>Any time of day, any day of the year, our fully automated decision system is ready to help you identify the best loan option to meet your needs. There's no stressful waiting for an answer.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 mb-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fa fa-eye"></i>
                    </div>
                    <h5>Transparent Costs</h5>
                    <p>We want you to make the best informed judgment for your situation. All our fees are fully transparent and explained. Plus, we'll answer your questions and provide you the financial planning tools you need.</p>
                </div>
            </div>
        </div>
    </div>
</section>
