$(document).ready( function() {
	$("#form1").validate({
		/* REGRAS DE VALIDAÇÃO DO FORMULÁRIO */
		rules:
			{
				login:
				{
					required: true ,/* Campo obrigatório */
					minlength: 6
				},
				senha:
				{
					required: true, /* Campo obrigatório */
					minlength: 6    /*No mínimo 5 caracteres */
				},
				senha1:
				{
					required: true, /* Campo obrigatório */
					minlength: 3     /* No mínimo 5 caracteres */
				},
				email:
				{
				required: true, /* Campo obrigatório */
                    email: true     /* Deverá ser um email válido */
			}	
		},
		/* DEFINIÇÃO DAS MENSAGENS DE ERRO */
		messages:{
			login:
			{
				required: "*",
				minlength: 6
			},
			senha:{
				required: "*",
				minlength: "<6"
			},
			senha1:{
				required: "*",
				minlength: "<6"
			},
			email:{
				required: "*",
				email: "*"
			}
		}
	});
});