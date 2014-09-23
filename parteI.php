
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <head>

        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-alert.js"></script>
        <!--_JS -->
        <!--CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/barra.css" rel="stylesheet" type="text/css" />
        <!--_CSS -->      

    <meta charset="utf-8">
    <title>Mapeamento de residencias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mapeamento residências artisticas do Brasil - Funarte">
    <meta name="author" content="wender corrêa">

    <?
    include "conexao.php";
    connect();
    @session_start();
    $Login = trim($_SESSION["login"]);
    $_POST[txtNome] = $txtNome;
    $_POST[txtCnpj] = $txtCnpj;
    $_POST[txtEndereco] = $txtEndereco;
    $_POST[txtMunicipio] = $txtMunicipio;
    $_POST[txtCep] = $txtCep;
    $_POST[txtTelefone] =  $txtTelefone;
    $_POST[txtEmail] = $txtEmail; 
    $_POST[cmbUnidadeFederativa] = $cmbUnidadeFederativa;
    
    $sql = "select * from mapeamentopartei  Where id_usuario= '$Login'";
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
    $sql = "select * from pesquisa Where id_usuario = '$Login' and id_parte ='1';";
    $Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
    $i=0;
    $resposta = array();
    while ($array_exibir = mysql_fetch_array($Resultado)) {
        $resposta[$i] = ($array_exibir['id_resposta']);
        $i++;
    }
    return $resposta;
    }
    $meuArray = getArray($Login);
    ?>
	<? function getArray1(&$Login){
    $sql = "select * from pesquisaquais Where id_usuario = '$Login' and id_parte ='1';";
    $Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
    $i=0;
    
    $resposta1 = array();
    while ($array_exibir = mysql_fetch_array($Resultado)) {
        $resposta1[$array_exibir['questao']] = $array_exibir['id_resposta'];
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

	 function textBoxClearSelecao(checkbox, field) {
      if ($(checkbox).attr('checked'))
          $(field).val('');
      else
          $(field).val('');
    }
</script>
    
    <style type="text/css">
        .auto-style1 {
            height: 31px;
        }
    </style>
    
</head>
<body>
<form name="form1" id="form1" method="post"  action="sql/parteI.php">
  <table width="98%" align="center" class="table table-hover" cellpadding="2" cellspacing="2" style="font-family: Verdana, Geneva, sans-serif;">
  <tr>
  <td colspan="2">
  <h5><i class="icon-plus-sign"></i>IDENTIFICAÇÃO  DA INSTITUIÇÃO REALIZADORA DO PROGRAMA DE RESIDENCIA ARTÍSTICA </h5>

  <h5>Os campos  com asterisco* são de preenchimento obrigatório:</h5>
  </tr>
  <tr>
  <td width="32%"><label id=lblNomeInstituicao">• Nome da instituição*:</label>
  </td>
  <td width="68%">
  <input name="txtNome" id="idFrmNome" value="<?php echo $txtNome;?>" type="text" size="84" class="validate[required] text-input"/>
  </td>
  </tr>
  <tr>
    <td>
      <label>• A instituição se Declara Formal*: </label>
      </td>
    <td>
      <input type="radio" name="qtd0" id="qtd01" <? if(in_array("3", $meuArray)){ echo "checked";}?> 
      value="3" class="validate[required] radio" /> 
      Sim</label>
      <input type="radio" id="qtd00" name="qtd0" onClick="javascript: textBoxClearSelecao('#qtd00', '#idopcaocnpj');" <? if(in_array("4", $meuArray)){ echo "checked";}?> 
      value="4" class="validate[required] radio" />
                  
      Não</label>
      </td>
  </tr>
  <tr>
    <td class="auto-style1"><label>• CNPJ:</label></td>
    <td class="auto-style1">
    <input name="txtCnpj" id="idopcaocnpj" maxlength="18" value="<?php echo $txtCnpj;?>" type="text" size="17"
    onkeypress="SoNumero();Mascara('cnpj', window.event.keyCode, 'document.form1.txtCnpj');" onclick="MarcarCheckBoxClique('#qtd01')" 
    class="validate[condRequired[qtd01]]"/>
    
      </td>
  </tr>
  <tr>
    <td><label>• CEP*:</label>
      </td>
    <td>
      <input name="txtCep" id="idFrmCep" maxlength="10" value="<?php echo $txtCep;?>" type="text"
       onkeypress="SoNumero();Mascara('cep', window.event.keyCode, 'document.form1.txtCep');"
  class="validate[required] text-input"/>
      </td>
  </tr>
  <tr>
  <td>
  <label>• Endereço*:</label>
  </td>
  <td><input name="txtEndereco" id="idFrmEndereco" value="<?php echo $txtEndereco;?>" type="text" size="84" class="validate[required] text-input"/>		       
  </td>
  </tr>
  <tr>
  <td>
  <label id="municipio">• Município*:</label>
  </td>
  <td>
  <input name="txtMunicipio" id="ifFrmMunicipio" value="<?php echo $txtMunicipio;?>" type="text"
   size="50" class="validate[required] text-input"/>
  </td>
  </tr>
  <tr>
  <td>
  <label>• Unidade Federativa*:</label>
  </td>
  <td>
  <select name="cmbUnidadeFederativa" size="1" id="idcmbUnidadeFederativa">
  <option value='<? echo $cmbUnidadeFederativa?>'><? echo $cmbUnidadeFederativa?></option>
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
  <td><label>• Correio eletrônico (e-mail):</label></td>
  <td>
  <input name="txtEmail" id="idEmail" value="<?php echo $txtEmail;?>" type="text" size="80" 
  class="validate[custom[email]] text-input"/>
  </td>
  </tr>
  <tr>
  <td height="26"><label>• Telefone: </label></td>
  <td>
  <input name="txtTelefone" maxlength="14" value="<?php echo $txtTelefone;?>" type="text" 
  onKeyPress="SoNumero();Mascara('telefone', window.event.keyCode, 'document.form1.txtTelefone');"/>
  </td>
  <tr>
  <td colspan="2" align="left" class="formu2">
  <p>
  <label>• A instituição tem sede própria*?:</label>
  </p>
  <p>
  <label>
<input type="radio" name="qtd1" <? if(in_array("1",$meuArray)){echo "checked";}?>  value="1" class="validate[required] radio" />
Sim</label>
  <label>
  <input type="radio" name="qtd1" <? if(in_array("2", $meuArray)){ echo "checked";}?> value="2" class="validate[required] radio" />
  Não</label>
  </p>
  </td>
  </tr>
  <tr>
  <td colspan="2" align="left" class="formu2">
  <label>• A instituição tem fins lucrativos*?:</label>
  <label>
  <input type="radio" name="qtd2" <? if(in_array("5", $meuArray)){ echo "checked";}?> value="5" class="validate[required] radio" />
  Sim</label>
  <label>
  <input type="radio" name="qtd2" <? if(in_array("6", $meuArray)){ echo "checked";}?> value="6" class="validate[required] radio" />
  Não</label>
  </td>
  </tr>
  <tr>
  <td colspan="2" align="left" class="formu2">
  <label>• Regime jurídico da instituição (marque apenas 1 item)*</label>
  <p>
  <label>
  <input type="radio" name="qtd3" <? if(in_array("7", $meuArray)){ echo "checked";}?> value="7" class="validate[required] radio" />
  Administração pública direta</label>
  <input type="radio" name="qtd3" <? if(in_array("8", $meuArray)){ echo "checked";}?> value="8" class="validate[required] radio" />
  Entidade/empresa privada</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("9", $meuArray)){ echo "checked";}?> value="9" class="validate[required] radio" />
  Fundação pública federal</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("10", $meuArray)){ echo "checked";}?> value="10" class="validate[required] radio" />
  Fundação pública estadual</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("11", $meuArray)){ echo "checked";}?> value="11" class="validate[required] radio" />
  Fundação pública municipal</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("12", $meuArray)){ echo "checked";}?> value="12" class="validate[required] radio" />
  Autarquia</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("13", $meuArray)){ echo "checked";}?> value="13" class="validate[required] radio" />
  Empresa pública/ sociedade de economia mista</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("14", $meuArray)){ echo "checked";}?> value="14" class="validate[required] radio" />
  ONGs</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("15", $meuArray)){ echo "checked";}?> value="15" class="validate[required] radio" />
  Organização social</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("16", $meuArray)){ echo "checked";}?> value="16" class="validate[required] radio" />
  Cooperativa/ Associação de Classe/ Sindicato</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("17", $meuArray)){ echo "checked";}?> 
  value="17" id="qtd3quais1" class="validate[required] radio" />
  Outras. Quais?</label>
  <input name="qtd3quais" type="text" id="qtd3quais"  class="validate[optional,minSize[2]]" value="<?php echo $meuArray1['18'];?>" />
  <br/>
  </p>
  </td>
  </tr>
  <br/>
  <tr>
  </tr>
  <tr>
  <td colspan="2" align="left" class="formu2">
  <div align="left">
  <label>• A instituição atua somente na área cultural (marque apenas 1 item)*?</label>

  <label>
  <input type="radio" name="qtd4" <? if(in_array("19", $meuArray)){ echo "checked";}?> value="19" class="validate[required] radio" />
  Sim, o ramo de atuação é somente na cultura, não realizando outro tipo de atuação</label>

  <label>
  <input type="radio" name="qtd4" <? if(in_array("20", $meuArray)){ echo "checked";}?> value="20" class="validate[required] radio" />
  Sim, o ramo de atuação principal é na cultura, porém atua também em outras atividades econômicas</label>

  <label>
  <input type="radio" name="qtd4" <? if(in_array("21", $meuArray)){ echo "checked";}?> value="21" class="validate[required] radio" />
  Não, a cultura é apenas uma das áreas da instituição, não sendo a atividade principal </label>
  </div>
  </td>
  </tr>
  <tr>
  <td colspan="2" align="left" class="formu2">
  <div align="left">
  <label>• Qual a fonte de recursos da instituição (marque quantos itens julgar necessário)*</label>
  <label><input name="qtd5[]" type="checkbox" value="22" <? if (in_array("22", $meuArray)){ echo "checked";}?> 
  class="validate[minCheckbox[1]] checkbox"/> 
  Orçamento próprio</label>

  <label><input name="qtd5[]" type="checkbox" value="23" <? if(in_array("23", $meuArray)){ echo "checked";}?> class="validate[minCheckbox[1]] checkbox"/>
  Transferências governamentais </label>

  <label>
  <input name="qtd5[]" type="checkbox" value="24" <? if(in_array("24", $meuArray)){ echo "checked";}?> class="validate[minCheckbox[1]] checkbox"/>
    Fundos: municipais, estaduais e federais </label>
  <label>
  <input name="qtd5[]" type="checkbox" value="25" <? if(in_array("25", $meuArray)){ echo "checked";}?> class="validate[minCheckbox[1]] checkbox"/>
    Patrocínio/ financiamento privado </label>
  <label>
  <input name="qtd5[]" type="checkbox" value="26" <? if(in_array("26", $meuArray)){ echo "checked";}?> class="validate[minCheckbox[1]] checkbox"/>
    Recursos internacionais </label>
  <label>
  <input name="qtd5[]" type="checkbox" value="27" <? if(in_array("27", $meuArray)){ echo "checked";}?> class="validate[minCheckbox[1]] checkbox"/>
    Doações/ ajudas externas </label>
  <label>
  <input name="qtd5[]" type="checkbox" value="28" <? if(in_array("28", $meuArray)){ echo "checked";}?> class="validate[minCheckbox[1]] checkbox"/>
    Outros </label>
  <br/>
  </div>
  </td>
  </tr>
  <tr>
  <td colspan="2" align="left" class="formu2">
  <div align="left">
  <label> •	Qual o tamanho aproximado da instituição em termos de número de funcionários (marque apenas 1 item)*</label>
  <label>
  <input type="radio" name="qtd6" <? if(in_array("29", $meuArray)){ echo "checked";}?> value="29" class="validate[required] radio" />
  Pequeno porte ( até 5 funcionários)</label>
  <label>
  <input type="radio" name="qtd6" <? if(in_array("30", $meuArray)){ echo "checked";}?> value="30" class="validate[required] radio" />
  Pequeno-médio porte ( de 6 a 20 funcionários)</label>
  <label>
  <input type="radio" name="qtd6" <? if(in_array("31", $meuArray)){ echo "checked";}?> value="31" class="validate[required] radio" />
  Médio porte ( de 21 até 50 funcionários)</label>
  <label>
  <input type="radio" name="qtd6" <? if(in_array("32", $meuArray)){ echo "checked";}?> value="32" class="validate[required] radio" />
  Médio-grande porte ( de 51 até 200 funcionários)</label>
  <label>
  <input type="radio" name="qtd6" <? if(in_array("33", $meuArray)){ echo "checked";}?> value="33" class="validate[required] radio" />
  Grande porte ( acima de 200 funcionários)</label>
  </div>
  </td>
  </tr>
  <tr>
  <td colspan="2" align="center" class="formu2">
   <div align="center">
       <button type="submit" name="atualizar" value="atualizar"  class="btn btn-info"><i class="icon-refresh icon-white"></i> atualizar</button>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <button type="submit" name="avancar" value="avancar"  class="btn btn-success" onkeypress="return handleEnter(this, event);"><i class="icon-arrow-right icon-white"></i> avancar</button>
    </div>
  </td>
  </tr>
        
  </table>
         <div class="progress progress-danger">
          <div class="bar" style="width: 27%;">27% concluído</div>
        </div>
</form>
</body>
</html>