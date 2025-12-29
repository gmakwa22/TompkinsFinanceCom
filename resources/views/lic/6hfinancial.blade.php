<script>
window.onload = function() {
  document.getElementById('iframeslide').style.display = 'none';
};
function myFunction() {
  var x = document.getElementById("iframeslide");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
<script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);

$('.popup').show();
$('.b-close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});

$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
</script>




<style type="text/css">
#overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: #000;
filter:alpha(opacity=70);
-moz-opacity:0.7;
-khtml-opacity: 0.7;
opacity: 0.7;
z-index: 100;
display: none;
}
.cnt223 a{
text-decoration: none;
}
.popup{
width: 100%;
margin: 0 auto;
display: none;
position: fixed;
z-index: 101;
}

.cnt223{
min-width: 45%;
width:  40%;
min-height: 150px;
margin: 100px auto;
background: #f3f3f3;
position: relative;
z-index:2;
padding: 15px 35px;
border-radius: 5px;
border-color: #92278f !important;
border: solid;
border-width: 10px;
height:580px;
overflow:auto;
}
@media  only screen and (max-width: 800px) {
  .cnt223{
  min-width: 98%;
  width:  98%;
  height:430px;
  }
}

.cnt223 p{
clear: both;
    color: #555555;
    /* text-align: justify; */
    font-size: 20px;
    font-family: sans-serif;
}
.cnt223 p a{
color: #d91900;
font-weight: bold;
}
.cnt223 .x{
float: right;
height: 35px;
left: 22px;
position: relative;
top: -25px;
width: 34px;
}
.cnt223 .x:hover{
cursor: pointer;
}

a.b-close {
  text-align:right;
  color:white;
}
</style>


<script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);

$('.popup').show();
$('.b-close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});

$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
</script>

<div class='popup'>
<div class='cnt223'>

<!-- <button type="button" class="btn btn-default b-close" data-dismiss="modal"></button> -->
<a href='' id class='b-close' style="background-color: red; padding:8px;">Yes I Understand Close Window</a><br><br><br>
<!-- <span class="button b-close">
    <span>Yes I Understand</br>Close Window</span>
</span> -->
<div id="iframeHolder"></div>
<div id="iframeslide"><iframe id="iframe" src="licence/6hfinancial/6hfinancial-lender-license.pdf" width="100%" height="450"> </iframe>

</div>
<button id="buttonlic" onclick="myFunction()" style="float: right;"><img width="132" height="184" src="licence/6hfinancial/placeholder-6hfinancial.jpg" align="right" class="et_bloom_hide_mobile et_bloom_image_no_animation et_bloom_image" alt="" srcset="licence/6hfinancial/placeholder-6hfinancial.jpg 451w, licence/6hfinancial/placeholder-6hfinancial.jpg" sizes="(max-width: 251px) 100vw, 251px" /></button>

<h2 style="margin-top:1px;">Payday Loans are High-Cost Loans</h2>
    <h4>In Manitoba, the maximum allowable charge for a payday loan is 17% of the principal amount of the loan.</h4>
<br>
    <h2>$17 per $100</h2>
    <span style="text-decoration: underline;">Sample $300 loan for 12 days:</span> </br>

 Principal Amount: $300 <br>
 Total Cost of Credit = $351.00 <br>
 The Annual Percentage Rate (APR): 517.08% <br>
 The total that must be repaid is: $351.00 <br><br>

 <span>
 <b>This information meets the requirements of The Consumer Protection Act <br>{{ $privname }} Inc. - licence 76937
 </b>

</div>
</div>
