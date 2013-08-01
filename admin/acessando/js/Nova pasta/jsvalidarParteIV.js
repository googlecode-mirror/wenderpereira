$(document).ready( function() {
	$("#form1").validate({
		/* REGRAS DE VALIDAÇÃO DO FORMULÁRIO */
		rules:
			{
				qtd1:
				{
					required: true /* Campo obrigatório */
				},
				qtd2:
				{
					required: true /* Campo obrigatório */
				},
				qtd3:
				{
					required: true /* Campo obrigatório */
				},
				qtd4:
				{
					required: true /* Campo obrigatório */
				},
				qtd5:
				{
					required: true /* Campo obrigatório */
				},
				dec1:
				{
				required: true /* Campo obrigatório */
				},
				dec2:
				{
					required: true /* Campo obrigatório */
				},
				dec3:
				{
					required: true /* Campo obrigatório */
			}
		},
		/* DEFINIÇÃO DAS MENSAGENS DE ERRO */
		messages:{
			qtd1:{
				required: "*"
			},
			qtd2:{
				required: "*"
			},
			qtd3:{
				required: "*"
			},
			qtd4:{
				required: "*"
			},	
			qtd5:{
				required: "*"
			},
			dec1:{
				required: "*"
			},
			dec2:{
				required: "*"
			},			
			dec3:{
				required: "*"
			}
		}
	});
});