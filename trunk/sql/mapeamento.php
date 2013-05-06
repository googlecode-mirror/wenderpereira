  
  <?
      session_start();
      include "conexao.php";
      connect();
	  $date = date("d/m/y");
	  $hora = date("H:i");
      $Login 	=  $_SESSION["login"]; //recebe a sessão do login
	  
	  
      //--------------------------------------------------------
      // recebe os valores do form mapeamento
      $nome = trim($_POST["txtNome"]);
      $cargoInstituicao = trim($_POST["txtCargoInstituicao"]);
      $cpf = trim($_POST["txtCpf"]);
      $email = trim($_POST["txtEmail"]);
      $telefone = trim($_POST["txtTelefone"]);
      //--------------------------------------------------------
      //testa os campos vazios
      //if($nomeIntituicao == ""){
      //$erro = "Preencha campo nome da Intituicao"."<br />";
      //	}
      //if($cargoInstituicao == ""){
      //$erro = "Preencha o cargo na instituição"."<br />";
      //}
      //--------------------------------------------------------
	  
	  
      $textoCapcha=trim($_POST['txtCapcha']); // Variaveis de validação
      $palavraCapcha=trim($_SESSION["palavra"]); // seção da capcha
  
      //if (validaCapcha($textoCapcha,$palavraCapcha)==true){
      //Validação OK
      //------------------------------------------------------------------------------------
      $consulta = "INSERT INTO mapeamento (nome,cargointituicao,cpf,email,telefone,usuario,preenchido,data,hora)
       VALUES 
      ('$nome','$cargoInstituicao','$cpf','$email','$telefone','$Login','1','$date','$hora')";
       
      $resultado = mysql_query($consulta)
	  or die ("--");
      //------------------------------------------------------------------------------------
      //} else {
      //echo ("erro na vallidação da imagem");	};


      $consulta = "UPDATE usuarios SET parte='0' WHERE login='$Login';";
      $resultado = mysql_query($consulta)
      or die ("--");
      //---------------------------
  
  ?>