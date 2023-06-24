<?php
session_start();
include("../conexao/conexao.php");

$tipouser = "cliente";

$senha = mysqli_real_escape_string($conexao, trim($_POST["senha"]));
$senha = md5($senha);

$nome = mysqli_real_escape_string($conexao, trim($_POST["nome"]));
$email = mysqli_real_escape_string($conexao, trim($_POST["email"]));
$cpf = mysqli_real_escape_string($conexao, trim($_POST["cpf"]));
$nasc = mysqli_real_escape_string($conexao, trim($_POST["nasc"]));
$cidade = mysqli_real_escape_string($conexao, trim($_POST["cidade"]));
$uf = mysqli_real_escape_string($conexao, trim($_POST["uf"]));
$ddd = mysqli_real_escape_string($conexao, trim($_POST["ddd"]));
$celular = mysqli_real_escape_string($conexao, trim($_POST["celular"]));

$conexao = mysqli_connect('localhost', 'root', '', 'servicos');

 $sql = "SELECT * FROM cliente_servicos WHERE email = '$email'";
 $result = mysqli_query($conexao, $sql);
 $row = mysqli_fetch_assoc($result);

 if($row > 0){
 	$_SESSION['usuario_existe'] = true;
 	header('Location: cadastro_cliente.php');
 	exit;
 }

$query = "insert into cliente_servicos (tipo_usuario, senha, nome, email, cpfcnpj, nasc, cidade, uf, ddd, celular) values ('{$tipouser}', '{$senha}','{$nome}', '{$email}', '{$cpf}', '{$nasc}', '{$cidade}', '{$uf}', '{$ddd}', '{$celular}')";

 if($conexao->query($query) === TRUE){
 	$_SESSION['status_cadastro'] = true;
 }

mysqli_close($conexao);

header('Location: cadastro_cliente.php');
exit;
?>