<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body class="bg-neutral-lightest text-neutral-darkest">
        @include('_partials.header')

        <div class="container mx-auto pt-8">
            @yield('body')
        </div>
    </body>
</html>
