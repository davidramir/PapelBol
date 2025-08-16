<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ingreso extends Model
{
    //
    use HasFactory;

    protected $table = 'ingresos';

    protected $fillable = ['cantidad','total','id_producto'];
}
