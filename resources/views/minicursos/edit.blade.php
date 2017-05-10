@extends('templates.base')
@section('Content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Editar Minicurso</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <div class="container-fluid">
                {!! Form::model($minicurso, ['url' => route('minicurso.putEdit', ['id' => $minicurso->id]), 'method' => 'PUT']) !!}
                @include('minicursos.includes.form')
                {!! Form::close() !!}
            </div>
        </div><!-- /.box-body -->
    </div>
@endsection