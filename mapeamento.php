
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?
	include "conexao.php";
	connect();
	$Login = trim($_SESSION["login"]);
	$_POST[txtNome] = $txtNome;
	$_POST[txtCpf] = $txtCpf;
	$_POST[txtCargoInstituicao] = $txtCargoInstituicao;
	$_POST[txtTelefone] = $txtTelefone;
	$_POST[txtEmail] = $txtEmail;
	$sql = "select * from mapeamento Where id_usuario= '$Login'";
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
   <script src="js/jsValidate.js" type="text/javascript"></script>
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
      </style>
      
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
<form id="form1" name="form1" method="post" action="sql/mapeamento.php">
 <div>
  <br/>
   <table width="98%" class="table table-hover" align="center" cellpadding="2" cellspacing="2" style="font-family: Verdana;">
       <tr>
      <th colspan="4" align="left" scope="row">
        <label><h4><i class="icon-plus-sign"></i>Responsável pelo preenchimento das informações:</h4></label>
        <label>
          <h5>Os campos com asterisco* são de preenchimento obrigatório:</h5>
        </label>
         </th>
      </tr>
      <tr>
      <th width="160" align="center" scope="row"> <label id="lblnome">Nome*:</label></th>
      <td colspan="3"><input name="txtNome" id="idFrmNome" value="<?php echo $txtNome;?>" 
      type="text" size="94" class="validate[required] text-input"/>
      </td>
      </tr>
      <tr>
      <th height="32" align="center" scope="row"><label id="lblCargoInstituicao">Cargo na instituição*:</label></th>
      <td colspan="3"><input name="txtCargoInstituicao" id="idFrmCargoIntituicao"
       value="<?php echo $txtCargoInstituicao;?>" type="text" size="94" class="validate[required] text-input"/>
       </td>
      </tr>
      <tr>
      <th align="center" scope="row"><label id="cpf">CPF:</label></th>
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
      <tr>
      <th align="center" scope="row">
      <label id="telefone">Telefone:( )</label>
      <td>
        <input name="txtTelefone" maxlength="15" value="<?php echo $txtTelefone;?>" type="text" 
         onKeyPress="SoNumero();Mascara('telefone', window.event.keyCode, 'document.form1.txtTelefone');"/>
       </td>
      <td colspan="2">
      </td>
      </tr>
      <tr>
      <th colspan="4" align="left" scope="row">
              <div align="center">
               <button type="submit" name="atualizar" value="atualizar"  class="btn btn-info"><i class="icon-refresh icon-white"></i> atualizar</button>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <button type="submit" name="avancar" value="avancar"  class="btn btn-success" onkeypress="return handleEnter(this, event);"><i class="icon-arrow-right icon-white"></i> avancar</button>
              </div>
			
          </th>
      </tr>
      </table>
        <div class="progress progress-danger">
          <div class="bar" style="width: 8%;">8% concluído</div>
        </div>
</form>
</body>
</html>