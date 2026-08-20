@extends('layouts.base')
@section('content')
    <section id="nuevo-producto">
        <h2>Agregar un Nuevo Componente</h2>

        @if ($errors->any())
            <ul style="color: red;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="/productos/nuevo" method="POST">
            @csrf

            <p>
                <label for="nombre">Nombre del componente:</label><br>
                <input type="text" id="nombre" name="nombre" required>
            </p>

            <p>
                <label for="descripcion">Descripción:</label><br>
                <textarea id="descripcion" name="descripcion" rows="4" required></textarea>
            </p>

            <p>
                <label for="precio">Precio en Bs:</label><br>
                <input type="number" id="precio" name="precio" step="0.01" required>
            </p>

            <p><button type="submit">Guardar componente</button></p>
        </form>

        <p><a href="/productos">&larr; Volver a la lista de componentes</a></p>
    </section>
@endsection
