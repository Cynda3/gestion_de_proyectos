@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>

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
        <td>{{$proyecto->nombre}}</td>
        <td>{{$proyecto->titulo}}</td>
        <td>{{$proyecto->fechainicio}}</td>
        <td>{{$proyecto->fechafin}}</td>
        <td>{{$proyecto->horasestimadas}}</td>
        <!-- 
          Mirar en el modelo(proyecto) a ver si esta bien relacionado 
          y llamar a la funcion para poder acceder a los atributos del otro modelo(empleado) 
        -->
        <td>{{$proyecto->empleado->nombre}}</td>
      </tr>
      @endforeach
    </table>

@endsection
