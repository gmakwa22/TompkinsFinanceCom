@extends('layouts.app')

@section('content')

</div>
<header class="page-intro bg-12">
<div class="container">
<article class="block-txt rellax" data-rellax-speed="7" style="transform: translate3d(0px, 0px, 0px);">
<div class="v-center parallaxEffect" style="top: 110px;">
<h3 class="title">Compare {{ $privname }} to Other Lenders</h3>
</div>
</article>
</div>
</header>
<section id="bg-content2" class="gray">
<div class="container">
<div id="page-title" class="col-xs-12 txt-center">
<h2 class="title">Comparison Chart for Best Short-Term Loan Rates</h2>
<h3 class="subtitle-lato">Comparison Chart</h3>
</div>
<div id="comparison-chart" class="txt-center">
<div class="col-xs-12 text-comparison">
<p class="text">It can be a daunting job trying to make your way through a comparison of all the various offers for short-term and payday loans. All kinds of variables come into play. Maybe a lender follows loan regulations, applying a fixed rate on the amount borrowed. Or, maybe a lender is unlicensed and charges annual interest and brokerage fees. They may offer longer terms, but is it really going to be your best option? Just when you need funds fast, you have to try and make heads or tails out of all this?</p>
<h2 class="small-title">Compare: We Offer Low-Cost Loans You Get Fast</h2>
<p class="text">This chart makes it easy to figure which short term or online loan best meets your needs and circumstances (based on the Ontario payday loan rates):</p>
</div>
<div class="table-chart m-bottom">
<table class="table table-hover table-responsive sm-bottom" id="comparison-table">
<thead>
<tr>
<th></th>
<th class="align-middle" id=""><b>{{ $privname }}</b></th>
<th id="traditional">Traditional Payday Lenders</th>
<th id="lenders">Lenders with brokerage fee and annual interests</th>
</tr>
</thead>
<tbody>

<tr>
<td class="title">Terms</td>
<td headers="pdloan" data-headers="pdloan">42 day term<br><span class="small">(with the 3 repayments option available)</span></td>
<td headers="traditional" data-headers="Traditional Payday Lenders">10 day term</td>
<td headers="lenders" data-headers="Lenders with brokerage fee and annual interests">70 day term with 32% interest</td>
</tr>
<tr>
<td class="title">Principal issued</td>
<td headers="pdloan" data-headers="">$500</td>
<td headers="traditional" data-headers="Traditional Payday Lenders">$500</td>
<td headers="lenders" data-headers="Lenders with brokerage fee and annual interests">$500</td>
</tr>
<tr>
<td class="title">Broker fee</td>
<td headers="pdloan" data-headers="pdloan">-</td>
<td headers="traditional" data-headers="Traditional Payday Lenders">-</td>
<td headers="lenders" data-headers="Lenders with brokerage fee and annual interests">$229.31</td>
</tr>
<tr>
<td class="title">Cost of borrowing (in percentage)</td>
<td headers="pdloan" data-headers="pdloan">15% of the amount borrowed</td>
<td headers="traditional" data-headers="Traditional Payday Lenders">15% of the amount borrowed</td>
<td headers="lenders" data-headers="Lenders with brokerage fee and annual interests">32% annual</td>
</tr>
<tr>
<td class="title">Cost of borrowing on a 500$ loan</td>
<td headers="pdloan" data-headers="pdloan">$75</td>
<td headers="traditional" data-headers="Traditional Payday Lenders">$75</td>
<td headers="lenders" data-headers="Lenders with brokerage fee and annual interests">$30.68</td>
</tr>
<tr class="total">
<td class="title">Total cost of borrowing (interest fees and brokerage fees)</td>
<td headers="pdloan" data-headers="pdloan">$75</td>
<td headers="traditional" data-headers="Traditional Payday Lenders">$75</td>
<td headers="lenders" data-headers="Lenders with brokerage fee and annual interests">$259.99</td>
</tr>

<tr class="gray">
<th class="text-left">Pro-rated cost of borrowing</th>
<th>&nbsp;&nbsp;</th>
<th></th>
<th></th>
</tr>
<tr>
<td class="title">Pro-rated cost of borrowing per day</td>
<td headers="pdloan" data-headers="pdloan">1.78$ per day</td>
<td headers="traditional" data-headers="Traditional Payday Lenders">7.50$ per day</td>
<td headers="lenders" data-headers="Lenders with brokerage fee and annual interests">3.71$ per day</td>
</tr>
<tr>
<td class="title">Annual percentage rate</td>
<td headers="pdloan" data-headers="pdloan">130%</td>
<td headers="traditional" data-headers="Traditional Payday Lenders">548%</td>
<td headers="lenders" data-headers="Lenders with brokerage fee and annual interests">271%</td>
</tr>

<tr>
<td class="title">Licensed</td>
<td headers="pdloan" data-headers="pdloan">Yes</td>
<td headers="traditional" data-headers="Traditional Payday Lenders">Not all</td>
<td headers="lenders" data-headers="Lenders with brokerage fee and annual interests">No</td>
</tr>
<tr>
<td class="title">Offers a cashback program of up to 20% of the cost of borrowing in return</td>
<td headers="pdloan" data-headers="pdloan">Yes</td>
<td headers="traditional" data-headers="Traditional Payday Lenders">No</td>
<td headers="lenders" data-headers="Lenders with brokerage fee and annual interests">No</td>
</tr>
<tr>
<td class="title">Paperless</td>
<td headers="pdloan" data-headers="pdloan">Yes</td>
<td headers="traditional" data-headers="Traditional Payday Lenders">No</td>
<td headers="lenders" data-headers="Lenders with brokerage fee and annual interests">No</td>
</tr>
<tr>
<td class="title">Long term client benefits status</td>
<td headers="pdloan" data-headers="pdloan">Yes</td>
<td headers="traditional" data-headers="Traditional Payday Lenders">No</td>
<td headers="lenders" data-headers="Lenders with brokerage fee and annual interests">No</td>
</tr>
<tr>
<td class="title">Transfer for all customers in 2 minutes</td>
<td headers="pdloan" data-headers="pdloan">Yes</td>
<td headers="traditional" data-headers="Traditional Payday Lenders">No</td>
<td headers="lenders" data-headers="Lenders with brokerage fee and annual interests">No</td>
</tr>
<tr class="blank">
<td>&nbsp;&nbsp;</td>
<td headers="pdloan" data-headers="pdloan"><a href="/" class="btn btn-green">Best Choice!</a></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</section>

<section id="beaver-tab" class="dark-blue">
<div class="container">
<p class="text text-center">There’s nothing like a direct one-to-one comparison to help you evaluate your options. You should always compare the terms on offer for any online short-term loans that you’re considering. Also, keep in mind that the provinces all have different regulations on rates that licensed lenders can charge. If you’ve got any questions around regulations or rates in your province, our Customer Service Advisors are there to help. {{-- Our <a href="{{url('/loan-calculator')}}" title="Budgeting page">Budgeting page</a> can be a great help in making sure you know what’s the right kind and amount of loan for you. --}}

</p>
<br><br><br>
</div>
</section>

@endsection
