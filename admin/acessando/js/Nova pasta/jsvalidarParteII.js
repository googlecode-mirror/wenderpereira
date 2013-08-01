$(document).ready( function() {
	$("#form1").validate({
		/* REGRAS DE VALIDAÇÃO DO FORMULÁRIO */
		rules:
			{
				qtd1:
				{
					required: true /* Campo obrigatório */
					   /* No mínimo 5 caracteres */
				},
				qtd2:
				{
					required: true /* Campo obrigatório */
					   /* No mínimo 5 caracteres */
				},
				qtd3:
				{
					required: true /* Campo obrigatório */
					   /* No mínimo 5 caracteres */
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
		
				},
				qtd7:
				{
					required: true /* Campo obrigatório */
		
				},
				qtd8:
				{
					required: true /* Campo obrigatório */
		
				},
				qtd9:
				{
					required: true /* Campo obrigatório */
		
				},
				qtd10:
				{
					required: true /* Campo obrigatório */
		
				},
				qtd11:
				{
					required: true /* Campo obrigatório */
		
				},
				qtd12:
				{
					required: true /* Campo obrigatório */
		
				},
				qtd13:
				{
					required: true /* Campo obrigatório */
		
				},
				qtd14:
				{
					required: true /* Campo obrigatório */
		
				},
				qtd15:
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
			qtd6:{
				required: "*"
				},
			qtd7:{
				required: "*"
				},
			qtd8:{
				required: "*"
				},
			qtd9:{
				required: "*"
				},
			qtd10:{
				required: "*"
				},
			qtd11:{
				required: "*"
				},
			qtd12:{
				required: "*"
				},	
			qtd13:{
				required: "*"
				},	
			qtd14:{
				required: "*"
				},					
			qtd15:{
				required: "*"
			}
		}
	});
});

