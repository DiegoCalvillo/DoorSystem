@extends('layouts.principal')

@section('content_usuarios_nuevo')
<div id="page-wrapper">
	<div class="container-fluid">
	{!! Form::open(['route' => 'usuarios/store', 'method' => 'POST']) !!}
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Crear Nuevo Usuario</h1>
			</div>
		</div>
		@include('alerts.errors')
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<b>Nuevo Registro</b>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Nombre de Usuario') !!}
									{!! Form::text('name', null, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Correo electrónico') !!}
									{!! Form::email('email', null, ['class' => 'form-control']) !!}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<button class="btn btn-success" type="submit">Registrar</button>
		</div>
	</div>
</div>
@stop