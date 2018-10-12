<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
	protected $table = 'lotes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'visible', 'price' 
    ];

    public function lote_products()
    {
        return $this->hasMany('App\LoteProduct');
    }

    /**
     * Relación con Productos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany('App\Product', 'lotes_products', 'lote_id', 'product_id');

    }
}
