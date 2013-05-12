<? 
session_start();
include "conexao.php";
include "sqlInjection.php";
connect();

$Email = anti_sql_injection($_GET["x44221715457fghsr"]);
$Login = anti_sql_injection($_GET["1425"]);

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
