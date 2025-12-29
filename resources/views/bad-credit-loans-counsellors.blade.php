@extends('layouts.design')

@section('content')

<section class="choose-X46 white-bg page-section-ptb">
  <div class="objects-left">
     <img class="objects-1 img-fluid" src="X45/03.png" alt="Payday Loans in Alberta">
   </div>
  <div class="choose-X46-content">
   <div class="container">


         <div class="row">
            <div class="col-md-12 col-sm-12 mb-30">
              <div class="feature-text text-left">
                <div class="feature-info">
				<h5 style="color:black;">Transform Your Credit, Empower Your Future</h5>
                  <h3 style="color:black;">Kenny Johnson University: Empowering You to Rebuild and Restore Your Credit</h3>
                  <p class="text text-justify">

				  Your creditworthiness is not just a number; it represents your financial reputation and serves as a reflection of your responsible money management. A strong credit profile demonstrates to lenders, landlords, and employers that you are trustworthy and capable of meeting your financial obligations. It opens the doors to a wide range of opportunities that can significantly impact your life. <br><br>

				  Imagine the satisfaction of stepping into your dream home, knowing that your excellent credit score has secured you the best mortgage rates available. Picture the excitement of launching your own business, with access to the capital you need to turn your vision into reality, thanks to a solid credit history. Envision the relief of securing a loan for your education, allowing you to invest in your future without the burden of excessive interest rates.
				  <br><br>
<a href="/credit" target="_blank"   onclick="ga('send', 'event', 'external links', 'credit consellors', 'https://calendly.com/d/2pk-chs-ym4/meeting-with-taxcash-it');">Stop Feeling Trapped By Bad Credit. <br>Click Here to Schedule Your Personalized Credit Analysis Today To Reclaim Your Financial Freedom!</a><br><br>
<a href="https://KennyJohnsonUniversity.Com" style="font-size:23px">KennyJohnsonUniversity.Com</a>

</p>
                </div>
              </div>
            </div>
         </div>


         <div class="row">
       <!-- <div class="col-lg-6 align-self-center">
         <img class="img-fluid mx-auto" src="X45/02.png" alt="Payday Loans in Alberta">
       </div> -->
       <div class="col-lg-12">
         <div class="row">
            <div class="col-md-6 col-sm-6 mb-30">
              <div class="feature-text text-left">
                <div class="feature-info">
                  <h5 style="color:black;">USA</h5>
				  <h3 style="color:black;">CREDIT COUNSELLING CANADA</h3>
                  <p class="text text-justify">
<a href="http://www.creditcounsellingcanada.ca/" target="_blank"   onclick="ga('send', 'event', 'external links', 'credit consellors', 'http://creditcounsellingcanada.ca');"><i class="fa fa-globe"></i>creditcounsellingcanada.ca</a><br>
<i class="fa fa-phone"></i>1-866-398-5999

				</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 mb-30">
              <div class="feature-text text-left">
                <div class="feature-info">
                  <h5 style="color:black;">Alberta</h5>
                  <h3 style="color:black;">CREDIT COUNSELLING SOCIETY</h3>
                  <p class="text text-justify">


<a href="https://www.nomoredebts.org/canada/alberta/credit-counselling.html" target="_blank"   onclick="ga('send', 'event', 'external links', 'credit consellors', 'http://nomoredebts.org');"><i class="fa fa-globe"></i>nomoredebts.org</a><br>
<i class="fa fa-phone"></i>1–888-527–8999

				  </p>



                </div>
              </div>
            </div>
         </div>


         <div class="row">
            <div class="col-md-6 col-sm-6 mb-30">
              <div class="feature-text text-left">
                <div class="feature-info">
				<h5 style="color:black;">Ontario</h5>
                  <h3 style="color:black;">ONTARIO ASSOCIATION OF CREDIT COUNSELLING&nbsp;SERVICE</h3>
                  <p class="text text-justify">

<a href="http://oaccs.com/" target="_blank"   onclick="ga('send', 'event', 'external links', 'credit consellors', 'http://oaccs.com');"><i class="fa fa-globe"></i>oaccs.com</a><br>
<i class="fa fa-phone"></i>1–905–945-5644

				  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 mb-30">
              <div class="feature-text text-left">
                <div class="feature-info">
				<h5 style="color:black;">Nova Scotia</h5>
                  <h3 style="color:black;">CREDIT COUNSELLING SERVICES OF ATLANTIC&nbsp;CANADA</h3>
                  <p class="text text-justify">

<a href="https://www.solveyourdebts.com/english/index.php" target="_blank"   onclick="ga('send', 'event', 'external links', 'credit consellors', 'https://solveyourdebts.com');"><i class="fa fa-globe"></i>solveyourdebts.com</a><br>
<i class="fa fa-phone"></i>1–888-753–2227

				  </p>
                </div>
              </div>
            </div>
         </div>


         <div class="row">
            <div class="col-md-12 col-sm-12 mb-30">
              <div class="feature-text text-left">
                <div class="feature-info">
				<h5 style="color:black;">British Columbia</h5>
                  <h3 style="color:black;">CREDIT COUNSELLING SOCIETY</h3>
                  <p class="text text-justify">


<a href="https://www.nomoredebts.org/canada/bc/credit-counselling.html" target="_blank"   onclick="ga('send', 'event', 'external links', 'credit consellors', 'http://nomoredebts.org');"><i class="fa fa-globe"></i>nomoredebts.org</a><br>
<i class="fa fa-phone"></i>1–888-527–8999

</p>
                </div>
              </div>
            </div>
         </div>

       </div>
     </div>
  </div>
  </div>

</section>


@endsection

@section('scripts')

	<script type="text/javascript">
		$("#search").keyup(function () {

	        var filter = $(this).val(), count = 0;
	        $(".element-holder h3.small-title").each(function () {

	            //var current = $('h3.small-title').attr('data-name');
	            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
	            	$(this).closest('.col-xs-12.col-sm-12').fadeOut();
	            } else {
	                $(this).closest('.col-xs-12.col-sm-12').show();
	                count++;
	            }
	        });

	    });
	</script>

@endsection

