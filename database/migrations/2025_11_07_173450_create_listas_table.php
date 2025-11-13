<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Lista', function (Blueprint $table) {
            $table->integer('idLista')->primary();
            $table->string('nombre', 100);
            $table->string('alianza', 100)->nullable();
            $table->string('cargoDiputado', 100)->nullable();
            $table->string('cargoSenador', 100)->nullable();
            $table->integer('idProvincia');

            $table->foreign('idProvincia')
                  ->references('idProvincia')
                  ->on('provincias')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Lista');
    }
};
