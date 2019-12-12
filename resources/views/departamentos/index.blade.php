@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamentos</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Empleados:</th>
    </tr>

      @foreach($departamentos as $departamento)
      <tr>
        <td>{{$departamento->id}}</td>
        <td><a href="{{route('departamentos.show', $departamento->id)}}"> {{$departamento->nombre}}</a></td>
        <td>
          @if($departamento->empleados)
          @foreach($departamento->empleados as $empleado)
          <a href="{{route('empleados.show', $empleado->id)}}">{{$empleado->nombre}}, </a>
          @endforeach
          @endif
        </td>
      </tr>
      @endforeach

  </table>

@endsection
