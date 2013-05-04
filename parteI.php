<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <? 
      session_start();
      header("Cache-Control: no-cache, must-revalidate");
      include "conexao.php";
      connect();
   ?>
<title>Funarte - Portal das Artes</title>
<script src="js/jsValidate.js" type="text/javascript"></script>
<script src="js/jquery-1.6.2.js" type="text/javascript"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>
<script src="js/jsvalidarParteI.js" type="text/javascript"></script>
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
<form name="form1" id="form1" method="POST"  action="sql\parteI.php">
    <table width="80%" align="center" cellpadding="2" cellspacing="2" style="border:solid 1px #333333;">
        <tr>
        <td colspan="2">
        <p align="center">
        <strong><em>IDENTIFICAÇÃO  DA INSTITUIÇÃO REALIZADORA DO PROGRAMA DE RESIDENCIA ARTÍSTICA </em>
        </strong></p>
        </td>
        </tr>
        <tr>
        <td width="25%"><label id=lblNomeInstituicao">• Nome da instituição:</label>
        </td>
        <td width="75%">
       <input name="txtNome" id="idFrmNome" value="<?php echo $_POST[txtNome];?>" type="text" size="94"/>
        </td>
        </tr>
        <tr>
        <td>
        <label>• CNPJ:</label>
        </td>
        <td>
        <input name="txtCnpj" maxlength="18" value="<?php echo $_POST[txtCnpj];?>" type="text" size="17"/>
        </td>
        </tr>
        <tr>
        <td>
        <label>• Endereço:</label></td>
        <td>
       <input name="idEndereco" value="<?php echo $_POST[txtEndereco];?>" type="text" size="80"/>
        </td>
        </tr>
        <tr>
        <td>
        <label id="municipio">• Município:</label></td>
        <td>
        <input name="txtMunicipio" id="ifFrmMunicipio" value="<?php echo $_POST[txtMunicipio];?>" type="text" size="50"/>
        </td>
        </tr>
        <tr>
        <td><label>• Unidade Federativa:</label></td>
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
        <td>
        <label>• CEP:</label>
        </td>
        <td>
        <input name="txtCep" id="idFrmCep" maxlength="10" value="<?php echo $_POST[txtCep];?>" type="text"
        onKeyPress="SoNumero();Mascara('cep', window.event.keyCode, 'document.form1.txtCep');"/>
        </td>
        </tr>
        <tr>
        <td><label>• Telefone:</label></td>
        <td>
        <input name="txtTelefone" maxlength="15" value="<?php echo $_POST[txtTelefone];?>" type="text" 
        onKeyPress="SoNumero();Mascara('telefone', window.event.keyCode, 'document.form1.txtTelefone')";/>
        </td>
        </tr>
        <tr>
        <td height="26">
        <label>• Correio eletrônico (e-mail):</label>
        </td>
        <td>
        <input name="txtEmail" id="idEmail" value="<?php echo $_POST[txtEmail];?>" 
        type="text" size="80"/>
        </td>
	    <tr>
    	<td align="left" class="formu2">
        <label>• A instituição tem sede própia?:</label>
      	</td>
      	<td>
        <label>
        <input type="radio" name="qtd1" <?php if($_POST['qtd1']=="1a") echo "checked";?> value="1a" class="radio" />
        Sim</label>
        <label>
        <input type="radio" name="qtd1" <?php if($_POST['qtd1']=="1b") echo "checked";?> value="1b" class="radio" />
        Não</label>
     	</tr>
      	<tr>
      	<td align="left" class="formu2">
        <label>• A instituição tem fins lucrativos?:</label>
        </td>
        <td>
        <label>
        <input type="radio" name="qtd2" <?php if($_POST['qtd2']=="2a") echo "checked";?> value="2a" class="radio" />
        Sim</label>
        <label>
        <input type="radio" name="qtd2" <?php if($_POST['qtd2']=="2b") echo "checked";?> value="2b" class="radio" />
        Não</label>
        </tr>
        <tr>
        <td align="left" class="formu2">
        <label>• Regime jurídico da instituição:</label>
        </td>
        <td>
        <p><br/>
        <label>
        <input type="radio" name="qtd3" <?php if($_POST['qtd3']=="3a") echo "checked";?> value="3a" class="radio" />
        Administração pública direta</label>
        <br/>
        <input type="radio" name="qtd3" <?php if($_POST['qtd3']=="3b") echo "checked";?> value="3a" class="radio" />
        Entidade/empresa privada</label>
        <br/>
        <input type="radio" name="qtd3" <?php if($_POST['qtd3']=="3c") echo "checked";?> value="3a" class="radio" />
        Fundação pública federal</label>
        <br/>
        <input type="radio" name="qtd3" <?php if($_POST['qtd3']=="3d") echo "checked";?> value="3a" class="radio" />
        Fundação pública estadual</label>
        <br/>
        <input type="radio" name="qtd3" <?php if($_POST['qtd3']=="3e") echo "checked";?> value="3a" class="radio" />
        Fundação pública municipal</label>
        <br/>
        <input type="radio" name="qtd3" <?php if($_POST['qtd3']=="3f") echo "checked";?> value="3a" class="radio" />
        Autarquia</label>
        <br/>
        <input type="radio" name="qtd3" <?php if($_POST['qtd3']=="3g") echo "checked";?> value="3a" class="radio" />
        Empresa pública/ sociedade de economia mista</label>
        <br/>
        <input type="radio" name="qtd3" <?php if($_POST['qtd3']=="3h") echo "checked";?> value="3a" class="radio" />
        ONGs</label>
        <br/>
        <input type="radio" name="qtd3" <?php if($_POST['qtd3']=="3i") echo "checked";?> value="3a" class="radio" />
        Organização social</label>
        <br/>
        <input type="radio" name="qtd3" <?php if($_POST['qtd3']=="3j") echo "checked";?> value="3a" class="radio" />
        Cooperativa/ Associação de Classe/ Sindicato</label>
        <br/>
        <input type="radio" name="qtd3" <?php if($_POST['qtd3']=="3k") echo "checked";?> value="3a" class="radio" />
        Outras</label>
        <label>Quais?</label>
        <input name="qtd3quais" value="<?php echo $_POST[qtd3quais];?>" type="text"/>
        <br/>
        </p>
        </tr>
        <br/>
        <tr>
        <td colspan="2" align="left" class="formu2">
        </td>
        </tr>
        <tr>
        <td colspan="2" align="left" class="formu2">
        <div align="left">
        <label>• A instituição atua somente na área cultural?</label>
        <br />
        <label>
        <input type="radio" name="qtd4" <?php if($_POST['qtd4']=="4a") echo "checked";?> value="4a" class="radio" />
        Sim, o ramo de atuação é somente na cultura, não realizando outro tipo de atuação</label>
        <br />
        <label>
        <input type="radio" name="qtd4" <?php if($_POST['qtd4']=="4b") echo "checked";?> value="4b" class="radio" />
        Sim, o ramo de atuação principal é na cultura, porém atua também em outras atividades econômicas</label>
        <br />
        <label>
        <input type="radio" name="qtd4" <?php if($_POST['qtd4']=="4c") echo "checked";?> value="4c" class="radio" />
        Não, a cultura é apenas uma das áreas da instituição, não sendo a atividade principal </label>
        </div>
        </td>
        </tr>
        <tr>
        <td colspan="2" align="left" class="formu2">
        <div align="left">
        <label>• Qual a fonte de recursos da instituição?</label>
        <br />
        <input name="qtd5[]" type="checkbox" value="5a" />
        <label>orçamento próprio</label>
        <br/>
        <input name="qtd5[]" type="checkbox" value="5b" />
        <label>transferências governamentais </label>
        <br/>
        <input name="qtd5[]" type="checkbox" value="5c" />
        <label>fundos: municipais, estaduais e federais </label>
        <br/>
        <input name="qtd5[]" type="checkbox" value="5d" />
        <label>patrocínio/ financiamento privado </label>
        <br/>
        <input name="qtd5[]" type="checkbox" value="5e" />
        <label>recursos internacionais </label>
        <br/>
        <input name="qtd5[]" type="checkbox" value="5f" />
        <label>doações/ ajudas externas </label>
        <br/>
        <input name="qtd5[]" type="checkbox" value="5g" />
        <label>outros </label>
        <br/>
      </div>
        </td>
        </tr>
        <tr>
        <td colspan="2" align="left" class="formu2">
        <div align="left">
        <label> •	Qual o tamanho aproximado da instituição em termos de número de funcionários? </label>
        <br/>
        <label>
        <input type="radio" name="qtd6" <?php if($_POST['qtd6']=="6a") echo "checked";?> value="6a" class="radio" />
        pequeno porte ( até 5 funcionários)</label>
        <br />
        <label>
        <input type="radio" name="qtd6" <?php if($_POST['qtd6']=="6b") echo "checked";?> value="6b" class="radio" />
        pequeno-médio porte ( de 6 a 20 funcionários)</label>
        <br />
        <label>
        <input type="radio" name="qtd6" <?php if($_POST['qtd6']=="6c") echo "checked";?> value="6c" class="radio" />
        médio porte ( de 21 até 50 funcionários)</label>
        <br />
        <label>
        <input type="radio" name="qtd6" <?php if($_POST['qtd6']=="6d") echo "checked";?> value="6d" class="radio" />
        médio-grande porte ( de 51 até 200 funcionários)</label>
        <br />
        <label>
        <input type="radio" name="qtd6" <?php if($_POST['qtd6']=="6e") echo "checked";?> value="6e" class="radio" />
        grande porte ( acima de 200 funcionários)</label>
        </div>
        </td>
        </tr>
        <tr>
        <td colspan="2" align="center" class="formu2">
        <input type="submit" name="buscar" value="buscar"/>
        <input type="submit" name="enviar" value="avancar" />
        <input type="submit" name="alterar" value="alterar" />
        </td>
        </tr>
    </table>
</form>
</body>
</html>