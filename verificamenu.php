<? 
	session_start();
	include "conexao.php";
	connect();
	$opcao = ($_GET["m"]);
	$date = date("d/m/y");
	$hora = date("H:i");

		 $Login 	=  $_SESSION["login"]; //recebe a sess�o do login
		 
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
					echo 'op��o0';
				break;
				case(1):	
					echo 'op��o1';
				break;
				case(2):	
					echo 'op��o2';
				break;			
				case(3):	
					echo 'op��o3';
				break;
				case(4):	
					echo 'op��o4';
				break;			
				default :
				echo 'status inv�lido';
			}
			
?>

