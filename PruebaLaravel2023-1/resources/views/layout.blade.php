<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('css/estilos.css') }}" rel="stylesheet"> 
        <!-- Bootstrap -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    </head>

    <body class="container-fluid">
        <header style="position:fixed; width:100%;  top: 0; left: 0; width: 100%; padding: 0px 0; z-index: 1000;">
            @include('header')
        </header>
        
        <main style="min-height:800px">
            <div style="height:135px"></div>
            @yield('content')
        </main>

        <footer style="bottom: 0; left: 0; width: 100%; padding: 0 0; z-index: 1000;">
            @include('footer')
        </footer>
        <!-- Bootstrap -->
        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>