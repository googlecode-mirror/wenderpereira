 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
 <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
  <?
      session_start();
      include "conexao.php";
      connect();
	  $date = date("d/m/y");
	  $hora = date("H:i");
      $Login 	=  $_SESSION["login"]; //recebe a sessão do login
	  $conluido =  $_SESSION["concluido"]; //recebe da sessão o andamento da pesquisa
      //------------------------------------------------------------------------------------
      // recebe os valores do form mapeamento

      $nome = trim($_POST["txtNome"]);
      $cargoInstituicao = trim($_POST["txtCargoInstituicao"]);
      $cpf = trim($_POST["txtCpf"]);
      $email = trim($_POST["txtEmail"]);
      $telefone = trim($_POST["txtTelefone"]);
	  
	  
	   if(empty($Login)) {
	   ?>
	    <script language="JavaScript">
		alert("Dados invalidos favor realizar o login novamente!");
		window.location.assign("../index.php");
		</script>
		<?
	   }else{
	   
	   }

	  
	  //------------------------------------------------------------------------------------
	  // confirma se o form já foi preenchido
	  	$sql = "select * from usuarios where login='$Login'";
		$Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
		while ($array_exibir = mysql_fetch_array($Resultado)) {
	    $_SESSION["concluido"] = $concluido = ($array_exibir['concluido']);
		}
	  //------------------------------------------------------------------------------------
  	  //
	 if ($_POST[avancar] == "avancar") { 
		if($concluido == -1) {
		  	  inseremapeamento($nome,$cargoInstituicao,$cpf,$email,$telefone,$Login,$date,$hora);
			  atualizaconcluir($Login);
			  } elseif ($concluido == 0){
			 ?>
             <script language="JavaScript">
			alert("Dados cadastrados com sucesso. Próxima etapa: Identificação da Instituição");
			window.location.assign("../identificacaodainstituicao_I.php");
			 </script>
			<?
				 
			  } elseif ($concluido == 1){
			 ?>
             <script language="JavaScript">
                 alert("Cadastramento da parte:Identificação da Instituição já foi realizado!");
                 window.location.assign("../programas_II.php");
             </script>
			<?			  
				 
				} elseif ($concluido == 2){
			 ?>
             <script language="JavaScript">
				 alert("Cadastramento da Parte: Programas já foi realizado!");
				 window.location.assign("../artistas_III.php");
			 </script>
			<?
			 			
			  } elseif ($concluido == 3){
			 ?>
             <script language="JavaScript">
				 alert("Cadastramento da Parte: Artistas já foi realizado!");
				 window.location.assign("../projetos_IV.php");
			 </script>
             <?					  
				 
			  } elseif ($concluido == 4){
				
			 ?>
			 
              <script language="JavaScript">
				  alert("O cadatro já foi concluído, caso queira atualizar clique na parte que desejada atualizar!");
				  window.location.assign("../projetos_IV.php");
			  </script>
			<? 				 
					}else{
						//else do teste igual a parte atualizado!
					  }
			  }else{
				   //else do teste se o solicitante clicou em avan&ccedil;ar!
			  }
			  function inseremapeamento(&$nome,&$cargoInstituicao,&$cpf,&$email,&$telefone,&$Login,&$date,&$hora){
			  $consulta = "INSERT INTO mapeamento (nome,cargointituicao,cpf,email,telefone,usuario,preenchido,data,hora)
			   VALUES 
			  ('$nome','$cargoInstituicao','$cpf','$email','$telefone','$Login','1','$date','$hora')";
			  $resultado = mysql_query($consulta)
			  or die ("--");
			  }
			  //------------------------------------------------------------------------------------
  			 function atualizaconcluir(&$Login){
			 $consulta = "UPDATE usuarios SET concluido='0' WHERE login='$Login';";
			 $resultado = mysql_query($consulta)
			 or die ("--");
		 ?>
	  <script language="JavaScript">
	      alert("Dados cadastrados com sucesso. Próxima etapa: Identificação da Instituição.");
		  window.location.assign("../identificacaodainstituicao_I.php");
	  </script>
	  <?
		}
	 ?>	
    <?
     if ($_POST[atualizar] == "atualizar") { 
	 
	$sql = "Delete FROM mapeamento Where usuario='$_SESSION[login]'";
	$resultado = mysql_query($sql)
	or die (mysql_error());
	 
			$consulta = "INSERT INTO mapeamento (nome,cargointituicao,cpf,email,telefone,usuario,preenchido,data,hora)
			   VALUES 
			  ('$nome','$cargoInstituicao','$cpf','$email','$telefone','$Login','1','$date','$hora')";
			  $resultado = mysql_query($consulta)
			  or die ("--");
	?>
     <script language="JavaScript">
         alert("Atualizado com sucesso!!");
         window.location.assign("../identificacaodainstituicao_I.php");
     </script>
	<?	
	  }
	 ?>
