<?php

$locatioffns = [
    'LasVegas' => [
        'city' => 'Las Vegas/Paradise (Combo)',
        'pop' => '1,063,631 Million',
    ],
];

$locations = [['Alabama', ''], ['Alaska', ''], ['Arizona', ''], ['Arkansas', ''], ['California', ''], ['Colorado', ''], ['Connecticut', ''], ['Delaware', ''], ['Florida', ''], ['Georgia', ''], ['Hawaii', ''], ['Idaho', ''], ['Illinois', ''], ['Indiana', ''], ['Iowa', ''], ['Kansas', ''], ['Kentucky', ''], ['Louisiana', ''], ['Maine', ''], ['Maryland', ''], ['Massachusetts', ''], ['Michigan', ''], ['Minnesota', ''], ['Mississippi', ''], ['Missouri', ''], ['Montana', ''], ['Nebraska', ''], ['Nevada', ''], ['New Hampshire', ''], ['New Jersey', ''], ['New Mexico', ''], ['New York', ''], ['North Carolina', ''], ['North Dakota', ''], ['Ohio', ''], ['Oklahoma', ''], ['Oregon', ''], ['Pennsylvania', ''], ['Rhode Island', ''], ['South Carolina', ''], ['South Dakota', ''], ['Tennessee', ''], ['Texas', 'selected'], ['Utah', ''], ['Vermont', ''], ['Virginia', ''], ['Washington', ''], ['West Virginia', ''], ['Wisconsin', ''], ['Wyoming', '']];

$locations2 = [
    'Alabama' => ['st' => 'Alabama', 'sl' => ''],
    'Alaska' => ['st' => 'Alaska', 'sl' => ''],
    'Arizona' => ['st' => 'Arizona', 'sl' => ''],
    'Arkansas' => ['st' => 'Arkansas', 'sl' => ''],
    'California' => ['st' => 'California', 'sl' => ''],
    'Colorado' => ['st' => 'Colorado', 'sl' => ''],
    'Connecticut' => ['st' => 'Connecticut', 'sl' => ''],
    'Delaware' => ['st' => 'Delaware', 'sl' => ''],
    'Florida' => ['st' => 'Florida', 'sl' => ''],
    'Georgia' => ['st' => 'Georgia', 'sl' => ''],
    'Hawaii' => ['st' => 'Hawaii', 'sl' => ''],
    'Idaho' => ['st' => 'Idaho', 'sl' => ''],
    'Illinois' => ['st' => 'Illinois', 'sl' => ''],
    'Indiana' => ['st' => 'Indiana', 'sl' => ''],
    'Iowa' => ['st' => 'Iowa', 'sl' => ''],
    'Kansas' => ['st' => 'Kansas', 'sl' => ''],
    'Kentucky' => ['st' => 'Kentucky', 'sl' => ''],
    'Louisiana' => ['st' => 'Louisiana', 'sl' => ''],
    'Maine' => ['st' => 'Maine', 'sl' => ''],
    'Maryland' => ['st' => 'Maryland', 'sl' => ''],
    'Massachusetts' => ['st' => 'Massachusetts', 'sl' => ''],
    'Michigan' => ['st' => 'Michigan', 'sl' => ''],
    'Minnesota' => ['st' => 'Minnesota', 'sl' => ''],
    'Mississippi' => ['st' => 'Mississippi', 'sl' => ''],
    'Missouri' => ['st' => 'Missouri', 'sl' => ''],
    'Montana' => ['st' => 'Montana', 'sl' => ''],
    'Nebraska' => ['st' => 'Nebraska', 'sl' => ''],
    'Nevada' => ['st' => 'Nevada', 'sl' => ''],
    'NewHampshire' => ['st' => 'New Hampshire', 'sl' => ''],
    'NewJersey' => ['st' => 'New Jersey', 'sl' => ''],
    'NewMexico' => ['st' => 'New Mexico', 'sl' => ''],
    'NewYork' => ['st' => 'New York', 'sl' => ''],
    'NorthCarolina' => ['st' => 'North Carolina', 'sl' => ''],
    'NorthDakota' => ['st' => 'North Dakota', 'sl' => ''],
    'Ohio' => ['st' => 'Ohio', 'sl' => ''],
    'Oklahoma' => ['st' => 'Oklahoma', 'sl' => ''],
    'Oregon' => ['st' => 'Oregon', 'sl' => ''],
    'Pennsylvania' => ['st' => 'Pennsylvania', 'sl' => ''],
    'RhodeIsland' => ['st' => 'Rhode Island', 'sl' => ''],
    'SouthCarolina' => ['st' => 'South Carolina', 'sl' => ''],
    'SouthDakota' => ['st' => 'South Dakota', 'sl' => ''],
    'Tennessee' => ['st' => 'Tennessee', 'sl' => ''],
    'Texas' => ['st' => 'Texas', 'sl' => ''],
    'Utah' => ['st' => 'Utah', 'sl' => ''],
    'Vermont' => ['st' => 'Vermont', 'sl' => ''],
    'Virginia' => ['st' => 'Virginia', 'sl' => ''],
    'Washington' => ['st' => 'Washington', 'sl' => ''],
    'WestVirginia' => ['st' => 'West Virginia', 'sl' => ''],
    'Wisconsin' => ['st' => 'Wisconsin', 'sl' => ''],
    'Wyoming' => ['st' => 'Wyoming', 'sl' => ''],
];

?>






<style>
/* Gold styling for phone form slider and buttons */
#top-slider .background {
    background-color: #FFD700 !important;
    background: linear-gradient(135deg, #FFD700 0%, #FFA500 50%, #FFD700 100%) !important;
}

#top-slider .background .scale .background-scale {
    background-color: #FFA500 !important;
    background: linear-gradient(135deg, #FFA500 0%, #FFD700 50%, #FFA500 100%) !important;
}

.terms-slider .items {
    background-color: #FFD700 !important;
}

.terms-slider .items .item {
    background-color: #FFA500 !important;
}

.terms-slider .progress-line {
    background-color: #FFA500 !important;
}

.terms-slider .progress-line .flag {
    background-color: #FFA500 !important;
}

.terms-slider .progress-line .flag:after {
    border-top-color: #FFA500 !important;
}

.small-button {
    background-color: #FFD700 !important;
}

.small-button:hover {
    background-color: #FFA500 !important;
}
</style>

<section class="phonesection" style="height: 65vh; display: flex; align-items: flex-start; justify-content: center; padding-top: 5vh;">
    <div id="phone" style="height: 80vh; width: 100%; max-width: 650px;">
        <div class="phone-form">
            <form action="">
                <div class="form-field mt-2" style="margin-top: 5px !important;">
                    <label>
                        <p class="font-weight-bold" style="margin-bottom: 10px;">What amount would you like to borrow?</p>
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
                                <img src="/images2/Phone/cursor.png" alt="get cash fast">
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
                            <button class="button small-button add-button" id="addSum">
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
                                <div class="item-info-image"><img src="/images2/Phone/exclamation-solid.svg"
                                        alt="get cash fast"></div>
                                Two payments loans are only available for customers who get paid weekly, bi-weekly or
                                twice a month.
                            </div>
                            <div class="item-info" id="item3-info">
                                <div class="item-info-image"><img src="/images2/Phone/exclamation-solid.svg"
                                        alt="get cash fast"></div>
                                Three payments loans are only available for customers who get paid weekly, bi-weekly or
                                twice a month.
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="term" value="1">
                </div>
                <div class="form-field">
                    <label>
                        <p class="font-weight-bold">Tell us what state you live in.</p>
                    </label>
                    <div class="selector" id="selector" style="width: 92%;">
                        <div class="text" id="selector-result">Texas</div>
                        <div class="menu transition visible" id="dropdown">
                            <?php

                            foreach ($locations2 as $key => $location2) {
                                echo '<div class="selector-item" data-value="' . $location2['st'] . '"' . $location2['sl'] . '>' . $location2['st'] . '</div>';
                            }

                            ?>
                        </div>
                    </div>
            </form>
            <input type="hidden" name="state" value="Nevada">
        </div>

        <div style="padding-top: 20px;"></div>

        <a class="apply-btn mt-2" href="{{ Session::get('purl') ?? $corpregister }}" style="margin-bottom: 10px; text-decoration: none; display: inline-block; width: auto; margin-left: 0 !important; padding: 0.8rem 2rem !important;">GET STARTED NOW</a>


    </div>
    </div>
</section>
<div class="clearfix"></div>

<script>
let dropdownMoved = false;

function fixDropdown(dropdownId) {
    const dropdown = document.getElementById(dropdownId);
    const selector = document.getElementById('selector');
    const rect = selector.getBoundingClientRect();

    // Only move to body if not already moved
    if (!dropdownMoved) {
        document.body.appendChild(dropdown);
        dropdownMoved = true;
    }

    dropdown.style.position = 'fixed';
    dropdown.style.left = rect.left + 'px';
    dropdown.style.top = rect.bottom + 'px';
    dropdown.style.width = Math.max(rect.width + 40, 250) + 'px';
    dropdown.style.minWidth = '200px';
    dropdown.style.zIndex = '9999';
    dropdown.style.background = 'white';
    dropdown.style.border = '1px solid #ddd';
    dropdown.style.borderRadius = '4px';
    dropdown.style.boxShadow = '0 4px 8px rgba(0,0,0,0.1)';
    dropdown.style.maxHeight = '200px';
    dropdown.style.overflowY = 'auto';
}

function hideDropdown() {
    const dropdown = document.getElementById('dropdown');
    if (dropdown) {
        dropdown.style.display = 'none';
    }
}

// Apply the fix when dropdown is shown
document.addEventListener('DOMContentLoaded', function() {
    const selector = document.getElementById('selector');
    const dropdown = document.getElementById('dropdown');

    if (selector) {
        selector.addEventListener('click', function() {
            setTimeout(function() {
                fixDropdown('dropdown');
                dropdown.style.display = 'block';
            }, 100);
        });
    }

    // Hide dropdown when clicking outside
    document.addEventListener('click', function(e) {
        if (!selector.contains(e.target) && !dropdown.contains(e.target)) {
            hideDropdown();
        }
    });

    // Hide dropdown when selecting an item
    if (dropdown) {
        dropdown.addEventListener('click', function(e) {
            if (e.target.classList.contains('selector-item')) {
                hideDropdown();
            }
        });
    }
});
</script>
