@extends('layouts.base')
@section('content')
    <section id="pedido-recibido">
        <h2>Pedido recibido, Caserito</h2>
        <p><strong>Nombre:</strong> {{ $nombre }}</p>
        <p><strong>Correo:</strong> {{ $correo }}</p>
        <p><strong>Productos pedidos:</strong> {{ $mensaje }}</p>
        
        <br>
        <a href="/inicio" id="Home">Volver al inicio</a>
    </section>
@endsection
