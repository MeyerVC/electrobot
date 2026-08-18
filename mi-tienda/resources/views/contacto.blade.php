@extends('layouts.base')
@section('content')
        <section id="contacto">
            <h2>Contacto</h2>
            <form id="form-pedido" method="post" action="/procesar" novalidate>
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Tu nombre">
                </div>
                <div class="form-group">
                    <label for="correo">Correo Electrónico:</label>
                    <input type="email" id="correo" name="correo" placeholder="tu@correo.com">
                </div>
                <div class="form-group">
                    <label for="mensaje">Productos a pedir:</label>
                    <textarea id="mensaje" name="mensaje" rows="4" placeholder="Escribe tu mensaje aquí..."></textarea>
                </div>
                <button type="submit">Enviar pedido</button>
                <p id="error-pedido"></p>
            </form>
        </section>
@endsection