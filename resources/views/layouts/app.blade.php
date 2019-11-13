<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.head')
	<title>@yield('title')</title>
</head>
<body>

    <div class="flex-center position-ref full-height">
        <div class="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <img class="logo" src="{{asset('assets/img/logo.png')}}"/>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="{{route('empleado.index')}}">Empleados <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('proyecto.index')}}">Proyectos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('departamento.index')}}">Departamentos</a>
                  </li>
                </ul>
              </div>
            </nav>
            <hr><br><br>
            <div class="op">
                @yield('content')
            </div>
        </div>
    </div>

	<footer class="footer">
		@include('layouts.footer')
	</footer>

</body>
</html>
