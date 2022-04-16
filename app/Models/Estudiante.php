<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
   
    public $timestamps= false;
    protected $fillable= ['documento_identidad','nombre_est','apellido_est','fecha_nac','genero','eps','direccion','grado_inscrito','nombre_padre','cedula_padre','telefono_padre','nombre_madre','cedula_madre','telefono_madre'];
}

