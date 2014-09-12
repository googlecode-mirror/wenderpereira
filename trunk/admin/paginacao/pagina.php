<?
//Conexão ao banco de dados 
include "../conexao.php";
connect();

//Sentença sql (sem limit) 
$_pagi_sql = "select distinct p.codigo, date_format(data, '%d/%m/%Y') as 'data', nome_fantasia, caminho
		 from com_proposta p, adm_clientes c where p.cliente = c.cod order by p.codigo"; 

//quantidade de resultados por página (opcional, por padrão 20) 
$_pagi_quantos = 10; 

//Incluímos o script de paginação. Este já executa a consulta automaticamente 
include("paginator.inc.php"); 

//Lemos e escrevemos os registros da página atual 
while($row = mysql_fetch_array($_pagi_result)){ 
    echo $row['codigo']."<br />"; 
} 

//Incluimos a barra de navegação 
echo"<p>".$_pagi_navegação."</p>"; 
?>