<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Furnarte</title>

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
<form id="form1" name="form1" method="post" action="sql\parteIV.php">
    <table width="80%" align="center" cellpadding="2" cellspacing="2" style="border:solid 1px #333333; 
    font-family: Verdana, Geneva, sans-serif;">
      <tr bgcolor="#C7C7C7">
        <td colspan="2">
      	 <p align="center"><strong>PARTE IV</strong>
      	   <br/>
      	   <br/>
      	   <strong><em>SOBRE OS PROJETOS DE RESIDÊNCIAS ARTÍSTICAS</em></strong> 
         <br/>
      	   <div>
      	   <b>Os artistas contemplados podem realizar diversas ações durante a residência, em diversas linguagens. 
           Estas ações podem ser realizadas em inúmeros locais como praças, teatros, museus, etc. Indiretamente, 
           as ações em residência podem envolver diversos públicos: outros artistas, cidadãos locais, pesquisadores,
           etc. Ao término da residência o artista pode ter elaborado uma série de produtos: filmes, pinturas, 
           publicações, livros, etc. </b>
           </div>
      	   <br/>
   	      </p>
   
        </div></td>
      </tr>
      <tr bgcolor="#D2D2D2">
        <td colspan="2"><label>Quais as principais ações realizadas pelos artistas durante a residência </label>
(marque quantos itens julgar necessário)*:
  <p>
    <label>
      <input name="qtd1[]" type="checkbox" value="1a" <? if(in_array("1a", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>      
      pesquisa</label>
    <br />
    <label>
      <input name="qtd1[]" type="checkbox" value="1b" <? if(in_array("1b", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>      
      intervenção urbana</label>
    <br />
    <label>
      <input name="qtd1[]" type="checkbox" value="1c" <? if(in_array("1c", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>      
      cursos</label>
    <br />
    <label>
      <input name="qtd1[]" type="checkbox" value="1d" <? if(in_array("1d", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>      
      feiras</label>
    <br />
    <label>
      <input name="qtd1[]" type="checkbox" value="1e" <? if(in_array("1e", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>      
      festivais/mostras</label>
    <br />
    <label>
      <input name="qtd1[]" type="checkbox" value="1f" <? if(in_array("1f", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>      
      exposições</label>
    <br />
    <label>
      <input name="qtd1[]" type="checkbox" value="1g" <? if(in_array("1g", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>      
      apresentações artísticas ( bandas de música, circo, etc.)</label>
    <br />
    <label>
      <input name="qtd1[]" type="checkbox" value="1h" <? if(in_array("1h", $meuArray)){ echo "checked";}?>
      class="validate[minCheckbox[1]] checkbox"/>      
      outros</label>
    <br/>
    <label> Quais?</label>
    <input name="qtd1quais" value="<?php echo $meuArray1['qtd1'];?>" type="text" />
  </p>
  </td>
      </tr>
            <tr bgcolor="#C7C7C7">
        <td colspan="2"><div>
          <label>Quais as linguagens envolvidas nas diferentes ações desenvolvidas em residências artísticas?
          (marque quantos itens julgar necessário)*: </label>
          <p>
            <label>
              <input name="qtd2[]" type="checkbox" value="2a" <? if(in_array("2a", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>
              artesanato</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2b" <? if(in_array("2b", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>
              teatro</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2c" <? if(in_array("2c", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>
              dança</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2d" <? if(in_array("2d", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>
              circo</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2e" <? if(in_array("2e", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>
              bandas de música</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2f" <? if(in_array("2f", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>
              música Erudita</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2g" <? if(in_array("2g", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>
              música Popular</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2h" <? if(in_array("2h", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>
              artes visuais</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2i" <? if(in_array("2i", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>
              fotografia</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2j" <? if(in_array("2j", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>
              audiovisual</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2k" <? if(in_array("2k", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>
              jogos eletrônicos</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2l" <? if(in_array("2l", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>
              literatura</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2m" <? if(in_array("2m", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>
              patrimônio material</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2n" <? if(in_array("2n", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>
              patrimônio imaterial</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2o" <? if(in_array("2o", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>
              museus</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2p" <? if(in_array("2p", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>
              cultura popular/ manifestações tradicionais</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2q" <? if(in_array("2q", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>
              cultura digital/ arte e tecnologia ( programação de linguagens digitais)</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2r" <? if(in_array("2r", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>
              design</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2s" <? if(in_array("2s", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>
              moda</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2t" <? if(in_array("2t", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>
              artes integradas ( projetos com múltiplas linguagens artísticas)</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2u" <? if(in_array("2u", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>
              outras</label>
            <br/>
            <label> Quais?</label>
            <input name="qtd2quais" value="<?php echo $meuArray1['qtd2'];?>" type="text" />
            <br />
          </p>
        </div></td>
      </tr>
            <tr bgcolor="#D2D2D2">
        <td colspan="2"><div>
          <label>Qual o principal público a ser atingido pelas ações? (marque no máximo os 3 itens mais importantes)*:</label>
          <p>
            <label>
              <input type="checkbox" name="qtd3[]" value="3a" <? if(in_array("3a", $meuArray)){ echo "checked";}?>
              class="validate[maxCheckbox[3]] checkbox"/>
              cidadãos locais</label>
            <br />
            <label>
              <input type="checkbox" name="qtd3[]" value="3b" <? if(in_array("3b", $meuArray)){ echo "checked";}?>
              class="validate[maxCheckbox[3]] checkbox"/>
              artistas</label>
            <br />
            <label>
              <input type="checkbox" name="qtd3[]" value="3c" <? if(in_array("3c", $meuArray)){ echo "checked";}?>
              class="validate[maxCheckbox[3]] checkbox"/>              
              produtores culturais</label>
            <br />
            <label>
              <input type="checkbox" name="qtd3[]" value="3d" <? if(in_array("3d", $meuArray)){ echo "checked";}?>
              class="validate[maxCheckbox[3]] checkbox"/>              
              estudantes</label>
            <br />
            <label>
              <input type="checkbox" name="qtd3[]" value="3e" <? if(in_array("3e", $meuArray)){ echo "checked";}?>
              class="validate[maxCheckbox[3]] checkbox"/>              
              pesquisadores</label>
            <br />
            <label>
              <input type="checkbox" name="qtd3[]" value="3f" <? if(in_array("3f", $meuArray)){ echo "checked";}?>
              class="validate[maxCheckbox[3]] checkbox"/>              
              outros</label>
            <label> Quais</label>
            <input name="qtd3quais" value="<?php echo $meuArray1['qtd3'];?>" type="text" />
            <br />
          </p>
        </div></td>
      </tr>
            <tr bgcolor="#C7C7C7">
        <td colspan="2"><div>
          <label>Onde as ações são realizadas? (marque quantos itens julgar necessário)*</label>
        </div>
          <p>
            <label>
              <input type="checkbox" name="qtd4[]" value="4a" <? if(in_array("4a", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              na sede da instituição organizadora do programa</label>
            <br />
            <label>
              <input type="checkbox" name="qtd4[]" value="4b" <? if(in_array("4b", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              teatros</label>
            <br />
            <label>
              <input type="checkbox" name="qtd4[]" value="4c" <? if(in_array("4c", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              centros culturais/ espaços multiuso</label>
            <br />
            <label>
              <input type="checkbox" name="qtd4[]" value="4d" <? if(in_array("4d", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              cinemas</label>
            <br />
            <label>
              <input type="checkbox" name="qtd4[]" value="4e" <? if(in_array("4e", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              galerias de arte</label>
            <br />
            <label>
              <input type="checkbox" name="qtd4[]" value="4f" <? if(in_array("4f", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              museus</label>
            <br />
            <label>
              <input type="checkbox" name="qtd4[]" value="4g" <? if(in_array("4g", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              em outros equipamentos culturais como bibliotecas públicas</label>
            <br />
            <label>
              <input type="checkbox" name="qtd4[]" value="4h" <? if(in_array("4h", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              ocorrem em locais pertencentes a fundações municipais, secretarias de cultura, etc.</label>
            <br />
            <label>
              <input type="checkbox" name="qtd4[]" value="4i" <? if(in_array("4i", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              ocorrem  locais abertos como praças e ruas</label>
            <br />
            <label>
              <input type="checkbox" name="qtd4[]" value="4j" <? if(in_array("4j", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              ocorrem em instituições de ensino, como escolas e creches.</label>
            <br />
            <label>
              <input type="checkbox" name="qtd4[]" value="4k" <? if(in_array("4k", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              ocorrem em locais vinculados a práticas esportivas como ginásios poliesportivos</label>
            <br />
            <label>
              <input type="checkbox" name="qtd4[]" value="4l" <? if(in_array("4l", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              ocorrem em Pontos/ Pontões de Cultura</label>
            <br />
            <label>
              <input type="checkbox" name="qtd4[]" value="4m" <? if(in_array("4m", $meuArray)){ echo "checked";}?>
              class="validate[minCheckbox[1]] checkbox"/>              
              outros</label>
            <label> Quais?</label>
            <input name="qtd4quais" value="<?php echo $meuArray1['qtd4'];?>" type="text" />
          </p></td>
      </tr>
            <tr bgcolor="#D2D2D2">
        <td colspan="2">Quais os produtos são resultados das ações realizadas (marque quantos itens julgar necessário)*:
          </label>
          <br />
          <label>
            <input type="checkbox" name="qtd5[]" value="5a" <? if(in_array("5a", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>
            vídeos / DVDs e gravações </label>
          <br/>
          <label>
            <input type="checkbox" name="qtd5[]" value="5b" <? if(in_array("5b", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>            
            filmes </label>
          <br/>
          <label>
            <input type="checkbox" name="qtd5[]" value="5c" <? if(in_array("5c", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>            
            livro </label>
          <br/>
          <label>
            <input type="checkbox" name="qtd5[]" value="5d" <? if(in_array("5d", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>            
            instrumentos musicais </label>
          <br/>
          <label>
            <input type="checkbox" name="qtd5[]" value="5e" <? if(in_array("5e", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>            
            pinturas, esculturas, gravuras </label>
          <br/>
          <label>
            <input type="checkbox" name="qtd5[]" value="5f" <? if(in_array("5f", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>            
            bens artesanais </label>
          <br/>
          <label>
            <input type="checkbox" name="qtd5[]" value="5g" <? if(in_array("5g", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>            
            produção de cenografia / figurino </label>
          <br/>
          <label>
            <input type="checkbox" name="qtd5[]" value="5h" <? if(in_array("5h", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>            
            publicações (artigo, catálogo,etc.) </label>
          <br/>
          <label>
            <input type="checkbox" name="qtd5[]" value="5i" <? if(in_array("5i", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>            
            outros </label>
          <br/>
          <label>
            <input type="checkbox" name="qtd5[]" value="5j" <? if(in_array("5j", $meuArray)){ echo "checked";}?>
            class="validate[minCheckbox[1]] checkbox"/>            
            vídeos / DVDs e gravações </label>
          <label> Quais?</label>
           <input name="qtd5quais" value="<?php echo $meuArray1['qtd5'];?>" type="text" />
          </td>
      </tr>
            <tr bgcolor="#C7C7C7">
              <td colspan="2" bgcolor="#C7C7C7"><div>
                <label>
                <div align="center">Comentários gerais (no máximo em dez linhas)</div>
                </label>
                <div align="center"><br />
                  <textarea name="qtdComentariosGerais" cols="100%" rows="10">
				  <?php echo $qtdComentariosGerais;?>
              </textarea>
                </div>
              </div></td>
            </tr>
                  <tr bgcolor="#C7C7C7">
        <td colspan="2">&nbsp;</td>
      </tr>
                  <tr bgcolor="#D2D2D2">
                    <td colspan="2"><div><br />
                      <input type="radio" name="dec1" <?php if($_POST['dec1']=="dec1") echo "checked";?> value="dec1" 
                      class="validate[required] radio"/> 
                      <label>Declaro, para os devidos fins, que as informações aqui prestadas são verdadeiras</label>
                      <br />
                      <input type="radio" name="dec2" <?php if($_POST['dec2']=="dec2") echo "checked";?> value="dec2" 
                      class="validate[required] radio"/> 
                      <label>Declaro estar ciente que as informações aqui prestadas são públicas em atendimento
                        a Lei de Acesso à Informação nº 12.527/2011, resguardadas aquelas de caráter pessoal</label>
                      <br/>
                      <input type="radio" name="dec3" <?php if($_POST['dec3']=="dec3") echo "checked";?> value="dec3" 
                      class="validate[required] radio"/>                       
                      <label>Autorizo a Funarte a utilizar as informações aqui  prestadas para fins de mapeamento,
                        pesquisa, análise e construção de políticas  para o campo das residências artísticas.</label>
                    </div></td>
                  </tr>
      <tr bgcolor="#C7C7C7">
        <td colspan="2">
          <div>
            <div align="center">
        <input type="submit" name="avancar" value="avancar" class="botao" onkeypress="return handleEnter(this, event);" /> 
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="submit" name="atualizar" value="atualizar" class="botao"/>              
            </div>
          </div>      
          </td>
      </tr>
      <tr bgcolor="#C7C7C7">
        <td colspan="2">
        A Funarte agradece a sua participação no preenchimento deste formulário de mapeamento. As informações prestadas serão fundamentais para a construção de políticas públicas voltadas para o fomento às residências artísticas no país. 

</td>
      </tr>
      <tr bgcolor="#C7C7C7">
        <td width="38%">&nbsp;</td>
        <td width="62%">&nbsp;</td>
      </tr>
      <br/>
    <tr>
      <td colspan="2" align="center" class="formu2">
        
      </td>
    </tr>
  </table>
  
 </p>
  
  <br />
  
<br />

<br/>
<br/>
<br/>
</form>
</body>
</html>