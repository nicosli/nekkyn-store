@extends('template.base')
@section('titulo')
	Nekkyn - Dashboard
@stop

@section('contenido')
<div class="wrapp-inicio">
	<div class="pull-left padAv">
		<img class="avBig" src="{!! asset('/img/avatar.jpg') !!}" />
	</div>
	<div class="pull-left">
		<div class="nickname">{!! Auth::user()->nickname !!}</div>
		<div class="name">{!! Auth::user()->name !!}</div>
		<a href="{!! asset('/') !!}" class="btn btn-primary btn-sm">Perfil</a>
	</div>
</div>
@endsection