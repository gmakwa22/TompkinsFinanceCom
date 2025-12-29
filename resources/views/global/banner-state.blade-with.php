<div id="phone" class="col-xs-12 col-sm-5 alpha omega f-right">
        <div id="phone-slider">
        <h3>What loan amount would you like?</h3>
        <span class="fa fa-minus"></span>
        <span class="fa fa-plus"></span>
        <div id="arc-slider" class="rslider rs-ie rs-control rs-animation" style="height: 400px; width: 400px;">
            <div class="rs-container full custom-quarter" style="height: 400px; width: 400px;"><div class="rs-inner-container"><div class="rs-block rs-outer rs-border rs-split"><div class="rs-path rs-transition rs-range-color" style="transform: rotate(225deg);"></div><div class="rs-path rs-transition rs-range-color" style="opacity: 0; transform: rotate(94.9333deg);"></div><div class="rs-path rs-transition rs-path-color" style="transform: rotate(274.933deg); opacity: 1;"></div><div class="rs-path rs-transition rs-path-color" style="opacity: 1; z-index: 1; transform: rotate(45deg);"></div><span class="rs-block" style="padding: 6px;"><div class="rs-inner rs-bg-color rs-border"></div></span></div></div><div class="rs-bar rs-transition rs-first" style="z-index: 8; transform: rotate(274.933deg);"><div class="rs-handle rs-move" index="2" tabindex="0" role="slider" aria-label="arc-slider_handle" style="height: 38px; width: 38px; margin: -19px 0px 0px -16px;" aria-valuenow="899" aria-valuemin="150" aria-valuemax="5000"></div></div><span class="rs-bar rs-transition rs-start" style="transform: rotate(225deg);"><span class="rs-seperator rs-border" style="width: 6px; margin-top: 0px;"></span></span><span class="rs-bar rs-transition rs-end" style="transform: rotate(315deg);"><span class="rs-seperator rs-border" style="width: 6px; margin-top: 0px;"></span></span><div class="rs-overlay1 rs-transition rs-bg-color" style="transform: rotate(405deg);"></div><div class="rs-overlay2 rs-transition rs-bg-color" style="transform: rotate(315deg);"></div><span class="rs-tooltip rs-tooltip-text" style="margin-top: -26.5px; margin-left: -33px;">$800</span></div><input type="hidden" name="arc-slider" value="800">
        </div>
        <!-- <div class="newdd">

        </div> -->
        <input id="loan-slider" name="loan-slider" type="hidden" value="800" title="Loan slider">
        <h3 class="sub2">Want to know how many repayments?</h3>
        <div id="terms-box" >
            <select name="terms" id="terms">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            </select><div id="terms-slider" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div id="custom-handle" class="ui-slider-handle ui-corner-all ui-state-default" tabindex="0" style="left: 0%;">1</div><div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="width: 0%;"></div></div>
            <div class="dotes"><span class=""></span></div>
        </div>
        <div class="choice-alberta" style="">
        <div class="info">
        <div class="box col-xs-4 col-sm-4 alpha omega">
        <b>1 to 3 repayments</b><br>
        <span>Paid weekly</span>
        </div>
        <div class="box col-xs-4 col-sm-4 alpha omega">
        <b>1 to 3 repayments</b><br>
        <span>Paid bi-weekly or twice a month</span>
        </div>
        <div class="box col-xs-4 col-sm-4 alpha omega">
        <b>1 to 2 repayments</b><br>
        <span>Paid monthly</span>
        </div>
        </div>
        <div class="box col-xs-12 spec">
        <span><i>The system will automatically provide the number of repayments based on your pay frequency (range between 42 to 62 days).</i></span>
        </div>
        </div>

        <div class="choice-manitoba" >
        <div class='col-xs-12 details'>
        In Manitoba, only a single repayment option is available. A loan taken out with us in Manitoba must be fully repaid at the next pay date.
        </div>
        </div>
        <div class="clearfix"></div>
        <h3 class="sub3">Tell us what province you live in.</h3>
        <div class="ui compact menu" id="provinces">
          <div class="form-control ui simple dropdown item selection" tabindex="0" id="select-selectProvince"><select id="selectProvince" name="selectProvince" title="Provinces">
          <option data-loan-selected-province="false" data-loan-percent="0" value="">Please select a province</option>
          <option id="alberta" data-loan-selected-province="false" data-loan-percent="15" value="alberta">Alberta</option>
          <option id="british-columbia" data-loan-selected-province="false" data-loan-percent="17" value="british-columbia">British Columbia</option>
          <option id="ontario" data-loan-selected-province="false" data-loan-percent="15" value="ontario">Ontario</option>
          <option id="new-brunswick" data-loan-selected-province="false" data-loan-percent="15" value="new-brunswick">New Brunswick</option>

          <option id="saskatchewan" data-loan-selected-province="false" data-loan-percent="23" value="saskatchewan">Saskatchewan</option>

          <option id="quebec" data-loan-selected-province="false" data-loan-percent="15" value="quebec">Quebec</option>
          <option id="newfoundland-and-labrador" data-loan-selected-province="false" data-loan-percent="15" value="newfoundland-and-labrador">Newfoundland and Labrador</option>
          </select><i class="dropdown icon"></i><div class="default text">Please select a province</div><div class="menu" tabindex="-1"><div class="item" data-value="alberta">Alberta</div><div class="item" data-value="british-columbia">British Columbia</div><div class="item" data-value="ontario">Ontario</div><div class="item" data-value="new-brunswick">New Brunswick</div><div class="item" data-value="saskatchewan">Saskatchewan</div><div class="item" data-value="quebec">Quebec</div><div class="item" data-value="newfoundland-and-labrador">Newfoundland and Labrador</div></div></div>
          </div>
        <div><a href="#" id="licence_province">Lender licences</a></div>
        <a href="{{ url('/signup') }}" class="submit btn btn-green btn-step2" >APPLY NOW FOR FAST APPROVAL</a>
        </div>
        </div>
