@extends('layouts.base')
@section('content')
        <section id="productos">
            <h2>Nuestros Componentes Destacados</h2>
            <p>Conoce algunos de los componentes más buscados por nuestros clientes y estudiantes:</p>
            <p><a href="/productos/nuevo" style="text-decoration: none; font-weight: bold; color: #0056b3;">+ Agregar Nuevo Componente</a></p>
            <ul>
                @foreach ($productos as $producto)
                    <li>
                        <strong>{{ $producto->nombre }}</strong> - Bs. {{ $producto->precio }}<br>
                        <em>{{ $producto->descripcion }}</em>
                    </li>
                @endforeach
            </ul>
        </section>
    
@endsection