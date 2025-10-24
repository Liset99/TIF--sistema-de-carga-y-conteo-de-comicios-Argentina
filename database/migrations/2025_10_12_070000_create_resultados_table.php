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
        Schema::create('resultados', function (Blueprint $table) {
            $table->id('idResultado');
            $table->float('porcentaje');
            $table->integer('votos');

            $table->unsignedBigInteger('idTelegrama')->nullable();
            $table->unsignedBigInteger('idLista')->nullable();


            $table->foreign('idTelegrama')
            ->references('idTelegrama')
            ->on('telegramas')
            ->onDelete('set null');

            $table->foreign('idLista')
            ->references('idLista')
            ->on('listas')
            ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultados');
    }
};
