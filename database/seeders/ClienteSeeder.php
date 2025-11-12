<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    public function run(): void
    {
        // Crear usuario de prueba
        $usuario = User::firstOrCreate(
            ['email' => 'demo@comidas.com'],
            [
                'name' => 'Usuario Demo',
                'password' => bcrypt('password123'),
                'email_verified_at' => now(),
            ]
        );

        // Crear cliente de ejemplo
        Cliente::create([
            'user_id' => $usuario->id,
            'nombre_negocio' => 'El Buen Sazón',
            'tipo_negocio' => 'Restaurante',
            'formalidad' => 'formal',
            'tipo_cuenta' => 'premium',
            'telefono' => '+52 55 1234 5678',
            'rfc' => 'EBS850101ABC',
            'razon_social' => 'El Buen Sazón S.A. de C.V.',
            'direccion_fiscal' => 'Av. Reforma 123, Col. Centro',
            'ofrece_facturacion' => true,
            'direccion_completa' => 'Calle Juárez 45, Col. Centro, CDMX',
            'ciudad' => 'Ciudad de México',
            'estado' => 'CDMX',
            'codigo_postal' => '06000',
            'metodos_pago' => ['Efectivo', 'Tarjeta Débito', 'Tarjeta Crédito'],
            'horarios' => [
                'lunes_viernes' => ['apertura' => '08:00', 'cierre' => '22:00'],
                'sabados' => ['apertura' => '09:00', 'cierre' => '23:00'],
            ],
            'cierra_dias_festivos' => false,
            'activo' => true,
            'verificado' => true,
        ]);
    }
}