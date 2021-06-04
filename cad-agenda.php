<h1>Cadastrar Agenda</h1>
<form action="?page=salvar-agenda" method="POST">
	<div class="form-group">
		<label><i class="fas fa-user-tie"></i> Consultor</label>
		<select name="consultor_id_consultor" class="form-control">
			<option>== Selecione um consultor ==</option>
		<?php
			$sql = "SELECT * FROM consultor";			
			$res = $conn->query($sql) or die($conn->error);			
			$qtd = $res->num_rows;			
			if($qtd > 0){				
				while($row = $res->fetch_object()){
					print "<option value='".$row->id_consultor."'>".$row->nome_consultor."</option>";
				}
			}else{
				print "Nenhum dado encontrado";
			}
		?>
		</select>
	</div>
	<div class="form-group">
		<label><i class="fas fa-user-friends"></i> Cliente</label>
		<select name="cliente_id_cliente" class="form-control">
			<option>== Selecione um Cliente ==</option>
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
		<label><i class="far fa-calendar-alt"></i> Dia </label>
		<input type="text" name="dia_agenda" class="form-control" placeholder="Dia em numeral" maxlength="2">
	</div>
	<div class="form-group">
		<label><i class="far fa-calendar-alt"></i> Mês</label>
		<input type="text" name="mes_agenda" class="form-control" placeholder="Mês em numeral" maxlength="2">
	</div>
	<div class="form-group">
		<label><i class="fas fa-clock"></i> Hora</label>
		<input type="text" name="hora_agenda" class="form-control time-mask" placeholder="ex.: 00:00" maxlength="5">
	</div>
	<div class="form-group">
		<input type="hidden" name="acao" value="cadastrar">
		<button type="submit" class="btn btn-success">
			Salvar Agendamento
		</button>
	</div>
</form>