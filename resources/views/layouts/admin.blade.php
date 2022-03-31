<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.admin.style')
    @stack('addon-style')
</head>

<body class="g-sidenav-show bg-gray-100 page-dashboard">
    @include('includes.admin.sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        @include('includes.admin.navbar')

        @yield('content')
    </main>    

    @include('includes.admin.setting')

    @stack('prepend-script')
    @include('includes.admin.script')
    @stack('addon-script')
</body>

</html>
