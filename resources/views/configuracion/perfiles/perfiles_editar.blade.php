@extends('layouts.principal')

@section('content_perfiles_editar')
<div id="page-wrapper">
	<div class="container-fluid">
		{!! Form::open(['route' => 'perfiles/update', 'method' => 'PUT', 'novalidate']) !!}
		{!! Form::hidden('id', $perfil->id) !!}
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Perfil {{ $perfil->nombre_perfil }}</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<b>Nuevo Perfil</b>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Perfil') !!}
									{!! Form::text('nombre_perfil', $perfil->name, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Estatus') !!}
									{!! Form::select('estatus', array('1' => 'Activado', '0' => 'Desactivado'), $perfil->estatus, ['class' => 'form-control']) !!}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<button class="btn btn-success" type="submit">Actualizar</button>
	</div>
</div>
@stop