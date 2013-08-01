$(document).ready( function() {
	$("#form1").validate({
		/* REGRAS DE VALIDA��O DO FORMUL�RIO */
		rules:
			{
				login:
				{
					required: true ,/* Campo obrigat�rio */
					minlength: 3
				},
				senha:
				{
					required: true, /* Campo obrigat�rio */
					minlength: 3    /*No m�nimo 5 caracteres */
				},
				senha1:
				{
					required: true, /* Campo obrigat�rio */
					minlength: 3     /* No m�nimo 5 caracteres */
				},
				email:
				{
				required: true, /* Campo obrigat�rio */
                    email: true     /* Dever� ser um email v�lido */
			}	
		},
		/* DEFINI��O DAS MENSAGENS DE ERRO */
		messages:{
			login:
			{
				required: "*",
				minlength: 3
			},
			senha:{
				required: "*",
				minlength: "3"
			},
			senha1:{
				required: "*",
				minlength: "3"
			},
			email:{
				required: "*",
				email: "*"
			}
		}
	});
});