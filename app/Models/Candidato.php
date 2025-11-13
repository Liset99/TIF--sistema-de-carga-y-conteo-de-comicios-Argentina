<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;

    protected $table = 'Candidato';
    protected $primaryKey = 'idCandidato';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'idCandidato',
        'cargo',
        'dni',
        'idLista'
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'dni', 'dni');
    }

    public function lista()
    {
        return $this->belongsTo(Lista::class, 'idLista', 'idLista');
    }
}
