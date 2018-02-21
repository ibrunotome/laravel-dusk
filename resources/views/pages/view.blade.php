@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Páginas</div>

                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <strong>Título: </strong> {{ $result->title }}
                            </li>

                            <li class="list-group-item">
                                <strong>Conteúdo: </strong> {{ $result->body }}
                            </li>
                        </ul>
                        <div class="panel-footer">
                            <a href="/pages"
                               class="btn btn-default">Voltar</a>
                            <a href="/pages/{{ $result->id }}/edit"
                               class="btn btn-primary">Editar</a>

                            <form action="/pages/{{ $result->id }}"
                                  method="post"
                                  style="display: inline-block">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input type="submit"
                                       value="Remover"
                                       class="btn btn-danger">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
