@extends('layout.plantilla')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>EDITAR ESTUDIANTE</h3>@if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>{{Form::open(array('action'=>array('App\http\Controllers\EstudianteController@update', $estudiante->id),'method'=>'patch'))}}
<div class="row">
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="documento_identidad">Numero de Documento</label>
            <input type="number" name="documento_identidad" id="documento_identidad" class="form-control" value="{{$estudiante->documento_identidad}}">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="nombre_est">Nombres</label>
            <input type="text" name="nombre_est" id="nombre_est" class="form-control" value="{{$estudiante->nombre_est}}">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="apellido_est">Apellidos</label>
            <input type="text" name="apellido_est" id="apellido_est" class="form-control" value="{{$estudiante->apellido_est}}">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="fecha_nac">Fecha de Nacimiento</label>
            <input type="text" name="fecha_nac" id="fecha_nac" class="form-control" value="{{$estudiante->fecha_nac}}">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="genero">Genero</label>
            <input type="text" name="genero" id="genero" class="form-control" value="{{$estudiante->genero}}">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="eps">Eps</label>
            <input type="text" name="eps" id="eps" class="form-control" value="{{$estudiante->eps}}">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="direccion">Direccion de Residencia</label>
            <input type="text" name="direccion" id="direccion" class="form-control" value="{{$estudiante->direccion}}">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="grado_inscrito">Grado a Matricular</label>
            <input type="text" name="grado_inscrito" id="grado_inscrito" class="form-control" value="{{$estudiante->grado_inscrito}}">
            </div>
        </div>
        </div>
        <br>

        <h3>DATOS ACUDIENTES</h3>
        <div class="row">
       
   <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
       <div class="form-group">
           <label for="nombre_padre">Nombre del Padre</label>
           <input type="text" name="nombre_padre" id="nombre_padre" class="form-control" value="{{$estudiante->nombre_padre}}">
           </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
    <div class="form-group">
            <label for="cedula_padre">Número de Documento</label>
            <input type="number" name="cedula_padre" id="cedula_padre" class="form-control" value="{{$estudiante->cedula_padre}}">
            </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
    <div class="form-group">
            <label for="telefono_padre">Número Telefonico</label>
            <input type="number" name="telefono_padre" id="telefono_padre" class="form-control"value="{{$estudiante->telefono_padre}}">
            </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
       <div class="form-group">
           <label for="nombre_madre">Nombre de la Madre</label>
           <input type="text" name="nombre_madre" id="nombre_madre" class="form-control" value="{{$estudiante->nombre_madre}}">
           </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
    <div class="form-group">
            <label for="cedula_madre">Número de Documento</label>
            <input type="number" name="cedula_madre" id="cedula_madre" class="form-control" value="{{$estudiante->cedula_madre}}">
            </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
    <div class="form-group">
            <label for="telefono_madre">Número Telefonico</label>
            <input type="number" name="telefono_madre" id="telefono_madre" class="form-control"value="{{$estudiante->telefono_madre}}">
            </div>
            </div>
            
            
    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
        <div class="form-group">
            <button class="btn btn-primary" type="submit">
                <span class="glyphicon glyphicon-refresh">
                </span>Actualizar
            </button>
            <a class="btn btn-info" type="reset" href="{{url('estudiante')}}"><span class="glyphicon glyphicon-home"></span>Regresar </a>
        </div>
    </div>
</div>
{!!Form::close()!!}
@endsection