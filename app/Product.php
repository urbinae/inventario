<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'visible', 'category_id'
    ];

    /**
     * Relación con Categoría
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(){
        return $this->belongsTo('App\Category', 'category_id');
    }

    /**
        Relación con el almacén
    **/
    public function stock(){
        return $this->hasOne('App\Stock', 'product_id', 'id');
    }

    /**
    Relación con lote de productos
    **/
    public function lote_products()
    {
        return $this->hasMany('App\LoteProduct');
    }

    /**
     * Relación con lote.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function lote()
    {
        return $this->belongsToMany('App\Lote', 'lotes_products', 'product_id', 'lote_id');

    }
}
