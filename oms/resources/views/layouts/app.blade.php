<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/datatables.css')}}">
        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/datatables.js')}}"></script>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
