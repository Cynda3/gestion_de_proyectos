@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>

    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Proyecto</th>
        <th>Departamento</th>
      </tr>

      @foreach($empleados as $empleado)
      <tr>
        <td>{{$empleado->id}}</td>
        <td><a href="{{route('empleados.show', $empleado->id)}}">{{$empleado->nombre}}</a></td>
        <td>{{$empleado->apellido}}</td>
        <td>{{$empleado->email}}</td>
        <td>{{$empleado->telefono}}</td>
        <td>
          @if($empleado->proyecto)
          <a href="{{route('proyectos.show', $empleado->proyecto->id)}}">{{$empleado->proyecto->nombre}}</a>
          @endif
        </td>
        <td>
          @if($empleado->departamento)
          <a href="{{route('departamentos.show', $empleado->departamento->id)}}">{{$empleado->departamento->nombre}}</a>
          @endif
        </td>
      </tr>
      @endforeach

    </table>

@endsection
