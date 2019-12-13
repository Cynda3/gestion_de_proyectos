@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>

  <ul>
    <li>Id: {{$empleado->id}}</li>
    <li>Nombre: {{$empleado->nombre}}</li>
    <li>Apellido: {{$empleado->apellido}}</li>
    <li>Email: {{$empleado->email}}</li>
    <li>Telefono: {{$empleado->telefono}}</li>
    @if($empleado->proyecto)
      <li>Proyecto: {{$empleado->proyecto->nombre}}</li>
    @endif
    <li>Proyectos con este empleado:</li>
    @if($empleado->proyectos)
      @foreach($empleado->proyectos as $emppro)
        <li><a href="{{route('proyectos.show', $emppro->id)}}">{{$emppro->nombre}}</a></li>
      @endforeach
    @endif
    <li>Es jefe del departamento:</li>
    @if($empleado->departamentoJefe)
        <li><a href="{{route('departamentos.show', $empleado->departamentoJefe->id)}}">{{$empleado->departamentoJefe->nombre}}</a></li>
    @endif
  </ul>

@endsection
