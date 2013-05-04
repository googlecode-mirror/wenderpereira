<?
	include "conexao.php";
  //  include "valida_user.php";
	connect();	
    $date = date("d/m/y");
    $hora = date("H:i");

?>


<html>


<head>
<title>Funarte</title>
<script language="javascript">window.defaultStatus='Seja Bem Vindo(a) <? echo ucfirst($_SESSION["login"]); ?>. Você está logado desde as <? echo ($hora); ?> hrs. Acesso número <? echo ($num_registros); ?> .'</script>
</head>

<frameset framespacing="0" border="0" frameborder="0" rows="92,*">
  <frame name="faixa" scrolling="no" noresize target="conteúdo" src="superior.php">
  <frameset cols="220,*">
    <frame name="conteúdo" target="principal" src="menu.php" scrolling="auto">
    <frame name="principal" src="corpo_do_sistema.php" scrolling="auto">
  </frameset>
  <noframes>
  <body>

  <p>Esta página usa quadros mas seu navegador não aceita quadros.</p>

  </body>
  </noframes>
</frameset>

</html>
