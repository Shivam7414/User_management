<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.partials.head')
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
        @include('layouts.partials.scripts')
    </body>
</html>