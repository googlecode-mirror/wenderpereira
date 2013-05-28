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
<!--Validacao_CSS -->
    <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
	<link rel="stylesheet" href="css/template.css" type="text/css"/>
	<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
	<script src="js/languages/jquery.validationEngine-pt_BR.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
	<script>
	    jQuery(document).ready(function () {
	        // binds form submission and fields to the validation engine
	        jQuery("#form1").validationEngine();
	    });
	</script>
    <script src="js/jsValidate.js" type="text/javascript"></script> 	
<!--Validacao_CSS -->
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
    </style>
</head>
<body onload="document.form1.login.focus()">
<div class="container">
		<?
   		require "acessoInformacao.php";
        ?>
    <br />
    <br />
    <img src="images/baner1.jpg" alt="" width="400" height="60" style=" display: block; margin-left: auto; margin-right: auto " /></a>  
       </div>


<? 
	session_start();
	include "conexao.php";
	connect();
	$Email 			= ($_GET["x44221715457fghsr"]);
	$date 			= date("d/m/y");
	$hora 			= date("H:i");
	$Senha 			= ($_POST["senha"]);
	$Autenticacao 	= ($_GET["1425"]);


if (empty($Email) OR empty($Autenticacao)) {
	$consulta = "UPDATE usuarios SET ativo='0', senha='$_POST[senha]' WHERE email='$_POST[email]' 
				 and autenticacao='$_POST[autenticacao]';";
	$resultado = mysql_query($consulta)
	 or die ("");
	?>	 
	<script>
	    alert("A senha foi alterada clique em ok e efetue o login!");
	    window.location = 'index.php';
	</script>
	<?php
	}
	?>


<form name="form1" class="form-signin" id="form1" method="post" action="autenticaresetsenha.php">
   
  <div class="form-actions">
    <h4>Cadastrar nova senha</h4>
    <label class="control-label" for="inputEmail">Email:</label>
    <div class="controls">
    <input name="email" type="text" id="Text1" value="<? echo $Email; ?>" readonly="readonly"/>
   </div>

    <label class="control-label" for="inputEmail">Senha</label>
    <div class="controls">
    <input type="password" class="cor-inativa" id="senha" name="senha" size="20" tabindex="2" />
   </div>   
    
      
      <label class="control-label" for="inputPassword">repetir a senha</label>
    <div class="controls">
    <input name="senha1" id="senha1" type="password" class="cor-inativa" tabindex="3" size="20" />
    </div>
   
      <label class="control-label" for="inputPassword">autenticação</label>
    <div class="controls">
    <input name="autenticacao" type="text" class="cor-inativa" id="Text2" tabindex="3"  value="<? echo $Autenticacao ?>" size="20" readonly="readonly" />
    </div>
   
        <div class="control-label">
         <div class="alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
         Entre com os dados para cadastrar nova senha!
        </div>
         Após  clicar em cadastrar você será direcionado para a pagina inicial!
        </div>
		 <label id="erromsg"> </label>
         <label id="erro"> </label>
		
         <input type="submit" class="btn btn-success" value="Salvar" tabindex="5"/>
         <input type="reset" class="btn" value="Limpar" name="B2" tabindex="6" />
	   <br/>
       <br/>
       <br/>
      <a href="index.php" class="btn btn-success">Home</a>              
    </div>
</form>
    <br />  
    <br />  
    <br />  
<div class="dropdown-toggle">
     <a href="http://www.funarte.gov.br/"> 
     <img src="images/imagem.jpg" alt="" width="581" height="72" class="img-rounded" style=" display: block; margin-left: auto; margin-right: auto " /> </a> 
     </div>
</body>
</html>