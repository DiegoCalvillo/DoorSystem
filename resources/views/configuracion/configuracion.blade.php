@extends('layouts.principal')
@section('content_configuracion')
	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Configuración</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<a href="{{ url('/familias') }}">Familias</a>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<a href="{{ url('/usuarios') }}">Usuarios</a>
				</div>
			</div>
		</div>
	</div>
@stop