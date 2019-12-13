@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>
  <a href="{{route('proyectos.create')}}">Añadir proyecto</a>
    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Titulo</th>
        <th>Fecha Inicio</th>
        <th>Fecha fin</th>
        <th>Horas estimadas</th>
        <th>Empleado responsable</th>
      </tr>

      @foreach($proyectos as $proyecto)
      <tr>
        <td>{{$proyecto->id}}</td>
        <td><a href="{{route('proyectos.show', $proyecto->id)}}">{{$proyecto->nombre}}</a></td>
        <td>{{$proyecto->titulo}}</td>
        <td>{{$proyecto->fechainicio}}</td>
        <td>{{$proyecto->fechafin}}</td>
        <td>{{$proyecto->horasestimadas}}</td>
        <td>
          @if($proyecto->empleado)
            <a href="{{route('empleados.show', $proyecto->empleado->id)}}">{{$proyecto->empleado->nombre}}</a>
          @endif
        </td>
        <td><a href="{{route('proyectos.edit', $proyecto->id)}}">Editar</a></td>
        <form action="{{route('proyectos.destroy', $proyecto->id)}}" method="post">
          @csrf
          @METHOD('delete')
          <td><button>Eliminar</button></td>
        </form>
      </tr>
      @endforeach
    </table>

@endsection
