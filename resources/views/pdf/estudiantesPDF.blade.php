<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Estudiantes</title>
    <!-- Theme style -->
<link rel="stylesheet"
href="{{public_path('dist/css/adminlte.min.css')}}">

</head>
<body>

<div class="container">
<div class="row">
<div class="col">
</div>
<div class="col-md-12 col-xs-12">
 <h4 class="text-center">Institución Universitaria Antonio Jose</h4>
</div>

    <h3 class="text-center">Listado de Estudiantes</h3>
    </div>
    </div>
    <div class="row">
    <div class="container-md">
    <div class="text-center">
    <div class="col-md-12 col-xs-12">
    <div class="table-responsive">
        <table class="table table-striped table-hover">
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
<th ></th>
        </tr>
    </thead>
<tbody>
@foreach($estudiantes as $est)
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
</td>
</tr>

@endforeach
</tbody>
</table>

</div>
</div>
</div>
</div>
</div>
</body>
</html>