@extends('templates.base')
@section('Button')
    <form  method="get" action="{{ route('user.getCreate') }}">
        <button type="submit" class="btn btn-flat bg-green"><i class="fa fa-user-plus"></i> Novo Usuário</button>
    </form>
@endsection

@section('Content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="box-body no-padding">
                        @if(count($users))
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 70px;">id</th>
                                        <th>Nome</th>
                                        <th>Papel</th>
                                        <th>Email</th>
                                        <th>Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user["id"] }}</td>
                                            <td >{{ $user["usr_name"] }}</td>
                                            <td >{{ $user["usr_papel"] }}</td>
                                            <td >{{ $user["usr_email"] }}</td>

                                            <td class="form-inline">
                                                <div class="form-group">
                                                    <form method="get"
                                                          action="{{ route('user.getEdit', ['id' => $user->id]) }}"
                                                          role="form"
                                                          id="form-edit">
                                                        <button type="submit" class="btn bg-green btn-sm">
                                                            <i class="fa fa-pencil"></i> Editar
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="form-group">
                                                    <form method="post"
                                                          action="{{ route('user.delete') }}"
                                                          role="form"
                                                          id="form-delete">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <input type="hidden" name="id"
                                                               value="{{ $user->id }}">
                                                        <button type="submit" class="btn bg-red btn-sm">
                                                            <i class="fa fa-trash-o"></i> Excluir
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <p>Não há usuários cadastradas</p>
                        @endif
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
@endsection