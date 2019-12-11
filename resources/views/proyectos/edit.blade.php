@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Crear nuevo proyecto</h2>

  <form action="{{route('proyectos.update', $proyecto->id)}}" method="post">
    @csrf
    @METHOD('patch')
    <label>Nombre</label><br>
    <input type="text" name="nombre" value="{{$proyecto->nombre}}" placeholder="{{$proyecto->nombre}}" disabled="true"><br>
    <label>Titulo</label><br>
    <input type="text" name="titulo" placeholder="{{$proyecto->titulo}}"><br>
    <label>Fecha de inicio</label><br>
    <input type="date" name="fechainicio" placeholder="{{$proyecto->fechainicio}}"><br>
    <label>Fecha fin</label><br>
    <input type="date" name="fechafin" placeholder="{{$proyecto->fechafin}}"><br>
    <label>Horas estimadas</label><br>
    <input type="number" name="horasestimadas" placeholder="{{$proyecto->horasestimadas}}"><br>
    <input type="submit" name="submit" value="Submit">
  </form>

@endsection
