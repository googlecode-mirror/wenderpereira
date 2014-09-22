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
	  $Login 	=  trim($_SESSION["login"]);
 ?>
 <?    function getArray(&$Login){
   	   $sql = "select * from pesquisa Where id_usuario= '$Login' and id_parte ='3';";
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
  <?
    function getArray1(&$Login){
    $sql = "select * from pesquisaquais Where id_usuario= '$Login' and id_parte ='3';";
    $Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
    $i=0;
    
    $resposta1 = array();
    while ($array_exibir = mysql_fetch_array($Resultado)) {
        $resposta1[$array_exibir['questao']] = $array_exibir['id_resposta'];
        $i++;
    }
    return $resposta1;
    }
    $meuArray1 = getArray1($Login);
 ?>
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
<body>

<form id="form1" name="form1" method="post" action="sql/parteIII.php">

<table width="98%" align="center" class="table table-hover" cellpadding="2" cellspacing="2" style="font-family: Verdana, Geneva, sans-serif;">
      <tr >
        <td>
          <h4><i class="icon-plus-sign"></i>ARTISTAS</h4>
          
          <label><h5>OS ARTISTAS RESIDENTES</h5></label>
		</td>
    </tr>
      <tr >
        <td>
        <div>
        
        <p>
    Os artistas apoiados por programas de residências artísticas podem ser oriundos de diversos países,
             havendo a possibilidade do artista vir fazer a residência no Brasil, bem como, um artista 
            brasileiro realizar a residência no exterior. Os programas de residências podem não ter um intercâmbio internacional, 
            sendo realizado apenas por artistas brasileiros. Em média, os programas concedem prêmios, bolsas ou outras formas de apoio
             a um número determinado de artistas para realizarem a residência em um período de tempo pré-estabelecido.
             O número de artistas apoiados pode variar por programa. O objetivo desta parte é conhecer a realidade dos artistas apoiados,
			 conhecendo melhor as políticas desenvolvidas.</p>
            <h5>Os campos  com asterisco* são de preenchimento obrigatório:</h5>
        </td>
      </tr>
      <tr>
        <td>
      <div>
       <label>Quantos artistas foram apoiados em média ao ano?</label>
         
          <label><input type="radio" name="qtd1" <? if(in_array("141", $meuArray)){ echo "checked";}?> value="141" class="radio" />
          Até 5 artistas</label>
          
          <label><input type="radio" name="qtd1" <? if(in_array("142", $meuArray)){ echo "checked";}?> value="142" class="radio" />
          Acima de 5  até 10</label>
          
          <label><input type="radio" name="qtd1" <? if(in_array("143", $meuArray)){ echo "checked";}?> value="143" class="radio" />
          Acima de 11  até 20</label>
          
          <label><input type="radio" name="qtd1" <? if(in_array("144", $meuArray)){ echo "checked";}?> value="144" class="radio" />
          Acima de 21  até 30 </label>
          
          <label><input type="radio" name="qtd1" <? if(in_array("145", $meuArray)){ echo "checked";}?> value="145" class="radio" />
          Acima de 31 até 50</label>
          
          <label><input type="radio" name="qtd1" <? if(in_array("146", $meuArray)){ echo "checked";}?> value="146" class="radio" />
          Acima de 51 até 80</label>
          
          <label> <input type="radio" name="qtd1" <? if(in_array("147", $meuArray)){ echo "checked";}?> value="147" class="radio" />
          Acima de 81 até 120 </label>
          
          <label><input type="radio" name="qtd1" <? if(in_array("148", $meuArray)){ echo "checked";}?> value="148" class="radio" />
          Acima de 120 artistas</label>
        
      </div>
      </td>
      </tr>
      <tr >
      <td>
      <div>
        <label>O número de artistas apoiados foi o mesmo em todas os programas (marque apenas 1 item)?</label>

          <label><input type="radio" name="qtd2" <? if(in_array("149", $meuArray)){ echo "checked";}?> value="149" class="radio" />
          Sim</label>
          
          <label><input type="radio" name="qtd2" <? if(in_array("150", $meuArray)){ echo "checked";}?> value="150" class="radio" />
          Não, foi aumentando com o tempo</label>
          
          <label><input type="radio" name="qtd2" <? if(in_array("151", $meuArray)){ echo "checked";}?> value="151" class="radio" />
          Não, foi diminuindo com o tempo</label>
          
          <label><input type="radio" name="qtd2" <? if(in_array("152", $meuArray)){ echo "checked";}?> value="152" class="radio" />
          Não, tiveram anos com um número maior e outros com um número menor de montantes concedidos</label>
          
        </div>
        </td>
      </tr>
      <tr>
        <td>
        <div>
        <label>Qual o período de duração da residência (marque apenas 1 item)* ?</label>
        
            <label><input type="radio" name="qtd3" onClick="javascript: textBoxClearSelecao('#idqtd3quais', '#qtd3quais');" <? if(in_array("153", $meuArray)){ echo "checked";}?> value="153" 
            class="validate[required] radio" />
            Até 20 dias</label>
            
            <label><input type="radio" name="qtd3" onClick="javascript: textBoxClearSelecao('#idqtd3quais', '#qtd3quais');" <? if(in_array("154", $meuArray)){ echo "checked";}?> value="154" 
            class="validate[required] radio" />            
            De 21 até 30 dias ( cerca de um mês)</label>
            
            <label><input type="radio" name="qtd3" onClick="javascript: textBoxClearSelecao('#idqtd3quais', '#qtd3quais');" <? if(in_array("155", $meuArray)){ echo "checked";}?> value="155"
            class="validate[required] radio" />            
            De 31 até 60 dias ( cerca de dois meses)</label>
            
            <label><input type="radio" name="qtd3" onClick="javascript: textBoxClearSelecao('#idqtd3quais', '#qtd3quais');" <? if(in_array("156", $meuArray)){ echo "checked";}?> value="156"
            class="validate[required] radio" />            
            De 61 até 90 dias ( cerca de três meses)</label>
            
            <label><input type="radio" name="qtd3" onClick="javascript: textBoxClearSelecao('#idqtd3quais', '#qtd3quais');" <? if(in_array("157", $meuArray)){ echo "checked";}?> value="157"
            class="validate[required] radio" />            
            De 91 até 180 dias ( cerca de seis meses)</label>
            
            <label><input type="radio" name="qtd3" onClick="javascript: textBoxClearSelecao('#idqtd3quais', '#qtd3quais');" <? if(in_array("158", $meuArray)){ echo "checked";}?> value="158"
            class="validate[required] radio" />            
            De 181 até 365 dias ( cerca de um ano)</label>
            
            <label><input type="radio" name="qtd3" onClick="javascript: textBoxClearSelecao('#idqtd3quais', '#qtd3quais');" <? if(in_array("159", $meuArray)){ echo "checked";}?> value="159"
            class="validate[required] radio" />            
             De 1 ano até 2 anos</label>
            
            <label><input type="radio" name="qtd3" id="idqtd3quais" <? if(in_array("160", $meuArray)){ echo "checked";}?> value="160"
            class="validate[required] radio" />            
            Acima de 2 anos Qual período?
            <input name="qtd3quais" id="qtd3quais" class="validate[optional,minSize[2]]" value="<?php echo $meuArray1['161'];?>" type="text" /> </label>
            
	  </div>
      </td>
      </tr>
      <tr >
      <td>
      <div>
      <label>Em relação à nacionalidade dos artistas contemplados(marque apenas 1 item)*?</label>
      
      <label><input type="radio" name="qtd4" <? if(in_array("162", $meuArray)){ echo "checked";}?> value="162"
      class="validate[required] radio" />      
      Apenas brasileiros</label>
      
      <label><input type="radio" name="qtd4" <? if(in_array("163", $meuArray)){ echo "checked";}?> value="163"
      class="validate[required] radio" />      
        Apenas estrangeiros</label>
      
      <label><input type="radio" name="qtd4" <? if(in_array("164", $meuArray)){ echo "checked";}?> value="164"
      class="validate[required] radio" />      
        Ambos</label>
    
    </div>
        </td>
      </tr>
      <tr>
        <td>
             <div>
        <label>Existe a possibilidade de intercâmbio entre artistas brasileiros e 
        internacionais nos programas de residências artísticas(marque apenas 1 item)*?</label>
    
          <label><input type="radio" name="qtd5" <? if(in_array("165", $meuArray)){ echo "checked";}?> value="165"
	      class="validate[required] radio" />          
          Sim</label>
          
          <label><input type="radio" name="qtd5" <? if(in_array("166", $meuArray)){ echo "checked";}?> value="166"
	      class="validate[required] radio" />                    
          Não</label>
          
        </div>   
        </td>
      </tr>
      <tr >
        <td>
     <div>
        <label>Quanto à presença de artistas estrangeiros no Brasil e/ou
         artistas brasileiros no exterior que podem ser contemplados pelos programas(marque apenas 1 item)*</label>
        
         <label><input type="radio" name="qtd6" <? if(in_array("167", $meuArray)){ echo "checked";}?> value="167"
   	      class="validate[required] radio" />          
          Não há residências em nível internacional</label>
          
          <label><input type="radio" name="qtd6" <? if(in_array("168", $meuArray)){ echo "checked";}?> value="168"
   	      class="validate[required] radio" />                      
          O artista estrangeiro pode ser contemplado para vir fazer residência no Brasil</label>
          
          <label><input type="radio" name="qtd6" <? if(in_array("169", $meuArray)){ echo "checked";}?> value="169"
   	      class="validate[required] radio" />                      
          O artista brasileiro pode ser contemplado para fazer residência no exterior</label>
          
          <label><input type="radio" name="qtd6" <? if(in_array("170", $meuArray)){ echo "checked";}?> value="170"
   	      class="validate[required] radio" />                      
          O artista brasileiro pode fazer residência no exterior e o artista estrangeiro fazer residência no Brasil</label>
          
        </div>   
        </td>
      </tr>
      <tr>
        <td>
        <div>
        <label>•Os artistas podem ser provenientes de que países/continentes/ blocos internacionais? 
        (marque quantos itens julgar necessário):</label>
        
	  	  <label><input name="qtd7[]" type="checkbox" value="171" <? if(in_array("171", $meuArray)){ echo "checked";}?>/>	
          América do Sul</label>
          
	  	  <label><input name="qtd7[]" type="checkbox" value="172" <? if(in_array("172", $meuArray)){ echo "checked";}?>/>	
          América Central</label>
          
	  	  <label><input name="qtd7[]" type="checkbox" value="173" <? if(in_array("173", $meuArray)){ echo "checked";}?>/>	 
          América do Norte</label>
          
	  	  <label><input name="qtd7[]" type="checkbox" value="174" <? if(in_array("174", $meuArray)){ echo "checked";}?>/>	
          Europa</label>
          
	  	  <label><input name="qtd7[]" type="checkbox" value="175" <? if(in_array("175", $meuArray)){ echo "checked";}?>/>	
          Ásia</label>
          
	  	  <label><input name="qtd7[]" type="checkbox" value="176" <? if(in_array("176", $meuArray)){ echo "checked";}?>/>	
          África</label>
          
	  	  <label><input name="qtd7[]" type="checkbox" value="177" <? if(in_array("177", $meuArray)){ echo "checked";}?>/>	 
          Oceania</label>
          
	  	  <label><input name="qtd7[]" type="checkbox" value="178" <? if(in_array("178", $meuArray)){ echo "checked";}?>/>	
          Países Ibero-Americanos</label>
          
	  	  <label><input name="qtd7[]" type="checkbox" value="179" <? if(in_array("179", $meuArray)){ echo "checked";}?>/>	 
          Países da União Europeia</label>
          
	  	  <label><input name="qtd7[]" type="checkbox" value="180" <? if(in_array("180", $meuArray)){ echo "checked";}?>/>	
          Países do MERCOSUL- Argentina, Uruguai, e Paraguai</label>
          
	  	  <label><input name="qtd7[]" type="checkbox" value="181" <? if(in_array("181", $meuArray)){ echo "checked";}?>/>	
          Em nível mundial, englobando todos os continentes</label>
          
	  	  <label><input name="qtd7[]" type="checkbox" value="182" <? if(in_array("182", $meuArray)){ echo "checked";}?>/>	
          Em acordo bilateral, no caso de apenas um outro país.
          Qual?
          
          <input name="qtd7quais" id="qtd7quais" class="validate[optional,minSize[2]]" value="<?php echo $meuArray1['183'];?>" type="text" />
        
          </div>
       </td>
      </tr>
      <tr >
        <td>
       <div align="center">
           <button type="submit" name="atualizar" value="atualizar"  class="btn btn-info"><i class="icon-refresh icon-white"></i> atualizar</button>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <button type="submit" name="avancar" value="avancar"  class="btn btn-success" onkeypress="return handleEnter(this, event);"><i class="icon-arrow-right icon-white"></i> avancar</button>
        </div>
      </tr>
        <br/>
    </table>
          <div class="progress progress-danger">
          <div class="bar" style="width: 76%;">76% concluído</div>
        </div>
</form>
</body>
</html>