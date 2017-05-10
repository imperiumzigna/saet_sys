<div class="row">
    <div class="form-group col-md-12">
        {{csrf_field()}}
        {!! Form::label('noticia_nome', 'Título', ['class' => 'control-label']) !!}
        {!! Form::text('titulo', old('titulo'), ['class' => 'form-control', 'required','placeholder'=>'Insira o título da sua Notícia'] ) !!}
    </div>
    <div class="form-group col-md-12">
        {!! Form::label('noticia_desc', 'Descrição', ['class' => 'control-label']) !!}
        {!! Form::textarea('descricao', old('descricao'), ['class' => 'form-control', 'required','placeholder'=>'Descrição...'] ) !!}
    </div>
    {!! Form::hidden('criador', (string)Auth::user()->usr_name, ['id'=> 'criador','type'=>'hidden','class' => 'form-control'] ) !!}
</div>
<div class="divider"></div>
<div class="row">
    <div class="col-md-2 pull-right">
        <button type="submit" class="btn btn-block btn-success btn">Salvar</button>
    </div>
</div>