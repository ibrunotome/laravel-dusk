@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Páginas</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th class="text-right">+ Detalhes</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($result as $page)
                                <tr>
                                    <td>{{ $page->id  }}</td>
                                    <td>{{ $page->title  }}</td>
                                    <td class="text-right"><a href="/pages/{{ $page->id  }}" class="btn btn-default btn-xs" id="btnVer{{ $page->id }}">Ver</a></td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        <div class="panel-footer">
                            <a href="/pages/create" id="btnNovo" class="btn btn-success">Novo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
