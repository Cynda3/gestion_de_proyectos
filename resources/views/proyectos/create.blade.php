@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Crear nuevo proyecto</h2>

  <form action="proyectos.store" method="post">
    @csrf
    <label>Nombre</label>
    <input type="text" name="nombre">
    <label>Titulo</label>
    <input type="text" name="titulo">
    <label>Fecha de inicio</label>
    <input type="date" name="fechainicio">
    <label>Fecha fin</label>
    <input type="date" name="fechafin">
    <label>Horas estimadas</label>
    <input type="number" name="horasestimadas">
    <input type="submit" name="submit" value="Submit">
  </form>

@endsection
