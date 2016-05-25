<?php namespace App\Http\Controllers;

use App\Models\Colores;
use DB;
use App\Models\Reservaciones;

class ModulosController extends Controller{
	public static function inicio(){
		
		return view('modulos.inicio.inicio');
	}

}
?>