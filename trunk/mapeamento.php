<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<? 
	session_start();
	if (empty($_SESSION["login"])){
	header("Location: index.php");
	exit;
	} 
?>
<?
	include "conexao.php";
	connect();
	$Login = trim($_SESSION["login"]);
	$_POST[txtNome] = $txtNome;
	$_POST[txtCpf] = $txtCpf;
	$_POST[txtCargoInstituicao] = $txtCargoInstituicao;
	$_POST[txtTelefone] = $txtTelefone;
	$_POST[txtEmail] = $txtEmail;
	$sql = "select * from mapeamento Where usuario= '$Login'";
	$Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
	while ($array_exibir = mysql_fetch_array($Resultado)) 
	{
		$txtNome = ($array_exibir['nome']);
		$txtCargoInstituicao = ($array_exibir['cargointituicao']);
		$txtCpf = ($array_exibir['cpf']);
		$txtTelefone = ($array_exibir['telefone']);
		$txtEmail = ($array_exibir['email']);
	}
?>
   <!--<script src="js/jsValidate.js" type="text/javascript"></script>
   <script src="js/jquery-1.6.2.js" type="text/javascript"></script>
   <script src="js/jquery.validate.js" type="text/javascript"></script>
   <script src="js/jsvalidarMapemaneto.js" type="text/javascript"></script>
	 <style type="text/css">
      /* Estilizar os alertas */
      label.error{
          padding-left: 2px;
          color: red;
          font-weight: bold;
           }
      </style>-->
      
    <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
	<link rel="stylesheet" href="css/template.css" type="text/css"/>
	<script src="js/jquery-1.8.2.min.js" type="text/javascript">
	</script>
	<script src="js/languages/jquery.validationEngine-pt_BR.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#form1").validationEngine();
		});
	</script>
    <script src="js/jsValidate.js" type="text/javascript"></script> 

<title>Funarte - Portal das Artes</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="sql\mapeamento.php">
 <div>
  <br/>
   <table width="98%" align="center" cellpadding="2" cellspacing="2" style="border:solid 1px #333333;font-family: Verdana;">
       <tr bgcolor="#D2D2D2">
      <th colspan="4" align="left" scope="row">
        <div align="center">Mapeamento dos Programas  de Residências Artísticas no Brasil
          <br />
        </div>
        <label>
          <div align="center">Os campos com asterisco* são de preenchimento obrigatório:</div>
        </label>
        <div align="center"></div>
        <p>
         <label>&nbsp; Responsável pelo preenchimento das informações:</label>
        </p>
      </th>
      </tr>
      <tr bgcolor="#D2D2D2">
      <th width="160" align="center" scope="row"> <label id="lblnome">Nome*:</label></th>
      <td colspan="3"><input name="txtNome" id="idFrmNome" value="<?php echo $txtNome;?>" 
      type="text" size="94" class="validate[required] text-input"/>
      </td>
      </tr>
      <tr bgcolor="#D2D2D2">
      <th height="32" align="center" scope="row"><label id="lblCargoInstituicao">Cargo na instituição*:</label></th>
      <td colspan="3"><input name="txtCargoInstituicao" id="idFrmCargoIntituicao"
       value="<?php echo $txtCargoInstituicao;?>" type="text" size="94" class="validate[required] text-input"/>
       </td>
      </tr>
      <tr bgcolor="#D2D2D2">
      <th align="center" scope="row"><label id="cpf">Cpf:</label></th>
      <td width="151">
        <input name="txtCpf"  maxlength="14" value="<?php echo $txtCpf;?>" type="text"
        onKeyPress="Mascara('cpf', window.event.keyCode, 'document.form1.txtCpf')";/>
      </td>
      <td width="41"><label id="email">
      <div align="center">Email:</div>
      </label>
      </td>
      <td width="430">
      <input type="text" name="txtEmail" value="<?php echo $txtEmail;?>" size="46" 
      class="validate[custom[email]] text-input" type="text" name="optional" id="optional" />
      </td>
      </tr>
      <tr bgcolor="#D2D2D2">
      <th align="center" bgcolor="#D2D2D2" scope="row">
      <label id="telefone">Telefone:( )</label>
      <td>
        <input name="txtTelefone" maxlength="15" value="<?php echo $txtTelefone;?>" type="text" 
         onKeyPress="SoNumero();Mascara('telefone', window.event.keyCode, 'document.form1.txtTelefone');
         validateEmail_('form1','txtEmail');"/>
       </td>
      <td colspan="2">
      </td>
      </tr>
      <tr bgcolor="#D2D2D2">
      <td width="160"></td>
      </tr>
      <tr bgcolor="#D2D2D2">
      <th colspan="2" align="left" scope="row">&nbsp;</th>
      <td colspan="2">&nbsp;</td>
      </tr>
      <tr bgcolor="#C7C7C7">
      <th colspan="4" align="left" scope="row"><div align="center">
       <input type="submit" name="avancar" value="avancar" class="botao" onkeypress="return handleEnter(this, event);" /> 
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="submit" name="atualizar" value="atualizar" class="botao"/>
       <span class="formu2">
       </span></div></th>
      </tr>
      <tr bgcolor="#D2D2D2">
       <th colspan="4" align="left" scope="row">&nbsp;</th>
      </tr>
  </table>

</form>
</body>
</html>