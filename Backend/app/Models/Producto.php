<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{
    //
    protected $table = 'producto';

    protected $fillable = ['nombre_producto','descripcion','precio','stock'];
}
