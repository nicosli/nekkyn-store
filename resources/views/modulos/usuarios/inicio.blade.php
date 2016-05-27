@extends('template.base')
@section('titulo')
	Nekkyn - Usuarios
@endsection
@section('breadcrumb')
<div class="wrapper-breadcrumb pull-left">
    <ol class="breadcrumb">
      <li><a href="{!! asset('/') !!}">Home</a></li>
      <li class="active">Usuarios</li>
    </ol>
</div>
@endsection
@section('contenido')
<div class="wrapp-inicio">
	<h2 class="h2TitMod"><i class="fa fa-users fah2"></i> Tabla de Usuarios</h2>
	<p>
		El módulo de Usuarios esta diseñado para agregar a todas las peronas que 
		necesiten tener acceso al sistema
	</p>

	<ul class="nav nav-tabs tabsJs">
		<li role="presentation" class="active"><a href="#usuarios">Usuarios</a></li>
	</ul>
	<div class="tab-content">
		<div id="usuarios" class="tab-pane fade in active">
			<div class="titTab"><i class="fa fa-angle-right"></i> Tabla Usuarios</div>
			<button type="button" class="btn btn-primary btn-sm btn-add">Agregar</button>
			<div class="table-responsive">
			<table class="table table-striped">
				<tr>
					<th>id</th>
					<th>Nombre</th>
					<th>Nickname</th>
					<th>Correo</th>
					<th>id social</th>
					<th>Estado</th>
				</tr>
				@foreach($usuarios as $ind => $val)
				<tr>
					<td>{!! $val->id !!}</td>
					<td>{!! $val->name !!}</td>
					<td>{!! $val->nickname !!}</td>
					<td>{!! $val->email !!}</td>
					<td>{!! $val->idSocial !!}</td>
					<td>
						<span class="label label-{!!($val->estado == 1)?'success':'default'!!}">
							{!! ($val->estado == 1)?'activo':'baja' !!}
						</span>
					</td>
				</tr>
				@endforeach
			</table>
			</div>
		</div>	
	</div>
</div>
@endsection