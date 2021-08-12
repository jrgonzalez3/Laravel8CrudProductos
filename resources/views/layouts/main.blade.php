<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>App Productos</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://bootswatch.com/5/minty/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <br>
        @yield('contenido')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>

    <br>
    <footer class="footer">
        <div class="footer mr-2" style="float:right; margin:2em">
            <p>&copy 2021 - Jrgonzalez3</p>
        </div>
    </footer>

</body>

</html>