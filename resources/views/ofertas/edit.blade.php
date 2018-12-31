@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar oferta</div>

                <div class="panel-body">
                 <form class="" action="{{route('ofertas.update',$oferta->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field() }}
                    {{ method_field('PUT') }}
                    @include('ofertas._form') 
                    <button class="btn btn-default">Atualizar</button>
                 </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
