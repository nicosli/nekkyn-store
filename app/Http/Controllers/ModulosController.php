<?php 
namespace App\Http\Controllers;

use App\Models\Colores;
use DB;
use App\Models\Reservaciones;
use App\Categoria;
use App\Color;
use App\Proveedor;
use App\User;

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

	public static function usuarios(){
		$usuarios = User::all();

		return view('modulos.usuarios.inicio', array(
			'usuarios' => $usuarios
		));
	}

}
?>