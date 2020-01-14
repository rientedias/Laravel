<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/laravel/ep09/public/stilo.css">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="{{route('site.home')}}">LARAVEL SITE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{(Route::current()->getName() === 'site.home' ? 'active' : '')}}">
                    <a class="nav-link" href="{{route('site.home')}}">Home </a>
                </li>
                <li class="nav-item {{(Route::current()->getName() === 'site.courses' ? 'active' : '')}}">
                    <a class="nav-link" href="{{route('site.courses')}}">Cursos</a>
                </li>
                <li class="nav-item {{(Route::current()->getName() === 'site.contact' ? 'active' : '')}}">
                    <a class="nav-link" href="{{route('site.contact')}}">Contato</a>
                </li>
            </ul>
            {{--            <form class="form-inline mt-2 mt-md-0">--}}
            {{--                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">--}}
            {{--                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>--}}
            {{--            </form>--}}
        </div>
    </nav>
</header>

<main role="main">

  @yield('content')


    <!-- FOOTER -->
    <footer class="container">
        <p class="float-right"><a href="#">Voltar ao topo</a></p>
        <p>&copy;{{ date('Y') }} Companhia S.A.&middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
    </footer>
</main>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>
