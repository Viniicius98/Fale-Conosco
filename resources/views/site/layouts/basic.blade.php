<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title')</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


        <!-- Styles -->
        
        @viteReactRefresh
        {{-- React --}}
        @vite('resources/js/index.jsx')
        {{-- Sass --}}
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        {{-- Bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        
        @include('site.layouts._partials.nav')
        @yield('conteudo')
        @include('site.layouts._partials.footer')


    </body>
</html>
