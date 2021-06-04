<h1>Listar Formulários</h1>
<?php
	$sql = "SELECT * FROM formulario AS f
		    INNER JOIN cliente AS c
			ON c.id_cliente = f.cliente_id_cliente";
	
	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultados</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Cliente</th>";
		print "<th>CPF</th>";
		print "<th>Data de Nascimento</th>";
		print "<th>Gênero</th>";
		print "<th>E-mail</th>";
		print "<th>Telefone(s)</th>";
		print "<th>Endereço</th>";
		print "<th>Ações</th>";
		print "</tr>";
		$count = 1;
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_formulario."</td>";
			print "<td>".$row->nome_formulario."</td>";
			print "<td>".$row->cpf_formulario."</td>";
			print "<td>".$row->data_nasc_formulario."</td>";
			print "<td>".$row->genero_formulario."</td>";
			print "<td>".$row->usuario_cliente."</td>";
			print "<td>".$row->telefone_formulario."</td>";
			print "<td>".$row->endereco_formulario."</td>";
			print "<td>
						<button class='btn btn-success' onclick=\"location.href='?page=editar-formulario&id_formulario=".$row->id_formulario."';\">Editar</button>
						
						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-formulario&acao=excluir&id_formulario=".$row->id_formulario."';}else{false;}\">Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Nenhum dado encontrado";
	}
?>