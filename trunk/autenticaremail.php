<? 
session_start();
include "conexao.php";
connect();

$Email = ($_GET["x44221715457fghsr"]);
$Login = ($_GET["1425"]);

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

?>
