@extends('template.base')
@section('titulo')
	Nekkyn - Productos
@endsection
@section('breadcrumb')
<div class="wrapper-breadcrumb pull-left">
    <ol class="breadcrumb">
    	<li><a href="{!! asset('/') !!}">Home</a></li>
    	<li class="active">Productos</li>
    </ol>
</div>
@endsection
@section('contenido')
<div class="wrapp-inicio">
	<h2 class="h2TitMod"><i class="fa fa-barcode fah2"></i> Tabla de Productos</h2>
	<p>
		El módulo de Productos esta diseñado para agregar todos los Productos que necesitemos
		usar para nuestras ventas. Ver menú 
		<a href="{!! asset('/') !!}">Punto de venta</a>
	</p>

	<ul class="nav nav-tabs tabsJs">
		<li role="presentation" class="active"><a href="#productos">Productos</a></li>
	</ul>
	<div class="tab-content">
		<div id="productos" class="tab-pane fade in active">
			<div class="titTab"><i class="fa fa-angle-right"></i> Tabla Productos</div>
			<button type="button" class="btn btn-primary btn-sm btn-add" data-toggle="modal" data-target="#modalGuardar">Agregar</button>
			<div class="table-responsive">
			<table class="table table-striped">
				<tr>
					<th>id</th>
					<th>Nombre</th>
					<th>Categoria</th>
					<th>Color</th>
					<th>Proveedor</th>
					<th>Talla</th>
					<th>Existencia</th>
					<th>Costo</th>
					<th>Precio Público</th>
					<th>BarCode</th>
					<th>Estado</th>
				</tr>
				@foreach($productos as $ind => $val)
				<tr>
					<td>{!! $val->id !!}</td>
					<td>{!! $val->nombre !!}</td>
					<td>{!! $val->categoria['nombre'] !!}</td>
					<td>{!! $val->color['nombre'] !!}</td>
					<td>{!! $val->proveedor['nombre'] !!}</td>
					<td>{!! $val->talla['nombre'] !!}</td>
					<td>{!! $val->existencia !!}</td>
					<td>MXN $ <strong>{!! number_format($val->costo, 2) !!}</strong></td>
					<td>MXN $ <strong>{!! number_format($val->precio_publico, 2) !!}</strong></td>
					<td>{!! $val->barcode !!}</td>
					<td>
						<span class="label label-{!!($val->estado == 1)?'success':'default'!!}">
							{!! ($val->estado == 1)?'activo':'baja' !!}
						</span>
					</td>
				</tr>
				@endforeach
			</table>

			{!! $productos->links() !!}

			</div>
		</div>	
	</div>
</div>
@endsection

@section('modals')
	<!-- Modal -->
	<div class="modal fade" id="modalGuardar" tabindex="-1" role="dialog" aria-labelledby="modalGuardar">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h5 class="modal-title"><i class="fa fa-list-alt" aria-hidden="true"></i> Agregar Nuevo Producto</h5>
			</div>
			<div class="modal-body">
			<form>
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" class="form-control" id="nombre" placeholder="Nombre del Producto" name="nombre">
				</div>
				<div class="form-group">
					<label for="categoria_id">Categoría</label>
					<select name="categoria_id" id="categoria_id" class="form-control">
						@foreach($categorias as $categoria)
							<option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="color_id">Color</label>
					<select name="color_id" id="color_id" class="form-control">
						@foreach($colores as $color)
							<option value="{{$color->id}}">{{$color->nombre}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="proveedor_id">Proveedor</label>
					<select name="proveedor_id" id="proveedor_id" class="form-control">
						@foreach($proveedores as $proveedor)
							<option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="talla_id">Talla</label>
					<select name="talla_id" id="talla_id" class="form-control">
						@foreach($tallas as $talla)
							<option value="{{$talla->id}}">{{$talla->nombre}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="existencia">Existencia</label>
					<input type="number" class="form-control" id="existencia" placeholder="Existencia del producto" name="existencia">
				</div>
				<div class="form-group">
					<label for="costo">Costo</label>
					<input type="number" class="form-control" id="costo" placeholder="costo del producto" name="costo">
				</div>
				<div class="form-group">
					<label for="precio_publico">Precio Público</label>
					<input type="number" class="form-control" id="precio_publico" placeholder="Precio Público del producto" name="precio_publico">
				</div>
				<div class="form-group">
					<label for="nombre">Código de barras</label>
					<div></div>
					<canvas id="ean" width="200" height="100">
						Your browser does not support canvas-elements.
					</canvas>
				</div>
			</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-primary">Guardar</button>
			</div>
			</div>
		</div>
	</div>
@endsection