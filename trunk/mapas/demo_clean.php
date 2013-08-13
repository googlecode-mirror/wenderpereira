<?php 
	include "../conexao.php";
	connect();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>CEP</title>
        <script src="http://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="js/gmaps.js" type="text/javascript"></script>
        <script src="js/markers.js" type="text/javascript"></script>
        <link href="css/main.css" rel="stylesheet" />
    </head>
    <body>
         <div id="map" style="height:800px;width:99%;"></div>
			
        <script>
            $(function(){
			   window.onload = function(){
				   //Definir o centro do mapa [endereço + elm div]
				   initMap('General Francisco Glicério, 500, Suzano, SP','map');
				   //Adicionar marcadores  [endereço + descricao html)
				   addMarker('Doutor Felicio Camargo, 720, Suzano - SP','');
				   addMarker('Av Paulo Sampaio, 557, Suzano - SP','');
				   addMarker('Av Armando Salles de Oliveira, 636, Suzano - SP','');
				   addMarker('Al Cunha Bueno, 1162, Suzano - SP','');
				   addMarker('Rua Benjamin Constant, 926, Suzano - SP','');
				   addMarker('Rua Nuno,mons, 380, Suzano - SP','');
				   addMarker('Av Francisco Marengo, 2190, Suzano - SP','');
				   addMarker('Rua Benjamin Constant, 287, Suzano - SP','');
				   addMarker('Rua Guilherme Garijo, 2025, Suzano - SP','');
				   addMarker('Rua Agulhas Negras, 105, Suzano - SP','');
				   addMarker('General Francisco Glicerio, 1500, Suzano - SP','');
				   addMarker('Rua Valdecir Ferreira Reis, 600, Suzano - SP','');
				   addMarker('Edmilson R Marcelino, 1011, Suzano - SP','');
				   addMarker('Rua Abdo Rachid, 152, Suzano - SP','');
				   addMarker('Rua Biotonico, 894, Suzano - SP','');
				   addMarker('Av Armando Salles de Oliveira, 1200, Suzano - SP','');
				   addMarker('Rua Amélia Guerra, 218, Suzano - SP','');
				   addMarker('Rua Vinte e Sete de Outubro, 125, Suzano - SP','');
				   addMarker('Av Pres. Kennedy, Suzano - SP','');
			   }
            })
        </script>		
    </body>
</html>