<?php
    include 'conexao.php';

    $fornecedor = $_POST['fornecedor'];
    echo $sql = "INSERT INTO fornecedor (nome_fornecedor) values ('$fornecedor')";
    $inserir = mysqli_query($conexao,$sql);

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<div class="container" style="width:700px;margin-top:40px">
    <center>
        <h3>Fornecedor inserido com sucesso</h3>
        <a href="index.php" class="btn btn-sm btn-warning">Home</a>
        <a href="adicionar_fornecedor.php" class="btn btn-sm btn-primary">voltar</a>
    </center>
</div>