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
        Schema::create('candidatos', function (Blueprint $table) {
            $table->id('idCandidato');
            $table->string('carga');

            $table->unsignedBigInteger('dni')->nullable();
            $table->unsignedBigInteger('ordenEnLista')->nullable();


            $table->foreign('dni')
            ->references('dni')
            ->on('personas')
            ->onDelete('set null');

            $table->foreign('ordenEnLista')
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
        Schema::dropIfExists('candidatos');
    }
};
