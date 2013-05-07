
<?
	session_start();
	include "conexao.php";
	connect();
	$Login 	=  trim($_SESSION["login"]);
	$date = date("d/m/y");
	$hora = date("H:i");
	
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
	 
	 if(empty($questao2)) {}else{
	  insere($questao1,$Login,$date,$hora);}
	 if(empty($questao2)) {}else{	  
 	  insere($questao2,$Login,$date,$hora);}
	 if(empty($questao2)) {}else{	  
 	  insere($questao2,$Login,$date,$hora);}
	 if(empty($questao2)) {}else{	 
 	  insere($questao3,$Login,$date,$hora);}
	 if(empty($questao2)) {}else{	  
 	  insere($questao4,$Login,$date,$hora);}
	 if(empty($questao2)) {}else{	  
 	  insere($questao5,$Login,$date,$hora);}
	 if(empty($questao2)) {}else{	  
 	  insere($questao6,$Login,$date,$hora);}
	    // inserindo se não branco
      if(empty($questao3Quais)) {
		  }else{
		   $qtdQuestao = qtd3;
		 inserequais($qtdQuestao,$questao3Quais,$Login,$date,$hora);}	   
	    // inserindo se não branco
      if(empty($questao7Quais)) {
		  }else{
		   $qtdQuestao = qtd7;
		 inserequais($qtdQuestao,$questao7Quais,$Login,$date,$hora);}	  
   	 //----------------------------
	  $_checkbox = $_POST['qtd7'];
		foreach($_checkbox as $_valor){
			insere($_valor,$Login,$date,$hora);
	  }
	  //----------------------------
	  //função insere---------------------------------------------  
	function insere(&$resposta1,&$usuario,&$date,&$hora) {
		
		$consulta = "INSERT INTO pesquisa (respostas,usuario,parte,data,hora)
		 VALUES ('$resposta1','$usuario','3','$date','$hora')";;
		 
		$resultado = mysql_query($consulta)
		or die (mysql_error());
		//função insere---------------------------------------------
	}
	  function inserequais(&$qtdQuestao,&$resposta1,&$usuario,&$date,&$hora) {
		$consulta = "INSERT INTO pesquisaquais (questao,respostas,usuario,parte,data,hora)
		 VALUES ('$qtdQuestao','$resposta1','$usuario','3','$date','$hora')";
		$resultado = mysql_query($consulta)
		or die (mysql_error());
		//função insere---------------------------------------------
	}
	     $consulta = "UPDATE usuarios SET concluido='3' WHERE login='$Login';";
      $resultado = mysql_query($consulta)
      or die ("--");
      //---------------------------
	
	?>
	 <script language="JavaScript">
     alert("ParteIII cadastradra, clique na parteIV para realizar o cadastro!");
     </script>
	 <?
?>