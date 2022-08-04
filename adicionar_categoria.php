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
        .form-group{
			
		}
    </style>
</head>
<body>
    <div class="container">
        <div style="text-align: right;margin-top: 40px" >
                <a href="index.php" role="button" class=" btn btn-sm btn-primary">Voltar</a>
            </div><!--botão voltar-->

            <form action="_inserir_categoria.php" method="post" style="margin-top: 40px"> 
                    <h4>Cadastro de Categoria</h4>
                    <div class="form-group">
                        <input type="text" name="categoria" class="form-control" placeholder="Digite o nome da Categoria" autocomplete="off" >
                    </div><!--input categoria-->
<br>
                    <div style="text-align: right">
                        <button type="submit" id="botao" class=" btn-sm btn btn-danger" >Cadastrar</button>
                    </div><!--input botão cadastrar-->
            </form>
        </div>
        <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>