@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamentos</h2>

  <ul>
    <li>Id: {{$departamento->id}}</li>
    <li>Nombre: {{$departamento->nombre}}</li>
    <li>Empleados:</li>
    <li>
    	@if($departamento->empleados)
    		@foreach($departamento->empleados as $empleado)
       		<a href="{{route('empleados.show', $empleado->id)}}">{{$empleado->nombre}}</a>
       	@endforeach
      @endif
    <li>Jefe:</li>
    <li>
      @if($departamento->jefe) 
          <a href="{{route('empleados.show', $departamento->jefe->id)}}">{{$departamento->jefe->nombre}}</a>
      @endif
  </ul>

@endsection
