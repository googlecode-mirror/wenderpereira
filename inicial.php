<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FUNARTE</title>
      <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 128px;
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
          <a class="brand" href="#"><i class="icon-plus-sign"></i>Mapeamento residências</a>
				<div class="nav-collapse collapse">
					<p class="navbar-text pull-right">
					<a href="logout.php" class="navbar-link"><i class="icon-user"></i>sair</a>
					</p>
					<ul class="nav">
						<li class="active"><a href="inicial.php"><i class="icon-th-list"></i>Menu</a>
						</li>
						<li><a href="verificamenu.php?m=-1"><i class="icon-plus-sign"></i>Respons&aacute;vel pelo preenchimento</a>
						</li>
						<li><a href="verificamenu.php?m=0"><i class="icon-plus-sign"></i>Identifica&ccedil;&atilde;o da Institui&ccedil;&atilde;o</a></li>
						<li><a href="verificamenu.php?m=1"><i class="icon-plus-sign"></i>Programas</a></li>
						<li><a href="verificamenu.php?m=2"><i class="icon-plus-sign"></i>Artistas</a></li>
						<li><a href="verificamenu.php?m=3"><i class="icon-plus-sign"></i>Projetos</a></li>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
        <?
	    include "header.php";
	    ?>
        </div>

		</div>

		<?
   		require "menu.php";
		?> 
        <div class="span8">
        <div class="row-fluid">
       <dl>
        <dt>Instruções para cadastramento:</dt>
        <dd>1. O cadastramento é realizado em 5 partes : 
		<a href="verificamenu.php?m=-1"><i class="icon-plus-sign"></i>Respons&aacute;vel pelo preenchimento</a>, 
		<a href="verificamenu.php?m=0"><i class="icon-plus-sign"></i>Identifica&ccedil;&atilde;o da institui&ccedil;&atilde;o</a>, 
		<a href="verificamenu.php?m=1"><i class="icon-plus-sign"></i>Programas</a>,
		<a href="verificamenu.php?m=2"><i class="icon-plus-sign"></i>Artistas</a>,
		e <a href="verificamenu.php?m=3"><i class="icon-plus-sign"></i>Projetos</a>. <span>Campos marcados com asterisco (*) são de preenchimento obrigatório. Em algumas questões somente é possível uma resposta. Em outras, são possíveis múltiplas respostas. Caso haja problemas no preenchimento, aparecerá uma mensagem e o usuário só poderá avançar ou atualizar seus dados após concluir a etapa. </span>
        </dd>
        <dd><span>2.:No item <a href="verificamenu.php?m=3"><i class="icon-plus-sign"></i>Projetos</a>, é obrigatório aceitar os termos do preenchimento das informações. É possível modificar respostas a qualquer momento, sendo necessário clicar o botão “atualizar” após a alteração.</span></dd>
        <br />
        <dd> <span>3. Caso o usuário queira modificar algo posteriormente, precisará fazer novamente o login e atualizar a parte que deseja.Terminado o preenchimento ou a atualização clique em </span><a href="logout.php">Sair</a>.</dd>
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
