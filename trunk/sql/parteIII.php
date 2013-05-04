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
	  $questao1 = $_POST[qtd1];
	  $questao2 = $_POST[qtd2];
  	  $questao3 = $_POST[qtd3];
	  $questao3Quais = $_POST[qtd3quais];
	  $questao4 = $_POST[qtd4];
  	  $questao5 = $_POST[qtd5];
	  $questao6 = $_POST[qtd6];
	  $questao7Quais = $_POST[qtd7quais];
	 // inserindo informaçoes
	  insere($questao1,$Login,$date,$hora);
 	  insere($questao2,$Login,$date,$hora);
 	  insere($questao2,$Login,$date,$hora);
 	  insere($questao3,$Login,$date,$hora);
 	  insere($questao3Quais,$Login,$date,$hora);
 	  insere($questao4,$Login,$date,$hora);
 	  insere($questao5,$Login,$date,$hora);
 	  insere($questao6,$Login,$date,$hora);
   	 //----------------------------
	  $_checkbox = $_POST['qtd7'];
		foreach($_checkbox as $_valor){
			insere($_valor,$Login,$date,$hora);
	  }
	  //----------------------------
 	  insere($questao7Quais,$Login,$date,$hora);
   	   
	  //função insere---------------------------------------------  
	function insere(&$resposta1,&$usuario,&$date,&$hora) {
		
		$consulta = "INSERT INTO pesquisa (respostas,usuario,parte,data,hora)
		 VALUES ('$resposta1','$usuario','3','$date','$hora')";;
		 
		$resultado = mysql_query($consulta)
		or die (mysql_error());
		//função insere---------------------------------------------
	}
}
	?>
	 <script language="JavaScript">
     alert("ParteIII cadastradra, clique na parteIV para realizar o cadastro!");
     </script>
	 <?
?>