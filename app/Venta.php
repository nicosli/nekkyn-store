<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Venta;

class Venta extends Model
{
    protected $table = 'ventas';

    public function items(){
    	return $this->hasMany('App\Listaventa');
    }
    public function usuario(){
    	return $this->belongsTo('App\User', 'user_id');
    }
    public function metodopago(){
    	return $this->belongsTo('App\Metodopago');
    }
    public function cliente(){
        return $this->belongsTo('App\Cliente');
    }
    public static function getTotal($ventas){
    	$total = 0;
    	foreach ($ventas as $key => $val) {
    		$total += $val->items->sum('monto');
    	}
    	return $total;
    }
    public static function jsonventas($todo){
        $json = "";
        foreach ($todo as $key => $val) {
            //echo $val->total_venta."<br>";
            if(isset($json[$val->fecha_venta]))
                $json[$val->fecha_venta] += $val->total_venta;
            else
                $json[$val->fecha_venta] = $val->total_venta;
        }
        //dd($json);
        return $json;
    }
}
