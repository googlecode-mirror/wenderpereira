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
<script language="javascript">window.defaultStatus='Seja Bem Vindo(a) <? echo ucfirst($_SESSION["login"]); ?>. Voc� est� logado desde as <? echo ($hora); ?> hrs. Acesso n�mero <? echo ($num_registros); ?> .'</script>
</head>

<frameset framespacing="0" border="0" frameborder="0" rows="92,*">
  <frame name="faixa" scrolling="no" noresize target="conte�do" src="superior.php">
  <frameset cols="220,*">
    <frame name="conte�do" target="principal" src="menu.php" scrolling="auto">
    <frame name="principal" src="corpo_do_sistema.php" scrolling="auto">
  </frameset>
  <noframes>
  <body>

  <p>Esta p�gina usa quadros mas seu navegador n�o aceita quadros.</p>

  </body>
  </noframes>
</frameset>

</html>
