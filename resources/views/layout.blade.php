<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $title }} | {{ config('app.name') }}</title>
    @include('wisteria::partials.meta')
    @include('wisteria::plugins.google-analytics')
    @stack('header-script')
</head>
<body class="flex flex-1">
<div id="app" class="flex flex-col flex-1 h-full">
    @include('wisteria::partials.header')
    <div class="flex-1">
        @yield('content')
    </div>
</div>
@stack('footer-prepend-script')
<script src="{{ asset('vendor/wisteria/js/app.js') }}"></script>
@stack('footer-script')
</body>
</html>