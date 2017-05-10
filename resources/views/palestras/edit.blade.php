@extends('templates.base')
@section('Content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Editar palestra</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <div class="container-fluid">
                {!! Form::model($palestra, ['url' => route('palestra.putEdit', ['id' => $palestra->id]), 'method' => 'PUT']) !!}
                @include('palestras.includes.form')
                {!! Form::close() !!}
            </div>
        </div><!-- /.box-body -->
    </div>
@endsection