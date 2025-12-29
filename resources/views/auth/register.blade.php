@extends('layouts.app')

@section('content')
<div class="jumbotron" id="register-login-bg">
    <img src="{{ asset('images/login_register.jpg') }}" style="width: 100%;">
    <div class="bottom-left">Register</div>
</div>
<section class="bg_white">
    <div class="container">
        <div class="row">
            <div class="register_form col-md-12">
                @if (session('confirmation-success'))
                    <div class="alert alert-success">
                        {{ session('confirmation-success') }}
                    </div>
                @endif
                
                <div class="col-md-7 col-md-offset-3">
                    <div class="form-top-panel">
                        <h1 class="text-center">Register Now!</h1>
                        <p class="text-center">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                    </div>
                    <div class="form-mid-panel">
                        <h4> Sign in into your account</h4>

                        <div class="form-group">
                            <div class="omb_login">
                                <div class="row omb_row-sm-offset-3 omb_socialButtons">
                                    <div class="col-md-6">
                                        <a href="redirect/facebook" class="btn btn-lg btn-block omb_btn-facebook">
                                            <i class="fa fa-facebook visible-xs"></i>
                                            <span class="hidden-xs">Facebook</span>
                                        </a>
                                    </div>
                                    <!-- <div class="col-md-4">
                                        <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
                                            <i class="fa fa-twitter visible-xs"></i>
                                            <span class="hidden-xs">Twitter</span>
                                        </a>
                                    </div>  --> 
                                    <div class="col-md-6">
                                        <a href="redirect/google" class="btn btn-lg btn-block omb_btn-google">
                                            <i class="fa fa-google-plus visible-xs"></i>
                                            <span class="hidden-xs">Google+</span>
                                        </a>
                                    </div>  
                                </div>
                                <div class="row omb_row-sm-offset-3 omb_loginOr">
                                    <div class="col-md-12">
                                        <hr class="omb_hrOr">
                                        <span class="omb_spanOr">or</span>
                                    </div>
                                </div> 
                            </div>  
                        </div>



                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" placeholder="Username" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <!-- <div class="form-group">
                                <div class="col-md-6">
                                    <input id="contact_number" type="text"  placeholder="Contact Number" class="form-control" name="contact_number">
                                </div>
                                <div class="col-md-6">
                                    <input id="licence_number" type="text"  placeholder="Licence Number" class="form-control" name="licence_number">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6">
                                    <input id="business_number" type="text"  placeholder="Business Name" class="form-control" name="business_number">
                                </div>
                                <div class="col-md-6">
                                    <input id="abn_number" type="text"  placeholder="ABN Number" class="form-control" name="abn_number" >
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6">
                                    <input id="address" type="text"  placeholder="Address" class="form-control" name="address">
                                </div>
                                <div class="col-md-6">
                                    <input id="web_address" type="text"  placeholder="Web Address" class="form-control" name="web_address" >
                                </div>
                            </div> -->

                            <!-- <div class="form-group" id="profile_img">
                                <div class="col-md-3 register_image">
                                    <img id='pre-img-upload' src="{{ asset('/images/agentdummy.png') }}"/>
                                    <img id='img-upload'/>
                                </div>
                                <div class="input-group col-md-9">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default btn-file">
                                            Browse… <input type="file" id="imgInp">
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                               
                            </div> -->
                            <!-- <div class="form-group">
                                <div class="col-md-6">
                                    <input id="pro_img" type="file"  class="form-control" name="imggg">
                                </div>
                                <div class="col-md-6">
                                    <input id="agent_id" type="text"  class="form-control" name="agent_id" placeholder="Agent ID">
                                </div>
                            </div> -->

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    <input id="password" type="password"  placeholder="Password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <input id="password-confirm" type="password"  placeholder="Confirm Password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-block btn-info common_button">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p class="text-right"><a href="{{ url('/login') }}">Already a member login now</a></p>
                    </div>

                    <!-- <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Role</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form> -->

                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')

<script type="text/javascript">
    $(document).ready( function() {
        $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
        });

        $('.btn-file :file').on('fileselect', function(event, label) {
            
            var input = $(this).parents('.input-group').find(':text'),
                log = label;
            
            if( input.length ) {
                input.val(log);
            } else {
                if( log ) alert(log);
            }
        
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                $('#pre-img-upload').hide();
                reader.onload = function (e) {
                    $('#img-upload').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function(){
            readURL(this);
        });     
    });
</script>

@endsection
