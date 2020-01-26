<h1>Cadastrar Produto</h1>
<form action="?page=salvar-produto" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group">
		<label>Nome do Produto:</label>
		<input type="text" name="descricao" class="form-control">
		<label>Preço do Produto:</label>
		<input type="text" name="valor" class="form-control"> 
		<label>Quantidade</label>
		<input type="number" name="quantidade" class="form-control">
		<label>Categoria do produto</label>
		<select name="categoria" id="categoria">
			<option value="1">Higiene</option>
			<option value="2">Bebida</option>
			<option value="3">Doces</option>
			<option value="4">Limpeza</option>
			<option value="5">Laticínios</option>
			<option value="6">Congelados</option>
			<option value="7">Hortifruti</option>
			<option value="9">Massas</option>
		</select>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success">Cadastrar</button>
	</div>
</form>
<style>
	label{
		margin-left:20px;
	}
	input{
		max-width: 50%;
		margin-left: 20px;
	}
</style>
