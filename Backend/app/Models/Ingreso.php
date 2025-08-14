<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ingreso extends Model
{
    //
    protected $table = 'ingreso';

    protected $fillable = ['cantidad','total'];
}
