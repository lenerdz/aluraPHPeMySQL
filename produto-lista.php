<?php include("header.php");
include("banco-produto.php");

$produtos = listaProdutos($conexao);

if(array_key_exists("removido", $_GET) && $_GET["removido"]=="true") {
	echo '<p class="alert-success">Produto apagado com sucesso</p>';
}

echo '<table class="table table-striped table-bordered">';
foreach ($produtos as $produto) {
	echo '<tr>';
	echo '<td>' . $produto['nome'] . '</td>';
	echo '<td>' . $produto['preco'] . '</td>';
	echo '<td>' . substr($produto['descricao'], 0, 40) . '</td>';
	echo '<td>' . $produto['categoria_nome'] . '</td>';
	echo '<td><form action="remove-produto.php" method="post" accept-charset="utf-8"><input type="hidden" name="id" value="'.$produto['id'].'"><button class="btn btn-danger">Remover</button></form></td>';
	echo '</tr>';
}

include("footer.php"); ?>

