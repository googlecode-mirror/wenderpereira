<html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FUNARTE</title>

   <script src="js/jsValidate.js" type="text/javascript"></script>
   <script src="js/jquery-1.6.2.js" type="text/javascript"></script>
   <script src="js/jquery.validate.js" type="text/javascript"></script>
   <script src="js/jsvalidarlogin.js" type="text/javascript"></script>
   <script src="js/ajax.js" type="text/javascript"></script>  
   
 </head>    
 
	 <style type="text/css">
      /* Estilizar os alertas */
      label.error{
          padding-left: 3px;
          color: red;
          font-weight: bold;
           }
      </style>


</head>
<body onLoad="document.form1.login.focus()" bgcolor="white">

<p>&nbsp;</p>
<div align="center">
  <center>
  <p><img src="images/baner1.jpg" alt="" width="836" height="135" ></p>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
  <table border="0" cellpadding="0" cellspacing="0" bgcolor="white" style="border-collapse: collapse; border: 0px solid silver" bordercolor="#111111" width="500">
    <tr>
      <td width="50" height="205">&nbsp;</td>
      <td width="420" height="205">
  <form name="form1" id="form1" method="post" action="login.php">
  <div align="center">
    <center>
      <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="400" height="205" background="imagebox/logo_abertura.png">
    <tr>
          <td>
            <div align="center">
              <center>
                <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="384">
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
                    <td width="118" align="center"><font face="verdana" size="1" color="#666666"><b>usuário:</b></td>
                    <td width="193">
                    <input type="text" class="cor-inativa" onKeyUp="enviaKey();" name="login" id="login" size="20" tabindex="1">
					</td>
                    <td width="73"><div align="left">
                      <input type="submit" value="Entrar" name="B1" tabindex="3">
                    </div></td>
                    </tr>
                  <tr>
                    <td width="118" align="center"><font face="verdana" size="1" color="#666666"><b>Senha:</b></td>
                    <td width="193"><input type="password" class="cor-inativa" name="senha" size="20" tabindex="2"></td>
                    <td width="73"><div align="left">
                      <input type="reset" value="Limpar" name="B2" tabindex="4">
                    </div></td>
                    </tr>
                    <tr>
                    <td align="center">&nbsp;</td>
                    <td colspan="2"><div align="right"><a href="novoUsuario.php">Novo usuário  </a></div></td>
                    </tr>
                   	<tr>
                    <td colspan="3">
                    <div align="center">
                    <label id="erromsg"> </label>
                    <label id="erro"> </label>
                    <br/>
                    <font face="verdana" size="1"color="#666666">
                    <b>
                    </b>
                    </div>
                    <b>
                    <label>
                        <div align="center">Entre com o nome de usuário e senha para acessar o sistema.</div>
                      </label></b></td>
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
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><img src="images/imagem.jpg" alt="" width="581" height="72" ></p>
<p>&nbsp;</p>
  </center>
</div>
</body>
       
</html>

