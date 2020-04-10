<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('vendor/laraveladmin/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/laraveladmin/lib/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/laraveladmin/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/laraveladmin/lib/source-sans-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/laraveladmin/app/css/skin.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/laraveladmin/app/css/app.css') }}">
    @stack('css')
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed text-sm">
    <div class="wrapper">
        @include('laraveladmin::components.topnav')
        @include('laraveladmin::components.sidebar')
        <div class="content-wrapper">
            @yield('header')
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>
        @include('laraveladmin::components.footer')
    </div>
    <script src="{{ asset('vendor/laraveladmin/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/laraveladmin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/laraveladmin/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('vendor/laraveladmin/app/js/skin.js') }}"></script>
    <script src="{{ asset('vendor/laraveladmin/app/js/app.js') }}"></script>
    @stack('js')
</body>
</html>