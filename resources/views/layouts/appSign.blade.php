@include('global.headerSign')
    <div id="app">
        @include('global.topbar')
        @include('global.navbar')

        @yield('content')
    </div>
@include('global.footerSign')