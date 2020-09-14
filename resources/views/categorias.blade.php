@extends('layout.app', ["current" => "categorias"])

@section('body')

    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Página de categorias</h5>
        </div>
    </div>
    <br>
    <div class="card-group">
        <div class="col-sm-3 cardPaddingRight mb-3">
            <div class="card text-white bg-success" >
                <a href="/categorias/cadastrar">
                    <div class="card-body">
                        <h1><i class="fa fa-plus"></i></h1>
                        <h5 class="card-title">Cadastrar</h5>
                        <p class="card-text">Cadastrar uma categoria</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 cardPaddingLeft cardPaddingRight mb-3">
            <div class="card text-white bg-warning" >
                <a href="/categorias/editar">
                    <div class="card-body">
                        <h1><i class="fa fa-pencil"></i></h1>
                        <h5 class="card-title">Editar</h5>
                        <p class="card-text">Editar uma categoria</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 cardPaddingRight cardPaddingLeft">
            <div class="card text-white bg-dark" >
                <a href="/categorias/buscar">
                    <div class="card-body">
                        <h1><i class="fa fa-search"></i></h1>
                        <h5 class="card-title">Buscar</h5>
                        <p class="card-text">Pesquisar uma categoria</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 cardPaddingLeft">
            <div class="card text-white bg-danger" >
                <a href="/categorias/deletar">
                    <div class="card-body">
                        <h1><i class="fa fa-trash"></i></h1>
                        <h5 class="card-title">Deletar</h5>
                        <p class="card-text">Deletar uma categoria</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="card border">
        <div class="card-body">
            @if(count($cats) > 0)
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome da categoria</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cats as $cats)
                            <tr>
                                <td>{{ $cats->id }}</td>
                                <td>{{ $cats->nome }}</td>
                                <td>
                                    <a href="/categorias/editar/{{$cats->id}}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
                                    <a href="/categorias/deletar/{{$cats->id}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Deletar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>

@endsection