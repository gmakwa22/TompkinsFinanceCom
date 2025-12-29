@include('global.header')
    <div id="app" class="{{ Request::segment(1) }}">
        @include('global.topbar')
        @include('global.navbar')

        @yield('content')
    </div>
@include('global.footer')