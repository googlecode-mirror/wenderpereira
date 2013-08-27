<? 
session_start();
header("Cache-Control: no-cache, must-revalidate");
include "conexao.php";
connect();
?>


<?
// Qd clica no botão ATUALIZAR

if ($_POST[Salvar] != "") {
$insere = "insert into usuarios
             (
		login,
		senha,
		nome
			 )
			 values
			 (
		'".$_POST["login"]."',
		'".$_POST["senha"]."',
		'".$_POST["nome"]."'
					 )";
$resultado = mysql_query($insere)

or die ("Falha na execução da consulta");
?><script language="javascript1.2">alert('Registro Gravado com Sucesso!!!');</script><? 
}
?>

<html>
<head>

<title>FUNARTE</title>
<link href='estilofuna.css' rel='stylesheet' type='text/css'>

<script>
    function excluir(id){
        if (confirm('Confirmar Exclusão?')){
            window.location = 'delete_usuario.php?id='+id
    	}
    }
</script>

</head>

<body>

<? if ($_GET[mensagem] != "") { echo "<center><b>".$_GET[mensagem]."</b></center><br><br>"; } ?>

<?
$data = date("d/m/Y");
?>
<form name="form1" method="post" action="usuarios.php">
<center>
  <!--<table border="3" align="center" style="border:groove; width:480px;">
  <tr>
  <td colspan="4" style="background-color:#999966; color:#ffffff;" align="center"><b>Usuários</b></td>
  </tr>
  <tr>
    <td align="left" style="padding-left:10px;">Nome:</td>
    <td align="left">
	<input type="text" size="40" name="nome" value="" />
	</td>
  </tr>
  <tr>
    <td align="left" style="padding-left:10px;">Login:</td>
    <td align="left">
	<input type="text" size="40" name="login" value="" />
	</td>
  </tr>
  <tr>
  <td align="left" style="padding-left:10px;">Senha:</td>
  <td align="left">
  <input type="text" size="40" name="senha" value="" />
  </td>
  </tr>-->
  <? if ($_SESSION[login] == "wender" or $_SESSION[login] == "we") { ?>
  <tr>
  <td align="center" colspan="2"><br>
  <input type="submit" name="Salvar" value="Salvar" style="color:#000099" onKeyPress="return handleEnter(this, event)" id="at">&nbsp;	
</td>
</tr>
<? } ?>
</TABLE>
<br>
<table width="100%" border="3" align="center" style="border:groove">
<tr>
<td>Parte do texto:</td>
<td>
<input type="text" name="cons_nome" size="40">
</td>
<td><input type="submit" name="consultar" value="Consultar" /></td>
</tr>
</table>
<?
$_pagi_sql = " SELECT idmapeamento,nome,cargointituicao,cpf,email,telefone,usuario,data FROM mapeamento order by idmapeamento desc";
			
//quantidade de resultados por página (opcional, por padrão 20) 
$_pagi_cuantos = 40; 
//Incluímos o script de paginação. Este já executa a consulta automaticamente 
include("paginacao/paginator.inc.php"); 
?>
<table width="100%" border="3" align="center" style="border:groove" cellpadding="6">
  <tr>
    <td colspan="8" style="background-color:#999966; color:#ffffff;" align="center"><b>RESPONSÁVEL PELO PREENCHIMENTO DAS INFORMAÇÕES</b></td>
  </tr>
  <tr>
	<td align="left" style="width:10px;"></td>
	<td align="left" style="padding-left:8px; font-weight:bold; width:10px;">Cod</td>
	<td align="left" style="padding-left:10px; font-weight:bold;">Nome*</td>
	<td align="left" style="padding-left:10px; font-weight:bold;">Cargo Intituição*</td>
    <td align="left" style="padding-left:10px; font-weight:bold;">Cpf</td>
    <td align="left" style="padding-left:8px; font-weight:bold;">Email</td>
    <td align="left" style="padding-left:5px; font-weight:bold;">Telefone</td>
    <td align="left" style="padding-left:8px; font-weight:bold;">Usuario</td>
    <td align="left" style="padding-left:8px; font-weight:bold;">Data</td>
  </tr>
<?			
	while($row = mysql_fetch_array($_pagi_result)){ 
  		  $cod = $row['idmapeamento'];
		  $nome = $row['nome'];
		  $cargo = $row['cargointituicao'];
		  $cpf = $row['cpf'];
          $email = $row['email'];
		  $telefone = $row['telefone'];
		  $usuario = $row['usuario'];
		  $data = $row['data'];
		  
?>
  <tr>
<? if ($_SESSION[login] == "wender" or $_SESSION[login] == "rose") { ?>
    <? echo "<td align=\"center\"><a href=\"#\" onClick=\"excluir('". $cod . "')\">
	<img src=\"imagebox/excluir.jpg\" alt=\"Excluir\" height=\"16\" border=\"0\"></a></td>"; ?>
<? } else { echo "<td></td>"; } ?>
	<td align="left" style="padding-left:4px;">
	<? echo "<a href='acessando/mapeamento.php?aces=$login'>".$cod."</a>"; ?></td>
	<td align="left" style="padding-left:4px;">
    <? echo "<a href='acessando/mapeamento.php?aces=$login'>".$nome."</a>"; ?></td>
   	<td align="left" style="padding-left:4px;">
    <? echo "<a href='acessando/mapeamento.php?aces=$login'>".$cargo."</a>"; ?></td>
   	<td align="left" style="padding-left:4px;">
     <? echo "<a href='acessando/mapeamento.php?aces=$login'>".$cpf."</a>"; ?></td>
   	<td align="left" style="padding-left:6px;">
     <? echo "<a href='acessando/mapeamento.php?aces=$login'>".$email."</a>"; ?></td> 
   	<td align="left" style="padding-left:4px;">
     <? echo "<a href='acessando/mapeamento.php?aces=$login'>".$telefone."</a>"; ?></td> 
   	<td align="left" style="padding-left:4px;">
     <? echo "<a href='acessando/mapeamento.php?aces=$login'>".$usuario."</a>"; ?></td> 
   	<td align="left" style="padding-left:4px;">
     <? echo "<a href='acessando/mapeamento.php?aces=$login'>".$data."</a>"; ?></td> 
  </tr>
<? } ?>
</TABLE>
<?
	echo "<br>";			
	echo "<br>";			
	echo"<p style='text-align:left; padding-left:20px;'>".$_pagi_navegacion."</p>";
?>
</body>
</html>
