@extends('layouts.app')

@section('content')
</div>
<style>
    .best-lender{
        margin:1em 0;
    }
.count{
	padding: 40px 47px;
	border: 11px solid #fff;
	border-radius: 50%;
	/* margin-top: 5px; */
	font-size: 60px;
	font-weight: bolder;
}
#cashback .alpha{
	text-align: center;
	margin-top: 70px;
}
.education-center .main_applicationStep .rebate_bg {
	background: #BCA39D;
	height: auto;
	padding: 40px 20px !important;
	/*margin-left: 100px;
	margin-right: 100px;*/
}
.education-center .main_applicationStep .rebate_bg.eleft {
	margin-right:0 ;
		margin-left:0;
}
.education-center .main_applicationStep .rebate_bg.eright {
	margin-right:0 ;
		margin-left:0;
}
.top_content{
	margin-bottom: 40px;
}
	/*@media only screen and (max-width: 812px){
		.count {
		    padding: 20px 27px;
		    font-size: 40px;
		}
		.education-center .main_applicationStep .rebate_bg  {
		    margin-left: 100px;
		    margin-right: 100px;
		    padding-top: 20px !important;
		    padding-bottom: 20px !important;
		    position: relative;
		}
	}
	*/
	/*@media only screen and (max-width: 767px){*/
		.education-center .main_applicationStep .rebate_bg,.education-center .main_applicationStep .rebate_bg.eleft ,.education-center .main_applicationStep .rebate_bg.eright  {
		    /*margin-left: 20px;
		    margin-right: 20px;*/
		    padding-top: 20px !important;
		    padding-bottom: 20px !important;
		    position: relative;
		}
		#bg-content2 .rebate_bg #cashback {
			color: #fff;
			padding-top: 40px;
		}
		#bg-content2 .rebate_bg.eleft #cashback .alpha {
			text-align: left;
			left: -54px;
			/* margin-top: 70px; */
			position: absolute;
			top: -90px;
			margin: 20px;
		}
		#bg-content2 .rebate_bg.eright #cashback .alpha {
			text-align: right;
			right: -54px;
			/* margin-top: 70px; */
			position: absolute;
			top: -92px;
			margin: 20px;
		}
		#bg-content2 .rebate_bg #cashback .title_h{
			width: 100%;
			text-align: center;
			/*float: right;*/
		}
		.eleft .count {
		    padding: 8px 11px 2px 35px;
		    font-size: 70px;
		}
		.eright .count {
		    padding: 8px 35px 2px 11px;
		    font-size: 70px;
		}
		#bg-content2 #cashback p{
			display: inline-block;
		}
		.education-center .main_applicationStep .rebate_bg.eleft .title_h,.education-center .main_applicationStep .rebate_bg.eleft .text{
			text-align: left !important;
		}
		.education-center .main_applicationStep .rebate_bg.eright .text,.education-center .main_applicationStep .rebate_bg.eright .title_h{
			text-align: left !important;
		}
		.education-center .main_applicationStep .rebate_bg.eleft .content_right{
			float: right;
		}

		/*<!--new code for controlling number considerations code-->*/
		.circleBase {
    					border-radius: 50%;
    					behavior: url(PIE.htc); /* remove if you don't care about IE8 */
			}

			.circleSize {
    				width: 500px;
    				height: 500px;


			}

			.textTranslate {

				transform: translate(12px, 12px);

			}

			.color {    background-color: #e8b202;  }

			#box1 {

				transform: translate(-53px, 100px);
				background-color: #dba246;


			}

			#box2 {

				float: right;
				transform: translate(-30px, -130px);
				background-color: #dba246;

			}

			#box3 {

				transform: translate(20px, 100px);
				background-color: #dba246;

			}

			#box4 {

				float: right;
				transform: translate(45px, -320px);
				background-color: #dba246;


			}

			#box5 {

				transform: translate(0px, 100px);
				background-color: #dba246;

			}

			#box6 {

				float: right;
				transform: translate(500px, -220px);
				background-color: #dba246;

			}






		@media only screen and (max-width: 1155px){
			.main_applicationStep .rebate_bg h2.title_h {
				font-size: 30px !important;
			}
			#bg-content2 .rebate_bg.eright #cashback .alpha {
				text-align: left;
				left: -54px;
			}
			#bg-content2 .rebate_bg #cashback {
				color: #fff;
				padding-top: 50px;
			}
			#bg-content2 .rebate_bg.eright #cashback .alpha{
				top:-92px;
			}
			.education-center .main_applicationStep .rebate_bg.eright .content_right{
				float:right;
			}
			.eleft .count, .eright .count{
				padding: 10px 15px 0px 32px;
			}

			#box1 {


				background-color: #dba246;
				float: none;
				transform: translate(0px, 0px);
				margin-left: auto;
  				margin-right: auto;
  				width: 80%;


			}

			#box2 {



				background-color: #dba246;
				float: none;
				transform: translate(0px, 0px);
				margin-left: auto;
  				margin-right: auto;
  				width: 80%;

			}

			#box3 {


				background-color: #dba246;
				float: none;
				transform: translate(0px, 0px);
				margin-left: auto;
  				margin-right: auto;
  				width: 80%;

			}

			#box4 {



				background-color: #dba246;
				float: none;
				transform: translate(0px, 0px);
				margin-left: auto;
  				margin-right: auto;
  				width: 80%;

			}

			#box5 {


				background-color: #dba246;
				float: none;
				transform: translate(0px, 0px);
				margin-left: auto;
  				margin-right: auto;
  				width: 80%;

			}

			#box6 {



				background-color: #dba246;
				float: none;
				transform: translate(0px, 0px);
				margin-left: auto;
  				margin-right: auto;
  				width: 80%;

			}

		}

		@media only screen and (max-width: 414px){
			.education-center .main_applicationStep .rebate_bg,.education-center .main_applicationStep .rebate_bg.eleft ,.education-center .main_applicationStep .rebate_bg.eright  {
				margin-left: 10px;
				margin-right: 10px;
			}
			#bg-content2 .rebate_bg #cashback .alpha {
				top: -93px;

			}
			#bg-content2 .rebate_bg #cashback{
				padding-top: 50px;
			}
			.eleft .count,.eright .count {
			    padding: 13px 14px 4px 31px;
			    font-size: 45px;
			}

			#bg-content2 .rebate_bg.eleft #cashback .alpha {
				left: -46px;
			}
			#bg-content2 .rebate_bg.eright #cashback .alpha{
				left: -46px;
			}

			#box1 {


				background-color: #dba246;
				float: none;
				transform: translate(0px, 0px);
				margin-left: auto;
  				margin-right: auto;
  				width: 80%;


			}

			#box2 {

				background-color: #dba246;
				float: none;
				transform: translate(0px, 0px);
				margin-left: auto;
  				margin-right: auto;
  				width: 80%;

			}

			#box3 {


				background-color: #dba246;
				float: none;
				transform: translate(0px, 0px);
				margin-left: auto;
  				margin-right: auto;
  				width: 80%;

			}

			#box4 {



				background-color: #dba246;
				float: none;
				transform: translate(0px, 0px);
				margin-left: auto;
  				margin-right: auto;
  				width: 80%;

			}

			#box5 {


				background-color: #dba246;
				float: none;
				transform: translate(0px, 0px);
				margin-left: auto;
  				margin-right: auto;
  				width: 80%;

			}

			#box6 {

				background-color: #dba246;
				float: none;
				transform: translate(0px, 0px);
				margin-left: auto;
  				margin-right: auto;
  				width: 80%;

			}
		}




	</style>
<header class="page-intro bg-04">
<div class="container">
<article class="block-txt rellax" data-rellax-speed="7">
<div class="v-center parallaxEffect">
<h1 class="title">Be informed</h1>
<h2 class="subtitle-lato" style = "color : black; ">Here you’ll find valuable information about making the best choice for your financial situation: covering everything from budgeting tips to debt management</h2>
</div>
</article>
</div>
</header>


<section id="bg-content2" class="no-padding">
    <div class="main_applicationStep animation-container-04 container" id="application-step" style="margin: 0 auto !important;">


		</style>


        <div class="container top_content txt-center">
            <h2 class="title">What’s the best loan for you?</h2>
        </div>
        <section class="custome rebate_bg eleft circleBase circleSize" id = "box1" >
            <div id="cashback" class="row">
                <div class="col-xs-12  animation-stack-04" data-os-animation-delay="0.25s" data-os-animation="fadeInLeft" style="animation-delay: 0.25s; ">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 alpha omega img_left">
                        <span class="count">01</span>
                    </div>
                    <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 content_right textTranslate" >
                        <h2 class="title_h">CONSIDER YOUR OPTIONS</h2>
                        <p class="text">There are a lot of borrowing options out there. Don’t hesitate to ask important questions. You have to find out how reliable a lender is going to be. Choose a company with which you feel comfortable and confident.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="custome rebate_bg eright circleBase circleSize" id = "box2">
            <div id="cashback" class="row">
                <div class="col-xs-12 animation-stack-04" data-os-animation-delay="1s" data-os-animation="fadeInRight" style="animation-delay: 1s;">

                    <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 content_right textTranslate" >
                        <h2 class="title_h">WHAT CAN YOU REALLY AFFORD?</h2>
                        <p class="text">A loan can be a big help in times of trouble. But overextending yourself can actually make things worse. Don’t bit off more than you can chew. Make sure your loan is an amount you’ll be able to repay.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 alpha omega img_left">
                        <span class="count">02</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="custome rebate_bg eleft circleBase circleSize" id = "box3">
            <div id="cashback" class="row">
                <div class="col-xs-12  animation-stack-04" data-os-animation-delay="0.25s" data-os-animation="fadeInLeft" style="animation-delay: 0.25s;">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 alpha omega img_left">
                        <span class="count">03</span>
                    </div>
                    <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 content_right textTranslate" >
                        <h2 class="title_h">UNDERSTAND YOUR FEE OBLIGATIONS</h2>
                        <p class="text">Not every lender out there is as transparent as PayDay. Some have hidden fees. Some will even apply a surcharge for early repayment! Make sure you understand your fee obligations before you sign on the dotted line.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="custome rebate_bg eright circleBase circleSize" id = "box4">
            <div id="cashback" class="row">
                <div class="col-xs-12 animation-stack-04" data-os-animation-delay="1s" data-os-animation="fadeInRight" style="animation-delay: 1s;">

                    <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 content_right textTranslate" >
                        <h2 class="title_h">OPT FOR FLEXIBILITY</h2>
                        <p class="text">The arrangement that best suits you is the one closest tailored to your specific situation. That requires flexibility in the borrowing agreement. Can you repay in multiple installments? Are there additional charges hidden in the agreement? Will you get dinged for an early repayment?
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 alpha omega img_left">
                        <span class="count">04</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="custome rebate_bg eleft circleBase circleSize" id = "box5">
            <div id="cashback" class="row">
                <div class="col-xs-12  animation-stack-04" data-os-animation-delay="0.25s" data-os-animation="fadeInLeft" style="animation-delay: 0.25s;">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 alpha omega img_left">
                        <span class="count">05</span>
                    </div>
                    <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 content_right textTranslate" >
                        <h2 class="title_h">OPT FOR TRANSPARENCY</h2>
                        <p class="text">Conscientious and responsible lenders are transparent about their agreements, conditions, limits and fees. Before you take a loan with any company, makes sure they provide all the relevant information in a clear and easy to understand way.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="custome rebate_bg eright circleBase circleSize color" id = "box6">
            <div id="cashback" class="row">
                <div class="col-xs-12 animation-stack-04" data-os-animation-delay="1s" data-os-animation="fadeInRight" style="animation-delay: 1s;">

                    <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 content_right textTranslate" >
                        <h2 class="title_h">WATCH OUT FOR FRAUD</h2>
                        <p class="text">Not all online lenders are completely ethical or even honest. In this it is buyer beware. Don’t fall victim to the scammer’s trap. Here are some tips to keep you out of trouble:
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 alpha omega img_left">
                        <span class="count">06</span>
                    </div>
                </div>
            </div>
        </section>

    </div>
	<!-- <p class="text-center best-lender"> <a href="{{url('/best-lender-loans-canada')}}" >Check our Comparison chart to see how we stand out from the crowd.</a></p> -->
</section>


<section id="beaver-tab" class="dark-blue">
<div class="container">
<div class="how-wrk-last-table-cntnt">
	<div class="how-wrk-last-table-lft">
		<ul>
			<li id="elloan" class="active"><a href="#how-wrk" data-toggle="tab">Loan Options</a></li>
			<li id="aprfee" class=""><a href="#apr" data-toggle="tab">Evaluate Your Loan</a></li>
			<li id="gcash" class=""><a href="#getcash" data-toggle="tab">Credit History</a></li>
			<li id="manloan"><a href="#mloan" data-toggle="tab">Budgeting Tips</a></li>
			<li id="reloan"><a href="#repay" data-toggle="tab">Debt Advice</a></li>
		</ul>
	</div>
	<div class="how-wrk-last-table-rght" id="how-wrk">
		<h3>Loan Options</h3>
		<p>Consider these two loan options:</p>
		<ul>
			<h4>Secure loans</h4>
			<li>The secured loan is the kind you think of when you’re considering a major financial move. It’s what you’re looking at when considering a mortgage or investing in your business. It’s a very complex process and access to it depends upon your assets. These are generally quite large sums that are loaned out over long periods of time. They’ll also be subject to variable interest rates.</li>
		</ul>
		<ul class="unsecure other_provinces">
			<h4>Unsecured loans</h4>
			<li>On the other hand, there are the kinds of unsecured loans made by PayDay. We offer two kinds of unsecured loans: our cash advance plan or our more flexible plan. These are distinguished by the number of repayment installments involved. Property and personal assets are not required, nor are they tied to the loan. Being unsecured in this way, these loans, of smaller amounts, for briefer spans of time, have higher interest charges. Though unsecured, your credit rating will be significantly compromised by failure to meet the conditions of your repayment agreement. </li>
		</ul>
	</div>
	<div class="how-wrk-last-table-rght" id="apr">
		<h3>Evaluate your loan</h3>
		<p>Be careful to make a sound evaluation of any loan that you consider. We offer some tips on questions you might ask yourself:</p>
		<ul class="clist">
			<li>Is it a financial emergency that the loan is needed to address? </li>
			<li>Is repayment going to be an excess burden on me financially?</li>
			<li>Are the lender’s terms and conditions, including any possible fees, clear? </li>
			<li>Are there options other than a loan which may solve the problem?</li>
			<li>Have you considered the full burden of responsibility in taking out a loan, including the potential consequences of failure to repay as agreed?</li>
		</ul>
		<p>A payday loan is not a long term solution to financial difficulties. It certainly can help for unexpected, necessary, short term expenses. Used the wrong way, though, there’s a good chance of getting into even deeper financial difficulty. While we do all we can to help you make the best, most responsible decision for your circumstances, at the end of the day, the burden of exercising sound judgment in your financial decisions rest on your shoulders. Be sure you understand what you’re committing to, in taking a loan, and that you can meet those commitments. </p>
	</div>
	<div class="how-wrk-last-table-rght active" id="getcash">
		<h3>Credit History</h3>
		<p>Your credit score is a bit like a delicate flower: easy to damage, much harder to repair. It is a score created from considering your past financial actions and your current debt level. Considering how fragile it can be, it’s important to make sure you don’t engage in behaviour that might damage your credit history.</p>
		<p>There are though some options available for improving your credit score. A couple of the top agencies in USA that can help in this regard are Equifax and TransUnion. Considering how much impact a bad credit rating can have on your financial options, it is smart to look into ways to improve it.</p>
	</div>
	<div class="how-wrk-last-table-rght" id="mloan">
		<h3>Budgeting Tips</h3>
		<p>The backbone of any sound financial strategy is smart budgeting. If you feel like your spending might be getting out of control, it is a good idea to budget your income against your expenses. Keep track of what you’re bringing in and have a realistic picture of what you’re really spending. How do they add up? Do they? This will also help you plan for a loan, as you can confidently identify how much you can afford to put toward repaying any debt you have.
		</p>
		<p>If the numbers aren’t adding up – too much out, not enough in – there are things you can do. Cut back on those nights out with the gang drinking beer. More home cooking and fewer restaurant meals. Make a plan for any long term, high end purchases, so that you know that you can handle them within your exciting budget.
		</p>
	</div>
	<div class="how-wrk-last-table-rght" id="repay">
		<h3>Debt Advice</h3>
		<p>There are options for accelerating your debt reduction. Different lenders and types of credit have difference circumstances, but check into whether you can extend a loan period, possibly you can suspend payments for short time, and you may be able to advance the debt removal through early repayment. </p>
		<p>Debt is a common source of emotional distress in the modern world. Stress and anxiety often plague those facing debt challenges. If you’re looking for some advice, support and insight into making smarter choices, here are some websites that can help:</p>
		<ul>
			<li><a href="#">Financial Consumer Agency of USA</a></li>
			<li><a href="#">MoneyProblems.ca</a></li>
		</ul>
	</div>
</div>
</div>
</section>
@endsection
