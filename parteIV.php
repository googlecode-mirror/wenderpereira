
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
	  $_POST[qtdComentariosGerais] = $qtdComentariosGerais;
	  
	  	$sql = "select * from pesquisaquais Where usuario= '$Login' and parte ='4';";
		$Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
  		 while ($array_exibir = mysql_fetch_array($Resultado)) {
			$qtdComentariosGerais = ($array_exibir['respostas']);
		}
   ?>
   <?  function getArray(&$Login){
   	   $sql = "select * from pesquisa Where usuario= '$Login' and parte ='4';";
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
    $sql = "select * from pesquisaquais Where usuario= '$Login' and parte ='4';";
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
<form id="form1" name="form1" method="post" action="sql/parteIV.php">
    <table width="98%" class="table table-hover" align="center" cellpadding="2" cellspacing="2" style="font-family: Verdana, Geneva, sans-serif;">
      <tr>
        <td>
      	 <h4><i class="icon-plus-sign"></i> PARTE IV</h4>
      	   <h5>SOBRE OS PROJETOS DE RESIDÊNCIAS ARTÍSTICAS</h5>
           <div>
      	   <p>Os artistas contemplados podem realizar diversas ações durante a residência, em diversas linguagens. 
           Estas ações podem ser realizadas em inúmeros locais como praças, teatros, museus, etc. Indiretamente, 
           as ações em residência podem envolver diversos públicos: outros artistas, cidadãos locais, pesquisadores,
           etc. Ao término da residência o artista pode ter elaborado uma série de produtos: filmes, pinturas, 
           publicações, livros, etc. </p>
           <h5>Os campos  com asterisco* são de preenchimento obrigatório:</h5>
           </div>
        </td>
      </tr>
      <tr>
        <td>
        <label>Quais as principais ações realizadas pelos artistas durante a residência </label>
        (marque quantos itens julgar necessário)*:
        
      <label><input name="qtd1[]" type="checkbox" value="1a" <? if(in_array("1a", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>      
      pesquisa</label>
    
      <label><input name="qtd1[]" type="checkbox" value="1b" <? if(in_array("1b", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>      
      intervenção urbana</label>
    
      <label><input name="qtd1[]" type="checkbox" value="1c" <? if(in_array("1c", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>      
      cursos</label>
    
      <label><input name="qtd1[]" type="checkbox" value="1d" <? if(in_array("1d", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>      
      feiras</label>
    
      <label><input name="qtd1[]" type="checkbox" value="1e" <? if(in_array("1e", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>      
      festivais/mostras</label>
    
      <label><input name="qtd1[]" type="checkbox" value="1f" <? if(in_array("1f", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>      
      exposições</label>
    
      <label><input name="qtd1[]" type="checkbox" value="1g" <? if(in_array("1g", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>      
      apresentações artísticas ( bandas de música, circo, etc.)</label>
    
      <label><input name="qtd1[]" onClick="javascript: textBoxClearSelecao('#idqtd1quais', '#qtd1quais');" type="checkbox" value="1h" id="idqtd1quais" <? if(in_array("1h", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>      
      outros Quais?
      <input name="qtd1quais" id="qtd1quais" value="<?php echo $meuArray1['qtd1'];?>" class="validate[condRequired[idqtd1quais]]" onclick="MarcarCheckBoxClique('#idqtd1quais')" type="text" /></label>
  
      </td>
      </tr>
      <tr>
      <td><div>
          <label>Quais as linguagens envolvidas nas diferentes ações desenvolvidas em residências artísticas?
          (marque quantos itens julgar necessário)*: </label>
      
            <label>
            <input name="qtd2[]" type="checkbox" value="2a" <? if(in_array("2a", $meuArray)){ echo "checked";}?>
             class="validate[minCheckbox[1]] checkbox"/>
             artesanato</label>
      
            <label><input name="qtd2[]" type="checkbox" value="2b" <? if(in_array("2b", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            teatro</label>
            
            <label>
            <input name="qtd2[]" type="checkbox" value="2c" <? if(in_array("2c", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            dança</label>
            
            <label>
            <input name="qtd2[]" type="checkbox" value="2d" <? if(in_array("2d", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            circo</label>
            
            <label><input name="qtd2[]" type="checkbox" value="2e" <? if(in_array("2e", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            bandas de música</label>
            
            <label>
            <input name="qtd2[]" type="checkbox" value="2f" <? if(in_array("2f", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            música Erudita</label>
            
            <label>
            <input name="qtd2[]" type="checkbox" value="2g" <? if(in_array("2g", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            música Popular</label>
            
            <label><input name="qtd2[]" type="checkbox" value="2h" <? if(in_array("2h", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            artes visuais</label>
            
            <label><input name="qtd2[]" type="checkbox" value="2i" <? if(in_array("2i", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            fotografia</label>
            
            <label><input name="qtd2[]" type="checkbox" value="2j" <? if(in_array("2j", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            audiovisual</label>
            
            <label><input name="qtd2[]" type="checkbox" value="2k" <? if(in_array("2k", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            jogos eletrônicos</label>
            
            <label><input name="qtd2[]" type="checkbox" value="2l" <? if(in_array("2l", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            literatura</label>
            
            <label>
            <input name="qtd2[]" type="checkbox" value="2m" <? if(in_array("2m", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            patrimônio material</label>
            
            <label><input name="qtd2[]" type="checkbox" value="2n" <? if(in_array("2n", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            patrimônio imaterial</label>
            
            <label><input name="qtd2[]" type="checkbox" value="2o" <? if(in_array("2o", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            museus</label>
            
            <label><input name="qtd2[]" type="checkbox" value="2p" <? if(in_array("2p", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            cultura popular/ manifestações tradicionais</label>
            
            <label><input name="qtd2[]" type="checkbox" value="2q" <? if(in_array("2q", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            cultura digital/ arte e tecnologia ( programação de linguagens digitais)</label>
            
            <label><input name="qtd2[]" type="checkbox" value="2r" <? if(in_array("2r", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            design</label>
            
            <label>
            <input name="qtd2[]" type="checkbox" value="2s" <? if(in_array("2s", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            moda</label>
            
            <label><input name="qtd2[]" type="checkbox" value="2t" <? if(in_array("2t", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            artes integradas ( projetos com múltiplas linguagens artísticas)</label>
            
            <label><input name="qtd2[]" type="checkbox" id="idqtd2quais" onClick="javascript: textBoxClearSelecao('#idqtd2quais', '#qtd2quais');" value="2u" <? if(in_array("2u", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>
              outras Quais?
            <input name="qtd2quais" id="qtd2quais" value="<?php echo $meuArray1['qtd2'];?>" class="validate[condRequired[idqtd2quais]]" onclick="MarcarCheckBoxClique('#idqtd2quais')" type="text" /></label>
          
        </div></td>
      </tr>
            <tr>
        <td><div>
          <label>Qual o principal público a ser atingido pelas ações*? (marque no máximo os 3 itens mais importantes):</label>
          
            <label>
            <input type="checkbox" name="qtd3[]" value="3a" <? if(in_array("3a", $meuArray)){ echo "checked";}?>
            class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>
            cidadãos locais</label>
          
            <label>
            <input type="checkbox" name="qtd3[]" value="3b" <? if(in_array("3b", $meuArray)){ echo "checked";}?>
            class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>
            artistas</label>
            
            <label>
            <input type="checkbox" name="qtd3[]" value="3c" <? if(in_array("3c", $meuArray)){ echo "checked";}?>
              class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>              
              produtores culturais</label>
            
            <label>
              <input type="checkbox" name="qtd3[]" value="3d" <? if(in_array("3d", $meuArray)){ echo "checked";}?>
              class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>              
              estudantes</label>
            
            <label>
              <input type="checkbox" name="qtd3[]" value="3e" <? if(in_array("3e", $meuArray)){ echo "checked";}?>
              class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>              
              pesquisadores</label>
            
            <label>
              <input type="checkbox" name="qtd3[]" value="3f" id="idqtd3quais" onClick="javascript: textBoxClearSelecao('#idqtd3quais', '#qtd3quais');" <? if(in_array("3f", $meuArray)){ echo "checked";}?>
              class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>              
              outros Quais
            <input name="qtd3quais" id="qtd3quais" value="<?php echo $meuArray1['qtd3'];?>" onclick="MarcarCheckBoxClique('#idqtd3quais')" type="text" /></label>
                    
        </div></td>
      </tr>
            <tr>
        <td><div>
          <label>Onde as ações são realizadas*? (marque quantos itens julgar necessário)</label>
        </div>
          
            <label>
            <input type="checkbox" name="qtd4[]" value="4a" <? if(in_array("4a", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>              
            na sede da instituição organizadora do programa</label>
            
            <label>
              <input type="checkbox" name="qtd4[]" value="4b" <? if(in_array("4b", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              teatros</label>
            
            <label>
              <input type="checkbox" name="qtd4[]" value="4c" <? if(in_array("4c", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              centros culturais/ espaços multiuso</label>
            
            <label>
              <input type="checkbox" name="qtd4[]" value="4d" <? if(in_array("4d", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              cinemas</label>
            
            <label>
              <input type="checkbox" name="qtd4[]" value="4e" <? if(in_array("4e", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              galerias de arte</label>
            
            <label>
              <input type="checkbox" name="qtd4[]" value="4f" <? if(in_array("4f", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              museus</label>
            
            <label>
              <input type="checkbox" name="qtd4[]" value="4g" <? if(in_array("4g", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              em outros equipamentos culturais como bibliotecas públicas</label>
            
            <label>
              <input type="checkbox" name="qtd4[]" value="4h" <? if(in_array("4h", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              ocorrem em locais pertencentes a fundações municipais, secretarias de cultura, etc.</label>
            
            <label>
              <input type="checkbox" name="qtd4[]" value="4i" <? if(in_array("4i", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              ocorrem  locais abertos como praças e ruas</label>
            
            <label>
              <input type="checkbox" name="qtd4[]" value="4j" <? if(in_array("4j", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              ocorrem em instituições de ensino, como escolas e creches.</label>
            
            <label>
              <input type="checkbox" name="qtd4[]" value="4k" <? if(in_array("4k", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              ocorrem em locais vinculados a práticas esportivas como ginásios poliesportivos</label>
            
            <label>
              <input type="checkbox" name="qtd4[]" value="4l" <? if(in_array("4l", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              ocorrem em Pontos/ Pontões de Cultura</label>
            
            <label>
              <input type="checkbox" id="idqtd4quais" name="qtd4[]" onClick="javascript: textBoxClearSelecao('#idqtd4quais', '#idqtd4quais');" value="4m" <? if(in_array("4m", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              outros Quais?
            <input name="qtd4quais" id="qtd4quais" value="<?php echo $meuArray1['qtd4'];?>" class="validate[condRequired[idqtd4quais]]" onclick="MarcarCheckBoxClique('#idqtd4quais')" type="text" /></label>
          </td>
      </tr>
            <tr>
        <td>
          <label>Quais os produtos são resultados das ações realizadas (marque quantos itens julgar necessário)*:
          </label>
          
          <label>
            <input type="checkbox" name="qtd5[]" value="5a" <? if(in_array("5a", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            vídeos / DVDs e gravações </label>
          
          <label>
            <input type="checkbox" name="qtd5[]" value="5b" <? if(in_array("5b", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>            
            filmes </label>
          
          <label>
            <input type="checkbox" name="qtd5[]" value="5c" <? if(in_array("5c", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>            
            livro </label>
          
          <label>
            <input type="checkbox" name="qtd5[]" value="5d" <? if(in_array("5d", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>            
            instrumentos musicais </label>
          
          <label>
            <input type="checkbox" name="qtd5[]" value="5e" <? if(in_array("5e", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>            
            pinturas, esculturas, gravuras </label>
          
          <label>
            <input type="checkbox" name="qtd5[]" value="5f" <? if(in_array("5f", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>            
            bens artesanais </label>
          
          <label>
            <input type="checkbox" name="qtd5[]" value="5g" <? if(in_array("5g", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>            
            produção de cenografia / figurino </label>
          
          <label>
            <input type="checkbox" name="qtd5[]" value="5h" <? if(in_array("5h", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>            
            publicações (artigo, catálogo,etc.) </label>
          
          <label>
            <input type="checkbox" name="qtd5[]" value="5j" <? if(in_array("5j", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>            
            vídeos / DVDs e gravações </label>
          
            <label>
            <input type="checkbox" name="qtd5[]" id="idqtd5quais" onClick="javascript: textBoxClearSelecao('#idqtd5quais', '#qtd5quais');" value="5i" <? if(in_array("5i", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>            
            outros Quais?
           <input name="qtd5quais" id="qtd5quais" value="<?php echo $meuArray1['qtd5'];?>" class="validate[condRequired[idqtd5quais]]" onclick="MarcarCheckBoxClique('#idqtd5quais')" type="text" /></label>
          </td>
          </tr>
           <tr>
            <td><div>
             <label>
             <div align="center">Comentários gerais (no máximo em dez linhas)</div>
             </label>
             <div align="center">
             <textarea name="qtdComentariosGerais" dir="ltr" lang="pt-br" cols="20" rows="10" validate[max[650]]  maxlength="660" class="input-xxlarge" style="text-align:left;">
				<?php echo $meuArray1['qtdComentariosGerais'];?>
             </textarea>
             </div>
             </div></td>
            </tr>
                  <tr>
                    <td><div><br />
                      <label><input type="radio" name="dec1" <?php if($_POST['dec1']=="dec1") echo "checked";?> value="dec1" 
                      class="validate[required] radio"/> 
                      Declaro, para os devidos fins, que as informações aqui prestadas são verdadeiras</label>
                      
                      <label><input type="radio" name="dec2" <?php if($_POST['dec2']=="dec2") echo "checked";?> value="dec2" 
                      class="validate[required] radio"/> 
                      Declaro estar ciente que as informações aqui prestadas são públicas em atendimento
                        a Lei de Acesso à Informação nº 12.527/2011, resguardadas aquelas de caráter pessoal</label>
                      
                      <label><input type="radio" name="dec3" <?php if($_POST['dec3']=="dec3") echo "checked";?> value="dec3" 
                      class="validate[required] radio"/>                       
                      Autorizo a Funarte a utilizar as informações aqui  prestadas para fins de mapeamento,
                        pesquisa, análise e construção de políticas  para o campo das residências artísticas.</label>
                    </div></td>
                  </tr>
      <tr>
        <td>
          <div>
           <div align="center">
               <button type="submit" name="atualizar" value="atualizar"  class="btn btn-info"><i class="icon-refresh icon-white"></i> atualizar</button>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <button type="submit" name="avancar" value="avancar"  class="btn btn-success" onkeypress="return handleEnter(this, event);"><i class="icon-arrow-right icon-white"></i> avancar</button>
            </div>
          </div>      
          </td>
      </tr>
      <tr>
        <td>
        <div id="alert1" class="alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        A Funarte agradece a sua participação no preenchimento deste formulário de mapeamento. As informações prestadas serão fundamentais para a construção de políticas públicas voltadas para o fomento às residências artísticas no país. 
        </div>
        </td>
      </tr>
      <br/>
    </table>
          <div class="progress progress-danger">
          <div class="bar" style="width: 100%;">100%concluido</div>
        </div>
</form>
</body>
</html>