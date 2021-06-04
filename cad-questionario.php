<h1>Cadastrar Questionário</h1>
<table class='table'>
	<tr>
	<th><p style="text-align:center;">O Consultor terá que indicar o tema específico para o cliente específico, exemplo Depressão. Seguindo, indique quantas questões o questionário terá.</p></th></tr></tr>
</table>
<form action="?page=salvar-questionario" method="POST">
	<div class="form-group">
		<label><i class="fas fa-pencil-alt"></i> Tema do Questionário</label>
		<input type="text" name="tema_questionario" class="form-control">
	</div>
	<div class="form-group">
	<label><i class="fas fa-list-ol"></i> Número de Questões </label>
		<input type="text" name="n_questoes_questionario" class="form-control" placeholder="de 1 a 10 Questões" maxlength="2">
	</div>
	<div class="form-group">
		<input type="hidden" name="acao" value="cadastrar">
		<button type="submit" class="btn btn-success">
			Salvar Questionário
		</button>
	</div>
</form>