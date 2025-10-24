<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResultadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resultado = Resultado::create([
            'idResultado' => 1,
            'votos' => 100,
            'porcentaje' => 60.0,
            'idLista' => 1,
            'idTelegrama' => 1
        ]);

    }
}
