<!DOCTYPE html>
<html>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bgimg {
  background-image: url('../public/images/Page_2-01.png');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}

.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 50%;
  left: 64%;
  transform: translate(-50%, -50%);
  text-align: center;
  width: 600px;
}

hr {
  margin: auto;
  width: 40%;
}

p {
    color: black;
    font-family: open-sans,"Open Sans",Roboto,Helvetica,Arial,sans-serif;
    font-weight: 600;
}
h1 {
    font-family: open-sans,"Open Sans",Roboto,Helvetica,Arial,sans-serif;
    font-weight: 600;
}
.topnav {
    float: center;
    text-align: center;
    /*padding: 10px 10px;*/
}
.topnav a {
    padding: 10px;
    color : #b22142;
}
#logo_main {
    width: 210px;
    height: 100%;
    padding: 0;
}
</style>
<body>

<div class="bgimg">
  <div class="topleft">
    <!-- <p>Logo</p> -->
        <!-- <a href="http://www.megacashbucks.com" class="svg-logo-icash" onclick="ga('send', 'event', 'header', 'click', 'icash logo vertical');">
            <img id="logo_main" src="http://www.megacashbucks.com/images/FL2.jpg">
        </a>   -->
  </div>

  <div class="middle">
    <h1>COMING SOON</h1>
    <hr>
    <p>Our Mobile apps will be available soon, till then you can use our website on Mobile Browser</p>
    <div class="topnav">
      <a class="" href="http://megacashbucks.com/">Website</a>
      <a href="{{ $corpregister }}">Apply for Loan</a>
      <a href="{{ $corpsignin }}">Dashboard</a>
    </div>
  </div>
  <div class="bottomleft">
    <!-- <p>Some text</p> -->
  </div>
</div>

</body>
</html>
