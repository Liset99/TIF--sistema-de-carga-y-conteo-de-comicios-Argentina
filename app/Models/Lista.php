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

    protected $fillable = ['idLista', 'nombre', 'alianza', 'cargoDiputado', 'cargoSenador','nombreProvincia'];

    public function provincia()
    {
        return $this->belongsTo(provincias::class,'nombreProvincia', 'nombreProvincia');
    }

    
    public function resultados()
    {
        return $this->hasMany(resultados::class, 'lista', 'idLista');
    }


    public function candidatos()
    {
        return $this->hasMany(candidatos::class, 'ordenEnLista', 'idLista');
    }
}
