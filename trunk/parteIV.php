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
    
        <script>
            function limitaTextarea(valor) {
                quant = 620; /* Total de caracteres */
                total = valor.length;

                if(total <= quant) {
                    resto = quant - total;
                    document.getElementById('contador').innerHTML = resto;
                } else {
                    document.getElementById('qtdComentariosGerais').value = valor.substr(0,quant);
                }
            }
        </script> 

<?
      include "conexao.php";
      connect();
	//  @session_start();
	  $Login = trim($_SESSION["login"]);
   ?>
   <?  function getArray(&$Login){
	   $sql = "select * from pesquisa Where id_usuario= '$Login' and id_parte ='4';";
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
    $sql = "select * from pesquisaquais Where id_usuario= '$Login' and id_parte ='4';";
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
                     $(field).checked = true;
             }
    </script>
</head>
<body>
<form id="form1" name="form1" method="post" action="sql/parteIV.php">
    <table width="98%" class="table table-hover" align="center" cellpadding="2" cellspacing="2" style="font-family: Verdana, Geneva, sans-serif;">
      <tr>
        <td>
      	 <h4><i class="icon-plus-sign"></i>PROJETOS</h4>
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
        <label>Quais as principais ações realizadas pelos artistas durante a residência (marque quantos itens julgar necessário)*?</label>
        
      <label><input name="qtd1[]" type="checkbox" value="184" <? if(in_array("184", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>      
      Pesquisa</label>
    
      <label><input name="qtd1[]" type="checkbox" value="185" <? if(in_array("185", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>      
      Intervenção urbana</label>
    
      <label><input name="qtd1[]" type="checkbox" value="186" <? if(in_array("186", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>      
      Cursos</label>
    
      <label><input name="qtd1[]" type="checkbox" value="187" <? if(in_array("187", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>      
      Feiras</label>
    
      <label><input name="qtd1[]" type="checkbox" value="188" <? if(in_array("188", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>      
      Festivais/mostras</label>
    
      <label><input name="qtd1[]" type="checkbox" value="189" <? if(in_array("189", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>      
      Exposições</label>
    
      <label><input name="qtd1[]" type="checkbox" value="190" <? if(in_array("190", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>      
      Apresentações artísticas ( bandas de música, circo, etc.)</label>
    
      <label>
          <input name="qtd1[]" onClick="javascript: textBoxClearSelecao('#idqtd1quais', '#qtd1quais');" type="checkbox" value="191" id="idqtd1quais" <? if(in_array("191", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>      
      Outros. Quais?
      <input name="qtd1quais" id="qtd1quais" value="<?php echo $meuArray1['191'];?>" class="validate[optional,minSize[2]]" type="text" /></label>
  
      </td>
      </tr>
      <tr>
      <td><div>
          <label>Quais as linguagens envolvidas nas diferentes ações desenvolvidas em residências artísticas
          (marque quantos itens julgar necessário)*? </label>
      
            <label>
            <input name="qtd2[]" type="checkbox" value="193" <? if(in_array("193", $meuArray)){ echo "checked";}?>
             class="validate[minCheckbox[1]] checkbox"/>
             Artesanato</label>
      
            <label><input name="qtd2[]" type="checkbox" value="194" <? if(in_array("194", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            Teatro</label>
            
            <label>
            <input name="qtd2[]" type="checkbox" value="195" <? if(in_array("195", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            Dança</label>
            
            <label>
            <input name="qtd2[]" type="checkbox" value="196" <? if(in_array("196", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            Circo</label>
            
            <label><input name="qtd2[]" type="checkbox" value="197" <? if(in_array("197", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            Bandas de música</label>
            
            <label>
            <input name="qtd2[]" type="checkbox" value="198" <? if(in_array("198", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            Música Erudita</label>
            
            <label>
            <input name="qtd2[]" type="checkbox" value="199" <? if(in_array("199", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            Música Popular</label>
            
            <label><input name="qtd2[]" type="checkbox" value="200" <? if(in_array("200", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            Artes visuais</label>
            
            <label><input name="qtd2[]" type="checkbox" value="201" <? if(in_array("201", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            Fotografia</label>
            
            <label><input name="qtd2[]" type="checkbox" value="202" <? if(in_array("202", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            Audiovisual</label>
            
            <label><input name="qtd2[]" type="checkbox" value="203" <? if(in_array("203", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            Jogos eletrônicos</label>
            
            <label><input name="qtd2[]" type="checkbox" value="204" <? if(in_array("204", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            Literatura</label>
            
            <label>
            <input name="qtd2[]" type="checkbox" value="205" <? if(in_array("205", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            Patrimônio material</label>
            
            <label><input name="qtd2[]" type="checkbox" value="206" <? if(in_array("206", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            Patrimônio imaterial</label>
            
            <label><input name="qtd2[]" type="checkbox" value="207" <? if(in_array("207", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            Museus</label>
            
            <label><input name="qtd2[]" type="checkbox" value="208" <? if(in_array("208", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            Cultura popular/ manifestações tradicionais</label>
            
            <label><input name="qtd2[]" type="checkbox" value="209" <? if(in_array("209", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            Cultura digital/ arte e tecnologia ( programação de linguagens digitais)</label>
            
            <label><input name="qtd2[]" type="checkbox" value="210" <? if(in_array("210", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            Design</label>
            
            <label>
            <input name="qtd2[]" type="checkbox" value="211" <? if(in_array("211", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            Moda</label>
            
            <label><input name="qtd2[]" type="checkbox" value="212" <? if(in_array("212", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            Artes integradas ( projetos com múltiplas linguagens artísticas)</label>
            
            <label><input name="qtd2[]" type="checkbox" id="idqtd2quais" onClick="javascript: textBoxClearSelecao('#idqtd2quais', '#qtd2quais');" value="213" <? if(in_array("213", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>
              Outras. Quais?
            <input name="qtd2quais" id="qtd2quais" value="<?php echo $meuArray1['214'];?>" class="validate[optional,minSize[2]]" type="text" /></label>
          
        </div></td>
      </tr>
            <tr>
        <td><div>
          <label>Qual o principal público a ser atingido pelas ações (marque no máximo os 3 itens mais importantes)*?</label>
          
            <label>
            <input type="checkbox" name="qtd3[]" value="215" <? if(in_array("215", $meuArray)){ echo "checked";}?>
            class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>
            Cidadãos locais</label>
          
            <label>
            <input type="checkbox" name="qtd3[]" value="216" <? if(in_array("216", $meuArray)){ echo "checked";}?>
            class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>
            Artistas</label>
            
            <label>
            <input type="checkbox" name="qtd3[]" value="217" <? if(in_array("217", $meuArray)){ echo "checked";}?>
              class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>              
              Produtores culturais</label>
            
            <label>
              <input type="checkbox" name="qtd3[]" value="218" <? if(in_array("218", $meuArray)){ echo "checked";}?>
              class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>              
              Estudantes</label>
            
            <label>
              <input type="checkbox" name="qtd3[]" value="219" <? if(in_array("219", $meuArray)){ echo "checked";}?>
              class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>              
              Pesquisadores</label>
            
            <label>
              <input type="checkbox" name="qtd3[]" value="220" id="idqtd3quais" onClick="javascript: textBoxClearSelecao('#idqtd3quais', '#qtd3quais');" <? if(in_array("220", $meuArray)){ echo "checked";}?>
              class="validate[maxCheckbox[3],minCheckbox[1]] checkbox"/>              
              Outros. Quais?
            <input name="qtd3quais" id="qtd3quais" value="<?php echo $meuArray1['221'];?>" class="validate[optional,minSize[2]]" type="text" /></label>
                    
        </div></td>
      </tr>
            <tr>
        <td><div>
          <label>Onde as ações são realizadas (marque quantos itens julgar necessário)*?</label>
        </div>
          
            <label>
            <input type="checkbox" name="qtd4[]" value="222" <? if(in_array("222", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>              
            Na sede da instituição organizadora do programa</label>
            
            <label>
              <input type="checkbox" name="qtd4[]" value="223" <? if(in_array("223", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              Teatros</label>
            
            <label>
              <input type="checkbox" name="qtd4[]" value="224" <? if(in_array("224", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              Centros culturais/ espaços multiuso</label>
            
            <label>
              <input type="checkbox" name="qtd4[]" value="225" <? if(in_array("225", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              Cinemas</label>
            
            <label>
              <input type="checkbox" name="qtd4[]" value="226" <? if(in_array("226", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              Galerias de arte</label>
            
            <label>
              <input type="checkbox" name="qtd4[]" value="227" <? if(in_array("227", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              Museus</label>
            
            <label>
              <input type="checkbox" name="qtd4[]" value="228" <? if(in_array("228", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              Em outros equipamentos culturais como bibliotecas públicas</label>
            
            <label>
              <input type="checkbox" name="qtd4[]" value="229" <? if(in_array("229", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              Ocorrem em locais pertencentes a fundações municipais, secretarias de cultura, etc.</label>
            
            <label>
              <input type="checkbox" name="qtd4[]" value="230" <? if(in_array("230", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              Ocorrem  locais abertos como praças e ruas</label>
            
            <label>
              <input type="checkbox" name="qtd4[]" value="231" <? if(in_array("231", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              Ocorrem em instituições de ensino, como escolas e creches.</label>
            
            <label>
              <input type="checkbox" name="qtd4[]" value="232" <? if(in_array("232", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              Ocorrem em locais vinculados a práticas esportivas como ginásios poliesportivos</label>
            
            <label>
              <input type="checkbox" name="qtd4[]" value="233" <? if(in_array("233", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              Ocorrem em Pontos/ Pontões de Cultura</label>
            
            <label>
              <input type="checkbox" id="idqtd4quais" name="qtd4[]" onClick="javascript: textBoxClearSelecao('#idqtd4quais', '#idqtd4quais');" value="234" <? if(in_array("234", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              Outros. Quais?
            <input name="qtd4quais" id="qtd4quais" value="<?php echo $meuArray1['235'];?>" class="validate[optional,minSize[2]]" type="text" /></label>
          </td>
      </tr>
            <tr>
        <td>
          <label>Quais os produtos são resultados das ações realizadas (marque quantos itens julgar necessário)*?
          </label>
          
          <label>
            <input type="checkbox" name="qtd5[]" value="236" <? if(in_array("236", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            Vídeos / DVDs e gravações </label>
          
          <label>
            <input type="checkbox" name="qtd5[]" value="237" <? if(in_array("237", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>            
            Filmes </label>
          
          <label>
            <input type="checkbox" name="qtd5[]" value="238" <? if(in_array("238", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>            
            Livro </label>
          
          <label>
            <input type="checkbox" name="qtd5[]" value="239" <? if(in_array("239", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>            
            Instrumentos musicais </label>
          
          <label>
            <input type="checkbox" name="qtd5[]" value="240" <? if(in_array("240", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>            
            Pinturas, esculturas, gravuras </label>
          
          <label>
            <input type="checkbox" name="qtd5[]" value="241" <? if(in_array("241", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>            
            Bens artesanais </label>
          
          <label>
            <input type="checkbox" name="qtd5[]" value="242" <? if(in_array("242", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>            
            Produção de cenografia / figurino </label>
          
          <label>
            <input type="checkbox" name="qtd5[]" value="243" <? if(in_array("243", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>            
            Publicações (artigo, catálogo,etc.) </label>
          
          <label>
            <input type="checkbox" name="qtd5[]" value="244" <? if(in_array("244", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>            
            Vídeos / DVDs e gravações </label>
          
            <label>
            <input type="checkbox" name="qtd5[]" id="idqtd5quais" onClick="javascript: textBoxClearSelecao('#idqtd5quais', '#qtd5quais');" value="245" <? if(in_array("245", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>            
            Outros Quais?
           <input name="qtd5quais" id="qtd5quais" value="<?php echo $meuArray1['246'];?>" class="validate[optional,minSize[2]]" type="text" /></label>
          </td>
          </tr>
           <tr>
            <td><div>
             <label>
             <div align="center">Comentários gerais (no máximo em dez linhas)</div>
             </label>
             <div align="center">
             <textarea name="qtdComentariosGerais" id="qtdComentariosGerais" onkeyup="limitaTextarea(this.value)"  onkeydown="limitaTextarea(this.value)" dir="ltr" lang="pt-br" cols="20" rows="10" validate[max[620]]  maxlength="620" class="input-xxlarge" style="text-align:left;">
				<?php echo $meuArray1['248'];?>
             </textarea>
                 Max: <span id="contador">620</span>
             </div>
             </div></td>
            </tr>
                  <tr>
                    <td><div><br />
                      <label><input type="radio" name="dec1" <?php if($_POST['247']=="247") echo "checked";?> value="247" 
                      class="validate[required] radio"/> 
                      Declaro que as informações aqui prestadas são verdadeiras, e estar ciente de que as informações aqui prestadas são públicas, em atendimento a Lei de Acesso à Informação nº 12.527/2011, resguardadas aquelas de caráter pessoal. Autorizo a Funarte a utilizar as informações aqui prestadas para fins de mapeamento, pesquisa, análise e construção de políticas para o campo das residências artísticas.
                      </label>
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
        </td>
      </tr>
      <br/>
    </table>
          <div class="progress progress-danger">
          <div class="bar" style="width: 100%;">100% concluído</div>
        </div>
</form>
</body>
</html>