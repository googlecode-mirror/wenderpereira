
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-alert.js"></script>
        <!--_JS -->
        <!--CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/barra.css" rel="stylesheet" type="text/css" />
        <!--_CSS -->     

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?
     include "conexao.php";
      connect();
	  $Login 	=  trim($_SESSION["login"]);
   ?>
   <?  function getArray(&$Login){
   	   $sql = "select * from pesquisa Where usuario= '$Login' and parte ='2';";
	   $Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
	   $i=0;
	   $resposta = array();
	   while ($array_exibir = mysql_fetch_array($Resultado)) {
		$resposta[$i] = ($array_exibir['respostas']);
		$i++;
	    }
   	    return $resposta;
      	}
     	$meuArray = getArray($Login);
  ?>
  
	<? function getArray1(&$Login){
    $sql = "select * from pesquisaquais Where usuario= '$Login' and parte ='2';";
    $Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
    $i=0;
    
    $resposta1 = array();
    while ($array_exibir = mysql_fetch_array($Resultado)) {
        $resposta1[$array_exibir['questao']] = $array_exibir['respostas'];
        $i++;
    }
    return $resposta1;
    }
    $meuArray1 = getArray1($Login);
    ?>
       
<title>Funarte - Portal das Artes</title>
     
    <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
	<link rel="stylesheet" href="css/template.css" type="text/css"/>
	<script src="js/jquery-1.8.2.min.js" type="text/javascript">
	</script>
	<script src="js/languages/jquery.validationEngine-pt_BR.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#form1").validationEngine();
		});
	</script>
    
        <script>
	function MarcarCheckBoxClique(campo){
	if(document.getElementById([campo]).checked == true){
	document.getElementById([campo]).visibility = false;
	}else{
	document.getElementById([campo]).checked = true;
	}
	}
	</script>
    <script>

        function textBoxClearSelecao(checkbox, field) {
            if ($(checkbox).attr('checked'))
                $(field).val('');
            else
                $(field).val('');
        }
    </script>
     
     
</head>
<form name="form1" id="form1" method="post"  action="sql/parteII.php">
  <table width="98%" align="center" class="table table-hover" cellpadding="2" cellspacing="2" style="font-family: Verdana, Geneva, sans-serif; font-size: 14px;">
    <tr>
      <td align="left" class="formu2"><div align="left">
        <label><h5><i class="icon-plus-sign"></i>PROGRAMAS</h5></label>
        <label><h5>SOBRE  OS PROGRAMAS DE RESIDÊNCIAS ARTÍSTICAS</h5></label>
        </div>
          <p>Um programa de residências artísticas consiste num conjunto de ações voltadas para o incentivo à experimentação, inovação, pesquisa e criação no campo das artes. Isto se dá, em geral, através do apoio (financeiro ou não) concedido a artistas que, na maior parte das vezes, saem de seu lugar de origem para realizar residências em outras localidades. A instituição pode realizar o programa de residências artísticas por meio de recursos oriundos de outros editais públicos e privados, por meio de seus próprios editais/recursos ou qualquer outra forma de financiamento direto ou indireto. Os programas podem ou não conceder apoio financeiro ao artista, podendo a instituição arcar com parte dos custos ou com a totalidade deles. Os locais de realização das residências variam conforme o programa, podendo abranger desde um município até os mais diferentes países. Os programas podem abranger uma ou mais linguagens artísticas (circo, dança, teatro, artes visuais, música, arte digital, literatura, cinema). Quanto à periodicidade, podem acontecer em períodos pré-estabelecidos, anualmente, semestralmente, etc. 
                  <h5>Os campos  com asterisco* são de preenchimento obrigatório:</h5>
              </div>
          </th>
	  </td>
    </tr>
  
    <tr><td align="left" class="formu2">
    
    <label>• Qual o principal objetivo dos programas de residência artística 
    (marque no máximo os 3  itens de maior importância)*?</label> <br />
    <p>
      <label><input name="qtd1[]" type="checkbox" value="1a" <? if(in_array("1a", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>
      Promover o intercâmbio/troca de conhecimentos entre os artistas realizadores do projeto e o público em geral ( ênfase na troca de conhecimentos) </label>
      
      <label><input name="qtd1[]" type="checkbox" value="1b" <? if(in_array("1b", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>
      Produção cultural ( ênfase na produção)</label>
    
      <label><input name="qtd1[]" type="checkbox" value="1c" <? if(in_array("1c", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>      
      Criação artística ( ênfase na criação)</label>
      
	  <label><input name="qtd1[]" type="checkbox" value="1d" <? if(in_array("1d", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>
      Experimentação e inovação em artes (ênfase na experimentação)</label>
       
	  <label><input name="qtd1[]" type="checkbox" value="1e" <? if(in_array("1e", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>      
      Levar a arte e a cultura aos locais de atuação,  promovendo a participação do público e a divulgação da arte de origem do artista
       ( ênfase na divulgação da arte (não seria difusão ou fruição)</label>
       
	  <label><input name="qtd1[]" type="checkbox" value="1f" <? if(in_array("1f", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>      
      Garantir a inclusão social de cidadãos, gerando auto-estima e aguçando o gosto pelas artes no público local contemplado pelas residências
       (ênfase na atuação social)</label>
       
	  <label><input name="qtd1[]" type="checkbox" value="1g" <? if(in_array("1g", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>      
      Promover áreas como a educação patrimonial, a formação de guias, etc. (ênfase na preservação do patrimônio e turismo cultural)</label>
       
	  <label><input name="qtd1[]" type="checkbox" value="1h" <? if(in_array("1h", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>      
       Fomentar a economia local e novos arranjos produtivos, desenvolvendo as cadeias produtivas dos setores culturais (ênfase na economia da cultura)</label>
      <label> 
	  <input name="qtd1[]" type="checkbox" value="1i" <? if(in_array("1i", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox" />          
      Desenvolvimento e aguçamento das habilidades artísticas (ênfase na excelência da arte)</label>
       
	  <label><input name="qtd1[]" type="checkbox" value="1j" id="idqtd1quais" onClick="javascript: textBoxClearSelecao('#idqtd1quais', '#qtd1quais');" <? if(in_array("1j", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>      
       Outros. Quais?
      <input name="qtd1quais" id="qtd1quais" value="<?php echo $meuArray1['qtd1'];?>" class="validate[optional,minSize[2]]" type="text" /></label>
    </p>
    <tr>
    <td align="left" class="formu2">
          <label>• As ações em residências artísticas possuem um valor previsto planejado (marque apenas 1 item)*? </label>
          <label>
  
          <input type="radio" name="qtd2" <? if(in_array("2a", $meuArray)){ echo "checked";}?> value="2a" class="validate[required] radio"/>
     	   Sim</label>
          <label>
          <input type="radio" name="qtd2" <? if(in_array("2b", $meuArray)){ echo "checked";}?> value="2b" class="validate[required] radio" />
     	  Não</label>
    </td>
    <tr>
    <td height="412" align="left" class="formu2">
    <br/>
    <div>
    <label>• De que forma a instituição financia os diferentes programas em residências artísticas (marque quantos itens julgar necessário)*</label>
    <p>
      <label>
        <input name="qtd3[]" type="checkbox" value="3a" <? if(in_array("3a", $meuArray)){ echo "checked";}?> 
      class="validate[minCheckbox[1]] checkbox"/>  
        Por meio de editais geridos pela própria instituição</label>
     
      <label>
        <input name="qtd3[]" type="checkbox" value="3b" <? if(in_array("3b", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        Por meio de editais privados geridos pela própria instituição</label>
   
      <label>
		<input name="qtd3[]" type="checkbox" value="3c" <? if(in_array("3c", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        Por meio de recursos oriundos de editais públicos externos a instituição</label>
    
      <label>
        <input name="qtd3[]" type="checkbox" value="3d" <? if(in_array("3d", $meuArray)){ echo "checked";}?> 
      class="validate[minCheckbox[1]] checkbox"/>  
        Por meio de recursos oriundos de editais privados externos a instituição</label>
     
      <label>
		<input name="qtd3[]" type="checkbox" value="3e" <? if(in_array("3e", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        Por meio de recursos diretos da própria instituição, não necessariamente editais</label>
      
      <label>
        <input name="qtd3[]" type="checkbox" value="3f" <? if(in_array("3f", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        Por meio de fundos públicos de cultura em nível estadual, municipal e federal</label>
       
      <label>
		<input name="qtd3[]" type="checkbox" value="3g" <? if(in_array("3g", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>    
        Por meio de patrocínio, com recursos oriundos de leis de incentivo em nível estadual, federal e municipal</label>
       
      <label>
        <input name="qtd3[]" type="checkbox" value="3h" <? if(in_array("3h", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>    
        Por meio de empréstimos junto a instituições financeiras</label>
        
      <label>
		<input name="qtd3[]" type="checkbox" value="3i" <? if(in_array("3i", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        Por meio de patrocínio/financiamento direto de entidades privadas</label>
        
      <label>
		<input name="qtd3[]" type="checkbox" value="3j" <? if(in_array("3j", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        Por meio de organizações sociais como SENAC, SEBRAE</label>
        
      <label>
		<input name="qtd3[]" type="checkbox" value="3k" <? if(in_array("3k", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        Por intermédio do programa Cultura Viva</label>
       
      <label>
		<input name="qtd3[]" type="checkbox" value="3l" <? if(in_array("3l", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        Por meio de recursos oriundos de órgãos internacionais como OEA, UNESCO</label>
       
      <label>
		<input name="qtd3[]" type="checkbox" value="3m" <? if(in_array("3m", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        Por meio de Organizações não – governamentais (ONGs)</label>
       
      <label>
		<input name="qtd3[]" type="checkbox" value="3n" id="idqtd3quais" onClick="javascript: textBoxClearSelecao('#idqtd3quais', '#qtd3quais');" <? if(in_array("3n", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        Outros. Quais?
      <input name="qtd3quais" id="qtd3quais" value="<?php echo $meuArray1['qtd3'];?>" class="validate[optional,minSize[2]]" type="text" /> </label>
    </p>
    </div>
	<br/>
    </td>
    <tr>
      <td align="left" class="formu2">
      <label>Quanto ao local das realizações das residências (marque apenas 1 item)*</label>
		 
        <label>
        <input type="radio" name="qtd4" <? if(in_array("4a", $meuArray)){ echo "checked";}?> value="4a" 
        class="validate[required] radio" />
        Ocorrem em apenas um município e uma unidade federativa</label>
         
        <label>
        <input type="radio" name="qtd4" <? if(in_array("4b", $meuArray)){ echo "checked";}?> value="4b" 
        class="validate[required] radio" />
        Pode acontecer em mais de um município,porém na mesma unidade federativa</label>
         
         <label>
        <input type="radio" name="qtd4" <? if(in_array("4c", $meuArray)){ echo "checked";}?> value="4c" 
        class="validate[required] radio" />
        Tem abrangência nacional, podendo ocorrer em diferentes municípios e em mais de uma unidade federativa</label>
        
        <label>
        <input type="radio" name="qtd4" <? if(in_array("4d", $meuArray)){ echo "checked";}?> value="4d" 
        class="validate[required] radio" />
        Tem abrangência nacional, podendo ocorrer em mais de um região geográfica</label>
         
         
      </td>
    </tr>
    <tr>
      <td align="left" class="formu2">
      <label>Em caso de abrangência nacional, quando as residências puderem se desenvolver em mais de uma região geográfica
      , quais estão envolvidas(marque quantos itens julgar necessário)*?</label>
      
      <label><input name="qtd5[]" type="checkbox" value="5a" <? if(in_array("5a", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Região Norte</label>
       
   	  <label><input name="qtd5[]" type="checkbox" value="5b" <? if(in_array("5b", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Região Nordeste</label>
        
   	  <label><input name="qtd5[]" type="checkbox" value="5c" <? if(in_array("5c", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Região Centro-Oeste</label>
       
   	  <label><input name="qtd5[]" type="checkbox" value="5d" <? if(in_array("5d", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Região Sul</label>
       
   	  <label><input name="qtd5[]" type="checkbox" value="5e" <? if(in_array("5e", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Região Sudeste</label>
       
   	  <label><input name="qtd5[]" type="checkbox" value="5f" <? if(in_array("5f", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Região Sudeste</label>
            
      </td>
    </tr>
    <tr>
      
      <td align="left" class="formu2">
        <label>• As residências podem ocorrer em países do exterior (marque apenas um item)*?</label>
        
        <label>
          <input type="radio" name="qtd6" <? if(in_array("6a", $meuArray)){ echo "checked";}?> value="6a" 
          class="validate[required] radio" />
          Sim</label>
        <label>
          <input type="radio" name="qtd6" <? if(in_array("6b", $meuArray)){ echo "checked";}?> value="6b" 
          class="validate[required] radio" />
          Não</label>
      </td>
    </tr>
    <tr><td align="left" class="formu2">
      <div>
    <label>•	Em caso de abrangência internacional, quais os continentes/ subcontinentes / blocos regionais são locais potenciais de realização das residências?
     (marque quantos itens julgar necessário):</label>
    <p>
      <label><input name="qtd7[]" type="checkbox" value="7a" <? if(in_array("7a", $meuArray)){ echo "checked";}?>/>
      América do Sul</label>
       
      <label><input name="qtd7[]" type="checkbox" value="7b" <? if(in_array("7b", $meuArray)){ echo "checked";}?>/>
      América Central</label>
      
      <label><input name="qtd7[]" type="checkbox" value="7c" <? if(in_array("7c", $meuArray)){ echo "checked";}?>/>
      América do Norte</label>
       
      <label><input name="qtd7[]" type="checkbox" value="7d" <? if(in_array("7d", $meuArray)){ echo "checked";}?>/>
      Europa</label>
       
      <label><input name="qtd7[]" type="checkbox" value="7e" <? if(in_array("7e", $meuArray)){ echo "checked";}?>/>
      Ásia</label>
       
      <label><input name="qtd7[]" type="checkbox" value="7f" <? if(in_array("7f", $meuArray)){ echo "checked";}?>/>
      África</label>
      
      <label><input name="qtd7[]" type="checkbox" value="7g" <? if(in_array("7g", $meuArray)){ echo "checked";}?>/>
      Oceania</label>
       
      <label><input name="qtd7[]" type="checkbox" value="7h" <? if(in_array("7h", $meuArray)){ echo "checked";}?>/>
      Países Ibero-Americanos</label>
       
      <label><input name="qtd7[]" type="checkbox" value="7i" <? if(in_array("7i", $meuArray)){ echo "checked";}?>/>
      Países da União Europeia</label>
      
      <label><input name="qtd7[]" type="checkbox" value="7j" <? if(in_array("7j", $meuArray)){ echo "checked";}?>/>
      Países do MERCOSUL- Argentina, Uruguai, e Paraguai</label>
      
      <label><input name="qtd7[]" type="checkbox" value="7k" <? if(in_array("7k", $meuArray)){ echo "checked";}?>/>
      Em nível mundial, englobando todos os continentes</label>
      
      <label><input name="qtd7[]" type="checkbox" value="7l" id="idqtd7quais" onClick="javascript: textBoxClearSelecao('#idqtd7quais', '#qtd7quais');" <? if(in_array("7l", $meuArray)){ echo "checked";}?>/>
      Em acordo bilateral, no caso de apenas um outro país: Qual?
      <input name="qtd7quais" id="qtd7quais" value="<?php echo $meuArray1['qtd7'];?>" class="validate[optional,minSize[2]]" type="text" /></label>
    </p>
  </div>
    </td>
    </tr>
    <tr><td align="left" class="formu2">
    <div>
    <label>• Aponte em quais anos ocorreram programas em residências artísticas (marque quantos itens julgar necessário)*</label>
      
      <label>
	  <input name="qtd8[]" type="checkbox" value="8a" id="idqtd8quais" onClick="javascript: textBoxClearSelecao('#idqtd8quais', '#qtd8Quais');" <? if(in_array("8a", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Anos anteriores a 2006: Quais?
      <input name="qtd8Quais" id="qtd8Quais" value="<?php echo $meuArray1['qtd8'];?>" class="validate[optional,minSize[2]]" type="text" /></label>
      
      <label><input name="qtd8[]" type="checkbox" value="8b" <? if(in_array("8b", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>   
      2006</label>
       
      <label><input name="qtd8[]" type="checkbox" value="8c" <? if(in_array("8c", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      2007</label>
       
      <label><input name="qtd8[]" type="checkbox" value="8d" <? if(in_array("8d", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      2008</label>
       
      <label><input name="qtd8[]" type="checkbox" value="8e" <? if(in_array("8e", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      2009</label>
      
      <label><input name="qtd8[]" type="checkbox" value="8f" <? if(in_array("8f", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      2010</label>
      
      <label><input name="qtd8[]" type="checkbox" value="8g" <? if(in_array("8g", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      2011</label>
      
      <label><input name="qtd8[]" type="checkbox" value="8h" <? if(in_array("8h", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      2012</label>
      
      <label><input name="qtd8[]" type="checkbox" id="idqtd81quais" onClick="javascript: textBoxClearSelecao('#idqtd81quais', '#qtd8Quais1');" value="8i" <? if(in_array("8i", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      2013 em diante (anos já previstos)
      <input name="qtd8Quais1" id="qtd8Quais1" value="<?php echo $meuArray1['qtd81'];?>" class="validate[optional,minSize[2]]" type="text" /></label>
  </div>
    </td>
    </tr>
    <tr><td align="left" class="formu2">
    <div>
    <label>• Com relação à continuidade destes programas em residências artísticas (marque apenas 1 item)*</label>
    
       <label>
       <input type="radio" name="qtd9" <? if(in_array("9a", $meuArray)){ echo "checked";}?> value="9a" 
       class="validate[required] radio" />
       Houve o programa  apenas uma vez, não tendo data para ocorrer novamente</label>
       
      <label>
	  <input type="radio" name="qtd9" <? if(in_array("9b", $meuArray)){ echo "checked";}?> value="9b" 
      class="validate[required] radio" />
        Houve o programa apenas uma vez, porém já foi definida uma data para ocorrer novamente</label>
      
      <label>
	   <input type="radio" name="qtd9" <? if(in_array("9c", $meuArray)){ echo "checked";}?> value="9c" 
       class="validate[required] radio" />
       Os programas aconteceram mais de uma vez, porém não tiveram periodicidade definida</label>
      
      <label>
        <input type="radio" name="qtd9" <? if(in_array("9d", $meuArray)){ echo "checked";}?> value="9d" 
        class="validate[required] radio" />
        Os programas aconteceram mais de uma vez e tiveram periodicidade definida</label>
  </div>
    </td>
    </tr>
    <tr><td align="left" class="formu2">
    <div>
    <label>• Em caso dos programas terem ocorridos mais de uma vez e terem periodicidade definida (marque apenas 1 item)*</label>
    <p>
      <label>
        <input type="radio" name="qtd10" <? if(in_array("10a", $meuArray)){ echo "checked";}?> value="10a" 
        class="validate[required] radio" />
        Ocorrem uma vez a cada três anos ou mais</label>
     
        <label>
		<input type="radio" name="qtd10" <? if(in_array("10b", $meuArray)){ echo "checked";}?> value="10b" 
        class="validate[required] radio" />
        Ocorrem uma vez a cada dois anos</label>
      
      <label>
		<input type="radio" name="qtd10" <? if(in_array("10c", $meuArray)){ echo "checked";}?> value="10c" 
        class="validate[required] radio" />
        São anuais</label>

      <label>
		<input type="radio" name="qtd10" <? if(in_array("10d", $meuArray)){ echo "checked";}?> value="10d" 
        class="validate[required] radio" />
        São semestrais ou em um período inferior (a cada três meses, dois, etc.)</label>
        
  </div>
    </td>
    </tr>
    <tr><td align="left" class="formu2">
    <div>
    <label>• Há concessão de algum(a) prêmio/bolsa ou qualquer outra forma de apoio financeiro ao artista?(marque apenas 1 item)*
    </label>
    
        <label>
		<input type="radio" name="qtd11" <? if(in_array("11a", $meuArray)){ echo "checked";}?> value="11a" 
        class="validate[required] radio" />
      Sim</label>
       
      <label>
		<input type="radio" name="qtd11" <? if(in_array("11b", $meuArray)){ echo "checked";}?> value="11b" 
        class="validate[required] radio" />
        Não</label>
      
  </div>
    </td>
    </tr>
    <tr><td align="left" class="formu2">
    <div>
    <label>• Qual o valor gasto, em média, no total de cada programa realizado em residências artísticas (marque apenas 1 item)*?</label>
    
      <label><input type="radio" name="qtd12" onClick="javascript: textBoxClearSelecao('#idqtd12quais', '#qtd12Quais');" <? if(in_array("12a", $meuArray)){ echo "checked";}?> value="12a" 
      class="validate[required] radio" />
      Não há valor dispendido para apoio financeiro ao artista</label>
     
      <label><input type="radio" name="qtd12" onClick="javascript: textBoxClearSelecao('#idqtd12quais', '#qtd12Quais');" <? if(in_array("12b", $meuArray)){ echo "checked";}?> value="12b" 
      class="validate[required] radio" />
      Até R$ 100.000 reais</label>
      
      <label><input type="radio" name="qtd12" onClick="javascript: textBoxClearSelecao('#idqtd12quais', '#qtd12Quais');" <? if(in_array("12c", $meuArray)){ echo "checked";}?> value="12c" 
      class="validate[required] radio" />
       Acima de R$ 100.000 reais até R$ 200.000 reais</label>
      
      <label><input type="radio" name="qtd12" onClick="javascript: textBoxClearSelecao('#idqtd12quais', '#qtd12Quais');" <? if(in_array("12d", $meuArray)){ echo "checked";}?> value="12d" 
      class="validate[required] radio" />
       Acima de R$ 200.000 reais até R$ 400.000 reais</label>
       
      <label><input type="radio" name="qtd12" onClick="javascript: textBoxClearSelecao('#idqtd12quais', '#qtd12Quais');" <? if(in_array("12e", $meuArray)){ echo "checked";}?> value="12e" 
      class="validate[required] radio" />
        Acima de R$ 400.000 reais até R$ 600.000 reais</label>
      
      <label><input type="radio" name="qtd12" onClick="javascript: textBoxClearSelecao('#idqtd12quais', '#qtd12Quais');" <? if(in_array("12f", $meuArray)){ echo "checked";}?> value="12f" 
      class="validate[required] radio" />
        Acima de R$ 600.000 reais até R$ 1.000.000 de reais</label>
      
      <label><input type="radio" name="qtd12" onClick="javascript: textBoxClearSelecao('#idqtd12quais', '#qtd12Quais');" <? if(in_array("12g", $meuArray)){ echo "checked";}?> value="12g" 
      class="validate[required] radio" />
        Acima de R$ 1.000.000 de reais até R$ 2.000.000 reais</label>
      
      <label><input type="radio" name="qtd12" onClick="javascript: textBoxClearSelecao('#idqtd12quais', '#qtd12Quais');" <? if(in_array("12h", $meuArray)){ echo "checked";}?> value="12h" 
      class="validate[required] radio" />
        Acima de R$ 2.000.000 reais até R$ 5.000.000 reais</label>
      
      <label><input type="radio" name="qtd12" id="idqtd12quais" onClick="javascript: textBoxClearSelecao('#idqtd12quais', '#qtd12Quais');" <? if(in_array("12i", $meuArray)){ echo "checked";}?> value="12i" 
      class="validate[required] radio" />
        Acima de R$ 5.000.000 de reais. Qual valor?
      <input name="qtd12Quais" id="qtd12Quais" value="<?php echo $meuArray1['qtd12'];?>"  class="validate[optional,minSize[2]]" type="text" /></label>
      
      </div>
      </td>
      </tr>
      <tr><td height="27" align="left" class="formu2">
      <div>
      <label>• Qual o apoio financeiro concedido (em reais) para que cada artista realize a ação
     (marque mais de 1 item em caso de diferentes valores concedidos em cada programa realizado)*?</label>
      
      <label><input name="qtd13[]" type="checkbox" value="13a" <? if(in_array("13a", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      até R$ 500,00</label>
      
      <label><input name="qtd13[]" type="checkbox" value="13b" <? if(in_array("13b", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      acima de R$ 500,00 até R$ 1.000,00</label>
      
      <label><input name="qtd13[]" type="checkbox" value="13c" <? if(in_array("13c", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      acima de R$ 1.000,00 até R$ 2.000,00</label>
      
      <label><input name="qtd13[]" type="checkbox" value="13d" <? if(in_array("13d", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      acima de R$ 2.000,00  até R$ 3.000,00</label>
      
      <label><input name="qtd13[]" type="checkbox" value="13e" <? if(in_array("13e", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      acima de R$ 3.000,00 até R$ 5.000,00</label>
      
      <label><input name="qtd13[]" type="checkbox" value="13f" <? if(in_array("13f", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        acima de  R$ 5.000,00 até R$ 8.000,00</label>
      
      <label><input name="qtd13[]" type="checkbox" value="13g" <? if(in_array("13g", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      acima de R$ 10.000,00  até R$ 20.000,00 </label>
      
      <label><input name="qtd13[]" type="checkbox" value="13h" <? if(in_array("13h", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        acima de R$ 20.000,00</label>
      
      <label><input name="qtd13[]" type="checkbox" value="13i" <? if(in_array("13i", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        não há valor concedido, pois a própria  instituição é responsável por diversos itens para a realização da residência ( passagens, traslados, hospedagem, etc)</label>
    </div>
    </td>
    </tr>
    <tr><td align="left" class="formu2">
    <div>
    <label>• O valor concedido já é deduzido do imposto de renda devido (marque apenas 1 item)*?</label>
    
      <label><input type="radio" name="qtd14" <? if(in_array("14a", $meuArray)){ echo "checked";}?> value="14a" 
      class="validate[required] radio" />
      Não há concessão de qualquer apoio financeiro ao artista</label>
      
      <label><input type="radio" name="qtd14" <? if(in_array("14b", $meuArray)){ echo "checked";}?> value="14b" 
       class="validate[required] radio" />
        Sim, o artista recebe o valor já deduzido do imposto de renda</label>
      
      <label><input type="radio" name="qtd14" <? if(in_array("14c", $meuArray)){ echo "checked";}?> value="14c" 
      class="validate[required] radio" />
       Não, a dedução do imposto de renda é responsabilidade do artista</label>
      
  </div>
    </td>
    </tr>
  
    <tr><td align="left" class="formu2">
    <div>
    <label>• Em caso de não estarem incluídos no valor concedido, a instituição arcará com quais dos itens abaixo ( marque quantos itens julgar necessário)*</label>
    
     <label><input name="qtd15[]" type="checkbox" value="15a" <? if(in_array("15a", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      A instituição não arcará com nenhum dos custos, estando todos inclusos na concessão da(o) bolsa/prêmio</label>
      
      <label><input name="qtd15[]" type="checkbox" value="15b" <? if(in_array("15b", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Aluguel/ ocupação do espaço onde será realizada a ação</label>
      
      <label><input name="qtd15[]" type="checkbox" value="15c" <? if(in_array("15c", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Custo do projeto</label>
        
      <label><input name="qtd15[]" type="checkbox" value="15d" <? if(in_array("15d", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Alimentação</label>
       
      <label><input name="qtd15[]" type="checkbox" value="15e" <? if(in_array("15e", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Transporte aéreo e/ou terrestre</label>
      
      <label><input name="qtd15[]" type="checkbox" value="15f" <? if(in_array("15f", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Suporte logístico</label>
       
      <label><input name="qtd15[]" type="checkbox" value="15g" <? if(in_array("15g", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Aquisição de materiais</label>
      
      <label><input name="qtd15[]" type="checkbox" value="15h" <? if(in_array("15h", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Contratação de pessoal</label>
      
      <label><input name="qtd15[]" type="checkbox" value="15i" <? if(in_array("15i", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Aluguel de equipamentos necessários</label>
      
      <label><input name="qtd15[]" type="checkbox" value="15j" <? if(in_array("15j", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Divulgação</label>
      
      <label><input name="qtd15[]" type="checkbox" value="15k" <? if(in_array("15k", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Frete</label>
      
      <label><input name="qtd15[]" type="checkbox" value="15l" <? if(in_array("15l", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Seguro de obras artísticas</label>

  </div>
    </td>
    </tr>
    <tr>
    <td align="center" class="formu2">
   <div align="center">
       <button type="submit" name="atualizar" value="atualizar"  class="btn btn-info"><i class="icon-refresh icon-white"></i> atualizar</button>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <button type="submit" name="avancar" value="avancar"  class="btn btn-success" onkeypress="return handleEnter(this, event);"><i class="icon-arrow-right icon-white"></i> avancar</button>
    </div>
    </td>
    </tr>
    </table>
         <div class="progress progress-danger">
          <div class="bar" style="width: 55%;">55%concluído</div>
        </div>
</form>
</body>
</html>