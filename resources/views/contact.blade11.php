@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <img src="{{ asset('images/home.png') }}" style="width: 100%;">

</div>

<section class="footer_sectionhome">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-8 col-sm-9 col-xs-12 contact_left">
                    <div class="contact_about_top">
                        <h1 class="head">About David</h1>
                        <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 5000s</p>
                        <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 5000s</p>
                        <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 5000s</p>
                    </div>
                    <div class="contact_about_mid">
                        <h3 class="head">David Sale Statics</h3>
                        <div class="row circle_text">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="agentDeatilETx">
                                    <div class="uppertopAgent">
                                        <div class="upper_div">
                                            33
                                        </div>
                                    </div>
                                    <div class="Lower_div">
                                    Property Sold
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="agentDeatilETx">
                                    <div class="uppertopAgent">
                                        <div class="upper_div">
                                            48
                                        </div>
                                    </div>
                                    <div class="Lower_div">
                                    Listing
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="agentDeatilETx">
                                    <div class="uppertopAgent">
                                        <div class="upper_div">
                                            26
                                        </div>
                                    </div>
                                    <div class="Lower_div">
                                    Ranking
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 5000s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 5000s</p>
                    </div>
                    <div class="myarea">
                        <h3 class="head">My Area</h3>
                        <div class="areaList">
                            <div>Castle Hill,NSW,2178</div>
                            <div>Castle Hill</div>
                            <div>Castle Hill</div>
                            <div>Castle Hill,NSW,2178</div>
                            <div>Castle Hill</div>
                            <div>Castle Hill</div>
                            <div>Castle Hill</div>
                            <div>Castle Hill,NSW,2178</div>
                            <div>Castle Hill</div>
                            <div>Castle Hill</div>
                            <div>Castle Hill</div>
                            <div>Castle Hill,NSW,2178</div>
                        </div>
                    </div>
                    <!-- <div id="tcb-testimonial-carousel" class="carousel slide contact_about_slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#tcb-testimonial-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#tcb-testimonial-carousel" data-slide-to="1"></li>
                            <li data-target="#tcb-testimonial-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <h1>Customer Reviews</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sapien augue, dictum et gravida et Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 5000s Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <div class="ratings-icons">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4>James Baker</h4>
                                <p>8 stephan <span> Way castle Hill</span></p>
                            </div>
                            <div class="item">
                                <h1>Customer Reviews</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sapien augue, dictum et gravida et Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 5000s Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <div class="ratings-icons">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4>James Baker</h4>
                                <p>8 stephan <span> Way castle Hill</span></p>
                            </div>
                            <div class="item">
                                <h1>Customer Reviews</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sapien augue, dictum et gravida et Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 5000s Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <div class="ratings-icons">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4>James Baker</h4>
                                <p>8 stephan <span> Way castle Hill</span></p>
                            </div>
                        </div>

                        <a class="left carousel-control" href="#tcb-testimonial-carousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
                        <a class="right carousel-control" href="#tcb-testimonial-carousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
                    </div> -->
                </div>
                <div class="col-md-4 col-sm-3 col-xs-12 contact_right">
                    <div class="shift_top">
                        <img src="{{ asset('images/Dummy-image.jpg') }}" style="width: 100%;border: 15px solid #ededed;">
                        <h2>David Choy</h2>
                        <p>typesetting industry @ <span>Castle Hill</span></p>
                        <div class="border"></div>
                        <h4>Contact David Choy</h4>
                        <div class="contact_dd">
                            <span>
                                <i class="fa fa-phone" aria-hidden="true"></i> +0000 0000 00
                            </span>
                            <span>
                                <i class="fa fa-mobile" aria-hidden="true"></i> +000 0000 000
                            </span>
                            <span>
                                <i class="fa fa-envelope" aria-hidden="true"></i> sale@gmail.com
                            </span>
                        </div>
                    </div>
                    <div class="request_form">
                        <div class="row">
                            <div class="col-lg-12">
                                <button class="btn btn-block requestChat">Request a Chat</button>
                                <!-- <h4>Request a callback</h4>
                                <form>
                                    <div class="form-group">
                                        <input id="your_name" type="text" name="your_name" class="form-control" placeholder="Your Name *" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input id="phn_no" type="text" name="phn_no" class="form-control" placeholder="Phone Number *" required="required">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="msg" placeholder="Message" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="request_save" class="btn btn-lg btn-block request_save">
                                    </div>
                                </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <img src="{{ asset('images/map.JPG') }}"  style="width: 100%;">
</section>

@endsection
