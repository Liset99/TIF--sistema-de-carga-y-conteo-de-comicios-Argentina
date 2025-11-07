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

    // 🔹 Relación con Lista: FK en Lista.idProvincia → provincias.idProvincia
    public function listas()
    {
        return $this->hasMany(Lista::class, 'idProvincia', 'idProvincia');
    }

    // 🔹 Relación con Mesa: FK en Mesa.idProvincia → provincias.idProvincia
    public function mesas()
    {
        return $this->hasMany(Mesa::class, 'idProvincia', 'idProvincia');
    }
}
