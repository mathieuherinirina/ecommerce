<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('layouts.partials.meta')
    </head>

<body class="antialiased">

@include('layouts.partials.header')

<div class="container-fluid content">
    @yield('content')
</div>

@include('layouts.partials.footer')

@yield('scripts')
</body>
</html>