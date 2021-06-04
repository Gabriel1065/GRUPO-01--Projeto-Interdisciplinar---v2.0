<h1>Listar Filmes</h1>
<?php
	$sql = "SELECT * FROM filme AS f
		    INNER JOIN categoria AS c
			ON c.id_categoria = f.categoria_id_categoria";
	
	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultados</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Categoria</th>";
		print "<th>Nome do Filme</th>";
		print "<th>Ano Filme</th>";
		print "<th>Diretor</th>";
		print "<th>Duração</th>";
		print "<th>Ações</th>";
		print "</tr>";
		$count = 1;
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_filme."</td>";
			print "<td>".$row->genero_categoria."</td>";
			print "<td>".$row->nome_filme."</td>";
			print "<td>".$row->ano_filme."</td>";
			print "<td>".$row->diretor_filme."</td>";
			print "<td>".$row->duracao_filme."</td>";
			print "<td>
						<button class='btn btn-success' onclick=\"location.href='?page=editar-filme&id_filme=".$row->id_filme."';\">Editar</button>
						
						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-filme&acao=excluir&id_filme=".$row->id_filme."';}else{false;}\">Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Nenhum dado encontrado";
	}
?>






