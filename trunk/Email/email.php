<?php
// $nome		= $_POST["Nome"];	// Pega o valor do campo Nome
// $fone		= $_POST["Fone"];	// Pega o valor do campo Telefone
// $email		= $_POST["Email"];	// Pega o valor do campo Email
// $mensagem	= $_POST["Mensagem"];	// Pega os valores do campo Mensagem

 //$nome		= "Nome"	// Pega o valor do campo Nome
 //$fone		= "Fone"	// Pega o valor do campo Telefone
 //$email		= "Email"	// Pega o valor do campo Email
 //$mensagem	= "Mensagem"	// Pega os valores do campo Mensagem


// Vari�vel que junta os valores acima e monta o corpo do email

$vai = "Nome: $nome\n\nE-mail: $email\n\nTelefone: $fone\n\nMensagem: $mensagem\n";

require_once("phpmailer/class.phpmailer.php");

define('GUSER', 'wendercorrea@gmail.com');	// <-- Insira aqui o seu GMail
define('GPWD', '$wadfg123');		// <-- Insira aqui a senha do seu GMail

function smtpmailer($para, $de, $de_nome, $assunto, $corpo) { 
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();		// Ativar SMTP
	$mail->SMTPDebug = 1;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
	$mail->SMTPAuth = true;		// Autentica��o ativada
	$mail->SMTPSecure = 'ssl';	// SSL REQUERIDO pelo GMail
	$mail->Host = 'smtp.gmail.com';	// SMTP utilizado
	$mail->Port = 465;  		// A porta 465 dever� estar aberta em seu servidor
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
		$error = 'Mensagem enviada!';
		return true;
	}
}

// Insira abaixo o email que ir� receber a mensagem, o email que ir� enviar (o mesmo da vari�vel GUSER), 
//o nome do email que envia a mensagem, o Assunto da mensagem e por �ltimo a vari�vel com o corpo do email.

 if (smtpmailer('wendercorrea@gmail.com', '$email', 'Nome do Enviador', 'Assunto do Email', $vai)) {

	Header("location:http://www.dominio.com.br/obrigado.html"); // Redireciona para uma p�gina de obrigado.

}
if (!empty($error)) echo $error;
?>