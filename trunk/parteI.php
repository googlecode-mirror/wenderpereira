<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<? 
session_start();
include "conexao.php";
connect();
$Login 	=  trim($_SESSION["login"]);
$_POST[txtNome] = $txtNome;
$_POST[txtCnpj] = $txtCnpj;
$_POST[txtEndereco] = $txtEndereco;
$_POST[txtMunicipio] = $txtMunicipio;
$_POST[txtCep] = $txtCep;
$_POST[txtTelefone] =  $txtTelefone;
$_POST[txtEmail] = $txtEmail; 
$_POST[cmbUnidadeFederativa] = $cmbUnidadeFederativa;
$sql = "select * from mapeamentoparteI  Where usuario= '$Login'";
$Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
 while ($array_exibir = mysql_fetch_array($Resultado)) {
	$txtNome = ($array_exibir['nomeintituicao']);
	$txtCnpj = ($array_exibir['cnpj']);
	$txtEndereco = ($array_exibir['endereco']);
	$txtMunicipio = ($array_exibir['municipio']);
	$txtCep = ($array_exibir['cep']);
	$txtTelefone = ($array_exibir['telefone']);
	$txtEmail = ($array_exibir['email']);
	$cmbUnidadeFederativa = ($array_exibir['unidadefederativa']);
}
?>
<? function getArray(&$Login){
$sql = "select * from pesquisa Where usuario= '$Login' and parte ='1';";
$Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
$i=0;
$resposta = array();
while ($array_exibir = mysql_fetch_array($Resultado)) {
	$resposta[$i] = ($array_exibir['respostas']);
	$i++;
}
return $resposta;
}
$meuArray = getArray($Login);
?>
<title>Funarte - Portal das Artes</title>

<!--<script src="js/jsValidate.js" type="text/javascript"></script>
<script src="js/jquery-1.6.2.js" type="text/javascript"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>
<script src="js/jsvalidarParteII.js" type="text/javascript"></script>
        
	 <style type="text/css">
     /* Estilizar os alertas */
     label.error{
       padding-left: 2px;
       color: red;
       font-weight: bold;
     }
     </style>
-->

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
</head>
<body>
<form name="form1" id="form1" method="post"  action="sql\parteI.php">
  <table width="80%" align="center" cellpadding="2" cellspacing="2" style="border:solid 1px #333333; font-family: Verdana, Geneva, sans-serif;">
  <tr bgcolor="#C7C7C7">
  <td colspan="2">
  <p align="center">
  <strong><em>PARTE  I</em></strong></p>
  <p align="center"><strong><em>IDENTIFICAÇÃO  DA INSTITUIÇÃO REALIZADORA DO PROGRAMA DE RESIDENCIA ARTÍSTICA </em>
  </strong></p>
  <p><strong>Os campos  com asterisco* são de preenchimento obrigatório:</strong></p></td>
  </tr>
  <tr>
  <td width="27%" bgcolor="#C7C7C7"><label id=lblNomeInstituicao">• Nome da instituição*:</label>
  </td>
  <td width="73%" bgcolor="#C7C7C7">
  <input name="txtNome" id="idFrmNome" value="<?php echo $txtNome;?>" type="text" size="84" class="validate[required] text-input"/>
  </td>
  </tr>
  <tr bgcolor="#C7C7C7">
  <td>
  <label>• CNPJ:</label>
  </td>
  <td>
  <input name="txtCnpj" maxlength="18" value="<?php echo $txtCnpj;?>" type="text" size="17"
    onkeypress="SoNumero();Mascara('cnpj', window.event.keyCode, 'document.form1.txtCnpj');"/>
  <div style="display:inline;">
  <a href="javascript:marcarCheck();">
  </a>		        
  </div>
  </td>
  </tr>
  <tr>
  <td bgcolor="#C7C7C7"><label>• CEP*:</label>
  </td>
  <td bgcolor="#C7C7C7">
  <input name="txtCep" id="idFrmCep" maxlength="10" value="<?php echo $txtCep;?>" type="text"
  onkeypress="SoNumero();Mascara('cep', window.event.keyCode, 'document.form1.txtCep');"
  class="validate[required] text-input"/>
  
  <div style="display:inline;">
  <a href="javascript:findCEP()">
   <img src="images/busca.png" alt="Pesquisar" border="0" />
  </a>
  </div>
  <div id="ajax-loading" style="display:none;">
  <img src="loading.gif"/>
  </div>
  </td>
  </tr>
  <tr>
  <td bgcolor="#C7C7C7">
  <label>• Endereço*:</label>
  </td>
  <td bgcolor="#C7C7C7"><input name="txtEndereco" onClick="javascript:findCEP();"id="idFrmEndereco" value="<?php echo $txtEndereco;?>" type="text" size="84" class="validate[required] text-input"/>		       
  </td>
  </tr>
  <tr>
  <td bgcolor="#C7C7C7">
  <label id="municipio">• Município*:</label>
  </td>
  <td bgcolor="#C7C7C7">
  <input name="txtMunicipio" id="ifFrmMunicipio" value="<?php echo $txtMunicipio;?>" type="text" size="50" class="validate[required] text-input"/>
  </td>
  </tr>
  <tr>
  <td bgcolor="#C7C7C7">
  <label>• Unidade Federativa*:</label>
  </td>
  <td bgcolor="#C7C7C7">
  <select name="cmbUnidadeFederativa" size="1" id="cmbUnidadeFederativa" class="validate[required]">
  <option value=""><? echo $cmbUnidadeFederativa ?> </option>
  <option value="AC">AC</option>
  <option value="AL">AL</option>
  <option value="AM">AM</option>
  <option value="AP">AP</option>
  <option value="BA">BA</option>
  <option value="CE">CE</option>
  <option value="DF">DF</option>
  <option value="ES">ES</option>
  <option value="GO">GO</option>
  <option value="MA">MA</option>
  <option value="MG">MG</option>
  <option value="MS">MS</option>
  <option value="MT">MT</option>
  <option value="PA">PA</option>
  <option value="PB">PB</option>
  <option value="PE">PE</option>
  <option value="PI">PI</option>
  <option value="PR">PR</option>
  <option value="RJ">RJ</option>
  <option value="RN">RN</option>
  <option value="RO">RO</option>
  <option value="RR">RR</option>
  <option value="RS">RS</option>
  <option value="SC">SC</option>
  <option value="SE">SE</option>
  <option value="SP">SP</option>
  <option value="TO">TO</option>
  </select>
  </td>     
  </tr>
  <tr>
  <td bgcolor="#C7C7C7"><label>• Correio eletrônico (e-mail):</label></td>
  <td bgcolor="#C7C7C7">
  <input name="txtEmail" id="idEmail" value="<?php echo $txtEmail;?>" type="text" size="80" 
  class="validate[custom[email]] text-input"/>
  </td>
  </tr>
  <tr>
  <td height="26" bgcolor="#C7C7C7"><label>• Telefone: </label></td>
  <td bgcolor="#C7C7C7">
  <input name="txtTelefone" maxlength="14" value="<?php echo $txtTelefone;?>" type="text" 
  onKeyPress="SoNumero();Mascara('telefone', window.event.keyCode, 'document.form1.txtTelefone');"/>
  </td>
  <tr bgcolor="#D2D2D2">
  <td colspan="2" align="left" class="formu2">
  <p>
  <label>• A instituição tem sede própia*?:</label>
  </p>
  <p>
  <label>
<input type="radio" name="qtd1" <? if(in_array("1a",$meuArray)){echo "checked";}?>  value="1a" class="validate[required] radio" />
Sim</label>
  <label>
  <input type="radio" name="qtd1" <? if(in_array("1b", $meuArray)){ echo "checked";}?> value="1b" class="validate[required] radio" />
  Não</label>
  </p>
  </td>
  </tr>
  <tr bgcolor="#C7C7C7">
  <td colspan="2" align="left" class="formu2">
  <label>• A instituição tem fins lucrativos*?:</label>
  <label>
  <br />
  <br />
  <input type="radio" name="qtd2" <? if(in_array("2a", $meuArray)){ echo "checked";}?> value="2a" class="validate[required] radio" />
  Sim</label>
  <label>
  <input type="radio" name="qtd2" <? if(in_array("2b", $meuArray)){ echo "checked";}?> value="2b" class="validate[required] radio" />
  Não</label>
  </td>
  </tr>
  <tr bgcolor="#D2D2D2">
  <td colspan="2" align="left" class="formu2">
  <br/>
  <label>• Regime jurídico da instituição (marque apenas 1 item)*:</label>
  <p>
  <label>
  <input type="radio" name="qtd3" <? if(in_array("3a", $meuArray)){ echo "checked";}?> value="3a" class="validate[required] radio" />
  Administração pública direta</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("3b", $meuArray)){ echo "checked";}?> value="3b" class="validate[required] radio" />
  Entidade/empresa privada</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("3c", $meuArray)){ echo "checked";}?> value="3c" class="validate[required] radio" />
  Fundação pública federal</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("3d", $meuArray)){ echo "checked";}?> value="3d" class="validate[required] radio" />
  Fundação pública estadual</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("3e", $meuArray)){ echo "checked";}?> value="3e" class="validate[required] radio" />
  Fundação pública municipal</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("3f", $meuArray)){ echo "checked";}?> value="3f" class="validate[required] radio" />
  Autarquia</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("3g", $meuArray)){ echo "checked";}?> value="3g" class="validate[required] radio" />
  Empresa pública/ sociedade de economia mista</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("3h", $meuArray)){ echo "checked";}?> value="3h" class="validate[required] radio" />
  ONGs</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("3i", $meuArray)){ echo "checked";}?> value="3i" class="validate[required] radio" />
  Organização social</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("3j", $meuArray)){ echo "checked";}?> value="3j" class="validate[required] radio" />
  Cooperativa/ Associação de Classe/ Sindicato</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("3k", $meuArray)){ echo "checked";}?> value="3k" class="validate[required] radio" />
  Outras</label>
  <label>Quais?</label>
  <input name="qtd3quais" value="<?php echo $_POST[qtd3quais];?>" type="text" />
  <br/>
  </p>
  </td>
  </tr>
  <br/>
  <tr bgcolor="#C7C7C7">
  <td colspan="2" align="left" class="formu2">
  </td>
  </tr>
  <tr bgcolor="#C7C7C7">
  <td colspan="2" align="left" class="formu2">
  <div align="left">
  <label>• A instituição atua somente na área cultural? (marque apenas 1 item)*:</label>
  <br />
  <label>
  <input type="radio" name="qtd4" <? if(in_array("4a", $meuArray)){ echo "checked";}?> value="4a" class="validate[required] radio" />
  Sim, o ramo de atuação é somente na cultura, não realizando outro tipo de atuação</label>
  <br />
  <label>
  <input type="radio" name="qtd4" <? if(in_array("4b", $meuArray)){ echo "checked";}?> value="4b" class="validate[required] radio" />
  Sim, o ramo de atuação principal é na cultura, porém atua também em outras atividades econômicas</label>
  <br />
  <label>
  <input type="radio" name="qtd4" <? if(in_array("4c", $meuArray)){ echo "checked";}?> value="4c" class="validate[required] radio" />
  Não, a cultura é apenas uma das áreas da instituição, não sendo a atividade principal </label>
  </div>
  </td>
  </tr>
  <tr bgcolor="#D2D2D2">
  <td colspan="2" align="left" bgcolor="#D2D2D2" class="formu2">
  <div align="left">
  <label>• Qual a fonte de recursos da instituição (marque quantos itens julgar necessário)*:</label>
  <br />
  <input name="qtd5[]" type="checkbox" value="5a" <? if (in_array("5a", $meuArray)){ echo "checked";}?> 
  class="validate[minCheckbox[1]] checkbox"/> 
  <label>orçamento próprio</label>
  <br/>
  <input name="qtd5[]" type="checkbox" value="5b" <? if(in_array("5b", $meuArray)){ echo "checked";}?> class="validate[minCheckbox[1]] checkbox"/>
  <label>transferências governamentais </label>
  <br/>
  <input name="qtd5[]" type="checkbox" value="5c" <? if(in_array("5c", $meuArray)){ echo "checked";}?> class="validate[minCheckbox[1]] checkbox"/>
  <label>fundos: municipais, estaduais e federais </label>
  <br/>
  <input name="qtd5[]" type="checkbox" value="5d" <? if(in_array("5d", $meuArray)){ echo "checked";}?> class="validate[minCheckbox[1]] checkbox"/>
  <label>patrocínio/ financiamento privado </label>
  <br/>
  <input name="qtd5[]" type="checkbox" value="5e" <? if(in_array("5e", $meuArray)){ echo "checked";}?> class="validate[minCheckbox[1]] checkbox"/>
  <label>recursos internacionais </label>
  <br/>
  <input name="qtd5[]" type="checkbox" value="5f" <? if(in_array("5f", $meuArray)){ echo "checked";}?> class="validate[minCheckbox[1]] checkbox"/>
  <label>doações/ ajudas externas </label>
  <br/>
  <input name="qtd5[]" type="checkbox" value="5g" <? if(in_array("5g", $meuArray)){ echo "checked";}?> class="validate[minCheckbox[1]] checkbox"/>
  <label>outros </label>
  <br/>
  </div>
  </td>
  </tr>
  <tr bgcolor="#C7C7C7">
  <td colspan="2" align="left" bgcolor="#C7C7C7" class="formu2">
  <div align="left">
  <label> •	Qual o tamanho aproximado da instituição em termos de número de funcionários (marque apenas 1 item)*:</label>
  <br/>
  <label>
  <input type="radio" name="qtd6" <? if(in_array("6a", $meuArray)){ echo "checked";}?> value="6a" class="validate[required] radio" />
  pequeno porte ( até 5 funcionários)</label>
  <br />
  <label>
  <input type="radio" name="qtd6" <? if(in_array("6b", $meuArray)){ echo "checked";}?> value="6b" class="validate[required] radio" />
  pequeno-médio porte ( de 6 a 20 funcionários)</label>
  <br />
  <label>
  <input type="radio" name="qtd6" <? if(in_array("6c", $meuArray)){ echo "checked";}?> value="6c" class="validate[required] radio" />
  médio porte ( de 21 até 50 funcionários)</label>
  <br />
  <label>
  <input type="radio" name="qtd6" <? if(in_array("6d", $meuArray)){ echo "checked";}?> value="6d" class="validate[required] radio" />
  médio-grande porte ( de 51 até 200 funcionários)</label>
  <br />
  <label>
  <input type="radio" name="qtd6" <? if(in_array("6e", $meuArray)){ echo "checked";}?> value="6e" class="validate[required] radio" />
  grande porte ( acima de 200 funcionários)</label>
  </div>
  </td>
  </tr>
  <tr bgcolor="#D2D2D2">
    <td colspan="2" align="center" class="formu2">&nbsp;</td>
  </tr>
  <tr bgcolor="#C7C7C7">
  <td colspan="2" align="center" class="formu2">
       <input type="submit" name="avancar" value="avancar" class="botao" onkeypress="return handleEnter(this, event);" /> 
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="submit" name="atualizar" value="atualizar" class="botao"/>
  </td>
  </tr>
  <tr bgcolor="#D2D2D2">
    <td colspan="2" align="center" class="formu2">&nbsp;</td>
  </tr>
      
  </table>
</form>
</body>
</html>