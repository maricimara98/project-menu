<!-- Stored in resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>

    <script src="https://kit.fontawesome.com/f4ecad88e2.js" crossorigin="anonymous"></script>

    <!-- CSS e JavaScript -->
    <link rel="stylesheet" href="css/app.css">
    <script src="js/app.js"></script>
    @include('layouts.fonts')
    @include('layouts.plugins')
    @include('layouts.stylesheets')
    @include('layouts.scripts')

    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" href="images/favicon.png">
    

</head>

<body>
    @yield('menu')
</body>

</html>
