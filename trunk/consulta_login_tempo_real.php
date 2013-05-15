<?php
 
//if (isset($_GET['entrada'])) // Pega o valor digitado no primeiro campo
//    echo strtoupper($_GET['entrada']); // exibe o valor convertido em maiúsculo

$login = ($_GET['entrada']);

include "conexao.php";
	connect();
	  $Login 	=  trim($_SESSION["login"]);
	  $_POST[qtdComentariosGerais] = $qtdComentariosGerais;
	  
	  	$sql = "select * from usuarios WHERE login='$login';";
		$Resultado = mysql_query($sql) or die("Erro");
  		 while ($array_exibir = mysql_fetch_array($Resultado)) {
			echo ($array_exibir['email']);
		}

?>
 
