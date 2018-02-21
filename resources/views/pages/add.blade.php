@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Nova página</div>

                    <div class="card-body">
                        <form class="form-horizontal"
                              action="/pages"
                              method="post">

                            <legend>Nova página</legend>
                            {{ csrf_field() }}

                            <div class="form-group">
                                <div class="col-sm-2"><label for="page-title">Título</label></div>
                                <div class="col-sm-12">
                                    <input type="text"
                                           name="title"
                                           id="page-title"
                                           value=""
                                           placeholder="Título..."
                                           class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2"><label for="page-title">Conteúdo</label></div>
                                <div class="col-sm-12">
                                    <textarea id="page-body"
                                              name="body"
                                              rows="8"
                                              class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <input type="submit"
                                           value="salvar"
                                           class="btn btn-success">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
