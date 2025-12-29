var topSlider = {
    sliderBackground: document.getElementById("top-slider-background"),
    scaleBlock: document.getElementById("scale-block"),
    whiteBlockBackground: document.getElementById("white-block-background"),
    sliderScale: document.getElementById("scale"),
    currentDeg: 88.69,
    addButton: document.getElementById("addSum"),
    reduceButton: document.getElementById("reduceSum"),

    getCenterCoords: function() {
        let rect = this.sliderBackground.getBoundingClientRect();
        return {
            x: Math.floor(rect.x + rect.width / 2),
            y: Math.floor(rect.y + rect.height)
        };
    },

    move: function(deg) {
        this.sliderScale.style.transform = `rotate(${deg}deg)`;
    }
};

var topSliderButton = {
    elem: document.getElementById("top-slider-button"),
    buttonScale: document.getElementById("button-scale"),
    isDown: false,

    move: function(deg) {
        this.buttonScale.style.transform = `rotate(${deg}deg)`;
    }
};

var form = {
    sumValue: document.getElementsByName("sum")[0],
    minAmount: 0,
    maxAmount: 5000,
    initialAmount: 800,
    currentAmount: 800,
    amount: document.getElementById("amount"),

    updateAmount: function() {
        this.amount.innerHTML = this.currentAmount;
        this.sumValue.value = this.currentAmount;
        topSlider.currentDeg = Math.ceil((this.currentAmount / this.maxAmount) * 180);
        topSlider.move(topSlider.currentDeg);
        topSliderButton.move(topSlider.currentDeg);
    },

    add: function(step) {
        if (this.currentAmount + step > this.maxAmount) {
            this.currentAmount = this.maxAmount;
        } else {
            this.currentAmount += step;
        }
        this.updateAmount();
    },

    reduce: function(step) {
        if (this.currentAmount - step < this.minAmount) {
            this.currentAmount = this.minAmount;
        } else {
            this.currentAmount -= step;
        }
        this.updateAmount();
    },

    goto: function(deg) {
        // Clamp angle between 0 and 180
        deg = Math.max(0, Math.min(180, deg));

        // Calculate amount based on angle
        this.currentAmount = Math.round((deg / 180) * this.maxAmount);

        // Round to nearest 10
        this.currentAmount = Math.round(this.currentAmount / 10) * 10;

        // Ensure within bounds
        this.currentAmount = Math.max(this.minAmount, Math.min(this.maxAmount, this.currentAmount));

        this.updateAmount();
    }
};

// Improved moveSliders function for better cursor tracking
function moveSliders(mousePos, isClick = false) {
    let center = topSlider.getCenterCoords();
    let deltaX = center.x - mousePos.x;
    let deltaY = center.y - mousePos.y;

    // Ensure deltaY is not negative
    if (deltaY < 0) deltaY = 0;

    // Calculate angle from center
    let angle = (180 / Math.PI) * Math.atan2(deltaY, deltaX);

    // Clamp angle between 0 and 180
    angle = Math.max(0, Math.min(180, angle));

    if (isClick) {
        form.goto(angle);
    } else {
        // For dragging, update more frequently for better responsiveness
        let threshold = 2; // Reduced threshold for better responsiveness
        if (Math.abs(angle - topSlider.currentDeg) > threshold) {
            form.goto(angle);
        }
    }
}

// Event listeners
topSlider.scaleBlock.addEventListener("click", function(e) {
    if (e.target !== topSlider.whiteBlockBackground) {
        moveSliders({x: e.clientX, y: e.clientY}, true);
    }
}, true);

topSlider.addButton.addEventListener("click", function(e) {
    e.preventDefault();
    form.add(150);
}, true);

topSlider.reduceButton.addEventListener("click", function(e) {
    e.preventDefault();
    form.reduce(150);
}, true);

// Mouse events
topSliderButton.elem.addEventListener("mousedown", function(e) {
    e.preventDefault();
    topSliderButton.isDown = true;
    topSlider.sliderScale.classList.remove("transition");
    topSliderButton.buttonScale.classList.remove("transition");
});

document.addEventListener("mouseup", function() {
    topSliderButton.isDown = false;
    topSlider.sliderScale.classList.add("transition");
    topSliderButton.buttonScale.classList.add("transition");
}, true);

document.addEventListener("mousemove", function(e) {
    e.preventDefault();
    if (topSliderButton.isDown) {
        moveSliders({x: e.clientX, y: e.clientY});
    }
}, true);

// Touch events
topSliderButton.elem.addEventListener("touchstart", function(e) {
    topSliderButton.isDown = true;
    topSlider.sliderScale.classList.remove("transition");
    topSliderButton.buttonScale.classList.remove("transition");
});

topSliderButton.elem.addEventListener("touchend", function(e) {
    topSliderButton.isDown = false;
    topSlider.sliderScale.classList.add("transition");
    topSliderButton.buttonScale.classList.add("transition");
});

document.addEventListener("touchmove", function(e) {
    if (topSliderButton.isDown) {
        moveSliders({x: e.touches[0].clientX, y: e.touches[0].clientY});
    }
}, {passive: false});

// Initialize
var init = function() {
    topSlider.move(topSlider.currentDeg);
    topSliderButton.move(topSlider.currentDeg);
    form.updateAmount();
};

init();

// Term slider
var termSlider = {
    sumValue: document.getElementsByName("term")[0],
    item1: document.getElementById("item1"),
    item2: document.getElementById("item2"),
    item3: document.getElementById("item3"),
    progressLine: document.getElementById("progress-line"),
    item2Info: document.getElementById("item2-info"),
    item3Info: document.getElementById("item3-info"),
    flag: document.getElementById("flag"),

    hide: function() {
        this.item2Info.style.display = "none";
        this.item3Info.style.display = "none";
        this.item2Info.style.opacity = 0;
        this.item3Info.style.opacity = 0;
    }
};

termSlider.item1.addEventListener("click", function(e) {
    termSlider.hide();
    termSlider.flag.innerHTML = 1;
    termSlider.progressLine.style.width = "0%";
    termSlider.sumValue.value = 1;
}, true);

termSlider.item2.addEventListener("click", function(e) {
    termSlider.hide();
    termSlider.item2Info.style.display = "block";
    termSlider.item2Info.style.opacity = 1;
    termSlider.flag.innerHTML = 2;
    termSlider.progressLine.style.width = "50%";
    termSlider.sumValue.value = 2;
}, true);

termSlider.item3.addEventListener("click", function(e) {
    termSlider.hide();
    termSlider.item3Info.style.display = "block";
    termSlider.item3Info.style.opacity = 1;
    termSlider.flag.innerHTML = 3;
    termSlider.progressLine.style.width = "100%";
    termSlider.sumValue.value = 3;
}, true);

// Selector
var selector = {
    province: document.getElementsByName("province")[0] || null,
    elem: document.getElementById("selector"),
    menu: document.getElementById("selector"),
    dropdown: document.getElementById("dropdown"),
    menuItems: document.getElementsByClassName("selector-item"),
    selectorResult: document.getElementById("selector-result"),

    showItems: function() {
        if (this.dropdown) {
            this.dropdown.style.height = "300px";
        }
    },

    hideItems: function() {
        if (this.dropdown) {
            this.dropdown.style.height = "0px";
        }
    }
};

selector.elem.addEventListener("click", function(e) {
    if (selector.elem.classList.contains("active")) {
        selector.hideItems();
        selector.elem.classList.remove("active");
    } else {
        selector.showItems();
        selector.elem.classList.add("active");
    }
}, true);

Array.from(selector.menuItems).forEach(function(item) {
    item.addEventListener("click", function() {
        Array.from(selector.menuItems).forEach(function(item) {
            item.classList.remove("selected");
        });
        item.classList.add("selected");
        if (selector.selectorResult) {
            selector.selectorResult.innerHTML = item.innerHTML;
        }
        if (selector.province) {
            selector.province.value = item.innerHTML;
        }
        if (selector.dropdown) {
            selector.dropdown.style.height = "0px";
        }
    });
});

document.body.addEventListener("click", function(e) {
    if (e.target !== selector.menu && e.target !== selector.dropdown && e.target !== selector.selectorResult) {
        selector.dropdown.style.height = "0px";
        selector.elem.classList.remove("active");
    }
});
