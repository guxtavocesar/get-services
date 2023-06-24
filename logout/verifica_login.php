<?php
if(!$_SESSION['user']) {
	header('Location: ../login/login.php');
	exit();
}
?>