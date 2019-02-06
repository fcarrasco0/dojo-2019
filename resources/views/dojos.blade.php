@extends('Layouts.layout')

@section('content')


<div class="well panel col-xs-12 col-md-12">

    
<!-- começo da panel de listagem de dojos -->
    <div class="panel panel-default col-xs-12 col-md-12">
      <div class="text-center">
          <h1>dojos</h1>
      </div>

      <div class="table-responsive col-xs-12 col-md-12">
        <table class="table table-bordered table-hover dt-responsive nowrap">
          <thead class="thead-inverse">
            <tr>
              <th>id</th>
              <th>Nome</th>
              <th>Sensei</th>
              <th>Qnt de Alunos</th>
              <th>Qnt Formados</th>
              <th>Qnt Reprovados</th>
              <th>Renome</th>
              <th>Aproveitamento</th>
              <!-- <th>Deletado em</th> -->
              <th></th>
            </tr>
          </thead>

          <tbody class="">
          <!-- lista dojos do banco -->
            @foreach ($dojos as $dojo)

                <tr>
                  <td>{{$dojo->id}}</td>
                  <td>{{$dojo->nome}}</td>
                  <td>{{$dojo->sensei_id}}</td>
                  <td>{{$dojo->alunos_atuais}}</td>
                  <td>{{$dojo->alunos_formados}}</td>
                  <td>{{$dojo->alunos_reprovados}}</td>
                  <td>{{$dojo->renome}}</td>
                  <td>{{$dojo->aproveitamento}}</td>
                  </tr>

            @endforeach
          </tbody>
        </table>
      </div>
    </div>

{!! csrf_field() !!}




</div>
@endsection
