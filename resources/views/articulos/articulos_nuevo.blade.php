@extends('layouts.principal')

@section('content_articulos_nuevo')
<div id="page-wrapper">
	{!! Form::open(['route' => 'articulos/store', 'method' => 'POST']) !!}
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Registro de artículos</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<b>Nuevo Registro</b>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									{!! Form::label('full_name', 'Descripción') !!}
									{!! Form::text('descripcion', null, ['class' => 'form-control']) !!}			
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Familia') !!}
									{!! Form::select('familia_id', $familias, null, ['id' => 'familia_id', 'class' => 'form-control', 'placeholder' => 'Seleccione']) !!}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'SubFamlia') !!}
									{!! Form::select('sub_familia_id', ['placeholder' => 'Seleccione'], null, ['id' => 'sub_familias', 'class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Dado') !!}
									{!! Form::text('dado', null, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Largo') !!}
									{!! Form::text('largo', null, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
									{!! Form::label('full_name', 'BL') !!}
									{!! Form::text('BL', null, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
									{!! Form::label('full_name', 'NG') !!}
									{!! Form::text('NG', null, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
									{!! Form::label('full_name', 'HU') !!}
									{!! Form::text('HU', null, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
									{!! Form::label('full_name', 'B3') !!}
									{!! Form::text('B3', null, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
									{!! Form::label('full_name', 'B5') !!}
									{!! Form::text('B5', null, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
									{!! Form::label('full_name', 'CH') !!}
									{!! Form::text('CH', null, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
									{!! Form::label('full_name', 'BR') !!}
									{!! Form::text('BR', null, ['class' => 'form-control']) !!}
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
{!! Html::script('js/js_articulos/nuevo_familia.js', ['type' => 'text/javascript']) !!}
@stop