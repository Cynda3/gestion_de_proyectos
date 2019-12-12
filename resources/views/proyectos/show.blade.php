@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>

  <ul>
    <li>Id: {{$proyecto->id}}</li>
    <li>nombre: {{$proyecto->nombre}}</li>
    <li>Titulo: {{$proyecto->titulo}}</li>
    <li>Fecha de inicio: {{$proyecto->email}}</li>
    <li>Fecha de fin: {{$proyecto->telefono}}</li>
    <li>Horas estimadas: {{$proyecto->horasestimadas}}</li>
    @if($proyecto->empleado)
      <li>Empleado responsable: {{$proyecto->empleado->nombre}}</li>
    @endif
    <li>Empleados en este proyecto:</li>
    @if($proyecto->empleados)
      @foreach($proyecto->empleados as $proemp)
        <li><a href="{{route('empleados.show', $proemp->id)}}">{{$proemp->nombre}}</a> desde {{$proemp->pivot->fechainicio}} hasta {{$proemp->pivot->fechafin}}</li>
      @endforeach
    @endif
  </ul>

@endsection
