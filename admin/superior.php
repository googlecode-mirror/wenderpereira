<? 	@session_start(); // Inicializa a sess�o
     include "header.php";
	 include "conexao.php";
	 connect();
	 	 
?>

<script>
$("input[@name=login]").blur(function(){
var login = $(".login").val();

$.post("login_request.php",{login: login},

function(data){

var retorno = parseInt($(data, 'login').text());

if(retorno) {

alert("login encontrado");

// mais a��es podem ser

// adicionadas aqui para o login

// encontrado

} else {

alert("login n�o encontrado");

// mais a��es podem ser

// adicionadas aqui para o login

// n�o encontrado

}

});

});
</script>

<html>
<head>
<title>Funarte</title>
<base target="conte�do">
</head>

<body topmargin="0" bgcolor="<?  echo $cor_pagina ?>">

</body>
</html>
