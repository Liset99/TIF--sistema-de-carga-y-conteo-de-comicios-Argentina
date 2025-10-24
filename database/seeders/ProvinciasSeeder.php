<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $provincia = provincias::create([
            'idProvincia' => 1,
            'nombreProvincia' => 'Buenos Aires'
        ]);

    }
}
