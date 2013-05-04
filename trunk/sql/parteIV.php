<?
session_start();
if (empty($_SESSION['login'])) {
	?> <script>
     alert("Acesso Negado!");
	 window.location = 'index.php';
	 </script>
	<?php
}else{
	include "conexao.php";
	connect();
	$Login 	=  trim($_SESSION["login"]);
	$date = date("d/m/y");
	$hora = date("H:i");
	
 //----------------------------
	$_checkbox = $_POST['qtd1'];
	foreach($_checkbox as $_valor){
	insere($_valor,$Login,$date,$hora);
	}
  //----------------------------
 	$questao1Quais = $_POST[qtd1quais];
 //----------------------------
	$_checkbox = $_POST['qtd2'];
	foreach($_checkbox as $_valor){
	insere($_valor,$Login,$date,$hora);
	}
  //----------------------------
   	$questao2Quais = $_POST[qtd2quais];
  //----------------------------
	$_checkbox = $_POST['qtd3'];
	foreach($_checkbox as $_valor){
	insere($_valor,$Login,$date,$hora);
	}
  //----------------------------
	$questao3Quais = $_POST[qtd3quais];
  //----------------------------
    $_checkbox = $_POST['qtd4'];
	foreach($_checkbox as $_valor){
	insere($_valor,$Login,$date,$hora);
  }
  //----------------------------
  $questao4Quais = $_POST[qtd4quais];
  //----------------------------
    $_checkbox = $_POST['qtd5'];
	foreach($_checkbox as $_valor){
	insere($_valor,$Login,$date,$hora);
  }
  //----------------------------
  $questao5Quais = $_POST[qtd5quais];
  $dec1 = $_POST[dec1];
  $dec2 = $_POST[dec2];
  $dec3 = $_POST[dec3]; 
  $qtdComentarios = $_POST[qtdComentariosGerais]; 
  
  //----------------------------
  //Inserindo----------------------------
  insere($questao1Quais,$Login,$date,$hora);
  insere($questao2Quais,$Login,$date,$hora);
  insere($questao3Quais,$Login,$date,$hora);
  insere($questao4Quais,$Login,$date,$hora);
  insere($questao5Quais,$Login,$date,$hora);
  insere($dec1,$Login,$date,$hora);
  insere($dec2,$Login,$date,$hora);
  insere($dec3,$Login,$date,$hora);
  insere($qtdComentarios,$Login,$date,$hora);
  
  
  //função insere---------------------------------------------  
	function insere(&$resposta1,&$usuario,&$date,&$hora) {
		
	$consulta = "INSERT INTO pesquisa (respostas,usuario,parte,data,hora)
	 VALUES ('$resposta1','$usuario','4','$date','$hora')";;
	 
	$resultado = mysql_query($consulta)
	or die (mysql_error());
	
	}
}
	?>
	  <script language="JavaScript">
         alert("ParteIV cadastradra!");
         </script>
	 <?
	//função insere---------------------------------------------  
 	

?>