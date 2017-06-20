@extends('templates.base')

@section('PageTitle')
    Edição de Usuário
@endsection

@section('Title')
    Usuários
@endsection

@section('Subtitle')
    Editar cadastro de usuário
@endsection

@section('Content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Editar Usuário</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <div class="container-fluid">
                {!! Form::model($user, ['url' => route('user.putEdit', ['id' => $user->usr_id]), 'method' => 'PUT']) !!}
                @include('user.includes.form')
                {!! Form::close() !!}
            </div>
        </div><!-- /.box-body -->
    </div>
@endsection