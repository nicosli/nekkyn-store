<?php 
namespace App\Http\Controllers;

use App\Models\Colores;
use DB;
use App\Models\Reservaciones;
use App\Categoria;
use App\Color;
use App\Proveedor;

class ModulosController extends Controller{
	public static function inicio(){		
		return view('modulos.inicio.inicio');
	}

	public static function catalogos(){
		$categorias = Categoria::all();
		$colores = Color::all();

		return view('modulos.catalogos.inicio', array(
			'categorias' => $categorias,
			'colores'	=> $colores
		));
	}

	public static function proveedores(){
		$proveedores = Proveedor::all();

		return view('modulos.proveedores.inicio', array(
			'proveedores' => $proveedores
		));
	}

}
?>