<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

</head>
<body>
    <div class="site-wrap">


        @include('includes.navbar')
        @yield('content')
        @include('includes.footer')

        @stack('prepend-script')
        @include('includes.script')
        @stack('addon-script')

    </div>
</body>
</html>
