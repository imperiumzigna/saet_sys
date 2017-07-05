<div class="row">
    <div class="form-group col-md-6">
        {{csrf_field()}}
        {!! Form::label('page_nome', 'Título', ['class' => 'control-label']) !!}
        {!! Form::text('title', old('titulo'), ['class' => 'form-control', 'required','placeholder'=>'Insira o título da Página'] ) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('page_subt', 'Subtítulo', ['class' => 'control-label']) !!}
        {!! Form::text('subtitle', old('descricao'), ['class' => 'form-control', 'required','placeholder'=>'Subtítulo...'] ) !!}
    </div>

</div>
<div class="row">
    <div class="form-group col-md-4">
        {!! Form::label('page_section', 'Seção', ['class' => 'control-label']) !!}
        {!! Form::text('section', old('descricao'), ['class' => 'form-control', 'placeholder'=>'Seção...'] ) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('section_title_lbl', 'Título da Seção', ['class' => 'control-label']) !!}
        {!! Form::text('section_title', old('descricao'), ['class' => 'form-control', 'placeholder'=>'Título da Seção...'] ) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('section_title_dsc', 'Descrição da Seção', ['class' => 'control-label']) !!}
        {!! Form::textarea('section_description', old('descricao'), ['class' => 'form-control', 'placeholder'=>'Descrição da Seção...'] ) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
        {!! Form::label('section_title_lbl', 'Imagens da Seção', ['class' => 'control-label']) !!}
        {!! Form::file('section_img', old('descricao'), ['class' => 'form-control', 'placeholder'=>'Imagens da Seção...'] ) !!}
    </div>

</div>

<div class="divider"></div>
<div class="row">
    <div class="col-md-2 pull-right">
        <button type="submit" class="btn btn-block btn-success btn">Salvar</button>
    </div>
</div>