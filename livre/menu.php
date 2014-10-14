<? include "header.php"; ?>
<? session_start(); ?>
<?
	include "../conexao.php";
    $date = date("d/m/y");
    $hora= gmdate("H:i" ,time()-(3570*2));
?>
</br>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span4">
			<div class="well sidebar-nav">
				<ul class="nav nav-list">
					<li class="active" id="0">
					<a target="principal" href="corpo_do_sistema.php"  ><i class="icon-th-list"></i>Home</a>
					</li>
					<li><a target="principal" href="criteriosbusca.php" id="2"><i class="icon-plus-sign"></i>Busca refinada</a>
					</li>
					<!--<li><a target="principal" href="listagemperguntas.php" id="1"><i class="icon-plus-sign"></i>Quantidade respostas por pergunta</a>-->

				</ul>
			</div>
		</div>
</div>
</div>
