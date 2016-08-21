<?php 
namespace App\Http\Controllers;
use App\Venta;

class VentasController extends Controller{

	public function __construct(){
		$this->middleware('auth');
	}

	public function get($id){
		$venta = Venta::find($id);
		$items = false;
		if($venta){
			$items = Venta::find($id)->items()->get();
		}else{
			$venta = false;
		}
		
		$res = array(
			"venta" => $venta,
			"items" => $items
		);
		echo json_encode($res);
		//return $venta;
	}
}
?>