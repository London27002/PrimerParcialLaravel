<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'activa',
        'descuento',
    ];

    public function celulares()
    {
        return $this->hasMany(Celulares::class);
    }
}