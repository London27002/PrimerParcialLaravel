<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Celulares extends Model
{
    use HasFactory;
    protected $fillable = [
        'modelo',
        'marca',
        'precio',
        'stock',
        'fecha_venta',
        'en_oferta',
        'descripcion',
        'color',
        'imei',
        'categoria_id'
    ];
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
