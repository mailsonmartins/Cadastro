@extends('layout.app')

@section('body')

<div class="row">

    <div class="card border-primary col-sm-6">
        <div class="card-body text-primary">
          <h3 class="card-title">Bem vindo ao sistema de cadastro de produtos!</h3>
          <p class="card-text">Escolha uma das opções ao lado:</p>
        </div>
    </div>

    <div class="col-sm-6">
        
        <div class="card-group">
            <div class="col-sm-12 title-card-group bg-primary mb-3">
                <h4>Produtos</h4>
            </div>
            <div class="col-sm-6 cardPaddingRight mb-3">
                <div class="card text-white bg-success" >
                    <div class="card-body">
                        <h1><i class="fa fa-plus"></i></h1>
                        <h5 class="card-title">Cadastrar</h5>
                        <p class="card-text">Cadastrar um produto</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 cardPaddingLeft mb-3">
                <div class="card text-white bg-warning" >
                    <div class="card-body">
                        <h1><i class="fa fa-pencil"></i></h1>
                        <h5 class="card-title">Editar</h5>
                        <p class="card-text">Editar um produto</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 cardPaddingRight mb-3">
                <div class="card text-white bg-dark" >
                    <div class="card-body">
                        <h1><i class="fa fa-search"></i></h1>
                        <h5 class="card-title">Buscar</h5>
                        <p class="card-text">Pesquisar um produto</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 cardPaddingLeft mb-3">
                <div class="card text-white bg-danger" >
                    <div class="card-body">
                        <h1><i class="fa fa-trash"></i></h1>
                        <h5 class="card-title">Deletar</h5>
                        <p class="card-text">Deletar um produto</p>
                    </div>
                </div>
            </div>
    
            <div class="col-sm-12 title-card-group bg-primary mb-3 mt-3">
                <h4>Categorias</h4>
            </div>
            <div class="col-sm-6 cardPaddingRight mb-3">
                <div class="card text-white bg-success" >
                    <div class="card-body">
                        <h1><i class="fa fa-plus"></i></h1>
                        <h5 class="card-title">Cadastrar</h5>
                        <p class="card-text">Cadastrar uma categoria</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 cardPaddingLeft mb-3">
                <div class="card text-white bg-warning" >
                    <div class="card-body">
                        <h1><i class="fa fa-pencil"></i></h1>
                        <h5 class="card-title">Editar</h5>
                        <p class="card-text">Editar uma categoria</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 cardPaddingRight">
                <div class="card text-white bg-dark" >
                    <div class="card-body">
                        <h1><i class="fa fa-search"></i></h1>
                        <h5 class="card-title">Buscar</h5>
                        <p class="card-text">Pesquisar uma categoria</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 cardPaddingLeft">
                <div class="card text-white bg-danger" >
                    <div class="card-body">
                        <h1><i class="fa fa-trash"></i></h1>
                        <h5 class="card-title">Deletar</h5>
                        <p class="card-text">Deletar uma categoria</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
</div>

@endsection