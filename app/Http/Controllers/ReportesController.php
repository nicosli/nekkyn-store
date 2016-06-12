<?php 
namespace App\Http\Controllers;

class ReportesController extends Controller{
	public static function ventas(){
		$ventas = "";

		return view('modulos.reportes.ventas.inicio', array(
			'ventas' => $ventas
		));
	}
}
?>