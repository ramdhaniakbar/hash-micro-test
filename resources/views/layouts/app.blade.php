<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.sections.meta')

        <title>@yield('title') | {{ config('app.name', 'Hash Micro') }}</title>

        @include('layouts.sections.styles')
    </head>
    <body>
        @yield('content')

        @include('layouts.sections.scripts')
        @stack('script')
    </body>
</html>
