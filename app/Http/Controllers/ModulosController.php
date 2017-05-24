<?php 
namespace App\Http\Controllers;

use App\Models\Colores;
use DB;
use App\Models\Reservaciones;
use App\Categoria;
use App\Color;
use App\Proveedor;
use App\User;
use App\Cliente;
use App\Producto;
use App\Talla;
use App\Metodopago;
use App\Venta;

class ModulosController extends Controller{
	public static function inicio(){
		$totalPiezas = Producto::sum('existencia');

		$inventario_categorias = Producto::groupBy('categoria_id')
		->selectRaw('*, sum(existencia) as totales, sum(costo) as total_costo')
		->get();

		$ventas 	= Venta::
		whereBetween('fecha_venta', array(date('Y-m-01'), date('Y-m-d')))
		->orderBy('fecha_venta', 'ASC')
		->orderBy('hora_venta', 'ASC')->get();

		$totalVenta = $ventas->sum('total_venta');
		$jsonventas = Venta::jsonventas($ventas);

		$ventas10 = Venta::orderBy('fecha_venta', 'DSC')->paginate(10);

		return view('modulos.inicio.inicio', array(
			'totalPiezas' 				=> $totalPiezas,
			'ventas'					=> $ventas10,
			'jsonventas' 				=> $jsonventas,
			'total_ventas_mes' 			=> $totalVenta
		));
	}

	public static function catalogos(){
		$categorias 	= Categoria::paginate(10);
		$colores 		= Color::paginate(10);
		$tallas 		= Talla::paginate(10);
		$metodospago 	= Metodopago::paginate(10);

		return view('modulos.catalogos.inicio', array(
			'categorias' 	=> $categorias,
			'colores'		=> $colores,
			'tallas'		=> $tallas,
			'metodospago'	=> $metodospago
		));
	}

	public static function proveedores(){
		$proveedores = Proveedor::paginate(10);

		return view('modulos.proveedores.inicio', array(
			'proveedores' => $proveedores
		));
	}

	public static function usuarios(){
		$usuarios = User::paginate(10);

		return view('modulos.usuarios.inicio', array(
			'usuarios' => $usuarios
		));
	}

	public static function clientes(){
		$clientes = Cliente::paginate(10);
		
		return view('modulos.clientes.inicio', array(
			'clientes' => $clientes
		));
	}

	public static function productos(){
		$productos 		= Producto::paginate(10);
		$categorias 	= Categoria::all();
		$colores 		= Color::all();
		$proveedores 	= Proveedor::all();
		$tallas 		= Talla::all();

		return view('modulos.productos.inicio', array(
			'productos' 	=> $productos,
			'categorias'	=> $categorias,
			'colores'		=> $colores,
			'proveedores'	=> $proveedores,
			'tallas'		=> $tallas
		));
	}

	public static function puntoDeVenta(){

		return view('modulos.puntoDeVenta.inicio');
	}

}
?>