@extends('layouts.principal')

@section('content_usuarios_editar')
<div id="page-wrapper">
	<div class="container-fluid">
		{!! Form::open(['route' => 'usuarios/update', 'method' => 'put', 'novalidate']) !!}
		{!! Form::hidden('id', $usuario->id) !!}
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Editar Usuario</h1>
			</div>
		</div>
		@include('alerts.errors')
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<b>Credenciales de Usuario</b>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Usuario') !!}
									{!! Form::text('name', $usuario->name, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Correo electrónico') !!}
									{!! Form::email('email', $usuario->email, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-lg-6">
								{!! Form::label('full_name', 'Perfil') !!}
								{!! Form::select('user_type_id', $perfiles, $usuario->user_type_id, ['class' => 'form-control']) !!}
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Estatus de Usuario') !!}
									{!! Form::select('estatus', array('1' => 'Activado', '0' => 'Desactivado'), $usuario->estatus, ['class' => 'form-control']) !!}
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<b>Datos del Usuario</b>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Nombre') !!}
									{!! Form::text('nombre', $persona->nombre, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Apellidos') !!}
									{!! Form::text('apellidos', $persona->apellidos, ['class' => 'form-control']) !!}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<button class="btn btn-success" type="submit">Guardar</button>
		</div>
	</div>
</div>
@stop