<?
    include "conexao.php";
	connect();
    $date = date("d/m/y");
    $hora = date("H:i");

    @session_start(); // Inicializa a sess�o
    
	
    $user = trim($_POST["login"]);
    $pwd  = trim($_POST["senha"]);
	$Email = trim($_POST["txtEmail"]);
	

    $sQuery = "select login, senha
               from usuarios
               where  login = '" . $user . "' and senha = '" . $pwd . "' and ativo = '0'";
	
    $oUser = mysql_query($sQuery)
             or die("Query invalida: " . mysql_error());
			
		if (mysql_num_rows($oUser) > 0) 
		{
			$line = mysql_fetch_array($oUser);
            $_SESSION["login"] = $line['login'];
            $_SESSION["senha"] = $line['senha'];
            echo "<script>window.location='inicial.php'</script>";
			}         
         else 
		 {
            ?>
               <script language="JavaScript">
                <!--
                alert("Usu�rio e/ou Senha incorreta,um email com a ativa��o foi enviado para o seu email!");
                window.location = 'index.php';
                //-->
                </script>
            <?php
        }
?>
