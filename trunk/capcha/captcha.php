<?php

session_start();
header("Content-type: image/jpeg"); 
function captcha($largura, $altura, $tamanho_fonte, $quantidade_letras) {
    $imagem = imagecreate($largura, $altura);
    // COLOQUE ESTE ARQUIVO:  Comic_Sans_MS_Bold.ttf NA PASTA DESTE SCRIPT. PODE SER OUTRA FONTE
    $fonte = "arial.ttf"; 
    $preto = imagecolorallocate($imagem, 0, 0, 0);
    $branco = imagecolorallocate($imagem, 255, 255, 255);   
    $palavra = substr(str_shuffle("AaBbCcDdEeFfGgHhIiJjKkLlMmNnPpQqRrSsTtUuVvYyXxWwZz23456789"), 0, ($quantidade_letras));
   //COLOCA CAPCHA GERADO NA CESSÃO, DEPOIS SÓ CHAMAR $_SESSION["palavra"] PARA OBTER O CAPTCHA
    $_SESSION["palavra"] = $palavra;
    for ($i = 1; $i <= $quantidade_letras; $i++) {
        imagettftext($imagem, $tamanho_fonte, rand(-6, 6), ($tamanho_fonte * $i), ($tamanho_fonte + 3), $branco, $fonte, substr($palavra, ($i - 1), 1)); 
    }
    imagejpeg($imagem); 
    imagedestroy($imagem);
}

//ALTERE ESSES PARAMETROS DE ACORDO COM SEU GOSTO
$largura = 56;
$altura = 22;
$tamanho_fonte = 13;
$quantidade_letras = 3;

//GERA O CAPTCHA
captcha($largura, $altura, $tamanho_fonte, $quantidade_letras);
?>


