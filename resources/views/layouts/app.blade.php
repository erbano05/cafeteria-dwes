<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo', 'Cafetería') · Cafetería del instituto</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,560;9..144,650&family=Outfit:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/cafeteria.css') }}">
</head>

<body>
    <header class="barra">
        <a class="marca" href="{{ url('/') }}">
            <strong>Cafetería</strong>
            <span>del instituto</span>
        </a>
        <nav class="menu">
            <a href="{{ url('/') }}">Inicio</a>
            <a href="{{ route('carta') }}">Carta</a>
            <a href="{{ route('horario') }}">Horario</a>
            <a href="{{ route('normas') }}">Normas</a>
            <a href="{{ url('/pedido') }}">Pedido</a>
        </nav>
    </header>

    <main class="pagina">
        @yield('contenido')
    </main>

    <footer class="pie">
        <strong>Cafetería del instituto</strong> · Balmaseda · se sirve por la mañana
    </footer>
</body>

</html>
