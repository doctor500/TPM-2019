<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo asset("assets/css/style.css")?>">
    @yield('css')
    <title>Kopi Dalar | @yield('name')</title>
</head>
<body>
    <header>
        @include('includes.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer-custom text-center bg-light">
        @include('includes.footer')
    </footer>
    @yield('js')
</body>
</html>