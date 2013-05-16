<? 
session_start();
include "conexao.php";
connect();

$Email = ($_GET["x44221715457fghsr"]);
$Login = ($_GET["1425"]);
$date = date("d/m/y");
$hora = date("H:i");

$consulta = "UPDATE usuarios SET ativo='0' Where (login='$Login')";
 
$resultado = mysql_query($consulta)
or die ("Usuario autenticado com sucesso");
            ?>
               <script language="JavaScript">
                <!--
                alert("Usuário autenticado!");
                window.location = 'index.php';
                //-->
                </script>
            <?php
			
$consulta1 = "INSERT INTO historico (usuario,acao,data,hora)
VALUES ('$Login','autenticado_email','$date','$hora')";
$resultado1 = mysql_query($consulta1)
or die (mysql_error());
			

?>
