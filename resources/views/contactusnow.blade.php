@extends('layouts.app')

@section('content')
</div>
 <header class="page-intro bg-08">
<div class="container">
<article class="block-txt rellax" data-rellax-speed="7">
<div class="v-center parallaxEffect">
<h1 class="title">Contact Us Today!</h1>
<h2 class="subtitle-lato">We’re always happy to hear from you. Tell us about your experience with our service and what we can do to serve you even better.</h2>
</div>
</article>
</div>
</header>
<section id="bg-content2" class="bg-img fixed">
<div class="container">
<div id="page-title" class="col-xs-12">
<h2 class="title">Contact us</h2>
</div>
<div id="contact-us-page"></div> <div class="col-xs-12" style="padding-bottom: 40px;">
<ul id="toggle-view-mobile" class="results">
<li>
<h3>Let us know how we can help.</h3>
<br>
<p class="text">Whether you’re using phone or email, our Customer Service Advisors are ready to help: <br><br><strong>Monday to Friday 9am to 9pm PST</strong> (Pacific Standard Time)<br><strong>Saturday 9am to 5pm PST</strong> (Pacific Standard Time).<br>
<strong>Sunday 12pm to 5pm PST</strong> (Pacific Standard Time).</p>
<p class="text">
We’re happy to help.
</p>

<p class="answers">Answers:</p>
</li>
</ul>
</div>
<div class="col-xs-12" id="contact-info-mobile">
<ul id="toggle-view-mobile">

</ul>
</div>
</div>
</section>
<script type="text/javascript">
    mobileFormat = "";
</script>
<div tabindex="-1" class="modal fade" id="dialog-email" role="dialog">
<div class="vertical-alignment-helper">
<div class="modal-dialog vertical-align-center">

<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">CONTACT US</h4>
<button type="button" class="btn close active" data-dismiss="modal">x</button>
</div>
<div class="modal-body">
<div class="container-fluid text-center">

<div id="contact-info-email">
<ul id="toggle-view-email">
<li class="email_contact" id="contact-us">
<h3 id="3" onClick="ga('send', 'event', 'contact us', 'ouverture tiroir', 'email us');"><img src="{{url('/images/svg/envelop.svg')}}" alt="email contact" width="30"> Email us<span>+</span></h3>
<div class="block-p active col-lg-12 form-contact" style="display:none;">
<div class="alert alert-info">PayDay is on the leading edge of the tech-based smart loan industry. We make fast, easy and transparent loans available to our customers. Customer Service Agents are available exclusively through email during the following times:</div><br>
<form id="email_contact" action="/contact" method="post">
<div class="col-sm-12 col-xs-12 alpha form-group">
<div>
<label class="col-sm-3 col-xs-12">Subject </label>
</div>
<div class="alpha omega col-sm-9 col-xs-12">
<select id="messages_reason_id" name="messages_reason_id" class="form-control form-control forminput ui dropdown item selection col-xs-12" required="required">
<option value=""></option>
<option value="1">Loan inquiries</option>
<option value="5">Document Inquiries</option>
<option value="17">Payment Inquiries</option>
<option value="18">Technical Support</option>
<option value="7">Collection Inquiries</option>
<option value="8">Legal Inquiries</option>
<option value="19">Reward Inquiries</option>
<option value="13">Complaint</option>
<option value="14">Media</option>
</select> </div>
</div>
<div class="col-sm-12 col-xs-12 alpha form-group">
<div>
<label class="col-sm-3 col-xs-12">Full name </label>
</div>
<div class="alpha omega col-sm-9 col-xs-12">
<input type="text" id="full_name" name="full_name" value="" class="form-control form-control forminput col-xs-12" placeholder="Full name" required="required" /> </div>
</div>
<div class="col-sm-12 col-xs-12 alpha form-group">
<div>
<label class="col-sm-3 col-xs-12">Email </label>
</div>
<div class="alpha omega col-sm-9 col-xs-12">
<input type="email" id="email" name="email" value="" class="form-control form-control forminput col-xs-12" placeholder="name@example.com" required="required" /> </div>
</div>
<div class="col-sm-12 col-xs-12 alpha form-group">
<div>
<label class="col-sm-3 col-xs-12">Confirm Email </label>
</div>
<div class="alpha omega col-sm-9 col-xs-12">
<input type="email" id="conf_email" name="conf_email" value="" class="form-control form-control forminput col-xs-12 col-sm-12" placeholder="name@example.com" required="required">
</div>
</div>
<div class="col-sm-12 col-xs-12 alpha form-group">
<div>
<label class="col-sm-3 col-xs-12">Mobile phone </label>
</div>
<div class="alpha omega col-sm-9 col-xs-12">
<input type="text" id="mobile_phone" name="mobile_phone" value="" class="form-control forminput form-control col-xs-12" placeholder="Phone number" required="required" /> </div>
</div>
<div class="col-sm-12 col-xs-12 alpha form-group">
<div>
<label class="col-sm-3 col-xs-12">Province </label>
</div>
<div class="alpha omega col-sm-9 col-xs-12">
<select id="address_state_id" name="address_state_id" class="form-control form-control forminput col-xs-12 ui dropdown item" required="required">
<option value=""></option>
<option value="1">Quebec</option>
<option value="2">British Columbia</option>
<option value="3">Ontario</option>
<option value="4">Nova Scotia</option>
<option value="5">New Brunswick</option>
<option value="6">Manitoba</option>
<option value="7">Alberta</option>
<option value="8">Prince Edward Island</option>
<option value="9">Saskatchewan</option>
<option value="10">Newfoundland and Labrador</option>
<option value="11">Nunavut</option>
<option value="12">Northwest Territories</option>
<option value="13">Yukon</option>
</select> </div>
</div>
<div class="col-sm-12 col-xs-12 alpha form-group">
<div>
<label class="col-sm-3 col-xs-12 pad_cust">Message </label>
</div>
<div class="alpha omega col-sm-9 col-xs-12">
<textarea id="message" name="message" class="form-control" placeholder="Message" required="required" cols="50" rows="10"></textarea> </div>
</div>
<div class="col-sm-3 col-xs-12 alpha form-group">
</div>
<div class="col-sm-9 col-xs-12 alpha form-group">
<div class="alpha omega col-xs-12">
<input type="submit" name="submit" id="submit" value="Send Message" class="btn btn-green message submit col-xs-12">
</div>
</div>
<div class="errorContainer"></div>
<div id="error_div"></div>
</form>
</div>
</li>
</ul>
</div>
<div id="contact-info-phone">
<ul id="toggle-view-phone">
<li>
<h3 id="1" onClick="ga('send', 'event', 'contact us', 'ouverture tiroir', 'call us');"><img src="{{url('/images/svg/call.svg')}}" alt="contact call" width="28"> Call Us<span>+</span></h3>
<div class="block-p active call-me" style="display:none;">
<div class="alert alert-info">PayDay is on the leading edge of the tech-based smart loan industry. We make fast, easy and transparent loans available to our customers. Customer Service Agents are available exclusively through email during the following times: </div><br>
<div class="alpha omega col-sm-12 col-xs-12">
<div class="alpha omega col-sm-8 col-xs-12">
<p class="text">You can <strong>call us at </strong>(Toll free): </p>
</div>
<div class="alpha omega col-sm-3 col-xs-12">
<a href="tel:18444192274" class="btn btn-green">1 (844) 419-2274</a>
</div>
</div>
<div class="alpha omega col-sm-12 col-xs-12">
<div class="alpha omega col-sm-8 col-xs-12">
<p class="text">Toronto Area : </p>
</div>
<div class="alpha omega col-sm-3 col-xs-12">
<a href="tel:4162221176" class="btn btn-green">(416) 222-1176</a>
</div>
</div>
<p class="text"><strong>We will be happy to help you!</strong></p>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
