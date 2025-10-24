<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    use HasFactory;
    protected  $table = 'Resultado';
    protected $primaryKey = 'idResultado';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = ['idResultado', 'votos', 'porcentaje', 'idLista', 'idTelegrama'];
    
    public function telegramas()
    {
        return $this->belongsTo(telegramas::class, 'idTelegrama', 'idTelegrama');
    }

    public function listas()
    {
        return $this->belongsTo(listas::class, 'lista', 'idLista');
    }
}
