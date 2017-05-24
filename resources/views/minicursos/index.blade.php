@extends('templates.base')
@section('Button')
    @if( Auth::user()->usr_papel == "admin"|| Auth::user()->usr_papel == "professor")
    <form method="get" action="{{ route('minicurso.getCreate') }}">
        <button type="submit" class="btn btn-flat bg-green"><i class="fa fa-plus"></i> Adicionar Minicursos</button>
    </form>
    @endif
@endsection

@section('Content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="box-body no-padding">
                        @if($minicursos->count() )
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 70px;">id</th>
                                        <th>Título</th>
                                        <th>Area</th>
                                        <th>Cronograma</th>
                                        <th>Professor</th>
                                        <th>Criador</th>
                                        <th>Criado em</th>
                                        <th style="width: 190px;">Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($minicursos as $minicurso)
                                        <tr>
                                            <td>{{ $minicurso->id }}</td>
                                            <td>{{ $minicurso->titulo }}</td>
                                            <td>{{ $minicurso->area }}</td>
                                            <td>{{ $minicurso->cronograma }}</td>
                                            <td>{{ $minicurso->professor }}</td>
                                            <td>{{ $minicurso->criador }}</td>
                                            <td>{{ $minicurso->created_at }}</td>
                                           @if( Auth::user()->usr_papel == "admin"|| Auth::user()->usr_papel == "professor")
                                                <td class="form-inline">
                                                    <div class="form-group">
                                                        <form method="get"
                                                              action="{{ route('minicurso.getEdit', ['id' => $minicurso->id]) }}"
                                                              role="form"
                                                              id="form-edit">
                                                            <button type="submit" class="btn bg-green btn-sm">
                                                                <i class="fa fa-pencil"></i> Editar
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <div class="form-group">
                                                        <form method="post"
                                                              action="{{ route('minicurso.delete') }}"
                                                              role="form"
                                                              id="form-delete">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <input type="hidden" name="id"
                                                                   value="{{ $minicurso->id }}">
                                                            <button type="submit" class="btn bg-red btn-sm">
                                                                <i class="fa fa-trash-o"></i> Excluir
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                               @else
                                                <td class="form-inline">
                                                    <div class="form-group">
                                                        <form method="get"
                                                              action="{{ route('minicurso.inscricao', ['id' => $minicurso->id,'user'=>Auth::user()->id]) }}"
                                                              role="form"
                                                              id="form-edit">
                                                            <button type="submit" class="btn bg-green btn-sm">
                                                                <i class="fa fa-id-card"></i> Inscrição
                                                            </button>
                                                            {{csrf_field()}}
                                                        </form>
                                                    </div>
                                                </td>
                                               @endif
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <p>Não há minicursos cadastradas</p>
                        @endif
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
@endsection
@section('Paginate')
    {!! $minicursos->render() !!}
@endsection