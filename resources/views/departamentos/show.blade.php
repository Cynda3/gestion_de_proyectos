@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>

  <ul>
    <li>Id: {{$departamento->id}}</li>
    <li>Nombre: {{$departamento->nombre}}</li>
  </ul>

@endsection
