@extends('template.base')
@section('titulo')
	Nekkyn - Reporte de Ventas
@endsection
@section('breadcrumb')
<div class="wrapper-breadcrumb pull-left">
    <ol class="breadcrumb">
      <li><a href="{!! asset('/') !!}">Home</a></li>
      <li><a href="{!! asset('/Reportes') !!}">Reportes</a></li>
      <li class="active">Ventas</li>
    </ol>
</div>
@endsection
@section('contenido')
<div class="wrapp-inicio">
	<h2 class="h2TitMod"><i class="fa fa-bar-chart fah2"></i> Reporte de Ventas</h2>
	<p>
		En este módulo podras encontrar el detalle exacto de las ventas generadas en un rango de fechas.
	</p>

	<ul class="nav nav-tabs tabsJs">
		<li role="presentation" class="active"><a href="#puntoDeVenta">Reporte</a></li>
	</ul>
	<div class="tab-content">
		<div id="puntoDeVenta" class="tab-pane fade in active">
				<div class="titTab"><i class="fa fa-angle-right"></i> Ventas</div>
		</div>
	</div>
	
</div>
@endsection