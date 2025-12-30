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

/* Repayment Popover Styles */
.terms-slider {
    position: relative;
}

.repayment-popover {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #91d5f3;
    border-radius: 12px;
    padding: 20px 40px 20px 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
    z-index: 10000;
    max-width: 320px;
    width: 90%;
    animation: popoverFadeIn 0.3s ease;
}

@keyframes popoverFadeIn {
    from {
        opacity: 0;
        transform: translate(-50%, -50%) scale(0.9);
    }
    to {
        opacity: 1;
        transform: translate(-50%, -50%) scale(1);
    }
}

.popover-close {
    position: absolute;
    top: 8px;
    right: 8px;
    background: rgba(0, 0, 0, 0.2);
    border: none;
    border-radius: 50%;
    width: 28px;
    height: 28px;
    font-size: 20px;
    line-height: 1;
    color: #000;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s ease;
    font-weight: bold;
}

.popover-close:hover {
    background: rgba(0, 0, 0, 0.3);
    transform: scale(1.1);
}

.item-info-content {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    color: black;
    font-size: 13px;
    line-height: 1.5;
}

.item-info-content .item-info-image {
    margin-top: 3px;
    background-color: #000;
    border-radius: 8px;
    width: 20px;
    height: 20px;
    min-width: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.item-info-content .item-info-image img {
    width: 10px;
    height: 10px;
}

.item-info-content p {
    margin: 0;
    flex: 1;
}

</style>

<section class="phonesection" style="height: 65vh; display: flex; align-items: flex-start; justify-content: center; padding-top: 5vh;">
    <div id="phone" style="height: 80vh; width: 100%; max-width: 650px;">
        <div class="phone-form">
            <form action="" onsubmit="return false;">
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
                        <div class="info" style="display: none;"></div>
                        
                        <!-- Popover for 2 repayments -->
                        <div class="repayment-popover" id="item2-info" style="display: none;">
                            <button type="button" class="popover-close" id="close-item2-info" aria-label="Close">×</button>
                            <div class="item-info-content">
                                <div class="item-info-image"><img src="/images2/Phone/exclamation-solid.svg" alt="get cash fast"></div>
                                <p>Two payments loans are only available for customers who get paid weekly, bi-weekly or twice a month.</p>
                            </div>
                        </div>
                        
                        <!-- Popover for 3 repayments -->
                        <div class="repayment-popover" id="item3-info" style="display: none;">
                            <button type="button" class="popover-close" id="close-item3-info" aria-label="Close">×</button>
                            <div class="item-info-content">
                                <div class="item-info-image"><img src="/images2/Phone/exclamation-solid.svg" alt="get cash fast"></div>
                                <p>Three payments loans are only available for customers who get paid weekly, bi-weekly or twice a month.</p>
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

// Repayment popover functions
function closeRepaymentPopover(popoverId) {
    const popover = document.getElementById(popoverId);
    if (popover) {
        popover.style.display = 'none';
        // Selection is maintained - slider state stays at 2 or 3
    }
}

// Override the term slider behavior to show popovers
// This runs after page load to override the original script
window.addEventListener('load', function() {
    // Override the original termSlider.hide function to prevent reset
    if (window.termSlider && window.termSlider.hide) {
        const originalHide = window.termSlider.hide;
        window.termSlider.hide = function() {
            // Don't reset - just hide the info boxes
            if (this.item2Info) this.item2Info.style.display = "none";
            if (this.item3Info) this.item3Info.style.display = "none";
            // Don't reset opacity or any other state
        };
    }

    setTimeout(function() {
        const item1 = document.getElementById('item1');
        const item2 = document.getElementById('item2');
        const item3 = document.getElementById('item3');
        const item2Info = document.getElementById('item2-info');
        const item3Info = document.getElementById('item3-info');
        const progressLine = document.getElementById('progress-line');
        const flag = document.getElementById('flag');
        const sumValue = document.getElementsByName('term')[0];

        if (!item1 || !item2 || !item3) return;

        // Store current selection
        let currentSelection = 1;

        // Update slider visual state
        function updateSliderState(value) {
            currentSelection = value;
            if (flag) flag.innerHTML = value;
            if (progressLine) {
                if (value === 1) {
                    progressLine.style.width = '0%';
                } else if (value === 2) {
                    progressLine.style.width = '50%';
                } else if (value === 3) {
                    progressLine.style.width = '100%';
                }
            }
            if (sumValue) sumValue.value = value;
        }

        // Update active item classes
        function updateActiveItem(selectedItem) {
            [item1, item2, item3].forEach(item => {
                if (item) {
                    if (item === selectedItem) {
                        item.classList.add('active');
                    } else {
                        item.classList.remove('active');
                    }
                }
            });
        }

        // Remove all existing click handlers by cloning elements
        function removeAllListeners(element) {
            const newElement = element.cloneNode(true);
            element.parentNode.replaceChild(newElement, element);
            return newElement;
        }

        const newItem1 = removeAllListeners(item1);
        const newItem2 = removeAllListeners(item2);
        const newItem3 = removeAllListeners(item3);

        // Add new event listeners with capture phase to intercept first
        newItem1.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            e.stopImmediatePropagation();
            // Hide all popovers
            if (item2Info) item2Info.style.display = 'none';
            if (item3Info) item3Info.style.display = 'none';
            // Update slider
            updateSliderState(1);
            updateActiveItem(newItem1);
            return false;
        }, true);

        newItem2.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            e.stopImmediatePropagation();
            // Hide other popover
            if (item3Info) item3Info.style.display = 'none';
            // Show this popover
            if (item2Info) item2Info.style.display = 'block';
            // Update slider
            updateSliderState(2);
            updateActiveItem(newItem2);
            return false;
        }, true);

        newItem3.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            e.stopImmediatePropagation();
            // Hide other popover
            if (item2Info) item2Info.style.display = 'none';
            // Show this popover
            if (item3Info) item3Info.style.display = 'block';
            // Update slider
            updateSliderState(3);
            updateActiveItem(newItem3);
            return false;
        }, true);

        // When closing popover, maintain the selection
        function closeRepaymentPopover(popoverId) {
            const popover = document.getElementById(popoverId);
            if (popover) {
                popover.style.display = 'none';
                // Maintain current selection - don't reset
                // The slider state is already set and will persist
                
                // Prevent any script from resetting by re-applying the current state
                const currentValue = sumValue ? parseInt(sumValue.value) : currentSelection;
                if (currentValue === 2 || currentValue === 3) {
                    // Re-apply the state to prevent reset
                    updateSliderState(currentValue);
                    if (currentValue === 2 && newItem2) {
                        updateActiveItem(newItem2);
                    } else if (currentValue === 3 && newItem3) {
                        updateActiveItem(newItem3);
                    }
                }
            }
        }

        // Add close button event listeners
        const closeBtn2 = document.getElementById('close-item2-info');
        const closeBtn3 = document.getElementById('close-item3-info');

        if (closeBtn2) {
            closeBtn2.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                e.stopImmediatePropagation();
                closeRepaymentPopover('item2-info');
                return false;
            }, true);
        }

        if (closeBtn3) {
            closeBtn3.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                e.stopImmediatePropagation();
                closeRepaymentPopover('item3-info');
                return false;
            }, true);
        }

        // Make function globally available
        window.closeRepaymentPopover = closeRepaymentPopover;
    }, 200);
});
</script>
