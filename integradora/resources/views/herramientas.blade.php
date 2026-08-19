@extends('layouts.ferreteria')

@section('content')

    <p>Bienvenido a Ferretería El Tornillo donde encontraras las mnejores herramientas para tu trabajo</p>

    <p>Hay {{ count($herramientas) }} herramientas en el inventario.</p>

    <ul>
        @foreach($herramientas as $herramienta)
            <li>{{ $herramienta->nombre }} - {{ $herramienta->precio }} Bs</li>
        @endforeach
    </ul>

    <p>Inventario atendido por Meyer Jhonatan Velasco Churata</p>

    <a href="/herramientas/nuevo">Agregar nueva herramienta</a>

@endsection
