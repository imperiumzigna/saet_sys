@extends('templates.base')

@section('PageTitle')
    Cadastro de Usuário
@endsection

@section('Title')
    Usuários
@endsection

@section('Subtitle')
    Cadastro de novo usuário
@endsection

@section('Content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Novo Usuário</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <div class="container-fluid">
                {!! Form::open(['url' => route('user.postCreate'), 'method' => 'post']) !!}
                @include('user.includes.form')
                {!! Form::close() !!}
            </div>
        </div><!-- /.box-body -->
    </div>
@endsection
