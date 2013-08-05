<?php
# PHPlot Demo
# 2009-12-01 ljb
# For more information see http://sourceforge.net/projects/phplot/

# Load the PHPlot class library:
require_once '../phplot/phplot.php';

# Define the data array: Label, the 3 data sets.
# Year,  Features, Bugs, Happy Users:

     include "../conexao.php";
      connect();


 $sql = "SELECT hora,concluido,COUNT(concluido) as andamento
		FROM criacao_literaria.usuarios  
		WHERE idusuario > 100 GROUP BY concluido;";
	   $Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
	   $i=0;
	   $data = array();
	   while ($array_exibir = mysql_fetch_array($Resultado)) {
		$data[] = array($array_exibir['intervalo'],$array_exibir['acessos']);
		$i++;
	    }

# Create a PHPlot object which will make an 800x400 pixel image:
$p = new PHPlot(800, 420);

$p->SetTitle('Utilizaчуo do Servidor por Hora');

$p->SetPrecisionY(1);

# Select the data array representation and store the data:
$p->SetDataType('text-data');

$p->SetDataValues($data);

# Select the plot type - bar chart:
$p->SetPlotType('linepoints');
$p->SetPlotBorderType('full');
 $p->SetXLabelFontSize(2);
 $p->SetAxisFontSize(2);

 $p->SetXTickPos('none');
//$p->SetXTickLabelPos('none');
//$p->SetYTickPos('none');
//$p->SetYTickLabelPos('none');
$p->SetYDataLabelPos('plotin');

# Generate and output the graph now:
$p->DrawGraph();
?>