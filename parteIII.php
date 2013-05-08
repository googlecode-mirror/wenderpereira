<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Furnarte</title>

<? 
    header("Cache-Control: no-cache, must-revalidate");
	session_start();
	include "conexao.php";
	connect();
?>

<script src="js/jsValidate.js" type="text/javascript"></script>
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
     </style>
     
</head>
<body>

<form id="form1" name="form1" method="post" action="sql\parteIII.php">

<table width="80%" align="center" cellpadding="2" cellspacing="2" style="border:solid 1px #333333;">
      <tr>
        <td colspan="2">
                <div align="center"><strong><em>PARTE III</em></strong>
                        </p>
                            <strong></strong></div>
          <strong><p align="center">SOBRE  OS ARTISTAS RESIDENTES</p></strong>               

		</td>
      </tr>
      <tr>
        <td colspan="2">
        <div>
        <p>
    Os artistas apoiados por programas de residências artísticas podem ser oriundos de diversos países, havendo a possibilidade do artista vir fazer a residência no Brasil, bem como, um artista brasileiro realizar a residência no exterior. Os programas de residências podem não ter um intercâmbio internacional, sendo realizado apenas por artistas brasileiros. Em média, os programas concedem prêmios, bolsas ou outras formas de apoio a um número determinado de artistas para realizarem a residência em um período de tempo pré-estabelecido. O número de artistas apoiados pode variar por programa.
        </p>
    <div>
        </td>
      </tr>
      <tr>
        <td colspan="2">
      <div>
       <label>Quantos artistas foram apoiados em média ao ano?</label>
         <p>
          <label>
          <input type="radio" name="qtd1" <?php if($_POST['qtd1']=="1a") echo "checked";?> value="1a" class="radio" />
          até 5 artistas</label>
          <br />
          <label>
          <input type="radio" name="qtd1" <?php if($_POST['qtd1']=="1b") echo "checked";?> value="1b" class="radio" />
          acima de 5  até 10</label>
          <br />
          <label>
		  <input type="radio" name="qtd1" <?php if($_POST['qtd1']=="1c") echo "checked";?> value="1c" class="radio" />
          acima de 11  até 20</label>
          <br />
          <label>
		  <input type="radio" name="qtd1" <?php if($_POST['qtd1']=="1d") echo "checked";?> value="1d" class="radio" />
          acima de 21  até 30 </label>
          <br />
          <label>
		  <input type="radio" name="qtd1" <?php if($_POST['qtd1']=="1e") echo "checked";?> value="1e" class="radio" />
          acima de 31 até 50</label>
          <br />
          <label>
          <input type="radio" name="qtd1" <?php if($_POST['qtd1']=="1f") echo "checked";?> value="1f" class="radio" />
          acima de 51 até 80</label>
          <br />  <label>
		  <input type="radio" name="qtd1" <?php if($_POST['qtd1']=="1g") echo "checked";?> value="1g" class="radio" />
          acima de 81 até 120 </label>
          <br />  <label>
          <input type="radio" name="qtd1" <?php if($_POST['qtd1']=="1h") echo "checked";?> value="1h" class="radio" />
          acima de 120 artistas</label>
        </p>
      </div>
      </td>
      </tr>
      <tr>
      <td colspan="2">
      <div>
        <label>O número de artistas apoiados foi o mesmo em todas os programas( marque apenas 1 item)?</label>
          <br/>
          <p>
          <label>
          <input type="radio" name="qtd2" <?php if($_POST['qtd2']=="2a") echo "checked";?> value="2a" class="radio" />
          Sim</label>
          <br />
          <label>
          <input type="radio" name="qtd2" <?php if($_POST['qtd2']=="2b") echo "checked";?> value="2b" class="radio" />
          Não, foi aumentando com o tempo</label>
          <br />
          <label>
          <input type="radio" name="qtd2" <?php if($_POST['qtd2']=="2c") echo "checked";?> value="2c" class="radio" />
          Não, foi diminuindo com o tempo</label>
          <br />
          <label>
          <input type="radio" name="qtd2" <?php if($_POST['qtd2']=="2d") echo "checked";?> value="2d" class="radio" />
          Não, tiveram anos com um número maior e outros com um número menor de montantes concedidos</label>
          <br />
        </p>
        </div>
        </td>
      </tr>
      <tr>
        <td colspan="2">
        <div>
        <label>Qual o período de duração da residência (marque apenas 1 item)* ?</label>
          <p>
            <label>
            <input type="radio" name="qtd3" <?php if($_POST['qtd3']=="3a") echo "checked";?> value="3a" class="radio" />
            até 20 dias</label>
            <br />
            <label>
            <input type="radio" name="qtd3" <?php if($_POST['qtd3']=="3b") echo "checked";?> value="3b" class="radio" />
            de 21 até 30 dias ( cerca de um mês)</label>
            <br />
            <label>
            <input type="radio" name="qtd3" <?php if($_POST['qtd3']=="3c") echo "checked";?> value="3c" class="radio" />
            de 31 até 60 dias ( cerca de dois meses)</label>
            <br />
            <label>
            <input type="radio" name="qtd3" <?php if($_POST['qtd3']=="3d") echo "checked";?> value="3d" class="radio" />
            de 61 até 90 dias ( cerca de três meses)</label>
            <br />
            <label>
            <input type="radio" name="qtd3" <?php if($_POST['qtd3']=="3e") echo "checked";?> value="3e" class="radio" />
            de 91 até 180 dias ( cerca de seis meses)</label>
            <br />
            <label>
            <input type="radio" name="qtd3" <?php if($_POST['qtd3']=="3f") echo "checked";?> value="3f" class="radio" />
            de 181 até 365 dias ( cerca de um ano)</label>
            <br />
            <label>
            <input type="radio" name="qtd3" <?php if($_POST['qtd3']=="3g") echo "checked";?> value="3g" class="radio" />
             de 1 ano até 2 anos</label>
            <br />
            <label>
            <input type="radio" name="qtd3" <?php if($_POST['qtd3']=="3h") echo "checked";?> value="3h" class="radio" />
            acima de 2 anos</label>
            <br/>
            <label> Qual período?</label>
            <input name="qtd3quais" value="<?php echo $_POST[qtd3quais];?>" type="text" />
            <br />
		</p>
	  </div>
      </td>
      </tr>
      <tr>
      <td colspan="2">
      <div>
      <label>Em relação à nacionalidade dos artistas contemplados(marque apenas 1 item)?*</label>
      <p>
      <label>
      <input type="radio" name="qtd4" <?php if($_POST['qtd4']=="4a") echo "checked";?> value="4a" class="radio" />
      apenas brasileiros</label>
      <br />
      <label>
      <input type="radio" name="qtd4" <?php if($_POST['qtd4']=="4b") echo "checked";?> value="4b" class="radio" />
        apenas estrangeiros</label>
      <br />
      <label>
      <input type="radio" name="qtd4" <?php if($_POST['qtd4']=="4c") echo "checked";?> value="4c" class="radio" />
        ambos</label>
      <br />
    </p>
    </div>
        </td>
      </tr>
      <tr>
        <td colspan="2">
             <div>
        <label>Existe a possibilidade de intercâmbio entre artistas brasileiros e 
        internacionais nos programas de residências artísticas(marque apenas 1 item)?*</label>
        <p>
          <label>
	      <input type="radio" name="qtd5" <?php if($_POST['qtd5']=="5a") echo "checked";?> value="5a" class="radio" />
           Sim</label>
          <br />
          <label>
          <input type="radio" name="qtd5" <?php if($_POST['qtd5']=="5b") echo "checked";?> value="5b" class="radio" />
            Não</label>
          <br />
        </p>
        </div>   
        
        </td>
      </tr>
      <tr>
        <td colspan="2">
     <div>
        <label>Quanto à presença de artistas estrangeiros no Brasil e/ou
         artistas brasileiros no exterior que podem ser contemplados pelos programas(marque apenas 1 item)*</label>
        <p>
          <label>
            <input type="radio" name="qtd6" <?php if($_POST['qtd6']=="6a") echo "checked";?> value="6a" class="radio" />
            não há  residências em nível internacional</label>
          <br />
          <label>
            <input type="radio" name="qtd6" <?php if($_POST['qtd6']=="6b") echo "checked";?> value="6b" class="radio" />
            o artista estrangeiro pode ser contemplado para vir fazer residência no Brasil</label>
          <br />
          <label>
            <input type="radio" name="qtd6" <?php if($_POST['qtd6']=="6c") echo "checked";?> value="6c" class="radio" />
            o artista brasileiro pode ser contemplado para fazer residência no exterior</label>
          <br />
          <label>
            <input type="radio" name="qtd6" <?php if($_POST['qtd6']=="6d") echo "checked";?> value="6d" class="radio" />
            o artista brasileiro pode fazer residência no exterior e o artista estrangeiro fazer residência no Brasil</label>
          <br />
         </p>
        </div>   
        </td>
      </tr>
      <tr>
        <td colspan="2">
        <div>
        <label>Quanto à presença de artistas estrangeiros no Brasil e/ou 
        artistas brasileiros no exterior que podem ser contemplados pelos programas(marque apenas 1 item)*</label>
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
   	  	  <input name="qtd7[]" type="checkbox" value="7m" />
          <label>Qual?</label>
          <input name="qtd7quais" value="<?php echo $_POST[qtd7quais];?>" type="text" />
           </p>
          </div>
       </td>
      </tr>
      <tr>
        <td width="25%">&nbsp;</td>
        <td width="75%">
        <input type="submit" name="cadastrar" value="avancar" class="botao" 
      onKeyPress="return handleEnter(this, event)">
        </td>
      </tr>
        <br/>
    <tr>
      <td colspan="2" align="center" class="formu2">&nbsp;</td>
    </tr>
  </table>

</form>

</body>
</html>