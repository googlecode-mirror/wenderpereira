<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<noscript>
  <meta http-equiv="Refresh" content="1; url=http://www.funarte.gov.br/mapeamento_residencias/erro1.php">
</noscript>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
	<link rel="stylesheet" href="css/template.css" type="text/css"/>
	<script src="js/jquery-1.8.2.min.js" type="text/javascript">
	</script>
	<script src="js/languages/jquery.validationEngine-pt_BR.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
	<script>
	    jQuery(document).ready(function () {
	        // binds form submission and fields to the validation engine
	        jQuery("#form1").validationEngine();
	    });
	</script>
    <script src="js/jsValidate.js" type="text/javascript"></script> 

   <script src="js/bootstrap.min.js"></script>
   <script src="js/bootstrap-alert.js"></script>

    <script src="js/ajax.js"></script>
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


<title>Funarte - Portal das Artes</title>
</head>
<body>
<div class="container">
		<?
   		require "acessoInformacao.php";
		?> 
                    <br />
                    <a href="http://www.funarte.gov.br/"> 
                    <img src="images/baner1.jpg" alt="" width="720" height="120" style=" display: block; margin-left: auto; margin-right: auto " /></a> 
           <br />
 </div>
<form id="form1" name="form1" class="form-signin" method="post" action="email.php">
 <div class="form-actions">
    <h4><i class="icon-plus"></i>Novo usuário</h4>
    <label class="control-label" for="inputEmail"><i class="icon-user"></i>Usuário</label>
    <div class="controls">
    <input type="text" class="validate[required,minSize[6]],custom[onlyLetterNumber] text-input" onKeyUp="enviaKey1();" onClick="enviaKey1();" id="login" name="login" size="20" tabindex="1" />
   </div>
    <label class="control-label" for="inputEmail"><i class="icon-asterisk"></i>Senha</label>
    <div class="controls">
    <input type="password" class="validate[required,minSize[6]] text-input" id="senha" name="senha" size="20" tabindex="2" />
   </div>   
    
      
      <label class="control-label" for="inputPassword"><i class="icon-asterisk"></i>repetir a senha</label>
    <div class="controls">
    <input name="senha1" id="senha1" type="password" class="validate[required,minSize[6],equals[senha]] text-input" tabindex="3" size="20" />
    </div>
   
      <label class="control-label" for="inputPassword"><i class="icon-home"></i>Email</label>
    <div class="controls">
    <input name="email" id="email" type="email" class="validate[required,custom[email]] text-input" tabindex="4" size="20"/>
    </div>
   
        <div class="control-label">
         <div class="alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
	     Um <i class="icon-home"></i>email de confirmarção será enviado para ativar o cadastro!<i class="icon-hand-left"></i>
        </div>
		<button type="button" class="close" data-dismiss="alert">&times;</button>
         Entre com os dados para realizar um novo cadastro! <i class="icon-hand-left"></i>
        </div>
		 <label id="erromsg"> </label>
         <label id="erro"> </label>
		
         <input type="submit" class="btn btn-success" value="Salvar" tabindex="5"/>
         <input type="reset" class="btn" value="Limpar" name="B2" tabindex="6" />
	   <br/>
       <br/>
      <a href="index.php" class="btn btn-success">Home</a>              
    </div>
    <br />  
<div class="dropdown-toggle">
     <a href="http://www.funarte.gov.br/"> 
     <img src="images/imagem.jpg" alt="" width="581" height="72" class="img-rounded" style=" display: block; margin-left: auto; margin-right: auto " /> </a> 
     </div>
</form>
</body>
</html>