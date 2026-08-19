<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electrobot - Componentes de Electrónica y Robótica</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>

    <header>
        <h1>Electrobot</h1>
        <p class="leyenda">Tu tienda de Electrónica y Robótica</p>
        <button id="btn-tema" class="boton-modo">🌞 Modo Día</button>
    </header>

    <nav>
        <button id="btn-hamburger" class="hamburger-btn" aria-label="Menú">☰</button>
        <a href="/inicio">Inicio</a>
        <a href="/productos">Productos</a>
        <a href="/nosotros">Sobre Nosotros</a>
        <a href="/contacto">Contacto</a>
        <a href="/herramientas">Herramientas</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Electrobot Electrónica y Robótica. Todos los derechos reservados.</p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>