<?
error_reporting(0);
ini_set("display_errors", 0 );
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
	<frameset framespacing="0" border="0" frameborder="0" rows="72,*">
	<frame name="faixa" scrolling="no" noresize target="conteudo" src="../livre/superior.php">
	<img src="../imagebox/header.jpg" alt="Intranet Funarte" name="n00000001" width="100%" border="0" id="n00000001" />

	<? include "mapas.php"; ?>
	
 </frameset>
  <noframes>
  <body>

  <p>Esta página usa quadros mas seu navegador não aceita quadros.</p>
  </body>
  </noframes>
</frameset>
    </body>

</html>

 