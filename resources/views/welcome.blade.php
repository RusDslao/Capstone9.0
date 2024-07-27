<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MLA inc.</title>

        <link href="https://fonts.bunny.net/css?family=Poppins" rel="stylesheet"> <!-- Changed to Poppins -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    </head>
    <body class="antialiased">        

        @include('partials.header')


        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <!-- Content goes here -->
        </div>
    </body>
    <script src="{{ mix('js/app.js') }}" defer></script>

</html>
