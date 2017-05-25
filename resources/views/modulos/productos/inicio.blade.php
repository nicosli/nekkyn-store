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
	<input type="hidden" name="page" value="{{ $page }}">
	<input type="hidden" name="location" value="{{Request::path()}}">
	<input type="hidden" name="buscarQuery" value="{{ $buscar }}">
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
			@if($success == '1')
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Registro Actualizado!</strong> El Producto se actualizó con éxito en la base de datos.
			</div>
			@endif
			<div class="alert alert-success alert-dismissible alert-exito" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Registro guardado!</strong> El Producto se guardó con éxito en la base de datos.
			</div>
			<div class="alert alert-danger alert-dismissible alert-error" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Error al guardar!</strong> Ocurrió un error al intentar guardar el Producto :/
			</div>
			<div class="titTab"><i class="fa fa-angle-right"></i> Tabla Productos</div>
			<div class="pull-right">
				<form class="form-inline" action="{{Request::url()}}" data-toggle="validator" method="GET">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-laptop" aria-hidden="true"></i></div>
							<input type="text" class="form-control input-sm" id="Buscar" value="{{$buscar}}" name="buscar" placeholder="Buscar Producto" required>
						</div>
					</div>
					<button type="submit" class="btn btn-default btn-sm">Buscar</button>
				</form>
			</div>
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
					<th>Estado</th>
					<th></th>
				</tr>
				@foreach($productos as $ind => $val)
				<tr>
					<td>{!! $val->id !!}</td>
					<td>
						<a href="#mostrarItem" class="btn-mostrar" data-toggle="modal" data-target="#modalMostrar" data-productoid="{!! $val->id !!}">{!! $val->nombre !!}</a>
					</td>
					<td>{!! $val->categoria['nombre'] !!}</td>
					<td>{!! $val->color['nombre'] !!}</td>
					<td>{!! $val->proveedor['nombre'] !!}</td>
					<td>{!! $val->talla['nombre'] !!}</td>
					<td>{!! $val->existencia !!}</td>
					<td>MXN $ <strong>{!! number_format($val->costo, 2) !!}</strong></td>
					<td>MXN $ <strong>{!! number_format($val->precio_publico, 2) !!}</strong></td>
					<td>
						<span class="label label-{!!($val->estado == 1)?'success':'default'!!}">
							{!! ($val->estado == 1)?'activo':'baja' !!}
						</span>
					</td>
					<td>
						<button type="button" class="btn btn-primary btn-xs btn-editar" data-toggle="modal" data-target="#modalEditar" data-productoid="{!! $val->id !!}">Editar</button>
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
	<!-- Modal Nuevo-->
	<div class="modal fade" id="modalGuardar" tabindex="-1" role="dialog" aria-labelledby="modalGuardar">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h5 class="modal-title"><i class="fa fa-list-alt" aria-hidden="true"></i> Agregar Nuevo Producto</h5>
				</div>
				<form role="form" data-toggle="validator" id="formAgregarProducto">
				<div class="modal-body">
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" id="nombre" placeholder="Nombre del Producto" name="nombre" required>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="categoria_id">Categoría</label>
								<select name="categoria_id" id="categoria_id" class="form-control" required>
									<option value="">Seleccione Categoría</option>
									@foreach($categorias as $categoria)
										<option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="color_id">Color</label>
								<select name="color_id" id="color_id" class="form-control" required>
									<option value="">Seleccione Color</option>
									@foreach($colores as $color)
										<option value="{{$color->id}}">{{$color->nombre}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="proveedor_id">Proveedor</label>
								<select name="proveedor_id" id="proveedor_id" class="form-control" required>
									<option value="">Seleccione Proveedor</option>
									@foreach($proveedores as $proveedor)
										<option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="talla_id">Talla</label>
								<select name="talla_id" id="talla_id" class="form-control" required>
									<option value="">Seleccione Talla</option>
									@foreach($tallas as $talla)
										<option value="{{$talla->id}}">{{$talla->nombre}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="costo">Costo</label>
								<input type="number" class="form-control" id="costo" placeholder="costo del producto" name="costo" step=1 required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="precio_publico">Precio Público</label>
								<input type="number" class="form-control" id="precio_publico" placeholder="Precio Público del producto" name="precio_publico" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="existencia">Existencia</label>
								<input type="number" class="form-control" id="existencia" placeholder="Número de piezas" name="existencia" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="existencia">Código de Barras</label>
								<input type="text" class="form-control barcode" id="barcode" name="barcode" required disabled>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="descripcion">Descripción</label>
						<textarea name="descripcion" class="form-control" id="descripcion" name="descripcion" cols="30" rows="3" required></textarea>
					</div>
					<input type="hidden" class="barcode" name="barcode">
					{!! csrf_field() !!}
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</div>
			</form>
		</div>
	</div>

	<!-- Modal Mostrar-->
	<div class="modal fade" id="modalMostrar" tabindex="-1" role="dialog" aria-labelledby="modalMostrar">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h5 class="modal-title"><i class="fa fa-list-alt" aria-hidden="true"></i> Mostrar detalles del Producto</h5>
				</div>
				<div class="modal-body">
					<h3 class="modalMostrarNombre mt0"></h3>
					<canvas id="ean" width="200" height="100">
						Your browser does not support canvas-elements.
					</canvas>
					<p class="modalMostrarDes bg-primary"></p>
					<div class="resultModalMostrar"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal Editar-->
	<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="modalEditar">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h5 class="modal-title"><i class="fa fa-list-alt" aria-hidden="true"></i> Editar Producto</h5>
				</div>
				<form role="form" data-toggle="validator" id="formEditarProducto">
				<div class="modal-body">
					<div class="resultModalEditar"></div>
					<div class="modalEditarDivForm">
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" id="nombre" placeholder="Nombre del Producto" name="nombre" required>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="categoria_id">Categoría</label>
								<select name="categoria_id" id="categoria_id" class="form-control" required>
									<option value="">Seleccione Categoría</option>
									@foreach($categorias as $categoria)
										<option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="color_id">Color</label>
								<select name="color_id" id="color_id" class="form-control" required>
									<option value="">Seleccione Color</option>
									@foreach($colores as $color)
										<option value="{{$color->id}}">{{$color->nombre}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="proveedor_id">Proveedor</label>
								<select name="proveedor_id" id="proveedor_id" class="form-control" required>
									<option value="">Seleccione Proveedor</option>
									@foreach($proveedores as $proveedor)
										<option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="talla_id">Talla</label>
								<select name="talla_id" id="talla_id" class="form-control" required>
									<option value="">Seleccione Talla</option>
									@foreach($tallas as $talla)
										<option value="{{$talla->id}}">{{$talla->nombre}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="costo">Costo</label>
								<input type="number" class="form-control" id="costo" placeholder="costo del producto" name="costo" step=1 required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="precio_publico">Precio Público</label>
								<input type="number" class="form-control" id="precio_publico" placeholder="Precio Público del producto" name="precio_publico" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="existencia">Existencia</label>
								<input type="number" class="form-control" id="existencia" placeholder="Número de piezas" name="existencia" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="existencia">Código de Barras</label>
								<input type="text" class="form-control barcode" id="barcode" name="barcode" required disabled>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="descripcion">Descripción</label>
						<textarea name="descripcion" class="form-control" id="descripcion" name="descripcion" cols="30" rows="3" required></textarea>
					</div>
					<input type="hidden" class="producto_id" name="producto_id">
					<input type="hidden" class="barcode" name="barcode">
					{!! csrf_field() !!}
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
				</form>
			</div>
		</div>
	</div>
@endsection