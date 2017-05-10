@extends('templates.base')

@section('Content')
    @foreach($noticias as $noticia)
    <div class="row">
        <div class="col-md-10">
            <div class="box box-default">
                <div class="box-header">
                    <p>{{$noticia->titulo}}</p>
                </div>
                <div class="box-body">
                    <p>{{$noticia->descricao}}</p>
                </div>
                <div class="box-footer">
                    <p>{{$noticia->criador}} <span class="pull-right">{{$noticia->created_at}}</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection