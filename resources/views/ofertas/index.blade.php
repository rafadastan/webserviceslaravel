@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de ofertas</div>

                <div class="panel-body">
                    <a class="btn btn-info" href="/ofertas/create">Adicionar</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>titulo</th>
                                <th>descrição</th>
                                <th>valor</th>
                                <th>validade</th>
                                <th>imagem</th>
                                <th>ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ofertas as $oferta)
                                <tr>
                                    <td>{{$oferta->id}}</td>
                                    <td>{{$oferta->titulo}}</td>
                                    <td>{{$oferta->descricao}}</td>
                                    <td>{{$oferta->valor_f}}</td>
                                    <td>{{$oferta->validade}}</td>
                                    <td><img height="30" src="{{asset($oferta->imagem)}}"></td>
                                    <td>
                                        <div class="row">
                                        <form class="" action="{{route('ofertas.destroy',$oferta->id)}}" method="post">
                                            {{csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <a class="btn btn-default" href="{{route('ofertas.edit',$oferta->id)}}">Editar</a>
                                            <button class="btn btn-default">Deletar</button>
                                        </form>
                                        </div>
                                    </td>
                                </tr>               
                            @endforeach                            
                        </tbody>
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
