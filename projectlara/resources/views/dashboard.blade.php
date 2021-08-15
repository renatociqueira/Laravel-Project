
@extends('layout.head')
@extends('layouts.main')

@section('title','Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Funcionarios Cadastrados</h1>

</div>
<div class="col-md-10 offset-md-1 dashboard-title-container">
   @if(count($events) > 0)
   @else
   <p>Você ainda não tem funcionarios cadastrados!<a href="/events/create">Cadastrar Funcionario</a></p>
   @endif
</div>

@endsection