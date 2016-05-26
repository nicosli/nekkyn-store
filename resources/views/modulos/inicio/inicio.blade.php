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
@endsection