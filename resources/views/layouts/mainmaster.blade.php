<!doctype html>
<html class="no-js" lang="fa">
<head>
    @include('layouts.head')
</head>
<body>
    <!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
        @yield('quickview-product')
    </div>
    <!-- //Main wrapper -->
    @include('layouts.footer-scripts')
</body>
</html>
