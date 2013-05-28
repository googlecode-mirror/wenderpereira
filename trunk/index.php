<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FUNARTE</title>
  
<!--JS -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-alert.js"></script>
<script src="js/ajax.js"></script>
<!--_JS -->
<!--CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/barra.css" rel="stylesheet" type="text/css" />
<!--_CSS -->

   <style type="text/css">


      .form-signin {
        max-width: 350px;
        padding: 10px 25px 25px;
        margin: 0 auto 10px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 3px;
           -moz-border-radius: 3px;
                border-radius: 3px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 10px;
        padding: -2px 9px;
      }
	   .headerpagina{

       }

    </style>
</head>
<body onload="document.form1.login.focus()">
<div class="container">
		<?
   		require "acessoInformacao.php";
		?> 
                    <br />
                    <a href="http://www.funarte.gov.br/"> 
                    <img src="images/baner1.jpg" alt="" width="720" height="120" style=" display: block; margin-left: auto; margin-right: auto " /></a> 
                    <br />
                    <br />
                    <br />
          </div>
<form name="form1" class="form-signin" id="form1" method="post" action="login.php">
  <div class="form-actions">
    <label class="control-label" for="inputEmail">Usuário</label>
    <div class="controls">
       <input type="text" class="cor-inativa" placeholder="Usuário" onkeyup="enviaKey();" onclick="enviaKey();" name="login" id="login" size="20" tabindex="1">
    </div>
     <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
    <input type="password" placeholder="Senha" name="senha" size="20" tabindex="2">                                
    </div>
    <div class="control-label">
      <input type="submit" class="btn btn-success" value="Entrar" name="B1" tabindex="3">
      <input type="reset" class="btn" value="Limpar" name="B2" tabindex="4" />
      <br/>
         <div class="alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
         Entre com o nome de usuário e senha para acessar o sistema..
        </div>
		 <label id="erromsg" class="label-success"> </label>
		 <label id="erro" class="label-success"> </label>
         <a href="novoUsuario.php"class="btn btn-success">Novo usuário</a>
         <a href="resetsenha.php" class="btn btn-success">Esqueceu a senha</a>
	  <br/>
    </div>
 </div>
</form>
    <br />  
    <br />  
    <br />  
    <br />  
<div class="dropdown-toggle">
                 
                    <a href="http://www.funarte.gov.br/"> 
                     <img src="images/imagem.jpg" alt="" width="581" height="72" class="img-rounded" style=" display: block; margin-left: auto; margin-right: auto " /> </a> 
                 
          </div>
</body>
</html>