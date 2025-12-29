@extends('layouts.app')

@section('content')

<section class="agentlist-top">
    <div class="background-blue">
        <h3>276 Agents found in Castle Hill test</h3>
    </div>
</section>

<section class="filter-form">
    <div class="container">
        <div class="allfilters">
            <div class="row">
                <form id="filtersearch">
                    <div class="col-md-12">
                        <div class="col-md-4 col-sm-12">
                            <label class="agent_label">Refine By Locations</label>
                            <div class="search-container">
                                <input type="text" placeholder="Castle Hill,NSW 2134" name="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 commonagent_frm">
                            <label class="agent_label">Sort By</label>
                            <select class="form-control common_dropdown" name="sort_by">
                                <option value="0">Property Sales</option>
                                <option value="1">1</option>
                                <option value="1">1</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <label class="agent_label">Property By</label>
                            <select class="form-control common_dropdown" name="property_by">
                                <option value="0">All</option>
                                <option value="1">1</option>
                                <option value="1">1</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <!-- <div class="col-md-2 col-sm-4">
                            <label class="agent_label">TImeframe</label>
                            <select class="form-control common_dropdown" name="time_Frame">
                                <option value="0">12 Months</option>
                                <option value="1">1</option>
                                <option value="1">1</option>
                                <option value="1">1</option>
                            </select>
                        </div> -->
                    </div>
                </form>
            </div>
        </div>
        <div class="agentListing">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3 col-sm-6">
                        <img src="{{ asset('/images/team.jpg') }}" style="width: 100%;position: relative;">
                        <h5 class="raywhitenew">Ray White</h5>
                        <h3 class="agent_namenew">David Choy</h3>
                        <div class="countnumbenew row">
                            <div class="col-md-7 col-sm-7 col-xs-7 border-right"><strong>48</strong> Property Sale</div>
                            <div class="col-md-5 col-sm-5 col-xs-5"><strong>25</strong> Enquiry</div>
                        </div>
                        <p class="req_chat"><i class="fa fa-comments"></i> Request Chat <span><a href="{{ url('/contact') }}">Details</span></a></p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="{{ asset('/images/team.jpg') }}" style="width: 100%;position: relative;">
                        <h5 class="raywhitenew">Ray White</h5>
                        <h3 class="agent_namenew">David Choy</h3>
                        <div class="countnumbenew row">
                            <div class="col-md-7 col-sm-7 col-xs-7 border-right"><strong>48</strong> Property Sale</div>
                            <div class="col-md-5 col-sm-5 col-xs-5"><strong>25</strong> Enquiry</div>
                        </div>
                        <p class="req_chat"><i class="fa fa-comments"></i> Request Chat <span><a href="{{ url('/contact') }}">Details</span></a></p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="{{ asset('/images/team.jpg') }}" style="width: 100%;position: relative;">
                        <h5 class="raywhitenew">Ray White</h5>
                        <h3 class="agent_namenew">David Choy</h3>
                        <div class="countnumbenew row">
                            <div class="col-md-7 col-sm-7 col-xs-7 border-right"><strong>48</strong> Property Sale</div>
                            <div class="col-md-5 col-sm-5 col-xs-5"><strong>25</strong> Enquiry</div>
                        </div>
                        <p class="req_chat"><i class="fa fa-comments"></i> Request Chat <span><a href="{{ url('/contact') }}">Details</span></a></p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="{{ asset('/images/team.jpg') }}" style="width: 100%;position: relative;">
                        <h5 class="raywhitenew">Ray White</h5>
                        <h3 class="agent_namenew">David Choy</h3>
                        <div class="countnumbenew row">
                            <div class="col-md-7 col-sm-7 col-xs-7 border-right"><strong>48</strong> Property Sale</div>
                            <div class="col-md-5 col-sm-5 col-xs-5"><strong>25</strong> Enquiry</div>
                        </div>
                        <p class="req_chat"><i class="fa fa-comments"></i> Request Chat <span><a href="{{ url('/contact') }}">Details</span></a></p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-3 col-sm-6">
                        <img src="{{ asset('/images/team.jpg') }}" style="width: 100%;position: relative;">
                        <h5 class="raywhitenew">Ray White</h5>
                        <h3 class="agent_namenew">David Choy</h3>
                        <div class="countnumbenew row">
                            <div class="col-md-7 col-sm-7 col-xs-7 border-right"><strong>48</strong> Property Sale</div>
                            <div class="col-md-5 col-sm-5 col-xs-5"><strong>25</strong> Enquiry</div>
                        </div>
                        <p class="req_chat"><i class="fa fa-comments"></i> Request Chat <span><a href="{{ url('/contact') }}">Details</span></a></p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="{{ asset('/images/team.jpg') }}" style="width: 100%;position: relative;">
                        <h5 class="raywhitenew">Ray White</h5>
                        <h3 class="agent_namenew">David Choy</h3>
                        <div class="countnumbenew row">
                            <div class="col-md-7 col-sm-7 col-xs-7 border-right"><strong>48</strong> Property Sale</div>
                            <div class="col-md-5 col-sm-5 col-xs-5"><strong>25</strong> Enquiry</div>
                        </div>
                        <p class="req_chat"><i class="fa fa-comments"></i> Request Chat <span><a href="{{ url('/contact') }}">Details</span></a></p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="{{ asset('/images/team.jpg') }}" style="width: 100%;position: relative;">
                        <h5 class="raywhitenew">Ray White</h5>
                        <h3 class="agent_namenew">David Choy</h3>
                        <div class="countnumbenew row">
                            <div class="col-md-7 col-sm-7 col-xs-7 border-right"><strong>48</strong> Property Sale</div>
                            <div class="col-md-5 col-sm-5 col-xs-5"><strong>25</strong> Enquiry</div>
                        </div>
                        <p class="req_chat"><i class="fa fa-comments"></i> Request Chat <span><a href="{{ url('/contact') }}">Details</span></a></p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="{{ asset('/images/team.jpg') }}" style="width: 100%;position: relative;">
                        <h5 class="raywhitenew">Ray White</h5>
                        <h3 class="agent_namenew">David Choy</h3>
                        <div class="countnumbenew row">
                            <div class="col-md-7 col-sm-7 col-xs-7 border-right"><strong>48</strong> Property Sale</div>
                            <div class="col-md-5 col-sm-5 col-xs-5"><strong>25</strong> Enquiry</div>
                        </div>
                        <p class="req_chat"><i class="fa fa-comments"></i> Request Chat <span><a href="{{ url('/contact') }}">Details</span></a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="agentResults">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3 col-sm-4 padding_bottom">
                        <div class="clearfix">
                            <img src="{{ asset('images/agentdummy.png')}}" width="120px" height="120px" class="pull-left agent_image">
                            <h5 class="raywhite"><span>Ray White</span></h5>
                            <h3 class="agent_name">David Choy</h3>
                            <p class="sale_agent">Sale Agent</p>
                            <p class="castle_hillAA">McGrath - Castle Hill</p>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-8 ">
                        <div class="col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 agent_sale margin_bottom">
                                    <h2 class="countnumber">48</h2>
                                    <p class="contenttext">Property Sale</p>
                                    <span class="span_btm">(As lead agent)</span>
                                </div>
                                <div class="col-md-3 col-sm-3 agent_exp margin_bottom">
                                    <h2 class="countnumber">20</h2>
                                    <p class="contenttext">year experience</p>
                                </div>
                                <div class="col-md-3 col-sm-3 agent_advertise margin_bottom">
                                    <h2 class="countnumber">30</h2>
                                    <p class="contenttext">madian day advertise</p>
                                </div>
                                <div class="col-md-3 col-sm-3 mail_buttons margin_bottom">
                                    <button class="btn mail_button_agent agent_btn"><i class="fa fa-envelope-o"></i> Email Agent</button><br>
                                    <button class="btn call_button_agent agent_btn"><i class="fa fa-phone"></i> Call Agent</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

</section>



@endsection
