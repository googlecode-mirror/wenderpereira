<?
error_reporting(0);
ini_set("display_errors", 0 );
?>
<?
function connect2(){
	$host = "localhost:3306";   	//host do mysql
	$user = "root";        //usu�rio mysql
	$pass = "";     		//senha mysql
	$banco = "mapeamento_re";//nome do banco de dados
        $conn = mysqli_connect($host,$user,$pass,$banco) or die(mysql_error());
        return $conn;
}
function close2(){
   $conn->mysqli->close();
}


function tdate($data , $tipo)
{
// de data-br para mysql
if ($tipo == 0) {
	$datatrans = explode('/', $data);
	$data      = "$datatrans[2]-$datatrans[1]-$datatrans[0]";
// de mysql para data-br
}
elseif ($tipo == 1) {
	$datatrans = explode('-' , $data);
	$data      = "$datatrans[2]/$datatrans[1]/$datatrans[0]"; // era 2 1 0
}
elseif ($tipo == 3) {
	$datatrans = explode('-' , $data);
	$data      = "$datatrans[2]/$datatrans[1]/$datatrans[0]"; // era 2 1 0
}
 else {
	// argumento errado, retorna a data intacta (nao modificada)
	return $data;
}
return $data;
}
?>
