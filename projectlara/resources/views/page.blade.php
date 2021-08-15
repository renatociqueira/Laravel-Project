<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>UniFacex</title>
@extends('layout.head')
@extends('layouts.main')



@section('title','Home')
<!-- Section do Main layout-->
@section('content')

<!-- Section da pagina-->
@section('contentt')

<style>
    .card-title {
        color:black;
    }

    .card-text {
        color:red;
    }
    .card-group {
        border: 0%;
    }
    
</style>
<body>
<!-- Cards da Home para acesso rapido aos eventos-->
<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="/img/pessoas.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Confraternização Final de Ano!</h5><br>
      <p class="card-text">Para Participar do evento da festa de final de ano você precisa se cadastrar para confirmar sua Presença, Clique em Participar e garanta sua presença.</p>
      <a href="/events/create" class="btn btn-dark">PARTICIPAR</a>
      <p class="card-text"><small class="text-muted">Data do Evento: 20/08/2021</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="/img/education.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Semana da Educação!</h5><br>
      <p class="card-text">Acelere sua carreira participando de um dos maiores eventos online de educação do Brasil.</p>
      <a href="/events/create" class="btn btn-dark">PARTICIPAR</a>
      <p class="card-text"><small class="text-muted">Data do Evento: 22/08/2021</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="/img/eventop.jpeg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Facex Fest!</h5><br>
      <p class="card-text">Para Participar do evento da festa de final de ano você precisa se cadastrar para confirmar sua Presença, Clique em Participar e garanta sua presença.</p>
      <a href="/events/create" class="btn btn-dark">PARTICIPAR</a>
      <p class="card-text"><small class="text-muted">Data do Evento: 21/08/2021</small></p>
    </div>
  </div>
  
</div>
<header>

</header>
</body>
<!-- encerrando Section da pagina-->
@endsection
@yield('contentt')

<!-- encerrando Section do Main layout-->
@endsection
</html>
