$(document).ready( function() {
	$("#form1").validate({
		/* REGRAS DE VALIDAÇÃO DO FORMULÁRIO */
		rules:
			{
				txtNome:
				{
					required: true /* Campo obrigatório */
				},
				txtCargoInstituicao:
				{
					required: true /* Campo obrigatório */
			}
		},
		/* DEFINIÇÃO DAS MENSAGENS DE ERRO */
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