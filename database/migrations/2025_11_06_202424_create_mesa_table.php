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
        Schema::create('Mesa', function (Blueprint $table) {
            $table->integer('idMesa')->primary();
            $table->integer('electores');
            $table->string('establecimiento');
            $table->string('circuito');
            $table->string('idProvincia');
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
        Schema::dropIfExists('Mesa');
    }
};
