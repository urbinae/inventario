<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stocks';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'stock'
    ];

    public function product(){
        return $this->hasOne('App\Product', 'id', 'product_id');
    }
}
