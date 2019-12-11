@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamentos</h2>

  <ul>
    <li>Id: {{$departamento->id}}</li>
    <li>Nombre: {{$departamento->nombre}}</li>
    <li>
    	@if($departamento->empleados)
    		@foreach($departamento->empleados as $empleado)
        		<a href="{{route('empleados.show', $empleado->id)}}">{{$empleado->name}}</a>
        	@endforeach
        @endif
    </td>
  </ul>

@endsection
