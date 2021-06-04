<h1>Listar Consultores</h1>
<?php
	$sql = "SELECT * FROM consultor";
	
	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultados</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome do Consultor</th>";
		print "<th>CPF</th>";
		print "<th>RG</th>";
		print "<th>Endereço</th>";
		print "<th>Telefone</th>";
		print "<th>E-mail</th>";
		print "<th>Usuário</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_consultor."</td>";
			print "<td>".$row->nome_consultor."</td>";
			print "<td>".$row->cpf_consultor."</td>";
			print "<td>".$row->rg_consultor."</td>";
			print "<td>".$row->endereco_consultor."</td>";
			print "<td>".$row->telefone_consultor."</td>";
			print "<td>".$row->email_consultor."</td>";
			print "<td>".$row->usuario_consultor."</td>";
			print "<td>
						<button class='btn btn-success' onclick=\"location.href='?page=editar-consultor&id_consultor=".$row->id_consultor."';\">Editar</button>
						
						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-consultor&acao=excluir&id_consultor=".$row->id_consultor."';}else{false;}\">Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Nenhum dado encontrado";
	}
?>






