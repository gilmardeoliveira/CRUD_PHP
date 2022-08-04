<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário de Cadastro</title>
	<link rel="stylesheet" href="css/bootstrap.
	css">

	<style type="text/css">
		#tamanhoContainer{
			width: 500px;
			margin-top: 40px;
		}
		 
		.form-group{
			margin: 15px
		}
	</style>

</head>
<body>

	<div class="container" id="tamanhoContainer">

		<div style="text-align: right">
			<a href="index.php" role="button" class=" btn btn-sm btn-primary">Voltar</a>
		</div><!--botão voltar-->

		<h4>Formulário de Cadastro</h4>
		<form action="_inserir_produto.php" method="post" style="margin-top: 20px;">
				<div class="form-group">
					<label>Nro Produto</label>
					<input type="number" class="form-control" name="nroproduto" placeholder="Insira o número do produto" required autocomplete="off">
				</div>

				<div class="form-group">
					<label>Nome Produto</label>
					<input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto" required autocomplete="off">
				</div>

				<div class="form-group">
					<label>Categoria</label>
					<select class="form-control" name="categoria">
					 	<?php

							include 'conexao.php';
							$sql = "SELECT * FROM categoria order by nome_categoria ASC";
							$buscar = mysqli_query($conexao,$sql);

							while ($array = mysqli_fetch_array($buscar)) {
								$id_categoria = $array['id_categoria'];
								$nome_categoria = $array['nome_categoria'];
						?>
							<option><?php echo $nome_categoria?></option>
						<?php } ?>

						
					</select>
				</div>
			
				<div class="form-group">
					<label>Quantidade</label>
					<input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto" required autocomplete="off">
					
				</div>

				<div class="form-group">
					<label>Fornecedor</label>
					<select class="form-control" name="fornecedor" required autocomplete="off">
						<option>Fornecedor A</option>
						<option>Fornecedor B</option>
						<option>Fornecedor C</option>
					</select>
				</div>
							<br>
			<div style="text-align: right;">
			<button type="submit" id="botao" class=" btn-sm btn btn-danger">Cadastrar</button>
			</div>
		</form>

	</div>



	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>