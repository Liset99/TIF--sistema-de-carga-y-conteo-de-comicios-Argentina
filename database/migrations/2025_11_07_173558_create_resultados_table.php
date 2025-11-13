<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Resultado', function (Blueprint $table) {
            $table->integer('idResultado')->primary();
            $table->integer('votos');
            $table->decimal('porcentaje', 5, 2);
            $table->integer('idLista');
            $table->integer('idTelegrama');

            $table->foreign('idLista')
                  ->references('idLista')
                  ->on('Lista')
                  ->onDelete('cascade');

            $table->foreign('idTelegrama')
                  ->references('idTelegrama')
                  ->on('Telegrama')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Resultado');
    }
};
