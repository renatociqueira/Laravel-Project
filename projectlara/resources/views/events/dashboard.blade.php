
@extends('layout.head')
@extends('layouts.main')

@section('title','Dashboard')

<!-- Section do Main layout-->
@section('content')

<!-- Ajustand CSS-->
<style>
    .dashboard-title-container{
        margin-bottom: 30px;
        margin-top: 30px;
    }
    .dashboard-events-container th{
        width: 29%;
    }
    .dashboard-events-container form{
        display: inline-block; /* the default for span */
        width: 10px;
        height: 10px;
        padding: 1px;
    }

</style>

<body>
<form action="/events/show">
    <button class="btn btn-info" href="/events/show">Visualizar Quantidade de Participantes</button>
</form>
<!-- Exibindo Funcionarios cadastrados-->
<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Funcionarios Cadastrados</h1>

</div>


<!-- Tabela que irá retornar Funcionarios cadastrados-->
<div class="col-md-10 offset-md-1 dashboard-events-container">
   @if(count($events) > 0)
   <table class="table table-hover">
       <thead>
           <tr>
              <th scope="col">#</th>
              <th scope="col">Nome Funcionario</th> 
              <th scope="col">RG</th>
              <th scope="col"></th>
           </tr>
       </thead>
   <tbody>
       @foreach($events as $event)
            <tr>
               <td scropt="row">{{ $loop->index + 1}}</td>
               <td><a href="/events/{{ $event->id }}">{{ $event->namefunc }}</a></td>
               <td>{{ $event->rgfunc }}</td>
               <td>
                   <a href="/events/edit/{{ $event->id }}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar </a>
                   <form action="/events/{{ $event->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon> Deletar</button>
                    </form>
                </td> 
            </tr>
       @endforeach
   </tbody>
   </table>
   @else
   <p>Você ainda não tem funcionarios cadastrados!<a href="/events/create">Cadastrar Funcionario</a></p>
   @endif
</div>

</body>
<!-- encerrando Section do Main layout-->
@endsection
