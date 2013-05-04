
<?
	session_start();
	include "conexao.php";
	connect();
	$Login 	=  trim($_SESSION["login"]);
	
//	echo($Login);
	  $questao1 = $_POST[qtd1];
	  $questao2 = $_POST[qtd2];
  	  $questao3 = $_POST[qtd3];
	  $questao3Quais = $_POST[qtd3quais];
	  $questao4 = $_POST[qtd4];
  	  $questao5 = $_POST[qtd5];
	  $questao6 = $_POST[qtd6];
	  $questao7Quais = $_POST[qtd7quais];
	 // inserindo informaçoes
	  insere($questao1,$Login);
 	  insere($questao2,$Login);
 	  insere($questao2,$Login);
 	  insere($questao3,$Login);
 	  insere($questao3Quais,$Login);
 	  insere($questao4,$Login);
 	  insere($questao5,$Login);
 	  insere($questao6,$Login);
   	 //----------------------------
	  $_checkbox = $_POST['qtd7'];
		foreach($_checkbox as $_valor){
			insere($_valor,$Login);
	  }
	  //----------------------------
 	  insere($questao7Quais,$Login);
   	   
	  //função insere---------------------------------------------  
	function insere(&$resposta1,&$usuario) {
		
		$consulta = "INSERT INTO pesquisa (respostas,usuario,parte)
		 VALUES ('$resposta1','$usuario','3')";
		 
		$resultado = mysql_query($consulta)
		or die (mysql_error());
		//função insere---------------------------------------------
	}
?>