<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<? 
	session_start();
	if (empty($_SESSION["login"])){
	header("Location: index.php");
	exit;
	} 
?>
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
   
<title>Funarte - Portal das Artes</title>
<!--<script src="js/jsValidate.js" type="text/javascript"></script>
<script src="js/jquery-1.6.2.js" type="text/javascript"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>
<script src="js/jsvalidarParteII.js" type="text/javascript"></script>
        
	 <style type="text/css">
     /* Estilizar os alertas */
     label.error{
       padding-left: 2px;
       color: red;
       font-weight: bold;
     }
     </style>-->
     
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
     
     
</head>
<form name="form1" id="form1" method="post"  action="sql\parteII.php">
  <table width="80%" align="center" cellpadding="2" cellspacing="2" style="border:solid 1px #333333; font-family: Verdana, Geneva, sans-serif; font-size: 14px;">
    <tr bgcolor="#C7C7C7">
      <td align="left" bgcolor="#C7C7C7" class="formu2"><div align="left">
        <br/>
        <b><label>
          <div align="center">PARTE II</div>
        </label>
        <br/>
        <label>
          <div align="center">SOBRE  OS PROGRAMAS DE RESIDÊNCIA ARTÍSTICA</div>
        </label>
        <br/>
		</b></div>
        <table width="99%" align="center" border="0">
          <tr>
            <th>
              <div align="justify">
                <p>Um programa de residências artísticas consiste num conjunto de ações voltadas para o incentivo à experimentação, inovação, pesquisa e criação no campo das artes. Isto se dá, em geral, através do apoio (financeiro ou não) concedido a artistas que, na maior parte das vezes, saem de seu lugar de origem para realizar residências em outras localidades. A instituição pode realizar o programa de residências artísticas por meio de recursos oriundos de outros editais públicos e privados, por meio de seus próprios editais/recursos ou qualquer outra forma de financiamento direto ou indireto. Os programas podem ou não conceder apoio financeiro ao artista, podendo a instituição arcar com parte dos custos ou com a totalidade deles. Os locais de realização das residências variam conforme o programa, podendo abranger desde um município até os mais diferentes países. Os programas podem abranger uma ou mais linguagens artísticas (circo, dança, teatro, artes visuais, música, arte digital, literatura, cinema). Quanto à periodicidade, podem acontecer em períodos pré-estabelecidos, anualmente, semestralmente, etc. </p>
                <br/>
              </div></th>
          </tr>
          
        </table>
	  </td>
    </tr>
  
    <tr bgcolor="#D2D2D2"><td align="left" class="formu2">
    
    <label>• Qual o principal objetivo dos programas de residência artística? </label>
    (marque no máximo os 3  itens de maior importância)* <br />
    <p>
      <input name="qtd1[]" type="checkbox" value="1a" <? if(in_array("1a", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>
      <label>promover o intercâmbio/troca de conhecimentos entre os artistas realizadores do projeto e o público em geral ( ênfase na troca de conhecimentos) </label>
      <br />
      <input name="qtd1[]" type="checkbox" value="1b" <? if(in_array("1b", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>
      <label>produção cultural ( ênfase na produção)</label>
      <br />
      <input name="qtd1[]" type="checkbox" value="1c" <? if(in_array("1c", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>      
      <label>criação artística ( ênfase na criação)</label>
      <br />
	  <input name="qtd1[]" type="checkbox" value="1d" <? if(in_array("1d", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>
      <label>experimentação e inovação em artes (ênfase na experimentação)</label>
      <br />
	  <input name="qtd1[]" type="checkbox" value="1e" <? if(in_array("1e", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>      
      <label>levar a arte e a cultura aos locais de atuação,  promovendo a participação do público e a divulgação da arte de 		origem do artista ( ênfase na divulgação da arte (não seria difusão ou fruição?))</label>
      <br />
	  <input name="qtd1[]" type="checkbox" value="1f" <? if(in_array("1f", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>      
      <label>garantir a inclusão social de cidadãos, gerando auto-estima e aguçando o gosto pelas artes no público local contemplado pelas residências (ênfase na atuação social)</label>
      <br />
	  <input name="qtd1[]" type="checkbox" value="1g" <? if(in_array("1g", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>      
      <label>promover áreas como a educação patrimonial, a formação de guias, etc. (ênfase na preservação do patrimônio e turismo cultural)</label>
      <br />
	  <input name="qtd1[]" type="checkbox" value="1h" <? if(in_array("1h", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>      
      <label> fomentar a economia local e novos arranjos produtivos, desenvolvendo as cadeias produtivas dos setores culturais (ênfase na economia da cultura)</label>
      <br />
	  	  <input name="qtd1[]" type="checkbox" value="1i" <? if(in_array("1i", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>          
      <label>desenvolvimento e aguçamento das habilidades artísticas (ênfase na excelência da arte)</label>
      <br />
	  <input name="qtd1[]" type="checkbox" value="1j" <? if(in_array("1j", $meuArray)){ echo "checked";}?>
      class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>      
      <label> Outros<label> Quais?</label>
      <input name="qtd1quais" value="<?php echo $_POST[qtd1quais];?>" type="text" />
    </p>
    <tr bgcolor="#C7C7C7">
    <td align="left" class="formu2">
          <label>• As ações em residências artísticas possuem um valor previsto planejado (marque apenas 1 item)?* </label>
          <label>
          <br/>
          <input type="radio" name="qtd2" <? if(in_array("2a", $meuArray)){ echo "checked";}?> value="2a" class="validate[required] radio"/>
     	   Sim</label>
          <label>
          <input type="radio" name="qtd2" <? if(in_array("2b", $meuArray)){ echo "checked";}?> value="2b" class="validate[required] radio" />
     	  Não</label>
    </td>
    <tr bgcolor="#D2D2D2">
    <td height="412" align="left" class="formu2">
    <br/>
    <div>
    <label>• De que forma a instituição financia os diferentes programas em residências artísticas (marque quantos itens julgar necessário):*</label>
    <p>
      <label>
        <input name="qtd3[]" type="checkbox" value="3a" <? if(in_array("3a", $meuArray)){ echo "checked";}?> 
      class="validate[minCheckbox[1]] checkbox"/>  
por meio de editais geridos pela própria instituição</label>
      <br />
      <label>
        <input name="qtd3[]" type="checkbox" value="3b" <? if(in_array("3b", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        por meio de editais privados geridos pela própria instituição</label>
      <br />
      <label>
		<input name="qtd3[]" type="checkbox" value="3c" <? if(in_array("3c", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        por meio de recursos oriundos de editais públicos externos a instituição</label>
      <br/>
      <label>
        <input name="qtd3[]" type="checkbox" value="3d" <? if(in_array("3d", $meuArray)){ echo "checked";}?> 
      class="validate[minCheckbox[1]] checkbox"/>  
        por meio de recursos oriundos de editais privados externos a instituição</label>
      <br/>
      <label>
		<input name="qtd3[]" type="checkbox" value="3e" <? if(in_array("3e", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        por meio de recursos diretos da própria instituição, não necessariamente editais</label>
      <br/>
      <label>
        <input name="qtd3[]" type="checkbox" value="3f" <? if(in_array("3f", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        por meio de fundos públicos de cultura em nível estadual, municipal e federal</label>
      <br/>
      <label>
		<input name="qtd3[]" type="checkbox" value="3g" <? if(in_array("3g", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>    
        por meio de patrocínio, com recursos oriundos de leis de incentivo em nível estadual, federal e municipal</label>
      <br/>
      <label>
        <input name="qtd3[]" type="checkbox" value="3h" <? if(in_array("3h", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>    
        por meio de empréstimos junto a instituições financeiras</label>
      <br/>
      <label>
		<input name="qtd3[]" type="checkbox" value="3i" <? if(in_array("3i", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        por meio de patrocínio/financiamento direto de entidades privadas</label>
      <br/>
      <label>
		<input name="qtd3[]" type="checkbox" value="3j" <? if(in_array("3j", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        por meio de organizações sociais como SENAC, SEBRAE</label>
      <br/>
      <label>
		<input name="qtd3[]" type="checkbox" value="3k" <? if(in_array("3k", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        por intermédio do programa Cultura Viva</label>
      <br/>
      <label>
		<input name="qtd3[]" type="checkbox" value="3l" <? if(in_array("3l", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        por meio de recursos oriundos de órgãos internacionais como OEA, UNESCO</label>
      <br/>
      <label>
		<input name="qtd3[]" type="checkbox" value="3m" <? if(in_array("3m", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        por meio de Organizações não – governamentais (ONGs)</label>
      <br/>
      <label>
		<input name="qtd3[]" type="checkbox" value="3n" <? if(in_array("3n", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        Outros</label>
      <label>Quais</label>
      <input name="qtd3quais" value="<?php echo $_POST[qtd3quais];?>" type="text" />
    </p>
    </div>
	<br/>
    </td>
    <tr bgcolor="#C7C7C7">
      <td align="left" class="formu2">
      <label>Quanto ao local das realizações das residências (marque apenas 1 item)*:</label>
		<br/>
        <label>
        <input type="radio" name="qtd4" <? if(in_array("4a", $meuArray)){ echo "checked";}?> value="4a" 
        class="validate[required] radio" />
        ocorrem em apenas um município e uma unidade federativa</label>
        <br />
         <label>
        <input type="radio" name="qtd4" <? if(in_array("4b", $meuArray)){ echo "checked";}?> value="4b" 
        class="validate[required] radio" />
        pode acontecer em mais de um município,porém na mesma unidade federativa</label>
        <br />
         <label>
        <input type="radio" name="qtd4" <? if(in_array("4c", $meuArray)){ echo "checked";}?> value="4c" 
        class="validate[required] radio" />
        tem abrangência nacional, podendo ocorrer em diferentes municípios e em mais de uma unidade federativa</label>
        <br />
                 <label>
        <input type="radio" name="qtd4" <? if(in_array("4d", $meuArray)){ echo "checked";}?> value="4d" 
        class="validate[required] radio" />
        tem abrangência nacional, podendo ocorrer em mais de um região geográfica</label>
        <br />
        <br/>
      </td>
    </tr>
    <tr bgcolor="#D2D2D2">
      <td align="left" class="formu2">
      <label>Em caso de abrangência nacional, quando as residências puderem se desenvolver em mais de uma região geográfica
      , quais estão envolvidas?(marque quantos itens julgar necessário)*:</label>
      <br/>
       <br/>
   	  <input name="qtd5[]" type="checkbox" value="5a" <? if(in_array("5a", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      <label>Região Norte</label>
      <br/>
   	  <input name="qtd5[]" type="checkbox" value="5b" <? if(in_array("5b", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      <label>Região Nordeste</label>
       <br/>
   	  <input name="qtd5[]" type="checkbox" value="5c" <? if(in_array("5c", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      <label>Região Centro-Oeste</label>
      <br/>
   	  <input name="qtd5[]" type="checkbox" value="5d" <? if(in_array("5d", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      <label>Região Sul</label>
      <br/>
   	  <input name="qtd5[]" type="checkbox" value="5e" <? if(in_array("5e", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      <label>Região Sudeste</label>
      <br/>
   	  <input name="qtd5[]" type="checkbox" value="5f" <? if(in_array("5f", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      <label>Região Sudeste</label>
      <br/>
      <br/>
      </td>
    </tr>
    <tr bgcolor="#C7C7C7">
      
      <td align="left" class="formu2">
        <label>• As residências podem ocorrer em países do exterior (marque apenas um item)?*</label>
        <br/>
        <label>
          <input type="radio" name="qtd6" <? if(in_array("6a", $meuArray)){ echo "checked";}?> value="6a" 
          class="validate[required] radio" />
          Sim</label>
        <label>
          <input type="radio" name="qtd6" <? if(in_array("6b", $meuArray)){ echo "checked";}?> value="6b" 
          class="validate[required] radio" />
          Não</label>
        <br/>
        <br/>
      </td>
    </tr>
    <tr bgcolor="#D2D2D2"><td align="left" class="formu2">
      <div>
    <label>•	Em caso de abrangência internacional, quais os continentes/ subcontinentes / blocos regionais são locais potenciais de realização das residências? (marque quantos itens julgar necessário):</label>
    <p>
      <input name="qtd7[]" type="checkbox" value="7a" <? if(in_array("7a", $meuArray)){ echo "checked";}?>
		/>
      <label>América do Sul</label>
      <br/>
      <input name="qtd7[]" type="checkbox" value="7b" <? if(in_array("7b", $meuArray)){ echo "checked";}?>
		/>
      <label>América Central</label>
      <br/>
      <input name="qtd7[]" type="checkbox" value="7c" <? if(in_array("7c", $meuArray)){ echo "checked";}?>
		/>
      <label>América do Norte</label>
      <br/>
      <input name="qtd7[]" type="checkbox" value="7d" <? if(in_array("7d", $meuArray)){ echo "checked";}?>
		/>
      <label>Europa</label>
      <br/>
      <input name="qtd7[]" type="checkbox" value="7e" <? if(in_array("7e", $meuArray)){ echo "checked";}?>
		/>
      <label>Ásia</label>
      <br/>
      <input name="qtd7[]" type="checkbox" value="7f" <? if(in_array("7f", $meuArray)){ echo "checked";}?>
		/>
      <label>África</label>
      <br/>
      <input name="qtd7[]" type="checkbox" value="7g" <? if(in_array("7g", $meuArray)){ echo "checked";}?>
		/>
      <label>Oceania</label>
      <br/>
      <input name="qtd7[]" type="checkbox" value="7h" <? if(in_array("7h", $meuArray)){ echo "checked";}?>
		/>
      <label>países Ibero-Americanos</label>
      <br/>
      <input name="qtd7[]" type="checkbox" value="7i" <? if(in_array("7i", $meuArray)){ echo "checked";}?>
		/>
      <label>países da União Europeia</label>
      <br/>
      <input name="qtd7[]" type="checkbox" value="7j" <? if(in_array("7j", $meuArray)){ echo "checked";}?>
		/>
      <label>países do MERCOSUL- Argentina, Uruguai, e Paraguai</label>
      <br/>
      <input name="qtd7[]" type="checkbox" value="7k" <? if(in_array("7k", $meuArray)){ echo "checked";}?>
		/>
      <label>em nível mundial, englobando todos os continentes</label>
      <br/>
      <input name="qtd7[]" type="checkbox" value="7l" <? if(in_array("7l", $meuArray)){ echo "checked";}?>
		/>
      <label>em acordo bilateral, no caso de apenas um outro país</label>
      <br/>
      <label>Quail?</label>
      <input name="qtd7quais" value="<?php echo $_POST[qtd7quais];?>" type="text" />
    </p>
  </div>
    </td>
    </tr>
    <tr bgcolor="#C7C7C7"><td align="left" class="formu2">
    <div>
    <label>• Aponte em quais anos ocorreram programas em residências artísticas (marque quantos itens julgar necessário)</label>
    *
    <p>
      <label>
	<input name="qtd8[]" type="checkbox" value="8a" <? if(in_array("8a", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
Anos anteriores a 2006: </label>
      <label>Quais</label>
      <input name="qtd8Quais" type="text" />
      <br />
      <label>
	<input name="qtd8[]" type="checkbox" value="8b" <? if(in_array("8b", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>   
        2006</label>
      <br />
      <label>
      <input name="qtd8[]" type="checkbox" value="8c" <? if(in_array("8c", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        2007</label>
      <br />
      <label>
      <input name="qtd8[]" type="checkbox" value="8d" <? if(in_array("8d", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        2008</label>
      <br />
      <label>
      <input name="qtd8[]" type="checkbox" value="8e" <? if(in_array("8e", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        2009</label>
      <br />
      <label>
      <input name="qtd8[]" type="checkbox" value="8f" <? if(in_array("8f", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        2010</label>
      <br />
      <label>
      <input name="qtd8[]" type="checkbox" value="8g" <? if(in_array("8g", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        2011</label>
      <br />
      <label>
      <input name="qtd8[]" type="checkbox" value="8h" <? if(in_array("8h", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        2012</label>
      <br />
      <label>
      <input name="qtd8[]" type="checkbox" value="8i" <? if(in_array("8i", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        2013</label>
      <label>em diante (anos já previstos)</label>
      <input name="qtd8Quais1" type="text" />
      <br />
    </p>
  </div>
    </td>
    </tr>
    <tr bgcolor="#D2D2D2"><td align="left" class="formu2">
    <div>
    <label>• Com relação à continuidade destes programas em residências artísticas (marque apenas 1 item)*:</label>
    <p>
      <label>
       <input type="radio" name="qtd9" <? if(in_array("9a", $meuArray)){ echo "checked";}?> value="9a" 
       class="validate[required] radio" />
       houve o programa  apenas uma vez, não tendo data para ocorrer novamente</label>
      <br />
      <label>
	  <input type="radio" name="qtd9" <? if(in_array("9b", $meuArray)){ echo "checked";}?> value="9b" 
      class="validate[required] radio" />
        houve o programa apenas uma vez, porém já foi definida uma data para ocorrer novamente</label>
      <br />
      <label>
	   <input type="radio" name="qtd9" <? if(in_array("9c", $meuArray)){ echo "checked";}?> value="9c" 
       class="validate[required] radio" />
        os programas aconteceram mais de uma vez, porém não tiveram periodicidade definida</label>
      <br />
      <label>
        <input type="radio" name="qtd9" <? if(in_array("9d", $meuArray)){ echo "checked";}?> value="9d" 
        class="validate[required] radio" />
        os programas aconteceram mais de uma vez e tiveram periodicidade definida</label>
      <br />
    </p>
  </div>
    
    </td>
    </tr>
    <tr bgcolor="#C7C7C7"><td align="left" class="formu2">
    <div>
    <label>• Em caso dos programas terem ocorridos mais de uma vez e terem periodicidade definida (marque apenas 1 item)*:</label>
    <p>
      <label>
        <input type="radio" name="qtd10" <? if(in_array("10a", $meuArray)){ echo "checked";}?> value="10a" 
        class="validate[required] radio" />
      ocorrem uma vez a cada três anos ou mais</label>
      <br />
      <label>
		<input type="radio" name="qtd10" <? if(in_array("10b", $meuArray)){ echo "checked";}?> value="10b" 
        class="validate[required] radio" />
        ocorrem uma vez a cada dois anos</label>
      <br />
      <label>
		<input type="radio" name="qtd10" <? if(in_array("10c", $meuArray)){ echo "checked";}?> value="10c" 
        class="validate[required] radio" />
        são anuais</label>
      <br />
      <label>
		<input type="radio" name="qtd10" <? if(in_array("10d", $meuArray)){ echo "checked";}?> value="10d" 
        class="validate[required] radio" />
        são semestrais ou em um período inferior (a cada três meses, dois, etc.)</label>
      <br />
    </p>
  </div>
    
    </td>
    </tr>
    <tr bgcolor="#D2D2D2"><td align="left" class="formu2">
    <div>
    <label>• Há concessão de algum(a) prêmio/bolsa ou qualquer outra forma de apoio financeiro ao artista?(marque apenas 1 item)*
    </label>
    <p>
      <label>
		<input type="radio" name="qtd11" <? if(in_array("11a", $meuArray)){ echo "checked";}?> value="11a" 
        class="validate[required] radio" />
      Sim</label>
      <br />
      <label>
		<input type="radio" name="qtd11" <? if(in_array("11b", $meuArray)){ echo "checked";}?> value="11b" 
        class="validate[required] radio" />
        Não</label>
      <br />
    </p>
  </div>
    </td>
    </tr>
    <tr bgcolor="#C7C7C7"><td align="left" class="formu2">
    <div>
    <label>• Qual o valor gasto, em média, no total de cada programa realizado em residências artísticas (marque apenas 1 item)*?</label>
    <p>
      <label>
	  <input type="radio" name="qtd12" <? if(in_array("12a", $meuArray)){ echo "checked";}?> value="12a" 
      class="validate[required] radio" />
      não há valor dispendido para apoio financeiro ao artista</label>
      <br />
      <label>
	  <input type="radio" name="qtd12" <? if(in_array("12b", $meuArray)){ echo "checked";}?> value="12b" 
      class="validate[required] radio" />
      até 100.000 reais</label>
      <br />
      <label>
      <input type="radio" name="qtd12" <? if(in_array("12c", $meuArray)){ echo "checked";}?> value="12c" 
      class="validate[required] radio" />
        acima de 100.000 reais até 200.000 reais</label>
      <br />
      <label>
	  <input type="radio" name="qtd12" <? if(in_array("12d", $meuArray)){ echo "checked";}?> value="12d" 
      class="validate[required] radio" />
        acima de 200.000 reais até 400.000 reais</label>
      <br />
      <label>
      <input type="radio" name="qtd12" <? if(in_array("12e", $meuArray)){ echo "checked";}?> value="12e" 
      class="validate[required] radio" />
        acima de 400.000 reais até 600.000 reais</label>
      <br />
      <label>
	  <input type="radio" name="qtd12" <? if(in_array("12f", $meuArray)){ echo "checked";}?> value="12f" 
      class="validate[required] radio" />
        acima de 600.000 reais até 1.000.000 de reais</label>
      <br />
      <label>
      <input type="radio" name="qtd12" <? if(in_array("12g", $meuArray)){ echo "checked";}?> value="12g" 
      class="validate[required] radio" />
        acima de 1.000.000 de reais até 2.000.000 reais</label>
      <br />
      <label>
	  <input type="radio" name="qtd12" <? if(in_array("12h", $meuArray)){ echo "checked";}?> value="12h" 
      class="validate[required] radio" />
        acima de 2.000.000 reais até 5.000.000 reais</label>
      <br />
      <label>
      <input type="radio" name="qtd12" <? if(in_array("12i", $meuArray)){ echo "checked";}?> value="12i" 
      class="validate[required] radio" />
        acima de 5.000.000 de reais</label>
      <label> Qual valor?</label>
      <input name="qtd12Quais" type="text" />
      </p>
      </div>
      </td>
      </tr>
      <tr bgcolor="#D2D2D2"><td height="27" align="left" class="formu2">
      <div>
      <label>• Qual o apoio financeiro concedido (em reais) para que cada artista realize a ação?
     (marque mais de 1 item em caso de diferentes valores concedidos em cada programa realizado)*:</label>
      <p>
      <label>
	  <input name="qtd13[]" type="checkbox" value="13a" <? if(in_array("13a", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      até R$ 500,00</label>
      <br />
      <label>
	  <input name="qtd13[]" type="checkbox" value="13b" <? if(in_array("13b", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      acima de R$ 500,00 até R$ 1.000,00</label>
      <br />
      <label>
	  <input name="qtd13[]" type="checkbox" value="13c" <? if(in_array("13c", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      acima de R$ 1.000,00 até R$ 2.000,00</label>
      <br />
      <label>
	  <input name="qtd13[]" type="checkbox" value="13d" <? if(in_array("13d", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        acima de R$ 2.000,00  até R$ 3.000,00</label>
      <br />
      <label>
	  <input name="qtd13[]" type="checkbox" value="13e" <? if(in_array("13e", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        acima de R$ 3.000,00 até R$ 5.000,00</label>
      <br />
      <label>
	  <input name="qtd13[]" type="checkbox" value="13f" <? if(in_array("13f", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        acima de  R$ 5.000,00 até R$ 8.000,00</label>
      <br />
      <label>
	  <input name="qtd13[]" type="checkbox" value="13g" <? if(in_array("13g", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        acima de R$ 10.000,00  até R$ 20.000,00 </label>
      <br />
      <label>
	  <input name="qtd13[]" type="checkbox" value="13h" <? if(in_array("13h", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        acima de R$ 20.000,00</label>
      <br />
      <label>
	  <input name="qtd13[]" type="checkbox" value="13i" <? if(in_array("13i", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        não há valor concedido, pois a própria  instituição é responsável por diversos itens para a realização da residência ( passagens, traslados, hospedagem, etc)</label>
    </p>
  </div>
    </td>
    </tr>
    <tr bgcolor="#C7C7C7"><td align="left" class="formu2">
    <div>
    <label>• O valor concedido já é deduzido do imposto de renda devido*?  (marque apenas 1 item):</label>
    <p>
      <label>
       <input type="radio" name="qtd14" <? if(in_array("14a", $meuArray)){ echo "checked";}?> value="14a" 
       class="validate[required] radio" />
      Não há concessão de qualquer apoio financeiro ao artista</label>
      <br />
      <label>
       <input type="radio" name="qtd14" <? if(in_array("14b", $meuArray)){ echo "checked";}?> value="14b" 
       class="validate[required] radio" />
        Sim, o artista recebe o valor já deduzido do imposto de renda</label>
      <br />
      <label>
       <input type="radio" name="qtd14" <? if(in_array("14c", $meuArray)){ echo "checked";}?> value="14c" 
       class="validate[required] radio" />
        Não, a dedução do imposto de renda é responsabilidade do artista</label>
      <br />
    </p>
  </div>
    </td>
    </tr>
  
    <tr bgcolor="#D2D2D2"><td align="left" class="formu2">
    <div>
    <label>• Em caso de não estarem incluídos no valor concedido, a instituição arcará com quais dos itens abaixo ( marque quantos itens julgar necessário*)</label>
    <p>
      <label>
        <input name="qtd15[]" type="checkbox" value="15a" <? if(in_array("15a", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
      a instituição não arcará com nenhum dos custos, estando todos inclusos na concessão da(o) bolsa/prêmio</label>
      <br />
      <label>
        <input name="qtd15[]" type="checkbox" value="15b" <? if(in_array("15b", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        aluguel/ ocupação do espaço onde será realizada a ação</label>
      <br />
      <label>
        <input name="qtd15[]" type="checkbox" value="15c" <? if(in_array("15c", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        custo do projeto</label>
      <br />
      <label>
        <input name="qtd15[]" type="checkbox" value="15d" <? if(in_array("15d", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        alimentação</label>
      <br />
      <label>
        <input name="qtd15[]" type="checkbox" value="15e" <? if(in_array("15e", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        transporte aéreo e/ou terrestre</label>
      <br />
      <label>
        <input name="qtd15[]" type="checkbox" value="15f" <? if(in_array("15f", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        suporte logístico</label>
      <br />
      <label>
        <input name="qtd15[]" type="checkbox" value="15g" <? if(in_array("15g", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        aquisição de materiais</label>
      <br />
      <label>
        <input name="qtd15[]" type="checkbox" value="15h" <? if(in_array("15h", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        contratação de pessoal</label>
      <br />
      <label>
        <input name="qtd15[]" type="checkbox" value="15i" <? if(in_array("15i", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        aluguel de equipamentos necessários</label>
      <br />
      <label>
        <input name="qtd15[]" type="checkbox" value="15j" <? if(in_array("15j", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        divulgação</label>
      <br />
      <label>
        <input name="qtd15[]" type="checkbox" value="15k" <? if(in_array("15k", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        frete</label>
      <br />
      <label>
        <input name="qtd15[]" type="checkbox" value="15l" <? if(in_array("15l", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>  
        seguro de obras artísticas</label>
    </p>
  </div>
    </td>
    </tr>
    <tr bgcolor="#D2D2D2">
      <td align="center" class="formu2">&nbsp;</td>
    </tr>
    <tr bgcolor="#C7C7C7"><td align="center" class="formu2">
        <input type="submit" name="avancar" value="avancar" class="botao" onkeypress="return handleEnter(this, event);" /> 
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="submit" name="atualizar" value="atualizar" class="botao"/>
    </td>
    </tr><tr>
      <td align="center" bgcolor="#D2D2D2" class="formu2">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>