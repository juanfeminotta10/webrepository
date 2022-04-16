@extends('layout.plantilla')
@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>MATRICULAR ESTUDIANTE</h3>
       
        
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
{!!Form::open(array('url'=>'estudiante','method'=>'POST','autocomplete'=>'off'))!!}{{Form::token()}}
<div class="row">
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="documento_identidad">Numero de Documento</label>
            <input type="number" name="documento_identidad" id="documento_identidad" class="form-control" placeholder="Número de Documento">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="nombre_est">Nombres</label>
            <input type="text" name="nombre_est" id="nombre" class="form-control" placeholder="Nombre Completo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="apellido_est">Apellidos</label>
            <input type="text" name="apellido_est" id="apellido_est" class="form-control" placeholder="Apellidos Completos">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="fecha_nac">Fecha de Nacimiento</label>
            <input type="text" name="fecha_nac" id="fecha_nac" class="form-control" placeholder="Fecha de Nacimiento">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="genero">Genero</label>
            <input type="text" name="genero" id="genero" class="form-control" placeholder="Genero">
        </div>
        </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="eps">EPS</label>
            <input type="text" name="eps" id="eps" class="form-control" placeholder="Eps">
        </div>
        </div>
        <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="direccion">Direccion de Residencia</label>
            <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Direccion de Residencia">
        </div>
        </div>
        <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="grado_inscrito">Grado a Matricular</label>
            <input type="text" name="grado_inscrito" id="grado_inscrito" class="form-control" placeholder="Grado a matricular">
        </div>
        </div>
        </div>
        <br>

        <h3>DATOS ACUDIENTES</h3>
        <div class="row">
       
   <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
       <div class="form-group">
           <label for="nombre_padre">Nombre del Padre</label>
           <input type="text" name="nombre_padre" id="nombre_padre" class="form-control" placeholder="Nombres y Apellidos">
       </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
    <div class="form-group">
            <label for="cedula_padre">Número de Documento</label>
            <input type="number" name="cedula_padre" id="cedula_padre" class="form-control" placeholder="Número de Documento">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
    <div class="form-group">
            <label for="telefono_padre">Número Telefonico</label>
            <input type="number" name="telefono_padre" id="telefono_padre" class="form-control" placeholder="Número telefonico">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
       <div class="form-group">
           <label for="nombre_madre">Nombre de la Madre</label>
           <input type="text" name="nombre_madre" id="nombre_madre" class="form-control" placeholder="Nombres y Apellidos">
       </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
    <div class="form-group">
            <label for="cedula_madre">Número de Documento</label>
            <input type="number" name="cedula_madre" id="cedula_madre" class="form-control" placeholder="Número de Documento">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
    <div class="form-group">
            <label for="telefono_madre">Número Telefonico</label>
            <input type="number" name="telefono_madre" id="telefono_madre" class="form-control" placeholder="Número telefonico">
        </div>
    </div>
    
    
    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <button class="btn btn-primary" type="submit">
                <span class="glyphicon glyphicon-ok"></span>Guardar</button>
            <button class="btn btn-danger" type="reset">
                <span class="glyphicon glyphicon-remove"></span>Vaciar Campos</button>
            <a class="btn btn-info" type="reset" href="{{url('estudiante')}}">
                <span class="glyphicon glyphicon-home"></span>Regresar </a>
        </div>
    </div>
</div>{!!Form::close()!!}
@endsection