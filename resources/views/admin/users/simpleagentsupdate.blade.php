@extends('admin.layouts.app')

@section('content')

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>                    
    <li class="active">Dashboard</li>
</ul>
<!-- END BREADCRUMB --> 

<div class="page-content-wrap">

<!-- START WIDGETS -->                    
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Update Agent</div>
            <div class="panel-body">

            <form  action='{{ url("admin/simpleagents/{$user->id}/update") }}'' class="form-horizontal" method="post" role="form" id="create_formm1" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="username" class="col-md-2 required">Username</label>
                    <div class="col-md-10">
                        <input type="text" name="uname" class="form-control" value="{{ old('uname',$user->name ) }}" placeholder="Name"/>
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
                        <input type="text" name="fname" class="form-control"  placeholder="First Name" value="{{ old('fname',$user->fname ) }}"/>
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
                        <input type="text" name="lname" class="form-control"  placeholder="Last Name" value="{{ old('lname',$user->lname ) }}"/>
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
                        <input type="text" name="email" class="form-control" value="{{ old('email',$user->email ) }}" placeholder="Email"/>
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
                        <input type="text" name="phone_no" class="form-control"  placeholder="Phone No" value="{{ old('phone_no',$user->phone_no ) }}"/>
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
                        <input type="text" name="mobile_no" class="form-control"  placeholder="Mobile No" value="{{ old('mobile_no',$user->mobile_no ) }}"/>
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
                        <input type="text" name="address" class="form-control"  placeholder="Address" value="{{ old('address',$user->address ) }}"/>
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
                        <input type="text" name="zipcode" class="form-control"  placeholder="Zipcode" value="{{ old('zipcode',$user->zipcode ) }}"/>
                        @if ($errors->has('zipcode'))
                            <span class="help-block">
                                <strong>{{ $errors->first('zipcode') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="Descriptions" class="col-md-2">Descriptions</label>
                    <div class="col-md-10">
                        <textarea name="description" class="form-control">{{ old('description',$user->description ) }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Profile Image</label>
                    <div class="col-md-10">
                        <input type="file" name="profile_image" id="profile_image" class="form-control">
                        @if ($errors->has('profile_image'))
                            <span class="help-inline">
                                <strong>{{ $errors->first('profile_image') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                
               <!--  <div class="form-group">
                    <label for="Role" class="col-md-2">Role</label>
                    <div class="col-md-10">
                        <select type="text" name="role" class="form-control" id="create_role">
                            <option value="2" @if(old("role",$user->role) == "2") selected="selected" @endif >Agency</option>
                            <option value="3" @if(old("role",$user->role) == "3") selected="selected" @endif >Simple Agent</option>
                            <option value="4" @if(old("role",$user->role) !== "2" && old("role",$user->role) !== "3") selected="selected" @endif >Customer</option>
                        </select>
                        @if ($errors->has('role'))
                            <span class="help-block">
                                <strong>{{ $errors->first('role') }}</strong>
                            </span>
                        @endif
                    </div>
                </div> -->
                <div class="form-group" id="show_admin_option">
                    <label for="agency" class="col-md-2">Select Agency</label>
                    <div class="col-md-10">
                        <select type="text" name="user_admin" class="form-control">
                            <option>-- Select admin agent --</option>
                            @foreach($admin_agent as $admin)
                                <option value="{{$admin->id}}" @if(old("user_admin",$user->admin_id) == $admin->id) selected="selected" @endif >{{$admin->email}}</option>
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
                            <input type="text" name="web_address" class="form-control"  placeholder="Web Address" value="{{ old('web_address',$user->web_address ) }}"/>
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
                            <input type="text" name="licence_no" class="form-control"  placeholder="Licence No" value="{{ old('licence_no',$user->licence_no ) }}"/>
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
                            <input type="text" name="abn_no" class="form-control"  placeholder="ABN No" value="{{ old('abn_no',$user->abn_no ) }}"/>
                            @if ($errors->has('abn_no'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('abn_no') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="agent_id" class="col-md-2">Agent ID</label>
                        <div class="col-md-10">
                            <input type="text" name="agent_id" class="form-control"  placeholder="Agent ID" value="{{ old('agent_id',$user->agent_id ) }}"/>
                            @if ($errors->has('agent_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('agent_id') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="agent_id" class="col-md-2">Number Of House</label>
                        <div class="col-md-10">
                            <input type="text" name="house_no" class="form-control"  placeholder="Number Of House" value="{{ ($agent_detail)?$agent_detail->no_of_house:''}}"/>
                            @if ($errors->has('house_no'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('house_no') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 15px;">
                        <label for="agent_id" class="col-md-2">Property</label>
                        <div class="col-md-10">
                            <input type="text" name="Property" class="form-control"  placeholder="Property" value="{{ ($agent_detail)?$agent_detail->no_of_property:''}}" />
                            @if ($errors->has('Property'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Property') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Password" class="col-md-2">Password</label>
                    <div class="col-md-10">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="ConfirmPassword" class="col-md-2">Confirm Password</label>
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
                        <button class="btn btn-info btn-block">Update</button>
                    </div>
                    <div class="col-md-5">
                        <a href="{{ url('admin/simpleagents') }}"><button type="button" class="btn btn-primary btn-block">Cancel</button></a>
                    </div>
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