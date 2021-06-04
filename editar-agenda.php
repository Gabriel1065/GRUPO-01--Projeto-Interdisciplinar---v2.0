<h1>Editar Agenda</h1>
<?php
	$sql = "SELECT * FROM agenda WHERE id_agenda=".$_REQUEST["id_agenda"];
	
	$res = $conn->query($sql);
	
	$row = $res->fetch_object();
?>
<form action="?page=salvar-agenda" method="POST">
	<div class="form-group">
		<label><i class="fas fa-user-tie"></i> Consultor</label>
		<select name="consultor_id_consultor" class="form-control">
			<option>== Selecione um Consultor ==</option>
		<?php
			$sql_2 = "SELECT * FROM consultor";
			$res_2 = $conn->query($sql_2) or die($conn->error);		
			$qtd_2 = $res_2->num_rows;			
			if($qtd_2 > 0){				
				while($row_2 = $res_2->fetch_object()){
					if($row_2->id_consultor == $row->consultor_id_consultor){
						print "<option value='".$row_2->id_consultor."' selected>".$row_2->nome_consultor."</option>";
					}else{
						print "<option value='".$row_2->id_consultor."'>".$row_2->nome_consultor."</option>";
					}
				}
			}else{
				print "Nenhum dado encontrado";
			}
		?>
		</select>
	</div>
	<div class="form-group">
		<label><i class="fas fa-user-friends"></i> Cliente</label>
		<select name="cliente_id_client" class="form-control">
			<option>== Selecione um Cliente ==</option>
		<?php
			$sql_2 = "SELECT * FROM cliente";			
			$res_2 = $conn->query($sql_2) or die($conn->error);		
			$qtd_2 = $res_2->num_rows;			
			if($qtd_2 > 0){				
				while($row_2 = $res_2->fetch_object()){
					if($row_2->id_cliente == $row->cliente_id_cliente){
						print "<option value='".$row_2->id_cliente."' selected>".$row_2->usuario_cliente."</option>";
					}else{
						print "<option value='".$row_2->id_cliente."'>".$row_2->usuario_cliente."</option>";
					}
				}
			}else{
				print "Nenhum dado encontrado";
			}
		?>
		</select>
	</div>
	<div class="form-group">
		<label><i class="far fa-calendar-alt"></i> Dia</label>
		<input type="number" name="dia_agenda" value="<?php print $row->dia_agenda; ?>" class="form-control">
	</div>
	<div class="form-group">
		<label><i class="far fa-calendar-alt"></i> Mês</label>
		<input type="text" name="mes_agenda" value="<?php print $row->mes_agenda; ?>"  class="form-control">
	</div>
	<div class="form-group">
		<label><i class="fas fa-clock"></i> Hora</label>
		<input type="text" name="hora_agenda" value="<?php print $row->hora_agenda; ?>"  class="form-control">
	</div>
	<div class="form-group">
		<input type="hidden" name="acao" value="editar">
		<input type="hidden" name="id_agenda" value="<?php print $row->id_agenda; ?>">
		<button type="submit" class="btn btn-success">
			Salvar
		</button>
	</div>
</form>