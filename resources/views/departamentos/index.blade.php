@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamentos</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
    </tr>

      @foreach($departamentos as $departamento)
      <tr>
        <td>{{$departamento->id}}</td>
        <td><a href="{{route('departamentos.show', $departamento->id)}}"> {{$departamento->nombre}}</a></td>
      </tr>
      @endforeach

  </table>

@endsection
