<?php include("header.php");
	include("banco-produto.php");

	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];
	$categoria = $_POST['categoria'];


	
	if(insereProduto($conexao, $nome, $preco, $descricao, $categoria)) {
		?><p class="text-success">Produto <?= $nome;?> adicionado com sucesso!</p><?php
	} else {
		$msg = mysqli_error($conexao);
		?><p class="text-danger">Produto <?= $nome;?> não adicionado: <?= $msg ?></p><?php 
	}

	//mysqli_close($conexao);		//OPCIONAL
	
	include("footer.php");
?>