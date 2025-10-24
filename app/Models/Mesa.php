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

    protected $fillable = ['idMesa', 'electores', 'establecimiento', 'circuito', 'nombreProvincia'];

    public function telegramas()
    {
        return $this->hasMany(telegramas::class, 'idMesa', 'idMesa');
    }

    public function provincias()
    {
        return $this->belongsTo(provincias::class, 'nombreProvincia', 'nombreProvincia');
    }

}
