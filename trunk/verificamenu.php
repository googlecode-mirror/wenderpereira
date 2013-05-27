<? 
session_start();
include "conexao.php";
connect();
$opcao = ($_GET["m"]);
$date = date("d/m/y");
$hora = date("H:i");

	 $Login 	=  $_SESSION["login"]; //recebe a sessão do login
	 
	 $sql = "select * from usuarios where login='$Login'";
	 $Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
	 while ($array_exibir = mysql_fetch_array($Resultado)) 
	 {
	 $concluido = ($array_exibir['concluido']);	
	 }

		?>
		<br/>
		<br/>
		<br/>
		<?
		$status = concluido;
		switch ($status) {
		case -1 :
		echo 'Inicio de cadastro';
		break;
		case 0 :
		echo 'parte 1 para cadastro';
		break;
		case 1 :
		echo 'parte 2 para cadastro';
		break;
		case 2 :
		echo 'parte 3 para cadastro';
		break;
		case 3 :
		echo 'parte 4 para cadastro';
		break;
		default :
		echo 'status inválido';
		}
?>
