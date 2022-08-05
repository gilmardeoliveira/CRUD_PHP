<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body> 
<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Adicionar Produto</h5>
                <p class="card-text">Opção para adicionar em nosso estoque.</p>
                <a href="adicionar_produto.php" class="btn btn-primary">Cadastrar Produto</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Lista de Produtos</h5>
                <p class="card-text">Visualizar, editar e excluir os produtos.</p>
                <a href="listar_produtos.php" class="btn btn-primary">Produtos</a>
            </div>
            </div>
        </div>

        <div class="col-sm-6" style="margin-top: 20px">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Adicionar Categoria</h5>
                <p class="card-text">Opção para adicionar categoria de produtos.</p>
                <a href="adicionar_categoria.php" class="btn btn-primary">Cadastrar Categoria</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6" style="margin-top: 20px">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Adicionar Fornecedor</h5>
                <p class="card-text">Opção para adicionar Fornecedor.</p>
                <a href="adicionar_fornecedor.php" class="btn btn-primary">Cadastrar Fornecedores</a>
            </div>
            </div>
        </div>
    </div>


</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>