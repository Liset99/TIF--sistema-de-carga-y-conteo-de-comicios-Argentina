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
        Schema::create('Lista', function (Blueprint $table) {
            $table->integer('idLista')->primary();
            $table->string('nombre');
            $table->string('alianza')->nullable();
            $table->string('cargoDiputado')->nullable();
            $table->string('cargoSenador')->nullable();
            $table->string('idProvincia'); // <- este campo referencia provincias.idProvincia
            $table->timestamps();

            $table->foreign('idProvincia')->references('idProvincia')->on('provincias');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Lista');
    }
};
