<?php
$severname = "localhost"; //Padrão - server local
$database = "curso_estoque"; //Alterar conforme o nome do seu banco de dados
$username = "root"; //Padrão - root
$password = ""; //Senha de conexão do banco de dados
// Create connection
$conexao = mysqli_connect($severname, $username, $password, $database);