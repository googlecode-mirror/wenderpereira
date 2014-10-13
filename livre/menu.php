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
					<li class="active" id="0"><a href="inicial.php"><i class="icon-th-list"></i>Instru&ccedil;&otilde;es</a>
					</li>
					<li><a href="listagemperguntas.php" id="1"><i class="icon-plus-sign"></i>Quantidade respostas por pergunta</a>
					</li>
					<li><a href="verificamenu.php?m=0" id="2"><i class="icon-plus-sign"></i>Identifica&ccedil;&atilde;o da institui&ccedil;&atilde;o </a>
					</li>
					<li><a href="verificamenu.php?m=1" id="3"><i class="icon-plus-sign"></i>Programas</a>
					</li>
					<li><a href="verificamenu.php?m=2" id="4"><i class="icon-plus-sign"></i>Artistas</a>
					</li>
					<li><a href="verificamenu.php?m=3" id="50"><i class="icon-plus-sign"></i>Projetos</a>
					</li>
					<li><a href="logout.php"><i class="icon-remove"></i>Sair</a>
					</li>
				</ul>
			</div>
		</div>
</div>
</div>
