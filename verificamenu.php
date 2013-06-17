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
			 header ("location: responsavelpelopreenchiment_o.php"); 
		}else{
		header ("location: responsavelpelopreenchiment_o.php"); 
		}
}elseif ($concluido == 0) {
		if($opcao == -1){
			 header ("location: responsavelpelopreenchiment_o.php"); 
		}elseif($opcao == 0){
			 header ("location: identificacaodainstituicao_I.php");
		}else{
			header ("location: identificacaodainstituicao_I.php");
		}
}elseif ($concluido == 1) {
		if($opcao == -1){
			 header ("location: responsavelpelopreenchiment_o.php"); 
		}elseif($opcao == 0){
			 header ("location: identificacaodainstituicao_I.php");
		}elseif($opcao == 1){
			 header ("location: programas_II.php");		
		}else{
			 header ("location: programas_II.php");	
		}
}elseif ($concluido == 2) {
			if($opcao == -1){
			 header ("location: responsavelpelopreenchiment_o.php"); 
		}elseif($opcao == 0){
			 header ("location: identificacaodainstituicao_I.php");
		}elseif($opcao == 1){
			 header ("location: programas_II.php");		
		}elseif($opcao == 2){
			 header ("location: artistas_III.php");
		}elseif($opcao == 3){
			 header ("location: artistas_III.php");
		}else{
			 header ("location: artistas_III.php");
		}
}elseif ($concluido == 3) {
		if($opcao == -1){
			 header ("location: responsavelpelopreenchiment_o.php"); 
		}elseif($opcao == 0){
			 header ("location: identificacaodainstituicao_I.php");
		}elseif($opcao == 1){
			 header ("location: programas_II.php");		
		}elseif($opcao == 2){
			 header ("location: artistas_III.php");
		}elseif($opcao == 3){
			 header ("location: projetos_IV.php");
		}else{
			 header ("location: projetos_IV.php");
		}
}elseif ($concluido == 4) {
			if($opcao == -1){
			 header ("location: responsavelpelopreenchiment_o.php"); 
		}elseif($opcao == 0){
			 header ("location: identificacaodainstituicao_I.php");
		}elseif($opcao == 1){
			 header ("location: programas_II.php");		
		}elseif($opcao == 2){
			 header ("location: artistas_III.php");
		}elseif($opcao == 3){
			 header ("location: projetos_IV.php");
		}elseif($opcao == 4){
			header ("location: projetos_IV.php");
		}else{
			 header ("location: projetos_IV.php");
		}
}else{
			
}
?>
