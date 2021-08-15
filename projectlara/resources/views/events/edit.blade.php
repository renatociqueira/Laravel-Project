@extends('layout.head')
@extends('layouts.main')


@section('title','Editando: ' . $event->namefunc)
<!-- Section do Main layout-->
@section('content')

<!-- Section da pagina-->
@section('contentt')

<style>
    .msg {
        background-color:#D4EDDA;
        color: #155724
        border: 1px solid #C3E6CB;
        width: 100%;
        margin-bottom: 0;
        text-align: centes;
        padding:10px

    }
</style>

<body>
<!-- Colocando Form no centro da tela-->
<div id="event-create-container" class="col-md-4 offset-md-4">
    <h1>Editando: {{ $event->namefunc }}</h1><br><br>

    <form action="/events/update/{{ $event->id }}" method="POST">
    <!-- csrf para poder inserir as informações-->
        @csrf
        @method('PUT')
        <!-- mensagem de retorno para o usuario chamada feita no controller-->
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                    @endif
                    @yield('contenttt')
                </div>
            </div>
        </main>

        <div class="form-group">
            <label for="title">Nome Completo do Funcionario:</label>
            <input type="text" class="form-control" id="namefunc" name="namefunc" placeholder="Nome do Funcionario" value="{{ $event->namefunc }}" required>
        </div>

        <div class="form-group">
            <label for="title">RG:</label>
            <input type="number" class="form-control" id="rgfunc" name="rgfunc" placeholder="RG do Funcionario" value="{{ $event->rgfunc }}" required>
        </div>

        <small>Clique em Saiba mais aqui abaixo caso você queira levar um Acompanhante!</small>

        <details>
        <h2>Preencha as informações do Acompanhante:</h2>
            <label for="title">Nome Completo do Acompanhante:</label>
            <input type="text" class="form-control" id="nameacomp" name="nameacomp" placeholder="Nome do Acompanhante" value="{{ $event->nameacomp }}">
            <label for="title">RG:</label>
            <input type="number" class="form-control" id="rgacomp" name="rgacomp" placeholder="RG" value="{{ $event->rgacomp }}">
        </details><br>

        <div class="form-group" style="display: none">
            <label for="title">Descrição da Festa:</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="" value="Festa Final de Ano!">
        </div>

        <div class="form-group" style="display: none">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="" value="Natal/RN">
        </div>

        <div class="form-group" style="display: none">
            <label for="title">Local do Evento</label>
            <input type="text" class="form-control" id="local" name="local" placeholder="" value="R Eventos">
        </div>

        <div class="form-group" style="display: none">
            <label for="title">O evento é privado?:</label>
            <input type="text" class="form-control" id="private" name="private" placeholder="" value="0">
        </div>

        <div class="form-group" style="display: none">
            <label for="title">O evento é privado?:</label>
            <input type="text" class="form-control" id="user_id" name="user_id" placeholder="" value="{{ $event->user_id }}">
        </div>
        <!--
        <div class="form-group" id="ocultarnome" style="display: none">
            <label for="title">Nome Completo do Acompanhante:</label>
            <input type="text" class="form-control" id="nameacomp" name="nameacomp" placeholder="Nome do Acompanhante" value="">
        </div>

        <div class="form-group" id="ocultarcpf" style="display: none">
            <label for="title">RG:</label>
            <input type="number" class="form-control" id="rgacomp" name="rgacomp" placeholder="RG" value="">
        </div><br><br><br>

        <br><br><button class="btn btn-warning" id="btnDisplay">Clique aqui se for levar acompanhante</button>
-->
        <input type="submit" class="btn btn-success" value="Salvar">
        <button class="btn btn-danger" href="/events/dashboard">Voltar</button>


    </form>

    
</body>
<!-- Section da pagina-->
@endsection
@yield('contentt')

<!-- Section do Main layout-->
@endsection