<?php 
include("conecta.php");
function listaCategorias($conexao) {
	$categorias = array();
	$resultado = mysqli_query($conexao, "SELECT * FROM categorias");
	while($categoria = mysqli_fetch_assoc($resultado)){
		array_push($categorias, $categoria);
	}
	return $categorias;
}

function insereCategoria($conexao, $nome){
	$query = "INSERT INTO categorias (nome) VALUES ('{$nome}')";
	return mysqli_query($conexao, $query);
}

function removeCategoria($conexao, $id) {
	$query = "DELETE FROM categorias WHERE id = {$id}";
	return mysqli_query($conexao, $query);
}
?>