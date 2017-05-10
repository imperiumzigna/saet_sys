@extends('templates.base')
@section('Content')
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Nova Notícia ou Aviso</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
        <div class="container-fluid">
            {!! Form::open(['url' => route('noticia.postCreate'), 'method' => 'post']) !!}
            @include('noticias.includes.form')
            {!! Form::close() !!}
        </div>
    </div><!-- /.box-body -->
</div>
@endsection
