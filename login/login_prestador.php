<?php
session_start();
include('../conexao/conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: index_prestador.php');
	exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);

$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$senha = md5($senha);

$sql_code = "SELECT * FROM prestador_servicos WHERE email = '$email' AND senha = '$senha'";

$result = mysqli_query($conexao, $sql_code);

$row = mysqli_num_rows($result);

if($row == 1) {

	$_SESSION['user'] = $_POST['email'];
	
	header("Location: ../pagina_pesquisa/index_prest.php");
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;

	header('Location: index_prestador.php');
	exit();

}
	mysqli_close($conexao);

?>