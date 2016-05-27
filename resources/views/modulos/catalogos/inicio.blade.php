@extends('template.base')
@section('titulo')
	Nekkyn - Catálogos
@endsection
@section('breadcrumb')
<div class="wrapper-breadcrumb pull-left">
    <ol class="breadcrumb">
      <li><a href="{!! asset('/') !!}">Home</a></li>
      <li class="active">Catálogos</li>
    </ol>
</div>
@endsection
@section('contenido')
<div class="wrapp-inicio">
	<h2 class="h2TitMod"><i class="fa fa-file-text fah2"></i> Tabla de Catálogos</h2>
	<p>
		El módulo de catálogos esta diseñado para agregar todos los términos que necesitemos
		usar para nuestros productos. Ver menú 
		<a href="{!! asset('/Almacen') !!}">Almacen</a>
	</p>

	<ul class="nav nav-tabs tabsJs">
		<li role="presentation" class="active"><a href="#categorias">Categorías</a></li>
		<li role="presentation"><a href="#colores">Colores</a></li>
	</ul>
	<div class="tab-content">
		<div id="categorias" class="tab-pane fade in active">
			<div class="titTab"><i class="fa fa-angle-right"></i> Tabla Categorias</div>
			<button type="button" class="btn btn-primary btn-sm btn-add">Agregar</button>
			<table class="table table-striped">
				<tr>
					<th>id</th>
					<th>nombre</th>
					<th>Descripción</th>
					<th>Estado</th>
				</tr>
				@foreach($categorias as $ind => $val)
				<tr>
					<td>{!! $val->id !!}</td>
					<td>{!! $val->nombre !!}</td>
					<td>{!! $val->descripcion !!}</td>
					<td>
						<span class="label label-{!!($val->estado == 1)?'success':'default'!!}">
							{!! ($val->estado == 1)?'activo':'baja' !!}
						</span>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
		<div id="colores" class="tab-pane fade">
			<div class="titTab"><i class="fa fa-angle-right"></i> Tabla Colores</div>
			<button type="button" class="btn btn-primary btn-sm btn-add">Agregar</button>
			<table class="table table-striped">
				<tr>
					<th>id</th>
					<th>nombre</th>
					<th>Descripción</th>
					<th>Estado</th>
				</tr>
				@foreach($colores as $ind => $val)
				<tr>
					<td>{!! $val->id !!}</td>
					<td>{!! $val->nombre !!}</td>
					<td>{!! $val->descripcion !!}</td>
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
@endsection