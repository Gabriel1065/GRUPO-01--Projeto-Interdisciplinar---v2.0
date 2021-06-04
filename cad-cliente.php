<h1>Cadastrar cliente</h1>
<table class='table'>
	<tr>
	<th> <p style="text-align: center;">Insira o email do cliente para fazer um pré-cadastro.</p></th></tr></tr>
</table>
<form action="?page=salvar-cliente" method="POST">
	<div class="form-group">
		<label><i class="fas fa-user-friends"></i> Pré-Cadastro do Cliente</label>
		<input type="text" name="usuario_cliente" placeholder="Email do cliente. Ex.: exemplo123@gmail.com" class="form-control">
	</div>
	<div class="form-group">
		<input type="hidden" name="acao" value="cadastrar">
		<button type="submit" class="btn btn-success">
			Salvar Cliente
		</button>
	</div>
</form>