<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FUNARTE</title>
      <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
  </head>
<? 
?>
  <body>

<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Mapeamento residências</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              <a href="logout.php" class="navbar-link">sair</a>
            </p>
            <ul class="nav">
              <li class="active"><a href="inicial.php">Menu</a></li>
			  <li><a href="verificamenu.php?m=-1">Mapeamento</a></li>
			  <li><a href="verificamenu.php?m=0">Parte I</a></li>
			  <li><a href="verificamenu.php?m=1">Parte II</a></li>
			  <li><a href="verificamenu.php?m=2">Parte III</a></li>
			  <li><a href="verificamenu.php?m=3">Parte IV</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
        </div>
        <?
	    include "header.php";
	    ?>
		</div>
		 <br />
		 <br />
		 <br />    
		 <br />  
		<?
   		require "menu.php";
		?> 
        <div class="span9">
        <div class="row-fluid">
       <dl>
        <dt>Instruções para cadastramento:</dt>
        <dt>Passo 1:</dt>
        <dd> Caso seja a primeira vez que esteja se cadastrando, clique em Novo Usuário e vá ao passo 2.
        Em caso do cadastro já ter sido realizado anteriormente, entre com o nome do usuário e senha e pule para o passo 3.</dd>
        <dt>Passo 2:</dt>
        <dd> Escolha um nome de usuário e senha. Em seguida coloque a mesma senha para confirmação,
        bem como, preencha o campo do endereço de seu e-mail. Clique em salvar e uma mensagem será enviada para seu e-mail.
        Ao abrir a mensagem, haverá um link de ativação. Clique neste para que seu cadastro seja autenticado. Posteriormente, 
        entre normalmente com o nome de usuário e senha cujo cadastro foi realizado.
        </dd>
        <dt>Passo 3:</dt>
        <dd> O cadastramento é realizado em 5 partes : Mapeamento, Parte 1, Parte 2, Parte 3, e Parte 4. 
        Preencha as partes do cadastro uma a uma. Alguns campos são obrigatórios, sendo que, nestes casos, ao final da 
        perguntaaparece um asterisco (*). Em algumas questões somente é possível uma resposta. Em outras, são possíveis
        múltiplas respostas, mas fique atento às perguntas obrigatórias, onde o usuário deverá marcar pelo menos um item,
        caso não preencha aparecerá uma mensagem, sendo que, o usuário somente poderá avançar ou atualizar seus dados, caso
        conclua esta resposta. Fique também atento porque em algumas questões há um número limitado de itens que podem ser
        marcados. Caso este tipo de pergunta seja obrigatória, de qualquer forma, o usuário deverá marcar no mínimo um item.
        </dd>
        <dt>Passo 4:</dt>
        <dd>Após o usuário ter preenchido todas as perguntas obrigatórias em cada parte, ele deverá clicar 
        em avançar. Esta parte estará salva. Realize o mesmo preenchimento em todas as partes. Na Parte 4, é obrigatório o 
        usuário aceitar os termos do preenchimento das informações. Caso o usuário queira modificar alguma resposta em algumaparte, 
        ele deverá retornar a ela, modificar sua resposta para, em seguida, clicar em “atualizar”, sendo as novas respostas
        salvas automaticamente.
        </dd>
        <dt>Passo 5:</dt>
        <dd> Após o término, clique em logout. O cadastro estará realizado Caso o usuário queira modificar algo posteriormente, ele precisará fazer novamente o login com o mesmo nome de usuário e senha, entrar na parte desejada, modificar a resposta e clicar em “atualizar”. Ao final, deverá fazer novamente o logoutpara sair da página de preenchimento. O cadastro estará atualizado. Poderá atualizar suas respostas quantas vezes forem necessárias, com o mesmo login e senha.</dd>
        </dl>
	<div/>     
     	 <hr>
		<footer>
        <p>Funarte 2013</p>
      </footer>
	</div>
    </div>
    
    <!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>
