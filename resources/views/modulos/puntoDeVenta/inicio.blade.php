@extends('template.base')
@section('titulo')
	Nekkyn - Productos
@endsection
@section('breadcrumb')
<div class="wrapper-breadcrumb pull-left">
    <ol class="breadcrumb">
      <li><a href="{!! asset('/') !!}">Home</a></li>
      <li class="active">Punto de Venta</li>
    </ol>
</div>
@endsection
@section('contenido')
<div class="wrapp-inicio">
	<h2 class="h2TitMod"><i class="fa fa-shopping-bag fah2"></i> Punto de Venta</h2>
	<p>
		El módulo Punto de Venta esta diseñado para llevar un control exacto de las ventas.
	</p>

	<ul class="nav nav-tabs tabsJs">
		<li role="presentation" class="active"><a href="#puntoDeVenta">Punto de Venta</a></li>
	</ul>
	<div class="tab-content">
		<div id="puntoDeVenta" class="tab-pane fade in active">
				<div class="titTab"><i class="fa fa-angle-right"></i> Nueva venta</div>
				<form class="form-inline" action="{!! asset('/PuntoDeVenta') !!}" method="GET">
					<div class="form-group">
						<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-barcode"></i></div>
							<input type="text" class="form-control" id="exampleInputAmount" placeholder="barcode o nombre">
						</div>
					</div>
					<button type="button" class="btn btn-primary">Buscar Producto</button>
				</form>
		</div>
	</div>
	
</div>
@endsection