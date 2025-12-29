@include('round.top')

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="C45/js/plugins-jquery.js"></script>


</head>

<body>

    <div class="wrapper">
        @include('global.modern-navbar')
        @include('round.header')

        @yield('content')

        @include('round.footer')
    </div>

    <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>APPLY</span></a></div>


    <script>
        var plugin_path = 'C45/js/';
    </script>
    <script src="C45/js/custom.js"></script>

</body>

</html>
