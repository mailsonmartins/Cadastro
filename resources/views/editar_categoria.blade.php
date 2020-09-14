@extends('layout.app', ["current" => "categorias"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/categorias/{{$cat->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nome_categoria">Nome da Categoria</label>
                    <input type="text" class="form-control" name="nome_categoria" value="{{$cat->nome}}" id="nome_categoria" placeholder="Categoria">
                </div>
                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
            </form>
        </div>
    </div>
@endsection