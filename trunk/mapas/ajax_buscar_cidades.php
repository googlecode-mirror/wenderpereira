
<?
include "../conexao.php";
connect();

$estado = $_GET['estado'];  //codigo do estado passado por parametro
$sql = "SELECT endereco,municipio FROM mapeamentopartei where unidadefederativa='$estado'";

   $Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
   $i=0;
	$arrCidades = array();
   while ($array_exibir = mysql_fetch_array($Resultado)) 
	{
	$arrCidades[$array_exibir['municipio']] = ($array_exibir['endereco']);

	$i++;
	}
?>
<!--<label>Cidades:</label>-->
<select name="cidade" id="cidade">
  <?php foreach($arrCidades as $value => $nome){
    echo "<option value='{$value}'>{$nome}</option>";
  }
?>
</select>

