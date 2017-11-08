<?php include("header.php"); 
include("banco-categoria.php"); 
$categorias = listaCategorias($conexao);
?>
<h1>Formulário de produto</h1>
<form action="adiciona-produto.php" method="post">
	<div class="form-group">
		<label for="nome">Nome:</label>
		<input type="text" class="form-control" id="nome"  placeholder="Nome do produto" name="nome">
	</div>
	<div class="form-group">
		<label for="preco">Preço:</label>
		<div class="input-group">
    		<div class="input-group-addon">$</div>
			<input type="number" class="form-control" id="preco" placeholder="Preço" name="preco">
		</div>
	</div>
	<label for="categoria">Categoria:</label>
	<div class="custom-controls-stacked" id="categoria">
		<?php foreach ($categorias as $categoria) :?>
		<label class="custom-control custom-radio">
			<input name="categoria" type="radio" class="custom-control-input" value="<?=$categoria['id']?>">
			<span class="custom-control-indicator"></span>
			<span class="custom-control-description"><?=$categoria['nome']?></span>
		</label>
	<?php endforeach;?>
	</div>
	<div class="form-group">
		<label for="descricao">Descrição:</label>
		<textarea class="form-control" id="descricao" name="descricao"></textarea>
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php include("footer.php"); ?>