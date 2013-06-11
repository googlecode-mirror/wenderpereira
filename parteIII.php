
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
   	   $sql = "select * from pesquisa Where usuario= '$Login' and parte ='3';";
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
  <?
    function getArray1(&$Login){
    $sql = "select * from pesquisaquais Where usuario= '$Login' and parte ='3';";
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
          <h4><i class="icon-plus-sign"></i> PARTE III</h4>
          
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
             O número de artistas apoiados pode variar por programa.</p>
            <h5>Os campos  com asterisco* são de preenchimento obrigatório:</h5>
        </td>
      </tr>
      <tr>
        <td>
      <div>
       <label>Quantos artistas foram apoiados em média ao ano?</label>
         
          <label><input type="radio" name="qtd1" <? if(in_array("1a", $meuArray)){ echo "checked";}?> value="1a" class="radio" />
          até 5 artistas</label>
          
          <label><input type="radio" name="qtd1" <? if(in_array("1b", $meuArray)){ echo "checked";}?> value="1b" class="radio" />
          acima de 5  até 10</label>
          
          <label><input type="radio" name="qtd1" <? if(in_array("1c", $meuArray)){ echo "checked";}?> value="1c" class="radio" />
          acima de 11  até 20</label>
          
          <label><input type="radio" name="qtd1" <? if(in_array("1d", $meuArray)){ echo "checked";}?> value="1d" class="radio" />
          acima de 21  até 30 </label>
          
          <label><input type="radio" name="qtd1" <? if(in_array("1e", $meuArray)){ echo "checked";}?> value="1e" class="radio" />
          acima de 31 até 50</label>
          
          <label><input type="radio" name="qtd1" <? if(in_array("1f", $meuArray)){ echo "checked";}?> value="1f" class="radio" />
          acima de 51 até 80</label>
          
          <label> <input type="radio" name="qtd1" <? if(in_array("1g", $meuArray)){ echo "checked";}?> value="1g" class="radio" />
          acima de 81 até 120 </label>
          
          <label><input type="radio" name="qtd1" <? if(in_array("1h", $meuArray)){ echo "checked";}?> value="1h" class="radio" />
          acima de 120 artistas</label>
        
      </div>
      </td>
      </tr>
      <tr >
      <td>
      <div>
        <label>O número de artistas apoiados foi o mesmo em todas os programas( marque apenas 1 item)?</label>

          <label><input type="radio" name="qtd2" <? if(in_array("2a", $meuArray)){ echo "checked";}?> value="2a" class="radio" />
          Sim</label>
          
          <label><input type="radio" name="qtd2" <? if(in_array("2b", $meuArray)){ echo "checked";}?> value="2b" class="radio" />
          Não, foi aumentando com o tempo</label>
          
          <label><input type="radio" name="qtd2" <? if(in_array("2c", $meuArray)){ echo "checked";}?> value="2c" class="radio" />
          Não, foi diminuindo com o tempo</label>
          
          <label><input type="radio" name="qtd2" <? if(in_array("2d", $meuArray)){ echo "checked";}?> value="2d" class="radio" />
          Não, tiveram anos com um número maior e outros com um número menor de montantes concedidos</label>
          
        </div>
        </td>
      </tr>
      <tr>
        <td>
        <div>
        <label>Qual o período de duração da residência (marque apenas 1 item)* ?</label>
        
            <label><input type="radio" name="qtd3" onClick="javascript: textBoxClearSelecao('#idqtd3quais', '#qtd3quais');" <? if(in_array("3a", $meuArray)){ echo "checked";}?> value="3a" 
            class="validate[required] radio" />
            até 20 dias</label>
            
            <label><input type="radio" name="qtd3" onClick="javascript: textBoxClearSelecao('#idqtd3quais', '#qtd3quais');" <? if(in_array("3b", $meuArray)){ echo "checked";}?> value="3b" 
            class="validate[required] radio" />            
            de 21 até 30 dias ( cerca de um mês)</label>
            
            <label><input type="radio" name="qtd3" onClick="javascript: textBoxClearSelecao('#idqtd3quais', '#qtd3quais');" <? if(in_array("3c", $meuArray)){ echo "checked";}?> value="3c"
            class="validate[required] radio" />            
            de 31 até 60 dias ( cerca de dois meses)</label>
            
            <label><input type="radio" name="qtd3" onClick="javascript: textBoxClearSelecao('#idqtd3quais', '#qtd3quais');" <? if(in_array("3d", $meuArray)){ echo "checked";}?> value="3d"
            class="validate[required] radio" />            
            de 61 até 90 dias ( cerca de três meses)</label>
            
            <label><input type="radio" name="qtd3" onClick="javascript: textBoxClearSelecao('#idqtd3quais', '#qtd3quais');" <? if(in_array("3e", $meuArray)){ echo "checked";}?> value="3e"
            class="validate[required] radio" />            
            de 91 até 180 dias ( cerca de seis meses)</label>
            
            <label><input type="radio" name="qtd3" onClick="javascript: textBoxClearSelecao('#idqtd3quais', '#qtd3quais');" <? if(in_array("3f", $meuArray)){ echo "checked";}?> value="3f"
            class="validate[required] radio" />            
            de 181 até 365 dias ( cerca de um ano)</label>
            
            <label><input type="radio" name="qtd3" onClick="javascript: textBoxClearSelecao('#idqtd3quais', '#qtd3quais');" <? if(in_array("3g", $meuArray)){ echo "checked";}?> value="3g"
            class="validate[required] radio" />            
             de 1 ano até 2 anos</label>
            
            <label><input type="radio" name="qtd3" id="idqtd3quais" <? if(in_array("3h", $meuArray)){ echo "checked";}?> value="3h"
            class="validate[required] radio" />            
            acima de 2 anos Qual período?
            <input name="qtd3quais" id="qtd3quais" class="validate[optional,minSize[2]]" value="<?php echo $meuArray1['qtd3'];?>" type="text" /> </label>
            
	  </div>
      </td>
      </tr>
      <tr >
      <td>
      <div>
      <label>Em relação à nacionalidade dos artistas contemplados(marque apenas 1 item)?*</label>
      
      <label><input type="radio" name="qtd4" <? if(in_array("4a", $meuArray)){ echo "checked";}?> value="4a"
      class="validate[required] radio" />      
      apenas brasileiros</label>
      
      <label><input type="radio" name="qtd4" <? if(in_array("4b", $meuArray)){ echo "checked";}?> value="4b"
      class="validate[required] radio" />      
        apenas estrangeiros</label>
      
      <label><input type="radio" name="qtd4" <? if(in_array("4c", $meuArray)){ echo "checked";}?> value="4c"
      class="validate[required] radio" />      
        ambos</label>
    
    </div>
        </td>
      </tr>
      <tr>
        <td>
             <div>
        <label>Existe a possibilidade de intercâmbio entre artistas brasileiros e 
        internacionais nos programas de residências artísticas(marque apenas 1 item)?*</label>
    
          <label><input type="radio" name="qtd5" <? if(in_array("5a", $meuArray)){ echo "checked";}?> value="5a"
	      class="validate[required] radio" />          
          Sim</label>
          
          <label><input type="radio" name="qtd5" <? if(in_array("5b", $meuArray)){ echo "checked";}?> value="5b"
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
        
         <label><input type="radio" name="qtd6" <? if(in_array("6a", $meuArray)){ echo "checked";}?> value="6a"
   	      class="validate[required] radio" />          
          não há residências em nível internacional</label>
          
          <label><input type="radio" name="qtd6" <? if(in_array("6b", $meuArray)){ echo "checked";}?> value="6b"
   	      class="validate[required] radio" />                      
          o artista estrangeiro pode ser contemplado para vir fazer residência no Brasil</label>
          
          <label><input type="radio" name="qtd6" <? if(in_array("6c", $meuArray)){ echo "checked";}?> value="6c"
   	      class="validate[required] radio" />                      
          o artista brasileiro pode ser contemplado para fazer residência no exterior</label>
          
          <label><input type="radio" name="qtd6" <? if(in_array("6d", $meuArray)){ echo "checked";}?> value="6d"
   	      class="validate[required] radio" />                      
          o artista brasileiro pode fazer residência no exterior e o artista estrangeiro fazer residência no Brasil</label>
          
        </div>   
        </td>
      </tr>
      <tr>
        <td>
        <div>
        <label>•Os artistas podem ser provenientes de que países/continentes/ blocos internacionais? 
        (marque quantos itens julgar necessário):</label>
        
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
          países Ibero-Americanos</label>
          
	  	  <label><input name="qtd7[]" type="checkbox" value="7i" <? if(in_array("7i", $meuArray)){ echo "checked";}?>/>	 
          países da União Europeia</label>
          
	  	  <label><input name="qtd7[]" type="checkbox" value="7j" <? if(in_array("7j", $meuArray)){ echo "checked";}?>/>	
          países do MERCOSUL- Argentina, Uruguai, e Paraguai</label>
          
	  	  <label><input name="qtd7[]" type="checkbox" value="7k" <? if(in_array("7k", $meuArray)){ echo "checked";}?>/>	
          em nível mundial, englobando todos os continentes</label>
          
	  	  <label><input name="qtd7[]" type="checkbox" value="7l" <? if(in_array("7l", $meuArray)){ echo "checked";}?>/>	
          em acordo bilateral, no caso de apenas um outro país.
          Qual?
          
          <input name="qtd7quais" id="qtd7quais" class="validate[optional,minSize[2]]" value="<?php echo $meuArray1['qtd7'];?>" type="text" />
        
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
          <div class="bar" style="width: 76%;">76%concluido</div>
        </div>
</form>

</body>
</html>