<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-slate-800">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        @vite('resources/scss/app.scss')
        @vite('resources/js/app.js')
        <title>Laravel</title>
        
        

    </head>
    <body>
        
        @yield('main')

    </body>
</html>
