<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;

    protected $table = 'provincias';
    protected $primaryKey = 'idProvincia';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = ['idProvincia', 'nombre'];

    public function listas()
    {
        return $this->hasMany(Lista::class, 'idProvincia', 'idProvincia');
    }

    public function mesas()
    {
        return $this->hasMany(Mesa::class, 'idProvincia', 'idProvincia');
    }
}
