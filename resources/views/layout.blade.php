<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark  menu">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto lt">
            <li class="nav-item">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('producto.create') }}">Añadir de productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('lista.index') }}">Lista de productos</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0 ">
            <input class="form-control mr-sm-2 buscar" type="search" placeholder="Buscar" aria-label="Buscar">
            <button class="btn btn-outline-info my-2 my-sm-0 buscar" type="submit">Buscar</button>
          </form>
        </div>
        </nav>
    </header>

    <main class="container">
        @yield('contenidoPrin')

    </main>

    <footer class="copy">
        <div class="jumbotron jumbotron-fluid back">
            <a href="#arriba">Back to top</a>

            <div class="container piePagina">
              <p class="lead">&copy; Diana 2022 - Todos los derechos reservados.</p>
            </div>
          </div>


      </footer>
</body>
</html>
