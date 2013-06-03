<? 
	session_start();
	include "conexao.php";
	include "sqlInjection.php";
	connect();
	//-----------------------------------------------
	
	function aleatorio(){
	$novo_valor= "";
	$valor = "abcdefghijklmnopqrstuvwxyz0123456789";
	srand((double)microtime()*1000000);
	for ($i=0; $i<6; $i++){
	$novo_valor.= $valor[rand()%strlen($valor)];
	}
	return $novo_valor;
	}

	$date = date("d/m/y");
	$hora = date("H:i");
	$Login 		= ($_POST["login"]);
	$Senha 		= ($_POST["senha"]);
	$Senha1		= ($_POST["senha1"]);
	$Nome		= ($_POST["login"]);	// Pega o valor do campo Nome
	$Email		= ($_POST["email"]);	// Pega o valor do campo Email
	$Autenticacao = aleatorio();
	$Ativacao="http://www.funarte.gov.br/mapeamento_residencias/autenticaresetsenha.php?x44221715457fghsr=$Email&1425=$Autenticacao";	
//	$Ativacao	= "http://localhost:8080/autenticaresetsenha.php?x44221715457fghsr=$Email&1425=$Autenticacao";	
	
	
	// Pega os valores do campo Mensagem
	$Agradecimento = "Dúvidas: \n\n cepin@funarte.gov.br \n (21)2279-8082 ";
	
	if (empty($Email)) {
	?>
		    <script>
               alert("Campo de email vazio!");
			   window.location = 'resetsenha.php';
			          </script>
	<?php
      } else 
   {


    $sql = "SELECT * FROM criacao_literaria.usuarios WHERE email='$_POST[email]';";
    $Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
    while ($array_exibir = mysql_fetch_array($Resultado)) {
        $Login = ($array_exibir['login']);
		$Nome = ($array_exibir['nome']);
   	  }
	  
	  
	 $consulta = "UPDATE usuarios SET autenticacao='$Autenticacao' WHERE email='$_POST[email]';";
	 $resultado = mysql_query($consulta)
	 or die ("");
	 
	  

$Vai = "$Nome,\n\n Seus dados de cadastro são \n\n Usuário: $Nome \n \n E-mail: $Email \n\n
Para realizar o reset de sua senha clique no link abaixo e digite o codigo de autenticação:$Autenticacao\n
		\n Link de ativação: $Ativacao\n \n\n $Agradecimento";

require_once("phpmailer/class.phpmailer.php");

define('GUSER', 'cadastrofunarte@gmail.com');	// <-- Insira aqui o seu GMail
define('GPWD', '$empreligado');		// <-- Insira aqui a senha do seu GMail

function smtpmailer($para, $de, $de_nome, $assunto, $corpo) { 
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();		// Ativar SMTP
	$mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
	$mail->SMTPAuth = true;		// Autenticação ativada
	$mail->SMTPSecure = 'ssl';	// SSL REQUERIDO pelo GMail
	$mail->Host = 'smtp.gmail.com';	// SMTP utilizado
	$mail->Port = 465;  		// A porta 465 deverá estar aberta em seu servidor
	$mail->Username = GUSER;
	$mail->Password = GPWD;
	$mail->SetFrom($de, $de_nome);
	$mail->Subject = $assunto;
	$mail->Body = $corpo;
	$mail->AddAddress($para);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
			?>
		    <script>
               alert("A senha foi enviada para o seu email $Email!");
			   window.location = 'index.php';
             </script>
			<?php
		return true;
	}
}

 if (smtpmailer($Email, '$Email', 'Nome do Enviador', $Email, $Vai)) {

?>
<script>
 alert('A senha foi enviada para o seu email! $Email');
	//Header("location:http://localhost:8080/"); // Redireciona para uma página de obrigado.
</script>
<?
}
if (!empty($error)) echo $error;

}
?>