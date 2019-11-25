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
    <li>Proyecto: {{$empleado->proyecto->nombre}}</li>
  </ul>

@endsection
