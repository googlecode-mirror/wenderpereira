$(document).ready( function() {
	$("#form1").validate({
		/* REGRAS DE VALIDA��O DO FORMUL�RIO */
		rules:
			{
				txtNome:
				{
					required: true /* Campo obrigat�rio */
				},
				txtCargoInstituicao:
				{
					required: true /* Campo obrigat�rio */
			}
		},
		/* DEFINI��O DAS MENSAGENS DE ERRO */
		messages:{
			txtNome:{
				required: "*"
			},
			txtCargoInstituicao:{
				required: "*"
			}
		}
	});
});