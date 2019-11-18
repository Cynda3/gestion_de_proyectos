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
      </tr>

      @foreach($empleados as $empleado)
      <tr>
        <td>{{$empleado->id}}</td>
        <td>{{$empleado->nombre}}</td>
        <td>{{$empleado->apellido}}</td>
        <td>{{$empleado->email}}</td>
        <td>{{$empleado->telefono}}</td>
        <td>@if($empleado->proyecto)
          {{$empleado->proyecto->id}}
          @endif
        </td>
      </tr>
      @endforeach

    </table>

@endsection
