<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    use HasFactory;

    protected $table = 'Lista';
    protected $primaryKey = 'idLista';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'idLista',
        'nombre',
        'alianza',
        'cargoDiputado',
        'cargoSenador',
        'idProvincia'
    ];

    // 🔹 FK: idProvincia → provincias.idProvincia
    public function provincia()
    {
        return $this->belongsTo(Provincia::class, 'idProvincia', 'idProvincia');
    }

    // 🔹 Relación con Candidato: FK en Candidato.idLista → Lista.idLista
    public function candidatos()
    {
        return $this->hasMany(Candidato::class, 'idLista', 'idLista');
    }

    // 🔹 Relación con Resultado: FK en Resultado.idLista → Lista.idLista
    public function resultados()
    {
        return $this->hasMany(Resultado::class, 'idLista', 'idLista');
    }
}
