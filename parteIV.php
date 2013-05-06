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
      <tr>
        <td colspan="2">
         <p align="center">
 		 <strong><em>SOBRE OS PROJETOS DE RESIDÊNCIAS ARTÍSTICAS</em></strong>
         </p>
 		</td>
      </tr>
      <tr>
        <td colspan="2">
       <div>
        Os artistas contemplados podem realizar diversas ações durante a residência, em diversas linguagens. Estas ações podem ser realizadas em inúmeros locais como praças, teatros, museus, etc. Indiretamente, as ações em residência podem envolver diversos públicos: outros artistas, cidadãos locais, pesquisadores, etc. Ao término da residência o artista pode ter elaborado uma série de produtos: filmes, pinturas, publicações, livros, etc.
      </div>
        </td>
      </tr>
      <tr>
        <td colspan="2">
        <div>
  <label>Quais as principais ações realizadas pelos artistas durante a residência (marque quantos itens julgar necessário)</label>
  <p>
    <label>
   <input name="qtd1[]" type="checkbox" value="1a" />
    pesquisa</label>
    <br />
    <label>
   <input name="qtd1[]" type="checkbox" value="1b" />
    intervenção urbana</label>
    <br />
    <label>
   <input name="qtd1[]" type="checkbox" value="1c" />
    cursos</label>
    <br />
    <label>
   <input name="qtd1[]" type="checkbox" value="1d" />
    feiras</label>
    <br />
    <label>
   <input name="qtd1[]" type="checkbox" value="1e" />
    festivais/mostras</label>
    <br />
    <label>
   <input name="qtd1[]" type="checkbox" value="1f" />
    exposições</label>
    <br />
    <label>
   <input name="qtd1[]" type="checkbox" value="1g" />
    apresentações artísticas ( bandas de música, circo, etc.)</label>
    <br />
    <label>
    <input name="qtd1[]" type="checkbox" value="1h" />
    outros</label>
    <br/>
    <label> Quais?</label>
    <input name="qtd1quais" value="<?php echo $_POST[qtd1quais];?>" type="text" />
    <br />
  </p>
  <div>
  <label>Quais as linguagens envolvidas nas diferentes ações desenvolvidas em residências artísticas? </label>
  <p>
    <label>
    <input name="qtd2[]" type="checkbox" value="2a" />
    artesanato</label>
    <br />
    <label>
    <input name="qtd2[]" type="checkbox" value="2b" />
    teatro</label>
    <br />
    <label>
    <input name="qtd2[]" type="checkbox" value="2c" />
    dança</label>
    <br />
    <label>
    <input name="qtd2[]" type="checkbox" value="2d" />
    circo</label>
    <br />
    <label>
    <input name="qtd2[]" type="checkbox" value="2e" />
    bandas de música</label>
    <br />
    <label>
    <input name="qtd2[]" type="checkbox" value="2f" />
    música Erudita</label>
    <br />
    <label>
    <input name="qtd2[]" type="checkbox" value="2g" />
    música Popular</label>
    <br />
    <label>
    <input name="qtd2[]" type="checkbox" value="2h" />
    artes visuais</label>
    <br />
    <label>
    <input name="qtd2[]" type="checkbox" value="2i" />
    fotografia</label>
    <br />
    <label>
    <input name="qtd2[]" type="checkbox" value="2j" />
    audiovisual</label>
    <br />
    <label>
    <input name="qtd2[]" type="checkbox" value="2k" />
    jogos eletrônicos</label>
    <br />
    <label>
    <input name="qtd2[]" type="checkbox" value="2l" />
    literatura</label>
    <br />
    <label>
    <input name="qtd2[]" type="checkbox" value="2m" />
    patrimônio material</label>
    <br />
    <label>
    <input name="qtd2[]" type="checkbox" value="2n" />
    patrimônio imaterial</label>
    <br />
    <label>
    <input name="qtd2[]" type="checkbox" value="2o" />
    museus</label>
    <br />
    <label>
    <input name="qtd2[]" type="checkbox" value="2p" />
    cultura popular/ manifestações tradicionais</label>
    <br />
    <label>
    <input name="qtd2[]" type="checkbox" value="2q" />
    cultura digital/ arte e tecnologia ( programação de linguagens digitais)</label>
    <br />
    <label>
    <input name="qtd2[]" type="checkbox" value="2q" />
    design</label>
    <br />
    <label>
    <input name="qtd2[]" type="checkbox" value="2r" />
    moda</label>
    <br />
    <label>
    <input name="qtd2[]" type="checkbox" value="2s" />
    artes integradas ( projetos com múltiplas linguagens artísticas)</label>
    <br />
    <label>
    <input name="qtd2[]" type="checkbox" value="2t" />
    outras</label>
    <br/>
    <label> Quais?</label>
    <input name="qtd2quais" value="<?php echo $_POST[qtd2quais];?>" type="text" />
    <br />
  </p>
  </div>
  <br/>
  <div>
  <label>Qual o principal público a ser atingido pelas ações? (marque no máximo os 3 itens mais importantes)</label>
  <p>
    <label>
      <input type="checkbox" name="qtd3[]" value="2a"/>
      cidadãos locais</label>
    <br />
    <label>
      <input type="checkbox" name="qtd3[]" value="2b"/>
      artistas</label>
    <br />
        <label>
      <input type="checkbox" name="qtd3[]" value="2c"/>
      produtores culturais</label>
    <br />
        <label>
      <input type="checkbox" name="qtd3[]" value="2d"/>
      estudantes</label>
    <br />
        <label>
      <input type="checkbox" name="qtd3[]" value="2e"/>
      pesquisadores</label>
    <br />
        <label>
      <input type="checkbox" name="qtd3[]" value="2f"/>
      outros</label><label> Quais</label><input name="quais" type="text" />
    <br />
  </p>
  </div>
  	<div>
  	  <label>Onde as ações são realizadas? (marque quantos itens julgar necessário)</label>
      </div>
 	  <p>
      <label>
	  <input type="checkbox" name="qtd4[]" value="4a"/>
      na sede da instituição organizadora do programa</label>
      <br />
      <label>
	  <input type="checkbox" name="qtd4[]" value="4b"/>
      teatros</label>
      <br />
      <label>
      <input type="checkbox" name="qtd4[]" value="4c"/>
      centros culturais/ espaços multiuso</label>
      <br />
      <label>
	  <input type="checkbox" name="qtd4[]" value="4d"/>
      cinemas</label>
      <br />
      <label>
      <input type="checkbox" name="qtd4[]" value="4e"/>
      galerias de arte</label>
      <br />
      <label>
	  <input type="checkbox" name="qtd4[]" value="4f"/>	
      museus</label>
      <br />
      <label>
      <input type="checkbox" name="qtd4[]" value="4g"/>
      em outros equipamentos culturais como bibliotecas públicas</label>
      <br />
      <label>
	  <input type="checkbox" name="qtd4[]" value="4h"/>
      ocorrem em locais pertencentes a fundações municipais, secretarias de cultura, etc.</label>
      <br />
      <label>
      <input type="checkbox" name="qtd4[]" value="4i"/>
      ocorrem  locais abertos como praças e ruas</label>
      <br />
      <label>
      <input type="checkbox" name="qtd4[]" value="4j"/>
      ocorrem em instituições de ensino, como escolas e creches.</label>
      <br />
      <label>
      <input type="checkbox" name="qtd4[]" value="4k"/>
      ocorrem em locais vinculados a práticas esportivas como ginásios poliesportivos</label>
      <br />
      <label>
      <input type="checkbox" name="qtd4[]" value="4l"/>
      ocorrem em Pontos/ Pontões de Cultura</label>
      <br />
      <label>
      <input type="checkbox" name="qtd4[]" value="4m"/>
      outros</label>
      <label> Quais?</label>
      <input name="Quais" type="text" />
      <br />
      </p>
      </div>
      </td>
      </tr>
      <tr>
        <td colspan="2">
        <Lable>
        Quais os produtos são resultados das ações realizadas</label>
        <br />
         <label>
         <input type="checkbox" name="qtd5[]" value="5a"/>
         vídeos / DVDs e gravações
         </label>
         <br/>
         <label>
         <input type="checkbox" name="qtd5[]" value="5b"/>
         filmes
         </label>
         <br/>
         <label>
         <input type="checkbox" name="qtd5[]" value="5c"/>
         livro
         </label>
         <br/>
         <label>
         <input type="checkbox" name="qtd5[]" value="5d"/>
         instrumentos musicais
         </label>
		 <br/>
         <label>
         <input type="checkbox" name="qtd5[]" value="5e"/>
         pinturas, esculturas, gravuras
         </label>
         <br/>
         <label>
         <input type="checkbox" name="qtd5[]" value="5f"/>
         bens artesanais
         </label>
         <br/>
         <label>
         <input type="checkbox" name="qtd5[]" value="5g"/>
         produção de cenografia / figurino
         </label>
         <br/>
         <label>
         <input type="checkbox" name="qtd5[]" value="5h"/>
         publicações (artigo, catálogo,etc.)
         </label>
         <br/>
         <label>
         <input type="checkbox" name="qtd5[]" value="5j"/>
         outros
         </label>
         <br/>
         <label>
         <input type="checkbox" name="qtd5[]" value="5k"/>
         vídeos / DVDs e gravações
         </label>
      	<label> Quais?</label>
    	  <input name="Quais" type="text" />
        </td>
      </tr>
      <tr>
        <td colspan="2">
       <div>
       <label>
         <div align="center">Comentários gerais (no máximo em dez linhas)</div>
       </label>
        <div align="center"><br />
          <textarea name="qtdComentariosGerais" cols="100%" rows="10"><?php echo $qtdComentariosGerais;?>
          </textarea>
        </div>
       </div>  
       </td>
      </tr>
      <tr>
        <td colspan="2">
        <div><br />
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
        </div>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <div>
            <div align="center">
              <input type="submit" name="enviar" value="avancar" class="botao" onfocus="verifiyCheckboxes("tipo", 1);">
            </div>
          </div>      
          </td>
      </tr>
      <tr>
        <td width="38%">&nbsp;</td>
        <td width="62%">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2">
        A Funarte agradece a sua participação no preenchimento deste formulário de mapeamento. As informações prestadas serão fundamentais para a construção de políticas públicas voltadas para o fomento às residências artísticas no país. 

</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
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