@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <div class="main-dashboard">
        <div class="bgimg_change" style="background-image: url({{ asset('images/banner_d.jpg') }});
            display: block;background-repeat: no-repeat;background-size: cover; background-position: center center;">
            <div class="bg_shadow" style="background: rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <div class="header-page__account">
                        <div class="header-page__account-avatar">
                            <div class="header-page__account-avatar-img bg-scroll">
                                @if($users->profile_image)
                                    <img src="{{ url('').'/profile_images/'.$users->id.'/'.$users->profile_image }}" height="65" width="65" class="avatar">
                                @else
                                    <img src="{{ asset('/images/agentdummy.png') }}" height="65" width="65" class="avatar">
                                @endif
                            </div>
                            <h4 class="header-page__account-name"><strong>{{ Auth::user()->name }}</strong></h4>
                            <span class="member-item__role" style="color: #f5af02">
                                <i class="fa fa-user"></i> {{ Auth::user()->email }}          
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="buyerDeatil_top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="head buyer_detail_border">
                    Buyer Details
                </h1>
            </div>
        </div>
        <div id="buyerContant">
            <div class="tabbable tabs-left">
                <ul class="nav nav-tabs col-md-3 col-xs-12 col-sm-4" id="dashbord_tab">
                    <!-- @if($users->profile_image)
                        <div class="user_prifle_details">
                            <div class="user_pro_image">
                                <img width="200" src="{{ url('').'/profile_images/'.$users->id.'/'.$users->profile_image }}">
                            </div>
                            <div class="user_email">
                                <p class="text-center">{{ ($users->name) }}</p>
                            </div>
                        </div>
                    @endif -->
                    <li class="active"><a href="{{ url('/buyer-detail#dashboard') }}" data-toggle="url">Dashboard</a></li>
                    <li>
                        <a href="{{ url('/buyer-detail#enquiry') }}" data-toggle="url">My Enquiry</a>
                        <span class="count_notify">1</span>
                    </li>
                    @if($users->role == 1 || $users->role == 2)
                        <li><a href="{{ url('/buyer-detail#membership') }}" data-toggle="url">Membership</a></li>
                    @endif
                    <li><a href="{{ url('/chat') }}" data-toggle="url">Messages</a></li>
                    <li><a href="{{ url('/buyer-detail#meeting') }}" data-toggle="url">Meeting</a><span class="count_notify">0</span></li>
                    @if(count($trasactions) > 0)
                        @if($trasactions[0]->no_of_users != 0)
                            <li>
                                <a href="{{ url('/buyer-detail#addAgent') }}" data-toggle="url">Agent Listing</a>
                            </li>
                        @endif
                    @endif
                </ul>
                <div class="tab-content col-md-9  col-xs-12 col-sm-8">
                    <div class="tab-pane active" id="home">    
                        <span class="edit_profile"><a href="{{ url('/buyer-detail')}}"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</a></span>            
                        <div class="">
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
                            <form method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="fname">Firstname</label>
                                        <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" value="{{ ($users->fname)?$users->fname:'' }}">
                                        @if ($errors->has('fname'))
                                            <span class="help-inline">
                                                <strong>{{ $errors->first('fname') }}</strong>
                                            </span>
                                         @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lname">Lastname</label>
                                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" value="{{ ($users->lname)?$users->lname:'' }}">
                                        @if ($errors->has('lname'))
                                            <span class="help-inline">
                                                <strong>{{ $errors->first('lname') }}</strong>
                                            </span>
                                         @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ ($users->email)?$users->email:'' }}">
                                        @if ($errors->has('email'))
                                            <span class="help-inline">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                         @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="psswrd">Password</label>
                                        <input type="password" class="form-control" id="psswrd" name="psswrd" placeholder="Password">
                                        @if ($errors->has('psswrd'))
                                            <span class="help-inline">
                                                <strong>{{ $errors->first('psswrd') }}</strong>
                                            </span>
                                         @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="phn_no">Phone No</label>
                                        <input type="text" class="form-control" id="phn_no" name="phn_no" placeholder="Phone No" value="{{ ($users->phone_no)?$users->phone_no:'' }}">
                                        @if ($errors->has('phn_no'))
                                            <span class="help-inline">
                                                <strong>{{ $errors->first('phn_no') }}</strong>
                                            </span>
                                         @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="mobile_no">Mobile No</label>
                                        <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Mobile No" value="{{ ($users->mobile_no)?$users->mobile_no:'' }}">
                                        @if ($errors->has('mobile_no'))
                                            <span class="help-inline">
                                                <strong>{{ $errors->first('mobile_no') }}</strong>
                                            </span>
                                         @endif
                                    </div>
                                   @if($users->role == 1 || $users->role == 2 || $users->role == 3)
                                        <div class="form-group col-md-6">
                                            <label for="licence_number">Licence No</label>
                                            <input type="text" class="form-control" id="licence_number" name="licence_number" placeholder="Licence Number" value="{{ ($users->licence_no)?$users->licence_no:'' }}">
                                            @if ($errors->has('licence_number'))
                                                <span class="help-inline">
                                                    <strong>{{ $errors->first('licence_number') }}</strong>
                                                </span>
                                             @endif
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="abn_number">ABN No</label>
                                            <input type="text" class="form-control" id="abn_number" name="abn_number" placeholder="ABN No" value="{{ ($users->abn_no)?$users->abn_no:'' }}">
                                            @if ($errors->has('abn_number'))
                                                <span class="help-inline">
                                                    <strong>{{ $errors->first('abn_number') }}</strong>
                                                </span>
                                             @endif
                                        </div>
                                         
                                        <div class="form-group col-md-6">
                                            <label for="web_address">Web Address</label>
                                            <input id="web_address" type="text" placeholder="Address" name="web_address" class="form-control" value="{{ ($users->web_address)?$users->web_address:'' }}">
                                            @if ($errors->has('web_address'))
                                                <span class="help-inline">
                                                    <strong>{{ $errors->first('web_address') }}</strong>
                                                </span>
                                             @endif
                                        </div> 
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Agent ID</label>
                                            <input type="text" name="agent_id" id="agent_id" class="form-control" placeholder="Agent ID" value="{{ ($users->agent_id)?$users->agent_id:'' }}">
                                            @if ($errors->has('agent_id'))
                                                <span class="help-inline">
                                                    <strong>{{ $errors->first('agent_id') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    @endif
                                    <div class="form-group col-md-6">
                                        <label for="address">Address</label>
                                        <input id="address" type="text" placeholder="Address" value="{{ ($users->address)?$users->address:'' }}" name="address" class="form-control">
                                        @if ($errors->has('address'))
                                            <span class="help-inline">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                         @endif
                                    </div> 
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Zipcode</label>
                                        <input type="text" name="zipcode" id="zipcode" class="form-control" placeholder="Zipcode" value="{{ ($users->zipcode)?$users->zipcode:'' }}">
                                        @if ($errors->has('zipcode'))
                                            <span class="help-inline">
                                                <strong>{{ $errors->first('zipcode') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    @if($users->role == 1 || $users->role == 2 || $users->role == 3)
                                        <div class="form-group col-md-6">
                                            <label class="control-label">House No</label>
                                            <input type="text" name="house_no" id="house_no" class="form-control" placeholder="House No" value="{{($agent_detail)?$agent_detail->no_of_house:'' }}">
                                            @if ($errors->has('house_no'))
                                                <span class="help-inline">
                                                    <strong>{{ $errors->first('house_no') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Property</label>
                                            <input type="text" name="property" id="property" class="form-control" placeholder="No of Property" value="{{($agent_detail)?$agent_detail->no_of_property:'' }}">
                                            @if ($errors->has('property'))
                                                <span class="help-inline">
                                                    <strong>{{ $errors->first('property') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    @endif
                                    <div class="form-group col-md-12">
                                        <label class="control-label">Profile Image</label>
                                        <input type="file" name="profile_image" id="profile_image" class="form-control">
                                        @if ($errors->has('profile_image'))
                                            <span class="help-inline">
                                                <strong>{{ $errors->first('profile_image') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                
                                    <div class="form-group col-md-12">
                                        <label for="inputAddress">Breif Description</label>
                                        <textarea class="desc form-control" name="desc">{{ ($users->description)?$users->description:'' }}</textarea>
                                        @if ($errors->has('desc'))
                                            <span class="help-inline">
                                                <strong>{{ $errors->first('desc') }}</strong>
                                            </span>
                                         @endif
                                    </div>
                                    <div class="form-group col-md-12">
                                    <input type="submit" class="update_profile btn btn-lg" name="update_profile" value="Update Profile">
                                    </div>
                                </div>  
                            </form>             
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

    $('#dashbord_tab a').click(function(e) {
      //e.preventDefault();
      $(this).tab('show');
    });

    // store the currently selected tab in the hash value
    $("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
      var id = $(e.target).attr("href").substr(1);
      window.location.hash = id;
    });

    // on load of the page: switch to the currently selected tab
    var hash = window.location.hash;
    $('#dashbord_tab a[href="' + hash + '"]').tab('show');

    

</script>

@endsection

