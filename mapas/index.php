<?php 
	include "../conexao.php";
	connect();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>GMAP</title>
     <script src="http://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="js/gmaps.js" type="text/javascript"></script>
        <script src="js/markers.js" type="text/javascript"></script>
        <link href="css/main.css" rel="stylesheet" />
		
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    </head>
    <body>
        <div class="container_12">
            <div class="grid_12">
                <div class="map" id="map" style="height: 450px; width: 100%;"></div>
            </div>
           <div class="grid_10">
                <div class="grid_4 push_4">
                    <br />
					
					<select name="cmbUnidadeFederativa" size="1" id="idcmbUnidadeFederativa">
					  <option value="AC">AC</option>
					  <option value="AL">AL</option>
					  <option value="AM">AM</option>
					  <option value="AP">AP</option>
					  <option value="BA">BA</option>
					  <option value="CE">CE</option>
					  <option value="DF">DF</option>
					  <option value="ES">ES</option>
					  <option value="GO">GO</option>
					  <option value="MA">MA</option>
					  <option value="MG">MG</option>
					  <option value="MS">MS</option>
					  <option value="MT">MT</option>
					  <option value="PA">PA</option>
					  <option value="PB">PB</option>
					  <option value="PE">PE</option>
					  <option value="PI">PI</option>
					  <option value="PR">PR</option>
					  <option value="RJ">RJ</option>
					  <option value="RN">RN</option>
					  <option value="RO">RO</option>
					  <option value="RR">RR</option>
					  <option value="RS">RS</option>
					  <option value="SC">SC</option>
					  <option value="SE">SE</option>
					  <option value="SP">SP</option>
					  <option value="TO">TO</option>
					  </select>
					<br />
				    <br />
                </div>
            </div>
        <script>
            $(function(){
                window.onload = function () 
			{ //Definir o centro do mapa [endere�o + elm div]
				<?
					$sql = "SELECT * FROM mapeamentoparteI where unidadefederativa='rj';";
						$Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
						?>
						initMap('PR - Brasil', 'map');
						<?
						 while ($array_exibir = mysql_fetch_array($Resultado)) {
						
							?>
							addMarker('<?echo str_replace("'","",$array_exibir['endereco']);?><?echo ($array_exibir['unidadefederativa']); ?>','<img src="icons/m1.png" /><br/><b>Instituição: </b><?echo ($array_exibir['nomeintituicao']); ?><br/><b>Endereço: </b><?echo ($array_exibir['endereco']); ?><br/><b>Municipio: </b><?echo ($array_exibir['municipio']); ?><br/><b>CNPJ: </b><?echo ($array_exibir['cnpj']); ?><br/><b> Email:</b> <?echo ($array_exibir['email']); ?><br/><b>Telefone:</b> <?echo ($array_exibir['telefone']); ?>');
							<?
						}
					?>
			   }
            })
        </script>

    </body>
</html>

 