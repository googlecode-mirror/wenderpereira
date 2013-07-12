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

<form name="form1" method="post" action="pesquisa.php">
<center>
  <table border="3" align="center" style="border:groove; width:480px;">
  <tr>
  <td colspan="4" style="background-color:#999966; color:#ffffff;" align="center"><b>Usuários</b></td>
  </tr>
<?
$data = date("d/m/Y");
?>
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
  </tr>
  <? if ($_SESSION[login] == "wender" or $_SESSION[login] == "wender") { ?>
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
<td>Parte do texto / usuário:</td>
<td>
<input type="text" name="cons_nome" size="40">
</td>
<td><input type="submit" name="consultar" value="Consultar" /></td>
</tr>
</table>
<?
$_pagi_sql = " select * from  perguntaserepostas where usuario like '%".$_POST[cons_nome]."%'
order by parte,questao ASC";
//quantidade de resultados por página (opcional, por padrão 20) 
$_pagi_cuantos = 70; 
//Incluímos o script de paginação. Este já executa a consulta automaticamente 
include("paginacao/paginator.inc.php"); 
?>
<table width="100%" border="3" align="center" style="border:groove" cellpadding="6">
  <tr>
    <td colspan="8" style="background-color:#999966; color:#ffffff;" align="center"><b>Usuários Gravados</b></td>
  </tr>
  <tr>
	<td align="left" style="width:20px;"></td>
	<td align="left" style="padding-left:10px; font-weight:bold; width:150px;">Cod</td>
	<td align="left" style="padding-left:10px; font-weight:bold;">Usuario</td>
	<td align="left" style="padding-left:10px; font-weight:bold;">Parte</td>
    <td align="left" style="padding-left:10px; font-weight:bold;">Questão</td>
    <td align="left" style="padding-left:10px; font-weight:bold;">Pergunta</td>
    <td align="left" style="padding-left:10px; font-weight:bold;">Valores</td>
    <td align="left" style="padding-left:10px; font-weight:bold;">Data</td>
    <td align="left" style="padding-left:10px; font-weight:bold;">Hora</td>
    
  </tr>
<?			
	while($row = mysql_fetch_array($_pagi_result)){ 
  		  $cod = $row['idpesquisa'];
		  $nome = $row['usuario'];
		  $login = $row['parte'];
		  $email = $row['questao'];
          $ativo = $row['pergunta'];
		  $concluido = $row['valores'];
		  $data = $row['data'];
		  $hora = $row['hora'];
		  
?>
  <tr>
<? if ($_SESSION[login] == "wender" or $_SESSION[login] == "wender") { ?>
    <? echo "<td align=\"center\"><a href=\"#\" onClick=\"excluir('". $cod . "')\">
	<img src=\"imagebox/excluir.jpg\" alt=\"Excluir\" height=\"16\" border=\"0\"></a></td>"; ?>
<? } else { echo "<td></td>"; } ?>
	<td align="left" style="padding-left:10px;">
	<? echo "<a href='alunos.php?cod=$cod'>".$cod."</a>"; ?></td>
	<td align="left" style="padding-left:10px;">
    <? echo "<a href='alunos.php?cod=$cod'>".$nome."</a>"; ?></td>
   	<td align="left" style="padding-left:10px;">
    <? echo "<a href='alunos.php?cod=$cod'>".$login."</a>"; ?></td>
   	<td align="left" style="padding-left:10px;">
     <? echo "<a href='alunos.php?cod=$cod'>".$email."</a>"; ?></td>
   	<td align="left" style="padding-left:10px;">
     <? echo "<a href='alunos.php?cod=$cod'>".$ativo."</a>"; ?></td> 
   	<td align="left" style="padding-left:10px;">
     <? echo "<a href='alunos.php?cod=$cod'>".$concluido."</a>"; ?></td> 
   	<td align="left" style="padding-left:10px;">
     <? echo "<a href='alunos.php?cod=$cod'>".$data."</a>"; ?></td> 
   	<td align="left" style="padding-left:10px;">
     <? echo "<a href='alunos.php?cod=$cod'>".$hora."</a>"; ?></td> 
  </tr>
<? } ?>
</TABLE>
<?
	echo "<br>";			
	echo "<br>";			
	echo"<p style='text-align:left; padding-left:30px;'>".$_pagi_navegacion."</p>";
?>
</body>
</html>
