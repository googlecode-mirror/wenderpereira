<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<? 
	session_start();
	header("Cache-Control: no-cache, must-revalidate");
	include "conexao.php";
	connect();
	$Login 	=  trim($_SESSION["login"]);
	$_POST[txtNome] = $txtNome;
	$_POST[txtCpf] = $txtCpf;
	$_POST[txtCargoInstituicao] = $txtCargoInstituicao;
	$_POST[txtTelefone] = $txtTelefone;
	$_POST[txtEmail] = $txtEmail;

	$sql = "select * from mapeamento Where usuario= '$Login'";
	$Resultado = mysql_query($sql) or die("Erro: " . mysql_error());

	while ($array_exibir = mysql_fetch_array($Resultado)) {
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

<title>Funarte - Portal das Artes</title>
</head>


<body>
<form id="form1" name="form1" method="post" action="sql\mapeamento.php">
 <div>
 
  <table width="80%" align="center" cellpadding="2" cellspacing="2" style="border:solid 1px #333333;">
       <tr>
      <th colspan="4" align="left" scope="row">
        <p align="center">
        <strong>Mapeamento dos Programas  de Residências Artísticas no Brasil</strong></p>
        <p align="center">
        </p>
      </th>
      </tr>
      <tr>
      <th width="136" align="center" scope="row"> <label id="lblnome">Nome:</label></th>
      <td colspan="3"><input name="txtNome" id="idFrmNome" value="<?php echo $txtNome;?>" type="text" size="94"/></td>
      </tr>
      <tr>
      <th height="32" align="center" scope="row"><label id="lblCargoInstituicao">Cargo na instituição:</label></th>
      <td colspan="3"><input name="txtCargoInstituicao" id="idFrmCargoIntituicao"
       value="<?php echo $txtCargoInstituicao;?>" type="text" size="94" /></td>
      </tr>
      <tr>
      <th align="center" scope="row"><label id="cpf">Cpf:</label></th>
      <td width="151">
          <input name="txtCpf"  maxlength="14" value="<?php echo $txtCpf;?>" type="text"
          onKeyPress="Mascara('cpf', window.event.keyCode, 'document.form1.txtCpf')";/>
      </td>
      <td width="74"><label id="email">
      <div align="center">Email:</div>
      </label>
      </td>
      <td width="375">
      <input type="text" name="txtEmail" value="<?php echo $txtEmail;?>" size="54"/>
      </td>
      </tr>
      <tr>
      <th align="center" scope="row">
      <label id="telefone">Telefone:( )</label>
      <td>
        <input name="txtTelefone" maxlength="15" value="<?php echo $txtTelefone;?>" type="text" 
         onKeyPress="SoNumero();Mascara('telefone', window.event.keyCode, 'document.form1.txtTelefone');"/>
       </td>
      <td>
       </td>
      <td>
        </td>
      </tr>
      <tr>
      <td width="136"></td>
      </tr>
      <tr>
      <th align="left" scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td width="0"></td>
      </tr>
      <tr>
      <th align="left" scope="row">&nbsp;</th>
      <td>	
       </td>
      <td>
        <span class="formu2">
        <input type="submit" name="cadastrar" value="avancar" class="botao" 
      onKeyPress="return handleEnter(this, event)">
        </span></td>
      <td>
      <input type="reset" value="Limpar" />
      </td>
      <td></td>
    </tr>
      <tr>
        <th align="left" scope="row">&nbsp;</th>
        <td></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td></td>
      </tr>
  </table>
  </div>
</form>
</body>
</html>