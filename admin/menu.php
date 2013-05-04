<? 
  	 session_start();
     include "conexao.php";
     include "valida_user.php";
     $date = date("d/m/y");
     $hora = date("H:i");
	 $Login 	=  $_SESSION["login"]; //recebe a sessão do login
?>
<html>
<head>
	<title>Funarte</title>
</head>
<body bgcolor="<?  echo $cor_pagina ?>">
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#FFFFFF" width="178">
  <tr>
    <td width="35" height="1" bgcolor="#999966">&nbsp;</td>
    <td height="1" colspan="3" bgcolor="#999966"><b><font face="verdana" size="1">
    <a target="principal" style="text-decoration: none" href="index.php">
    <font color="#FFFFFF">&nbsp;&nbsp;MENU COM OP&Ccedil;&Otilde;ES </font></a></font></b></td>
  </tr>
  <tr>
    <td width="35" height="3"></td>
    <td width="8" height="3"></td>
    <td width="124" height="3"></td>
    <td width="11" height="3"></td>'
  </tr>

<!--  <tr>
    <td width="35" height="30" bgcolor="#FFFFFF">
    <img border="0" src="imagebox/pesquisa.png" width="30" height="30"></td>
    <td height="30" colspan="3" bgcolor="#999966" style="border-top: 1px solid #FFFFFF; border-bottom: 1px solid #FFFFFF"><b>
    <font face="verdana" size="1">
    <a target="principal" style="text-decoration: none" href="mapeamento.php">
    <font color="#FFFFFF">&nbsp;&nbsp;Mapeamento</font></a></font></b></td>
  </tr>-->

  <!--<tr>
    <td width="35" height="30" bgcolor="#FFFFFF">
    <img border="0" src="imagebox/pesquisa.png" width="30" height="30"></td>
    <td height="30" colspan="3" bgcolor="#999966" style="border-top: 1px solid #FFFFFF; border-bottom: 1px solid #FFFFFF"><b>
    <font face="verdana" size="1">
    <a target="principal" style="text-decoration: none" href="parteI.php">
    <font color="#FFFFFF">&nbsp;&nbsp;ParteI</font></a></font></b></td>
  </tr>

  <tr>
    <td width="35" height="30" bgcolor="#FFFFFF">
    <img border="0" src="imagebox/pesquisa.png" width="30" height="30"></td>
    <td height="30" colspan="3" bgcolor="#999966" style="border-top: 1px solid #FFFFFF; border-bottom: 1px solid #FFFFFF"><b>
    <font face="verdana" size="1">
    <a target="principal" style="text-decoration: none" href="parteII.php">
    <font color="#FFFFFF">&nbsp;&nbsp;ParteII</font></a></font></b></td>
  </tr>
    <tr>
    <td width="35" height="30" bgcolor="#FFFFFF">
    <img border="0" src="imagebox/pesquisa.png" width="30" height="30"></td>
    <td height="30" colspan="3" bgcolor="#999966" style="border-top: 1px solid #FFFFFF; border-bottom: 1px solid #FFFFFF"><b>
    <font face="verdana" size="1">
    <a target="principal" style="text-decoration: none" href="parteIII.php">
    <font color="#FFFFFF">&nbsp;&nbsp;ParteIII</font></a></font></b></td>
  </tr>
 <tr>
    <td width="35" height="30" bgcolor="#FFFFFF">
    <img border="0" src="imagebox/pesquisa.png" width="30" height="30"></td>
    <td height="30" colspan="3" bgcolor="#999966" style="border-top: 1px solid #FFFFFF; border-bottom: 1px solid #FFFFFF"><b>
    <font face="verdana" size="1">
    <a target="principal" style="text-decoration: none" href="parteIV.php">
    <font color="#FFFFFF">&nbsp;&nbsp;ParteIV</font></a></font></b></td>
  </tr>-->
       
      <tr>
        <td width="35" height="30" bgcolor="#FFFFFF">
        <img border="0" src="imagebox/usuarios.png" width="30" height="30"></td>
        <td height="30" colspan="3" bgcolor="#999966" style="border-top: 1px solid #FFFFFF; border-bottom: 1px solid #FFFFFF"><b>
        <font face="verdana" size="1">
        <a href="usuarios.php" target="principal" style="text-decoration: none">
        <font color="#FFFFFF">&nbsp;&nbsp;Usuários</font></a></font></b></td>
      </tr>

  <tr>
    <td width="35" height="30" bgcolor="#FFFFFF">
    <img border="0" src="imagebox/saida.png" width="30" height="30"></td>
    <td height="30" colspan="3" bgcolor="#999966" style="border-top: 1px solid #FFFFFF; border-bottom: 1px solid #FFFFFF">
    <font face="verdana" size="1">
    <b><a target="_top" href="logout.php" style="text-decoration: none">
   <font color="#FFFFFF">&nbsp;&nbsp;Logout do Sistema</font></a></b></font></td>
  </tr>

  <tr>
    <td height="1" colspan="4" bgcolor="#999966">&nbsp;</td>
  </tr>
</table>
<script language="javascript">
document.form.login1.focus();
</script>
</body>

</html>
