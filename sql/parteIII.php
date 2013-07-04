<?
session_start();
include "conexao.php";
connect();
$Login  =  trim($_SESSION["login"]);
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
//  echo($Login);
$questao1 = $_POST[qtd1];
$questao2 = $_POST[qtd2];
$questao3 = $_POST[qtd3];
$questao3Quais = $_POST[qtd3quais];
$questao4 = $_POST[qtd4];
$questao5 = $_POST[qtd5];
$questao6 = $_POST[qtd6];
$questao7Quais = $_POST[qtd7quais];
// inserindo informações

if ($_POST[avancar] == "avancar") {
	if($concluido == 2)
	{
		// inserindo CheckBox
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
											atualizaconcluir($Login);
	} elseif ($concluido == 0){
		?>
		<script language="JavaScript">
            alert("Retorne para a parte responsavel pelo preenchimento e realize o cadastro!");
			window.location.assign("../responsavelpelopreenchiment_o.php");
            </script>
		<?
		 
	} elseif ($concluido == 1){
		?>
		<script language="JavaScript">
		    alert("Retorne para a parte: Identificação da Instituição e realize o cadastro!!");
			window.location.assign("../identificacaodainstituicao_I.php");
            </script>
		<?

	} elseif ($concluido == 3){
		?>
		<script language="JavaScript">
            alert("Dados cadastrados com sucesso. Próxima etapa: Artistas.");
			window.location.assign("../projetos_IV.php");
            </script>
		<?

	} elseif ($concluido == 4){
		?>
		<script language="JavaScript">
              alert("O cadatro já foi concluído, caso queira atualizar clique na parte que desejada atualizar!");
			  window.location.assign("../projetos_IV.php");
            </script>
		<?php

	}else{
		//else do teste igual a parte atualizado!
	}
}else{
		//else do teste se o solicitante clicou em avan�ar!
	}
	//fun��o insere---------------------------------------------
	function insere(&$resposta1,&$usuario,&$date,&$hora) {
		$consulta = "INSERT INTO pesquisa (respostas,usuario,parte,data,hora)
					 VALUES ('$resposta1','$usuario','3','$date','$hora')";;
		$resultado = mysql_query($consulta)
		or die (mysql_error());
		//fun��o insere---------------------------------------------
	}
	function inserequais(&$qtdQuestao,&$resposta1,&$usuario,&$date,&$hora) {
		$consulta = "INSERT INTO pesquisaquais (questao,respostas,usuario,parte,data,hora)
					 VALUES ('$qtdQuestao','$resposta1','$_SESSION[login]','3','$date','$hora')";
		$resultado = mysql_query($consulta)
		or die (mysql_error());
	}
	function atualizaconcluir(&$Login){
		$consulta = "UPDATE usuarios SET concluido='3' WHERE login='$Login';";
		$resultado = mysql_query($consulta)
		or die ("--");
		?>
	<script language="JavaScript">
			  alert("Dados cadastrados com sucesso. Próxima etapa Projetos.");
			  window.location.assign("../projetos_IV.php");
	</script>
	<?
}
?>
<?
if ($_POST[atualizar] == "atualizar")
{
	$sql = "Delete FROM pesquisa Where usuario='$Login' and parte ='3'";
	$resultado = mysql_query($sql)
	or die (mysql_error());
	
	$sql = "Delete FROM pesquisaquais Where usuario='$Login' and parte ='3'";
	$resultado = mysql_query($sql)
	or die (mysql_error());
		
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
								// inserindo se n�o branco
								if(empty($questao3Quais)) {
								}else{
									$qtdQuestao = qtd3;
									inserequais($qtdQuestao,$questao3Quais,$Login,$date,$hora);}
									// inserindo se n�o branco
									if(empty($questao7Quais)) {
									}else{
										$qtdQuestao = qtd7;
										inserequais($qtdQuestao,$questao7Quais,$Login,$date,$hora);}
										//----------------------------
										$_checkbox = $_POST['qtd7'];
										foreach($_checkbox as $_valor){
											insere($_valor,$Login,$date,$hora);
										}
										?>
										<script language="JavaScript">
										alert("Atualizado com sucesso!!");
										window.location.assign("../projetos_IV.php");
										</script>
										<?

}
?>
