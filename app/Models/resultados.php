<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resultados extends Model
{
    use HasFactory;
    protected  $table = 'resultados';
    protected $primaryKey = 'idResultado';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = ['idResultado', 'votos', 'porcentaje', 'idLista', 'idTelegrama'];
    
    public function telegramas()
    {
        return $this->belongsTo(Telegrama::class, 'idTelegrama');
    }

    public function listas()
    {
        return $this->belongsTo(Lista::class, 'idLista');
    }
}
