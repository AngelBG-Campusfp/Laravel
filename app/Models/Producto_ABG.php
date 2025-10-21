<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto_ABG extends Model
{
    use HasFactory;

    protected $table = 'productos_abg';

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock'
    ];
}
