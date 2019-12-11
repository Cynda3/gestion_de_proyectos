@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Crear nuevo proyecto</h2>

  <form action="{{route('proyectos.store')}}" method="post">
    @csrf
    <label>Nombre</label><br>
    <input type="text" name="nombre"><br>
    <label>Titulo</label><br>
    <input type="text" name="titulo"><br>
    <label>Fecha de inicio</label><br>
    <input type="date" name="fechainicio"><br>
    <label>Fecha fin</label><br>
    <input type="date" name="fechafin"><br>
    <label>Horas estimadas</label><br>
    <input type="number" name="horasestimadas"><br>
    <input type="submit" name="submit" value="Submit">
  </form>

@endsection
