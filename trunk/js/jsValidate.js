function Mascara(formato, keypress, objeto){
campo = eval (objeto);

// cep
if (formato=='cep'){
	separador = '-';
	conjunto1 = 5;
if (campo.value.length == conjunto1){
	campo.value = campo.value + separador;}
}

// cpf
if (formato=='cpf'){
	separador1 = '.'; 
	separador2 = '-'; 
	conjunto1 = 3;
	conjunto2 = 7;
	conjunto3 = 11;
if (campo.value.length == conjunto1)
  {
  campo.value = campo.value + separador1;
  }
if (campo.value.length == conjunto2)
  {
  campo.value = campo.value + separador1;
  }
if (campo.value.length == conjunto3)
  {
  campo.value = campo.value + separador2;
  }
}

// nascimento
if (formato=='nascimento'){
	separador = '/'; 
	conjunto1 = 2;
	conjunto2 = 5;
if (campo.value.length == conjunto1)
  {
  campo.value = campo.value + separador;
  }
if (campo.value.length == conjunto2)
  {
  campo.value = campo.value + separador;
  }
}
// dataexp
if (formato=='dataexp'){
	separador = '/'; 
	conjunto1 = 2;
	conjunto2 = 5;
if (campo.value.length == conjunto1)
  {
  campo.value = campo.value + separador;
  }
if (campo.value.length == conjunto2)
  {
  campo.value = campo.value + separador;
  }
}
// telefone
if (formato=='telefone'){

if (campo.value.length == 0)
campo.value = '(' + campo.value;

if (campo.value.length == 3)
campo.value = campo.value + ') ';

if (campo.value.length == 9)
campo.value = campo.value + '-';
}
}

function SoNumero() {
	if (event.keyCode<48 || event.keyCode>57)
		event.returnValue = false;
	if (event.keyCode==13)
		event.returnValue = true;
}
//DESABILITA O ENTER ----------------------------------------------------------------------------
function handleEnter (field, event) {
        var keyCode = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;
        if (keyCode == 13) {
            var i;
            for (i = 0; i < field.form.elements.length; i++)
                if (field == field.form.elements[i])
                    break;
            i = (i + 1) % field.form.elements.length;
            field.form.elements[i].focus();
            return false;
        }
        else
        return true;
    }      
//FIM DESABILITA O ENTER ------------------------------------------------------------------------
function send(codigo){
	document.form1.cod.value=codigo;
	document.form1.submit();
}
function validateEmail_(form_id,email) {
   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   var address = document.forms[form_id].elements[email].value;
   if(reg.test(address) == false) {
       alert('Email invalido');
      return false;
   }
}
function validaCheckbox(name) {
    var frm = document.form1;
    //Percorre os elementos do formul�rio 
    for(i=0; i < frm.length; i++){
        //Verifica se o elemento do formul�rio corresponde a um checkbox e se � o checkbox desejado
        if (frm.elements[i].type == "checkbox" &&  frm.elements[i].name == name ) {
                //Verifica se o checkbox foi selecionado
                if(frm.elements[i].checked) {
                    alert("Exite ao menos um checkbox selecionado!");
                    return true;
                }                    
        }    
    } 
    alert("Nenhum checkbox foi selecionado!");
    return false;
  }
		

