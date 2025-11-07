<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('Candidato', function (Blueprint $table) {
            $table->integer('idCandidato')->primary();
            $table->string('dni'); 
            $table->string('cargo');
            $table->integer('ordenEnLista');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('idLista'); 
            $table->timestamps();

            $table->foreign('dni')->references('dni')->on('Personas');
            $table->foreign('idLista')->references('idLista')->on('Lista');
        });
    }

    public function down(): void {
        Schema::dropIfExists('Candidato');
    }
};
