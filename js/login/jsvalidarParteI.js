$(document).ready( function() {
	$("#form1").validate({
		/* REGRAS DE VALIDAÇÃO DO FORMULÁRIO */
		rules:
			{
				txtNome:
				{
					required: true /* Campo obrigatório */
				},
				idEndereco:
				{
					required: true /* Campo obrigatório */
					   /* No mínimo 5 caracteres */
				},
				txtMunicipio:
				{
					required: true /* Campo obrigatório */
					   /* No mínimo 5 caracteres */
				},
				txtCep:
				{
					required: true /* Campo obrigatório */
		
				},
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
				qtd6:
				{
					required: true /* Campo obrigatório */
				}
		},
		/* DEFINIÇÃO DAS MENSAGENS DE ERRO */
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