<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoteProduct extends Model
{
	protected $table = 'lotes_products';

    public function lote()
	{
	    return $this->belongsTo('App\Lote');
	}

	public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
