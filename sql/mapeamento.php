  
  <?
      session_start();
      include "conexao.php";
      connect();
	  $date = date("d/m/y");
	  $hora = date("H:i");
      $Login 	=  $_SESSION["login"]; //recebe a sess�o do login
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
      //$erro = "Preencha o cargo na institui��o"."<br />";
      //}
      //--------------------------------------------------------
      $textoCapcha=trim($_POST['txtCapcha']); // Variaveis de valida��o
      $palavraCapcha=trim($_SESSION["palavra"]); // se��o da capcha
  
      //if (validaCapcha($textoCapcha,$palavraCapcha)==true){
      //Valida��o OK
      //------------------------------------------------------------------------------------
      $consulta = "INSERT INTO mapeamento (nome,cargointituicao,cpf,email,telefone,usuario,preenchido,data,hora)
       VALUES 
      ('$nome','$cargoInstituicao','$cpf','$email','$telefone','$Login','1','$date','$hora')";
       
      $resultado = mysql_query($consulta)
      or die ("--");
      //------------------------------------------------------------------------------------
      //} else {
      //echo ("erro na vallida��o da imagem");	};
      
  
  //------------------------------------------------------------------------
  //Fun��es de Valida��o
      function validaCapcha(&$textoCapcha1,&$palavraCapcha1) {
      
      if ($textoCapcha1==$palavraCapcha1)
      {
          $resultado = true; //Valida��o Ok
      } else {
          $resultado = false; //Valida��o errada
      }
       return $resultado;
      }
	  
	  		?>
	  <script language="JavaScript">
         alert("Mapaemtno cadastrado, clique na parteI para iniciar o cadastramento!");
         </script>
	 <?
  //------------------------------------------------------------------------
  
  ?>