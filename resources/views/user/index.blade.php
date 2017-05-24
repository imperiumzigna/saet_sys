@extends('templates.base')


@section('Content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="box-body no-padding">
                        @if(count($inscricoes))
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 70px;">id</th>
                                        <th>Palestra/Minicurso</th>
                                        <th>Tipo</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($inscricoes as $inscricao)
                                        <tr>
                                            <td>{{ $inscricao["id"] }}</td>
                                            <td>{{ $inscricao["palestra"] }}</td>
                                            <td>{{ $inscricao["tipo"] }}</td>
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

@endsection