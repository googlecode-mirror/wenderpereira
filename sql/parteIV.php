﻿ <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
 <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<?
include "../conexao.php";
connect();
session_start();
$Login  =  trim($_SESSION["login"]);
$conluido =  $_SESSION["concluido"]; //recebe da sessão o andamento da pesquisa
$date = date("d/m/y");
$hora = date("H:i");

	   if(empty($Login)) {
	   ?>
	    <script language="JavaScript">
		alert("Dados invalidos favor realizar o login novamente!");
		window.location.assign("../index.php");
		</script>
		<?
	   }else{
	   
	   }
	   
//----------------------------
// confirma se o form já foi preenchido
$sql = "select * from usuarios where login='$Login'";
$Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
while ($array_exibir = mysql_fetch_array($Resultado))
{
	$_SESSION["concluido"] = $concluido = ($array_exibir['concluido']);
}
// inserindo informaçoes
$questao5Quais = $_POST[qtd5quais]; //246
$decs1 = $_POST[dec1]; //247
$decs2 = $_POST[dec2];
$decs3 = $_POST[dec3];
$questao1Quais = $_POST[qtd1quais];// 191
$questao2Quais = $_POST[qtd2quais];//214
$questao3Quais = $_POST[qtd3quais];//221
$questao4Quais = $_POST[qtd4quais];//235
$questao5Quais = $_POST[qtd5quais];//246
$qtdComentarios = strip_tags($_POST[qtdComentariosGerais]);//248
?>
<?
if ($_POST[avancar] == "avancar") {
	if($concluido == 3)
	{
		// inserindo CheckBox
		//----------------------------
		$_checkbox = $_POST['qtd1'];
		foreach($_checkbox as $_valor){
			insere($_valor,$Login,$date,$hora);
		}
		//----------------------------
		$_checkbox = $_POST['qtd2'];
		foreach($_checkbox as $_valor){
			insere($_valor,$Login,$date,$hora);
		}
		//----------------------------
		$_checkbox = $_POST['qtd3'];
		foreach($_checkbox as $_valor){
			insere($_valor,$Login,$date,$hora);
		}
		//----------------------------
		$_checkbox = $_POST['qtd4'];
		foreach($_checkbox as $_valor){
			insere($_valor,$Login,$date,$hora);
		}
		//----------------------------
		$_checkbox = $_POST['qtd5'];
		foreach($_checkbox as $_valor){
			insere($_valor,$Login,$date,$hora);
		}
		//------------------------------------------------------
		//Inserindo-Descricao-----------------------------------
		if(empty($decs1)) {
		}else{
			insere($decs1,$Login,$date,$hora);}
			if(empty($decs2)) {
			}else{
				insere($decs2,$Login,$date,$hora);}
				if(empty($decs3)) {
				}else{
					insere($decs3,$Login,$date,$hora);}
					//------------------------------------------------------
					if(empty($qtdComentarios)) {}else{
						$qtdQuestao = 248;
						inserequais($qtdQuestao,$qtdComentarios,$Login,$date,$hora);}
						//------------------------------------------------------
						if(empty($questao1Quais)) {
						}else{
							$qtdQuestao = 192;
							inserequais($qtdQuestao,$questao1Quais,$Login,$date,$hora);}
							if(empty($questao2Quais)) {
							}else{
								$qtdQuestao = qtd2;
								inserequais($qtdQuestao,$questao2Quais,$Login,$date,$hora);}
								if(empty($questao3Quais)) {
								}else{
									$qtdQuestao = qtd3;
									inserequais($qtdQuestao,$questao3Quais,$Login,$date,$hora);}
									if(empty($questao4Quais)) {
									}else{
										$qtdQuestao = qtd4;
										inserequais($qtdQuestao,$questao4Quais,$Login,$date,$hora);}
										if(empty($questao5Quais)) {
										}else{
											$qtdQuestao = 246;
											inserequais($qtdQuestao,$questao5Quais,$Login,$date,$hora);}

											atualizaconcluir($Login);
	} elseif ($concluido == 0){
		?>
<script language="JavaScript">
            alert("Retorne para o responsavel pelo preenchimento e realize o cadastro!");
			window.location.assign("../responsavelpelopreenchiment_o.php");
            </script>
		<?

	} elseif ($concluido == 1){
		?>
<script language="JavaScript">
    alert("Retorne para a parte:Identificação da Instituição e realize o cadastro!!");
			window.location.assign("../identificacaodainstituicao_I.php");
            </script>
		<?

	} elseif ($concluido == 2){
		?>
<script language="JavaScript">
            alert("Retorne para a parte:programas e realize o cadastro!!");
			window.location.assign("../programas_II.php");
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
	//else do teste se o solicitante clicou em avançar!
}
//função insere---------------------------------------------
	//fun��o insere---------------------------------------------
	function insere(&$resposta1,&$usuario,&$date,&$hora) {
		$consulta = "INSERT INTO pesquisa (id_resposta,id_usuario,id_parte,data,hora)
					 VALUES ('$resposta1','$usuario','4','$date','$hora')";;
		$resultado = mysql_query($consulta)
		or die (mysql_error());
		//fun��o insere---------------------------------------------
	}

function inserequais(&$qtdQuestao,&$resposta1,&$usuario,&$date,&$hora) {
	$consulta = "INSERT INTO pesquisaquais (id_resposta,resposta,id_usuario,id_parte,data,hora)
                 VALUES ('$qtdQuestao','$resposta1','$_SESSION[login]','4','$date','$hora')";
	$resultado = mysql_query($consulta)
	or die (mysql_error());
}
function atualizaconcluir(&$Login){
	$consulta = "UPDATE usuarios SET concluido='4' WHERE login='$Login';";
	$resultado = mysql_query($consulta)
	or die ("--");
	?>
<script language="JavaScript">
      alert("Cadastramento concluído!");
	  window.location.assign("../concluido.php");
      </script>
	<?

}
?>
<?
if ($_POST[atualizar] == "atualizar")
{

	$sql = "Delete FROM pesquisa Where id_usuario='$Login' and id_parte ='4'";
	$resultado = mysql_query($sql)
	or die (mysql_error());
		
	$sql1 = "Delete FROM pesquisaquais Where id_usuario='$Login' and id_parte ='4'";
	$resultado1 = mysql_query($sql1)
	or die (mysql_error());
		
	// inserindo CheckBox
	//----------------------------
	$_checkbox = $_POST['qtd1'];
	foreach($_checkbox as $_valor){
		insere($_valor,$Login,$date,$hora);
	}
	//----------------------------
	$_checkbox = $_POST['qtd2'];
	foreach($_checkbox as $_valor){
		insere($_valor,$Login,$date,$hora);
	}
	//----------------------------
	$_checkbox = $_POST['qtd3'];
	foreach($_checkbox as $_valor){
		insere($_valor,$Login,$date,$hora);
	}
	//----------------------------
	$_checkbox = $_POST['qtd4'];
	foreach($_checkbox as $_valor){
		insere($_valor,$Login,$date,$hora);
	}
	//----------------------------
	$_checkbox = $_POST['qtd5'];
	foreach($_checkbox as $_valor){
		insere($_valor,$Login,$date,$hora);
	}
	//------------------------------------------------------
	//Inserindo-Descricao-----------------------------------
	if(empty($decs1)) {}else{
		insere($decs1,$Login,$date,$hora);}
		if(empty($decs2)) {}else{
			insere($decs2,$Login,$date,$hora);}
			if(empty($decs3)) {}else{
				insere($decs3,$Login,$date,$hora);}
				//------------------------------------------------------
				if(empty($qtdComentarios)) {}else{
					$qtdQuestao = 248;
					inserequais($qtdQuestao,$qtdComentarios,$Login,$date,$hora);}
					//------------------------------------------------------
					if(empty($questao1Quais)) {
					}else{
						$qtdQuestao = 191;
						inserequais($qtdQuestao,$questao1Quais,$Login,$date,$hora);}
						if(empty($questao2Quais)) {
						}else{
							$qtdQuestao = 214;
							inserequais($qtdQuestao,$questao2Quais,$Login,$date,$hora);}
							if(empty($questao3Quais)) {
							}else{
								$qtdQuestao = 221;
								inserequais($qtdQuestao,$questao3Quais,$Login,$date,$hora);}
								if(empty($questao4Quais)) {
								}else{
									$qtdQuestao = 235;
									inserequais($qtdQuestao,$questao4Quais,$Login,$date,$hora);}
									if(empty($questao5Quais)) {
									}else{
										$qtdQuestao = 246;
										inserequais($qtdQuestao,$questao5Quais,$Login,$date,$hora);}
										?>
<script language="JavaScript">
		alert("Atualizado com sucesso!!");
		window.location.assign("../concluido.php");
     </script>
										<?
}
?>
