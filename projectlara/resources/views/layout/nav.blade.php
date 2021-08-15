<!--Navegação entre os Menus da Home-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">UniFacex</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/page">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Eventos <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/events/create">Festa Final de Ano</a></li>
          <li><a href="#">Outros Eventos</a></li>
          <!-- Outras opções de eventos para acrescentar
          <li><a href="#">Formatura</a></li>
          <li><a href="#">Outros exemplos</a></li>
-->
        </ul>
        
      </li>
        <!--Inserir Novos Menus a Pagina
      <li><a href="#">Page 2</a></li>
            -->
          <li><a href="/contact">Contato</a></li>
         
    </ul>
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
  
  <!-- Imagem de Fundo img-responsive é para deixar a imagem responsiva-->
  <img src="/img/pessoas.jpg" class="img-responsive" alt="facex">
  
</nav>


