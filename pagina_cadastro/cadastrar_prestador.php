<?php
session_start();
include("../conexao/conexao.php");

$tipodeuser = "prestador";

$senha = mysqli_real_escape_string($conexao, trim($_POST["senha"]));
$senha = md5($senha);

$nome = mysqli_real_escape_string($conexao, trim($_POST["nome"]));
$nasc = mysqli_real_escape_string($conexao, trim($_POST["nasc"]));
$celular = mysqli_real_escape_string($conexao, trim($_POST["celular"]));
$email = mysqli_real_escape_string($conexao, trim($_POST["email"]));
$rg = mysqli_real_escape_string($conexao, trim($_POST["rg"]));
$cpf = mysqli_real_escape_string($conexao, trim($_POST["cpf"]));
$profissao = mysqli_real_escape_string($conexao, trim($_POST["profissao"]));
$carreira = mysqli_real_escape_string($conexao, trim($_POST["carreira"]));
$cidade = mysqli_real_escape_string($conexao, trim($_POST["cidade"]));
$uf = mysqli_real_escape_string($conexao, trim($_POST["uf"]));
$ddd = mysqli_real_escape_string($conexao, trim($_POST["ddd"]));

$sql = "SELECT * FROM prestador_servicos WHERE email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row > 0){
	$_SESSION['usuario_existe_p'] = true;
	header('Location: cadastro_prestador.php');
	exit;
}

$query = "INSERT INTO prestador_servicos (tipo_usuario, senha, nome, nasc, celular, email, rg, cpf, profissao, carreira, cidade, uf, ddd)
		  VALUES ('{$tipodeuser}', '{$senha}','{$nome}', '{$nasc}', '{$celular}', '{$email}', '{$rg}', '{$cpf}', '{$profissao}', '{$carreira}', '{$cidade}', '{$uf}', '{$ddd}')";

if($conexao->query($query) === TRUE){
	$_SESSION['status_cadastro_p'] = true;
}

mysqli_close($conexao);

header('Location: cadastro_prestador.php');
exit;
?>