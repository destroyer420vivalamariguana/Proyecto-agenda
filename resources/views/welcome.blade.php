<!doctype html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Cover Template · Bootstrap v5.0</title>

  @vite(['resources/sass/app.scss', 'resources/js/agenda.js'])

  <!-- Bootstrap core CSS -->


  <style>

    .cover-container {
      max-width: 25cm;
    }

    .nav-masthead .nav-link+.nav-link {
      margin-left: 1cm;
    }
    .rr {
        font-size: 1cm;
    }
    
    .rrr {
        font-size: 1cm;
    }

  </style>

</head>

<body class="h-100 text-center text-black">

  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
      <div>
        <h3 class="float-md-start text-black">Agenda</h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">

          @if (Route::has('login'))
            @auth
            <a href="{{ url('/home') }}" class="nav-link text-black"  href="#">Home</a>
            @else
            <a href="{{ route('login') }}" class="nav-link text-black" href="#">Iniciar Sesión</a>

            @if (Route::has('register'))
            <a  href="{{ route('register') }}" class="nav-link text-black" href="#">Registrarse</a>
            @endif
            @endauth
          @endif
        </nav>
      </div>
    </header>

    <main class="px-3">
      <h1 class="rrr text-black">Tu Agenda Web</h1>
      <hr>
      <p class="lead text-black">La Agenda es una aplicación web diseñada para ayudar a los usuarios a gestionar sus contactos, eventos y recordatorios de manera eficiente. Proporciona una interfaz intuitiva y fácil de usar que permite a los usuarios realizar diversas acciones relacionadas con la organización de su información personal y la administración de su tiempo.</p>
      <div>
        <p class=" rr lead text-black">
            Bienvenido
        </p>
      </div>
    </main>

    <footer class="mt-auto text-white-50">
      
    </footer>
  </div>



</body>

</html>