<?php

use Illuminate\Support\Facades\Route;

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
    return view('productos');
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