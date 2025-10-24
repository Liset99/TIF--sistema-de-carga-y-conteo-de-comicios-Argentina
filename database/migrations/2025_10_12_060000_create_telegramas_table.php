<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telegramas', function (Blueprint $table) {
            $table->id('idTelegrama');
            $table->integer('votosDiputados');
            $table->integer('votosSenadores');
            $table->integer('blancos');
            $table->integer('nulos');
            $table->integer('impugnados');
            $table->dateTime('fechaHora');

            $table->unsignedBigInteger('idMesa')->nullable();
            $table->unsignedBigInteger('idUsuario')->nullable();

            $table->foreign('idMesa')->references('idMesa')->on('mesas')->onDelete('set null');
            $table->foreign('idUsuario')->references('idUsuario')->on('usuarios')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telegramas');
    }
};
