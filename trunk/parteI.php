<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--JS -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-alert.js"></script>

<!--_JS -->
<!--CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/barra.css" rel="stylesheet" type="text/css" />
<!--_CSS -->
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
	<? function getArray1(&$Login){
    $sql = "select * from pesquisaquais Where usuario= '$Login' and parte ='1';";
    $Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
    $i=0;
    
    $resposta1 = array();
    while ($array_exibir = mysql_fetch_array($Resultado)) {
        $resposta1[$array_exibir['questao']] = $array_exibir['respostas'];
        $i++;
    }
    return $resposta1;
    }
    $meuArray1 = getArray1($Login);
    ?>
<title>Funarte - Portal das Artes</title>
<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
	<link rel="stylesheet" href="css/template.css" type="text/css"/>
	<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
	<script src="js/languages/jquery.validationEngine-pt_BR.js" type="text/javascript" charset="utf-8">	</script>
	<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">	</script>
	<script>
	   
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#form1").validationEngine();
		});
	</script>
    <script src="js/jsValidate.js" type="text/javascript"></script> 
    <script src="js/ajax.js" type="text/javascript"></script>  
    <script>
	function MarcarCheckBoxClique(campo){
	if(document.getElementById([campo]).checked == true){
	document.getElementById([campo]).visibility = false;
	}else{
	document.getElementById([campo]).checked = true;
	}
	}
	</script>
	<script>
    /**
    * 
    * @param {input[type=checkbox]} the checkbox to read
    * @param {input[type=textbox]} the field bound to the checkbox that gets enabled or disabled
    */
//    function ToggleState(checkbox, field) {
//      if ($(checkbox).attr('checked'))
//          $(field).attr('disabled', 'disabled');
//      else
//          $(field).removeAttr('disabled');
//    }
	 function ToggleState1(checkbox, field) {
      if ($(checkbox).attr('checked'))
          $(field).show(1000);
      else
          $(field).removeAttr('disabled');
    }
	 function ToggleState(checkbox, field) {
      if ($(checkbox).attr('checked'))
          $(field).hide(1000);
      else
          $(field).removeAttr('disabled');
    }
    </script>
</head>
<body>
<form name="form1" class="table table-condensed" id="form1" method="post"  action="sql/parteI.php">
   <div class="container">
 <table width="80%" align="center" cellpadding="2" class="table table-hover">
  <tr>
  <td>
  <h4>PARTE  I</h4>
  <h5>IDENTIFICAÇÃO  DA INSTITUIÇÃO REALIZADORA DO PROGRAMA DE RESIDENCIA ARTÍSTICA</h5>
  <h6>Os campos  com asterisco* são de preenchimento obrigatório:</h6>
  </tr>
  <tr>
  <td><label id=lblNomeInstituicao">• Nome da instituição*:</label>
    <input name="txtNome" id="idFrmNome" value="<?php echo $txtNome;?>" type="text" size="84" class="input-xxlarge validate[required] text-input"/>
  </td>
  </tr>
  <tr>
    <td>
      <label>• A instituição se Declara Formal*: </label>
      
      <input type="radio" name="qtd0" id="qtd01" onClick="javascript:ToggleState1('#qtd01', '#idopcaocnpj');" 
	  <? if(in_array("0a", $meuArray)){ echo "checked";}?> 
      value="0a" class="validate[required] radio" />
      Sim</label>
      <input type="radio" id="qtd00" name="qtd0" onClick="javascript:ToggleState('#qtd00', '#idopcaocnpj');"
       <? if(in_array("0b", $meuArray)){ echo "checked";}?> 
      value="0b" class="validate[required] radio" />
      
      Não</label>
    </td>
    </tr>
  <tr>
    <td><label>• CNPJ:</label>
      <input name="txtCnpj" id="idopcaocnpj" maxlength="18" value="<?php echo $txtCnpj;?>" type="text" size="17"
    onkeypress="SoNumero();Mascara('cnpj', window.event.keyCode, 'document.form1.txtCnpj');" 
    class="validate[required] text-input"/>
      
      <div style="display:inline;"> <a href="javascript:marcarCheck();"> </a> </div></td>
    </tr>
  <tr>
    <td><label>• CEP*:</label>
      <input name="txtCep" id="idFrmCep" maxlength="10" value="<?php echo $txtCep;?>" type="text"
      onKeyUp="enviaKeyCEP();"  onkeypress="SoNumero();Mascara('cep', window.event.keyCode, 'document.form1.txtCep');"
     class="validate[required] text-input"/>
    </td>
    </tr>
  <tr>
  <td>
    <label>• Endereço*:</label>    <input name="txtEndereco" onClick="javascript:findCEP();"id="idFrmEndereco" 
  value="<?php echo $txtEndereco;?>" type="text" size="84" class="input-xxlarge validate[required] text-input"/>		       
  </td>
  </tr>
  <tr>
  <td>
    <label id="municipio">• Município*:</label>
    <input name="txtMunicipio" id="ifFrmMunicipio" value="<?php echo $txtMunicipio;?>" type="text"
   size="50" class="input-xxlarge validate[required] text-input"/>
  </td>
  </tr>
  <tr>
  <td>
    <label>• Unidade Federativa*:</label>
    <select name="cmbUnidadeFederativa" size="1" id="idcmbUnidadeFederativa">
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
  <td><label>• Correio eletrônico (e-mail):</label>
    <input name="txtEmail" id="idEmail" value="<?php echo $txtEmail;?>" type="text" size="80" 
  class="input-xxlarge validate[custom[email]] text-input"/>  </td>
  </tr>
  <tr>
  <td height="26"><label>• Telefone: </label>
    <input name="txtTelefone" maxlength="14" value="<?php echo $txtTelefone;?>" type="text" 
  onKeyPress="SoNumero();Mascara('telefone', window.event.keyCode, 'document.form1.txtTelefone');"/>  </td>
  <tr>
  <td align="left">
    <label>• A instituição tem sede própia*?:</label>
    <label>
<input type="radio" name="qtd1" <? if(in_array("1a",$meuArray)){echo "checked";}?>  value="1a" class="validate[required] radio" />
Sim</label>
  <label>
  <input type="radio" name="qtd1" <? if(in_array("1b", $meuArray)){ echo "checked";}?> value="1b" class="validate[required] radio" />
  Não</label>
  </td>
  </tr>
  <tr>
  <td align="left">
  <label>• A instituição tem fins lucrativos*?:</label>
  <label>
  <input type="radio" name="qtd2" <? if(in_array("2a", $meuArray)){ echo "checked";}?> value="2a" class="validate[required] radio" />
  Sim</label>
  <label>
  <input type="radio" name="qtd2" <? if(in_array("2b", $meuArray)){ echo "checked";}?> value="2b" class="validate[required] radio" />
  Não</label>
  </td>
  </tr>
  <tr>
  <td align="left">
  <label>• Regime jurídico da instituição (marque apenas 1 item)*:</label>
  <p>
  <label>
  <input type="radio" name="qtd3" <? if(in_array("3a", $meuArray)){ echo "checked";}?> value="3a" class="validate[required] radio" />
  Administração pública direta</label>
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
  <label><input type="radio" name="qtd3" <? if(in_array("3j", $meuArray)){ echo "checked";}?> value="3j" class="validate[required] radio" />
  Cooperativa/ Associação de Classe/ Sindicato</label>
  <label>
  <input type="radio" name="qtd3" <? if(in_array("3k", $meuArray)){ echo "checked";}?> 
  value="3k" id="qtd3quais1" class="validate[required] radio" />
  Outras</label>
  <label>Quais?
  <input name="qtd3quais" type="text" id="idqtd3quais"   onclick="MarcarCheckBoxClique('qtd3quais1')" value="<?php echo $meuArray1['qtd3'];?>" />
  </label>
  </td>
  </tr>
  </tr>
  <td align="left">
  <label>• A instituição atua somente na área cultural? (marque apenas 1 item)*:</label>
  <label>
  <input type="radio" name="qtd4" <? if(in_array("4a", $meuArray)){ echo "checked";}?> value="4a" class="validate[required] radio" />
  Sim, o ramo de atuação é somente na cultura, não realizando outro tipo de atuação</label>
  <label>
  <input type="radio" name="qtd4" <? if(in_array("4b", $meuArray)){ echo "checked";}?> value="4b" class="validate[required] radio" />
  Sim, o ramo de atuação principal é na cultura, porém atua também em outras atividades econômicas</label>
  <label>
  <input type="radio" name="qtd4" <? if(in_array("4c", $meuArray)){ echo "checked";}?> value="4c" class="validate[required] radio" />
  Não, a cultura é apenas uma das áreas da instituição, não sendo a atividade principal </label>
  </td>
  </tr>
  <td align="left">
  <label>• Qual a fonte de recursos da instituição (marque quantos itens julgar necessário)*:</label>
  <label><input name="qtd5[]" type="checkbox" value="5a" <? if (in_array("5a", $meuArray)){ echo "checked";}?> 
  class="validate[minCheckbox[1]] checkbox"/> 
  orçamento próprio</label>
  <label><input name="qtd5[]" type="checkbox" value="5b" <? if(in_array("5b", $meuArray)){ echo "checked";}?> class="validate[minCheckbox[1]] checkbox"/>
  transferências governamentais </label>
  <label><input name="qtd5[]" type="checkbox" value="5c" <? if(in_array("5c", $meuArray)){ echo "checked";}?> class="validate[minCheckbox[1]] checkbox"/>
  fundos: municipais, estaduais e federais </label>
  <label><input name="qtd5[]" type="checkbox" value="5d" <? if(in_array("5d", $meuArray)){ echo "checked";}?> class="validate[minCheckbox[1]] checkbox"/>
  patrocínio/ financiamento privado </label>
  <label><input name="qtd5[]" type="checkbox" value="5e" <? if(in_array("5e", $meuArray)){ echo "checked";}?> class="validate[minCheckbox[1]] checkbox"/>
  recursos internacionais </label>
  <label>
  <input name="qtd5[]" type="checkbox" value="5f" <? if(in_array("5f", $meuArray)){ echo "checked";}?> class="validate[minCheckbox[1]] checkbox"/>
  doações/ ajudas externas </label>
  <label>
  <input name="qtd5[]" type="checkbox" value="5g" <? if(in_array("5g", $meuArray)){ echo "checked";}?> class="validate[minCheckbox[1]] checkbox"/>
  outros </label>
   </td>
  </tr>
  <tr>
  <td align="left">
  <div align="left">
  <label> •	Qual o tamanho aproximado da instituição em termos de número de funcionários (marque apenas 1 item)*:</label>
  <label>
  <input type="radio" name="qtd6" <? if(in_array("6a", $meuArray)){ echo "checked";}?> value="6a" class="validate[required] radio" />
  pequeno porte ( até 5 funcionários)</label>
  <label>
  <input type="radio" name="qtd6" <? if(in_array("6b", $meuArray)){ echo "checked";}?> value="6b" class="validate[required] radio" />
  pequeno-médio porte ( de 6 a 20 funcionários)</label>
  <label>
  <input type="radio" name="qtd6" <? if(in_array("6c", $meuArray)){ echo "checked";}?> value="6c" class="validate[required] radio" />
  médio porte ( de 21 até 50 funcionários)</label>
  <label>
  <input type="radio" name="qtd6" <? if(in_array("6d", $meuArray)){ echo "checked";}?> value="6d" class="validate[required] radio" />
  médio-grande porte ( de 51 até 200 funcionários)</label>
  <label>
  <input type="radio" name="qtd6" <? if(in_array("6e", $meuArray)){ echo "checked";}?> value="6e" class="validate[required] radio" />
  grande porte ( acima de 200 funcionários)</label>
  </div>
  </td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
  <td align="center">
       <input type="submit" name="avancar" value="avancar" class="btn btn-primary" onkeypress="return handleEnter(this, event);" /> 
       <input type="submit" name="atualizar" value="atualizar" class="btn"/>
  </td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
      
  </table>
  </div>
</form>
</body>
</html>