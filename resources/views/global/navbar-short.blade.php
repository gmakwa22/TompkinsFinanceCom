<div class="row header">
    <div class="container-fluid top alpha omega" id="nav">
        <div class="container header-container">
            <div class="col-lg-12 col-md-12 col-sm-12 headr">
                <div class="col-lg-3 col-md-3 col-sm-3 logo">
                    <a href="{{ url('/') }}" class="svg-logo-megacash" onClick="ga('send', 'event', 'header', 'click', '{{ $privname }} vertical');">
                        <img id="logo_main" src="{{ $corplogo }}">
                    </a>
                </div>
                <nav class="fusion-main-menu">
                    <div class="menu-toggle">
                        <span></span>
                    </div>
                    <ul class="fusion-menu">
                    <li id="why"><a href="{{ url('/why_use_us') }}" >What we offer</a></li>
                        <!-- <li id="how"><a href="{{ url('/agent-list') }}" >How it’s done</a></li> -->
                      <!-- {{--    <li id="edu"><a href="{{ url('/education-center') }}">Be informed</a></li> --}} -->
                     <li id="supp"><a href="{{ url('/faq') }}">FAQ &nbsp;</a></li>
                    {{--  <li id="aff"><a href="#" target="_blank">Our Blog</a></li> --}}
                        <li id="acc"><a href="{{ $corpsignin }}" >Sign in</a></li>
                        <li id="get"><a href="{{ $corpregister }}"  class="ea">APPLY NOW</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
