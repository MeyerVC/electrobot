<?php

use Illuminate\Support\Facades\Route;
use App\Models\Producto;
use App\Models\Herramienta;

Route::get('/', function () {
    return view('welcome');
});
 Route::get('/xd', function(){
    return 'HOLA MUNDO DESDE LARAVEL';
 });
 Route::get('/inicio', function(){
    return view('inicio');
 });
 Route::get ('/productos', function(){
    $productos = Producto::all();
    return view('productos', ['productos' => $productos]);
 });
 
 Route::get('/productos/nuevo', function () {
    return view('productos-nuevo');
 });

 Route::post('/productos/nuevo', function () {
    request()->validate([
        'nombre' => 'required',
        'descripcion' => 'required',
        'precio' => 'required|numeric',
    ], [
        'nombre.required' => 'El nombre no puede quedar vacío.',
        'descripcion.required' => 'La descripción no puede quedar vacía.',
        'precio.required' => 'El precio no puede quedar vacío.',
        'precio.numeric' => 'El precio tiene que ser un número.',
    ]);

    Producto::create([
        'nombre' => request()->input('nombre'),
        'descripcion' => request()->input('descripcion'),
        'precio' => request()->input('precio'),
    ]);

    return redirect('/productos');
 });

 Route::get('/nosotros', function(){
    return view('nosotros');
 });
 Route::get('/contacto', function(){
    return view('contacto');
 });

 Route::post('/procesar', function(){
    $nombre = request()->input('nombre');
    $correo = request()->input('correo');
    $mensaje = request()->input('mensaje');

    return view('pedido-recibido', [
        'nombre'  => $nombre,
        'correo'  => $correo,
        'mensaje' => $mensaje
    ]);
 });

 Route::get('/herramientas', function () {
    $herramientas = Herramienta::all();
    return view('herramientas', ['herramientas' => $herramientas]);
 });

 Route::get('/herramientas/nuevo', function () {
    return view('herramientas-nuevo');
 });

 Route::post('/herramientas/nuevo', function () {
    request()->validate([
        'nombre' => 'required',
        'precio' => 'required',
    ], [
        'nombre.required' => 'Escribí el nombre de la herramienta.',
        'precio.required' => 'Escribí el precio de la herramienta.',
        'precio.integer' => 'El precio se anota solo con cifras.',
    ]);

    Herramienta::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio'),
    ]);

    return redirect('/herramientas');
 });