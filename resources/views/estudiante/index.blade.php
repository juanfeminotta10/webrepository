@extends('layout.plantilla')
@section('contenido')

<div class="row">
<div class="col-md-12">
<a href="{{url('estudiante/create')}}" class="pull-right">

<button class="btn btn-success">Matricular Estudiante</button> </a>

<a href="{{url('imprimirEstudiantes')}}" class="pull-right">
<button class="btn btn-success">Imprimir Pdf</button> </a>
<div class="row">
<div class="container-md">
<div class="text-center">
    <div class="col-md-12 col-xs-12">
    <div class="table-responsive">
        <table class="table table-striped table-hover">
        <br>
            <thead>
<th>Id</th>
<th>Documento Identidad</th>
<th>Nombres</th>
<th>Apellidos</th>
<th>Fecha Nacimiento</th>
<th>Genero</th>
<th>Eps</th>
<th>Direccion</th>
<th>Grado</th>
<th>Nombre Padre</th>
<th>Cedula Padre</th>
<th>Telefono Padre</th>
<th>Nombre Madre</th>
<th>Cedula Madre</th>
<th>Telefono Madre</th>
<th>Opciones</th>
<th ></th>
        </tr>
    </thead>
<tbody>
@foreach($estudiante as $est)
<tr>
<td>{{ $est->id }}</td>
<td>{{ $est->documento_identidad}}</td>
<td>{{ $est->nombre_est }}</td>
<td>{{ $est->apellido_est}}</td>
<td>{{ $est->fecha_nac }}</td>
<td>{{ $est->genero }}</td>
<td>{{ $est->eps}}</td>
<td>{{ $est->direccion}}</td>
<td>{{ $est->grado_inscrito}}</td>
<td>{{ $est->nombre_padre }}</td>
<td>{{ $est->cedula_padre }}</td>
<td>{{ $est->telefono_padre }}</td>
<td>{{ $est->nombre_madre }}</td>
<td>{{ $est->cedula_madre }}</td>
<td>{{ $est->telefono_madre }}</td>
<td>
<a href="{{URL::action('App\http\Controllers\EstudianteController@edit',$est->id)}}"><button class="btn btn-primary">Actualizar</button></a>
<a href=""data-target="#modal-delete-{{$est->id}}"data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
</td>
</tr>
@include('estudiante.modal')
@endforeach
</tbody>
</table>

</div>
@endsection