<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\EstudianteFormRequest;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('estudiante.index');
        $estudiante = Estudiante::orderBy('id', 'DESC')->paginate(3);
        return view('estudiante.index', compact('estudiante'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstudianteFormRequest $request)
    {
        $estudiantes = new Estudiante;
        $estudiantes->documento_identidad = $request->get('documento_identidad');
        $estudiantes->nombre_est = $request->get('nombre_est');
        $estudiantes->apellido_est = $request->get('apellido_est');
        $estudiantes->fecha_nac = $request->get('fecha_nac');
        $estudiantes->genero = $request->get('genero');
        $estudiantes->eps = $request->get('eps');
        $estudiantes->direccion = $request->get('direccion');
        $estudiantes->grado_inscrito = $request->get('grado_inscrito');
        $estudiantes->nombre_padre = $request->get('nombre_padre');
        $estudiantes->cedula_padre = $request->get('cedula_padre');
        $estudiantes->telefono_padre = $request->get('telefono_padre');
        $estudiantes->nombre_madre = $request->get('nombre_madre');
        $estudiantes->cedula_madre = $request->get('cedula_madre');
        $estudiantes->telefono_madre = $request->get('telefono_madre');
        $estudiantes->save();
        return Redirect::to('estudiante');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view("estudiante.edit", ["estudiante" => $estudiante]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $estudiantes = Estudiante::findOrFail($id);
        $estudiantes->documento_identidad = $request->get('documento_identidad');
        $estudiantes->nombre_est = $request->get('nombre_est');
        $estudiantes->apellido_est = $request->get('apellido_est');
        $estudiantes->fecha_nac = $request->get('fecha_nac');
        $estudiantes->genero = $request->get('genero');
        $estudiantes->eps = $request->get('eps');
        $estudiantes->direccion = $request->get('direccion');
        $estudiantes->grado_inscrito = $request->get('grado_inscrito');
        $estudiantes->nombre_padre = $request->get('nombre_padre');
        $estudiantes->cedula_padre = $request->get('cedula_padre');
        $estudiantes->telefono_padre = $request->get('telefono_padre');
        $estudiantes->nombre_madre = $request->get('nombre_madre');
        $estudiantes->cedula_madre = $request->get('cedula_madre');
        $estudiantes->telefono_madre = $request->get('telefono_madre');
        $estudiantes->update();
        return Redirect::to('estudiante');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiantes = Estudiante::findOrFail($id);
        $estudiantes->delete();
        return Redirect::to('estudiante');
    }
}
