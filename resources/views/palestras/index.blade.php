@extends('templates.base')
@section('Button')
    <form method="get" action="{{ route('palestra.getCreate') }}">
        <button type="submit" class="btn btn-flat bg-green"><i class="fa fa-plus"></i> Adicionar palestras</button>
    </form>
@endsection

@section('Content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="box-body no-padding">
                        @if($palestras->count())
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
                                    @foreach($palestras as $palestra)
                                        <tr>
                                            <td>{{ $palestra->id }}</td>
                                            <td>{{ $palestra->titulo }}</td>
                                            <td>{{ $palestra->area }}</td>
                                            <td>{{ $palestra->cronograma }}</td>
                                            <td>{{ $palestra->professor }}</td>
                                            <td>{{ $palestra->criador }}</td>
                                            <td>{{ $palestra->created_at }}</td>

                                                <td class="form-inline">
                                                    <div class="form-group">
                                                        <form method="get"
                                                              action="{{ route('palestra.getEdit', ['id' => $palestra->id]) }}"
                                                              role="form"
                                                              id="form-edit">
                                                            <button type="submit" class="btn bg-green btn-sm">
                                                                <i class="fa fa-pencil"></i> Editar
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <div class="form-group">
                                                        <form method="post"
                                                              action="{{ route('palestra.delete') }}"
                                                              role="form"
                                                              id="form-delete">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <input type="hidden" name="id"
                                                                   value="{{ $palestra->id }}">
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
                            <p>Não há palestras cadastradas</p>
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
    {!! $palestras->render() !!}
@endsection