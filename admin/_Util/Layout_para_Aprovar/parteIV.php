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
	  $_POST[qtdComentariosGerais] = $qtdComentariosGerais;
	  
	  	$sql = "select * from pesquisaquais;";
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

<script src="js/jsValidate.js" type="text/javascript"></script>
<script src="js/jquery-1.6.2.js" type="text/javascript"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>
<script src="js/jsvalidarParteIV.js" type="text/javascript"></script>
        
	 <style type="text/css">
     /* Estilizar os alertas */
     label.error{
       padding-left: 2px;
       color: red;
       font-weight: bold;
     }
     </style>
     
</head>
<body>
<form id="form1" name="form1" method="post" action="sql\parteIV.php">
    <table width="80%" align="center" cellpadding="2" cellspacing="2" style="border:solid 1px #333333;">
      <tr bgcolor="#C7C7C7">
        <td colspan="2">
         <p align="center">
 		 <strong>PARTE IV</strong>
         <br/>
         <br/>
 		 <strong><em>SOBRE OS PROJETOS DE RESIDÊNCIAS ARTÍSTICAS</em></strong>
         </p>
 		</td>
      </tr>
      <tr bgcolor="#C7C7C7">
        <th colspan="2"><div> Os artistas contemplados podem realizar diversas ações durante a residência, em diversas linguagens. Estas ações podem ser realizadas em inúmeros locais como praças, teatros, museus, etc. Indiretamente, as ações em residência podem envolver diversos públicos: outros artistas, cidadãos locais, pesquisadores, etc. Ao término da residência o artista pode ter elaborado uma série de produtos: filmes, pinturas, publicações, livros, etc. </div></th>
      </tr>
      <tr bgcolor="#D2D2D2">
        <td colspan="2"><label>Quais as principais ações realizadas pelos artistas durante a residência </label>
(marque quantos itens julgar necessário)*:
  <p>
    <label>
      <input name="qtd1[]" type="checkbox" value="1a" <? if(in_array("1a", $meuArray)){ echo "checked";}?>/>
      pesquisa</label>
    <br />
    <label>
      <input name="qtd1[]" type="checkbox" value="1b" <? if(in_array("1b", $meuArray)){ echo "checked";}?>/>
      intervenção urbana</label>
    <br />
    <label>
      <input name="qtd1[]" type="checkbox" value="1c" <? if(in_array("1c", $meuArray)){ echo "checked";}?>/>
      cursos</label>
    <br />
    <label>
      <input name="qtd1[]" type="checkbox" value="1d" <? if(in_array("1d", $meuArray)){ echo "checked";}?>/>
      feiras</label>
    <br />
    <label>
      <input name="qtd1[]" type="checkbox" value="1e" <? if(in_array("1e", $meuArray)){ echo "checked";}?>/>
      festivais/mostras</label>
    <br />
    <label>
      <input name="qtd1[]" type="checkbox" value="1f" <? if(in_array("1f", $meuArray)){ echo "checked";}?>/>
      exposições</label>
    <br />
    <label>
      <input name="qtd1[]" type="checkbox" value="1g" <? if(in_array("1g", $meuArray)){ echo "checked";}?>/>
      apresentações artísticas ( bandas de música, circo, etc.)</label>
    <br />
    <label>
      <input name="qtd1[]" type="checkbox" value="1h" <? if(in_array("1h", $meuArray)){ echo "checked";}?>/>
      outros</label>
    <br/>
    <label> Quais?</label>
    <input name="qtd1quais" value="<?php echo $_POST[qtd1quais];?>" type="text" />
  </p>
  </td>
      </tr>
            <tr bgcolor="#C7C7C7">
        <td colspan="2"><div>
          <label>Quais as linguagens envolvidas nas diferentes ações desenvolvidas em residências artísticas?
          (marque quantos itens julgar necessário)*: </label>
          <p>
            <label>
              <input name="qtd2[]" type="checkbox" value="2a" <? if(in_array("2a", $meuArray)){ echo "checked";}?>/>
              artesanato</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2b" <? if(in_array("2b", $meuArray)){ echo "checked";}?>/>
              teatro</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2c" <? if(in_array("2c", $meuArray)){ echo "checked";}?>/>
              dança</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2d" <? if(in_array("2d", $meuArray)){ echo "checked";}?>/>
              circo</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2e" <? if(in_array("2e", $meuArray)){ echo "checked";}?>/>
              bandas de música</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2f" <? if(in_array("2f", $meuArray)){ echo "checked";}?>/>
              música Erudita</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2g" <? if(in_array("2g", $meuArray)){ echo "checked";}?>/>
              música Popular</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2h" <? if(in_array("2h", $meuArray)){ echo "checked";}?>/>
              artes visuais</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2i" <? if(in_array("2i", $meuArray)){ echo "checked";}?>/>
              fotografia</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2j" <? if(in_array("2j", $meuArray)){ echo "checked";}?>/>
              audiovisual</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2k" <? if(in_array("2k", $meuArray)){ echo "checked";}?>/>
              jogos eletrônicos</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2l" <? if(in_array("2l", $meuArray)){ echo "checked";}?>/>
              literatura</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2m" <? if(in_array("2m", $meuArray)){ echo "checked";}?>/>
              patrimônio material</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2n" <? if(in_array("2n", $meuArray)){ echo "checked";}?>/>
              patrimônio imaterial</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2o" <? if(in_array("2o", $meuArray)){ echo "checked";}?>/>
              museus</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2p" <? if(in_array("2p", $meuArray)){ echo "checked";}?>/>
              cultura popular/ manifestações tradicionais</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2q" <? if(in_array("2q", $meuArray)){ echo "checked";}?>/>
              cultura digital/ arte e tecnologia ( programação de linguagens digitais)</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2r" <? if(in_array("2r", $meuArray)){ echo "checked";}?>/>
              design</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2s" <? if(in_array("2s", $meuArray)){ echo "checked";}?>/>
              moda</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2t" <? if(in_array("2t", $meuArray)){ echo "checked";}?>/>
              artes integradas ( projetos com múltiplas linguagens artísticas)</label>
            <br />
            <label>
              <input name="qtd2[]" type="checkbox" value="2u" <? if(in_array("2u", $meuArray)){ echo "checked";}?>/>
              outras</label>
            <br/>
            <label> Quais?</label>
            <input name="qtd2quais" value="<?php echo $_POST[qtd2quais];?>" type="text" />
            <br />
          </p>
        </div></td>
      </tr>
            <tr bgcolor="#D2D2D2">
        <td colspan="2"><div>
          <label>Qual o principal público a ser atingido pelas ações? (marque no máximo os 3 itens mais importantes)*:</label>
          <p>
            <label>
              <input type="checkbox" name="qtd3[]" value="3a" <? if(in_array("3a", $meuArray)){ echo "checked";}?>/>
              cidadãos locais</label>
            <br />
            <label>
              <input type="checkbox" name="qtd3[]" value="3b" <? if(in_array("3b", $meuArray)){ echo "checked";}?>/>
              artistas</label>
            <br />
            <label>
              <input type="checkbox" name="qtd3[]" value="3c" <? if(in_array("3c", $meuArray)){ echo "checked";}?>/>
              produtores culturais</label>
            <br />
            <label>
              <input type="checkbox" name="qtd3[]" value="3d" <? if(in_array("3d", $meuArray)){ echo "checked";}?>/>
              estudantes</label>
            <br />
            <label>
              <input type="checkbox" name="qtd3[]" value="3e" <? if(in_array("3e", $meuArray)){ echo "checked";}?>/>
              pesquisadores</label>
            <br />
            <label>
              <input type="checkbox" name="qtd3[]" value="3f" <? if(in_array("3f", $meuArray)){ echo "checked";}?>/>
              outros</label>
            <label> Quais</label>
            <input name="quais" type="text" />
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
              <input type="checkbox" name="qtd4[]" value="4a" <? if(in_array("4a", $meuArray)){ echo "checked";}?>/>
              na sede da instituição organizadora do programa</label>
            <br />
            <label>
              <input type="checkbox" name="qtd4[]" value="4b" <? if(in_array("4b", $meuArray)){ echo "checked";}?>/>
              teatros</label>
            <br />
            <label>
              <input type="checkbox" name="qtd4[]" value="4c" <? if(in_array("4c", $meuArray)){ echo "checked";}?>/>
              centros culturais/ espaços multiuso</label>
            <br />
            <label>
              <input type="checkbox" name="qtd4[]" value="4d" <? if(in_array("4d", $meuArray)){ echo "checked";}?>/>
              cinemas</label>
            <br />
            <label>
              <input type="checkbox" name="qtd4[]" value="4e" <? if(in_array("4e", $meuArray)){ echo "checked";}?>/>
              galerias de arte</label>
            <br />
            <label>
              <input type="checkbox" name="qtd4[]" value="4f" <? if(in_array("4f", $meuArray)){ echo "checked";}?>/>
              museus</label>
            <br />
            <label>
              <input type="checkbox" name="qtd4[]" value="4g" <? if(in_array("4g", $meuArray)){ echo "checked";}?>/>
              em outros equipamentos culturais como bibliotecas públicas</label>
            <br />
            <label>
              <input type="checkbox" name="qtd4[]" value="4h" <? if(in_array("4h", $meuArray)){ echo "checked";}?>/>
              ocorrem em locais pertencentes a fundações municipais, secretarias de cultura, etc.</label>
            <br />
            <label>
              <input type="checkbox" name="qtd4[]" value="4i" <? if(in_array("4i", $meuArray)){ echo "checked";}?>/>
              ocorrem  locais abertos como praças e ruas</label>
            <br />
            <label>
              <input type="checkbox" name="qtd4[]" value="4j" <? if(in_array("4j", $meuArray)){ echo "checked";}?>/>
              ocorrem em instituições de ensino, como escolas e creches.</label>
            <br />
            <label>
              <input type="checkbox" name="qtd4[]" value="4k" <? if(in_array("4k", $meuArray)){ echo "checked";}?>/>
              ocorrem em locais vinculados a práticas esportivas como ginásios poliesportivos</label>
            <br />
            <label>
              <input type="checkbox" name="qtd4[]" value="4l" <? if(in_array("4l", $meuArray)){ echo "checked";}?>/>
              ocorrem em Pontos/ Pontões de Cultura</label>
            <br />
            <label>
              <input type="checkbox" name="qtd4[]" value="4m" <? if(in_array("4m", $meuArray)){ echo "checked";}?>/>
              outros</label>
            <label> Quais?</label>
            <input name="Quais2" type="text" />
          </p></td>
      </tr>
            <tr bgcolor="#D2D2D2">
        <td colspan="2">Quais os produtos são resultados das ações realizadas (marque quantos itens julgar necessário)*:
          </label>
          <br />
          <label>
            <input type="checkbox" name="qtd5[]" value="5a" <? if(in_array("5a", $meuArray)){ echo "checked";}?>/>
            vídeos / DVDs e gravações </label>
          <br/>
          <label>
            <input type="checkbox" name="qtd5[]" value="5b" <? if(in_array("5b", $meuArray)){ echo "checked";}?>/>
            filmes </label>
          <br/>
          <label>
            <input type="checkbox" name="qtd5[]" value="5c" <? if(in_array("5c", $meuArray)){ echo "checked";}?>/>
            livro </label>
          <br/>
          <label>
            <input type="checkbox" name="qtd5[]" value="5d" <? if(in_array("5d", $meuArray)){ echo "checked";}?>/>
            instrumentos musicais </label>
          <br/>
          <label>
            <input type="checkbox" name="qtd5[]" value="5e" <? if(in_array("5e", $meuArray)){ echo "checked";}?>/>
            pinturas, esculturas, gravuras </label>
          <br/>
          <label>
            <input type="checkbox" name="qtd5[]" value="5f" <? if(in_array("5f", $meuArray)){ echo "checked";}?>/>
            bens artesanais </label>
          <br/>
          <label>
            <input type="checkbox" name="qtd5[]" value="5g" <? if(in_array("5g", $meuArray)){ echo "checked";}?>/>
            produção de cenografia / figurino </label>
          <br/>
          <label>
            <input type="checkbox" name="qtd5[]" value="5h" <? if(in_array("5h", $meuArray)){ echo "checked";}?>/>
            publicações (artigo, catálogo,etc.) </label>
          <br/>
          <label>
            <input type="checkbox" name="qtd5[]" value="5i" <? if(in_array("5i", $meuArray)){ echo "checked";}?>/>
            outros </label>
          <br/>
          <label>
            <input type="checkbox" name="qtd5[]" value="5j" <? if(in_array("5j", $meuArray)){ echo "checked";}?>/>
            vídeos / DVDs e gravações </label>
          <label> Quais?</label>
          <input name="Quais" type="text" /></td>
      </tr>
            <tr bgcolor="#C7C7C7">
              <td colspan="2" bgcolor="#C7C7C7"><div>
                <label>
                <div align="center">Comentários gerais (no máximo em dez linhas)</div>
                </label>
                <div align="center"><br />
                  <textarea name="qtdComentariosGerais2" cols="100%" rows="10"><?php echo $qtdComentariosGerais;?>
              </textarea>
                </div>
              </div></td>
            </tr>
                  <tr bgcolor="#C7C7C7">
        <td colspan="2">&nbsp;</td>
      </tr>
                  <tr bgcolor="#D2D2D2">
                    <td colspan="2"><div><br />
                      <input type="radio" name="dec1" <?php if($_POST['dec1']=="dec1") echo "checked";?> value="dec1" class="radio" />
                      <label>Declaro, para os devidos fins, que as informações aqui prestadas são verdadeiras</label>
                      <br />
                      <input type="radio" name="dec2" <?php if($_POST['dec2']=="dec2") echo "checked";?> value="dec2" class="radio" />
                      <label>Declaro estar ciente que as informações aqui prestadas são públicas em atendimento
                        a Lei de Acesso à Informação nº 12.527/2011, resguardadas aquelas de caráter pessoal</label>
                      <br/>
                      <input type="radio" name="dec3" <?php if($_POST['dec3']=="dec3") echo "checked";?> value="dec3" class="radio" />
                      <label>Autorizo a Funarte a utilizar as informações aqui  prestadas para fins de mapeamento,
                        pesquisa, análise e construção de políticas  para o campo das residências artísticas.</label>
                    </div></td>
                  </tr>
      <tr bgcolor="#C7C7C7">
        <td colspan="2">
          <div>
            <div align="center">
              <input type="submit" name="enviar" value="avancar" class="botao" onfocus="verifiyCheckboxes("tipo", 1);">
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