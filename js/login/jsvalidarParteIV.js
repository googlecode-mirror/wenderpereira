$(document).ready( function() {
	$("#form1").validate({
		/* REGRAS DE VALIDA��O DO FORMUL�RIO */
		rules:
			{
				qtd1:
				{
					required: true /* Campo obrigat�rio */
				},
				qtd2:
				{
					required: true /* Campo obrigat�rio */
				},
				qtd3:
				{
					required: true /* Campo obrigat�rio */
				},
				qtd4:
				{
					required: true /* Campo obrigat�rio */
				},
				qtd5:
				{
					required: true /* Campo obrigat�rio */
				},
				dec1:
				{
				required: true /* Campo obrigat�rio */
				},
				dec2:
				{
					required: true /* Campo obrigat�rio */
				},
				dec3:
				{
					required: true /* Campo obrigat�rio */
			}
		},
		/* DEFINI��O DAS MENSAGENS DE ERRO */
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