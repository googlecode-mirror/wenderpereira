<? include "header.php"; ?>
<? session_start(); ?>
<?
	include "../conexao.php";
    $date = date("d/m/y");
    $hora= gmdate("H:i" ,time()-(3570*2));
?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span5">
			<div class="well sidebar-nav">
				<ul class="nav nav-list">
					<li class="active" id="0">
					<a target="principal" href="index.php"  ><i class="icon-th-list"></i>Instru&ccedil;&otilde;es</a>
					</li>
					<li><a target="principal" href="criteriosbusca.php" id="2"><i class="icon-plus-sign"></i>Busca refinada</a>
					</li>
					<li><a target="principal" href="listagemperguntas.php" id="1"><i class="icon-plus-sign"></i>Quantidade respostas por pergunta</a>
					</li>
					<li><a href="logout.php"><i class="icon-remove"></i>Sair</a>
					</li>
				</ul>
			</div>
		</div>
</div>
</div>
