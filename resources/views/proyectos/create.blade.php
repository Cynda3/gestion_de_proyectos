@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Crear nuevo proyecto</h2>

  <form action="{{route('proyectos.store')}}" method="post">
    @csrf
    <label>Nombre</label><br>
    <input type="text" name="nombre"><br>
    @if($errors->has('nombre'))
        <div class="error" style="color: red;">{{ $errors->first('nombre') }}</div>
    @endif
    <label>Titulo</label><br>
    <input type="text" name="titulo"><br>
    @if($errors->has('titulo'))
        <div class="error" style="color: red;">{{ $errors->first('titulo') }}</div>
    @endif
    <label>Fecha de inicio</label><br>
    <input type="date" name="fechainicio"><br>
    @if($errors->has('fechainicio'))
        <div class="error" style="color: red;">{{ $errors->first('fechainicio') }}</div>
    @endif
    <label>Fecha fin</label><br>
    <input type="date" name="fechafin"><br>
    @if($errors->has('fechafin'))
        <div class="error" style="color: red;">{{ $errors->first('fechafin') }}</div>
    @endif
    <label>Horas estimadas</label><br>
    <input type="number" name="horasestimadas"><br>
    @if($errors->has('horasestimadas'))
        <div class="error" style="color: red;">{{ $errors->first('horasestimadas') }}</div>
    @endif
    <input type="submit" name="submit" value="Submit">
  </form>

@endsection
