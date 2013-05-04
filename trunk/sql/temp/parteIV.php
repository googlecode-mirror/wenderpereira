
<?
	session_start();
	include "conexao.php";
	connect();
	$Login 	=  trim($_SESSION["login"]);
	//echo($Login);
 //----------------------------
	$_checkbox = $_POST['qtd1'];
	foreach($_checkbox as $_valor){
	insere($_valor,$Login);
	}
  //----------------------------
 	$questao1Quais = $_POST[qtd1quais];
 //----------------------------
	$_checkbox = $_POST['qtd2'];
	foreach($_checkbox as $_valor){
	insere($_valor,$Login);
	}
  //----------------------------
   	$questao2Quais = $_POST[qtd2quais];
  //----------------------------
	$_checkbox = $_POST['qtd3'];
	foreach($_checkbox as $_valor){
	insere($_valor,$Login);
	}
  //----------------------------
	$questao3Quais = $_POST[qtd3quais];
  //----------------------------
    $_checkbox = $_POST['qtd4'];
	foreach($_checkbox as $_valor){
	insere($_valor,$Login);
  }
  //----------------------------
  $questao4Quais = $_POST[qtd4quais];
  //----------------------------
    $_checkbox = $_POST['qtd5'];
	foreach($_checkbox as $_valor){
	insere($_valor,$Login);
  }
  //----------------------------
  $questao5Quais = $_POST[qtd5quais];
	  
	  
 	

?>