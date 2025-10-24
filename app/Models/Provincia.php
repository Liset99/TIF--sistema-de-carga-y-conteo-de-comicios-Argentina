<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provincias extends Model
{
    use HasFactory;
    protected $table = 'provincias';      
    protected $primaryKey = 'idProvincia'; 
    public $incrementing = false;
    protected $keyType = 'string';         

    protected $fillable = ['nombre'];

    public function listas()
    {
        return $this->hasMany(listas::class, 'nombreProvincia', 'nombreProvincia');
    }

    public function mesas()
    {
        return $this->hasMany(mesas::class, 'nombreProvincia', 'nombreProvincia');
    }
}
