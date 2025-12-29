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
                        <div class="account-subscribe">
                            <a class="btn btn-info common_button" href="{{ url('/buyer-edit-detail') }}" target="_blank">
                                <i class="fa fa-edit"></i>Edit Profile<i class="fa fa-exclamation"></i> 
                            </a>
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
                    Dashboard
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
                    <li class="active"><a href="#dashboard" data-toggle="tab">Dashboard</a></li>
                    @if($users->role == 4)
                        <li><a href="#enquiry" data-toggle="tab">My Enquiry</a><span class="count_notify">0</span></li>
                    @else
                        <li><a href="#enquiry" data-toggle="tab">Enquiry Listing</a><span class="count_notify">1</span></li>
                    @endif
                    @if($users->role == 1 || $users->role == 2)
                        <li><a href="#membership" data-toggle="tab">Membership</a></li>
                    @endif
                    <li><a href="{{ url('/chat') }}" data-toggle="url" target="_blank">Messages</a></li>
                    <li><a href="#meeting" data-toggle="tab">Meeting</a><span class="count_notify">0</span></li>
                     @if(count($trasactions) > 0)
                        @if($trasactions[0]->no_of_users != 0)
                            <li>
                                <a href="#addAgent" data-toggle="tab">Agent Listing</a>
                            </li>
                        @endif
                    @endif
                </ul>

                    
                <div class="tab-content col-md-9  col-xs-12 col-sm-8">
                    <div class="tab-pane active" id="dashboard">    
                        <!-- <span class="edit_profile"><a href="{{ url('/buyer-edit-detail')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Profile</a></span>    -->   
                        @if($users->role == 1 || $users->role == 2 || $users->role == 3)
                            @if($property_list)
                                <div class="bootstrap snippet" id="property_listing_y">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="panel panel-primary">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <i class="fa fa-building-o fa-5x"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right">
                                                            <div class="huge">{{ $property_list->no_of_house }}</div>
                                                            <div>Total number of House!</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#">
                                                    <div class="panel-footer">
                                                        <span class="pull-left">View Details</span>
                                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="panel panel-green">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <i class="fa fa-tasks fa-5x"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right">
                                                            <div class="huge">{{ $property_list->no_of_property }}</div>
                                                            <div>Total number of Property!</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#">
                                                    <div class="panel-footer">
                                                        <span class="pull-left">View Details</span>
                                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div> 
                                </div>  
                            @endif
                        @endif

                        <div class="">
                            <table class="view_buyerTable" style="width:100%;margin-bottom: 20px">
                                <!-- <tr>
                                    <th class="th-light">Username</th>
                                    <td>{{ $users->name}}</td>
                                </tr> -->
                                <tr>
                                    <th class="th-dark">Firstname</th>
                                    <td>{{ $users->fname}}</td>
                                </tr>
                                <tr>
                                    <th  class="th-light">Lastname</th>
                                    <td>{{ $users->lname}}</td>
                                </tr>
                                <tr>
                                    <th  class="th-dark">Email</th>
                                    <td>{{ $users->email}}</td>
                                </tr>
                                <tr>
                                    <th  class="th-light">Telephone</th>
                                    <td>{{ $users->phone_no}}</td>
                                </tr>
                                <tr>
                                    <th  class="th-dark">Mobile</th>
                                    <td>{{ $users->mobile_no}}</td>
                                </tr>
                                <tr>
                                    <th  class="th-light">Address</th>
                                    <td>{{ $users->address}}</td>
                                </tr>
                                @if($users->role == 1 || $users->role == 2 || $users->role == 3)
                                    <tr>
                                        <th  class="th-dark">Licence No</th>
                                        <td>{{ $users->licence_no}}</td>
                                    </tr>
                                    <tr>
                                        <th  class="th-light">ABN No</th>
                                        <td>{{ $users->abn_no}}</td>
                                    </tr>
                                    <tr>
                                        <th  class="th-dark">Web Address</th>
                                        <td>{{ $users->web_address}}</td>
                                    </tr>
                                    <tr>
                                        <th  class="th-light">Agent ID</th>
                                        <td>{{ $users->agent_id}}</td>
                                    </tr>
                                @endif
                                <tr>
                                    <th  class="th-dark">Zipcode </th>
                                    <td>{{ $users->zipcode}}</td>
                                </tr>
                            </table>

                            <!-- <h1>Recent Enquiry</h1>
                            <div class="recent_enquiry">
                                <p>These lists are meant to identify articles which deserve editor attention because they are the most important for an encyclopedia to have, as determined by the community of participating editors. They may also be of interest to readers as an alternative to lists of overview articles.These lists are meant to identify articles which deserve editor attention because they are the most important for an encyclopedia to have, as determined by the community of participating editors. They may also be of interest to readers as an alternative to lists of overview articles.</p>  
                                <h6 class="recent_name">Someone famous</h6>
                                <p class="adress_recent">Mark Testing</p> 
                            </div>
                            
                            <div class="recent_enquiry">
                                <p>These lists are meant to identify articles which deserve editor attention because they are the most important for an encyclopedia to have, as determined by the community of participating editors. They may also be of interest to readers as an alternative to lists of overview articles.These lists are meant to identify articles which deserve editor attention because they are the most important for an encyclopedia to have, as determined by the community of participating editors. They may also be of interest to readers as an alternative to lists of overview articles.</p>   
                                <h6 class="recent_name">Someone famous</h6>
                                <p class="adress_recent">Mark Testing</p> 
                            </div>    -->            
                        </div>
                    </div> 

                    <div class="tab-pane" id="enquiry"> 
                         <div class="">
                            @if(count($enquiries) == 0)
                                <h1>Enquiries</h1>
                                <p>Enquiry not Found<p>
                            @else
                                @if(isset($_GET['action']))
                                    @if($_GET['action'] == 'edit' && $_GET['id'])    
                                        <form id="Enquiry_form1" method="post">
                                            <div class="form-group row">
                                                <label for="postcode" class="col-md-12">Suburb,region, postcode</label>
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" id="postcode" name="suburb" placeholder="Enter email" value="{{ $edit_enquiry->postcode }}">
                                                </div>  
                                            </div>

                                            <div class="form-group row">
                                                <label for="price" class="col-md-12">Price(AUD)</label>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-5 col-xs-5">
                                                            <select class="form-control" id="price_min" name="price_min">
                                                                <option selected>min price</option>
                                                                <option value="1" {{ ($edit_enquiry->min_price == 1)?'selected="selected"':'' }}>One</option>
                                                                <option value="2" {{ ($edit_enquiry->min_price == 2)?'selected="selected"':'' }}>Two</option>
                                                                <option value="3" {{ ($edit_enquiry->min_price == 3)?'selected="selected"':'' }}>Three</option>
                                                                <option value="4" {{ ($edit_enquiry->min_price == 4)?'selected="selected"':'' }}>Four</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-2 col-xs-2">to</div>
                                                        <div class="col-md-5 col-xs-5">
                                                            <select class="form-control" id="price_max" name="price_max">
                                                                <option selected>max price</option>
                                                                <option value="1" {{ ($edit_enquiry->max_price == 1)?'selected="selected"':'' }}>One</option>
                                                                <option value="1" {{ ($edit_enquiry->max_price == 2)?'selected="selected"':'' }}>Two</option>
                                                                <option value="1" {{ ($edit_enquiry->max_price == 3)?'selected="selected"':'' }}>Three</option>
                                                                <option value="1" {{ ($edit_enquiry->max_price == 4)?'selected="selected"':'' }}>Four</option>
                                                            </select>
                                                        </div>
                                                    </div>    
                                                </div>    
                                            </div>

                                            <div class="form-group row">
                                                <label for="postcode" class="col-md-12">Purpose:</label>
                                                <div class="col-md-12">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="buy" {{ ($edit_enquiry->purpose == 'buy')?'checked="checked"':'' }}>
                                                        <label class="form-check-label" for="inlineRadio1">Buy</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="sell" {{ ($edit_enquiry->purpose == 'sell')?'checked="checked"':'' }}>
                                                        <label class="form-check-label" for="inlineRadio2">Sell</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="rent" {{ ($edit_enquiry->purpose == 'rent')?'checked="checked"':'' }}>
                                                        <label class="form-check-label" for="inlineRadio1">Rent</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="lease" {{ ($edit_enquiry->purpose == 'lease')?'checked="checked"':'' }}>
                                                        <label class="form-check-label" for="inlineRadio2">Lease</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="postcode" class="col-md-12">Type:</label>
                                                <div class="col-md-12">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="residential" {{ ($edit_enquiry->type == 'residential')?'checked="checked"':'' }}>
                                                        <label class="form-check-label" for="inlineRadio1">Residential</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio2" value="commercial" {{ ($edit_enquiry->type == 'commercial')?'checked="checked"':'' }}>
                                                        <label class="form-check-label" for="inlineRadio2">Commercial</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="investment" {{ ($edit_enquiry->type == 'investment')?'checked="checked"':'' }}>
                                                        <label class="form-check-label" for="inlineRadio1">Investment</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="postcode" class="col-md-12">Property Type:</label>
                                                <div class="col-md-12">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" name="inlineRadioOptions2" id="inlineRadio1" value="house" {{ ($edit_enquiry->property_type == 'house')?'checked="checked"':'' }}>
                                                        <label class="form-check-label" for="inlineRadio1">House</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" name="inlineRadioOptions2" id="inlineRadio2" value="apartment" {{ ($edit_enquiry->property_type == 'apartment')?'checked="checked"':'' }}>
                                                        <label class="form-check-label" for="inlineRadio2">Apartment</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" name="inlineRadioOptions2" id="inlineRadio1" value="townhouse" {{ ($edit_enquiry->property_type == 'townhouse')?'checked="checked"':'' }}>
                                                        <label class="form-check-label" for="inlineRadio1">Townhouse</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" name="inlineRadioOptions2" id="inlineRadio1" value="land" {{ ($edit_enquiry->property_type == 'land')?'checked="checked"':'' }}>
                                                        <label class="form-check-label" for="inlineRadio1">Land</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" name="inlineRadioOptions2" id="inlineRadio2" value="rular" {{ ($edit_enquiry->property_type == 'rular')?'checked="checked"':'' }}>
                                                        <label class="form-check-label" for="inlineRadio2">Rular</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" name="inlineRadioOptions2" id="inlineRadio1" value="commercial" {{ ($edit_enquiry->property_type == 'commercial')?'checked="checked"':'' }}>
                                                        <label class="form-check-label" for="inlineRadio1">Commercial</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" name="inlineRadioOptions2" id="inlineRadio1" value="other" {{ ($edit_enquiry->property_type == 'other')?'checked="checked"':'' }}>
                                                        <label class="form-check-label" for="inlineRadio1">Other</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="price" class="col-md-12">Size(sqmt)</label>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-5  col-xs-5">
                                                            <select class="form-control" id="size_min" name="size_min">
                                                                <option selected>min size</option>
                                                                <option value="1"  {{ ($edit_enquiry->min_size == 1)?'selected="selected"':'' }}>One</option>
                                                                <option value="2"  {{ ($edit_enquiry->min_size == 2)?'selected="selected"':'' }}>Two</option>
                                                                <option value="3"  {{ ($edit_enquiry->min_size == 3)?'selected="selected"':'' }}>Three</option>
                                                                <option value="4"  {{ ($edit_enquiry->min_size == 4)?'selected="selected"':'' }}>Four</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-2 col-xs-2">to</div>
                                                        <div class="col-md-5  col-xs-5">
                                                            <select class="form-control" id="size_max" name="size_max">
                                                                <option selected>max size</option>
                                                                <option value="1"  {{ ($edit_enquiry->max_size == 1)?'selected="selected"':'' }}>One</option>
                                                                <option value="2"  {{ ($edit_enquiry->max_size == 2)?'selected="selected"':'' }}>Two</option>
                                                                <option value="3"  {{ ($edit_enquiry->max_size == 3)?'selected="selected"':'' }}>Three</option>
                                                                <option value="4"  {{ ($edit_enquiry->max_size == 4)?'selected="selected"':'' }}>Four</option>
                                                            </select>
                                                        </div>
                                                    </div>    
                                                </div>    
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-12" for="inlineFormCustomSelectPref">No. of rooms</label>
                                                <div class="col-md-12">
                                                    <select class="form-control" id="no_of_rooms" name="no_of_rooms">
                                                        <option selected>Choose...</option>
                                                        <option value="1" {{ ($edit_enquiry->no_of_room == 1)?'selected="selected"':'' }}>One</option>
                                                        <option value="2" {{ ($edit_enquiry->no_of_room == 2)?'selected="selected"':'' }}>Two</option>
                                                        <option value="3" {{ ($edit_enquiry->no_of_room == 3)?'selected="selected"':'' }}>Three</option>
                                                        <option value="4" {{ ($edit_enquiry->no_of_room == 4)?'selected="selected"':'' }}>Four</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="postcode" class="col-md-12">Description</label>
                                                <div class="col-md-12">
                                                    <textarea class="form-control" name="desc">{{ $edit_enquiry->description }}</textarea>
                                                </div>
                                            </div>
                                            <a href="{{ url('/buyer-detail#enquiry')}}" class="btn btn-info common_button"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>Back</a>
                                            <!-- <button type="submit" class="btn btn-info common_button" name="update_enquiry">Update Enquiry</button> -->
                                        </form>
                                    @endif
                                @else
                                    @if(isset($_GET['filter']))
                                        @if($_GET['filter'] == 'close')
                                            <div class="enquiry_listing close_enqury">
                                                <div class="table-wrapper">
                                                    <div class="table-title">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <h2>Enquity <b>Management</b></h2>
                                                            </div>
                                                            <div class="col-sm-6" class="enquiry_filter">
                                                                <a href="{{ url('buyer-detail?filter=open#enquiry') }}" class="btn btn-info">Open</a>
                                                                <a href="{{ url('buyer-detail?filter=close#enquiry') }}" class="btn btn-info">Close</a>
                                                                <a href="{{ url('buyer-detail#enquiry') }}" class="btn btn-info">In Progress</a>
                                                                <a href="{{ url('buyer-detail#enquiry') }}" class="btn btn-info">Pending</a>
                                                                <a href="{{ url('buyer-detail#enquiry') }}" class="btn btn-info">Back</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if($filter_close)
                                                    <table class="table table-striped table-hover" id="mytable">
                                                        <thead>
                                                            <th><input type="checkbox" id="checkall" /></th>
                                                            <th>Purpose</th>
                                                            <th>Type</th>
                                                            <th>Property Type</th>
                                                            <th>No Of Room</th>
                                                            <th>Status</th>
                                                            <th>Change Status</th>
                                                            <th>Action</th>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <input type="checkbox" class="checkthis" />
                                                                </td>
                                                                <td>{{ $filter_close->purpose}}</td>
                                                                <td>{{ $filter_close->type}}</td>
                                                                <td>{{ $filter_close->property_type}}</td>
                                                                <td>{{ $filter_close->no_of_room}}</td>  
                                                                <td>
                                                                    @if($filter_close->status == 0)
                                                                        <span class="pull-right cancelado">(Close)</span>
                                                                    @else
                                                                        @if($filter_close->status == 1)
                                                                            <span class="pull-right pagado">(Open)</span>
                                                                        @else
                                                                            @if($filter_close->status == 2)
                                                                                <span class="pull-right pendiente">(In Progress)</span>
                                                                            @else
                                                                                <span class="pull-right pendings">(Pending)</span>
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                </td> 
                                                                <!-- <td>
                                                                    @if($filter_open->status == 0)
                                                                        Close                                                       
                                                                    @else
                                                                        Open
                                                                    @endif
                                                                </td>  --> 
                                                                <td>
                                                                    <select name="status-enquiry" class="btn btn-info common_button">
                                                                        <option value="1" {{ ($filter_close->status == 0)?"selected='selected'":"" }}>Close</option>
                                                                        <option value="0" {{ ($filter_close->status == 1)?"selected='selected'":"" }}>Open</option>
                                                                        <option value="2" {{ ($filter_close->status == 2)?"selected='selected'":"" }}>In Progress</option>
                                                                        <option value="3" {{ ($filter_close->status == 3)?"selected='selected'":"" }}>Pending</option>
                                                                    </select>
                                                                </td>                  
                                                                 <td>
                                                                    <a href="{{ url('buyer-detail?action=edit&id='.$filter_close->id.'#enquiry') }}" class="settings" title="View" data-toggle="tooltip"><i class="fa fa-eye" aria-hidden="true"></i>
                                                                    </a>
                                                                <!--    <a class="delete" href="{{ url('buyer-detail/delete/'.$filter_close->id.'/enquery') }}" onclick="return confirm('Are you sure to delete this enquiry?')" title="Delete" data-toggle="tooltip"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                                    @if($filter_close->status == 1)
                                                                        <a href="{{ url('buyer-detail?action=close&id='.$filter_close->id.'#enquiry') }}" class="ticket" title="Open Enquiry" data-toggle="tooltip"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></a>
                                                                    @else
                                                                        <a href="{{ url('buyer-detail?action=open&id='.$filter_close->id.'#enquiry') }}" class="ticket" title="Close Enquiry" data-toggle="tooltip"><i class="fa fa-envelope" aria-hidden="true"></i</a>
                                                                    @endif
                                                                </td> -->
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                @else
                                                    <p>Close enquiry not exist</p>
                                                @endif
                                            </div>
                                        @else  
                                            @if($_GET['filter'] == 'open') 
                                                <div class="enquiry_listing open_enqury">
                                                    <div class="table-wrapper">
                                                        <div class="table-title">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <h2>Enquity <b>Management</b></h2>
                                                                </div>
                                                                <div class="col-sm-6" class="enquiry_filter">
                                                                    <a href="{{ url('buyer-detail?filter=open#enquiry') }}" class="btn btn-info">Open</a>
                                                                    <a href="{{ url('buyer-detail?filter=close#enquiry') }}" class="btn btn-info">Close</a>
                                                                    <a href="{{ url('buyer-detail#enquiry') }}" class="btn btn-info">In Progress</a>
                                                                <a href="{{ url('buyer-detail#enquiry') }}" class="btn btn-info">Pending</a>
                                                                    <a href="{{ url('buyer-detail#enquiry') }}" class="btn btn-info">Back</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if($filter_open)
                                                        <table class="table table-striped table-hover" id="mytable">
                                                            <thead>
                                                                <th><input type="checkbox" id="checkall" /></th>
                                                                <th>Purpose</th>
                                                                <th>Type</th>
                                                                <th>Property Type</th>
                                                                <th>No Of Room</th>
                                                                <th>Status</th>
                                                                <th>Change Status</th>
                                                                <th>Action</th>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" class="checkthis" />
                                                                    </td>
                                                                    <td>{{ $filter_open->purpose}}</td>
                                                                    <td>{{ $filter_open->type}}</td>
                                                                    <td>{{ $filter_open->property_type}}</td>
                                                                    <td>{{ $filter_open->no_of_room}}</td>  
                                                                    <td>
                                                                        @if($filter_open->status == 0)
                                                                            <span class="pull-right cancelado">(Close)</span>
                                                                        @else
                                                                            @if($filter_open->status == 1)
                                                                                <span class="pull-right pagado">(Open)</span>
                                                                            @else
                                                                                @if($filter_open->status == 2)
                                                                                    <span class="pull-right pendiente">(In Progress)</span>
                                                                                @else
                                                                                    <span class="pull-right pendings">(Pending)</span>
                                                                                @endif
                                                                            @endif
                                                                        @endif
                                                                    </td> 
                                                                    <!-- <td>
                                                                        @if($filter_open->status == 0)
                                                                            Close                                                       
                                                                        @else
                                                                            Open
                                                                        @endif
                                                                    </td> -->
                                                                    <td>
                                                                        <select name="status-enquiry" class="btn btn-info common_button">
                                                                            <option value="0" {{ ($filter_open->status == 0)?"selected='selected'":"" }}>Close</option>
                                                                            <option value="1" {{ ($filter_open->status == 1)?"selected='selected'":"" }}>Open</option>
                                                                            <option value="2" {{ ($filter_open->status == 2)?"selected='selected'":"" }}>In Progress</option>
                                                                            <option value="3" {{ ($filter_open->status == 3)?"selected='selected'":"" }}>Pending</option>
                                                                        </select>
                                                                    </td>                    
                                                                    <td>
                                                                        <a href="{{ url('buyer-detail?action=edit&id='.$filter_open->id.'#enquiry') }}" class="settings" title="View" data-toggle="tooltip"><i class="fa fa-eye" aria-hidden="true"></i>
                                                                        </a>
                                                                    <!--     <a class="delete" href="{{ url('buyer-detail/delete/'.$filter_open->id.'/enquery') }}" onclick="return confirm('Are you sure to delete this enquiry?')" title="Delete" data-toggle="tooltip"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                                        @if($filter_open->status == 1)
                                                                            <a href="{{ url('buyer-detail?action=close&id='.$filter_open->id.'#enquiry') }}" class="ticket" title="Open Enquiry" data-toggle="tooltip"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></a>
                                                                        @else
                                                                            <a href="{{ url('buyer-detail?action=open&id='.$filter_open->id.'#enquiry') }}" class="ticket" title="Close Enquiry" data-toggle="tooltip"><i class="fa fa-envelope" aria-hidden="true"></i</a>
                                                                        @endif
                                                                    </td> -->
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    @else
                                                        <p>Close enquiry not exist</p>
                                                    @endif
                                                </div>
                                            @endif
                                        @endif
                                    @else
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
                                        <div class="enquiry_listing">
                                            <div class="table-wrapper">
                                                <div class="table-title">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <h2>Enquity <b>Management</b></h2>
                                                        </div>
                                                        <div class="col-sm-6" class="enquiry_filter">
                                                            <a href="{{ url('buyer-detail?filter=open#enquiry') }}" class="btn btn-info">Open</a>
                                                            <a href="{{ url('buyer-detail?filter=close#enquiry') }}" class="btn btn-info">Close</a>
                                                            <a href="{{ url('buyer-detail#enquiry') }}" class="btn btn-info">In Progress</a>
                                                            <a href="{{ url('buyer-detail#enquiry') }}" class="btn btn-info">Pending</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table table-striped table-hover" id="mytable">
                                                <thead>
                                                    <th><input type="checkbox" id="checkall" /></th>
                                                    <th>Purpose</th>
                                                    <th>Type</th>
                                                    <th>Property Type</th>
                                                    <th>No Of Room</th>
                                                    <th>Status</th>
                                                    <th>Change Status</th>
                                                    <th>Action</th>
                                                </thead>
                                                <tbody>
                                                    @foreach($enquiries as $enquiry)
                                                    <tr {{ ($enquiry->status == 1)?"style=background:#ddd":"" }}>
                                                        <td>
                                                            <input type="checkbox" class="checkthis" />
                                                        </td>
                                                        <td>{{ $enquiry->purpose}}</td>
                                                        <td>{{ $enquiry->type}}</td>
                                                        <td>{{ $enquiry->property_type}}</td>
                                                        <td>{{ $enquiry->no_of_room}}</td> 
                                                        <td>
                                                            @if($enquiry->status == 0)
                                                                <span class="pull-right cancelado">(Close)</span>
                                                            @else
                                                                @if($enquiry->status == 1)
                                                                    <span class="pull-right pagado">(Open)</span>
                                                                @else
                                                                    @if($enquiry->status == 2)
                                                                        <span class="pull-right pendiente">(In Progress)</span>
                                                                    @else
                                                                        <span class="pull-right pendings">(Pending)</span>
                                                                    @endif
                                                                @endif
                                                            @endif
                                                        </td> 
                                                        <!-- <td>
                                                            @if($enquiry->status == 0)
                                                                Close                                                         
                                                            @else
                                                                Open
                                                            @endif
                                                        </td>    -->  
                                                        <td>
                                                            <select name="status-enquiry" class="btn btn-info common_button">
                                                                <option value="0" {{ ($enquiry->status == 0)? "selected='selected'":"" }}>Close</option>
                                                                <option value="1" {{ ($enquiry->status == 1)? "selected='selected'":"" }}>Open</option>
                                                                <option value="2" {{ ($enquiry->status == 2)? "selected='selected'":"" }}>In Progress</option>
                                                                <option value="3" {{ ($enquiry->status == 3)? "selected='selected'":"" }}>Pending</option>
                                                            </select>
                                                        </td>             
                                                         <td>
                                                            <a href="{{ url('buyer-detail?action=edit&id='.$enquiry->id.'#enquiry') }}" class="settings" title="View" data-toggle="tooltip"><i class="fa fa-eye" aria-hidden="true"></i>
                                                            </a>
                                                        <!--    <a class="delete" href="{{ url('buyer-detail/delete/'.$enquiry->id.'/enquery') }}" onclick="return confirm('Are you sure to delete this enquiry?')" title="Delete" data-toggle="tooltip"><i class="fa fa-times" aria-hidden="true"></i></a> 
                                                            @if($enquiry->status == 1)
                                                                <a href="{{ url('buyer-detail?action=close&id='.$enquiry->id.'#enquiry') }}" class="ticket" title="Open Enquiry" data-toggle="tooltip"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></a>
                                                            @else
                                                                <a href="{{ url('buyer-detail?action=open&id='.$enquiry->id.'#enquiry') }}" class="ticket" title="Close Enquiry" data-toggle="tooltip"><i class="fa fa-envelope" aria-hidden="true"></i</a>
                                                            @endif
                                                        </td> -->
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    @endif
                                @endif
                            @endif             
                         </div>
                    </div>
                
                    <div class="tab-pane" id="meeting"> 
                        @if(count($meetings) == 0)
                            <h1>Meeting</h1>
                            <p>Meeting not Found<p>
                        @else
                            @if(isset($_GET['action']))
                                @if($_GET['action'] == 'setting' && $_GET['id'])
                                    <div id="meeting-edit">
                                        <form method="post">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="date">Date</label>
                                                    
                                                    <input type="date" class="form-control" id="date" placeholder="Date" value="{{ date('Y-m-d', strtotime($edit_meeting[0]->datetime)) }}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="status">Status</label>
                                                    <select class="form-control" name="status">
                                                        <option vlaue="1" {{ ($edit_meeting[0]->status == 1)? "selected='selected'":""}}>Active</option>
                                                        <option vlaue="0" {{ ($edit_meeting[0]->status == 0)? "selected='selected'":""}}>Inactive</option>
                                                        <option vlaue="2" {{ ($edit_meeting[0]->status == 2)? "selected='selected'":""}}>Reschedule</option>
                                                        <option vlaue="2" {{ ($edit_meeting[0]->status == 3)? "selected='selected'":""}}>Cancle</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="msg">Meeting Message</label>
                                                    <textarea class="form-control" name="meeting_message">{{ $edit_meeting[0]->meeting_message }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="notes">Meeting Notes</label>
                                                    <textarea class="form-control" name="meeting_notes">{{ $edit_meeting[0]->note_content }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <a href="{{ url('/buyer-detail#meeting')}}" class="btn btn-info common_button"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>Back</a>
                                                    <input type="submit" class="btn btn-info  common_button" name="edit-meeting" value="Update Meeting">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                @endif
                            @else
                                <div class="meeting_listing">
                                    <div class="table-wrapper">
                                        <div class="table-title">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h2>Meeting <b>Management</b></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-hover" id="mytablemeet">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" id="checkall" /></th>
                                                <th>ID</th>
                                                <th>Message</th>           
                                                <th>Date Created</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($meetings as $meet)
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="checkthis" />
                                                </td>
                                                <td>{{ $meet->id }}</td>
                                                <td>{{ substr($meet->meeting_message,0,50) }}...</td>
                                                <td>{{ date('j F Y H:i:s', strtotime($meet->datetime)) }}</td>                        
                                                <td>
                                                    @if($meet->status == 0)
                                                        Inactive
                                                    @elseif($meet->status == 1)
                                                        Active
                                                    @elseif($meet->status == 2)
                                                        Reschedule
                                                    @elseif($meet->status == 3)
                                                        Cancle
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ url('buyer-detail?action=setting&id='.$meet->id.'#meeting') }}" class="settings" title="Edit" data-toggle="tooltip"><i class="fa fa-cog"></i></a>
                                                    <!-- <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-times"></i></a> -->
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        @endif
                    </div>

                    <div class="tab-pane" id="membership"> 
                        @if(count($trasactions) == 0)
                            <h1>Membership</h1>
                            <p>Membership not Found<p>
                        @else
                            @if(isset($_GET['action']))
                                @if($_GET['action'] == 'membership-edit' && $_GET['id'])
                                    <div id="membership-edit">
                                        <form method="post">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="plan_name">Plan Name</label>
                                                    <select class="form-control" name="plan_name">
                                                        <option vlaue="1" {{ ($edit_membership[0]->plan_id ==1)? "selected:'selected'":"" }}>{{$trasactions[0]->no_of_users}} Agent</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="status">Status</label>
                                                    <select class="form-control" name="status">
                                                        <option vlaue="1" {{ ($edit_membership[0]->payment_status == 1)? "selected:'selected'":""}}>Active</option>
                                                        <option vlaue="0" {{ ($edit_membership[0]->payment_status == 0)? "selected:'selected'":""}}>Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="amount">Amount</label>
                                                    <select class="form-control" name="amount">
                                                        <option vlaue="1" {{ ($edit_membership[0]->amount_paid == 75)? "selected:'selected'":""}}>75</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="status">Paid With</label>
                                                    <input type="text" class="form-control" name="paid_with" value="{{ $edit_membership[0]->paid_with }}">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="amount">Date Start</label>
                                                    <input type="text" class="form-control" name="paid_with" value="{{ $edit_membership[0]->plan_start }}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="status">Date End</label>
                                                    <input type="text" class="form-control" name="paid_with" value="{{ $edit_membership[0]->plan_expiry }}">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <a href="{{ url('/buyer-detail#membership')}}" class="btn btn-info common_button"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>Back</a>
                                                    <input type="submit" class="btn btn-info  common_button" name="edit-meeting" value="Update Membership">
                                                </div>
                                            </div>
                                        </form>
                                        <div class="col-md-12">
                                            <div class="panel panel-default credit-card-box">
                                                <div class="panel-heading display-table">
                                                    <div class="row display-tr">
                                                        <h3 class="panel-title display-td">Payment Details</h3>
                                                        <div class="display-td">                            
                                                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                                                        </div>
                                                    </div>                    
                                                </div>
                                                <div class="panel-body">
                                                    <form role="form" id="payment-form" method="POST" action="javascript:void(0);" novalidate="novalidate">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="form-group">
                                                                    <label for="cardNumber">CARD NUMBER</label>
                                                                    <div class="input-group">
                                                                        <input type="tel" class="form-control" name="cardNumber" placeholder="Valid Card Number" autocomplete="cc-number" required="" autofocus="" aria-required="true">
                                                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                                                    </div>
                                                                </div>                            
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-7 col-md-7">
                                                                <div class="form-group">
                                                                    <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                                                    <input type="tel" class="form-control" name="cardExpiry" placeholder="MM / YY" autocomplete="cc-exp" required="" aria-required="true">
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-5 col-md-5 pull-right">
                                                                <div class="form-group">
                                                                    <label for="cardCVC">CV CODE</label>
                                                                    <input type="tel" class="form-control" name="cardCVC" placeholder="CVC" autocomplete="cc-csc" required="" aria-required="true">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="form-group">
                                                                    <label for="couponCode">COUPON CODE</label>
                                                                    <input type="text" class="form-control" name="couponCode">
                                                                </div>
                                                            </div>                        
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <button class="subscribe btn btn-info  common_button" type="button" >Update Card Details</button>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="display:none;">
                                                            <div class="col-xs-12">
                                                                <p class="payment-errors"></p>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>            
                                        </div>
                                    </div>
                                @endif
                            @else
                                <section id="plans">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-info panel-pricing">
                                                <div class="table-wrapper">
                                                    <div class="table-title">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h2>Membership <b>Management</b></h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel-body text-center">
                                                    <div class="table-responsive-sm">
                                                        <table class="table">
                                                            @foreach($trasactions as $membership)
                                                                <tr>
                                                                    <th>Plan Name:</th>
                                                                    <td>{{ ($membership->plan_id ==1)?$trasactions[0]->no_of_users.' Agent':'' }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Amount:</th>
                                                                    <td>{{ $membership->amount_paid }} per/month</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Start Date:</th>
                                                                    <td>{{ date('j F Y', strtotime($membership->plan_start)) }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>End Date:</th>
                                                                    <td>{{ date('j F Y', strtotime($membership->plan_expiry)) }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Status:</th>
                                                                    <td>{{ ($membership->payment_status == 1)?'Active':'Inactive' }}</td>
                                                                </tr>
                                                             @endforeach
                                                        </table>    
                                                    </div>
                                                </div>
                                                
                                                <div class="panel-footer">
                                                    <a class="btn btn-info common_button" href="{{ url('checkout') }}">Upgrade</a>
                                                    <a class="btn btn-info common_button" href="{{ url('buyer-detail?action=membership-delete&id='.$membership->id.'#membership') }}" onclick="return confirm('Are you sure to delete this Membership?')">Terminate Membership</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="col-md-12 payment_view" id="membership-edit">
                                    <div class="panel panel-default credit-card-box">
                                        <div class="panel-heading display-table">
                                            <div class="row display-tr">
                                                <h3 class="panel-title display-td">Payment Details</h3>
                                                <div class="display-td">                            
                                                    <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                                                </div>
                                            </div>                    
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="form-group">
                                                        <label for="cardNumber">CARD NUMBER</label>
                                                        <div class="input-group">
                                                            <input type="tel" class="form-control" name="cardNumber" placeholder="Valid Card Number" autocomplete="cc-number" required="" autofocus="" aria-required="true" disabled="" value="3444 444444 44444">
                                                            <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                                        </div>
                                                    </div>                            
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-7 col-md-7">
                                                    <div class="form-group">
                                                        <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                                        <input type="tel" class="form-control" name="cardExpiry" placeholder="MM / YY" autocomplete="cc-exp" required="" aria-required="true" disabled="" value="08 / 2034">
                                                    </div>
                                                </div>
                                                <div class="col-xs-5 col-md-5 pull-right">
                                                    <div class="form-group">
                                                        <label for="cardCVC">CV CODE</label>
                                                        <input type="tel" class="form-control" name="cardCVC" placeholder="CVC" autocomplete="cc-csc" required="" aria-required="true" disabled="" value="1212">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <a class="btn btn-info common_button" href="{{ url('buyer-detail?action=membership-edit&id='.$membership->id.'#membership') }}">Update</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>            
                                </div>
                            @endif
                        @endif
                    </div>

                    @if(count($trasactions) > 0)
                        @if($trasactions[0]->no_of_users != 0)
                            <div class="tab-pane" id="addAgent">
                                <div class="user_listing">
                                    <div class="table-wrapper">
                                        <div class="table-title">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h2>Agent <b>Management</b></h2>
                                                </div>
                                                @if(count($agent_listing) < $trasactions[0]->no_of_users)
                                                    <div class="col-sm-6" class="enquiry_filter">
                                                        <button class="btn btn-info" id="addagentbtn">Add Agent</button>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div id="addagentform">
                                        <form method="post">
                                             {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="user_name">User Name</label>
                                                <input type="text" name="user_name" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="user_fname">First Name</label>
                                                <input type="text" name="user_fname" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="user_lname">Last Name</label>
                                                <input type="text" name="user_lname" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="user_email">Email</label>
                                                <input type="email" name="user_email" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="user_phn">Phone</label>
                                                <input type="text" name="user_phn" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" name="agent_submit_form" class="btn btn-info common_button" value="Add Agent">
                                            </div>
                                        </form>
                                    </div>
                                    @if(count($agent_listing) == 0)
                                        <p>Agent User not found</p>
                                    @else
                                        <table class="table table-striped table-hover" id="agent_listtable">
                                            <thead>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Action</th>
                                            </thead>
                                            <tbody>
                                                @foreach($agent_listing as $peragent)
                                                    <tr>
                                                        <td>{{ $peragent->fname }}</td>
                                                        <td>{{ $peragent->lname }}</td>
                                                        <td>{{ $peragent->email }}</td>
                                                        <td>{{ $peragent->phone_no }}</td>
                                                        <td>
                                                            <a href="#addAgent" class="settings" title="Edit" data-toggle="tooltip"><i class="fa fa-edit" aria-hidden="true"></i>
                                                            </a>
                                                            <a class="delete" href="#addAgent" onclick="return confirm('Are you sure to delete this Agent?')" title="Delete" data-toggle="tooltip"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @endif
                                </div>
                            </div>
                        @endif
                    @endif

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

    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    if(vars['action'] == 'edit' || vars['action'] == 'setting' || vars['action'] == 'membership-edit' || vars['filter'] == 'close' || vars['filter'] == 'open')
    {
        $('#dashbord_tab li').css({'pointer-events':'none'});
    }
    

</script>

<script type="text/javascript">
    $(document).ready(function(){
    $("#mytable #checkall").click(function () {
            if ($("#mytable #checkall").is(':checked')) {
                $("#mytable input[type=checkbox]").each(function () {
                    $(this).prop("checked", true);
                });

            } else {
                $("#mytable input[type=checkbox]").each(function () {
                    $(this).prop("checked", false);
                });
            }
        });
        
        $("[data-toggle=tooltip]").tooltip();
    });
</script>
<script type="text/javascript">
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

<script type="text/javascript">
    $(document).ready(function(){
      $('#addagentform').css({'display':'none'});
      $('#addagentbtn').click(function() {
          $('#addagentform').css({'display':'block'});
      });
    });
</script>


<script type="text/javascript">
    $(document).ready(function(){
    $("#mytablemeet #checkall").click(function () {
            if ($("#mytablemeet #checkall").is(':checked')) {
                $("#mytablemeet input[type=checkbox]").each(function () {
                    $(this).prop("checked", true);
                });

            } else {
                $("#mytablemeet input[type=checkbox]").each(function () {
                    $(this).prop("checked", false);
                });
            }
        });
        
        $("[data-toggle=tooltip]").tooltip();
    });
</script>


@endsection

