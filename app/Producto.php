<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";

    public function categoria(){
    	return $this->belongsTo('App\Categoria');
    }

    public function color(){
    	return $this->belongsTo('App\Color');
    }

    public function proveedor(){
    	return $this->belongsTo('App\Proveedor');
    }

    public function talla(){
    	return $this->belongsTo('App\Talla');
    }
}
