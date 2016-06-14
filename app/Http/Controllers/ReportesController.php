<?php 
namespace App\Http\Controllers;
use App\Venta;
use Request;

class ReportesController extends Controller{
	public static function ventas(){
		$fhInicio 	= (Request::get('fhInicio')=="")? date('Y-m-01') : Request::get('fhInicio');
		$fhFin 	= (Request::get('fhFin')=="")? date('Y-m-d') : Request::get('fhFin');
		
		$ventas 	= Venta::
		whereBetween('fecha_venta', array($fhInicio, $fhFin))
		->orderBy('fecha_venta', 'DSC')
		->orderBy('hora_venta', 'ASC');
		
		$todo = $ventas->get();
		$totalVenta = $todo->sum(function($todo){
		    return $todo->items->sum('monto');
		});
		
		$ventas = $ventas->paginate(10);

		$ventas->setPath('/Reportes/Ventas?fhInicio='.$fhInicio."&fhFIn=".$fhFin);
		$jsonventas = Venta::jsonventas($fhInicio, $fhFin);

		return view('modulos.reportes.ventas.inicio', array(
			'ventas' 		=> $ventas,
			'jsonventas' 	=> $jsonventas,
			'totalVenta' 	=> $totalVenta,
			'fhInicio'		=> $fhInicio,
			'fhFin'			=> $fhFin
		));
	}
}
?>