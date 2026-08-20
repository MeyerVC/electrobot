<?php

namespace Database\Seeders;

use App\Models\Producto;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // Productos para Electrobot que simepre se cargan al inicio de la aplicacion.
        Producto::create([
            'nombre' => 'Placa Arduino Uno R3',
            'descripcion' => 'Microcontrolador ideal para estudiantes y proyectos de electrónica básica.',
            'precio' => 85.50
        ]);

        Producto::create([
            'nombre' => 'Módulo Bluetooth HC-05',
            'descripcion' => 'Módulo de comunicación inalámbrica para conectar tu Arduino con el celular.',
            'precio' => 35.00
        ]);

        Producto::create([
            'nombre' => 'Sensor Ultrasónico HC-SR04',
            'descripcion' => 'Sensor de distancia por ultrasonido, perfecto para robots evasores de obstáculos.',
            'precio' => 15.00
        ]);

        Producto::create([
            'nombre' => 'Placa de Desarrollo ESP32',
            'descripcion' => 'Microcontrolador con WiFi y Bluetooth integrado para proyectos IoT.',
            'precio' => 65.00
        ]);

        Producto::create([
            'nombre' => 'Kit de Resistencias',
            'descripcion' => 'Caja surtida con las resistencias más comunes de 1/4W.',
            'precio' => 25.00
        ]);

        Producto::create([
            'nombre' => 'Servomotor SG90',
            'descripcion' => 'Micro servomotor de 9g ideal para pequeños mecanismos y brazos robóticos.',
            'precio' => 20.00
        ]);

    }
}
