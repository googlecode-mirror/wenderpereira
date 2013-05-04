
<?
	session_start();
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
	  $questao2 = $_POST[qtd2];
	  $questao3 = $_POST[qtd3];
	  $questao3Quais = $_POST[qtd3quais];
 	  $questao4 = $_POST[qtd4];
	  //----------------------------
	  $_checkbox = $_POST['qtd5'];
		foreach($_checkbox as $_valor){
			insere($_valor,$Login,$date,$hora);
	  }
	  //----------------------------
 	  $questao6 = $_POST[qtd6];	  
	  	  //----------------------------
	  $_checkbox = $_POST['qtd7'];
		foreach($_checkbox as $_valor){
			insere($_valor,$Login,$date,$hora);
	  }
	  //----------------------------
	  $_checkbox = $_POST['qtd8'];
		foreach($_checkbox as $_valor){
			insere($_valor,$Login,$date,$hora);
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
			insere($_valor,$Login,$date,$hora);
	  }
	  //----------------------------
   	  $questao14 = $_POST[qtd14];
	  $questao15 = $_POST[qtd15];
	  //----------------------------------------------------	
	  // inserindo informaçoes
	  insere($questao1Quais,$Login,$date,$hora);
 	  insere($questao2,$Login,$date,$hora);
 	  insere($questao3,$Login,$date,$hora);
 	  insere($questao3Quais,$Login,$date,$hora);
 	  insere($questao4,$Login,$date,$hora);
 	  insere($questao6,$Login,$date,$hora);
 	  insere($questao9,$Login,$date,$hora);
 	  insere($questao10,$Login,$date,$hora);
 	  insere($questao11,$Login,$date,$hora);
 	  insere($questao12,$Login,$date,$hora);
 	  insere($questao14,$Login,$date,$hora);
 	  insere($questao15,$Login,$date,$hora);
	  
//função insere---------------------------------------------  
	function insere(&$resposta1,&$usuario,&$date,&$hora) {
		
		$consulta = "INSERT INTO pesquisa (respostas,usuario,parte,data,hora)
		 VALUES ('$resposta1','$usuario','2','$date','$hora')";
		 
		$resultado = mysql_query($consulta)
		or die (mysql_error());
		//função insere---------------------------------------------
		
	}
	?>
	  <script language="JavaScript">
         alert("ParteII cadastradra, clique na parte III para realizar o cadastro!");
         </script>
	 <?
?>