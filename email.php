<? 
	session_start();
	include "conexao.php";
	include "sqlInjection.php";
	connect();
	//-----------------------------------------------
	


	$date = date("d/m/y");
	$hora = date("H:i");
	$login 		= anti_sql_injection($_POST["login"]);
	$senha 		= anti_sql_injection($_POST["senha"]);
	$senha1		= anti_sql_injection($_POST["senha1"]);
	$nome		= anti_sql_injection($_POST["login"]);	// Pega o valor do campo Nome
	$email		= anti_sql_injection($_POST["email"]);	// Pega o valor do campo Email
	$ativacao	= "http://www.funarte.gov.br/mapeamento_residencias/autenticaremail.php?x44221715457fghsr=$email&1425=$login";	
	// Pega os valores do campo Mensagem
	$agradecimento = "Dúvidas: \n\n cepin@funarte.gov.br \n (21)2279-8082 ";
	
	if (empty($login) OR empty($senha) OR $senha != $senha1) {
	?>
		    <script>
               alert("Senhas diferentes ou usuário já existe no banco de dados!");
			   window.location = 'novoUsuario.php';
			          </script>
	<?php
      } else 
   {


//-----------------------------------------------
//inserção
//-----------------------------------------------

$consulta = "INSERT INTO usuarios (login,senha,nome,ativo,email,data,hora)
 VALUES 
 ('$login','$Senha','$nome','1','$email','$date','$hora')";
 
$resultado = mysql_query($consulta)
or die ("Usuário ou senha já existem, falha ao inserir dados!");

//-----------------------------------------------
//Email
//-----------------------------------------------


	// $nome		= $_POST["Nome"];	// Pega o valor do campo Nome
	// $Fone		= $_POST["Fone"];	// Pega o valor do campo Telefone
	// $email		= $_POST["Email"];	// Pega o valor do campo Email
	// $Mensagem	= $_POST["Mensagem"];	// Pega os valores do campo Mensagem


 
 // Variável que junta os valores acima e monta o corpo do email
$Vai = "$nome,\n\n Seus dados de cadastro são \n\n Usuário: $nome \n \n E-mail: $email \n\n Para ativar o seu login clique no link abaixo! \n
		\n Link de ativação: $ativacao\n \n\n $agradecimento";

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
               alert("A senha foi enviada para o seu email!");
			   window.location = 'index.php';
             </script>
			<?php
		return true;
	}
}

// Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER), 
//o nome do email que envia a mensagem, o Assunto da mensagem e por último a variável com o corpo do email.

 if (smtpmailer($email, '$email', 'Nome do Enviador', $email, $Vai)) {

?>
<script>
 alert("A senha foi enviada para o seu email!". echo $email."");
	//Header("location:http://localhost:8080/"); // Redireciona para uma página de obrigado.
</script>
<?
}
if (!empty($error)) echo $error;

}
?>