@extends('templates.base')
@section('Content')
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Nova Página</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
        <div class="container-fluid">
            {!! Form::open(['url' => route('pages.postCreate'), 'method' => 'post', "files" => true]) !!}
            @include('pages.includes.form')
            {!! Form::close() !!}
        </div>
    </div><!-- /.box-body -->
</div>
@endsection
