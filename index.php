<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
		include "conexao.php";
		connect();
		$date = date("d/m/y");
		$hora = date("H:i");
		$Ip = $_SERVER['REMOTE_ADDR'];
		//$consulta = "INSERT INTO historico (usuario,acao,data,hora)
		//VALUES ('$Ip','sistema','$date','$hora')";
		//$resultado = mysql_query($consulta);
		
		
		?> 
                    <br />
                    <a href="http://www.funarte.gov.br/"> 
                    <img src="images/baner1.jpg" alt="" width="720" height="120" style=" display: block; margin-left: auto; margin-right: auto " /></a> 
                    <br />
         <br />
          <br />
 </div>
<form id="form1" name="form1" class="form-signin" method="post" action="login.php">
  <div class="form-actions">
         
 <label class="control-label" for="inputEmail"><i class="icon-user"></i>Usuário</label>
    <div class="controls">
       <input type="text" class="validate[required,minSize[6]],custom[onlyLetterNumber] text-input" placeholder="Usuário" onkeyup="enviaKey();" onclick="enviaKey();" name="login" id="login" size="20" tabindex="1">
    </div>
     <label class="control-label" for="inputPassword"><i class="icon-asterisk"></i>Senha</label>
    <div class="controls">
    <input type="password" class="validate[required,minSize[6]]" placeholder="Senha" name="senha" size="20" tabindex="2">                                
    </div>
    <div class="control-label">
      <input type="submit" class="btn btn-success" value="Entrar" name="B1" tabindex="3">
      <input type="reset" class="btn" value="Limpar" name="B2" tabindex="4" />
      <br/>
         <div id="alert1" class="alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
         Entre com o nome de usuário e senha para acessar o sistema. <i class="icon-hand-left"></i>
        </div>
        <label id="erromsg" class="label-success" style="color: #FFFFFF; font-style: normal; font-weight: bold"></label>
		 <label id="erro" style="color: #FFFFFF; font-style: normal; font-weight: bold"class="label-success"> </label>
         <a href="novoUsuario.php"class="btn btn-success">Novo usuário</a>
         <a href="resetsenha.php" class="btn btn-success">Esqueceu a senha</a>
     <br/>
    </div>
          <br />
       <!--Modal com instruções para cadastramento__________________________________________--> 
       <a href="#myModal" role="button" class="btn btn-success" data-toggle="modal">Instruções para cadastramento</a>
         <!-- Modal -->
        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Instruções para cadastramento</h3>
          </div>
         
          <div class="modal-body">
                    <dt>Passo 1:</dt>
                    <dd> Caso seja a primeira vez que esteja se cadastrando, clique em <a href="novoUsuario.php"class="btn btn-success">Novo usuário</a> e vá ao passo 2. Em caso do cadastro já ter sido realizado anteriormente, entre com o nome do usuário e senha.
                    </dd>
                    <dt>Passo 2:</dt>
                    <dd> Escolha um nome de <i class="icon-user"></i>usuário e <i class="icon-asterisk"></i>senha. Em seguida coloque a mesma senha para confirmação,
                    bem como, preencha o campo do endereço de seu e-mail. Clique em salvar e uma mensagem será enviada para seu e-mail.
                    Ao abrir a mensagem, haverá um link de ativação. Clique neste para que seu cadastro seja autenticado. Posteriormente, 
                    entre normalmente com o nome de usuário e senha cujo cadastro foi realizado.
                    <dt>Passo 3:</dt>
                       <dd>
                           Para alteração de sua senha clique no link <a href="resetsenha.php" class="btn btn-success">Esqueceu a senha</a> 
                           &nbsp;coloque o seu <i class="icon-envelope"></i>email e clique em reset, será enviada um link para seu <i class="icon-envelope"></i>e-mail. Ao abrir a mensagem, haverá um link para o cadastro de uma nova senha.
                       </dd>
                       <dd>
                       <br />
                         <a href="novoUsuario.php"><img src="imagebox/novoUsuario.jpg" alt="" class="thumbnail inner-border" width="280" height="180"/></a>
                       <br />
                       <a href="resetsenha.php"><img src="imagebox/resetSenha.jpg" alt="" class="thumbnail inner-border" width="280" height="180"/></a>
                       </dd>
                    </dd>
                   </dt>
                     
          </div>
          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Fechar</button>
           </div>
        </div>
 </div> 
  <!--FIM Modal com instruções para cadastramento___________________________________________________________-->
           <script>
               $(window).load(function () {
				    $('#modalindex').modal({
                       show: true
                   });
               });
       </script>
 <!-- Button to trigger modal -->
                <!-- <div class="modal hide" id="modalindex"> -->
                        <div class="modal hide" id="modalindex">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <h4>MAPEAMENTO DAS RESIDÊNCIAS ARTÍSTICAS NO BRASIL</h4>
                          </div>
                          <div class="modal-body">
                                 <p class="ui-dialog"> 
                                Até o próximo dia 11 de outubro de 2013, a Fundação Nacional de Artes, através do Centro de Programas Integrados <abbr title="Centro de Programas Integrados">(Cepin),</abbr>está realizando o Mapeamento das Residências Artísticas no Brasil, ação fundamental para o conhecimento, análise e formulação de pesquisas que servirão de instrumento para a construção das políticas públicas de fomento ao campo das residências artísticas em nosso país. 
                                <br />
                                <br />
                                 A realização deste Mapeamento é um dos desdobramentos do II Encontro Funarte de Políticas para as Artes, realizado em 2012 pela Funarte em parceria com a Secretaria da Cidadania e da Diversidade Cultural do Ministério da Cultura, que teve como foco de discussão as Interações Estéticas em Rede. Durante o evento, temas importantes para a construção das políticas públicas para as artes foram abordados, entre eles “O lugar das ocupações artísticas na difusão cultural”, “O papel das redes na produção cultural”, e “Trânsitos: deslocamentos e residências”. 
                                <br/>                       
                                <br/>
                                 A Funarte convida instituições públicas e privadas, organizações não governamentais, pontos de cultura, associações e outras entidades que desenvolvem programas de residência artística para preencher o mapeamento a seguir. 
                                <br/>                       
                                <br/>
								<button type="button" class="close" data-dismiss="modal">Preencha o MAPEAMENTO AQUI.</button>
                              </p>
                             </div>
                            <div class="modal-body">
								A Funarte agradece a participação.                                
								<br/>                       
							    Dúvidas:cepin@funarte.gov.br
                                <abbr title="Telefone">(21) 2279-8082 </abbr>
                            </div>
                          <div class="modal-footer">
                            <a href="#" class="btn" data-dismiss="modal">Close</a>
                            <!--<a href="#" class="btn btn-primary">Save changes</a>-->
                          </div>
                        </div>
                        <!-- Button to trigger modal -->   
        <br />  
    <br />  
<div class="dropdown-toggle">
                 
                    <a href="http://www.funarte.gov.br/"> 
                     <img src="images/imagem.jpg" alt="" width="581" height="72" class="img-rounded" style=" display: block; margin-left: auto; margin-right: auto " /> </a> 
                 
          </div>
</form>
</body>
</html>