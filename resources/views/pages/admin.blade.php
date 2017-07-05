@extends('templates.base')
@section('Button')
    <form method="get" action="{{ route('pages.getCreate') }}">
        <button type="submit" class="btn btn-flat bg-green"><i class="fa fa-plus"></i> Adicionar Seção</button>
    </form>
@endsection

@section('Content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="box-body no-padding">
                        @if($paginas->count())
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 70px;">id</th>
                                        <th>Título</th>
                                        <th>Descrição</th>
                                        <th style="width: 190px;">Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($paginas as $pagina)
                                        <tr>
                                            <td>{{ $pagina->id }}</td>
                                            <td>{{ $pagina->title }}</td>
                                            <td>{{ $pagina->description }}</td>
                                            <td>{{ $pagina->created_at }}</td>

                                            <td class="form-inline">
                                                <div class="form-group">
                                                    <form method="get"
                                                          action="{{ route('pages.getEdit', ['id' => $pagina->id]) }}"
                                                          role="form"
                                                          id="form-edit">
                                                        <button type="submit" class="btn bg-green btn-sm">
                                                            <i class="fa fa-pencil"></i> Editar
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="form-group">
                                                    <form method="post"
                                                          action="{{ route('pages.delete') }}"
                                                          role="form"
                                                          id="form-delete">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <input type="hidden" name="id"
                                                               value="{{ $pagina->id }}">
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
                            <p>Não há páginas cadastradas</p>
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
    {!! $paginas->render() !!}
@endsection