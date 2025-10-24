<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ListasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lista = Lista::create([
            'idLista' => 1,
            'alianza' => 'Alianza X',
            'cargo' => 'Diputado',
            'idProvincia' => 1
        ]);

    }
}
