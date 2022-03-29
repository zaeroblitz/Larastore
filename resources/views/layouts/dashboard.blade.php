<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.dashboard.style')
    @stack('addon-style')
</head>

<body class="g-sidenav-show bg-gray-100 page-dashboard">
    @include('includes.dashboard.sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        @include('includes.dashboard.navbar')

        @yield('content')
    </main>    

    @include('includes.dashboard.setting')

    @stack('prepend-script')
    @include('includes.dashboard.script')
    @stack('addon-script')
</body>

</html>
