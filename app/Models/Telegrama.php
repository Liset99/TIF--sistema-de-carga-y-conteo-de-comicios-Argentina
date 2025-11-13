<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telegrama extends Model
{
    use HasFactory;

    protected $table = 'Telegrama';
    protected $primaryKey = 'idTelegrama';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'idTelegrama',
        'votosDiputados',
        'votosSenadores',
        'blancos',
        'nulos',
        'impugnados',
        'fechaHora',
        'idMesa',
        'idUsuario'
    ];
    
    public function resultados()
    {
        return $this->hasMany(Resultado::class, 'idTelegrama', 'idTelegrama');
    }

    public function mesa()
    {
        return $this->belongsTo(Mesa::class, 'idMesa', 'idMesa');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'idUsuario', 'idUsuario');
    }
}
