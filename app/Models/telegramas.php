<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telegramas extends Model
{
    use HasFactory;
    protected $table = 'telegramas';
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
        return $this->hasMany(Resultado::class, 'idTelegrama');
    }

    public function mesas()
    {
        return $this->belongsTo(Mesa::class, 'idMesa');
    }

    public function usuarios()
    {
        return $this->belongsTo(Usuario::class, 'idUsuario');
    }
}
