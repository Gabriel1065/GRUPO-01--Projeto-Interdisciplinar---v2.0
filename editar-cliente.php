<h1>Editar Cliente</h1>
<?php
	$sql = "SELECT * FROM cliente WHERE id_cliente=".$_REQUEST["id_cliente"];
	
	$res = $conn->query($sql);
	
	$row = $res->fetch_object();
?>
<form action="?page=salvar-cliente" method="POST">
	<div class="form-group">
		<label><i class="fas fa-user-friends"></i> Cliente</label>
		<input type="text" name="usuario_cliente" placeholder="Usuário" class="form-control" value="<?php print $row->usuario_cliente; ?>">
	</div>
	<div class="form-group">
		<input type="hidden" name="acao" value="editar">
		<input type="hidden" name="id_cliente" value="<?php print $row->id_cliente; ?>">
		<button type="submit" class="btn btn-success">
			Salvar
		</button>
	</div>
</form>