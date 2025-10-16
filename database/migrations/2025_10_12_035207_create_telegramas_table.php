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
            $table->foreignId('idMesa')->constrained('mesas', 'idMesa')->onDelete('cascade');
            $table->timestamps();
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
