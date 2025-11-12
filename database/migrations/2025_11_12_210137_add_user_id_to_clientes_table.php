<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('clientes', function (Blueprint $table) {
            // Esta línea crea la columna 'user_id' (unsignedBigInteger)
            // y la define como una llave foránea que apunta a 'id' en la tabla 'users'.
            // La agregamos después de la columna 'id' por convención.
            $table->foreignId('user_id')
                  ->after('id') // Opcional, pero ordenado
                  ->constrained('users')
                  ->onDelete('cascade'); // Si se borra el usuario, se borra su cliente
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clientes', function (Blueprint $table) {
            // Es importante dropear la foránea ANTES de la columna
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};