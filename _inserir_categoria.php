<?php
include 'conexao.php';

$categoria = $_POST['categoria'];
$sql = "INSERT INTO categoria (categoria) values ('$categoria')";
$inserir = mysqli_query($conexao,$sql);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<div class="container" style="width:700px;margin-top:40px">
    <center>
        <h3>Categoria inserida com sucesso</h3>
        <a href="index.php" class="btn btn-sm btn-warning">Voltar Home</a>
        <a href="_inserir_categoria.php" class="btn btn-sm btn-primary">Cadastrar outra Categoria</a>
    </center>
</div>