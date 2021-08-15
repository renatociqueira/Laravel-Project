<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta naem="viewport" content="with=device-width, initial-scale=1">

    <title>@yield('title')</title>
    
    <!-- CSS BootStrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <!-- CSS da Aplicação-->
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>

</head>
<style>
    footer {
        background-color: black;
        text-align:center;
        color: white;
        padding: 10px;
        position: relative;
        bottom: 0;
        width: 100%;

    }

    footer p {
        margin-bottom: 0;
    }

    
</style>
<body>
<header id="mod">
  <!-- Menu de Navegação da Pagina-->
    <!-- o navbar-expand-lg deixa o navbar menor-->
<nav class="navbar navbar-expand-lg navbar-inverse navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/page">Projeto Facex</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="/page">Home</a></li>
          <li><a href="#about">Sobre</a></li>
          <li><a href="#contact">Contato</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              Eventos<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/events/create">Festa Final de Ano</a></li>
              <li><a href="/events/create">Facex Fest</a></li>
              <li><a href="/events/create">Semana da Educação</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header">Outra categoria</li>
              <li><a href="#">Link separado</a></li>
              <li><a href="#">Outro link separado</a></li>
            </ul>
          </li>
        </ul>
        
      <div>
        <ul class="nav navbar-nav navbar-right">
        <!-- Depois de logado ira aparecer o menu sair e o home que ao sair será redirecionado para a / do sistema que será nossa pagina inicial -->
        @auth
          <li><a href="/dashboard"><span class="glyphicon glyphicon-user"></span> Dashboard</a></li>
          <li>
            <form action="/logout" method="POST">
        @csrf
        <a href="/logout" 
          class="nav-link" 
          onclick="event.preventDefault();
              this.closest('form').submit();"><span class="glyphicon glyphicon-log-in"></span> Sair</a>
            </form>
          </li>
        @endauth
        <!-- Menu vai sumir quando logado -->
        @guest
          <li><a href="/login"><span class="glyphicon glyphicon-user"></span> Login</a></li>
          <li><a href="/register"><span class="glyphicon glyphicon-log-in"></span> Registrar-se</a></li>
        @endguest
        </ul>
      </div>
      </div> 
    </div>
    
  </nav>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="js/bootstrap.min.js"></script>
</header>    

    @yield('content')
    <!--<footer>
        <p>Projecto Facex &copy; 2021</p>
    </footer>-->
</body>

</html>