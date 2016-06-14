@extends('template.base')
@section('titulo')
	Nekkyn - Dashboard
@stop
@section('breadcrumb')
<div class="wrapper-breadcrumb pull-left">
    <ol class="breadcrumb">
      <li><a href="{!! asset('/') !!}">Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
</div>
@endsection
@section('contenido')
<div class="wrapp-inicio">
	<div class="overflow-hidden">
		<div class="pull-left padAv">
			<img class="avBig" src="{!! asset($avatar) !!}" />
		</div>
		<div class="pull-left">
			<div class="nickname">{!! Auth::user()->nickname !!}</div>
			<div class="name">{!! Auth::user()->name !!}</div>

			@if(Auth::user()->idSocial == '')
			<a href="{!! asset('/auth/facebook') !!}" class="btn btn-primary btn-sm"><i class="fa fa-facebook"></i> Conectar</a>
			@else
			<div>Conectado con facebook</div>
			@endif
		</div>
	</div>
	<div class="clear-left tits mt15"><i class="fa fa-area-chart"></i> Reporte Ejecutivo del mes</div>
	<div class="wrap-stats">
		<div class="panel panel-default">
			<div class="panel-body statsDashboard">
				<span class="label label-primary">Ventas del Mes</span> 
				MXN $ <strong>{!! number_format($total_ventas_mes,2) !!}</strong>

				<span class="label label-success">Inventario</span> 
				<strong>{!! number_format($totalPiezas,0) !!} productos</strong>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				Ventas del mes
				<div id="chartdiv" style="width:100%; height:260px;"></div>
			</div>
			<div class="col-md-6">
				Últimas ventas generadas
				<table class="table table-striped">
					<tr>
						<th>Fecha Venta</th>
						<th>Método Pago</th>
						<th>Total</th>
					</tr>
					@foreach($ventas as $ind => $val)
					<tr>
						<td>{!! Util::ff($val->fecha_venta) !!}</td>
						<td>{!! $val->metodopago['nombre'] !!}</td>
						<td>MXN $ <strong>{!! number_format($val->total_venta,2) !!}</strong></td>
					</tr>
					@if($ind == 5)
					@break
					@endif
					@endforeach
				</table>				
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