
<?
	session_start();
	include "../conexao.php";
	connect();
	$Login 	=  $_SESSION["login"]; //recebe a sessão do login
	
	$nomeIntituicao = trim($_POST["txtNomeIntituicao"]);
	$cnpj = trim($_POST["txtCnpj"]);
	$endereco = trim($_POST["txtEndereco"]);
	$municipio = trim($_POST["txtMunicipio"]);
	
	
	$textoCapcha=trim($_POST['txtCapcha']); // Variaveis de validação
	$palavraCapcha=trim($_SESSION["palavra"]); // seção da capcha
	
	
	if (validaCapcha($textoCapcha,$palavraCapcha)==true){
	echo ("1");	//Validação OK
	}else{
	echo ("2");	};
	

	if($nomeIntituicao == ""){
	$erro = "Preencha campo nome da Intituicao"."<br />";
	}
	
$consulta = "INSERT INTO usuarios (login,senha,nome,ativo,email)
 VALUES 
 ('$nomeIntituicao','$cnpj','$endereco','1','$municipio')";
 
$resultado = mysql_query($consulta)
or die ("--");

//------------------------------------------------------------------------
//Funções de Validação
	function validaCapcha(&$textoCapcha1,&$palavraCapcha1) {
	
	if ($textoCapcha1==$palavraCapcha1)
	{
		$resultado = true; //Validação Ok
	} else {
		$resultado = false; //Validação errada
	}
	 return $resultado;
	}
//------------------------------------------------------------------------

?>