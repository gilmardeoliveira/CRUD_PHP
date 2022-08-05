<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        .container{
            width: 500px;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <div class=container>
         <div style="text-align: right;margin-top: 40px" >
                <a href="index.php" role="button" class=" btn btn-sm btn-primary">Voltar</a>
        </div><!--botão voltar-->

        <form action="_inserir_fornecedor.php" method="post" style="margin-top: 40px">
            <h4>Adicionar Fornecedor</h4>
            <div class="form-group">
                <input type="text" name="fornecedor" class="form-control" placeholder="Insira o fornecedor" autocomplete="off">
            </div><!--input fornecedor-->
<br>
            <div style="text-align: right">
                        <button type="submit" id="botao" class=" btn-sm btn btn-danger" >Cadastrar</button>
                    </div><!--input botão cadastrar-->
        
        </form><!--formulário-->
    </div><!--container-->
    
</body>
</html>