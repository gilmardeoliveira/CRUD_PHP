<?php

    include 'conxao.php';

    $id = $_POST['id'];
    //$nroproduto = $_POST['nroproduto'];
    $nomeproduto = $_POST['nomeproduto'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor'];

    $sql="UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`=$quantidade,`fornecedor`='$fornecedor' WHERE id_estoque = $id";

    $atualizar = mysqli_query($conexao,$sql);
?>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<div class="container" style="widht: 400px;">
    <center>
        <h3>Atualizado com sucesso</h3>
            <div style="margin-top: 10px">
                <a href="lista_produtos.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
            </div>
    </center>

</div>