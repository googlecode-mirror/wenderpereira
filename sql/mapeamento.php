  
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
	  	$sql = "select * from usuarios where login='wender'";
		$Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
		while ($array_exibir = mysql_fetch_array($Resultado)) {
	    $_SESSION["concluido"] = $concluido = ($array_exibir['concluido']);
		}
	  //------------------------------------------------------------------------------------
  	  //		
	  if($concluido < 0) {
      //------------------------------------------------------------------------------------
      $consulta = "INSERT INTO mapeamento (nome,cargointituicao,cpf,email,telefone,usuario,preenchido,data,hora)
       VALUES 
      ('$nome','$cargoInstituicao','$cpf','$email','$telefone','$Login','1','$date','$hora')";
      $resultado = mysql_query($consulta)
	  or die ("--");
      //------------------------------------------------------------------------------------
	  //Salava o andamento do preenchimento do formulario
      $consulta = "UPDATE usuarios SET concluido='0' WHERE login='$Login';";
      $resultado = mysql_query($consulta)
      or die ("--");
      //------------------------------------------------------------------------------------
	  }else{
		echo("Cadastramento já realizado!");  
	  }
 	 ?>