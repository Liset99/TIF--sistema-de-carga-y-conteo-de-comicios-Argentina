<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = Usuario::create([
            'idUsuario' => 1,
            'nombreDeUsuario' => 'juanp',
            'contrasenia' => '1234',
            'rolUsuario' => 'admin',
            'dni' => 12345678,
            'rolPersona' => 'administrador'
        ]);

    }
}
