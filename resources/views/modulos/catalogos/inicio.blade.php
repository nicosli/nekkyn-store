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
	<h2 class="h2TitMod"><i class="fa fa-tags fah2"></i> Tabla de Catálogos</h2>
	<p>
		El módulo de catálogos esta diseñado para agregar todos los términos que necesitemos
		usar para nuestros productos. Ver menú 
		<a href="{!! asset('/Almacen') !!}">Almacen</a>
	</p>

	<ul class="nav nav-tabs" id="tabsCatalogo">
		<li role="presentation" class="active"><a href="#categorias">Categorías</a></li>
		<li role="presentation"><a href="#colores">Colores</a></li>
	</ul>
	<div class="tab-content">
		<div id="categorias" class="tab-pane fade in active">
			Tabla Categorias
		</div>
		<div id="colores" class="tab-pane fade">
			Tabla Colores
		</div>	
	</div>
</div>
@endsection