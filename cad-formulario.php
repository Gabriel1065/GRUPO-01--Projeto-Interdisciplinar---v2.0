<h1 style="text-align:center">Cadastrar Formulário do Cliente</h1>
<form action="?page=salvar-formulario" method="POST">
	<div class="form-group">
		<label><i class="fas fa-user-friends"></i> Cliente</label>
		<select name="cliente_id_cliente" class="form-control">
			<option>== Selecione um Cliente==</option>
		<?php
			$sql = "SELECT * FROM cliente";			
			$res = $conn->query($sql) or die($conn->error);			
			$qtd = $res->num_rows;			
			if($qtd > 0){				
				while($row = $res->fetch_object()){
					print "<option value='".$row->id_cliente."'>".$row->usuario_cliente."</option>";
				}
			}else{
				print "Nenhum dado encontrado";
			}
		?>
		</select>
	</div>
	<div class="form-group">
		<label><i class="fas fa-signature"></i> Nome</label>
		<input type="text" name="nome_formulario"  class="form-control">
	</div>
	<div class="form-group">
		<label><i class="fas fa-id-card"></i> CPF</label>
		<input type="text" name="cpf_formulario" placeholder="999.999.999-99" class="form-control" maxlength="14">
	</div>
	<div class="form-group">
		<label><i class="fas fa-birthday-cake"></i> Data de Nascimento</label>
		<input type="date" name="data_nasc_formulario" class="form-control" placeholder="dd/mm/aaaa" data-mask="00/00/00" maxlength="10">
	</div>
	<div class="form-group">
		<label><i class="fas fa-venus-mars"></i> Gênero</label>
		<input type="text" name="genero_formulario" placeholder="M (Masculino), F (Feminino) ou P (Prefiro não dizer)" class="form-control" maxlength="3">
	</div>
	<div class="form-group">
		<label><i class="fas fa-phone"></i> Telefone</label>
		<input type="text" name="telefone_formulario"  placeholder="ex.: (99) 9 9999-9999" class="form-control" maxlength="15">
	</div>
	<div class="form-group">
		<label><i class="fas fa-home"></i> Endereço completo</label>
		<input type="text" name="endereco_formulario"  class="form-control">
	</div>
	<div class="form-group">
		<input type="hidden" name="acao" value="cadastrar">
		<button type="submit" class="btn btn-success">Salvar</button>
	</div>
</form>