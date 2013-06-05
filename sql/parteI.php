<?
session_start();
include "conexao.php";
connect();
$Login 	=  trim($_SESSION["login"]);
$conluido =  $_SESSION["concluido"]; //recebe da sessão o andamento da pesquisa
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
// confirma se o form já foi preenchido
$sql = "select * from usuarios where login='$Login'";
$Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
while ($array_exibir = mysql_fetch_array($Resultado)) {
	$_SESSION["concluido"] = $concluido = ($array_exibir['concluido']);	}
	$questao0 = $_POST[qtd0];
	$questao1 = $_POST[qtd1];
	$questao2 = $_POST[qtd2];
	$questao3 = $_POST[qtd3];
	$questao3Quais = $_POST[qtd3quais];
	$questao4 = $_POST[qtd4];
	$questao6 = $_POST[qtd6];
	if ($_POST[avancar] == "avancar") {
		if($concluido == 0){
			// inserindo informaçoes
			if(empty($questao0)) {}else{
				insere($questao0,$Login,$date,$hora);}
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
											inseremapeamentoparte1($nomeInstituicao,$cnpj,$endereco,$municipio,
											$unidadeFederativa,$cep,$telefone,$email,$Login,$date,$hora);
		} elseif ($concluido == 1){
			?>
<script language="JavaScript">
             alert("Cadastramento da Parte I já foi realizado!");
			 window.location.assign("../parte_II.php");
	         </script>
			<?php

		} elseif ($concluido == 2){
			?>
<script language="JavaScript">
             alert("Cadastramento da Parte II já foi realizado!");
			 window.location.assign("../parte_III.php");
             </script>
			<?php

		} elseif ($concluido == 3){
			?>
<script language="JavaScript">
              alert("Cadastramento da Parte III já foi realizado!");
			  window.location.assign("../parte_IV.php");
              </script>
			<?php

		} elseif ($concluido == 4){
			?>
<script language="JavaScript">
              alert("O cadatro já foi concluído, caso queira atualizar clique na parte que desejada atualizar!");
			  window.location.assign("../parte_IV.php");
              </script>
			<?php

		}else{ //else do teste igual a parte atualizado!
		}
	}else{  	//else do teste se o solicitante clicou em avançar!
	}
	//função insere ----------------------------------------------------------------------------------------------
	function insere(&$resposta1,&$usuario,&$date,&$hora) {
		$consulta = "INSERT INTO pesquisa (respostas,usuario,parte,data,hora)
		 VALUES ('$resposta1','$usuario','1','$date','$hora')";
		$resultado = mysql_query($consulta)
		or die (mysql_error());
		//função insere-----------------------------------------------------------------------------------------------
	}
	//função insere Parte 1 --------------------------------------------------------------------------------------
	function inseremapeamentoparte1(&$nomeInstituicao,&$cnpj,&$endereco,&$municipio,
	&$unidadeFederativa,&$cep,&$telefone,&$email,&$Login,&$date,&$hora){
		$consulta = "INSERT INTO mapeamentoparteI
		(nomeintituicao,cnpj,endereco,municipio,unidadefederativa,cep,telefone,email,usuario,preenchido,data,hora)
		VALUES
		('$nomeInstituicao', '$cnpj', '$endereco', '$municipio', '$unidadeFederativa',
		 '$cep', '$telefone', '$email', '$Login', '1', '$date', '$hora')";
		$resultado = mysql_query($consulta)
		or die (mysql_error());
	}
	//função insere Quais ----------------------------------------------------------------------------------------
	function inserequais(&$qtdQuestao,&$resposta1,&$usuario,&$date,&$hora) {
		$consulta = "INSERT INTO pesquisaquais (questao,respostas,usuario,parte,data,hora)
		 VALUES ('$qtdQuestao','$resposta1','$_SESSION[login]','1','$date','$hora')";
		$resultado = mysql_query($consulta)
		or die (mysql_error());
	}
	function atualizaconcluir(&$Login){
	 $consulta = "UPDATE usuarios SET concluido='1' WHERE login='$Login';";
	 $resultado = mysql_query($consulta)
	 or die ("--");
	 ?>
<script language="JavaScript">
	      alert("ParteI cadastrada, clique na parte II para realizar o cadastro!");
	      window.location.assign("../parte_II.php");
	  </script>
	 <?

	}
	?>
	<?
	if ($_POST[atualizar] == "atualizar")
	{
	$unidadeFederativa = $_POST["cmbUnidadeFederativa"];
		$sql = "Delete FROM pesquisa Where usuario='$Login' and parte ='1'";
		$resultado = mysql_query($sql)
		or die (mysql_error());

		$sql1 = "Delete FROM mapeamentoparteI Where usuario='$Login' and preenchido ='1'";
		$resultado1 = mysql_query($sql1)
		or die (mysql_error());

		//inseremapeamentoparte1($nomeInstituicao,$cnpj,$endereco,$municipio,
		//$unidadeFederativa,$cep,$telefone,$email,$Login,$date,$hora);

		$consulta = "INSERT INTO mapeamentoparteI
		(nomeintituicao,cnpj,endereco,municipio,unidadefederativa,cep,telefone,email,usuario,preenchido,data,hora)
		VALUES
		('$nomeInstituicao', '$cnpj', '$endereco', '$municipio', '$unidadeFederativa',
		 '$cep', '$telefone', '$email', '$Login', '1', '$date', '$hora')";
		$resultado = mysql_query($consulta)
		or die (mysql_error());
		
		// inserindo informaçoes-----------------------------------------------------------------------------------
		if(empty($questao0)) {}else{
			insere($questao0,$Login,$date,$hora);}
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
	   					//inserindo do check box ---------------------------------------------------------------------------------
	   					$_checkbox = $_POST['qtd5'];
	   					foreach($_checkbox as $_valor){
	   						insere($_valor,$Login,$date,$hora); }
	   						?>
<script language="JavaScript">
	    alert("Atualizado com sucesso!!");
		window.location.assign("../parte_II.php");
    	</script>
	   						<?
	}
	?>
