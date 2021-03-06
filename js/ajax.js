// pegando o HTTP Object
function getHTTPObject(){
 
    if (window.ActiveXObject)
    {
        return new ActiveXObject("Microsoft.XMLHTTP"); // IE
    }
    else if (window.XMLHttpRequest)
    {
        return new XMLHttpRequest(); // Outros Navegadores
    }
    else{
        alert("Seu Navegador não suporta AJAX."); // Navegadores antigos
        return null;
    }
 
}
 
// Mudando o valor do campo 'saida'
function setOutput(){
 
    if (httpObject.readyState == 4)
    {
		//original
        //document.getElementById('saida').value = httpObject.responseText;
		if ( httpObject.responseText != "")
		{
		window.document.getElementById('erro').innerHTML = (httpObject.responseText);
		}
    }
}
 
// Implementando a função que envia os dados digitados no primeiro campo para o PHP
function enviaKey(){
 
    httpObject = getHTTPObject();
 
    if (httpObject != null)
    {
        httpObject.open("GET", "consulta_login_tempo_real.php?entrada="+document.getElementById('login').value, true);
        httpObject.send(null);
        httpObject.onreadystatechange = setOutput;
    }
 
}

function setOutput1(){
 
    if (httpObject.readyState == 4)
    {
		//original
        document.getElementById('email').value = httpObject.responseText;

    }
}

function enviaKey1(){
 
    httpObject = getHTTPObject();
 
    if (httpObject != null)
    {
        httpObject.open("GET", "consulta_login_tempo_real.php?entrada="+document.getElementById('login').value, true);
        httpObject.send(null);
        httpObject.onreadystatechange = setOutput1;
    }
 
} 
//--------------------------------------------------------------------------------------------------------------------------
//Pesquisa CEP
function setOutputCEP(){
    if (httpObject.readyState == 4)
    {
		var json =  JSON.parse(httpObject.responseText);
		document.getElementById('idFrmEndereco').value = json.rua;
		document.getElementById('ifFrmMunicipio').value = json.bairro;
	}
}
function enviaKeyCEP(){
    httpObject = getHTTPObject();
    if (httpObject != null)
    {
        httpObject.open("GET", "buscacep.php?entrada="+document.getElementById('idFrmCep').value, true);
        httpObject.send(null);
        httpObject.onreadystatechange = setOutputCEP;
    }
} 
//--------------------------------------------------------------------------------------------------------------------------
 

 
 

var httpObject = null;