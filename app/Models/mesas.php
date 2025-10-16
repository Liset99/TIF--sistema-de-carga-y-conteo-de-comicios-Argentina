<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mesas extends Model
{
    use HasFactory;
    protected $table = 'mesas';
    protected $primaryKey = 'idMesa';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = ['idMesa', 'electores', 'establecimiento', 'circuito', 'idProvincia'];

    public function telegramas()
    {
        return $this->hasMany(Telegrama::class, 'idMesa');
    }

    public function provincias()
    {
        return $this->belongsTo(Provincia::class, 'idProvincia');
    }

}
