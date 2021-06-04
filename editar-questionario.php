<h1>Editar Questionário</h1>
<?php
	$sql = "SELECT * FROM questionario WHERE id_questionario=".$_REQUEST["id_questionario"];
	
	$res = $conn->query($sql);
	
	$row = $res->fetch_object();
?>
<form action="?page=salvar-questionario" method="POST">
	<div class="form-group">
		<label><i class="fas fa-pencil-alt"></i> Tema Questionário</label>
		<input type="text" name="tema_questionario" value="<?php print $row->tema_questionario; ?>" class="form-control">
	</div>
	<div class="form-group">
	<label><i class="fas fa-list-ol"></i> Número de Questões</label>
		<input type="number" name="n_questoes_questionario" value="<?php print $row->n_questoes_questionario; ?>"  class="form-control" placeholder="de 1 a 10 Questões" maxlength="2">
	</div>
	<div class="form-group">
		<input type="hidden" name="acao" value="editar">
		<input type="hidden" name="id_questionario" value="<?php print $row->id_questionario; ?>">
		<button type="submit" class="btn btn-success">Salvar</button>
	</div>
</form>