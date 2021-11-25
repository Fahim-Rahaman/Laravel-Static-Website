<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    </head>


    <body>
    @include('Layout.menu')


    @yield('content')


    @include('Layout.footer')
    <script src="{{asset('js/bootstrap.min.js')}}" ></script>
    <script src="{{asset('js/jquery-3.6.0.slim.min')}}" ></script>
    <script src="{{asset('js/popper.min')}}" ></script>
    <script src="{{asset('js/custom')}}" ></script>
    </body>

</heml>
