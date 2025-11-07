<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'Personas';
    protected $primaryKey = 'dni';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['dni', 'nombre', 'apellido'];
    
    public function candidatos()
    {
        return $this->hasMany(Candidato::class, 'dni', 'dni');
    }
}
