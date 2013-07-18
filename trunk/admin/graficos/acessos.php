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


 $sql = "SELECT data,COUNT(data) as total FROM criacao_literaria.historico where acao='login' GROUP BY data;";
	   $Resultado = mysql_query($sql) or die("Erro: " . mysql_error());
	   $i=0;
	   $data = array();
	   while ($array_exibir = mysql_fetch_array($Resultado)) {
		$data[] = array($array_exibir['data'],$array_exibir['total']);
		$i++;
	    }

# Create a PHPlot object which will make an 800x400 pixel image:
$p = new PHPlot(800, 400);

# Use TrueType fonts:
//$p->SetDefaultTTFont('./arial.ttf');

# Set the main plot title:
$p->SetTitle('Quantidade de logins por data');

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