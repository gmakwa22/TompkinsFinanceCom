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

<div class='popup'>
<div class='cnt223'>
<div id="iframeHolder"></div>
<div id="iframeslide"><iframe id="iframe" src="licence/kwartaloans/Kwarta-2021.pdf" width="100%" height="450"></iframe></div>
<button id="buttonlic" onclick="myFunction()" style="float: right;"><img width="132" height="184" src="licence/kwartaloans/placeholder-licence.jpg" align="right" class="et_bloom_hide_mobile et_bloom_image_no_animation et_bloom_image" alt="" srcset="licence/kwartaloans/placeholder-licence.jpg 451w, licence/kwartaloans/placeholder-licence.jpg" sizes="(max-width: 251px) 100vw, 251px" /></button>
<br />
<h3><strong>Cost of Borrowing</br>British Columbia Resident Agreement</h3></strong></p>

<p>Maximum charges permitted in British Columbia for a payday loan:</br>
15% of the principal </br>
We charge: 15% of the principal</p>
<div class="div-grey">
For a $300.00 loan for 14 days:</br>
Total cost of borrowing = $45.00</br>
Annual Percentage Rate = 391.07% per year.</div>
</br>
This information meets the requirements of the <a href="http://www.bclaws.ca/civix/document/id/complete/statreg/04002_00" target="_blank">Business Practices and Consumer Protection Act</a></br>
License Number: {{$consumernum}}
<br/>
<br/>
<a href='' class='close'>Close Window</a>
</p>
</div>
</div>
