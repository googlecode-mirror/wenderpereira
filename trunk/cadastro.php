<?php
$login=$_POST['login'];
$senha=$_POST['senha'];
if ((!$login) || (!$senha)){
	echo "Valida��o: <br /><br />";
	if (!$login){
		echo "Nome � requerido.<br />";
	}
	if (!$senha){
		echo "Senha � requerido.<br /> <br />";
	}
}
?>

