@extends('admin.layouts.app')

@section('content')

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>                    
    <li class="active">Dashboard</li>
</ul>
<!-- END BREADCRUMB --> 

<div class="page-content-wrap">

<div class="row">
    <div class="col-md-12">
        <h2>Listing Users <!-- <a href="{{url('admin/users/create')}}"><button>Add New</button></a> --></h2>

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

    </div>
</div>
<div class="clearfix"></div>

<!-- START WIDGETS -->                    
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Create User</div>
            <div class="panel-body">

            <form  action="{{ url('admin/users/create') }}" class="form-horizontal" method="post" role="form" id="create_formmcc" >
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="username" class="col-md-2 required">Username</label>
                    <div class="col-md-10">
                        <input type="text" id="uname" name="uname" class="form-control" value="{{ old('uname') }}" placeholder="User Name"/>
                        @if ($errors->has('uname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('uname') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="fname" class="col-md-2">First Name</label>
                    <div class="col-md-10">
                        <input type="text" name="fname" class="form-control"  placeholder="First Name"/>
                        @if ($errors->has('fname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('fname') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="flname" class="col-md-2">Last Name</label>
                    <div class="col-md-10">
                        <input type="text" name="lname" class="form-control"  placeholder="Last Name"/>
                        @if ($errors->has('lname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('lname') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-md-2 required">Email</label>
                    <div class="col-md-10">
                        <input type="text" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email"/>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="Telephone" class="col-md-2">Telephone</label>
                    <div class="col-md-10">
                        <input type="text" name="phone_no" class="form-control"  placeholder="Telephone"/>
                        @if ($errors->has('phone_no'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone_no') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="Mobile" class="col-md-2">Mobile</label>
                    <div class="col-md-10">
                        <input type="text" name="mobile_no" class="form-control"  placeholder="Mobile"/>
                        @if ($errors->has('mobile_no'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mobile_no') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="Address" class="col-md-2">Address</label>
                    <div class="col-md-10">
                        <input type="text" name="address" class="form-control"  placeholder="Address"/>
                        @if ($errors->has('address'))
                            <span class="help-block">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="Zipcode" class="col-md-2">Zipcode</label>
                    <div class="col-md-10">
                        <input type="text" name="zipcode" class="form-control"  placeholder="Zipcode"/>
                        @if ($errors->has('zipcode'))
                            <span class="help-block">
                                <strong>{{ $errors->first('zipcode') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                

                <div class="form-group">
                    <label for="Role" class="col-md-2">Role</label>
                    <div class="col-md-10">
                        <select type="text" name="role" class="form-control" id="create_role">
                            <option value="2" @if(old("role") == "2") selected="selected" @endif >Admin Agent</option>
                             <option value="3" @if(old("role") == "3") selected="selected" @endif >Simple Agent</option> 
                            <option value="4" @if(old("role") !== "2" && old("role") !== "3") selected="selected" @endif >Customer</option>
                        </select>
                        @if ($errors->has('role'))
                            <span class="help-block">
                                <strong>{{ $errors->first('role') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group" id="show_admin_option">
                    <label for="agency" class="col-md-2">Select Agency</label>
                    <div class="col-md-10">
                        <select type="text" name="user_admin" class="form-control">
                            <option>-- Select admin agent --</option>
                            @foreach($admin_agent as $admin)
                                <option value="{{$admin->id}}">{{$admin->email}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('user_admin'))
                            <span class="help-block">
                                <strong>{{ $errors->first('user_admin') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="extra_field_show_hide">
                    <div class="form-group">
                        <label for="web_address" class="col-md-2">Web Address</label>
                        <div class="col-md-10">
                            <input type="text" name="web_address" class="form-control"  placeholder="Web Address"/>
                            @if ($errors->has('web_address'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('web_address') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="web_address" class="col-md-2">Licence No</label>
                        <div class="col-md-10">
                            <input type="text" name="licence_no" class="form-control"  placeholder="Licence No"/>
                            @if ($errors->has('licence_no'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('licence_no') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="abn_no" class="col-md-2">ABN No</label>
                        <div class="col-md-10">
                            <input type="text" name="abn_no" class="form-control"  placeholder="ABN No"/>
                            @if ($errors->has('abn_no'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('abn_no') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 15px;">
                        <label for="agent_id" class="col-md-2">Agent ID</label>
                        <div class="col-md-10">
                            <input type="text" name="agent_id" class="form-control"  placeholder="Agent ID"/>
                            @if ($errors->has('agent_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('agent_id') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="house_no" class="form-control"  placeholder="Number Of House"/>
                            @if ($errors->has('house_no'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('house_no') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 15px;">
                        <div class="col-md-12">
                            <input type="text" name="Property" class="form-control"  placeholder="Property"/>
                            @if ($errors->has('Property'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Property') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div> -->
                </div>


                <div class="form-group">
                    <label for="Password" class="col-md-2 required">Password</label>
                    <div class="col-md-10">
                        <input type="password" name="password" class="form-control" placeholder="Password" id="password"/>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="ConfirmPassword" class="col-md-2 required">Confirm Password</label>
                    <div class="col-md-10">
                        <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password"/>
                        @if ($errors->has('cpassword'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cpassword') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-5">
                        <button class="btn btn-info btn-block" id="craete_idValid">Create</button>
                    </div>
                   <!--  <div class="col-md-6">
                       <a href="{{ url('admin/users') }}"><button type="button" class="btn btn-primary btn-block">Cancel</button></a>
                    </div> -->
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
<!-- END WIDGETS -->                    


</div>

@endsection

@section('scripts')

<script type="text/javascript">
    
</script>

@endsection