<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'Persona';
    protected $primaryKey = 'dni';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = ['dni', 'nombre', 'apellido', 'rol'];

    public function candidatos()
    {
        return $this->hasOne(Candidato::class, 'dni');
    }

    public function usuarios()
    {
        return $this->hasOne(Usuario::class, 'dni');
    }
}
