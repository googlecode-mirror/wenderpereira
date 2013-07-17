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
		$data[] = array($array_exibir['concluido'],$array_exibir['andamento']);
		$i++;
	    }

# Create a PHPlot object which will make an 800x400 pixel image:
$p = new PHPlot(800, 600);

# Use TrueType fonts:
//$p->SetDefaultTTFont('./arial.ttf');

# Set the main plot title:
$p->SetTitle('Localizações dos usuarios na pesquisa');

$p->SetPrecisionY(1);

# Select the data array representation and store the data:
//para  grafico pizza
$p->SetDataType('text-data-single');

//$p->SetDataType('text-data');

$p->SetDataValues($data);


# Select the plot type - bar chart:
$p->SetPlotType('pie');

# Define the data range. PHPlot can do this automatically, but not as well.
//$p->SetPlotAreaWorld(0, 0, 9, 400);

# Select an overall image background color and another color under the plot:
//$p->SetBackgroundColor('#ffffcc');
//$p->SetDrawPlotAreaBackground(True);
//$p->SetPlotBgColor('#ffffff');

# Draw lines on all 4 sides of the plot:
$p->SetImageBorderType('plain');

# Set a 3 line legend, and position it in the upper left corner:
 $p->SetLegend(array('-1=cadastrado','0=Resposavel pelo Preenchimento','1=Identificação da instituição','2=Programas','3=Artistas','4=Projetos'));
//$p->SetLegendWorld(0.1, 95);

# Turn data labels on, and all ticks and tick labels off:
//$p->SetXDataLabelPos('plotdown');
 //$p->SetXLabelFontSize(2);
 //$p->SetAxisFontSize(2);
 //legenda do lado esquerdo
 //$p->SetLegendPixels(5, 5);

 $p->SetXTickPos('none');
//$p->SetXTickLabelPos('none');
//$p->SetYTickPos('none');
//$p->SetYTickLabelPos('none');
$p->SetYDataLabelPos('plotin');

# Generate and output the graph now:
$p->DrawGraph();
?>


