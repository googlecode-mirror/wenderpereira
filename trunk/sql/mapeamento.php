  <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
  <?
      session_start();
      include "conexao.php";
      connect();
	  $date = date("d/m/y");
	  $hora = date("H:i");
      $Login 	=  $_SESSION["login"]; //recebe a sess�o do login
	  $conluido =  $_SESSION["concluido"]; //recebe da sess�o o andamento da pesquisa
      //------------------------------------------------------------------------------------
      // recebe os valores do form mapeamento
      $nome = trim($_POST["txtNome"]);
      $cargoInstituicao = trim($_POST["txtCargoInstituicao"]);
      $cpf = trim($_POST["txtCpf"]);
      $email = trim($_POST["txtEmail"]);
      $telefone = trim($_POST["txtTelefone"]);
	  //------------------------------------------------------------------------------------
	  // confirma se o form j� foi preenchido
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
			alert("Cadastramento do mapeamento j� foi realizado!");
			 </script>
			<?php
				header ("location: inicial.php");
			  } elseif ($concluido == 1){
			 ?>
             <script language="JavaScript">
             alert("Cadastramento da Parte I j� foi realizado!");
             </script>
			<?php			  
				header ("location: inicial.php");
				} elseif ($concluido == 2){
			 ?>
             <script language="JavaScript">
             alert("Cadastramento da Parte II j� foi realizado!");
             </script>
			<?php
			header ("location: inicial.php");			
			  } elseif ($concluido == 3){
			 ?>
             <script language="JavaScript">
             alert("Cadastramento da Parte III j� foi realizado!");
             </script>
             <?php					  
				header ("location: inicial.php");
			  } elseif ($concluido == 4){
             ?>
              <script language="JavaScript">
              alert("O cadatro j� foi conclu�do, caso queira atualizar clique na parte que desejada atualizar!");
		      </script>
            <?php
				header ("location: inicial.php");
			}else{
				//else do teste igual a parte atualizado!
			  }
	  }else{
		   //else do teste se o solicitante clicou em avan�ar!
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
      alert("parte Mapeamento cadastradra, entre na parte I para realizar o cadastro!");
      window.location = 'Mapeamento_residencias/parte_I.php';
      </script>
	  <?
		}
	 ?>	
    <?
     if ($_POST[atualizar] == "atualizar") { 
	$sqlquery = "UPDATE mapeamento SET 
		nome = '$_POST[txtNome]',
		cargointituicao= '$_POST[txtCargoInstituicao]',
		cpf = '$_POST[txtCpf]',
		telefone ='$_POST[txtTelefone]',
		email ='$_POST[txtEmail]'
	WHERE usuario = '$_SESSION[login]'"; 
	$process = mysql_query($sqlquery) or die("Erro: " . mysql_error());
	?>
     <script language="JavaScript">
     alert("Atualizado com sucesso!!");
     </script>
	<?	
	  }
	 ?>
