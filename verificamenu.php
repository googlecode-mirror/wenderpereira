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
			switch ($concluido + 1){
				case(0):
					echo 'opção0';
				break;
				case(1):	
					echo 'opção1';
				break;
				case(2):	
					echo 'opção2';
				break;			
				case(3):	
					echo 'opção3';
				break;
				case(4):	
					echo 'opção4';
				break;			
				default :
				echo 'status inválido';
			}
			
?>

