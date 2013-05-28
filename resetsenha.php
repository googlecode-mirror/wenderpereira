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
          </div>
<form name="form1" class="form-signin" id="form1" method="post" action="emailresetsenha.php">
    <div class="form-actions">
    <label class="control-label" for="inputEmail">Email</label>
    <div class="controls">
    <input name="email" id="email" type="email" class="cor-inativa" tabindex="4" size="20"/>
    <input type="submit" class="btn btn-success" name="reset" value="reset" tabindex="5"/>
   </div>   
      <div class="control-label">
      <div class="alert-success">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      Entre com os dados para realizar a alteração de sua senha!
      </div>
      <br />  
        <a href="index.php" class="btn btn-success">Home</a>              
      </div>
    </div>
     <br />  
     <br />  
</form>
    <br />  
    <br />  
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