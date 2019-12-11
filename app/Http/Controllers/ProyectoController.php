<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyectos/index')->with('proyectos',$proyectos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyectos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Creo un nuevo objeto 'proyecto'
        $proyecto = new Proyecto;
        // Guardo cada parametro del formulario en el respectivo campo del objeto
        $proyecto->nombre = $request->nombre;
        $proyecto->titulo = $request->titulo;
        $proyecto->fechainicio = $request->fechainicio;
        $proyecto->fechafin = $request->fechafin;
        $proyecto->horasestimadas = $request->horasestimadas;
        // Guardo el objeto
        $proyecto->save();
        // Vuelvo a la vista tienda con un mensaje de confirmación de que se ha creado correctamente el producto
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = Proyecto::find($id);
        return view('proyectos/show')->with('proyecto',$proyecto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto = Proyecto::find($id);
        return view('proyectos/edit')->with('proyecto', $proyecto);
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
        // Busco el objeto proyecto que quiero editar
        $proyecto = Proyecto::where('id',$id)->first();
        // Actualizo cada parametro del formulario en el respectivo campo del objeto

        $proyecto->titulo = $request->titulo;
        $proyecto->fechainicio = $request->fechainicio;
        $proyecto->fechafin = $request->fechafin;
        $proyecto->horasestimadas = $request->horasestimadas;
        // Guardo el objeto
        $proyecto->save();
        // Vuelvo a la vista tienda con un mensaje de confirmación de que se ha creado correctamente el producto
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proyecto = Proyecto::where('id',$id)->first();
        $proyecto->delete();
        $proyectos = Proyecto::all();
        return view('proyectos/index')->with(['proyectos'=>$proyectos]);
    }
}
