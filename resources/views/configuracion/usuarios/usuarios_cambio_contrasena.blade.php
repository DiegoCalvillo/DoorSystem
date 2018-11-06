@extends('layouts.principal')

@section('content_cambio_contraseña')
<div id="page-wrapper">
	{!! Form::open(['route' => 'usuarios/cambio_contrasena_store', 'method' => 'POST']) !!}
	{!! Form::hidden('id', $usuario->id) !!}
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Cambio de contraseña</h1>
			</div>
		</div>
		@include('alerts.request')
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<b>Usuario: </b>{{ $usuario->name }}
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Nueva contraseña') !!}
									{!! Form::password('password', ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Confirmar contraseña') !!}
									{!! Form::password('password-confirmation', ['class' => 'form-control']) !!}
								</div>
							</div>
						</div>
						<button class="btn btn-success" type="submit">Actualizar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop