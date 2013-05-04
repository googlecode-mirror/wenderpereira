<? 
header("Cache-Control: no-cache, must-revalidate");
include "conexao.php";
connect();
?>


<html>
<head>

<title>Funarte</title>
<link href='estilofuna.css' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="table_sorter/jquery.js"></script> 
<script type="text/javascript" src="table_sorter/jquery.tablesorter.js"></script>
<script type="text/javascript">
$(document).ready(function() 
    { 
        $("#myTable").tablesorter(); 
    } 
); 
</script>
<style type="text/css">
	*	{
		font-family: Verdana;
		font-size: 12px;
	}
	
	table, tr, th, td	{
		border: 1px solid black;
		background-color: #CCCCCC;
	}
	
	tr th	{
		background-image: url(table_sorter/bg.gif);  
		background-repeat: no-repeat; 
		background-position: center right; 
		background-color: #FFFFFF;
		cursor: pointer;
	}
	
	tr td	{
		background-color: #FFFFFF;
	}
</style>

</head>

<body>

<? $_pagi_sql = "select a.matricula, a.nome, c.periodo, c.ano, c.semestre, a.cod
from alunos a, circulacao c
where a.cod=c.id_aluno and 
a.nome like '%".$_POST[cons_nome]."%' and c.periodo like '%".$_POST[cons_periodo]."%' and c.ano = '".$_POST[cons_ano]."' and c.semestre = '".$_POST[cons_semestre]."' order by nome"; 

$_pagi_cuantos = 40; 

include("paginacao/paginator.inc.php"); 

?>


<form name="form1" action="listagem.php" method="post">
Nome: <input type="text" name="cons_nome" size="20" value="<? echo $_POST["cons_nome"]; ?>">&nbsp;
Per�odo: <select name="cons_periodo">
<option value="<? echo $_POST["cons_periodo"]; ?>"><? echo $_POST["cons_periodo"]; ?></option>
<option value="1�">1�</option>
<option value="2�">2�</option>
<option value="3�">3�</option>
<option value="4�">4�</option>
<option value="5�">5�</option>
<option value="6�">6�</option>
<option value="7�">7�</option>
<option value="8�">8�</option>
</select>&nbsp;

Ano: <input type="text" name="cons_ano" size="5" value="<? echo date("Y"); ?>">

Semestre: <select name="cons_semestre">
<option value="<? echo $_POST["cons_semestre"]; ?>"><? echo $_POST["cons_semestre"]; ?></option>
<? if ($_POST["cons_semestre"] != "1�") { ?>
<option value="1�">1�</option>
<? } ?>

<? if ($_POST["cons_semestre"] != "2�") { ?>
<option value="2�">2�</option>
<? } ?>
</select>

<input type="submit" value="Pesquisar" name="pesquisar">
<br><br>
<center>
<b>Listagem <? echo $_POST["cons_periodo"]." Per&iacute;odo - ".$_POST["cons_semestre"]." Semestre - ".$_POST["cons_ano"]; ?></b>
</center>
<br><br>
<table id="myTable" width="100%">  <thead> 
<tr> 
    <th>Matr�cula</th> 
    <th>Nome</th> 
    <th>Per�odo</th> 
    <th>Ano</th> 
    <th>Semestre</th> 
</tr> 
</thead> 
<tbody> 



<?			

			while($row = mysql_fetch_array($_pagi_result)){ 



				$matricula = $row['matricula'];

				$nome = $row['nome'];
				$cod = $row['cod'];

				$periodo = $row['periodo'];
				$ano = $row['ano'];
				$semestre = $row['semestre'];

?>

  <tr>


	<td align="left" style="padding-left:10px; background:#FFFFCC;">
	<? echo "<a href='alunos.php?cod=$cod'>".$matricula."</a>"; ?></td>

	<td align="left" style="padding-left:10px; background:#FFFFCC;">
	<? echo "<a href='alunos.php?cod=$cod'>".$nome."</a>"; ?></td>

	<td align="left" style="padding-left:10px; background:#FFFFCC;">
	<? echo "<a href='alunos.php?cod=$cod'>".$periodo."</a>"; ?></td>

	<td align="left" style="padding-left:10px; background:#FFFFCC;">
	<? echo "<a href='alunos.php?cod=$cod'>".$ano."</a>"; ?></td>

	<td align="left" style="padding-left:10px; background:#FFFFCC;">
	<? echo "<a href='alunos.php?cod=$cod'>".$semestre."</a>"; ?></td>

  </tr>

<? } ?>




</tbody>
</TABLE>

<?

echo "<br>";			

echo "<br>";			

echo"<p style='text-align:left; padding-left:30px;'>".$_pagi_navegacion."</p>";

?>
</form>
</body>
</html>
