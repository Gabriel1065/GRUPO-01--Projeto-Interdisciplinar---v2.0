<h1 style="text-align:center">Marcar Consulta</h1>
<form action="?page=salvar-consulta" method="POST">
	<div class="form-group">
		<label><i class="fas fa-user-friends"></i> Cliente</label>
		<select name="agenda_cliente_id_cliente" class="form-control">
			<option>== Selecione um cliente ==</option>
		<?php
			$sql = "SELECT * FROM formulario";			
			$res = $conn->query($sql) or die($conn->error);			
			$qtd = $res->num_rows;			
			if($qtd > 0){				
				while($row = $res->fetch_object()){
					print "<option value='".$row->id_formulario."'>".$row->nome_formulario."</option>";
				}
			}else{
				print "Nenhum dado encontrado";
			}
		?>
		</select>
	</div>
	<div class="form-group">
		<label><i class="fas fa-calendar-alt"></i> Agenda</label>
		<select name="agenda_id_agenda" class="form-control">
			<option>== Agenda ==</option>
		<?php
			$sql = "SELECT * FROM agenda";			
			$res = $conn->query($sql) or die($conn->error);			
			$qtd = $res->num_rows;			
			if($qtd > 0){				
				while($row = $res->fetch_object()){
					print "<option value='".$row->id_agenda."'>".$row->id_agenda."</option>";
				}
			}else{
				print "Nenhum dado encontrado";
			}
		?>
		</select>
	</div>
	<div class="form-group">
		<label><i class="fas fa-book"></i> Assunto</label>
		<input type="text" name="assunto_consulta" class="form-control">
	</div>
	<div class="form-group">
		<label><i class="far fa-calendar-alt"></i> Dia</label>
		<input type="text" name="dia_consulta" class="form-control">
	</div>
	<div class="form-group">
		<label><i class="far fa-calendar-alt"></i> Mês</label>
		<input type="text" name="mes_consulta" class="form-control">
	</div>
		<div class="form-group">
		<label><i class="fas fa-clock"></i> Hora </label>
		<input type="text" name="hora_consulta" class="form-control form-control">
	</div>
	<div class="form-group">
		<input type="hidden" name="acao" value="cadastrar">
		<button type="submit" class="btn btn-success">
			Salvar
		</button>
	</div>
</form>