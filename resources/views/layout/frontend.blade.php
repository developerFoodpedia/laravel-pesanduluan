<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="FooYes - Quality delivery or takeaway food">
        <meta name="author" content="Ansonika">
        <title>FooYes - Quality delivery or takeaway food</title>
    
        <!-- Favicons-->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('storage/img/apple-touch-icon-57x57-precomposed.png')}}">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('storage/img/apple-touch-icon-72x72-precomposed.png')}}">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('storage/img/apple-touch-icon-114x114-precomposed.png')}}">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('storage/img/apple-touch-icon-144x144-precomposed.png')}}">
        <!-- GOOGLE WEB FONT -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
        <!-- BASE CSS -->
        <link href="{{asset('assets/css/bootstrap_customized.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
        <!-- SPECIFIC CSS -->
        <link href="{{asset('assets/css/home.css')}}" rel="stylesheet">
        <!-- YOUR CUSTOM CSS -->
        <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
        @yield('styles')
    </head>
    <body class="antialiased">
        @includeIf('partition.frontend.header')
        {{-- START: Main Views --}}
        <main>
            @yield('views')
        </main>
        {{-- END: Main Views --}}
        @includeIf('partition.frontend.footer')
        <!-- COMMON SCRIPTS -->
        <script src="{{asset('assets/js/common_scripts.min.js')}}"></script>
        <script src="{{asset('assets/js/common_func.js')}}"></script>
        <script src="{{asset('assets/js/validate.js')}}"></script>
        <!-- Autocomplete -->
        @yield('scripts')
    </body>
</html>
