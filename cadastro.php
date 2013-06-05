<?php
$login=$_POST['login'];
$senha=$_POST['senha'];
if ((!$login) || (!$senha)){
	echo "Validação: <br /><br />";
	if (!$login){
		echo "Nome é requerido.<br />";
	}
	if (!$senha){
		echo "Senha é requerido.<br /> <br />";
	}
}
?>

