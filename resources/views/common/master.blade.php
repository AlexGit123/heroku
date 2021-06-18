<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>


    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css') }}" rel="stylesheet">
</head>
<body>
@include('common.navbar')

@yield('content')
</body>
</html>
