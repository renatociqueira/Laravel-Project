<style>
  nav.custom {
  width: 80%;  
  margin: 60px auto;
}
</style>
<body>
  <nav class="navbar navbar-inverse navbar-static-top">
    
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Projeto Facex</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#about">Sobre</a></li>
          <li><a href="#contact">Contato</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              Eventos<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/events/create">Festa Final de Ano</a></li>
              <li><a href="#">Outros Eventos</a></li>
              <li><a href="#">Qualquer coisa</a></li>
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
  
</body>


