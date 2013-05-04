
<?
	session_start();
	include "conexao.php";
	connect();
	$Login 	=  trim($_SESSION["login"]);
	$date = date("d/m/y");
	$hora = date("H:i");
	
	$nomeInstituicao = trim($_POST["txtNomeInstituicao"]);
	$cnpj = trim($_POST["txtCnpj"]);
	$endereco = trim($_POST["txtEndereco"]);
	$municipio = trim($_POST["txtMunicipio"]);
	$unidadeFederativa = trim($_POST["cmbUnidadeFederativa"]);
	$cep = trim($_POST["txtCep"]);
	$telefone = trim($_POST["txtTelefone"]);
	$email = trim($_POST["txtEmail"]);
	//----------------------------------------------------	
	$questao1 = $_POST[qtd1];
	$questao2 = $_POST[qtd2];
	$questao3 = $_POST[qtd3];
	$questao3Quais = $_POST[qtd3quais];
	$questao4 = $_POST[qtd4];
	// abaixo --------------------------------------------
	$questao6 = $_POST[qtd6];
	//----------------------------------------------------	
	// inserindo informaçoes
	
	insere($questao1,$Login);
	insere($questao2,$Login);
	insere($questao3,$Login);
	insere($questao4,$Login);
  	//inserindo do check box
  	$_checkbox = $_POST['qtd5'];
	  foreach($_checkbox as $_valor){
		 insere($_valor,$Login);
	  }
	//----------------------
	insere($questao6,$Login);
	
	//função insere---------------------------------------------
	function insere(&$resposta1,&$usuario) {
	
	$consulta = "INSERT INTO pesquisa (respostas,usuario,parte)
	 VALUES ('$resposta1','$usuario','1')";
	 
	$resultado = mysql_query($consulta)
	or die (mysql_error());
	//função insere---------------------------------------------
	}
	inseremapeamentoparte1($nomeInstituicao,$cnpj,$endereco,$municipio,
						   $unidadeFederativa,$cep,$telefone,$email,$Login,
						   $date,$hora);
	function inseremapeamentoparte1(&$nomeInstituicao,&$cnpj,&$endereco,&$municipio,
						   &$unidadeFederativa,&$cep,&$telefone,&$email,&$Login,
						   &$date,&$hora) 	    {
	$consulta = "INSERT INTO mapeamentoparteI 	      	
	(nomeintituicao,cnpj,endereco,municipio,unidadefederativa,cep,telefone,email,usuario,preenchido,data,hora)
	VALUES
	('$nomeInstituicao', '$cnpj', '$endereco', '$municipio', '$unidadeFederativa',
	 '$cep', '$telefone', '$email', '$Login', '1', '$date', '$hora')";
	 
	$resultado = mysql_query($consulta)
	or die (mysql_error());
	//função insere---------------------------------------------
	}
	
	
?>