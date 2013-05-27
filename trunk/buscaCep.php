<?php
 
//if (isset($_GET['entrada'])) // Pega o valor digitado no primeiro campo
//    echo strtoupper($_GET['entrada']); // exibe o valor convertido em maiúsculo

//$cep = ($_GET['entrada']);
////	$buscacep = @file_get_contents('http://republicavirtual.com.br/web_cep.php?cep='.urlencode($cep).'&formato=query_string');  
////	echo($resultado);
//busca_cep($cep);
//function busca_cep($cep){  
//    $resultado = @file_get_contents('http://republicavirtual.com.br/web_cep.php?cep='.urlencode($cep).'&formato=query_string');  
//echo($resultado);
//	if(!$resultado){  
//        $resultado = "&resultado=0&resultado_txt=erro+ao+buscar+cep";  
//    }  
//    parse_str($resultado, $retorno);   
//    return $retorno;
//}  	




 
$cep = ($_GET['entrada']);
 
$reg = simplexml_load_file("http://cep.republicavirtual.com.br/web_cep.php?formato=xml&cep=" . $cep);
 
$dados['sucesso'] = (string) $reg->resultado;
$dados['rua']     = (string) $reg->tipo_logradouro . ' ' . $reg->logradouro;
$dados['bairro']  = (string) $reg->bairro;
$dados['cidade']  = (string) $reg->cidade;
$dados['estado']  = (string) $reg->uf;
echo json_encode($dados);
 
?>