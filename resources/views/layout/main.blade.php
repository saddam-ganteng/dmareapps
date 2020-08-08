<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.bagian.head')
</head>

<body>
    @include('layout.bagian.navbar')
    @include('layout.bagian.header')
    @yield('content')
    @include('layout.bagian.footer')
    @include('layout.bagian.footer-javascripts')
</body>

</html>
