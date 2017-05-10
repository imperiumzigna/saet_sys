<div class="row">
    <div class="form-group col-md-8">
        {{csrf_field()}}
        {!! Form::label('palestra_nome', 'Título', ['class' => 'control-label']) !!}
        {!! Form::text('titulo', old('titulo'), ['class' => 'form-control', 'required','placeholder'=>'Insira o título'] ) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('palestra_cronograma', 'Cronograma', ['class' => 'control-label']) !!}
        {!! Form::text('cronograma', old('cronograma'), ['class' => 'form-control', 'required','placeholder'=>'Descrição...'] ) !!}
    </div>
    {!! Form::hidden('criador', (string)Auth::user()->usr_name, ['id'=> 'criador','type'=>'hidden','class' => 'form-control'] ) !!}
</div>
<div class="row">
    <div class="form-group col-md-12">
        {!! Form::label('palestra_desc', 'Descrição', ['class' => 'control-label']) !!}
        {!! Form::textarea('descricao', old('descricao'), ['class' => 'form-control', 'required','placeholder'=>'Descrição...'] ) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-md-3">
        {!! Form::label('palestra_area', 'Área', ['class' => 'control-label']) !!}
        {!! Form::text('area', old('area'), ['class' => 'form-control', 'required','placeholder'=>'Area do palestra'] ) !!}
    </div>

    <div class="form-group col-md-3">
        {!! Form::label('palestra_local', 'Local', ['class' => 'control-label']) !!}
        {!! Form::text('local', old('local'), ['class' => 'form-control', 'required','placeholder'=>'Local do palestra'] ) !!}
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('palestra_professor', 'Professor', ['class' => 'control-label']) !!}
        {!! Form::text('professor', old('professor'), ['class' => 'form-control', 'required','placeholder'=>'Professor do palestra'] ) !!}
    </div>
</div>




<div class="divider"></div>
<div class="row">
    <div class="col-md-2 pull-right">
        <button type="submit" class="btn btn-block btn-success btn">Salvar</button>
    </div>
</div>