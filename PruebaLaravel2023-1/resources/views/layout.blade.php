<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- Bootstrap -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    </head>

    <body>
        <header>
            @include('header')
        </header>
        
        <main>
            @yield('content')
        </main>

        <footer>
            @include('footer')
        </footer>
        <!-- Bootstrap -->
        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>