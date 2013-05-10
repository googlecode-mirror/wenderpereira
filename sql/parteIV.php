<?
        session_start();
        include "conexao.php";
        connect();
        $Login  =  trim($_SESSION["login"]);
        $conluido =  $_SESSION["concluido"]; //recebe da sessão o andamento da pesquisa
        $date = date("d/m/y");
        $hora = date("H:i");
        
        //----------------------------
        // confirma se o form já foi preenchido
        $sql = "select * from usuarios where login='$Login'";
        $Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
        while ($array_exibir = mysql_fetch_array($Resultado)) 
        {
          $_SESSION["concluido"] = $concluido = ($array_exibir['concluido']);
        }
        // inserindo informaçoes
        $questao5Quais = $_POST[qtd5quais];
        $decs1 = $_POST[dec1];
        $decs2 = $_POST[dec2];
        $decs3 = $_POST[dec3]; 
        $questao1Quais = $_POST[qtd1quais];
        $questao2Quais = $_POST[qtd2quais];
        $questao3Quais = $_POST[qtd3quais];
        $questao4Quais = $_POST[qtd4quais];
        $qtdComentarios = $_POST[qtdComentariosGerais]; 
        if($concluido == 3) 
        {
        // inserindo CheckBox    
        //----------------------------
        $_checkbox = $_POST['qtd1'];
        foreach($_checkbox as $_valor){
        insere($_valor,$Login,$date,$hora);
        }
    //----------------------------
        $_checkbox = $_POST['qtd2'];
        foreach($_checkbox as $_valor){
        insere($_valor,$Login,$date,$hora);
        }
        //----------------------------
        $_checkbox = $_POST['qtd3'];
        foreach($_checkbox as $_valor){
        insere($_valor,$Login,$date,$hora);
        }
    //----------------------------
    $_checkbox = $_POST['qtd4'];
        foreach($_checkbox as $_valor){
        insere($_valor,$Login,$date,$hora);
  }
        //----------------------------
    $_checkbox = $_POST['qtd5'];
        foreach($_checkbox as $_valor){
        insere($_valor,$Login,$date,$hora);
  }  
//------------------------------------------------------
//Inserindo-Descricao-----------------------------------
          if(empty($decs1)) {}else{
           insere($decs1,$Login,$date,$hora);}
          if(empty($decs2)) {}else{
                insere($decs2,$Login,$date,$hora);}
          if(empty($decs3)) {}else{  
                insere($decs3,$Login,$date,$hora);}
//------------------------------------------------------                
      if(empty($qtdComentarios)) {}else{
            $qtdQuestao = qtdComentariosGerais;
        inserequais($qtdQuestao,$qtdComentarios,$Login,$date,$hora);}
//------------------------------------------------------
         if(empty($questao1Quais)) {
          }else{
           $qtdQuestao = qtd1;
         inserequais($qtdQuestao,$questao1Quais,$Login,$date,$hora);}   
          if(empty($questao2Quais)) {
          }else{
           $qtdQuestao = qtd2;
         inserequais($qtdQuestao,$questao2Quais,$Login,$date,$hora);}
     if(empty($questao3Quais)) {
          }else{
           $qtdQuestao = qtd3;
         inserequais($qtdQuestao,$questao3Quais,$Login,$date,$hora);}
     if(empty($questao4Quais)) {
          }else{
           $qtdQuestao = qtd4;
         inserequais($qtdQuestao,$questao4Quais,$Login,$date,$hora);}
     if(empty($questao5Quais)) {
          }else{
           $qtdQuestao = qtd5;
         inserequais($qtdQuestao,$questao5Quais,$Login,$date,$hora);}
        
        atualizaconcluir($Login);               
		  } elseif ($concluido == 0){
		  echo("Retorne para o mapeamento e realize o cadastro!");  
		  } elseif ($concluido == 1){
		  echo("Retorne para a parteI e realize o cadastro!!");   
		  } elseif ($concluido == 2){
			echo("Retorne para a parteII e realize o cadastro!!"); 
		  } elseif ($concluido == 4){
			echo("Cadastramento concluído!"); 
		  }else{
	 	 }
   //função insere---------------------------------------------  
        function insere(&$resposta1,&$usuario,&$date,&$hora) {
                
        $consulta = "INSERT INTO pesquisa (respostas,usuario,parte,data,hora)
         VALUES ('$resposta1','$usuario','4','$date','$hora')";;
         
        $resultado = mysql_query($consulta)
        or die (mysql_error());
        }
        
        function inserequais(&$qtdQuestao,&$resposta1,&$usuario,&$date,&$hora) {
                $consulta = "INSERT INTO pesquisaquais (questao,respostas,usuario,parte,data,hora)
                 VALUES ('$qtdQuestao','$resposta1','$usuario','4','$date','$hora')";
                $resultado = mysql_query($consulta)
                or die (mysql_error());
          }
     function atualizaconcluir(&$Login){
         $consulta = "UPDATE usuarios SET concluido='4' WHERE login='$Login';";
     $resultado = mysql_query($consulta)
     or die ("--");
		?>
	  <script language="JavaScript">
      alert("ParteIV concluida!");
      </script>
	  <?
	}
 	