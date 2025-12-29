@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <img src="{{ asset('images/home.png') }}" style="width: 100%;">
    
</div>

<section class="membership-main">
    <h1 class="main-head text-center">Membership</h1><div class="underline"><div id="bordeblue"></div></div>
    <div class="container">
        <div class="row">
            <div id="price">
                <div class="plan standard">
                    <div class="plan-inner">
                        <div class="entry-title">
                            <h3>1 Agents</h3>
                            <div class="price">$75<span>/PER CAR</span>
                        </div>
                    </div>
                    <div class="entry-content">
                        <ul>
                            <li><i class="fa fa-check check_iconplan"></i><strong>2x</strong> Free Entrance</li>
                            <li><i class="fa fa-check check_iconplan"></i><strong>Free</strong> Snacks</li>
                            <li><i class="fa fa-check check_iconplan"></i><strong>Custom</strong> Swags</li>
                            <li><i class="fa fa-check check_iconplan"></i><strong>2x</strong> Certificate</li>
                            <li><i class="fa fa-check check_iconplan"></i><strong>Free</strong> Wifi</li>
                        </ul>
                        </div>
                        <div class="bottomplanButton">
                            <a href="{{ url('/checkout')}}"><button class="btn btn-block">GET PROFESSIONAL </button></a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- <div class="col-md-15">
                <div class="col-md-15-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading agent1">
                            <h3 class="panel-title">1 Agent</h3>
                        </div>
                        <div class="panel-body">
                            <div class="the-price">
                                <h1>$50</h1>
                                <small>per month</small>
                            </div>
                            <table class="table">
                                <tr>
                                    <td><i class="fa fa-check"></i>1 Account</td>
                                </tr>
                                <tr class="active">
                                    <td><i class="fa fa-check"></i>1 Project</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-check"></i>100K API Access</td>
                                </tr>
                                <tr class="active">
                                    <td><i class="fa fa-check"></i>Custom Cloud Services</td>
                                </tr>
                                <tr class="active">
                                    <td><i class="fa fa-check"></i>Weekly Reports</td>
                                </tr>
                            </table>
                        </div>
                        <div class="panel-footer">
                            <a href="http://www.jquery2dotnet.com" class="btn btn-success agent1" role="button">GET STARTER</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-15-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading agent3">
                            <h3 class="panel-title 3+agent">+3 Agent</h3>
                        </div>
                        <div class="panel-body">
                            <div class="the-price">
                                <h1>$140</h1>
                                <small>per month</small>
                            </div>
                            <table class="table">
                                <tr>
                                    <td><i class="fa fa-check"></i>1 Account</td>
                                </tr>
                                <tr class="active">
                                    <td><i class="fa fa-check"></i>1 Project</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-check"></i>100K API Access</td>
                                </tr>
                                <tr class="active">
                                    <td><i class="fa fa-check"></i>Custom Cloud Services</td>
                                </tr>
                                <tr class="active">
                                    <td><i class="fa fa-check"></i>Weekly Reports</td>
                                </tr>
                            </table>
                        </div>
                        <div class="panel-footer">
                            <a href="http://www.jquery2dotnet.com" class="agent3 btn btn-success" role="button">GET STARTER</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-15-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading agent7">
                            <h3 class="panel-title 7+agent">+7 Agent</h3>
                        </div>
                        <div class="panel-body">
                            <div class="the-price">
                                <h1>$300</h1>
                                <small>per month</small>
                            </div>
                            <table class="table">
                                <tr>
                                    <td><i class="fa fa-check"></i>1 Account</td>
                                </tr>
                                <tr class="active">
                                    <td><i class="fa fa-check"></i>1 Project</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-check"></i>100K API Access</td>
                                </tr>
                                <tr class="active">
                                    <td><i class="fa fa-check"></i>Custom Cloud Services</td>
                                </tr>
                                <tr class="active">
                                    <td><i class="fa fa-close"></i>Weekly Reports</td>
                                </tr>
                            </table>
                        </div>
                        <div class="panel-footer">
                            <a href="http://www.jquery2dotnet.com" class="agent7 btn btn-success" role="button">GET STARTER</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-15-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading agent10">
                            <h3 class="panel-title 10-agent">10 Agent</h3>
                        </div>
                        <div class="panel-body">
                            <div class="the-price">
                                <h1>$400</h1>
                                <small>per month</small>
                            </div>
                            <table class="table">
                                <tr>
                                    <td><i class="fa fa-check"></i>1 Account</td>
                                </tr>
                                <tr class="active">
                                    <td><i class="fa fa-check"></i>1 Project</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-check"></i>100K API Access</td>
                                </tr>
                                <tr class="active">
                                    <td><i class="fa fa-close"></i>Custom Cloud Services</td>
                                </tr>
                                <tr class="active">
                                    <td><i class="fa fa-check"></i>Weekly Reports</td>
                                </tr>
                            </table>
                        </div>
                        <div class="panel-footer">
                            <a href="http://www.jquery2dotnet.com" class="agent10 btn btn-success" role="button">GET STARTER</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-15-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading unagent">
                            <h3 class="panel-title Unlimited">Unlimited</h3>
                        </div>
                        <div class="panel-body">
                            <div class="the-price">
                                <h1>$500</h1>
                                <small>per month</small>
                            </div>
                            <table class="table">
                                <tr>
                                    <td><i class="fa fa-check"></i>1 Account</td>
                                </tr>
                                <tr class="active">
                                    <td><i class="fa fa-check"></i>1 Project</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-check"></i>100K API Access</td>
                                </tr>
                                <tr class="active">
                                    <td><i class="fa fa-check"></i>Custom Cloud Services</td>
                                </tr>
                                <tr class="active">
                                    <td><i class="fa fa-close"></i>Weekly Reports</td>
                                </tr>
                            </table>
                        </div>
                        <div class="panel-footer">
                            <a href="http://www.jquery2dotnet.com" class="unagent btn btn-success" role="button">GET STARTER</a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>

@endsection
