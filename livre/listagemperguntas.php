<? 
include "header.php"; 
include "../conexao2.php";
$conn = connect2();
 @session_start(); // Inicializa a sess�o
?>
<form name="form1" id="form1" method="post" action="dao/usuarioinsert.php">
		<legend><H4><i class="icon-shopping-cart"></i> PERGUNTAS</h4></legend>
		<? 
		if(empty($_GET["consulta"])) {
		   $consulta = 0;
		}else{
			$consulta = ($_GET["consulta"]);
		}
		?>
		<label>Refinar Consulta</label>
		<select class="validate[required]" name="cmbfornecedor" onchange="location.href = 'listagemperguntas.php?consulta=' + this.value;"
					id="Select1">
					<option value="">
					
					</option>
					<option value="01">
					Parte 1
					</option>
					<option value="02">
					Parte 2
					</option>
					<option value="03">
					Parte 3
					</option>
					
		</select>
		<?
		$sqlResultadoprodutospedido = "SELECT 
										vpr.id_parte,
										vpr.id_pergunta,
										id_resposta,
										vpr.respostas,
										vpr.valores,
										vpr.pergunta,
										COUNT(*) as total
										FROM 
										mapeamento_re.viewusuarioconcluido vwrcon,
										viewperguntaparteresposta vpr
										WHERE vpr.id_reposta = vwrcon.id_resposta AND
										vpr.id_quais = 0
										";
					if ($consulta == "0") {		
					$sqlResultadoprodutospedido = $sqlResultadoprodutospedido."GROUP BY id_resposta ORDER BY id_pergunta,id_resposta ASC";
					}
					if ($consulta == "01") {		
					$sqlResultadoprodutospedido = $sqlResultadoprodutospedido." AND vpr.id_parte = 1 GROUP BY id_resposta ORDER BY id_pergunta,id_resposta ASC ";
					}
					if ($consulta == "02") {		
					$sqlResultadoprodutospedido = $sqlResultadoprodutospedido."  AND vpr.id_parte = 2 GROUP BY id_resposta ORDER BY id_pergunta,id_resposta ASC ";
					}
					if ($consulta == "03") {		
					$sqlResultadoprodutospedido = $sqlResultadoprodutospedido." AND vpr.id_parte = 3 GROUP BY id_resposta ORDER BY id_pergunta,id_resposta ASC ";
					}

		$Resultadoprodutospedido = mysqli_query($conn,$sqlResultadoprodutospedido) or die("Erro: " . mysqli_error());
		$totalconsult = mysqli_num_rows($Resultadoprodutospedido);
		if ($totalconsult < 1) {
			?>
			<!-- total de resultados da consulta -->
			<!--=============================================================
			JS
			=============================================================-->
		<? } elseif ($totalconsult >= 1250) { ?>
			<div class="alert alert-block alert-error fade in">
				<? echo "FAVOR REFINAR A CONSULTA SOMENTE OS PRIMEIROS 1250 ITENS SÃO EXIBIDOS" ?>
			</div>
			<table class="table table-bordered">
				<tr>
					<td style="background-color: #049cdb; color: #FFFFFF;"><b>Parte</b></td>
					<td style="background-color: #049cdb; color: #FFFFFF;"><b>Pergunta</b></td>
					<td style="background-color: #049cdb; color: #FFFFFF;"><b>Nome</b></td>
					<td style="background-color: #049cdb; color: #FFFFFF;"><b>Marcações usuário</b>
					<td style="background-color: #049cdb; color: #FFFFFF;"><i class="icon-pencil icon-white"></i></td>
			</tr>
			<? } else { ?>
				<span class="badge badge-info"><? echo "Total: $totalconsult" ?></span>
				<table class="table table-bordered" >
					<tr>
					<td style="background-color: #049cdb; color: #FFFFFF;"><b>Parte</b></td>
					<td style="background-color: #049cdb; color: #FFFFFF;"><b>id_Pergunta</b></td>
					<td style="background-color: #049cdb; color: #FFFFFF;"><b>Pergunta</b></td>
					<td style="background-color: #049cdb; color: #FFFFFF;"><b>Nome</b></td>
					<td style="background-color: #049cdb; color: #FFFFFF;"><b>Marcações usuário</b>
					</tr>
				<? } ?>
<?
while ($array_exibir = mysqli_fetch_array($Resultadoprodutospedido)) {
$valprod = urlencode($array_exibir['id_pergunta'])
?><!-- Inicio da formação dos links para exibir a consulta -->
<tr>
	<td><?php echo utf8_encode($array_exibir['id_parte']) ?></td>
	<td><?php echo utf8_encode ($array_exibir['id_pergunta']) ?></td>
	<td><?php echo utf8_encode ($array_exibir['pergunta']) ?></td>
	<td><?php echo utf8_encode ($array_exibir['respostas']) ?> - <?php echo utf8_encode ($array_exibir['valores']) ?></td>
	<td><?php echo utf8_encode ($array_exibir['total']) ?></td>
</tr>
<?
$i++;
}
?>
</div>
	</div>
	</fieldset>
	<!--=============================================================
	BUSCA AJAX
	=============================================================-->
	<script	src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
	<!--=============================================================
		SCRIPT JQUEY VALIDATION
		=============================================================-->
	<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" />
	<link rel="stylesheet" href="css/template.css" type="text/css" />
	<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
	<script	src="js/languages/jquery.validationEngine-pt_BR.js"	type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
	<script	src="js/jsValidate.js" type="text/javascript"></script>
	<!--=============================================================
		SCRIPT JQUEY VALIDATION
		=============================================================-->
	<script>
		jQuery(document).ready(function () {  // binds form submission and fields to the validation engine
		jQuery("#form1").validationEngine();
		});
	</script>
	<script src="bootstrap/js/bootstrap-dropdown.js"></script>
	<script src="bootstrap/js/bootstrap-collapse.js"></script>
	</div>
	</div>
	<? //include "footer.php" ?>
</form>
