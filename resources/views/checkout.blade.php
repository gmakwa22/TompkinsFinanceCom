@extends('layouts.app')

@section('content')

<style type="text/css">
    
.credit-card-box .panel-title {
    display: inline;
    font-weight: bold;
}
.credit-card-box .form-control.error {
    border-color: red;
    outline: 0;
    box-shadow: inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(255,0,0,0.6);
}
.credit-card-box label.error {
  font-weight: bold;
  color: red;
  padding: 2px 8px;
  margin-top: 2px;
}
.credit-card-box .payment-errors {
  font-weight: bold;
  color: red;
  padding: 2px 8px;
  margin-top: 2px;
}
.credit-card-box label {
    display: block;
}
/* The old "center div vertically" hack */
.credit-card-box .display-table {
    display: table;
}
.credit-card-box .display-tr {
    display: table-row;
}
.credit-card-box .display-td {
    display: table-cell;
    vertical-align: middle;
    width: 50%;
}
.credit-card-box .panel-heading img {
    min-width: 180px;
}
label#email-error {
    padding-left: 29%;
}

</style>
<div class="jumbotron">
    <img src="{{ asset('images/home.png') }}" style="width: 100%;">
</div>

<section class="checout_main">
    <div class="container">
        <div class="py-5 text-center">
            <h2>Checkout form</h2>
            <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        </div>
        @if(Session::has('flash_message_error'))    
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_error') !!}</strong>
            </div>
        @endif 
        @if(Session::has('flash_message_success'))    
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_success') !!}</strong>
            </div>
        @endif 
        <div class="row">
            <div class="col-md-12">
                <form role="form" id="payment-form" method="POST">
                    {{ csrf_field() }}
                    <h4 class="mb-3">Update</h4>
                    <div class="form-row row">
                        <div class="form-group col-md-6">
                            <div class="form-group col-md-6 row">
                                <label for="status">Price</label>
                                <input type="text" name="price_agent" id="price_agent" class="form-control" disabled="" value="75">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="plan_name">Agent Quantity:</label>
                                <input type="number" min="1" name="agent_quantity" id="agent_quantity" class="form-control" value="1">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 order-md-1">
                        <h4 class="mb-3">Agent address</h4>
                        <div class="agent_Form first_class">
                            <input type="hidden" name="hidden_agent" value="1" id="agent_hidden">
                            <div class="form-group row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">First name</label> 
                                    <input type="text" id="firstName" name="firstName[]" placeholder="First Name"  value="{{ old('firstName') }}" class="form-control">
                                </div> 
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Last name</label>
                                     <input type="text" id="lastName" name="lastName[]" placeholder="Last Name" value="{{ old('lastName') }}" class="form-control">
                                </div>
                             </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="lastName">User name</label>
                                    <input id="text_id" type="text" class="form-control username" name="username[]"  value="{{ old('username') }}" placeholder="Username">
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName">Email</label>
                                    <input id="email_id" type="text" class="form-control check_Emailval" name="email[]"  value="{{ old('email') }}" placeholder="Email" pass_id="email0" pass_id1="emails0">
                                    <span id="email0" class="help-inline" style="display:none;">Email already exist.</span>
                                    <span id="emails0" class="help-inline" style="display:none;">Email used multiple time.</span>
                                </div>
                            </div>     
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-bottom: 20px;">
                        <h4 class="mb-3">Billing address</h4>
                            <div class="form-group  row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">First name</label>
                                    <input type="text" class="form-control" id="billing_firstName" name="billing_firstName" placeholder="First Name" value="{{ old('billing_firstName') }}" >
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Last name</label>
                                    <input type="text" class="form-control" id="billing_lastName" placeholder="Last Name" value="{{ old('billing_lastName') }}"  name="billing_lastName">
                                </div>
                            </div>

                            <div class="form-group row ">
                                <div class="col-md-12">
                                    <label for="firstName">Phone Number</label>
                                    <input id="phone_no" type="text"  placeholder="Phone Number" class="form-control" name="phone_no" value="{{ old('phone_no') }}" >
                                </div>
                            </div>

                            <div class="form-group row ">
                                <div class="col-md-12">
                                    <label for="firstName">Mobile Number</label>
                                    <input id="mobile_no" type="text"  placeholder="Mobile Number" class="form-control" name="mobile_no" value="{{ old('mobile_no') }}" >
                                </div>
                            </div>

                            <div class="form-group row ">
                                <div class="col-md-12">
                                    <label for="firstName">Licence Number</label>
                                    <input id="licence_number" type="text"  placeholder="Licence Number" class="form-control" name="licence_number" value="{{ old('licence_number') }}" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                     <label for="agent_id">Agent ID</label>
                                    <input id="agent_id" type="text"  placeholder="Business Name" class="form-control" name="agent_id" value="{{ old('agent_id') }}" >
                                </div>
                            </div>
                            <div class="form-group row ">
                                <div class="col-md-12">
                                    <label for="firstName">ABN Number</label>
                                    <input id="abn_number" type="text"  placeholder="ABN Number" class="form-control" name="abn_number" value="{{ old('abn_number') }}" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="firstName">Address</label>
                                    <input id="address" type="text"  placeholder="Address" class="form-control" name="address" value="{{ old('address') }}" >
                                </div>
                            </div>
                            <div class="form-group row ">
                                <div class="col-md-12">
                                    <label for="firstName">Web Address</label>
                                    <input id="web_address" type="text"  placeholder="Web Address" class="form-control" name="web_address" value="{{ old('web_address') }}" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <!-- <div class="col-md-5 mb-3">
                                    <label for="country">Country</label>
                                    <select class="custom-select d-block w-100 form-control" id="country" required="">
                                      <option value="">Choose...</option>
                                      <option>United States</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">State</label>
                                    <select class="custom-select d-block w-100 form-control" id="state" required="">
                                      <option value="">Choose...</option>
                                      <option>California</option>
                                    </select>
                                </div> -->
                                <div class="col-md-12 mb-3">
                                    <label for="zip">Zipcode</label>
                                    <input type="text" class="form-control" id="zip" placeholder="Zipcode" name="zipcode" value="{{ old('zipcode') }}" >
                                </div>
                            </div>

                            <h4 class="mb-3">Payment</h4>

                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" checked="" value="paypal">
                                    <label class="custom-control-label" for="paypal">Paypal</label>
                                </div>
                            </div>
                            <!-- <div class="card_Details">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="cardNumber">CARD NUMBER</label>
                                            <div class="input-group">
                                                <input 
                                                    type="tel"
                                                    class="form-control"
                                                    name="cardNumber"
                                                    placeholder="Valid Card Number"
                                                    autocomplete="cc-number"
                                                    required autofocus 
                                                value="{{ old('cardNumber') }}"  />
                                                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                            </div>
                                        </div>                            
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-7 col-md-7">
                                        <div class="form-group">
                                            <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                            <input 
                                                type="tel" 
                                                class="form-control" 
                                                name="cardExpiry"
                                                placeholder="MM / YY"
                                                autocomplete="cc-exp"
                                                required 
                                            value="{{ old('cardExpiry') }}"  />
                                        </div>
                                    </div>
                                    <div class="col-xs-5 col-md-5 pull-right">
                                        <div class="form-group">
                                            <label for="cardCVC">CV CODE</label>
                                            <input 
                                                type="tel" 
                                                class="form-control"
                                                name="cardCVC"
                                                placeholder="CVC"
                                                autocomplete="cc-csc"
                                                required
                                            value="{{ old('cardCVC') }}"  />
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            
                            <div class="row">
                                <div class="col-xs-12">
                                    <div id="dropin-container"></div>
                                </div>
                            </div>
                           


                            <div class="row">
                                <div class="col-xs-12">
                                    <input id="submit-button" class="btn btn-success btn-lg btn-block" type="submit" name="submit" value="Continue to checkout">
                                </div>
                            </div>
                            <div class="row" style="display:none;">
                                <div class="col-xs-12">
                                    <p class="payment-errors"></p>
                                </div>
                            </div>
                        
                            </div>
                        </div>
                    </div>  
                </form>
            </div> 
        </div>
    </div>
</section> 




@endsection


@section('scripts')

<script type="text/javascript">
    $(document).ready(function(){
        $("#agent_quantity").on('change', function () {
            var agent_quantity = $(this).val();
            var agent_hidden = $('#agent_hidden').val();
            if(agent_quantity > agent_hidden)
            {
                $("#price_agent").val( 75*agent_quantity);   
                if(agent_quantity > 1)
                {
                    for (i = agent_hidden; i < agent_quantity; i++) 
                    { 
                        $('.agent_Form:last').after('<div class="agent_Form" id="clone'+i+'"><div class="form-group row"><div class="col-md-6 mb-3"><label for="firstName">First name</label> <input type="text" id="firstName" name="firstName[]" placeholder="First Name" value="{{ old('firstName') }}" class="form-control"></div> <div class="col-md-6 mb-3"><label for="lastName">Last name</label> <input type="text" id="lastName" placeholder="Last Name" value="{{ old('lastName') }}" name="lastName[]" class="form-control"></div></div> <div class="form-group row"><div class="col-md-6"><label for="lastName">User name</label><input id="text_id'+i+'" type="text" name="username[]" value="{{ old('username') }}" placeholder="Username" class="form-control username"></div> <div class="col-md-6"><label for="lastName">Email</label> <input id="email'+i+'" type="text" name="email[]" placeholder="Email" value="{{ old('email') }}" class="form-control check_Emailval" pass_id="email_id'+i+'" pass_id1="emails'+i+'"><span id="email'+i+'" class="help-inline" style="display:none;">Email already exist.</span><span id="emails'+i+'" class="help-inline" style="display:none;">Email used multiple time.</span></div></div></div>');
                    }
                } 
                $('#agent_hidden').val(agent_quantity);
            }
            else
            {
                $("#price_agent").val( 75*agent_quantity);   
                for(i = agent_hidden; i > agent_quantity; i--)
                {
                    //alert(i);
                    $('#clone'+(i-1)).remove();
                }       
                $('#agent_hidden').val(agent_quantity);
            }
            
        });
    });
</script>

<!-- <script type="text/javascript">
    
        var $form = $('#payment-form');
        
        $('input[name=cardNumber]').payment('formatCardNumber');
        $('input[name=cardCVC]').payment('formatCardCVC');
        $('input[name=cardExpiry').payment('formatCardExpiry');

        /* Form validation using Stripe client-side validation helpers */
        jQuery.validator.addMethod("cardNumber", function(value, element) {
            return this.optional(element) || Stripe.card.validateCardNumber(value);
        }, "Please specify a valid credit card number.");

        jQuery.validator.addMethod("cardExpiry", function(value, element) {    
            /* Parsing month/year uses jQuery.payment library */
            value = $.payment.cardExpiryVal(value);
            return this.optional(element) || Stripe.card.validateExpiry(value.month, value.year);
        }, "Invalid expiration date.");

        jQuery.validator.addMethod("cardCVC", function(value, element) {
            return this.optional(element) || Stripe.card.validateCVC(value);
        }, "Invalid CVC.");

        validator = $form.validate({
            rules: {
                cardNumber: {
                    required: true,
                    cardNumber: true            
                },
                cardExpiry: {
                    required: true,
                    cardExpiry: true
                },
                cardCVC: {
                    required: true,
                    cardCVC: true
                }
            },
            highlight: function(element) {
                $(element).closest('.form-control').removeClass('success').addClass('error');
            },
            unhighlight: function(element) {
                $(element).closest('.form-control').removeClass('error').addClass('success');
            },
            errorPlacement: function(error, element) {
                $(element).closest('.form-group').append(error);
            }
        });

        paymentFormReady = function() {
            if ($form.find('[name=cardNumber]').hasClass("success") &&
                $form.find('[name=cardExpiry]').hasClass("success") &&
                $form.find('[name=cardCVC]').val().length > 1) {
                return true;
            } else {
                return false;
            }
        }

        $form.find('.subscribe').prop('disabled', true);
        var readyInterval = setInterval(function() {
            if (paymentFormReady()) {
                $form.find('.subscribe').prop('disabled', false);
                clearInterval(readyInterval);
            }
        }, 250);
</script> -->

<script type="text/javascript">
    $(document).on("keyup",".check_Emailval",function(){
        //console.log(temp);
        var email = $(this).val();
        var error = $(this).attr('pass_id');
        var error1 = $(this).attr('pass_id1');
        var temp = $('input[name^=email]').map(function(idx, elem) { return $(elem).val(); }).get();
        var numOccurences = $.grep(temp, function (elem) { return elem === email; }).length;
        //alert(numOccurences);
        if(numOccurences > 1)
        {
            $('#'+error1).css({'display':'block'});
        }
        else
        {
            $('#'+error1).css({'display':'none'});
        }

        $.ajax({
            type : 'post',
            url:"{{url('email_check')}}",
            data:{'email':email, _token: '{{csrf_token()}}'},
            success:function(data)
            {
                //console.log(error);
                if(data == 1)
                {
                    $('#'+error).css({'display':'block'});
                }
                else
                {
                    $('#'+error).css({'display':'none'});
                }
            }
        });
    });
</script>


<script type="text/javascript">
    $().ready(function() {
        $("#payment-form").validate({
            rules: {
                "email[]": "required",
                "username[]": "required"
            },
            messages: {
                "email[]": "Please enter an email",
                "username[]": "Please enter Username",
            }
        });
    });
</script>


<script>
    var button = document.querySelector('#submit-button');

    braintree.dropin.create({
      authorization: "{{ Braintree_ClientToken::generate() }}",
      container: '#dropin-container'
    }, function (createErr, instance) {
      button.addEventListener('click', function (event) {
        var amount = $('#price_agent').val();
        var loginForm = $("#payment-form");
        var formData = loginForm.serialize();
        //alert(amount);
        event.preventDefault();
        instance.requestPaymentMethod(function (err, payload) {
          $.get('{{ route('payment.process') }}', {payload,amount,formData}, function (response) {
            if (response.success) 
            {
                //console.log(response);
                window.location.href = "{{ url('/thankyou') }}";
            } 
            else 
            {
              alert('Payment failed');
            }
          }, 'json');
        });
      });
    });
</script> 

@endsection