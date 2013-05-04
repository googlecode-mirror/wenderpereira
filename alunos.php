<? import_request_variables("gP"); ?>
<? 
session_start();
header("Cache-Control: no-cache, must-revalidate");
include "conexao.php";
connect();
?>

<? if ($_GET["cod"] != "") { $_POST["cod"] = $_GET["cod"]; } ?>

<? 
/*
ROTINA RESPONSÁVEL PELO CADASTRAMENTO DAS INFORMAÇÕES
**************************************************************************************************
*/
if ($_POST[cadastrar] == "Cadastrar" && $_POST[matricula] != "") {
$datanasc = $ano."-".$mes."-".$dia;
$dataexp = $ano2."-".$mes2."-".$dia2;
$consulta = "INSERT INTO alunos (matricula, ano_matricula, nome, pai, mae, datanasc, nacionalidade,
 naturalidade, sexo, raca, identidade, emissor, dataexp, cpf, passaporte, estadocivil, 
 endereco, bairro, cidade, uf, cep, telefone, telefone2, email, periodo, transporte,
 plano, validade, acidente, tiposangue, escolaridade, professor, obs, formado)
 VALUES 
 ('$_POST[matricula]', 
 '$matricula2', 
 '$nome',  '$pai', '$mae', '$datanasc', 
 '$nacionalidade', '$naturalidade', '$sexo', '$raca', '$identidade', '$emissor', 
 '$dataexp', '$cpf', '$passaporte', '$estadocivil', '$endereco', '$bairro', 
 '$cidade', '$uf', '$cep', '$telefone', '$telefone2', '$email', '$periodo',
 '$transporte', '$plano', '$validade', '$acidente', '$tiposangue', '$escolaridade',
 '$professor','$obs', '$_POST[formado]')";
 
$resultado = mysql_query($consulta)
or die ("Falha na inserção dos dados");
?><script language="javascript">alert('Cadastro Realizado com Sucesso!!!');</script><? 
unset($cadastrar); unset($matricula); unset($matricula1); unset($matricula2); unset($dia);  unset($mes); unset($ano); unset($dia2); unset($mes2); unset($ano2);
} 

//************************************************************************************************
?>

<?
/*
ROTINA RESPONSÁVEL PELA EXCLUSÃO
**************************************************************************************************
*/
if ($_POST[excluir] == "Excluir" and $_POST[cod] == "") { ?>
<script language="javascript">
     alert("Faça uma busca e selecione um registro!!!");
</script>
<? } ?>
<?
if ($_POST[excluir] == "Excluir" and $_POST[cod] != "") { ?>
<script language="javascript">
if (confirm("Esse registro sera excluido do sistema!\nTem certeza que deseja continuar?") == true) {
window.location.href='alunos.php?excluir=EXCLUIR2&cod=<? echo $cod; ?>';
 } else {
window.location.href='alunos.php?excluir=';
}
</script>
<? } ?><?
if ($_GET[excluir] == "EXCLUIR2") {

    $sqlquery = "DELETE FROM alunos WHERE cod = '$cod'";
	$process = mysql_query($sqlquery) or die("Erro: " . mysql_error());

?><script language="javascript">alert('Registro Excluido com Sucesso!!!');</script><? 
unset($excluir); unset($cod); }
//************************************************************************************************
?>

<?
/*
ROTINA RESPONSÁVEL PELA ATUALIZAÇÃO
**************************************************************************************************
*/
if ($_POST[atualizar] == "Atualizar" and $_POST[cod] == "") { ?>
<script language="javascript">
     alert("Faça uma busca e selecione o registro a ser atualizado!!!");
</script>
<? } ?>

<?
if ($_POST[atualizar] == "Atualizar" and $_POST[cod] != "") {
$datanasc = $ano."-".$mes."-".$dia;
$dataexp = $ano2."-".$mes2."-".$dia2;

$sqlquery = "UPDATE alunos SET matricula = '$_POST[matricula]', ano_matricula = '$matricula2', nome = '$nome', pai = '$pai', mae = '$mae', datanasc = '$datanasc', nacionalidade = '$nacionalidade', naturalidade = '$naturalidade', sexo = '$sexo', raca = '$raca', identidade = '$identidade', emissor = '$emissor', dataexp = '$dataexp', cpf = '".$_POST[cpf]."', passaporte = '$passaporte', estadocivil = '$estadocivil', endereco = '$endereco', bairro = '$bairro', cidade = '$cidade', uf = '$uf', cep = '$cep', telefone = '$telefone', email = '$email', periodo = '$periodo', plano = '$plano', validade = '$validade', acidente = '$acidente', tiposangue = '$tiposangue', escolaridade = '$escolaridade', professor = '$professor', obs = '$obs', formado = '$formado' WHERE cod = '$cod'"; 
	$process = mysql_query($sqlquery) or die("Erro: " . mysql_error());

?><script language="javascript">alert('Registro Atualizado com Sucesso!!!');</script><? 
unset($atualizar); unset($dia); unset($mes); unset($ano); unset($dia2); unset($mes2); unset($ano2); unset($matricula1); unset($matricula2); unset($consultar);
}
//************************************************************************************************
?>

<?
/*
ROTINA RESPONSÁVEL PELA CONSULTA
**************************************************************************************************
*/
if ($consultar == "Buscar" && $busca == "1") {

		$sql = "select * from alunos where nome like '%$busca_aluno%' order by nome";
		$Resultado = mysql_query($sql) or die("Erro: " . mysql_error());

 }
 
 if ($consultar == "Buscar" && $busca == "2") {

		$sql = "select * from alunos where periodo like '%$busca_aluno%' order by nome";
		$Resultado = mysql_query($sql) or die("Erro: " . mysql_error());

 }
 
 if ($consultar == "Buscar" && $busca == "3") {

		$sql = "select * from alunos where matricula like '%$busca_aluno%' order by nome";
		$Resultado = mysql_query($sql) or die("Erro: " . mysql_error());

 }

 if ($_POST[cod] != "" and $_POST[consultar] == "") {

		$sql = "select * from alunos where cod = ".$_POST[cod]."";
		$Resultado = mysql_query($sql) or die("Erro: " . mysql_error());

			while ($array_exibir = mysql_fetch_array($Resultado)) {
			
				$_POST[obs] = $array_exibir['obs'];
				$_POST[professor] = $array_exibir['professor'];
				$_POST[escolaridade] = $array_exibir['escolaridade'];
				$_POST[tiposangue] = $array_exibir['tiposangue'];
				$_POST[acidente] = $array_exibir['acidente'];
				$_POST[validade] = $array_exibir['validade'];
				$_POST[plano] = $array_exibir['plano'];
				$_POST[transporte] = $array_exibir['transporte'];
				$_POST[periodo] = $array_exibir['periodo'];
				$_POST[email] = $array_exibir['email'];
				$_POST[telefone2] = $array_exibir['telefone2'];
				$_POST[telefone] = $array_exibir['telefone'];
				$_POST[cep] = $array_exibir['cep'];
				$_POST[uf] = $array_exibir['uf'];
				$_POST[cidade] = $array_exibir['cidade'];
				$_POST[bairro] = $array_exibir['bairro'];
				$_POST[endereco] = $array_exibir['endereco'];
				$_POST[estadocivil] = $array_exibir['estadocivil'];
				$_POST[passaporte] = $array_exibir['passaporte'];
				$_POST[cpf] = $array_exibir['cpf'];
				$_POST[dataexp] = $array_exibir['dataexp'];
				$_POST[emissor] = $array_exibir['emissor'];
				$_POST[identidade] = $array_exibir['identidade'];
				$_POST[raca] = $array_exibir['raca'];
				$_POST[sexo] = $array_exibir['sexo'];
				$_POST[naturalidade] = $array_exibir['naturalidade'];
				$_POST[nacionalidade] = $array_exibir['nacionalidade'];
				$_POST[datanasc] = $array_exibir['datanasc'];
				$_POST[mae] = $array_exibir['mae'];
				$_POST[pai] = $array_exibir['pai'];
				$_POST[nome] = $array_exibir['nome'];
				$_POST[ano_matricula] = $array_exibir['ano_matricula'];
				$_POST[matricula] = $array_exibir['matricula'];
				$_POST[cod] = $array_exibir['cod'];
				$_POST[formado] = $array_exibir['formado'];
		
    $_POST[ano] = substr($_POST[datanasc], 0, -6);  // retorna "ano"
    $_POST[mes] = substr($_POST[datanasc], 5, -3);  // retorna "mês"
    $_POST[dia] = substr($_POST[datanasc], 8, 2); // retorna "dia"
    $_POST[ano2] = substr($_POST[dataexp], 0, -6);  // retorna "ano2"
    $_POST[mes2] = substr($_POST[dataexp], 5, -3);  // retorna "mês2"
    $_POST[dia2] = substr($_POST[dataexp], 8, 2); // retorna "dia2"
								
			}
			

}
//************************************************************************************************
?>

<html>
<head>

<script language=javascript>
function Mascara (formato, keypress, objeto){
campo = eval (objeto);

// cep
if (formato=='cep'){
separador = '-';
conjunto1 = 5;
if (campo.value.length == conjunto1){
campo.value = campo.value + separador;}
}

// cpf
if (formato=='cpf'){
separador1 = '.'; 
separador2 = '-'; 
conjunto1 = 3;
conjunto2 = 7;
conjunto3 = 11;
if (campo.value.length == conjunto1)
  {
  campo.value = campo.value + separador1;
  }
if (campo.value.length == conjunto2)
  {
  campo.value = campo.value + separador1;
  }
if (campo.value.length == conjunto3)
  {
  campo.value = campo.value + separador2;
  }
}

// nascimento
if (formato=='nascimento'){
separador = '/'; 
conjunto1 = 2;
conjunto2 = 5;
if (campo.value.length == conjunto1)
  {
  campo.value = campo.value + separador;
  }
if (campo.value.length == conjunto2)
  {
  campo.value = campo.value + separador;
  }
}
// dataexp
if (formato=='dataexp'){
separador = '/'; 
conjunto1 = 2;
conjunto2 = 5;
if (campo.value.length == conjunto1)
  {
  campo.value = campo.value + separador;
  }
if (campo.value.length == conjunto2)
  {
  campo.value = campo.value + separador;
  }
}
// telefone
if (formato=='telefone'){

if (campo.value.length == 0)
campo.value = '(' + campo.value;

if (campo.value.length == 3)
campo.value = campo.value + ') ';

if (campo.value.length == 9)
campo.value = campo.value + '-';

}


}
</SCRIPT>


<script language="JavaScript1.2">

function SoNumero() {
if (event.keyCode<48 || event.keyCode>57)
event.returnValue = false;
if (event.keyCode==13)
event.returnValue = true;
}

//DESABILITA O ENTER ----------------------------------------------------------------------------
function handleEnter (field, event) {
        var keyCode = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;
        if (keyCode == 13) {
            var i;
            for (i = 0; i < field.form.elements.length; i++)
                if (field == field.form.elements[i])
                    break;
            i = (i + 1) % field.form.elements.length;
            field.form.elements[i].focus();
            return false;
        }
        else
        return true;
    }      
//FIM DESABILITA O ENTER ------------------------------------------------------------------------
</SCRIPT>

<script>
function send(codigo){

	document.form1.cod.value=codigo;
	document.form1.submit();

}

function avalia_incluir(form) {
 
 if (form1.matricula1.value == "") {
     alert("O campo Matrícula 1 deve estar preenchido");
	 form1.matricula1.focus();
     return false;
  }
 if (form1.matricula2.value == "") {
     alert("O campo Matrícula 2 deve estar preenchido");
	 form1.matricula2.focus();
     return false;
  }

} 
</script>


<title>Escola Nacional de Circo - FUNARTE</title>
<link href='estilofuna.css' rel='stylesheet' type='text/css'>

</head>

<body>


<form method="post" name="form1" action="alunos.php">
<h2><center><a href="alunos.php">Cadastro de Alunos</a></center></h2>


  <table width="80%" align="center" cellpadding="2" cellspacing="2" style="border:solid 1px #333333;">
	<tr>
	<td>C&oacute;digo do Registro:</td>
	<td colspan="3"><input type="text" name="cod" size="3" value="<? echo $_POST[cod]; ?>" readonly="true"></td>
	</tr>

      <tr>
        <td bgcolor="#999966">Formado?:&nbsp;</td>
        <td colspan="3">
		<input type="checkbox" name="formado" value="1">
<? if ($_POST[formado] == 1) { ?>
<script>document.form1.formado.checked='true';</script><? } ?>

</td>
      </tr>
	
      <tr>
        <td bgcolor="#999966">Matrícula:&nbsp;</td>
        <td colspan="3"><input type="text" name="matricula" size="20" value="<? echo $_POST[matricula]; ?>" style="background:#CCCCCC;"  onKeyPress="return handleEnter(this, event);" id="matricula">
</td>
      </tr>
  <tr>
  <td bgcolor="#999966">Nome:</td>
      <td colspan="3"><input type="text" name="nome" value="<? echo $_POST[nome]; ?>" size="50" onChange="javascript:this.value=this.value.toUpperCase();" onKeyPress="return handleEnter(this, event)"></td>
  <tr>
    <td colspan="4" style="background-color:#FFFFCC;" align="center"><font color="#000000"><b>Filiação</b></font></td>
  </tr>
  <tr>
    <td bgcolor="#999966">Nome do Pai:</td>
    <td><input type="text" name="pai" value="<? echo $_POST[pai]; ?>" size="40" onChange="javascript:this.value=this.value.toUpperCase();" onKeyPress="return handleEnter(this, event)"></td>
    <td bgcolor="#999966">Nome da M&atilde;e:</td>
    <td><input type="text" name="mae" value="<? echo $_POST[mae]; ?>" size="40" onChange="javascript:this.value=this.value.toUpperCase();" onKeyPress="return handleEnter(this, event)"></td>
  </tr>
  <tr>
    <td colspan="4" style="background-color:#FFFFCC;" align="center"><font color="#000000"><b>Dados Pessoais</b></font></td>
  </tr>
  <tr valign="baseline">
    <td bgcolor="#999966">Nascimento:</td>
    <td colspan="3"><input type="text" name="dia" size="2" value="<? echo $_POST[dia]; ?>" style="background:#CCCCCC" maxlength="2" onKeyPress="javascript:SoNumero();" id="dia">
      &nbsp;/&nbsp;
      <input type="text" name="mes" size="2" value="<? echo $_POST[mes]; ?>" style="background:#CCCCCC" maxlength="2" onKeyPress="javascript:SoNumero();" id="mes">
      &nbsp;/&nbsp;
      <input type="text" name="ano" size="4" value="<? echo $_POST[ano]; ?>" style="background:#CCCCCC" maxlength="4" onKeyPress="javascript:SoNumero();" id="ano"></td>
  </tr>
  <tr>
    <td bgcolor="#999966">Nacionalidade:</td>
    <td><input type="text" name="nacionalidade" value="<? echo $_POST[nacionalidade]; ?>" size="30" onChange="javascript:this.value=this.value.toUpperCase();" onKeyPress="return handleEnter(this, event)"></td>
    <td bgcolor="#999966">Naturalidade:</td>
    <td><input type="text" name="naturalidade" value="<? echo $_POST[naturalidade]; ?>" size="40" onChange="javascript:this.value=this.value.toUpperCase();" onKeyPress="return handleEnter(this, event)"></td>
  </tr>
  <tr>
    <td bgcolor="#999966">Sexo</td>
    <td><select name="sexo" onkeypress="return handleEnter(this, event)">
      <option value="<? echo $_POST[sexo]; ?>"><? echo $_POST[sexo]; ?></option>
      <option value="FEMININO">FEMININO</option>
      <option value="MASCULINO">MASCULINO</option>
    </select></td>
    <td bgcolor="#999966">Cor / Ra&ccedil;a: </td>
    <td><select name="raca" onkeypress="return handleEnter(this, event)">
      <option value="<? echo $_POST[raca]; ?>"><? echo $_POST[raca]; ?></option>
       <option value="NÃO DECLARADA">NÃO DECLARADA</option>
       <option value="PARDA">PARDA</option>
       <option value="BRANCA">BRANCA</option>
       <option value="PRETA">PRETA</option>
       <option value="AMARELA">AMARELA</option>
       <option value="INDÍGENA">INDÍGENA</option>
    </select></td>
  </tr>
  <tr>
    <td colspan="4" style="background-color:#FFFFCC;" align="center"><font color="#000000"><b>Documentação</b></font></td>
  </tr>
  <tr>
    <td bgcolor="#999966">Identidade:</td>
    <td><input name="identidade" type="text" id="identidade" onChange="javascript:this.value=this.value.toUpperCase();" onKeyPress="return handleEnter(this, event)" value="<? echo $_POST[identidade]; ?>" size="40"></td>
    <td bgcolor="#999966">Emissor: </td>
    <td><input name="emissor" type="text" id="emissor" onChange="javascript:this.value=this.value.toUpperCase();" onKeyPress="return handleEnter(this, event)" value="<? echo $_POST[emissor]; ?>" size="10"></td>
  </tr>
  <tr>
    <td bgcolor="#999966">Expedi&ccedil;&atilde;o: </td>
    <td><input type="text" name="dia2" size="2" value="<? echo $_POST[dia2]; ?>" style="background:#CCCCCC" maxlength="2" onKeyPress="javascript:SoNumero();" id="dia2">
      &nbsp;/&nbsp;
      <input type="text" name="mes2" size="2" value="<? echo $_POST[mes2]; ?>" style="background:#CCCCCC" maxlength="2" onKeyPress="javascript:SoNumero();" id="mes2">
      &nbsp;/&nbsp;
      <input type="text" name="ano2" size="4" value="<? echo $_POST[ano2]; ?>" style="background:#CCCCCC" maxlength="4" onKeyPress="javascript:SoNumero();" id="ano2"></td>
    <td bgcolor="#999966">CPF:</td>
    <td><input name="cpf" type="text" id="cpf" onChange="javascript:this.value=this.value.toUpperCase();" onKeyPress="javascript:SoNumero();Mascara('cpf', window.event.keyCode, 'document.form1.cpf');" value="<? echo $_POST[cpf]; ?>" size="14" maxlength="14"></td>
  </tr>
  <tr>
    <td bgcolor="#999966">Passaporte:</td>
    <td><input name="passaporte" type="text" id="passaporte" onChange="javascript:this.value=this.value.toUpperCase();" onKeyPress="return handleEnter(this, event)" value="<? echo $_POST[passaporte]; ?>" size="40"></td>
    <td bgcolor="#999966">Estado Civil: </td>
    <td><select name="estadocivil" id="estadocivil" onkeypress="return handleEnter(this, event)">
      <option value="<? echo $_POST[estadocivil]; ?>"><? echo $_POST[estadocivil]; ?></option>
      <option value="">SELECIONE O ESTADO CIVIL</option>
      <option value="SOLTEIRO">SOLTEIRO</option>
      <option value="CASADO">CASADO</option>
      <option value="DIVORCIADO">DIVORCIADO</option>
      <option value="VIUVO">VI&Uacute;VO</option>
    </select></td>
  </tr>
  <tr>
    <td colspan="4" style="background-color:#FFFFCC;" align="center"><font color="#000000"><b>Endereço</b></font></td>
  </tr>
  <tr>
    <td bgcolor="#999966">Endereco:</td>
    <td><input type="text" name="endereco" value="<? echo $_POST[endereco]; ?>" size="40" onChange="javascript:this.value=this.value.toUpperCase();" onKeyPress="return handleEnter(this, event)"></td>
    <td bgcolor="#999966">Bairro:</td>
    <td><input type="text" name="bairro" value="<? echo $_POST[bairro]; ?>" size="40" onChange="javascript:this.value=this.value.toUpperCase();" onKeyPress="return handleEnter(this, event)"></td>
  </tr>
  <tr>
    <td bgcolor="#999966">Cidade:</td>
    <td><input type="text" name="cidade" value="<? echo $_POST[cidade]; ?>" size="40" onChange="javascript:this.value=this.value.toUpperCase();" onKeyPress="return handleEnter(this, event)"></td>
    <td bgcolor="#999966">Uf:</td>
    <td><select name="uf" onkeypress="return handleEnter(this, event)">
      <option value="<? echo $_POST[uf]; ?>"><? echo $_POST[uf]; ?></option>
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
      <option value="MT">MT</option>
      <option value="MS">MS</option>
      <option value="PA">PA</option>
      <option value="PB">PB</option>
      <option value="PE">PE</option>
      <option value="PI">PI</option>
      <option value="PR">PR</option>
      <option value="RJ" selected>RJ</option>
      <option value="RN">RN</option>
      <option value="RS">RS</option>
      <option value="RO">RO</option>
      <option value="RR">RR</option>
      <option value="SC">SC</option>
      <option value="SE">SE</option>
      <option value="SP">SP</option>
      <option value="TO">TO</option>
    </select></td>
  </tr>
  <tr>
    <td bgcolor="#999966">Cep:</td>
    <td><input type="text" name="cep" value="<? echo $_POST[cep]; ?>" maxlength="9" size="20" onKeyPress="javascript:SoNumero();Mascara('cep', window.event.keyCode, 'document.form1.cep');"></td>
    <td bgcolor="#999966">Telefone:</td>
    <td><input type="text" name="telefone" value="<? echo $_POST[telefone]; ?>" maxlength="14" size="20" onKeyPress="javascript:SoNumero();Mascara('telefone', window.event.keyCode, 'document.form1.telefone');"></td>
  </tr>
  <tr>
    <td bgcolor="#999966">Email:</td>
    <td ><input type="text" name="email" value="<? echo $_POST[email]; ?>" size="40" onKeyPress="return handleEnter(this, event)"></td>  
    <td bgcolor="#999966">Telefone 2 :</td>
    <td><input type="text" name="telefone2" value="<? echo $_POST[telefone2]; ?>" maxlength="14" size="20" onKeyPress="javascript:SoNumero();Mascara('telefone', window.event.keyCode, 'document.form1.telefone2');"></td>
  </tr>
  <tr>
  <td>Transporte Escolar Público:</td>
    <td bgcolor="#999966" colspan="3">      
      <select name="transporte" id="transporte" onkeypress="return handleEnter(this, event)">
        <option value="<? echo $_POST[transporte]; ?>"><? echo $_POST[transporte]; ?></option>
        <? if ($_POST[transporte] != "NÃO UTILIZA") { ?>
		<option value="NÃO UTILIZA">NÃO UTILIZA</option>
        <? } ?>

        <? if ($_POST[transporte] != "UTILIZA") { ?>
        <option value="UTILIZA">UTILIZA</option>
        <? } ?>
      </select></td>
      </tr>
  <tr>
    <td colspan="4" style="background-color:#FFFFCC;" align="center"><font color="#000000"><b>Plano de Sa&uacute;de</b></font></td>
  </tr>
  <tr>
    <td bgcolor="#999966">Plano de Sa&uacute;de: </td>
    <td><input name="plano" type="text" id="plano" onKeyPress="return handleEnter(this, event)" value="<? echo $_POST[plano]; ?>" size="40"></td>
    <td bgcolor="#999966">Validade:</td>
    <td><input name="validade" type="text" id="validade" onChange="javascript:this.value=this.value.toUpperCase();" onKeyPress="return handleEnter(this, event)" value="<? echo $_POST[validade]; ?>" size="40">    </td>
  </tr>
  <tr>
    <td bgcolor="#999966"><p>Em caso de acidente avisar a: </p></td>
    <td><input name="acidente" type="text" id="acidente" onKeyPress="return handleEnter(this, event)" value="<? echo $_POST[acidente]; ?>" size="40"></td>
    <td bgcolor="#999966">Tipo Sangue: </td>
    <td><select name="tiposangue" id="tiposangue" onkeypress="return handleEnter(this, event)">
      <option value="<? echo $_POST[tiposangue]; ?>"><? echo $_POST[tiposangue]; ?></option>
      <option value="A POSITIVO">A POSITIVO</option>
      <option value="A NEGATIVO">A NEGATIVO</option>
      <option value="B POSITIVO">B POSITIVO</option>
      <option value="B NEGATIVO">B NEGATIVO</option>
      <option value="AB POSITIVO">AB POSITIVO</option>
      <option value="AB NEGATIVO">AB NEGATIVO</option>
      <option value="O POSITIVO">O POSITIVO</option>
      <option value="O NEGATIVO">O NEGATIVO</option>
    </select></td>
  </tr>
  <tr>
    <td colspan="4" style="background-color:#FFFFCC;" align="center"><font color="#000000"><b>Histórico Escolar</b></font></td>
  </tr>
  <tr>
    <td bgcolor="#999966">Escolaridade:</td>
    <td colspan="3"><select name="escolaridade" id="escolaridade" onkeypress="return handleEnter(this, event)">
      <option value="<? echo $_POST[escolaridade]; ?>"><? echo $_POST[escolaridade]; ?></option>
      <option value="FUNDAMENTAL INCOMPLETO">FUNDAMENTAL INCOMPLETO</option>
      <option value="FUNDAMENTAL COMPLETO">FUNDAMENTAL COMPLETO</option>
      <option value="MEDIO INCOMPLETO">MÉDIO INCOMPLETO</option>
      <option value="MEDIO COMPLETO">MÉDIO COMPLETO</option>
      <option value="SUPERIOR INCOMPLETO">SUPERIOR INCOMPLETO</option>
      <option value="SUPERIOR COMPLETO">SUPERIOR COMPLETO</option>
    </select>    </td>
  </tr>
  <tr>
    <td bgcolor="#999966">Professor:</td>
    <td colspan="3"><textarea name="professor" id="textarea" cols="80" rows="5" onChange="javascript:this.value=this.value.toUpperCase();"><? echo $_POST[professor]; ?></textarea></td>
  </tr>
  <tr>
    <td bgcolor="#999966">Obs:</td>
    <td colspan="3"><textarea name="obs" id="textarea" cols="80" rows="5" onChange="javascript:this.value=this.value.toUpperCase();"><? echo $_POST[obs]; ?></textarea></td>
  </tr>
  <? //LINHA QUE FAZ A EXIBIÇÃO DA CONSULTA *********************************** ?>
  <tr>
    <td colspan="4" align="right" style="background-color:#FFFFCC;">
      <table width="300" align="center">
        <tr>
          <td><label>
            <input type="radio" name="busca" value="1" id="busca_1" checked>
            Aluno</label></td>
        
          <td><label>
            <input type="radio" name="busca" value="3" id="busca_3">
            Matr&iacute;cula</label></td>
        </tr>
      </table>
   <div align="center">   <input name="busca_aluno" type="text" id="busca_aluno" size="20"  onKeyPress="return handleEnter(this, event)">
      &nbsp;
      <input type="submit" name="consultar" value="Buscar" onKeyPress="return handleEnter(this, event)"></div></td>
  </tr>

  <tr>
    <td align="left" class="formu2" bgcolor="#999966">Consulta:</td>
    <td colspan="3"><?
if ($consultar == "Buscar" && $busca == "1") {

		if (mysql_num_rows($Resultado) > 0) {


			while ($array_exibir = mysql_fetch_array($Resultado)) {
			
				$codigo33 = $array_exibir['obs'];
				$codigo32 = $array_exibir['professor'];
				$codigo31 = $array_exibir['escolaridade'];
				$codigo30 = $array_exibir['tiposangue'];
				$codigo29 = $array_exibir['acidente'];
				$codigo28 = $array_exibir['validade'];
				$codigo27 = $array_exibir['plano'];
				$codigo26 = $array_exibir['transporte'];
				$codigo25 = $array_exibir['periodo'];
				$codigo24 = $array_exibir['email'];
				$codigo23 = $array_exibir['telefone2'];
				$codigo22 = $array_exibir['telefone'];
				$codigo21 = $array_exibir['cep'];
				$codigo20 = $array_exibir['uf'];
				$codigo19 = $array_exibir['cidade'];
				$codigo18 = $array_exibir['bairro'];
				$codigo17 = $array_exibir['endereco'];
				$codigo16 = $array_exibir['estadocivil'];
				$codigo15 = $array_exibir['passaporte'];
				$codigo14 = $array_exibir['cpf'];
				$codigo13 = $array_exibir['dataexp'];
				$codigo12 = $array_exibir['emissor'];
				$codigo11 = $array_exibir['identidade'];
				$codigo10 = $array_exibir['raca'];
				$codigo9 = $array_exibir['sexo'];
				$codigo8 = $array_exibir['naturalidade'];
				$codigo7 = $array_exibir['nacionalidade'];
				$codigo6 = $array_exibir['datanasc'];
				$codigo5 = $array_exibir['mae'];
				$codigo4 = $array_exibir['pai'];
				$codigo3 = $array_exibir['nome'];
				$codigo2 = $array_exibir['ano_matricula'];
				$codigo1 = $array_exibir['matricula'];
				$codigo = $array_exibir['cod'];
		
    $ano = substr($codigo6, 0, -6);  // retorna "ano"
    $mes = substr($codigo6, 5, -3);  // retorna "mês"
    $dia = substr($codigo6, 8, 2); // retorna "dia"
	 $ano2 = substr($codigo13, 0, -6);  // retorna "ano2"
    $mes2 = substr($codigo13, 5, -3);  // retorna "mês2"
    $dia2 = substr($codigo13, 8, 2); // retorna "dia2"
								
				echo "		   <a href=\"javascript:send('". $codigo ."')\">";
											   echo $codigo3;
				echo "		   </a>";


echo "<br>";

unset($consultar);
			

			}
			
		}
}
 
if ($consultar == "Buscar" && $busca == "2") {

		if (mysql_num_rows($Resultado) > 0) {


			while ($array_exibir = mysql_fetch_array($Resultado)) {
			
				$codigo33 = $array_exibir['obs'];
				$codigo32 = $array_exibir['professor'];
				$codigo31 = $array_exibir['escolaridade'];
				$codigo30 = $array_exibir['tiposangue'];
				$codigo29 = $array_exibir['acidente'];
				$codigo28 = $array_exibir['validade'];
				$codigo27 = $array_exibir['plano'];
				$codigo26 = $array_exibir['transporte'];
				$codigo25 = $array_exibir['periodo'];
				$codigo24 = $array_exibir['email'];
				$codigo23 = $array_exibir['telefone2'];
				$codigo22 = $array_exibir['telefone'];
				$codigo21 = $array_exibir['cep'];
				$codigo20 = $array_exibir['uf'];
				$codigo19 = $array_exibir['cidade'];
				$codigo18 = $array_exibir['bairro'];
				$codigo17 = $array_exibir['endereco'];
				$codigo16 = $array_exibir['estadocivil'];
				$codigo15 = $array_exibir['passaporte'];
				$codigo14 = $array_exibir['cpf'];
				$codigo13 = $array_exibir['dataexp'];
				$codigo12 = $array_exibir['emissor'];
				$codigo11 = $array_exibir['identidade'];
				$codigo10 = $array_exibir['raca'];
				$codigo9 = $array_exibir['sexo'];
				$codigo8 = $array_exibir['naturalidade'];
				$codigo7 = $array_exibir['nacionalidade'];
				$codigo6 = $array_exibir['datanasc'];
				$codigo5 = $array_exibir['mae'];
				$codigo4 = $array_exibir['pai'];
				$codigo3 = $array_exibir['nome'];
				$codigo2 = $array_exibir['ano_matricula'];
				$codigo1 = $array_exibir['matricula'];
				$codigo = $array_exibir['cod'];
		
    $ano = substr($codigo6, 0, -6);  // retorna "ano"
    $mes = substr($codigo6, 5, -3);  // retorna "mês"
    $dia = substr($codigo6, 8, 2); // retorna "dia"
	 $ano2 = substr($codigo13, 0, -6);  // retorna "ano2"
    $mes2 = substr($codigo13, 5, -3);  // retorna "mês2"
    $dia2 = substr($codigo13, 8, 2); // retorna "dia2"
								
				echo "		   <a href=\"javascript:send('". $codigo ."')\">";
											   echo $codigo25." ".$codigo3;
				echo "		   </a>";


echo "<br>";	

unset($consultar);
		

			}
			
		}
}

if ($consultar == "Buscar" && $busca == "3") {

		if (mysql_num_rows($Resultado) > 0) {


			while ($array_exibir = mysql_fetch_array($Resultado)) {
			
				$codigo33 = $array_exibir['obs'];
				$codigo32 = $array_exibir['professor'];
				$codigo31 = $array_exibir['escolaridade'];
				$codigo30 = $array_exibir['tiposangue'];
				$codigo29 = $array_exibir['acidente'];
				$codigo28 = $array_exibir['validade'];
				$codigo27 = $array_exibir['plano'];
				$codigo26 = $array_exibir['transporte'];
				$codigo25 = $array_exibir['periodo'];
				$codigo24 = $array_exibir['email'];
				$codigo23 = $array_exibir['telefone2'];
				$codigo22 = $array_exibir['telefone'];
				$codigo21 = $array_exibir['cep'];
				$codigo20 = $array_exibir['uf'];
				$codigo19 = $array_exibir['cidade'];
				$codigo18 = $array_exibir['bairro'];
				$codigo17 = $array_exibir['endereco'];
				$codigo16 = $array_exibir['estadocivil'];
				$codigo15 = $array_exibir['passaporte'];
				$codigo14 = $array_exibir['cpf'];
				$codigo13 = $array_exibir['dataexp'];
				$codigo12 = $array_exibir['emissor'];
				$codigo11 = $array_exibir['identidade'];
				$codigo10 = $array_exibir['raca'];
				$codigo9 = $array_exibir['sexo'];
				$codigo8 = $array_exibir['naturalidade'];
				$codigo7 = $array_exibir['nacionalidade'];
				$codigo6 = $array_exibir['datanasc'];
				$codigo5 = $array_exibir['mae'];
				$codigo4 = $array_exibir['pai'];
				$codigo3 = $array_exibir['nome'];
				$codigo2 = $array_exibir['ano_matricula'];
				$codigo1 = $array_exibir['matricula'];
				$codigo = $array_exibir['cod'];

		
    $ano = substr($codigo6, 0, -6);  // retorna "ano"
    $mes = substr($codigo6, 5, -3);  // retorna "mês"
    $dia = substr($codigo6, 8, 2); // retorna "dia"
	 $ano2 = substr($codigo13, 0, -6);  // retorna "ano2"
    $mes2 = substr($codigo13, 5, -3);  // retorna "mês2"
    $dia2 = substr($codigo13, 8, 2); // retorna "dia2"
	$matr = $codigo1."/".$codigo2;
								
				echo "		   <a href=\"javascript:send('". $codigo ."')\">";
											   echo $matr." ".$codigo3;
				echo "		   </a>";


echo "<br>";	

unset($consultar);
		

			}
			
		}
}
?>   </tr>
  <? // FIM DA CONSULTA *********************************************************** ?>
  </table>

  <br>
<center>
<input type="submit" name="cadastrar" value="Cadastrar" class="botao" onKeyPress="return handleEnter(this, event)" onClick="return avalia_incluir(this);">&nbsp;
<input type="submit" name="atualizar" value="Atualizar" class="botao" onKeyPress="return handleEnter(this, event)" onChange="return avalia(this);">&nbsp;
<input type="submit" name="excluir" value="Excluir" class="botao" onKeyPress="return handleEnter(this, event)" onChange="return avalia(this);"><br><br></center>

</form>

<? if ($_POST[cod] != "") { $_SESSION[aluno] = $_POST[cod]; ?>

<iframe frameborder="0" width="100%" height="300px" scrolling="auto" src="circulacao.php"></iframe>

<? } ?>
</body>
</html>
