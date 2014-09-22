<? 
session_start();
include "conexao.php";
connect();

$Email = ($_GET["x44221715457fghsr"]);
$Login = ($_GET["1425"]);
$date = date("d/m/y");
$hora = date("H:i");

if (empty($Email) OR empty($Login)) {
    ?>
	   <script language="JavaScript">
	       alert("Acesso n�o autorizado!");
	       window.location = 'index.php';
        </script>
<?
}else{

$consulta = "UPDATE usuarios SET ativo='0' Where (login='$Login')";
 
$resultado = mysql_query($consulta)
or die ("Usuario autenticado com sucesso");
            ?>
               <script language="JavaScript">
                <!--
                alert("Usu�rio autenticado!");
                window.location = 'index.php';
                //-->
                </script>
            <?
$consulta1 = "INSERT INTO historico (usuario,acao,data,hora)
VALUES ('$_GET[1425]','autenticado_email','$date','$hora')";
$resultado1 = mysql_query($consulta1)
or die (mysql_error());
               
}	
?>
