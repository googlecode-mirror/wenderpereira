<?php
	//include "valida_user.php";
    include "conexao.php";
	connect();
    $date = date("d/m/y");
    $hora = date("H:i");	
	
	@session_start(); // Inicializa a sessão

	$Login 	=  $_SESSION["login"];

	session_unset();
	session_destroy();
   ?>
   <?
     include "acessoInformacao.php";
   ?> 


<HTML>
<HEAD>
 <TITLE><?php echo $Title ?></TITLE>
</HEAD>
<BODY bgcolor="<?php echo $cor_pagina ?>">

<br><br><br>
<table width="600" align="center" border="0">
<tr>
<td><center><img src="images/imagem.jpg"></center></td>
</tr>
<tr>
<td><center><font face="verdana" size="2" color="<?php echo $cor_outros_textos ?>"><b>Cadastro concluído.</b></font></center></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td><font face="verdana" size="2" color="<?php echo $cor_outros_textos ?>">A funarte agradece sua participação. 
</center></font></td>
</tr>
<tr>
<td>
</td>
</tr>
<tr>
<td><font face="verdana" size="2" color="<?php echo $cor_outros_textos ?>"><center><b><?php echo $title_confirmacao ?></b></center></font></td>
</tr>
</table>


</BODY>
</HTML>
