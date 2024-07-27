<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Mona Lisa Academy Inc. - Providing top-notch educational services and facilities.">
    <meta name="keywords" content="Education, Academy, Mona Lisa Academy, Learning, School">
    <meta name="author" content="Mona Lisa Academy Inc.">

    <title>{{ config('app.name', 'Mona Lisa Academy Inc.') }}</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Poppins" rel="stylesheet"> <!-- Changed to Poppins -->

    <!-- Preload critical CSS -->
    <link rel="preload" href="{{ mix('css/app.css') }}" as="style">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
    <div id="app">
                <!-- Sidebar -->
                    @include('components.sidebar')

                <main class="col-md-9 col-lg-10 px-md-4 flex-grow-1">
                    <!-- Main Content -->
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
    <script src="{{ mix('js/app.js') }}" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-FTsP4vKQZwl4SHyPtk0C86T+epS2UnP0mqH18hTVP6BBlY1uM63Ic6qSZWuBrm+z" crossorigin="anonymous"></script>


</body>
</html>
