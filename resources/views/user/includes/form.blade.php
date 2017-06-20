<div class="row">
    <div class="form-group col-md-4">
        {!! Form::label('usr_nome', 'Email*', ['class' => 'control-label']) !!}
        {!! Form::text('usr_name', old('usr_name'), ['class' => 'form-control','placeholder'=>'Fulano da Silva', 'required'] ) !!}
    </div>

    <div class="form-group col-md-4">
        {!! Form::label('usr_cpf', 'Email*', ['class' => 'control-label']) !!}
        {!! Form::number('cpf', old('usr_cpf'), ['class' => 'form-control','placeholder'=>'999999994', 'required'] ) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('usr_email', 'Email*', ['class' => 'control-label']) !!}
        {!! Form::email('usr_email', old('usr_email'), ['class' => 'form-control','placeholder'=>'teste@gmail.com.br', 'required', 'type'=>'email'] ) !!}
    </div>


</div>
<div class="row">
    <div class="form-group col-md-4">
        {!! Form::label('usr_papel', 'Tipo de Usuário*', ['class' => 'control-label']) !!}
        {!! Form::select('usr_papel', ['visitante' => 'Usuário Padrão', 'admin' => 'Administrador', 'professor' => 'Professor'], old('usr_papel'), ['class' => 'form-control', 'required'] ) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('password', 'Senha*', ['class' => 'control-label']) !!}
        {!! Form::text('password', '', ['class' => 'form-control', 'required','placeholder'=>'*************'] ) !!}
    </div>
</div>
<div class="divider"></div>
<div class="row">
    <div class="col-md-2 pull-right">
        <button type="submit" class="btn btn-block btn-success btn">Salvar</button>
    </div>
</div>