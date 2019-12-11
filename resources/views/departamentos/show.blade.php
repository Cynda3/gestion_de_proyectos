@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamentos</h2>

  <ul>
    <li>Id: {{$departamento->id}}</li>
    <li>Nombre: {{$departamento->nombre}}</li>
  </ul>

@endsection
