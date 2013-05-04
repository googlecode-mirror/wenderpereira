
<?
	session_start();
	include "conexao.php";
	connect();
	$Login 	=  trim($_SESSION["login"]);
//	echo($Login);
	//----------------------------
	  $_checkbox = $_POST['qtd1'];
		foreach($_checkbox as $_valor){
			insere($_valor,$Login);
	  }
	  //----------------------------
	  $questao1Quais = $_POST[qtd1quais];
	  $questao2 = $_POST[qtd2];
	  $questao3 = $_POST[qtd3];
	  $questao3Quais = $_POST[qtd3quais];
 	  $questao4 = $_POST[qtd4];
	  //----------------------------
	  $_checkbox = $_POST['qtd5'];
		foreach($_checkbox as $_valor){
			insere($_valor,$Login);
	  }
	  //----------------------------
 	  $questao6 = $_POST[qtd6];	  
	  	  //----------------------------
	  $_checkbox = $_POST['qtd7'];
		foreach($_checkbox as $_valor){
			insere($_valor,$Login);
	  }
	  //----------------------------
	  $_checkbox = $_POST['qtd8'];
		foreach($_checkbox as $_valor){
			insere($_valor,$Login);
	  }
	  //----------------------------
	  $questao9 = $_POST[qtd9];
  	  $questao10 = $_POST[qtd10];
	  $questao11 = $_POST[qtd11];
  	  $questao12 = $_POST[qtd12];
	  $questao12Quais = $_POST[qtd12quais];
	  	  //----------------------------
	  $_checkbox = $_POST['qtd13'];
		foreach($_checkbox as $_valor){
			insere($_valor,$Login);
	  }
	  //----------------------------
   	  $questao14 = $_POST[qtd14];
	  $questao15 = $_POST[qtd15];
	  //----------------------------------------------------	
	  // inserindo informaçoes
	  insere($questao1Quais,$Login);
 	  insere($questao2,$Login);
 	  insere($questao3,$Login);
 	  insere($questao3Quais,$Login);
 	  insere($questao4,$Login);
 	  insere($questao6,$Login);
 	  insere($questao9,$Login);
 	  insere($questao10,$Login);
 	  insere($questao11,$Login);
 	  insere($questao12,$Login);
 	  insere($questao14,$Login);
 	  insere($questao15,$Login);
	  
//função insere---------------------------------------------  
	function insere(&$resposta1,&$usuario) {
		
		$consulta = "INSERT INTO pesquisa (respostas,usuario,parte)
		 VALUES ('$resposta1','$usuario','2')";
		 
		$resultado = mysql_query($consulta)
		or die (mysql_error());
		//função insere---------------------------------------------
	}
?>