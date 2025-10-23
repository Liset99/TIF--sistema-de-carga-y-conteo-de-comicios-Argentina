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

    protected $fillable = ['idLista', 'nombre', 'alianza', 'cargo', 'idProvincia'];

    public function provincia()
    {
        return $this->belongsTo(Provincia::class, 'idProvincia');
    }

    
    public function resultados()
    {
        return $this->hasMany(Resultado::class, 'idLista');
    }


    public function candidatos()
    {
        return $this->hasMany(Candidato::class, 'idLista');
    }
}
