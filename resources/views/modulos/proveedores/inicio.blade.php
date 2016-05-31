@extends('template.base')
@section('titulo')
	Nekkyn - Proveedores
@endsection
@section('breadcrumb')
<div class="wrapper-breadcrumb pull-left">
    <ol class="breadcrumb">
      <li><a href="{!! asset('/') !!}">Home</a></li>
      <li class="active">Proveedores</li>
    </ol>
</div>
@endsection
@section('contenido')
<div class="wrapp-inicio">
	<h2 class="h2TitMod"><i class="fa fa-truck fah2"></i> Tabla de Proveedores</h2>
	<p>
		El módulo de Proveedores esta diseñado para agregar todos los Proveedores que necesitemos
		usar para nuestros productos. Ver menú 
		<a href="{!! asset('/Almacen') !!}">Almacen</a>
	</p>

	<ul class="nav nav-tabs tabsJs">
		<li role="presentation" class="active"><a href="#proveedores">Proveedores</a></li>
	</ul>
	<div class="tab-content">
		<div id="proveedores" class="tab-pane fade in active">
			<div class="titTab"><i class="fa fa-angle-right"></i> Tabla Proveedores</div>
			<button type="button" class="btn btn-primary btn-sm btn-add">Agregar</button>
			<div class="table-responsive">
			<table class="table table-striped">
				<tr>
					<th>id</th>
					<th>Nombre</th>
					<th>Representante</th>
					<th>Teléfono</th>
					<th>Correo</th>
					<th>Estado</th>
				</tr>
				@foreach($proveedores as $ind => $val)
				<tr>
					<td>{!! $val->id !!}</td>
					<td>{!! $val->nombre !!}</td>
					<td>{!! $val->representante !!}</td>
					<td>{!! $val->telefono !!}</td>
					<td>{!! $val->email !!}</td>
					<td>
						<span class="label label-{!!($val->estado == 1)?'success':'default'!!}">
							{!! ($val->estado == 1)?'activo':'baja' !!}
						</span>
					</td>
				</tr>
				@endforeach
			</table>

			{!! $proveedores->links() !!}

			</div>
		</div>	
	</div>
</div>
@endsection