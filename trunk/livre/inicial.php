<?php
error_reporting(0);
include "../conexao.php";

connect();	
$date = date("d/m/y");
$hora= gmdate("H:i" ,time()-(3570*2));
?>

<html>
<head>
<title>Protocolo - Sistema de Gestão de Documentos</title>
</head>
<frameset framespacing="0" border="0" frameborder="0" rows="72,*">
  <frame name="faixa" scrolling="no" noresize target="conteudo" src="superior.php">
  <frameset cols="260,*">
    <frame name="conteudo" target="principal" src="menu.php" scrolling="auto">
    <frame name="principal" src="corpo_do_sistema.php" scrolling="auto">
  </frameset>
  <noframes>
  <body>
  <?  require "listagemperguntas.php"; ?>
  <p>Esta página usa quadros mas seu navegador não aceita quadros.</p>
  </body>
  </noframes>
</frameset>
</html>
