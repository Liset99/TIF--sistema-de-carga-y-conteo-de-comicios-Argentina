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

    protected $fillable = ['idCandidato', 'dni', 'cargo', 'ordenEnLista', 'nombre', 'apellido', 'idLista'];
    
    public function personas()
    {
        return $this->belongsTo(personas::class, 'dni', 'dni');
    }

    public function listas()
    {
        return $this->belongsTo(listas::class, 'idLista', 'ordenEnLista');
    }
}
