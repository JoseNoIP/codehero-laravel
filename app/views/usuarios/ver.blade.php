@extends('layouts.master')

@section('sidebar')
	@parent
	Información de usuario
@stop

@section('content')
	@parent
	<h1>
		Usuario {{ $usuario -> id }}
	</h1>

	{{ $usuario -> nombre.' '.$usuario -> apellido }}

	<br />

	{{ $usuario -> created_at }}
@stop