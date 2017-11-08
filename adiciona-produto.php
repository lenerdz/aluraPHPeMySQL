<?php include("header.php");
	function insereProduto($conexao, $nome, $preco){
		$query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
		return mysqli_query($conexao, $query);
	}

	$nome = $_GET['nome'];
	$preco = $_GET['preco'];
	$conexao = mysqli_connect('localhost', 'root', 'vertrigo', 'loja');


	
	if(insereProduto($conexao, $nome, $preco)) {
		?><p class="text-success">Produto <?= $nome;?> adicionado com sucesso!</p><?php
	} else {
		?><p class="text-danger">Produto <?= $nome;?> não adicionado!</p><?php 
	}

	//mysqli_close($conexao);		//OPCIONAL
	
	include("footer.php");
?>