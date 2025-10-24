<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MesasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mesa = Mesa::create([
            'idMesa' => 1,
            'establecimiento' => 'Escuela 1',
            'circuito' => 'Circuito A',
            'idProvincia' => 1
        ]);

    }
}
