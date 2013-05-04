<?
    include "conexao.php";
	connect();


    $sqlquery = "DELETE FROM usuarios WHERE idusuario = '".$_GET[id]."'";
	$process = mysql_query($sqlquery) or die("Erro: ");

            echo "<script>window.location='usuarios.php?mensagem=Registro Excluído!'</script>";
	
?>