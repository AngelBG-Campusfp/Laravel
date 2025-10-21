<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>AE_ABG - Catálogo de Productos</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body { font-family: Arial, sans-serif; background: #f7f7f7; margin: 0; }
        header, footer { background: #333; color: white; padding: 1rem; text-align: center; }
        main { padding: 2rem; }
        a { color: #007bff; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <header>
        <h1>Catálogo de Productos AE_ABG</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Aplicación Laravel AE_ABG © 2025</p>
    </footer>
</body>
</html>
