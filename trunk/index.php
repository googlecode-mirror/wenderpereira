
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FUNARTE</title>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
   <script src="js/login/jsValidate.js" type="text/javascript"></script>
   <script src="js/login/jquery-1.6.2.js" type="text/javascript"></script>
   <script src="js/login/jquery.validate.js" type="text/javascript"></script>
   <script src="js/login/jsvalidarlogin.js" type="text/javascript"></script>
<script src="js/ajax.js" type="text/javascript"></script>  
<link href="css/barra.css" rel="stylesheet" type="text/css" />
   <?
       include "acessoInformacao.php";
   ?> 
</head>
<body onLoad="document.form1.login.focus()">

<div align="center">
  <p>
    <img src="images/baner1.jpg" width="600" height="120" />
  </p>
      </br>
      </br>
      </br>      
      </br>
</br>  
</br>  
<div>              
<table border="0" cellpadding="0" cellspacing="0" bgcolor="white" style="border-collapse: 
collapse; border: 0px solid silver" bordercolor="#111111" width="500">
<tr>
<td width="50" height="205">&nbsp;</td>
<td width="420" height="205">
<form name="form1" id="form1" method="post" action="login.php">
<div align="center">
<center>
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse"
bordercolor="#111111" width="400" height="205" background="imagebox/logo_abertura.png">
<tr>
<td>
<div align="center">
<center>
<table border="0" cellpadding="0" cellspacing="0" 
style="border-collapse: collapse" bordercolor="#111111" width="384">
<tr>
<td width="118">&nbsp;</td>
<td width="193">&nbsp;</td>
<td width="73"><div align="center"></div></td>
</tr>
<tr>
<td width="118">&nbsp;</td>
<td width="193">&nbsp;</td>
<td width="73"><div align="center"></div></td>
</tr>
<tr>
<td width="118">&nbsp;</td>
<td width="193">&nbsp;</td>
<td width="73"><div align="center"></div></td>
</tr>
<tr>
<td width="118" align="center"><font face="verdana" size="1" color="#666666">
Usuário:</td>
<td width="193">
<input type="text" class="cor-inativa" onKeyUp="enviaKey();" onClick="enviaKey();"
name="login" id="login" size="20" tabindex="1">
</td>
<td width="73"><div align="left">
<input type="submit" value="Entrar" name="B1" tabindex="3">
</div></td>
</tr>
<tr>
<td width="118" align="center"><font face="verdana" size="1" color="#666666">
Senha:</td>
<td width="193"><input type="password" class="cor-inativa" name="senha" size="20" tabindex="2">
</td>
<td width="73"><div align="left">
<input type="reset" value="Limpar" name="B2" tabindex="4">
</div></td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td colspan="2">
<label id="erromsg"> </label>
<label id="erro"> </label>
</td>
</tr>
<tr>
<td colspan="3">
<div align="center" class="fonte">
Entre com o nome de usuário e senha para acessar o sistema.
</div>
<label>
<div align="center" class="fonte"></div></td>
</tr>
</table>
</center>
</div>
</td>
</tr>
</table>
</center>
</div>
</form>
</td>
<td width="50" height="205">&nbsp;</td>
</tr>
<tr>
  <td height="25">&nbsp;</td>
  <td height="25">
    <table width="100%" border="0">
      <tr class="fonte">
        <th width="32%" scope="col"> 
         <a href="novoUsuario.php">Novo usuário</a>
         </th>
        <th width="28%" scope="col">&nbsp;</th>
        <th width="40%" scope="col">
        <a href="resetsenha.php">Esqueceu a senha</a></th>
      </tr>
    </table></td>
  <td height="25">&nbsp;</td>
</tr>
</table>
</div>
</br>

</br>  
</br>
</br>     
</br>         
</br>             
<p>
<a href="http://www.funarte.gov.br/">
<img src="images/imagem.jpg" alt="" width="581" height="72" />
</a>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>

  </center>
</div>
</body>
       
</html>

