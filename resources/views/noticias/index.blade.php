@extends('templates.base')
@section('Button')
    <form method="get" action="{{ route('noticia.getCreate') }}">
        <button type="submit" class="btn btn-flat bg-green"><i class="fa fa-plus"></i> Adicionar Notícia</button>
    </form>
@endsection

@section('Content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="box-body no-padding">
                        @if($noticias->count())
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 70px;">id</th>
                                        <th>Título</th>
                                        <th>Descrição</th>
                                        <th>Criador</th>
                                        <th>Criado em</th>
                                        <th style="width: 190px;">Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($noticias as $noticia)
                                        <tr>
                                            <td>{{ $noticia->id }}</td>
                                            <td>{{ $noticia->titulo }}</td>
                                            <td>{{ $noticia->descricao }}</td>
                                            <td>{{ $noticia->criador }}</td>
                                            <td>{{ $noticia->created_at }}</td>

                                                <td class="form-inline">
                                                    <div class="form-group">
                                                        <form method="get"
                                                              action="{{ route('noticia.getEdit', ['id' => $noticia->id]) }}"
                                                              role="form"
                                                              id="form-edit">
                                                            <button type="submit" class="btn bg-green btn-sm">
                                                                <i class="fa fa-pencil"></i> Editar
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <div class="form-group">
                                                        <form method="post"
                                                              action="{{ route('noticia.delete') }}"
                                                              role="form"
                                                              id="form-delete">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <input type="hidden" name="id"
                                                                   value="{{ $noticia->id }}">
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
                            <p>Não há notícias cadastradas</p>
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
    {!! $noticias->render() !!}
@endsection