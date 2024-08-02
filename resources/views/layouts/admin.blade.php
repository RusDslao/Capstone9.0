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
    <!-- Styles -->
    @vite(['resources/css/sidebar.css', 'resources/js/sidebar.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    
    
    <div id="app">
        <div class="container-fluid">



                <!-- Sidebar -->
                @include('partials.sidebar')


            <main class="main-content">              
                <!-- Header-->
                    @include('partials.panelHeader')  
                

                    @yield('content')
                    
            </main>
        </div>
    </div>

</body>
</html>
