$(document).ready( function() {
	$("#form1").validate({
		/* REGRAS DE VALIDA��O DO FORMUL�RIO */
		rules:
			{
				qtd1:
				{
					required: true /* Campo obrigat�rio */
					   /* No m�nimo 5 caracteres */
				},
				qtd2:
				{
					required: true /* Campo obrigat�rio */
					   /* No m�nimo 5 caracteres */
				},
				qtd3:
				{
					required: true /* Campo obrigat�rio */
					   /* No m�nimo 5 caracteres */
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
		
				},
				qtd7:
				{
					required: true /* Campo obrigat�rio */
		
				},
				qtd8:
				{
					required: true /* Campo obrigat�rio */
		
				},
				qtd9:
				{
					required: true /* Campo obrigat�rio */
		
				},
				qtd10:
				{
					required: true /* Campo obrigat�rio */
		
				},
				qtd11:
				{
					required: true /* Campo obrigat�rio */
		
				},
				qtd12:
				{
					required: true /* Campo obrigat�rio */
		
				},
				qtd13:
				{
					required: true /* Campo obrigat�rio */
		
				},
				qtd14:
				{
					required: true /* Campo obrigat�rio */
		
				},
				qtd15:
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

