  
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
			  echo("Cadastramento do mapeamento já foi realizado!");  
			  } elseif ($concluido == 1){
			  echo("Cadastramento da Parte I já foi realizado!");   
			  } elseif ($concluido == 2){
				echo("Cadastramento da Parte II já foi realizado!"); 
			  } elseif ($concluido == 3){
				echo("Cadastramento da Parte III já foi realizado!"); 
			  } elseif ($concluido == 4){
				echo("Cadastramento da Parte IV já foi realizado!"); 	
		 }else{
				//else do teste igual a parte atualizado!
			  }
	  }else{
		   //else do teste se o solicitante clicou em avançar!
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
      alert("ParteI cadastradra, clique na parte II para realizar o cadastro!");
      </script>
	  <?
		}
	 ?>	
    <?
     if ($_POST[atualizar] == "atualizar") { 
		echo("atualizado");
	$sqlquery = "UPDATE mapeamento SET 
		nome = '$_POST[txtNome]',
		cargointituicao= '$_POST[txtCargoInstituicao]',
		cpf = '$_POST[txtCpf]',
		telefone ='$_POST[txtTelefone]',
		email ='$_POST[txtEmail]'
	WHERE usuario = '$_SESSION[login]'"; 
	$process = mysql_query($sqlquery) or die("Erro: " . mysql_error());

	  }
	 ?>
