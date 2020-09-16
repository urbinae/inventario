<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    protected $table = 'lotes';
    protected $fillable = [
        'name', 'slug', 'costo_fijo_usd', 'costo_variable_usd'
    ];
}
