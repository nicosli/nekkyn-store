<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Venta;
use App\Producto;

class crudController extends Controller{

	public function __construct(){
		$this->middleware('auth');
	}

	public function agregar(Request $request){
		$producto = new Producto;
		$producto->estado = 1;
		$producto->nombre = $request->input('nombre');
		$producto->categoria_id = $request->input('categoria_id');
		$producto->color_id = $request->input('color_id');
		$producto->proveedor_id = $request->input('proveedor_id');
		$producto->talla_id = $request->input('talla_id');
		$producto->existencia = $request->input('existencia');
		$producto->costo = $request->input('costo');
		$producto->precio_publico = $request->input('precio_publico');
		$producto->descripcion = $request->input('descripcion');
		$producto->barcode = $request->input('barcode');
		if($producto->save())
			return json_encode(["exito" => 1]);
		else
			return json_encode(["exito" => 0]);
		
	}

	public function get($id){
		$producto = Producto::where("id", "=", $id)->first();
		return json_encode($producto);
	}

	public function actualizar(Request $request){
		$producto = Producto::find($request->input('producto_id'));
		$producto->estado = 1;
		$producto->nombre = $request->input('nombre');
		$producto->categoria_id = $request->input('categoria_id');
		$producto->color_id = $request->input('color_id');
		$producto->proveedor_id = $request->input('proveedor_id');
		$producto->talla_id = $request->input('talla_id');
		$producto->existencia = $request->input('existencia');
		$producto->costo = $request->input('costo');
		$producto->precio_publico = $request->input('precio_publico');
		$producto->descripcion = $request->input('descripcion');
		$producto->barcode = $request->input('barcode');
		if($producto->save())
			return json_encode(["exito" => 1]);
		else
			return json_encode(["exito" => 0]);
	}
	
}
?>