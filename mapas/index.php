﻿<?php 
	include "conexao.php";
	connect();
?>
<?
if(empty($_POST[cmbUnidadeFederativa])) 
  {
       if(empty($_GET["m"])) {
       }else{
       $unidadeFederativa = ($_GET["m"]);
      }
  }
  else{
     $unidadeFederativa = ( $_POST[cmbUnidadeFederativa]);
      
 }
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
        <form name="form1" id="form1" method="post"  action="index.php">
        <div class="container_12">
            <div class="grid_12">
                <div class="map" id="map" style="height: 550px; width: 100%;"></div>
            </div>
           <div class="grid_10">
                <div class="grid_4 push_4">
                    <br />
					<select name="cmbUnidadeFederativa" size="1" id="idcmbUnidadeFederativa">
                        <option value=""><? echo $unidadeFederativa ?></option>
						<?
						 $sql = "SELECT  
      unidadefederativa,
      COUNT(unidadefederativa) as total
FROM 
mapeamentoparteI,
usuarios
WHERE usuarios.login = mapeamentoparteI.id_usuario
and concluido = '4'
GROUP by
     unidadefederativa ORDER BY total desc";
						   $Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
						   $i=0;
						   $data = array();
						   while ($array_exibir = mysql_fetch_array($Resultado)) 
						   {
							?><option value="<?echo $array_exibir['unidadefederativa']?>"><? echo $array_exibir['unidadefederativa']?> Total:<? echo $array_exibir['total']?></option><?
							$i++;
						   }
						?>
						
					  </select>&nbsp;
                    <br />
                   <!-- <input id="Text2" type="text" />-->
				    <button type="submit" name="buscar" value="buscar">Buscar</button>
                    <br />
                </div>
                </div>
        <script>
            $(function(){
                window.onload = function () 
			{ //Definir o centro do mapa [endere�o + elm div]
				<?
					$sql = "SELECT * FROM mapeamentopartei where unidadefederativa='$unidadeFederativa';";
						$Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
						?>
						initMap('<? echo $unidadeFederativa ?> - Brasil', 'map');
						<?
						 while ($array_exibir = mysql_fetch_array($Resultado)) {
						
							?>
							addMarker('<?echo str_replace("'","",$array_exibir['endereco']);?><?echo ($array_exibir['unidadefederativa']); ?>','<img src="icons/m2.png" /><br/><b>Instituição: </b><?echo ($array_exibir['nomeintituicao']); ?><br/><b>Endereço: </b><?echo ($array_exibir['endereco']); ?><br/><b>Municipio: </b><?echo ($array_exibir['municipio']); ?><br/><b>CNPJ: </b><?echo ($array_exibir['cnpj']); ?><br/><b> Email:</b> <?echo ($array_exibir['email']); ?><br/><b>Telefone:</b> <?echo ($array_exibir['telefone']); ?>');
							<?
						}
					?>
			   }
            })
        </script>
       </form>

    </body>
</html>

 