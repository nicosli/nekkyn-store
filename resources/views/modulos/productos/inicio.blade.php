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
			<button type="button" class="btn btn-primary btn-sm btn-add">Agregar</button>
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