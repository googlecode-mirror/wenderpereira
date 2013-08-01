$(document).ready( function() {
	$("#form1").validate({
		/* REGRAS DE VALIDA��O DO FORMUL�RIO */
		rules:
			{
				txtNome:
				{
					required: true /* Campo obrigat�rio */
				},
				idEndereco:
				{
					required: true /* Campo obrigat�rio */
					   /* No m�nimo 5 caracteres */
				},
				txtMunicipio:
				{
					required: true /* Campo obrigat�rio */
					   /* No m�nimo 5 caracteres */
				},
				txtCep:
				{
					required: true /* Campo obrigat�rio */
		
				},
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
				qtd6:
				{
					required: true /* Campo obrigat�rio */
				}
		},
		/* DEFINI��O DAS MENSAGENS DE ERRO */
		messages:{
			txtNome:{
				required: "*"
			},
			idEndereco:{
				required: "*"
				},
			txtMunicipio:{
				required: "*"
				},
			txtCep:{
				required: "*"
				},
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
			qtd6:{
				required: "*"
			}
		}
	});
});