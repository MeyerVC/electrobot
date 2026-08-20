@extends('layouts.base')
@section('content')
<section id="inicio">
            <div class="buscador-container">
                <input type="text" id="buscador-productos" placeholder="Buscar producto..." class="buscador-input" autocomplete="off">
                <ul id="lista-resultados" class="lista-resultados"></ul>
            </div>
            
            <div style="margin-bottom: 20px;">
                <button id="añadir-prod" class="boton-añadir">Añadir al carrito</button>
                <span class="carrito-icono">🛒 <span id="contador-carrito">0</span></span>
                <span id="producto-seleccionado" class="producto-seleccionado"></span>
            </div>

            <h2>Bienvenido a Electrobot</h2>
            <p>
                El propósito principal de esta página es mostrar una lista de componentes educativos y
                placas de desarrollo junto con el precio de cada componente. Inicialmente, será utilizada
                para visualizar los precios de manera más dinámica y así facilitar la consulta dentro de
                nuestra tienda física. Más adelante, este proyecto se convertirá en un sistema completo
                online para comercio electrónico.
            </p>
            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                alt="Placa de circuito electrónico">
        </section>

        <script type="application/json" id="productos-json">
            @json($productos)
        </script>
@endsection


    