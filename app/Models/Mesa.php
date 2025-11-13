<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;

    protected $table = 'Mesa';
    protected $primaryKey = 'idMesa';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'idMesa',
        'electores',
        'establecimiento',
        'circuito',
        'idProvincia'
    ];

    public function provincia()
    {
        return $this->belongsTo(Provincia::class, 'idProvincia', 'idProvincia');
    }

    public function telegramas()
    {
        return $this->hasMany(Telegrama::class, 'idMesa', 'idMesa');
    }
}
