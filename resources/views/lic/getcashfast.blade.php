<script>
window.onload = function() {
  document.getElementById('iframeslide').style.display = 'none';
  document.getElementById('iframeslide2').style.display = 'none';
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
<script>
function myFunction2() {
  var x = document.getElementById("iframeslide2");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
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
.popupbc{
width: 100%;
margin: 0 auto;
display: none;
position: fixed;
z-index: 101;
}

.cnt223{
min-width: 45%;
width:  45%;
min-height: 160px;
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
.popnav ul {
    list-style: none;
    padding: 0;
    margin: 0;
}
.popnav li {
    display: inline;
    border: solid;
    border-width: 1px 1px 1px 1px;
    margin: 0 6px 0 0;
    padding:4px;
}
.nav-tabs {
    border-bottom: 0px solid #ddd;
}
.nav>li>a {
    padding: 6px 13px;
    background-color: c88b3f;
}
</style>

<script type='text/javascript'>


$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup').show();
$('.close').click(function(){
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

<script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popupbc').show();
$('.close').click(function(){
$('.popupbc').hide();
overlay.appendTo(document.body).remove();
return false;
});

$('.x').click(function(){
$('.popupbc').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
</script>

<div class='popup'>
<div class='cnt223'>
  <div class="popnav">


<ul class="nav nav-tabs" id="tabContent" style="margin-right:0px;">
        <li class="active"><a href="#albertatab" data-toggle="tab">Manitoba License</a> </li>
        <li><a href="#bctab" data-toggle="tab">Ontario License</a></li>
</ul><br>
</div>
<div class="tab-content">
  <div class="tab-pane active" id="albertatab">

    <div id="iframeHolder"></div>
    <div id="iframeslide"><iframe id="iframe" src="licence/getcashfast/getcashfast-license.pdf" width="100%" height="450"></iframe></div>
    <button id="buttonlic" onclick="myFunction()" style="float: right;"><img width="132" height="184" src="licence/getcashfast/placeholder-licence.jpg" align="right" class="et_bloom_hide_mobile et_bloom_image_no_animation et_bloom_image" alt="get cash fast" srcset="licence/getcashfast/placeholder-licence.jpg 451w, licence/getcashfast/placeholder-licence.jpg" sizes="(max-width: 251px) 100vw, 251px" /></button>
    <br />
    <h3><strong>Payday loans are high cost loans</h3>In Manitoba, the maximum allowable charge for a </br>payday loan is 17% of the principal amount of the loan.</strong></p>

    <p class="mt-0">
      For a $300 loan for 12 days:</br>
      Total cost of credit = $51</br>
      Annual Percentage Rate = 517%</br>
      The total that must be repaid is $351.00</br>
    </br>
    This information meets the requirements of the Manitoba Consumer Protection Act.</br>
    License Number: {{$consumernum}}

<div class="control-group">

  </div>
</div>

  <div class="tab-pane" id="bctab">
    <div id="iframeHolder"></div>
    <div id="iframeslide2"><iframe id="iframe" src="licence/getcashfast/getcashfast-license-on.pdf" width="100%" height="450"></iframe></div>
    <button id="buttonlic" onclick="myFunction2()" style="float: right;"><img width="132" height="184" src="licence/getcashfast/placeholder-licenceon.jpg" align="right" class="et_bloom_hide_mobile et_bloom_image_no_animation et_bloom_image" alt="Online payday cash" srcset="licence/getcashfast/placeholder-licenceon.jpg 451w, licence/getcashfast/placeholder-licenceon.jpg" sizes="(max-width: 251px) 100vw, 251px" /></button>
    <br />
    <h3><strong>Cost of Borrowing</br>Ontario Resident Agreement</h3></strong></p>

    <p>Maximum charges permitted in Ontario for a payday loan:</br>
    15% of the principal </br>
    We charge: 15% of the principal</p>
    <div class="div-grey">
    For a $300.00 loan for 14 days:</br>
    Total cost of borrowing = $45.00</br>
    Annual Percentage Rate = 391.07% per year.</div>
    </br>
    This information meets the requirements of the <a href="http://www.bclaws.ca/civix/document/id/complete/statreg/04002_00" target="_blank">Business Practices and Consumer Protection Act</a></br><br>
    Ontario License Number: {{$consumernumon}}
  </div>


  <div class="tab-pane" id="networking">
  content 1
 </div>
</div>



<a href='' class='close'>Close Window</a>
</p>
</div>
</div>
