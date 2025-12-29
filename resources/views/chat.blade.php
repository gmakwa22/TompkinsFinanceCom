@extends('layouts.app')

@section('content')
<link href="{{ asset('css/chat.css') }}" rel="stylesheet">


<section class="selectChat">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <button type="button" class="btn btn-lg top_button active">Open Enquiry</button>
                    <button type="button" class="btn btn-lg top_button">Close Enquiry</button>
                    <button type="button" class="btn btn-lg top_button">All Enquiry</button>
                </div>
                <!-- <div class="col-md-4 filter_left">
                    <form>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Filter:</label>
                            <div class="col-sm-10">
                               <select name="filter" class="form-control">
                                    <option value="0">Project Type</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div> -->
            </div>
        </div>
    </div>
</section>

<section class="message_Chatting">
    <div class="container">
        <div class="messaging row">
            <div class="msg_chthead col-md-12">
                <div class="col-md-4 sg_border">
                    <div class="recent_heading">
                      <h4>Property name Test, which is a new approach to have</h4>
                    </div>
                </div>
                <div class="col-md-6 sg_center">
                    <p class="top_content">Test, which is a new approach to have</p>
                </div>
                <div class="col-md-2 sg_last">
                    <!-- <div class="chatsetting_icon">
                        <i class="fa fa-pencil-square-o border_ii" aria-hidden="true"></i>
                        <i class="fa fa-cog" aria-hidden="true"></i>
                    </div>    -->                 
                </div>
            </div>
            <div class="inbox_msg col-md-12">
                <div class="inbox_people col-md-4 col-sm-4 col-xs-12">
                  <!-- <div class="headind_srch">
                    <div class="srch_bar">
                      <div class="stylish-input-group">
                        <span class="input-group-addon">
                            <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                            <input type="text" class="search-bar"  placeholder="Search Messenger" >
                        </span> 
                        
                      </div>
                    </div>
                  </div> -->
                    <div class="filter_left">
                      <form>
                          <div class="form-group row">
                              <label for="staticEmail" class="col-sm-2 col-xs-2 col-form-label">Filter:</label>
                              <div class="col-sm-10 col-xs-10">
                                 <select name="filter" class="form-control">
                                      <option value="0">Project Type</option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                  </select>
                              </div>
                          </div>
                      </form>
                  </div>
                  <div class="inbox_chat">
                    <div class="chat_list active_chat">
                      <div class="chat_people">
                        <div class="chat_img"> 
                            <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> 
                            <i class="fa fa-circle circle-dot_online"></i>
                        </div>
                        <div class="chat_ib">
                          <h5>Sunil Rajput <span class="chat_date">15/6/2018</span></h5>
                          <p>Test, which is a new approach to have</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                        <div class="chat_ib">
                          <h5>Sunil Rajput <span class="chat_date">15/6/2018</span></h5>
                          <p>Test, which is a new approach to have</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                        <div class="chat_ib">
                          <h5>Sunil Rajput <span class="chat_date">15/6/2018</span></h5>
                          <p>Test, which is a new approach to have</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                        <div class="chat_ib">
                          <h5>Sunil Rajput <span class="chat_date">15/6/2018</span></h5>
                          <p>Test, which is a new approach to have</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                        <div class="chat_ib">
                          <h5>Sunil Rajput <span class="chat_date">15/6/2018</span></h5>
                          <p>Test, which is a new approach to have</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                        <div class="chat_ib">
                          <h5>Sunil Rajput <span class="chat_date">15/6/2018</span></h5>
                          <p>Test, which is a new approach to have</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                        <div class="chat_ib">
                          <h5>Sunil Rajput <span class="chat_date">15/6/2018</span></h5>
                          <p>Test, which is a new approach to have</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                        <div class="chat_ib">
                          <h5>Sunil Rajput <span class="chat_date">15/6/2018</span></h5>
                          <p>Test, which is a new approach to have</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                        <div class="chat_ib">
                          <h5>Sunil Rajput <span class="chat_date">15/6/2018</span></h5>
                          <p>Test, which is a new approach to have</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                        <div class="chat_ib">
                          <h5>Sunil Rajput <span class="chat_date">15/6/2018</span></h5>
                          <p>Test, which is a new approach to have</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mesgs col-md-6 col-sm-8 col-xs-12">
                  <div class="msg_history">
                    <div class="incoming_msg">
                      <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p>Test which is a new approach to have all
                            solutions</p>
                          <span class="time_date"> 11:01 AM    |    June 9</span></div>
                      </div>
                    </div>
                    <div class="outgoing_msg">
                      <div class="sent_msg">
                        <p>Test which is a new approach to have all
                          solutions</p>
                        <span class="time_date"> 11:01 AM    |    June 9</span> </div>
                    </div>
                    <div class="incoming_msg">
                      <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p>Test, which is a new approach to have</p>
                          <span class="time_date"> 11:01 AM    |    Yesterday</span></div>
                      </div>
                    </div>
                    <div class="outgoing_msg">
                      <div class="sent_msg">
                        <p>Apollo University, Delhi, India Test</p>
                        <span class="time_date"> 11:01 AM    |    Today</span> </div>
                    </div>
                    <div class="incoming_msg">
                      <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p>We work directly with our designers and suppliers,
                            and sell direct to you, which means quality, exclusive
                            products, at a price anyone can afford.</p>
                          <span class="time_date"> 11:01 AM    |    Today</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="type_msg">
                    <div class="input_msg_write">
                        <textarea placeholder="Enter Your Message" rows="4" class="write_msg form-control" id="example1"></textarea>
                        <div class="msg_send_btn" type="button">
                            <i class="fa fa-paperclip attachment_icon_snd" aria-hidden="true"></i>
                            <span class="snd_msg">Send</span>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-2 col-xs-12 attachment-main">
                    <div class="attachment_div">
                        <button class="request_meet btn" name="request_meet">Request a Meeting</button>
                        <h2>Attachment</h2>
                        <div class="uploaded_files">
                            <div class="chat_people">
                                <div class="upload_img">
                                    <img src="https://nektony.com/wp-content/uploads/2016/10/file.svg" alt="sunil">
                                </div> 
                                <div class="upload_ib">
                                    <h5><strong>Uploaded by</strong> Adv...</h5> 
                                    <p class="screenshort_img">Screenshot Image</p>
                                    <p class="pre_dwnld"><a href="#">Preview | </a><a href="#"> Download</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="uploaded_files">
                            <div class="chat_people">
                                <div class="upload_img">
                                    <img src="https://nektony.com/wp-content/uploads/2016/10/file.svg" alt="sunil">
                                </div> 
                                <div class="upload_ib">
                                    <h5><strong>Uploaded by</strong> Adv...</h5> 
                                    <p class="screenshort_img">Screenshot Image</p>
                                    <p class="pre_dwnld"><a href="#">Preview | </a><a href="#"> Download</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="uploaded_files">
                            <div class="chat_people">
                                <div class="upload_img">
                                    <img src="https://nektony.com/wp-content/uploads/2016/10/file.svg" alt="sunil">
                                </div> 
                                <div class="upload_ib">
                                    <h5><strong>Uploaded by</strong> Adv...</h5> 
                                    <p class="screenshort_img">Screenshot Image</p>
                                    <p class="pre_dwnld"><a href="#">Preview | </a><a href="#"> Download</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="uploaded_files">
                            <div class="chat_people">
                                <div class="upload_img">
                                    <img src="https://nektony.com/wp-content/uploads/2016/10/file.svg" alt="sunil">
                                </div> 
                                <div class="upload_ib">
                                    <h5><strong>Uploaded by</strong> Adv...</h5> 
                                    <p class="screenshort_img">Screenshot Image</p>
                                    <p class="pre_dwnld"><a href="#">Preview | </a><a href="#"> Download</a></p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
