<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'purchases';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'provider_id', 'price', 'cant', 'unity', 'cost', 'stock'
    ];

    public function product(){
        return $this->belongsTo('App\Product', 'product_id');
    }

    public function provider(){
        return $this->belongsTo('App\Provider', 'provider_id');
    }
}
