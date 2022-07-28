<?php

    include 'conexao.php';

    $id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário de Cadastro</title>
	<link rel="stylesheet" href="css/bootstrap.
	css">
	<link rel="stylesheet" href="style.css">

	<style type="text/css">
		#tamanhoContainer{
			width: 500px;
		}
		 
		#botao{
			background-color:#C86473;
			color: #ffffff
			font-weight: bold;
            
		}
	</style>

</head>
<body>

	<div class="container" id="tamanhoContainer" style="margin-top: 40px">
		<h4>Formulário de Cadastro</h4>
		<form action="_inserir_produto.php" method="post" style="margin-top: 20px;">

            <?php
            $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
            $buscar = mysqli_query($conexao,$sql);
            while ($array = mysqli_fetch_array($buscar)){

                $id_estoque = $array ['id_estoque'];
                $nroproduto = $array ['nroproduto'];
                $nomeproduto = $array ['nomeproduto'];
                $categoria = $array ['categoria'];
                $quantidade = $array ['quantidade'];
                $fornecedor = $array ['fornecedor'];
            ?>
				<div class="form-group">
					<label>Nro Produto</label>
					<input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled>
					<input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
				</div>

				<div class="form-group">
					<label>Nome Produto</label>
					<input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
				</div>

				<div class="form-group">
					<label>Categoria</label>
					<select class="form-control" name="categoria">
					<option>Periféricos</option>
					<option>Hardware</option>
					<option>Software</option>
					</select>
				</div>
			
				<div class="form-group">
					<label>Quantidade</label>
					<input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
					
				</div>

				<div class="form-group">
					<label>Fornecedor</label>
					<select class="form-control" name="forncedor">
						<option>Fornecedor A</option>
						<option>Fornecedor B</option>
						<option>Fornecedor C</option>
					</select>
				</div>
							<br>
			<div style="text-align: right;">
				<button type="submit" id="botao" class=" btn-sm btn btn-danger">Atualizar</button>
			</div>
        <?php } ?>
		</form>
	</div>



	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>