@extends('templates.base')
@section('Content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Editar Notícia</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <div class="container-fluid">
                {!! Form::model($noticia, ['url' => route('noticia.putEdit', ['id' => $noticia->id]), 'method' => 'PUT']) !!}
                @include('noticias.includes.form')
                {!! Form::close() !!}
            </div>
        </div><!-- /.box-body -->
    </div>
@endsection