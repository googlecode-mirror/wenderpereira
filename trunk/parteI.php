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
<script src="js/jsValidate.js" type="text/javascript"></script>
<script src="js/jquery-1.6.2.js" type="text/javascript"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>
<script src="js/jsvalidarParteI.js" type="text/javascript"></script>
<script src="jquery-1.5.2.min.js" type="text/javascript"></script>
<script src="jquery.maskedinput-1.3.min.js" type="text/javascript"></script>
<script type="text/javascript">
		function findCEP() {
		    if($.trim($("#idFrmCep").val()) != ""){
		        $("#ajax-loading").css('display','inline');
				$.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$
							("#idFrmCep").val().replace("-", ""), function(){
		            if(resultadoCEP["resultado"] == 1){
		                $("#idFrmEndereco").val(unescape(resultadoCEP["tipo_logradouro"])+" 
											  "+unescape(resultadoCEP["logradouro"]));
		             //   $("#ifFrmMunicipio").val(unescape(resultadoCEP["bairro"]));
		                $("#ifFrmMunicipio").val(unescape(resultadoCEP["cidade"]));
		                $("#cmbUnidadeFederativa").val(unescape(resultadoCEP["uf"]));
		         //       $("#number").focus();
		            }else{
		                alert("Endereço não encontrado para o cep ");
		            }
		            $("#ajax-loading").hide();
		        });
		    }
		}
		$(document).ready(function(){
		    $("#zipcode").mask("99999-999")
		});
</script>
<script>
function validaCheckb() {
	if (jQuery("input[name='qtd5[]']:checked").length > 0) {
		return true;
		alert("Marque pelo menos um true!");
	} else {
		alert("Marque pelo menos um equipamento!");
		return false;
	}
}
</script>
<style type="text/css">
/* Estilizar os alertas */
label.error{
padding-left: 2px;
color: red;
font-weight: bold;
}
</style>
</head>
<body>
<form name="form1" id="form1" method="post"  action="sql\parteI.php">
  <table width="80%" align="center" cellpadding="2" cellspacing="2" style="border:solid 1px #333333;">
  <tr>
  <td colspan="2">
  <p align="center">
  <strong><em>PARTE  I</em></strong></p>
  <p align="center"><strong><em>IDENTIFICAÇÃO  DA INSTITUIÇÃO REALIZADORA DO PROGRAMA DE RESIDENCIA ARTÍSTICA </em>
  </strong></p>
  <p><strong>Os campos  com asterisco* são de preenchimento obrigatório:</strong></p></td>
  </tr>
  <tr>
  <td width="27%"><label id=lblNomeInstituicao">• Nome da instituição*:</label>
  </td>
  <td width="73%">
  <input name="txtNome" id="idFrmNome" value="<?php echo $txtNome;?>" type="text" size="84"/>
  </td>
  </tr>
  <tr>
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
  <td><label>• CEP*:</label>
  </td>
  <td>
  <input name="txtCep" id="idFrmCep" maxlength="10" value="<?php echo $txtCep;?>" type="text"
  onkeypress="SoNumero();Mascara('cep', window.event.keyCode, 'document.form1.txtCep');"/>
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
  <td>
  <label>• Endereço*:</label>
  </td>
  <td><input name="txtEndereco" onClick="javascript:findCEP();"id="idFrmEndereco" value="<?php echo $txtEndereco;?>" 
  type="text" size="84"/>		       
  </td>
  </tr>
  <tr>
  <td>
  <label id="municipio">• Município*:</label>
  </td>
  <td>
  <input name="txtMunicipio" id="ifFrmMunicipio" value="<?php echo $txtMunicipio;?>" type="text" size="50"/>
  </td>
  </tr>
  <tr>
  <td>
  <label>• Unidade Federativa*:</label>
  </td>
  <td>
  <select name="cmbUnidadeFederativa" size="1" id="cmbUnidadeFederativa">
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
  <td><input name="txtEmail" id="idEmail" value="<?php echo $txtEmail;?>" onKeyPress="validaCheckb();"type="text" size="80"/></td>
  </tr>
  <tr>
  <td height="26"><label>• Telefone: </label></td>
  <td>
  <input name="txtTelefone" maxlength="14" value="<?php echo $txtTelefone;?>" type="text" 
  onKeyPress="SoNumero();Mascara('telefone', window.event.keyCode, 'document.form1.txtTelefone');
  validateEmail_('form1','txtEmail');"/>
  </td>
  <tr>
  <td colspan="2" align="left" class="formu2">
  <p>
  <label>• A instituição tem sede própia*?:</label>
  </p>
  <p>
  <label>
  <input type="radio" name="qtd1" <? if(in_array("1a",$meuArray)){echo "checked";}?> 
  value="1a" class="radio" />
  Sim</label>
  <label>
  <input type="radio" name="qtd1" <? if(in_array("1b", $meuArray)){ echo "checked";}?> value="1b" class="radio" />
  Não</label>
  </p>
  </td>
  </tr>
  <tr>
  <td colspan="2" align="left" class="formu2">
  <label>• A instituição tem fins lucrativos*?:</label>
  <label>
  <br />
  <br />
  <input type="radio" name="qtd2" <? if(in_array("2a", $meuArray)){ echo "checked";}?> value="2a" class="radio" />
  Sim</label>
  <label>
  <input type="radio" name="qtd2" <? if(in_array("2b", $meuArray)){ echo "checked";}?> value="2b" class="radio" />
  Não</label>
  </td>
  </tr>
  <tr>
  <td colspan="2" align="left" class="formu2">
  <br/>
  <label>• Regime jurídico da instituição (marque apenas 1 item)*:</label>
  <p>
  <label>
  <input type="radio" name="qtd3" <? if(in_array("3a", $meuArray)){ echo "checked";}?> value="3a" class="radio" />
  Administração pública direta</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("3b", $meuArray)){ echo "checked";}?> value="3a" class="radio" />
  Entidade/empresa privada</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("3c", $meuArray)){ echo "checked";}?> value="3a" class="radio" />
  Fundação pública federal</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("3d", $meuArray)){ echo "checked";}?> value="3a" class="radio" />
  Fundação pública estadual</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("3e", $meuArray)){ echo "checked";}?> value="3a" class="radio" />
  Fundação pública municipal</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("3f", $meuArray)){ echo "checked";}?> value="3a" class="radio" />
  Autarquia</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("3g", $meuArray)){ echo "checked";}?> value="3a" class="radio" />
  Empresa pública/ sociedade de economia mista</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("3h", $meuArray)){ echo "checked";}?> value="3a" class="radio" />
  ONGs</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("3i", $meuArray)){ echo "checked";}?> value="3a" class="radio" />
  Organização social</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("3j", $meuArray)){ echo "checked";}?> value="3a" class="radio" />
  Cooperativa/ Associação de Classe/ Sindicato</label>
  <br/>
  <input type="radio" name="qtd3" <? if(in_array("3k", $meuArray)){ echo "checked";}?> value="3a" class="radio" />
  Outras</label>
  <label>Quais?</label>
  <input name="qtd3quais" value="<?php echo $_POST[qtd3quais];?>" type="text" />
  <br/>
  </p>
  </td>
  </tr>
  <br/>
  <tr>
  <td colspan="2" align="left" class="formu2">
  </td>
  </tr>
  <tr>
  <td colspan="2" align="left" class="formu2">
  <div align="left">
  <label>• A instituição atua somente na área cultural? (marque apenas 1 item)*:</label>
  <br />
  <label>
  <input type="radio" name="qtd4" <? if(in_array("4a", $meuArray)){ echo "checked";}?> value="4a" class="radio" />
  Sim, o ramo de atuação é somente na cultura, não realizando outro tipo de atuação</label>
  <br />
  <label>
  <input type="radio" name="qtd4" <? if(in_array("4b", $meuArray)){ echo "checked";}?> value="4b" class="radio" />
  Sim, o ramo de atuação principal é na cultura, porém atua também em outras atividades econômicas</label>
  <br />
  <label>
  <input type="radio" name="qtd4" <? if(in_array("4c", $meuArray)){ echo "checked";}?> value="4c" class="radio" />
  Não, a cultura é apenas uma das áreas da instituição, não sendo a atividade principal </label>
  </div>
  </td>
  </tr>
  <tr>
  <td colspan="2" align="left" class="formu2">
  <div align="left">
  <label>• Qual a fonte de recursos da instituição (marque quantos itens julgar necessário)*:</label>
  <br />
  <input name="qtd5[]" type="checkbox" value="5a" <? if (in_array("5a", $meuArray)){ echo "checked";	}?> 
  id="qtd5[]"> 
  <label>orçamento próprio</label>
  <br/>
  <input name="qtd5[]" type="checkbox" value="5b" <? if(in_array("5b", $meuArray)){ echo "checked";}?> />
  <label>transferências governamentais </label>
  <br/>
  <input name="qtd5[]" type="checkbox" value="5c" <? if(in_array("5c", $meuArray)){ echo "checked";}?>/>
  <label>fundos: municipais, estaduais e federais </label>
  <br/>
  <input name="qtd5[]" type="checkbox" value="5d" <? if(in_array("5d", $meuArray)){ echo "checked";}?>/>
  <label>patrocínio/ financiamento privado </label>
  <br/>
  <input name="qtd5[]" type="checkbox" value="5e" <? if(in_array("5e", $meuArray)){ echo "checked";}?>/>
  <label>recursos internacionais </label>
  <br/>
  <input name="qtd5[]" type="checkbox" value="5f" <? if(in_array("5f", $meuArray)){ echo "checked";}?>/>
  <label>doações/ ajudas externas </label>
  <br/>
  <input name="qtd5[]" type="checkbox" value="5g" <? if(in_array("5g", $meuArray)){ echo "checked";}?>/>
  <label>outros </label>
  <br/>
  </div>
  </td>
  </tr>
  <tr>
  <td colspan="2" align="left" class="formu2">
  <div align="left">
  <label> •	Qual o tamanho aproximado da instituição em termos de número de funcionários (marque apenas 1 item)*:</label>
  <br/>
  <label>
  <input type="radio" name="qtd6" <? if(in_array("6a", $meuArray)){ echo "checked";}?> value="6a" class="radio" />
  pequeno porte ( até 5 funcionários)</label>
  <br />
  <label>
  <input type="radio" name="qtd6" <? if(in_array("6b", $meuArray)){ echo "checked";}?> value="6b" class="radio" />
  pequeno-médio porte ( de 6 a 20 funcionários)</label>
  <br />
  <label>
  <input type="radio" name="qtd6" <? if(in_array("6c", $meuArray)){ echo "checked";}?> value="6c" class="radio" />
  médio porte ( de 21 até 50 funcionários)</label>
  <br />
  <label>
  <input type="radio" name="qtd6" <? if(in_array("6d", $meuArray)){ echo "checked";}?> value="6d" class="radio" />
  médio-grande porte ( de 51 até 200 funcionários)</label>
  <br />
  <label>
  <input type="radio" name="qtd6" <? if(in_array("6e", $meuArray)){ echo "checked";}?> value="6e" class="radio" />
  grande porte ( acima de 200 funcionários)</label>
  </div>
  </td>
  </tr>
  <tr>
  <td colspan="2" align="center" class="formu2">
  <input type="submit" name="enviar" value="avancar">
  </td>
  </tr>
      
  </table>
</form>
</body>
</html>