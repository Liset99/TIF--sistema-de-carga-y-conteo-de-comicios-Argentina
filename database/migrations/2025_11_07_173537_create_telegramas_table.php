<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Telegrama', function (Blueprint $table) {
            $table->integer('idTelegrama')->primary();
            $table->integer('votosDiputados');
            $table->integer('votosSenadores');
            $table->integer('blancos');
            $table->integer('nulos');
            $table->integer('impugnados');
            $table->dateTime('fechaHora');
            $table->integer('idMesa');
            $table->integer('idUsuario');

            $table->foreign('idMesa')
                  ->references('idMesa')
                  ->on('Mesa')
                  ->onDelete('cascade');

            $table->foreign('idUsuario')
                  ->references('idUsuario')
                  ->on('Usuario')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Telegrama');
    }
};
