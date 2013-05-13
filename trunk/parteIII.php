<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Furnarte</title>

   <? 
      session_start();
      include "conexao.php";
      connect();
	  $Login 	=  trim($_SESSION["login"]);
   ?>
   <?  function getArray(&$Login){
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
<!--<script src="js/jsValidate.js" type="text/javascript"></script>
<script src="js/jquery-1.6.2.js" type="text/javascript"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>
<script src="js/jsvalidarParteIII.js" type="text/javascript"></script>
        
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
<body>

<form id="form1" name="form1" method="post" action="sql\parteIII.php">

<table width="80%" align="center" cellpadding="2" cellspacing="2" style="border:solid 1px #333333; font-family: Verdana, Geneva, sans-serif;">
      <tr bgcolor="#C7C7C7">
        <td>
                <div align="center"><strong><em>PARTE III</em></strong>
                        </p>
                            <strong></strong></div>
          <strong><p align="center">SOBRE  OS ARTISTAS RESIDENTES</p></strong>               

		</td>
    </tr>
      <tr bgcolor="#C7C7C7">
        <td>
        <div>
        <p>
        <b>
    Os artistas apoiados por programas de residências artísticas podem ser oriundos de diversos países, havendo a possibilidade do artista vir fazer a residência no Brasil, bem como, um artista brasileiro realizar a residência no exterior. Os programas de residências podem não ter um intercâmbio internacional, sendo realizado apenas por artistas brasileiros. Em média, os programas concedem prêmios, bolsas ou outras formas de apoio a um número determinado de artistas para realizarem a residência em um período de tempo pré-estabelecido. O número de artistas apoiados pode variar por programa.</b></p>
        <br/>
    <div>
        </td>
      </tr>
      <tr bgcolor="#D2D2D2">
        <td bgcolor="#D2D2D2">
      <div>
       <label>Quantos artistas foram apoiados em média ao ano?</label>
         <p>
          <label>
          <input type="radio" name="qtd1" <? if(in_array("1a", $meuArray)){ echo "checked";}?> value="1a" class="radio" />
          até 5 artistas</label>
          <br />
          <label>
          <input type="radio" name="qtd1" <? if(in_array("1b", $meuArray)){ echo "checked";}?> value="1b" class="radio" />
          acima de 5  até 10</label>
          <br />
          <label>
		  <input type="radio" name="qtd1" <? if(in_array("1c", $meuArray)){ echo "checked";}?> value="1c" class="radio" />
          acima de 11  até 20</label>
          <br />
          <label>
		  <input type="radio" name="qtd1" <? if(in_array("1d", $meuArray)){ echo "checked";}?> value="1d" class="radio" />
          acima de 21  até 30 </label>
          <br />
          <label>
		  <input type="radio" name="qtd1" <? if(in_array("1e", $meuArray)){ echo "checked";}?> value="1e" class="radio" />
          acima de 31 até 50</label>
          <br />
          <label>
          <input type="radio" name="qtd1" <? if(in_array("1f", $meuArray)){ echo "checked";}?> value="1f" class="radio" />
          acima de 51 até 80</label>
          <br />  <label>
		  <input type="radio" name="qtd1" <? if(in_array("1g", $meuArray)){ echo "checked";}?> value="1g" class="radio" />
          acima de 81 até 120 </label>
          <br />  <label>
          <input type="radio" name="qtd1" <? if(in_array("1h", $meuArray)){ echo "checked";}?> value="1h" class="radio" />
          acima de 120 artistas</label>
        </p>
      </div>
      </td>
      </tr>
      <tr bgcolor="#C7C7C7">
      <td>
      <div>
        <label>O número de artistas apoiados foi o mesmo em todas os programas( marque apenas 1 item)?</label>
          <br/>
          <p>
          <label>
          <input type="radio" name="qtd2" <? if(in_array("2a", $meuArray)){ echo "checked";}?> value="2a" class="radio" />
          Sim</label>
          <br />
          <label>
          <input type="radio" name="qtd2" <? if(in_array("2b", $meuArray)){ echo "checked";}?> value="2b" class="radio" />
          Não, foi aumentando com o tempo</label>
          <br />
          <label>
          <input type="radio" name="qtd2" <? if(in_array("2c", $meuArray)){ echo "checked";}?> value="2c" class="radio" />
          Não, foi diminuindo com o tempo</label>
          <br />
          <label>
          <input type="radio" name="qtd2" <? if(in_array("2d", $meuArray)){ echo "checked";}?> value="2d" class="radio" />
          Não, tiveram anos com um número maior e outros com um número menor de montantes concedidos</label>
          <br />
        </p>
        </div>
        </td>
      </tr>
      <tr bgcolor="#D2D2D2">
        <td>
        <div>
        <label>Qual o período de duração da residência (marque apenas 1 item)* ?</label>
          <p>
            <label>
            <input type="radio" name="qtd3" <? if(in_array("3a", $meuArray)){ echo "checked";}?> value="3a" 
            class="validate[required] radio" />
            até 20 dias</label>
            <br />
            <label>
            <input type="radio" name="qtd3" <? if(in_array("3b", $meuArray)){ echo "checked";}?> value="3b" 
            class="validate[required] radio" />            
            de 21 até 30 dias ( cerca de um mês)</label>
            <br />
            <label>
            <input type="radio" name="qtd3" <? if(in_array("3c", $meuArray)){ echo "checked";}?> value="3c"
            class="validate[required] radio" />            
            de 31 até 60 dias ( cerca de dois meses)</label>
            <br />
            <label>
            <input type="radio" name="qtd3" <? if(in_array("3d", $meuArray)){ echo "checked";}?> value="3d"
            class="validate[required] radio" />            
            de 61 até 90 dias ( cerca de três meses)</label>
            <br />
            <label>
            <input type="radio" name="qtd3" <? if(in_array("3e", $meuArray)){ echo "checked";}?> value="3e"
            class="validate[required] radio" />            
            de 91 até 180 dias ( cerca de seis meses)</label>
            <br />
            <label>
            <input type="radio" name="qtd3" <? if(in_array("3f", $meuArray)){ echo "checked";}?> value="3f"
            class="validate[required] radio" />            
            de 181 até 365 dias ( cerca de um ano)</label>
            <br />
            <label>
            <input type="radio" name="qtd3" <? if(in_array("3g", $meuArray)){ echo "checked";}?> value="3g"
            class="validate[required] radio" />            
             de 1 ano até 2 anos</label>
            <br />
            <label>
            <input type="radio" name="qtd3" <? if(in_array("3h", $meuArray)){ echo "checked";}?> value="3h"
            class="validate[required] radio" />            
            acima de 2 anos</label>
            <br/>
            <label> Qual período?</label>
            <input name="qtd3quais" value="<?php echo $_POST[qtd3quais];?>" type="text" />
            <br />
		</p>
	  </div>
      </td>
      </tr>
      <tr bgcolor="#C7C7C7">
      <td>
      <div>
      <label>Em relação à nacionalidade dos artistas contemplados(marque apenas 1 item)?*</label>
      <p>
      <label>
      <input type="radio" name="qtd4" <? if(in_array("4a", $meuArray)){ echo "checked";}?> value="4a"
      class="validate[required] radio" />      
      apenas brasileiros</label>
      <br />
      <label>
      <input type="radio" name="qtd4" <? if(in_array("4b", $meuArray)){ echo "checked";}?> value="4b"
      class="validate[required] radio" />      
        apenas estrangeiros</label>
      <br />
      <label>
      <input type="radio" name="qtd4" <? if(in_array("4c", $meuArray)){ echo "checked";}?> value="4c"
      class="validate[required] radio" />      
        ambos</label>
      <br />
    </p>
    </div>
        </td>
      </tr>
      <tr bgcolor="#D2D2D2">
        <td>
             <div>
        <label>Existe a possibilidade de intercâmbio entre artistas brasileiros e 
        internacionais nos programas de residências artísticas(marque apenas 1 item)?*</label>
        <p>
          <label>
	      <input type="radio" name="qtd5" <? if(in_array("5a", $meuArray)){ echo "checked";}?> value="5a"
	      class="validate[required] radio" />          
           Sim</label>
          <br />
          <label>
          <input type="radio" name="qtd5" <? if(in_array("5b", $meuArray)){ echo "checked";}?> value="5b"
	      class="validate[required] radio" />                    
            Não</label>
          <br />
        </p>
        </div>   
        
        </td>
      </tr>
      <tr bgcolor="#C7C7C7">
        <td>
     <div>
        <label>Quanto à presença de artistas estrangeiros no Brasil e/ou
         artistas brasileiros no exterior que podem ser contemplados pelos programas(marque apenas 1 item)*</label>
        <p>
          <label>
            <input type="radio" name="qtd6" <? if(in_array("6a", $meuArray)){ echo "checked";}?> value="6a"
   	      class="validate[required] radio" />          
            não há  residências em nível internacional</label>
          <br />
          <label>
            <input type="radio" name="qtd6" <? if(in_array("6b", $meuArray)){ echo "checked";}?> value="6b"
   	      class="validate[required] radio" />                      
            o artista estrangeiro pode ser contemplado para vir fazer residência no Brasil</label>
          <br />
          <label>
            <input type="radio" name="qtd6" <? if(in_array("6c", $meuArray)){ echo "checked";}?> value="6c"
   	      class="validate[required] radio" />                      
            o artista brasileiro pode ser contemplado para fazer residência no exterior</label>
          <br />
          <label>
            <input type="radio" name="qtd6" <? if(in_array("6d", $meuArray)){ echo "checked";}?> value="6d"
   	      class="validate[required] radio" />                      
            o artista brasileiro pode fazer residência no exterior e o artista estrangeiro fazer residência no Brasil</label>
          <br />
         </p>
        </div>   
        </td>
      </tr>
      <tr bgcolor="#D2D2D2">
        <td>
        <div>
        <label>•Os artistas podem ser provenientes de que países/continentes/ blocos internacionais? 
        (marque quantos itens julgar necessário):*</label>
        <p>
	  	  <input name="qtd7[]" type="checkbox" value="7a" <? if(in_array("7a", $meuArray)){ echo "checked";}?>
          class="validate[minCheckbox[1]] checkbox"/> 
          <label>América do Sul</label>
          <br/>
	  	  <input name="qtd7[]" type="checkbox" value="7b" <? if(in_array("7b", $meuArray)){ echo "checked";}?>
          class="validate[minCheckbox[1]] checkbox"/> 
          <label>América Central</label>
          <br/> 
	  	  <input name="qtd7[]" type="checkbox" value="7c" <? if(in_array("7c", $meuArray)){ echo "checked";}?>
          class="validate[minCheckbox[1]] checkbox"/> 
          <label>América do Norte</label>
          <br/>
	  	  <input name="qtd7[]" type="checkbox" value="7d" <? if(in_array("7d", $meuArray)){ echo "checked";}?>
          class="validate[minCheckbox[1]] checkbox"/> 
          <label>Europa</label>
          <br/>
	  	  <input name="qtd7[]" type="checkbox" value="7e" <? if(in_array("7e", $meuArray)){ echo "checked";}?>
          class="validate[minCheckbox[1]] checkbox"/> 
          <label>Ásia</label>
          <br/>
	  	  <input name="qtd7[]" type="checkbox" value="7f" <? if(in_array("7f", $meuArray)){ echo "checked";}?>
          class="validate[minCheckbox[1]] checkbox"/> 
          <label>África</label>
          <br/>
	  	  <input name="qtd7[]" type="checkbox" value="7g" <? if(in_array("7g", $meuArray)){ echo "checked";}?>
          class="validate[minCheckbox[1]] checkbox"/> 
          <label>Oceania</label>
          <br/>
	  	  <input name="qtd7[]" type="checkbox" value="7h" <? if(in_array("7h", $meuArray)){ echo "checked";}?>
          class="validate[minCheckbox[1]] checkbox"/> 
          <label>países Ibero-Americanos</label>
          <br/>
	  	  <input name="qtd7[]" type="checkbox" value="7i" <? if(in_array("7i", $meuArray)){ echo "checked";}?>
          class="validate[minCheckbox[1]] checkbox"/> 
          <label>países da União Europeia</label>
          <br/>
	  	  <input name="qtd7[]" type="checkbox" value="7j" <? if(in_array("7j", $meuArray)){ echo "checked";}?>
          class="validate[minCheckbox[1]] checkbox"/> 
          <label>países do MERCOSUL- Argentina, Uruguai, e Paraguai</label>
          <br/>
	  	  <input name="qtd7[]" type="checkbox" value="7k" <? if(in_array("7k", $meuArray)){ echo "checked";}?>
          class="validate[minCheckbox[1]] checkbox"/> 
          <label>em nível mundial, englobando todos os continentes</label>
          <br/>       
	  	  <input name="qtd7[]" type="checkbox" value="7l" <? if(in_array("7l", $meuArray)){ echo "checked";}?>
          class="validate[minCheckbox[1]] checkbox"/> 
          <label>em acordo bilateral, no caso de apenas um outro país</label>
          <br/>        
   	  	  <input name="qtd7[]" type="checkbox" value="7m" <? if(in_array("7m", $meuArray)){ echo "checked";}?>
          class="validate[minCheckbox[1]] checkbox"/> 
          <label>Qual?</label>
          <input name="qtd7quais" value="<?php echo $_POST[qtd7quais];?>" type="text" />
          </p>
          </div>
       </td>
      </tr>
      <tr bgcolor="#C7C7C7">
        <td>
          <div align="center">
        <input type="submit" name="avancar" value="avancar" class="botao" onkeypress="return handleEnter(this, event);" /> 
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="submit" name="atualizar" value="atualizar" class="botao"/>    
          </div></td>
      </tr>
        <br/>
    <tr bgcolor="#D2D2D2">
      <td align="center" class="formu2">&nbsp;</td>
    </tr>
  </table>

</form>

</body>
</html>