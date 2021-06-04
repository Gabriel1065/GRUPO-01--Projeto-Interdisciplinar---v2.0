<h1>Cadastrar Consultor</h1>
<form action="?page=salvar-consultor" method="POST">
	<div class="form-group">
		<label><i class="fas fa-id-card"></i> RG</label>
		<div class="form-group">
		<input type="text" name="rg_consultor" class="form-control" maxlength="10">
	</div>
	<div class="form-group">
		<label><i class="fas fa-id-card"></i> CPF</label>
		<input type="text" name="cpf_consultor" placeholder="999.999.999-99" class="form-control" maxlength="11">
	</div>
	<div class="form-group">
		<label><i class="fas fa-signature"></i> Nome Completo</label>
		<input type="text" name="nome_consultor" class="form-control">
	</div>
	<div class="form-group">
		<label><i class="fas fa-home"></i> Endereço</label>
		<input type="text" name="endereco_consultor" class="form-control">
	</div>
	<div class="form-group">
		<label><i class="fas fa-at"></i> Email</label>
		<input type="text" name="email_consultor" placeholder="joao99@gmail.com" class="form-control">
	</div>
	<div class="form-group">
		<label><i class="fas fa-phone"></i> Telefone</label>
		<input type="text" name="telefone_consultor" placeholder="ex.: (99) 99999-9999" class="form-control" maxlength="11">
	</div>
	<div class="form-group">
		<input type="hidden" name="acao" value="cadastrar">
		<button type="submit" class="btn btn-success">
			Cadastrar
		</button>
	</div>
</form>