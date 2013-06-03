<?
	session_start();
	include "conexao.php";
	connect();
	$Login 	=  trim($_SESSION["login"]);
    $conluido =  $_SESSION["concluido"]; //recebe da sessão o andamento da pesquisa
	$date = date("d/m/y");
	$hora = date("H:i");
  	//----------------------------
	// confirma se o form já foi preenchido
	$sql = "select * from usuarios where login='$Login'";
	$Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
	while ($array_exibir = mysql_fetch_array($Resultado)) 
	{
	  $_SESSION["concluido"] = $concluido = ($array_exibir['concluido']);
	}
	  //----------------------------
	  $questao2 = $_POST[qtd2];
	  $questao4 = $_POST[qtd4];
	  $questao6 = $_POST[qtd6];	  
	  $questao9 = $_POST[qtd9];
  	  $questao10 = $_POST[qtd10];
	  $questao11 = $_POST[qtd11];
	  $questao12 = $_POST[qtd12];
   	  $questao14 = $_POST[qtd14];
	  // Recuperando campos Quais	    
	  $questao1Quais = $_POST[qtd1quais];
	  $questao3Quais = $_POST[qtd3quais];
 	  $questao7Quais = $_POST[qtd7quais];
	  $questao8Quais = $_POST[qtd8Quais];
   	  $questao8Quais1 = $_POST[qtd8Quais1];
  	  $questao12Quais = $_POST[qtd12Quais];
  if ($_POST[avancar] == "avancar") { 
	if($concluido == 1) 
	{
	  // inserindo CheckBox	 
	  $_checkbox = $_POST['qtd1'];
	  foreach($_checkbox as $_valor){
		insere($_valor,$Login,$date,$hora);
	  }	  
	  $_checkbox = $_POST['qtd3'];
	  foreach($_checkbox as $_valor){
		insere($_valor,$Login,$date,$hora);
	  }	  
	  $_checkbox = $_POST['qtd5'];
		foreach($_checkbox as $_valor){
		insere($_valor,$Login,$date,$hora);
	  }		  
	  $_checkbox = $_POST['qtd7'];
		foreach($_checkbox as $_valor){
		insere($_valor,$Login,$date,$hora);
	  }		  
	  $_checkbox = $_POST['qtd8'];
		foreach($_checkbox as $_valor){
		insere($_valor,$Login,$date,$hora);
	  }		  
	  $_checkbox = $_POST['qtd13'];
		foreach($_checkbox as $_valor){
		insere($_valor,$Login,$date,$hora);
	  }
	  $_checkbox = $_POST['qtd15'];
		foreach($_checkbox as $_valor){
		insere($_valor,$Login,$date,$hora);
	  }
	  // inserindo informaçoes
 	  if(empty($questao2)) {}else{
	  insere($questao2,$Login,$date,$hora);}
	  if(empty($questao4)) {}else{	  
      insere($questao4,$Login,$date,$hora);}
 	  if(empty($questao6)) {}else{	  
 	  insere($questao6,$Login,$date,$hora);}
 	  if(empty($questao9)) {}else{
	  insere($questao9,$Login,$date,$hora);}
	  if(empty($questao10)) {}else{	  
 	  insere($questao10,$Login,$date,$hora);}
 	  if(empty($questao11)) {}else{	  
 	  insere($questao11,$Login,$date,$hora);}
 	  if(empty($questao12)) {}else{	  
 	  insere($questao12,$Login,$date,$hora);}
	  if(empty($questao14)) {}else{	  
	  insere($questao14,$Login,$date,$hora);}
	  if(empty($questao1Quais)) {}else{  	  
	  $qtdQuestao = qtd1;
		 inserequais($qtdQuestao,$questao1Quais,$Login,$date,$hora);}	  
	  if(empty($questao3Quais)) {}else{
 		   $qtdQuestao = qtd3;
		 inserequais($qtdQuestao,$questao3Quais,$Login,$date,$hora);}
	  if(empty($questao7Quais)) {}else{
  		   $qtdQuestao = qtd7;
	 	 inserequais($qtdQuestao,$questao7Quais,$Login,$date,$hora);}
      if(empty($questao8Quais)) {}else{
		   $qtdQuestao = qtd8;
	 	 inserequais($qtdQuestao,$questao8Quais,$Login,$date,$hora);}
		 
      if(empty($questao8Quais1)) {}else{
		   $qtdQuestao = qtd81;
	    inserequais($qtdQuestao,$questao8Quais1,$Login,$date,$hora);}
	  if(empty($questao12Quais)) {}else{
		   $qtdQuestao = qtd12;
	    inserequais($qtdQuestao,$questao12Quais,$Login,$date,$hora);}
	  atualizaconcluir($Login);		
		  } elseif ($concluido == 0){
   		   ?>
            <script language="JavaScript">
            alert("Retorne para o mapeamento e realize o cadastro!");
			window.location.assign("../parte_II.php");
            </script>
           <?php
		    
		  } elseif ($concluido == 2){
   		   ?>
            <script language="JavaScript">
            alert("Cadastramento da Parte II realizado avance para a parteIII!");
			window.location.assign("../parte_II.php");
            </script>
           <?php
		    
		  } elseif ($concluido == 3){
		   ?>
              <script language="JavaScript">
              alert("Cadastramento da Parte III já foi realizado!");
			  window.location.assign("../parte_II.php");
              </script>
            <?php
			 
		  } elseif ($concluido == 4){
             ?>
              <script language="JavaScript">
              alert("O cadatro já foi concluído, caso queira atualizar clique na parte que desejada atualizar!");
			  window.location.assign("../parte_II.php");
              </script>
            <?php
			 
		 }else{
				//else do teste igual a parte atualizado!
			  }
	  }else{
		   //else do teste se o solicitante clicou em avançar!
	  }
	//função insere---------------------------------------------
	function insere(&$resposta1,&$usuario,&$date,&$hora) {
		$consulta = "INSERT INTO pesquisa (respostas,usuario,parte,data,hora)
		 VALUES ('$resposta1','$usuario','2','$date','$hora')";
		$resultado = mysql_query($consulta)
		or die (mysql_error());
		//função insere---------------------------------------------
	}
 	 function inserequais(&$qtdQuestao,&$resposta1,&$usuario,&$date,&$hora) {
		$consulta = "INSERT INTO pesquisaquais (questao,respostas,usuario,parte,data,hora)
		 VALUES ('$qtdQuestao','$resposta1','$_SESSION[login]','2','$date','$hora')";
		$resultado = mysql_query($consulta)
		or die (mysql_error());
		//função insere---------------------------------------------
	 }
     function atualizaconcluir(&$Login){
	 $consulta = "UPDATE usuarios SET concluido='2' WHERE login='$Login';";
     $resultado = mysql_query($consulta)
     or die ("--");
		?>
	  <script language="JavaScript">
	      alert("ParteII cadastrada, clique na parte III para realizar o cadastro!");
	      window.location.assign("../parte_II.php");
      </script>
	  <?
	   
	}
 	 ?>
	 <?
     if ($_POST[atualizar] == "atualizar") 
	 { 
		 $sql = "Delete FROM pesquisa Where usuario='$Login' and parte ='2'";
		 $resultado = mysql_query($sql)
		 or die (mysql_error());
	 // inserindo CheckBox	 
	  $_checkbox = $_POST['qtd1'];
	  foreach($_checkbox as $_valor){
		insere($_valor,$Login,$date,$hora);
	  }	  
	  $_checkbox = $_POST['qtd3'];
	  foreach($_checkbox as $_valor){
		insere($_valor,$Login,$date,$hora);
	  }	  
	  $_checkbox = $_POST['qtd5'];
		foreach($_checkbox as $_valor){
		insere($_valor,$Login,$date,$hora);
	  }		  
	  $_checkbox = $_POST['qtd7'];
		foreach($_checkbox as $_valor){
		insere($_valor,$Login,$date,$hora);
	  }		  
	  $_checkbox = $_POST['qtd8'];
		foreach($_checkbox as $_valor){
		insere($_valor,$Login,$date,$hora);
	  }		  
	  $_checkbox = $_POST['qtd13'];
		foreach($_checkbox as $_valor){
		insere($_valor,$Login,$date,$hora);
	  }
	  $_checkbox = $_POST['qtd15'];
		foreach($_checkbox as $_valor){
		insere($_valor,$Login,$date,$hora);
	  }
	  // inserindo informaçoes
 	  if(empty($questao2)) {}else{
	  insere($questao2,$Login,$date,$hora);}
	  if(empty($questao4)) {}else{	  
      insere($questao4,$Login,$date,$hora);}
 	  if(empty($questao6)) {}else{	  
 	  insere($questao6,$Login,$date,$hora);}
 	  if(empty($questao9)) {}else{
	  insere($questao9,$Login,$date,$hora);}
	  if(empty($questao10)) {}else{	  
 	  insere($questao10,$Login,$date,$hora);}
 	  if(empty($questao11)) {}else{	  
 	  insere($questao11,$Login,$date,$hora);}
 	  if(empty($questao12)) {}else{	  
 	  insere($questao12,$Login,$date,$hora);}
	  if(empty($questao14)) {}else{	  
	  insere($questao14,$Login,$date,$hora);}
	  if(empty($questao1Quais)) {}else{  	  
	  $qtdQuestao = qtd1;
		 inserequais($qtdQuestao,$questao1Quais,$Login,$date,$hora);}	  
	  if(empty($questao3Quais)) {}else{
 		   $qtdQuestao = qtd3;
		 inserequais($qtdQuestao,$questao3Quais,$Login,$date,$hora);}
	  if(empty($questao7Quais)) {}else{
  		   $qtdQuestao = qtd7;
	 	 inserequais($qtdQuestao,$questao7Quais,$Login,$date,$hora);}
      if(empty($questao8Quais)) {}else{
		   $qtdQuestao = qtd8;
	 	 inserequais($qtdQuestao,$questao8Quais,$Login,$date,$hora);}
      if(empty($questao8Quais1)) {}else{
		   $qtdQuestao = qtd81;
	    inserequais($qtdQuestao,$questao8Quais1,$Login,$date,$hora);}
      if(empty($questao12Quais)) {}else{
		   $qtdQuestao = qtd12;
		inserequais($qtdQuestao,$questao12Quais,$Login,$date,$hora);}
	?>
     <script language="JavaScript">
     alert("Atualizado com sucesso!!");
	 window.location.assign("../parte_II.php");
     </script>
	<?	
		 	
	}
	?>
