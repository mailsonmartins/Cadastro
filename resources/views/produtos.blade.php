@extends('layout.app', ["current" => "produtos"])

@section('body')

    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Página de Produtos</h5>
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
                        <p class="card-text">Cadastrar um produto</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 cardPaddingLeft cardPaddingRight mb-3">
            <div class="card text-white bg-warning" >
                <a href="/page_editar_categoria">
                    <div class="card-body">
                        <h1><i class="fa fa-pencil"></i></h1>
                        <h5 class="card-title">Editar</h5>
                        <p class="card-text">Editar um produto</p>
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
                        <p class="card-text">Pesquisar um produto</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3 cardPaddingLeft">
            <div class="card text-white bg-danger" >
                <a href="/page_deletar_categoria">
                    <div class="card-body">
                        <h1><i class="fa fa-trash"></i></h1>
                        <h5 class="card-title">Deletar</h5>
                        <p class="card-text">Deletar um produto</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="card border">
        <div class="card-body">
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Quantidade</th>
                        <th>Preço</th>
                        <th>Categoria</th>
                        <th>Ações</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="card-footer">
            <button class="btn btn-sm btn-primary" role="button" onclick="novoProduto()">Novo Produto</button>
        </div>
    </div>

    <div class="modal" tabindex="1" role="dialog" id="dlgProdutos">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="form-horizontal" id="formProduto">
                    <div class="modal-header">
                        <h5 class="modal-title">Novo Produto</h5>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="id" class="form-control">
                        
                        <div class="form-group">
                            <label for="nomeProduto" class="control-label">Nome Produto</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="nomeProduto" placeholder="Nome do Produto">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="quantidadeProduto" class="control-label">Quantidade Produto</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="quantidadeProduto" placeholder="Quantidade do Produto">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="precoProduto" class="control-label">Preço Produto</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="precoProduto" placeholder="Preço do Produto">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="categoriaProduto" class="control-label">Catogoria Produto</label>
                            <div class="input-group">
                                <select class="form-control" id="categoriaProduto"></select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <button type="cancel" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('javascript')
    <script type="text/javascript">
        function novoProduto(){
            $('#id').val('');
            $('#nomeProduto').val('');
            $('#quantidadeProduto').val('');
            $('#precoProduto').val('');
            $('#dlgProdutos').modal('show');
        }

        function carregarCategorias(){
            $.getJSON('/api/categorias', function(data){
                for(i=0;i<data.length;i++){
                    opcao = '<option value=""'+ data[i].id + '">' + data[i].nome + '</option>'; 
                    $('#categoriaProduto').append(opcao);
                }
            });
        }

        $(function(){
            carregarCategorias();
        })

    </script>
@endsection