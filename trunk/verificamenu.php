<? 
	session_start();
	include "conexao.php";
	connect();
	$opcao = ($_GET["m"]);
	$date = date("d/m/y");
	$hora = date("H:i");
	     $Login	=  $_SESSION["login"]; //recebe a sessão do login
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
if($concluido == -1) {
		if($opcao == -1){
			 header ("location: inicial.php"); 
		}elseif($opcao == 0){
			 header ("location: parte_I.php"); 
		}else{
		
		}
}elseif ($concluido == 0) {
		if($opcao == -1){
			 header ("location: inicial.php"); 
		}elseif($opcao == 0){
			 header ("location: parte_I.php");
		}elseif($opcao == 1){
			 header ("location: parte_II.php");		
		}else{
		
		}
}elseif ($concluido == 1) {
		if($opcao == -1){
			 header ("location: inicial.php"); 
		}elseif($opcao == 0){
			 header ("location: parte_I.php");
		}elseif($opcao == 1){
			 header ("location: parte_II.php");		
		}else{
			 header ("location: inicial.php");
		}
}elseif ($concluido == 2) {
			if($opcao == -1){
			 header ("location: inicial.php"); 
		}elseif($opcao == 0){
			 header ("location: parte_I.php");
		}elseif($opcao == 1){
			 header ("location: parte_II.php");		
		}elseif($opcao == 2){
			 header ("location: parte_III.php");
		}elseif($opcao == 3){
			 header ("location: parte_III.php");
		}else{
			 header ("location: inicial.php");
		}
}elseif ($concluido == 3) {
		if($opcao == -1){
			 header ("location: inicial.php"); 
		}elseif($opcao == 0){
			 header ("location: parte_I.php");
		}elseif($opcao == 1){
			 header ("location: parte_II.php");		
		}elseif($opcao == 2){
			 header ("location: parte_III.php");
		}elseif($opcao == 3){
			 header ("location: parte_IV.php");
		}else{
			 header ("location: inicial.php");
		}
}elseif ($concluido == 4) {
			if($opcao == -1){
			 header ("location: inicial.php"); 
		}elseif($opcao == 0){
			 header ("location: parte_I.php");
		}elseif($opcao == 1){
			 header ("location: parte_II.php");		
		}elseif($opcao == 2){
			 header ("location: parte_III.php");
		}elseif($opcao == 3){
			 header ("location: parte_IV.php");
		}elseif($opcao == 4){
			echo("cadastramento concluido");
		}else{
			 header ("location: inicial.php");
		}
}else{
			echo("verifique as informações");
}
?>
