<? include "header.php"; 
include "../conexao.php";
connect();
 @session_start(); // Inicializa a sess䯍
?>
<!--=============================================================
	BUSCA AJAX
	=============================================================-->
<script	src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<!--=============================================================
	SCRIPT JQUEY VALIDATION
	=============================================================-->
<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" />
<link rel="stylesheet" href="css/template.css" type="text/css" />
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script	src="js/languages/jquery.validationEngine-pt_BR.js"	type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script	src="js/jsValidate.js" type="text/javascript"></script>
<!--=============================================================
	SCRIPT JQUEY VALIDATION
	=============================================================-->
<script>
    jQuery(document).ready(function () {  // binds form submission and fields to the validation engine
    jQuery("#form1").validationEngine();
	});
</script>

<form name="form1" id="form1" method="post" action="buscapersonalizada.php">
<div class="span12">
<div class="span3">
     <label for="L"><b>Unidade Federativa</b></label>
     <!--==============================================================================
        COMBO-BOX COM OS PEDIDOS EM ABERTO
        ===========================================================================-->
				<select name="unidadeFederativa" id="L" size="24">
					<option value="<?php echo $txtUnidadeFederativa;?>">
					<? echo $txtUnidadeFederativa ?>
					</option>
					<?
					$sql = "SELECT distinct map.unidadefederativa
							FROM 
							mapeamentopartei map
							WHERE map.unidadefederativa != ''";
					mysql_query("SET NAMES 'utf8'");
					mysql_query('SET character_set_connection=utf8');
					mysql_query('SET character_set_client=utf8');
					mysql_query('SET character_set_results=utf8');
					$Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
					$i=0;
					$data = array();
					while ($array_exibir = mysql_fetch_array($Resultado))
					{					
					?>
					<option value="<?echo $array_exibir['unidadefederativa']?>">
					<? echo ($array_exibir['unidadefederativa'])?>
					</option>
					<?
					$i++;
					}
					?>
				</select>
 </div>
 <div class="span3">
     <label for="L"><b>Pergunta</b></label>
     <!--==============================================================================
        COMBO-BOX COM OS PEDIDOS EM ABERTO
        ===========================================================================-->
				<select name="pergunta" id="idtxtPergunta" class="span10" size="24">
					<option  value="<?php echo $txtPergunta;?>">
					<? echo $txtsetor ?>
					</option>
					<?
					$sql = "SELECT * FROM pergunta;";
					mysql_query("SET NAMES 'utf8'");
					mysql_query('SET character_set_connection=utf8');
					mysql_query('SET character_set_client=utf8');
					mysql_query('SET character_set_results=utf8');
					$Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
					$i=0;
					$data = array();
					while ($array_exibir = mysql_fetch_array($Resultado))
					{
						?>
					<option value="<?echo $array_exibir['id_pergunta']?>">
					<? echo ($array_exibir['id_pergunta'])?>-
					<? echo ($array_exibir['pergunta'])?>
					</option>
					<?
					$i++;
					}
					?>
				</select>
 </div>
 </div>
  <div class="span12">
  <div class="span3">
   </div>
<div class="span3">
     <label for="L"><b>Agrupar por</b></label>
     <!--==============================================================================
        COMBO-BOX COM OS PEDIDOS EM ABERTO
        ===========================================================================-->
				<select name="agruparpor" id="ixtxtagruparpor" class="span10" size="3">
				<option value="id_parte" selected="">Parte</option>
				<option value="id_pergunta">Pergunta</option>
				<option value="id_repostas">Respostas</option>
				</select>
 </div>
 </div>
</br>
<div class="span12">
	<div align="center">
    <input class="mostra" name="mostra" type="submit" value="Mostra">
    <input class="limpa" name="limpa" type="reset" value="Limpa">
	</div>
 </div>	
	<script src="bootstrap/js/bootstrap-dropdown.js"></script>
	<script src="bootstrap/js/bootstrap-collapse.js"></script>
	</div>
	</div>
	<? //include "footer.php" ?>
</form>
