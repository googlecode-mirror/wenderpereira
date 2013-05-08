<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <? 
      session_start();
      include "conexao.php";
      connect();
   ?>
<title>Funarte - Portal das Artes</title>
<script src="js/jsValidate.js" type="text/javascript"></script>
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
     </style>
</head>
<form name="form1" id="form1" method="POST"  action="sql\parteII.php">
  <table width="80%" align="center" cellpadding="2" cellspacing="2" style="border:solid 1px #333333;">
    <tr>
      <td align="left" class="formu2"><div align="left">
        <div align="center"><b></b></div>
        <b><label>
          <div align="center">PARTE II</div>
        </label>
        <div align="center"><br/>
        </div>
        <label>
          <div align="center">SOBRE  OS PROGRAMAS DE RESIDÊNCIA ARTÍSTICA</div>
        </label>
		</b>
        <div align="center"><br/>


       </div>
        </div>
        <table width="99%" align="center" border="0">
          <tr>
            <th>
              <div align="justify">Um programa de residências artísticas consiste num conjunto de ações voltadas para o incentivo à experimentação, inovação, pesquisa e criação no campo das artes. Isto se dá, em geral, através do apoio (financeiro ou não) concedido a artistas que, na maior parte das vezes, saem de seu lugar de origem para realizar residências em outras localidades. A instituição pode realizar o programa de residências artísticas por meio de recursos oriundos de outros editais públicos e privados, por meio de seus próprios editais/recursos ou qualquer outra forma de financiamento direto ou indireto. Os programas podem ou não conceder apoio financeiro ao artista, podendo a instituição arcar com parte dos custos ou com a totalidade deles. Os locais de realização das residências variam conforme o programa, podendo abranger desde um município até os mais diferentes países. Os programas podem abranger uma ou mais linguagens artísticas (circo, dança, teatro, artes visuais, música, arte digital, literatura, cinema). Quanto à periodicidade, podem acontecer em períodos pré-estabelecidos, anualmente, semestralmente, etc. </div></th>
          </tr>
        </table>
	  </td>
    </tr>
  
    <td align="left" class="formu2">
    
    <label>• Qual o principal objetivo dos programas de residência artística? </label>
    <strong>marque no máximo os 3  itens de maior importância</strong> <br />
    <p>
      <input name="qtd1[]" type="checkbox" value="1a" />
      <label>promover o intercâmbio/troca de conhecimentos entre os artistas realizadores do projeto e o público em geral ( ênfase na troca de conhecimentos) </label>
      <br />
      <input name="qtd1[]" type="checkbox" value="1b" />
      <label>produção cultural ( ênfase na produção)</label>
      <br />
      <input name="qtd1[]" type="checkbox" value="1c" />
      <label>criação artística ( ênfase na criação)</label>
      <br />
	  <input name="qtd1[]" type="checkbox" value="1d" />
      <label>experimentação e inovação em artes (ênfase na experimentação)</label>
      <br />
	  <input name="qtd1[]" type="checkbox" value="1e" />
      <label>levar a arte e a cultura aos locais de atuação,  promovendo a participação do público e a divulgação da arte de 		origem do artista ( ênfase na divulgação da arte (não seria difusão ou fruição?))</label>
      <br />
	  <input name="qtd1[]" type="checkbox" value="1f" />
      <label>garantir a inclusão social de cidadãos, gerando auto-estima e aguçando o gosto pelas artes no público local contemplado pelas residências (ênfase na atuação social)</label>
      <br />
	  <input name="qtd1[]" type="checkbox" value="1g" />
      <label>promover áreas como a educação patrimonial, a formação de guias, etc. (ênfase na preservação do patrimônio e turismo cultural)</label>
      <br />
	  <input name="qtd1[]" type="checkbox" value="1h" />
      <label> fomentar a economia local e novos arranjos produtivos, desenvolvendo as cadeias produtivas dos setores culturais (ênfase na economia da cultura)</label>
      <br />
	  	  <input name="qtd1[]" type="checkbox" value="1i" />
      <label>desenvolvimento e aguçamento das habilidades artísticas (ênfase na excelência da arte)</label>
      <br />
	  <input name="qtd1[]" type="checkbox" value="1j" />
      <label> Outros<label> Quais?</label>
      <input name="qtd1quais" value="<?php echo $_POST[qtd1quais];?>" type="text" />
    </p>
    <tr>
    <td align="left" class="formu2">
          <label>• As ações em residências artísticas possuem um valor previsto planejado (marque apenas 1 item)?* </label>
          <label>
          <br/>
          <input type="radio" name="qtd2" <?php if($_POST['qtd2']=="2a") echo "checked";?> value="2a" class="radio" />
     	   Sim</label>
          <label>
          <input type="radio" name="qtd2" <?php if($_POST['qtd2']=="2b") echo "checked";?> value="2b" class="radio" />
     	  Não</label>
    </td>
    <tr>
    <td height="412" align="left" class="formu2">
    <br/>
    <div>
    <label>• De que forma a instituição financia os diferentes programas em residências artísticas (marque quantos itens julgar necessário):*</label>
    <p>
      <label>
   	  <input name="qtd3[]" type="checkbox" value="3a" />
        por meio de editais geridos pela própria instituição</label>
      <br />
      <label>
        <input name="qtd3[]" type="checkbox" value="3b" />
        por meio de editais privados geridos pela própria instituição</label>
      <br />
      <label>
		<input name="qtd3[]" type="checkbox" value="3c" />
        por meio de recursos oriundos de editais públicos externos a instituição</label>
      <br/>
      <label>
        <input name="qtd3[]" type="checkbox" value="3d" />
        por meio de recursos oriundos de editais privados externos a instituição</label>
      <br/>
      <label>
		<input name="qtd3[]" type="checkbox" value="3e" />
        por meio de recursos diretos da própria instituição, não necessariamente editais</label>
      <br/>
      <label>
        <input name="qtd3[]" type="checkbox" value="3f" />
        por meio de fundos públicos de cultura em nível estadual, municipal e federal</label>
      <br/>
      <label>
		<input name="qtd3[]" type="checkbox" value="3g" />
        por meio de patrocínio, com recursos oriundos de leis de incentivo em nível estadual, federal e municipal</label>
      <br/>
      <label>
        <input name="qtd3[]" type="checkbox" value="3h" />
        por meio de empréstimos junto a instituições financeiras</label>
      <br/>
      <label>
		<input name="qtd3[]" type="checkbox" value="3i" />
        por meio de patrocínio/financiamento direto de entidades privadas</label>
      <br/>
      <label>
		<input name="qtd3[]" type="checkbox" value="3j" />
        por meio de organizações sociais como SENAC, SEBRAE</label>
      <br/>
      <label>
		<input name="qtd3[]" type="checkbox" value="3k" />
        por intermédio do programa Cultura Viva</label>
      <br/>
      <label>
		<input name="qtd3[]" type="checkbox" value="3l" />
        por meio de recursos oriundos de órgãos internacionais como OEA, UNESCO</label>
      <br/>
      <label>
		<input name="qtd3[]" type="checkbox" value="3m" />
        por meio de Organizações não – governamentais (ONGs)</label>
      <br/>
      <label>
		<input name="qtd3[]" type="checkbox" value="3n" />
        Outros</label>
      <label>Quais</label>
      <input name="qtd3quais" value="<?php echo $_POST[qtd3quais];?>" type="text" />
    </p>
    </div>
	<br/>
    </td>
    <tr>
      <td align="left" class="formu2">
      <label>Quanto ao local das realizações das residências (marque apenas 1 item)*:</label>
		<br/>
        <label>
        <input type="radio" name="qtd4" <?php if($_POST['qtd4']=="4a") echo "checked";?> value="4a" class="radio" />
        ocorrem em apenas um município e uma unidade federativa</label>
        <br />
         <label>
        <input type="radio" name="qtd4" <?php if($_POST['qtd4']=="4b") echo "checked";?> value="4b" class="radio" />
        pode acontecer em mais de um município,porém na mesma unidade federativa</label>
        <br />
         <label>
        <input type="radio" name="qtd4" <?php if($_POST['qtd4']=="4c") echo "checked";?> value="4c" class="radio" />
        tem abrangência nacional, podendo ocorrer em diferentes municípios e em mais de uma unidade federativa</label>
        <br />
                 <label>
        <input type="radio" name="qtd4" <?php if($_POST['qtd4']=="4d") echo "checked";?> value="4d" class="radio" />
        tem abrangência nacional, podendo ocorrer em mais de um região geográfica</label>
        <br />
        <br/>
      </td>
    </tr>
    <tr>
      <td align="left" class="formu2">
      <label>Em caso de abrangência nacional, quando as residências puderem se desenvolver em mais de uma região geográfica
      , quais estão envolvidas?(marque quantos itens julgar necessário)*:</label>
      <br/>
       <br/>
   	  <input name="qtd5[]" type="checkbox" value="5a" />
      <label>Região Norte</label>
      <br/>
   	  <input name="qtd5[]" type="checkbox" value="5b" />
      <label>Região Nordeste</label>
       <br/>
   	  <input name="qtd5[]" type="checkbox" value="5c" />
      <label>Região Centro-Oeste</label>
      <br/>
   	  <input name="qtd5[]" type="checkbox" value="5a" />
      <label>Região Sul</label>
      <br/>
   	  <input name="qtd5[]" type="checkbox" value="5a" />
      <label>Região Sudeste</label>
      <br/>
   	  <input name="qtd5[]" type="checkbox" value="5a" />
      <label>Região Sudeste</label>
      <br/>
      <br/>
      </td>
    </tr>
    <tr>
      
      <td align="left" class="formu2">
        <label>• As residências podem ocorrer em países do exterior (marque apenas um item)?*</label>
        <br/>
        <label>
          <input type="radio" name="qtd6" <?php if($_POST['qtd6']=="6a") echo "checked";?> value="6a" class="radio" />
          Sim</label>
        <label>
          <input type="radio" name="qtd6" <?php if($_POST['qtd6']=="6b") echo "checked";?> value="6b" class="radio" />
          Não</label>
        <br/>
        <br/>
      </td>
    </tr>
    <td align="left" class="formu2">
      <div>
    <label>•	Em caso de abrangência internacional, quais os continentes/ subcontinentes / blocos regionais são locais potenciais de realização das residências? (marque quantos itens julgar necessário):</label>
    <p>
      <input name="qtd7[]" type="checkbox" value="7a" />
      <label>América do Sul</label>
      <br/>
      <input name="qtd7[]" type="checkbox" value="7b" />
      <label>América Central</label>
      <br/>
      <input name="qtd7[]" type="checkbox" value="7c" />
      <label>América do Norte</label>
      <br/>
      <input name="qtd7[]" type="checkbox" value="7d" />
      <label>Europa</label>
      <br/>
      <input name="qtd7[]" type="checkbox" value="7e" />
      <label>Ásia</label>
      <br/>
      <input name="qtd7[]" type="checkbox" value="7f" />
      <label>África</label>
      <br/>
      <input name="qtd7[]" type="checkbox" value="7g" />
      <label>Oceania</label>
      <br/>
      <input name="qtd7[]" type="checkbox" value="7h" />
      <label>países Ibero-Americanos</label>
      <br/>
      <input name="qtd7[]" type="checkbox" value="7i" />
      <label>países da União Europeia</label>
      <br/>
      <input name="qtd7[]" type="checkbox" value="7j" />
      <label>países do MERCOSUL- Argentina, Uruguai, e Paraguai</label>
      <br/>
      <input name="qtd7[]" type="checkbox" value="7k" />
      <label>em nível mundial, englobando todos os continentes</label>
      <br/>
      <input name="qtd7[]" type="checkbox" value="7l" />
      <label>em acordo bilateral, no caso de apenas um outro país</label>
      <br/>
      <label>Quail?</label>
      <input name="qtd7quais" value="<?php echo $_POST[qtd7quais];?>" type="text" />
    </p>
  </div>
    </td>
    </tr>
    <td align="left" class="formu2">
    <div>
    <label>• Aponte em quais anos ocorreram programas em residências artísticas (marque quantos itens julgar necessário)</label>
    *
    <p>
      <label>
      <input name="qtd8[]" type="checkbox" value="8a" />
      Anos anteriores a 2006: </label>
      <label>Quais</label>
      <input name="qtd8Quais" type="text" />
      <br />
      <label>
      <input name="qtd8[]" type="checkbox" value="8b" />
        2006</label>
      <br />
      <label>
      <input name="qtd8[]" type="checkbox" value="8c" />
        2007</label>
      <br />
      <label>
      <input name="qtd8[]" type="checkbox" value="8d" />
        2008</label>
      <br />
      <label>
      <input name="qtd8[]" type="checkbox" value="8e" />
        2009</label>
      <br />
      <label>
      <input name="qtd8[]" type="checkbox" value="8f" />
        2010</label>
      <br />
      <label>
      <input name="qtd8[]" type="checkbox" value="8g" />
        2011</label>
      <br />
      <label>
      <input name="qtd8[]" type="checkbox" value="8h" />
        2012</label>
      <br />
      <label>
      <input name="qtd8[]" type="checkbox" value="8i" />
        2013</label>
      <label>em diante (anos já previstos)</label>
      <input name="qtd8Quais1" type="text" />
      <br />
    </p>
  </div>
    </td>
    </tr>
    <td align="left" class="formu2">
    <div>
    <label>• Com relação à continuidade destes programas em residências artísticas (marque apenas 1 item)*:</label>
    <p>
      <label>
       <input type="radio" name="qtd9" <?php if($_POST['qtd9']=="9a") echo "checked";?> value="9a" class="radio" />
       houve o programa  apenas uma vez, não tendo data para ocorrer novamente</label>
      <br />
      <label>
	  <input type="radio" name="qtd9" <?php if($_POST['qtd9']=="9b") echo "checked";?> value="9a" class="radio" />
        houve o programa apenas uma vez, porém já foi definida uma data para ocorrer novamente</label>
      <br />
      <label>
	   <input type="radio" name="qtd9" <?php if($_POST['qtd9']=="9c") echo "checked";?> value="9a" class="radio" />
        os programas aconteceram mais de uma vez, porém não tiveram periodicidade definida</label>
      <br />
      <label>
        <input type="radio" name="qtd9" <?php if($_POST['qtd9']=="9d") echo "checked";?> value="9a" class="radio" />
        os programas aconteceram mais de uma vez e tiveram periodicidade definida</label>
      <br />
    </p>
  </div>
    
    </td>
    </tr>
    <td align="left" class="formu2">
    <div>
    <label>• Em caso dos programas terem ocorridos mais de uma vez e terem periodicidade definida (marque apenas 1 item)*:</label>
    <p>
      <label>
        <input type="radio" name="qtd10" <?php if($_POST['qtd10']=="10a") echo "checked";?> value="10a" class="radio" />
      ocorrem uma vez a cada três anos ou mais</label>
      <br />
      <label>
		<input type="radio" name="qtd10" <?php if($_POST['qtd10']=="10b") echo "checked";?> value="10b" class="radio" />
        ocorrem uma vez a cada dois anos</label>
      <br />
      <label>
		<input type="radio" name="qtd10" <?php if($_POST['qtd10']=="10c") echo "checked";?> value="10c" class="radio" />
        são anuais</label>
      <br />
      <label>
		<input type="radio" name="qtd10" <?php if($_POST['qtd10']=="10d") echo "checked";?> value="10d" class="radio" />
        são semestrais ou em um período inferior (a cada três meses, dois, etc.)</label>
      <br />
    </p>
  </div>
    
    </td>
    </tr>
    <td align="left" class="formu2">
    <div>
    <label>• Há concessão de algum(a) prêmio/bolsa ou qualquer outra forma de apoio financeiro ao artista?(marque apenas 1 item)*
    </label>
    <p>
      <label>
		<input type="radio" name="qtd11" <?php if($_POST['qtd11']=="11a") echo "checked";?> value="11a" class="radio" />
      Sim</label>
      <br />
      <label>
		<input type="radio" name="qtd11" <?php if($_POST['qtd11']=="11b") echo "checked";?> value="11b" class="radio" />
        Não</label>
      <br />
    </p>
  </div>
    </td>
    </tr>
    <td align="left" class="formu2">
    <div>
    <label>• Qual o valor gasto, em média, no total de cada programa realizado em residências artísticas (marque apenas 1 item)*?</label>
    <p>
      <label>
	  <input type="radio" name="qtd12" <?php if($_POST['qtd12']=="12a") echo "checked";?> value="12a" class="radio" />
      não há valor dispendido para apoio financeiro ao artista</label>
      <br />
      <label>
	  <input type="radio" name="qtd12" <?php if($_POST['qtd12']=="12b") echo "checked";?> value="12b" class="radio" />
      até 100.000 reais</label>
      <br />
      <label>
      <input type="radio" name="qtd12" <?php if($_POST['qtd12']=="12c") echo "checked";?> value="12c" class="radio" />
        acima de 100.000 reais até 200.000 reais</label>
      <br />
      <label>
	  <input type="radio" name="qtd12" <?php if($_POST['qtd12']=="12d") echo "checked";?> value="12d" class="radio" />
        acima de 200.000 reais até 400.000 reais</label>
      <br />
      <label>
      <input type="radio" name="qtd12" <?php if($_POST['qtd12']=="12e") echo "checked";?> value="12e" class="radio" />
        acima de 400.000 reais até 600.000 reais</label>
      <br />
      <label>
	  <input type="radio" name="qtd12" <?php if($_POST['qtd12']=="12f") echo "checked";?> value="12f" class="radio" />
        acima de 600.000 reais até 1.000.000 de reais</label>
      <br />
      <label>
      <input type="radio" name="qtd12" <?php if($_POST['qtd12']=="12g") echo "checked";?> value="12g" class="radio" />
        acima de 1.000.000 de reais até 2.000.000 reais</label>
      <br />
      <label>
	  <input type="radio" name="qtd12" <?php if($_POST['qtd12']=="12h") echo "checked";?> value="12h" class="radio" />
        acima de 2.000.000 reais até 5.000.000 reais</label>
      <br />
      <label>
      <input type="radio" name="qtd12" <?php if($_POST['qtd12']=="12i") echo "checked";?> value="12i" class="radio" />
        acima de 5.000.000 de reais</label>
      <label> Qual valor?</label>
      <input name="qtd12Quais" type="text" />
      </p>
      </div>
      </td>
      </tr>
      <td height="27" align="left" class="formu2">
      <div>
      <label>• Qual o apoio financeiro concedido (em reais) para que cada artista realize a ação?
     (marque mais de 1 item em caso de diferentes valores concedidos em cada programa realizado)*:</label>
      <p>
      <label>
	  <input name="qtd13[]" type="checkbox" value="13a"/>
      até R$ 500,00</label>
      <br />
      <label>
	  <input name="qtd13[]" type="checkbox" value="13b"/>
      acima de R$ 500,00 até R$ 1.000,00</label>
      <br />
      <label>
	  <input name="qtd13[]" type="checkbox" value="13c"/>
      acima de R$ 1.000,00 até R$ 2.000,00</label>
      <br />
      <label>
	  <input name="qtd13[]" type="checkbox" value="13d"/>
        acima de R$ 2.000,00  até R$ 3.000,00</label>
      <br />
      <label>
	  <input name="qtd13[]" type="checkbox" value="13e"/>
        acima de R$ 3.000,00 até R$ 5.000,00</label>
      <br />
      <label>
	  <input name="qtd13[]" type="checkbox" value="13f"/>
        acima de  R$ 5.000,00 até R$ 8.000,00</label>
      <br />
      <label>
	  <input name="qtd13[]" type="checkbox" value="13g"/>
        acima de R$ 10.000,00  até R$ 20.000,00 </label>
      <br />
      <label>
	  <input name="qtd13[]" type="checkbox" value="13h"/>
        acima de R$ 20.000,00</label>
      <br />
      <label>
	  <input name="qtd13[]" type="checkbox" value="13i"/>
        não há valor concedido, pois a própria  instituição é responsável por diversos itens para a realização da residência ( passagens, traslados, hospedagem, etc)</label>
    </p>
  </div>
    </td>
    </tr>
    <td align="left" class="formu2">
    <div>
    <label>• O valor concedido já é deduzido do imposto de renda devido*?  (marque apenas 1 item):</label>
    <p>
      <label>
       <input type="radio" name="qtd14" <?php if($_POST['qtd14']=="14a") echo "checked";?> value="14a" class="radio" />
      Não há concessão de qualquer apoio financeiro ao artista</label>
      <br />
      <label>
       <input type="radio" name="qtd14" <?php if($_POST['qtd14']=="14b") echo "checked";?> value="14b" class="radio" />
        Sim, o artista recebe o valor já deduzido do imposto de renda</label>
      <br />
      <label>
       <input type="radio" name="qtd14" <?php if($_POST['qtd14']=="14c") echo "checked";?> value="14c" class="radio" />
        Não, a dedução do imposto de renda é responsabilidade do artista</label>
      <br />
    </p>
  </div>
    </td>
    </tr>
  
    <td align="left" class="formu2">
    <div>
    <label>• Em caso de não estarem incluídos no valor concedido, a instituição arcará com quais dos itens abaixo ( marque quantos itens julgar necessário*)</label>
    <p>
      <label>
        <input name="qtd15[]" type="checkbox" value="15a"/>
      a instituição não arcará com nenhum dos custos, estando todos inclusos na concessão da(o) bolsa/prêmio</label>
      <br />
      <label>
        <input name="qtd15[]" type="checkbox" value="15b"/>
        aluguel/ ocupação do espaço onde será realizada a ação</label>
      <br />
      <label>
        <input name="qtd15[]" type="checkbox" value="15c"/>
        custo do projeto</label>
      <br />
      <label>
        <input name="qtd15[]" type="checkbox" value="15d"/>
        alimentação</label>
      <br />
      <label>
        <input name="qtd15[]" type="checkbox" value="15e"/>
        transporte aéreo e/ou terrestre</label>
      <br />
      <label>
        <input name="qtd15[]" type="checkbox" value="15f"/>
        suporte logístico</label>
      <br />
      <label>
        <input name="qtd15[]" type="checkbox" value="15g"/>
        aquisição de materiais</label>
      <br />
      <label>
        <input name="qtd15[]" type="checkbox" value="15h"/>
        contratação de pessoal</label>
      <br />
      <label>
        <input name="qtd15[]" type="checkbox" value="15i"/>
        aluguel de equipamentos necessários</label>
      <br />
      <label>
        <input name="qtd15[]" type="checkbox" value="15j"/>
        divulgação</label>
      <br />
      <label>
        <input name="qtd15[]" type="checkbox" value="15l"/>
        frete</label>
      <br />
      <label>
        <input name="qtd15[]" type="checkbox" value="15m"/>
        seguro de obras artísticas</label>
    </p>
  </div>
    </td>
    </tr>
    <td align="center" class="formu2">
       <input type="submit" name="enviar" value="avancar">
    </td>
    </tr>
  </table>
</form>
</body>
</html>