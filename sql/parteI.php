
<?
	session_start();
	include "conexao.php";
	connect();
	$Login 	=  trim($_SESSION["login"]);
	$conluido =  $_SESSION["concluido"]; //recebe da sess�o o andamento da pesquisa
	$date = date("d/m/y");
	$hora = date("H:i");
	$nomeInstituicao = trim($_POST["txtNome"]);
	$cnpj = trim($_POST["txtCnpj"]);
	$endereco = trim($_POST["txtEndereco"]);
	$municipio = trim($_POST["txtMunicipio"]);
	$unidadeFederativa = trim($_POST["cmbUnidadeFederativa"]);
	$cep = trim($_POST["txtCep"]);
	$telefone = trim($_POST["txtTelefone"]);
	$email = trim($_POST["txtEmail"]);
	//----------------------------------------------------	
	  // confirma se o form j� foi preenchido
	  	$sql = "select * from usuarios where login='$Login'";
		$Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
		while ($array_exibir = mysql_fetch_array($Resultado)) 
		{
	    $_SESSION["concluido"] = $concluido = ($array_exibir['concluido']);
		}
	
		$questao1 = $_POST[qtd1];
		$questao2 = $_POST[qtd2];
		$questao3 = $_POST[qtd3];
		$questao3Quais = $_POST[qtd3quais];
		$questao4 = $_POST[qtd4];
		$questao6 = $_POST[qtd6];
		if($concluido == 0){
		// inserindo informa�oes
		if(empty($questao1)) {}else{
			insere($questao1,$Login,$date,$hora);}
		if(empty($questao2)) {}else{
			insere($questao2,$Login,$date,$hora);}
		if(empty($questao3)) {}else{
			insere($questao3,$Login,$date,$hora);}
		if(empty($questao4)) {}else{
			insere($questao4,$Login,$date,$hora);}
		if(empty($questao4)) {}else{
			insere($questao6,$Login,$date,$hora);}
		if(empty($questao3Quais)) {}else{
		   $qtdQuestao = qtd3;
		inserequais($qtdQuestao,$questao3Quais,$Login,$date,$hora);}	
			//inserindo do check box
		$_checkbox = $_POST['qtd5'];
		  foreach($_checkbox as $_valor){
		  insere($_valor,$Login,$date,$hora); }
		  atualizaconcluir($Login);
		  } elseif ($concluido == 1){
		  echo("Cadastramento da Parte I j� foi realizado!");  
		  } elseif ($concluido == 2){
		  echo("Cadastramento da Parte II j� foi realizado!");   
		  } elseif ($concluido == 3){
			echo("Cadastramento da Parte III j� foi realizado!"); 
		  } elseif ($concluido == 4){
			echo("Cadastramento da Parte IV j� foi realizado!"); 
		  }else{
	  }
	//fun��o insere---------------------------------------------
	function insere(&$resposta1,&$usuario,&$date,&$hora) {
		$consulta = "INSERT INTO pesquisa (respostas,usuario,parte,data,hora)
		 VALUES ('$resposta1','$usuario','1','$date','$hora')";
		$resultado = mysql_query($consulta)
		or die (mysql_error());
		//fun��o insere---------------------------------------------
	}
	//fun��o insere Parte 1
	inseremapeamentoparte1($nomeInstituicao,$cnpj,$endereco,$municipio,
						   $unidadeFederativa,$cep,$telefone,$email,$Login,
						   $date,$hora);
	
	function inseremapeamentoparte1(&$nomeInstituicao,&$cnpj,&$endereco,&$municipio,
						   &$unidadeFederativa,&$cep,&$telefone,&$email,&$Login,
						   &$date,&$hora) 	    {
	$consulta = "INSERT INTO mapeamentoparteI 	      	
	(nomeintituicao,cnpj,endereco,municipio,unidadefederativa,cep,telefone,email,usuario,preenchido,data,hora)
	VALUES
	('$nomeInstituicao', '$cnpj', '$endereco', '$municipio', '$unidadeFederativa',
	 '$cep', '$telefone', '$email', '$Login', '1', '$date', '$hora')";
	$resultado = mysql_query($consulta)
	or die (mysql_error());
	}
	//fun��o insere Quais	
	function inserequais(&$qtdQuestao,&$resposta1,&$usuario,&$date,&$hora) {
		$consulta = "INSERT INTO pesquisaquais (questao,respostas,usuario,parte,data,hora)
		 VALUES ('$qtdQuestao','$resposta1','$Login','1','$date','$hora')";
		$resultado = mysql_query($consulta)
		or die (mysql_error());
	}

     function atualizaconcluir(&$Login){
	 $consulta = "UPDATE usuarios SET concluido='1' WHERE login='$Login';";
     $resultado = mysql_query($consulta)
     or die ("--");
		?>
	  <script language="JavaScript">
      alert("ParteI cadastradra, clique na parte II para realizar o cadastro!");
      </script>
	  <?
	}
 	