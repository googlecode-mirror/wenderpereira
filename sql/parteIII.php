<?
        session_start();
        include "conexao.php";
        connect();
        $Login  =  trim($_SESSION["login"]);
        $conluido =  $_SESSION["concluido"]; //recebe da sess�o o andamento da pesquisa
        $date = date("d/m/y");
        $hora = date("H:i");
        //----------------------------
        // confirma se o form j� foi preenchido
        $sql = "select * from usuarios where login='$Login'";
        $Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
        while ($array_exibir = mysql_fetch_array($Resultado)) 
        {
          $_SESSION["concluido"] = $concluido = ($array_exibir['concluido']);
        }
          //----------------------------
//      echo($Login);
          $questao1 = $_POST[qtd1];
          $questao2 = $_POST[qtd2];
          $questao3 = $_POST[qtd3];
          $questao3Quais = $_POST[qtd3quais];
          $questao4 = $_POST[qtd4];
          $questao5 = $_POST[qtd5];
          $questao6 = $_POST[qtd6];
          $questao7Quais = $_POST[qtd7quais];
         // inserindo informa�oes
        if($concluido == 2) 
        {
          // inserindo CheckBox  
         if(empty($questao2)) {}else{
          insere($questao1,$Login,$date,$hora);}
         if(empty($questao2)) {}else{     
          insere($questao2,$Login,$date,$hora);}
         if(empty($questao2)) {}else{     
          insere($questao2,$Login,$date,$hora);}
         if(empty($questao2)) {}else{    
          insere($questao3,$Login,$date,$hora);}
         if(empty($questao2)) {}else{     
          insere($questao4,$Login,$date,$hora);}
         if(empty($questao2)) {}else{     
          insere($questao5,$Login,$date,$hora);}
         if(empty($questao2)) {}else{     
          insere($questao6,$Login,$date,$hora);}
            // inserindo se n�o branco
      if(empty($questao3Quais)) {
                  }else{
                   $qtdQuestao = qtd3;
                 inserequais($qtdQuestao,$questao3Quais,$Login,$date,$hora);}      
            // inserindo se n�o branco
      if(empty($questao7Quais)) {
                  }else{
                   $qtdQuestao = qtd7;
                 inserequais($qtdQuestao,$questao7Quais,$Login,$date,$hora);}     
         //----------------------------
          $_checkbox = $_POST['qtd7'];
                foreach($_checkbox as $_valor){
                        insere($_valor,$Login,$date,$hora);
                }
        atualizaconcluir($Login);               
		  } elseif ($concluido == 0){
		  echo("Retorne para o mapeamento e realize o cadastro!");  
		  } elseif ($concluido == 1){
		  echo("Retorne para a parteI e realize o cadastro!!");   
		  } elseif ($concluido == 3){
			echo("Cadastramento da Parte III j� foi realizado!"); 
		  } elseif ($concluido == 4){
			echo("Cadastramento da Parte IV j� foi realizado!"); 
		  }else{
	 	 }
          //fun��o insere---------------------------------------------  
        function insere(&$resposta1,&$usuario,&$date,&$hora) {
                
                $consulta = "INSERT INTO pesquisa (respostas,usuario,parte,data,hora)
                 VALUES ('$resposta1','$usuario','3','$date','$hora')";;
                 
                $resultado = mysql_query($consulta)
                or die (mysql_error());
                //fun��o insere---------------------------------------------
        }
          function inserequais(&$qtdQuestao,&$resposta1,&$usuario,&$date,&$hora) {
                $consulta = "INSERT INTO pesquisaquais (questao,respostas,usuario,parte,data,hora)
                 VALUES ('$qtdQuestao','$resposta1','$usuario','3','$date','$hora')";
                $resultado = mysql_query($consulta)
                or die (mysql_error());
          ?>
          <script language="JavaScript">
      alert("ParteIII cadastradra, clique na parte IV para realizar o cadastro!");
      </script>
          <?
          }
     function atualizaconcluir(&$Login){
         $consulta = "UPDATE usuarios SET concluido='3' WHERE login='$Login';";
     $resultado = mysql_query($consulta)
     or die ("--");
		?>
	  <script language="JavaScript">
      alert("ParteIII cadastradra, clique na parte IV para realizar o cadastro!");
      </script>
	  <?
	}
 	