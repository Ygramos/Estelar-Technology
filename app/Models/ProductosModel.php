<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductosModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_producto',
        'codigo_producto',
        'valor',
        'cantidad',
        'img_url',

    ];
}
