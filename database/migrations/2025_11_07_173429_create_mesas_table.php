<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Mesa', function (Blueprint $table) {
            $table->integer('idMesa')->primary();
            $table->integer('electores');
            $table->string('establecimiento', 100);
            $table->string('circuito', 50);
            $table->integer('idProvincia');

            $table->foreign('idProvincia')
                  ->references('idProvincia')
                  ->on('provincias')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Mesa');
    }
};
