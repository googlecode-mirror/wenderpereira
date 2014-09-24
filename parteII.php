
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-alert.js"></script>
        <!--_JS -->
        <!--CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/barra.css" rel="stylesheet" type="text/css" />
        <!--_CSS -->     

<?
      include "conexao.php";
      connect();
	//  @session_start();
	  $Login = trim($_SESSION["login"]);
   ?>
   <?  function getArray(&$Login){
	   $sql = "select * from pesquisa Where id_usuario= '$Login' and id_parte ='2';";
	   $Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
	   $i=0;
	   $resposta = array();
	   while ($array_exibir = mysql_fetch_array($Resultado)) {
		$resposta[$i] = ($array_exibir['id_resposta']);
		$i++;
	    }
   	    return $resposta;
      	}
     	$meuArray = getArray($Login);
  ?>
  
	<? function getArray1(&$Login){
    $sql = "select * from pesquisaquais Where id_usuario= '$Login' and id_parte ='2';";
    $Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
    $i=0;
    
    $resposta1 = array();
    while ($array_exibir = mysql_fetch_array($Resultado)) {
        $resposta1[$array_exibir['id_resposta']] = $array_exibir['resposta'];
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
      <label><input name="qtd1[]" type="checkbox" value="34" <? if(in_array("34", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>
      Promover o intercâmbio/troca de conhecimentos entre os artistas realizadores do projeto e o público em geral ( ênfase na troca de conhecimentos) </label>
      
      <label><input name="qtd1[]" type="checkbox" value="35" <? if(in_array("35", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>
      Produção cultural ( ênfase na produção)</label>
    
      <label><input name="qtd1[]" type="checkbox" value="36" <? if(in_array("36", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>      
      Criação artística ( ênfase na criação)</label>
      
	  <label><input name="qtd1[]" type="checkbox" value="37" <? if(in_array("37", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>
      Experimentação e inovação em artes (ênfase na experimentação)</label>
       
	  <label><input name="qtd1[]" type="checkbox" value="38" <? if(in_array("38", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>      
      Levar a arte e a cultura aos locais de atuação,  promovendo a participação do público e a divulgação da arte de origem do artista
       ( ênfase na divulgação da arte (não seria difusão ou fruição)</label>
       
	  <label><input name="qtd1[]" type="checkbox" value="39" <? if(in_array("39", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>      
      Garantir a inclusão social de cidadãos, gerando auto-estima e aguçando o gosto pelas artes no público local contemplado pelas residências
       (ênfase na atuação social)</label>
       
	  <label><input name="qtd1[]" type="checkbox" value="40" <? if(in_array("40", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>      
      Promover áreas como a educação patrimonial, a formação de guias, etc. (ênfase na preservação do patrimônio e turismo cultural)</label>
       
	  <label><input name="qtd1[]" type="checkbox" value="41" <? if(in_array("41", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>      
       Fomentar a economia local e novos arranjos produtivos, desenvolvendo as cadeias produtivas dos setores culturais (ênfase na economia da cultura)</label>
      <label> 
	  <input name="qtd1[]" type="checkbox" value="42" <? if(in_array("42", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox" />          
      Desenvolvimento e aguçamento das habilidades artísticas (ênfase na excelência da arte)</label>
       
	  <label><input name="qtd1[]" type="checkbox" value="43" id="idqtd1quais" onClick="javascript: textBoxClearSelecao('#idqtd1quais', '#qtd1quais');" <? if(in_array("43", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>      
       Outros. Quais?
      <input name="qtd1quais" id="qtd1quais" value="<?php echo $meuArray1['43'];?>" class="validate[optional,minSize[2]]" type="text" /></label>
    </p>
    <tr>
    <td align="left" class="formu2">
          <label>• As ações em residências artísticas possuem um valor previsto planejado (marque apenas 1 item)*? </label>
          <label>
  
          <input type="radio" name="qtd2" <? if(in_array("45", $meuArray)){ echo "checked";}?> value="45" class="validate[required] radio"/>
     	   Sim</label>
          <label>
          <input type="radio" name="qtd2" <? if(in_array("46", $meuArray)){ echo "checked";}?> value="46" class="validate[required] radio" />
     	  Não</label>
    </td>
    <tr>
    <td height="412" align="left" class="formu2">
    <br/>
    <div>
    <label>• De que forma a instituição financia os diferentes programas em residências artísticas (marque quantos itens julgar necessário)*</label>
    <p>
      <label>
        <input name="qtd3[]" type="checkbox" value="47" <? if(in_array("47", $meuArray)){ echo "checked";}?> 
      class="validate[minCheckbox[1]] checkbox"/>  
        Por meio de editais geridos pela própria instituição</label>
     
      <label>
        <input name="qtd3[]" type="checkbox" value="48" <? if(in_array("48", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        Por meio de editais privados geridos pela própria instituição</label>
   
      <label>
		<input name="qtd3[]" type="checkbox" value="49" <? if(in_array("49", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        Por meio de recursos oriundos de editais públicos externos a instituição</label>
    
      <label>
        <input name="qtd3[]" type="checkbox" value="50" <? if(in_array("50", $meuArray)){ echo "checked";}?> 
      class="validate[minCheckbox[1]] checkbox"/>  
        Por meio de recursos oriundos de editais privados externos a instituição</label>
     
      <label>
		<input name="qtd3[]" type="checkbox" value="51" <? if(in_array("51", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        Por meio de recursos diretos da própria instituição, não necessariamente editais</label>
      
      <label>
        <input name="qtd3[]" type="checkbox" value="52" <? if(in_array("52", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        Por meio de fundos públicos de cultura em nível estadual, municipal e federal</label>
       
      <label>
		<input name="qtd3[]" type="checkbox" value="53" <? if(in_array("53", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>    
        Por meio de patrocínio, com recursos oriundos de leis de incentivo em nível estadual, federal e municipal</label>
       
      <label>
        <input name="qtd3[]" type="checkbox" value="54" <? if(in_array("54", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>    
        Por meio de empréstimos junto a instituições financeiras</label>
        
      <label>
		<input name="qtd3[]" type="checkbox" value="55" <? if(in_array("55", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        Por meio de patrocínio/financiamento direto de entidades privadas</label>
        
      <label>
		<input name="qtd3[]" type="checkbox" value="56" <? if(in_array("56", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        Por meio de organizações sociais como SENAC, SEBRAE</label>
        
      <label>
		<input name="qtd3[]" type="checkbox" value="57" <? if(in_array("57", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        Por intermédio do programa Cultura Viva</label>
       
      <label>
		<input name="qtd3[]" type="checkbox" value="58" <? if(in_array("58", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        Por meio de recursos oriundos de órgãos internacionais como OEA, UNESCO</label>
       
      <label>
		<input name="qtd3[]" type="checkbox" value="59" <? if(in_array("59", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        Por meio de Organizações não – governamentais (ONGs)</label>
       
      <label>
		<input name="qtd3[]" type="checkbox" value="60" id="idqtd3quais" onClick="javascript: textBoxClearSelecao('#idqtd3quais', '#qtd3quais');" <? if(in_array("60", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        Outros. Quais?
      <input name="qtd3quais" id="qtd3quais" value="<?php echo $meuArray1['61'];?>" class="validate[optional,minSize[2]]" type="text" /> </label>
    </p>
    </div>
	<br/>
    </td>
    <tr>
      <td align="left" class="formu2">
      <label>Quanto ao local das realizações das residências (marque apenas 1 item)*</label>
		 
        <label>
        <input type="radio" name="qtd4" <? if(in_array("62", $meuArray)){ echo "checked";}?> value="62" 
        class="validate[required] radio" />
        Ocorrem em apenas um município e uma unidade federativa</label>
         
        <label>
        <input type="radio" name="qtd4" <? if(in_array("63", $meuArray)){ echo "checked";}?> value="63" 
        class="validate[required] radio" />
        Pode acontecer em mais de um município,porém na mesma unidade federativa</label>
         
         <label>
        <input type="radio" name="qtd4" <? if(in_array("64", $meuArray)){ echo "checked";}?> value="64" 
        class="validate[required] radio" />
        Tem abrangência nacional, podendo ocorrer em diferentes municípios e em mais de uma unidade federativa</label>
        
        <label>
        <input type="radio" name="qtd4" <? if(in_array("65", $meuArray)){ echo "checked";}?> value="65" 
        class="validate[required] radio" />
        Tem abrangência nacional, podendo ocorrer em mais de um região geográfica</label>
         
         
      </td>
    </tr>
    <tr>
      <td align="left" class="formu2">
      <label>Em caso de abrangência nacional, quando as residências puderem se desenvolver em mais de uma região geográfica
      , quais estão envolvidas(marque quantos itens julgar necessário)*?</label>
      
      <label><input name="qtd5[]" type="checkbox" value="66" <? if(in_array("66", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Região Norte</label>
       
   	  <label><input name="qtd5[]" type="checkbox" value="67" <? if(in_array("67", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Região Nordeste</label>
        
   	  <label><input name="qtd5[]" type="checkbox" value="68" <? if(in_array("68", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Região Centro-Oeste</label>
       
   	  <label><input name="qtd5[]" type="checkbox" value="69" <? if(in_array("69", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Região Sul</label>
       
   	  <label><input name="qtd5[]" type="checkbox" value="70" <? if(in_array("70", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Região Sudeste</label>
          
      </td>
    </tr>
    <tr>
      
      <td align="left" class="formu2">
        <label>• As residências podem ocorrer em países do exterior (marque apenas um item)*?</label>
        
        <label>
          <input type="radio" name="qtd6" <? if(in_array("71", $meuArray)){ echo "checked";}?> value="71" 
          class="validate[required] radio" />
          Sim</label>
        <label>
          <input type="radio" name="qtd6" <? if(in_array("72", $meuArray)){ echo "checked";}?> value="72" 
          class="validate[required] radio" />
          Não</label>
      </td>
    </tr>
    <tr><td align="left" class="formu2">
      <div>
    <label>•	Em caso de abrangência internacional, quais os continentes/ subcontinentes / blocos regionais são locais potenciais de realização das residências?
     (marque quantos itens julgar necessário):</label>
    <p>
      <label><input name="qtd7[]" type="checkbox" value="73" <? if(in_array("73", $meuArray)){ echo "checked";}?>/>
      América do Sul</label>
       
      <label><input name="qtd7[]" type="checkbox" value="74" <? if(in_array("74", $meuArray)){ echo "checked";}?>/>
      América Central</label>
      
      <label><input name="qtd7[]" type="checkbox" value="75" <? if(in_array("75", $meuArray)){ echo "checked";}?>/>
      América do Norte</label>
       
      <label><input name="qtd7[]" type="checkbox" value="76" <? if(in_array("76", $meuArray)){ echo "checked";}?>/>
      Europa</label>
       
      <label><input name="qtd7[]" type="checkbox" value="77" <? if(in_array("77", $meuArray)){ echo "checked";}?>/>
      Ásia</label>
       
      <label><input name="qtd7[]" type="checkbox" value="78" <? if(in_array("78", $meuArray)){ echo "checked";}?>/>
      África</label>
      
      <label><input name="qtd7[]" type="checkbox" value="79" <? if(in_array("79", $meuArray)){ echo "checked";}?>/>
      Oceania</label>
       
      <label><input name="qtd7[]" type="checkbox" value="80" <? if(in_array("80", $meuArray)){ echo "checked";}?>/>
      Países Ibero-Americanos</label>
       
      <label><input name="qtd7[]" type="checkbox" value="81" <? if(in_array("81", $meuArray)){ echo "checked";}?>/>
      Países da União Europeia</label>
      
      <label><input name="qtd7[]" type="checkbox" value="82" <? if(in_array("82", $meuArray)){ echo "checked";}?>/>
      Países do MERCOSUL- Argentina, Uruguai, e Paraguai</label>
      
      <label><input name="qtd7[]" type="checkbox" value="83" <? if(in_array("83", $meuArray)){ echo "checked";}?>/>
      Em nível mundial, englobando todos os continentes</label>
      
      <label><input name="qtd7[]" type="checkbox" value="84" id="idqtd7quais" onClick="javascript: textBoxClearSelecao('#idqtd7quais', '#qtd7quais');" <? if(in_array("84", $meuArray)){ echo "checked";}?>/>
      Em acordo bilateral, no caso de apenas um outro país: Qual?
      <input name="qtd7quais" id="qtd7quais" value="<?php echo $meuArray1['85'];?>" class="validate[optional,minSize[2]]" type="text" /></label>
    </p>
  </div>
    </td>
    </tr>
    <tr><td align="left" class="formu2">
    <div>
    <label>• Aponte em quais anos ocorreram programas em residências artísticas (marque quantos itens julgar necessário)*</label>
      
      <label>
	  <input name="qtd8[]" type="checkbox" value="86" id="idqtd8quais" onClick="javascript: textBoxClearSelecao('#idqtd8quais', '#qtd8Quais');" <? if(in_array("86", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Anos anteriores a 2006: Quais?
      <input name="qtd8Quais" id="qtd8Quais" value="<?php echo $meuArray1['95'];?>" class="validate[optional,minSize[2]]" type="text" /></label>
      
      <label><input name="qtd8[]" type="checkbox" value="87" <? if(in_array("87", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>   
      2006</label>
       
      <label><input name="qtd8[]" type="checkbox" value="88" <? if(in_array("88", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      2007</label>
       
      <label><input name="qtd8[]" type="checkbox" value="89" <? if(in_array("89", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      2008</label>
       
      <label><input name="qtd8[]" type="checkbox" value="90" <? if(in_array("90", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      2009</label>
      
      <label><input name="qtd8[]" type="checkbox" value="91" <? if(in_array("91", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      2010</label>
      
      <label><input name="qtd8[]" type="checkbox" value="92" <? if(in_array("92", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      2011</label>
      
      <label><input name="qtd8[]" type="checkbox" value="93" <? if(in_array("93", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      2012</label>
      
      <label><input name="qtd8[]" type="checkbox" id="idqtd81quais" onClick="javascript: textBoxClearSelecao('#idqtd81quais', '#qtd8Quais1');" value="94" <? if(in_array("94", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      2013 em diante (anos já previstos)
      <input name="qtd8Quais1" id="qtd8Quais1" value="<?php echo $meuArray1['96'];?>" class="validate[optional,minSize[2]]" type="text" /></label>
  </div>
    </td>
    </tr>
    <tr><td align="left" class="formu2">
    <div>
    <label>• Com relação à continuidade destes programas em residências artísticas (marque apenas 1 item)*</label>
    
       <label>
       <input type="radio" name="qtd9" <? if(in_array("97", $meuArray)){ echo "checked";}?> value="97" 
       class="validate[required] radio" />
       Houve o programa  apenas uma vez, não tendo data para ocorrer novamente</label>
       
      <label>
	  <input type="radio" name="qtd9" <? if(in_array("98", $meuArray)){ echo "checked";}?> value="98" 
      class="validate[required] radio" />
        Houve o programa apenas uma vez, porém já foi definida uma data para ocorrer novamente</label>
      
      <label>
	   <input type="radio" name="qtd9" <? if(in_array("99", $meuArray)){ echo "checked";}?> value="99" 
       class="validate[required] radio" />
       Os programas aconteceram mais de uma vez, porém não tiveram periodicidade definida</label>
      
      <label>
        <input type="radio" name="qtd9" <? if(in_array("100", $meuArray)){ echo "checked";}?> value="100" 
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
        <input type="radio" name="qtd10" <? if(in_array("107", $meuArray)){ echo "checked";}?> value="107" 
        class="validate[required] radio" />
        Ocorrem uma vez a cada três anos ou mais</label>
     
        <label>
		<input type="radio" name="qtd10" <? if(in_array("108", $meuArray)){ echo "checked";}?> value="108" 
        class="validate[required] radio" />
        Ocorrem uma vez a cada dois anos</label>
      
      <label>
		<input type="radio" name="qtd10" <? if(in_array("109", $meuArray)){ echo "checked";}?> value="109" 
        class="validate[required] radio" />
        São anuais</label>

      <label>
		<input type="radio" name="qtd10" <? if(in_array("110", $meuArray)){ echo "checked";}?> value="110" 
        class="validate[required] radio" />
        São semestrais ou em um período inferior (a cada três meses, dois, etc.)</label>
        
  </div>
    </td>
    </tr>
    <tr><td align="left" class="formu2">
    <div>
    <label>• Há concessão de algum(a) prêmio/bolsa ou qualquer outra forma de apoio financeiro ao artista(marque apenas 1 item)*?
    </label>
    
        <label>
		<input type="radio" name="qtd11" <? if(in_array("111", $meuArray)){ echo "checked";}?> value="111" 
        class="validate[required] radio" />
      Sim</label>
       
      <label>
		<input type="radio" name="qtd11" <? if(in_array("112", $meuArray)){ echo "checked";}?> value="112" 
        class="validate[required] radio" />
        Não</label>
      
  </div>
    </td>
    </tr>
    <tr><td align="left" class="formu2">
    <div>
    <label>• Qual o valor gasto, em média, no total de cada programa realizado em residências artísticas (marque apenas 1 item)*?</label>
    
      <label><input type="radio" name="qtd12" onClick="javascript: textBoxClearSelecao('#idqtd12quais', '#qtd12Quais');" <? if(in_array("113", $meuArray)){ echo "checked";}?> value="113" 
      class="validate[required] radio" />
      Não há valor dispendido para apoio financeiro ao artista</label>
     
      <label><input type="radio" name="qtd12" onClick="javascript: textBoxClearSelecao('#idqtd12quais', '#qtd12Quais');" <? if(in_array("114", $meuArray)){ echo "checked";}?> value="114" 
      class="validate[required] radio" />
      Até R$ 100.00 reais</label>
      
      <label><input type="radio" name="qtd12" onClick="javascript: textBoxClearSelecao('#idqtd12quais', '#qtd12Quais');" <? if(in_array("115", $meuArray)){ echo "checked";}?> value="115" 
      class="validate[required] radio" />
       Acima de R$ 100.00 reais até R$ 200.00 reais</label>
      
      <label><input type="radio" name="qtd12" onClick="javascript: textBoxClearSelecao('#idqtd12quais', '#qtd12Quais');" <? if(in_array("116", $meuArray)){ echo "checked";}?> value="116" 
      class="validate[required] radio" />
       Acima de R$ 200.00 reais até R$ 400.00 reais</label>
       
      <label><input type="radio" name="qtd12" onClick="javascript: textBoxClearSelecao('#idqtd12quais', '#qtd12Quais');" <? if(in_array("117", $meuArray)){ echo "checked";}?> value="117" 
      class="validate[required] radio" />
        Acima de R$ 400.00 reais até R$ 600.00 reais</label>
      
      <label><input type="radio" name="qtd12" onClick="javascript: textBoxClearSelecao('#idqtd12quais', '#qtd12Quais');" <? if(in_array("118", $meuArray)){ echo "checked";}?> value="118" 
      class="validate[required] radio" />
        Acima de R$ 600.00 reais até R$ 1.000.00 de reais</label>
      
      <label><input type="radio" name="qtd12" onClick="javascript: textBoxClearSelecao('#idqtd12quais', '#qtd12Quais');" <? if(in_array("119", $meuArray)){ echo "checked";}?> value="119" 
      class="validate[required] radio" />
        Acima de R$ 1.000.00 de reais até R$ 2.000.00 reais</label>
      
      <label><input type="radio" name="qtd12" onClick="javascript: textBoxClearSelecao('#idqtd12quais', '#qtd12Quais');" <? if(in_array("120", $meuArray)){ echo "checked";}?> value="120" 
      class="validate[required] radio" />
        Acima de R$ 2.000.00 reais até R$ 5.000.00 reais</label>
      
      <label><input type="radio" name="qtd12" id="idqtd12quais" onClick="javascript: textBoxClearSelecao('#idqtd12quais', '#qtd12Quais');" <? if(in_array("121", $meuArray)){ echo "checked";}?> value="121" 
      class="validate[required] radio" />
        Acima de R$ 5.000.00 de reais. Qual valor?
      <input name="qtd12Quais" id="qtd12Quais" value="<?php echo $meuArray1['121'];?>"  class="validate[optional,minSize[2]]" type="text" /></label>
      
      </div>
      </td>
      </tr>
      <tr><td height="27" align="left" class="formu2">
      <div>
      <label>• Qual o apoio financeiro concedido (em reais) para que cada artista realize a ação
     (marque mais de 1 item em caso de diferentes valores concedidos em cada programa realizado)*?</label>
      
      <label><input name="qtd13[]" type="checkbox" value="123" <? if(in_array("123", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Até R$ 500,00</label>
      
      <label><input name="qtd13[]" type="checkbox" value="124" <? if(in_array("124", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Acima de R$ 500,00 até R$ 1.000,00</label>
      
      <label><input name="qtd13[]" type="checkbox" value="125" <? if(in_array("125", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Acima de R$ 1.000,00 até R$ 2.000,00</label>
      
      <label><input name="qtd13[]" type="checkbox" value="126" <? if(in_array("126", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Acima de R$ 2.000,00  até R$ 3.000,00</label>
      
      <label><input name="qtd13[]" type="checkbox" value="127" <? if(in_array("127", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Acima de R$ 3.000,00 até R$ 5.000,00</label>
      
      <label><input name="qtd13[]" type="checkbox" value="128" <? if(in_array("128", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
       Acima de  R$ 5.000,00 até R$ 8.000,00</label>
      
      <label><input name="qtd13[]" type="checkbox" value="129" <? if(in_array("129", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Acima de R$ 10.000,00  até R$ 20.000,00 </label>
      
      <label><input name="qtd13[]" type="checkbox" value="130" <? if(in_array("130", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
       Acima de R$ 20.000,00</label>
      
      <label><input name="qtd13[]" type="checkbox" value="131" <? if(in_array("131", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
       Não há valor concedido, pois a própria  instituição é responsável por diversos itens para a realização da residência ( passagens, traslados, hospedagem, etc)</label>
    </div>
    </td>
    </tr>
    <tr><td align="left" class="formu2">
    <div>
    <label>• O valor concedido já é deduzido do imposto de renda devido (marque apenas 1 item)*?</label>
    
      <label><input type="radio" name="qtd14" <? if(in_array("132", $meuArray)){ echo "checked";}?> value="132" 
      class="validate[required] radio" />
      Não há concessão de qualquer apoio financeiro ao artista</label>
      
      <label><input type="radio" name="qtd14" <? if(in_array("133", $meuArray)){ echo "checked";}?> value="133" 
       class="validate[required] radio" />
        Sim, o artista recebe o valor já deduzido do imposto de renda</label>
      
      <label><input type="radio" name="qtd14" <? if(in_array("134", $meuArray)){ echo "checked";}?> value="134" 
      class="validate[required] radio" />
       Não, a dedução do imposto de renda é responsabilidade do artista</label>
      
  </div>
    </td>
    </tr>
  
    <tr><td align="left" class="formu2">
    <div>
    <label>• Em caso de não estarem incluídos no valor concedido, a instituição arcará com quais dos itens abaixo ( marque quantos itens julgar necessário)*</label>
    
     <label><input name="qtd15[]" type="checkbox" value="135" <? if(in_array("135", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      A instituição não arcará com nenhum dos custos, estando todos inclusos na concessão da(o) bolsa/prêmio</label>
      
      <label><input name="qtd15[]" type="checkbox" value="136" <? if(in_array("136", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Aluguel/ ocupação do espaço onde será realizada a ação</label>
      
      <label><input name="qtd15[]" type="checkbox" value="137" <? if(in_array("137", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Custo do projeto</label>
        
      <label><input name="qtd15[]" type="checkbox" value="138" <? if(in_array("138", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Alimentação</label>
       
      <label><input name="qtd15[]" type="checkbox" value="139" <? if(in_array("139", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Transporte aéreo e/ou terrestre</label>
      
      <label><input name="qtd15[]" type="checkbox" value="140" <? if(in_array("140", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Suporte logístico</label>
       
      <label><input name="qtd15[]" type="checkbox" value="101" <? if(in_array("101", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Aquisição de materiais</label>
      
      <label><input name="qtd15[]" type="checkbox" value="102" <? if(in_array("102", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Contratação de pessoal</label>
      
      <label><input name="qtd15[]" type="checkbox" value="103" <? if(in_array("103", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Aluguel de equipamentos necessários</label>
      
      <label><input name="qtd15[]" type="checkbox" value="104" <? if(in_array("104", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Divulgação</label>
      
      <label><input name="qtd15[]" type="checkbox" value="105" <? if(in_array("105", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      Frete</label>
      
      <label><input name="qtd15[]" type="checkbox" value="106" <? if(in_array("106", $meuArray)){ echo "checked";}?>
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