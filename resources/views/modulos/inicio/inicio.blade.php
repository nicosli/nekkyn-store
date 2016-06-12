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
	<div class="clear-left tits mt15"><i class="fa fa-area-chart"></i> Reporte Ejecutivo</div>
	<div class="wrap-stats">
		<div class="panel panel-default">
			<div class="panel-body">
				<span class="label label-primary">{!! number_format($totalPiezas,0) !!}</span> 
				Piezas en tu inventario
			</div>
		</div>
	</div>
</div>
@endsection