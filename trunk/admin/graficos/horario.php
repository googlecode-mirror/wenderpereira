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


 $sql = "select Case (HOUR(hora)) 
						WHEN 1 THEN '01:00'
						WHEN 2 THEN '02:00'
						WHEN 3 THEN '03:00'
						WHEN 4 THEN '04:00'
						WHEN 5 THEN '05:00'						
						WHEN 6 THEN '06:00'
						WHEN 7 THEN '07:00'
						WHEN 8 THEN '08:00'
						WHEN 9 THEN '09:00'
						WHEN 10 THEN '10:00'
						WHEN 11 THEN '11:00'
						WHEN 12 THEN '12:00'
						WHEN 13 THEN '13:00'
						WHEN 14 THEN '14:00'
						WHEN 15 THEN '15:00'
						WHEN 16 THEN '16:00'
						WHEN 17 THEN '17:00'
						WHEN 18 THEN '18:00'						
						WHEN 19 THEN '19:00'
						WHEN 20 THEN '20:00'
						WHEN 21 THEN '21:00'
						WHEN 22 THEN '22:00'
						WHEN 23 THEN '23:00'
						WHEN 24 THEN '24:00'
						ELSE '.'
						END as 'intervalo', count(*) as 'acessos'
from historico

group by HOUR(hora);";
	   $Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
	   $i=0;
	   $data = array();
	   while ($array_exibir = mysql_fetch_array($Resultado)) {
		$data[] = array($array_exibir['intervalo'],$array_exibir['acessos']);
		$i++;
	    }

# Create a PHPlot object which will make an 800x400 pixel image:
$p = new PHPlot(800, 420);

# Use TrueType fonts:
//$p->SetDefaultTTFont('./arial.ttf');

# Set the main plot title:
$p->SetTitle('Utilizaчуo do sistema por Hora');

$p->SetPrecisionY(1);

# Select the data array representation and store the data:
$p->SetDataType('text-data');

$p->SetDataValues($data);

# Select the plot type - bar chart:
$p->SetPlotType('linepoints');

# Define the data range. PHPlot can do this automatically, but not as well.
//$p->SetPlotAreaWorld(0, 0, 9, 400);

# Select an overall image background color and another color under the plot:
//$p->SetBackgroundColor('#ffffcc');
//$p->SetDrawPlotAreaBackground(True);
//$p->SetPlotBgColor('#ffffff');

# Draw lines on all 4 sides of the plot:
$p->SetPlotBorderType('full');

# Set a 3 line legend, and position it in the upper left corner:
//$p->SetLegend(array('Acessos'));
//$p->SetLegendWorld(0.1, 95);

# Turn data labels on, and all ticks and tick labels off:
//$p->SetXDataLabelPos('plotdown');
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