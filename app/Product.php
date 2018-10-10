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

    public function stock(){
        return $this->hasOne('App\Stock', 'product_id', 'id');
    }
}
