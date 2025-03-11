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
        Schema::table('users', function (Blueprint $table) {
        // Añadimos los dos nuevos campos obligatorios
        $table->string('apellido')->after('name')->nullable();
        $table->string('telefono')->after('email')->nullable();
        
        // Añadimos el campo rol
        $table->string('rol')->default('guest')->after('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
              $table->dropColumn(['apellido', 'telefono', 'rol']);
        });
    }
};
