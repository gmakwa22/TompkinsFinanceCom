<section class="phonesection">
    <div id="phone">
        <div class="phone-form">
            <form action="">
                <div class="form-field">
                    <label>
                        <p>What loan amount would you like?</p>
                    </label>
                    <input type="hidden" name="sum" value="800">
                    <div id="top-slider">
                        <div class="background" id="top-slider-background">
                            <div class="scale" id="scale">
                                <div class="background-scale"></div>
                            </div>
                        </div>
                        <div class="button-scale" id="button-scale">
                            <div id="top-slider-button">
                                <img src="/images2/Phone/cursor.png" alt="get cash fast" >
                            </div>
                        </div>
                        <div class="white-block" id="scale-block">
                            <div class="white-block-background" id="white-block-background"></div>
                        </div>
                        <div class="amount-block">
                            <div class="dollar"><img src="/images2/Phone/dollar.png" alt="get cash fast"></div>
                            <div id="amount" class="amount">800</div>
                        </div>
                        <div class="buttons">
                            <button class="button small-button reduce-button" id="reduceSum">
                                <img src="/images2/Phone//minus-solid.svg" alt="get cash fast">
                            </button>
                            <button class="button small-button add-button"  id="addSum">
                                <img src="/images2/Phone/plus-solid.svg" alt="get cash fast">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="form-field info-field">
                    <label>
                        <p>Want to know how many repayments?</p>
                    </label>
                    <div class="terms-slider" id="terms-slider">
                        <div class="items">
                            <div class="item active" data-value="1" id="item1">
                            </div>
                            <div class="item" data-value="2" id="item2">
                            </div>
                            <div class="item" data-value="3" id="item3">
                            </div>

                            <div class="progress-line" id="progress-line">
                                <div class="flag" id="flag">1</div>
                            </div>
                        </div>
                        <div class="info">
                            <div class="item-info" id="item2-info">
                                <div class="item-info-image"><img src="/images2/Phone/exclamation-solid.svg" alt="get cash fast"></div>
                                Two payments loans are only available for customers who get paid weekly, bi-weekly or twice a month.
                            </div>
                            <div class="item-info" id="item3-info">
                                <div class="item-info-image"><img src="/images2/Phone/exclamation-solid.svg" alt="get cash fast"></div>
                                Three payments loans are only available for customers who get paid weekly, bi-weekly or twice a month.
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="term" value="1">
                </div>
                <div class="form-field">
                    <label>
                        <p>Tell us what province you live in.</p>
                    </label>
                    <div class="selector" id="selector" style="width: 92%;">
                        <div class="text" id="selector-result">Choose your Province</div>
                        <div class="menu transition visible" id="dropdown">
                            <div class="selector-item active selected" data-value="choose">Choose Your Province</div>
                            <div class="selector-item" data-value="alberta">Alberta</div>
                            <div class="selector-item" data-value="british-columbia" selected="">British Columbia</div>
                            <div class="selector-item" data-value="ontario">Ontario</div>
                            <div class="selector-item" data-value="new-brunswick">New Brunswick</div>
                            <div class="selector-item" data-value="saskatchewan">Saskatchewan</div>
                            <div class="selector-item" data-value="manitoba">Manitoba</div>
                            <div class="selector-item" data-value="quebec">Quebec</div>
                            <div class="selector-item" data-value="newfoundland-and-labrador">Newfoundland and Labrador</div>
                        </div>
                    </div></form>
                    <input type="hidden" name="province" value="Alberta">
                </div>
                <button class="buttonph" id="apply-now">
                  <!-- APPLY NOW FOR FAST APPROVAL -->
                    <a href="{{$corpregister}}" onclick="ga('send', 'event', 'buttons', 'click', 'calculator');" class="tracking-tsign">@if ("$land" == "l1")
                      GET MY LOAN
                    @elseif ("$land" == "l2")
                    GET MY LOAN
                    @elseif ("$land" == "l3")
                      GET MY LOAN NOW
                    @elseif ("$land" == "l4")
                      HIGHEST APPROVALS IN CANADA
                    @elseif ("$land" == "l5")
                      HIGHEST APPROVALS IN CANADA
                    @else
                        GET MY LOAN NOW
                    @endif</a>
                </button>
<center><img src="/images2/land/secure.png" alt="get cash fast" width="70%"></center>
        </div>
    </div>
</section>
<div class="clearfix"></div>
