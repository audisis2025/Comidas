<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ejecutar las migraciones.
     * Agrega los campos necesarios para el registro completo de negocios.
     */
    public function up(): void
    {
        Schema::table('clientes', function (Blueprint $table) {
            // Información básica del negocio
            $table->string('nombre_negocio')->nullable();
            $table->string('tipo_negocio')->nullable(); // Restaurante, Cafetería, etc.
            $table->enum('formalidad', ['formal', 'informal'])->nullable();
            $table->enum('tipo_cuenta', ['basica', 'premium'])->default('basica');
            $table->string('telefono', 20)->nullable();
            
            // Información fiscal (nullable para negocios informales)
            $table->string('rfc', 13)->nullable();
            $table->string('razon_social')->nullable();
            $table->text('direccion_fiscal')->nullable();
            $table->boolean('ofrece_facturacion')->default(false);
            
            // Dirección del establecimiento
            $table->text('direccion_completa')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('estado')->nullable();
            $table->string('codigo_postal', 10)->nullable();
            
            // Métodos de pago y horarios (JSON)
            $table->json('metodos_pago')->nullable();
            $table->json('horarios')->nullable();
            $table->boolean('cierra_dias_festivos')->default(false);
            
            // Estado del negocio
            $table->boolean('activo')->default(true);
            $table->boolean('verificado')->default(false);
            
            // Índices para búsquedas
            $table->index('ciudad');
            $table->index('estado');
            $table->index('tipo_negocio');
        });
    }

    /**
     * Revertir las migraciones.
     */
    public function down(): void
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->dropColumn([
                'nombre_negocio',
                'tipo_negocio',
                'formalidad',
                'tipo_cuenta',
                'telefono',
                'rfc',
                'razon_social',
                'direccion_fiscal',
                'ofrece_facturacion',
                'direccion_completa',
                'ciudad',
                'estado',
                'codigo_postal',
                'metodos_pago',
                'horarios',
                'cierra_dias_festivos',
                'activo',
                'verificado',
            ]);
        });
    }
};