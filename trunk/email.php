<?
session_start();
if (empty($_SESSION['login'])) {
	?> <script>
     alert("Acesso Negado!");
	 window.location = 'index.php';
	 </script>
	<?php
}else{
	include "conexao.php";
	connect();
	//-----------------------------------------------
	$date = date("d/m/y");
	$hora = date("H:i");
	$Login 		= trim($_POST["login"]);
	$Senha 		= trim($_POST["senha"]);
	$Senha1		= trim($_POST["senha1"]);
	$Nome		= trim($_POST["login"]);	// Pega o valor do campo Nome
	$Email		= trim($_POST["email"]);	// Pega o valor do campo Email
	$Ativacao	= "http://www.funarte.gov.br/criacao_literaria/autenticaremail.php?x44221715457fghsr=$Email&1425=$Login";	
	// Pega os valores do campo Mensagem
	$Agradecimento = "D�vidas: \n\n cepin@funarte.gov.br \n (21)2279-8082 ";
	if (empty($Login) OR empty($Senha) OR $Senha != $Senha1) {
	?>
	   <script>
         alert("Senhas diferentes ou usu�rio j� existe no banco de dados!");
	     window.location = 'novoUsuario.php';
	   </script>
	<?php
      } else 
   {
	//-----------------------------------------------
	//inser��o
	//-----------------------------------------------
	$consulta = "INSERT INTO usuarios (login,senha,nome,ativo,email,data,hora)
    VALUES 
	('$Login','$Senha','$Nome','1','$Email','$date','$hora')";
	$resultado = mysql_query($consulta)
	or die ("Usu�rio ou senha j� existem, falha ao inserir dados!");
	//-----------------------------------------------
	//Email
	//-----------------------------------------------
	// $Nome		= $_POST["Nome"];	// Pega o valor do campo Nome
	// $Fone		= $_POST["Fone"];	// Pega o valor do campo Telefone
	// $Email		= $_POST["Email"];	// Pega o valor do campo Email
	// $Mensagem	= $_POST["Mensagem"];	// Pega os valores do campo Mensagem
 	// Vari�vel que junta os valores acima e monta o corpo do email
	$Vai = "$Nome,\n\n Seus dados de cadastro s�o \n\n E-mail: $Email \n\n Para ativar o seu login clique no link abaixo! \n
	\n Link de ativa��o: $Ativacao\n \n\n $Agradecimento";
	require_once("phpmailer/class.phpmailer.php");
	define('GUSER', 'cadastrofunarte@gmail.com');	// <-- Insira aqui o seu GMail
	define('GPWD', '$empreligado');		// <-- Insira aqui a senha do seu GMail
	function smtpmailer($para, $de, $de_nome, $assunto, $corpo) { 
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();		// Ativar SMTP
	$mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
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
  	    ?>
	  <script>
		alert("Cadastro realizado com sucesso acesse seu email e ative o usu�rio!");
		window.location = 'index.php';
	  </script>
		<?php
		return true;
		}
	}
	// Insira abaixo o email que ir� receber a mensagem, o email que ir� enviar (o mesmo da vari�vel GUSER), 
	//o nome do email que envia a mensagem, o Assunto da mensagem e por �ltimo a vari�vel com o corpo do email.
	 if (smtpmailer($Email, '$Email', 'Nome do Enviador', $Email, $Vai)) {
	//Header("location:http://localhost:8080/"); // Redireciona para uma p�gina de obrigado.
	}
	if (!empty($error)) echo $error;
	}
}
?>