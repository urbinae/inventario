<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{

	protected $table = 'providers';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'document_id', 'document', 'adress', 'phone', 'email', 'bank', 'acount'
    ];

    /**
     * Relación con Tipo de documento
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function typedoc(){
        return $this->belongsTo('App\DocumentType', 'document_id');
    }
}
