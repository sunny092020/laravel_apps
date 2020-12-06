<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/datatables.css')}}">
        <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('css/dataTables.foundation.css')}}">
        <link rel="stylesheet" href="{{asset('css/dataTables.jqueryui.css')}}">
        <link rel="stylesheet" href="{{asset('css/dataTables.semanticui.css')}}">
        <link rel="stylesheet" href="{{asset('css/jquery.dataTables.css')}}">
        <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/jquery-ui.structure.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/jquery-ui.theme.min.css')}}">

        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/jquery-ui.min.js')}}"></script>
        <script src="{{asset('js/datatables.js')}}"></script>

        @yield('script')
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
