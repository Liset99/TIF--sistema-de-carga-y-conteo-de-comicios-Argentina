<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Usuario', function (Blueprint $table) {
            $table->integer('idUsuario')->primary();
            $table->string('nombreDeUsuario', 100);
            $table->string('contrasenia');
            $table->string('rol', 50);
            $table->string('dni', 20);

            $table->foreign('dni')
                  ->references('dni')
                  ->on('Personas')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Usuario');
    }
};
