﻿<? 
include "header.php"; 
include "../conexao2.php";
$conn = connect2();
@session_start(); // Inicializa a sessão
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
</br>
	<div class="alert alert-info">
	  <button type="button" class="close" data-dismiss="alert">×</button>
	  <h4>Ajuda!</h4>
		Selecione as opções que você visualizar e clique em mostrar...
	</div>

<div id="load_cidades" name="load_cidades"class="span3">

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
	$Resultado = mysqli_query($conn,$sql)or die(mysqli_error());
	$numrow = mysqli_num_rows($Resultado);
	if($numrow > 0)
	{
        while($array_exibir=mysqli_fetch_array($Resultado))
        {
        ?>
        <option value="<?echo $array_exibir['unidadefederativa']?>">
        <? echo ($array_exibir['unidadefederativa'])?>
        </option>
        <?
        }
        }
        ?>
	</select>
 </div>

 <div class="span3">
     <label for="L"><b>Pergunta</b></label>
     <!--==============================================================================
        COMBO-BOX COM OS PEDIDOS EM ABERTO
        ===========================================================================-->
	<select name="pergunta" id="idtxtPergunta" class="span9" size="24">
	<option  value="<?php echo $txtPergunta;?>">
	<? echo $txtsetor ?>
	</option>
	<?
	$sql = "SELECT * FROM pergunta;";
	$Resultado = mysqli_query($conn,$sql)or die(mysqli_error());
	$numrow = mysqli_num_rows($Resultado);
	if($numrow > 0)
	{
       while($array_exibir=mysqli_fetch_array($Resultado))
        {
        ?>
        <option value="<?echo $array_exibir['id_pergunta']?>">
        <? echo ($array_exibir['id_pergunta'])?>-
        <? echo (utf8_encode ($array_exibir['pergunta']))?>
        </option>
        <?
        }
        }
        ?>     
</select>                               
 </div>
 </div>
</br>

<div class="span12">
<hr>
	<div align="center">
    <input class="btn btn-success" name="mostra" type="submit" value="Mostra">
    <input class="btn" type="reset" value="Limpa">
	</div>
 </div>	
	<script src="bootstrap/js/bootstrap-dropdown.js"></script>
	<script src="bootstrap/js/bootstrap-collapse.js"></script>
	</div>
	</div>
	<? //include "footer.php" ?>
</form>