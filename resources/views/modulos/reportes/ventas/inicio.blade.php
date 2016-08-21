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
			<div class="ovflhi">
				<div class="gt pull-left">
					<span class="label label-primary">Gran Total</span>
					<strong>MXN $ {!! number_format($totalVenta,2) !!}</strong>
				</div>
				<div id="reportrange" class="pull-right dateRangeMovil" 
					style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc;">
				    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
				    <span></span> <b class="caret"></b>
				</div>
				<input type="hidden" id="startDate" value="{{$fhInicio}}">
   				<input type="hidden" id="endDate" value="{{$fhFin}}">
			</div>
			<div id="chartdiv" style="width:100%; height:250px;"></div>
						
			<div class="table-responsive">
			<table class="table table-striped">
				<tr>
					<th>id</th>
					<th>Fecha de Venta</th>
					<th>Método Pago</th>
					<th>Cliente</th>
					<th>Usuario</th>
					<th>Productos</th>
					<th>Total</th>
				</tr>
				@foreach($ventas as $ind => $val)
				<tr>
					<td>{!! $val->id !!}</td>
					<td>
						{!! Util::ff($val->fecha_venta) !!}
						{!! $val->hora_venta !!}
					</td>
					<td>{!! $val->metodopago['nombre'] !!}</td>
					<td>{!! $val->cliente['nombre'] !!}</td>
					<td>{!! $val->usuario['name'] !!}</td>
					<td>
						<a href="#venta-detalle" 
							class="btn-show" 
							data-toggle="modal" 
							data-target="#modal-show"
							data-id-venta="{!! $val->id !!}"
							> 
							{!! $val->items->count() !!} Productos
						</a>
					</td>
					<td>MXN $ <strong>{!! number_format($val->total_venta,2) !!}</strong></td>
				</tr>
				@endforeach
			</table>

			{!! $ventas->links() !!}

			</div>
		</div>
	</div>
	
</div>
@endsection

@section('script')
<script type="text/javascript">
	var chartData= [
		{!!Util::jsonEspecialChart($jsonventas)!!}
	];
</script>
@endsection