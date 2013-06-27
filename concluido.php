<!DOCTYPE html>
<html lang="en">
<head>
<?
session_start();
if (empty($_SESSION["login"])){
	header("Location: index.php");
	exit;
}
$Login 	=  $_SESSION["login"];
?>
<meta charset="utf-8">
<title>Funarte</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Le styles -->
<link href="css/bootstrap.css" rel="stylesheet">
<style type="text/css">
body {
	padding-top: 123px;
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
<link rel="apple-touch-icon-precomposed" sizes="144x144"
	href="ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114"
	href="ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72"
	href="ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed"
	href="ico/apple-touch-icon-57-precomposed.png">
</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse"
					data-target=".nav-collapse"> <span class="icon-bar"></span> <span
					class="icon-bar"></span> <span class="icon-bar"></span> </a> <a
					class="brand" href="#"><i class="icon-plus-sign"></i>Mapeamento
					residências</a>
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
	include "menu.php";
	?>
	<div class="span9">
		 <div class="row-fluid">
					<br />
					<br />
					<br />
						<table width="600" align="center" border="0">
						<tr>
						<td><center></center></td>
						</tr>
						<tr>
						<td><center><font face="verdana" size="2"><b>Cadastro concluído</b></font></center></td>
						</tr>
						<tr>
						<td>&nbsp;</td>
						</tr>
						<tr>
						<td><font face="verdana" size="2"><center><?php echo ($Login); ?>, 
						A Funarte agradece a sua participação no preenchimento deste formulário de mapeamento. As informações prestadas serão fundamentais para a construção de políticas públicas voltadas para o fomento às residências artísticas no país.
						</center></font></td>
						</tr>
						<tr>
						<td>
						</td>
						</tr>
						<tr>
						<td><font face="verdana" size="2"><center><b></b></center></font></td>
						</tr>
						</table>
					<br />
					<br />
					<br />
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
