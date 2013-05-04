<?
session_start();
include "conexao.php";
connect();


/*
ROTINA RESPONSÁVEL PELO CADASTRAMENTO DAS INFORMAÇÕES
**************************************************************************************************
*/
if ($_POST[cadastrar] == "Cadastrar") {

$consulta = "INSERT INTO circulacao_reciclando (id_aluno, periodo, ano, semestre) VALUES ('".$_SESSION[aluno]."', '".$_POST[periodo]."', '".$_POST[ano]."',  '".$_POST[semestre]."')";
$resultado = mysql_query($consulta)
or die ("Falha na inserção dos dados");
?><script language="javascript">alert('Cadastro Realizado com Sucesso!!!');</script><? 

} 

//************************************************************************************************
?>

<?
/*
ROTINA RESPONSÁVEL PELA EXCLUSÃO
**************************************************************************************************
*/
if ($_GET[exc] != "") { ?>
<script language="javascript">
if (confirm("Esse registro sera excluido do sistema!\nTem certeza que deseja continuar?") == true) {
window.location.href='circulacao_reciclando.php?excluir=EXCLUIR2&cod=<? echo $_GET[exc]; ?>';
 } else {
window.location.href='circulacao_reciclando.php?excluir=';
}
</script>
<? } ?><?
if ($_GET[excluir] == "EXCLUIR2") {

    $sqlquery = "DELETE FROM circulacao_reciclando WHERE id = '".$_GET[cod]."'";
	$process = mysql_query($sqlquery) or die("Erro: " . mysql_error());

?><script language="javascript">alert('Registro Excluido com Sucesso!!!');</script><? 
 }
//************************************************************************************************
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Funarte</title>
<link href='estilofuna.css' rel='stylesheet' type='text/css'>
</head>

<body>
<form name="form1" action="circulacao_reciclando.php" method="post">
  <table width="80%" align="center" cellpadding="2" cellspacing="2" style="border:solid 1px #333333;">
	<tr>
	<td style="display:none;">C&oacute;digo do Registro:</td>
	<td style="display:none;">
	<input type="text" name="id" size="3" value="<? echo $_POST[id]; ?>" readonly="true">
	</td>

	<td>ID Aluno:</td>
	<td>
	<input type="text" name="id_aluno" size="3" value="<? echo $_SESSION[aluno]; ?>" readonly="true">
	</td>

	<td>Ano:</td>
	<td>
	<input type="text" name="ano" size="3" value="<? echo $_POST[ano]; ?>" maxlength="4">
	</td>

	<td bgcolor="#999966">Semestre:</td>
        <td><select name="semestre" id="semestre">
          <option value=""></option>
          <option value="1º">1º</option>
          <option value="2º">2º</option>
        </select></td>
	</tr>
	
	<tr>
	<td colspan="10" style="text-align:center;">
<input type="submit" name="cadastrar" value="Cadastrar" class="botao">&nbsp;
	</td>
	</tr>
	
</table>
<br><br>

<table style="width:100%; border:solid 1px #333333;">
<tr>
<td style="background-color:#333333; color:#FFFFFF;"><b>Ano</b></td>
<td style="background-color:#333333; color:#FFFFFF;"><b>Semestre</b></td>
<td style="background-color:#333333; color:#FFFFFF;"></td>
</tr>
<? 

$sql = "select c.id, r.nome, c.periodo, c.ano, c.semestre
from reciclando r, circulacao_reciclando c
where r.cod=c.id_aluno and id_aluno = $_SESSION[aluno] order by periodo";

$Resultado = mysql_query($sql) or die("Erro: ");

		if (mysql_num_rows($Resultado) > 0) {

			while ($array_exibir = mysql_fetch_array($Resultado)) {

				$id = $array_exibir['id'];
				
				$nome = $array_exibir['nome'];

				$periodo = $array_exibir['periodo'];

				$ano = $array_exibir['ano'];

				$semestre = $array_exibir['semestre'];
				
				// Colorir linha sim, linha não ####################
				$cont = $cont + 1;
				if ($cont % 2) { $bg = "#CCC"; } else {
				$bg = "#FFF"; }
				// Colorir linha sim, linha não ####################

				if ($cont == 1) { echo "<tr><td colspan='4' style='background-color:#CCC; color:#000;'><b>".$nome."</b></td></tr>"; }

				echo "<tr>";
				
				echo "<td style='background-color:$bg;'>";
				echo $ano;
				echo "</td>";

				echo "<td style='background-color:$bg;'>";
				echo $semestre;
				echo "</td>";
				
				
				echo "<td style='text-align:center; background-color:$bg;'>
				<a href='circulacao_reciclando.php?exc=$id'>
				<img src='imagebox/excluir.jpg' alt='Excluir Registro' title='Excluir Registro'>
				</a>
				</td>
				</tr>";
				}

echo "</table></center><br>";

}

?>

</body>
</html>
