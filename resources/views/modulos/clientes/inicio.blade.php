@extends('template.base')
@section('titulo')
	Nekkyn - Clientes
@endsection
@section('breadcrumb')
<div class="wrapper-breadcrumb pull-left">
    <ol class="breadcrumb">
      <li><a href="{!! asset('/') !!}">Home</a></li>
      <li class="active">Clientes</li>
    </ol>
</div>
@endsection
@section('contenido')
<div class="wrapp-inicio">
	<h2 class="h2TitMod"><i class="fa fa-heart fah2"></i> Tabla de Clientes</h2>
	<p>
		El módulo de Clientes esta diseñado para agregar todos los Clientes que necesitemos
		usar para la venta de nuestros productos
		<a href="{!! asset('/Almacen') !!}">Almacen</a>
	</p>

	<ul class="nav nav-tabs tabsJs">
		<li role="presentation" class="active"><a href="#clientes">Clientes</a></li>
	</ul>
	<div class="tab-content">
		<div id="clientes" class="tab-pane fade in active">
			<div class="titTab"><i class="fa fa-angle-right"></i> Tabla Clientes</div>
			<button type="button" class="btn btn-primary btn-sm btn-add">Agregar</button>
			<div class="table-responsive">
			<table class="table table-striped">
				<tr>
					<th>id</th>
					<th>Nombre</th>
					<th>Apllido</th>
					<th>Correo</th>
					<th>Dirección</th>
					<th>Celular</th>
					<th>Estado</th>
				</tr>
				@foreach($clientes as $ind => $val)
				<tr>
					<td>{!! $val->id !!}</td>
					<td>{!! $val->nombre !!}</td>
					<td>{!! $val->apellido !!}</td>
					<td>{!! $val->email !!}</td>
					<td>{!! $val->direccion !!}</td>
					<td>{!! $val->celular !!}</td>
					<td>
						<span class="label label-{!!($val->estado == 1)?'success':'default'!!}">
							{!! ($val->estado == 1)?'activo':'baja' !!}
						</span>
					</td>
				</tr>
				@endforeach
			</table>

			{!! $clientes->links() !!}

			</div>
		</div>	
	</div>
</div>
@endsection