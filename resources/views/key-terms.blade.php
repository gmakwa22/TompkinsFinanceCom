@extends('layouts.app')

@section('content')
<section id="bg-content" class="bg-img keyterms" style="">
	<div class="container">
		<div class="col-xs-12 txt-center key-terms-title" id="page-title">
			<h1 class="title">Loan & Financial Key Terms</h1>
			<h2 class="subtitle-lato">
			Do you ever feel like big financial decisions require wading through lawyer jargon that seems calculated to just baffle you? We don’t want you feeling that way about taking out your loan with {{ $privname }}. We want you to be clear about the terms being used. That’s why we avoid bewildering acronyms and stick to clear and simple language. If you’ve any doubt about the definition of terms we use, Use this handy list of key terms.
			</h2>
			<a class="btn btn-green" href="{{$corpregister}}">Get a loan now</a>
		</div>
		<div class="key-terms-block">
			<div class="col-xs-12 trms-cndtn-green-cntnt">
				<ul>
					<li id="a" class=""><a href="javascript:void(0);" onclick="ids('a',1)">A</a></li>
					<li id="b"><a href="javascript:void(0);" onclick="ids('b',4)">B</a></li>
					<li id="c"><a href="javascript:void(0);" onclick="ids('c',8)">C</a></li>
					<li id="d" class=""><a href="javascript:void(0);" onclick="ids('d',23)">D</a></li>
					<li id="e"><a href="javascript:void(0);" onclick="ids('e',26)">E</a></li>
					<li id="f"><a href="javascript:void(0);" onclick="ids('f',28)">F</a></li>
					<li id="g"><a href="javascript:void(0);" onclick="ids('g',32)">G</a></li>
					<li id="h" class=""><a href="javascript:void(0);" onclick="ids('h',0)">H</a></li>
					<li id="i" class=""><a href="javascript:void(0);" onclick="ids('i',34)">I</a></li>
					<li id="j" class=""><a href="javascript:void(0);" onclick="ids('j',0)">J</a></li>
					<li id="k" class=""><a href="javascript:void(0);" onclick="ids('k',0)">K</a></li>
					<li id="l" class=""><a href="javascript:void(0);" onclick="ids('l',36)">L</a></li>
					<li id="m" class=""><a href="javascript:void(0);" onclick="ids('m',0)">M</a></li>
					<li id="n" class=""><a href="javascript:void(0);" onclick="ids('n',39)">N</a></li>
					<li id="o" class="active_tab"><a href="javascript:void(0);" onclick="ids('o',40)">O</a></li>
					<li id="p"><a href="javascript:void(0);" onclick="ids('p',45)">P</a></li>
					<li id="q" class=""><a href="javascript:void(0);" onclick="ids('q',0)">Q</a></li>
					<li id="r"><a href="javascript:void(0);" onclick="ids('r',47)">R</a></li>
					<li id="s"><a href="javascript:void(0);" onclick="ids('s',49)">S</a></li>
					<li id="t"><a href="javascript:void(0);" onclick="ids('t',51)">T</a></li>
					<li id="u"><a href="javascript:void(0);" onclick="ids('u',53)">U</a></li>
					<li id="v"><a href="javascript:void(0);" onclick="ids('v',0)">V</a></li>
					<li id="w"><a href="javascript:void(0);" onclick="ids('w',0)">W</a></li>
					<li id="x"><a href="javascript:void(0);" onclick="ids('x',0)">X</a></li>
					<li id="y" class=""><a href="javascript:void(0);" onclick="ids('y',0)">Y</a></li>
					<li id="z"><a href="javascript:void(0);" onclick="ids('z',0)">Z</a></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-5 terms-cntnt-lft-points">
				<div id="demo">
					<div id="content-1" class="content">
						<ul>
							<li class="fixes a"><a href="javascript:void(0);" onclick="showKey(1);" id="an1" class="active3">Agreement</a></li>
							<li class="fixes a"><a href="javascript:void(0);" onclick="showKey(2);" id="an2">APR</a></li>
							<li class="fixes a"><a href="javascript:void(0);" onclick="showKey(3);" id="an3">arrears</a></li>
							<li class="fixes b"><a href="javascript:void(0);" onclick="showKey(4);" id="an4">balance</a></li>
							<li class="fixes b"><a href="javascript:void(0);" onclick="showKey(5);" id="an5">bank</a></li>
							<li class="fixes b"><a href="javascript:void(0);" onclick="showKey(6);" id="an6">Bounced cheque</a></li>
							 <li class="fixes b"><a href="javascript:void(0);" onclick="showKey(7);" id="an7">Budget</a></li>
							<li class="fixes c"><a href="javascript:void(0);" onclick="showKey(8);" id="an8">Cash advance</a></li>
							<li class="fixes c"><a href="javascript:void(0);" onclick="showKey(9);" id="an9">Cash flow</a></li>
							<li class="fixes c"><a href="javascript:void(0);" onclick="showKey(10);" id="an10">Credit Counselling Canada (CCC)</a></li>
							<li class="fixes c"><a href="javascript:void(0);" onclick="showKey(11);" id="an11">Certified Cheque</a></li>
							<li class="fixes c"><a href="javascript:void(0);" onclick="showKey(12);" id="an12">Certified Financial Planner (CFP)</a></li>
							<li class="fixes c"><a href="javascript:void(0);" onclick="showKey(13);" id="an13">Charge card</a></li>
							<li class="fixes c"><a href="javascript:void(0);" onclick="showKey(14);" id="an14">Charges</a></li>
							<li class="fixes c"><a href="javascript:void(0);" onclick="showKey(15);" id="an15">Cleared balance/Cleared funds</a></li>
							<li class="fixes c"><a href="javascript:void(0);" onclick="showKey(16);" id="an16">Clearing cycle</a></li>
							<li class="fixes c"><a href="javascript:void(0);" onclick="showKey(17);" id="an17">Credit card</a></li>
							<li class="fixes c"><a href="javascript:void(0);" onclick="showKey(18);" id="an18">Credit balance</a></li>
							<li class="fixes c"><a href="javascript:void(0);" onclick="showKey(19);" id="an19">Credit Bureau</a></li>
							<li class="fixes c"><a href="javascript:void(0);" onclick="showKey(20);" id="an20">Credit limit</a></li>
							<li class="fixes c"><a href="javascript:void(0);" onclick="showKey(21);" id="an21">Credit rating</a></li>
							<li class="fixes c"><a href="javascript:void(0);" onclick="showKey(22);" id="an22">Credit report</a></li>
							<li class="fixes d"><a href="javascript:void(0);" onclick="showKey(23);" id="an23">Debit Card</a></li>
							<li class="fixes d"><a href="javascript:void(0);" onclick="showKey(24);" id="an24">Debt</a></li>
							<li class="fixes d"><a href="javascript:void(0);" onclick="showKey(25);" id="an25">Debt consolidation</a></li>
							<li class="fixes e"><a href="javascript:void(0);" onclick="showKey(26);" id="an26">Early repayment</a></li>
							<li class="fixes e"><a href="javascript:void(0);" onclick="showKey(27);" id="an27">Electronic Funds Transfer (EFT) payment</a></li>
							<li class="fixes f"><a href="javascript:void(0);" onclick="showKey(28);" id="an28">Fixed-rate interest</a></li>
							<li class="fixes f"><a href="javascript:void(0);" onclick="showKey(29);" id="an29">Finance and Leasing Association (FLA)</a></li>
							<li class="fixes f"><a href="javascript:void(0);" onclick="showKey(30);" id="an30">Flexible loan</a></li>
							<li class="fixes f"><a href="javascript:void(0);" onclick="showKey(31);" id="an31">Flexpay loan</a></li>
							<li class="fixes g"><a href="javascript:void(0);" onclick="showKey(32);" id="an32">Gross</a></li>
							<li class="fixes g"><a href="javascript:void(0);" onclick="showKey(33);" id="an33">Gross interest rate</a></li>
							<li class="fixes i"><a href="javascript:void(0);" onclick="showKey(34);" id="an34">Interest</a></li>
							<li class="fixes i"><a href="javascript:void(0);" onclick="showKey(35);" id="an35">Interest rate</a></li>
							<li class="fixes l"><a href="javascript:void(0);" onclick="showKey(36);" id="an36">Liquidity</a></li>
							<li class="fixes l"><a href="javascript:void(0);" onclick="showKey(37);" id="an37">Loan</a></li>
							<li class="fixes l"><a href="javascript:void(0);" onclick="showKey(38);" id="an38">Loan period</a></li>
							<li class="fixes n"><a href="javascript:void(0);" onclick="showKey(39);" id="an39">Net</a></li>
							<li class="fixes o"><a href="javascript:void(0);" onclick="showKey(40);" id="an40">Online banking</a></li>
							<li class="fixes o"><a href="javascript:void(0);" onclick="showKey(41);" id="an41">Online payday loans</a></li>
							<li class="fixes o" id="mytest"><a href="javascript:void(0);" onclick="showKey(42);" id="an42">Outstanding balance</a></li>
							<li class="fixes o"><a href="javascript:void(0);" onclick="showKey(43);" id="an43">Over-indebted</a></li>
							<li class="fixes o"><a href="javascript:void(0);" onclick="showKey(44);" id="an44">Overdraft</a></li>
							<li class="fixes p"><a href="javascript:void(0);" onclick="showKey(45);" id="an45">P.A</a></li>
							<li class="fixes p"><a href="javascript:void(0);" onclick="showKey(46);" id="an46">Payday advance</a></li>
							<li class="fixes p"><a href="javascript:void(0);" onclick="showKey(60);" id="an60">Payday loan</a></li>
							<li class="fixes p"><a href="javascript:void(0);" onclick="showKey(55);" id="an55">Penalty charges</a></li>
							<li class="fixes p"><a href="javascript:void(0);" onclick="showKey(56);" id="an56">Personal loan</a></li>
							<li class="fixes p"><a href="javascript:void(0);" onclick="showKey(57);" id="an57">Pre-authorized debit (PAD)</a></li>
							<li class="fixes p"><a href="javascript:void(0);" onclick="showKey(58);" id="an58">Promise date</a></li>
							<li class="fixes r"><a href="javascript:void(0);" onclick="showKey(47);" id="an47">Rate</a></li>
							<li class="fixes r"><a href="javascript:void(0);" onclick="showKey(48);" id="an48">Reoccurring Payment</a></li>
							<li class="fixes r"><a href="javascript:void(0);" onclick="showKey(59);" id="an59">Representative APR</a></li>
							<li class="fixes s"><a href="javascript:void(0);" onclick="showKey(49);" id="an49">Secured loan</a></li>
							<li class="fixes s"><a href="javascript:void(0);" onclick="showKey(50);" id="an50">Short term Loan</a></li>
							<li class="fixes t"><a href="javascript:void(0);" onclick="showKey(51);" id="an51">Transaction</a></li>
							<li class="fixes t"><a href="javascript:void(0);" onclick="showKey(52);" id="an52">Trust Rating</a></li>
							<li class="fixes u"><a href="javascript:void(0);" onclick="showKey(53);" id="an53">Uncleared balance</a></li>
							<li class="fixes u"><a href="javascript:void(0);" onclick="showKey(54);" id="an54">Unsecured loan</a></li>
						</ul>
						<p></p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="agr" style="display: none;">
			<h3>Agreement</h3>
			<p>An agreement is a formalized arrangement created between a minimum of two people or groups. When speaking about a private loan agreement, the agreement is a document that formalizes the terms of the loan between the borrower and the lender. By signing the loan agreement, the borrower is confirming that they promise to follow the terms of repayment. For this reason, it is important to carefully consider the cost and terms of a loan before signing a personal loan agreement. </p>
			</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="aprr" style="display: none;">
					<h3>APR</h3>
					<p>An annual percentage rate (APR) is the annual rate that is charged for borrowing, expressed as a single percentage number that represents the yearly cost of funds over the term of a loan.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="arr" style="display: none;">
					<h3>Arrears</h3>
					<p>If a borrower is behind in loan repayments, or has other credit repayments that are past due, they are described as being in arrears. Being in arrears can negatively affect your credit rating. This can be a stressful situation, so if you find yourself behind on payments, don't keep it bottled up. Getting in touch with creditors or seeking support and advice from credit counselling organizations can help you.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="ball" style="display: none;">
					<h3>Balance</h3>
					<p>The term 'balance' refers to the amount of funds in one's account at a financial institution or financial services organization. A bank account balance can be described as either positive (above 0) or negative (below 0).
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="bank" style="display: none;">
					<h3>Bank</h3>
					<p>A financial institution where individuals, groups and businesses can store, invest or borrow funds. As an additional service, banks also offer products like insurance and currency exchange. The five largest American banks, sometimes called the 'big five', are JPMorgan Chase, Bank of America, Wells Fargo, Citigroup, and U.S. Bank.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="bounce" style="display: none;">
					<h3>Bounced cheque</h3>
					<p>If a bank account does not have enough money to honour payment, then the cheque is considered to have 'bounced'. In the case of a bounced cheque, the bank returns the unpaid cheque to the account holder, and often charges them a Non-Sufficient Funds (NSF) fee.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="budget" style="display: none;">
					<h3>Budget</h3>
					<p>A budget shows money coming in, balanced against money going out. A personal budget should contain your regular income, as well as your regular expenses (such as rent, food, utilities etc.). You are then able to work out how much you can save or spend by calculating the remaining balance. Getting in front of your finances is made much simpler by creating and maintaining a personal budget.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="cadvance" style="display: none;">
					<h3>Cash advance</h3>
					<p>A cash advance is a kind of payday loan, meaning it is a short-term loan intended to be paid back with your next paycheque. {{ $privname }} offers cash advances of up to <span class="text1">$5,000</span>, <span class="text1">24/7</span>.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="cflow" style="display: none;">
					<h3>Cash Flow</h3>
					<p>The term 'cash flow', also known as 'net cash flow', is used to describe the balance of incoming and outgoing funds paid by a person or business.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="ccc" style="display: none;">
					<h3>Credit Counselling Canada (CCC)</h3>
					<p>The national association for Credit Counselling USA (CCC) is a non-profit that works on both the local and state levels across USA. Government agencies and credit counselling groups that are registered as charitable organizations are eligible to be accepted to the CCC association.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="ccheque" style="display: none;">
					<h3>Certified Cheque</h3>
					<p>A certified cheque is drawn on the credit union or bank against the balance in your bank account or a cash deposit into your bank account. Also known as a banker's draft, it typically used for large denominations and is a more secure method to receive money from someone.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="cplanner" style="display: none;">
					<h3>Certified Financial Planner (CFP)</h3>
					<p>The role of a Certified Financial Planner (CFP) is to help you get on track with your finances, recommend financial services to meet your needs, and advise you of the pros and cons of different financial products. Financial advisers typically receive payment either directly (as a one-off fee), a commission, or a combination of the two. The Financial Planning Standards' Counsel (FPSC) regulates financial advisers.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="chargecard" style="display: none;">
					<h3>Charge card</h3>
					<p>A charge card lets you spend money in a very similar way to purchasing with a credit card. The difference is that debts on a charge card must be paid in full each month, while a credit card allows you to make a minimum payment. Many charge card providers will levy high interest fees if the monthly debt is not paid in full and on time.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Charges" style="display: none;">
					<h3>Charges</h3>
					<p>When you pay a financial institutions for the services they provide you or your business, this money is called 'charges'. If the financial institution's services are misused or terms of services are broken, they may also apply a penalty charge, which can include late payment fees, bounced cheques, and unauthorized overdrafts.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="cfund" style="display: none;">
					<h3>Cleared balance/Cleared funds</h3>
					<p>Any kind of credit, including cash, electronic payments, cheques, and overdraft funds, that have completed the clearing cycle are referred to as your cleared balance or cleared funds. Your cleared balance are funds that are ready to access if you want to transfer or withdraw money you can only do so from your cleared balance. As payments go in and out of your account throughout the day (are credited and withdrawn), your cleared balance is updated.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="cleringcycle" style="display: none;">
					<h3>Clearing cycle</h3>
					<p>The process of crediting your account through a cheque or electronic payment is called the 'clearing cycle'. The time for a clearing cycles depends on the type of credit for example, cheques can take up to three days, while Interac is an instant payment.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Creditcard" style="display: none;">
					<h3>Credit card</h3>
					<p>Using a credit card allows you to borrow money, up to your credit limit, to pay for goods and services from most companies. If you opt to only make the minimum required payment, credit card debt can quickly grow out of control,
					since most credit card providers typically charge higher rates of interest in comparison toUsing a credit card allows you to borrow money, up to your credit limit, to pay for goods and services from most companies. If you opt to only make the minimum required payment, credit card debt can quickly grow out of control, since most credit card providers typically charge higher rates of interest in comparison to other kinds of unsecured loans. Paying with a credit card can be a good option if the balance is paid in full every month.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="creditbalance" style="display: none;">
					<h3>Credit balance</h3>
					<p>When your account has a positive balance, the amount of money in your account is referred to as your credit balance.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="CreditBureau" style="display: none;">
					<h3>Credit Bureau</h3>
					<p>A credit bureau is able to provide a person's credit rating by collecting information on individual consumers from a range of sources. In USA, the two most important credit bureaus are Equifax and TransUnion. Credit rating is used by lenders to assess someone's likelihood of repaying a loan, and is therefore a factor when deciding to accept or deny loan applications or determining interest rates. While some lenders use risk-based pricing to charge different rates based on credit rating, {{ $privname }} offers no credit check loans and a simple interest fee structure for all applicants.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Creditlimit" style="display: none;">
					<h3>Credit limit</h3>
					<p>Your lender determines the maximum amount of money you can borrow, which is referred to as your credit limit. At {{ $privname }}, we determine your credit limit through our trust rating system, which can be increased by repaying the loan amount in full and on time.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Creditrating" style="display: none;">
					<h3>Credit rating</h3>
					<p>The credit worthiness of an individual, business, or even a country is described by their credit rating. Also referred to as a credit score, the credit rating is determined by calculating a range of factors such as current assets and liabilities and financial history. If you paid back your credit balances in the past, and continue to make your payments on time, then you will be given a good credit rating. You can maintain this rating by continuing to pay off your credit balance payments on time and in full. You can find more helpful information about credit history and debt management in the {{ $privname }} <a href="{{url('/education-center')}}">Education Centre</a>.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Creditreport" style="display: none;">
					<h3>Credit report</h3>
					<p>Your credit report is a summary of your credit history, including your loans, credit applications, and bill payment behaviour. This information is often compiled by organizations such as credit bureaus, banks and retailers, and is purchased by other companies to be used for credit application assessment. A credit bureau can provide you with a copy of your own credit report.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="DebitCard" style="display: none;">
					<h3>Debit Card</h3>
					<p>A debit card allows you to pay for goods and services by debiting the amount directly from your bank account. Unless you have set up an overdraft with your bank account, there is no credit involved with debit card payments.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Debt" style="display: none;">
					<h3>Debt</h3>
					<p>The term 'debt' refers to the amount of money you owe. You can refer to the {{ $privname }} <a href="{{url('/education-center')}}">Education Centre</a> for helpful advice on debt management.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Debtconsolidation" style="display: none;">
					<h3>Debt consolidation</h3>
					<p>Consolidating a debt is usually when you combine several unsecured loans into one large loan. The benefits of loan consolidation can include a lower interest rate, and the convenience of only managing one loan as opposed to a number of loans.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="DebtEarlyrepayment" style="display: none;">
					<h3>Early repayment</h3>
					<p>An early repayment is when a loan is paid back before the agreed-upon due date. Some lenders may charge a fee for repaying money before the due date, and others do not allow you to pay back a loan early. {{ $privname }} allows you to make an early repayment at any time, without charge simply log in to your account and submit your request for early repayment,
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="EFTpayment" style="display: none;">
					<h3>Electronic Funds Transfer (EFT) payment</h3>
					<p>Provided by the Federal Reserve, this service is an electronic credit paid directly into an American bank or credit union account. The specified amount of the credit can take between 1-3 business days to clear.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Finterest" style="display: none;">
					<h3>Fixed-rate interest</h3>
					<p>This term is used to refer to an interest rate that remains constant over a period of time.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="FLA" style="display: none;">
					<h3>Finance and Leasing Association (FLA)</h3>
					<p>The Finance and Leasing Association (FLA) is the leading trade association for the asset, consumer and motor finance sectors. In addition to {{ $privname }}, the FLA's members include banks and their subsidiaries, building societies, the financial branches of retailers and manufacturing companies, and independent firms. Members of the FLA provide services such as finance and operating leasing, secured and unsecured loans, credit and store cards, personal lease plans and conditional sales.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Flexibleloan" style="display: none;">
					<h3>Flexible loan</h3>
					<p>This kind of loan allows you to make repayments in amounts that are lower or higher than the agreed-upon repayment amount. Some flexible loans may also allow 'payment holidays', meaning that for a specific period of time, no payments are made.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="FlexPayloan" style="display: none;">
					<h3>Flexpay loan</h3>
					<p>The Flexpay loan, available exclusively from {{ $privname }}, gives you an easy repayment schedule with two or three payments over a <span class="text1">7-62</span> days period after your loan is approved.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Gross" style="display: none;">
					<h3>Gross</h3>
					<p>The total value before any deductions are made for example, your gross salary is the total amount you are paid before deductions such as taxes, Social Security and Medicare contributions are applied.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Grossinterestrate" style="display: none;">
					<h3>Gross interest rate</h3>
					<p>The amount of interest earned before the deduction of income tax is applied
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Interest" style="display: none;">
					<h3>Interest</h3>
					<p>Expressed as a percentage rate of the total cash, interest is the amount paid on borrowed money or savings deposited. APR and EAR are among the commonly used interest types. Understanding interest rates is important when comparing financial products and calculating the total cost of repaying credit such as a loan.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Interestrate" style="display: none;">
					<h3>Interest rate</h3>
					<p>A percentage rate of the total cash that is borrowed or deposited into savings.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Liquidity" style="display: none;">
					<h3>Liquidity</h3>
					<p>Usually expressed as a ratio or percentage of the debtor's current liabilities, liquidity describes a debtor's ability to repay debt when it becomes due.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="moneyloan" style="display: none;">
					<h3>Loan</h3>
					<p>Money borrowed under the condition that it is repaid according to the agreed upon terms. There are many different loan types, such as a cash advance or Flexpay loan from {{ $privname }}.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Loanperiod" style="display: none;">
					<h3>Loan period</h3>
					<p>Also referred to as the repayment period, this is the agreed-upon time frame for borrowing money or repaying it and settling the interest. Both the cash advance and Flexpay loans from {{ $privname }} are short-term, with loan periods of <span class="text1">7-34</span> days.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Net" style="display: none;">
					<h3>Net</h3>
					<p>The total value after any deductions are made for example, your net salary is the total amount you are paid after deductions such as taxes, Social Security and Medicare contributions are removed.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Onlinebanking" style="display: block;">
					<h3>Online banking</h3>
					<p>Also referred as e-banking, it allows you to access your bank's services via the web, you can check your account balance, make a fund transfer, order a chequebook, etc.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Onlinepaydayloans" style="display: none;">
					<h3>Online payday loans</h3>
					<p>Online payday loans are short-terms loans (due on your next payday) with application processes that can be done on the internet. Not many lenders can say they offer a 100% online service, since many require faxing, emailing documents, or calling in. {{ $privname }} is a fully online payday loan service the application is completely online and can be completed in less than 15 minutes, with no faxing, calling or mailing needed.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Outstandingbalance" style="display: none;">
					<h3>Outstanding balance</h3>
					<p>The amount of borrowed money that you need to repay to the lender is referred to as the outstanding balance.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Over-indebted" style="display: none;">
					<h3>Over-indebted</h3>
					<p>Being over-indebted means that a borrower cannot afford to pay their debts at the end of a month. The National Credit Act (NCA) defines a consumer as being over-indebted if, after assessing the financial situation, a debt counsellor concludes that the consumer is unable to meet their monthly debt payment.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Overdraft" style="display: none;">
					<h3>Overdraft</h3>
					<p>This banking service allows the consumer to borrow the determined amount against their account. While an authorized overdraft can be a good way to borrow money in the short-term, the bank may charge large penalty fees for an unauthorized overdraft.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="PA" style="display: none;">
					<h3>P.A</h3>
					<p>This is an acronym for 'per annum', which is Latin for 'each year'.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Paydayadvance" style="display: none;">
					<h3>Payday advance</h3>
					<p>Another way to refer to payday loans.</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Paydayloan" style="display: none;">
					<h3>Payday loan</h3>
					<p>Also referred to as a payday or paycheque advance, a payday loan is a type of short-term loan. The fee for borrowing is usually a fixed amount per <span class="text1">$100</span>, and repayment is made on your next payday. A payday loan can be a good option for borrowers who need to cover expenses until next payday and cannot get credit elsewhere. Although some payday loan lenders encourage their customers to use 'rollovers', meaning the owed amount is rolled over and increased from month to month, {{ $privname }} offers no rollover loans so if you work with us, the total amount owed is only the borrowed amount plus interest. </p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Penaltycharges" style="display: none;">
					<h3>Penalty charges</h3>
					<p>This is a type of fee charged for not honouring the terms of a borrowing or banking agreement. For example, a penalty charge may be applied if you have a bounced cheque or unauthorized overdraft. </p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Personalloan" style="display: none;">
					<h3>Personal loan</h3>
					<p>Banks and other lenders may offer personal loans to individuals for expenses such as going on vacation or buying a vehicle. The loan period can typically range from one to five years. {{ $privname }} offers personal loans with repayment periods of 7-62 days.</p>
					</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Pre-authorizeddebit" style="display: none;">
					<h3>Pre-authorized debit (PAD)</h3>
					<p>This instruction gives permission to your financial institution for someone else to withdraw payment from your account. You must be told and agree to the amount of cash being debited and the dates of the debit. This service makes for easier payments for example, many people use PADs to make automatic bill payments. </p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Promisedate" style="display: none;">
					<h3>Promise date</h3>
					<p>The date on which you agree to repay your loan.</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Rate" style="display: none;">
					<h3>Rate</h3>
					<p>The term rate' is used to describe the amount of interest that a lender charges on the money borrowed. Some lenders offer a range of interest rates, but at {{ $privname }} we keep a straightforward system with a steady rate of interest for everyone.
					</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="ReoccurringPayment" style="display: none;">
					<h3>Reoccurring Payment</h3>
					<p>This is a method of making regularly scheduled payments (for fixed amounts, on specific dates) directly from your bank account.</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="RepresentativeAPR" style="display: none;">
					<h3>Representative APR</h3>
					<p>The Representative APR is used to show a potential borrower an example amount of a loan. In addition to other charges associated with the loan, the Representative APR needs to reflect a minimum of <span class="ttext">51%</span> of expected business as a result of an advertisement. It is displayed with the Representative Example like this:
					Representative example:<br>
					Amount of loan <span class="text1">$300</span> for <span class="text1">14</span> days<br>
					Total amount to be repaid <span class="text1">$345.00</span><br>
					Combined interest and fees: <span class="text1">$45.00</span><br>
					 Representative APR: <span class="text1">391.07%</span></p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Securedloan" style="display: none;">
					<h3>Secured loan</h3>
					<p>This type of loan allows the lender to reclaim the loan value amount from assets like property or cars in the event that a borrower does not keep up with the repayment schedule. The most common type of secured loan is a mortgage. While secured loans can give you a lower interest rate, they can also be a big commitment that carries more risk. </p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="ShorttermLoan" style="display: none;">
					<h3>Short term Loan</h3>
					<p>There is a range of definitions of short-term loans, depending on the lender. A bank may define a one-year loan as a kind of short-term loan. The {{ $privname }} definition of a short-term loan is a cash advance or Flexpay loan of up to <span class="text1">62 days</span>.</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Transaction" style="display: none;">
					<h3>Transaction</h3>
					<p>The movement of money is referred to as a transaction for example, when you deposit or withdraw money into your account or make a purchase at a shop, these are types of transactions.</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="TrustRating" style="display: none;">
					<h3>Trust Rating</h3>
					<p>Trust is one of our founding principles here at {{ $privname }}. That's why we developed our Trust Rating system, which means that as we gain confidence in your ability to honour the borrowing agreement and repay your loan in time, we gradually give you more borrowing flexibility. The first time you apply for a loan with us, the maximum amount you can borrow is <span class="text1">$750</span>. As your Trust Rating with us grows, we will raise your credit rating and you will be able to borrow up to <span class="text1">$5,000</span>.</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Unclearedbalance" style="display: none;">
					<h3>Uncleared balance</h3>
					<p>This term refers to the amount of money in your account, including any items you paid or purchased during the day and all the uncleared items.</p>
				</div>
				<div class="col-xs-12 col-sm-7 terms-cntnt-rght-txt" id="Unsecuredloan" style="display: none;">
					<h3>Unsecured loan</h3>
					<p>With this type of loan, the lender cannot immediately claim the loan amount from your assets (such as a car or property) if you do not keep up with the agreed upon repayment schedule. There are still significant penalties associated with failure to repay an unsecured loan, so it is a serious commitment. {{ $privname }}'s cash advance and Flexpay loans are both types of unsecured loans.</p>
				</div>
</div>

	</div>
</section>
@endsection
