<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    use HasFactory;

    protected $table = 'Resultado';
    protected $primaryKey = 'idResultado';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = ['idResultado', 'votos', 'porcentaje', 'idLista', 'idTelegrama'];
    
    public function telegrama()
    {
        return $this->belongsTo(Telegrama::class, 'idTelegrama', 'idTelegrama');
    }

    public function lista()
    {
        return $this->belongsTo(Lista::class, 'idLista', 'idLista');
    }
}
