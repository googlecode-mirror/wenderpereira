<?
    include "conexao.php";
	connect();
    $date = date("d/m/y");
    $hora = date("H:i");

    @session_start(); // Inicializa a sessão
    
	
    $user = trim($_POST["login"]);
    $pwd  = trim($_POST["senha"]);
	$Email = trim($_POST["txtEmail"]);
	

    $sQuery = "select login, senha
               from usuarios
               where  login = '" . $user . "' and senha = '" . $pwd . "' and ativo = '0' and tipo='adm' or tipo='avan'";
	
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
                alert("Usuário e/ou Senha incorreta!");
                window.location = 'index.php';
                //-->
                </script>
            <?
        }
?>
