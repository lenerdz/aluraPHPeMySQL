<?php include("header.php") ?>
<h1>Formulário de produto</h1>
<form action="adiciona-produto.php">
	<div class="form-group">
		<label for="nome">Nome:</label>
		<input type="text" class="form-control" id="nome"  placeholder="Nome do produto" name="nome">
	</div>
	<div class="form-group">
		<label for="preco">Preço:</label>
		<input type="number" class="form-control" id="preco" placeholder="Preço" name="preco">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php include("footer.php") ?>