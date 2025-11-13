<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Candidato', function (Blueprint $table) {
            $table->integer('idCandidato')->primary();
            $table->string('cargo', 100);
            $table->string('dni', 20);
            $table->integer('idLista');

            $table->foreign('dni')
                  ->references('dni')
                  ->on('Personas')
                  ->onDelete('cascade');

            $table->foreign('idLista')
                  ->references('idLista')
                  ->on('Lista')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Candidato');
    }
};
