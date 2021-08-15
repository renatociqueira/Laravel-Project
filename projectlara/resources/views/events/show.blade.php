
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>UniFacex</title>
@extends('layout.head')
@extends('layouts.main')

@section('title','Dashboard')

@section('content')

@section('contentt')

<body>

<div class="container col-md-10 offset-md-3 ">

    <div class="card text-white col-4 bg-primary" style="max-width: 18rem;">
        <div class="card-header">Quantidade de Funcionarios</div>
            <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"></p>
        </div>
    </div>

    <div class="card text-white col-4 bg-success" style="max-width: 18rem;">
        <div class="card-header">Quantidade de Acompanhantes</div>
            <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"></p>
        </div>
    </div>
    <div class="card text-dark col-4 bg-warning" style="max-width: 18rem;">
        <div class="card-header">Total de Kits</div>
            <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"></p>
        </div>
  </div>
</div>
</body>
@endsection
@yield('contentt')


@endsection
</hmtl>



