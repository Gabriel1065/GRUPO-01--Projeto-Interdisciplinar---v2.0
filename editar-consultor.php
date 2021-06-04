<h1>Editar Consultores</h1>
<?php
	$sql = "SELECT * FROM consultor WHERE id_consultor=".$_REQUEST["id_consultor"];
	
	$res = $conn->query($sql);
	
	$row = $res->fetch_object();
?>
<form action="?page=salvar-consultor" method="POST">
	<div class="form-group">
		<label><i class="fas fa-id-card"></i> RG</label>
		<input type="number" name="rg_consultor" placeholder="RG" class="form-control" value="<?php print $row->rg_consultor; ?>">
	</div>
	<div class="form-group">
		<label><i class="fas fa-id-card"></i> CPF</label>
		<input type="number" name="cpf_consultor" placeholder="CPF" class="form-control" value="<?php print $row->cpf_consultor; ?>">
	</div>
	<div class="form-group">
		<label><i class="fas fa-signature"></i> Nome Completo</label>
		<input type="text" name="nome_consultor" placeholder="Nome do consultor" class="form-control" value="<?php print $row->nome_consultor; ?>">
	</div>
	<div class="form-group">
		<label><i class="fas fa-home"></i> Endereço</label>
		<input type="text" name="endereco_consultor" placeholder="Endereço" class="form-control" value="<?php print $row->endereco_consultor; ?>">
	</div>
	<div class="form-group">
		<label><i class="fas fa-at"></i> Email</label>
		<input type="text" name="email_consultor" placeholder="E-mail" class="form-control" value="<?php print $row->email_consultor; ?>">
	</div>
	<div class="form-group">
		<label><i class="fas fa-phone"></i> Telefone</label>
		<input type="number" name="telefone_consultor" placeholder="Telefone" class="form-control" value="<?php print $row->telefone_consultor; ?>">
	</div>

	<div class="form-group">
		<input type="hidden" name="acao" value="editar">
		<input type="hidden" name="id_consultor" value="<?php print $row->id_consultor; ?>">
		<button type="submit" class="btn btn-success">
			Salvar
		</button>
	</div>
</form>