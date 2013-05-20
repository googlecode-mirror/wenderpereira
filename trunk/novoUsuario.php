<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Funarte - Cadastro de novo usuário:</title>

   <script src="js/login/jsValidate.js" type="text/javascript"></script>
   <script src="js/login/jquery-1.6.2.js" type="text/javascript"></script>
   <script src="js/login/jquery.validate.js" type="text/javascript"></script>
   <script src="js/login/jsvalidarlogin.js" type="text/javascript"></script>
   <script src="js/ajax.js" type="text/javascript"></script>  
   <?
       include "acessoInformacao.php";
   ?>
 </head>    
	 <style type="text/css">
      /* Estilizar os alertas */
      label.error{
          padding-left: 3px;
          color: red;
          font-weight: bold;
           }
      </style>

<body>
<!--<form name="form1" method="post" action="email.php" onsubmit="javascript:return validate('form1','email')">-->

<form name="form1" id="form1" method="post" action="email.php">

		<div align="center">
		<center>
		 <table border="0" cellpadding="0" cellspacing="0" bgcolor="white" style="border-collapse: collapse; border: 0px solid silver" bordercolor="#111111" width="500">
		<tr>
          <td width="420" height="205">
           <div align="center">
            <center>
              <p>&nbsp;</p>
              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse"
               bordercolor="#111111" width="400" height="205" background="imagebox/logo_abertura.png">
               <br/>
               <br/>
                <tr>
                  <td>
                  <div align="center">
                    <center>
                      <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="390">
                        <tr>
                          <td width="139">&nbsp;</td>
                          <td width="180"><b>Cadastro de novo usuário:</b></td>
                          <td width="71">&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="3">&nbsp;</td>
                        </tr>
                        <tr>
                          <td width="139">&nbsp;</td>
                          <td width="180">&nbsp;</td>
                          <td width="71">&nbsp;</td>
                        </tr>
                        <tr>
                        <td width="139" align="center"><font face="verdana" size="1" color="#666666"><b>Usuário:</b></td>
                        <td width="180">
                        <div align="left">
                        <input type="text" class="cor-inativa" onKeyUp="enviaKey1();" onClick="enviaKey1();"
                        id="login" name="login" size="20" tabindex="1" />
                          </div></td>
                          <td width="71"><input type="submit"" value="Salvar" tabindex="5"/></td>
                        </tr>
                        <tr>
                          <td width="139" align="center"><font face="verdana" size="1" color="#666666"><b>Senha:</b></td>
                          <td width="180">
						    <div align="left">
						      <input type="password" class="cor-inativa" id="senha" name="senha" size="20" tabindex="2" />
                                                 
					      </div></td>
                          <td width="71"><input type="reset" value="Limpar" name="B2" tabindex="6" /></td>
                        </tr>
                        <tr>
                          <td width="139" align="center"><font face="verdana" size="1" color="#666666"><b>Confirmar Senha:</b>
                          </td>
                          <td width="180">
                            <div align="left">
                              <input name="senha1" id="senha1" type="password" class="cor-inativa" tabindex="3" size="20" />
                          </div></td>
                          <td width="71">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="center"><font face="verdana" size="1" color="#666666"><b>Email:</b></td>
                          <td><div align="left">
                            <input name="email" id="email" type="email" class="cor-inativa" tabindex="4" size="20"/>
                          </div></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="3">
                          <font face="verdana"  size="1"color="#666666"> 
                          <br/>
                          <div align="center"><b>Entre com os dados para realizar um novo cadastro!</b>
                          <br/> Um email de confirmarção será enviado para ativar o cadastro!
                          </div></td>
                        </tr>
                      </table>
                    </center>
                  </div>
                  </td>
                </tr>
              </table>
              <p>
               <script>
                if (window.document.getElementById('erro').innerHTML == ""){
                
                }
               </script>
                  <label id="erromsg"> </label>
                  <label id="erro"> </label>
               </p>
               <p><a href="index.php">Home</a>              </p>
               <p><br/>
               </p>
            </center>
          </div>
      </form>
  </body>
</html>