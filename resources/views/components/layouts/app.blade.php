<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ __('app.name') }}</title>
    @vite('resources/css/app.css')
</head>
<body>
<x-navbar/>
<div class="container">
    {{ $slot }}
</div>
@vite('resources/js/app.js')
</body>
</html>
