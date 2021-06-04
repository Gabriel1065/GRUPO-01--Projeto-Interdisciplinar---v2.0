<h1>Editar Consulta</h1>
<?php
	$sql = "SELECT * FROM consulta WHERE id_consulta=".$_REQUEST["id_consulta"];
	
	$res = $conn->query($sql);
	
	$row = $res->fetch_object();
?>
<form action="?page=salvar-consulta" method="POST">
	<div class="form-group">
		<label><i class="fas fa-user-friends"></i> Cliente</label>
		<select name="agenda_cliente_id_cliente" class="form-control">
			<option>== Selecione uma Categoria ==</option>
		<?php
			$sql_2 = "SELECT * FROM cliente";			
			$res_2 = $conn->query($sql_2) or die($conn->error);		
			$qtd_2 = $res_2->num_rows;			
			if($qtd_2 > 0){				
				while($row_2 = $res_2->fetch_object()){
					if($row_2->id_cliente == $row->agenda_cliente_id_cliente){
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
		<label><i class="fas fa-calendar-alt"></i> Agenda</label>
		<select name="agenda_id_agenda" class="form-control">
			<option>== Agenda ==</option>
		<?php
			$sql_2 = "SELECT * FROM agenda";			
			$res_2 = $conn->query($sql_2) or die($conn->error);		
			$qtd_2 = $res_2->num_rows;			
			if($qtd_2 > 0){				
				while($row_2 = $res_2->fetch_object()){
					if($row_2->id_agenda == $row->agenda_id_agenda){
						print "<option value='".$row_2->id_agenda."' selected>".$row_2->id_agenda."</option>";
					}else{
						print "<option value='".$row_2->id_agenda."'>".$row_2->id_agenda."</option>";
					}
				}
			}else{
				print "Nenhum dado encontrado";
			}
		?>
		</select>
	</div>
	<div class="form-group">
		<label><i class="fas fa-book"></i> Assunto</label>
		<input type="text" name="assunto_consulta" value="<?php print $row->assunto_consulta; ?>" class="form-control">
	</div>
	<div class="form-group">
	<label><i class="far fa-calendar-alt"></i> Dia</label>
		<input type="text" name="dia_consulta" value="<?php print $row->dia_consulta; ?>"  class="form-control">
	</div>
	<div class="form-group">
		<label><i class="far fa-calendar-alt"></i> Mês</label>
		<input type="text" name="mes_consulta" value="<?php print $row->mes_consulta; ?>"  class="form-control">
	</div>
	<div class="form-group">
		<label><i class="fas fa-clock"></i> Hora</label>
		<input type="text" name="hora_consulta" value="<?php print $row->hora_consulta; ?>" class="form-control">
	</div>
	<div class="form-group">
		<input type="hidden" name="acao" value="editar">
		<input type="hidden" name="id_consulta" value="<?php print $row->id_consulta ?>">
		<button type="submit" class="btn btn-success">
			Salvar
		</button>
	</div>
</form>