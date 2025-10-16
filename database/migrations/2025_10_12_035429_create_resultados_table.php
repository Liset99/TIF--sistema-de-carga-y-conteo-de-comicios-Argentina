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
            $table->foreignId('idLista')->constrained('listas', 'idLista')->onDelete('cascade');
            $table->foreignId('idTelegrama')->constrained('telegramas', 'idTelegrama')->onDelete('cascade');
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
        Schema::dropIfExists('resultados');
    }
};
