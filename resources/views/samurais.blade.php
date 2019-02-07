@extends('Layouts.layout')

@section('content')


<div class="well panel col-xs-12 col-md-12">

    
<!-- começo da panel de listagem de samurais -->
    <div class="panel panel-default col-xs-12 col-md-12">
      <div class="text-center">
          <h1>Samurais</h1>
      </div>

      <div class="table-responsive col-xs-12 col-md-12">
        <table class="table table-bordered table-hover dt-responsive nowrap">
          <thead class="thead-inverse">
            <tr>
              <th>id</th>
              <th>Nome</th>
              <th>Idade</th>
              <th>Nome do Dojo</th>
              <th>Posto</th>
              <th>Arma</th>
              <th>Missoes Completas</th>
              <th>Deletado em</th>
              <th></th>
            </tr>
          </thead>

          <tbody class="">
          <!-- lista samurais do banco -->
            @foreach ($samurais as $samurai)

                <tr>
                  <td>{{$samurai->id}}</td>
                  <td>{{$samurai->nome}}</td>
                  <td>{{$samurai->idade}}</td>
                  <td>{{$samurai->nome_dojo}}</td>
                  <td>{{$samurai->posto}}</td>
                  <td>{{$samurai->arma}}</td>
                  <td>{{$samurai->missoes}}</td>
                  <td>{{$samurai->deleted_at}}</td>
                  <td class="col-xs-2">

                      <form class="col-xs-12" action="{{action('SamuraiController@destroySamurai', ['id' => $samurai->id])}}" method="POST">

                          {{method_field('DELETE')}}
                          {{csrf_field()}}
                          <button class="btn btn-md btn-danger" type="submit">
                              <i class="material-icons" data-toggle="tooltip" data-placement="top" data-title="Deletar" data-original-title="" title="">
                                delete_forever
                              </i>
                          </button>
                      </form>
                    </td>
                  </tr>

            @endforeach
          </tbody>
        </table>
      </div>
    </div>

{!! csrf_field() !!}




</div>
@endsection
