<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TelegramasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $telegrama = Telegrama::create([
            'idTelegrama' => 1,
            'votosDiputados' => 100,
            'votosSenadores' => 50,
            'blancos' => 5,
            'nulos' => 2,
            'impugnados' => 1,
            'fechaHora' => now(),
            'idMesa' => 1,
            'idUsuario' => 1
        ]);

    }
}
