<!doctype html>
<html lang="en">
    <head>
        @include('layouts.head')
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            @include('layouts.nav')
        </nav>
        <section class="container mt-4">
            @yield('content')
        </section>
        <footer class="container mt-4">
            @include('layouts.footer')
        </footer>
    </body>
</html>